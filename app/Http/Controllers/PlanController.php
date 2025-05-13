<?php
namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Dieta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PlanController extends Controller
{
    public function select($mascota_id)
    {
        try {
            // Obtener el usuario autenticado
            $user = Auth::user();
            if (!$user) {
                return redirect()->route('login')->with('error', 'Debes iniciar sesión para contratar un plan.');
            }

            // Obtener la mascota seleccionada
            $mascotaSeleccionada = Mascota::where('id_usuario', $user->id)
                ->where('id', $mascota_id)
                ->with('dietas') // Cargar la relación dietas
                ->firstOrFail();

            // Verificar que la mascota tenga al menos una dieta asociada
            $dietaSeleccionada = $mascotaSeleccionada->dietas()->latest()->first();
            if (!$dietaSeleccionada) {
                return redirect()->back()->with('error', 'La mascota seleccionada no tiene una dieta asociada.');
            }

            // Obtener todas las mascotas del usuario con al menos una dieta
            $mascotas = Mascota::where('id_usuario', $user->id)
                ->whereHas('dietas') // Cambiado de 'dieta' a 'dietas'
                ->with('dietas') // Cargar dietas para cada mascota
                ->get();

            return view('planes.select', [
                'mascotaSeleccionada' => $mascotaSeleccionada,
                'dietaSeleccionada' => $dietaSeleccionada,
                'mascotas' => $mascotas,
            ]);
        } catch (\Exception $e) {
            Log::error('Error en PlanController@select', [
                'mascota_id' => $mascota_id,
                'error' => $e->getMessage(),
            ]);
            return redirect()->back()->with('error', 'Error al cargar la página de selección de plan.');
        }
    }

    public function checkout(Request $request)
    {
        try {
            $validated = $request->validate([
                'mascota_id' => 'required|exists:mascotas,id',
                'frecuencia' => 'required|in:mensual,anual',
                'tipo_plan' => 'required|in:basico,premium,personalizado',
                'payment_method' => 'required',
            ]);

            $user = Auth::user();
            if (!$user) {
                return response()->json(['success' => false, 'message' => 'Usuario no autenticado'], 401);
            }

            // Verificar que la mascota pertenece al usuario y tiene al menos una dieta
            $mascota = Mascota::where('id_usuario', $user->id)
                ->where('id', $request->mascota_id)
                ->whereHas('dietas') // Cambiado de 'dieta' a 'dietas'
                ->firstOrFail();

            // Aquí integrarías la lógica de Stripe para procesar el pago
            // Por ahora, simulamos el éxito
            Log::info('Procesando checkout', [
                'mascota_id' => $request->mascota_id,
                'frecuencia' => $request->frecuencia,
                'tipo_plan' => $request->tipo_plan,
                'payment_method' => $request->payment_method,
            ]);

            // Simular creación de suscripción (ajusta según tu modelo)
            // Ejemplo: Suscripcion::create([...]);

            return redirect()->route('profile.index')->with('success', 'Plan contratado correctamente.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            Log::error('Error en PlanController@checkout', [
                'error' => $e->getMessage(),
                'request' => $request->all(),
            ]);
            return back()->with('error', 'Error al procesar el pago.');
        }
    }
}
