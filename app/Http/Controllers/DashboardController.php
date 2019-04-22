<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobInfo;
use App\UserProfiles;

class DashboardController extends Controller
{
    public function showJobInfo()
    {
      $jobs = JobInfo::paginate(15);
      return view('dashboard.showJobInfo', ['jobs' => $jobs]);
    }

    public function showUserInfo()
    {
      $users = UserProfiles::paginate(15);
      return view('dashboard.showUserInfo', ['users' => $users]);
    }
    public function searchJobInfo(Request $request)
    {
      $jobs = JobInfo::search($request['searchKey'])->paginate(15);
      return view('dashboard.showJobInfo', ['jobs' => $jobs]);
    }
    public function searchUserInfo(Request $request)
    {
      $users = UserProfiles::search($request['searchKey'])->paginate(15);
      return view('dashboard.showUserInfo', ['users' => $users]);
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
