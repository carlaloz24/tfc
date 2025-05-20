<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $mascotas = Mascota::with('dietas', 'plan')
            ->where('id_usuario', $user->id)
            ->get();
        $facturas = $user->facturas()->get();
        return view('profile', [
            'mascotas' => $mascotas,
            'facturas' => $facturas,
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:usuarios,correo,' . $user->id,
        ]);
        $user->nombre = $request->name;
        $user->correo = $request->email;
        $user->save();
        return redirect()->route('profile.index')->with('success', 'Datos actualizados.');
    }

    public function destroy()
    {
        Auth::user()->delete();
        return redirect()->route('home')->with('success', 'Cuenta eliminada.');
    }
}
