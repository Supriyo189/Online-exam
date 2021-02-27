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
                    <form method="POST" class="form-horizontal" action="{{action('Teacher\CreateExamController@question_update')}}">
                        @csrf
                        <input type="hidden" name="id">
                        <div class="form-group row">
                          <div class="col-sm-12">
                            <input type="text" class="form-control"  placeholder="Question"  name="question" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="option 1"  name="choice1" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="option 2" name="choice2" required>
                          </div>
                        </div> 
                        <div class="form-group row">
                          <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="option 3" name="choice3" required>
                          </div>
                        </div> 
                        <div class="form-group row">
                          <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="option 4" name="choice4" required>
                          </div>
                        </div> 
                        <div class="form-group row">
                          <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="true answer" name="answer" required>
                          </div>
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
            <div class="col-md-2"></div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
</div>    