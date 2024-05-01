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
        Schema::create('learning_contents', function (Blueprint $table) {
            $table->id();
            $table->string('content_code')->unique();
            $table->string('bootcamp_code');
            $table->string('objective_code');
            $table->string('title');
            $table->string('slug');
            $table->integer('page_number');
            $table->text('content');
            $table->timestamps();
            $table->foreign('bootcamp_code')->references('bootcamp_code')->on('bootcamps');
            $table->foreign('objective_code')->references('objective_code')->on('learning_objectives');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learning_contents');
    }
};
