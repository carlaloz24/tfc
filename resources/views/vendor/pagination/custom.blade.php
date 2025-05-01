<div class="pagination">
    @if ($paginator->onFirstPage())
        <span class="page-arrow disabled">
            <i class="bi bi-chevron-left"></i>
        </span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="page-arrow">
            <i class="bi bi-chevron-left"></i>
        </a>
    @endif

    @foreach ($elements as $element)
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span class="page-number current">{{ $page }}</span>
                @else
                    <a href="{{ $url }}" class="page-number">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="page-arrow">
            <i class="bi bi-chevron-right"></i>
        </a>
    @else
        <span class="page-arrow disabled">
            <i class="bi bi-chevron-right"></i>
        </span>
    @endif
</div>
