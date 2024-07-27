<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;

        }

        h1
        {
            color: white;
        }

        label
        {
            display: inline-block;
            width: 250px;
            font-size: 18px!important;
            color: white!important;
        }


        input[type='text']
        {
            width: 251px;
            height: 30px;
        }

        textarea
        {
            width: 300px;
            height: 80px;
        }


        .input_deg
        {
            padding: 5px;
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



          <h1>Crear Usuario</h1>

          <div class="div_deg">

            <form action="{{url('upload_usuario')}}" method="Post" enctype="multipart/form-data">
                @csrf

                <div class="input_deg">
                    <label>Nombre completo:</label>
                    <input type="text" name="name">
                </div>

                
              

                <div class="input_deg">
                <label for="tipo_documento">Tipo de Documento</label>
                        <select id="tipo_documento" name="tipo_documento" required>
                            <option value="">Seleccione...</option>
                            <option value="cedula">Cédula de Ciudadanía</option>
                            <option value="cedula_extranjeria">Cédula de Extranjería</option>
                            <option value="pasaporte">Pasaporte</option>
                        </select>
                </div>

                <div class="input_deg">
                    <label>Número de documento</label>
                    <input type="number" name="identification">
                </div>


                <div class="input_deg">
                    <label>Correo</label>
                    <input type="email" name="email">
                </div>

                <div class="input_deg">
                    <label>Contraseña</label>
                    <input type="text" name="password">
                </div>

                <div class="input_deg">
                <label for="usertype">Tipo de usuario</label>
                        <select id="usertype" name="usertype" required>
                            <option value="">Seleccione...</option>
                            <option value="user">Usuario</option>
                            <option value="bienestar">Bienestar</option>
                            <option value="admin">Administrador</option>
                        </select>
                </div>

                

                <div class="input_deg">
                    <input class="btn btn-success" type="submit" value="Añadir Usuario">
                </div>

            </form>


          </div>

        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{('admincss/js/charts-home.js')}}"></script>
    <script src="{{('admincss/js/front.js')}}"></script>
  </body>
</html>