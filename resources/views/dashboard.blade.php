@extends('layouts.dashboard')

@section('content')

<div class="container">
    <!--Dashboard Contenet starts-->
    <div class="row" >
        <div class="col-12">
            <div id="RecenetAccessedCourses" class="DashboardBox">
                <h4>Recenet Accessed Courses</h4>
                <div class="card" style="width: 98%; margin: 0 auto;" onclick='window.location.href = "noticepannel"'>
                    <img src="image/Rectangle 7.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Course name - course code - course section</h5>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar w-75 "></div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-12">
                <div id="CoursesOverview" class="DashboardBox">
                    <div class="row">
                    <h4>Courses Overview</h4>
                    </div>
                    <div class="row">
                        <!--repeater here-->
                        <div class="col-6">
                            <a href="/noticepannel" onclick='window.location.href = "noticepannel"'>
                                <div class="card  mt-5" style="width: 98%; ">
                                    <img src="image/Rectangle 7.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5>Course name - course code - course section</h5>
                                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar w-75 "></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--repeater here-->
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--Dashboard Contenet ends-->
    </div>
</div>

@endsection
