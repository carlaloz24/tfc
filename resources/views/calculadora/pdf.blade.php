<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dieta para {{ $mascota ? $mascota->nombre : 'Perro' }}</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        .container { max-width: 800px; margin: 0 auto; }
        h1 { color: #fb4d17; font-size: 18px; text-align: center; }
        h2 { font-size: 14px; margin-top: 20px; }
        h3 { font-size: 12px; margin-top: 15px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #000; padding: 5px; text-align: left; }
        th { background-color: #f2f2f2; }
        .section { margin-bottom: 20px; }
    </style>
</head>
<body>
<div class="container">
    <h1>Dieta para {{ $mascota ? $mascota->nombre : 'Perro' }}</h1>
    <div class="section">
        <h2>Información de la Mascota</h2>
        <p><strong>Nombre:</strong> {{ $mascota ? $mascota->nombre : 'No especificado' }}</p>
        @if ($mascota)
            <p><strong>Peso:</strong> {{ $mascota->peso }} kg</p>
            <p><strong>Edad:</strong> {{ ucfirst(str_replace('_', ' ', $mascota->categoria_edad)) }}</p>
            <p><strong>Esterilizado:</strong> {{ $mascota->esterilizado ? 'Sí' : 'No' }}</p>
            <p><strong>Nivel de Actividad:</strong> {{ ucfirst($mascota->nivel_actividad) }}</p>
        @endif
        <p><strong>Condiciones de Salud:</strong> {{ implode(', ', $condiciones_salud ?: ['Ninguna']) }}</p>
        <p><strong>Alergias:</strong> {{ implode(', ', $alimentos_alergia ?: ['Ninguna']) }}</p>
    </div>
    <div class="section">
        <h2>Detalles de la Dieta</h2>
        <p><strong>Tipo de Dieta:</strong> {{ ucfirst($tipo_dieta) }}</p>
        <p><strong>Calorías Diarias:</strong> {{ $calorias }} kcal</p>
    </div>
    <div class="section">
        <h2>Menú Semanal</h2>
        @foreach ($menu as $dia => $comidas)
            <h3>{{ $dia }}</h3>
            <table>
                <tr>
                    <th>Comida</th>
                    <th>Mañana</th>
                    <th>Tarde</th>
                </tr>
                @foreach ($comidas['manana'] as $categoria => $valor)
                    <tr>
                        <td>{{ ucfirst($categoria) }}</td>
                        <td>{{ $valor }}</td>
                        <td>{{ $comidas['tarde'][$categoria] ?? '-' }}</td>
                    </tr>
                @endforeach
                @if (isset($comidas['manana']['suplemento']))
                    <tr>
                        <td>Suplemento</td>
                        <td>{{ $comidas['manana']['suplemento'] }}</td>
                        <td>{{ $comidas['tarde']['suplemento'] ?? '-' }}</td>
                    </tr>
                @endif
            </table>
        @endforeach
    </div>
</div>
</body>
</html>
