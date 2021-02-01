@extends('layouts.admin_master')
@section('content')
    
<div class="container-fluid">
    <!-- /.row -->
    <div class="row mt-3">
        {{-- Form --}}
        {{-- Form --}}
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">All Results</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>Course Title</th>
                  <th>Course Code</th>
                  <th>No.Question</th>
                  <th>Time</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                  @php
                      $i = 1;
                  @endphp
                  @foreach ($all_exams as $item)
                  <tr>
                    <td>{{$item->course_title}}</td>
                    <td>{{$item->course_code}}</td>
                    <td>{{$item->number_of_question}}</td>
                    <td>{{$item->time}}</td>
                    <td class="text-right">
                        <button type="button" class="btn btn-primary btn-sm ediBtn">Edit</button>
                        <a onclick="" class="btn btn-danger btn-sm" href="">Del</a>
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
