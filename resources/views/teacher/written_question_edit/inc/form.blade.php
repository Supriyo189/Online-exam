<div class="content">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content" id="edit_question">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2"></div>
            <!-- /.col -->
            <div class="col-md-8">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" class="form-horizontal" action="{{action('Teacher\WrittenController@question_update')}}">
                        @csrf
                        <input type="hidden" name="id">
                        <div class="form-group row">
                          <div class="col-sm-12">
                            <input type="text" class="form-control"  placeholder="Question"  name="question" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="individual mark"  name="marks" required>
                          </div>
                        </div> 
                       
                        <input type="hidden" class="form-control" name="quiz_id">
                        
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
            <div class="col-md-2"></div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
</div>    