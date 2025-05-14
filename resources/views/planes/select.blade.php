@extends('layouts.app')
@section('title', 'Contratar Plan')
@section('content')
    <div class="plan-selection">
        <div class="plan-container">
            <div class="plan-card">
                <h1 class="plan-title">Contratar un Plan</h1>

                @if (session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="plan-columns">
                    <!-- Columna izquierda: Selección -->
                    <div class="plan-column">
                        <div class="plan-section">
                            <h3 class="plan-section-title">Detalles del Plan</h3>
                            <form id="plan-form" action="{{ route('planes.checkout') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label for="mascota_id" class="plan-input-label">Mascota</label>
                                    <select name="mascota_id" id="mascota_id" class="plan-input" required>
                                        <option value="">-- Selecciona una mascota --</option>
                                        @foreach ($mascotas as $mascota)
                                            @if ($mascota->dietas->isNotEmpty())
                                                <option value="{{ $mascota->id }}" {{ $mascota->id == $mascotaSeleccionada->id ? 'selected' : '' }}>
                                                    {{ $mascota->nombre }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('mascota_id')
                                    <span class="plan-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="plan-input-label">Dieta Asociada</label>
                                    <div id="pdf_dieta">
                                        @if ($dietaSeleccionada && $dietaSeleccionada->pdf_dieta)
                                            <a href="{{ route('dietas.pdf', $mascotaSeleccionada->id) }}" target="_blank" class="pdf-link">
                                                <svg class="pdf-icon" fill="none" stroke="#fb4d17" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                </svg>
                                                Ver Dieta PDF
                                            </a>
                                        @else
                                            <p class="text-[#858585] text-[0.9rem]">No hay dieta disponible.</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="frecuencia" class="plan-input-label">Frecuencia</label>
                                    <select name="frecuencia" id="frecuencia" class="plan-input" required>
                                        <option value="mensual">Mensual</option>
                                        <option value="anual">Anual</option>
                                    </select>
                                    @error('frecuencia')
                                    <span class="plan-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="tipo_plan" class="plan-input-label">Tipo de Plan</label>
                                    @if (isset($tipo_plan))
                                        <input type="hidden" name="tipo_plan" id="tipo_plan" value="{{ $tipo_plan }}">
                                        <p class="text-[#1e1e1e] font-medium">{{ ucfirst($tipo_plan) }}</p>
                                    @else
                                        <select name="tipo_plan" id="tipo_plan" class="plan-input" required>
                                            <option value="basico">Básico</option>
                                            <option value="premium">Premium</option>
                                            <option value="personalizado">Personalizado</option>
                                        </select>
                                    @endif
                                    @error('tipo_plan')
                                    <span class="plan-error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Columna derecha: Pago y Resumen -->
                    <div class="plan-column">
                        <div class="plan-section">
                            <h3 class="plan-section-title">Información de Pago</h3>
                            <div class="mb-4">
                                <label for="nombre" class="plan-input-label">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="plan-input" placeholder="Juan" required>
                            </div>
                            <div class="mb-4">
                                <label for="apellidos" class="plan-input-label">Apellidos</label>
                                <input type="text" id="apellidos" name="apellidos" class="plan-input" placeholder="Pérez García" required>
                            </div>
                            <div class="payment-card mb-4">
                                <div class="mb-4">
                                    <label for="card-element" class="plan-input-label">Número de Tarjeta</label>
                                    <div id="card-element" class="plan-input"></div>
                                </div>
                                <div style="display: flex; gap: 16px; flex-wrap: wrap;">
                                    <div style="flex: 1; min-width: 120px;">
                                        <label for="expiry_date" class="plan-input-label">Expiración</label>
                                        <input type="text" id="expiry_date" name="expiry_date" class="plan-input" placeholder="MM/AA" pattern="\d{2}/\d{2}" required>
                                    </div>
                                    <div style="flex: 1; min-width: 120px;">
                                        <label for="cvc" class="plan-input-label">CVC</label>
                                        <input type="text" id="cvc" name="cvc" class="plan-input" placeholder="123" maxlength="3" pattern="\d{3}" required>
                                    </div>
                                </div>
                            </div>
                            <div id="card-errors" class="plan-error"></div>

                            <hr class="divider">

                            <h3 class="plan-section-title">Resumen del Pago</h3>
                            <div class="summary-card mb-4">
                                <div class="summary-row">
                                    <div class="summary-label">Plan:</div>
                                    <div class="summary-value" id="summary-plan">{{ ucfirst($tipo_plan ?? 'Básico') }}</div>
                                    <div class="summary-label">Frecuencia:</div>
                                    <div class="summary-value" id="summary-frequency">Mensual</div>
                                    <div class="summary-label">Precio:</div>
                                    <div class="summary-value" id="summary-price">€30/mes</div>
                                    <div class="summary-label">Próximo cobro:</div>
                                    <div class="summary-value" id="summary-next-billing">{{ now()->addMonth()->format('d/m/Y') }}</div>
                                </div>
                            </div>
                            <button id="submit-button" class="pay-button">Pagar Ahora</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ env('STRIPE_KEY') }}');
        const elements = stripe.elements();
        const cardElement = elements.create('card', {
            style: {
                base: {
                    fontFamily: 'Inter, sans-serif',
                    fontSize: '16px',
                    color: '#1e1e1e',
                    '::placeholder': { color: '#858585' },
                    backgroundColor: '#d3d3d3',
                    padding: '12px',
                    borderRadius: '10px',
                },
                invalid: { color: '#fb4d17' },
            },
        });
        cardElement.mount('#card-element');

        const prices = {
            basico: { mensual: 30, anual: 324 },
            premium: { mensual: 50, anual: 540 },
            personalizado: { mensual: 80, anual: 864 }
        };

        function updatePaymentSummary() {
            const plan = @if(isset($tipo_plan)) '{{ $tipo_plan }}' @else document.getElementById('tipo_plan').value @endif;
            const frequency = document.getElementById('frecuencia').value;
            const price = prices[plan][frequency];
            const nextBilling = frequency === 'mensual'
                ? '{{ now()->addMonth()->format('d/m/Y') }}'
                : '{{ now()->addYear()->format('d/m/Y') }}';

            document.getElementById('summary-plan').textContent = plan.charAt(0).toUpperCase() + plan.slice(1);
            document.getElementById('summary-frequency').textContent = frequency.charAt(0).toUpperCase() + frequency.slice(1);
            document.getElementById('summary-price').textContent = `€${price}/${frequency === 'mensual' ? 'mes' : 'año'}`;
            document.getElementById('summary-next-billing').textContent = nextBilling;
        }

        document.getElementById('mascota_id').addEventListener('change', function() {
            const mascotaId = this.value;
            const pdfDiv = document.getElementById('pdf_dieta');
            if (mascotaId) {
                fetch(`/dietas/${mascotaId}/pdf`, {
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                    },
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.pdf_url) {
                            pdfDiv.innerHTML = `<a href="${data.pdf_url}" class="pdf-link" target="_blank"><svg class="pdf-icon" fill="none" stroke="#fb4d17" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>Ver Dieta PDF</a>`;
                        } else {
                            pdfDiv.innerHTML = '<p class="text-[#858585] text-[0.9rem]">No hay dieta disponible.</p>';
                        }
                    })
                    .catch(() => {
                        pdfDiv.innerHTML = '<p class="text-[#fb4d17] text-[0.9rem]">Error al cargar la dieta.</p>';
                    });
            } else {
                pdfDiv.innerHTML = '<p class="text-[#858585] text-[0.9rem]">Selecciona una mascota para ver la dieta.</p>';
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const mascotaId = '{{ $mascotaSeleccionada->id ?? '' }}';
            const pdfDiv = document.getElementById('pdf_dieta');
            if (mascotaId) {
                fetch(`/dietas/${mascotaId}/pdf`, {
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                    },
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.pdf_url) {
                            pdfDiv.innerHTML = `<a href="${data.pdf_url}" class="pdf-link" target="_blank"><svg class="pdf-icon" fill="none" stroke="#fb4d17" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>Ver Dieta PDF</a>`;
                        } else {
                            pdfDiv.innerHTML = '<p class="text-[#858585] text-[0.9rem]">No hay dieta disponible.</p>';
                        }
                    })
                    .catch(() => {
                        pdfDiv.innerHTML = '<p class="text-[#fb4d17] text-[0.9rem]">Error al cargar la dieta.</p>';
                    });
            }
            updatePaymentSummary();
        });

        @if (!isset($tipo_plan))
        document.getElementById('tipo_plan').addEventListener('change', updatePaymentSummary);
        @endif
        document.getElementById('frecuencia').addEventListener('change', updatePaymentSummary);

        document.getElementById('submit-button').addEventListener('click', async function(e) {
            e.preventDefault();
            const nombre = document.getElementById('nombre').value;
            const apellidos = document.getElementById('apellidos').value;
            const expiryDate = document.getElementById('expiry_date').value;
            const cvc = document.getElementById('cvc').value;
            const cardErrors = document.getElementById('card-errors');

            if (!nombre || !apellidos || !expiryDate || !cvc) {
                cardErrors.textContent = 'Por favor, completa todos los campos.';
                return;
            }

            if (!/^\d{2}\/\d{2}$/.test(expiryDate)) {
                cardErrors.textContent = 'La fecha de expiración debe ser MM/AA.';
                return;
            }

            if (!/^\d{3}$/.test(cvc)) {
                cardErrors.textContent = 'El código de seguridad debe tener 3 dígitos.';
                return;
            }

            const { error, paymentMethod } = await stripe.createPaymentMethod({
                type: 'card',
                card: cardElement,
                billing_details: {
                    name: `${nombre} ${apellidos}`,
                },
            });

            if (error) {
                cardErrors.textContent = error.message;
                return;
            }

            cardErrors.textContent = '';
            const form = document.getElementById('plan-form');
            const paymentMethodInput = document.createElement('input');
            paymentMethodInput.type = 'hidden';
            paymentMethodInput.name = 'payment_method';
            paymentMethodInput.value = paymentMethod.id;
            form.appendChild(paymentMethodInput);
            form.submit();
        });
    </script>
@endsection
