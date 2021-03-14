@extends('layouts.admin_master')
@section('title','Exam type')
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
      @include('admin.exam_type.inc.form')
        {{-- Form --}}
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">All Exam type</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>Exam types</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                  @php
                      $i = 1;
                  @endphp
                  @foreach ($examtype as $item)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$item->name}}</td>
                    <td class="text-right">
                        <button type="button" class="btn btn-primary btn-sm ediBtn" data-id="{{$item->id}}" data-name="{{$item->name}}">Edit</button>
                        <a onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm" href="{{action('Admin\ExamtypeController@delete',['id'=> $item->id])}}">Del</a>
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

            $(".ediBtn").click(function (e){
                e.preventDefault();

                $("#addForm").hide();
                $("#updateForm").show();

                var id = $(this).data('id');
                var name = $(this).data('name');

                $("#updateForm [name = id]").val(id);
                $("#updateForm [name = name]").val(name);
            });
        
        });
    </script>
@endsection