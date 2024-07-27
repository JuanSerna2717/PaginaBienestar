

<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')


    <style type="text/css">

    .div_deg{

        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
    }

    .table_deg{
        border: 2px solid greenyellow;
    }

    th
    {
       background-color: skyblue;
       color: white;
       font-size: 19px;
       font-weight:bold;
       padding: 15px;
    }


    td
    {
        border: 1px solid skyblue;
        text-align: center;
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
          

          <div class="div_deg">


            <table class="table_deg">

                <tr>

                    <th>Titulo del Servicio</th>

                    <th>Descripción</th>

                    <th>Categoría</th>

                    <th>Imagen</th>

                    <th>Editar</th>

                    <th>Eliminar</th>

                </tr>


            @foreach($servicio as $servicios)

            <tr>

                <td>{{$servicios->title}}</td>

                <td>{!!Str::limit($servicios->description,100)!!}</td>

                <td>{{$servicios->category}}</td>

                <td>
                    <img height="120" widht="120"src="products/{{$servicios->image}}" alt="">
                </td>

                <td>
                    <a class="btn btn-success" href="{{url('update_servicio', $servicios->id)}}">Editar</a>
                </td>

                <td>
                    <a class=" btn btn-danger" onclick="confirmation(event)" href="{{url('delete_servicio',$servicios->id)}}">Eliminar</a>
                </td>

            </tr>

            @endforeach


            </table>

        
          </div>

          <div class="div_deg">
          {{$servicio->onEachSide(1)->links()}}
          </div>
        
          

        </div>
      </div>
    </div>

    <!-- JavaScript files-->

@include('admin.js')
  </body>
</html>