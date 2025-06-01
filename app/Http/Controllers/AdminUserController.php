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
        $user = User::findOrFail($id);
        $request->validate([
            'is_admin' => 'boolean',
            'is_disabled' => 'boolean',
        ]);

        $user->update([
            'is_admin' => $request->is_admin ?? false,
            'is_disabled' => $request->is_disabled ?? false,
        ]);

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
