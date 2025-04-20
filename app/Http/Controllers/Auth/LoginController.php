<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.dashboard');
            }
            return redirect()->intended('/');
        }
        return view('auth.login'); // Login público
    }

    public function showAdminLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login'); // Login de admin
    }

    public function login(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'contraseña' => 'required',
        ]);

        $credentials = [
            'correo' => $request->correo,
            'password' => $request->contraseña,
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->is_admin) {
                Auth::logout(); // Cierra la sesión si es admin
                return back()->withErrors([
                    'correo' => 'Los administradores deben usar el login de administrador.',
                ])->onlyInput('correo');
            }
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'correo' => 'Las credenciales no coinciden.',
        ])->onlyInput('correo');
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'contraseña' => 'required',
        ]);

        $credentials = [
            'correo' => $request->correo,
            'password' => $request->contraseña,
        ];

        if (Auth::attempt($credentials)) {
            if (Auth::user()->is_admin) {
                $request->session()->regenerate();
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout(); // Cierra la sesión si no es admin
                return back()->withErrors([
                    'correo' => 'Solo los administradores pueden iniciar sesión aquí.',
                ])->onlyInput('correo');
            }
        }

        return back()->withErrors([
            'correo' => 'Las credenciales no coinciden.',
        ])->onlyInput('correo');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
