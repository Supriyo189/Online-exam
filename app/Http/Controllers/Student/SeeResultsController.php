<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

use App\Participation;

class SeeResultsController extends Controller
{
    public function see_results()
    {   
        $results = Participation::where('student_id',Auth::user()->StdID)->get();
        return view('student.results.see_results',compact('results'));
    }
}
