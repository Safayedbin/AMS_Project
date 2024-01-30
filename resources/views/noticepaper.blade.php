@extends('layouts.notice')

@section('content')

       <!--Courses Content-->
       <div class="container">

        <div class="NoticeBoard">
             <div class="row mb-5 ">
                 <div class="col-4">
                     <h3>{{$notice['title']}}</h3>
                 </div>
                 <div class="col-7" >
                     <div class="NoticeTime d-flex justify-content-end">
                     <h6 style="display: inline;">{{$notice['date']}}</h6>
                     <h6 style="display: inline; margin-left: 2rem;">{{$notice['postby']}}</h6>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-12">
                     <div class="NoticeText">
                         <p>{{$notice['longtext']}}</p>
                     </div>
                 </div>
             </div>
         </div>

     </div>

@endsection
