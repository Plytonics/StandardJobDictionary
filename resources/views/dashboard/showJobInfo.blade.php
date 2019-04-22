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
                    @if($jobs->count() > 0)
                      @foreach($jobs as $job)
                        <tr>
                          <th>{{ $job->title }}</th>
                          <th>{{ $job->description }}</th>
                          <th>{{ $job->skillreq }}</th>
                          <th>{{ $job->skillreqpro }}</th>
                        </tr>
                      @endforeach
                    @else
                      <th colspan="4">No Data Available</th>
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection