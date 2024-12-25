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
        Schema::create('detail_careers', function (Blueprint $table) {
            $table->id('CareerId');
            $table->longText('Description');
            $table->longText('Jobdesk');
            $table->longText('Requirement');
            $table->longText('AboutTeam');
            $table->date('DateEnd');
            $table->timestamp('DateUploaded');
            $table->foreign('CareerId')->references('id')->on('career')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_careers');
    }
};
