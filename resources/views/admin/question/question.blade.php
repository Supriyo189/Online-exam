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
                            <h1 class="card-header p-2 text-center"><span><b style="font-size: 30px;"> Leading University, Sylhet <span class="text-success"></span> </b></span></h1>
                            
                            
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