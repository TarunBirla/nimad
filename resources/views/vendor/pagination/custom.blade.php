@if ($paginator->hasPages())
  <div class="custom-pagination-container">
    <div class="pagination-info">
      Showing <span>{{ $paginator->firstItem() }}</span> to <span>{{ $paginator->lastItem() }}</span> of <span>{{ $paginator->total() }}</span> results
    </div>
    <ul class="custom-pagination">
      {{-- Previous Page Link --}}
      @if ($paginator->onFirstPage())
        <li class="page-item disabled" aria-disabled="true">
          <span class="page-link"><i class="fa-solid fa-chevron-left"></i> Previous</span>
        </li>
      @else
        <li class="page-item">
          <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa-solid fa-chevron-left"></i> Previous</a>
        </li>
      @endif

      {{-- Pagination Elements --}}
      @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
          <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
          @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
              <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
            @else
              <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
            @endif
          @endforeach
        @endif
      @endforeach

      {{-- Next Page Link --}}
      @if ($paginator->hasMorePages())
        <li class="page-item">
          <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next <i class="fa-solid fa-chevron-right"></i></a>
        </li>
      @else
        <li class="page-item disabled" aria-disabled="true">
          <span class="page-link">Next <i class="fa-solid fa-chevron-right"></i></span>
        </li>
      @endif
    </ul>
  </div>
@elseif ($paginator->total() > 0)
  <div class="custom-pagination-container">
    <div class="pagination-info">
      Showing <span>{{ $paginator->firstItem() ?? 1 }}</span> to <span>{{ $paginator->lastItem() ?? $paginator->total() }}</span> of <span>{{ $paginator->total() }}</span> results
    </div>
  </div>
@endif
