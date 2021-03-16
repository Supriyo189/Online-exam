<div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content" id="updateForm">
        <div class="container-fluid">
          <div class="row mt-5 mb-5">
            <div class="col-md-2"></div>
            <!-- /.col -->
            <div class="col-md-8">
              <div class="card">
                <div class="card-header p-2 ">
                    <i class="fas fa-clipboard ml-3"></i>
                    <a class="ml-1 " style="font-size: 20px"> Exam Info</a>
                </div>
                
                <!-- /.card-header -->
                <div class="card-body">
                    
                        
                        <input type="hidden" name="id">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Teacher Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="enter your name or id.." readonly name="teacher_code">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label" readonly>Course Title</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="enter course title" name="course_title" readonly>
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Course code</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="enter course code" name="course_code" readonly>
                          </div>
                        </div> 
                
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Department</label>
                          <div class="col-sm-10">
                            <select class="custom-select form-control" required name="department_id" disabled>
                              <option value="">Select Department</option>
                              @foreach ($depts as $item)
                                  <option value="{{$item->id}}">{{$item->name}}</option>
                              @endforeach
                              
                            </select>
                            
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Exam type</label>
                          <div class="col-sm-10">
                            <select class="custom-select form-control" required name="examtype_id" disabled>
                              <option value="">Select examtype</option>
                              @foreach ($examtypes as $item)
                                  <option value="{{$item->id}}">{{$item->name}}</option>
                              @endforeach
                              
                            </select>
                            
                          </div>
                        </div>        
                        
                        <div class="form-group row" id="type">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Number of question</label>
                            <div class="col-sm-10">
                              <input type="text" name="number_of_question" class="form-control mt-3" id="inputSkills" placeholder="Enter number of Question. Example: 10"  readonly>
                            </div>
                        </div>
                        <div class="form-group row" id="student_id">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Time</label>
                            <div class="col-sm-10">
                              <input type="text" name="time" class="form-control" id="inputSkills" placeholder="Enter time limit. Example: 10" readonly>
                            </div>
                        </div>
                          
                      
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