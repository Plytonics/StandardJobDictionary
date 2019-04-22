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
            <div class="row justify-content-center pt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-8">
                        <h5>User Profile Backups</h5>
                      </div>
                      <div class="col-4">
                        <form action="{{ route('jobsearch') }}" method="post">
                          <div class="form-group">
                            <div class="input-group">
                              <input class="form-control" type="text" name="searchKey" value="{{ old('searchKey') }}">
                              <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">Search</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered table-striped text-center">
                      <thead>
                        <tr>
                          <th scope="col">First Name</th>
                          <th scope="col">Last Name</th>
                          <th scope="col">Skill</th>
                          <th scope="col">Skill Pro</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if($users->count() > 0)
                        @foreach($users as $user)
                        <tr>
                          <th>{{ $user->firstname }}</th>
                          <th>{{ $user->lastname }}</th>
                          <th>{{ $user->skill }}</th>
                          <th>{{ $user->skillpro }}</th>
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
    </div>
  </div>
@endsection
