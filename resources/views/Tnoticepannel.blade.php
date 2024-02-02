@extends('layouts.Tcourses')

@section('inner_content')


@foreach ($notices as $notice )
<div class="card mt-1 mb-2">
    <div class="card-body" onclick='window.location.href = "noticepaper"'>
        <ul>
            <li>{{$notice['title']}}</li>
            <li>{{$notice['created_at']}}</li>
            <li>{{$notice['Posted_at']}}</li>
        </ul>
    </div>
</div>
@endforeach
@endsection

