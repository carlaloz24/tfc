<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

/** Muestra la vista del formulario de registro
 *  valida datos, crea el usuario, inicia sesión y redirige.
 *  */

class RegisterController extends Controller{


    public function showRegistrationForm(){
        return view('auth.register');
    }

    //crear nuevo usuario
    public function register(Request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:usuarios,correo',
            'contraseña' => 'required|string|min:8|confirmed',
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede tener más de 255 caracteres.',
            'correo.required' => 'El correo es obligatorio.',
            'correo.email' => 'El correo debe ser una dirección válida.',
            'correo.unique' => 'El correo ya está registrado.',
            'contraseña.required' => 'La contraseña es obligatoria.',
            'contraseña.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'contraseña.confirmed' => 'La confirmación de la contraseña no coincide.',
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
