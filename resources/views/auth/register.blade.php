@extends('layouts.app')
@section('title', 'Registro')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Registro</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                    @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="correo" name="correo" value="{{ old('correo') }}" required>
                    @error('correo') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="contraseña" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="contraseña" name="contraseña" required>
                    @error('contraseña') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Registrarse</button>
            </form>
        </div>
    </div>
@endsection
