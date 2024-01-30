@include('compoenets.header')
@include('compoenets.sidebar')
<div class="container">
    <div class="row">
        <div class="col-12">
             <div class="header">
                 <h2>Course Code-CourseName-Section</h2>
                 <p><a href="/dashboard" >Dashboard</a>><a href="/noticepannel">Courses</a>>Quiz</p>
             </div>
        </div>
        </div>
</div>

@yield('content')


@include('compoenets.footer')
