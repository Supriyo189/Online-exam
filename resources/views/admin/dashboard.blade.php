@extends('layouts.admin_master')
@section('title','Dashboard')
@section('content')
<div class="container-fluid">
  <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h4> Over View</h4>
            </div>
        </div>
    </div><!-- /.container-fluid -->
  </section>
    <!-- /.row -->
   

    <div class="row mt-3">
      <div class="col-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Total Student</h3>
          </div>
          <!-- /.card-body -->
          {{$student}}

        </div>
        <!-- /.card -->
      </div>
      <div class="col-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Total Teacher</h3>
          </div>
          <!-- /.card-body -->
          {{$teacher}}
        </div>
        <!-- /.card -->
      </div>
      <div class="col-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Total Admin</h3>
          </div>
          <!-- /.card-body -->
          {{$admin}}
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Total Exams</h3>
          </div>
          <!-- /.card-body -->
          {{$exam}}
        </div>
        <!-- /.card -->
      </div>
    </div>
        
    
    
    
    <!-- /.row -->
</div><!-- /.container-fluid -->
@endsection