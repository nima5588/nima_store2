@extends('layout.home')

@section('content')
<div class="container">
    <div class="tabs-listing">
        <ul class="nav nav-tabs style1 justify-content-center" id="productTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link head-font active" id="bestsellers-tab" data-bs-toggle="tab" data-bs-target="#bestsellers" type="button" role="tab" aria-controls="bestsellers" aria-selected="true"><a href="{{ route('home') }}">بازگشت به خانه</a></button>
            </li>
        </ul>
        @if (count($products) == 0)
            <h2 style="color: #2f415d">چیزی پیدا نشد</h2>
        @endif
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
                                    <a href="{{ route('product', ['id' => $product->id]) }}" class="product-img rounded-3"><img class="blur-up lazyload" src="{{ asset('img/'.$product->image) }}" alt="Product" title="محصول" width="625" height="808" /></a>
                                    <!-- End Product Image -->
                                    <!--Product Button-->
                                    <div class="button-set style1">
                                        <!--Cart Button-->
                                        <a href="#quickshop-modal" class="btn-icon addtocart quick-shop-modal" data-bs-toggle="modal" data-bs-target="#quickshop_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick Shop"><i class="icon anm anm-cart-l"></i><span class="text">Quick Shop</span></span>
                                        </a>
                                        <!--End Cart Button-->
                                        <!--Quick View Button-->
                                        <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                            <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                        </a>
                                        <!--End Quick View Button-->
                                        <!--Wishlist Button-->
                                        <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                        <!--End Wishlist Button-->
                                        <!--Compare Button-->
                                        <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                        <!--End Compare Button-->
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



                </div>
                <!--End Product Grid-->
            </div>
            
        </div>
    </div>
</div>
@endsection