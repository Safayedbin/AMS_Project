<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function addassignment(){ return view('addassignment');}
    public function addNotice(){ return view('addNotice');}
    public function addQuiz(){ return view('addQuiz');}
    public function addTest(){ return view('addTest');}

    public function noticepannel(){ return view('Tnoticepannel');}
    public function quizpannel(){ return view('Tquizpannel');}
    public function assignmentpanel(){ return view('Tassignmentpanel');}
    public function testpannel(){ return view('Ttestpannel');}
    public function gradepannel(){ return view('Tgradepannel');}
}
