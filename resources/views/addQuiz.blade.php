

@extends('layouts.addQuiz')

@section('content')
<!--Courses Content-->


<style>
        #inputArea textarea {
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
                <label class="timeLabel" for="Title" style="display: block;">Title</label>
                <label class="timeLabel mt-2" for="Due Date" style="display: block;">Due Date</label>
                <label class="timeLabel" for="time" style="display: block;">Unlocks at </label>
            </div>
            <div class="col-3">
                <input class="time" type="text" name="title"><br>
                <input class="time" type="datetime-local" name="Due"><br>
                <input class="time" type="datetime-local" name="Unlocks"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <br><br><br>
                <p style="color: red;">*Changing the number of question will remove all written question and answer her </p>
                <label for="numQuestions">Select number of questions:</label>
                <select id="numQuestions" onchange="createInputs()">
                    <option value="">--Please choose an option--</option>
                </select>


                    <div id="inputArea">

                    </div>

            </div>
        </div>
    </form>
</div>
checkbo

<script>
    // Populate the select options
    let select = document.getElementById("numQuestions");
    for(let i = 1; i <= 10; i++) {
        let opt = document.createElement('option');
        opt.value = i;
        opt.innerHTML = i;
        select.appendChild(opt);
    }

    function createInputs() {
      let num = document.getElementById("numQuestions").value;
      let inputArea = document.getElementById("inputArea");

      // Clear previous inputs
      inputArea.innerHTML = "";
      // Create new inputs
      for(let i = 1; i <= num; i++) {
        let div = document.createElement("div");
        div.className = "inputform";

        let label1 = document.createElement("label");
        label1.innerHTML = "Question " + i;
        div.appendChild(label1);
        div.appendChild(document.createElement("br"));

        let textarea1 = document.createElement("textarea");
        textarea1.cols = "150";
        textarea1.rows = "2";
        textarea1.name = "Question"+ i;
        textarea1.placeholder = "Enter question " + i ;
        div.appendChild(textarea1);
        div.appendChild(document.createElement("br"));

        let marks = document.createElement("input");
        marks.type = "text";
        marks.name = "marks"+ i;
        marks.placeholder = "Input its Marks ";
        marks.className = "marks";
        div.appendChild(marks);
        div.appendChild(document.createElement("br"));

        let label2 = document.createElement("label");
        label2.innerHTML = "Answer " + i;
        div.appendChild(label2);
        div.appendChild(document.createElement("br"));

        for(j=1;j<=4;j++){
            let tick = document.createElement('input');
            tick.type= "radio";
            tick.name= "correct";
            tick.className= "tickbox";
            tick.value= "1";

            let input = document.createElement('input');
            input.type= "text";
            input.name= "option" +j;
            input.placeholder= "option " +j;
            input.className= "optioninput";
            div.appendChild(document.createElement("br"));
            div.appendChild(tick);
            div.appendChild(input);
        }

        inputArea.appendChild(div);
        inputArea.appendChild(document.createElement("br"));
      }
      let submit = document.createElement("input");
      submit.type='submit';
      submit.className='btn btn-primary';
      inputArea.appendChild(submit)
    }
</script>
@endsection
