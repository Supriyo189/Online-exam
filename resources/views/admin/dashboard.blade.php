@extends('layouts.admin_master')
@section('title','Admin')
@section('content')
<div class="container-fluid">
  <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h4> Over View</h4>
            </div>
        </div>
    </div><!-- /.container-fluid -->
  </section>
    <!-- /.row -->
   <section class="conent">
     <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{$user}}</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{$student}}</h3>

              <p>Student Registrations</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-graduate"></i>
            </div>
            <a href="{{action('Admin\UsersController@student')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{$teacher}}</h3>

              <p>Teacher Registrations</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-friends"></i>
            </div>
            <a href="{{action('Admin\UsersController@teacher')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{$admin}}</h3>

              <p>Admin</p>
            </div>
            <div class="icon">
              <i class="fas fa-user"></i>
            </div>
            <a href="{{action('Admin\UsersController@admin')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box" style="background-color: blueviolet">
            <div class="inner">
              <h3>{{$exam}}</h3>

              <p>Total Exams</p>
            </div>
            <div class="icon">
              <i class="fas fa-edit"></i>
            </div>
            <a href="{{action('Admin\Exam_Controller@exam')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box" style="background-color: blueviolet">
            <div class="inner">
              <h3>{{$question}}</h3>

              <p>Total Questions</p>
            </div>
            <div class="icon">
              <i class="fas fa-edit"></i>
            </div>
            <a href="{{action('Admin\QuestionController@question')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
     </div>
   </section>
    <!-- /.row -->
</div><!-- /.container-fluid -->
@endsection