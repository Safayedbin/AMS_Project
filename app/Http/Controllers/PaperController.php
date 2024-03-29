<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Course;
use App\Models\Notice;
use App\Models\Question;
use App\Models\QuizAnswer;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    public function testpaper(Request $request){
        $course= Course::where('id', '=', $request->id2)->first();
        $Exam= Exam::where('id', '=', $request->id)->first();
        $question= Question::where('exam_fk', '=', $request->id)->get();
        $request->session()->put('Exam_id', $request->id );
        return view('testpaper', ['exam' => $Exam, 'course' => $course, 'question' => $question]);
    }

    //Unfinish part in Quiz
    public function quizpaper(Request $request){
    $course= Course::where('id', '=', $request->id2)->first();

    $Exam= Exam::where('id', '=', $request->id)->first();

    $questions= Question::where('exam_fk', '=', $request->id)->get();

    $questionIds = $questions->pluck('id'); // Get all question ids

    $options= QuizAnswer::whereIn('id', $questionIds)->get(); // Get all options for the question ids

    return view('quizpaper', ['exam' => $Exam, 'course' => $course, 'questions' => $questions, 'options' =>$options]);
    }
    public function assignmentpaper(Request $request){
        $course= Course::where('id', '=', $request->id2)->first();
        $Exam= Exam::where('id', '=', $request->id)->first();
        $question= Question::where('exam_fk', '=', $request->id)->get();
        $request->session()->put('Exam_id', $request->id );
        return view('assignmentpaper', ['exam' => $Exam, 'course' => $course, 'question' => $question]);}

    public function noticepaper(Request $request){
        $course= Course::where('id', '=', $request->id2)->first();
        $notice= Notice::where('id', '=', $request->id)->first();
        return view('noticepaper', ['notice' => $notice, 'course' => $course]);
    }
}
