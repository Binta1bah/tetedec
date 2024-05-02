<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Agent extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'matricule',
        'departement',
        'email',
        'password',
    ];

    public function declarations() {
        return $this->hasMany(Declaration::class);
    }

    public function paiements() {
        return $this->hasMany(Paiement::class);
    }

    
}
