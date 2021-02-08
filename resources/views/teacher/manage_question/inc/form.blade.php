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
            <div class="col-md-12">
              <div class="card ">
                <div class="card-header p-2 ">
                    
                    <a class="col-md-5" style="">Department of</a>
                </div>
                
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" class="form-horizontal" action="">
                        @csrf
                        <input type="hidden" name="id">
                        <div class="form-group row">
                          <div class="col-sm-6">
                            <input style="border: none;"readonly type="text" value="" class="form-control" id="inputName" placeholder="enter your name or id.." name="course_title">
                            
                          </div>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="enter course title" name="course_title">
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