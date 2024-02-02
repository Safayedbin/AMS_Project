<?php

namespace App\Http\Controllers;


use App\Models\Exam;
use App\Models\Course;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    public function courses(){ return view('Tcourses');}

    public function dashboard(){
       $courses = Course::where('teacher_fk','=', Session::get('id'))->get();
        return view('teacherdashboard')->with('course', $courses);
    }

    public function addassignment(Request $request){
        $course= Course::where('id', '=',$request->id)->first();
        return view('addassignment', ['course' => $course]);
    }

    public function addNotice(Request $request){
        $course= Course::where('id', '=',$request->id)->first();
        return view('addNotice', ['course' => $course]);
    }

    public function addQuiz(Request $request){
        $course= Course::where('id', '=',$request->id)->first();
        return view('addQuiz', ['course' => $course]);
    }

    public function addTest(Request $request){
        $course= Course::where('id', '=',$request->id)->first();
        return view('addTest', ['course' => $course]);
    }

    public function noticepannel(Request $request){
        $course= Course::where('id', '=',$request->id)->first();
        $notices= Notice::where("course_fk", '=', $request->id)->get();
        return view('Tnoticepannel', ['course' => $course, 'notices'=> $notices]);
    }

    public function quizpannel(Request $request){
        $course= Course::where('id', '=',$request->id)->first();
        $exam= Exam::where("course_fk", '=', $request->id)
                        ->where("type", '=', 'quiz')
                        ->get();
        return view('Tquizpannel', ['course' => $course, 'exams'=> $exam]);
    }

    public function assignmentpanel(Request $request){
        $course= Course::where('id', '=',$request->id)->first();
        $exam= Exam::where("course_fk", '=', $request->id)
                        ->where("type", '=', 'assignment')
                        ->get();
        return view('Tassignmentpanel', ['course' => $course, 'exams'=> $exam]);
    }

    public function testpannel(Request $request){
        $course= Course::where('id', '=',$request->id)->first();
        $exam= Exam::where("course_fk", '=', $request->id)
                        ->where("type", '=', 'test')
                        ->get();

        return view('ttestpannel', ['course' => $course, 'exams'=> $exam]);
    }

    public function gradepannel(){ return view('Tgradepannel');}
}
