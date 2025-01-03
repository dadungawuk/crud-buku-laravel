<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthManualController extends Controller
{
    public function index()
    {
        return view('manual-auth.login');
    }

    public function loginProses(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email harus diisi!',
            'email.email' => 'Format email harus benar.',
            'password.required' => 'Password wajib diisi!'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Alert::success('Selamat!', 'Anda telah berhasil masuk ke sistem!');
            return redirect()->route('dashboard');
        }

        // Alert::alert('Gagal Login', 'Username atau Password anda salah!', 'error');
        // Alert::error('Gagal Login', 'Username atau Password anda salah!');
        Alert::toast('Username atau Password anda salah!', 'error')->autoClose(3000);
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Alert::toast('Anda telah logout!', 'success')->autoClose(3000);
        return redirect()->route('login');
    }
}
