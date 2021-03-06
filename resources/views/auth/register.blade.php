
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/admin_asset')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('public/admin_asset')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/admin_asset')}}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page" style="background-color: rgb(46, 139, 123)">
<div class="register-box">
  <div class="login-logo">
    <a href="{{action('Coverpage\CoverpageController@coverpage')}}">Back to <b>Home</b></a>
  </div>
  <div class="login-logo">
    <p><b>Exam</b>On</p>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

      <form action="{{ route('register')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror "placeholder="Full name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="input-group mb-3">
          <input id="email"  type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"  name="email" value="{{ old('email') }}" required autocomplete="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="input-group mb-3">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input id="password-confirm" type="password" class="form-control" placeholder="confirm password" name="password_confirmation" required autocomplete="new-password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        {{--Department--}}
        
        {{--Account Type--}}
        <div class="form-group">
            <select class="custom-select form-control" id="type" required name="accountType">
              <option value="">Select account type</option>
              <option value="Teacher">Teacher</option>
              <option value="Student">Student</option>
              <option value="Admin">Admin</option>
            </select>
        </div>
        @error('accountType')
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="form-group" id="department">
          <select class="custom-select form-control" required name="department">
            <option value="">Select Department</option>
            @foreach ($depts as $item)
                <option value="{{$item->name}}">{{$item->name}}</option>
            @endforeach
            
          </select>
        </div>
        <div class="input-group mb-3" id="student_id">
          <input id="std_id" type = "text" class="form-control" placeholder="Student id: 10 numbers" name="stdID" minlength="10" maxlength="10" size="10" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))">
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-id-badge"></span>
            </div>
          </div>
        </div>
        @error('stdID')
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="row">
          <!-- /.col -->
          <div class="col-4"></div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="text-center">
        <p>- OR -</p>
      </div>
      <div class="row">       
          <a href="{{route('login')}}" class="text-center" style="margin-left:20%; ">I already have a membership</a>        
      </div>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('public/admin_asset')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/admin_asset')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--  App -->
<script src="{{asset('public/admin_asset')}}/dist/js/adminlte.min.js"></script>

<script>

  $(function ()
    {     
      $("#student_id").hide();
      $("#department").hide();
      $('#type').change(function(){
        var type = $(this).val();
        if (type == 'Student') {
          $("#student_id").show();
          $("#std_id").attr('required', 'required');

          $("#department").show();
          $("#department").find('select').attr('required', 'required');
        }else if(type == 'Teacher'){
          $("#student_id").hide();
          $("#std_id").removeAttr('required', 'required');

          $("#department").show();
          $("#department").find('select').attr('required', 'required');
        }else{
          $("#department").hide();
          $("#department").find('select').removeAttr('required', 'required');

          $("#student_id").hide();
          $("#std_id").removeAttr('required', 'required');
        }
      });

    });
</script>


</body>
</html>
