<html>
  <body>
    <h1> Job Information Backups</h1>
      <table>
        <thread>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Skill Required</th>
            <th>Skill Required Pro</th>
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
