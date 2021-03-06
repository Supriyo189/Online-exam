@extends('layouts.admin_master')
@section('title')
    Total Written Question  
@endsection
@section('content')
{{-- Form --}}
 @include('teacher.total_written_question.inc.form') 
 {{-- Form --}}  
<div class="container-fluid">
  <section class="content-header">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-6">
                
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
    <!-- /.row -->
    <div class="row">
        
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">All Questions</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>S/N</th>                 
                  <th>Course Title</th>
                  <th>Course Code</th>
                  <th>Dept</th>
                  <th>Question</th>
                  <th>Question</th>
                  <th class="text-right">Exam Info</th>
                </tr>
              </thead>
              <tbody>
                  @php
                      $i = 1;
                  @endphp
                  @foreach ($all_writtens as $item)
                  <tr>
                    <td>{{$i++}}</td>                   
                    <td>{{$item->course_title}}</td>
                    <td>{{$item->course_code}}</td>
                    <td>{{$item->department->name}}</td>                 
                    <td>
                      <a type="button" class="btn btn-primary btn-sm " href="{{action('Teacher\WrittenController@written_question_edit',['quiz_id' => $item->id,'title' => str_slug($item->course_title)])}}"><i class="fas fa-edit pr-2" ></i>Edit</a>
                    </td>
                    <td>
                      <a type="button" class="btn btn-primary btn-sm " href="{{action('Teacher\WrittenQuestionView@written_question',['quiz_id' => $item->id,'title' => str_slug($item->course_title)])}}"><i class="fas fa-eye pr-2" ></i>View</a>
                    </td>
                    <td class="text-right">
                        <button type="button" class="btn btn-primary btn-sm ediBtn" data-id="{{$item->id}}" data-title="{{$item->course_title}}" data-ccode="{{$item->course_code}}" data-tcode="{{$item->teacher_code}}" data-noq="{{$item->number_of_question}}" data-marks="{{$item->marks}}" data-time="{{$item->time}}" data-dept="{{$item->department_id}}" data-etype="{{$item->examtype_id}}"><i class="far fa-eye mr-2"></i>View</button>
                    </td>
                  </tr>
                  @endforeach         
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
      $(function () {
        
        $("#updateForm").hide();

        $(".ediBtn").click(function(e){
          e.preventDefault();

          $("#updateForm").show();

          var id = $(this).data('id');
          var title = $(this).data('title');
          var ccode = $(this).data('ccode');
          var tcode = $(this).data('tcode');
          var noq = $(this).data('noq');
          var marks = $(this).data('marks');
          var time = $(this).data('time');
          var dept = $(this).data('dept');
          var etype = $(this).data('etype');


          $("#updateForm [name = id]").val(id);
          $("#updateForm [name = teacher_code]").val(tcode);
          $("#updateForm [name = department_id]").val(dept);
          $("#updateForm [name = course_code]").val(ccode);
          $("#updateForm [name = course_title]").val(title);
          $("#updateForm [name = examtype_id]").val(etype);
          $("#updateForm [name = number_of_question]").val(noq);
          $("#updateForm [name = marks]").val(marks);
          $("#updateForm [name = time]").val(time);


        });
      });
    </script>
@endsection

