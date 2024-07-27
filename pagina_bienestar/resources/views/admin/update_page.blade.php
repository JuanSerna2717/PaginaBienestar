<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')


    <style type="text/css">
        .div_deg
        {
            display:flex;
            justify-content: center;
            align-items: center;
        }
        
        label
        {
            display: inline-block;
            width: 200px;
            padding: 10px;
        }

        input[type='text']
        {
           width: 200px;
           height: 30px;

        }

        textarea
        {
            width: 400px;
            height: 100px;
        }


    </style>

  </head>
  <body>
    @include('admin.header')
    @include('admin.slidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          


            <h2>Actualizar Información Servicios</h2>

            <div class="div_deg">

            <form action="{{url('edit_servicio', $data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Titulo</label>
                <input type="text" name="title" value="{{$data->title}}">
            </div>

            <div>
                <label>Descripción</label>
                <textarea name="description">{{$data->description}}</textarea>
            </div>

            <div>
                <label>Categoria</label>
                <select name="category">

                    <option value="{{$data->category}}">{{$data->
                        category}}</option>
                    
                    @foreach($category as $category)

                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                    @endforeach
                    
                </select>
            </div>

            <div>
                <label>Imagen actual</label>
                <img width="150" src="/products/{{$data->image}}">
            </div>

            <div>
                <label>Nueva Imagen</label>
                <input type="file" name="image">
            </div>

            <div>
                <input class="btn btn-success"type="submit" value="Actualizar Servicio">
            </div>

            </form>


            </div>






        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
  </body>
</html>