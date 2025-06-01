
@extends('layouts.app')
@section('title', 'Editar Usuario')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="admin-content">
            <h1>Editar: {{ $user->nombre }}</h1>
            <p>Modifica los detalles del usuario</p>
            <div class="admin-container">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="edit-user-form-container">
                    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="edit-user-form">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="is_admin" class="form-label">Administrador</label>
                            <input type="checkbox" name="is_admin" id="is_admin" class="form-check-input" value="1" {{ $user->is_admin ? 'checked' : '' }}>
                        </div>


                        <!-- si una cuenta está deshabilitada:
                        -Impide que el usuario inicie sesión o acceda a funciones de la plataforma
                        -No elimina la cuenta, solo la desactiva temporalmente.
                        -y al desmarcarlo (is_disabled = 0), la cuenta se reactiva.-->
                        <div class="form-group">
                            <label for="is_disabled" class="form-label">Cuenta Deshabilitada</label>
                            <input type="checkbox" name="is_disabled" id="is_disabled" class="form-check-input" value="1" {{ $user->is_disabled ? 'checked' : '' }}>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn-admin-primary">Actualizar</button>
                            <a href="{{ route('admin.users.index') }}" class="btn-admin-secondary">Volver</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
