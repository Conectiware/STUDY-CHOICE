<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    protected $table = 'candidatures'; 

    protected $fillable = [
        'nom',
        'naissance',
        'email',
        'tel',
        'genre',
        'document',
        'num_doc',
        'direction',
        'pays_del',
        'date_del',
        'date_exp',
        'residence',
        'adresse',
        'province',
        'bp',
        'pere',
        'mere',
        'prof_pere',
        'prof_mere',
    ];
}
