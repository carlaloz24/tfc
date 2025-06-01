@extends('layouts.app')
@section('title', 'Panel de Administración - Artículos')
@section('content')
    <div class="main-container">
        <div class="second-background"></div>
        <div class="admin-content">
            <h1>Panel de Administración - Artículos</h1>
            <p>Gestiona los artículos del blog</p><br>
            <div class="filter-container">
                <form method="GET" action="{{ route('admin.articulos.index') }}" class="filter-form" id="filter-form">
                    <div class="filter-left">
                        <div class="filter-group">
                            <label for="start_date" class="filter-label">Desde:</label>
                            <input type="date" name="start_date" id="start_date" class="filter-input" value="{{ request('start_date') }}">
                        </div>
                        <div class="filter-group">
                            <label for="end_date" class="filter-label">Hasta:</label>
                            <input type="date" name="end_date" id="end_date" class="filter-input" value="{{ request('end_date') }}">
                        </div>
                        <button type="submit" class="btn-admin-filter">Filtrar</button>
                    </div>
                    <div class="filter-right">
                        <div class="filter-group">
                            <label for="order_by" class="filter-label">Ordenar por:</label>
                            <select name="order_by" id="order_by" class="filter-select" onchange="this.form.submit()">
                                <option value="recent" {{ request('order_by') == 'recent' ? 'selected' : '' }}>Más recientes</option>
                                <option value="oldest" {{ request('order_by') == 'oldest' ? 'selected' : '' }}>Más antiguos</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div><br><br>
            <a href="{{ route('articulos.create') }}" class="btn-admin-create">Crear Artículo</a>
                <div class="article-list">
                    @forelse ($articulos as $articulo)
                        <a href="{{ route('articulos.show', $articulo->slug) }}" class="article-card-link">
                            <div class="article-card">
                                <div class="article-info">
                                    <div class="article-text">
                                        <h3 class="article-title">{{ $articulo->titulo }}</h3>
                                        <p class="article-date">
                                            @if ($articulo->fecha_publicacion)
                                                {{ \Carbon\Carbon::parse($articulo->fecha_publicacion)->format('d/m/Y') }}
                                            @else
                                                Sin fecha
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="article-actions">
                                    <a href="{{ route('articulos.edit', $articulo->slug) }}"   class="btn-user-edit" title="Editar">
                                        <i class="bi bi-pen"></i>
                                    </a>
                                    <button type="button"  class="btn-user-edit"      title="Eliminar" data-id="{{ $articulo->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                    <form action="{{ route('admin.articulos.destroy', $articulo->slug) }}" method="POST" style="display:none;" id="delete-form-{{ $articulo->id }}">
                                        @csrf
                                        @method('DELETE')
                                    </form>

                                </div>
                            </div>
                        </a>
                    @empty
                        <p class="no-articles">No hay artículos disponibles.</p>
                        <button type="button" class="btn-admin-filter-limpiar" onclick="clearFilters()">Limpiar filtros</button>

                    @endforelse
                </div>

                <div class="pagination-container">
                    {{ $articulos->appends(request()->query())->links('vendor.pagination.custom') }}
                </div>

            </div>

        </div>
    </div>

    <!-- modal de confirmación de eliminación -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirmar Eliminación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de que quieres eliminar este artículo? Esta acción no se puede deshacer.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" id="confirm-delete">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let articleId = null;

            //capturar el ID del artículo al hacer clic en eliminar
            document.querySelectorAll('.action-delete').forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    articleId = button.getAttribute('data-id');
                    e.stopPropagation();
                });
            });

            //confirmar eliminación
            document.getElementById('confirm-delete').addEventListener('click', () => {
                if (articleId) {
                    const form = document.getElementById(`delete-form-${articleId}`);
                    if (form) {
                        form.submit();
                    } else {
                        console.error('Formulario no encontrado para ID:', articleId);
                    }
                }
            });

            //cvitar que el clic en editar active el enlace de la card
            document.querySelectorAll('.action-icon:not(.action-delete)').forEach(link => {
                link.addEventListener('click', (e) => {
                    e.stopPropagation();
                });
            });
        });
    </script>

    <!-- botón limpiar filtros -->
    <script>
        function clearFilters() {
            const form = document.getElementById('filter-form');
            form.querySelectorAll('input, select').forEach(input => {
                if (input.type === 'date') input.value = '';
                if (input.tagName === 'SELECT') input.value = 'recent';
            });
            window.location = '{{ route('admin.articulos.index') }}';
        }
    </script>
@endpush
