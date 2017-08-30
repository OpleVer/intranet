<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Intranet</title>

    <!-- Styles-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link id="beyond-link" href="{!!('assetss/css/beyond.min.css')!!}" rel="stylesheet" />
        <link href="{!!('assetss/css/demo.min.css')!!}" rel="stylesheet" />
        <link href="{!!('assetss/css/animate.min.css')!!}" rel="stylesheet" />
        <link id="skin-link" href="" rel="stylesheet" type="text/css" />

</head>
<body>
    <div id="app">


        <nav class="navbar">
            <div class="navbar-inner">
                <div class="navbar-container">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Intranet
                    </a>


                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <div class="navbar-header pull-right">
                        <div class="navbar-account">
                            <ul class="dropdown-toggle">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="badge"><a href="{{ route('login') }}">Login</a></li>
                            <li class="badge"><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li classs="profile">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
