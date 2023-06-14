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
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="template/images/login.jpg" alt="">
                        <div class="hover">
                            <h4>Chưa có tài khoản?</h4>
                            <a class="primary-btn" href="/sign">Tạo tài khoản</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3 style="color: white">Đăng nhập ngay</h3>
                        @include('admin.alert')
                        <form class="row login_form" action="/login" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <label for="f-option2" style="color: white"><input type="checkbox" id="f-option2" name="remember">Ghi nhớ</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Đăng nhập</button>
                                <a href="#"style="color: white">Quên mật khẩu?</a>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>
