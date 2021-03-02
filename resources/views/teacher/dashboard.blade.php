@extends('layouts.admin_master')
@section('title','Teacher')
@section('content')

    
<section class="content-header">
  <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
              
          </div>
      </div>
  </div><!-- /.container-fluid -->
</section>
      <div class="container-fluid">
          <div class="col-md-5"></div>
          <div class="row mb-3">
            <div class="col-md-4"></div>
            <div class="col-md-4">  
                  <div class="text-center">
                   <h3 style="color:green"> Profile</h3>
                  </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">  
              <!-- Profile Image -->
              <div class="card card-primary ">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-circle img-circle"
                         src="{{(Auth::user()->image == 'default.jpg') ? asset('public/user_profile/avatar7.png') : asset('public/uploads/profile/'.Auth::user()->image)}}"
                         alt="User profile picture" style="width: 185px; height:213px;">
                  </div>
                </div>
                <!-- /.card-body -->
              </div>             
            </div>
            <div class="col-md-4">
              <!-- Profile Image -->
              <div class="card card-primary ">
                <div class="card-body box-profile">                 
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Name :</b> <a class="float-right">{{Auth::user()->name}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Email Address :</b> <a class="float-right">{{Auth::user()->email}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Department :</b> <a class="float-right">{{Auth::user()->department}}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Account :</b> <a class="float-right">{{Auth::user()->accountType}}</a>
                    </li>
                  </ul>
                </div>
                <!-- /.card-body -->
              </div>           
            </div>
          </div>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{$participation}}</h3>
    
                  <p>Total Participations</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user-friends"></i>
                </div>
                
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{$exam}}</h3>
    
                  <p>Total Exams</p>
                </div>
                <div class="icon">
                  <i class="fas fa-edit"></i>
                </div>
                
              </div>
            </div>
            <!-- ./col -->
          </div>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <p style="font-size: 40px;">Make question</p>
                  <h3></h3>
    
                  
                </div>
                <div class="icon">
                  <i class="fas fa-user-friends"></i>
                </div>
                <a href="{{action('Teacher\WrittenController@create_question')}}" class="small-box-footer">Click here <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>0</h3>
    
                  <p>Total Questionss</p>
                </div>
                <div class="icon">
                  <i class="fas fa-edit"></i>
                </div>
                <a href="{{action('Teacher\TotallWrittenController@total_question')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
      </div><!-- /.container-fluid -->
  
@endsection