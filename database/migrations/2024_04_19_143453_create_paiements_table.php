<?php

use App\Models\Agent;
use App\Models\Contribuable;
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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->string('numeroQuittance');
            $table->string('ModePaiement');
            $table->integer('montant');
            $table->foreignIdFor(Agent::class)->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(Contribuable::class)->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
