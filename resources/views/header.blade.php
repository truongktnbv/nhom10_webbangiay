<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">

        <div class="wrap-menu-desktop how-shadow1">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="#" class="logo">
                    <h3><b>NTTShop</b></h3>
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li ><a href="/" style="font-size: larger" ><b>Trang Chủ</b></a> </li>
                        <li>
                            <a href="/shop" style="font-size: larger" ><b>Sản Phẩm</b></a>
                        </li>
                        <li>
                            <a href="/blog" style="font-size: larger" ><b>Tin tức</b></a>
                        </li>
                        <li>
                            <a href="/contact" style="font-size: larger" ><b>Liên Hệ</b></a>
                        </li>
                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>

                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11  js-show-cart"
                        >
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-sidebar">
                        <i class="zmdi zmdi-account">
                        </i>
                    </div>

                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="index.html"><img src="/template/images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="0"
            data-notify="{{ !is_null(\Session::get('carts')) ? count(\Session::get('carts')) : 0 }}">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
        </div>
    </div>


    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <li ><a href="/" style="font-size: larger" ><b>Trang Chủ</b></a> </li>
        <li>
            <a href="/shop" style="font-size: larger" ><b>Sản Phẩm</b></a>
        </li>
        <li>
            <a href="/" style="font-size: larger" ><b>Cửa Hàng</b></a>
        </li>
        <li>
            <a href="/" style="font-size: larger" ><b>Bài Viết</b></a>
        </li>
        <li>
            <a href="/" style="font-size: larger" ><b>Liên Hệ</b></a>
        </li>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="/template/images/icons/icon-close2.png" alt="CLOSE">
            </button>

            <form action="/search" method="post" class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
                @csrf
            </form>
        </div>
    </div>
</header>
