<div>
    <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-grey">
        <div class="owl-carousel primary-style-1 owl-loaded owl-drag" id="hero-slider">
            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(-3000px, 0px, 0px); transition: all 1.5s ease 0s; width: 5250px;">
                    @if(count($Sliders) > 0)
                    @foreach ( $Sliders as $Slider )
                    <div class="owl-item cloned" style="width: 751px; margin-right: -1px;">
                        <div class="hero-slide hero-slide--{{ $Slider->id }}"
                            style=" background-image:url({{ $Slider->image }});">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider-content slider-content--animation">
                                            <span class="content-span-1 u-c-white">{{ $Slider->name }}</span>
                                            <span class="content-span-2 u-c-white">{{ $Slider->short_description
                                                }}</span>
                                            <span class="content-span-3 u-c-white">{{ $Slider->description }}</span>
                                            <span class="content-span-4 u-c-white">Starting At
                                                <span class="u-c-brand">{{ '$' . $Slider->regular_price}}</span></span>
                                            <a class="shop-now-link btn--e-brand" href="{{ route('products') }}">SHOP
                                                NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif

                </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                        aria-label="Previous">‹</span></button><button type="button" role="presentation"
                    class="owl-next"><span aria-label="Next">›</span></button></div>
            <div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button><button
                    role="button" class="owl-dot"><span></span></button><button role="button"
                    class="owl-dot"><span></span></button></div>
        </div>
    </div>
</div>
