<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('/contact/create');
    }
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'email|required',
            'message' => 'required'
        ]);
        Mail::to('test@test.com')->send(new ContactMail($data));

        // 1er solution
        session()->flash('msg', 'Le message a bien était envoyé !');
        return redirect('/contactez-nous')->with('msg', 'Le message a bien était envoyé !');
    }
}