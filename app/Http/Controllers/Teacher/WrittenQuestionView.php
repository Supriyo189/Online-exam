<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Written;
use App\Department;
use App\Examtype;
use App\WrittenQuestion;
use Auth;

class WrittenQuestionView extends Controller
{
    public function view_written_question()
   {
      $depts = Department::all();
      $examtypes = Examtype::all();
      $all_writtens = Written::where('teacher_id',Auth::user()->id)->get();
      return view('teacher.total_written_question.total_question' ,compact('all_writtens','depts','examtypes'));
   }
   public function written_question($quiz_id)
   {   
      $course = Written::where('quiz_id')->value('course_title');
      $questions = WrittenQuestion::where('quiz_id',$quiz_id)->get();
      return view('teacher.written_question_view.question',compact('questions','course'));
   }
}
