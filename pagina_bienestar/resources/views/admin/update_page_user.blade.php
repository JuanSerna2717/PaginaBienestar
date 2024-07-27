<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        label {
            display: inline-block;
            width: 200px;
            padding: 10px;
        }
        input[type='text'], input[type='number'], input[type='email'] {
           width: 200px;
           height: 30px;
        }
        textarea {
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
          <h2>Actualizar Información De Usuario</h2>
          <div class="div_deg">
            <form action="{{ url('edit_usuario', $user->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              <div>
                <label>Nombre</label>
                <input type="text" name="name" value="{{ $user->name }}">
              </div>
              <div>
                <label>Numero de documento</label>
                <input type="number" name="identification" value="{{ $user->identification }}">
              </div>
              <div>
                <label>Email</label>
                <input type="email" name="email" value="{{ $user->email }}">
              </div>
              <div>
                <label>Tipo de usuario</label>
                <select name="usertype">
                  <option value="{{ $user->usertype }}">selecione...</option>
                  <option value="admin">admin</option>
                  <option value="user">user</option>
                  <option value="user">bienestar</option>
                </select>
              </div>
              <div>
                <input class="btn btn-success" type="submit" value="Actualizar Usuario">
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
