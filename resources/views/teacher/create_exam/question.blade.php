@extends('layouts.admin_master')
@section('title')
    Qustion    
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
    <section class="content" id="updateForm">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2"></div>
            <!-- /.col -->
            <div class="col-md-8">
              <div class="card">
                <div class="card-header p-2 ">
                    <i class="fas fa-clipboard ml-3"></i>
                    <a class="ml-1 " style="font-size: 20px">Create Question</a>
                </div>
                
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" class="form-horizontal" action="{{action('Teacher\CreateExamController@question_store')}}">
                        @csrf
                        <input type="hidden" name="id">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Question</label>
                          <div class="col-sm-10">
                            {{-- <input type="text" class="form-control" id="inputName" placeholder="enter your name or id.." name="teacher_code"> --}}
                             <textarea class="form-control" name="question" id="inputName" cols="5" rows="1"  placeholder="enter question"></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Option 1</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="option 1" name="choice1">
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Option 2</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="option 2" name="choice2">
                          </div>
                        </div> 
                
                       
                                
                        
                        <div class="form-group row" id="type">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Option 3</label>
                            <div class="col-sm-10">
                              <input type="text" name="choice3" class="form-control" id="inputSkills" placeholder="option 3" >
                            </div>
                        </div>
                    
                        <div class="form-group row" id="student_id">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Option 4</label>
                            <div class="col-sm-10">
                              <input type="text" name="choice4" class="form-control" id="inputSkills" placeholder="option 4" name="">
                            </div>
                        </div>
                        <div class="form-group row" id="student_id">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Currect Answer</label>
                            <div class="col-sm-10">
                              <input type="text" name="answer" class="form-control" id="inputSkills" placeholder="cortrect answer" name="">
                            </div>
                        </div>
                          <input type="hidden" name="quiz_id" value="{{$exam->id}}">
                        <div class="form-group row">
                            <div class="offset-sm-4 col-sm-10">
                              <button type="submit" class="btn btn-success">Next</button>
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