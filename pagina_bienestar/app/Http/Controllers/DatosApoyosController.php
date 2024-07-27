<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Datos_Apoyos;
use App\Models\Servicios;
use App\Models\Apoyos;

class DatosApoyosController extends Controller
{
    public function add_formulario_apoyo($apoyoId)
    {
        $apoyos = Apoyos::findOrFail($apoyoId);
        $category = Category::all();
        $agendado = Datos_Apoyos::all();
        return view('agendamiento.add_formulario_apoyo', compact('agendado', 'apoyos', 'category'));
    }

    public function upload_formulario_apoyos(Request $request)
    {
        $data = new Datos_Apoyos;

        $data->nombre = $request->Nombre;
        $data->apellidos = $request->apellidos;
        $data->tipo_documento = $request->tipo_documento;
        $data->num_documento = $request->num_documento;
        $data->jornada = $request->Jornada;
        $data->num_ficha = $request->num_ficha;
        $data->programa = $request->programa;
        $data->correo = $request->correo;
        $data->telefono = $request->telefono;
        $data->direccion = $request->direccion;

        $data->save();

        toastr()->timeout(10000)->closeButton()->addSuccess('Formulario enviado exitosamente');

        return redirect()->back();
    }

    public function view_agendados_apoyos()
    {
        $agendados = Datos_Apoyos::paginate(5);
        return view('admin.view_agendados_apoyos', compact('agendados'));
    }

    public function aprobada($id)
    {
        $agendado = Datos_Apoyos::find($id);
        $agendado-> estado = 'APROBADA';
        $agendado->save();
        return redirect('view_agendados_apoyos');
    }

    public function rechazada($id)
    {
        $agendado = Datos_Apoyos::find($id);
        $agendado-> estado = 'RECHAZADA';
        $agendado->save();
        return redirect('view_agendados_apoyos');
    }

    public function delete_usuario($id)
    {
        $agendado = Datos_Apoyos::find($id);

        $agendado->delete();

        
        toastr()->timeout(10000)->closeButton()->addSuccess
        ('Servicio eliminado correctamente');

        return redirect()->back();
    }

}


