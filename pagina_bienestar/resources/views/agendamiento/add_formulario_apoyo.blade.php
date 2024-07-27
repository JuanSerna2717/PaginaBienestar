
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"rel="stylesheet">
    <link rel="shortcut icon" href="../img/logoSenaBlanco.png" type="image/x-icon">

    <link href="{{asset('css/style-pagina-principal.css')}}" rel="stylesheet" />
    <link href="{{asset('css/formulario.css')}}" rel="stylesheet" />
    <title>Página Principal</title>
</head>


<body>
    <!-- ............HEADER............ -->
    <!-- Espacio En Blanco Superior -->
    <div class="espacioEnBlanco"></div>
    <!-- Header -->
    <header>
        <!-- Contenedor General Nav -->
        <div class="titulo">
            <!-- Contenedor De Los Logos -->
            <div class="logoBienestar">
                <a href="/">
                    <img src="../img/logoSenaBlanco.png" class="logoSena" alt="">
                    <div class="separadorLogos"></div>
                    <img src="../img/logoBienestar.png" alt="">
                </a>
            </div>
            <!-- Contenedor Hipervínculos -->
            <div class="contenedorHrefs">
                <div class="hrefs">
                    <li><a href="{{ route ('servicios') }}">Servicios</a></li>
                    <li><a href="{{ route ('apoyos') }}">Apoyos</a></li>
                    <li><a href="{{ route ('eventos') }}">Eventos</a></li>
                </div>
                <!-- Mini Contenedor logo usuario -->
                <div class="contenedorUserLogo">
                    <a href="/">
                        <img src="../img/user-circle-solid-36.png" alt="">
                    </a>
                </div>
                <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>
            </div>

            <!-- Menú Para Celulares -->
            <div class="overlay" id="mobile-menu">
                <a onclick="closeNav() " href="#" class="close">&times;</a>
                <div class="overlay-content">
                    <a href="/">
                        <img src="../../Julián/PaginaPrincipal/img/user-circle-solid-48.png" alt="">
                    </a>
                    <a href="{{ route ('servicios') }}">Servicios</a>
                    <a href="{{ route ('apoyos') }}">Apoyos</a>
                    <a href="{{ route ('eventos') }}">Eventos</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Espacio En Blanco Superior -->
    <div class="espacioEnBlanco"></div>

    <main>
        <!--   LO DE USTEDES VA ACÁ -->
        <div class="container">
            <h2>Formulario Participación {{ $apoyos->title }}</h2>
            <div class="contenedorBotonVerde">
                <button id="btn-abrir-formulario">Abrir formulario</button>
            </div>

            <div class="info">
                <h3>Requisitos</h3>
                <label for="">{{ $apoyos->description }}</label>
            </div>
            
            @auth
            <dialog id="formulario">
                <span class="close-btn" id="close-form">&times;</span>
                <form action="{{url('upload_formulario_apoyos')}}" method="Post" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombres:</label>
                        <input type="text" id="nombre" name="Nombre" value="{{Auth::user()->name}}" required readonly required>
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" id="apellidos" name="apellidos" required>
                    </div>
                    <div class="form-group">
                        <label for="tipo_documento">Tipo de Documento:</label>
                        <select id="tipo_documento" name="tipo_documento" required>
                            <option value="">Seleccione...</option>
                            <option value="cedula">Cédula de Ciudadanía</option>
                            <option value="cedula_extranjeria">Cédula de Extranjería</option>
                            <option value="pasaporte">Pasaporte</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="num_documento">Número de Documento:</label>
                        <input type="text" id="num_documento" name="num_documento" value="{{Auth::user()->identification}}"required readonly required>
                    </div>
                    <div class="form-group">
                        <label for="jornada">Jornada:</label>
                        <select id="tipo_documento" name="Jornada" required>
                            <option value="">Seleccione...</option>
                            <option value="Diurna">Diurna</option>
                            <option value="Tarde">Tarde</option>
                            <option value="Tarde-noche">Tarde-Noche</option>
                        </select>

                    <div class="form-group">
                        <label for="num_ficha">Número de Ficha:</label>
                        <input type="text" id="num_ficha" name="num_ficha">
                    </div>
                    <div class="form-group">
                        <label for="programa">Programa de Formación:</label>
                        <input type="text" id="programa" name="programa">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo Electrónico:</label>
                        <input type="email" id="correo" name="correo" value="{{Auth::user()->email}}"required readonly required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="text" id="telefono" name="telefono">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" id="direccion" name="direccion">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Enviar">
                        <input type="reset" value="Limpiar">
                    </div>
                </form>
            </dialog>
        </div>
    </main>
    @endauth
    <!-- Espacio en blanco para separar el main del footer -->
    <div class="espacioEnBlanco"></div>

    <!-- .............FOOTER..............  -->
    <!-- Contenedor Footer -->
    

    <!-- Espacio en blanco inferior -->
    <div class="espacioEnBlanco"></div>
    <script type="text/javascript" src="../formulario.js"></script>
    <script type="text/javascript" src="../nav.js"></script>

    
   
</body>

</html>
    