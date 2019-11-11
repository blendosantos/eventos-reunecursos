<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{

    public function sendContato($idEvento, Request $request)
    {
        $nome = $request->nome;
        $email = $request->email;
        $mensagem = $request->mensagem;

        $evento = null;
        try {
        $evento = Evento::with('palestrantes')->find($idEvento);
        if (!$evento) {
            return redirect("/")->with('error', 'Evento não localizado.');
        }
        foreach ($evento->palestrantes as $p) {
            //echo $p->palestrante->email . " - " . $p->palestrante->nome . "\n";
            Mail::send('mails.contato', ['nome' => $nome, 'email' => $email, 'mensagem' => $mensagem, 'evento' => $evento], function ($message) use ($nome, $email, $p, $evento) {
                $message->from("noreply@reunecursos.com.br", $p->palestrante->nome);
                $message->to("contato@reunecursos.com.br", "Contato Reúne");
                $message->cc($email, $nome);
                $message->subject('Contato Reúne - ' . $evento->titulo);
                $message->priority(3);
            });
        }

            return redirect("/$evento->slug#mu-contact")->with('sucesso-email', 'Mensagem enviada para o(s) palestrante(s). ');
        } catch (\Exception $th) {
            if($evento == null) {
                return redirect("/")->with('error', 'Evento não localizado.');
            }
            return redirect("/$evento->slug#mu-contact")->with('error-contato', 'Erro ao enviar a mensagem, tente novamente mais tarde. ');
        }
    }
}
