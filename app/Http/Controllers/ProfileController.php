<?php
namespace App\Http\Controllers;
use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $mascotas = Auth::user()->mascotas;
        return view('profile', compact('mascotas'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);
        $user->update($request->only('name', 'email'));
        return redirect()->route('profile.index')->with('success', 'Datos actualizados.');
    }

    public function destroy()
    {
        Auth::user()->delete();
        return redirect()->route('home')->with('success', 'Cuenta eliminada.');
    }
}
