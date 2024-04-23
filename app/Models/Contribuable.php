<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Contribuable extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'ifu',
        'raisonSociale',
        'formeJuridique',
        'secteur',
        'telephone',
        'adresseVille',
        'adresseRue',
        'email',
    ];

    public function declarations() {
        return $this->hasMany(Declaration::class);
    }

    public function paiements() {
        return $this->hasMany(Paiement::class);
    }
}
