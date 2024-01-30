
@extends('layouts.quiz')

@section('content')

       <!--Courses Content-->
       <div class="container">
        <form action="">
             <div class="row d-flex justify-content-between">
                 <div class="col-2">
                     <h3>Title</h3>
                 </div>
                 <div class="col-3">
                     <h4 style="display: inline;">Time Left</h4>
                     <h4 style="width:60%;border:1px solid black; background-color: #F3F4FD; float: right ; text-align: center;">00:00</h4>
                 </div>
             </div>
             <div class="NoticeBoard">
                 <div class="row">
                     <div class="col-12">
                    {{ $i=1;}}
                    @foreach ( $questions as $question )
                     <!--repeater-->
                         <div class="NoticeText">
                             <label for="loopIterator"><b>Q {{$i}}  </b></label>
                             <label for="Question"><b>{{$question['longtext']}}</b></label><br>
                             <input type="checkbox" name="identifer" id="QuestionNUmner"><label for="identifer" class="m-3"> {{$question['answer1']}}</label><br>
                             <input type="checkbox" name="identifer" id="QuestionNUmner"><label for="identifer" class="m-3"> {{$question['answer2']}}</label><br>
                             <input type="checkbox" name="identifer" id="QuestionNUmner"><label for="identifer" class="m-3">{{$question['answer3']}}</label><br>
                             <input type="checkbox" name="identifer" id="QuestionNUmner"><label for="identifer" class="m-3"> {{$question['answer4']}}</label><br>
                         </div>
                     <!--repeater-->
                     {{$i++;}}
                     @endforeach
                     </div>
                 </div>
             </div>
                 <div class="row d-flex justify-content-end">
                     <div class="col-1 mt-5">
                         <input type="submit" class="btn btn-primary">
                     </div>
                 </div>
         </form>


     </div>

@endsection
