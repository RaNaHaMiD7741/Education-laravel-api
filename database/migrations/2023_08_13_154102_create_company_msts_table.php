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
        Schema::create('company_msts', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_code');
            $table->string('address');
            $table->string('district');
            $table->string('thana');
            $table->string('city');
            $table->string('country');
            $table->string('email');
            $table->string('phone');
            $table->string('turnover_type');
            $table->string('delete_cd');
            $table->string('user');
            $table->string('ip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_msts');
    }
};
