<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\ServiciosController;

use App\Http\Controllers\ApoyosController;

use App\Http\Controllers\EventosController;

use App\Http\Controllers\AgendamientoController;

use App\Http\Controllers\DatosApoyosController;

use App\Http\Controllers\AdminController;




Route::get('/',[HomeController::class,'home']);

Route::get('/dashboard', function () {
    return view('home.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


route::get('admin/dashboard',[HomeController::class,'index'])-> 
    middleware(['auth','admin']);


route::get('view_category',[AdminController::class,'view_category'])-> 
    middleware(['auth','admin']);


route::post('add_category',[AdminController::class,'add_category'])-> 
    middleware(['auth','admin']);


route::get('delete_category/{id}',[AdminController::class,'delete_category'])-> 
    middleware(['auth','admin']);

    
route::get('edit_category/{id}',[AdminController::class,'edit_category'])-> 
    middleware(['auth','admin']);


route::post('update_category/{id}',[AdminController::class,'update_category'])-> 
    middleware(['auth','admin']);


route::get('add_servicio',[AdminController::class,'add_servicio'])-> 
    middleware(['auth','admin']);


route::post('upload_servicio',[AdminController::class,'upload_servicio'])-> 
    middleware(['auth','admin']);


route::get('view_servicio',[AdminController::class,'view_servicio'])-> 
    middleware(['auth','admin']);


route::get('delete_servicio/{id}',[AdminController::class,'delete_servicio'])-> 
    middleware(['auth','admin']);


route::get('update_servicio/{id}',[AdminController::class,'update_servicio'])-> 
    middleware(['auth','admin']);


route::post('edit_servicio/{id}',[AdminController::class,'edit_servicio'])-> 
    middleware(['auth','admin']);



//Ruta para Servicios
Route::get('/servicios', function () {
    return view('home.servicios'); 
})->name('servicios');

Route::get('/servicios', [ServiciosController::class, 'viewsServices'])->name('servicios');








//Ruta para Apoyos
Route::get('/apoyos', function () {
    return view('home.apoyos'); 
})->name('apoyos');

Route::get('/apoyos', [ApoyosController::class, 'viewsApoyos'])->name('apoyos');



//Fecha y hora
Route::get('/date', [DateController::class, 'showDate']);




//Rutas Crear Apoyos

route::get('add_apoyo',[AdminController::class,'add_apoyo'])-> 
    middleware(['auth','admin']);


route::post('upload_apoyo',[AdminController::class,'upload_apoyo'])-> 
    middleware(['auth','admin']);


route::get('view_apoyo',[AdminController::class,'view_apoyo'])-> 
    middleware(['auth','admin']);


route::get('delete_apoyo/{id}',[AdminController::class,'delete_apoyo'])-> 
    middleware(['auth','admin']);


route::get('update_apoyo/{id}',[AdminController::class,'update_apoyo'])-> 
    middleware(['auth','admin']);


route::post('edit_apoyo/{id}',[AdminController::class,'edit_apoyo'])-> 
    middleware(['auth','admin']);


//Rutas Crear Eventos

route::get('add_evento',[AdminController::class,'add_evento'])-> 
    middleware(['auth','admin']);

route::post('upload_evento',[AdminController::class,'upload_evento'])-> 
    middleware(['auth','admin']);


route::get('view_evento',[AdminController::class,'view_evento'])-> 
    middleware(['auth','admin']);


route::get('delete_evento/{id}',[AdminController::class,'delete_evento'])-> 
    middleware(['auth','admin']);


route::get('update_evento/{id}',[AdminController::class,'update_evento'])-> 
    middleware(['auth','admin']);


route::post('edit_evento/{id}',[AdminController::class,'edit_evento'])-> 
    middleware(['auth','admin']);


Route::get('/eventos', function () {
        return view('home.eventos'); 
    })->name('eventos');
    
    Route::get('/eventos', [EventosController::class, 'viewsEventos'])->name('eventos');


Route::get('add_formulario/{servicioId}', [AgendamientoController::class, 'add_formulario'])->middleware('auth')->name('agendar');

Route::post('upload_formulario_servicios', [AgendamientoController::class, 'upload_formulario_servicios']);

Route::get('view_agendados_servicios', [AgendamientoController::class, 'view_agendados_servicios'])->middleware(['auth', 'admin']);



Route::get('add_formulario_apoyo/{apoyoId}', [DatosApoyosController::class, 'add_formulario_apoyo'])->middleware('auth')->name('inscripcion');
Route::post('upload_formulario_apoyos', [DatosApoyosController::class, 'upload_formulario_apoyos'])->middleware('auth');
Route::get('view_agendados_apoyos', [DatosApoyosController::class, 'view_agendados_apoyos'])->middleware(['auth', 'admin']);


//Route::get('view_agendados_apoyos', [DatosApoyosController::class, 'view_agendados_apoyos'])->middleware(['auth', 'admin']);


//Rutas Datos usuarios para servicio

route::get('aprobada_/{id}',[AgendamientoController::class,'aprobada_'])-> 
    middleware(['auth','admin']);

route::get('rechazada_/{id}',[AgendamientoController::class,'rechazada_'])-> 
    middleware(['auth','admin']);

route::get('delete_usuario_/{id}',[AgendamientoController::class,'delete_usuario_'])-> 
    middleware(['auth','admin']);


//Rutas Datos usuarios Apoyo

route::get('aprobada/{id}',[DatosApoyosController::class,'aprobada'])-> 
    middleware(['auth','admin']);

route::get('rechazada/{id}',[DatosApoyosController::class,'rechazada'])-> 
    middleware(['auth','admin']);

route::get('delete_usuario/{id}',[DatosApoyosController::class,'delete_usuario'])-> 
    middleware(['auth','admin']);


//Rutas crear Usuario
route::get('add_usuario',[AdminController::class,'add_usuario'])-> 
    middleware(['auth','admin']);


route::post('upload_usuario',[AdminController::class,'upload_usuario'])-> 
    middleware(['auth','admin']);

Route::get('view_usuarios', [AdminController::class, 'view_usuarios'])-> 
middleware(['auth','admin']);

route::get('delete_usuario/{id}',[AdminController::class,'delete_usuario'])-> 
    middleware(['auth','admin']);

route::get('update_usuario/{id}',[AdminController::class,'update_usuario'])-> 
    middleware(['auth','admin']);

route::post('edit_usuario/{id}',[AdminController::class,'edit_usuario'])-> 
    middleware(['auth','admin']);