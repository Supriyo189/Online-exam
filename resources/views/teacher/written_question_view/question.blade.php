@extends('layouts.admin_master')
@section('title')
    Question 
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
                            <h1 class="card-header p-2 text-center"><span><b>  Question <span class="text-success"></span> </b></span></h1>
                            @php
                                $i =1;
                            @endphp
                            
                            @foreach ($questions as $item)

                            <div class="row p-3">
                                <div class="col-md-12">
                                    <h3 class="ml-2">{{$i++}}. {{$item->question}}?</h3>
                                    <div class="col-lg-12">
                                        <input type="hidden" name="question" value="{{$item->question}}">
                                        <input name="mark" value="{{$item->mark}}">
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