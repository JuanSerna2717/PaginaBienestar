<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Servicios;

use App\Models\Apoyos;

use App\Models\Eventos;

use App\Models\Agendamiento_Servicios;

use App\Models\User;


class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }
    
    public function add_category(Request $request)
    {
    
        $category = new Category;
        
        $category->category_name = $request->category;

        $category->save();

        toastr()->timeout(10000)->closeButton()->addSuccess
        ('Categoria añadida correctamente');

        return redirect()->back();

    }

    public function delete_category($id)
    {
        $data = Category::find($id);

        $data->delete();

        toastr()->timeout(10000)->closeButton()->addSuccess
        ('Categoria eliminada correctamente');

        return redirect()->back();
    }


    public function edit_category($id)
    {
        $data = Category::find($id);

        return view('admin.edit_category', compact('data'));
    }

    
    
    public function update_category(Request $request,$id)
    {
        $data = Category::find($id);

        $data->category_name= $request->category;

        $data->save();

        toastr()->timeout(10000)->closeButton()->addSuccess
        ('Categoria actualizada correctamente');

        return redirect('/view_category');

    }


    public function add_servicio()
    {

        $category = Category::all();

        return view('admin.add_servicio',compact('category'));

    }

    public function upload_servicio(Request $request)
    {
        $data= new Servicios;

        $data->title = $request->title;

        $data->description = $request->description;

        $data->category = $request->category;


        $image = $request-> image;

        if($image)
        {

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('products',$imagename);

        $data->image = $imagename;

        }

        $data->save();

        toastr()->timeout(10000)->closeButton()->addSuccess
        ('Servicio agregado correctamente');


        return redirect()->back();


    }


    public function view_servicio()
    {

        $servicio = Servicios::paginate(3);
        return view('admin.view_servicio' ,compact('servicio'));

    }

    public function delete_servicio($id)
    {

        $data = Servicios::find($id);

        $image_path = public_path('../products'.$data->image);

        if(file_exists($image_path))

        {

            unlink($image_path);

        }

        $data->delete();

        
        toastr()->timeout(10000)->closeButton()->addSuccess
        ('Servicio eliminado correctamente');

        return redirect()->back();
    }

    
    public function update_servicio($id)
    {
        $data = Servicios::find($id);

        $category = Category::all();

        return view('admin.update_page', compact('data','category'));
    }

    public function edit_servicio(Request $request, $id)
    {
        $data = Servicios::find($id);

        $data->title = $request->title;

        $data->description = $request->description;

        $data->category = $request->category;

        $image = $request->image;

        if ($image) 
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('products',$imagename);

            $data->image = $imagename;

        }

        $data->save();

        toastr()->timeout(10000)->closeButton()->addSuccess
        ('Servicio actualizado correctamente');

        return redirect('/view_servicio');

    }

    //--------------Apoyos---------------------------
    public function add_apoyo()
    {

        

        return view('admin.add_apoyo');

    }


    public function upload_apoyo(Request $request)
    {
        $data= new Apoyos;

        $data->title = $request->title;

        $data->description = $request->description;

        $data->dates = $request->dates;

        $data->aforo_maximo = $request->aforo_maximo;


        $image = $request-> image;

        if($image)
        {

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('apoyo',$imagename);

        $data->image = $imagename;

        }

        $data->save();

        toastr()->timeout(10000)->closeButton()->addSuccess
        ('Servicio agregado correctamente');


        return redirect()->back();


    }

    public function view_apoyo()
    {

        $apoyo = Apoyos::paginate(3);
        return view('admin.view_apoyo' ,compact('apoyo'));

    }


    public function delete_apoyo($id)
    {

        $data = Apoyos::find($id);

        $image_path = public_path('../apoyo/'.$data->image);

        if(file_exists($image_path))

        {

            unlink($image_path);

        }

        $data->delete();

        
        toastr()->timeout(10000)->closeButton()->addSuccess
        ('Servicio eliminado correctamente');

        return redirect()->back();
    }



    public function update_apoyo($id)
    {
        $data = Apoyos::find($id);

        $category = Category::all();

        return view('admin.update_page_apoyo', compact('data','category'));
    }

    public function edit_apoyo(Request $request, $id)
    {
        $data = Apoyos::find($id);

        $data->title = $request->title;

        $data->description = $request->description;

        $data->aforo_maximo = $request->aforo_maximo;

        $data->dates = $request->dates;

        $image = $request->Image;

        if ($image) 
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->Image->move('apoyo',$imagename);

            $data->Image = $imagename;

        }

        $data->save();

        toastr()->timeout(10000)->closeButton()->addSuccess
        ('Servicio actualizado correctamente');

        return redirect('/view_apoyo');

    }
    
    //---------------------Eventos--------------------------------------
    public function add_evento()
    {

        return view('admin.add_evento');

    }

    public function upload_evento(Request $request)
    {
        $data= new Eventos;

        $data->title = $request->title;

        $data->description = $request->description;

        $data->dates = $request->dates;

        $data->fecha_evento = $request->fecha_evento;

        $data->aforo = $request->aforo;


        $image = $request-> image;

        if($image)
        {

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('evento',$imagename);

        $data->image = $imagename;

        }

        $data->save();

        toastr()->timeout(10000)->closeButton()->addSuccess
        ('Servicio agregado correctamente');


        return redirect()->back();


    }

    public function view_evento()
    {

        $evento = Eventos::paginate(3);
        return view('admin.view_evento' ,compact('evento'));

    }


    public function delete_evento($id)
    {

        $data = Eventos::find($id);

        $image_path = public_path('../evento/'.$data->image);

        if(file_exists($image_path))

        {

            unlink($image_path);

        }

        $data->delete();

        
        toastr()->timeout(10000)->closeButton()->addSuccess
        ('Servicio eliminado correctamente');

        return redirect()->back();
    }



    public function update_evento($id)
    {
        $data = Eventos::find($id);

        $category = Category::all();

        return view('admin.update_page_evento', compact('data','category'));
    }


    public function edit_evento(Request $request, $id)
    {
        $data = Eventos::find($id);

        $data->title = $request->title;

        $data->description = $request->description;

        $data->fecha_evento = $request->fecha_evento;

        $data->aforo = $request->aforo;

        $data->dates = $request->dates;

        $image = $request->Image;

        if ($image) 
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->Image->move('evento',$imagename);

            $data->Image = $imagename;

        }

        $data->save();

        toastr()->timeout(10000)->closeButton()->addSuccess
        ('Servicio actualizado correctamente');

        return redirect('/view_evento');

    }



    //--------------------Agendados Participantes---------------------------------------\\

    public function view_agendados_servicios()
    {
        $agendados = Agendamiento_Servicios::all();
        return view('admin.view_agendados_servicios', compact('agendados'));
    }

    

