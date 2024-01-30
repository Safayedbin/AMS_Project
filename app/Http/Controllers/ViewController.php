<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function welcome(){ return view('welcome');}
    public function dashboard(){ return view('dashboard');}
    public function noticepannel(){ return view('noticepannel');}
    public function quizpannel(){ return view('quizpannel');}
    public function assignmentpanel(){ return view('assignmentpanel');}
    public function testpannel(){ return view('testpannel');}
    public function testpaper(){ return view('testpaper');}
    public function quizpaper(){ return view('quizpaper');}
    public function assignmentpaper(){ return view('assignmentpaper');}
    public function noticepaper(){ return view('noticepaper');}
    public function gradesheet(){ return view('gradesheet');}
    public function gradepannel(){ return view('gradepannel');}
}
