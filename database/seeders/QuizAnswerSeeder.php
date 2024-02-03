<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\QuizAnswer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuizAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json= File::get(path:'database/json/quizanswer.json');
        $objects=collect(json_decode($json));

        $objects->each(function($object){
            QuizAnswer::create([

                "Question_fk" => $object->Question_fk,
                "option1" => $object->option1,
                "option2" => $object->option2,
                "option3" => $object->option3,
                "option4" => $object->option4,
                "correct1" => $object->correct1,
                "correct2" => $object->correct2,
                "correct3" => $object->correct3,
                "correct4" => $object->correct4

            ]);


        });
    }
}
