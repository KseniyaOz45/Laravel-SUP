<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
            $table->decimal('salary', 10, 2)->default(20000.00);
            $table->string('avatar');
        });
        DB::statement('ALTER TABLE Users ADD CONSTRAINT check_salary CHECK (salary > 20000.00)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Users', function (Blueprint $table) {
            //
            $table->dropColumn('salary');
            $table->dropColumn('avatar');

        });
        DB::statement('ALTER TABLE Users DROP CONSTRAINT check_salary');
    }
};
