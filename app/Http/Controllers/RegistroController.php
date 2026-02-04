<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function showForm()
    {
        return view('auth.registro');
    }
    public function register(Request $request)
    {
        $validated = $request->validate([
            'login' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user = User::create([
            'login' => $validated['login'],
            'password' => Hash::make($validated['password']),
        ]);
        Auth::login($user);
        return redirect()->route('libros.index')->with('mensaje', 'Cuenta creada exitosamente');
    }
}
