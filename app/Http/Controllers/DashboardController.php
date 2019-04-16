<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobInfo;
use App\UserProfiles;

class DashboardController extends Controller
{
    public function showJobInfo()
    {
      $jobs = JobInfo::paginate(50);
      return view('dashboard.showJobInfo', ['jobs' => $jobs]);
    }

    public function showUserInfo()
    {
      $users = UserProfiles::paginate(50);
      return view('dashboard.showUserInfo', ['users' => $users]);
    }

    public function search(Request $request)
    {
      //TODO: Search Data and Paginate
      return;
    }

    public function deleteJob($id)
    {
      //TODO: Implement Soft Deletes
      return;
    }

    public function deleteUser($id)
    {
      //TODO: Implement Soft Deletes
      return;
    }
}
