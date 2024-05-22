<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function daftar() {
        return view('page.register');
    }

    public function welcome(Request $request) {
        $fname = $request->input('fname');
        $lname = $request->input('lname');

        return view('page.welcome', ['fname' => $fname, 'lname' => $lname]);
    }
}




