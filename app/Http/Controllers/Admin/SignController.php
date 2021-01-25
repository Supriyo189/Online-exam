<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignController extends Controller
{
    public function sign_in()
    {
        return view('sign_in_up.sign_in');
    }
    public function sign_up()
    {
        return view('sign_in_up.sign_up');
    }
}
