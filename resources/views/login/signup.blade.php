<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    <link rel="stylesheet" href="template/css/login/linearicons.css">
    <link rel="stylesheet" href="template/css/login/owl.carousel.css">
    <link rel="stylesheet" href="template/css/login/themify-icons.css">
    <link rel="stylesheet" href="template/css/login/font-awesome.min.css">
    <link rel="stylesheet" href="template/css/login/nice-select.css">
    <link rel="stylesheet" href="template/css/login/nouislider.min.css">
    <link rel="stylesheet" href="template/css/login/bootstrap.css">
    <link rel="stylesheet" href="template/css/login/main.css">
</head>
<body >
<div  style="background-image: url(template/images/bg001.jpg);">
    <section class="login_box_area section_gap">
        <div class="container">
                <div class="col-lg-6">
                        <h2 style="text-align: center;color: white">Đăng ký ngay</h2>
                        <form class="row login_form" action="" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-12 form-group" style="text-align: left"><h4 style="color: white">Họ và tên</h4></div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'name'">
                            </div>
                            <div class="col-md-12 form-group" style="text-align: left"><h4 style="color: white">Số điện thoại</h4></div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'phone'">
                            </div>
                            <div class="col-md-12 form-group" style="text-align: left"><h4 style="color: white">địa chỉ</h4></div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="address" name="address" placeholder="address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'address'">
                            </div>
                            <div class="col-md-12 form-group" style="text-align: left"><h4 style="color: white">Email</h4></div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'">
                            </div>
                            <div class="col-md-12 form-group" style="text-align: left"><h4 style="color: white">Mật khẩu</h4></div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control"  placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            </div>
                            <div class="col-md-12 form-group" style="text-align: left"><h4 style="color: white">Xác nhận mật khẩu</h4></div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <label for="f-option2" style="color: #0a0e14"></label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Đăng ký</button>
                            </div>
                            <div class="col-md-12 form-group hover">
                                <a class="primary-btn" href="/login" style="color: white;text-align: center">Đăng nhập</a>
                            </div>
                            @csrf
                        </form>
                    </div>
        </div>
    </section>
</div>
</body>
</html>
