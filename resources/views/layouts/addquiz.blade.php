@include('compoenets.header')
@include('compoenets.sidebar')
<div class="container">
    <div class="row">
        <div class="col-12">
             <div class="header">
                 <h2>{{$course["course_code"]."-".$course["title"] . "-Section " . $course["section"] }}</h2>
                 <p><a href="/dashboard" >Dashboard</a>><a href="/noticepannel/{{$course["id"]}}">Courses</a>>Add Quiz</p>
             </div>
        </div>
        </div>
</div>

@yield('content')


@include('compoenets.footer')
