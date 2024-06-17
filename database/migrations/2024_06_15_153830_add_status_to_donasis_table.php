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
        Schema::table('donasi', function (Blueprint $table) {
            $table->enum('status', ['Process', 'Pick up', 'Completed'])->default('Process');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('donasi', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
