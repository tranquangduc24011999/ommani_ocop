@extends('master')
@section('content')
<div class="page-wrapper" style="min-height: 954px;">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Thông tin cá nhân</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0)"> </a></li> -->
                        <!-- <li class="breadcrumb-item active">Thông tin cá nhân</li> -->
                    </ol>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Info box Content -->
        <!-- ============================================================== -->
        <div id="updateInfoSection" class="card">
            <div class="card-body">
                <h4 class="card-title">Thông tin cá nhân</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="product-img mt-5">
                            <div id="img_avatar" class="text-center" style="height: 186px;"><img
                                    src="{{ asset('images/noavatar.png') }}"
                                    style="width: 180px; height: 180px; border-radius: 50%;" alt="Image"></div>
                            <div id="spinner" style="display: none;">
                                <div class="spinner-grow text-success" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-danger" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <div class="spinner-grow text-warning" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <br>
                            <div id="uploadImgBtn" class="fileupload btn waves-effect waves-light">
                                <button for="uploadInput">
                                    Chọn ảnh
                                </button>
                                <input type="file" class="upload" id="uploadInput">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group m-b-20">
                            <label for="txtFullName" id="lablefullname">Họ tên</label>
                            <input type="text" class="form-control" id="txtFullName" name="txtFullName" required="true"
                                autocomplete="off" value="">
                            <span class="bar"></span>
                        </div>
                        <div class="form-group m-b-20" id="typeDiv">
                            <label for="txtType">Chức vụ</label>
                            <input type="text" class="form-control" id="txtType" name="txtType" disabled="disabled"
                                value="Chủ thể - cấp Huyện">
                            <span class="bar"></span>
                        </div>
                        <div class="row">
                            <div style="display: none" class="col-sm-6">
                                <div class="form-group m-b-20">
                                    <label for="txtType">Đơn vị công tác</label>
                                    <input type="text" class="form-control" id="workUnit" name="workUnit">
                                </div>
                            </div>
                            <div style="display: none" class="col-sm-6">
                                <div class="form-group m-b-20">
                                    <label for="txtType">Chức vụ tại nơi công tác</label>
                                    <input type="text" class="form-control" id="workPosition" name="workPosition">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group m-b-20">
                                    <label for="txtPhone">Số điện thoại</label>
                                    <input type="number" class="form-control" id="txtPhone" name="txtPhone"
                                        required="true" autocomplete="off"
                                        value="{{Auth::guard('web')->user()->phone}}">
                                    <code id="wrong-phone-format" style="display: none"><i>Vui lòng nhập đúng
                                            SĐT của
                                            bạn.</i></code>
                                    <span class="bar"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group m-b-20">
                                    <label for="txtEmail">Email</label>
                                    <input type="text" class="form-control" id="txtEmail" name="txtEmail"
                                        required="true" autocomplete="off" disabled="disabled"
                                        value="{{Auth::guard('web')->user()->email}}">
                                    <code id="wrong-email-form" style="display: none"><i>Vui lòng nhập đúng
                                            email của
                                            bạn.</i></code>
                                    <span class="bar"></span>
                                </div>
                            </div>
                        </div>
                        <div style="display: none" class="form-group m-b-20">
                            <label>Ngày sinh</label>
                            <input class="form-control" type="date" id="txtBirthDay">
                            <span class="bar"></span>
                        </div>
                        <div class="form-group m-b-20">
                            <label for="txtAddress">Địa chỉ</label>
                            <input type="text" class="form-control" id="txtAddress" required="false"
                                autocomplete="organization" readonly="readonly"
                                onfocus="this.removeAttribute('readonly');">
                            <span class="bar"></span>
                        </div>
                        <div id="locationSelector" class="row">
                            <div class="col-sm-4 form-group m-b-20">
                                <label for="txtlevel">Tỉnh/TP</label>
                                <select class="form-control select2-hidden-accessible" style="width: 100%"
                                    name="cboProvincial" id="cboProvincial" data-select2-id="cboProvincial"
                                    tabindex="-1" aria-hidden="true">
                                </select>
                            </div>
                            <div class="col-sm-4 form-group m-b-20">
                                <label for="txtlevel">Quận/Huyện</label>
                                <select class="form-control select2-hidden-accessible" style="width: 100%"
                                    name="cboDistricts" id="cboDistricts" data-select2-id="cboDistricts" tabindex="-1"
                                    aria-hidden="true">

                                </select>
                                
                            </div>
                            <div class="col-sm-4 form-group m-b-20">
                                <label for="txtname">Xã/Phường</label>
                                <select class="form-control select2-hidden-accessible" style="width: 100%"
                                    name="cboWards" id="cboWards" data-select2-id="cboWards" tabindex="-1"
                                    aria-hidden="true">

                                </select>
                              
                            </div>
                        </div>
                        <div class="text-right"><button id="saveInfoBtn" class="btn btn-success">Lưu thông
                                tin</button></div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div id="updatePasswordSection" class="card">
            <div class="card-body">
                <h4 class="card-title">Cập nhật mật khẩu</h4>
                <div class="container col-sm-8 col-md-6 col-lg-6" style="margin:20px auto; float:none;">
                    <div class="col-xs-12">
                        <div class="form-group m-b-20">
                            <label for="txtOldPass">Mật khẩu cũ</label>
                            <input type="password" class="form-control" id="txtOldPass" name="txtOldPass">
                            <span toggle="#txtOldPass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <span class="bar"></span>
                        </div>
                        <div class="form-group m-b-20">
                            <label for="txtPass">Mật khẩu mới</label>
                            <input type="password" class="form-control" id="txtPass" name="txtPass">
                            <span toggle="#txtPass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <span class="bar"></span>
                        </div>
                        <div class="form-group m-b-20">
                            <label for="txtCfPass">Xác nhận mật khẩu mới</label>
                            <input type="password" class="form-control" id="txtCfPass" name="txtCfPass">
                            <span toggle="#txtCfPass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <span class="bar"></span>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button id="confirmUpdatePassBtn" class="btn btn-success">Cập nhật mật khẩu</button>
                </div>
            </div>
        </div>
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
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar ps ps--theme_default" data-ps-id="65899805-bef8-7595-62da-6f346fa9539f">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme working">1</a>
                        </li>
                        <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a>
                        </li>
                        <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a>
                        </li>
                        <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;">
                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
</div>
<style>
    @media only screen and (max-width: 600px) {
        .dark-logo {
            margin-left: -12px;
        }

        .light-logo {
            margin-left: -12px;
        }
    }

    #swal2-content {
        font-family: sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    span,
    label {
        font-family: 'Quicksand', sans-serif;
    }
</style>
<style>
    .field-icon {
        float: right;
        margin-left: -25px;
        margin-top: 12px;
        margin-right: 5px;
        position: relative;
        z-index: 2;
        font-family: 'FontAwesome' !important;
    }
</style>
@endsection()