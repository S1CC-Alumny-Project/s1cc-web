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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('mentor_id');
            $table->string('objective_code');
            $table->text('notes_to_reviewer')->nullable();
            $table->text('file_path')->nullable();
            $table->text('notes_from_reviewer')->nullable();
            $table->string('status');
            $table->unsignedSmallInteger('stars');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('mentor_id')->references('id')->on('users');
            $table->foreign('objective_code')->references('objective_code')->on('learning_objectives');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
