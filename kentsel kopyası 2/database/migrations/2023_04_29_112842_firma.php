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
        Schema::create('Firma', function (Blueprint $table) {
            $table->id('firma_id');
            $table->string('firmaismi')->unique();
            $table->string('email')->unique();
            $table->string('yetkiliadsoyad');
            $table->string('yetkilitel')->unique();
            $table->string('password');
            $table->string('c_password');
            $table->string('referansno')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Firma');
    }
};
