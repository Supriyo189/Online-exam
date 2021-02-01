<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exam_info;
use Auth;
class ManageExamController extends Controller
{
    public function manage_exam()
    {
        $all_exams = Exam_info::where('teacher_id',Auth::user()->id)->get();
       return view('teacher.manage_exam.manage_exam',compact('all_exams'));
    }

    
}
