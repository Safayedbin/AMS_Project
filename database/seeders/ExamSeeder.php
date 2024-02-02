<?php

namespace Database\Seeders;

use App\Models\Exam;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json= File::get(path:'database/json/exam.json');
        $objects=collect(json_decode($json));

        $objects->each(function($object){
            Exam::create([
                "title"=>$object->title,
                "type"=>$object->type,
                "Due_date"=>$object->Due_date,
                "unlocks"=>$object->unlocks,
                "Duration"=>$object->Duration,
                "Total_Marks"=>$object->Total_Marks,
                "course_fk"=>$object->course_fk
            ]);


        });
    }
}
