<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json= File::get(path:'database/json/question.json');
        $objects=collect(json_decode($json));

        $objects->each(function($object){
            Question::create([
                "Question_text"=>$object->Question_text,
                "Marks"=>$object-> Marks,
                "exam_fk"=>$object-> exam_fk
            ]);


        });
    }
}
