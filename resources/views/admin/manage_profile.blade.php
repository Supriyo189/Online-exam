@extends('layouts.admin_master')
@section('title')
    {{Auth::user()->name}}
@endsection
@section('content')
<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
  
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-circle img-circle"
                         src="{{asset('public/user_profile/avatar7.png')}}"
                         alt="User profile picture">
                  </div>
  
                  <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>
  
                  <p class="text-muted text-center">Department of {{Auth::user()->department}}</p>
                  
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Followers</b> <a class="float-right">1,322</a>
                    </li>
                    <li class="list-group-item">
                      <b>Following</b> <a class="float-right">543</a>
                    </li>
                    <li class="list-group-item">
                      <b>Friends</b> <a class="float-right">13,287</a>
                    </li>
                  </ul>

                  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <!-- About Me Box -->
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                    <i class="fas fa-user-cog ml-3"></i>
                    <a class="ml-1" style="font-size: 20px">Settings</a>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" class="form-horizontal" action="{{action('Admin\Manage_profileController@update_profile')}}">
                        @csrf
                        <input type="hidden" value="{{ Auth::user()->id}}" name="id">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="Full Name" value="{{ Auth::user()->name}}" name="name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ Auth::user()->email}}" name="email">
                          </div>
                        </div>
                        {{-- <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="Password" name="password">
                          </div>
                        </div> --}}
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Department</label>
                          <div class="col-sm-10">
                            <input type="text" name="department" class="form-control" id="inputSkills" placeholder="Department" value="{{ Auth::user()->department}}" list="departments">
                            <datalist id="departments">
                              @foreach ($depts as $item)
                                  <option value="{{$item->name}}">
                              @endforeach
                            </datalist>
                          </div>
                        </div>
                        <div class="form-group row" id="type">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Account type</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputSkills" placeholder="account type" value="{{ Auth::user()->accountType}}">
                            </div>
                          </div>
                          <div class="form-group row" id="student_id">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Student Id</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputSkills" placeholder="student id" name="stdID" value="{{ Auth::user()->StdID}}">
                            </div>
                          </div>
                          <div class="form-group row" id="student_id">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Uload New Image</label>
                            <div class="col-sm-10">
                              <input type="file" class="mt-2" id="inputSkills" placeholder="student id" name="stdID" value="">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-danger">Save</button>
                            </div>
                          </div>
                      </form>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
</div>    
@endsection

@section('script')
<script>
    $(function ()
      {     
        $("#student_id").hide();
        $('#type').change(function(){
          var type = $(this).val();
          if (type == 'Student') {
            $("#student_id").show();
            $("#student_id").attr("required");
          }else{
            $("#student_id").hide();
          }
        });
  
      });
  </script>
    
@endsection