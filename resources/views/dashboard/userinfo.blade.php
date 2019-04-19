<html>
  <body>
    <h1> User Information Backups</h1>
      <table>
        <thread>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Skill</th>
            <th>Skill Pro</th>
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
</html>
