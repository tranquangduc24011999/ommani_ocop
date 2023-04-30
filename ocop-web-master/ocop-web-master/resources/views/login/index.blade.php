<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ asset('css/login-register-lock.css') }}" rel="stylesheet">
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="active-menu" content=" ">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x80" href="{{ asset('images/ocop-2.png') }}" >
<title>OCOP | Đăng nhập</title>
<!-- This page CSS -->

<!-- <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap&subset=latin-ext,vietnamese" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
<style>
    @media only screen and (max-width: 600px) {
        .dark-logo {
            margin-left: -12px;
        }

        .light-logo {
            margin-left: -12px;
        }
    }
    #swal2-content{
      font-family: sans-serif;
    }
    h1,h2,h3,h4,h5,h6,p,span,label{
        font-family: 'Quicksand', sans-serif;
    }

</style>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link
            href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap&subset=latin-ext,vietnamese"
            rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        span,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        body {
            font-family: 'Quicksand' !important;
            font-weight: 500 !important;
            background-color: white;

        }

        .field-icon {
            float: right;
            margin-left: -25px;
            margin-top: 12px;
            margin-right: 5px;
            position: relative;
            z-index: 2;
            font-family: 'FontAwesome' !important;
        }

        bg {
            background-image: url(./images/bg1.png);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            height: 100%;
            width: 100%;
            padding: 10% 0;
            position: fixed;
        }

		input[type=number]::-webkit-inner-spin-button,
		input[type=number]::-webkit-outer-spin-button {
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			margin: 0;
		}
        .digit-group input {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 10px;
            width: 45px;
            height: 45px;
            border: none;
            line-height: 50px;
            text-align: center;
            font-size: 24px;
            background-color: #E5E5E5;
            font-family: 'Raleway', sans-serif;
            font-weight: bold;
            color: black;
            margin: 0 7px;
        }

        .digit-group .splitter {
            padding: 0 5px;
            color: black;
            font-weight: bold;
            font-size: 18px;
        }

    </style>
</head>

<body class="skin-default card-no-border"
      style=" background-image:url(./images/1n4.jpg);background-size: cover;background-repeat: no-repeat;background-position: center center;height: 100%;width: 100%;padding: 5% 0;position: relative;overflow-y: scroll">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"><img src="./images/tgtext-min.png" alt="homepage" class="dark-logo" style="height: 15px;"/></p>
        </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->

<div id="main-wrapper" class="align-middle mt-1">

    <div class="row align-items-center">
        <div class="login-box card shadow-lg" style="border-radius: 10px; margin-top:80px">
            <img class="card-img-top img-responsive" src="./images/header-ocop-4.jpg" alt="Login"
                 style="border-top-left-radius: 10px;border-top-right-radius: 10px;">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                {{-- <form action="{!! route('postlogin') !!}" id="login" method="post">
                    {{ csrf_field() }} --}}
                    <div style="margin:auto; float:none;">
                        <img class="rounded mx-auto d-block" src="./images/userLogin.png" alt="Login">
                        <!-- <h4 class="mt-2 text-center">Đăng nhập</h4> -->
                        <div class="col-xs-12">
                            <div class="form-group">

                                <input type="text" value="" name="email" id="email"
                                       class="form-control" style="text-align:center" placeholder="Email" pal/>
                            </div>
                            <div class="form-group">

                                <input id="password" type="password" name="password" class="form-control"
                                       style="text-align:center" placeholder="Mật khẩu"/>
                                <span toggle="#pass" class="fa fa-fw fa-eye field-icon toggle-password"
                                      style="background-color: transparent;"></span>
                                <!-- <div class="text-right"><a class="text-successs" href="/recoverPasswordRequest">Quên mật khẩu</a></div> -->
                                <div style="display: none;" class="text-center text-danger">
                                    <h6 id="loginFailMsg"></h6>
                                    <div class="d-none" id="memberEmail"></div>
                                    <div class="d-none" id="memberPassword"></div>
                                    <div class="d-none" id="type-otp"></div>
                                </div>
                            </div>

                        </div>
                        <div class="text-right  mb-2">
                            <a href="/forgotpassword">Quên mật khẩu.</a>
                        </div>
                        <div class="col-xs-6">
                            <button type="submit" onclick="login()" style="background-color: #039252; color: #ffff;" value="Đăng nhập"
                                   class="btn btn-block">Đăng nhập</button>
                        </div>
                        <div class="text-center mt-3">
                            <a href="/register">Chưa có tài khoản? Đăng ký</a>
                        </div>
<!--                        <div class="col-xs-6 mt-2">-->
<!--                            <div style=" display:flex; justify-content:space-around;">-->

