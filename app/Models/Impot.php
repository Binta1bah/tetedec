<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impot extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
        'nature',
        'taux',
        'declaration_id'
    ];
}
