@extends('layout.home')

@section('cart')
    @include('front.cart')
@endsection

@section('content')
<div id="page-content"> 
    <!--Page Header-->
    <div class="page-header text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="{{ route('home') }}" title="برگشت به صفحه اصلی">خانه</a><span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>جزعیات محصول</span></div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    <!--End Page Header-->

    <!--Main Content-->
    <div class="container">     
        <!--Product Content-->
        <div class="product-single">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-img mb-4 mb-md-0">
                    <!-- Product Horizontal -->
                    <div class="product-details-img product-horizontal-style">
                        <!-- Product Main -->
                        <div class="zoompro-wrap">
                            <!-- Product Image -->
                            <div class="zoompro-span"><img id="zoompro" class="zoompro" src="{{ asset('img/'.$product->image) }}" data-zoom-image="{{ asset('img/'.$product->image) }}" alt="product" width="625" height="808" /></div>
                            <!-- End Product Image -->
                        </div>
                        <!-- End Product Main -->
                    </div>
                    <!-- End Product Horizontal -->
                </div>

                <div class="mt-5 col-lg-6 col-md-6 col-sm-12 col-12 product-layout-info">
                    <!-- Product Details -->
                    <div class="product-single-meta">
                        <h2 class="product-main-title">{{ $product->name }}</h2>
                        <!-- Product Info -->
                        <p></p>
                        <p> {{ $product->category()->name }} : دسته بندی</p>
                        <p></p>
                        <!-- End Product Info -->
                        <!-- Product Price -->
                        <div class="product-price d-flex-center my-3">
                            <span class="price">{{ $product->price }} (تومان)</span>
                        </div>
                        <!-- End Product Price -->
                        <hr>
                        <!-- Sort Description -->
                        <div class="sort-description">{!! $product->description !!} : توضیحات</div>
                        <!-- End Sort Description -->
                    </div>
                    <!-- End Product Details -->

                    <!-- Product Form -->
                    {{-- <form method="post" action="#" class="product-form product-form-border hidedropdown"> --}}
                    <div class="product-form product-form-border hidedropdown">
                        <!-- Product Action -->
                        <div class="product-action w-100 d-flex-wrap my-3 my-md-4">
                            <!-- Product Add -->
                            <div class="product-form-submit addcart fl-1 ms-3">
                                @if (Auth::user())
                                <a class="btn btn-secondary product-form-cart-submit" href="{{ route('basket-add', ['product_id' => $product->id]) }}">اضافه کردن به سبد خرید</a>
                                @else
                                <a class="btn btn-secondary product-form-cart-submit" href="{{ route('login') }}">اضافه کردن به سبد خرید</a>
                                @endif
                            </div>
                            <!-- Product Add -->
                            <!-- Product Buy -->
                            <div class="product-form-submit buyit fl-1 ms-3">
                                <a href="{{ route('cart-basket') }}" class="btn btn-primary proceed-to-checkout"><span>نمایش سبد</span></a>
                            </div>
                            <!-- End Product Buy -->
                        </div>
                        <!-- End Product Action -->
                    </div>
                    {{-- </form> --}}
                    <!-- End Product Form -->
                </div>
            </div>
        </div>
        <!--Product Content-->
    </div>
    <!--End Main Content-->           
</div>
@endsection