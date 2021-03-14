@extends('layouts.admin_master')
@section('content')
  @section('title')
      Admin | Student list
  @endsection  
<div class="container-fluid">
  <section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
               
            </div>
        </div>
    </div><!-- /.container-fluid -->
  </section>
    <!-- /.row -->
    <div class="row mt-3">
        {{-- Form --}}
        {{-- Form --}}
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">All Students</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>Name</th>
                  <th>Student ID</th>
                  <th>Dept.</th>
                  <th class="text-right">Email Address</th>
                </tr>
              </thead>
              <tbody>
                  @php
                      $i = 1;
                  @endphp
                  @foreach ($student as $item)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->StdID}}</td>
                    <td>{{$item->department}}</td>
                    <td class="text-right">
                      {{$item->email}}
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
