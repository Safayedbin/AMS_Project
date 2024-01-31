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
        Schema::create('quiz_answers', function (Blueprint $table) {
            $table->id('id');
            $table->foreign('id')->references('id')->on('questions')->onUpdate('cascade');

            $table->string('option1');
            $table->string('option2');
            $table->string('option3');
            $table->string('option4');
            $table->boolean('correct1');
            $table->boolean('correct2');
            $table->boolean('correct3');
            $table->boolean('correct4');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_answers');
    }
};
