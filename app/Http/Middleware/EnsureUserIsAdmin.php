<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsAdmin{
    /**  Verifica si el usuario está autenticado y es administrador. Si no lo es,
     * redirige al login con un mensaje de error.
     */
    public function handle(Request $request, Closure $next){
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('login')->with('error', 'Acceso denegado. Solo administradores.');
        }
        return $next($request);
    }
}
