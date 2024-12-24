<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // Foreign key column
            $table->string('name')->default('');
            $table->string('nickname')->default('');
            $table->string('birth_place')->default('');
            $table->date('dob')->nullable();
            $table->enum('gender', ['F', 'M'])->nullable();
            $table->string('domicile')->default('');
            $table->enum('education_level', ['SMA / K', 'D3', 'S1', 'S2', 'S3'])->nullable();
            $table->string('school')->default('');
            $table->string('major')->default('');
            $table->text('experience')->default('');
            $table->timestamps();

            // Add the foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
