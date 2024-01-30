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
                                 <button type="button" class="btn btn-primary"><a href="/noticepannel">Notices</a></button>
                             </li>
                             <li>
                                 <button type="button" class="btn btn-primary"><a href="/quizpannel">Quiz</a></button>
                             </li>
                             <li>
                                 <button type="button" class="btn btn-primary"><a href="/assignmentpanel">Assignment</a></button>
                             </li>
                             <li>
                                <button type="button" class="btn btn-primary"><a href="/testpannel">Test</a></button>
                            </li>
                            <li>
                                <button type="button" class="btn btn-primary"><a href="/gradepannel">Results</a></button>
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
                 <div class="col-5">
                     <div id="ProgressBox">
                         <div class="row">
                             <div class="col-2">
                                 <img src="image/dummyProfile.jpg" class="iconGrader" alt="">
                             </div>
                             <div class="col-10">
                                 <h6>Tagline</h6>
                                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque culpa soluta alias.</p>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-2">
                                 <h6 style="margin: 1.5rem 0rem 0rem 1.5rem;">Score</h6>
                             </div>
                             <div class="col-10">

                                 <div class="progress mb-5 mt-4" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                 <div class="progress-bar" style="width: 50%; "></div>
                                 </div>
                             </div>
                         </div>
                         <div class="row d-flex justify-content-around">
                             <div class="card" style="width: 9rem;">
                                 <div class="card-body align-middle">
                                 <circle-progress value="50" max="100"></circle-progress>
                                 <h6 class="card-title">Quiz</h6>
                                 </div>
                             </div>
                             <div class="card" style="width: 9rem;">
                                 <div class="card-body align-middle">
                                 <circle-progress value="50" max="100"></circle-progress>
                                 <h6 class="card-title">Assignment</h6>
                                 </div>
                             </div>
                             <div class="card" style="width: 9rem;">
                                 <div class="card-body align-middle">
                                 <circle-progress value="50" max="100"></circle-progress>
                                 <h6 class="card-title">Test</h6>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
            </div>
         </div>



@endsection


