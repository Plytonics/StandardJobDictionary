@extends('layouts.dashboard')

@section('content')
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
                <h1 class="font-weight-bold">User Profile Backups</h1>
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Skill</th>
                      <th scope="col">Skill Pro</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    @if($users->count() > 0)
                      @foreach($users as $user)
                          <th>{{ $user->firstname }}</th>
                          <th>{{ $user->lastname }}</th>
                          <th>{{ $user->skill }}</th>
                          <th>{{ $user->skillpro }}</th>
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
@endsection
