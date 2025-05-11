<!DOCTYPE html>
<html>
<head>
    <title>Dieta para {{ $mascota->nombre }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { color: #fb4d17; }
        .container { max-width: 800px; margin: 0 auto; }
        .section { margin-bottom: 20px; }
    </style>
</head>
<body>
<div class="container">
    <h1>Dieta para {{ $mascota->nombre }}</h1>
    <div class="section">
        <h2>Información de la Mascota</h2>
        <p><strong>Nombre:</strong> {{ $mascota->nombre }}</p>
        <p><strong>Peso:</strong> {{ $mascota->peso }} kg</p>
        <p><strong>Edad:</strong> {{ ucfirst(str_replace('_', ' ', $mascota->categoria_edad)) }}</p>
        <p><strong>Esterilizado:</strong> {{ $mascota->esterilizado ? 'Sí' : 'No' }}</p>
        <p><strong>Nivel de Actividad:</strong> {{ ucfirst($mascota->nivel_actividad) }}</p>
        <p><strong>Condiciones de Salud:</strong> {{ implode(', ', $condiciones_salud ?: ['Ninguna']) }}</p>
        <p><strong>Alergias:</strong> {{ implode(', ', $alimentos_alergia ?: ['Ninguna']) }}</p>
    </div>
    <div class="section">
        <h2>Detalles de la Dieta</h2>
        <p><strong>Tipo de Dieta:</strong> {{ ucfirst($tipo_dieta) }}</p>
        <p><strong>Calorías Diarias:</strong> {{ $calorias }} kcal</p>
        <p><strong>Menú:</strong></p>
        <ul>
            @foreach ($menu['alimentos'] as $alimento)
                <li>{{ $alimento }}</li>
            @endforeach
        </ul>
    </div>
</div>
</body>
</html>
