<div class="mini-product-container gl-scroll u-s-m-b-15">
    @forelse (Cart::content() as $Product)
    <div class="card-mini-product">
        <div class="mini-product">
            <div class="mini-product__image-wrapper">

                <a class="mini-product__link" href="product-detail.html">

                    <img class="u-img-fluid" src="{{ $Product->model->image }}" alt=""></a></div>
            <div class="mini-product__info-wrapper">

                <span class="mini-product__category">

                    <a href="shop-side-version-2.html">{{ $Product->model->category->name }}</a></span>

                <span class="mini-product__name">

                    <a href="product-detail.html">{{ $Product->name }}</a></span>

                <span class="mini-product__quantity">{{ $Product->qty }} x</span>

                <span class="mini-product__price">{{ $Product->price }}</span></div>
        </div>

        <a class="mini-product__delete-link far fa-trash-alt"></a>
    </div>
    @empty
    Cart is empty right now
    @endforelse
</div>
