<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->unsignedBigInteger('career_id');
            $table->string('cv');
            $table->decimal('score');
            $table->longText('review');
            $table->string('career_status')->default('Applied');

            // Custom timestamps
            $table->timestamp('date_uploaded')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('date_updated')->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('career_id')->references('id')->on('career')->onDelete('cascade');
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
