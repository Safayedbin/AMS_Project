<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ViewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('LoginPage');
});

Route::get('/courses', [ViewController::class, 'courses']);
Route::get('/gradesheet', [ViewController::class, 'gradesheet']);
Route::get('/gradepannel', [ViewController::class, 'gradepannel']);
Route::get('/noticepaper', [ViewController::class, 'noticepaper']);
Route::get('/assignmentpaper', [ViewController::class, 'assignmentpaper']);
Route::get('/testpaper', [ViewController::class, 'testpaper']);
Route::get('/quizpaper', [ViewController::class, 'quizpaper']);
Route::get('/noticepannel', [ViewController::class, 'noticepannel']);
Route::get('/quizpannel', [ViewController::class, 'quizpannel']);
Route::get('/assignmentpanel', [ViewController::class, 'assignmentpanel']);
Route::get('/testpannel', [ViewController::class, 'testpannel']);
Route::post('/welcome', [ViewController::class, 'welcome']);
Route::get('/dashboard', [ViewController::class, 'dashboard']);





Route::post('/scanner', [TestController::class, 'Scanner']);
Route::post('/checker', [TestController::class, 'Checker']);
