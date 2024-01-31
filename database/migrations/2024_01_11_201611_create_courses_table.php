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
        Schema::create('courses', function (Blueprint $table) {
            $table->id('id');
            $table->string('title');
            $table->string('course_code');
            $table->string('section');
            $table->unsignedBigInteger('teacher_fk');
            $table->foreign('teacher_fk')->references('id')->on('users')->cascadeOnUpdate();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('Updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
