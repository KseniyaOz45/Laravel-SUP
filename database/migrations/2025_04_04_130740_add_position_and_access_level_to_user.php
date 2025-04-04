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
        Schema::table('Users', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('position_id')->nullable()->default(null);
            $table->unsignedBigInteger('access_level_id')->nullable()->default(null);

            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('access_level_id')->references('id')->on('access_levels');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Users', function (Blueprint $table) {
            //
            $table->dropForeign('users_position_id_foreign');
            $table->dropForeign('users_access_level_id_foreign');

            $table->dropColumn('position_id');
            $table->dropColumn('access_level_id');
        });
    }
};
