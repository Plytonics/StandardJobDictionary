<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobInfo;
use App\UserProfiles;

class dashboard extends Controller
{

    public function showjobtable(Request $request)
  	{
      $jobs = JobInfo::paginate(15);
      return view("dashboard.jobsinfo", ["jobs" => $jobs]);
  	}

    public function showusertable(Request $request)
  	{
      $users = UserProfiles::paginate(15);
      return view("dashboard.userinfo", ["users" => $users]);
  	}
    public function searchJobInfo(Request $request){
      $jobs = JobInfo::search($request['searchKey'])->paginate(15);
      return view('dashboard.jobsinfo', ['jobs' => $jobs]);
    }
    public function searchUserInfo(Request $request){
      $users = UserProfiles::search($request['searchKey'])->paginate(15);
      return view('dashboard.userinfo', ['users' => $users]);
    }
}
