@extends('layout.home')

@section('content')

<!--Page Header-->
<div class="page-header text-center">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                <div class="page-title"><h1>سبد خرید</h1></div>
                <!--Breadcrumbs-->
                <div class="breadcrumbs"><a href="{{ route('home') }}" title="بازگشت به صفحه اصلی">خانه</a><span class="main-title"><i class="icon anm anm-angle-right-l"></i>سبد خرید</span></div>
                <!--End Breadcrumbs-->
            </div>
        </div>
    </div>
</div>
<!--End Page Header-->

<!--Main Content-->
<div class="container">     
    <div class="row">
        <!--Cart Content-->
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 main-col">
            <div class="alert alert-success py-2 alert-dismissible fade show cart-alert" role="alert">
                <i class="align-middle icon anm anm-truck icon-large me-2"></i><strong class="text-uppercase">!تبریک میگویم</strong>!شما ارسال رایگان دارید
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <!--End Alert msg-->

            <!--Cart Form-->
            {{-- <form action="#" method="post" class="cart-table table-bottom-brd"> --}}
            <div class="cart-table table-bottom-brd">
                <table class="table align-middle">
                    <thead class="cart-row cart-header small-hide position-relative">
                        <tr>
                            <th class="action">&nbsp;</th>
                            <th colspan="2" class="text-start">محصول</th>
                            <th class="text-center">قیمت</th>
                            <th class="text-center">تعداد</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($baskets as $basket)
                        <tr class="cart-row cart-flex position-relative">
                            <td class="cart-delete text-center small-hide"><a href="#" class="cart-remove remove-icon position-static" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"><i class="icon anm anm-times-r"></i></a></td>
                            <td class="cart-image cart-flex-item">
                                <img class="cart-image rounded-0 blur-up lazyload" data-src="{{ asset('img/'.$basket->product()->image) }}" src="{{ asset('img/'.$basket->product()->image) }}" alt="Sunset Sleep Scarf Top" width="120" height="170" />
                            </td>
                            <td class="cart-meta small-text-left cart-flex-item">
                                <div class="list-view-item-title">
                                    <span>{{ $basket->product()->name }}</span>
                                </div>
                            </td>
                            <td class="cart-price cart-flex-item text-center small-hide">
                                <span class="money">{{ $basket->product()->price }}</span>
                            </td>
                            <td class="cart-update-wrapper cart-flex-item text-end text-md-center">
                                <span class="cart-qty-input qty">{{ $basket->count }}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="text-start"><a href="{{ route('home') }}" class="btn btn-outline-secondary btn-sm cart-continue"><i class="icon anm anm-angle-left-r me-2 d-none"></i>میخواهم محصولات بیشتری اضافه کنم</a></td>
                            <td colspan="3" class="text-end">
                                <a name="update" href="{{ route('cart-basket') }}" class="btn btn-secondary btn-sm cart-continue ms-2"><i class="icon anm anm-sync-ar me-2 d-none"></i>بروزرسانی سبد</a>
                            </td>
                        </tr>
                    </tfoot>
                </table> 
            </div>
            {{-- </form> --}}
            <!--End Cart Form-->
        </div>
        <!--End Cart Content-->

        <!--Cart Sidebar-->
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart-footer">
            <div class="cart-info sidebar-sticky">
                <div class="cart-order-detail cart-col">
                    <div class="row g-0 border-bottom pb-2">
                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>تکمیل سبد خرید</strong></span>
                    </div>
                    <div class="row g-0 border-bottom py-2">
                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>بخوانید</strong></span>
                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><a href="#" class="money">شرایط استفاده</a></span>
                    </div>
                    <div class="row g-0 border-bottom py-2">
                        <span class="col-6 col-sm-6 cart-subtotal-title"><strong>حریم خصوصی</strong></span>
                        <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><a href="#" class="money">سیاست حفظ حریم خصوصی</a></span>
                    </div>
                    <div class="row g-0 pt-2">
                        <span class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>کل</strong></span>
                        <span class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary"><b class="money">{{ $total }}</b></span>
                    </div>

                    <p></p>
                    <div class="customCheckbox cart-tearm">
                        <input type="checkbox" value="allen-vela" id="cart-tearm">
                        <label for="cart-tearm">من با شرایط و ضوابط موافقم</label>
                    </div>
                    <a href="{{ route('basket-checkout' , ['user_id' => Auth::user()->id ]) }}" id="cartCheckout" class="btn btn-lg my-4 checkout w-100">پرداخت</a>
                    <div class="paymnet-img text-center"><img src="{{ asset('assets/images/icons/safepayment.png') }}" alt="Payment" width="299" height="28" /></div>
                </div>                               
            </div>
        </div>
        <!--End Cart Sidebar-->
    </div>
</div>
<!--End Main Content-->

@endsection