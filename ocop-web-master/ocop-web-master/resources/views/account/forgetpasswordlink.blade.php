<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="/assets/js/toast-master/css/jquery.toast.css" rel="stylesheet">
    <style>
        .form-gap {
            padding-top: 70px;
        }

        @import url(https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css);

		#progress_bar {
			margin: 10px 0;
			padding: 3px;
			border: 1px solid #000;
			font-size: 14px;
			clear: both;
			opacity: 0;
			-moz-transition: opacity 1s linear;
			-o-transition: opacity 1s linear;
			-webkit-transition: opacity 1s linear;
		}

		#progress_bar.loading {
			opacity: 1.0;
		}

		#progress_bar .percent {
			background-color: #99ccff;
			height: auto;
			width: 0;
		}

		input[type=number]::-webkit-inner-spin-button,
		input[type=number]::-webkit-outer-spin-button {
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			margin: 0;
		}

		form {
			background-color: rgba(248, 248, 248, .9);
			padding: 3%;
			border-radius: 12px;
			background-color: #f5f5f3;
		}

		.form-material .form-control {
			background-color: #ffffff;
		}

		
		.select2-container--default .select2-selection--single {
			height: 35px;
			border-style: solid;
			border-width: 0.5px;
			border-color: darkgrey;
			border-radius: 100px;
			border-color: transparent;
		}

		.select2-container--default.select2-container--open.select2-container--below .select2-selection--single,
		.select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
			border-top-left-radius: 15px;
			border-top-right-radius: 15px;
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
        .titleForgot{
            font-family: sans-serif;
            font-size: 21px;
            margin-top: 15px;
        }
        .subtitle{
            font-family: sans-serif;
            font-size: 14px;
            color: #777;
        }
        .input-group-addon{
            width: auto!important;
            top: 5px!important;
        }
        .glyphicon{
            top: 5px!important;
        }
    </style>
</head>

