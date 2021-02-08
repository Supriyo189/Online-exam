@extends('layouts.admin_master')
@section('title')
    Give Exam
@endsection
@section('content')
<div class="content">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-12">
                @if(session()->has('message'))
                <div class="alert alert-danger">
                    {{ session()->get('message') }}
                </div>
            @endif
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
                  <a class="ml-1" style="font-size: 20px">Join Exam</a>
              </div><!-- /.card-header -->
              <div class="card-body">
                  <form method="POST" class="form-horizontal" action="{{action('Student\GiveExamController@participation')}}">
                      @csrf
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Student ID</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control mt-2" readonly value="{{Auth::user()->StdID}}" placeholder="Enter Student ID. example: 1712020103" name="student_id">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Exam Code</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Enter Exam Code" name="exam_code">
                        </div>
                      </div> 
                      <div class="form-group row">
                        <div class="offset-sm-4 col-sm-10">
                          <button type="submit" class="btn btn-success">Submit</button>
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

