<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
            <div class="container-fluir col-sm-12">
                <!-- botton -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="false">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="col-sm-12 collapse navbar-collapse" id="menu">
                    <ul class="col-sm-12 navbar-nav justify-content-around">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sobre mi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">portafolio</a></li>

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" id="menuproducto" role="button" data-bs-toggle="dropdown" aria-expanded="false"  href="#">Estados</a>
                            <ul class="dropdown-menu bg-dark " aria-labelledby="menuproducto">
                                <li><a class="dropdown-item text-bg-dark" href="{{ route('estado.create') }}">Crear Estado</a></li>
                                <li><a class="dropdown-item text-bg-dark" href="{{ route('estado.index') }}">Listar estados</a></li>
                                <li><a class="dropdown-item text-bg-dark" href="#">Categoria 3</a></li>
                                
                                <li><hr class="dropdown-divider bg-light"></li>
                                <li><a class="dropdown-item text-bg-dark" href="#">Politica de Privacidad</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="col-sm-12 ">
            @yield('contenido')
        </div>

        @livewireScripts
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>