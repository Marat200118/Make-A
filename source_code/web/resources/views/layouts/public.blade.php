
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir = "ltr">
  <head>
    <meta charset = "utf-8">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>{{ config('app.name', 'Laravel') }}</title>
  </head>
  <body>
    <div class="navbar_container container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <div class="logo">
            <a href = "/">
              <img class = "logo_button" src="wish.jpg" href="/">
            </a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
          <div class="nav_buttons">
            <ul class="nav nav-pills nav-fill">
              <li class="nav-item">
                <a class="nav-link" href="offer.html" tabindex="-1" aria-disabled="true">Vakances</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about_us" tabindex="-1" aria-disabled="true">Par mums</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact" tabindex="-1" aria-disabled="true">Kontakti</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile_student.html" tabindex="-1" aria-disabled="true">Mans profils</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    -->


            @yield('content')



    <script src="/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  </body>



</html>

