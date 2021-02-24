<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('public/admin_asset')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Exam</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('public/admin_asset')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->


         <li class="nav-item">
            <a href="{{action('DashboardController@dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
<!---------------Student Sidebar----------------------->
          @if (Auth::user()->accountType == 'Student')
          <li class="nav-item">
            <a href="{{action('Student\GiveExamController@give_exam')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Give Exam
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{action('Student\SeeResultsController@see_results')}}" class="nav-link">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                See Results
              </p>
            </a>
          </li>
          @endif

          <!---------------Teacher Sidebar----------------------->
          @if (Auth::user()->accountType == 'Teacher')
          <li class="nav-item">
            <a href="{{action('Teacher\CreateExamController@create_exam')}}" class="nav-link">
              <i class="nav-icon fas fa-plus-circle"></i>
              <p>
                create Exam
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{action('Teacher\ManageExamController@manage_exam')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Manage Exam
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{action('Teacher\Exam_Controller@exam')}}" class="nav-link">
              <i class="nav-icon fas fa-poll-h"></i>
              <p>
                Exams
              </p>
            </a>
          </li>
          @endif
        
          <!---------------Admin Sidebar----------------------->
        @if (Auth::user()->accountType == 'Admin')
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              User
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{action('Admin\UsersController@admin')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Admin</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{action('Admin\UsersController@student')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Students</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{action('Admin\UsersController@teacher')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Teachers</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{action('Admin\DepartmentController@index')}}" class="nav-link">
            <i class="nav-icon fas fa-university"></i>
            <p>
              Department
            </p>
          </a>
        </li>
      
        <li class="nav-item has-treeview">
          <a href="{{action('Admin\ExamtypeController@examtype')}}" class="nav-link">
            <i class="nav-icon fas fa-clock"></i>
            <p>
              Exam type
            </p>
          </a>
        </li>
        
        <li class="nav-item has-treeview">
          <a href="{{action('Admin\Exam_Controller@exam')}}" class="nav-link">
            <i class="nav-icon fas fa-poll-h"></i>
            <p>
              Exams
            </p>
          </a>
        </li>
        @endif

        <li class="nav-item">
          <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="nav-link text-danger">
            <i class="nav-icon fa fa-power-off"></i>
            <p>
              Logout
            </p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          </a>
        </li>

        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>