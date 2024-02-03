<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json= File::get(path:'database/json/answer.json');
        $objects=collect(json_decode($json));

        $objects->each(function($object){
            Answer::create([
                "Answer_text"=>$object->Answer_text,

            ]);


        });
    }
}
