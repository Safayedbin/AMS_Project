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
        Schema::create('answer_banks', function (Blueprint $table) {
            $table->id();
            $table->integer('answer_number');
            $table->longText('answer_text');
            $table->boolean('correct');

            $table->unsignedBigInteger('question_fk');
            $table->foreign('question_fk')->references('id')->on('question_banks');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_answer_bank');
    }
};
