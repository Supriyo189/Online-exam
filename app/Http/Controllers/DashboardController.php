<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::user()->accountType == 'Admin') {
            return view('admin.dashboard');
        }
        elseif(Auth::user()->accountType == 'Teacher'){
            return view('teacher.dashboard');
        }else{
            return view('student.dashboard');
        }
        
    }
}
