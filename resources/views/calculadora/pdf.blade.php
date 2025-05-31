<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dieta para {{ $mascota ? $mascota->nombre : ($nombre ?? 'Perro') }}</title>
    <style>
        @page {
            margin: 15px;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            color: #505050;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 15px;
        }
        h1 {
            color: #fb4d17;
            font-size: 18px;
            text-align: center;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 14px;
            margin-top: 20px;
            color: #083630;
        }
        h3 {
            font-size: 12px;
            margin-top: 15px;
            color: #083630;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #000;
            padding: 5px;
            text-align: left;
            font-size: 11px;
        }
        th {
            background-color: #f2f2f2;
            color: #083630;
            font-weight: bold;
        }
        .section {
            margin-bottom: 20px;
        }
        p {
            margin: 5px 0;
            font-size: 12px;
        }
        strong {
            color: #083630;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Dieta para {{ $mascota ? $mascota->nombre : ($nombre ?? 'Perro') }}</h1>
    <div class="section">
        <h2>Información de la Mascota4</h2>
        <p><strong>Nombre:</strong> {{ $mascota ? $mascota->nombre : ($nombre ?? 'No especificado') }}</p>
        <p><strong>Raza:</strong> {{ $mascota ? $mascota->raza : ($raza ?? 'No especificada') }}</p>
        <p><strong>Peso:</strong> {{ $mascota ? $mascota->peso : ($peso ?? 'No especificado') }} {{ isset($peso) ? 'kg' : '' }}</p>
        <p><strong>Edad:</strong> {{ $mascota ? ucfirst(str_replace('_', ' ', $mascota->categoria_edad)) : ($categoria_edad ? ucfirst(str_replace('_', ' ', $categoria_edad)) : 'No especificada') }}</p>
        <p><strong>Esterilizado:</strong> {{ $mascota ? ($mascota->esterilizado ? 'Sí' : 'No') : (isset($esterilizado) ? ($esterilizado ? 'Sí' : 'No') : 'No especificado') }}</p>
        <p><strong>Nivel de Actividad:</strong> {{ $mascota ? ucfirst($mascota->nivel_actividad) : ($nivel_actividad ? ucfirst($nivel_actividad) : 'No especificado') }}</p>
        <p><strong>Condiciones de Salud:</strong> {{ implode(', ', $condiciones_salud ?: ['Ninguna']) }}</p>
        <p><strong>Alergias:</strong> {{ implode(', ', array_map(fn($item) => str_replace('_', ' ', ucfirst($item)), $alimentos_alergia ?: ['Ninguna'])) }}</p>
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
