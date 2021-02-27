<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Exam_info;
use App\Participation;
use Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::user()->accountType == 'Admin') {
            $student = User::where('accountType','Student')->count();
            $teacher = User::where('accountType','Teacher')->count();
            $admin = User::where('accountType','Admin')->count();
            $exam = Exam_info::count();
            return view('admin.dashboard',compact('student','teacher','admin','exam'));
        }
        elseif(Auth::user()->accountType == 'Teacher'){
            $participation = Participation::where('unique_id','std_id')->count();
            return view('teacher.dashboard',compact('participation'));
        }else{
            return view('student.dashboard');
        }
        
    }
}
