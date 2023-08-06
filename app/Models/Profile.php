<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use Hasfactory;

    protected $fillable =[
        "nom",
        "prenom",
        "profilepicture",
        "email",
        "bio"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
