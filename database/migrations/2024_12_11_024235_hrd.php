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
       Schema::create('hrd', function (Blueprint $table) {
        $table->id();
        $table->foreignId('hrd_id')->constrained('hrds')->onDelete('cascade'); // Relasi dengan HRD
        $table->string('position');
        $table->string('department');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hrd');
    }
};
