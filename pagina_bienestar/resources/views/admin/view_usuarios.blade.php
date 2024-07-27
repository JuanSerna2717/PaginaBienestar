

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
        
        border-radius: 10px;
      
    }

    th
    {
       background-color: green;
       color: white;
       font-size: 19px;
       font-weight:bold;
       padding: 15px;
       
    }


    td
    {
        border: 1px groove green;
        text-align: center;
        color: white;
        height: 50px;
        
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

                <th>Nombre completo</th>

                <th>Número de identificación</th>

                <th>Email</th>

                <th>Tipo de usuario</th>

                <th>Editar</th>

                <th>Eliminar</th>

              </tr>


          @foreach($users as $user)


              <tr>

                <td>{{$user->name}}</td>

                <td>{{$user->identification}}</td>

                <td>{{$user->email}}</td>

                <td>{{$user->usertype}}</td>

                <td>
                    <a class="btn btn-success" href="{{url('update_usuario', $user->id)}}">Editar</a>
                </td>

                <td>
                    <a class=" btn btn-danger" onclick="confirmation(event)" href="{{url('delete_usuario',$user->id)}}">Eliminar</a>
                </td>

              </tr>

          @endforeach


            </table>


      </div>

    <div class="div_deg">
      {{$users->onEachSide(1)->links()}}
    </div>



    </div>
</div>
</div>


    <!-- JavaScript files-->

@include('admin.js')
  </body>
</html>