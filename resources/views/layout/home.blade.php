<!DOCTYPE html>
<html class="no-js" lang="fa">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title Of Site -->
        <title>Hema</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style-min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    </head>

    <body class="template-index index-demo1">
        <!--Page Wrapper-->
        <div class="page-wrapper">

            <!--Header-->
            <header class="header d-flex align-items-center header-1 header-fixed">
                <div class="container">        
                    <div class="row">
                        <!--Logo-->
                        <div class="logo col-5 col-sm-3 col-md-3 col-lg-2 align-self-center">
                            <a class="logoImg" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="Hema Multipurpose Html Template" title="Hema" width="149" height="39" /></a>
                        </div>
                        <!--End Logo-->
                        <!--Menu-->
                        <div class="font-samim col-1 col-sm-1 col-md-1 col-lg-8 align-self-center d-menu-col">
                            <nav class="navigation" id="AccessibleNav">
                                <ul id="siteNav" class="site-nav medium center">
                                    <li class="lvl1 parent dropdown"><a href="#">خانه <i class="icon anm anm-angle-down-l"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="index.html" class="site-nav lvl-2">Home 01 - Fashion</a></li>
                                            <li><a href="index2-footwear.html" class="site-nav lvl-2">Home 02 - Footwear</a></li>
                                            <li><a href="index3-bags.html" class="site-nav lvl-2">Home 03 - Bags</a></li>
                                            <li><a href="index4-electronic.html" class="site-nav lvl-2">Home 04 - Electronic</a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl1 parent megamenu"><a href="#">فروشگاه <i class="icon anm anm-angle-down-l"></i></a>
                                        <div class="megamenu style1">
                                            <ul class="row grid--uniform mmWrapper">
                                                <li class="lvl-1 col-md-3 col-lg-3 w-22"><a href="#;" class="site-nav lvl-1 menu-title">Collection Page</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="collection-style1.html" class="site-nav lvl-2">Collection style1</a></li>
                                                        <li class="lvl-2"><a href="collection-style2.html" class="site-nav lvl-2">Collection style2</a></li>
                                                        <li class="lvl-2"><a href="collection-style3.html" class="site-nav lvl-2">Collection style3</a></li>
                                                        <li class="lvl-2"><a href="collection-style4.html" class="site-nav lvl-2">Collection style4</a></li>
                                                    </ul>
                                                </li>
                                                <li class="lvl-1 col-md-3 col-lg-3 w-22"><a href="#;" class="site-nav lvl-1 menu-title">Shop Page</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="shop-grid-view.html" class="site-nav lvl-2">Shop Grid View</a></li>
                                                        <li class="lvl-2"><a href="shop-list-view.html" class="site-nav lvl-2">Shop List View</a></li>
                                                        <li class="lvl-2"><a href="shop-left-sidebar.html" class="site-nav lvl-2">Shop Left Sidebar</a></li>
                                                        <li class="lvl-2"><a href="shop-right-sidebar.html" class="site-nav lvl-2">Shop Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="lvl-1 col-md-3 col-lg-3 w-22"><a href="#;" class="site-nav lvl-1 menu-title">Shop Other Page</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="wishlist-style1.html" class="site-nav lvl-2">Wishlist Style1</a></li>
                                                        <li class="lvl-2"><a href="wishlist-style2.html" class="site-nav lvl-2">Wishlist Style2</a></li>
                                                        <li class="lvl-2"><a href="compare-style1.html" class="site-nav lvl-2">Compare Style1</a></li>
                                                        <li class="lvl-2"><a href="compare-style2.html" class="site-nav lvl-2">Compare Style2</a></li>
                                                    </ul>
                                                </li>
                                                <li class="lvl-1 col-md-3 col-lg-3 w-34 banner-col">
                                                    <div class="banner-wrap">
                                                        <a href="shop-left-sidebar.html"><img class="blur-up lazyload" data-src="{{ asset('assets/images/megamenu/banner-menu.jpg') }}" src="{{ asset('assets/images/megamenu/banner-menu.jpg') }}" alt="banner" width="600" height="440" /></a>
                                                        <div class="banner-content">
                                                            <h4>Hot deals</h4>
                                                            <h3>Don't miss <br>Trending</h3>
                                                            <div class="banner-save">Save to 50%</div>
                                                            <div class="banner-btn"><a href="shop-left-sidebar.html" class="btn">Shop now</a></div>
                                                        </div>
                                                        <div class="banner-discount">
                                                            <h3><span>50%</span> Off</h3>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="lvl1 parent megamenu"><a href="#">محصول <i class="icon anm anm-angle-down-l"></i></a>
                                        <div class="megamenu style2">
                                            <ul class="row mmWrapper">
                                                <li class="lvl-1 col-md-3 col-lg-3"><a href="#;" class="site-nav lvl-1 menu-title">Product Page</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="product-layout1.html" class="site-nav lvl-2">Product Layout1</a></li>
                                                        <li class="lvl-2"><a href="product-layout2.html" class="site-nav lvl-2">Product Layout2</a></li>
                                                        <li class="lvl-2"><a href="product-3d-ar-models.html" class="site-nav lvl-2">Product 3D, AR models</a></li>
                                                    </ul>
                                                </li>
                                                <li class="lvl-1 col-md-3 col-lg-3"><a href="#;" class="site-nav lvl-1 menu-title">Product Page Types</a>
                                                    <ul class="subLinks">
                                                        <li class="lvl-2"><a href="product-standard.html" class="site-nav lvl-2">Standard Product</a></li>
                                                        <li class="lvl-2"><a href="product-variable.html" class="site-nav lvl-2">Variable Product</a></li>
                                                        <li class="lvl-2"><a href="product-grouped.html" class="site-nav lvl-2">Grouped Product</a></li>
                                                    </ul>
                                                </li>
                                                <li class="lvl-1 col-md-3 col-lg-6 product-col"><a href="#;" class="site-nav lvl-1 menu-title">Weekly Bestsellers</a>
                                                    <div class="grid-products weekly-product gp10 mt-1">
                                                        <div class="item">
                                                            <div class="product-wrap position-relative">
                                                                <!-- Start Product Image -->
                                                                <div class="product-image mb-0">
                                                                    <a href="product-layout1.html" class="product-img"><img class="blur-up lazyload" data-src="{{ asset('assets/images/megamenu/product1.jpg') }}" src="{{ asset('assets/images/megamenu/product1.jpg') }}" alt="product" title="Product" width="625" height="808" /></a>
                                                                    <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                                                </div>
                                                                <!-- End Product Image -->
                                                                <!-- Start Product Details -->
                                                                <div class="product-details text-center">
                                                                    <div class="product-name"><a class="fw-normal" href="product-layout1.html">Bodysuit Black</a></div>
                                                                    <div class="product-price">
                                                                        <span class="price old-price">$114.00</span><span class="price">$99.00</span>
                                                                    </div>
                                                                    <div class="product-review">
                                                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                                                        <span class="caption hidden ms-1">3 Reviews</span>
                                                                    </div>
                                                                </div>
                                                                <!-- End product details -->
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="product-wrap position-relative">
                                                                <!-- Start Product Image -->
                                                                <div class="product-image mb-0">
                                                                    <a href="product-layout1.html" class="product-img"><img class="blur-up lazyload" data-src="{{ asset('assets/images/megamenu/product2.jpg') }}" src="{{ asset('assets/images/megamenu/product2.jpg') }}" alt="product" title="Product" width="625" height="808" /></a>
                                                                </div>
                                                                <!-- End Product Image -->
                                                                <!-- Start Product Details -->
                                                                <div class="product-details text-center">
                                                                    <div class="product-name"><a class="fw-normal" href="product-layout1.html">Drawstring Dress</a></div>
                                                                    <div class="product-price">
                                                                        <span class="price">$165.00</span>
                                                                    </div>
                                                                    <div class="product-review">
                                                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                                                        <span class="caption hidden ms-1">13 Reviews</span>
                                                                    </div>
                                                                </div>
                                                                <!-- End product details -->
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="product-wrap position-relative">
                                                                <!-- Start Product Image -->
                                                                <div class="product-image mb-0">
                                                                    <a href="product-layout1.html" class="product-img"><img class="blur-up lazyload" data-src="{{ asset('assets/images/megamenu/product3.jpg') }}" src="{{ asset('assets/images/megamenu/product3.jpg') }}" alt="product" title="Product" width="625" height="808" /></a>
                                                                </div>
                                                                <!-- End Product Image -->
                                                                <!-- Start Product Details -->
                                                                <div class="product-details text-center">
                                                                    <div class="product-name"><a class="fw-normal" href="product-layout1.html">Realm Solid Backpack</a></div>
                                                                    <div class="product-price">
                                                                        <span class="price">$153.00</span>
                                                                    </div>
                                                                    <div class="product-review">
                                                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                                        <span class="caption hidden ms-1">17 Reviews</span>
                                                                    </div>
                                                                </div>
                                                                <!-- End product details -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="lvl1 parent dropdown"><a href="#">صفحات <i class="icon anm anm-angle-down-l"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="aboutus-style1.html" class="site-nav">About Us <i class="icon anm anm-angle-right-l"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="aboutus-style1.html" class="site-nav">About Us Style1</a></li>
                                                    <li><a href="aboutus-style2.html" class="site-nav">About Us Style2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact-style1.html" class="site-nav">Contact Us <i class="icon anm anm-angle-right-l"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="contact-style1.html" class="site-nav">Contact Us Style1</a></li>
                                                    <li><a href="contact-style2.html" class="site-nav">Contact Us Style2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="my-account.html" class="site-nav">My Account <i class="icon anm anm-angle-right-l"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="my-account.html" class="site-nav">My Account</a></li>
                                                    <li><a href="login.html" class="site-nav">Login</a></li>
                                                    <li><a href="register.html" class="site-nav">Register</a></li>
                                                    <li><a href="forgot-password.html" class="site-nav">Forgot Password</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="lookbook-grid.html" class="site-nav">Lookbook <i class="icon anm anm-angle-right-l"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="lookbook-grid.html" class="site-nav">Lookbook Grid</a></li>
                                                    <li><a href="lookbook-masonry.html" class="site-nav">Lookbook Masonry</a></li>
                                                    <li><a href="lookbook-shop.html" class="site-nav">Lookbook Shop</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio-page.html" class="site-nav">Portfolio Page</a></li>
                                            <li><a href="faqs-page.html" class="site-nav">FAQs Page</a></li>
                                            <li><a href="brands-page.html" class="site-nav">Brands Page</a></li>
                                            <li><a href="cms-page.html" class="site-nav">CMS Page</a></li>
                                            <li><a href="elements-icons.html" class="site-nav">Icons</a></li>
                                            <li><a href="error-404.html" class="site-nav">Error 404</a></li>
                                            <li><a href="coming-soon.html" class="site-nav">Coming soon <span class="lbl nm_label2">New</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="lvl1 parent dropdown"><a href="#">وبلاگ <i class="icon anm anm-angle-down-l"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="blog-grid.html" class="site-nav">Grid View</a></li>
                                            <li><a href="blog-list.html" class="site-nav">List View</a></li>
                                            <li><a href="blog-grid-sidebar.html" class="site-nav">Left Sidebar</a></li>
                                            <li><a href="blog-list-sidebar.html" class="site-nav">Right Sidebar</a></li>
                                            <li><a href="blog-masonry.html" class="site-nav">Masonry Grid</a></li>
                                            <li><a href="blog-details.html" class="site-nav">Blog Details</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!--End Menu-->
                        <!--Right Icon-->
                        <div class="col-7 col-sm-9 col-md-9 col-lg-2 align-self-center icons-col text-right">
                            <!--Search-->
                            <div class="search-parent iconset">
                                <div class="site-search" title="جستجو">
                                    <a href="#" class="search-icon clr-none" data-bs-toggle="offcanvas" data-bs-target="#search-drawer"><i class="hdr-icon icon anm anm-search-l"></i></a>
                                </div>
                                <div class="search-drawer offcanvas offcanvas-top" tabindex="-1" id="search-drawer">
                                    <div class="container">
                                        <div class="search-header d-flex-center justify-content-between mb-3">
                                            <h3 class="font-parastoo title m-0">دنبال چه چیزی میگردید؟</h3>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="search-body">
                                            <form class="form minisearch" id="header-search" action="{{ route('search') }}" method="GET">
                                                <!--Search Field-->
                                                <div class="d-flex searchField">
                                                    <div class="input-box d-flex fl-1">
                                                        <input type="text" name="q" class="font-sahel input-text border-start-0 border-end-0" placeholder="...جستجو برای محصولات" value="" />
                                                        <button type="submit" class="action search d-flex-justify-center btn rounded-start-0"><i class="icon anm anm-search-l"></i></button>
                                                    </div>
                                                </div>
                                                <!--End Search Field-->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Search-->
                            <!--Account-->
                            <div class="account-parent iconset">
                                <div class="account-link" title="حساب"><i class="hdr-icon icon anm anm-user-al"></i></div>
                                <div id="accountBox">
                                    <div class="font-parastoo customer-links">
                                        <ul class="m-0">
                                            @if (Auth::user())
                                            <li><a href="#"><i class="icon anm anm-user-cil"></i>{{ Auth::user()->name }}</a></li>
                                            <li><a href="{{ route('logout') }}"><i class="icon anm anm-sign-out-al"></i>خروج</a></li>
                                            @else
                                            <li><a href="{{ route('register') }}"><i class="icon anm anm-user-al"></i>ثبت نام</a></li>
                                            <li><a href="{{ route('login') }}"><i class="icon anm anm-sign-in-al"></i>ورود</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End Account-->
                            <!--Minicart-->
                            @if (Auth::user())
                            <div class="header-cart iconset" title="سبد">
                                <a href="#;" class="header-cart btn-minicart clr-none" data-bs-toggle="offcanvas" data-bs-target="#minicart-drawer"><i class="hdr-icon icon anm anm-cart-l"></i></a>
                            </div>
                            @else
                            <div class="header-cart iconset" title="سبد">
                                <a href="{{ route('login') }}" class="header-cart btn-minicart clr-none"><i class="hdr-icon icon anm anm-cart-l"></i></a>
                            </div>
                            @endif
                            <!--End Minicart-->
                        </div>
                        <!--End Right Icon-->
                    </div>
                </div>
            </header>
            <!--End Header-->

            <!-- Body Container -->
            <div id="page-content" class="mb-0">

                @yield('content')

            </div>
            <!-- End Body Container -->

            <!--Footer-->
            <div class="footer">
                <div class="footer-top clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="font-parastoo h4">اطلاعات</h4>
                                <ul class="font-shabnam1">
                                    <li><a href="#">حساب من</a></li>
                                    <li><a href="#">درباره ما</a></li>
                                    <li><a href="#">ورود</a></li>
                                    <li><a href="#">سیاست حفظ حریم خصوصی</a></li>
                                    <li><a href="#">شرایط &amp; وضعیت</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="font-parastoo h4">راهنمای خرید</h4>
                                <ul class="font-shabnam1">
                                    <li><a href="#">نحوه ثبت سفارش</a></li>
                                    <li><a href="#">رویه ارسال سفارش</a></li>
                                    <li><a href="#">شیوه های پرداخت</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="font-parastoo h4">خدمات مشتری</h4>
                                <ul class="font-shabnam1">
                                    <li><a href="#">درخواست داده های شخصی</a></li>
                                    <li><a href="#">سوالات متداول</a></li>
                                    <li><a href="#">تماس با ما</a></li>
                                    <li><a href="#">سفارشات و بازگشت</a></li>
                                    <li><a href="#">مرکز پشتیبانی</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-contact">
                                <h4 class="font-parastoo h4">تماس با ما</h4>
                                <p class="font-shabnam1 address d-flex"><i class="icon anm anm-map-marker-al pt-1"></i> استان 55 شهر 564 شهرک 45 خیابان 741</p>
                                <p class="font-shabnam1 phone d-flex align-items-center"><i class="icon anm anm-phone-l"></i>  <b class="me-1 d-none">تلفن:</b> <a href="#">(045) 3388 3652</a></p>
                                <p class="font-shabnam1 email d-flex align-items-center"><i class="icon anm anm-envelope-l"></i> <b class="me-1 d-none">ایمیل:</b> <a href="#">info@gmail.com</a></p>
                                <ul class="list-inline social-icons mt-3">
                                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="فیس بوک"><i class="icon anm anm-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="توییتر"><i class="icon anm anm-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="پینترست"><i class="icon anm anm-pinterest-p"></i></a></li>
                                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="لینکدین"><i class="icon anm anm-linkedin-in"></i></a></li>
                                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="ایستاگرام"><i class="icon anm anm-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="یوتیوب"><i class="icon anm anm-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>               
                    </div>
                </div>
                <div class="footer-bottom clearfix">
                    <div class="container">
                        <div class="d-flex-center flex-column justify-content-md-between flex-md-row-reverse">
                            <ul class="payment-icons d-flex-center mb-2 mb-md-0">
                                <li><i class="icon anm anm-cc-visa"></i></li>
                                <li><i class="icon anm anm-cc-mastercard"></i></li>
                                <li><i class="icon anm anm-cc-amex"></i></li>
                                <li><i class="icon anm anm-cc-paypal"></i></li>
                                <li><i class="icon anm anm-cc-discover"></i></li>
                                <li><i class="icon anm anm-cc-stripe"></i></li>
                                <li><i class="icon anm anm-cc-jcb"></i></li>
                            </ul>
                            <div class="font-samim1 copytext">&copy; 1403 Hema. تمامی حقوق محفوظ است</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer-->



            <!--Scoll Top-->
            <div id="site-scroll"><i class="icon anm anm-arw-up"></i></div>
            <!--End Scoll Top-->

            @yield('cart')



            <!-- Including Jquery/Javascript -->
            <!-- Plugins JS -->
            <script src="{{ asset('assets/js/plugins.js') }}"></script>
            <!-- Main JS -->
            <script src="{{ asset('assets/js/main.js') }}"></script>
            <!--Newsletter Modal Cookies-->
            <script>
                $(window).ready(function () {
                    setTimeout(function () {
                        $('#newsletter_modal').modal("show");
                    }, 7000);
                });
            </script>
            <!--End Newsletter Modal Cookies-->

        </div>
        <!--End Page Wrapper-->
    </body>
</html>