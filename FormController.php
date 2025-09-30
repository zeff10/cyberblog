<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function handleForm(Request $req){
        $name = $req->input('name1');
        $email = $req->input('email1');

        return view('display', compact('name', 'email'));
    }
}
