@extends('layouts.addNotice')
<!--Courses Content-->
@section('content')

<style>
        textarea {
            padding: 1rem;
            margin: 0.5rem;
            border-color: rgba(0, 0, 0, 0.224) ;
            border-radius: 2%;
            resize: none;

        }
        .timeLabel{
            margin: 1.5rem 0rem;
        }
        .marks, .time, .optioninput{
            padding: 0.5rem;
            margin: 0.5rem;
            width: 100%;
            border-color: rgba(0, 0, 0, 0.224) ;
            border-radius: 2%;
        }
        .marks, .optioninput{
            width: 15rem;
        }
        .tickbox{
            padding: 1rem;
            height: 1rem;
            width: 2rem;
            margin-right: 1rem;
        }
        label {
            font-weight:bold;
            font-size: large;

        }
        select{
            padding: 0.5rem;
            margin-left: 4rem;
        }
        input[type="submit"]{
            margin:2rem;
            margin-left: 40%;
            padding: 1rem;
        }
</style>


<div class="container">
    <form action="" method="post">
        <div class="row">
            <div class="col-3">
                <label class="timeLabel" for="Title" style="display: block;">Notice Title</label>
                <label class="timeLabel" for="Title" style="display: block;">Notice text</label>
            </div>
            <div class="col-3">
                <input class="time" type="text" name="title"><br>
                <input type="text"  hidden id="CurrentTime">
                <textarea name="" id="" cols="100" rows="10"></textarea>
            </div>
        </div>
       <div class="row d-flex justify-content-end">
        <div class="col-3">
            <button type="button" class="btn btn-primary m-5">Post</button>
        </div>
       </div>
        </div>
    </form>
</div>

<script>
        // Create a new Date object with the current date and time
        var today = new Date();

        // Get the year, month, date, hour, minute, and second
        var year = today.getFullYear();
        var month = today.getMonth() + 1; // getMonth() returns 0-11, so add 1
        var date = today.getDate();
        var hour = today.getHours();
        var minute = today.getMinutes();
        var second = today.getSeconds();

        // Pad the month, date, hour, minute, and second with leading zeros if needed
        month = month < 10 ? "0" + month : month;
        date = date < 10 ? "0" + date : date;
        hour = hour < 10 ? "0" + hour : hour;
        minute = minute < 10 ? "0" + minute : minute;
        second = second < 10 ? "0" + second : second;

        // Concatenate the components into a string
        var currentDateTime = year + "-" + month + "-" + date + " " + hour + ":" + minute + ":" + second;

        // Print the result
        console.log(currentDateTime);
        // Create a new Date object with the current date and time
        var today = new Date();

        // Get the year, month, date, hour, minute, and second
        var year = today.getFullYear();
        var month = today.getMonth() + 1; // getMonth() returns 0-11, so add 1
        var date = today.getDate();
        var hour = today.getHours();
        var minute = today.getMinutes();
        var second = today.getSeconds();

        // Pad the month, date, hour, minute, and second with leading zeros if needed
        month = month < 10 ? "0" + month : month;
        date = date < 10 ? "0" + date : date;
        hour = hour < 10 ? "0" + hour : hour;
        minute = minute < 10 ? "0" + minute : minute;
        second = second < 10 ? "0" + second : second;

        // Concatenate the components into a string
        var currentDateTime = year + "-" + month + "-" + date + " " + hour + ":" + minute + ":" + second;

        // Print the result

        let elment= document.getElementById('CurrentTime');
        elment.value=currentDateTime;

        console.log(elment.value)


</script>
@endsection
