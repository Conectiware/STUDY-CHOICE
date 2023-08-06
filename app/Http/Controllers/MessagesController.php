<?php

namespace App\Http\Controllers;

use app\Mail\ContactMessageCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function create(){
        return view('acceuil');
    }

    public function store(){
        
    }

    public function bar(){
     Mail :: to('Bessahenoc88@gmail.com')->send(new ContactMessageCreated());
    }
}
