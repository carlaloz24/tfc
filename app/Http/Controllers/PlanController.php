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
            $user = Auth::user();
            Log::info('PlanController@select: Iniciando', ['mascota_id' => $mascota_id, 'user_id' => $user ? $user->id : null]);

            if (!$user) {
                Log::warning('PlanController@select: Usuario no autenticado');
                return redirect()->route('login')->with('error', 'Debes iniciar sesión para contratar un plan.');
            }

            $mascotaSeleccionada = Mascota::where('id_usuario', $user->id)
                ->where('id', $mascota_id)
                ->with('dietas')
                ->firstOrFail();
            Log::info('PlanController@select: Mascota encontrada', ['mascota_id' => $mascotaSeleccionada->id]);

            $dietaSeleccionada = $mascotaSeleccionada->dietas()->latest()->first();
            if (!$dietaSeleccionada || !$dietaSeleccionada->pdf_dieta) {
                Log::warning('PlanController@select: No hay dieta o pdf_dieta para la mascota', ['mascota_id' => $mascota_id]);
                return redirect()->back()->with('error', 'La mascota seleccionada no tiene una dieta asociada.');
            }
            Log::info('PlanController@select: Dieta encontrada', [
                'dieta_id' => $dietaSeleccionada->id,
                'has_pdf_dieta' => !empty($dietaSeleccionada->pdf_dieta),
            ]);

            $mascotas = Mascota::where('id_usuario', $user->id)
                ->whereHas('dietas')
                ->with('dietas')
                ->get();
            Log::info('PlanController@select: Mascotas cargadas', ['count' => $mascotas->count()]);

            return view('planes.select', [
                'mascotaSeleccionada' => $mascotaSeleccionada,
                'dietaSeleccionada' => $dietaSeleccionada,
                'mascotas' => $mascotas,
            ]);
        } catch (\Exception $e) {
            Log::error('PlanController@select: Error', [
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

            // Verificar que la mascota pertenece al usuario y tiene dietas
            $mascota = Mascota::where('id_usuario', $user->id)
                ->where('id', $request->mascota_id)
                ->whereHas('dietas')
                ->firstOrFail();

            // Aquí integrarías la lógica de Stripe
            Log::info('Procesando checkout', [
                'mascota_id' => $request->mascota_id,
                'frecuencia' => $request->frecuencia,
                'tipo_plan' => $request->tipo_plan,
                'payment_method' => $request->payment_method,
            ]);

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
