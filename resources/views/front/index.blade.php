@extends('layout.home')

@section('cart')
    @include('front.cart')
@endsection

@section('content')

    <!--Home Slideshow-->
    <section class="slideshow slideshow-wrapper">
        <div class="home-slideshow slick-arrow-dots">

            @foreach ($sliderProducts as $slider)

            <div class="slide">
                <div class="slideshow-wrap">
                    <picture>
                        <source media="(max-width:767px)" srcset="{{ asset('img/'.$slider->image) }}" width="1150" height="800">
                        <img class="blur-up lazyload" src="{{ asset('img/'.$slider->image) }}" alt="slideshow" title="" width="1920" height="795" />
                    </picture>  
                    <div class="container">
                        <div class="slideshow-content slideshow-overlay middle-right">
                            <div class="slideshow-content-in">
                                <div class="wrap-caption animation style1">
                                    <h2 class="ss-mega-title">{{ $slider->name }}</h2>
                                    <p class="ss-sub-title xs-hide">{!! $slider->description !!}</p>
                                    <div class="ss-btnWrap d-flex-justify-start">
                                        <a class="btn btn-primary" href="{{ route('product', ['id' => $slider->id]) }}">بیشتر کشف کنید</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
            
        </div>
    </section>
    <!--End Home Slideshow-->

    <!--Service Section-->
    <section class="section service-section pb-0">
        <div class="container">
            <div class="service-info row col-row row-cols-lg-4 row-cols-md-4 row-cols-sm-2 row-cols-2 text-center">
                <div class="service-wrap col-item">
                    <div class="service-icon mb-3">
                        <i class="icon anm anm-phone-call-l"></i>
                    </div>
                    <div class="service-content">
                        <h3 class="title mb-2">هر زمان با ما تماس بگیرید</h3>
                        <span class="text-muted">شبانه روزی</span>
                    </div>
                </div>
                <div class="service-wrap col-item">
                    <div class="service-icon mb-3">
                        <i class="icon anm anm-truck-l"></i>
                    </div>
                    <div class="service-content">
                        <h3 class="title mb-2">سرویس در هر فروشگاه</h3>
                        <span class="text-muted">حمل و نقل رایگان با سفارشات بیش از 100 هزار تومن</span>
                    </div>
                </div>
                <div class="service-wrap col-item">
                    <div class="service-icon mb-3">
                        <i class="icon anm anm-credit-card-l"></i>
                    </div>
                    <div class="service-content">
                        <h3 class="title mb-2">پرداخت ایمن</h3>
                        <span class="text-muted">ما همه کارتهای اعتباری اصلی را می پذیریم</span>
                    </div>
                </div>
                <div class="service-wrap col-item">
                    <div class="service-icon mb-3">
                        <i class="icon anm anm-redo-l"></i>
                    </div>
                    <div class="service-content">
                        <h3 class="title mb-2">بازده رایگان</h3>
                        <span class="text-muted">یک ماه ضمانت بازگشت رایگان</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Service Section-->

    <!--Popular Categories-->
    <section class="section collection-slider pb-0">
        <div class="container">
            <div class="section-header">
                <p class="mb-2 mt-0">خرید بر اساس دسته بندی</p>
                <h2>مجموعه های دسته بندی</h2>
            </div>

            
            <div class="collection-slider-5items gp15 arwOut5 hov-arrow">
                @foreach ($categories as $category)
                <div class="category-item zoomscal-hov">
                    <a href="{{ route('home', ['category' => $category->id]) }}" class="category-link clr-none">
                        <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload" data-src="{{ asset('img/'.$category->image) }}" src="{{ asset('img/'.$category->image) }}" alt="Men's Jakets" title="{{ $category->name }}" width="365" height="365" /></div>
                        <div class="details mt-3 text-center">
                            <h4 class="category-title mb-0">{{ $category->name }}</h4>
                            <p class="counts">{{ $category->products_count }} تعداد محصول</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            

        </div>
    </section>
    <!--End Popular Categories-->

    <!--Products With Tabs-->
    <section class="section product-slider tab-slider-product">
        <div class="container">
            <div class="section-header">
                <h2>محصولات</h2>
                <p>تنوع عظیمی از بهترین محصولات ما را مرور کنید</p>
            </div>

            <div class="tabs-listing">
                <ul class="nav nav-tabs style1 justify-content-center" id="productTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link head-font active" id="bestsellers-tab" data-bs-toggle="tab" data-bs-target="#bestsellers" type="button" role="tab" aria-controls="bestsellers" aria-selected="true"><a href="{{ route('home') }}">همه</a></button>
                    </li>
                </ul>

                <div class="tab-content" id="productTabsContent">
                    <div class="tab-pane show active" id="bestsellers" role="tabpanel" aria-labelledby="bestsellers-tab">
                        <!--Product Grid-->
                        <div class="grid-products grid-view-items">
                            <div class="row col-row product-options row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">        
                                @foreach ($products as $product)

                                <div class="item col-item">
                                    <div class="product-box">
                                        <!-- Start Product Image -->
                                        <div class="product-image">
                                            <!-- Start Product Image -->
                                            <a href="{{ route('product', ['id' => $product->id]) }}" class="product-img rounded-3"><img class="blur-up lazyload" src="{{ asset('img/'.$product->image) }}" alt="Product" title="{{ $product->name }}" width="625" height="808" /></a>
                                            <!-- End Product Image -->
                                            <!--Product Button-->
                                            <div class="button-set style1">
                                                <a href="{{ route('basket-add', ['product_id' => $product->id]) }}" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="اضافه کردن به سبد"><i class="icon anm anm-cart-l"></i><span class="text">اضفه کردن به سبد</span></a>
                                            </div>
                                            <!--End Product Button-->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Start Product Details -->
                                        <div class="product-details">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="{{ route('product', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">{{ $product->price }}</span>
                                            </div>
                                            <!-- End Product Price -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>

                                @endforeach                                          
                            </div> 


                            <div class="view-collection text-center mt-4 mt-md-5">
                                {{ $products->links() }}
                            </div>
                        </div>
                        <!--End Product Grid-->
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--End Products With Tabs-->
    
@endsection