<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Pagamento;
use App\Participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PagamentoParticipanteController extends Controller
{

    public static function efetuarPagamento($idParticipante)
    {
        $evento = "";
        try {
            $participante = Participante::with('plano')->with('evento')->find($idParticipante);
            $evento = $participante->evento->slug;

            if($participante->plano->valor == 0) {
                return redirect("/$evento#mu-register")->with('sucesso-inscricao', "Inscrição efetuada com sucesso!");
            }

            $data = [
                'reference' => $participante->id,
                'items' => [
                    [
                        'id' => $participante->evento->id,
                        'description' => 'Reúne Cursos - ' . $participante->evento->slug,
                        'quantity' => '1',
                        'amount' => $participante->plano->valor,
                        'shippingCost' => '0',
                    ]
                ],
                'sender' => [
                    'email' => $participante->email,
                    'name' => $participante->nome,
                    'documents' => [
                        [
                            'number' => $participante->cpf,
                            'type' => 'CPF'
                        ]
                    ],
                    'phone' => [
                        'number' => substr($participante->telefone, 2),
                        'areaCode' => substr($participante->telefone, 0, 2),
                    ],
                    'bornDate' => '1988-03-21',
                ]
            ];

            $checkout = \PagSeguro::checkout()->createFromArray($data);
            $credentials = \PagSeguro::credentials()->get();
            $information = $checkout->send($credentials); // Retorna um objeto de laravel\pagseguro\Checkout\Information\Information
            if ($information) {
                $pagamento = Pagamento::where('idParticipante', $idParticipante)->first();
                if(!$pagamento){
                    $pagamento = new Pagamento();
                }
                $pagamento->idParticipante = $idParticipante;
                $pagamento->token = $information->getCode();
                $pagamento->created_at = $information->getDate();
                $pagamento->save();
                Log::info('Token: ' . $pagamento->token . ' / Link Compra: ' . $information->getLink());
                return redirect()->away($information->getLink());
            }
            return redirect("/$evento#mu-register")->with('error', 'Não foi possível gerar fatura para o pagamento!');
        } catch (\Exception $th) {
            if ($evento == "") {
                return redirect("/")->with('error', 'Participante não localizaado.');
            }
            return redirect("/$evento#mu-register")->with('error', $th->getMessage());
        }
    }

    public static function redirect(Request $request)
    {
        print_r($request->all());
    }
}
