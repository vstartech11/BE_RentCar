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
        Schema::create('car_insurance', function (Blueprint $table) {
            $table->foreignId('insurance_id')->constrained('insurances', 'id_insurance');
            $table->foreignId('car_id')->constrained('cars', 'id_car');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('car_insurance');
    }
};