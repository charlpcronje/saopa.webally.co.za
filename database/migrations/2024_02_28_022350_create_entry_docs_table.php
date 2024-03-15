<?php
// database/migrations/date_create_entry_docs_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('entry_docs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entry_id')->constrained('entries')->onDelete('cascade');
            $table->enum('doc_type', ['general_doc', 'other'])->default('general_doc');
            $table->string('doc_name');
            $table->string('doc_path');
            $table->timestamps();
            // Index for entry_id for faster query performance
            $table->index('entry_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('entry_docs');
    }
};
