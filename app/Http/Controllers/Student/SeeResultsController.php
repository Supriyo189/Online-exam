<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeeResultsController extends Controller
{
    public function see_results()
    {
        return view('student.results.see_results');
    }
}
