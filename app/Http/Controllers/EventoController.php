<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index(){
        $eventos = Evento::with('planos')->with('banner')->where('status', '<>', 0)->orderBy('status', 'asc')->orderBy('dt_inicial', 'asc')->get();
        //return $eventos;
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
}
