<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('reservations', function (Blueprint $table) {
        $table->id('reservation_id');
        $table->foreignId('car_id')->constrained('cars', 'id_car');
        $table->foreignId('customer_id')->constrained('customers', 'id_customer');
        $table->date('start_date');
        $table->date('end_date');
        $table->decimal('total_cost', 15, 2);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};