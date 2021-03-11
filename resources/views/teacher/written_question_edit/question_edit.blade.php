@extends('layouts.admin_master')
@section('title')
    Written Question Edit  
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

                            @include('teacher.written_question_edit.inc.form')

                            @foreach ($written as $item)
                             
                            <div class="row p-3">
                                <div class="col-md-12">
                    
                                        <h3 class="ml-2">{{$i++}}. {{$item->question}}?</h3>
                                        <p class="pl-3">mark: {{$item->mark}}</p>
                                        <div class="form-group row">
                                            <div class="offset-sm-1 col-sm-10">
                                              <button type="button" class="btn btn-success btn-sm ediBtn" data-id="{{$item->id}}" data-question="{{$item->question}}" data-mark="{{$item->mark}}" >Edit</button>
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
          var mark = $(this).data('mark');
         // var quiz_id = $(this).data('quiz_id');


          $("#edit_question [name = id]").val(id);
          $("#edit_question [name = question]").val(question);
          $("#edit_question [name = mark]").val(mark);
          //$("#edit_question [name = unique_id]").val(quiz_id);

        });
      });
    </script>
@endsection