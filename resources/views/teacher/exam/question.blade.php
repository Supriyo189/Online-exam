@extends('layouts.admin_master')
@section('title')
    Exam Info Question  
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
                                            
                                            
                                            <ol type="i">
                                                <li><input name="answer" value="{{$item->choice1}}" type="hidden"> {{$item->choice1}} </li>
                                                <li><input name="answer" value="{{$item->choice2}}" type="hidden"> {{$item->choice2}}</li>
                                                <li><input name="answer" value="{{$item->choice3}}" type="hidden"> {{$item->choice3}}</li>
                                                 <li><input name="answer" value="{{$item->choice4}}" type="hidden"> {{$item->choice4}}</li>
                                            </ol>
                                            
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