@extends('layouts.Tcourses')

@section('inner_content')
@foreach ($exams as $exam )
<div class="card test mt-1 mb-1" style=" border-right: 12px solid blue">
    <div class="card-body" onclick='window.location.href = "/quizpaper{{$exam["id"]."/".$course["id"]}}"'>
        <ul>
            <li>{{$exam['title']}}</li>
            <li>{{$exam['Due_date']}}</li>
            <li>Marks :{{$exam['Total_Marks']}}</li>
        </ul>
    </div>
</div>
@endforeach
@endsection

