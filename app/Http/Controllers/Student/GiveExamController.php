<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GiveExamController extends Controller
{
    public function give_exam()
    {
        return view('student.exam.give_exam');
    }
}
