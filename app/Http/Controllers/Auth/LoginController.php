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
        return view('auth.login');
    }

    public function showAdminLoginForm()
    {
        if (Auth::check() && Auth::user()->is_admin) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'contraseña' => 'required',
        ]);

        if (Auth::attempt(['correo' => $request->correo, 'password' => $request->contraseña])) {
            $user = Auth::user();
            if ($user->is_admin) {
                Auth::logout();
                return back()->withErrors(['correo' => 'Los administradores deben usar el login de administrador.'])->onlyInput('correo');
            }
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors(['correo' => 'Las credenciales no coinciden.'])->onlyInput('correo');
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['correo' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->is_admin) {
                $request->session()->regenerate();
                return redirect()->route('admin.dashboard');
            }
            Auth::logout();
            return back()->withErrors(['email' => 'Solo los administradores pueden iniciar sesión aquí.'])->onlyInput('email');
        }

        return back()->withErrors(['email' => 'Las credenciales no coinciden.'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
