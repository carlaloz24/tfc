<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Factura Barf&Co</title>
    <style>
        @page { margin: 40px; }
        body {
            font-family: 'Inter', sans-serif;
            color: #1e1e1e;
            font-size: 12pt;
            line-height: 1.5;
            margin: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #fb4d17;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header img {
            height: 40px;
            object-fit: contain;
        }
        .header h1 {
            color: #fb4d17;
            font-size: 20pt;
            font-weight: 600;
            margin: 0;
        }
        .company-info {
            text-align: right;
            color: #858585;
            font-size: 10pt;
        }
        .company-info p {
            margin: 2px 0;
        }
        .invoice-details {
            margin-bottom: 30px;
        }
        .invoice-details h2 {
            color: #fb4d17;
            font-size: 14pt;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .details-table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #d3d3d3;
            border-radius: 10px;
            overflow: hidden;
        }
        .details-table th,
        .details-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #d3d3d3;
        }
        .details-table th {
            background-color: #f8f8f8;
            color: #fb4d17;
            font-weight: 500;
        }
        .details-table td {
            color: #1e1e1e;
        }
        .total-row td {
            font-weight: 600;
            background-color: #fff5f2;
        }
        .footer {
            text-align: center;
            margin-top: 40px;
            color: #858585;
            font-size: 10pt;
            border-top: 1px solid #d3d3d3;
            padding-top: 20px;
        }
        .footer p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <div>
            <img src="{{ public_path('images/logo.png') }}" alt="Barf&Co Logo">
        </div>
        <div>
            <h1>Factura</h1>
            <div class="company-info">
                <p>Barf&Co</p>
                <p>Polígono Industrial de Guarnizo, 39611 El Astillero, Cantabria, España</p>
                <p>Correo: soporte@barfco.com</p>
                <p>Teléfono: +34 123-456-789</p>
            </div>
        </div>
    </div>

    <div class="invoice-details">
        <h2>Detalles de la Factura</h2>
        <table class="details-table">
            <thead>
            <tr>
                <th>Descripción</th>
                <th>Valor</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Fecha de Emisión</td>
                <td>{{ $factura->fecha_emision->format('d/m/Y') }}</td>
            </tr>
            <tr>
                <td>Usuario</td>
                <td>{{ $factura->user->nombre }}</td>
            </tr>
            <tr>
                <td>Mascota</td>
                <td>{{ $factura->mascota->nombre }}</td>
            </tr>
            <tr>
                <td>Plan</td>
                <td>{{ ucfirst($factura->tipo_plan) }}</td>
            </tr>
            <tr>
                <td>Frecuencia</td>
                <td>{{ ucfirst($factura->frecuencia) }}</td>
            </tr>
            <tr>
                <td>Próximo Cobro</td>
                <td>{{ $factura->frecuencia === 'mensual' ? now()->addMonth()->format('d/m/Y') : now()->addYear()->format('d/m/Y') }}</td>
            </tr>
            <tr class="total-row">
                <td>Total</td>
                <td>€{{ number_format($factura->precio, 2) }}/{{ $factura->frecuencia === 'mensual' ? 'mes' : 'año' }}</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="footer">
        <p>Gracias por confiar en Barf&Co</p>
        <p>Para consultas, contáctanos en <a href="mailto:soporte@barfco.com">soporte@barfco.com</a></p>
    </div>
</div>
</body>
</html>
