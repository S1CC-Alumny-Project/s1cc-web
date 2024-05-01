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
        Schema::create('gss', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('speaker_id');
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->date('date');
            $table->string('time');
            $table->string('place');
            $table->timestamps();
            $table->foreign('speaker_id')->references('id')->on('speaker_profiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gsses');
    }
};
