<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Participante;
use App\PlanoEvento;
use Illuminate\Http\Request;
use PDOException;

class EventoController extends Controller
{
    public function index(){
        $eventos = Evento::with('planos')->with('banner')->where('status', '<>', 0)->orderBy('status', 'asc')->orderBy('dt_inicial', 'asc')->get();
        //return $eventos;
        return view("events.index", compact('eventos'));
    }

    public function listaAdmin(){
        $eventos = Evento::with('planos')->with('banner')->orderBy('status', 'asc')->orderBy('dt_inicial', 'asc')->get();
        //return $eventos;
        return view("events.lista", compact('eventos'));
    }

    public function cadastroAdmin(){
        return view("events.cadastro");
    }

    public function postCadastroAdmin(Request $request){

    }

    public function editAdmin($idEvento){
        $evento = Evento::with('programacao')->with('planos')->with('palestrantes')->with('destaque')->with('banner')->find($idEvento);
        return view("events.cadastro", compact('evento'));
    }

    public function postEditAdmin($idEvento, Request $request){

    }

    public function active($idEvento){
        $evento = Evento::find($idEvento);
        $evento->status = 1;
        $evento->save();
        return redirect('admin/lista');
    }

    public function inactive($idEvento){
        $evento = Evento::find($idEvento);
        $evento->status = 3;
        $evento->save();
        return redirect('admin/lista');
    }

    public function delete($idEvento){
        $evento = Evento::find($idEvento);
        $evento->delete();
        return redirect('admin/lista');
    }

    public function evento($slug, Request $request){
        $evento = Evento::with('programacao')->with('planos')->with('palestrantes')->with('destaque')->with('banner')->where('slug', $slug)->first();
        if(empty($evento)){
            return abort(404);
        }
        //return $evento;
        return view("events.evento", compact('evento'));
    }

    public function listaEventos(){
        $eventos = Evento::with('planos')->with('banner')->where('status', '<>', 0)->orderBy('status', 'asc')->orderBy('dt_inicial', 'asc')->get();
        return response()->json(compact('eventos'), 200);
    }

    public function eventoBySlug($slug, Request $request){
        $evento = Evento::with('programacao')->with('planos')->with('palestrantes')->with('destaque')->with('banner')->where('slug', $slug)->first();
        if(empty($evento)){
            return response()->json(['msg' => 'Evento não encontrado'], 404);
        }
        return response()->json(compact('evento'), 200);
    }

    public function addParticipante($idEvento, Request $request) {
        $evento = Evento::find($idEvento);
        if(empty($evento)) {
            return redirect("/")->with('error', 'Evento não encontrado.');
        }
        try {
            $plano = PlanoEvento::find($request->plano);
            if($plano->idEvento != $evento->id) {
                return redirect("/$evento->slug")->with('error', 'Plano informado não existe.');
            }

            $validaParticipante = Participante::where('email', $request->email)->where('idEvento', $evento->idEvento)->where('idPlano', $request->plano)->first();
            if($validaParticipante){
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
}
