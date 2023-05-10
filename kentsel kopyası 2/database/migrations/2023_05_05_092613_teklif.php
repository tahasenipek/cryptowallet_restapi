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
        Schema::create('Teklif', function (Blueprint $table) {
            $table->id('TeklifID');
            $table->unsignedBigInteger('firma_id');
            $table->foreign('firma_id')->references('firma_id')->on('Firma');
            $table->string('il');
            $table->string('ilce');
            $table->string('bina_islem');
            $table->string('bina_durumu');
            $table->string('oylama_orani');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
