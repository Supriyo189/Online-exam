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
                                <h1 class="card-header p-2 text-center"><span><b>  Examination on <span class="text-success">{{$course}}</span> </b></span></h1>
                                @php
                                    $i =1;
                                @endphp
                                
                                @foreach ($questions as $item)

                                <div class="row p-3">
                                    <div class="col-md-12">
                                        <form method="post" action="{{action('Student\GiveExamController@store_answer')}}" class="ansform">
                                            @csrf
                        
                                            <h3 class="ml-2">{{$i++}}. {{$item->question}}?</h3>
                                            <div class="col-lg-12">
                                                <input type="hidden" name="question" value="{{$item->question}}">
                                                <input type="hidden" name="student_id" value="{{$student_id}}">
                                                <input type="hidden" name="true_answer" value="{{$item->answer}}">
                                                <input name="answer" value="{{$item->choice1}}" type="radio"> {{$item->choice1}} <br>
                                                <input name="answer" value="{{$item->choice2}}" type="radio"> {{$item->choice2}}<br>
                                                <input name="answer" value="{{$item->choice3}}" type="radio"> {{$item->choice3}}<br>
                                                <input name="answer" value="{{$item->choice4}}" type="radio"> {{$item->choice4}}<br>
                                                <input type="submit" name="submit" value="submit" class="btn btn-primary" id="submitbtn">
                                            </div>
                                         </form> 
                                    </div>
                                </div>  
                                @endforeach
                            </div>  
                        </div>
                        <div class="col-md-2">
                            <nav class="pull-right">
                                <div class="sidebar-nav-fixed affix">
                                    <h4><b>Time <span id="timer" style="color: red">0.00 </span></b></h4>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('script')

<!-- script for time limitation of exam -->
<script type="text/javascript">
var timeoutHandle;
function countdown(minutes) {
    var seconds = 60;
    var mins = minutes
    function tick() {
        var counter = document.getElementById("timer");
        var current_minutes = mins-1
        seconds--;
        counter.innerHTML =
        current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        if( seconds > 0 ) {
            timeoutHandle=setTimeout(tick, 1000);
        } else {

            if(mins > 1){

               // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
               setTimeout(function () { countdown(mins - 1); }, 1000);

            }
        }
    }
    tick();
}

countdown('{{$findTime}}');

</script>

<!-- script for disable url -->
<script type="text/javascript">
    var time= '{{$findTime}}';
    var realtime = time*60000;
    setTimeout(function () {
        alert('Time Out');
        window.location.href= '{{url('/')}}';},
   realtime);

    
</script>

@endsection