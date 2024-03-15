<?php
// database/migrations/date_create_entry_images_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('entry_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entry_id')->constrained('entries')->onDelete('cascade');
            $table->enum('image_type', ['general_image', 'architectural_drawing'])->default('general_image');
            $table->string('image_name');
            $table->string('image_path');
            $table->timestamps();
            // Index for entry_id for better performance
            $table->index('entry_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('entry_images');
    }
};
