<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    
    public function translate(Request $request)
    {
    	if(!$request->has('_token')) {
    		return view('form.translate');
    	}

    	$this->validate($request, [
    		'nome' => 'required|min:6',
    		'email' => 'required|email',
    		'idade' => 'required|numeric',
    	]);
    }
}
