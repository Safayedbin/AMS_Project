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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('organization_id')->unique();
            $table->unsignedBigInteger('image_fk')->nullable();
            $table->foreign('image_fk')->references('id')->on('images');

            $table->enum('acc_type', ['Teacher', 'Student', 'admin', 'Controller']);
            $table->enum('Title', ['Student', 'Lecturer', 'Assitant Professor', 'Professor']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('Updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
