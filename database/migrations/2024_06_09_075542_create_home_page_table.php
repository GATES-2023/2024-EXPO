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
        Schema::create('home_page', function (Blueprint $table) {
            $table->id();
            $table->string('hero_image_path');
            $table->string('hero_image_alt');
            $table->timestamps();
        });

        Schema::create('carousel_image', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->string('image_alt');
            $table->string('order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page');
    }
};
