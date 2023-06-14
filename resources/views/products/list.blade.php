<div class="row isotope-grid">
    @foreach($products as  $product)

        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

            <!-- Block2 -->
            <div class="block2">
                <div class="block2-pic hov-img0">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}">
                    <span>
                        <a href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                            Quick View
                        </a>
                    </span>
                </div>

                <div class="block2-txt flex-w flex-t p-t-14">
                    <div class="block2-txt-child1 flex-col-l ">
                        <a href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html"
                           class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            {{ $product->name }}
                        </a>

                        <span class="stext-105 cl3">
                            <p>$
                                {!!  \App\Helpers\Helper::price($product->price, $product->price_sale)  !!}</p>
                        </span>
                    </div>
                    <div class="block2-txt-child2 flex-r p-t-3 icon-header-item1">
                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    @endforeach
</div>
