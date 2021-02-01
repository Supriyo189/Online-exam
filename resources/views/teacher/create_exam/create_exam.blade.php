@extends('layouts.admin_master')
@section('title')
    Exam Info
@endsection
@section('content')
<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2"></div>
            <!-- /.col -->
            <div class="col-md-8">
              <div class="card">
                <div class="card-header p-2">
                    <i class="fas fa-clipboard ml-3"></i>
                    <a class="ml-1" style="font-size: 20px">Ceate Exam</a>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" class="form-horizontal" action="{{action('Teacher\CreateExamController@create')}}">
                        @csrf
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Teacher ID</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="enter your name or id.." name="teacher_code">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Course Title</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="enter course title" name="course_title">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Course code</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="enter course code" name="course_code">
                          </div>
                        </div> 
                
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Department</label>
                          <div class="col-sm-10">
                            <select class="custom-select form-control" required name="department_id">
                              <option value="">Select Department</option>
                              @foreach ($depts as $item)
                                  <option value="{{$item->id}}">{{$item->name}}</option>
                              @endforeach
                              
                            </select>
                            
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Exam type</label>
                          <div class="col-sm-10">
                            <select class="custom-select form-control" required name="examtype_id">
                              <option value="">Select examtype</option>
                              @foreach ($examtypes as $item)
                                  <option value="{{$item->id}}">{{$item->name}}</option>
                              @endforeach
                              
                            </select>
                            
                          </div>
                        </div>
                        <div class="form-group row" id="type">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Number of question</label>
                            <div class="col-sm-10">
                              <input type="text" name="number_of_question" class="form-control mt-2" id="inputSkills" placeholder="Enter number of Question. Example: 10" >
                            </div>
                          </div>
                          {{-- <div class="form-group row" id="student_id">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Unique Id</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputSkills" placeholder="" name="" >
                            </div>
                          </div> --}}
                          <div class="form-group row" id="student_id">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Time</label>
                            <div class="col-sm-10">
                              <input type="text" name="time" class="form-control" id="inputSkills" placeholder="Enter lime limit. Example: 10" name="">
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <div class="offset-sm-4 col-sm-10">
                              <button type="submit" class="btn btn-success">Ceate Exam Info</button>
                            </div>
                          </div>
                      </form>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <div class="col-md-2"></div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
</div>    
@endsection