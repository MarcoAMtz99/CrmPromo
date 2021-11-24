<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CALENDARIO -->
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.css' rel='stylesheet' />
        s<link href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/all.css' rel='stylesheet'>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
</head>
<style>
    .bg-gradient {
                background: linear-gradient(to bottom, black, red);
            }
    .bg-gradient-red {
                background: linear-gradient(to right, red, white);
            }
     .full-height {
                height: 100vh;
            }
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'CRM PROMOMEDICS') }} -->
              <img src="{{ asset('img/logo.png') }}" alt="" class="h-25" style="width: 120px; ">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                     @auth
                    <ul class="navbar-nav mr-auto">
                                

                                <!-- SECCION DE LAS PRECARGAS -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ __('Precargas') }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">
                                        {{ __('Escolaridad') }}
                                    </a>
                                      <a class="dropdown-item" href="#">
                                        {{ __('Departamentos') }}
                                    </a>
                                     <a class="dropdown-item" href="#">
                                        {{ __('Puestos') }}
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        {{ __('Areas') }}
                                    </a>
                                     <a class="dropdown-item" href="#">
                                        {{ __('Beneficios') }}
                                    </a>
                                     <a class="dropdown-item" href="#">
                                        {{ __('Convenios') }}
                                    </a>
                                     <a class="dropdown-item" href="#">
                                        {{ __('Medios de contacto') }}
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        {{ __('Aseguradoras') }}
                                    </a>
                                     <a class="dropdown-item" href="#">
                                        {{ __('Redes Sociales') }}
                                    </a>
                                     <a class="dropdown-item" href="#">
                                        {{ __('Servicios') }}
                                    </a>

                                </div>
                                </li>
                                <!-- SECCION DE SEGURIDAD -->
                                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ __('Seguridad') }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">
                                        {{ __('Modulos') }}
                                    </a>
                                      <a class="dropdown-item" href="#">
                                        {{ __('Perfiles') }}
                                    </a>
                                     <a class="dropdown-item" href="#">
                                        {{ __('Usuarios') }}
                                    </a>
                                  

                                </div>

                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/medico') }}">{{ __('Medicos') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Grupo Medico') }}</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Hospitales') }}</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/paciente') }}">{{ __('Pacientes') }}</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('Agenda') }}">{{ __('Agenda') }}</a>
                                </li>
                             
                                
                                  
                                
                    </ul>
                     @else 
                     <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                    <!-- <a class="nav-link" href="{{ route('register') }}">{{ __('') }}</a> -->
                                </li> 
                     </ul>
                      @endauth
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 ">
            @yield('content')
        </main>
    </div>
</body>
</html>
