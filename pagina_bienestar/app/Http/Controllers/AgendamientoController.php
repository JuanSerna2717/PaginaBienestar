<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios;
use App\Models\Category;
use App\Models\Agendamiento_Servicios;

class AgendamientoController extends Controller
{
    public function add_formulario($servicioId)
    {
        $servicios = Servicios::findOrFail($servicioId);
        $category = Category::all();
        $agendado = Agendamiento_Servicios::all();
        return view('agendamiento.add_formulario', compact('agendado', 'servicios', 'category'));
    }

    public function upload_formulario_servicios(Request $request)
    {
        $data = new Agendamiento_Servicios;

        $data->nombre = $request->Nombre;
        $data->apellidos = $request->apellidos;
        $data->tipo_documento = $request->tipo_documento;
        $data->num_documento = $request->num_documento;
        $data->jornada = $request->Jornada;
        $data->servicio = $request->servicio;
        $data->num_ficha = $request->num_ficha;
        $data->programa = $request->programa;
        $data->correo = $request->correo;
        $data->telefono = $request->telefono;
        $data->direccion = $request->direccion;

        $data->save();

        toastr()->timeout(10000)->closeButton()->addSuccess('Formulario enviado exitosamente');

        return redirect()->back();
    }

    public function view_agendados_servicios()
    {
        $agendados = Agendamiento_Servicios::paginate(5);
        return view('admin.view_agendados_servicios', compact('agendados'));
    }

    public function aprobada_($id)
    {
        $agendado = Agendamiento_Servicios::find($id);
        $agendado-> estado = 'APROBADA';
        $agendado->save();
        return redirect('view_agendados_servicios');
    }

    public function rechazada_($id)
    {
        $agendado = Agendamiento_Servicios::find($id);
        $agendado-> estado = 'RECHAZADA';
        $agendado->save();
        return redirect('view_agendados_servicios');
    }

    public function delete_usuario_($id)
    {
        $agendado = Agendamiento_Servicios::find($id);

        $agendado->delete();

        
        toastr()->timeout(10000)->closeButton()->addSuccess
        ('Servicio eliminado correctamente');

        return redirect()->back();
    }

}

