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



          <h1>Añadir Apoyo</h1>

          <div class="div_deg">

            <form action="{{url('upload_apoyo')}}" method="Post" enctype="multipart/form-data">
                @csrf

                <div class="input_deg">
                    <label>Titulo del Apoyo</label>
                    <input type="text" name="title">
                </div>
                
                <div class="input_deg">
                    <label>Descripción</label>
                    <textarea name="description" require></textarea>
                </div>


                <div class="input_deg">
                    <label>Aforo</label>
                    <input type="number" name="aforo_maximo">
                </div>


                <div class="input_deg">
                    <label>Fecha Limite Inscripciones</label>
                    <input type="date" name="dates">
                </div>


                <div class="input_deg">
                    <label>Imagen del Apoyo</label>
                    <input type="file" name="image">
                </div>


                

                <div class="input_deg">
                    <input class="btn btn-success" type="submit" value="Añadir Servicio">
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