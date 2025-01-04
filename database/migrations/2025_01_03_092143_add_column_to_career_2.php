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
            $table->enum('method', ['Onsite', 'Remote', 'Hybrid'])->default('Onsite');
            $table->enum('status', ['Full Time', 'Part Time'])->default('Full Time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('career', function (Blueprint $table) {
            $table->dropColumn(['method', 'status']);
        });
    }
};
