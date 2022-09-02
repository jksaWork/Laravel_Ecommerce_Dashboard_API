@extends('layouts.theme')
@section('content')
<div class="app-content">

    <!--====== Primary Slider ======-->
    <livewire:slider-livewire>
        <!--====== End - Primary Slider ======-->



        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-16" style="margin: 50px">
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

        <livewire:components.on-slate-product>
            <!--====== Section 4 ======-->
            <livewire:components.latest-post-components>
                <!--====== End - Section 4 ======-->


                <!--====== Section 5 ======-->
                <div class="banner-bg"
                    style="background-image:url({{    asset('assets/images/images/banners/ecommerce-discount-popup-feature-image.webp')}})">

                    <!--====== Section Content ======-->
                    <div class="section__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-bg__countdown">
                                        <div class="countdown countdown--style-banner" data-countdown="2022/10/01">
                                            <div class="countdown__content">
                                                <div><span class="countdown__value">00</span><span
                                                        class="countdown__key">Days</span></div>
                                            </div>
                                            <div class="countdown__content">
                                                <div><span class="countdown__value">00</span><span
                                                        class="countdown__key">Hours</span></div>
                                            </div>
                                            <div class="countdown__content">
                                                <div><span class="countdown__value">00</span><span
                                                        class="countdown__key">Mins</span></div>
                                            </div>
                                            <div class="countdown__content">
                                                <div><span class="countdown__value">00</span><span
                                                        class="countdown__key">Secs</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bg__wrap">
                                        <div class="banner-bg__text-1">

                                            <span class="u-c-white">Global</span>

                                            <span class="u-c-secondary">Offers</span>
                                        </div>
                                        <div class="banner-bg__text-2">

                                            <span class="u-c-secondary">Official Launch</span>

                                            <span class="u-c-white">Don't Miss!</span>
                                        </div>

                                        <span class="banner-bg__text-block banner-bg__text-3 u-c-secondary">Enjoy Free
                                            Shipping when you buy 2 items and above!</span>

                                        <a class="banner-bg__shop-now btn--e-secondary"
                                            href="shop-side-version-2.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>
                <!--====== End - Section 5 ======-->


                <livewire:home-product-with-brands />
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

                                            <span class="service__info-text-2">Free shipping on all US order or order
                                                above $200</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                    <div class="service u-h-100">
                                        <div class="service__icon"><i class="fas fa-redo"></i></div>
                                        <div class="service__info-wrap">

                                            <span class="service__info-text-1">Shop with Confidence</span>

                                            <span class="service__info-text-2">Our Protection covers your purchase from
                                                click to delivery</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                    <div class="service u-h-100">
                                        <div class="service__icon"><i class="fas fa-headphones-alt"></i></div>
                                        <div class="service__info-wrap">

                                            <span class="service__info-text-1">24/7 Help Center</span>

                                            <span class="service__info-text-2">Round-the-clock assistance for a smooth
                                                shopping experience</span>
                                        </div>
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

                    <!--====== End - Section Intro ======-->


                    <!--====== Section Content ======-->

                    <!--====== End - Section Content ======-->
                </div>
                <!--====== End - Section 10 ======-->


                <!--====== Section 11 ======-->
                <livewire:client-feed-back>
                    {{-- </livewire:> --}}
                    <!--====== End - Section 11 ======-->


                    <!--====== Section 12 ======-->
                    <div class="u-s-p-b-60">

                        <!--====== Section Content ======-->
                        <div class="section__content">
                            <div class="container">

                                <!--====== Brand Slider ======-->
                                <div>
                                    <div class="owl-carousel owl-loaded owl-drag" id="brand-slider" data-item="5">






                                        <div class="owl-stage-outer">
                                            <div class="owl-stage"
                                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3060px;">
                                                <div class="owl-item active" style="width: 510px;">
                                                    <div class="brand-slide">

                                                        <a href="shop-side-version-2.html">

                                                            <img src="images/brand/b1.png" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 510px;">
                                                    <div class="brand-slide">

                                                        <a href="shop-side-version-2.html">

                                                            <img src="images/brand/b2.png" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 510px;">
                                                    <div class="brand-slide">

                                                        <a href="shop-side-version-2.html">

                                                            <img src="images/brand/b3.png" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 510px;">
                                                    <div class="brand-slide">

                                                        <a href="shop-side-version-2.html">

                                                            <img src="images/brand/b4.png" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 510px;">
                                                    <div class="brand-slide">

                                                        <a href="shop-side-version-2.html">

                                                            <img src="images/brand/b5.png" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 510px;">
                                                    <div class="brand-slide">

                                                        <a href="shop-side-version-2.html">

                                                            <img src="images/brand/b6.png" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-nav">
                                            <div class="b-prev"><i class="fas fa-angle-left"></i></div>
                                            <div class="b-next"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                        <div class="owl-dots disabled"></div>
                                    </div>
                                </div>
                                <!--====== End - Brand Slider ======-->
                            </div>
                        </div>
                        <!--====== End - Section Content ======-->
                    </div>
                    <!--====== End - Section 12 ======-->
</div>
@endsection
