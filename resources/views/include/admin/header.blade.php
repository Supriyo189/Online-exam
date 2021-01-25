<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

   
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
       <h3 class="dropdown-item-title text-sm">Profile<i class="far fa-user-circle ml-2"></i></h3>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        <a href="#" class="dropdown-item">
          <i class="fas fa-user mr-2"></i>
          Name
        </a>

        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i>Email
        </a>

        <a href="{{ route('logout') }}"  onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" class="dropdown-item nav-link text-danger">
          <h3 class="text-sm text-center"><i class="fa fa-power-off mr-2"></i>Logout</h3>
          
        </a>

      </div>
    </li>
    
  </ul>
</nav>
<!-- /.navbar -->
</nav>