@extends('layouts.dashboard')

@section('content')

<div class="container">
    <!--Dashboard Contenet starts-->
    <div class="row">
        <div class="col-12">
            <div id="RecenetAccessedCourses" class="DashboardBox">
                <h4>Recenet Accessed Courses</h4>
                <div class="card" style="width: 98%; margin: 0 auto;" onclick='window.location.href = "tnoticepannel"'>
                    <img src="image/Rectangle 7.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>{{$data[0]['title'] ."-". $data[0]['course_code'] ."- Section ". $data[0]['section']}}</h5>

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
                @foreach ($data->chunk(2) as $chunk)
                    <div class="row">
                        @foreach ($chunk as $course)
                        <div class="col-6">

                                <div class="card mt-5" style="width: 98%;" onclick='window.location.href = "tnoticepannel/{{$course["id"]}}"'>
                                    <img src="image/Rectangle 7.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5>{{$course['title'] ."-". $course['course_code'] ."- Section ". $course['section']}}
                                        </h5>

                                    </div>
                                </div>

                        </div>
                        @endforeach
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!--Dashboard Contenet ends-->
</div>
</div>

@endsection
