<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function teacher()
    {
        $teachers = User::where('accountType','Teacher')->get();
        return view('admin.users.teacher.teachers',compact('teachers'));
    }
    public function admin()
    {
        $admin = User::where('accountType','Admin')->get();
        return view('admin.users.admin.admin',compact('admin'));
    }
    public function student()
    {
        $student = User::where('accountType','Student')->get();//paginate(1)
        return view('admin.users.student.student',compact('student'));
    }
    
}