<body class="skin-default card-no-border" 5>
    <div class="form-gap"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                            <h3><img
                                    src="{{ asset('images/forgotpassword.svg') }}">
                            </h3>
                            <h2 class="text-center titleForgot">Quên mật khẩu?</h2>
                            <p class="subtitle">Nhập email và mật khẩu mới.</p>
                            <div class="panel-body">
                                <form action="{{ url('/resetpassword') }}" method="post" enctype="multipart/form-data" id="register-form" class="form">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="email" name="email" placeholder="Email"
                                                class="form-control" type="email" style="font-size: 13px;">
                                                @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-asterisk color-blue"></i></span>
                                            <input id="password" name="password" placeholder="Mật khẩu"
                                                class="form-control" type="password" style="font-size: 13px;">
                                                @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-asterisk color-blue"></i></span>
                                            <input id="password_confirmation" name="password_confirmation" placeholder="Xác nhận lại mật khẩu"
                                                class="form-control" type="password" style="font-size: 13px;">
                                                @if ($errors->has('password_confirmation'))
                                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div style="margin-bottom:10px">
                                        <input type="submit" value="Tiếp tục" class="btn" style="background-color: #039252;color: #ffff;width:100%;font-size: 14px;font-family: sans-serif;" />
                                        {{-- <a class="btn" 
                                            style="background-color: #039252;color: #ffff;width:100%;font-size: 14px;font-family: sans-serif;"
                                            onclick="sendMailResetPass()">Khôi phục</a> --}}

                                    </div>
                                    <a href="/login" style="color: #333;font-family: sans-serif;font-size: 14px">Quay lại</a>
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal hide fade in" id="OTPModal" tabindex="-1" role="dialog" aria-labelledby="OTPModal"
        data-keyboard="false" data-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid py-3">
                        <p class="text-center font-weight-bold" style="font-size: 20px;">Xác thực thông tin</p>
                        <span class="text-center font-weight-bold px-5" style="color: #616161">Vui lòng nhập mã OTP đã
                            được gửi về số điện thoại <span class="font-weight-bold" style="color: #09714E;"
                                id="member-id"></span></span>
                        <div class="row justify-content-center mt-3">
                            <div class="digit-group" data-group-name="digits" data-autosubmit="false"
                                autocomplete="off">
                                <input type="text" id="digit-1" name="digit-1" data-next="digit-2" autofocus />
                                <input type="text" id="digit-2" name="digit-2" data-next="digit-3"
                                    data-previous="digit-1" />
                                <input type="text" id="digit-3" name="digit-3" data-next="digit-4"
                                    data-previous="digit-2" />
                                <input type="text" id="digit-4" name="digit-4" data-next="digit-5"
                                    data-previous="digit-3" />
                                <input type="text" id="digit-5" name="digit-5" data-next="digit-6"
                                    data-previous="digit-4" />
                                <input type="text" id="digit-6" name="digit-6" data-previous="digit-5" />
                            </div>
                        </div>
                        <div class="text-center text-danger error-otp font-weight-bold mt-4"></div>
                        <p class="text-center font-weight-bold mt-4">Bạn chưa nhận được mã? <span
                                class="font-weight-bold" id="resent-otp" style="color: #c01111;cursor: pointer;font-size: 13px;padding-left: 5px;">Gửi lại
                                OTP <span style="color: #09714E" id="countTime">(03:00)</span></span></p>
                        <button id="btn-otp" class="btn col-12 font-weight-bold mt-2"
                            style="background-color: #09714E;color: white;font-size: 14px;">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/psid.js') }}"></script>
    <script src="{{ asset('js/jquery-3.js') }}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('js/perfect-scrollbar.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('js/sticky-kit.js') }}"></script>
    <script src="/assets/js/sparkline/jquery.sparkline.min.js"></script>

    <!--Custom JavaScript -->
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="/assets/js/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script>
        $(".toggle-password").click(function () {
            console.log('click')
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
    <script type='text/javascript' src="/js/sweetalert/sweetalert.min.js"></script>
    <script type='text/javascript' src="/js/sweetalert/jquery.sweet-alert.custom.js"></script>
    <script type='text/javascript' src="/js/Alert copy.js?vesion=1.1.3.2"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

    <script src="/assets/js/toast-master/js/jquery.toast.js"></script>
    <!-- Menu sidebar -->
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <script src="dist/js/pages/jasny-bootstrap.js"></script>
    <!-- <script src="/javascripts/register.js"></script> -->
</body>
<script>
  let newMember = null
  $(document).ready(()=>{
    // $('#OTPModal').modal('show')
    // $('#OTPModal').on('shown.bs.modal', function () {
    //                 $('#digit-1').focus();
    // })
    $('.digit-group').find('input').each(function () {
        $(this).attr('maxlength', 1);
        $(this).on('keyup', function (e) {
            if (e.keyCode === 8 || e.keyCode === 37 || (e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
                let parent = $($(this).parent());
                if (e.keyCode === 8 || e.keyCode === 37) {
                    let prev = parent.find('input#' + $(this).data('previous'));

                    if (prev.length) {
                        $(prev).select()
                    }
                } else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
                    let next = parent.find('input#' + $(this).data('next'));

                    if (next.length) {
                        $(next).select()
                    }
                }
            }
        });
    });
    $('#resent-otp').click(function () {
        $.ajax({
            url: "/resentOtp",
            type: "POST",
            data: newMember,
            dataType: "text",
            success: function (ret) {
                let data = JSON.parse(ret)
                if (data.success) {
                    let time = 60 * 3
                    let display = document.querySelector('#countTime')
                    clearInterval(timeInterval);
                    startTimer(time, display);
                }
            },
            error: function (err) {
                throw new Error(err)
            }
        })
    })
    $('#btn-otp').click(function () {
        
        $('#error-otp').hide()
        let otp = ''
        $('.digit-group').find('input').each(function () {
            otp += $(this).val()
        });
        let otpData = {
            otp: otp,
            memberId: newMember._id
        }
        $.ajax({
            url: "/checkOtpForgotPass",
            type: "POST",
            data: otpData,
            dataType: "text",
            success: function (ret) {
                let data = JSON.parse(ret)
                if (data.success) {
                    if(data.token){
                        $.toast({
                            heading: 'Thành công!',
                            text: 'Mã OTP chính xác. Vui lòng khởi tạo mật khẩu mới.',
                            position: 'mid-center',
                            icon: 'success',
                            hideAfter: 2000,
                            stack: 6
                        });
                        setTimeout(()=>{
                            window.location.href = data.token
                        },2000)
                        
                    }else{
                        $('.error-otp').text(data.message)
                    }
                    // window.location.href = '/login';
                } else {
                    $('.error-otp').text(data.message)
                    $('.error-otp').show()
                }
            },
            error: function (err) {
                throw new Error(err)
            }
        })
    })
  })
    const sendMailResetPass = ()=>{     
        const phone = document.getElementById('phone').value
        if(!phone || phone===''){
            $.toast({
            heading: 'Cảnh báo!',
            text: 'Bạn vui lòng nhập số điện thoại!',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'warning',
            hideAfter: 2000,
            stack: 6
            });
            return
        }else{
            $.ajax({
                    url: "forgotPassword",
                    data: { phone: phone },
                    type: "POST",
                    success: function (ret) {
                        if (ret) {
                          if(ret.success){
                            newMember = ret.data
                            $('#OTPModal').modal('show')
                            $('#OTPModal').on('shown.bs.modal', function () {
                                $('#digit-1').focus();
                            })
                            let time = 60 * 3
                            let display = document.querySelector('#countTime');
                            startTimer(time, display);
                            // document.getElementById('phone').value = ''
                            // Swal.fire('Chúng tôi đã gửi cho bạn một email khôi phục mật khẩu!', '', 'success').then((result) =>{
                            //   if(result && result.value){
                            //     window.location.href='/login'
                            //   }
                            // })

                          }else{
                            $.toast({
                            heading: 'Cảnh báo!',
                            text: ret.message,
                            position: 'top-right',
                            loaderBg: '#ff6849',
                            icon: 'warning',
                            hideAfter: 2000,
                            stack: 6
                            });
                          }
                        }else{
                            $.toast({
                            heading: 'Cảnh báo!',
                            text: 'Đã có lỗi xảy ra!',
                            position: 'top-right',
                            loaderBg: '#ff6849',
                            icon: 'error',
                            hideAfter: 2000,
                            stack: 6
                            });
                        }
                    },
                    error:function(error,err){
                        if(error){
                            if(error.responseJSON){
                                const resErr = error.responseJSON
                                $.toast({
                                    heading: 'Cảnh báo!',
                                    text: resErr.message.length > 0 ? resErr.message[0].email : resErr.message,
                                    position: 'top-right',
                                    loaderBg: '#ff6849',
                                    icon: 'error',
                                    hideAfter: 2000,
                                    stack: 6
                                    });
                            }
                        }
                        console.log(error,err,90)
                    }
                })
        }
    }
    function startTimer(duration, display) {
        let timer = duration, minutes, seconds;
        timeInterval = setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = `(${minutes}:${seconds})`;

            if (--timer < 0) {
                clearInterval(timeInterval)
            }
        }, 1000);
    }
</script>

</html>