@extends('layouts.app')
@section('title', 'Panel de Administración - Artículos')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="admin-content">
            <h1>Panel de Administración - Artículos</h1>
            <p>Gestiona los artículos del blog</p>
            <div class="admin-container">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <a href="{{ route('articles.create') }}" class="btn-admin-create">Crear Artículo</a>
                <div class="article-list">
                    @forelse ($articulos as $articulo)
                        <div class="article-card">
                            <div class="article-info">
                                <h3>{{ $articulo->titulo }}</h3>
                                <p class="article-date">
                                    @if ($articulo->fecha_publicacion)
                                        {{ \Carbon\Carbon::parse($articulo->fecha_publicacion)->format('d/m/Y') }}
                                    @else
                                        Sin fecha
                                    @endif
                                </p>
                            </div>
                            <div class="article-actions">
                                <a href="{{ route('articles.edit', $articulo) }}" class="action-icon" title="Editar">
                                    <i class="bi-pen"></i>
                                </a>
                                <form action="{{ route('admin.articulos.destroy', $articulo) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="action-icon action-delete" title="Eliminar" onclick="return confirm('¿Seguro que quieres eliminar este artículo?')">
                                        <i class="bi bi-trash2"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <p class="no-articles">No hay artículos disponibles.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
