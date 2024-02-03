<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\QuizAnswer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call([
        ImageSeeder::class,
        UserSeeder::class,
        CourseSeeder::class,
        StudentCourseSeeder::class,
        ExamSeeder::class,
        QuestionSeeder::class,
        AnswerSeeder::class,
        QuizAnswerSeeder::class
        //StatusSeeder::class,
        //NoticeSeeder::class,
       // StudentAnswerSeeder::class,
       // StudentQuizAnswerSeeder::class,




       ]);
    }
}
