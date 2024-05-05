<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impot extends Model
{
    use HasFactory;

    protected $fillable = [
        'nature',
        'taux',
        'declaration_id',
        'agent_id'
    ];

    public function agent() {
        return $this->belongsTo(Agent::class);
    }

    public function declaration() {
        return $this->belongsTo(Declaration::class);
    }
}
