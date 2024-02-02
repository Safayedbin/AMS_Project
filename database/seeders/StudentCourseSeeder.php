<?php

namespace Database\Seeders;

use App\Models\StudentCourses;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json= File::get(path:'database/json/studentcourse.json');
        $objects=collect(json_decode($json));

        $objects->each(function($object){
            StudentCourses::create([
                'student_fk'=> $object->student_fk,
                'course_fk'=>$object->course_fk,
            ]);


        });
    }
}
