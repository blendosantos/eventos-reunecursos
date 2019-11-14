<?php

namespace App\Http\Controllers;

use App\DetalheEvento;
use App\Evento;
use App\EventoPalestrante;
use App\Midia;
use App\Palestrante;
use App\Participante;
use App\PlanoEvento;
use Illuminate\Http\Request;
use PDOException;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::with('planos')->with('banner')->where('status', '<>', 0)->orderBy('status', 'asc')->orderBy('dt_inicial', 'asc')->get();
        //return $eventos;
        return view("events.index", compact('eventos'));
    }

    public function listaAdmin()
    {
        $eventos = Evento::with('planos')->with('banner')->orderBy('status', 'asc')->orderBy('dt_inicial', 'asc')->get();
        //return $eventos;
        return view("events.lista", compact('eventos'));
    }

    public function cadastroAdmin()
    {
        return view("events.cadastro");
    }

    public function postCadastroAdmin(Request $request)
    {
        $slug = $this->slugify($request->titulo);
        $eventoSlug = Evento::where('slug', $slug)->get();
        if($eventoSlug) {
            $slug . rand(111, 999);
        }

        $file = $request->file('imagem_destaque');
        $extension = $file->getClientOriginalExtension();
        $filename = rand(11111, 99999) . '.' . $extension;
        $file->storeAs('uploads', $filename);
        $midia = new Midia();
        $midia->path = 'storage/uploads/' . $filename;
        $midia->descricao = "Imagem de Destaque";
        $midia->nm_original = $file->getClientOriginalName();
        $midia->extensao = $extension;
        $midia->save();

        $evento = new Evento();
        $evento->titulo = $request->titulo;
        $evento->sub_titulo = $request->sub_titulo;
        $evento->local = $request->local;
        $evento->endereco = $request->endereco;
        $evento->ds_local = $request->ds_local;
        $evento->descricao = $request->descricao;
        $evento->link_geolocalizacao = $request->link_geolocalizacao;
        $evento->url_video = $request->url_video;
        $evento->dt_inicial = $request->dt_inicial;
        $evento->dt_final = $request->dt_final;
        $evento->carga_horaria = $request->carga_horaria;
        $evento->publico_alvo = $request->publico_alvo;
        $evento->idImagemDestaque = $midia->id;
        $evento->slug = $slug;

        $fileBanner = $request->file('banner');
        if ($fileBanner) {
            $extension = $fileBanner->getClientOriginalExtension();
            $filename = rand(11111, 99999) . '.' . $extension;
            $fileBanner->storeAs('uploads', $filename);
            $midiaBanner = new Midia();
            $midiaBanner->path = 'storage/uploads/' . $filename;
            $midiaBanner->descricao = "Banner Curso";
            $midiaBanner->nm_original = $fileBanner->getClientOriginalName();
            $midiaBanner->extensao = $extension;
            $midiaBanner->save();
            $evento->idBanner = $midiaBanner->id;
        }
        $evento->save();
        return redirect('admin/edit/' . $evento->id);
    }

    public function editAdmin($idEvento)
    {
        $listaPalestrantes = Palestrante::all();
        $evento = Evento::with('programacao')->with('planos')->with('palestrantes')->with('destaque')->with('banner')->find($idEvento);
        return view("events.cadastro", compact('evento', 'listaPalestrantes'));
    }

    public function postEditAdmin($idEvento, Request $request)
    {
        $evento = Evento::find($idEvento);
        if ($evento) {

            $evento->titulo = $request->titulo;
            $evento->sub_titulo = $request->sub_titulo;
            $evento->local = $request->local;
            $evento->endereco = $request->endereco;
            $evento->ds_local = $request->ds_local;
            $evento->descricao = $request->descricao;
            $evento->link_geolocalizacao = $request->link_geolocalizacao;
            $evento->url_video = $request->url_video;
            $evento->dt_inicial = $request->dt_inicial;
            $evento->dt_final = $request->dt_final;
            $evento->carga_horaria = $request->carga_horaria;
            $evento->publico_alvo = $request->publico_alvo;

            $file = $request->file('imagem_destaque');
            if ($file) {
                $extension = $file->getClientOriginalExtension();
                $filename = rand(11111, 99999) . '.' . $extension;
                $file->storeAs('uploads', $filename);
                $midia = new Midia();
                $midia->path = 'storage/uploads/' . $filename;
                $midia->descricao = "Imagem de Destaque";
                $midia->nm_original = $file->getClientOriginalName();
                $midia->extensao = $extension;
                $midia->save();
                $evento->idImagemDestaque = $midia->id;
            }

            $slug = $this->slugify($request->titulo);
            $eventoSlug = Evento::where('slug', $slug)->get();
            if($eventoSlug) {
                $slug . rand(111, 999);
                $evento->slug = $this->slugify($request->titulo);
            }

            $fileBanner = $request->file('banner');
            if ($fileBanner) {
                $extension = $fileBanner->getClientOriginalExtension();
                $filename = rand(11111, 99999) . '.' . $extension;
                $fileBanner->storeAs('uploads', $filename);
                $midiaBanner = new Midia();
                $midiaBanner->path = 'storage/uploads/' . $filename;
                $midiaBanner->descricao = "Banner Curso";
                $midiaBanner->nm_original = $fileBanner->getClientOriginalName();
                $midiaBanner->extensao = $extension;
                $midiaBanner->save();
                $evento->idBanner = $midiaBanner->id;
            }
            $evento->save();
            return redirect('admin/edit/' . $evento->id);
        }

        return redirect('admin/lista');
    }

    public function postPlanoCurso($idEvento, Request $request) {
        $plano = new PlanoEvento();
        $plano->idEvento = $idEvento;
        $plano->titulo = $request->titulo;
        $plano->valor = $request->valor;
        $plano->item1 = $request->item1;
        $plano->item2 = $request->item2;
        $plano->item3 = $request->item3;
        $plano->tempo = $request->tempo;
        $plano->save();
        return redirect('admin/edit/' . $idEvento);
    }

    public function editPlanoCurso($id) {
        $plano = PlanoEvento::find($id);
        return view('events.editPlano', compact('plano'));
    }

    public function postEditPlanoCurso($id, Request $request) {
        $plano = PlanoEvento::find($id);
        $plano->titulo = $request->titulo;
        $plano->valor = $request->valor;
        $plano->item1 = $request->item1;
        $plano->item2 = $request->item2;
        $plano->item3 = $request->item3;
        $plano->tempo = $request->tempo;
        $plano->save();
        return redirect('admin/edit/' . $plano->idEvento);
    }

    public function deletePlanoCurso($id) {
        $plano = PlanoEvento::find($id);
        $idEvento = $plano->idEvento;
        $plano->delete();
        return redirect('admin/edit/' . $idEvento);
    }

    public function active($idEvento)
    {
        $evento = Evento::find($idEvento);
        $evento->status = 1;
        $evento->save();
        return redirect('admin/lista');
    }

    public function inactive($idEvento)
    {
        $evento = Evento::find($idEvento);
        $evento->status = 3;
        $evento->save();
        return redirect('admin/lista');
    }

    public function delete($idEvento)
    {
        $evento = Evento::find($idEvento);
        $evento->delete();
        return redirect('admin/lista');
    }

    public function postDetalheCurso($idEvento, Request $request)
    {
        $evento = Evento::find($idEvento);

        if ($evento) {
            $detalhe = new DetalheEvento();
            $detalhe->idEvento = $evento->id;
            $detalhe->titulo = $request->titulo;
            $detalhe->sub_titulo = $request->sub_titulo;
            $detalhe->hora = $request->hora;

            $fileBanner = $request->file('banner');
            if ($fileBanner) {
                $extension = $fileBanner->getClientOriginalExtension();
                $filename = rand(11111, 99999) . '.' . $extension;
                $fileBanner->storeAs('uploads', $filename);
                $midiaBanner = new Midia();
                $midiaBanner->path = 'storage/uploads/' . $filename;
                $midiaBanner->descricao = "Banner Programação";
                $midiaBanner->nm_original = $fileBanner->getClientOriginalName();
                $midiaBanner->extensao = $extension;
                $midiaBanner->save();
                $detalhe->idBanner = $midiaBanner->id;
            }

            $detalhe->save();
        }

        return redirect('admin/edit/' . $idEvento);
    }

    public function getEditProgramacao($idProgramacao)
    {
        $programacao = DetalheEvento::find($idProgramacao);

        if ($programacao) {
            return view('events.editProgramacao', compact('programacao'));
        }
        return redirect('admin/lista');
    }

    public function postEditProgramacao($idProgramacao, Request $request)
    {
        $programacao = DetalheEvento::find($idProgramacao);

        if ($programacao) {
            $programacao->titulo = $request->titulo;
            $programacao->sub_titulo = $request->sub_titulo;
            $programacao->hora = $request->hora;

            $fileBanner = $request->file('banner');
            if ($fileBanner) {
                $extension = $fileBanner->getClientOriginalExtension();
                $filename = rand(11111, 99999) . '.' . $extension;
                $fileBanner->storeAs('uploads', $filename);
                $midiaBanner = new Midia();
                $midiaBanner->path = 'storage/uploads/' . $filename;
                $midiaBanner->descricao = "Banner Programação";
                $midiaBanner->nm_original = $fileBanner->getClientOriginalName();
                $midiaBanner->extensao = $extension;
                $midiaBanner->save();
                $programacao->idBanner = $midiaBanner->id;
            }
            $programacao->save();
            return redirect('admin/edit/' . $programacao->idEvento);
        }
    }

    public function getPalestranteCurso($idEvento, Request $request) {
        return view('events.forms.formPalestrante', compact('idEvento'));
    }

    public function postPalestranteCurso($idEvento, Request $request)
    {
        $evento = Evento::find($idEvento);

        if ($evento) {
            $palestrante = new Palestrante();
            $palestrante->nome = $request->nome;
            $palestrante->email = $request->email;
            $palestrante->especificacao = $request->especificacao;
            $palestrante->facebook = $request->facebook;
            $palestrante->linkedin = $request->linkedin;
            $palestrante->twitter = $request->twitter;
            $palestrante->instagram = $request->instagram;

            $fileBanner = $request->file('foto');
            if ($fileBanner) {
                $extension = $fileBanner->getClientOriginalExtension();
                $filename = rand(11111, 99999) . '.' . $extension;
                $fileBanner->storeAs('uploads', $filename);
                $midiaBanner = new Midia();
                $midiaBanner->path = 'storage/uploads/' . $filename;
                $midiaBanner->descricao = "Foto Palestrante";
                $midiaBanner->nm_original = $fileBanner->getClientOriginalName();
                $midiaBanner->extensao = $extension;
                $midiaBanner->save();
                $palestrante->idFoto = $midiaBanner->id;
            }

            if ($palestrante->save()) {
                $cursoPalestrante = new EventoPalestrante();
                $cursoPalestrante->idEvento = $evento->id;
                $cursoPalestrante->idPalestrante = $palestrante->id;
                $cursoPalestrante->save();
            }
        }
        return redirect('admin/edit/' . $idEvento);
    }

    public function postEditPalestrante($idPalestrante, $idEvento, Request $request)
    {
        $palestrante = Palestrante::find($idPalestrante);
        $palestrante->nome = $request->nome;
        $palestrante->email = $request->email;
        $palestrante->especificacao = $request->especificacao;
        $palestrante->facebook = $request->facebook;
        $palestrante->linkedin = $request->linkedin;
        $palestrante->twitter = $request->twitter;
        $palestrante->instagram = $request->instagram;

        $fileBanner = $request->file('foto');
        if ($fileBanner) {
            $extension = $fileBanner->getClientOriginalExtension();
            $filename = rand(11111, 99999) . '.' . $extension;
            $fileBanner->storeAs('uploads', $filename);
            $midiaBanner = new Midia();
            $midiaBanner->path = 'storage/uploads/' . $filename;
            $midiaBanner->descricao = "Foto Palestrante";
            $midiaBanner->nm_original = $fileBanner->getClientOriginalName();
            $midiaBanner->extensao = $extension;
            $midiaBanner->save();
            $palestrante->idFoto = $midiaBanner->id;
        }
        $palestrante->save();
        return redirect('admin/edit/' . $idEvento);
    }

    public function editPalestrante($idPalestrante, $idEvento, Request $request)
    {
        $palestrante = Palestrante::find($idPalestrante);
        return view('events.forms.formPalestrante', compact('palestrante', 'idEvento'));
    }

    public function postPalestranteVincularCurso($idEvento, Request $request)
    {
        $evento = Evento::find($idEvento);

        if ($evento) {
            $cursoPalestrante = new EventoPalestrante();
            $cursoPalestrante->idEvento = $evento->id;
            $cursoPalestrante->idPalestrante = $request->idPalestrante;
            $cursoPalestrante->save();
        }
        return redirect('admin/edit/' . $idEvento);
    }

    public function deletePalestranteCurso($id, Request $request)
    {
        $palestrante = EventoPalestrante::find($id);
        $idEvento = $palestrante->idEvento;
        $palestrante->delete();
        return redirect('admin/edit/' . $idEvento);
    }

    public function evento($slug, Request $request)
    {
        $evento = Evento::with('programacao')->with('planos')->with('palestrantes')->with('destaque')->with('banner')->where('slug', $slug)->first();
        if (empty($evento)) {
            return abort(404);
        }
        //return $evento;
        return view("events.evento", compact('evento'));
    }

    public function listaEventos()
    {
        $eventos = Evento::with('planos')->with('banner')->where('status', '<>', 0)->orderBy('status', 'asc')->orderBy('dt_inicial', 'asc')->get();
        return response()->json(compact('eventos'), 200);
    }

    public function eventoBySlug($slug, Request $request)
    {
        $evento = Evento::with('programacao')->with('planos')->with('palestrantes')->with('destaque')->with('banner')->where('slug', $slug)->first();
        if (empty($evento)) {
            return response()->json(['msg' => 'Evento não encontrado'], 404);
        }
        return response()->json(compact('evento'), 200);
    }

    public function addParticipante($idEvento, Request $request)
    {
        $evento = Evento::find($idEvento);
        if (empty($evento)) {
            return redirect("/")->with('error', 'Evento não encontrado.');
        }
        try {
            $plano = PlanoEvento::find($request->plano);
            if ($plano->idEvento != $evento->id) {
                return redirect("/$evento->slug")->with('error', 'Plano informado não existe.');
            }

            $validaParticipante = Participante::where('email', $request->email)->where('idEvento', $evento->idEvento)->where('idPlano', $request->plano)->first();
            if ($validaParticipante) {
                return redirect("/pagseguro/pagar/$validaParticipante->id");
            }

            $participante = new Participante();
            $participante->idEvento = $evento->id;
            $participante->idPlano = $request->plano;
            $participante->nome = $request->nome;
            $participante->email = $request->email;
            $participante->cpf = str_replace(".", "", str_replace("-", "", $request->cpf));
            $participante->nm_empresa = $request->empresa;
            $participante->cnpj = $request->cnpj;
            $participante->telefone = str_replace("(", "", str_replace(")", "", str_replace("-", "", $request->telefone)));
            $participante->grau_instrucao = $request->grau_instrucao;
            $participante->profissao_atuacao = $request->profissao_atuacao;
            $participante->save();

            return redirect("/pagseguro/pagar/$participante->id");
        } catch (PDOException $th) {
            return redirect("/$evento->slug")->with('error', 'Dados informados inválido. Preencha o formulário corretamente.');
        }
    }

    private function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        // trim
        $text = trim($text, '-');
        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);
        // lowercase
        $text = strtolower($text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }
}
