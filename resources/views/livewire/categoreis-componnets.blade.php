
    <li class="has-dropdown">

        <a>CATEGORIES<i class="fas fa-angle-down u-s-m-l-6"></i></a>

        <!--====== Dropdown ======-->

        <span class="js-menu-toggle"></span>
        <ul style="width:170px">
            @foreach ($Categories as $category)
            {{-- @dd($category->IsParent() ); --}}
            <li class="{{ $category->IsParent() ? 'has-dropdown has-dropdown--ul-left-100' : '' }}">

                <a href="{{route('products', $category->id)  }}">{{ $category->name }}
                    @if ($category->IsParent() )
                    <i class="fas fa-angle-down i-state-right u-s-m-l-6"></i>
                    @endif
                </a>

                <!--====== Dropdown ======-->

                <span class="js-menu-toggle"></span>
                @if ($category->IsParent() )
                <ul style="width:200px">
                    @foreach ($category->Childs as $child )
                    <li>
                        <a href="{{ route('products', $child->id) }}">{{ $child->name }}</a>
                    </li>
                    @endforeach
                </ul>
                @endif
                <!--====== End - Dropdown ======-->
            </li>
            @endforeach
            {{-- <li>

                <a href="cart.html">Cart</a>
            </li> --}}
        </ul>
        <!--====== End - Dropdown ======-->
    </li>
