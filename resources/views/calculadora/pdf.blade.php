<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Dieta para {{ $mascota ? $mascota->nombre : 'Perro' }}</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');

        @page {
            margin: 50px 60px;
        }
        body {
            font-family: 'Inter', sans-serif;
            color: #083630;
            font-size: 11pt;
            line-height: 1.5;
            margin: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .header {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #858585;
            padding-bottom: 20px;
            margin-bottom: 40px;
            gap: 25px; /* espacio entre logo y título */
        }
        .header img {
            height: 60px; /* logo más grande */
            width: auto;
            object-fit: contain;
        }
        .header h1 {
            color: #fb4d17;
            font-size: 20pt;
            font-weight: 600;
            margin: 0;
            white-space: nowrap;
        }
        .company-info {
            margin-left: auto;
            text-align: right;
            color: #858585;
            font-size: 9pt;
            line-height: 1.3;
            max-width: 250px;
        }
        .company-info p {
            margin: 2px 0;
        }
        hr {
            border: none;
            border-top: 1px solid #858585;
            margin: 30px 0;
        }
        .invoice-details {
            margin-bottom: 40px;
        }
        .invoice-details h2 {
            color: #fb4d17;
            font-size: 18pt;
            font-weight: 700;
            margin-bottom: 20px;
            border-bottom: 1px solid #858585;
            padding-bottom: 6px;
        }
        .invoice-details h3 {
            color: #083630;
            font-size: 14pt;
            font-weight: 600;
            margin-top: 30px;
            margin-bottom: 10px;
        }
        table.details-table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #858585;
            font-size: 10pt;
            table-layout: fixed;
        }
        table.details-table th,
        table.details-table td {
            padding: 8px 12px;
            border: 1px solid #858585;
            text-align: left;
            word-wrap: break-word;
        }
        table.details-table th {
            background-color: #f4f4f4;
            color: #858585;
            font-weight: 600;
        }
        table.details-table td {
            color: #083630;
        }
        .footer {
            text-align: center;
            margin-top: 50px;
            color: #858585;
            font-size: 9pt;
            border-top: 1px solid #858585;
            padding-top: 20px;
        }
        .footer a {
            color: #fb4d17;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <img src="{{ public_path('images/logo-barfco.png') }}" alt="Barf&Co Logo" />
        <h1>Dieta Personalizada</h1>
        <div class="company-info">
            <p>Barf&Co</p>
            <p>Polígono Industrial de Guarnizo, 39611 El Astillero, Cantabria, España</p>
            <p>Correo: soporte@barfco.com</p>
            <p>Teléfono: +34 123-456-789</p>
        </div>
    </div>

    <div class="invoice-details">
        <h2>Información de la Mascota</h2>
        <table class="details-table">
            <thead>
            <tr>
                <th>Descripción</th>
                <th>Valor</th>
            </tr>
            </thead>
            <tbody>
            @if ($mascota)
                <tr><td>Nombre</td><td>{{ $mascota->nombre }}</td></tr>
                <tr><td>Peso</td><td>{{ $mascota->peso }} kg</td></tr>
                <tr><td>Edad</td><td>{{ ucfirst(str_replace('_', ' ', $mascota->categoria_edad)) }}</td></tr>
                <tr><td>Esterilizado</td><td>{{ $mascota->esterilizado ? 'Sí' : 'No' }}</td></tr>
                <tr><td>Nivel de Actividad</td><td>{{ ucfirst($mascota->nivel_actividad) }}</td></tr>
            @else
                <tr><td colspan="2">No se proporcionaron datos de la mascota.</td></tr>
            @endif
            <tr><td>Condiciones de Salud</td><td>{{ implode(', ', $condiciones_salud ?: ['Ninguna']) }}</td></tr>
            <tr><td>Alergias</td><td>{{ implode(', ', $alimentos_alergia ?: ['Ninguna']) }}</td></tr>
            </tbody>
        </table>
    </div>

    <hr />

    <div class="invoice-details">
        <h2>Detalles de la Dieta</h2>
        <table class="details-table">
            <thead>
            <tr>
                <th>Descripción</th>
                <th>Valor</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Tipo de Dieta</td><td>{{ ucfirst($tipo_dieta) }}</td></tr>
            <tr><td>Calorías Diarias</td><td>{{ $calorias }} kcal</td></tr>
            </tbody>
        </table>
    </div>

    <hr />

    <div class="invoice-details">
        <h2>Menú Semanal</h2>
        @if (empty($menu))
            <p>No se proporcionó un menú semanal.</p>
        @else
            @foreach ($menu as $dia => $comidas)
                <h3>{{ $dia }}</h3>
                <table class="details-table">
                    <thead>
                    <tr>
                        <th>Comida</th>
                        <th>Mañana</th>
                        <th>Tarde</th>
                    </tr>
                    </thead>
                    <tbody>
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
                    </tbody>
                </table>
            @endforeach
        @endif
    </div>

    <div class="footer">
        <p>Gracias por confiar en Barf&Co</p>
        <p>Para consultas, contáctanos en <a href="mailto:soporte@barfco.com">soporte@barfco.com</a></p>
    </div>
</div>
</body>
</html>
