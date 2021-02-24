<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Exam_info;
use App\Question;
use App\Participation;

class Exam_Controller extends Controller
{
    public function exam()
    {
        $exams = Exam_info::all();
        return view('admin.exam.exam',compact('exams'));
    }
    public function question($quiz_id)
    {
        
        $course = Exam_info::where('unique_id')->value('course_title');
        $questions = Question::where('quiz_id',$quiz_id)->get();
        return view('admin.exam.question',compact('questions','course'));
    }
    public function result($quiz_id)
    {
        
        $result = Participation::where('unique_id',$quiz_id)->get();
        return view('admin.exam.results',compact('result'));
    }
}