//-------------------Crear Usuario-----------------------
    public function add_usuario()
    {

        return view('admin.add_usuario');

    }

    public function upload_usuario(Request $request)
    {
        $data= new User;

        $data->name = $request->name;
        $data->identification = $request->identification;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->usertype = $request->usertype;

        $data->save();

        toastr()->timeout(10000)->closeButton()->addSuccess
        ('Usuario creado correctamente');


        return redirect()->back();
    }

    
    public function view_usuarios()
    {

        $users = User::paginate(3);
        return view('admin.view_usuarios' ,compact('users'));

    }



    public function delete_usuario($id)
    {
        $users = User::find($id);

        $users->delete();

        
        toastr()->timeout(10000)->closeButton()->addSuccess
        ('Servicio eliminado correctamente');

        return redirect()->back();
    }

    public function update_usuario($id)
    {
        $user = User::find($id);
        return view('admin.update_page_user', compact('user'));
    }

    public function edit_usuario(Request $request, $id)
    {
        $data = User::find($id);

        $data->name = $request->name;
        $data->identification = $request->identification;
        $data->email = $request->email;
        $data->usertype = $request->usertype;


        $data->save();

        toastr()->timeout(10000)->closeButton()->addSuccess
        ('Servicio actualizado correctamente');

        return redirect('/view_usuarios');

    }



}

 