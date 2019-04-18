<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobInfo;

class dashboard extends Controller
{

    public function showjobtable(Request $request)
  	{
      $jobs = JobInfo::paginate(15);
      return view("dashboard.jobsinfo", ["jobs" => $jobs]);
  	}
}
