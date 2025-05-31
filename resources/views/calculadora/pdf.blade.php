<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dieta para {{ $mascota ? $mascota->nombre : ($nombre ?? 'Perro') }}</title>
    <style>
        @page { margin: 100px; }
        body {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #505050;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }
        .container {
            max-width: 95%;
            margin: 0 auto;
            padding: 10px;
        }
        .header {
            text-align: center;
            margin-bottom: 25px;
        }
        .logo {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 200px;
            height: auto;
            aspect-ratio: 1/1;
            object-fit: contain;
        }

        .titulo {
            color: #e04312;
            font-size: 45px;
            font-weight: bold;
            text-align: left;
            max-width: 350px;
        }

        .title {
            color: #292c2b;
            font-size: 45px;
            font-weight: bold;
            text-align: left;
        }
        .date {
            font-size: 18px;
            color: #505050;
            text-align: left;
        }
        .section {
            margin-bottom: 25px;
        }
        .subtitle {
            font-size: 28px;
            color: #083630;
            font-weight: bold;
            margin-bottom: 12px;
        }
        .list {
            list-style: none;
            padding: 0;
        }
        .list li {
            font-size: 18px;
            margin-bottom: 10px;
            color: #1a1d20;
        }
        .list li strong {
            color: #083630;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 12px;
        }
        .table th, .table td {
            border: 1px solid #000;
            padding: 8px;
            font-size: 18px;
            text-align: left;
        }
        .table th {
            background-color: #e04312;
            color: #ffffff;
            font-weight: bold;
        }
        .table tr:nth-child(even) {
            background-color: #f0f0f0;
        }
        .menu-day {
            margin-bottom: 25px;
        }
        .menu-day-title {
            font-size: 20px;
            color: #083630;
            font-weight: bold;
            margin-bottom: 12px;
        }
        .line {
            border-top: 0.5px solid #083630;
            margin: 20px 0;
        }
        .footer {
            font-size: 16px;
            color: #505050;
            text-align: center;
            position: absolute;
            bottom: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/logo-barfco.png'))) }}" class="logo" alt="Logo">
        <h1 class="titulo">Dieta para {{ $mascota ? $mascota->nombre : ($nombre ?? 'Perro') }}</h1>

        <p class="date"> {{ now()->format('d/m/Y') }}</p>
    </div>

    <div class="section">

        <ul class="list">

            <br>


          <h2 class="subtitle">Datos de la mascota</h2>

            <li><strong>Nombre:</strong> {{ $mascota ? $mascota->nombre : ($nombre ?? 'No especificado') }}</li>
            <li><strong>Raza:</strong> {{ $mascota ? $mascota->raza : ($raza ?? 'No especificada') }}</li>
            <li><strong>Edad:</strong> {{ $mascota ? $mascota->categoria_edad : ($categoria_edad ?? 'No especificada') }}</li>
            <li><strong>Peso:</strong> {{ $mascota ? $mascota->peso : ($peso ?? 'No especificado') }} kg</li>
            <div class="line"></div>

            <h2 class="subtitle">Detalles de la dieta</h2>

            <li><strong>Tipo de dieta:</strong> {{ ucfirst($tipo_dieta) }}</li>
            <li><strong>Calorías diarias:</strong> {{ round($calorias) }} kcal</li>
            @if (!empty($ajustes_aplicados))
                <li><strong>Ajustes aplicados:</strong> {{ implode(', ', $ajustes_aplicados) }}</li>
            @endif
        </ul>
    </div>
<br>

    <br>

    <div class="section">
        <h2 class="title">Distribución de Macronutrientes</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Categoría</th>
                <th>kcal</th>
                <th>g</th>
                <th>Prot.</th>
                <th>Grasas</th>
                <th>CH</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($dieta as $categoria => $datos)
                <tr>
                    <td>{{ ucfirst($categoria) }}</td>
                    <td>{{ round($datos['kcal']) }}</td>
                    <td>{{ round($datos['gramos']) }}</td>
                    <td>{{ round($datos['proteinas']) }}</td>
                    <td>{{ round($datos['grasas']) }}</td>
                    <td>{{ round($datos['carbohidratos']) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="line"></div>

    <div class="section">
        <h2 class="title">Menú Semanal</h2>
        @foreach ($menu as $dia => $comidas)
            <div class="menu-day">
                <h3 class="menu-day-title">{{ $dia }}</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Categoría</th>
                        <th>Mañana</th>
                        <th>Tarde</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $categorias = array_unique(array_merge(
                            array_keys($comidas['manana'] ?? []),
                            array_keys($comidas['tarde'] ?? [])
                        ));
                    @endphp
                    @foreach ($categorias as $cat)
                        <tr>
                            <td>{{ ucfirst($cat) }}</td>
                            <td>{{ $comidas['manana'][$cat] ?? '-' }}</td>
                            <td>{{ $comidas['tarde'][$cat] ?? '-' }}</td>
                        </tr>
                    @endforeach
                    @if (isset($comidas['manana']['suplemento']) || isset($comidas['tarde']['suplemento']))
                        <tr>
                            <td>Suplemento</td>
                            <td>{{ $comidas['manana']['suplemento'] ?? '-' }}</td>
                            <td>{{ $comidas['tarde']['suplemento'] ?? '-' }}</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>

    <div class="footer">
       Barf&Co - Todos los derechos reservados ©
    </div>
</div>
</body>
</html>
