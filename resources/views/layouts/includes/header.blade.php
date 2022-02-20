<header class="header--style-1 header--box-shadow">

    <!--====== Nav 1 ======-->
    <nav class="primary-nav primary-nav-wrapper--border">
        <div class="container">

            <!--====== Primary Nav ======-->
            <div class="primary-nav">

                <!--====== Main Logo ======-->

                <a class="main-logo" href="index.html">

                    <img src="{{ asset('assets/images/logo/logo-1.png') }}" alt=""></a>
                <!--====== End - Main Logo ======-->


                <!--====== Search Form ======-->
                <form class="main-form" method="post" action="{{ route('products.post') }}">
                    @csrf
                    <label for="main-search"></label>
                    <input class="input-text input-text--border-radius input-text--style-1" type="text" id="main-search"
                    name='search'
                    placeholder="Search">

                    <button class="btn btn--icon fas fa-search main-search-button" type="submit"></button></form>
                <!--====== End - Search Form ======-->


                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation">

                    <button class="btn btn--icon toggle-button fas fa-cogs" type="button"></button>

                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">

                        <span class="ah-close">✕ Close</span>

                        <!--====== List ======-->
                        <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                            <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="" data-original-title="Account">

                                <a><i class="far fa-user-circle"></i></a>

                                <!--====== Dropdown ======-->

                                <span class="js-menu-toggle"></span>
                                <ul style="width:120px">
                                    <li>

                                        <a href="dashboard.html"><i class="fas fa-user-circle u-s-m-r-6"></i>

                                            <span>Account</span></a></li>
                                    <li>

                                        <a href="signup.html"><i class="fas fa-user-plus u-s-m-r-6"></i>

                                            <span>Signup</span></a></li>
                                    <li>

                                        <a href="signin.html"><i class="fas fa-lock u-s-m-r-6"></i>

                                            <span>Signin</span></a></li>
                                    <li>

                                        <a href="signup.html"><i class="fas fa-lock-open u-s-m-r-6"></i>

                                            <span>Signout</span></a></li>
                                </ul>
                                <!--====== End - Dropdown ======-->
                            </li>
                            <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="" data-original-title="Settings">

                                <a><i class="fas fa-user-cog"></i></a>

                                <!--====== Dropdown ======-->

                                <span class="js-menu-toggle"></span>
                                <ul style="width:120px">
                                    <li class="has-dropdown has-dropdown--ul-right-100">

                                        <a>Language<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li>

                                                <a class="u-c-brand">ENGLISH</a></li>
                                            <li>

                                                <a>ARABIC</a></li>
                                            <li>

                                                <a>FRANCAIS</a></li>
                                            <li>

                                                <a>ESPANOL</a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li class="has-dropdown has-dropdown--ul-right-100">

                                        <a>Currency<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:225px">
                                            <li>

                                                <a class="u-c-brand">$ - US DOLLAR</a></li>
                                            <li>

                                                <a>£ - BRITISH POUND STERLING</a></li>
                                            <li>

                                                <a>€ - EURO</a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                </ul>
                                <!--====== End - Dropdown ======-->
                            </li>
                            <li data-tooltip="tooltip" data-placement="left" title="" data-original-title="Contact">

                                <a href="tel:+0900901904"><i class="fas fa-phone-volume"></i></a></li>
                            <li data-tooltip="tooltip" data-placement="left" title="" data-original-title="Mail">

                                <a href="mailto:contact@domain.com"><i class="far fa-envelope"></i></a></li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->
            </div>
            <!--====== End - Primary Nav ======-->
        </div>
    </nav>
    <!--====== End - Nav 1 ======-->


    <!--====== Nav 2 ======-->
    <nav class="secondary-nav-wrapper">
        <div class="container">

            <!--====== Secondary Nav ======-->
            <div class="secondary-nav">

                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation1">

                    <button class="btn btn--icon toggle-mega-text toggle-button" type="button">M</button>

                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">

                        <span class="ah-close">✕ Close</span>

                        <!--====== List ======-->
                        <ul class="ah-list">
                            <li class="has-dropdown">

                                <span class="mega-text">M</span>

                                <!--====== Mega Menu ======-->

                                <span class="js-menu-toggle"></span>
                                <div class="mega-menu">
                                    <div class="mega-menu-wrap">
                                        <div class="mega-menu-list">
                                            <ul>
                                                <li class="js-active">

                                                    <a href="shop-side-version-2.html"><i class="fas fa-tv u-s-m-r-6"></i>

                                                        <span>Electronics</span></a>

                                                    <span class="js-menu-toggle js-toggle-mark"></span></li>
                                                <li>

                                                    <a href="shop-side-version-2.html"><i class="fas fa-female u-s-m-r-6"></i>

                                                        <span>Women's Clothing</span></a>

                                                    <span class="js-menu-toggle"></span></li>
                                                <li>

                                                    <a href="shop-side-version-2.html"><i class="fas fa-male u-s-m-r-6"></i>

                                                        <span>Men's Clothing</span></a>

                                                    <span class="js-menu-toggle"></span></li>
                                                <li>

                                                    <a href="index.html"><i class="fas fa-utensils u-s-m-r-6"></i>

                                                        <span>Food &amp; Supplies</span></a>

                                                    <span class="js-menu-toggle"></span></li>
                                                <li>

                                                    <a href="index.html"><i class="fas fa-couch u-s-m-r-6"></i>

                                                        <span>Furniture &amp; Decor</span></a>

                                                    <span class="js-menu-toggle"></span></li>
                                                <li>

                                                    <a href="index.html"><i class="fas fa-football-ball u-s-m-r-6"></i>

                                                        <span>Sports &amp; Game</span></a>

                                                    <span class="js-menu-toggle"></span></li>
                                                <li>

                                                    <a href="index.html"><i class="fas fa-heartbeat u-s-m-r-6"></i>

                                                        <span>Beauty &amp; Health</span></a>

                                                    <span class="js-menu-toggle"></span></li>
                                            </ul>
                                        </div>

                                        <!--====== Electronics ======-->
                                        <div class="mega-menu-content js-active">

                                            <!--====== Mega Menu Row ======-->
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">3D PRINTER &amp; SUPPLIES</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">3d Printer</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">3d Printing Pen</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">3d Printing Accessories</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">3d Printer Module Board</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">HOME AUDIO &amp; VIDEO</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">TV Boxes</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">TC Receiver &amp; Accessories</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Display Dongle</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Home Theater System</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">MEDIA PLAYERS</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Earphones</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Mp3 Players</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Speakers &amp; Radios</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Microphones</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">VIDEO GAME ACCESSORIES</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Nintendo Video Games Accessories</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Sony Video Games Accessories</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Xbox Video Games Accessories</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--====== End - Mega Menu Row ======-->
                                            <br>

                                            <!--====== Mega Menu Row ======-->
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">SECURITY &amp; PROTECTION</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Security Cameras</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Alarm System</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Security Gadgets</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">CCTV Security &amp; Accessories</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">PHOTOGRAPHY &amp; CAMERA</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Digital Cameras</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Sport Camera &amp; Accessories</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Camera Accessories</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Lenses &amp; Accessories</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">ARDUINO COMPATIBLE</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Raspberry Pi &amp; Orange Pi</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Module Board</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Smart Robot</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Board Kits</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">DSLR Camera</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Nikon Cameras</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Canon Camera</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Sony Camera</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">DSLR Lenses</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--====== End - Mega Menu Row ======-->
                                            <br>

                                            <!--====== Mega Menu Row ======-->
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">NECESSARY ACCESSORIES</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Flash Cards</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Memory Cards</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Flash Pins</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Compact Discs</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-9 mega-image">
                                                    <div class="mega-banner">

                                                        <a class="u-d-block" href="shop-side-version-2.html">

                                                            <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-0.jpg" alt=""></a></div>
                                                </div>
                                            </div>
                                            <!--====== End - Mega Menu Row ======-->
                                        </div>
                                        <!--====== End - Electronics ======-->


                                        <!--====== Women ======-->
                                        <div class="mega-menu-content">

                                            <!--====== Mega Menu Row ======-->
                                            <div class="row">
                                                <div class="col-lg-6 mega-image">
                                                    <div class="mega-banner">

                                                        <a class="u-d-block" href="shop-side-version-2.html">

                                                            <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-1.jpg" alt=""></a></div>
                                                </div>
                                                <div class="col-lg-6 mega-image">
                                                    <div class="mega-banner">

                                                        <a class="u-d-block" href="shop-side-version-2.html">

                                                            <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-2.jpg" alt=""></a></div>
                                                </div>
                                            </div>
                                            <!--====== End - Mega Menu Row ======-->
                                            <br>

                                            <!--====== Mega Menu Row ======-->
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">HOT CATEGORIES</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Dresses</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Blouses &amp; Shirts</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">T-shirts</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Rompers</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">INTIMATES</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Bras</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Brief Sets</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Bustiers &amp; Corsets</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Panties</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">WEDDING &amp; EVENTS</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Wedding Dresses</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Evening Dresses</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Prom Dresses</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Flower Dresses</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">BOTTOMS</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Skirts</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Shorts</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Leggings</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Jeans</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--====== End - Mega Menu Row ======-->
                                            <br>

                                            <!--====== Mega Menu Row ======-->
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">OUTWEAR</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Blazers</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Basics Jackets</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Trench</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Leather &amp; Suede</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">JACKETS</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Denim Jackets</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Trucker Jackets</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Windbreaker Jackets</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Leather Jackets</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">ACCESSORIES</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Tech Accessories</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Headwear</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Baseball Caps</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Belts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">OTHER ACCESSORIES</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Bags</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Wallets</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Watches</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Sunglasses</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--====== End - Mega Menu Row ======-->
                                            <br>

                                            <!--====== Mega Menu Row ======-->
                                            <div class="row">
                                                <div class="col-lg-9 mega-image">
                                                    <div class="mega-banner">

                                                        <a class="u-d-block" href="shop-side-version-2.html">

                                                            <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-3.jpg" alt=""></a></div>
                                                </div>
                                                <div class="col-lg-3 mega-image">
                                                    <div class="mega-banner">

                                                        <a class="u-d-block" href="shop-side-version-2.html">

                                                            <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-4.jpg" alt=""></a></div>
                                                </div>
                                            </div>
                                            <!--====== End - Mega Menu Row ======-->
                                        </div>
                                        <!--====== End - Women ======-->


                                        <!--====== Men ======-->
                                        <div class="mega-menu-content">

                                            <!--====== Mega Menu Row ======-->
                                            <div class="row">
                                                <div class="col-lg-4 mega-image">
                                                    <div class="mega-banner">

                                                        <a class="u-d-block" href="shop-side-version-2.html">

                                                            <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-5.jpg" alt=""></a></div>
                                                </div>
                                                <div class="col-lg-4 mega-image">
                                                    <div class="mega-banner">

                                                        <a class="u-d-block" href="shop-side-version-2.html">

                                                            <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-6.jpg" alt=""></a></div>
                                                </div>
                                                <div class="col-lg-4 mega-image">
                                                    <div class="mega-banner">

                                                        <a class="u-d-block" href="shop-side-version-2.html">

                                                            <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-7.jpg" alt=""></a></div>
                                                </div>
                                            </div>
                                            <!--====== End - Mega Menu Row ======-->
                                            <br>

                                            <!--====== Mega Menu Row ======-->
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">HOT SALE</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">T-Shirts</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Tank Tops</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Polo</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Shirts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">OUTWEAR</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Hoodies</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Trench</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Parkas</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Sweaters</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">BOTTOMS</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Casual Pants</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Cargo Pants</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Jeans</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Shorts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">UNDERWEAR</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Boxers</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Briefs</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Robes</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Socks</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--====== End - Mega Menu Row ======-->
                                            <br>

                                            <!--====== Mega Menu Row ======-->
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">JACKETS</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Denim Jackets</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Trucker Jackets</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Windbreaker Jackets</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Leather Jackets</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">SUNGLASSES</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Pilot</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Wayfarer</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Square</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Round</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">ACCESSORIES</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Eyewear Frames</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Scarves</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Hats</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Belts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3">
                                                    <ul>
                                                        <li class="mega-list-title">

                                                            <a href="shop-side-version-2.html">OTHER ACCESSORIES</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Bags</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Wallets</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Watches</a></li>
                                                        <li>

                                                            <a href="shop-side-version-2.html">Tech Accessories</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--====== End - Mega Menu Row ======-->
                                            <br>

                                            <!--====== Mega Menu Row ======-->
                                            <div class="row">
                                                <div class="col-lg-6 mega-image">
                                                    <div class="mega-banner">

                                                        <a class="u-d-block" href="shop-side-version-2.html">

                                                            <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-8.jpg" alt=""></a></div>
                                                </div>
                                                <div class="col-lg-6 mega-image">
                                                    <div class="mega-banner">

                                                        <a class="u-d-block" href="shop-side-version-2.html">

                                                            <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-9.jpg" alt=""></a></div>
                                                </div>
                                            </div>
                                            <!--====== End - Mega Menu Row ======-->
                                        </div>
                                        <!--====== End - Men ======-->


                                        <!--====== No Sub Categories ======-->
                                        <div class="mega-menu-content">
                                            <h5>No Categories</h5>
                                        </div>
                                        <!--====== End - No Sub Categories ======-->


                                        <!--====== No Sub Categories ======-->
                                        <div class="mega-menu-content">
                                            <h5>No Categories</h5>
                                        </div>
                                        <!--====== End - No Sub Categories ======-->


                                        <!--====== No Sub Categories ======-->
                                        <div class="mega-menu-content">
                                            <h5>No Categories</h5>
                                        </div>
                                        <!--====== End - No Sub Categories ======-->


                                        <!--====== No Sub Categories ======-->
                                        <div class="mega-menu-content">
                                            <h5>No Categories</h5>
                                        </div>
                                        <!--====== End - No Sub Categories ======-->
                                    </div>
                                </div>
                                <!--====== End - Mega Menu ======-->
                            </li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->


                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation2">

                    <button class="btn btn--icon toggle-button fas fa-cog" type="button"></button>

                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">

                        <span class="ah-close">✕ Close</span>

                        <!--====== List ======-->
                        <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">
                            <li>

                                <a href="shop-side-version-2.html">NEW ARRIVALS</a></li>
                            <li class="has-dropdown">

                                <a>PAGES<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                <!--====== Dropdown ======-->

                                <span class="js-menu-toggle"></span>
                                <ul style="width:170px">
                                    <li class="has-dropdown has-dropdown--ul-left-100">

                                        <a>Home<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:118px">
                                            <li>

                                                <a href="index.html">Home 1</a></li>
                                            <li>

                                                <a href="index-2.html">Home 2</a></li>
                                            <li>

                                                <a href="index-3.html">Home 3</a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li class="has-dropdown has-dropdown--ul-left-100">

                                        <a>Account<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:200px">
                                            <li>
                                                <a href="signin.html">Signin / Already Registered</a></li>
                                            <li>
                                                <a href="signup.html">Signup / Register</a></li>
                                            <li>
                                                <a href="lost-password.html">Lost Password</a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li class="has-dropdown has-dropdown--ul-left-100">

                                        <a href="dashboard.html">Dashboard<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:200px">
                                            <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a href="dashboard.html">Manage My Account<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:180px">
                                                    <li>

                                                        <a href="dash-edit-profile.html">Edit Profile</a></li>
                                                    <li>

                                                        <a href="dash-address-book.html">Edit Address Book</a></li>
                                                    <li>

                                                        <a href="dash-manage-order.html">Manage Order</a></li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li>

                                                <a href="dash-my-profile.html">My Profile</a></li>
                                            <li class="has-dropdown has-dropdown--ul-left-100">

                                                <a href="dash-address-book.html">Address Book<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:180px">
                                                    <li>

                                                        <a href="dash-address-make-default.html">Address Make Default</a></li>
                                                    <li>

                                                        <a href="dash-address-add.html">Add New Address</a></li>
                                                    <li>

                                                        <a href="dash-address-edit.html">Edit Address Book</a></li>
                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>
                                            <li>

                                                <a href="dash-track-order.html">Track Order</a></li>
                                            <li>

                                                <a href="dash-my-order.html">My Orders</a></li>
                                            <li>

                                                <a href="dash-payment-option.html">My Payment Options</a></li>
                                            <li>

                                                <a href="dash-cancellation.html">My Returns &amp; Cancellations</a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li class="has-dropdown has-dropdown--ul-left-100">

                                        <a>Empty<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:200px">
                                            <li>

                                                <a href="empty-search.html">Empty Search</a></li>
                                            <li>

                                                <a href="empty-cart.html">Empty Cart</a></li>
                                            <li>

                                                <a href="empty-wishlist.html">Empty Wishlist</a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li class="has-dropdown has-dropdown--ul-left-100">

                                        <a>Product Details<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:200px">
                                            <li>

                                                <a href="product-detail.html">Product Details</a></li>
                                            <li>

                                                <a href="product-detail-variable.html">Product Details Variable</a></li>
                                            <li>

                                                <a href="product-detail-affiliate.html">Product Details Affiliate</a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li class="has-dropdown has-dropdown--ul-left-100">

                                        <a>Shop Grid Layout<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:200px">
                                            <li>

                                                <a href="shop-grid-left.html">Shop Grid Left Sidebar</a></li>
                                            <li>

                                                <a href="shop-grid-right.html">Shop Grid Right Sidebar</a></li>
                                            <li>

                                                <a href="shop-grid-full.html">Shop Grid Full Width</a></li>
                                            <li>

                                                <a href="shop-side-version-2.html">Shop Side Version 2</a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li class="has-dropdown has-dropdown--ul-left-100">

                                        <a>Shop List Layout<i class="fas fa-angle-down i-state-right u-s-m-l-6"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:200px">
                                            <li>

                                                <a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                                            <li>

                                                <a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                                            <li>

                                                <a href="shop-list-full.html">Shop List Full Width</a></li>
                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li>

                                        <a href="cart.html">Cart</a></li>
                                    <li>

                                        <a href="wishlist.html">Wishlist</a></li>
                                    <li>

                                        <a href="checkout.html">Checkout</a></li>
                                    <li>

                                        <a href="faq.html">FAQ</a></li>
                                    <li>

                                        <a href="about.html">About us</a></li>
                                    <li>

                                        <a href="contact.html">Contact</a></li>
                                    <li>

                                        <a href="404.html">404</a></li>
                                </ul>
                                <!--====== End - Dropdown ======-->
                            </li>
                            <li class="has-dropdown">

                                <a>BLOG<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                <!--====== Dropdown ======-->

                                <span class="js-menu-toggle"></span>
                                <ul style="width:200px">
                                    <li>

                                        <a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li>

                                        <a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li>

                                        <a href="blog-sidebar-none.html">Blog Sidebar None</a></li>
                                    <li>

                                        <a href="blog-masonry.html">Blog Masonry</a></li>
                                    <li>

                                        <a href="blog-detail.html">Blog Details</a></li>
                                </ul>
                                <!--====== End - Dropdown ======-->
                            </li>
                            <li>

                                <a href="shop-side-version-2.html">VALUE OF THE DAY</a></li>
                            <li>

                                <a href="shop-side-version-2.html">GIFT CARDS</a></li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->


                <!--====== Dropdown Main plugin ======-->
                <div class="menu-init" id="navigation3">

                    <button class="btn btn--icon toggle-button fas fa-shopping-bag toggle-button-shop" type="button"></button>

                    <span class="total-item-round">2</span>

                    <!--====== Menu ======-->
                    <div class="ah-lg-mode">

                        <span class="ah-close">✕ Close</span>

                        <!--====== List ======-->
                        <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                            <li>
                                <a href="index.html"><i class="fas fa-home"></i></a></li>
                            <li>
                                <a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                            <li class="has-dropdown">
                                @if (Cart::count() > 0 )
                                    <a class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i>
                                        <span class="total-item-round">{{ Cart::count(); }}</span></a>
                                @else
                                <a class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i></a>
                                @endif
                                <!--====== Dropdown ======-->
                                <span class="js-menu-toggle"></span>
                                <div class="mini-cart">
                                    <!--====== Mini Product Container ======-->
                                    <div class="mini-product-container gl-scroll u-s-m-b-15">
                                        <!--====== Card for mini cart ======-->
                                        <livewire:simple-cart />
                                        <!--====== End - Card for mini cart ======-->
                                    </div>
                                    <!--====== End - Mini Product Container ======-->


                                    <!--====== Mini Product Statistics ======-->
                                    <div class="mini-product-stat">
                                        <div class="mini-total">
                                            <span class="subtotal-text">SUBTOTAL</span>
                                            <span class="subtotal-value">$16</span></div>
                                        <div class="mini-action">
                                            <a class="mini-link btn--e-brand-b-2" href="checkout.html">PROCEED TO CHECKOUT</a>
                                            <a class="mini-link btn--e-transparent-secondary-b-2" href="{{ route('cart') }}">VIEW CART</a></div>
                                    </div>
                                    <!--====== End - Mini Product Statistics ======-->
                                </div>
                                <!--====== End - Dropdown ======-->
                            </li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->
            </div>
            <!--====== End - Secondary Nav ======-->
        </div>
    </nav>
    <!--====== End - Nav 2 ======-->
</header>
