<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css" integrity="sha512-6c4nX2tn5KbzeBJo9Ywpa0Gkt+mzCzJBrE1RB6fmpcsoN+b/w/euwIMuQKNyUoU/nToKN3a8SgNOtPrbW12fug==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Styles  -->
    <link rel="stylesheet" href="{{ asset('site/styles.css')}}">
</head>
<body> 

            <div class="container-fluid">
                <div class="row flex-nowrap">
                    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light shadow">
                        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-black min-vh-100">
                            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto mt-2 text-black text-decoration-none">
                                <i class="fab fa-laravel fa-lg text-secodary me-2"></i> <span class="fs-5 d-none d-sm-inline">Menu</span>
                            </a>
                            @if (Auth::user())
                                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                    <li class="nav-item">
                                        <a href="/home" class="nav-link align-middle text-dark text-decoration-none  px-0">
                                            <i class="fas fa-home fa-lg text-secodary"></i> <span class="  ms-1 d-none d-sm-inline">Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#submenuMembro" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark text-decoration-none">
                                            <i class="fas fa-users fa-lg text-dark"></i> <span class="ms-1 d-none d-sm-inline">Membros</span> 
                                        </a>
                                        <ul class="collapse show nav flex-column ms-1" id="submenuMembro" data-bs-parent="#menu">
                                            <li class="w-100">
                                                <a href="/membros" class="nav-link px-0">                                          
                                                    <i class="fas fa-list fa-sm text-secondary"></i>    
                                                    <span class="d-none d-sm-inline text-secondary text-decoration-none">Listar Membro</span> 
                                                </a>
                                            </li>    
                                            <li class="w-100">
                                                <a href="/membros/create" class="nav-link px-0">
                                                    <i class="fas fa-user-plus fa-sm text-secondary"></i>    
                                                    <span class="d-none d-sm-inline text-secondary text-decoration-none">Adicionar Membro</span> 
                                                </a>
                                            </li>
                                        
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#submenuContatos" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark text-decoration-none">
                                            <i class="fas fa-address-book fa-lg text-dark"></i> <span class="ms-1 d-none d-sm-inline">Contatos</span> 
                                        </a>
                                        <ul class="collapse show  nav flex-column ms-1" id="submenuContatos" data-bs-parent="#menu">
                                            <li class="w-100">
                                                <a href="/contatos" class="nav-link px-0">
                                                    <i class="fas fa-list fa-sm text-secondary"></i>    
                                                    <span class="d-none d-sm-inline text-secondary text-decoration-none">Listar Contatos</span> 
                                                </a>
                                            </li>    
                                            <li class="w-100">
                                                <a href="/contatos/create" class="nav-link px-0">
                                                    <i class="fas fa-phone fa-sm text-secondary"></i>    
                                                    <span class="d-none d-sm-inline text-secondary text-decoration-none">Adicionar Contatos</span> 
                                                </a>
                                            </li>
                                        
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#submenuEnderecos" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark text-decoration-none">
                                            <i class="fas fa-map-marked-alt fa-lg text-dark"></i> <span class="ms-1 d-none d-sm-inline">Endereços</span> 
                                        </a>
                                        <ul class="collapse show  nav flex-column ms-1" id="submenuEnderecos" data-bs-parent="#menu">
                                            <li class="w-100">
                                                <a href="/enderecos" class="nav-link px-0">
                                                    <i class="fas fa-list fa-sm text-secondary"></i>    
                                                    <span class="d-none d-sm-inline text-secondary text-decoration-none">Listar Endereços</span> 
                                                </a>
                                            </li>    
                                            <li class="w-100">
                                                <a href="/enderecos/create" class="nav-link px-0">
                                                    <i class="fas fa-map-marker-alt fa-sm text-secondary"></i>    
                                                    <span class="d-none d-sm-inline text-secondary text-decoration-none">Adicionar Endereço</span> 
                                                </a>
                                            </li>
                                        
                                        </ul>
                                    </li>

                                </ul>
                            @endif
                            <hr>
                            <div class="dropdown pb-4 mb-4 d-flex align-items-center ">
                           
                                <ul class="navbar-nav ms-auto">
                              
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        
                                        @endif

                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>                               

                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>                                    
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col py-3">
                        <main class="py-4">
                            @yield('content')
                        </main>
                    </div>
                </div>
            </div>

        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    Left Side Of Navbar 
                    <ul class="navbar-nav me-auto">

                    </ul>

                    Right Side Of Navbar 
                    <ul class="navbar-nav ms-auto">
                        Authentication Links 
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                              
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>                               

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Adicionar Endereço
                            </a>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->

    
  <!-- //  </div> -->
    <script src="{{asset('site/jquery.js')}}"></script>
    <script src="{{asset('site/jquery.validate.min.js')}}"></script>
    <script src="{{asset('site/bootstrap.js')}}"></script>
    <script src="{{asset('site/jquery.mask.js')}}"></script>
    
   
</body>
</html>
