
@extends('layouts.quiz')

@section('content')

       <!--Courses Content-->
       <div class="container">
        {{$options}}
        {{$questions}}
        <form action="/checkQuiz" method="GET">
             <div class="row d-flex justify-content-between">
                 <div class="col-2">
                     <h3>{{$exam['title']}}</h3>
                 </div>
                 <div class="col-3">
                     <h4 style="display: inline;">Time Left</h4>
                     <h4 style="width:60%;border:1px solid black; background-color: #F3F4FD; float: right ; text-align: center;">{{$exam["Duration"]}}:00</h4>
                 </div>
             </div>
             <div class="NoticeBoard">
                 <div class="row">
                     <div class="col-12">
                    @php
                        $i=1;
                    @endphp
                    @foreach ( $questions as $question )
                     <!--repeater-->
                        @foreach ($options as $options)
                        <div class="NoticeText">
                            <label for="loopIterator"><b>Q {{$i}}  </b></label>
                            <label for="Question"><b>{{$question['longtext']}}</b></label><br>
                            <input type="checkbox" name="Tick1" value="{{$options['correct1']}}" id="QuestionNUmner"><label for="identifer" class="m-3"> {{$options['option1']}}</label><br>
                            <input type="checkbox" name="Tick2" value="{{$options['correct2']}}" id="QuestionNUmner"><label for="identifer" class="m-3"> {{$options['option1']}}</label><br>
                            <input type="checkbox" name="Tick3" value="{{$options['correct3']}}" id="QuestionNUmner"><label for="identifer" class="m-3">{{$options['option1']}}</label><br>
                            <input type="checkbox" name="Tick4" value="{{$options['correct4']}}" id="QuestionNUmner"><label for="identifer" class="m-3"> {{$options['option1']}}</label><br>
                        </div>
                        @endforeach
                     <!--repeater-->
                     @php
                         $i++;
                     @endphp
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
