{{-- @php
$permission = Spatie\Permission\Models\Permission::get();
@endphp --}}

<div class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content ps-container ps-theme-dark ps-active-y"
        data-ps-id="8b0cb816-c612-9fbc-4ca0-0760388c8785" style="height: 697px;">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item {{-- request()->routeIs('home')?'active':'' --}}"><a href="{{route('home')}}"><i
                        class="la la-home"></i><span class="menu-title"
                        data-i18n="nav.changelog.main">{{__('translation.dashboard')}}</span></a>
            </li>

            <li class="nav-item {{ request()->routeIs('categories.index')?'active':'' }}"><a
                    href="{{route('categories.index')}}"><i class="la la-tty"></i><span class="menu-title"
                        data-i18n="nav.changelog.main"> categories </span></a>
            </li>
            <li class="nav-item {{ request()->routeIs('orders')?'active':'' }}"><a
                href="{{route('orders')}}"><i
                    class="la la-list-alt"></i><span class="menu-title"
                    data-i18n="nav.changelog.main"> Orders </span></a>
        </li>
        <li class="nav-item {{ request()->routeIs('admin.contact.us')?'active':'' }}"><a
            href="{{route('admin.contact.us')}}"><i class="la la-bell"></i><span class="menu-title"
                data-i18n="nav.changelog.main"> Contact us </span></a>
    </li>

            <li class="nav-item {{ request()->routeIs('Coupons.index')?'active':'' }}"><a
                href="{{route('Coupons.index')}}"><i class="la la-key"></i><span class="menu-title"
                    data-i18n="nav.changelog.main"> Coupons </span></a>
        </li>


            <li class="nav-item has-sub {{ request()->is('products/*') ? 'open':'' }}"><a href="#"><i
                        class="la la-list-alt"></i><span class="menu-title" data-i18n="nav.templates.main"> Products
                        mangement</span></a>
                <ul class="menu-content" style="">
                    <li class="is-shown {{request()->routeIs('products.index') ? 'active':'' }}">
                        <a class="menu-item" href="{{route('products.index') }}" data-i18n="nav.dash.ecommerce"> Show
                            All Products </a>
                    </li>
                    <li class="is-shown {{ request()->routeIs('homeSlider.index')?'active':'' }}"><a class="menu-item"
                            href="{{ route('homeSlider.index') }}" data-i18n="nav.dash.crypto"> Home Slider </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item has-sub {{ request()->is('products/*') ? 'open':'' }}"><a href="#"><i
                class="la la-list-alt"></i><span class="menu-title" data-i18n="nav.templates.main"> Customers
                mangement</span></a>
        <ul class="menu-content" style="">
            <li class="is-shown {{request()->routeIs('products.index') ? 'active':'' }}">
                <a class="menu-item" href="{{route('products.index') }}" data-i18n="nav.dash.ecommerce"> Show
                    All Products </a>
            </li>
            <li class="is-shown {{ request()->routeIs('homeSlider.index')?'active':'' }}"><a class="menu-item"
                    href="{{ route('homeSlider.index') }}" data-i18n="nav.dash.crypto"> Home Slider </a>
            </li>

        </ul>
    </li>

            <li class="nav-item {{ request()->routeIs('admin.setting')?'active':'' }}"><a
                href="{{route('admin.setting')}}"><i
                class="la la-cog"></i><span class="menu-title"
                    data-i18n="nav.changelog.main"> Setting </span></a>
        </li>
        </ul>
        </li>

        </ul>

        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps-scrollbar-y-rail" style="top: 0px; height: 697px; right: 251px;">
            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 128px;"></div>
        </div>


    </div>
</div>
