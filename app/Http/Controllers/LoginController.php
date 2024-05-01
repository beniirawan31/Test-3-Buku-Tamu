<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class LoginController extends Controller
{
    public function index(){
        return view('sesi.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'email wajib diisi',
            'password.required' => 'password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,

        ];

        if (Auth::attempt($infologin)) {
            //sukses
            return redirect('/dashboard')->with('success', 'Berhasil Login');
        } else {
            //gagal
            return redirect('sesi')->withErrors('Username dan Pasword Salah');
        }
    }
}
