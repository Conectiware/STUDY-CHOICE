<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $table = 'formations'; 

    protected $fillable = [
        'nom',
        'intitule',
        'image',
        'niveau',
        'date_debut',
        'duree',
        'type_cours',
    ];
}
