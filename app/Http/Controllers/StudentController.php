<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Course;
use App\Models\Notice;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function welcome(){ return view('welcome');}
    public function dashboard(){ return view('dashboard');}
    public function noticepannel(Request $request){
        $course= Course::where('id', '=',$request->id)->first();
        $notices= Notice::where("course_fk", '=', $request->id)->get();
        return view('noticepannel', ['course' => $course, 'notices'=> $notices]);
    }
    public function quizpannel(Request $request){
        $course= Course::where('id', '=',$request->id)->first();
        $exam= Exam::where("course_fk", '=', $request->id)
                        ->where("type", '=', 'quiz')
                        ->get();
        return view('quizpannel', ['course' => $course, 'exams'=> $exam]);
    }

    public function assignmentpanel(Request $request){
        $course= Course::where('id', '=',$request->id)->first();
        $exam= Exam::where("course_fk", '=', $request->id)
                        ->where("type", '=', 'assignment')
                        ->get();
        return view('assignmentpanel', ['course' => $course, 'exams'=> $exam]);
    }

    public function testpannel(Request $request){
        $course= Course::where('id', '=',$request->id)->first();
        $exam= Exam::where("course_fk", '=', $request->id)
                        ->where("type", '=', 'test')
                        ->get();

        return view('testpannel', ['course' => $course, 'exams'=> $exam]);
    }


    public function gradesheet(){ return view('gradesheet');}
    public function gradepannel(){ return view('gradepannel');}




}
