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
    public function index()
    {
        return view('planes.index');
    }

    public function select()
    {
        $mascotas = Mascota::where('id_usuario', Auth::id())->with('dieta')->get();
        if ($mascotas->isEmpty() || !$mascotas->pluck('dieta')->contains(fn ($dieta) => !is_null($dieta))) {
            return redirect()->route('profile.index')->with('error', 'Debes generar una dieta primero.');
        }
        return view('planes.select', compact('mascotas'));
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'mascota_id' => 'required|exists:mascotas,id',
            'frecuencia' => 'required|in:mensual,anual',
            'tipo_plan' => 'required|in:basico,premium,personalizado',
            'payment_method' => 'required',
        ]);

        $mascota = Mascota::where('id', $request->mascota_id)->where('id_usuario', Auth::id())->with('dieta')->firstOrFail();
        if (!$mascota->dieta) {
            return redirect()->route('profile.index')->with('error', 'La mascota seleccionada no tiene una dieta asociada.');
        }

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $prices = [
            'basico' => ['mensual' => 'price_monthly_basic', 'anual' => 'price_yearly_basic'],
            'premium' => ['mensual' => 'price_monthly_premium', 'anual' => 'price_yearly_premium'],
            'personalizado' => ['mensual' => 'price_monthly_custom', 'anual' => 'price_yearly_custom'],
        ];

        $priceId = $prices[$request->tipo_plan][$request->frecuencia]; // Reemplaza con tus Price IDs reales de Stripe

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price' => $priceId,
                'quantity' => 1,
            ]],
            'mode' => 'subscription',
            'success_url' => route('planes.success'),
            'cancel_url' => route('planes.select'),
        ]);

        $plan = new Plan();
        $plan->id_usuario = Auth::id();
        $plan->id_mascota = $mascota->id;
        $plan->tipo_plan = $request->tipo_plan;
        $plan->frecuencia = $request->frecuencia;
        $plan->stripe_session_id = $session->id;
        $plan->save();

        return redirect($session->url);
    }

    public function success()
    {
        return redirect()->route('profile.index')->with('success', '¡Plan contratado exitosamente!');
    }
}
