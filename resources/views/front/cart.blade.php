
<!--MiniCart Drawer-->
<div id="minicart-drawer" class="minicart-right-drawer offcanvas offcanvas-end" tabindex="-1">
    <!--MiniCart Content-->
    <div id="cart-drawer" class="block block-cart">
    
        <div class="minicart-header">
            <button class="close-cart border-0" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="left" title="خروج"></i></button>
            <h4 class="font-samim fs-6">سبد شما</h4>
        </div>
        <div class="font-parastoo minicart-content">
            <ul class="m-0 clearfix">
                @if (is_array($baskets) || is_object($baskets))
                @foreach ($baskets as $basket)
                <li class="item d-flex justify-content-center align-items-center">
                    <a class="product-image rounded-3" href="#">
                        <img class="blur-up lazyload" data-src="{{ asset('img/'.$basket->product()->image) }}" src="{{ asset('img/'.$basket->product()->image) }}" alt="product" title="محصول" width="120" height="170" />
                    </a>
                    <div class="product-details">
                        <a class="product-title" href="#">{{ $basket->product()->name }}</a>
                        <p></p>
                        <div class="priceRow">
                            <div class="product-price">
                                <span class="price">تومان {{ $basket->product()->price }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="qtyDetail text-center">
                        <div class="qtyField">
                            <span type="text" name="quantity" value="1" class="qty">{{ $basket->count }}</span>
                        </div>
                        <a href="{{ route('basket-delete', ['id' => $basket->id]) }}" class="remove"><i class="icon anm anm-times-r" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"></i></a>
                    </div>
                </li>
                @endforeach
               
            </ul>
           
        </div>
        <div class="minicart-bottom">
            <div class="subtotal clearfix my-3">
                <div class="font-parastoo totalInfo clearfix"><span>کل:</span><span class="item product-price">{{ $total }}</span></div>
            </div>
            <div class="minicart-action d-flex mt-3">
                <a href="{{ route('basket-checkout' , ['user_id' => Auth::user()->id ]) }}" class="font-parastoo proceed-to-checkout btn btn-primary w-50 me-1">پرداخت</a>
                <a href="{{ route('cart-basket') }}" class="font-parastoo cart-btn btn btn-secondary w-50 ms-1">نمایش سبد</a>
            </div>
        </div>
        @endif
    </div>
    <!--MiniCart Content-->
</div>
<!--End MiniCart Drawer-->