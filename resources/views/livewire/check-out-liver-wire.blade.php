
<div>
    <style>
        .hide{
            display: none;
        }
        .lds-ellipsis {
          display: inline-block;
          position: relative;
          width: 80px;
          /* height: ; */
        }
        .lds-ellipsis div {
          position: absolute;
          /* top: 5px; */
          width: 13px;
          height: 13px;
          border-radius: 50%;
          background: #fff;
          animation-timing-function: cubic-bezier(0, 1, 1, 0);
        }
        .lds-ellipsis div:nth-child(1) {
          left: 8px;
          animation: lds-ellipsis1 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(2) {
          left: 8px;
          animation: lds-ellipsis2 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(3) {
          left: 32px;
          animation: lds-ellipsis2 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(4) {
          left: 56px;
          animation: lds-ellipsis3 0.6s infinite;
        }
        @keyframes lds-ellipsis1 {
          0% {
            transform: scale(0);
          }
          100% {
            transform: scale(1);
          }
        }
        @keyframes lds-ellipsis3 {
          0% {
            transform: scale(1);
          }
          100% {
            transform: scale(0);
          }
        }
        @keyframes lds-ellipsis2 {
          0% {
            transform: translate(0, 0);
          }
          100% {
            transform: translate(24px, 0);
          }
        }
        </style>
    <!--====== Section 1 ======-->
    <div class="u-s-p-y-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="breadcrumb">
                    <div class="breadcrumb__wrap">
                        <ul class="breadcrumb__list">
                            <li class="has-separator">

                                <a href="index.html">Home</a>
                            </li>
                            <li class="is-marked">

                                <a href="checkout.html">Checkout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section 1 ======-->


    <!--====== Section 2 ======-->


    <!--====== Section 3 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="checkout-f">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 class="checkout-f__h1">DELIVERY INFORMATION</h1>
                            <form class="checkout-f__delivery">
                                <div class="u-s-m-b-30">
                                    <div class="u-s-m-b-15">

                                        <!--====== Check Box ======-->
                                        <div class="check-box">

                                            <input type="checkbox" id="get-address">
                                            <div class="check-box__state check-box__state--primary">

                                                <label class="check-box__label" for="get-address">Use default shipping
                                                    and billing address from account</label>
                                            </div>
                                        </div>
                                        <!--====== End - Check Box ======-->
                                    </div>

                                    <!--====== First Name, Last Name ======-->
                                    <div class="gl-inline">
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-fname">FIRST NAME *</label>

                                            <div>
                                                <input class="input-text input-text--primary-style"
                                                    wire:model='firstname' type="text" id="billing-fname" data-bill="">
                                            </div>
                                        </div> </br>
                                        @error('firstname')
                                        <span class="gl-link">{{ $message }}</span>
                                        @enderror
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-lname">LAST NAME *</label>
                                            <div>
                                                <input class="input-text input-text--primary-style"
                                                    wire:model='lastname' type="text" id="billing-lname" data-bill="">
                                            </div>
                                        </div>
                                        </br>
                                        @error('lastname')
                                        <span class="gl-link">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--====== End - First Name, Last Name ======-->


                                    <!--====== E-MAIL ======-->
                                    <div class="u-s-m-b-15">

                                        <label class="gl-label" for="billing-email">E-MAIL *</label>

                                        <input class="input-text input-text--primary-style" wire:model='email'
                                            type="text" id="billing-email" data-bill="">
                                    </div>
                                    <!--====== End - E-MAIL ======-->
                                    @error('email')
                                    <span class="gl-link">{{ $message }}</span>
                                    @enderror

                                    <!--====== PHONE ======-->
                                    <div class="u-s-m-b-15">

                                        <label class="gl-label" for="billing-phone">PHONE *</label>

                                        <input class="input-text input-text--primary-style" wire:model='phone'
                                            type="text" id="billing-phone" data-bill="">
                                    </div>
                                    <!--====== End - PHONE ======-->
                                    @error('phone')
                                    <span class="gl-link">{{ $message }}</span>
                                    @enderror

                                    <!--====== Street Address ======-->
                                    <div class="u-s-m-b-15">

                                        <label class="gl-label" for="billing-street">STREET ADDRESS *</label>

                                        <input class="input-text input-text--primary-style"
                                            wire:model='streat_address_line_1' type="text" id="billing-street"
                                            placeholder="House name and street name" data-bill="">
                                    </div>
                                    @error('streat_address_line_1')
                                    <span class="gl-link">{{ $message }}</span>
                                    @enderror
                                    <div class="u-s-m-b-15">

                                        <label for="billing-street-optional"></label>

                                        <input class="input-text input-text--primary-style" type="text"
                                            id="billing-street-optional" wire:model='streat_address_line_2'
                                            placeholder="Apartment, suite unit etc. (optional)" data-bill="">
                                    </div>
                                    <!--====== End - Street Address ======-->
                                    @error('streat_address_line_2')
                                    <span class="gl-link">{{ $message }}</span>
                                    @enderror

                                    <!--====== Country ======-->
                                    <div class="u-s-m-b-15">

                                        <!--====== Select Box ======-->

                                        <label class="gl-label" for="billing-country">COUNTRY *</label><select
                                            class="select-box select-box--primary-style" id="billing-country"
                                            data-bill="">
                                            <option selected="" value="">Choose Country</option>
                                            <option value="uae">United Arab Emirate (UAE)</option>
                                            <option value="uk">United Kingdom (UK)</option>
                                            <option value="us">United States (US)</option>
                                        </select>
                                        <!--====== End - Select Box ======-->
                                    </div>
                                    <!--====== End - Country ======-->


                                    <!--====== Town / City ======-->
                                    <div class="u-s-m-b-15">

                                        <label class="gl-label" for="billing-town-city">TOWN/CITY *</label>

                                        <input wire:model='city' class="input-text input-text--primary-style"
                                            type="text" id="billing-town-city" data-bill="">
                                    </div>
                                    @error('city')
                                    <span class="gl-link">{{ $message }}</span>
                                    @enderror
                                    <!--====== End - Town / City ======-->


                                    <!--====== STATE/PROVINCE ======-->
                                    <!--====== End - STATE/PROVINCE ======-->
                                    <!--====== ZIP/POSTAL ======-->
                                    <div class="u-s-m-b-15">
                                        <label class="gl-label" for="billing-zip">ZIP/POSTAL CODE *</label>
                                        <input wire:model='zip' class="input-text input-text--primary-style" type="text"
                                            id="billing-zip" placeholder="Zip/Postal Code" data-bill="">
                                    </div>
                                    <!--====== End - ZIP/POSTAL ======-->
                                    @error('zip')
                                    <span class="gl-link">{{ $message }}</span>
                                    @enderror
                                    <div class="u-s-m-b-10">


                                        <!--====== Check Box ======-->
                                        <div class="check-box">

                                            <input type="checkbox" id="make-default-address" data-bill="">
                                            <div class="check-box__state check-box__state--primary">

                                                <label class="check-box__label" for="make-default-address">Make default
                                                    shipping and billing address</label>
                                            </div>
                                        </div>
                                        <!--====== End - Check Box ======-->
                                    </div>
                                    <div class="u-s-m-b-10">

                                        <a class="gl-link" href="#create-account" data-toggle="collapse">Want to create
                                            a new account?</a>
                                    </div>
                                    <div class="collapse u-s-m-b-15" id="create-account">

                                        <span class="gl-text u-s-m-b-15">Create an account by entering the information
                                            below. If you are a returning customer please login at the top of the
                                            page.</span>
                                        <div>

                                            <label class="gl-label" for="reg-password">Account Password *</label>

                                            <input class="input-text input-text--primary-style" type="text" data-bill=""
                                                id="reg-password">
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-10">

                                        <label class="gl-label" for="order-note">ORDER NOTE</label><textarea
                                            class="text-area text-area--primary-style" id="order-note"
                                            wire:model='order_note'></textarea>
                                    </div>
                                    <div>

                                        <button class="btn btn--e-transparent-brand-b-2" type="button"
                                            wire:click='SaveBillingDetails'>SAVE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <h1 class="checkout-f__h1">ORDER SUMMARY</h1>

                            <!--====== Order Summary ======-->
                            <div class="o-summary">
                                <div class="o-summary__section u-s-m-b-30">
                                    <div class="o-summary__item-wrap gl-scroll">
                                        @foreach (Cart::content() as $Product)
                                        <div class="o-card">
                                            <div class="o-card__flex">
                                                <div class="o-card__img-wrap">

                                                    <img class="u-img-fluid" src="{{ $Product->model->image }}" alt="">
                                                </div>
                                                <div class="o-card__info-wrap">
                                                    <span class="o-card__name">
                                                        <a href="{{ route('products' , $Product->model->slug) }}">{{
                                                            $Product->name }}</a></span>

                                                    <span class="o-card__quantity">Quantity x {{ $Product->qty }}</span>

                                                    <span class="o-card__price">${{ $Product->price }}</span>
                                                </div>
                                            </div>
                                            <a wire:click.prevent='removeProduct("{{ $Product->rowId }}")'
                                                class="o-card__del far fa-trash-alt"></a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="o-summary__section u-s-m-b-30">
                                    <div class="o-summary__box">
                                        <table class="o-summary__table">
                                            <tbody>
                                                <tr>
                                                    <td>TAX</td>
                                                    <td>${{ session()->get('check_out')['tax'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td>SUBTOTAL</td>
                                                    <td>${{ session()->get('check_out')['sub_total'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td>GRAND TOTAL</td>
                                                    <td>${{ session()->get('check_out')['total'] }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="o-summary__section u-s-m-b-30">
                                    <div class="o-summary__box">
                                        <h1 class="checkout-f__h1">PAYMENT INFORMATION</h1>
                                        <form class="checkout-f__payment">
                                            <div class="u-s-m-b-10">
                                                <!--====== Radio Box ======-->
                                                <div class="radio-box">
                                                    <input type="radio" id="cash-on-delivery" name="payment"
                                                        wire:model='payment_method'>
                                                    <div class="radio-box__state radio-box__state--primary">

                                                        <label class="radio-box__label" for="cash-on-delivery">Cash on
                                                            Delivery</label>
                                                    </div>
                                                </div>
                                                <!--====== End - Radio Box ======-->

                                                <span class="gl-text u-s-m-t-6">Pay Upon Cash on delivery. (This service
                                                    is only available for some countries)</span>
                                            </div>
                                            <div class="u-s-m-b-10">
                                                <!--====== Radio Box ======-->
                                                <div class="radio-box">
                                                    <input type="radio" id="pay-pal" name="payment">
                                                    <div class="radio-box__state radio-box__state--primary">
                                                        <label class="radio-box__label" for="pay-pal">Pay Pal</label>
                                                    </div>
                                                </div>
                                                <!--====== End - Radio Box ======-->

                                                <span class="gl-text u-s-m-t-6">When you click "Place Order" below we'll
                                                    take you to Paypal's site to set up your billing information.
                                                </span>
                                            </div>
                                            <div class="u-s-m-b-15">

                                                <!--====== Check Box ======-->
                                                <div class="check-box">
                                                    <input type="checkbox" id="term-and-condition">
                                                    <div class="check-box__state check-box__state--primary">
                                                        <label class="check-box__label" for="term-and-condition">I
                                                            consent to the</label>
                                                    </div>
                                                </div>
                                                <!--====== End - Check Box ======-->
                                                <a class="gl-link">Terms of Service.</a>
                                            </div>
                                            <div>
                                                <button class="btn btn--e-brand-b-2 PalceOrderLoading" type="button"
                                                    wire:click='PalceOrder'>

                                                    <span> Place Order</span>

                                                    <span class="hide"> <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></span>

                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--====== End - Order Summary ======-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 3 ======-->
</div>
