<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logoSenaBlanco.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style-pagina-principal.css">
    <link rel="stylesheet" href="css/eventos.css">
    
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
                        <img src="img/logoSenaBlanco.png" class="logoSena" alt="">
                        <div class="separadorLogos"></div>
                        <img src="img/logoBienestar.png" alt="">
                    </a>
                </div>
        <!-- Contenedor Hipervínculos -->
                <div class="contenedorHrefs">
                    <div class="hrefs">
                        <li><a href="{{ route('servicios') }}">Servicios</a></li>
                        <li><a href="{{ route('apoyos') }}">Apoyos</a></li>
                        <li><a href="{{ route('eventos') }}">Eventos</a></li>
                    </div>
                    <!-- Mini Contenedor logo usuario -->
                    <div class="contenedorUserLogo">
                        <a href="{{url('/login')}}">
                            <img src="img/user-circle-solid-36.png" alt="">
                        </a>
                    </div>
                    <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>
                </div>

        <!-- Menú Para Celulares -->
                <div class="overlay" id="mobile-menu">
                    <a onclick="closeNav() "href="#" class="close">&times;</a>
                    <div class="overlay-content">
                        <a href="{{url('/login')}}">
                            <img src="img/user-circle-solid-48.png" alt="">
                        </a>
                        <a href="{{ route('servicios') }}">Servicios</a>
                        <a href="{{ route('apoyos') }}">Apoyos</a>
                        <a href="{{ route('eventos') }}">Eventos</a>
                    </div>
                </div>
            </div>
    </header>
        <!-- Espacio En Blanco Superior -->
            <div class="espacioEnBlanco"></div>

        <!--   LO DE USTEDES VA ACÁ -->
        <main>
            <div class="tituloPagina">
                <span>A P O Y O S</span>
            </div>
            @foreach($apoyos as $apoyos)
            <section class="section">
            <div class="contenedorSpan">
                <span>{{ $apoyos->title }}</span>
            </div>
            <article>
                    <div class="contenedorImagen">
                        <img src="apoyo/{{ $apoyos->Image }}" alt="">
                    </div>
                    <div class="contenedorTexto">
                        <div class="tituloTexto">
                            <span>FECHA:</span>
                            <span>LIMITE:</span>
                            <span>INSCRIPCIONES: </span>
                        </div>
    
                        <div class="contenidoTexto">
                            <span>{{ $currentDate }}</span>
                            <span>{{ $apoyos->aforo_maximo }} aprendices</span>
                            <span>hasta {{ $apoyos->dates }}</span>
                        </div>
                        
                    </div>
                    <div class="contenedorBoton">
                        <a href="{{ route('inscripcion', $apoyos->id) }}">¡Inscribirme!</a>
                    <div>
                </article>
            </section>
            @endforeach
        </main>
        
        

        <!-- Espacio en blanco para separar el main del footer -->
        <div class="espacioEnBlanco"></div>

    <!-- .............FOOTER..............  -->
        <!-- Contenedor Footer -->
            <div class="contenedorFooter">
                <footer>
                    <section class="contenedorCajasBlancas">
                        <div>C</div>
                        <div>D</div>
                        <div>I</div>
                        <div>T</div>
                        <div>I</div>
                    </section>
                </footer>
            </div>

        <!-- Espacio en blanco inferior -->
            <div class="espacioEnBlanco"></div>
    

    
    <script type="text/javascript" src="nav.js"></script>
</body>

</html>

