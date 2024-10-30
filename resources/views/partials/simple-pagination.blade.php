@if ($paginator->hasPages())
    <nav>
        <ul class="pagination flex justify-center space-x-2">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled">
                    <span class="btn btn-outline btn-primary">@lang('pagination.previous')</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="btn btn-outline btn-primary">@lang('pagination.previous')</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="btn btn-outline btn-primary">@lang('pagination.next')</a>
                </li>
            @else
                <li class="disabled">
                    <span class="btn btn-outline btn-primary">@lang('pagination.next')</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
