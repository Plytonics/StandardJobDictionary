<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #008000;
  position: fixed;
  z-index: 1;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 20px 16px;
  text-decoration: none;
  font-size: 30px;
}

.main {
  padding: 16px;
  margin-top: 40px;
  height: 1500px;
}

.sidenav {
  height: 100%;
  width: 100px;
  position: fixed;
  z-index: 0;
  top: 0;
  left: 0;
  background-color: #008000;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

</style>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<div class="navbar">
  <a>Harvest</a>
</div>
<div class="sidenav">
  <a ></a>
</div>

<div class="main">
  <body>
    <div style="text-align:center">
    <h1> Job Information Backups</h1>
  </div>
  <form action="{{ route('jobsearch') }}" method="post" align="center">
    @csrf
    <div class="form-group">
      <div class="input-group">
        <input class="form-control" type="text" name="searchKey" value="{{ old('searchKey') }}">
        <class="input-group-append">
        <button class="btn btn-outline-secondary" type="sumbit">Search</button>
      </div>
    </div>
</form>
      <table align="center">
        <thread>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Skill Required</th>
            <th>Skill Required Proficiency</th>
          </tr>
        </thread>
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
         <th> No Data Avaliable</th>
        @endif
      </tbody>
    </table>
</html>
