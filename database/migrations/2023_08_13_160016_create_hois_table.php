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
        Schema::create('hois', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('institute');
            $table->string('type');
            $table->string('designation');
            $table->string('education');
            $table->string('status');
            $table->string('user');
            $table->string('ip');
            $table->string('flag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hois');
    }
};
