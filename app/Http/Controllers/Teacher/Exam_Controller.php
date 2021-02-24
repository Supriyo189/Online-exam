<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Department;
use App\Examtype;
use App\Exam_info;
use App\Question;
use App\Participation;
use Auth;

class Exam_Controller extends Controller
{
    public function exam()
   {
      $depts = Department::all();
      $examtypes = Examtype::all();
      $all_exams = Exam_info::where('teacher_id',Auth::user()->id)->get();
      return view('teacher.exam.exam' ,compact('all_exams','depts','examtypes'));
   }
   public function question($quiz_id)
   {
        
      $course = Exam_info::where('unique_id')->value('course_title');
      $questions = Question::where('quiz_id',$quiz_id)->get();
      return view('teacher.exam.question',compact('questions','course'));
   }
   public function result($quiz_id)
   {
        
      $result = Participation::where('unique_id',$quiz_id)->get();
      return view('teacher.exam.results',compact('result'));
   }
}
