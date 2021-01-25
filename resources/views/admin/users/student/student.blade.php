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
            <h3 class="card-title">All Students</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>Name</th>
                  <th class="text-right">Action</th>
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
                    <td class="text-right">
                        <button type="button" class="btn btn-primary btn-sm ediBtn" data-id="{{$item->id}}" data-name="{{$item->name}}">Edit</button>
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
