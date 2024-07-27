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
    <link rel="stylesheet" href="css/servicios.css">
    <title>Página Principal</title>
</head>
<body>
    <div class="espacioEnBlanco"></div>
    <header class="header">
        <div class="titulo">
            <div class="logoBienestar">
                <a href="/">
                    <img src="img/logoSenaBlanco.png" class="logoSena" alt="">
                    <div class="separadorLogos"></div>
                    <img src="img/logoBienestar.png" alt="">
                </a>
            </div>
            <div class="contenedorHrefs">
                <ul class="hrefs">
                    <li><a href="{{ route('servicios') }}">Servicios</a></li>
                    <li><a href="{{ route('apoyos') }}">Apoyos</a></li>
                    <li><a href="{{ route('eventos') }}">Eventos</a></li>
                </ul>
                <div class="contenedorUserLogo">
                    <a href="{{url('/login')}}">
                        <img src="img/user-circle-solid-36.png" alt="">
                    </a>
                </div>
                <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>
            </div>
        </div>

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

    <main>
        <div class="tituloPagina">
            <span>S E R V I C I O S</span>
        </div>
        @foreach($servicios as $servicio)
        <section class="section">
            <div class="contenedorSpan">
                <span>{{ $servicio->title }}</span>
            </div>
            
            <article>
                <div class="contenedorImagen">
                    <img src="products/{{ $servicio->image }}" alt="">
                </div>
                <div class="contenedorTexto">
                    <div class="aforo">
                        <span class="titulo2"></span>
                        <span class="info">{{ $servicio->description }}</span>
                    </div>
                    <div class="inscripciones">
                        <span class="titulo2"></span>
                        <span class="info"></span>
                    </div>
                </div>
                <div class="contenedorBoton">
                    <a href="{{ route('agendar', $servicio->id) }}">Quiero Agendar!</a>
                </div>
            </article>
        </section>
        @endforeach
    </main>


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