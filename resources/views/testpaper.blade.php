@extends('layouts.test')

@section('content')

   <!--Courses Content-->

   <div class="container">

    <div id="testBoard">
        <div class="row d-flex justify-content-between">
            <div class="col-2">
                <h3 class="header title">{{$exam['title']}}</h3>
            </div>
            <div class="col-3">
                <h4 style="display: inline;">Time Left</h4>
                <h4 style="width:60%;border:1px solid black; background-color: #F3F4FD; float: right ; text-align: center;">
                    {{$exam["Duration"]}}:00
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="testpaper">
                    <div class="row justify-content-end">
                        <div class="col-1">
                            <h5>marks</h5>
                        </div>
                    </div>
                    <!--repeater-->
                    @php
                        $i=1;
                    @endphp
                    @foreach ( $question as $question )
                    <div class="row justify-content-between">
                        <div class="col-10">
                            <p><span>Q. {{$i}}</span> {{$question['Question_text']}}</p>
                        </div>
                        <div class="col-1">{{$question['Marks']}}</div>
                    </div>
                    @php
                        $i++;
                    @endphp

                    <!--repeater-->
                    @endforeach
                    <div class="row">
                        <h6>NOTE: Please answer all questions in detail. Use diagrams where necessary to support
                            your answers. Good luck!
                        </h6>
                    </div>

                </div>
            </div>
            <div class="col-4"><form action="/Answerupload/{{$course['id']}}" method="POST" enctype="multipart/form-data">
                <div class="submissionTerminal">
                    <h4>Submission Details</h4>
                    Here are the formal instructions:
                    <b><ol>
                        <li>
                            Numbering Answers: Each answer should be properly numbered. The number should correspond to the question it is addressing.
                        </li>
                        <li>
                            Hash Symbol: After writing the number of the answer, please add a `#` symbol. This will help in differentiating between the question number and the answer.
                        </li>
                        <li>
                            Plagiarism Check: Be aware that all answers will be checked for plagiarism. Originality is crucial, so please ensure that all responses are your own work.
                        </li>
                        <li>
                            Avoid Overwriting: Please avoid overwriting as it can make the text difficult to read and may cause errors during the checking process.

                        </li>
                        <li>
                            Handwriting Quality: It is advised to write in clear and legible handwriting. The automated checking system will use Optical Character Recognition (OCR) to read the text. Poor handwriting may lead to inaccuracies during this process.

                        </li>
                    </ol></b>
                    Please follow these instructions carefully to ensure your answers are correctly formatted and easily readable. Good luck!

                    <input  class="input_file" name="fileUpload" type="file" accept="image/jpeg,image/gif,image/png,application/pdf" >
                    <input name="submit" class="btn btn-primary" type="submit" style="margin-left: 40%;">

                </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
