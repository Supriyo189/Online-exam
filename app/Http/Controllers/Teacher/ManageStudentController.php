<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageStudentController extends Controller
{
    public function manage_student()
  {
     return view('teacher.manage_student.manage_student');
  }
}
