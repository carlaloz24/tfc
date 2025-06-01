<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'is_admin' => 'nullable|in:0,1',
            'is_disabled' => 'nullable|in:0,1',
        ], [
            'is_admin.in' => 'El campo administrador debe ser un valor booleano.',
            'is_disabled.in' => 'El campo cuenta deshabilitada debe ser un valor booleano.',
        ]);

        /* si una cuenta está deshabilitada:
        -Impide que el usuario inicie sesión o acceda a funciones de la plataforma
        -No elimina la cuenta, solo la desactiva temporalmente.
        -y al desmarcarlo (is_disabled = 0), la cuenta se reactiva.*/

        $user = User::findOrFail($id);
        $user->is_admin = $request->has('is_admin') ? 1 : 0;
        $user->is_disabled = $request->has('is_disabled') ? 1 : 0;
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'Usuario actualizado correctamente.');
    }

    public function showPasswordForm($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.password', compact('user'));
    }

    public function updatePassword(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        $user->update([
            'contraseña' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Contraseña actualizada correctamente.');
    }
}




