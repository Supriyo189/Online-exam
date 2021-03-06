@extends('layouts.admin_master')
@section('title')
    Result
@endsection
@section('content')
<section class="content-header">
  <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
              
          </div>
      </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row mt-3">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Parcipate</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>S/N</th>
                    <th>StdID</th>
                    <th>Name</th>
                    <th>Dept.</th>
                    <th class="text-right">Score</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                  @foreach ($result as $item)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$item->student_id}}</td>
                    <td>{{$item->student['name']}}</td>
                    <td>{{$item->student['department']}}</td>
                    
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
  </section>
@endsection