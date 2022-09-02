<div>
    <div class="u-s-p-y-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="shop-w-master">
                        <h1 class="shop-w-master__heading u-s-m-b-30"><i class="fas fa-filter u-s-m-r-8"></i>
                            <span>FILTERS</span>
                        </h1>
                        <div class="shop-w-master__sidebar sidebar--bg-snow">
                            <div class="u-s-m-b-30">
                                <div class="shop-w">
                                    <div class="shop-w__intro-wrap">
                                        <h1 class="shop-w__h">CATEGORY</h1>

                                        <span class="fas fa-minus shop-w__toggle" data-target="#s-category"
                                            data-toggle="collapse"></span>
                                    </div>
                                    <div class="shop-w__wrap collapse show" id="s-category">
                                        <ul class="shop-w__category-list gl-scroll">
                                            @foreach ($Categories as $Category )

                                            <li class=" {{ $Category->IsParent() ? " has-list" : "" }}">

                                                <a href="#">{{ $Category->name }}</a>
                                                <span class="category-list__text u-s-m-l-6">(
                                                    {{ $Category->IsParent() ?$Category->Childs->count(): "-" }}
                                                    )</span>
                                                <span
                                                    class="js-shop-category-span is-expanded fas fa-plus u-s-m-l-6"></span>
                                                @if ($Category->IsParent())
                                                <ul style="display:block">
                                                        @foreach ($Category->Childs as  $child)
                                                        <li>
                                                            <a href="#">{{ $child->name }}</a>
                                                        </li>
                                                        @endforeach
                                                </ul>
                                                @endif
                                            </li>


                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="shop-w">
                                    <div class="shop-w__intro-wrap">
                                        <h1 class="shop-w__h">RATING</h1>

                                        <span class="fas fa-minus shop-w__toggle" data-target="#s-rating"
                                            data-toggle="collapse"></span>
                                    </div>
                                    <div class="shop-w__wrap collapse show" id="s-rating">
                                        <ul class="shop-w__list gl-scroll">
                                            <li>
                                                <div class="rating__check">

                                                    <input type="checkbox">
                                                    <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                                </div>

                                                <span class="shop-w__total-text">(2)</span>
                                            </li>
                                            <li>
                                                <div class="rating__check">

                                                    <input type="checkbox">
                                                    <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="far fa-star"></i>

                                                        <span>&amp; Up</span>
                                                    </div>
                                                </div>

                                                <span class="shop-w__total-text">(8)</span>
                                            </li>
                                            <li>
                                                <div class="rating__check">

                                                    <input type="checkbox">
                                                    <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span>&amp; Up</span>
                                                    </div>
                                                </div>

                                                <span class="shop-w__total-text">(10)</span>
                                            </li>
                                            <li>
                                                <div class="rating__check">

                                                    <input type="checkbox">
                                                    <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i class="far fa-star"></i><i
                                                            class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span>&amp; Up</span>
                                                    </div>
                                                </div>

                                                <span class="shop-w__total-text">(12)</span>
                                            </li>
                                            <li>
                                                <div class="rating__check">

                                                    <input type="checkbox">
                                                    <div class="rating__check-star-wrap"><i class="fas fa-star"></i><i
                                                            class="far fa-star"></i><i class="far fa-star"></i><i
                                                            class="far fa-star"></i><i class="far fa-star"></i>

                                                        <span>&amp; Up</span>
                                                    </div>
                                                </div>

                                                <span class="shop-w__total-text">(1)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="shop-w">
                                    <div class="shop-w__intro-wrap">
                                        <h1 class="shop-w__h">SHIPPING</h1>

                                        <span class="fas fa-minus shop-w__toggle" data-target="#s-shipping"
                                            data-toggle="collapse"></span>
                                    </div>
                                    <div class="shop-w__wrap collapse show" id="s-shipping">
                                        <ul class="shop-w__list gl-scroll">
                                            <li>

                                                <!--====== Check Box ======-->
                                                <div class="check-box">

                                                    <input type="checkbox" id="free-shipping">
                                                    <div class="check-box__state check-box__state--primary">

                                                        <label class="check-box__label" for="free-shipping">Free
                                                            Shipping</label>
                                                    </div>
                                                </div>
                                                <!--====== End - Check Box ======-->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="shop-w">
                                    <div class="shop-w__intro-wrap">
                                        <h1 class="shop-w__h">PRICE</h1>

                                        <span class="fas fa-minus shop-w__toggle" data-target="#s-price"
                                            data-toggle="collapse"></span>
                                    </div>
                                    <div class="shop-w__wrap collapse show" id="s-price">
                                        <form class="shop-w__form-p">
                                            <div class="shop-w__form-p-wrap">
                                                <div>

                                                    <label for="price-min"></label>

                                                    <input class="input-text input-text--primary-style" type="text"
                                                        id="price-min" placeholder="Min">
                                                </div>
                                                <div>

                                                    <label for="price-max"></label>

                                                    <input class="input-text input-text--primary-style" type="text"
                                                        id="price-max" placeholder="Max">
                                                </div>
                                                <div>

                                                    <button
                                                        class="btn btn--icon fas fa-angle-right btn--e-transparent-platinum-b-2"
                                                        type="submit"></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="shop-w">
                                    <div class="shop-w__intro-wrap">
                                        <h1 class="shop-w__h">MANUFACTURER</h1>

                                        <span class="fas fa-minus shop-w__toggle" data-target="#s-manufacturer"
                                            data-toggle="collapse"></span>
                                    </div>
                                    <div class="shop-w__wrap collapse show" id="s-manufacturer">
                                        <ul class="shop-w__list-2">
                                            <li>
                                                <div class="list__content">

                                                    <input type="checkbox" checked="">

                                                    <span>Calvin Klein</span>
                                                </div>

                                                <span class="shop-w__total-text">(23)</span>
                                            </li>
                                            <li>
                                                <div class="list__content">

                                                    <input type="checkbox">

                                                    <span>Diesel</span>
                                                </div>

                                                <span class="shop-w__total-text">(2)</span>
                                            </li>
                                            <li>
                                                <div class="list__content">

                                                    <input type="checkbox">

                                                    <span>Polo</span>
                                                </div>

                                                <span class="shop-w__total-text">(2)</span>
                                            </li>
                                            <li>
                                                <div class="list__content">

                                                    <input type="checkbox">

                                                    <span>Tommy Hilfiger</span>
                                                </div>

                                                <span class="shop-w__total-text">(9)</span>
                                            </li>
                                            <li>
                                                <div class="list__content">

                                                    <input type="checkbox">

                                                    <span>Ndoge</span>
                                                </div>

                                                <span class="shop-w__total-text">(3)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="shop-w">
                                    <div class="shop-w__intro-wrap">
                                        <h1 class="shop-w__h">COLOR</h1>

                                        <span class="fas fa-minus shop-w__toggle" data-target="#s-color"
                                            data-toggle="collapse"></span>
                                    </div>
                                    <div class="shop-w__wrap collapse show" id="s-color">
                                        <ul class="shop-w__list gl-scroll">
                                            <li>
                                                <div class="color__check">

                                                    <input type="checkbox" id="jet">

                                                    <label class="color__check-label" for="jet"
                                                        style="background-color: #333333"></label>
                                                </div>

                                                <span class="shop-w__total-text">(2)</span>
                                            </li>
                                            <li>
                                                <div class="color__check">

                                                    <input type="checkbox" id="folly">

                                                    <label class="color__check-label" for="folly"
                                                        style="background-color: #FF0055"></label>
                                                </div>

                                                <span class="shop-w__total-text">(4)</span>
                                            </li>
                                            <li>
                                                <div class="color__check">

                                                    <input type="checkbox" id="yellow">

                                                    <label class="color__check-label" for="yellow"
                                                        style="background-color: #FFFF00"></label>
                                                </div>

                                                <span class="shop-w__total-text">(6)</span>
                                            </li>
                                            <li>
                                                <div class="color__check">

                                                    <input type="checkbox" id="granite-gray">

                                                    <label class="color__check-label" for="granite-gray"
                                                        style="background-color: #605F5E"></label>
                                                </div>

                                                <span class="shop-w__total-text">(8)</span>
                                            </li>
                                            <li>
                                                <div class="color__check">

                                                    <input type="checkbox" id="space-cadet">

                                                    <label class="color__check-label" for="space-cadet"
                                                        style="background-color: #1D3461"></label>
                                                </div>

                                                <span class="shop-w__total-text">(10)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <div class="shop-w">
                                    <div class="shop-w__intro-wrap">
                                        <h1 class="shop-w__h">SIZE</h1>

                                        <span class="fas fa-minus collapsed shop-w__toggle" data-target="#s-size"
                                            data-toggle="collapse"></span>
                                    </div>
                                    <div class="shop-w__wrap collapse" id="s-size">
                                        <ul class="shop-w__list gl-scroll">
                                            <li>

                                                <!--====== Check Box ======-->
                                                <div class="check-box">

                                                    <input type="checkbox" id="xs">
                                                    <div class="check-box__state check-box__state--primary">

                                                        <label class="check-box__label" for="xs">XS</label>
                                                    </div>
                                                </div>
                                                <!--====== End - Check Box ======-->

                                                <span class="shop-w__total-text">(2)</span>
                                            </li>
                                            <li>

                                                <!--====== Check Box ======-->
                                                <div class="check-box">

                                                    <input type="checkbox" id="small">
                                                    <div class="check-box__state check-box__state--primary">

                                                        <label class="check-box__label" for="small">Small</label>
                                                    </div>
                                                </div>
                                                <!--====== End - Check Box ======-->

                                                <span class="shop-w__total-text">(4)</span>
                                            </li>
                                            <li>

                                                <!--====== Check Box ======-->
                                                <div class="check-box">

                                                    <input type="checkbox" id="medium">
                                                    <div class="check-box__state check-box__state--primary">

                                                        <label class="check-box__label" for="medium">Medium</label>
                                                    </div>
                                                </div>
                                                <!--====== End - Check Box ======-->

                                                <span class="shop-w__total-text">(6)</span>
                                            </li>
                                            <li>

                                                <!--====== Check Box ======-->
                                                <div class="check-box">

                                                    <input type="checkbox" id="large">
                                                    <div class="check-box__state check-box__state--primary">

                                                        <label class="check-box__label" for="large">Large</label>
                                                    </div>
                                                </div>
                                                <!--====== End - Check Box ======-->

                                                <span class="shop-w__total-text">(8)</span>
                                            </li>
                                            <li>

                                                <!--====== Check Box ======-->
                                                <div class="check-box">

                                                    <input type="checkbox" id="xl">
                                                    <div class="check-box__state check-box__state--primary">

                                                        <label class="check-box__label" for="xl">XL</label>
                                                    </div>
                                                </div>
                                                <!--====== End - Check Box ======-->

                                                <span class="shop-w__total-text">(10)</span>
                                            </li>
                                            <li>

                                                <!--====== Check Box ======-->
                                                <div class="check-box">

                                                    <input type="checkbox" id="xxl">
                                                    <div class="check-box__state check-box__state--primary">

                                                        <label class="check-box__label" for="xxl">XXL</label>
                                                    </div>
                                                </div>
                                                <!--====== End - Check Box ======-->

                                                <span class="shop-w__total-text">(12)</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="shop-p">
                        @if ($search != null)
                        <div class="shop-p__toolbar u-s-m-b-30">
                            <div class="shop-p__meta-wrap u-s-m-b-60">
                                <span class="shop-p__meta-text-1">FOUND {{ $products->count() ?? null }} RESULTS</span>
                                <div class="shop-p__meta-text-2">
                                    <span>Related Searches:</span>
                                    <a class="gl-tag btn--e-brand-shadow" href="#">men's clothing</a>

                                    <a class="gl-tag btn--e-brand-shadow" href="#">mobiles &amp; tablets</a>

                                    <a class="gl-tag btn--e-brand-shadow" href="#">books &amp; audible</a>
                                </div>
                            </div>
                            <div class="shop-p__tool-style">
                                <div class="tool-style__group u-s-m-b-8">
                                    <span class="js-shop-grid-target is-active">Grid</span>
                                    <span class="js-shop-list-target">List</span>
                                </div>
                                <form>
                                    <div class="tool-style__form-wrap">
                                        <div class="u-s-m-b-8">
                                            <select class="select-box select-box--transparent-b-2"
                                                wire:model='PaginateZise'>
                                                <option value="8">Show: 8</option>
                                                <option value='12' selected>Show: 12</option>
                                                <option value="16">Show: 16</option>
                                                <option value="28">Show: 28</option>
                                            </select>
                                        </div>
                                        <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2"
                                                wire:model='SortBy'>
                                                <option value="items" selected="">Sort By: Newest Items</option>
                                                <option value="items">Sort By: Latest Items</option>
                                                <option value="selling">Sort By: Best Selling</option>
                                                <option value="rating">Sort By: Best Rating</option>
                                                <option value="price">Sort By: Lowest Price</option>
                                            </select></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @endif
                        <div class="shop-p__collection">
                            <div class="row is-grid-active">
                                @foreach ($products as $product)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product-m">
                                        <div class="product-m__thumb">
                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                href="{{ route('show.product' , $product->slug) }}">

                                                <img class="aspect__img" src="{{ $product->image }}" alt=""></a>
                                            <div class="product-m__quick-look">

                                                <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look"
                                                    data-tooltip="tooltip" data-placement="top" title=""
                                                    data-original-title="Quick Look"></a>
                                            </div>
                                            <div class="product-m__add-cart">
                                                <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart"
                                                    wire:click.prevent='AddToCart({{ $product }})'>Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="product-m__content">
                                            <div class="product-m__category">
                                                <a href="shop-side-version-2.html">{{ $product->Category->name }}</a>
                                            </div>
                                            <div class="product-m__name">

                                                <a href="product-detail.html">{{ $product->name }}</a>
                                            </div>
                                            <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i
                                                    class="far fa-star"></i><i class="far fa-star"></i>

                                                <span class="product-m__review">(23)</span>
                                            </div>
                                            <div class="product-m__price">{{ $product->short_description }}</div>
                                            <div class="product-m__hover">
                                                <div class="product-m__preview-description">
                                                    <span>{{ $product->description }}</span>
                                                </div>
                                                <div class="product-m__wishlist">

                                                    <a class="far fa-heart" href="#" data-tooltip="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Add to Wishlist"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- {{ $products->links() }} --}}
                        {!! $products->links('vendor.Custom.Pagiantion') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
