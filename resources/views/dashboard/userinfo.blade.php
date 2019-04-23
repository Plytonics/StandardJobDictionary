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
    <h1> User Information Backups</h1>
  </div>
      <table align="center">
        <thread>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Skill</th>
            <th>Skill Proficiency</th>
          </tr>
        </thread>
        <tbody>
          @if($jobs->count() > 0)
           @foreach($jobs as $job)
            <tr>
              <th>{{ $job->firstname }}</th>
              <th>{{ $job->lastname }}</th>
              <th>{{ $job->skill }}</th>
              <th>{{ $job->skillpro }}</th>
            </tr>
          @endforeach
        @else
         <th> No Data Avaliable</th>
        @endif
      </tbody>
    </table>
  </div>
</html>
