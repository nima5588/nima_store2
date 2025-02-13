@extends('layout.home')

@section('content')

<!--Page Header-->
<div style="padding: 50px" class="page-header text-center">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                <div class="page-title"><h1 class="font-vazir">سفارش ناموفق</h1></div>
                <!--Breadcrumbs-->
                <div class="font-vazir breadcrumbs"><a href="{{ route('home') }}" title="برگشت به صفحه اصلی">خانه</a><span class="main-title"><i class="icon anm anm-angle-right-l"></i>سفارش ناموفق</span></div>
                <!--End Breadcrumbs-->
            </div>
        </div>
    </div>
</div>
<!--End Page Header-->

<!--Order success-->
<div class="container">  
    <div class="success-text checkout-card text-center mb-4 mb-md-5">
        <i style="color: #dc3545" class="icon anm anm-times-circle"></i>
        <h2 class="font-vazir2">!موجودی کیف پول شما کافی نیست</h2>
        <p><h5><a href="{{ route('cart-basket') }}" class="font-vazir mb-1 mt-2">بازگشت</a></h5></p>
    </div>
</div>
<!--End Order success-->

@endsection