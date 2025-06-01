<?php
namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;


class PlanController extends Controller
{
    public function select($mascota_id, $tipo_plan = null) {
        try {
            $user = Auth::user();
            Log::info('PlanController@select: Iniciando', ['mascota_id' => $mascota_id, 'tipo_plan' => $tipo_plan, 'user_id' => $user ? $user->id : null]);

            //el usuario debe registrarse para contratar plan
            if (!$user) {
                Log::warning('PlanController@select: Usuario no autenticado');
                return redirect()->route('login')->with('error', 'Debes iniciar sesión para contratar un plan.');
            }

            $mascotaSeleccionada = Mascota::where('id_usuario', $user->id)
                ->where('id', $mascota_id)
                ->with('dietas')
                ->firstOrFail();
            Log::info('PlanController@select: Mascota encontrada', ['mascota_id' => $mascotaSeleccionada->id]);


            //el usuario debe haber generado una dieta para la mascota(id) antes de contratarle un plan
            $dietaSeleccionada = $mascotaSeleccionada->dietas()->latest()->first();
            if (!$dietaSeleccionada || !$dietaSeleccionada->pdf_dieta) {
                Log::warning('PlanController@select: No hay dieta o pdf_dieta para la mascota', ['mascota_id' => $mascota_id]);
                return redirect()->route('profile.index')->with('error', 'Debes generar antes una dieta para contratar un plan');
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

            $tipo_plan = $tipo_plan && in_array($tipo_plan, ['basico', 'premium', 'personalizado']) ? $tipo_plan : null;

            return view('planes.select', [
                'mascotaSeleccionada' => $mascotaSeleccionada,
                'dietaSeleccionada' => $dietaSeleccionada,
                'mascotas' => $mascotas,
                'tipo_plan' => $tipo_plan,
            ]);
        } catch (\Exception $e) {
            Log::error('PlanController@select: Error', [
                'mascota_id' => $mascota_id,
                'tipo_plan' => $tipo_plan,
                'error' => $e->getMessage(),
            ]);
            return redirect()->back()->with('error', 'Error al cargar la página de selección de plan');
        }
    }

    public function checkout(Request $request) {
        try {
            Log::info('Checkout iniciado', $request->all());

            $validated = $request->validate([
                'mascota_id' => 'required|exists:mascotas,id',
                'frecuencia' => 'required|in:mensual,anual',
                'tipo_plan' => 'required|in:basico,premium,personalizado',
                'payment_method' => 'required',
            ]);

            $user = Auth::user();
            if (!$user) {
                Log::warning('Usuario no autenticado en checkout');
                return response()->json(['success' => false, 'message' => 'Usuario no autenticado'], 401);
            }

            $mascota = Mascota::where('id_usuario', $user->id)
                ->where('id', $request->mascota_id)
                ->whereHas('dietas')
                ->firstOrFail();

            //cálculo de los precios
            $prices = [
                'basico' => ['mensual' => 30, 'anual' => 324],
                'premium' => ['mensual' => 50, 'anual' => 540],
                'personalizado' => ['mensual' => 80, 'anual' => 864],
            ];
            $precio = $prices[$request->tipo_plan][$request->frecuencia];

            //generar factura
            $factura = Factura::create([
                'user_id' => $user->id,
                'mascota_id' => $request->mascota_id,
                'tipo_plan' => $request->tipo_plan,
                'frecuencia' => $request->frecuencia,
                'precio' => $precio,
                'pdf_path' => '',
                'fecha_emision' => now(),
            ]);

            //generar PDF
            Log::info('Generando PDF para factura', ['factura_id' => $factura->id]);
            try {
                $pdf = Pdf::loadView('facturas.factura', ['factura' => $factura]);
                $pdfPath = 'public/facturas/factura_' . $factura->id . '.pdf';
                Storage::put($pdfPath, $pdf->output());
                if (Storage::exists($pdfPath)) {
                    Log::info('PDF generado y almacenado', ['path' => $pdfPath]);
                } else {
                    Log::error('No se pudo verificar la existencia del PDF', ['path' => $pdfPath]);
                    throw new \Exception('No se pudo verificar el PDF generado');
                }
                $factura->update(['pdf_path' => $pdfPath]);
            } catch (\Exception $e) {
                Log::error('Error al generar PDF', [
                    'factura_id' => $factura->id,
                    'error' => $e->getMessage(),
                ]);
                throw $e;
            }

            Log::info('Checkout completado', [
                'mascota_id' => $request->mascota_id,
                'frecuencia' => $request->frecuencia,
                'tipo_plan' => $request->tipo_plan,
                'factura_id' => $factura->id,
                'pdf_path' => $pdfPath,
            ]);

            return redirect()->route('profile.index')->with('success', 'Plan contratado y factura generada correctamente.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validación fallida en checkout', ['errors' => $e->errors()]);
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            Log::error('Error en checkout', [
                'error' => $e->getMessage(),
                'request' => $request->all(),
            ]);
            return back()->with('error', 'Error al procesar el pago: ' . $e->getMessage());
        }
    }

    public function downloadFactura($facturaId)
    {
        $factura = Factura::findOrFail($facturaId);
        $path = $factura->pdf_path;

        if (!Storage::exists($path)) {
            Log::error('PDF de factura no encontrado', ['factura_id' => $facturaId, 'path' => $path]);
            return redirect()->back()->with('error', 'El PDF de la factura no está disponible.');
        }

        return Storage::download($path, 'factura_' . $facturaId . '.pdf');
    }
}
