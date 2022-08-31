@extends('layouts.theme')
@section('content')
<div class="app-content">

    <!--====== Primary Slider ======-->
    <livewire:slider-livewire>
    <!--====== End - Primary Slider ======-->



    <!--====== Section 2 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-16">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">TOP TRENDING</h1>
                            <span class="section__span u-c-silver">CHOOSE CATEGORY</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->


        <!--====== Section Content ======-->
        {{-- get procut with category by id sectio n ############################## --}}
        <livewire:get-product-by-category>

        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 2 ======-->


    <!--====== Section 3 ======-->

    <!--====== End - Section 3 ======-->

    <livewire:components.on-slate-product >
    <!--====== Section 4 ======-->
    <livewire:components.latest-post-components >
    <!--====== End - Section 4 ======-->


    <!--====== Section 5 ======-->
    <div class="banner-bg" style="background-image:url({{    asset('assets/images/images/banners/ecommerce-discount-popup-feature-image.webp')}})">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-bg__countdown">
                            <div class="countdown countdown--style-banner" data-countdown="2022/10/01"><div class="countdown__content"><div><span class="countdown__value">00</span><span class="countdown__key">Days</span></div></div><div class="countdown__content"><div><span class="countdown__value">00</span><span class="countdown__key">Hours</span></div></div><div class="countdown__content"><div><span class="countdown__value">00</span><span class="countdown__key">Mins</span></div></div><div class="countdown__content"><div><span class="countdown__value">00</span><span class="countdown__key">Secs</span></div></div></div>
                        </div>
                        <div class="banner-bg__wrap">
                            <div class="banner-bg__text-1">

                                <span class="u-c-white">Global</span>

                                <span class="u-c-secondary">Offers</span></div>
                            <div class="banner-bg__text-2">

                                <span class="u-c-secondary">Official Launch</span>

                                <span class="u-c-white">Don't Miss!</span></div>

                            <span class="banner-bg__text-block banner-bg__text-3 u-c-secondary">Enjoy Free Shipping when you buy 2 items and above!</span>

                            <a class="banner-bg__shop-now btn--e-secondary" href="shop-side-version-2.html">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 5 ======-->


    <!--====== Section 6 ======-->
    <div class="u-s-p-y-60">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-46">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">FEATURED PRODUCTS</h1>

                            <span class="section__span u-c-silver">FIND NEW FEATURED PRODUCTS</span>
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
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                        <div class="product-o product-o--hover-on u-h-100">
                            <div class="product-o__wrap">

                                <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                    <img class="aspect__img" src="images/product/electronic/product19.jpg" alt=""></a>
                                <div class="product-o__action-wrap">
                                    <ul class="product-o__action-list">
                                        <li>

                                            <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                        <li>

                                            <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                        <li>

                                            <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                        <li>

                                            <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <span class="product-o__category">

                                <a href="shop-side-version-2.html">Electronics</a></span>

                            <span class="product-o__name">

                                <a href="product-detail.html">Tablet 14inch Screen</a></span>
                            <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                <span class="product-o__review">(23)</span></div>

                            <span class="product-o__price">$125.00

                                <span class="product-o__discount">$160.00</span></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                        <div class="product-o product-o--hover-on u-h-100">
                            <div class="product-o__wrap">

                                <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                    <img class="aspect__img" src="images/product/electronic/product20.jpg" alt=""></a>
                                <div class="product-o__action-wrap">
                                    <ul class="product-o__action-list">
                                        <li>

                                            <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                        <li>

                                            <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                        <li>

                                            <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                        <li>

                                            <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <span class="product-o__category">

                                <a href="shop-side-version-2.html">Electronics</a></span>

                            <span class="product-o__name">

                                <a href="product-detail.html">Tablet 18inch Screen</a></span>
                            <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                <span class="product-o__review">(23)</span></div>

                            <span class="product-o__price">$125.00

                                <span class="product-o__discount">$160.00</span></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                        <div class="product-o product-o--hover-on u-h-100">
                            <div class="product-o__wrap">

                                <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                    <img class="aspect__img" src="images/product/electronic/product21.jpg" alt=""></a>
                                <div class="product-o__action-wrap">
                                    <ul class="product-o__action-list">
                                        <li>

                                            <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                        <li>

                                            <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                        <li>

                                            <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                        <li>

                                            <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <span class="product-o__category">

                                <a href="shop-side-version-2.html">Electronics</a></span>

                            <span class="product-o__name">

                                <a href="product-detail.html">Tablet 13inch Screen Ram 16GB</a></span>
                            <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                <span class="product-o__review">(23)</span></div>

                            <span class="product-o__price">$125.00

                                <span class="product-o__discount">$160.00</span></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                        <div class="product-o product-o--hover-on u-h-100">
                            <div class="product-o__wrap">

                                <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                    <img class="aspect__img" src="images/product/electronic/product22.jpg" alt=""></a>
                                <div class="product-o__action-wrap">
                                    <ul class="product-o__action-list">
                                        <li>

                                            <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                        <li>

                                            <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Add to Cart"><i class="fas fa-plus-circle"></i></a></li>
                                        <li>

                                            <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                        <li>

                                            <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="" data-original-title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <span class="product-o__category">

                                <a href="shop-side-version-2.html">Electronics</a></span>

                            <span class="product-o__name">

                                <a href="product-detail.html">Tablet 12inch Screen Ram 16GB</a></span>
                            <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                <span class="product-o__review">(23)</span></div>

                            <span class="product-o__price">$125.00

                                <span class="product-o__discount">$160.00</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 6 ======-->


    <!--====== Section 7 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 u-s-m-b-30">

                        <a class="promotion" href="shop-side-version-2.html">
                            <div class="aspect aspect--bg-grey aspect--square">

                                <img class="aspect__img promotion__img" src="images/promo/promo-img-1.jpg" alt=""></div>
                            <div class="promotion__content">
                                <div class="promotion__text-wrap">
                                    <div class="promotion__text-1">

                                        <span class="u-c-secondary">ACCESSORIES FOR YOUR EVERYDAY</span></div>
                                    <div class="promotion__text-2">

                                        <span class="u-c-secondary">GET IN</span>

                                        <span class="u-c-brand">TOUCH</span></div>
                                </div>
                            </div>
                        </a></div>
                    <div class="col-lg-4 col-md-4 col-sm-6 u-s-m-b-30">

                        <a class="promotion" href="shop-side-version-2.html">
                            <div class="aspect aspect--bg-grey aspect--square">

                                <img class="aspect__img promotion__img" src="images/promo/promo-img-2.jpg" alt=""></div>
                            <div class="promotion__content">
                                <div class="promotion__text-wrap">
                                    <div class="promotion__text-1">

                                        <span class="u-c-secondary">SMARTPHONE</span>

                                        <span class="u-c-brand">2019</span></div>
                                    <div class="promotion__text-2">

                                        <span class="u-c-secondary">NEW ARRIVALS</span></div>
                                </div>
                            </div>
                        </a></div>
                    <div class="col-lg-4 col-md-4 col-sm-6 u-s-m-b-30">

                        <a class="promotion" href="shop-side-version-2.html">
                            <div class="aspect aspect--bg-grey aspect--square">

                                <img class="aspect__img promotion__img" src="images/promo/promo-img-3.jpg" alt=""></div>
                            <div class="promotion__content">
                                <div class="promotion__text-wrap">
                                    <div class="promotion__text-1">

                                        <span class="u-c-secondary">DSLR FOR NEW GENERATION</span></div>
                                    <div class="promotion__text-2">

                                        <span class="u-c-brand">GET UP TO 10% OFF</span></div>
                                </div>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 7 ======-->


    <!--====== Section 8 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                        <div class="column-product">

                            <span class="column-product__title u-c-secondary u-s-m-b-25">SPECIAL PRODUCTS</span>
                            <ul class="column-product__list">
                                <li class="column-product__item">
                                    <div class="product-l">
                                        <div class="product-l__img-wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link" href="product-detail.html">

                                                <img class="aspect__img" src="images/product/electronic/product23.jpg" alt=""></a></div>
                                        <div class="product-l__info-wrap">

                                            <span class="product-l__category">

                                                <a href="shop-side-version-2.html">Electronics</a></span>

                                            <span class="product-l__name">

                                                <a href="product-detail.html">Razor Gear 15 Ram 16GB</a></span>

                                            <span class="product-l__price">$125.00</span></div>
                                    </div>
                                </li>
                                <li class="column-product__item">
                                    <div class="product-l">
                                        <div class="product-l__img-wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link" href="product-detail.html">

                                                <img class="aspect__img" src="images/product/electronic/product24.jpg" alt=""></a></div>
                                        <div class="product-l__info-wrap">

                                            <span class="product-l__category">

                                                <a href="shop-side-version-2.html">Electronics</a></span>

                                            <span class="product-l__name">

                                                <a href="product-detail.html">Razor Gear 13 Ram 16GB</a></span>

                                            <span class="product-l__price">$125.00</span></div>
                                    </div>
                                </li>
                                <li class="column-product__item">
                                    <div class="product-l">
                                        <div class="product-l__img-wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link" href="product-detail.html">

                                                <img class="aspect__img" src="images/product/electronic/product25.jpg" alt=""></a></div>
                                        <div class="product-l__info-wrap">

                                            <span class="product-l__category">

                                                <a href="shop-side-version-2.html">Electronics</a></span>

                                            <span class="product-l__name">

                                                <a href="product-detail.html">Razor Gear 15 Ram 8GB</a></span>

                                            <span class="product-l__price">$125.00</span></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                        <div class="column-product">

                            <span class="column-product__title u-c-secondary u-s-m-b-25">WEEKLY PRODUCTS</span>
                            <ul class="column-product__list">
                                <li class="column-product__item">
                                    <div class="product-l">
                                        <div class="product-l__img-wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link" href="product-detail.html">

                                                <img class="aspect__img" src="images/product/electronic/product26.jpg" alt=""></a></div>
                                        <div class="product-l__info-wrap">

                                            <span class="product-l__category">

                                                <a href="shop-side-version-2.html">Electronics</a></span>

                                            <span class="product-l__name">

                                                <a href="product-detail.html">Razor Gear 10 Ram 16GB</a></span>

                                            <span class="product-l__price">$125.00

                                                <span class="product-l__discount">$160</span></span></div>
                                    </div>
                                </li>
                                <li class="column-product__item">
                                    <div class="product-l">
                                        <div class="product-l__img-wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link" href="product-detail.html">

                                                <img class="aspect__img" src="images/product/electronic/product27.jpg" alt=""></a></div>
                                        <div class="product-l__info-wrap">

                                            <span class="product-l__category">

                                                <a href="shop-side-version-2.html">Electronics</a></span>

                                            <span class="product-l__name">

                                                <a href="product-detail.html">Razor Gear 15 Ram 8GB</a></span>

                                            <span class="product-l__price">$125.00

                                                <span class="product-l__discount">$160</span></span></div>
                                    </div>
                                </li>
                                <li class="column-product__item">
                                    <div class="product-l">
                                        <div class="product-l__img-wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link" href="product-detail.html">

                                                <img class="aspect__img" src="images/product/electronic/product28.jpg" alt=""></a></div>
                                        <div class="product-l__info-wrap">

                                            <span class="product-l__category">

                                                <a href="shop-side-version-2.html">Electronics</a></span>

                                            <span class="product-l__name">

                                                <a href="product-detail.html">Razor Gear 15 Ultra Ram 16GB</a></span>

                                            <span class="product-l__price">$125.00

                                                <span class="product-l__discount">$160</span></span></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                        <div class="column-product">

                            <span class="column-product__title u-c-secondary u-s-m-b-25">FLASH PRODUCTS</span>
                            <ul class="column-product__list">
                                <li class="column-product__item">
                                    <div class="product-l">
                                        <div class="product-l__img-wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link" href="product-detail.html">

                                                <img class="aspect__img" src="images/product/electronic/product29.jpg" alt=""></a></div>
                                        <div class="product-l__info-wrap">
                                            <div class="product-l__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>

                                            <span class="product-l__category">

                                                <a href="shop-side-version-2.html">Electronics</a></span>

                                            <span class="product-l__name">

                                                <a href="product-detail.html">Razor Gear 20 Ultra Ram 16GB</a></span>

                                            <span class="product-l__price">$125.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-product__item">
                                    <div class="product-l">
                                        <div class="product-l__img-wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link" href="product-detail.html">

                                                <img class="aspect__img" src="images/product/electronic/product30.jpg" alt=""></a></div>
                                        <div class="product-l__info-wrap">
                                            <div class="product-l__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>

                                            <span class="product-l__category">

                                                <a href="shop-side-version-2.html">Electronics</a></span>

                                            <span class="product-l__name">

                                                <a href="product-detail.html">Razor Gear 11 Ultra Ram 16GB</a></span>

                                            <span class="product-l__price">$125.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="column-product__item">
                                    <div class="product-l">
                                        <div class="product-l__img-wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link" href="product-detail.html">

                                                <img class="aspect__img" src="images/product/electronic/product31.jpg" alt=""></a></div>
                                        <div class="product-l__info-wrap">
                                            <div class="product-l__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></div>

                                            <span class="product-l__category">

                                                <a href="shop-side-version-2.html">Electronics</a></span>

                                            <span class="product-l__name">

                                                <a href="product-detail.html">Razor Gear 10 Ultra Ram 16GB</a></span>

                                            <span class="product-l__price">$125.00</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 8 ======-->


    <!--====== Section 9 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="service u-h-100">
                            <div class="service__icon"><i class="fas fa-truck"></i></div>
                            <div class="service__info-wrap">

                                <span class="service__info-text-1">Free Shipping</span>

                                <span class="service__info-text-2">Free shipping on all US order or order above $200</span></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="service u-h-100">
                            <div class="service__icon"><i class="fas fa-redo"></i></div>
                            <div class="service__info-wrap">

                                <span class="service__info-text-1">Shop with Confidence</span>

                                <span class="service__info-text-2">Our Protection covers your purchase from click to delivery</span></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="service u-h-100">
                            <div class="service__icon"><i class="fas fa-headphones-alt"></i></div>
                            <div class="service__info-wrap">

                                <span class="service__info-text-1">24/7 Help Center</span>

                                <span class="service__info-text-2">Round-the-clock assistance for a smooth shopping experience</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 9 ======-->


    <!--====== Section 10 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-46">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">LATEST FROM BLOG</h1>

                            <span class="section__span u-c-silver">START YOU DAY WITH FRESH AND LATEST NEWS</span>
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
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="bp-mini bp-mini--img u-h-100">
                            <div class="bp-mini__thumbnail">

                                <!--====== Image Code ======-->

                                <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block" href="blog-detail.html">

                                    <img class="aspect__img" src="images/blog/post-2.jpg" alt=""></a>
                                <!--====== End - Image Code ======-->
                            </div>
                            <div class="bp-mini__content">
                                <div class="bp-mini__stat">

                                    <span class="bp-mini__stat-wrap">

                                        <span class="bp-mini__publish-date">

                                            <a>

                                                <span>25 February 2018</span></a></span></span>

                                    <span class="bp-mini__stat-wrap">

                                        <span class="bp-mini__preposition">By</span>

                                        <span class="bp-mini__author">

                                            <a href="#">Dayle</a></span></span>

                                    <span class="bp-mini__stat">

                                        <span class="bp-mini__comment">

                                            <a href="blog-detail.html"><i class="far fa-comments u-s-m-r-4"></i>

                                                <span>8</span></a></span></span></div>
                                <div class="bp-mini__category">

                                    <a>Learning</a>

                                    <a>News</a>

                                    <a>Health</a></div>

                                <span class="bp-mini__h1">

                                    <a href="blog-detail.html">Life is an extraordinary Adventure</a></span>
                                <p class="bp-mini__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="blog-t-w">

                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Travel</a>

                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Culture</a>

                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Place</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="bp-mini bp-mini--img u-h-100">
                            <div class="bp-mini__thumbnail">

                                <!--====== Image Code ======-->

                                <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block" href="blog-detail.html">

                                    <img class="aspect__img" src="images/blog/post-12.jpg" alt=""></a>
                                <!--====== End - Image Code ======-->
                            </div>
                            <div class="bp-mini__content">
                                <div class="bp-mini__stat">

                                    <span class="bp-mini__stat-wrap">

                                        <span class="bp-mini__publish-date">

                                            <a>

                                                <span>25 February 2018</span></a></span></span>

                                    <span class="bp-mini__stat-wrap">

                                        <span class="bp-mini__preposition">By</span>

                                        <span class="bp-mini__author">

                                            <a href="#">Dayle</a></span></span>

                                    <span class="bp-mini__stat">

                                        <span class="bp-mini__comment">

                                            <a href="blog-detail.html"><i class="far fa-comments u-s-m-r-4"></i>

                                                <span>8</span></a></span></span></div>
                                <div class="bp-mini__category">

                                    <a>Learning</a>

                                    <a>News</a>

                                    <a>Health</a></div>

                                <span class="bp-mini__h1">

                                    <a href="blog-detail.html">Wait till its open</a></span>
                                <p class="bp-mini__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="blog-t-w">

                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Travel</a>

                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Culture</a>

                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Place</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 u-s-m-b-30">
                        <div class="bp-mini bp-mini--img u-h-100">
                            <div class="bp-mini__thumbnail">

                                <!--====== Image Code ======-->

                                <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block" href="blog-detail.html">

                                    <img class="aspect__img" src="images/blog/post-5.jpg" alt=""></a>
                                <!--====== End - Image Code ======-->
                            </div>
                            <div class="bp-mini__content">
                                <div class="bp-mini__stat">

                                    <span class="bp-mini__stat-wrap">

                                        <span class="bp-mini__publish-date">

                                            <a>

                                                <span>25 February 2018</span></a></span></span>

                                    <span class="bp-mini__stat-wrap">

                                        <span class="bp-mini__preposition">By</span>

                                        <span class="bp-mini__author">

                                            <a href="#">Dayle</a></span></span>

                                    <span class="bp-mini__stat">

                                        <span class="bp-mini__comment">

                                            <a href="blog-detail.html"><i class="far fa-comments u-s-m-r-4"></i>

                                                <span>8</span></a></span></span></div>
                                <div class="bp-mini__category">

                                    <a>Learning</a>

                                    <a>News</a>

                                    <a>Health</a></div>

                                <span class="bp-mini__h1">

                                    <a href="blog-detail.html">Tell me difference between smoke and vape</a></span>
                                <p class="bp-mini__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="blog-t-w">

                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Travel</a>

                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Culture</a>

                                    <a class="gl-tag btn--e-transparent-hover-brand-b-2">Place</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 10 ======-->


    <!--====== Section 11 ======-->
    <div class="u-s-p-b-90 u-s-m-b-30">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-46">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">CLIENTS FEEDBACK</h1>

                            <span class="section__span u-c-silver">WHAT OUR CLIENTS SAY</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->


        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">

                <!--====== Testimonial Slider ======-->
                <div>
                    <div class="owl-carousel owl-loaded owl-drag" id="testimonial-slider">




                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2040px;"><div class="owl-item active" style="width: 510px;"><div class="testimonial">
                            <div class="testimonial__img-wrap">

                                <img class="testimonial__img" src="images/about/test-1.jpg" alt=""></div>
                            <div class="testimonial__content-wrap">

                                <span class="testimonial__double-quote"><i class="fas fa-quote-right"></i></span>
                                <blockquote class="testimonial__block-quote">
                                    <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
                                </blockquote>

                                <span class="testimonial__author">John D. / DVNTR Inc.</span>
                            </div>
                        </div></div><div class="owl-item" style="width: 510px;"><div class="testimonial">
                            <div class="testimonial__img-wrap">

                                <img class="testimonial__img" src="images/about/test-2.jpg" alt=""></div>
                            <div class="testimonial__content-wrap">

                                <span class="testimonial__double-quote"><i class="fas fa-quote-right"></i></span>
                                <blockquote class="testimonial__block-quote">
                                    <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
                                </blockquote>

                                <span class="testimonial__author">John D. / DVNTR Inc.</span>
                            </div>
                        </div></div><div class="owl-item" style="width: 510px;"><div class="testimonial">
                            <div class="testimonial__img-wrap">

                                <img class="testimonial__img" src="images/about/test-3.jpg" alt=""></div>
                            <div class="testimonial__content-wrap">

                                <span class="testimonial__double-quote"><i class="fas fa-quote-right"></i></span>
                                <blockquote class="testimonial__block-quote">
                                    <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
                                </blockquote>

                                <span class="testimonial__author">John D. / DVNTR Inc.</span>
                            </div>
                        </div></div><div class="owl-item" style="width: 510px;"><div class="testimonial">
                            <div class="testimonial__img-wrap">

                                <img class="testimonial__img" src="images/about/test-4.jpg" alt=""></div>
                            <div class="testimonial__content-wrap">

                                <span class="testimonial__double-quote"><i class="fas fa-quote-right"></i></span>
                                <blockquote class="testimonial__block-quote">
                                    <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
                                </blockquote>

                                <span class="testimonial__author">John D. / DVNTR Inc.</span>
                            </div>
                        </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                </div>
                <!--====== End - Testimonial Slider ======-->
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 11 ======-->


    <!--====== Section 12 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">

                <!--====== Brand Slider ======-->
                <div>
                    <div class="owl-carousel owl-loaded owl-drag" id="brand-slider" data-item="5">






                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3060px;"><div class="owl-item active" style="width: 510px;"><div class="brand-slide">

                            <a href="shop-side-version-2.html">

                                <img src="images/brand/b1.png" alt=""></a></div></div><div class="owl-item" style="width: 510px;"><div class="brand-slide">

                            <a href="shop-side-version-2.html">

                                <img src="images/brand/b2.png" alt=""></a></div></div><div class="owl-item" style="width: 510px;"><div class="brand-slide">

                            <a href="shop-side-version-2.html">

                                <img src="images/brand/b3.png" alt=""></a></div></div><div class="owl-item" style="width: 510px;"><div class="brand-slide">

                            <a href="shop-side-version-2.html">

                                <img src="images/brand/b4.png" alt=""></a></div></div><div class="owl-item" style="width: 510px;"><div class="brand-slide">

                            <a href="shop-side-version-2.html">

                                <img src="images/brand/b5.png" alt=""></a></div></div><div class="owl-item" style="width: 510px;"><div class="brand-slide">

                            <a href="shop-side-version-2.html">

                                <img src="images/brand/b6.png" alt=""></a></div></div></div></div><div class="owl-nav"><div class="b-prev"><i class="fas fa-angle-left"></i></div><div class="b-next"><i class="fas fa-angle-right"></i></div></div><div class="owl-dots disabled"></div></div>
                </div>
                <!--====== End - Brand Slider ======-->
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 12 ======-->
</div>
@endsection
