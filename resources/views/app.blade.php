<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset(mix('/css/app.css')) }}" rel="stylesheet" />
    <script src="{{ asset(mix('/js/app.js')) }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
                integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
                integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>FESSEF</title>
</head>
<body>
<div id="no-app">
     <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #3563a9;">
        <div class="container">
             <a class="navbar- " href="index.html">
                        <img src="{{url('asset/img/logo fessef.jpg')}}"  width="60px" height="60px" class="d-inline-block align-top" alt=""
                            style="border-radius: 50%;">
                        </b>
                    </a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="nav justify-content-end">


                </ul>
                <!-- Vertically centered modal -->
                <!-- Button trigger modal -->




                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
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
                        <li class="nav-item active">
                            <a href="{{ url('/home') }}" class="nav-link">Home</a>
                        </li>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"  href="/Annonce/Create">Feusseul</a><br>
                            <a class="dropdown-item"  href="/Annonce">mes feusseuls</a><br>
                        </div>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
                                    <i class="fa fa-eye"></i>Annonce
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->isCompany == 1 || Auth::user()->isAssociation == 1)
                                    <a class="dropdown-item"  href="/Annonce/Create">poster annonce</a>
                                    <a class="dropdown-item"  href="/Annonce">mes annonces</a>
                                    @endif
                                    <a class="dropdown-item" href="/Annonces">Toutes les annonces</a>
                                </div>
                            </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
                              <i class="fa fa-book"></i>Xam Xam
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if(Auth::user()->isCompany == 1 || Auth::user()->isAssociation == 1)
                                    <a class="dropdown-item"  href="/xamxam/create"> Poster xam xam</a>
                                    <a class="dropdown-item"  href="/xamxam">mes xam xam</a>
                                @endif
                                <a class="dropdown-item"  href="/xamxams">Tous les xam xams</a>
                            </div>
                        </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
                            Feusseul
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"  href="/Feusseul/create"> Poster feusseul</a>
                            <a class="dropdown-item"  href="/Feusseul">mes feusseuls</a>
                            <a class="dropdown-item"  href="/Feusseuls">Tous les feusseuls</a>
                        </div>
                    </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
    </nav>

    <main class="container mt-4">
        @yield('content')
    </main>
</div>
@inertia
</body>
</html>
