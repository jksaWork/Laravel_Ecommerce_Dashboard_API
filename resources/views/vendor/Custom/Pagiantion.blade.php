

@if ($paginator->hasPages())
<ul class="shop-p__pagination">
   
    @if ($paginator->onFirstPage())
        <li class="disabled"><span>← Previous</span></li>
    @else
        <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>
    @endif



    @foreach ($elements as $element)

        @if (is_string($element))
            <li class="disabled"><span>{{ $element }}</span></li>
        @endif



        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <li class="is-active">
                    <a href="{{ $url }}">{{ $page }}</a></li>
                <li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach



    @if ($paginator->hasMorePages())
        <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
    @else
        <li class="disabled"><span>Next →</span></li>
    @endif
</ul>
@endif

{{--

                        <div class="u-s-p-y-60">

                            <!--====== Pagination ======-->
                            <ul class="shop-p__pagination">
                                <li class="is-active">
                                    <a href="shop-grid-left.html">1</a></li>
                                <li>

                                    <a href="shop-grid-left.html">2</a></li>
                                <li>

                                    <a href="shop-grid-left.html">3</a></li>
                                <li>

                                    <a href="shop-grid-left.html">4</a></li>
                                <li>

                                    <a class="fas fa-angle-right" href="shop-grid-left.html"></a></li>
                            </ul>
                            <!--====== End - Pagination ======-->
                        </div> --}}
