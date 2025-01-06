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
        Schema::table('career', function (Blueprint $table) {
            // Remove the existing category column if necessary
            $table->dropColumn('category');

            // Add a foreign key column referencing the career_category table
            $table->unsignedBigInteger('category_id')->nullable();

            // Define the foreign key constraint
            $table->foreign('category_id')->references('id')->on('career_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('career', function (Blueprint $table) {
            // Remove the foreign key and column
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');

            // Add the original string column back
            $table->string('category');
        });
    }
};
