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
            $table->longText('briefDescription')->nullable()->after('location');
            $table->string('category')->nullable()->after('briefDescription');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('career', function (Blueprint $table) {
            $table->dropColumn(['briefDescription', 'category']);
        });
    }
};
