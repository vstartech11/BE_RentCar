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
        Schema::create('car_police', function (Blueprint $table) {
            $table->foreignId('police_id')->constrained('police', 'id_police');
            $table->foreignId('car_id')->constrained('cars', 'id_car');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('car_police');
    }
};