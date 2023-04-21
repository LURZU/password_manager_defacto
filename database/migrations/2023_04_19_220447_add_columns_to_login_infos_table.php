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
        Schema::table('login_infos', function (Blueprint $table) {
            $table->string('platform');
            $table->string('platform_link')->nullable();
            $table->string('login');
            $table->string('password');
            $table->string('host_name')->nullable();
            $table->string('dbname')->nullable();
            $table->string('connect_port')->nullable();
            $table->string('other')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('login_infos', function (Blueprint $table) {
            $table->dropColumn('platform');
            $table->dropColumn('platform_link');
            $table->dropColumn('login');
            $table->dropColumn('password');
            $table->dropColumn('host_name');
            $table->dropColumn('dbname');
            $table->dropColumn('connect_port');
            $table->dropColumn('other'); 
        });
    }
};
