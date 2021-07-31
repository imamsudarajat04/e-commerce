<?php

namespace App\Http\Controllers;

use User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
