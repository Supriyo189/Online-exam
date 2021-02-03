<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
use App\Examtype;
use App\Exam_info;
use Auth;
class ManageExamController extends Controller
{
    public function manage_exam()
    {
        $depts = Department::all();
        $examtypes = Examtype::all();
        $all_exams = Exam_info::where('teacher_id',Auth::user()->id)->get();
       return view('teacher.manage_exam.manage_exam',compact('all_exams','depts','examtypes'));
    }
    public function update(Request $request)
    {
        $all_exams =  Exam_info::find($request->id);
        $exam->teacher_code = $request->teacher_code;
        $all_exams->course_title = $request->course_title;
        $exam->course_code = $request->course_code;
        $exam->department_id = $request->department_id;
        $exam->examtype_id = $request->examtype_id;
        $exam->number_of_question = $request->number_of_question;
        $exam->time = $request->time;
        //$exam->unique_id = "11111hhh";
        $exam->teacher_id = Auth::user()->id;
        $all_exams->save();
        return back();
    }
    public function delete($id)
    {
        $all_exams = Exam_info::find($id);
        $all_exams->delete();
        return back();
    }

    
}
