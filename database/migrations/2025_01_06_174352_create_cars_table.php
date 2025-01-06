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
    Schema::create('cars', function (Blueprint $table) {
        $table->id('id_car');
        $table->string('name');
        $table->string('brand');
        $table->string('plate')->unique();
        $table->string('car_type');
        $table->boolean('is_available')->default(true);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};