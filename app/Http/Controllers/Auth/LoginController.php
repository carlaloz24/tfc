<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'contraseña' => 'required',
        ]);

        // Depuración: Verifica si el usuario existe
        $user = User::where('correo', $request->correo)->first();
        if ($user) {
            // Verifica manualmente la contraseña
            if (Hash::check($request->contraseña, $user->contraseña)) {
                Auth::login($user, $request->filled('remember'));
                \Log::info('Login exitoso para: ' . $request->correo);
                return redirect()->intended('/');
            } else {
                \Log::error('Contraseña incorrecta para: ' . $request->correo);
            }
        } else {
            \Log::error('Usuario no encontrado: ' . $request->correo);
        }

        return back()->withErrors(['correo' => 'Credenciales incorrectas.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
