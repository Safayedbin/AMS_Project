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
        Schema::create('student_tracks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('student_fk');
            $table->foreign('student_fk')->references('id')->on('students');
            $table->unsignedBigInteger('track_fk');
            $table->foreign('track_fk')->references('id')->on('tracks');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_track');
    }
};
