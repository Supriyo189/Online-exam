<?php

namespace App\Http\Controllers\Admin;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    public function index(){
        $departments = Department::all();
        return view('admin.dept.department',compact('departments'));
    }

    public function store(Request $request){
        $dapartment = new Department();
        $dapartment->name = $request->name;
        $dapartment->slug = str_slug($request->name);
        $dapartment->save();
        return back();
    }
    public function delete($id)
    {
    $department = Department::find($id);
    $department->delete();
    return back();
    }

    // public function update_page($id)
    // {
    //     $department = Department::find($id);
    //     return view('admin.dept.update',compact('department'));
    // }

    public function update(Request $request)
    {
        //return $request->id;
        $department = Department::find($request->id);
        $department->name = $request->name;
        $department->slug = str_slug($request->name);
        $department->save();
        return back();
    }
}
