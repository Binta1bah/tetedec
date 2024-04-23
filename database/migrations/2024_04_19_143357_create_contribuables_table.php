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
        Schema::create('contribuables', function (Blueprint $table) {
            $table->id();
            $table->string('ifu');
            $table->string('raisonSociale');
            $table->string('formeJuridique');
            $table->string('secteur');
            $table->string('telephone');
            $table->string('adresseVille');
            $table->string('adresseRue');
            $table->string('email');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribuables');
    }
};
