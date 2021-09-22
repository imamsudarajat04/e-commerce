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
        $request->validate([
            'nama' => 'required|regex:/^[\pL\s\-]+$/u',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|before:today',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ],
        [
            'nama.required' => 'Nama Lengkap wajib diisi.',
            'tempat_lahir.required' => 'Tempat Lahir wajib diisi.',
            'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi.',
            'email.required' => 'Email wajib diisi atau Email sudah digunakan.',
            'password.required' => 'Password wajib diisi.'
        ]);

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
    //    dd($input);
        return back()->with('success', 'Berhasil Registrasi!');
    }
}
