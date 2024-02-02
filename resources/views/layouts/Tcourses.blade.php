@extends('layouts.dashboard')

@section('content')

        <!--Courses Content-->
        <div class="container">
            <div class="row">
                <div class="col-12">
                     <div id="cover">
                         <img src="{{asset('image/Rectangle 7.png')}}" alt="">
                     </div>
                 </div>
            </div>
            <div class="row">
            <div class="col-12">
                 <div class="header">
                     <h2>{{$course["course_code"]."-".$course["title"] . "-Section " . $course["section"] }}</h2>
                     <p><a href="/Tdashboard" >Dashboard</a>><a href="">Courses</a></p>
                 </div>
            </div>
            </div>
            <div class="row">
                 <div class="col-7">
                     <div class="row">
                         <ul class="coursesButton">
                             <li>
                                 <button type="button" class="btn btn-primary"><a href="/tnoticepannel/{{$course["id"]}}">Notices</a></button>
                             </li>
                             <li>
                                 <button type="button" class="btn btn-primary"><a href="/tquizpannel/{{$course["id"]}}">Quiz</a></button>
                             </li>
                             <li>
                                 <button type="button" class="btn btn-primary"><a href="/tassignmentpanel/{{$course["id"]}}">Assignment</a></button>
                             </li>
                             <li>
                                <button type="button" class="btn btn-primary"><a href="/ttestpannel/{{$course["id"]}}">Test</a></button>
                            </li>
                            <li>
                                <button type="button" class="btn btn-primary"><a href="/tgradepannel/{{$course["id"]}}">Results</a></button>
                            </li>
                         </ul>

                     </div>
                     <div class="row">
                        <div id="repeater">
                         <!--Repeater-->
                             @yield('inner_content')
                         <!--Repeater-->
                        </div>
                     </div>
                 </div>
                 <div class="col-3">
                    <div id="Addterminal">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                        Add Terminal
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><a href="/addQuiz/{{$course["id"]}}">Quiz</a></li>
                                            <li><a href="/addTest/{{$course["id"]}}">Test</a></li>
                                            <li><a href="/addNotice/{{$course["id"]}}">Notice</a></li>
                                            <li><a href="/addAssignment/{{$course["id"]}}">Assignment</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
         </div>



@endsection


