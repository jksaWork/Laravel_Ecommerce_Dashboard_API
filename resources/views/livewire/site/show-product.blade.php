{{-- @section('content') --}}
<div class="u-s-p-t-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">


                <!--====== Product Breadcrumb ======-->
                <div class="pd-breadcrumb u-s-m-b-30">
                    <ul class="pd-breadcrumb__list">
                        <li class="has-separator">
                            <a href="index.hml">Home</a>
                        </li>
                        <li class="has-separator">
                            <a href="shop-side-version-2.html">{{ $Product->Category->name }}</a>
                        </li>
                        <li class="is-marked">
                            <a href="shop-side-version-2.html">{{ $Product->name }}</a>
                        </li>
                    </ul>
                </div>
                <!--====== End - Product Breadcrumb ======-->


                <!--====== Product Detail Zoom ======-->
                <div class="pd u-s-m-b-30">
                    <div class="pd-wrap">
                        <div id="pd-o-initiate" class="slick-initialized slick-slider">
                            <div class="slick-list draggable">
                                <div class="slick-track" style="opacity: 1; width: 3450px;">
                                    <div class="pd-o-img-wrap slick-slide slick-current slick-active"
                                        data-src="images/product/product-d-1.jpg" data-slick-index="0"
                                        aria-hidden="false"
                                        style="width: 690px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"
                                        tabindex="0">

                                        <img class="u-img-fluid" src="{{ $Product->image }}"
                                            data-zoom-image="{{ $Product->image }}" alt="">
                                    </div>
                                    <div class="pd-o-img-wrap slick-slide" data-src="images/product/product-d-2.jpg"
                                        data-slick-index="1" aria-hidden="true"
                                        style="width: 690px; position: relative; left: -690px; top: 0px; z-index: 998; opacity: 0;"
                                        tabindex="-1">

                                        <img class="u-img-fluid" src="images/product/product-d-2.jpg"
                                            data-zoom-image="images/product/product-d-2.jpg" alt="">
                                    </div>
                                    <div class="pd-o-img-wrap slick-slide" data-src="images/product/product-d-3.jpg"
                                        data-slick-index="2" aria-hidden="true"
                                        style="width: 690px; position: relative; left: -1380px; top: 0px; z-index: 998; opacity: 0;"
                                        tabindex="-1">

                                        <img class="u-img-fluid" src="images/product/product-d-3.jpg"
                                            data-zoom-image="images/product/product-d-3.jpg" alt="">
                                    </div>
                                    <div class="pd-o-img-wrap slick-slide" data-src="images/product/product-d-4.jpg"
                                        data-slick-index="3" aria-hidden="true"
                                        style="width: 690px; position: relative; left: -2070px; top: 0px; z-index: 998; opacity: 0;"
                                        tabindex="-1">

                                        <img class="u-img-fluid" src="images/product/product-d-4.jpg"
                                            data-zoom-image="images/product/product-d-4.jpg" alt="">
                                    </div>
                                    <div class="pd-o-img-wrap slick-slide" data-src="images/product/product-d-5.jpg"
                                        data-slick-index="4" aria-hidden="true"
                                        style="width: 690px; position: relative; left: -2760px; top: 0px; z-index: 998; opacity: 0;"
                                        tabindex="-1">

                                        <img class="u-img-fluid" src="images/product/product-d-5.jpg"
                                            data-zoom-image="images/product/product-d-5.jpg" alt="">
                                    </div>
                                </div>
                            </div>




                        </div>

                        <span class="pd-text">Click for larger zoom</span>
                    </div>
                </div>
                <!--====== End - Product Detail Zoom ======-->
            </div>
            <div class="col-lg-7">

                <!--====== Product Right Side Details ======-->
                <div class="pd-detail">
                    <div>

                        <span class="pd-detail__name">{{ $Product->name }}</span>
                    </div>
                    <div>
                        <div class="pd-detail__inline">

                            <span class="pd-detail__price">{{ '$' . $Product->sale_price }}</span>

                            <span class="pd-detail__discount">(76% OFF)</span><del class="pd-detail__del">$28.97</del>
                        </div>
                    </div>
                    <div class="u-s-m-b-15">
                        <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star-half-alt"></i>

                            <span class="pd-detail__review u-s-m-l-4">

                                <a data-click-scroll="#view-review">{{ $Product->Reviews->count() }} Reviews</a></span>
                        </div>
                    </div>
                    <div class="u-s-m-b-15">
                        <div class="pd-detail__inline">
                            <span class="pd-detail__stock">{{ $Product->quantity }} in stock</span>
                            {{-- <span class="pd-detail__left">Only 2 left</span> --}}
                        </div>
                    </div>
                    <div class="u-s-m-b-15">
                        <span class="pd-detail__preview-desc">{{ $Product->description }}</span>
                    </div>
                    <div class="u-s-m-b-15">
                        <div class="pd-detail__inline">
                            <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>
                                <a href="#" wire:click='AddToWithList({{ $Product }})'>Add to Wishlist</a>

                                <span class="pd-detail__click-count">(222)</span></span>
                        </div>
                    </div>
                    <div class="u-s-m-b-15">

                    </div>
                    <div class="u-s-m-b-15">
                        <ul class="pd-social-list">
                            <li>

                                <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>

                                <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>

                                <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>

                                <a class="s-wa--color-hover" href="#"><i class="fab fa-whatsapp"></i></a>
                            </li>
                            <li>

                                <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="u-s-m-b-15">
                        <form class="pd-detail__form" >
                            <div class="pd-detail-inline-2">
                                <div class="u-s-m-b-15">
                                    <!--====== Input Counter ======-->
                                    <div class="input-counter">
                                        <span class="input-counter__minus fas fa-minus"></span>
                                        <input class="input-counter__text input-counter--text-primary-style" type="text" wire:model='quantity'
                                            data-min="1" data-max="1000">
                                        <span class="input-counter__plus fas fa-plus"></span>
                                    </div>
                                    <!--====== End - Input Counter ======-->
                                </div>
                                <div class="u-s-m-b-15">
                                    <button class="btn btn--e-brand-b-2" wire:click.prevent="AddToCart({{ $Product }})">Add to Cart</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="u-s-m-b-15">

                        <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                        <ul class="pd-detail__policy-list">
                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                <span>Buyer Protection.</span>
                            </li>
                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                <span>Full Refund if you don't receive your order.</span>
                            </li>
                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                <span>Returns accepted if product not as described.</span>
                            </li>
                        </ul>
                    </div>

                </div>
                <!--====== End - Product Right Side Details ======-->
            </div>
            <div class="col-lg-12">
                <div class="pd-tab">
                    <div class="u-s-m-b-30">
                        <ul class="nav pd-tab__list">
                            <li class="nav-item">
                                <a class="nav-link  show" data-toggle="tab" href="#pd-desc">DESCRIPTION</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active show" id="view-review" data-toggle="tab" href="#pd-rev">REVIEWS
                                    <span>({{$Product->Reviews->count()}})</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">

                        <!--====== Tab 1 ======-->
                        <div class="tab-pane fade  show" id="pd-desc">
                            <div class="pd-tab__desc">
                                <div class="u-s-m-b-15">
                                    <p>{{ $Product->description }}</p>
                                </div>
                                <div class="u-s-m-b-30">
                                </div>
                            </div>
                        </div>
                        <!--====== Tab 2 ======-->
                        <!--====== End - Tab 2 ======-->
                        <!--====== Tab 3 ======-->
                        <div class="tab-pane show active" id="pd-rev">
                            <div class="pd-tab__rev">
                                <div class="u-s-m-b-30">
                                    <div class="pd-tab__rev-score">
                                        <div class="u-s-m-b-8">
                                            <h2>{{ $Product->Reviews->count() }} Reviews -
                                                @php
                                                    $rating = 0;
                                                    foreach($Product->Reviews as $rev){
                                                        $rating+= $rev->review;
                                                    }
                                                    try {
                                                        echo floor($rating / $Product->Reviews->count() );
                                                    } catch (\Throwable $th) {
                                                        echo 0;
                                                    }
                                                @endphp

                                                (Overall)</h2>
                                        </div>
                                        <div class="gl-rating-style-2 u-s-m-b-8"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                                        <div class="u-s-m-b-8">
                                            <h4>We want to hear from you!</h4>
                                        </div>

                                        <span class="gl-text">Tell us what you think about this item</span>
                                    </div>
                                </div>
                                <div class="u-s-m-b-30">
                                    <form class="pd-tab__rev-f1">
                                        <div class="rev-f1__group">
                                            <div class="u-s-m-b-15">
                                                <h2>23 Review(s) for Man Ruched Floral Applique Tee</h2>
                                            </div>
                                            <div class="u-s-m-b-15">

                                                <label for="sort-review"></label><select
                                                    class="select-box select-box--primary-style" id="sort-review">
                                                    <option selected="">Sort by: Best Rating</option>
                                                    <option>Sort by: Worst Rating</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="rev-f1__review">
                                            @foreach ($Product->Reviews as $review)


                                            <div class="review-o u-s-m-b-15">
                                                <div class="review-o__info u-s-m-b-8">
                                                    <span class="review-o__name">{{ $review->customer_name }}</span>
                                                    <span class="review-o__date">{{ $review->created_at->format('Y-M-D H:I:S') }}</span>
                                                </div>
                                                <div class="review-o__rating gl-rating-style u-s-m-b-8">
                                                    @for ($i = 0 ; $i < floor($review->review );  $i++)
                                                    <i
                                                    class="fas fa-star"></i>
                                                    @endfor
                                                    <span>({{ $review->review }})</span>
                                                </div>
                                                <p class="review-o__text">{{ $review->commint }}.</p>
                                            </div>
                                            @endforeach
                                        </div>
                                    </form>
                                    {{-- @endif --}}
                                </div>
                                <div class="u-s-m-b-30">
                                    <form class="pd-tab__rev-f2">
                                        <h2 class="u-s-m-b-15">Add a Review </h2>
                                        @if(!session()->has('review_id_' . $Product->id))
                                        <span class="gl-text u-s-m-b-15">Your email address will not be published.
                                            Required fields are marked *</span>
                                        <div class="u-s-m-b-30">
                                            <div class="rev-f2__table-wrap gl-scroll">
                                                <table class="rev-f2__table">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i
                                                                        class="fas fa-star"></i>
                                                                    <span>(1)</span>
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star-half-alt"></i>

                                                                    <span>(1.5)</span>
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i>

                                                                    <span>(2)</span>
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star-half-alt"></i>

                                                                    <span>(2.5)</span>
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i>

                                                                    <span>(3)</span>
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star-half-alt"></i>

                                                                    <span>(3.5)</span>
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i>

                                                                    <span>(4)</span>
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star-half-alt"></i>

                                                                    <span>(4.5)</span>
                                                                </div>
                                                            </th>
                                                            <th>
                                                                <div class="gl-rating-style-2"><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i><i
                                                                        class="fas fa-star"></i>
                                                                    <span>(5)</span>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">
                                                                    <input type="radio"  wire:model.defer='rating_stars'  value='1' id="star-1" name="rating">
                                                                    <div
                                                                        class="radio-box__state radio-box__state--primary">
                                                                        <label class="radio-box__label"
                                                                            for="star-1"></label>
                                                                    </div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                            <td>
                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">
                                                                    <input type="radio"  wire:model.defer='rating_stars'  value='1.5'  id="star-1.5" name="rating">
                                                                    <div
                                                                        class="radio-box__state radio-box__state--primary">
                                                                        <label class="radio-box__label"
                                                                            for="star-1.5"></label>
                                                                    </div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                            <td>
                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">
                                                                    <input type="radio"
                                                                    wire:model.defer='rating_stars'  value='2'
                                                                    id="star-2" name="rating">
                                                                    <div
                                                                        class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label"
                                                                            for="star-2"></label>
                                                                    </div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                            <td>

                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">

                                                                    <input type="radio" id="star-2.5"
                                                                    wire:model.defer='rating_stars'  value='2.5'
                                                                    name="rating">
                                                                    <div
                                                                        class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label"
                                                                            for="star-2.5"></label>
                                                                    </div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                            <td>

                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">

                                                                    <input type="radio"
                                                                    wire:model.defer='rating_stars'  value='3'
                                                                    id="star-3" name="rating">
                                                                    <div
                                                                        class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label"

                                                                            for="star-3"></label>
                                                                    </div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                            <td>

                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">

                                                                    <input type="radio"
                                                                    wire:model.defer='rating_stars'  value='3.5'
                                                                    id="star-3.5" name="rating">
                                                                    <div
                                                                        class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label"
                                                                            for="star-3.5"></label>
                                                                    </div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                            <td>

                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">

                                                                    <input type="radio"
                                                                    wire:model.defer='rating_stars'  value='4'
                                                                    id="star-4" name="rating">
                                                                    <div
                                                                        class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label"
                                                                            for="star-4"></label>
                                                                    </div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                            <td>

                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">

                                                                    <input type="radio" id="star-4.5"
                                                                    wire:model.defer='rating_stars'  value='4.5'
                                                                    name="rating">
                                                                    <div
                                                                        class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label"
                                                                            for="star-4.5"></label>
                                                                    </div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                            <td>

                                                                <!--====== Radio Box ======-->
                                                                <div class="radio-box">

                                                                    <input type="radio" id="star-5"
                                                                    wire:model.defer='rating_stars'  value='5'
                                                                    name="rating">
                                                                    <div
                                                                        class="radio-box__state radio-box__state--primary">

                                                                        <label class="radio-box__label"
                                                                            for="star-5"></label>
                                                                    </div>
                                                                </div>
                                                                <!--====== End - Radio Box ======-->
                                                            </td>
                                                        </tr>
                                                        @error('rating_stars')
                                                            <h5 class="text-danger">{{ $message }}</h5>
                                                        @enderror
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="rev-f2__group">
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="reviewer-text">YOUR REVIEW
                                                    *</label><textarea class="text-area text-area--primary-style"
                                                    wire:model.lazy='commint'
                                                    id="reviewer-text"></textarea>
                                            </div>
                                            <div>
                                                <p class="u-s-m-b-30">
                                                    <label class="gl-label" for="reviewer-name">NAME *</label>
                                                    <input wire:model.defer='name' class="input-text input-text--primary-style" type="text"
                                                        id="reviewer-name">
                                                </p>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn--e-brand-shadow" type="button" wire:click='RatingProduct()'>SUBMIT</button>
                                        </div>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--====== End - Tab 3 ======-->
                    </div>

                    <div class="u-s-p-b-90">
                        <!--====== Section Intro ======-->
                        <div class="section__intro u-s-m-b-46">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section__text-wrap">
                                            <h1 class="section__heading u-c-secondary u-s-m-b-12">CUSTOMER ALSO VIEWED
                                            </h1>

                                            <span class="section__span u-c-grey">PRODUCTS THAT CUSTOMER VIEWED</span>
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
                                    <div class="owl-carousel product-slider owl-loaded owl-drag" data-item="4">

                                        <div class="owl-stage-outer">
                                            <div class="owl-stage"
                                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1665px;">
                                            @foreach ($Products as $product )
                                            <div class="owl-item active" style="width: 277.5px;">
                                                <div class="u-s-m-b-30">
                                                    <div class="product-o product-o--hover-on">
                                                        <div class="product-o__wrap">
                                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                                href="product-detail.html">
                                                                <img class="aspect__img"
                                                                    src="{{ $product->image }}"
                                                                    alt=""></a>

                                                            <div class="product-o__action-wrap">
                                                                <ul class="product-o__action-list">
                                                                    <li>
                                                                        <a data-modal="modal"
                                                                            data-modal-id="#add-to-cart"
                                                                            data-tooltip="tooltip"
                                                                            data-placement="top" title=""
                                                                            data-original-title="Add to Cart"><i
                                                                                class="fas fa-plus-circle"></i></a>
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
                                                            <a
                                                                href="shop-side-version-2.html">{{ $product->Category->name }}</a></span>
                                                        <span class="product-o__name">
                                                            <a href="{{ route('show.product' , $product->slug) }}">{{ $product->name }}</a></span>
                                                        <div class="product-o__rating gl-rating-style"><i
                                                                class="fas fa-star"></i><i
                                                                class="fas fa-star"></i><i
                                                                class="fas fa-star"></i><i
                                                                class="fas fa-star"></i><i class="fas fa-star"></i>
                                                            <span class="product-o__review">(20)</span>
                                                        </div>
                                                        <span class="product-o__price">$125.00
                                                            <span class="product-o__discount">$160.00</span></span>
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
            </div>
        </div>
    </div>

</div>
{{-- @endsection --}}
@section('scripts')
    <script>
        // alert('jksa altignai osamn');
    </script>
@endsection
