@extends('main')
@section('content')
    <!-- Content page -->
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Thông tin cá nhân
                    </h4>
                    <form action="" method="POST>
                        <h4 class="mtext-105 cl2 txt-center p-b-30">
                        </h4>
                        <h6>Họ và tên</h6>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name" value="{{ $customer->name }}" placeholder="">
                        </div>
                        <h6>số điện thoại</h6>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="phone" value="{{ $customer->phone }}" placeholder="">
                        </div>
                        <h6>Địa chỉ</h6>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="address" value="{{ $customer->address }}" placeholder="">
                        </div>
                        <h6>Email</h6>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" value="{{ $customer->email }}" placeholder="">
                        </div>
                        <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            Cập nhật
                        </button>
                    </form>
                </div>

                <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                    <img class="img-fluid" src="template/images/login.jpg" style="width:100%;height:auto" alt="">
                </div>
            </div>
        </div>
    </section>


@endsection
