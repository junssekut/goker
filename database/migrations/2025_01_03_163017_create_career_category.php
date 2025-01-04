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
        Schema::create('career_category', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('category_name'); // Name of the category
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('career_category', function (Blueprint $table) {
            Schema::dropIfExists('career_category');
        });
    }
};
