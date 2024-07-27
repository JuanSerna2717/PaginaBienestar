<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Apoyos;

use Carbon\Carbon;



class ApoyosController extends Controller
{
    public function viewsApoyos(){

        $apoyos = Apoyos::all();
        $currentDate = Carbon::now()->format('d/m/Y');
        return view('home.apoyos', compact('apoyos', 'currentDate'));
    }
}
