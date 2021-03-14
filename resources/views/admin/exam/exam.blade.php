@extends('layouts.admin_master')
@section('title')
    Exam
@endsection 

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-1">
      <div class="col-md-4"></div>
      <div class="col-md-4">  
            <div class="text-center">
            
            </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>  
<div class="container-fluid">
  <!-- /.row -->
  <div class="row mt-3">
      {{-- Form --}}
      {{-- Form --}}
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Exams</h3>
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
                <th class="text-right pl-5px">Action</th>
              </tr>
            </thead>
            <tbody>
              @php
                  $i = 1;
              @endphp  
                @foreach ($exams as $item)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$item->course_title}}</td>
                  <td>{{$item->course_code}}</td>
                  {{--<td>{{$item->user->name}}</td>--}}
                  <td>{{$item->department->name}}</td>
                  
                  <td class="text-right">
                      <a class="btn btn-primary btn-sm ediBtn" href="{{action('Admin\Exam_Controller@question',['unique_id' => $item->id,'title' => str_slug($item->course_title)])}}">Question</a>
                      <a class="btn btn-primary btn-sm ediBtn" style="color:white;" href="{{action('Admin\Exam_Controller@result',['unique_id' => $item->unique_id,'title' => str_slug($item->course_title)])}}">Result</a>                        
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

