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
      $jobs = UserProfiles::paginate(15);
      return view("dashboard.userinfo", ["jobs" => $jobs]);
  	}
}
