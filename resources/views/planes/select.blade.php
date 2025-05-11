@extends('layouts.app')
@section('title', 'Contratar Plan')
@section('content')
    <div class="profile-container">
        <div class="profile-block">
            <div class="profile-panel">
                <h2 class="profile-title">Contratar Plan</h2>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <form id="plan-form" action="{{ route('planes.checkout') }}" method="POST" class="profile-data-form">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="profile-form-group">
                                <label for="mascota_id" class="profile-form-label">Seleccionar Mascota</label>
                                <select name="mascota_id" id="mascota_id" class="profile-form-select" required>
                                    <option value="">-- Selecciona una mascota --</option>
                                    @foreach ($mascotas as $mascota)
                                        @if ($mascota->dieta)
                                            <option value="{{ $mascota->id }}">{{ $mascota->nombre }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('mascota_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-form-group">
                                <label for="pdf_dieta" class="profile-form-label">Dieta Asociada (PDF)</label>
                                <div id="pdf_dieta">
                                    <p>Selecciona una mascota para ver la dieta.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-form-group">
                                <label for="frecuencia" class="profile-form-label">Frecuencia de Envío</label>
                                <select name="frecuencia" id="frecuencia" class="profile-form-select" required>
                                    <option value="mensual">Mensual</option>
                                    <option value="anual">Anual</option>
                                </select>
                                @error('frecuencia')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-form-group">
                                <label for="tipo_plan" class="profile-form-label">Tipo de Plan</label>
                                <select name="tipo_plan" id="tipo_plan" class="profile-form-select" required>
                                    <option value="basico">Básico</option>
                                    <option value="premium">Premium</option>
                                    <option value="personalizado">Personalizado</option>
                                </select>
                                @error('tipo_plan')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="profile-form-group">
                                <label class="profile-form-label">Pago con Stripe</label>
                                <div id="card-element" class="form-control"></div>
                                <div id="card-errors" class="text-danger"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="profile-form-actions">
                                <button type="submit" id="submit-button" class="profile-btn-primary">Pagar con Stripe</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ env('STRIPE_KEY') }}');
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');

        const form = document.getElementById('plan-form');
        const submitButton = document.getElementById('submit-button');
        const cardErrors = document.getElementById('card-errors');

        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            submitButton.disabled = true;

            const { paymentMethod, error } = await stripe.createPaymentMethod({
                type: 'card',
                card: cardElement,
            });

            if (error) {
                cardErrors.textContent = error.message;
                submitButton.disabled = false;
            } else {
                const hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'payment_method');
                hiddenInput.setAttribute('value', paymentMethod.id);
                form.appendChild(hiddenInput);
                form.submit();
            }
        });

        // Actualizar PDF al cambiar mascota
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
                            pdfDiv.innerHTML = `<a href="${data.pdf_url}" target="_blank">Ver Dieta PDF</a>`;
                        } else {
                            pdfDiv.innerHTML = '<p>No hay dieta disponible.</p>';
                        }
                    })
                    .catch(() => {
                        pdfDiv.innerHTML = '<p>Error al cargar la dieta.</p>';
                    });
            } else {
                pdfDiv.innerHTML = '<p>Selecciona una mascota para ver la dieta.</p>';
            }
        });
    </script>
@endsection
