<!doctype html>
<html lang="fa" dir="rtl">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('panel/assets/images/brand/favicon.ico') }}" />

    <!-- TITLE -->
    <title>Admin Panel</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('panel/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('panel/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('panel/assets/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('panel/assets/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('panel/assets/css/icons.css') }}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('panel/assets/colors/color1.css') }}" />

</head>

<body class="app sidebar-mini rtl light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('panel/assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.html">
                            <img src="{{ asset('panel/assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('panel/assets/images/brand/logo-3.png') }}" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                        @yield('search')
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex country">
                                            <a class="nav-link icon text-center" data-bs-target="#country-selector" data-bs-toggle="modal">
                                                <span class="fs-16 ms-2 d-none d-xl-block">{{ Auth::user()->name }}</span>
                                                <i class="fa fa-user-secret"></i>
                                            </a>
                                        </div>
                                        <!-- COUNTRY -->
                                        <div class="d-flex country">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        <div class="dropdown d-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="{{ route('admin') }}">
                            <img src="{{ asset('panel/assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('panel/assets/images/brand/logo-1.png') }}" class="header-brand-img toggle-logo"
                                alt="logo">
                            <img src="{{ asset('panel/assets/images/brand/logo-2.png') }}" class="header-brand-img light-logo" alt="logo">
                            <img src="{{ asset('panel/assets/images/brand/logo-3.png') }}" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="font-vazir side-menu">
                            <li class="slide">
                                <a class="side-menu__item has-link {{ request()->is('admin/product/*') ? 'active' : '' }}" data-bs-toggle="slide" href="{{ route('product-list') }}">
								<i class="side-menu__icon fe fe-shopping-cart"></i>
								<span class="side-menu__label">محصولات</span></a>
                            </li>
							<li class="slide">
                                <a class="side-menu__item has-link {{ request()->is('admin/category/*') ? 'active' : '' }}" data-bs-toggle="slide" href="{{ route('category-list') }}">
								<i class="side-menu__icon ti-package"></i>
								<span class="side-menu__label">دسته بندی</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link {{ request()->is('admin/users/*') ? 'active' : '' }}" data-bs-toggle="slide" href="{{ route('users-list') }}">
								<i class="side-menu__icon fe fe-users"></i>
								<span class="side-menu__label">کاربران</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link {{ request()->is('admin/invoice/*') ? 'active' : '' }}" data-bs-toggle="slide" href="{{ route('invoice-list') }}">
								<i class="side-menu__icon ion-clipboard"></i>
								<span class="side-menu__label">سفارشات</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link {{ request()->is('admin/role/*') ? 'active' : '' }}" data-bs-toggle="slide" href="{{ route('role-list') }}">
								<i class="side-menu__icon fe fe-shield"></i>
								<span class="side-menu__label">نقش ها</span></a>
                            </li>
                        </ul>

                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->

                        <!-- PAGE-HEADER -->
						@yield('content')
                        <!-- PAGE-HEADER END -->

                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->

        </div>

        <!-- Country-selector modal-->
        <div class="modal fade" id="country-selector">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content country-select-modal">
                    <div class="modal-header">
                        <h6 style="color: black" class="font-yekan modal-title">انتخاب کنید</h6><button aria-label="Close" class="btn-close"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="font-yekan modal-body">
                        <ul class="row p-3">
                            <li class="col-lg-6 mb-2">
                                <a style="color: black" href="{{ route('home') }}" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector bi bi-shop"></span><span style="margin-right: 3px">برو به فروشگاه</span>
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a style="color: black" href="{{ route('admin') }}" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector icon-home"></span><span style="margin-right: 3px">خانه اصلی</span>
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a style="color: black" href="{{ route('product-list') }}" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector fe fe-shopping-cart"></span><span style="margin-right: 3px">محصولات</span>
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a style="color: black" href="{{ route('category-list') }}" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector ti-package"></span><span style="margin-right: 3px">دسته بندی</span>
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a style="color: black" href="{{ route('users-list') }}" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector fe fe-users"></span><span style="margin-right: 3px">کاربران</span>
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a style="color: black" href="{{ route('invoice-list') }}" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector ion-clipboard"></span><span style="margin-right: 3px">سفارشات</span>
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a style="color: black" href="{{ route('role-list') }}" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector fe fe-shield"></span><span style="margin-right: 3px">نقش ها</span>
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a style="color: black" href="{{ route('logout') }}" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector fe fe-log-out"></span><span style="margin-right: 3px">خروج از حساب</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Country-selector modal-->

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="font-parastoo col-md-12 col-sm-12 text-center">
                        © <span></span> 1403 <a href="#">Sash</a>. طراحی شده توسط <span
                            class="fa fa-heart text-danger"></span>  <a href="#"> نیما عزتی </a>کلیه حقوق محفوظ است
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ asset('panel/assets/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('panel/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- SPARKLINE JS-->
    <script src="{{ asset('panel/assets/js/jquery.sparkline.min.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('panel/assets/js/sticky.js') }}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{ asset('panel/assets/js/circle-progress.min.js') }}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{ asset('panel/assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/peitychart/peitychart.init.js') }}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{ asset('panel/assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('panel/assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/p-scroll/pscroll.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/p-scroll/pscroll-1.js') }}"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{ asset('panel/assets/plugins/chart/Chart.bundle.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/chart/rounded-barchart.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/chart/utils.js') }}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('panel/assets/plugins/select2/select2.full.min.js') }}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{ asset('panel/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{ asset('panel/assets/js/apexcharts.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/apexchart/irregular-data-series.js') }}"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{ asset('panel/assets/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/flot/chart.flot.sampledata.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/flot/dashboard.sampledata.js') }}"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{ asset('panel/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{ asset('panel/assets/plugins/sidemenu/sidemenu.js') }}"></script>

	<!-- TypeHead js -->
	<script src="{{ asset('panel/assets/plugins/bootstrap5-typehead/autocomplete.js') }}"></script>
    <script src="{{ asset('panel/assets/js/typehead.js') }}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{ asset('panel/assets/js/index1.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('panel/assets/js/themeColors.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('panel/assets/js/custom.js') }}"></script>




    <!-- INPUT MASK JS-->
    <script src="{{ asset('panel/assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

    <!-- INTERNAL WYSIWYG Editor JS -->
    <script src="{{ asset('panel/assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/wysiwyag/wysiwyag.js') }}"></script>

        <!-- INTERNAL File-Uploads Js-->
    <script src="{{ asset('panel/assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>


    <!-- SHOW PASSWORD JS -->
    <script src="{{ asset('panel/assets/js/show-password.min.js') }}"></script>

</body>

</html>
