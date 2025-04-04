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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug');
            $table->string('batch_number')->unique();
            $table->decimal('price', 10, 2);

            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('manufacturer_id');

            $table->foreign('type_id')->references('id')->on('inventory_types');
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
