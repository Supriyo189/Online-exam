<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Manage_profileController extends Controller
{
    public function manage_profile()
    {
        $depts = Department::all();
        return view('admin.manage_profile',compact('depts'));
    }
    public function update_profile(Request $request)
    {
        //return $request->id;
        $profile = User::find($request->id);
        $profile->name = $request->name;
        $profile->email= $request->email;
        $profile->department= $request->department;
        // $profile->password = $request->password;
        $profile->save();
        return back();
    }
}
