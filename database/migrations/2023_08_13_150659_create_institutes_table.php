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
        Schema::create('institutes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('eiin');
            $table->string('type');
            $table->string('category');
            $table->string('sub_category');
            $table->string('district');
            $table->string('ps');
            $table->string('user');
            $table->string('ip');
            $table->string('address');
            $table->string('head');
            $table->string('asst_head');
            $table->string('clerk');
            $table->string('mobile');
            $table->string('union');
            $table->string('village');
            $table->string('area');
            $table->string('word');
            $table->string('president');
            $table->string('president_mob');
            $table->string('logo');
            $table->string('rating');
            $table->string('status');
            $table->string('stablish');
            $table->string('institute_creator');
            $table->string('avatar');
            $table->string('approved_for');
            $table->string('approved_shift');
            $table->string('tqty');
            $table->string('sqty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institutes');
    }
};
