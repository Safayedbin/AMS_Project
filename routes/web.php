<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaperController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;


Route::get('/', function () {
    return view('LoginPage');
});






Route::middleware(['StudentPortal'])->group(function(){

Route::get('/courses', [StudentController::class, 'courses']);
Route::get('/gradesheet', [StudentController::class, 'gradesheet']);

Route::get('/dashboard', [StudentController::class, 'dashboard']);

Route::get('/noticepaper', [StudentController::class, 'noticepaper']);
Route::get('/assignmentpaper', [StudentController::class, 'assignmentpaper']);
Route::get('/testpaper', [StudentController::class, 'testpaper']);

Route::get('/noticepannel/{id}', [StudentController::class, 'noticepannel']);
Route::get('/quizpannel/{id}', [StudentController::class, 'quizpannel']);
Route::get('/assignmentpanel/{id}', [StudentController::class, 'assignmentpanel']);
Route::get('/testpannel/{id}', [StudentController::class, 'testpannel']);
Route::get('/gradepannel/{id}', [StudentController::class, 'gradepannel']);
});

Route::middleware(['TeacherPortal'])->group(function(){

Route::get('/Tdashboard', [TeacherController::class, 'dashboard']);
Route::get('/Tcourses/{id}', [TeacherController::class, 'courses']);
Route::get('/addAssignment/{id}', [TeacherController::class, 'addassignment']);
Route::get('/addQuiz/{id}', [TeacherController::class, 'addQuiz']);
Route::get('/addTest/{id}', [TeacherController::class, 'addTest']);
Route::get('/addNotice/{id}', [TeacherController::class, 'addNotice']);
Route::get('/tnoticepannel/{id}', [TeacherController::class, 'noticepannel']);
Route::get('/tquizpannel/{id}', [TeacherController::class, 'quizpannel']);
Route::get('/tassignmentpanel/{id}', [TeacherController::class, 'assignmentpanel']);
Route::get('/ttestpannel/{id}', [TeacherController::class, 'testpannel']);
Route::get('/tgradepannel/{id}', [TeacherController::class, 'gradepannel']);

Route::GET('/insertTest', [TeacherController::class, 'insertTest']);
Route::GET('/insertassignment', [TeacherController::class, 'insertassignment']);
Route::GET('/insertnotice', [TeacherController::class, 'insertnotice']);

});

Route::post('/welcome', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', [StudentController::class, 'dashboard']);


Route::get('/testpaper', [StudentController::class, 'testpaper']);
Route::get('/quizpaper', [StudentController::class, 'quizpaper']);
Route::get('/assignmentpaper', [StudentController::class, 'assignmentpaper']);

Route::post('/scanner', [TestController::class, 'Scanner']);
Route::POST('/Answerupload/{id}', [TestController::class, 'Answerupload']);
Route::post('/checker', [TestController::class, 'Checker']);


Route::get('/noticepaper/{id}/{id2}', [PaperController::class, 'noticepaper']);
Route::get('/assignmentpaper/{id}/{id2}', [PaperController::class, 'assignmentpaper']);
Route::get('/testpaper/{id}/{id2}', [PaperController::class, 'testpaper']);
Route::get('/quizpaper/{id}/{id2}', [PaperController::class, 'quizpaper']);
