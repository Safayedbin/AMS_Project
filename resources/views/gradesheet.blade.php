@extends('layouts.gradereport')


@section('content')
   <!--Courses Content-->

   <div class="container">
    <div id="testBoard">
        <div class="row d-flex justify-content-between">
            <div class="col-2">
                <h3 class="header title">Title</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <div class="table-responsive">
                    <table class="table table-light table-bordered table-striped table-hover">
                        <thead>
                          <!--reapeter-->
                          {{$i=1;}}
                          @foreach ($results as $result )
                          <th>Q{{$i}}</th>
                          {{$i++;}}
                          @endforeach
                          <!--reapeter-->
                          <th>Total</th>
                          <th>Plagiarism checker</th>
                          <th>Grand Total</th>
                          <th>GRADE</th>
                        </thead>
                        <tbody>
                          <tr class="table-active">
                            <!--reapeter-->
                            @foreach ($results as $result )
                            <td>{{$results['marks']}}</td>
                            @endforeach
                            <!--reapeter-->

                            <td>{{$results['total']}}</td>
                            <td>{{$results['grade']}}</th>
                          </tr>

                        </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
