<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
use App\Examtype;
use App\Exam_info;
use App\Question;
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
    $exam->unique_id = $request->unique_id;
    $exam->teacher_id = Auth::user()->id;
    $exam->save();
    
    return view('teacher.create_exam.question',compact('exam'));
  }


  public function question_store(Request $request)
  {
    $question = new Question();
    $question->question = $request->question;
    $question->choice1 = $request->choice1;
    $question->choice2 = $request->choice2;
    $question->choice3 = $request->choice3;
    $question->choice4 = $request->choice4;
    $question->answer = $request->answer;
    $question->quiz_id = $request->quiz_id;
    $question->save();

    $id = $request->quiz_id;

    $ques_count =  Question::where('quiz_id',$id)->count();
    $ques_length =  Exam_info::where('id',$id)->value('number_of_question');

    if ($ques_count < $ques_length) {
      $exam = Exam_info::find($id);
      return view('teacher.create_exam.question',compact('exam'));
    }else{
      $uniqueID = Exam_info::where('id',$id)->value('unique_id');
      return view('teacher.create_exam.question_ready',compact('uniqueID'));
    }
  }
  

}
