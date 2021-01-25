<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageExamController extends Controller
{
    public function manage_exam()
    {
       return view('teacher.manage_exam.manage_exam');
    }
}
