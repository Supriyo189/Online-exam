<?php

namespace App\Http\Controllers;
use App\Department;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration()
    {
        $depts = Department::all();
        return view('auth.register',compact('depts'));

    }

}
