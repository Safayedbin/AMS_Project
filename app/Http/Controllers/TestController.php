<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


class TestController extends Controller
{
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
    public function upload(Request $request, )  {
        $request->validate([
            'file' => 'required|mimes:png,jpeg,jpg,pdf',
        ]);

        // Get the original file name and extension
        $originalName = $request->file('file')->getClientOriginalName();
        $extension = $request->file('file')->getClientOriginalExtension();

        $id=session()->pull('user_id');
        $Testid=session()->pull('user_id');
        $customName = $id + $Testid;

        // Combine the custom name with the original extension
        $fileName = $customName . '.' . $extension;

        // Store the file with the custom name
        $path = $request->file('file')->storeAs('public/uploads', $fileName);

    }
}
