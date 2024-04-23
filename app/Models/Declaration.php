<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Declaration extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'elelmentDeclare',
        'baseDeclare',
        'periodeDeclare',
        'agent_id',
        'contribuable_id'
    ];

    public function contibuable() {
        return $this->belongsTo(Contribuable::class);
    }

    public function agent() {
        return $this->belongsTo(Agent::class);
    }
}
