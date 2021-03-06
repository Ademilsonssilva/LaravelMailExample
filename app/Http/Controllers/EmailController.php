<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Mail\PrimeiroEmail;
use App\Mail\userMarkdown;

class EmailController extends Controller
{
    public function mail1()
    {
    	\Mail::to('ademilsonssilva1@gmail.com')->send(new PrimeiroEmail(\Auth::user()));
    }

    public function mail2()
    {
        \Mail::to('ademilsonssilva1@gmail.com')->queue(new userMarkdown());
        \Mail::to('ademilsonssilva1@gmail.com')->queue(new userMarkdown());
    	\Mail::to('ademilsonssilva1@gmail.com')->queue(new userMarkdown());
        return redirect()->route('translate');
    }

    public function envTeste()
    {
    	return view('envteste');
    }
}
