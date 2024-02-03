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
        Schema::create('graded_answers', function (Blueprint $table) {
            $table->id();
            $table->integer('marks_scored');
            $table->unsignedBigInteger('student_fk');
            $table->foreign('student_fk')->references('id')->on('users')->onUpdate('cascade');
            $table->unsignedBigInteger('answer_fk');
            $table->foreign('answer_fk')->references('id')->on('answers')->onUpdate('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('graded_answers');
    }
};
