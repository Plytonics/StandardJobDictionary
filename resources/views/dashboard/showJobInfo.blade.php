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
    <div class="container-fluid h-100">
      <div class="row h-100">
        <div class="d-xs-none d-md-flex w-100">
            <nav id="sidebarNav" class="navbar align-items-start navbar-expand-lg navbar-dark bg-dark pl-2 pr-4">
              <div class="collapse d-md-flex navbar-collapse p-3">
                <ul class="navbar-nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('showJobInfo') }}">
                      <i class="fas fa-briefcase pr-2"></i>Job Info Table
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('showUserInfo') }}">
                      <i class="fas fa-user pr-2"></i>User Info Table
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
            <div class="container-fluid">
              <div class="row justify-content-center text-center pt-4">
                <div class="col-12">
                  <h1 class="font-weight-bold">Job Information Backups</h1>
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Skill Required</th>
                        <th scope="col">Skill Required Pro</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      @if($jobs->count() > 0)
                        @foreach($jobs as $job)
                            <th>{{ $job->title }}</th>
                            <th>{{ $job->description }}</th>
                            <th>{{ $job->skillreq }}</th>
                            <th>{{ $job->skillreqpro }}</th>
                        @endforeach
                      @else
                        <th colspan="4">No Data Available</th>
                      @endif
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
  </body>
</html>
