<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Manage_profileController extends Controller
{
    public function manage_profile()
    {
        return view('admin.manage_profile');
    }
    public function update_profile(Request $request)
    {
        //return $request->id;
        $profile = User::find($request->id);
        $profile->name = $request->name;
        $profile->email= $request->email;
        $profile->password = $request->password;
        $profile->save();
        return back();
    }
}
