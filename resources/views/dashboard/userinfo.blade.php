<html>
  <body>
    <h1> User Information Backups</h1>
    <form action="{{ route('jobsearch') }}" method="post">
      <div class="form-group">
        <div class="input-group">
          <input class="form-control" type="text" name="searchKey" value="{{ old('searchKey') }}">
          <class="input-group-append">
          <button class="btn btn-outline-secondary" type="sumbit">Search</button>
        </div>
      </div>
  </form>
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
