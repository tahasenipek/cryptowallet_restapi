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
        Schema::create('crypto_moneys', function (Blueprint $table) {
            $table->id('crypto_money_id');
            $table->string('name');
            $table->string('symbol');
            $table->string('max_supply');
            $table->string('circulating_supply');
            $table->string('total_supply');
            $table->string('platform');
            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crypto_moneys');
    }
};
