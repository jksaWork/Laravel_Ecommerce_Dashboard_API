<div class="app-content">

    <!--====== Section 1 ======-->
    <div class="u-s-p-y-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="breadcrumb">
                    <div class="breadcrumb__wrap">
                        <ul class="breadcrumb__list">
                            <li class="has-separator">

                                <a href="index.html">Home</a></li>
                            <li class="is-marked">

                                <a href="wishlist.html">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section 1 ======-->
    <!--====== Section 2 ======-->
    <div class="u-s-p-b-60">
        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary">Wishlist</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->
        <!--====== Section Content ======-->
      @if(Cart::instance('wishlist')->count() > 0)
      <div class="section__content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!--====== Wishlist Product ======-->
                    @foreach (Cart::instance('wishlist')->content() as $item)
                    <div class="w-r u-s-m-b-30">
                        <div class="w-r__container">
                            <div class="w-r__wrap-1">
                                <div class="w-r__img-wrap">
                                    <img class="u-img-fluid" src="images/product/electronic/product3.jpg" alt=""></div>
                                <div class="w-r__info">

                                    <span class="w-r__name">

                                        <a href="product-detail.html">Yellow Wireless Headphone</a></span>

                                    <span class="w-r__category">

                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                    <span class="w-r__price">$125.00

                                        <span class="w-r__discount">$160.00</span></span></div>
                            </div>
                            <div class="w-r__wrap-2">

                                <a class="w-r__link btn--e-brand-b-2" data-modal="modal" data-modal-id="#add-to-cart" wire:click.prevent='AddToCart({{ $item->model }})'>ADD TO CART</a>

                                <a class="w-r__link btn--e-transparent-platinum-b-2" href="{{ route('show.product', $item->model->slug) }}">VIEW</a>

                                <a class="w-r__link btn--e-transparent-platinum-b-2"  href="#"
                                wire:click.prevent='removeProductFormWishlist("{{ $item->rowId }}")'
                                >REMOVE</a></div>
                        </div>
                    </div>
                    @endforeach
                    <!--====== End - Wishlist Product ======-->
                    <!--====== End - Wishlist Product ======-->
                </div>
                <div class="col-lg-12">
                    <div class="route-box">
                        <div class="route-box__g">

                            <a class="route-box__link" href="{{ route('products') }}"><i class="fas fa-long-arrow-alt-left"></i>

                                <span>CONTINUE SHOPPING</span></a></div>
                        <div class="route-box__g">

                            <a class="route-box__link" href="wishlist.html" wire:click.prevent='removeAllProductFormWishlist'><i class="fas fa-trash"></i>

                                <span>CLEAR WISHLIST</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="u-s-p-y-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 u-s-m-b-30">
                        <div class="empty">
                            <div class="empty__wrap">

                                <span class="empty__big-text">EMPTY</span>

                                <span class="empty__text-1">No items found on your wishlist.</span>

                                <a class="empty__redirect-link btn--e-brand" href="shop-side-version-2.html">CONTINUE SHOPPING</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
      @endif
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 2 ======-->
</div>
