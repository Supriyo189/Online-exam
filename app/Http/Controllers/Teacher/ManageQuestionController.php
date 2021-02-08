<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
use App\Examtype;
use App\Exam_info;
use App\Question;
use Auth;

class ManageQuestionController extends Controller
{
   public function manage_question()
   {
      $depts = Exam_info::where('department_id',Auth::user()->department_name)->get();
      $examtypes = Exam_info::where('examtype_id',Auth::user()->accountType)->get();
      $all_exams = Exam_info::where('teacher_id',Auth::user()->id)->get();
      return view('teacher.manage_question.manage_question',compact('all_exams','depts','examtypes'));
   }
   public function question_update(Request $request)
   {
      $questions = Question::find($request->id);
   }
}
