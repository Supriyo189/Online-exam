@extends('layouts.admin_master')
@section('title','Manage_Question')

@section('content')
@include('teacher.manage_question.inc.form') 
 {{-- Form --}}  
<div class="container-fluid">
    <!-- /.row -->
    <div class="row mt-3">
        
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
                  <th>S/N</th>
                  <th>Teacher Name/ID</th>
                  <th>Course Title</th>
                  <th>Course Code</th>
                  <th>Dept</th>
                  <th>No.Question</th>
                  <th>Time</th>
                  <th class="text-right">Action</th>
                </tr>
              </thead>
              <tbody>
                  
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    {{-- <td>{{$item->department['name']}}</td> --}}
                    <td></td>
                    <td></td>
                    <td class="text-right">
                        <button type="button" class="btn btn-primary btn-sm ediBtn">Edit</button>
                        <a onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm" href="">Del</a>
                    </td>
                  </tr>
                       
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
    
