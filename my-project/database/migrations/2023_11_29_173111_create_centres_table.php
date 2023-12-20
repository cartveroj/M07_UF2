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
        Schema::create('centres', function (Blueprint $table) {
            // crea els camps de la taula amb el tipus del valor
            $table->increments('id');
            $table->timestamps();
            $table->char('nom', 100);
            $table->string('adreça');
            $table->string('cp');
            $table->string('ciutat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centres');
    }
};
