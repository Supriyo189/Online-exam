<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Participation;
use App\Exam_info;
use App\Question;

class GiveExamController extends Controller
{
    public function give_exam()
    {
        return view('student.exam.give_exam');
    }
    public function question()
    {
        return view('student.exam.exam');
    }
    public function participation(Request $request)
    {
        $stdID = $request->student_id;
        $examCode = $request->exam_code;
        $initialScore = 0;

        $check = Participation::where('student_id',$stdID)->where('unique_id',$examCode)->count();
        if ($check > 0) {
            return redirect()->back()->with(['message' => 'You already done this exam!']);
        }else{
            $participation = new Participation();
            $participation->student_id = $stdID;
            $participation->unique_id = $examCode;
            $participation->score = $initialScore;
            $participation->save();

            $student_id = Participation::where('student_id',$stdID)->value('id');
            $find_course = Exam_info::where('unique_id',$examCode)->value('id');
            $findTime = Exam_info::where('unique_id',$examCode)->value('time');
            $course = Exam_info::where('unique_id',$examCode)->value('course_title');
            $questions = Question::where('quiz_id',$find_course)->get();


            return view('student.exam.exam',compact('student_id','find_course','findTime','course','questions'));
        }
    }
}

