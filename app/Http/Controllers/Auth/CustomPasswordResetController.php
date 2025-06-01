<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomPasswordResetController extends Controller
{
    // Muestra el formulario para solicitar el enlace de restablecimiento
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    // Envía el enlace de restablecimiento por correo
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['correo' => 'required|email']);

        $user = User::where('correo', $request->correo)->first();

        if (!$user) {
            return back()->withErrors(['correo' => 'No encontramos un usuario con ese correo.']);
        }

        $token = Str::random(60);
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $request->correo],
            ['token' => Hash::make($token), 'created_at' => now()]
        );

        // Enviar correo (para pruebas, usamos el log)
        \Log::info('Enlace de restablecimiento: ' . route('password.reset', ['token' => $token, 'correo' => $request->correo]));

        return back()->with('status', '¡Enlace de restablecimiento enviado! Revisa tu correo.');
    }

    // Muestra el formulario para restablecer la contraseña
    public function showResetForm(Request $request, $token)
    {
        return view('auth.passwords.reset', ['token' => $token, 'correo' => $request->query('correo')]);
    }

    // Procesa el restablecimiento de la contraseña
    public function reset(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'password' => 'required|string|min:8|confirmed',
            'token' => 'required',
        ]);

        $reset = DB::table('password_reset_tokens')
            ->where('email', $request->correo)
            ->first();

        if (!$reset || !Hash::check($request->token, $reset->token)) {
            return back()->withErrors(['correo' => 'Token o correo inválido.']);
        }

        $user = User::where('correo', $request->correo)->first();

        if (!$user) {
            return back()->withErrors(['correo' => 'No encontramos un usuario con ese correo.']);
        }

        $user->contraseña = Hash::make($request->password);
        $user->save();

        // Elimina el token usado
        DB::table('password_reset_tokens')->where('email', $request->correo)->delete();

        return redirect()->route('login')->with('status', '¡Contraseña restablecida! Inicia sesión.');
    }
}
