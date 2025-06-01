<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Factura #{{ $factura->id }}</title>
    <style>
        @page { margin: 50px; }
        body {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 12px;
            color: #505050;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }
        .container {
            max-width: 90%;
            margin: 0 auto;
            padding: 5px;
        }
        .header {
            position: relative;
            margin-bottom: 15px;
            border-bottom: 1px solid #083630;
            padding-bottom: 10px;
        }
        .logo {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 150px;
            height: auto;
            object-fit: contain;
        }
        .titulo {
            color: #e04312;
            font-size: 28px;
            font-weight: bold;
            text-align: left;
            margin: 0;
        }
        .date {
            font-size: 12px;
            color: #505050;
            text-align: left;
            margin-top: 5px;
        }
        .section {
            margin-bottom: 15px;
        }
        .subtitle {
            font-size: 16px;
            color: #e04312;
            font-weight: bold;
            margin-bottom: 8px;
        }
        .list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .list li {
            font-size: 12px;
            margin-bottom: 5px;
            color: #1a1d20;
        }
        .list li strong {
            color: #083630;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 8px;
        }
        .table th, .table td {
            border: 0.5px solid #000;
            padding: 6px;
            font-size: 12px;
            text-align: left;
        }
        .table th {
            background-color: #e04312;
            color: #ffffff;
            font-weight: bold;
        }
        .table tr:nth-child(even) {
            background-color: #f5f5f5;
        }
        .table .total {
            font-weight: bold;
            background-color: #e8e8e8;
        }
        .two-columns {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .column {
            width: 48%;
        }
        .notes {
            font-size: 10px;
            color: #707070;
            margin-top: 15px;
        }
        .footer {
            font-size: 10px;
            color: #505050;
            text-align: center;
            position: fixed;
            bottom: 10px;
            width: 100%;
            border-top: 0.5px solid #083630;
            padding-top: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/logo-barfco.png'))) }}" class="logo" alt="Barf&Co Logo">
        <h1 class="titulo">Factura #{{ sprintf('%06d', $factura->id) }}</h1>
        <p class="date">Fecha de Emisión: {{ $factura->fecha_emision->format('d/m/Y') }}</p>
    </div> <br>

    <div class="section two-columns">
        <div class="column">
            <h2 class="subtitle">Emitido por</h2>
            <ul class="list">
                <li><strong>Empresa:</strong> Barf&Co</li>
                <li><strong>CIF:</strong> B87654321</li>
                <li><strong>Dirección:</strong> Polígono Industrial de Guarnizo, 39611 El Astillero, Cantabria, España</li>
                <li><strong>Email:</strong> info@barfco.com</li>
                <li><strong>Teléfono:</strong> +34 123-456-789</li>
            </ul>
        </div>
        <br>
        <div class="column">
            <h2 class="subtitle">Facturado a</h2>
            <ul class="list">
                <li><strong>Nombre:</strong> {{ $factura->user->nombre }}</li>
                <li><strong>Email:</strong> {{ $factura->user->correo }}</li>
                <li><strong>Mascota:</strong> {{ $factura->mascota->nombre }}</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <h2 class="subtitle">Detalles de la Factura</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Descripción</th>
                <th>Frecuencia</th>
                <th>Precio (€)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Plan {{ ucfirst($factura->tipo_plan) }}</td>
                <td>{{ ucfirst($factura->frecuencia) }}</td>
                <td>{{ number_format($factura->precio, 2) }}</td>
            </tr>
            <tr class="total">
                <td colspan="2">Total</td>
                <td>{{ number_format($factura->precio, 2) }}</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="section">
        <ul class="list">
            <li><strong>Próximo cobro:</strong> {{ $factura->frecuencia === 'mensual' ? now()->addMonth()->format('d/m/Y') : now()->addYear()->format('d/m/Y') }}</li>
            <li><strong>Forma de pago:</strong> {{ $factura->payment_method ?? 'Tarjeta' }}</li>
        </ul>
    </div>

    <div class="notes">
        <p><strong>Notas legales:</strong> Esta factura está exenta de IVA según el artículo 20.1.26 de la Ley 37/1992. Los pagos son no reembolsables salvo disposición legal. Para consultas, contacte a info@barfco.com.</p>
    </div>

    <div class="footer">
        Barf&Co | Polígono Industrial de Guarnizo, 39611 El Astillero, Cantabria, España | info@barfco.com | +34 123-456-789 | © {{ now()->year }}
    </div>
</div>
</body>
</html>
