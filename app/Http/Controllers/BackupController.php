<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobInfo;
use App\UserProfiles;

class BackupController extends Controller
{
    //
	public function createJobInfo(Request $request)
	{
		$newJob = JobInfo::create($request->json()->all());
		return $newJob->id;
	}

	public function createUserProfiles(Request $request)
	{
		$newJob = UserProfiles::create($request->json()->all());
		return $newUser->id;
	}

}
