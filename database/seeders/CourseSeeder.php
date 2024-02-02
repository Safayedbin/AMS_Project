<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json= File::get(path:'database/json/course.json');
        $objects=collect(json_decode($json));

        $objects->each(function($object){
            Course::create([
                "title" => $object->title,
                "course_code" => $object->course_code,
                "section" => $object->section,
                "teacher_fk" => $object->teacher_fk
            ]);


        });
    }
}
