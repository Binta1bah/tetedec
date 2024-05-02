<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'numeroQuittance',
        'ModePaiement',
        'montant',
        'agent_id',
        'contribuable_id'
    ];

    public function contribuable() {
        return $this->belongsTo(Contribuable::class);
    }

    public function agent() {
        return $this->belongsTo(Agent::class);
    }
}
