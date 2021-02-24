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
                            <h1 class="card-header p-2 text-center"><span><b>  Examination on <span class="text-success"></span> </b></span></h1>
                            @php
                                $i =1;
                            @endphp
                            
                            @foreach ($questions as $item)

                            <div class="row p-3">
                                <div class="col-md-12">
                                    
                                       
                    
                                        <h3 class="ml-2">{{$i++}}. {{$item->question}}?</h3>
                                        <div class="col-lg-12">
                                            <input type="hidden" name="question" value="{{$item->question}}">
                                            
                                            <input type="hidden" name="true_answer" value="{{$item->answer}}">
                                            <input name="answer" value="{{$item->choice1}}" type="radio"> {{$item->choice1}} <br>
                                            <input name="answer" value="{{$item->choice2}}" type="radio"> {{$item->choice2}}<br>
                                            <input name="answer" value="{{$item->choice3}}" type="radio"> {{$item->choice3}}<br>
                                            <input name="answer" value="{{$item->choice4}}" type="radio"> {{$item->choice4}}<br>
                                            
                                        </div>
                                      
                                </div>
                            </div>  
                            @endforeach
                        </div>  
                    </div>
                    {{--<div class="col-md-2">
                        <nav class="pull-right">
                            <div class="sidebar-nav-fixed affix">
                                <h4><b>Time <span id="timer" style="color: red">0.00 </span></b></h4>
                            </div>
                        </nav>
                    </div>--}}
                </div>
            </div>
        </section>
    </div>
</div>
@endsection