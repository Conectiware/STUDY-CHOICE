<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }
    public function store()
    {
        $data = request()->validate([
            'nom'=>'required',
            'naissance'=>'required',
            'email'=>'required'|'email',
            'tel'=>'required',
            'genre'=>'required',
            'pays'=>'required',
            'document'=>'required',
            'num_doc'=>'required',
            'direction'=>'required',
            'pays_del'=>'required',
            'date_del'=>'required',
            'date_exp'=>'required',
            'residence'=>'required',
            'adresse'=>'required',
            'province'=>'required',
            'bp'=>'required',
            'pere'=>'required',
            'mere'=>'required',
            'prof_pere'=>'required',
            'prof_mere'=>'required'
        ]);
        Mail::to('Bessahenoc@gmail.com')->send(new ContactMail($data));
    }
}
