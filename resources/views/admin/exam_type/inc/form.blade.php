<div class="col-12" id="addForm">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title col-3">Add Examtype</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{action('Admin\ExamtypeController@store')}}">
          @csrf
            <div class="card-body">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" id="" placeholder="Enter dept name.." name="name">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm "> <i class="fa fa-plus-circle"></i> Save Examtype</button>
          </div>
        </form>
      </div>
  </div>
  {{-- <div class="col-2"></div> --}}
  {{-- <div class="col-2"></div> --}}
  <div class="col-12" id="updateForm">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title col-3">Edit Examtype</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{action('Admin\ExamtypeController@update')}}">
          @csrf
          <input type="hidden" name="id">
            <div class="card-body">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" id="" placeholder="Enter dept name.." name="name">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Update Examtype</button>
          </div>
        </form>
      </div>
  </div>