<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ecole extends Model
{
    //
    protected $table = 'ecoles'; 

    protected $fillable = [
        'nom',
        'adresse',
        'ville',
        'site',
    ];
}
