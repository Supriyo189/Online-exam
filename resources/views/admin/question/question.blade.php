@extends('layouts.admin_master')
@section('title')
    Question
@endsection
@section('content')
    
<div  >
    <div class="content" >
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content" >
            <div class="container-fluid" >
                <div class="row mt-3">
                    <div class="col-md-2"></div>
                   
                    <div class="col-md-8">
                        <div class="card" >
                            <button class="btn btn-primary d-print-none" onclick="window.print()">Click here for printing <i class="fa fa-print"></i></button>
                            <h3 class=" p-2 text-center"><span><b style="font-size: 30px;"> Leading University, Sylhet <span class="text-success"></span> </b></span></h3>
                            <h3 class=" text-center" >Department of {{$course->department->name}}</h3>
                            <h4 class=" text-center"><span>  Course Title: <span > {{$course->course_title}} </span> </span></h4>
                            <h4 class=" text-center"><span>  Course Code: <span > {{$course->course_code}} </span> </span></h4>
                            <div class="card-header row col-sm-12 mb-3">
                                <h5 class="col-sm-6 ">Total time: {{$course->time}} Min</h5>
                                <h5 class=" col-sm-6 text-right">Total marks: {{$course->marks}} </h5>
                            </div>
                            
                            @php
                                $i =1;
                            @endphp
                            
                            @foreach ($question as $item)

                            <div class="row p-3">
                                <div class="col-md-12">                                  
                                    <div class="row">
                                         <h5 class="col-md-10 ml-10">{{$i++}}. {{$item->question}}?</h5>   <h5 class="col-md-2" style="text-align: right;"> {{$item->mark}}</h5>                                  
                                     </div>
                                           
                                </div>
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