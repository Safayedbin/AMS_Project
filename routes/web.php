<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;


Route::get('/', function () {
    return view('LoginPage');
});







Route::get('/courses', [StudentController::class, 'courses']);
Route::get('/gradesheet', [StudentController::class, 'gradesheet']);

Route::get('/noticepaper', [StudentController::class, 'noticepaper']);
Route::get('/assignmentpaper', [StudentController::class, 'assignmentpaper']);
Route::get('/testpaper', [StudentController::class, 'testpaper']);
Route::get('/quizpaper', [StudentController::class, 'quizpaper']);
Route::get('/noticepannel', [StudentController::class, 'noticepannel']);
Route::get('/quizpannel', [StudentController::class, 'quizpannel']);
Route::get('/assignmentpanel', [StudentController::class, 'assignmentpanel']);
Route::get('/testpannel', [StudentController::class, 'testpannel']);
Route::get('/gradepannel', [StudentController::class, 'gradepannel']);



Route::get('/Tcourses', [TeacherController::class, 'courses']);
Route::get('/addAssignment', [TeacherController::class, 'addassignment']);
Route::get('/addQuiz', [TeacherController::class, 'addQuiz']);
Route::get('/addTest', [TeacherController::class, 'addTest']);
Route::get('/addNotice', [TeacherController::class, 'addNotice']);
Route::get('/tnoticepannel', [TeacherController::class, 'noticepannel']);
Route::get('/tquizpannel', [TeacherController::class, 'quizpannel']);
Route::get('/tassignmentpanel', [TeacherController::class, 'assignmentpanel']);
Route::get('/ttestpannel', [TeacherController::class, 'testpannel']);
Route::get('/tgradepannel', [TeacherController::class, 'gradepannel']);


Route::post('/welcome', [StudentController::class, 'welcome']);
Route::get('/dashboard', [StudentController::class, 'dashboard']);


Route::post('/scanner', [TestController::class, 'Scanner']);
Route::post('/checker', [TestController::class, 'Checker']);
