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
        Schema::create('bina', function (Blueprint $table) {
            $table->id('bina_id');
            $table->string('resim');
            $table->string('il');
            $table->string('ilce');
            $table->string('mahalle');
            $table->string('sokak');
            $table->string('binaismi');
            $table->string('binano');
            $table->string('kapino');
            $table->string('binaislemi');
            $table->string('binayasi');
            $table->string('binadurumu');
            $table->string('oylamaorani');
            $table->string('yetkiliismi');
            $table->string('binareferansno');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bina');
    }
};
