<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;




class TestController extends Controller
{
    function Scanner(){
        $process = new Process(['python', 'public/py/scanner.py', 'arg1', 'arg2']);
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
