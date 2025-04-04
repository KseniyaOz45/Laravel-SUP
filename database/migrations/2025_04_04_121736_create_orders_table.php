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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('personal_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('inventory_id');
            $table->decimal('quantity', 10, 2)->default(0);
            $table->decimal('sum', 10, 2)->default(0);
            $table->string('batch_number')->unique();

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('personal_id')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('order_statuses');
            $table->foreign('inventory_id')->references('id')->on('inventories');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
