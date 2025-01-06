<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('usercareer', function (Blueprint $table) {
            $table->decimal('psychological_test_score', 5, 2)->nullable()->after('score');
            $table->decimal('interview_score', 5, 2)->nullable()->after('psychological_test_score');
            $table->decimal('mcu_score', 5, 2)->nullable()->after('interview_score');
        });
    }

    public function down(): void
    {
        Schema::table('usercareer', function (Blueprint $table) {
            $table->dropColumn(['psychological_test_score', 'interview_score', 'mcu_score']);
        });
    }
};
