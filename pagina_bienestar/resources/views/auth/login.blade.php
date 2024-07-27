<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logoSenaBlanco.png" type="image/x-icon">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-login.css') }}">
</head>
<body>
    <div class="principal">
        <div class="background"></div>
        <div class="logoSena"><img src="{{ asset('img/logoSena.png') }}" alt="Logo SENA" ></div>
        <h2>Bienvenido/a</h2>
        <div class="login">
            <div class="datos"> 
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="textoLogin"><h3>Login</h3></div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="numeroUsuario">
                        <div class="span">Numero de identificación*</div>
                        <div class="inputUsuario">
                            <i class="contenedorLogo">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: msFilter"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg>
                            </i>
                            <input type="email" class="form-control" placeholder="Correo" name="email" value="{{ old('email') }}" required>
                        </div>
                    </div>
                    <div class="contraseña">
                        <div class="span">Contraseña*</div>
                        <div class="inputContraseña">
                            <i class="contenedorLogo">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: msFilter"><path d="M20 12c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5S7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9V7z"></path></svg>
                            </i>
                            <input type="password" placeholder="Contraseña" name="password" required>
                        </div>
                    </div>
                    <div class="forgot-password">
                        <a href="">¿Olvidaste tu contraseña?</a>
                        <input type="submit" value="Ingresar" class="boton-ingresar">
                        <a href="{{ route('register') }}" class="boton-crear-cuenta">Crear cuenta</a>
                    </div>
                </form>
            </div>
        </div>
        <footer></footer>
    </div>
</body>
</html>
