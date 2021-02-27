<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Participation;
use App\Exam_info;
use App\Question;
use App\Answer;
use Auth;
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
        $check_code = Exam_info::where('unique_id',$request->exam_code)->first();
        if ($check_code !=null) {
            if ($check > 0) {
                return redirect()->back()->with(['message' => 'You already done this exam!']);
            }
            
            else{
                $participation = new Participation();
                $participation->student_id = $stdID;
                $participation->unique_id = $examCode;
                $participation->score = $initialScore;
                $participation->std_id = Auth::user()->id;
                $participation->save();
    
                $student_id = Participation::where('student_id',$stdID)->value('id');
                $find_course = Exam_info::where('unique_id',$examCode)->value('id');
                $findTime = Exam_info::where('unique_id',$examCode)->value('time');
                $course = Exam_info::where('unique_id',$examCode)->value('course_title');
                $questions = Question::where('quiz_id',$find_course)->inRandomOrder()->get();
    
    
                return view('student.exam.exam',compact('student_id','find_course','findTime','course','questions'));
            }
        }else{
            return redirect()->back()->with(['message' => 'Exam code is not valid!']);
        }
    }

    public function store_answer(Request $request)
    {
        //
        if ($request->ajax()) {
            //dd($request->all());
            $answer = new Answer();
            $answer->stu_id = $request->student_id;
            $answer->question = $request->question;
            $answer->given_answer = $request->answer;
            $answer->true_answer = $request->true_answer;
            $answer->save();

            if ($request->answer == $request->true_answer) {
                $insert=Participation::where('id',$request->student_id)->increment('score');
            }
            return response($answer);
        }else{
            return "ajax not done";
        }
    }
}

