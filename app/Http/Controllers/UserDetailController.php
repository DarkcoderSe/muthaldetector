<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetail;
use Carbon\Carbon;

class UserDetailController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    
    public function getInfo(Request $request)
    {

        $userDetail = new UserDetail;
        $userDetail->name = $request->name;
        $userDetail->email = $request->email;
        $userDetail->dob = $request->dob;
        $userDetail->muth_frequency = $request->muthFrequency;
        $userDetail->firth_muth = $request->firthMuth;
        $userDetail->facebook_profile = $request->facebookProfile;
        $userDetail->save();

        $name = $userDetail->name;
        $totalWeeks = Carbon::now()->diffInWeeks($request->firthMuth);
        $totalMuths = $totalWeeks * $request->muthFrequency;
        $totalSperms = 5000000 * $totalMuths;

        return view('result')->with([
            'name' => $name,
            'totalMuths' => $totalMuths,
            'totalSperms' => $totalSperms
        ]);

    }
}
