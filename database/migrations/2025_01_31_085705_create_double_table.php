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
        Schema::create('double', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('company');
            $table->string('model');
            $table->string('color');
            $table->string('plate');
            $table->string('year');
            $table->string('engine');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('double');
    }
};
