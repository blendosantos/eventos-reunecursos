<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index(){
        $eventos = Evento::with('planos')->where('status', '<>', 0)->get();
        //return $eventos[0]->planos[0]->valor;
        return view("events.index", compact('eventos'));
    }

    public function evento($slug, Request $request){
        $evento = Evento::with('programacao')->with('planos')->with('palestrantes')->with('destaque')->with('banner')->where('slug', $slug)->first();
        if(empty($evento)){
            return abort(404);
        }
        //return $evento;
        return view("events.evento", compact('evento'));
    }
}
