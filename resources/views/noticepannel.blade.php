@extends('layouts.courses')

@section('inner_content')
@foreach ($notices as $notices )
<div class="card mt-1 mb-2">
    <div class="card-body" onclick='window.location.href = "/noticepaper/{{$notices["id"]."/".$course["id"]}}"'>
        <ul>
            <li>{{$notices['title']}}</li>
            <li>{{$notices['created_at']}}</li>
            <li>{{$notices['Posted_at']}}</li>
        </ul>
    </div>
</div>
@endforeach

@endsection

