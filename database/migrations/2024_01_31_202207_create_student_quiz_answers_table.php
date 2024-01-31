<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_quiz_answers', function (Blueprint $table) {
            $table->id();
            $table->boolean('tick1');
            $table->boolean('tick2');
            $table->boolean('tick3');
            $table->boolean('tick4');
            $table->unsignedBigInteger('student_fk');
            $table->foreign('student_fk')->references('id')->on('users')->onUpdate('cascade');
            $table->unsignedBigInteger('question_fk');
            $table->foreign('question_fk')->references('id')->on('questions')->onUpdate('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_quiz_answers');
    }
};
