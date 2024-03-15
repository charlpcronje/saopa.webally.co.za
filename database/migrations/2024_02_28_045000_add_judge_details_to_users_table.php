<?php
// database/migrations/2024_02_28_040000_create_roles_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations to add judge-specific details to the users table.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->after('name');
            $table->string('company')->nullable()->after('surname');
            $table->string('work_phone')->nullable()->after('company');
            $table->string('fax_number')->nullable()->after('work_phone');
            $table->string('mobile_number')->after('fax_number');
        });
    }

    /**
     * Reverse the migrations to remove judge-specific details from the users table.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['surname', 'company', 'work_phone', 'fax_number', 'mobile_number']);
        });
    }
};
