@extends('main')

@section('content')

    <!-- Slider -->
    <section class="section-slide">
        <div class="wrap-slick1">
            <div class="slick1">

                @foreach($sliders as $slider)

                    <div class="item-slick1" style="background-image: url({{ $slider->image }});">
                        <div class="container h-full">
                            <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                                <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                HOT 2023
                            </span>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                    <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                        {{ $slider->name }}
                                    </h2>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                    <a href="{{ $slider->url }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                        Thêm ngay vào giỏ
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="features-area section_gap">
     <div clas="contante">
        <div class="row features-inner">
        <!-- single features -->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-features">
                <div class="f-icon">
                    <img src="\template\images\icons\f-icon1.png" alt="">
                </div>
                <h6>Giao hàng miễn phí</h6>

            </div>
        </div>
        <!-- single features -->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-features">
                <div class="f-icon">
                    <img src="\template\images\icons\f-icon2.png" alt="">
                </div>
                <h6>chính sách hoàn trả</h6>

            </div>
        </div>
        <!-- single features -->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-features">
                <div class="f-icon">
                    <img src="\template\images\icons\f-icon3.png" alt="">
                </div>
                <h6>Hỗ trợ 24/7</h6>

            </div>
        </div>
        <!-- single features -->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-features">
                <div class="f-icon">
                    <img src="\template\images\icons\f-icon4.png" alt="">
                </div>
                <h6>Thanh toán an toàn</h6>

            </div>
        </div>
    </div>
    </div>
    </section>
    <!-- Banner -->
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl1"style="text-align: center">
                    Danh mục sản phẩm
                </h3>
            </div>
            <div class="row">

                @foreach($menus as $menu)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!-- Block1 -->

                             <div class="block1 wrap-pic-w" >
                                    <img src="{{ $menu->image }}" alt="IMG-BANNER">
                                    <a href="/danh-muc/{{ $menu->id }}-{{ \Str::slug($menu->name, '-') }}.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">


                                        <div class="block1-txt-child2 p-b-4 trans-05">
                                            <div class="block1-link stext-101 cl0 trans-09">
                                                Xem ngay
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="block1-txt-child1 flex-col-l">
                                <a href="/danh-muc/{{ $menu->id }}-{{ \Str::slug($menu->name, '-') }}.html" >
                                     <span class="block1-info ltext-102 trans-04 p-b-8" >
                                          {{ $menu->name }}
                                    </span>
                                </a>
                                </div>

                    </div>

                @endforeach
            </div>
        </div>
    </div>


    <!-- Product -->
    <section class="bg0 p-t-23 p-b-140">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5"style="text-align: center">
                    Sản phẩm mới nhất
                </h3>
            </div>
            <div class="p-b-10">
                <p style="text-align: center">
                    các sản phẩm mới nhất 2023
                </p>
            </div>
            <div id="loadProduct">
                @include('products.list')
            </div>


            <!-- Load more -->
            <div class="flex-c-m flex-w w-full p-t-45" id="button-loadMore">
                <input type="hidden" value="1" id="page">
                <a onclick="loadMore()" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                    Load More
                </a>
            </div>
        </div>
    </section>
    <div class="review" id="review">

        <h1 class="heading"> customer's review</h1>

        <div class="box-container">

            <div class="box">
                <img src="/template/images/person/pic1.png" alt="">
                <h3>maria</h3>
                <p>Sản phẩm chất lượng tốt, đẹp, giao hàng nhanh.Tuy nhiên chất lượng không như ý</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>

            <div class="box">
                <img src="/template/images/person/pic2.png" alt="">
                <h3>john deo</h3>
                <p>Sản phẩm đúng như ý muốn, đẹp, chất lượng tốt</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="/template/images/person/pic3.png" alt="">
                <h3>harry potter</h3>
                <p>Sản phẩm đi vừa chân,đẹp,giao hàng nhanh.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

        </div>

    </div>
@endsection
