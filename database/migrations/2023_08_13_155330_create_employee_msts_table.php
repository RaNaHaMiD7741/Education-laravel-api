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
        Schema::create('employee_msts', function (Blueprint $table) {
            $table->id();
            $table->string('emp_name');
            $table->string('email');
            $table->string('phone');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('address');
            $table->string('country');
            $table->string('emp_code');
            $table->string('role_id');
            $table->date('date_of_birth');
            $table->string('designation');
            $table->string('user_name');
            $table->string('password');
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
        Schema::dropIfExists('employee_msts');
    }
};
