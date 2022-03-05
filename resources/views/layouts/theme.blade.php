<html
    class="js sizes customelements history postmessage websockets picture webworkers pointerevents webgl srcset cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth no-csscolumns-breakbefore no-csscolumns-breakafter no-csscolumns-breakinside flexbox"
    lang="en">

<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>Ludus - Electronics, Apparel, Computers, Books, DVDs &amp; more</title>

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/utility.css') }}">
    @livewireStyles

    @notifyCss
    <!--====== App ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>
    <div class="preloader">
        <div class="preloader__wrap">
            <img class="preloader__img" src="images/preloader.png" alt="">
        </div>
    </div>

    <!--====== Main App ======-->
    <div id="app">
        <!--====== Main Header ======-->
        <x:notify-messages />
        @include('layouts.includes.header')

        <!--====== Section 1 ======-->

        {{-- @yield('content') --}}
        {{ $slot ?? ' -- '}}
        @yield('content')

        @include('layouts.includes.footer')
        <!--====== End - Main Header ======-->


        <!--====== App Content ======-->

        <!--====== End - App Content ======-->


        <!--====== Main Footer ======-->

    </div>
    <!--====== End - Main App ======-->

    @notifyJs
    @livewireScripts

    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async="" defer=""></script>

    <!--====== Vendor Js ======-->
    <script src="{{ asset('assets/js/vendor.js') }}"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="{{ asset('assets/js/jquery.shopnav.js') }}"></script>

    <!--====== App ======-->
    <script src="{{ asset('assets/js/app.js') }}"></script><a id="topScroll" href="#top"
        style="position: fixed; z-index: 100; display: none;"><i class="fas fa-long-arrow-alt-up"></i></a>

    <!--====== Noscript ======-->
    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                            <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a
                                JavaScript-capable browser.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>

</body>

</html>
@yield('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('livewire:load', function () {

        window.livewire.on('addToCartSuccess', ()=>{
            Swal.fire(
                'Success Opration!',
                'The Item Add To Cart Successfuly !',
                'success'
                );
                let Count   = Number($('.total-item-round').text());
                console.log(Count);
                let newCount = Count + 1;
                console.log(newCount);
                $('.total-item-round').text(newCount);
        });

        window.livewire.on('addToWishSuccess', ()=>{
            Swal.fire(
                'Success Opration!',
                'The Item Add To Wishlist Successfuly !',
                'success'
                );
        });

        window.livewire.on('ErrorMessage', (Message)=>{
            Swal.fire(
                'Opps .. !',
                Message,
                'error'
                );
        });

        window.livewire.on('RemoveFromCart', (Message)=>{
            Swal.fire(
                'Success Opration!',
                Message,
                'success'
                );
        });


})
</script>
