<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Servicios;
use App\Models\User;
use App\Models\Apoyos;
use App\Models\Eventos;

class HomeController extends Controller
{
    public function index()
    {
        $user_total = User::where('usertype','user')->get()->count();

        $apoyos = Apoyos::all()->count();

        $servicios = Servicios::all()->count();

        $eventos = eventos::all()->count();

        return view('admin.index',compact('user_total','apoyos','servicios','eventos'));
    }


    public function home()
    {
        $servicio = Servicios::all();

        return view('home.index',compact('servicio'));
    }

    public function showDate()
    {
        $currentDate = Carbon::now(); // Fecha y hora actual
        $currentDateOnly = Carbon::today(); // Solo la fecha actual

        return view('date', compact('currentDate', 'currentDateOnly'));
    }
}
