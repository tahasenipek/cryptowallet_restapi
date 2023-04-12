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
        Schema::create('wallets', function (Blueprint $table) {
            $table->id('wallet_id');
            $table->string('name');
            $table->string('price');
            $table->string('network');
            $table->string('wallet_address');
            $table->string('wallet_network');
            $table->string('wallet_balance_usd');
            $table->string('wallet_balance_eur');
            $table->string('wallet_balance_try');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
