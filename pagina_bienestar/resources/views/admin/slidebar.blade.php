
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('admincss/img/avatar-13.png')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Miembro Bienestar</h1>
            <p>Administrador</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="/admin/dashboard"> <i class="icon-home"></i>Home</a></li>
                <li><a href="{{url('view_usuarios')}}"> <i class="icon-user-1"></i>Usuarios</a></li>
                <li><a href="{{url('view_category')}}"> <i class="icon-grid"></i>Categoría</a></li>

                


                <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Servicios</a>
                  <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
                    <li><a href="{{url('add_servicio')}}">Crear Servicio</a></li>
                    <li><a href="{{url('view_servicio')}}">Ver Servicios</a></li>
                    <li><a href="{{url('view_agendados_servicios')}}">Ver Agendados</a></li>
                  </ul>
                </li>

                <li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Apoyos</a>
                  <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
                    <li><a href="{{url('add_apoyo')}}">Crear Apoyos</a></li>
                    <li><a href="{{url('view_apoyo')}}">Ver Apoyos</a></li>
                    <li><a href="{{url('view_agendados_apoyos')}}">Ver Participantes</a></li>
                  </ul>
                </li>

                <li><a href="#exampledropdownDropdown3" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Eventos</a>
                  <ul id="exampledropdownDropdown3" class="collapse list-unstyled ">
                    <li><a href="{{url('add_evento')}}">Crear Eventos</a></li>
                    <li><a href="{{url('view_evento')}}">Ver eventos</a></li>
                  </ul>
                </li>


                <li><a href="{{url('add_usuario')}}"> <i class="icon-logout"></i>Crear Usuario</a></li>
        
        <ul class="list-unstyled">
          
        </ul>
      </nav>