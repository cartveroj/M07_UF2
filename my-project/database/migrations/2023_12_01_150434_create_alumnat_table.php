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
        Schema::create('alumnat', function (Blueprint $table) {
            // crea els camps de la taula amb el tipus del valor
            $table->id();
            $table->timestamps();
            $table->char('nom');
            $table->string('cognom');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnat');
    }
};
