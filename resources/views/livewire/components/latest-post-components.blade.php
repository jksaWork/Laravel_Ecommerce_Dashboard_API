<div>
    <div class="u-s-p-b-60">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-46">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">NEW ARRIVALS</h1>

                            <span class="section__span u-c-silver">GET UP FOR NEW ARRIVALS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->


        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div>
                    {{-- @dd($Prodcuts) --}}
                    <div class="owl-carousel product-slider owl-loaded owl-drag" data-item="4">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3060px;">
                                @foreach ($Prodcuts as $Prodcut )
                                <div class="owl-item active" style="width: 510px;">
                                    <div class="u-s-m-b-30">
                                        <div class="product-o product-o--hover-on">
                                            <div class="product-o__wrap">
                                                <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                    href="product-detail.html">
                                                    <img class="aspect__img"
                                                        src="{{ $Prodcut->image }}" alt=""></a>
                                                <div class="product-o__action-wrap">
                                                    <ul class="product-o__action-list">
                                                        <li>
                                                            <a data-modal="modal" data-modal-id="#add-to-cart"
                                                                data-tooltip="tooltip" data-placement="top" title=""
                                                                data-original-title="Add to Cart"><i
                                                                    class="fas fa-plus-circle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="signin.html" data-tooltip="tooltip"
                                                                data-placement="top" title=""
                                                                data-original-title="Add to Wishlist"><i
                                                                    class="fas fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <span class="product-o__category">

                                                <a href="{{ route('show.product' , $Prodcut->slug) }}">{{ $Prodcut->name }}</a></span>

                                            <span class="product-o__name">
                                                <a href="{{  route('show.product' , $Prodcut->slug)  }}">{{ $Prodcut->short_descriptions }}</a></span>
                                            <div class="product-o__rating gl-rating-style"><i class="far fa-star"></i><i
                                                    class="far fa-star"></i><i class="far fa-star"></i><i
                                                    class="far fa-star"></i><i class="far fa-star"></i>
                                                <span class="product-o__review">(0)</span>
                                            </div>

                                            <span class="product-o__price">${{ $Prodcut->regular_price }}

                                                <span class="product-o__discount">${{ $Prodcut->sale_price }} </span></span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="owl-nav">
                            <div class="p-prev"><i class="fas fa-long-arrow-alt-left"></i></div>
                            <div class="p-next"><i class="fas fa-long-arrow-alt-right"></i></div>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
</div>
