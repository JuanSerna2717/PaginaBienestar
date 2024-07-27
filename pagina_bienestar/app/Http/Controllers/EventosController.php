<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Eventos;

class EventosController extends Controller
{
    public function viewsEventos(){

        $eventos = Eventos::all();
        return view('home.eventos',compact('eventos'));
    }
}
