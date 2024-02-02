<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Notice;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Process\Exception\ProcessFailedException;


class TestController extends Controller{
    public function Answerupload(Request $request){
        if(Session::has('Exam_id') && Session::has('User_id') ){
            if ($request->hasFile('fileUpload')) {
                $file = $request->file('fileUpload');


                $ExamId= Session::get("Exam_id");
                $UserId= Session::get("User_id");
                $filename = $UserId.".".$ExamId. '.' . $file->getClientOriginalExtension();


                $path = $file->storeAs('uploads', $filename, 'public');
                $course= Course::where('id', '=',$request->id)->first();
                $notices= Notice::where("course_fk", '=', $request->id)->get();
                return view('noticepannel', ['course' => $course, 'notices'=> $notices]);
            }
            else {

            return redirect()->back()->with('alert', 'File upload failed!');
        }
    }
    else {

        return redirect()->back()->with('alert', 'No file was uploaded.');
    }
}






    function Scanner($fileName){
        $process = new Process(['python', 'public/py/scanner.py', $fileName]);
        $process->run();

        if (!$process->isSuccessful()) {
        throw new ProcessFailedException($process);
        }

       return $process->getOutput();
    }

    function Checker($correct, $written){
        $process = new Process(['python', 'public/py/checker.py', $correct, $written]);
        $process->run();

        if (!$process->isSuccessful()) {
        throw new ProcessFailedException($process);
        }
        $similarity=$process->getOutput();
        $markscored=$similarity;
       return $markscored;
    }


}
