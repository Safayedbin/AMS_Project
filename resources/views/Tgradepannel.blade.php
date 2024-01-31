@extends('layouts.dashboard')
@include('compoenets.courseheader')
@section('content')
<div class="container">
    <div class="card test mt-1 mb-1" style=" border-right: 12px solid blue">
        <div class="card-body" onclick='window.location.href = "assignmentpaper"'>
            <div class="row">
                <div class="col-12">

                    <div class="table-responsive">
                        <table class="table table-light table-bordered table-striped table-hover">
                            <thead>
                                <th>Student ID</th>
                                <th>Name</th>
                                <!--reapeter-->

                                <th>Test-type</th>

                                <!--reapeter-->
                                <th>Grand Total</th>
                                <th>GRADE</th>
                            </thead>
                            <tbody>
                                <tr class="table-active">
                                    <td>011193080</td>
                                    <td>Safayed Bin Islam</td>
                                    <!--reapeter-->

                                    <td>$results'marks'</td>

                                    <!--reapeter-->

                                    <td>Ttal</td>
                                    <td>grade</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
