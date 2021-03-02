@extends('layouts.admin_master')
@section('title')
    {{Auth::user()->name}}
@endsection
@section('content')
<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-1">
            <div class="col-md-4"></div>
            <div class="col-md-4">  
                  <div class="text-center">
                   <h3 style="color:green"> Profile</h3>
                  </div>
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
                    <i class="fas fa-user-cog ml-3"></i>
                    <a class="ml-1" style="font-size: 20px">Settings</a>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" class="form-horizontal" action="{{action('Admin\Manage_profileController@update_profile')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ Auth::user()->id}}" name="id">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="Full Name" value="{{ Auth::user()->name}}" name="name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ Auth::user()->email}}" name="email">
                          </div>
                        </div>
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
                            <label for="inputSkills" class="col-sm-2 col-form-label">Upload New Image</label>
                            <div class="col-sm-10">
                              <input type="file" class="mt-2" id="inputSkills" name="image" onchange="document.getElementById('profile_image').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                          </div>
                          <div class="form-group row" id="student_id">
                            <img id="profile_image" width="300" height="100" />
                          </div>
                          <div class="form-group row">
                            <div class="offset-sm-5 col-sm-10">
                              <button type="submit" class="btn btn-success">Save</button>
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