<div class="u-s-p-b-60">

    <!--====== Section Intro ======-->
    <div class="section__intro u-s-m-b-46">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__text-wrap">
                        <h1 class="section__heading u-c-secondary u-s-m-b-12">DEAL OF THE DAY</h1>

                        <span class="section__span u-c-silver">BUY DEAL OF THE DAY, HURRY UP! THESE NEW PRODUCTS WILL EXPIRE SOON.</span>

                        <span class="section__span u-c-silver">ADD THESE ON YOUR CART.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Intro ======-->


    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="container">
            <div class="row">
                @forelse ($Prodcuts as $Prodcut    )
                <div class="col-lg-6 col-md-6 u-s-m-b-30">
                    <div class="product-o product-o--radius product-o--hover-off u-h-100">
                        <div class="product-o__wrap">
                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
                                <img class="aspect__img" src="{{ $Prodcut->image }}" alt=""></a>
                            <div class="product-o__special-count-wrap">
                                <div class="countdown countdown--style-special" data-countdown="2022/05/01"><div class="countdown__content"><div><span class="countdown__value">{{ $Day }}</span><span class="countdown__key">Days</span></div></div><div class="countdown__content"><div><span class="countdown__value">213</span><span class="countdown__key">Hours</span></div></div><div class="countdown__content"><div><span class="countdown__value">{{ $Min }}</span><span class="countdown__key">Mins</span></div></div><div class="countdown__content"><div><span class="countdown__value">{{ $Sec }}</span><span class="countdown__key">Secs</span></div></div></div>
                            </div>
                            <div class="product-o__action-wrap">
                                <ul class="product-o__action-list">
                                    <li>
                                        <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                    <li>
                                        <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Add to Cart" wire:click='AddToCart({{ $Prodcut }})'><i class="fas fa-plus-circle"></i></a></li>
                                    <li>
                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist" wire:click.prevent='AddToWishCart({{ $Prodcut }})'><i class="fas fa-heart"></i></a></li>
                                    <li>
                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <span class="product-o__category">
                            <a href="shop-side-version-2.html">{{ $Prodcut->Category->name }}</a></span>
                        <span class="product-o__name">
                            <a href="product-detail.html">{{ $Prodcut->name }}</a></span>
                        <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <span class="product-o__review">(2)</span></div>
                        <span class="product-o__price">{{ $Prodcut->price }}
                            <span class="product-o__discount">{{ $Prodcut->sale_price }}</span></span>
                    </div>
                </div>
                @empty

                @endforelse

            </div>
        </div>
    </div>
    <!--====== End - Section Content ======-->
</div>
