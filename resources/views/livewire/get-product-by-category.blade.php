<div>
    <div wire:ignore.self class="section__content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-category-container">
                        @foreach ($Categories as $Category )
                        <div class="filter__category-wrapper">
                            <button class="btn filter__btn filter__btn--style-1 " type="button"
                                wire:click='GetByCategoryId({{ $Category->id }})'>
                                {{ $Category->name }}
                            </button>
                        </div>
                        @endforeach

                    </div>
                    <div class="filter__grid-wrapper u-s-m-t-30" style="position: relative; height: 1804px;">
                        <div wire:ignore.self class="row" >
                            @foreach ($Prodcuts as $Prodcut )
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone"
                                >
                                <div class="product-o product-o--hover-on product-o--radius">
                                    <div class="product-o__wrap">
                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="product-detail.html">
                                            <img class="aspect__img" src="{{ $Prodcut->image }}"
                                                alt=""></a>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>
                                                    <a data-modal="modal" data-modal-id="#quick-look"
                                                        data-tooltip="tooltip" data-placement="top" title=""
                                                        data-original-title="Quick View"><i
                                                            class="fas fa-search-plus"></i></a>
                                                </li>
                                                <li>
                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                        data-tooltip="tooltip" data-placement="top" title=""
                                                        data-original-title="Add to Cart"><i
                                                            class="fas fa-plus-circle"></i></a>
                                                </li>
                                                <li>
                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="" data-original-title="Add to Wishlist"><i
                                                            class="fas fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="signin.html" data-tooltip="tooltip" data-placement="top"
                                                        title="" data-original-title="Email me When the price drops"><i
                                                            class="fas fa-envelope"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="shop-side-version-2.html">{{ $Prodcut->Category->name }}</a></span>
                                    <span class="product-o__name">
                                        <a href="product-detail.html">{{ $Prodcut->name }}</a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                        <span class="product-o__review">({{ random_int(10 ,100) }})</span>
                                    </div>

                                    <span class="product-o__price">{{ $Prodcut->regular_price .' $' }}

                                        <span class="product-o__discount">{{ $Prodcut->sale_price . ' $' }}</span></span>
                                </div>
                            </div>
                            @endforeach
                            {{-- {{ print_r($Prodcuts) }} --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}


</div>
