@extends('layouts.admin_master')
@section('title')
    See Results
@endsection
@section('content')
<div class="container-fluid">
    <!-- /.row -->
    <div class="row mt-3">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Your Results</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>Course Title</th>
                  <th>Course Code</th>                
                  <th class="text-right">Score</th>
                </tr>
              </thead>
              <tbody>
                  @php
                      $i = 1;
                  @endphp
                
                @foreach ($results as $item)
                @php
                    $course_title = App\Exam_info::where('unique_id',$item->unique_id)->value('course_title');
                    $course_code = App\Exam_info::where('unique_id',$item->unique_id)->value('course_code');
                @endphp
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$course_title}}</td>
                    <td>{{$course_code}}</td>
                    <td class="text-right">
                        {{$item->score}}
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

