@extends('layout.home')

@section('content')

<!--Page Header-->
<div style="padding: 50px" class="page-header text-center">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                <div class="page-title"><h1 class="font-vazir">سفارش موفق</h1></div>
                <!--Breadcrumbs-->
                <div class="font-vazir breadcrumbs"><a href="{{ route('home') }}" title="برگشت به صفحه اصلی">خانه</a><span class="main-title"><i class="icon anm anm-angle-right-l"></i>سفارش موفق</span></div>
                <!--End Breadcrumbs-->
            </div>
        </div>
    </div>
</div>
<!--End Page Header-->

<!--Order success-->
<div class="container">  
    <div class="success-text checkout-card text-center mb-4 mb-md-5">
        <i class="icon anm anm-shield-check"></i>
        <h2 class="font-vazir2">!با تشکر از شما برای سفارش شما</h2>
        <h6 class="font-vazir mb-1 mt-4">پرداخت با موفقیت انجام شد و سفارش شما در راه است</h6>
        <h6 class="font-vazir mb-1 mt-2">یک ایمیل تأیید سفارش با جزئیات سفارش و پیوندی برای پیگیری پیشرفت آن دریافت خواهید کرد</h6>                                  
        <p class="font-parastoo text-order badge bg-success mt-3">با تشکر از اعتماد شما : {{ Auth::user()->name }}</p>
    </div>
</div>
<!--End Order success-->

@endsection