<!--                                <button type="button"-->
<!--                                        onclick="location.href='http://www.m.me/197599867569788?ref=ocop_login'"-->
<!--                                        class="btn waves-effect btn-circle"-->
<!--                                        style="background-color: #0084ff; color: #ffffff;">-->
<!--                                    <i class="fab fa-facebook-messenger"></i>-->
<!--                                </button>-->
<!--                                <button type="button" onclick="location.href='/auth/facebook'"-->
<!--                                        class="btn btn-facebook waves-effect btn-circle waves-light">-->
<!--                                    <i class="fa fa-facebook"></i>-->
<!--                                </button>-->
<!--                                <button type="button" onclick="location.href='/auth/google'"-->
<!--                                        class="btn btn-googleplus waves-effect btn-circle waves-light">-->
<!--                                    <i class="fa fa-google-plus"></i>-->
<!--                                </button>-->
<!--                            </div>-->
<!--                            <div class="text-center mt-3">-->
<!--                                &lt;!&ndash; <small class="text-muted text-center mt-3">© 2020 Kyc.net.vn. All Rights Reserved.</small> &ndash;&gt;-->
<!--                            </div>-->

<!--                        </div>-->

                        <p class="text-center mt-2 text-uppercase text-bold text-muted" style="font-size: 68%!important;">Cơ
                            quan quản lý: Isocus</p>

                        <div class="col-12 mt-2 px-5 row justify-content-center align-items-center">
                            <div class="col-6 mx-auto pl-5 row justify-content-end">
                                <a href="https://play.google.com/store/apps/details?id=com.ommanisoft.ocop" target="_blank">
                                <img src="./images/googleplay.png" alt="" style="width: 100%">
                                </a>
                            </div>
                            <div class="col-6 mx-auto pr-5 row align-items-center">
                                <a href="https://apps.apple.com/us/app/smart-ocop/id1642284184" target="_blank">
                                <img src="./images/appstore.png" alt="" style="width: 100%">
                                </a>
                            </div>
                        </div>
                    </div>
                {{-- </form> --}}
            </div>
        </div>

        <!-- Modal -->
        <div class="modal hide fade in" id="OTPModal" tabindex="-1" role="dialog" aria-labelledby="OTPModal"
             data-keyboard="false" data-backdrop="static" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container-fluid py-3">
                            <h4 class="text-center font-weight-bold">Xác thực thông tin</h4>
                            <h5 class="text-center font-weight-bold px-5" style="color: #616161">Vui lòng nhập mã OTP đã
                                được gửi về số điện thoại <span class="font-weight-bold" style="color: #09714E;"
                                                                id="member-id"></span></h5>
                            <div class="row justify-content-center mt-3">
                                <div class="digit-group" data-group-name="digits" data-autosubmit="false"
                                     autocomplete="off">
                                    <input type="text" id="digit-1" name="digit-1" data-next="digit-2"/>
                                    <input type="text" id="digit-2" name="digit-2" data-next="digit-3"
                                           data-previous="digit-1"/>
                                    <input type="text" id="digit-3" name="digit-3" data-next="digit-4"
                                           data-previous="digit-2"/>
                                    <input type="text" id="digit-4" name="digit-4" data-next="digit-5"
                                           data-previous="digit-3"/>
                                    <input type="text" id="digit-5" name="digit-5" data-next="digit-6"
                                           data-previous="digit-4"/>
                                    <input type="text" id="digit-6" name="digit-6" data-previous="digit-5"/>
                                </div>
                            </div>
                            <div class="text-center text-danger error-otp font-weight-bold mt-4"></div>
                            <h5 class="text-center font-weight-bold mt-4">Bạn chưa nhận được mã? <span
                                        class="font-weight-bold" id="resent-otp" style="color: #616161;cursor: pointer">Gửi lại OTP <span
                                            style="color: #09714E" id="countTime">(03:00)</span></span></h5>
                            <button id="btn-otp" class="btn col-12 font-weight-bold mt-2"
                                    style="background-color: #09714E;color: white">Xác nhận
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<!-- Sweet-Alert  -->
<script src="{{ asset('js/sweetalert.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('js/login.js') }}"></script>
<script>
    $(".toggle-password").click(function () {
        if ($(this).closest("div").find("input[type='password']").attr('type') === 'password') {
            $(this).closest("div").find("input[type='password']").attr('type', 'text');
        } else {
            $(this).closest("div").find("input[type='text']").attr('type', 'password');
        }
    })
</script>
<style>
  .topbar .top-navbar .mailbox {
    width: 382px;
  }
</style>
</body>

</html>
