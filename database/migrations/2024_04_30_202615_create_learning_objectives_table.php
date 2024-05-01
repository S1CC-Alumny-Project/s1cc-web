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
        Schema::create('learning_objectives', function (Blueprint $table) {
            $table->id();
            $table->string('objective_code')->unique();
            $table->string('bootcamp_code');
            $table->string('title');
            $table->text('description');
            $table->text('task_desc');
            $table->timestamps();
            $table->foreign('bootcamp_code')->references('bootcamp_code')->on('bootcamps');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learning_objectives');
    }
};
