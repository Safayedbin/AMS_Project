<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Notice;
use App\Models\StudentAnswer;
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
                return $this->Scanner($filename);
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
        $pythonExecutable = 'C:\Users\User\AppData\Local\Programs\Python\Python39\python.exe';
        $pythonScript = 'E:\New_folder\Assignment Management System\Assignment_Management_System\public\py\scanner.py';
        $process = new Process([$pythonExecutable, '-E', 'PYTHONHASHSEED=0', $pythonScript, $fileName]);
        $process->run();

        if (!$process->isSuccessful()) {
            echo $process->getErrorOutput();  // Print the error output
            throw new ProcessFailedException($process);
        }


        $Answer= collect($process->getOutput());
        $Answer->each(function($Answer){
            StudentAnswer::created([
                "answer_text"=> $Answer->answer_text,
                "question_fk"=> $Answer->answer_text,
                "Student_fk"=> Session::get('id'),
            ]);
        });
        
    }

    function Checker($correct, $written){
        $pythonExecutable = 'C:\Users\User\AppData\Local\Programs\Python\Python39\python.exe';
        $pythonScript = 'E:\New_folder\Assignment Management System\Assignment_Management_System\public\py\checker.py';
        $process = new Process([$pythonExecutable, '-E', 'PYTHONHASHSEED=0', $pythonScript, $correct, $written]);
        $process->run();

        if (!$process->isSuccessful()) {
        throw new ProcessFailedException($process);
        }
        $similarity=$process->getOutput();
        $markscored=$similarity;
       return $markscored;
    }


}
