<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:usuarios,correo',
            'contraseña' => 'required|string|min:8|confirmed',
        ]);

        $user = new User();
        $user->nombre = $request->nombre;
        $user->correo = $request->correo;
        $user->contraseña = Hash::make($request->contraseña);
        $user->is_admin = 0;
        $user->save();

        Auth::login($user);

        return redirect()->route('home')->with('success', 'Registro exitoso.');
    }
}
