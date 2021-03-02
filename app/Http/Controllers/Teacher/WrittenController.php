<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Department;
use App\Examtype;
use App\Written;
use App\WrittenQuestion;
use Auth;

class WrittenController extends Controller
{
    public function create_question()
    {
        $depts = Department::all();
        $examtypes = Examtype::all();
        return view('teacher.create_written_question.create_question_info',compact('depts','examtypes'));
    }
    public function create(Request $request)
    {
      //dd($request->all());
      $exam = new Written();
      $exam->teacher_code = $request->teacher_code;
      $exam->course_title = $request->course_title;
      $exam->course_code = $request->course_code;
      $exam->department_id = $request->department_id;
      $exam->examtype_id = $request->examtype_id;
      $exam->number_of_question = $request->number_of_question;
      $exam->time = $request->time;
      $exam->marks = $request->marks;
      
      $exam->teacher_id = Auth::user()->id;
      $exam->save();
      
      return view('teacher.create_written_question.question',compact('exam'));
    }
    public function written_question_store(Request $request)
    {
      $question = new  WrittenQuestion();
      $question->question = $request->question;
      $question->mark = $request->mark;
      $question->quiz_id = $request->quiz_id;
      $question->save();
  
      $id = $request->quiz_id;
  
      $ques_count =  WrittenQuestion::where('quiz_id',$id)->count();
      $ques_length =  Written::where('id',$id)->value('number_of_question');
  
      if ($ques_count < $ques_length) {
        $exam = Written::find($id);
        return view('teacher.create_written_question.question',compact('exam'));
      }else{
        return view('teacher.create_written_question.question_ready');
      }
    }
    public function written_question_edit($quiz_id){
      $written = WrittenQuestion::where('quiz_id',$quiz_id)->get();
      return view('teacher.written_question_edit.question_edit',compact('written'));
    }
    public function question_update(Request $request)
    {
      $question = WrittenQuestion::find($request->id);
      $question->question = $request->question;
      $question->mark = $request->mark;
      $question->save();
      return back();
    }

      
  }
