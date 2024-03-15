<?php
// database/migrations/date_create_entries_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('full_name');
            $table->string('surname');
            $table->string('company');
            $table->string('phone_number');
            $table->string('email');
            $table->string('entry_title');
            $table->string('project_category');
            $table->text('description');
            $table->string('owner_developer_name');
            $table->string('developer_name');
            $table->date('date_of_completion');
            $table->decimal('capital_investment', 19, 4);
            $table->decimal('economic_return', 19, 4);
            $table->text('tenant_profile');
            $table->string('BBBEE_status');
            $table->text('overall_impact');
            $table->text('design_concept');
            $table->text('functionality_fit_for_purpose');
            $table->text('facilities_user_satisfaction');
            $table->text('environmentally_sustainable_design');
            $table->text('social_transformation');
            $table->timestamps();
            // Add indexes for performance optimization
            $table->index('project_category');
            $table->index('date_of_completion');

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Indexes
            $table->index('user_id'); // Index for user_id
        });
    }

    public function down()
    {
        Schema::table('entries', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Drop foreign key constraint
            $table->dropIndex(['user_id']); // Drop index for user_id
        });
        Schema::dropIfExists('entries');
    }
};
