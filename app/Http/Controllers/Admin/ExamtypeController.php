<?php

namespace App\Http\Controllers\Admin;
use App\Examtype;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamtypeController extends Controller
{
    public function examtype()
    {
        $examtype = Examtype::all();
        return view('admin.exam_type.exam_type',compact('examtype'));
    }
    public function store(Request $request)
    {
        $examtype = new Examtype();
        $examtype->name = $request->name;
        $examtype->slug = str_slug($request->name);
        $examtype->save();
        return back();
    }
    public function update(Request $request)
    {
        $examtype = Examtype::find($request->id);
        $examtype->name = $request->name;
        $examtype->slug = str_slug($request->name);
        $examtype->save();
        return back();
    }
    public function delete($id)
    {
        $examtype = Examtype::find($id);
        $examtype->delete();
        return back();
    }
}
