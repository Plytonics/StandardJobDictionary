<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Harvest Festival</a>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link text-light" href="#"><i class="fas fa-bell"><i style="display: none;" id="notify" class="fas fa-circle text-danger"></i></i></a>
        </li>
        <li class="nav-item">
          <div class="dropdown">
              <a class="nav-link text-light dropdown-toggle" href="#" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">Demo User</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="">Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <button class="d-md-none d-sm-block navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsableNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </li>
      </ul>
      <div class="collapse navbar-collapse" id="collapsableNav">
        <ul class="navbar-nav flex-column text-center">
          <li class="nav-item">
            <a class="nav-link" href="">Job Info Table</a>
          </li>
        </ul>
      </div>
    </nav>
    
    @yield('content')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
  </body>
</html>
