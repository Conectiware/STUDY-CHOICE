<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $table = 'filieres'; 

    protected $fillable = [
        'nom',
        'programme',
        'ecole',
        'date_debut',
        'type_cours',
        'duree',
    ];
}
