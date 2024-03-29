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
        Schema::create('timeline_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('timeline_id');
            $table->foreign('timeline_id')->references('id')->on('timeline');
            $table->longText('images');
            $table->longText('image_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timeline_images');
    }
};
