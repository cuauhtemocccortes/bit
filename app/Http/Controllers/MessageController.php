<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessageController extends Controller
{
    public function store()
    {
    	$message = request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:3',

    	],[
            'name.required' => __('El campo nombre es obligatorio. ')
        ]);

    	Mail::to('cuauhtemocccortes@gmail.com')->queue(new MessageReceived($message));

    	//return new MessageReceived($message);

    	return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas.');
    }
}
