@extends('layouts.app')
@section('title', 'Blog')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="content">
            <h1>Blog</h1>
            <p>Explora nuestros artículos sobre dietas y alimentación canina</p>
            <div class="filter-container">
                <form method="GET" action="{{ route('articulos.index') }}" class="filter-form">
                    <label for="order_by" class="filter-label">Ordenar por:</label>
                    <select name="order_by" id="order_by" class="filter-select" onchange="this.form.submit()">
                        <option value="recent" {{ request('order_by') == 'recent' ? 'selected' : '' }}>
                            Más recientes
                        </option>
                        <option value="oldest" {{ request('order_by') == 'oldest' ? 'selected' : '' }}>
                            Más antiguos
                        </option>
                    </select>
                </form>
            </div>
        </div>
        <div class="card-container">
            @if ($articulos->isEmpty())
                <p>No hay artículos que mostrar</p>
            @else
                @foreach ($articulos as $articulo)
                    <a href="{{ route('articulos.show', $articulo->slug) }}" class="card-link">
                        <div class="card-articulos">
                            @if ($articulo->imagen)
                                <img src="{{ Storage::url($articulo->imagen) }}"
                                     alt="{{ $articulo->titulo }}"
                                     class="card-img">
                            @else
                                <p>Sin imagen</p>
                            @endif
                            <h2>{{ $articulo->titulo }}</h2>
                            <p class="subtitle">
                                {{ Str::limit(strip_tags($articulo->contenido), 100) }}
                            </p>
                            <small>
                                Publicado:
                                @if ($articulo->fecha_publicacion)
                                    {{ \Carbon\Carbon::parse($articulo->fecha_publicacion)->format('d/m/Y') }}
                                @else
                                    Sin fecha
                                @endif
                            </small>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
        <div class="pagination-container">
            {{ $articulos->appends(request()->query())->links() }}
        </div>
    </div>
@endsection
