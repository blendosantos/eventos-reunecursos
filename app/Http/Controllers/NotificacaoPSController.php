<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class NotificacaoPSController extends Controller
{

    public static function notificacao($information)
    {
        \Log::debug(print_r($information->getStatus()->getCode(), 1));
    }
}
