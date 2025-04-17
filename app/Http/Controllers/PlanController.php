<?php
namespace App\Http\Controllers;
use App\Models\Plan;
use App\Models\Usuario;
use App\Models\Mascota;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function create()
    {
        $usuarios = Usuario::all();
        $mascotas = Mascota::all();
        return view('planes.create', compact('usuarios', 'mascotas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required|exists:usuarios,id',
            'id_mascota' => 'required|exists:mascotas,id',
            'tipo_plan' => 'required|in:basico,premium,personalizado',
            'frecuencia' => 'required|in:semanal,quincenal,mensual',
            'activo' => 'boolean',
        ]);

        $plan = new Plan();
        $plan->id_usuario = $request->id_usuario;
        $plan->id_mascota = $request->id_mascota;
        $plan->tipo_plan = $request->tipo_plan;
        $plan->frecuencia = $request->frecuencia;
        $plan->activo = $request->activo ?? 1;
        $plan->save();

        return redirect()->route('planes.index')->with('success', 'Plan creado.');
    }
}
