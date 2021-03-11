@extends('layouts.admin_master')
@section('title')
   Written Question Print
@endsection
@section('content')
    
<div >
    <div class="content" >
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid" >
                <div class="row mt-3">
                    <div class="col-md-2"></div>
                   
                    <div class="col-md-8">
                        
                        <div class="card">
                            <button class="btn btn-primary d-print-none" onclick="window.print()">Click here for printing <i class="fa fa-print"></i></button>
                            <h3 class=" text-center pt-2">Leading University, Sylhet</h3>
                            <h3 class=" text-center">Department of {{$course->department->name}}</h3>
                            <h4 class=" text-center"><span>  Course Title: <span > {{$course->course_title}} </span> </span></h4>
                            <h4 class=" text-center"><span>  Course Code: <span > {{$course->course_code}} </span> </span></h4>
                            <div class="card-header row col-sm-12 mb-3">
                                <h5 class="col-sm-6 ">Total time: {{$course->time}} Min</h5>
                                <h5 class=" col-sm-6 text-right">Total marks: {{$course->marks}} </h5>
                            </div>
                            @php
                                $i =1;
                            @endphp
                            
                            @foreach ($questions as $item)

                            <div class="row col-sm-12">                                  
                                <p class="col-sm-11">{{$i++}}. {{$item->question}}?</p>   
                                <p class="col-sm-1 text-right">{{$item->mark}}.</p>
                            </div>

                            @endforeach
                        </div>  
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
</div>
@endsection