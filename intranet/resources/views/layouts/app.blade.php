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
        <link href="{!!('assetss/css/typicons.min.css')!!}" rel="stylesheet" />
        <link href="{!!('assetss/css/animate.min.css')!!}" rel="stylesheet" />
        <link id="skin-link" href="" rel="stylesheet" type="text/css" />
          <link href="{!!('assetss/css/typicons.min.css')!!}" rel="stylesheet" />
          <link href="{!!('assetss/css/weather-icons.min.css')!!}" rel="stylesheet" />
            <link href="{!!('assetss/css/bootstrap.min.css')!!}" rel="stylesheet" />
            <link href="{!!('assetss/css/font-awesome.min.css')!!}" rel="stylesheet" />
  <link href="{!!('assetss/css/weather-icons.min.css')!!}" rel="stylesheet" />




</head>
<body>
    <div id="app">


        <div class="navbar">
            <div class="navbar-inner">
                <div class="navbar-container">

                    <!-- Collapsed Hamburger -->


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
                            <li style="list-style:none;">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"  >

                                    <span class="badge">{{ Auth::user()->name }} </span>
                                </a>

                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-messages" role="menu">
                                    <li classs="badge">
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
          </div>




    </div>
  </div>
</div>
</div>
  @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
