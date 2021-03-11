<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Written;
use App\WrittenQuestion;

class QuestionController extends Controller
{
    public function question()
    {
        $questions = Written::all();
        return view('admin.question.question_list',compact('questions'));
    }
    public function question_view($quiz_id)
    {
        
        
        $question = WrittenQuestion::where('quiz_id',$quiz_id)->get();
        return view('admin.question.question',compact('question'));
    }
}
