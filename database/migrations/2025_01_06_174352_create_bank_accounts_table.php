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
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->string('account_number')->primary();
            $table->decimal('balance', 15, 2);
            $table->foreignId('account_holder')->constrained('customers', 'id_customer');
            $table->foreignId('id_bank')->constrained('banks', 'id_bank');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_accounts');
    }
};