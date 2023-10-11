<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preparation extends Model
{
    protected $table = 'preparations'; 

    protected $fillable = [
        'nom',
        'intitule',
        'ecole',
        'photo',
        'ville',
        'duree',
        'type_cours',
    ];
}
