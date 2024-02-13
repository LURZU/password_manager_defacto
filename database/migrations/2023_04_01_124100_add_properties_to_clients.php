<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Models\Login_info;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('logoPath')->nullable();
            $table->string('mail');
        });
        Schema::table('login_infos', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Login_info::class)->nullable()->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::table('login_infos', function (Blueprint $table) {
            $table->dropForeignIdFor(\App\Models\Login_info::class);
        });
    }
};
