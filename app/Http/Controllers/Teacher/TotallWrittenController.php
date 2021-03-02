<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Department;
use App\Examtype;
use App\Written;
use Auth;

class TotallWrittenController extends Controller
{
    public function total_question()
    {
        $depts = Department::all();
        $examtypes = Examtype::all();
        $all_writtens = Written::where('teacher_id',Auth::user()->id)->get();
       return view('teacher.total_written_question.total_question',compact('all_writtens','depts','examtypes'));
    }
    public function total_question_update(Request $request)
    {
        $exam =  Exam_info::find($request->id);
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
        return back();
    }
    public function total_question_delete($id)
    {
        $exam = Exam_info::find($id);
        $exam->delete();
        return back();
    }
}
