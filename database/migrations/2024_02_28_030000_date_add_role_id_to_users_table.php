<?php
// database/migrations/2024_02_28_030000_date_add_role_id_to_users_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')->after('id')->default(1);
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreignId('role_id')->after('id')->default(1)->constrained('roles')->onDelete('cascade');
            // Adding an index for role_id for optimized queries
            $table->index('role_id');
        });
    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropColumn('role_id');
        });
    }
};
