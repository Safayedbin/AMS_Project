<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $request){
        $id= $request->input('id');
        $pass= $request->input('password');
        $user= User::where('organization_id','=', $id)->first();


    if ($user) {
        if ('Teacher' == $user->acc_type) {
            if ($pass == $user->password) {
                $request->session()->put('User_type', $user->acc_type);
                $request->session()->put('User_name', $user->name);
                $request->session()->put('User_id', $user->organization_id);
                $request->session()->put('User_title', $user->Title);
                $request->session()->put('id', $user->id);
                $courses = Course::where('teacher_fk','=',$user->id)->get();

                return view('teacherdashboard')->with('data', $courses);
            } else {
                return redirect('/')->with('alert', 'Password does not match!');
            }
        }
        elseif ('Student' == $user->acc_type) {
            if ($pass == $user->password) {
                $request->session()->put('User_type', $user->acc_type);
                $request->session()->put('User_name', $user->name);
                $request->session()->put('User_id', $user->organization_id);
                $request->session()->put('User_title', $user->Title);
                $request->session()->put('id', $user->id);
                $courses = DB::table('users')
                ->join('student_courses', 'users.id', '=', 'student_courses.student_fk')
                ->join('courses', 'student_courses.course_fk', '=', 'courses.id')
                ->select('courses.*', 'users.id')
                ->get();

                return view('studentdashboard')->with('data', $courses);;
            } else {
                return redirect('/')->with('alert', 'Password does not match!');
            }
        }
    }
    else {
        return redirect('/')->with('alert-id', 'Id does not exist!');
    }


    }
    public function logout(Request $request){
        $request->session()->flush();
        redirect('/');
    }
}
