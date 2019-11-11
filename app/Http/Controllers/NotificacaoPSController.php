<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Pagamento;
use Illuminate\Support\Facades\Log;

class NotificacaoPSController extends Controller
{

    public static function notificationInfo($information)
    {
        try {
            Log::info(":: Notificação de Pagamento ::");
            Log::info($information->getCode());
            Log::info($information->getReference());
            Log::info($information->getStatus()->getCode());
            Log::info($information->getStatus()->getName());

            $pagamento = Pagamento::where('idParticipante', $information->getReference())->first();
            if($pagamento){
                $pagamento->code_transacao = $information->getCode();
                $pagamento->status = $information->getStatus()->getCode();
                $pagamento->situacao = $information->getStatus()->getName();
                $pagamento->save();
                Log::info(":: Pagamento Atualizado ::");
            }else{
                Log::info(":: Pagamento não Localizado ::");
            }
        } catch (\PDOException $th) {
            Log::error("Error Notificação Pagamento no banco de dados :" . $th->getMessage());
        } catch (\Exception $th) {
            Log::error("Error Notificação Pagamento :" . $th->getMessage());
        }
    }
}
