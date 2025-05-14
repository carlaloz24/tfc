<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Factura</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; color: #1e1e1e; }
        .container { max-width: 800px; margin: 0 auto; }
        .header { text-align: center; margin-bottom: 40px; }
        .header h1 { color: #fb4d17; }
        .details { border: 1px solid #d3d3d3; padding: 20px; border-radius: 10px; }
        .details p { margin: 10px 0; }
        .details strong { color: #fb4d17; }
        .footer { text-align: center; margin-top: 40px; color: #858585; }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Factura de Compra</h1>
        <p>Fecha de Emisión: {{ $factura->fecha_emision->format('d/m/Y') }}</p>
    </div>
    <div class="details">
        <p><strong>Usuario:</strong> {{ $factura->user->nombre }}</p>
        <p><strong>Mascota:</strong> {{ $factura->mascota->nombre }}</p>
        <p><strong>Plan:</strong> {{ ucfirst($factura->tipo_plan) }}</p>
        <p><strong>Frecuencia:</strong> {{ ucfirst($factura->frecuencia) }}</p>
        <p><strong>Precio:</strong> €{{ number_format($factura->precio, 2) }}/{{ $factura->frecuencia === 'mensual' ? 'mes' : 'año' }}</p>
        <p><strong>Próximo cobro:</strong> {{ $factura->frecuencia === 'mensual' ? now()->addMonth()->format('d/m/Y') : now()->addYear()->format('d/m/Y') }}</p>
    </div>
    <div class="footer">
        <p>Gracias por tu compra</p>
    </div>
</div>
</body>
</html>
