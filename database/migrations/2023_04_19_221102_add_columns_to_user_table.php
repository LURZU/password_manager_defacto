<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Models\Roles;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('user', function (Blueprint $table) {
            Schema::table('Roles', function (Blueprint $table) {
                $table->foreignIdFor(\App\Models\roles::class)->nullable()->constrained()->cascadeOnDelete();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user', function (Blueprint $table) {
            Schema::table('roles', function (Blueprint $table) {
                $table->dropForeignIdFor(\App\Models\Roles::class);
            });
        });
    }
};
