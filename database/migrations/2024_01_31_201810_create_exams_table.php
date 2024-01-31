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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['test', 'assignment', 'quiz']);
            $table->string('Due_date');
            $table->string('unlocks');
            $table->integer('Duration');
            $table->integer('Total_Marks');
            $table->unsignedBigInteger('course_fk');
            $table->foreign('course_fk')->references('id')->on('courses')->onUpdate('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
