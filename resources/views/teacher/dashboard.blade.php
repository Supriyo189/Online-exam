@extends('layouts.admin_master')
@section('title','Teacher')
@section('content')
<div class="container-fluid">
    <!-- /.row -->
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
        <div class="col-2"></div>
        <div class="col-2">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title" style="margin-left:5px;">Total Student</h3>
            </div>
            <!-- /.card-body -->
            {{$participation}}
          </div>
          <!-- /.card -->
        </div>
        <div class="col-2">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Total Teacher</h3>
            </div>
            <!-- /.card-body -->
            <div class="card-body">

            </div>
            
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      
      </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection