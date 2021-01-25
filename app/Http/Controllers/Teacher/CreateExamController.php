<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateExamController extends Controller
{
  public function create_exam()
  {
     return view('teacher.create_exam.create_exam');
  }
}
