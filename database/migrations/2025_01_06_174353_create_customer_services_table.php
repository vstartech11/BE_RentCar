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
    Schema::create('customer_services', function (Blueprint $table) {
        $table->id();
        $table->json('cars'); // Simpan data mobil dalam JSON
        $table->json('customers'); // Simpan data pelanggan dalam JSON
        $table->json('rentals'); // Simpan data rental dalam JSON
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_services');
    }
};