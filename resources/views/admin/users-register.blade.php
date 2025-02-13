<!doctype html>
<html lang="fa" dir="ltr">

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

<body class="font-samim app sidebar-mini ltr login-img">

    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="{{ asset('panel/assets/images/loader.svg') }}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                        <a href="{{ route('admin') }}"><img src="{{ asset('panel/assets/images/brand/logo-white.png') }}" class="header-brand-img m-0" alt=""></a>
                    </div>
                </div>
                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form class="login100-form validate-form" method="POST" action="{{ route('users-insert') }}">
                            @csrf

                            <span class="login100-form-title">
									ثبت نام
							</span>
                            @error('name')
                                <span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="mdi mdi-account" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 ms-0 form-control" id="name" name="name" value="{{ old('name') }}" type="text" placeholder="نام کاربری">
                            </div>
                            @error('email')
                                <span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 ms-0 form-control" id="email" name="email" value="{{ old('email') }}" type="email" placeholder="ایمیل">
                            </div>
                            @error('password')
                                <span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 ms-0 form-control" id="password" name="password" type="password" placeholder="رمز عبور">
                            </div>
                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 ms-0 form-control" id="password-confirm" name="password_confirmation" type="password" placeholder="تایید رمز عبور">
                            </div>
                            @error('phone')
                                <span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="wrap-input100 validate-input input-group" id="phone">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 ms-0 form-control" id="phone" name="phone" type="number" placeholder="شماره تماس">
                            </div>
                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn btn-primary">
                                    ثبت نام
                                </button>
                            </div>
                            <label class="login-social-icon"><span>ثبت نام در سوشیال</span></label>
                            <div class="d-flex justify-content-center">
                                <a href="javascript:void(0)">
                                    <div class="social-login me-4 text-center">
                                        <i class="fa fa-google"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="social-login me-4 text-center">
                                        <i class="fa fa-facebook"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="social-login text-center">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- END PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="{{ asset('panel/assets/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('panel/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="{{ asset('panel/assets/js/show-password.min.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('panel/assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('panel/assets/js/themeColors.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('panel/assets/js/custom.js') }}"></script>


</body>
