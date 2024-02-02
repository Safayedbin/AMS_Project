<?php

namespace App\Http\Controllers;


use App\Models\Exam;
use App\Models\Answer;
use App\Models\Course;
use App\Models\Notice;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    public function courses(){ return view('Tcourses');}

    public function insertnotice(Request $request){
        Notice::create([
            "title"=> $request->input('title'),
            "text"=> $request->input('text'),
            "Post_at"=> $request->input('Post_at'),
            "course_fk"=> $request->input('course_fk'),
        ]);
        $course= Course::where('id', '=',$request->input('course_fk'))->first();
        $notices= Notice::where("course_fk", '=', $request->id)->get();
        return view('tnoticepannel', ['course' => $course, 'notices'=> $notices]);
    }

    public function insertassignment(Request $request){
        Exam::create([
            'title' => $request->input('title'),
            'type' => $request->input('type'),
            'Total_Marks' => $request->input('Total_Marks'),
            'Due_date' => $request->input('Due_date'),
            'unlocks' => $request->input('unlocks'),
            'Duration' => $request->input('Duration'),
            'course_fk' => $request->input('course_fk'),
        ]);
        $lastExam = Exam::latest()->first()->id;
        $loop= $request->input('numQuestions');

        for($i=1;$i<=$loop;$i++){
            $question=Question::create([
                "Question_text" => $request->input('Question'.$i),
                "Marks" => $request->input('marks'.$i),
                "exam_fk" => $lastExam
            ]);

            Answer::create([
                'id' => $question->id,
                'Answer_text' => $request->input('Answer'.$i),
            ]);

        }
        $course= Course::where('id', '=',$request->input('course_fk'))->first();
        $exam= Exam::where("course_fk", '=', $request->id)
                        ->where("type", '=', 'assignment')
                        ->get();
        return view('Tassignmentpanel', ['course' => $course, 'exams'=> $exam]);
    }

    public function insertTest(Request $request){
       Exam::create([
            'title' => $request->input('title'),
            'type' => $request->input('type'),
            'Total_Marks' => $request->input('Total_Marks'),
            'Due_date' => $request->input('Due_date'),
            'unlocks' => $request->input('unlocks'),
            'Duration' => $request->input('Duration'),
            'course_fk' => $request->input('course_fk'),
        ]);
        $lastExam = Exam::latest()->first()->id;
        $loop= $request->input('numQuestions');

        for($i=1;$i<=$loop;$i++){
            $question=Question::create([
                "Question_text" => $request->input('Question'.$i),
                "Marks" => $request->input('marks'.$i),
                "exam_fk" => $lastExam
            ]);

            Answer::create([
                'id' => $question->id,
                'Answer_text' => $request->input('Answer'.$i),
            ]);

        }

        $course= Course::where('id', '=',$request->input('course_fk'))->first();
        $exam= Exam::where("course_fk", '=', $request->id)
                        ->where("type", '=', 'test')
                        ->get();

        return view('ttestpannel', ['course' => $course, 'exams'=> $exam]);
    }

    public function dashboard(){
       $courses = Course::where('teacher_fk','=', Session::get('id'))->get();
        return view('teacherdashboard')->with('data', $courses);
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
