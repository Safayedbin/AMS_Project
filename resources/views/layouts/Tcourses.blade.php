@extends('layouts.dashboard')

@section('content')

        <!--Courses Content-->
        <div class="container">
            <div class="row">
                <div class="col-12">
                     <div id="cover">
                         <img src="image/Rectangle 7.png" alt="">
                     </div>
                 </div>
            </div>
            <div class="row">
            <div class="col-12">
                 <div class="header">
                     <h2>Course Code-CourseName-Section</h2>
                     <p><a href="/dashboard" >Dashboard</a>><a href="">Courses</a></p>
                 </div>
            </div>
            </div>
            <div class="row">
                 <div class="col-7">
                     <div class="row">
                         <ul class="coursesButton">
                             <li>
                                 <button type="button" class="btn btn-primary"><a href="/tnoticepannel">Notices</a></button>
                             </li>
                             <li>
                                 <button type="button" class="btn btn-primary"><a href="/tquizpannel">Quiz</a></button>
                             </li>
                             <li>
                                 <button type="button" class="btn btn-primary"><a href="/tassignmentpanel">Assignment</a></button>
                             </li>
                             <li>
                                <button type="button" class="btn btn-primary"><a href="/ttestpannel">Test</a></button>
                            </li>
                            <li>
                                <button type="button" class="btn btn-primary"><a href="/tgradepannel">Results</a></button>
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
                                            <li><a href="/addQuiz">Quiz</a></li>
                                            <li><a href="/addTest">Test</a></li>
                                            <li><a href="/addNotice">Notice</a></li>
                                            <li><a href="/addAssignment">Assignment</a></li>

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


