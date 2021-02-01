<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
use App\Examtype;
use App\Exam_info;
use Auth;
class CreateExamController extends Controller
{
  public function create_exam()
  {
    $depts = Department::all();
    $examtypes = Examtype::all();
     return view('teacher.create_exam.create_exam',compact('depts','examtypes'));
  }

  public function create(Request $request)
  {
    //dd($request->all());
    $exam = new Exam_info();
    $exam->teacher_code = $request->teacher_code;
    $exam->course_title = $request->course_title;
    $exam->course_code = $request->course_code;
    $exam->department_id = $request->department_id;
    $exam->examtype_id = $request->examtype_id;
    $exam->number_of_question = $request->number_of_question;
    $exam->time = $request->time;
    $exam->unique_id = "11111hhh";
    $exam->teacher_id = Auth::user()->id;
    $exam->save();
    return redirect()->back();
  }
}
