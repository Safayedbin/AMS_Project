@extends('layouts.courses')

@section('inner_content')

<div class="card test mt-1 mb-1" style=" border-right: 12px solid blue">
    <div class="card-body" onclick='window.location.href = "testpaper"'>
        <ul>
            <li>Test 1</li>
            <li>Date</li>
            <li>Marks : value</li>
            <li>Status</li>
        </ul>
    </div>
</div>
@endsection

