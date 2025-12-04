<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Mostrar el formulario de login
     */
    public function showLogin()
    {
        // Si ya está logueado, redirige a index
        if (Auth::check()) {
            return redirect()->route('index');
        }

        return view('auth.login');
    }

    /**
     * Procesar login
     */
    public function login(Request $request)
    {
        // Validar los datos
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Intentar autenticar sin "recordarme"
        if (Auth::attempt($credentials, false)) { // false = no recordar sesión
            $request->session()->regenerate();

            // Redirigir siempre a la ruta 'index'
            return redirect()->route('index');
        }

        // Si falla la autenticación
        return back()->withErrors([
            'username' => 'Usuario o contraseña incorrectos',
        ])->withInput();
    }

    /**
     * Cerrar sesión
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
