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
        Schema::create('usercareer', function (Blueprint $table) {
            $table->id('user_career_id');
            $table->unsignedBigInteger('user_id');
            // $table->integer('career_id');
            $table->string('cv');
            $table->integer('score')->default(0);
            $table->string('career_status')->default('Applied');
            $table->timestamp('DateUploaded');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('career_id')->references('id')->on('careers')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usercareer');
    }
};
