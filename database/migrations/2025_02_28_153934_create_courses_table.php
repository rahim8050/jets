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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->integer('price');
            $table->integer('discount');
            $table->integer('total_students');
            $table->integer('total_hours');
            $table->integer('rating');
            // $table->integer('category_id');
            // $table->integer('level_id');
            // $table->integer('language_id');
            $table->integer('status');
            $table->integer('is_featured');
            $table->integer('is_bestseller');
            $table->integer('is_new');
            $table->integer('is_free');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
