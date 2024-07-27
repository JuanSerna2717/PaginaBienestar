<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios;

class ServiciosController extends Controller
{
    public function viewsServices(){

        $servicios = Servicios::all();
        return view('home.servicios',compact('servicios'));
    }
}
