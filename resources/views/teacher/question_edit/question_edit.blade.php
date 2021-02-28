@extends('layouts.admin_master')
@section('title')
    Exam Info   
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
                            <h1 class="card-header p-2 text-center">
                                <span>
                                    <b> 
                                        Question <span class="text-success"></span> 
                                    </b>
                                </span>
                            </h1>
                            @php
                                $i =1;
                            @endphp

                            @include('teacher.question_edit.inc.form')

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
                                            
                                            <p class="pl-4" style="color: rgb(5, 155, 255); font-size:18px">Ans : <input name="answer" value="{{$item->answer}}" type="hidden"> {{$item->answer}}</p>
                                            
                                            
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-1 col-sm-10">
                                              <button type="submit" class="btn btn-success btn-sm ediBtn" data-id="{{$item->id}}" data-question="{{$item->question}}" data-option1="{{$item->choice1}}" data-option2="{{$item->choice2}}" data-option3="{{$item->choice3}}" data-option4="{{$item->choice4}}" data-correct_ans="{{$item->answer}}">Edit</button>
                                            </div>
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
@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
      $(function () {
        
        $("#edit_question").hide();

        $(".ediBtn").click(function(e){
          e.preventDefault();

          $("#edit_question").show();
          var id = $(this).data('id');
          var question = $(this).data('question');
          var option1 = $(this).data('option1');
          var option2 = $(this).data('option2');
          var option3 = $(this).data('option3');
          var option4 = $(this).data('option4');
          var correct_ans = $(this).data('correct_ans');
         // var quiz_id = $(this).data('quiz_id');


          $("#edit_question [name = id]").val(id);
          $("#edit_question [name = question]").val(question);
          $("#edit_question [name = choice1]").val(option1);
          $("#edit_question [name = choice2]").val(option2);
          $("#edit_question [name = choice3]").val(option3);
          $("#edit_question [name = choice4]").val(option4);
          $("#edit_question [name = answer]").val(correct_ans);
          //$("#edit_question [name = unique_id]").val(quiz_id);

        });
      });
    </script>
@endsection