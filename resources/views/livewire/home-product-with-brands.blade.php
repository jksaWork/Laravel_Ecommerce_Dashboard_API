<div>
    <div class="u-s-p-y-60">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-46">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">BRANDS PRODUCTS</h1>

                            <span class="section__span u-c-silver">FIND NEW FEATURED PRODUCTS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->
        <!--====== Section Content ======-->
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 6 ======-->


    <!--====== Section 7 ======-->

    <!--====== End - Section 7 ======-->


    <!--====== Section 8 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">

            <div class="container">
                <div class="row">
                    @foreach ($brands as $brand )
                    <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                        <div class="column-product">

                            <span class="column-product__title u-c-secondary u-s-m-b-25">{{ $brand->name }}
                                PRODUCTS</span>
                            <ul class="column-product__list">
                                @foreach ($brand->products as $key => $product )
                                @if ($key > 2)
                                    @break
                                @endif
                                <li class="column-product__item">
                                    <div class="product-l">
                                        <div class="product-l__img-wrap">
                                            <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link"
                                                href="{{ route('show.product', $product->slug) }}">

                                                <img class="aspect__img" src="{{ $product->image }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="product-l__info-wrap">

                                            <span class="product-l__category">

                                                <a href="{{ route('show.product', $product->Category->id) }}">{{ $product->Category->name }}</a></span>

                                            <span class="product-l__name">

                                                <a href="{{ route('show.product', $product->slug) }}">{{ $product->name }}</a></span>

                                            <span class="product-l__price">${{ $product->sale_price }}</span>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 8 ======-->
</div>
-
