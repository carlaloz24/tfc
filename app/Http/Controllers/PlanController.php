<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class PlanController extends Controller
{
    public function contratar(Request $request, $tipo_plan)
    {
        $mascotas = Mascota::where('id_usuario', Auth::id())->get();

        if ($mascotas->isEmpty()) {
            return redirect()->route('mascotas.create')->with('error', 'Debes añadir una mascota para contratar un plan.');
        }

        $mascota_id = $request->query('mascota_id');
        return view('planes.contratar', compact('tipo_plan', 'mascotas', 'mascota_id'));
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'tipo_plan' => 'required|in:basico,premium,personalizado',
            'mascota_id' => 'required|exists:mascotas,id',
            'frecuencia' => 'required|in:semanal,quincenal,mensual',
        ]);

        $mascota = Mascota::where('id', $request->mascota_id)
            ->where('id_usuario', Auth::id())
            ->firstOrFail();

        // Configurar Stripe
        Stripe::setApiKey(config('services.stripe.secret'));

        // Precios según plan (ajusta según tus precios reales)
        $precios = [
            'basico' => ['semanal' => 999, 'quincenal' => 1899, 'mensual' => 2999],
            'premium' => ['semanal' => 1499, 'quincenal' => 2799, 'mensual' => 4999],
            'personalizado' => ['semanal' => 1999, 'quincenal' => 3799, 'mensual' => 6999],
        ];

        $precio = $precios[$request->tipo_plan][$request->frecuencia];

        // Crear sesión de Stripe
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Plan ' . ucfirst($request->tipo_plan) . ' para ' . $mascota->nombre,
                    ],
                    'unit_amount' => $precio,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'subscription',
            'success_url' => route('planes.success', ['tipo_plan' => $request->tipo_plan, 'mascota_id' => $request->mascota_id, 'frecuencia' => $request->frecuencia]) . '&session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('planes.contratar', $request->tipo_plan),
        ]);

        return redirect()->away($session->url);
    }

    public function success(Request $request)
    {
        $tipo_plan = $request->tipo_plan;
        $mascota_id = $request->mascota_id;
        $frecuencia = $request->frecuencia;

        // Guardar el plan en la base de datos
        Plan::create([
            'id_usuario' => Auth::id(),
            'id_mascota' => $mascota_id,
            'tipo_plan' => $tipo_plan,
            'frecuencia' => $frecuencia,
            'activo' => 1,
        ]);

        return view('planes.gracias', compact('tipo_plan', 'mascota_id'));
    }
}
