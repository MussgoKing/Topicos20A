<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>@yield('title')Tópicos 2020A</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href={{ route('cliente.index') }}>Clientes</a>
              </li> 
              <li class="nav-item active">
                  <a class="nav-link" href={{ route('producto.index') }}>Productos</a>
              </li>
          </ul>
      </div>
      <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto">My Papafrita System ®</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        -
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
              </li>
          </ul>
      </div>
  </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">@yield('header')</h1>
        </div>
      </div>

      <div class="container">
          @yield('content')

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; Mussgo King 2016-2020</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>