<?php

namespace App\Http\Controllers\Coverpage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoverpageController extends Controller
{
    public function coverpage()
    {
        return view('coverpage.coverpage');
    }
}
