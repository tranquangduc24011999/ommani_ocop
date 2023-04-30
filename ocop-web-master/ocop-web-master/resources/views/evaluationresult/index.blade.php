@extends('master')
@section('content')
<style>
    /* .col-2 {
  flex: 0 0 14.66667%;
  max-width: 14.66667%;
} */
    .Rectangle {
        height: auto;
    }

    label {
        margin-bottom: 0;
    }

    .nametitle {
        width: 322px;
        font-size: 16px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.29;
        letter-spacing: normal;
        color: #191935;
        font-family: 'Quicksand', sans-serif;
        margin-bottom: 5px;
    }

    .subtitile {
        margin: 0px;
        width: 270px;
        height: 20px;
        font-size: 14px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.33;
        letter-spacing: normal;
        color: #6d7182;
        font-family: 'Quicksand', sans-serif;
    }

    .subtitile2 {
        width: 144px;
        height: 20px;
        font-family: 'Quicksand', sans-serif;
        font-size: 13px;
        font-weight: 500;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.33;
        letter-spacing: normal;
        color: #fd9600;
    }

    .Rectanglesss {
        width: 70px;
        height: 44px;
        border-radius: 8px;
        border: solid 1px #eff0f1;
        background-color: #ffffff;
    }

    .button {
        width: 176px;
        float: right;
        height: 40px;
        border-color: #049252;
        border-radius: 8px;
        background-color: #049252;
        text-align: center
    }

    .textbutton {
        width: 44px;
        height: 20px;
        font-family: 'Quicksand', sans-serif;
        font-size: 15px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.33;
        letter-spacing: normal;
        text-align: center;
        color: #fdfdfd;
        margin-top: 8px;
    }

    .ttilte {
        margin-left: 8px;
        width: 49px;
        height: 16px;
        font-family: 'Quicksand', sans-serif;
        font-size: 13px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.23;
        letter-spacing: normal;
        color: #049252;
    }

    #divginore {
        padding: 24px 24px;
        margin: 0px;
        border-radius: 12px
    }

    @media only screen and (min-width: 768px) and (max-width: 1024px) {
        #divginore {
            padding: 19px 0px;
            margin: 0px;
            border-radius: 12px;
        }

        .Rectanglesss {
            position: absolute;
            margin-top: -62px;
            margin-left: -15px;
        }

        .col-sm-6 {
            margin-bottom: 34px;
        }

        .nametitle {
            width: 125%;
            overflow: hidden;
        }

        .subtitile {
            width: 125%;
            overflow: hidden
        }
    }

    @media (min-width: 481px) and (max-width: 767px) {
        #divginore {
            padding: 19px 0px;
            margin: 0px;
            border-radius: 12px;
        }

        .Rectanglesss {
            position: absolute;
            margin-top: -62px;
            margin-left: -15px;
        }

        .col-sm-6 {
            margin-bottom: 34px;
        }

        .nametitle {
            width: 125%;
            overflow: hidden;
        }

        .subtitile {
            width: 125%;
            overflow: hidden
        }
    }

    @media (min-width: 320px) and (max-width: 480px) {
        #divginore {
            padding: 19px 0px;
            margin: 0px;
            border-radius: 12px;
        }

        .Rectanglesss {
            position: absolute;
            margin-top: -62px;
            margin-left: -15px;
        }

        .col-sm-6 {
            margin-bottom: 34px;
        }

        .nametitle {
            width: 125%;
            overflow: hidden;
        }

        .subtitile {
            width: 125%;
            overflow: hidden
        }
    }

    .postion {
        /* width: 120%; */
        position: absolute;
        top: 27px;
        margin-left: -79px;
        border-radius: 8px;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.1);
        background-color: #ffffff;
        flex: 0 0 50%;
        /* max-width: 50%; */
        z-index: 1;
    }

    .Nguyn-Vn-Linh {
        height: 20px;
        font-family: 'Quicksand', sans-serif;
        font-size: 15px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.33;
        letter-spacing: normal;
        color: #191935;
    }

    .Linkgmailcom {
        height: 16px;
        font-family: 'Quicksand', sans-serif;
        font-size: 13px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.23;
        letter-spacing: normal;
        color: #6d7182;
    }

    .Rectasngles {
        width: 68px;
        float: right;
        text-align: center;
        height: 36px;
        border-radius: 8px;
        border: solid 1px #eff0f1;
        background-color: #ffffff;
    }

    .fillter {
        color: #343a40;
        font-weight: 600;
    }

    .badge-primary {
        color: white;
        background-color: #049252;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background: #039252;
        color: #fff;
        border-color: #039252;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered,
    .select2-container--default .select2-selection--single {
        background-color: #ffffff !important;
        border-radius: 4px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered,
    .select2-container--default .select2-selection--single {
        font-weight: bold;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered,
    .select2-container--default .select2-selection--single,
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        font-weight: 700px !important;
        height: 38px;
    }

    .edit-dot {
        position: absolute;
        top: 1rem;
        right: 0;
    }
</style>
<div class="page-wrapper" style="background-color: rgb(247, 247, 247); min-height: 954px;">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid" data-select2-id="13">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Kết quả chấm</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li> -->
                        <!-- <li class="breadcrumb-item active">kết quả chấm</li> -->
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
        {{-- <button class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">In kết quả
            chấm</button>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Chọn sản phẩm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="padding: 0 24px;">
                        <div class="form-group">
                            <!-- <label for="nameGroup" class="Lable" id="Namegroup">Tên hội đồng</label> -->
                            <div class="group" style="float: right;margin-top: 16px;">
                                <input class="seachinput" id="nameProductinfo" type="text" required="">
                                <span class="highlight"></span>
                                <span class="bar"></span>

                                <label class="inputGroup"><i class="fa fa-search" id="searchProduct"></i> Tìm
                                    kiếm</label>
                            </div>
                        </div>
                        <div id="accordion" role="tablist">
                            <div class="card" style="width: 100%;margin-bottom: 0;">
                                <div class="card-header" role="tab" id="headingOne">
                                    <span class="badge badge-primary badge-pill incat-count">3</span>
                                    <a class="fillter collapsed" data-toggle="collapse" href="#collapseOne"
                                        aria-expanded="false" aria-controls="collapseOne">
                                        Bộ lọc đơn vị
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne"
                                    style="">
                                    <div class="card-body p-0">
                                        <ul class="list-group cat-list">
                                            <li class="list-group-item row fnd" style="display: flex; margin: 0;">
                                                <div class="col-md-4" id="stProvical">
                                                    <label for="txtlevel" class="textH">Tỉnh/TP</label>
                                                    <select class="multi-select select2-hidden-accessible"
                                                        multiple="multiple" style="width: 100%" name="cboPos"
                                                        id="cboProvincialMulti" data-select2-id="cboProvincialMulti"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="0">Tất cả</option>
                                                        <option value="89">An Giang</option>
                                                        <option value="24">Bắc Giang</option>
                                                        <option value="06">Bắc Kạn</option>
                                                        <option value="95">Bạc Liêu</option>
                                                        <option value="27">Bắc Ninh</option>
                                                        <option value="77">Bà Rịa - Vũng Tàu</option>
                                                        <option value="83">Bến Tre</option>
                                                        <option value="52">Bình Định</option>
                                                        <option value="74">Bình Dương</option>
                                                        <option value="70">Bình Phước</option>
                                                        <option value="60">Bình Thuận</option>
                                                        <option value="96">Cà Mau</option>
                                                        <option value="92">Cần Thơ</option>
                                                        <option value="04">Cao Bằng</option>
                                                        <option value="66">Đắk Lắk</option>
                                                        <option value="67">Đắk Nông</option>
                                                        <option value="48">Đà Nẵng</option>
                                                        <option value="11">Điện Biên</option>
                                                        <option value="75">Đồng Nai</option>
                                                        <option value="87">Đồng Tháp</option>
                                                        <option value="64">Gia Lai</option>
                                                        <option value="02">Hà Giang</option>
                                                        <option value="30">Hải Dương</option>
                                                        <option value="31">Hải Phòng</option>
                                                        <option value="35">Hà Nam</option>
                                                        <option value="01">Hà Nội</option>
                                                        <option value="42">Hà Tĩnh</option>
                                                        <option value="93">Hậu Giang</option>
                                                        <option value="17">Hòa Bình</option>
                                                        <option value="79">Hồ Chí Minh</option>
                                                        <option value="33">Hưng Yên</option>
                                                        <option value="56">Khánh Hòa</option>
                                                        <option value="91">Kiên Giang</option>
                                                        <option value="62">Kon Tum</option>
                                                        <option value="12">Lai Châu</option>
                                                        <option value="68">Lâm Đồng</option>
                                                        <option value="20">Lạng Sơn</option>
                                                        <option value="10">Lào Cai</option>
                                                        <option value="80">Long An</option>
                                                        <option value="36">Nam Định</option>
                                                        <option value="40">Nghệ An</option>
                                                        <option value="37">Ninh Bình</option>
                                                        <option value="58">Ninh Thuận</option>
                                                        <option value="25">Phú Thọ</option>
                                                        <option value="54">Phú Yên</option>
                                                        <option value="44">Quảng Bình</option>
                                                        <option value="49">Quảng Nam</option>
                                                        <option value="51">Quảng Ngãi</option>
                                                        <option value="22">Quảng Ninh</option>
                                                        <option value="45">Quảng Trị</option>
                                                        <option value="94">Sóc Trăng</option>
                                                        <option value="14">Sơn La</option>
                                                        <option value="72">Tây Ninh</option>
                                                        <option value="34">Thái Bình</option>
                                                        <option value="19">Thái Nguyên</option>
                                                        <option value="38">Thanh Hóa</option>
                                                        <option value="46">Thừa Thiên Huế</option>
                                                        <option value="82">Tiền Giang</option>
                                                        <option value="84">Trà Vinh</option>
                                                        <option value="08">Tuyên Quang</option>
                                                        <option value="86">Vĩnh Long</option>
                                                        <option value="26">Vĩnh Phúc</option>
                                                        <option value="15">Yên Bái</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="2" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--multiple"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="-1">
                                                                <ul class="select2-selection__rendered">
                                                                    <li class="select2-search select2-search--inline">
                                                                        <input class="select2-search__field"
                                                                            type="search" tabindex="0"
                                                                            autocomplete="off" autocorrect="off"
                                                                            autocapitalize="none" spellcheck="false"
                                                                            role="textbox" aria-autocomplete="list"
                                                                            placeholder="" style="width: 0.75em;"></li>
                                                                </ul>
                                                            </span></span><span class="dropdown-wrapper"
                                                            aria-hidden="true"></span></span>
                                                    <code id="nof-load-pro" style="display: none;">Đang tải ...</code>
                                                </div>
                                                <div class="col-md-4 m-b-20" id="stDistricts">
                                                    <label for="txtlevel" class="textH">Quận/Huyện</label>
                                                    <select class="multi-select select2-hidden-accessible"
                                                        multiple="multiple" style="width: 100%" name="cboPos"
                                                        id="cboDistrictsMulti" data-select2-id="cboDistrictsMulti"
                                                        tabindex="-1" aria-hidden="true">

                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="3" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--multiple"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="-1">
                                                                <ul class="select2-selection__rendered">
                                                                    <li class="select2-search select2-search--inline">
                                                                        <input class="select2-search__field"
                                                                            type="search" tabindex="0"
                                                                            autocomplete="off" autocorrect="off"
                                                                            autocapitalize="none" spellcheck="false"
                                                                            role="textbox" aria-autocomplete="list"
                                                                            placeholder="" style="width: 0.75em;"></li>
                                                                </ul>
                                                            </span></span><span class="dropdown-wrapper"
                                                            aria-hidden="true"></span></span>
                                                    <code id="nof-load-district"
                                                        style="display: none;">Đang tải ...</code>
                                                </div>
                                                <div class="col-md-4 m-b-20" id="stCbwards">
                                                    <label for="txtname" class="textH">Xã/Phường</label>
                                                    <select class="multi-select select2-hidden-accessible"
                                                        multiple="multiple" style="width: 100%" name="cboPos"
                                                        id="cboWardsMulti" data-select2-id="cboWardsMulti" tabindex="-1"
                                                        aria-hidden="true">

                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="4" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--multiple"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="-1">
                                                                <ul class="select2-selection__rendered">
                                                                    <li class="select2-search select2-search--inline">
                                                                        <input class="select2-search__field"
                                                                            type="search" tabindex="0"
                                                                            autocomplete="off" autocorrect="off"
                                                                            autocapitalize="none" spellcheck="false"
                                                                            role="textbox" aria-autocomplete="list"
                                                                            placeholder="" style="width: 0.75em;"></li>
                                                                </ul>
                                                            </span></span><span class="dropdown-wrapper"
                                                            aria-hidden="true"></span></span>
                                                    <code id="nof-load-ward" style="display: none;">Đang tải ...</code>
                                                </div>
                                            </li>
                                            <li style="display: none;" class="fnd"></li>
                                            <li style="display: none;" class="fnd"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="margin-bottom: 0;">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <span class="badge badge-primary badge-pill incat-count">1</span>
                                    <a class="collapsed fillter" data-toggle="collapse" href="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        Trạng thái
                                    </a>

                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body p-0">
                                        <ul class="list-group cat-list">
                                            <li class="list-group-item fnd">
                                                <div class="col-md-4 m-b-20">
                                                    <label class="textH">Trạng thái hồ sơ</label>
                                                    <select class="form-control select2-hidden-accessible"
                                                        multiple="multiple" style="width: 100%" name="cboPos"
                                                        id="Status" data-select2-id="Status" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="districtRanked">Cấp huyện đã xếp hạng</option>
                                                        <option value="Submiting">Đang nộp</option>
                                                        <option value="Done">Hoàn thành</option>
                                                        <option value="Fail">Không đạt</option>
                                                        <option value="Preparing">Chưa nộp</option>
                                                        <option value="Waitting">Chờ chấm</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="5" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--multiple"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="-1">
                                                                <ul class="select2-selection__rendered">
                                                                    <li class="select2-search select2-search--inline">
                                                                        <input class="select2-search__field"
                                                                            type="search" tabindex="0"
                                                                            autocomplete="off" autocorrect="off"
                                                                            autocapitalize="none" spellcheck="false"
                                                                            role="textbox" aria-autocomplete="list"
                                                                            placeholder="" style="width: 0.75em;"></li>
                                                                </ul>
                                                            </span></span><span class="dropdown-wrapper"
                                                            aria-hidden="true"></span></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="margin-bottom: 0;">
                                <div class="card-header" role="tab" id="headingThrre">
                                    <span class="badge badge-primary badge-pill incat-count">1</span>
                                    <a class="collapsed fillter" data-toggle="collapse" href="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Thời gian
                                    </a>

                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThrre">
                                    <div class="card-body p-0">
                                        <ul class="list-group cat-list">
                                            <li class="list-group-item fnd">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="txtlevel" class="textH">Ngày đăng ký</label>
                                                        <select id="cboDate" name="cboDate" class="form-control"
                                                            onchange="cboDateChange(this)">
                                                            <option value="0" selected="selected">Tất cả</option>
                                                            <option value="1">Hôm nay </option>
                                                            <option value="2">Hôm qua</option>
                                                            <option value="3">Tháng này</option>
                                                            <option value="4">Tháng trước</option>
                                                            <option value="5">Chọn khoảng thời gian</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style=" display: none;" id="date1">
                                                    <div class="form-group">
                                                        <label for="txtdate1" class="textH">Bắt đầu từ
                                                            ngày:</label>
                                                        <input type="date" class="form-control backgroup" id="datepk1"
                                                            name="datepk1">
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style="display: none;" id="date2">
                                                    <div class="form-group">
                                                        <label for="txtdate2" class="textH">Đến ngày:</label>
                                                        <input type="date" class="form-control backgroup" id="datepk2"
                                                            name="datepk2">
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="    float: right;margin: 18px 0px;">
                            <div class="col-12">
                                <a href="#" onclick="fillter()" class="btn btn-success btn-sm"
                                    style="color: white;border-radius: 3px;">Lọc
                                    sản phẩm</a>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 25px;margin-bottom: 25px;margin-right: 0;    width: 100%;">
                            <div class="col-11">
                                <span class="Tt-c-h-s">Tất cả hồ sơ</span>
                            </div>
                            <div class="col-1">
                                <div class="rounds">
                                    <input type="checkbox" id="checkbox-all" name="checkbox">
                                    <label for="checkbox-all"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row " style="max-height: 500px;    overflow: auto;" id="listproductinfno">


                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/th300%2520-%2520bao%2520gia.png"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Bánh đậu xanh Rồng Vàng Hoàng Gia</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 30-288-10507-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty cổ phần Hoàng Giang</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: black; background-color: #cff0e1"><b>CHỜ
                                            CHẤM</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_611b601f401e8f18e75229d2" value="611b601f401e8f18e75229d2"
                                            name="checkbox">
                                        <label for="product_611b601f401e8f18e75229d2"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/gao.png"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">gạo trắng</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 54-564-22243-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: htx nn</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_611b85b8401e8f18e7522a22" value="611b85b8401e8f18e7522a22"
                                            name="checkbox">
                                        <label for="product_611b85b8401e8f18e7522a22"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/IMG_20200818_134149.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">RƯỢU QUÁN ĐẾ</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 54-557-22060-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: LÂM VĂN DẠY</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_611f06a4404a8b6606d63b4c" value="611f06a4404a8b6606d63b4c"
                                            name="checkbox">
                                        <label for="product_611f06a4404a8b6606d63b4c"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/xoi%2520sy%2520do.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Xoài Sấy Dẻo</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 87-874-30163-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: CÔNG TY TNHH CÔNG NGHỆ THỰC PHẨM VIỆT
                                        ĐỨC</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN
                                            THÀNH</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_611fb689404a8b6606d63b63" value="611fb689404a8b6606d63b63"
                                            name="checkbox">
                                        <label for="product_611fb689404a8b6606d63b63"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/4.png"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Rau Cải Ngot</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 01-017-00478-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: vương khương duy</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_61257379404a8b6606d63ba0" value="61257379404a8b6606d63ba0"
                                            name="checkbox">
                                        <label for="product_61257379404a8b6606d63ba0"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/Trng%2520g%2520sch.jpeg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Trứng sạch</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 01-268-09886-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: OCOP Hà Nội</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_612876cc74341401b7cbb62e" value="612876cc74341401b7cbb62e"
                                            name="checkbox">
                                        <label for="product_612876cc74341401b7cbb62e"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/7c3c97534ce69e1d322298b6de63a1cd.jpeg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Mít sấy</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 82-820-28471-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: DOANH NGHIỆP TƯ NHÂN</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN
                                            THÀNH</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6128b3e074341401b7cbb67c" value="6128b3e074341401b7cbb67c"
                                            name="checkbox">
                                        <label for="product_6128b3e074341401b7cbb67c"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/Anh%2520Vai.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">QUEEN THANH HA LYCHEE</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 30-294-10852-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty cổ phần Ameii Việt Nam - chi
                                        nhánh Hải Dương</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: black; background-color: #cff0e1"><b>CHỜ
                                            CHẤM</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_612caf21a1f3a73db5997505" value="612caf21a1f3a73db5997505"
                                            name="checkbox">
                                        <label for="product_612caf21a1f3a73db5997505"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/800px-X_lch.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Xà lách hữu cơ</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 01-017-00517-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: HỢP TÁC XÃ NÔNG NGHIỆP HỮU CƠ TÀM
                                        XÁ</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_611a2e9e401e8f18e75229b6" value="611a2e9e401e8f18e75229b6"
                                            name="checkbox">
                                        <label for="product_611a2e9e401e8f18e75229b6"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/27-banh-phong-chay-hat-sen-cao-cap.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Bánh phồng chay cao cấp hạt sen</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 87-877-30256-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Phạm Văn Hậu</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN
                                            THÀNH</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6130a3b89402317562b74668" value="6130a3b89402317562b74668"
                                            name="checkbox">
                                        <label for="product_6130a3b89402317562b74668"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/z2730497823321_d73c1da455fb1a342d374f0787fbe201.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">nhung Hươu Nai</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 75-735-26203-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Nguyễn Đình Bình</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6130ccf09402317562b74698" value="6130ccf09402317562b74698"
                                            name="checkbox">
                                        <label for="product_6130ccf09402317562b74698"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/Sen_200-300x300.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">HẠT SEN SẤY</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 87-877-30277-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: CÔNG TY TNHH MTV NAM HUY ĐỒNG
                                        THÁP</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN
                                            THÀNH</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6130dbc99402317562b746bf" value="6130dbc99402317562b746bf"
                                            name="checkbox">
                                        <label for="product_6130dbc99402317562b746bf"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/3.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">nước mắm cá cơm</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 46-477-19879-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: nguyễn thị gái</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6135c7b59402317562b74764" value="6135c7b59402317562b74764"
                                            name="checkbox">
                                        <label for="product_6135c7b59402317562b74764"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/154.png"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Trà sâm lạc tiên DATO</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 62-612-23401-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty TNHH Thảo Dược Tây
                                        Nguyên</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cff0e1;"><b>HUYỆN ĐÃ XẾP
                                            HẠNG</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6136d32b6d4c283fc6591d97" value="6136d32b6d4c283fc6591d97"
                                            name="checkbox">
                                        <label for="product_6136d32b6d4c283fc6591d97"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/chn%2520bng%2520t%2520tm%2520t%2520dt.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Chăn bông tơ tằm tự dệt</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 01-282-10474-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty TNHH Dầu tằm tơ Mỹ
                                        Đức</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cff0e1;"><b>HUYỆN ĐÃ XẾP
                                            HẠNG</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_613f27a34c09731a3b7fe9c9" value="613f27a34c09731a3b7fe9c9"
                                            name="checkbox">
                                        <label for="product_613f27a34c09731a3b7fe9c9"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/IMG_0092.JPG"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Cao mềm Actiso Sapa</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 10-088-03006-2-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty TNHH Traphacosapa</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: black; background-color: #cff0e1"><b>CHỜ
                                            CHẤM</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_613ff9c14c09731a3b7fe9d1" value="613ff9c14c09731a3b7fe9d1"
                                            name="checkbox">
                                        <label for="product_613ff9c14c09731a3b7fe9d1"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/106787776_153157649639554_5801333357658209898_n.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Trà phun sương Actiso Sapa</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 10-088-03006-3-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty TNHH Traphacosapa</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cff0e1; width: 100%;"><b>TỈNH ĐÃ
                                            XẾP HẠNG</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6140258e4c09731a3b7fea5c" value="6140258e4c09731a3b7fea5c"
                                            name="checkbox">
                                        <label for="product_6140258e4c09731a3b7fea5c"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/1da9cfa86041961fcf50.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Hộp vuông đan mây</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 01-277-10033-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Nguyễn Văn Trung</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN
                                            THÀNH</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6142a79a4c09731a3b7fec6e" value="6142a79a4c09731a3b7fec6e"
                                            name="checkbox">
                                        <label for="product_6142a79a4c09731a3b7fec6e"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/z2765879910813_1e6569bcb3fa55fef4038baccaea3dbf.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Khăn lụa tơ tằm</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 01-282-10474-2-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty TNHH Dầu tằm tơ Mỹ
                                        Đức</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cff0e1;"><b>HUYỆN ĐÃ XẾP
                                            HẠNG</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6142b73d4c09731a3b7fec79" value="6142b73d4c09731a3b7fec79"
                                            name="checkbox">
                                        <label for="product_6142b73d4c09731a3b7fec79"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/ng%2520ht%2520ngh%2520cam%2520vng.png"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">ỐNG HÚT RAU CỦ</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 01-017-00499-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Hợp Tác Xã Nông Nghiệp Sông
                                        Hồng</span><br>
                                    <span class="label m-r-10"
                                        style="border-radius: 10px; background-color: #fdefce;color:black"><b>ĐANG
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6142ff304c09731a3b7fecbc" value="6142ff304c09731a3b7fecbc"
                                            name="checkbox">
                                        <label for="product_6142ff304c09731a3b7fecbc"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/20210511_143920.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Rượu Sâm Bố Chính</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 84-844-29266-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Lê Văn Đực</span><br>
                                    <span class="label m-r-10"
                                        style="border-radius: 10px; background-color: #fdefce;color:black"><b>ĐANG
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_614302b34c09731a3b7fecc2" value="614302b34c09731a3b7fecc2"
                                            name="checkbox">
                                        <label for="product_614302b34c09731a3b7fecc2"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/phu%2520the.JPG"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">BÁNH PHU THÊ</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 01-021-00604-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: CÔNG TY CỔ PHẦN BÁNH MỨT KẸO BẢO
                                        MINH</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN
                                            THÀNH</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_61441d7ef02768153b559027" value="61441d7ef02768153b559027"
                                            name="checkbox">
                                        <label for="product_61441d7ef02768153b559027"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/banh%2520com.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Bánh cốm</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 01-021-00604-2-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: CÔNG TY CỔ PHẦN BÁNH MỨT KẸO BẢO
                                        MINH</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN
                                            THÀNH</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6147fa28572ba72cb80de71d" value="6147fa28572ba72cb80de71d"
                                            name="checkbox">
                                        <label for="product_6147fa28572ba72cb80de71d"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/TVT_7745.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Vicumax Mật ong Nano curcumin</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 06-058-01852-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty cổ phần curcumin Bắc Hà Bắc
                                        Kạn</span><br>
                                    <span class="label m-r-10"
                                        style="border-radius: 10px; background-color: #fdefce;color:black"><b>ĐANG
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6148373139b6b04cc66d1383" value="6148373139b6b04cc66d1383"
                                            name="checkbox">
                                        <label for="product_6148373139b6b04cc66d1383"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/TVT_8302.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Vicumax Nano curcumin</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 06-058-01852-2-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty cổ phần curcumin Bắc Hà Bắc
                                        Kạn</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6148376e39b6b04cc66d1388" value="6148376e39b6b04cc66d1388"
                                            name="checkbox">
                                        <label for="product_6148376e39b6b04cc66d1388"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/TVT_8041.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Vicumax Limited Nano curcumin</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 06-058-01852-3-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty cổ phần curcumin Bắc Hà Bắc
                                        Kạn</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6148379839b6b04cc66d138c" value="6148379839b6b04cc66d138c"
                                            name="checkbox">
                                        <label for="product_6148379839b6b04cc66d138c"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/Hnh%2520nh%2520khn%2520la%2520t%2520sen.png"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Khăn lụa tơ sen</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 01-282-10474-3-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty TNHH Dầu tằm tơ Mỹ
                                        Đức</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cff0e1;"><b>HUYỆN ĐÃ XẾP
                                            HẠNG</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_61483d8d39b6b04cc66d13c5" value="61483d8d39b6b04cc66d13c5"
                                            name="checkbox">
                                        <label for="product_61483d8d39b6b04cc66d13c5"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/banh%2520com%2520nhan%2520sau%2520rieng.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Bánh cốm nhân sầu riêng</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 01-021-00604-3-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: CÔNG TY CỔ PHẦN BÁNH MỨT KẸO BẢO
                                        MINH</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN
                                            THÀNH</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_61483e1039b6b04cc66d13cb" value="61483e1039b6b04cc66d13cb"
                                            name="checkbox">
                                        <label for="product_61483e1039b6b04cc66d13cb"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/1%25202.png"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Bánh pía chay Bảo Minh</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 01-021-00604-4-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: CÔNG TY CỔ PHẦN BÁNH MỨT KẸO BẢO
                                        MINH</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN
                                            THÀNH</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_61483e3a39b6b04cc66d13cf" value="61483e3a39b6b04cc66d13cf"
                                            name="checkbox">
                                        <label for="product_61483e3a39b6b04cc66d13cf"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/sp_nuocuongmathoadua.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">CTy TNHH TRÀ VINH FARM</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 84-846-29347-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: CTy TNHH TRÀ VINH FARM</span><br>
                                    <span class="label m-r-10"
                                        style="border-radius: 10px; background-color: #fdefce;color:black"><b>ĐANG
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6149501cbd84ee5affd65668" value="6149501cbd84ee5affd65668"
                                            name="checkbox">
                                        <label for="product_6149501cbd84ee5affd65668"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/z2181116663926_6aa0a140593c79d4d7984df4c3e9daeb.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Túi sợi đan móc</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 01-009-00367-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công Ty TNHH Túi Việt
                                        Htvncrafts</span><br>
                                    <span class="label m-r-10"
                                        style="border-radius: 10px; background-color: #fdefce;color:black"><b>ĐANG
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_61499ee5bd84ee5affd669ce" value="61499ee5bd84ee5affd669ce"
                                            name="checkbox">
                                        <label for="product_61499ee5bd84ee5affd669ce"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/z2181116666312_b706b8f62f52f99b24ad7df1b25f5f34.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Túi vải đính cườm xách tay</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 01-009-00367-2-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công Ty TNHH Túi Việt
                                        Htvncrafts</span><br>
                                    <span class="label m-r-10"
                                        style="border-radius: 10px; background-color: #fdefce;color:black"><b>ĐANG
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_61499f7abd84ee5affd669d5" value="61499f7abd84ee5affd669d5"
                                            name="checkbox">
                                        <label for="product_61499f7abd84ee5affd669d5"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/IMG_20210707_140306.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Sầu Riêng Monthong</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 75-739-26332-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Trần Quang Hiệp</span><br>
                                    <span class="label m-r-10"
                                        style="border-radius: 10px; background-color: #fdefce;color:black"><b>ĐANG
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_614b2c066b297507d1e8e7a0" value="614b2c066b297507d1e8e7a0"
                                            name="checkbox">
                                        <label for="product_614b2c066b297507d1e8e7a0"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/IMG_20200515_091716.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Sầu Riêng Ri-6</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 75-739-26332-2-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Trần Quang Hiệp</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_614b2d7a6b297507d1e8e7a5" value="614b2d7a6b297507d1e8e7a5"
                                            name="checkbox">
                                        <label for="product_614b2d7a6b297507d1e8e7a5"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/IMG_20210909_160655.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Chuối Cau</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 75-739-26332-3-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Trần Quang Hiệp</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_614b2e026b297507d1e8e7a7" value="614b2e026b297507d1e8e7a7"
                                            name="checkbox">
                                        <label for="product_614b2e026b297507d1e8e7a7"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/IMG_20210625_100732.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Măng cụt</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 75-739-26332-4-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Trần Quang Hiệp</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_614b2e826b297507d1e8e7a9" value="614b2e826b297507d1e8e7a9"
                                            name="checkbox">
                                        <label for="product_614b2e826b297507d1e8e7a9"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/IMG_1589246394015_1589246405265.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Sầu Riêng Chuồng Bò</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 75-739-26332-5-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Trần Quang Hiệp</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_614b4b14aea48f0b08f4e50f" value="614b4b14aea48f0b08f4e50f"
                                            name="checkbox">
                                        <label for="product_614b4b14aea48f0b08f4e50f"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/ko%2520da%2520sp%2520c%2520ko_cut.png"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Kẹo Dừa Sáp Vicosap (vị nguyên chất)</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 84-845-29338-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty TNHH Chế Biến Dừa Sáp Cầu
                                        Kè</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_614ca3d69fa47a23129b743e" value="614ca3d69fa47a23129b743e"
                                            name="checkbox">
                                        <label for="product_614ca3d69fa47a23129b743e"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/Ko%2520l%2520da%2520c%2520vin%2520ko_cut.png"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Kẹo Dừa Sáp vicosap (vị lá dứa)</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 84-845-29338-2-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty TNHH Chế Biến Dừa Sáp Cầu
                                        Kè</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_614ca4bf9fa47a23129b7444" value="614ca4bf9fa47a23129b7444"
                                            name="checkbox">
                                        <label for="product_614ca4bf9fa47a23129b7444"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/ko%2520cacao%2520c%2520vin_cut.png"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Kẹo Dừa Sáp vicosap (vị cacao)</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 84-845-29338-3-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty TNHH Chế Biến Dừa Sáp Cầu
                                        Kè</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_614ca51c9fa47a23129b7446" value="614ca51c9fa47a23129b7446"
                                            name="checkbox">
                                        <label for="product_614ca51c9fa47a23129b7446"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/DA%2520SP%2520SI.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Dừa Sáp Sợi vicosap</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 84-845-29338-4-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty TNHH Chế Biến Dừa Sáp Cầu
                                        Kè</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_614ca54d9fa47a23129b7448" value="614ca54d9fa47a23129b7448"
                                            name="checkbox">
                                        <label for="product_614ca54d9fa47a23129b7448"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/k5-dich-chiet-sam-ngoc-linh-01-1-400x480.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Thực phẩm bảo vệ sức khỏe Dịch chiết sâm K5</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 62-608-23299-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: CÔNG TY CỔ PHẦN VINGIN</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN
                                            THÀNH</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_615d15ba6082b06a9d43750f" value="615d15ba6082b06a9d43750f"
                                            name="checkbox">
                                        <label for="product_615d15ba6082b06a9d43750f"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/k5-dich-chiet-sam-ngoc-linh-01-1-400x480.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Thực phẩm bảo vệ sức khỏe dịch chiết K5</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 62-612-23401-2-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: CÔNG TY CỔ PHẦN VINGIN</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_615eb60a1a52da4b19efe0d7" value="615eb60a1a52da4b19efe0d7"
                                            name="checkbox">
                                        <label for="product_615eb60a1a52da4b19efe0d7"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/Banh%2520tri.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Bánh trời gấc</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 06-064-02020-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Hoàng Thị Điển</span><br>
                                    <span class="label m-r-10"
                                        style="border-radius: 10px; background-color: #fdefce;color:black"><b>ĐANG
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_616231e6bba93a6a8d1b409b" value="616231e6bba93a6a8d1b409b"
                                            name="checkbox">
                                        <label for="product_616231e6bba93a6a8d1b409b"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/144266629_106351224807671_1948764520169111014_n.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">DÂU TÂY NAM CƯỜNG</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 06-064-02026-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: HTX THƯƠNG MẠI VÀ DỊCH VỤ TOÀN
                                        DÂN</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN
                                            THÀNH</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6163b8f4bba93a6a8d1b40ec" value="6163b8f4bba93a6a8d1b40ec"
                                            name="checkbox">
                                        <label for="product_6163b8f4bba93a6a8d1b40ec"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/3.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Rượu vang thanh long đỏ</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 60-597-23092-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Hợp Tác Xã Thanh Long Hàm Đức</span><br>
                                    <span class="label m-r-10"
                                        style="border-radius: 10px; background-color: #fdefce;color:black"><b>ĐANG
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6173d349673abd092c40600f" value="6173d349673abd092c40600f"
                                            name="checkbox">
                                        <label for="product_6173d349673abd092c40600f"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/4.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Rượu vang thanh long trắng</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 60-597-23092-2-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Hợp Tác Xã Thanh Long Hàm Đức</span><br>
                                    <span class="label m-r-10"
                                        style="border-radius: 10px; background-color: #fdefce;color:black"><b>ĐANG
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6173d385673abd092c406014" value="6173d385673abd092c406014"
                                            name="checkbox">
                                        <label for="product_6173d385673abd092c406014"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/bs24.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Nước bí đao S24</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 36-359-13768-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty TNHH MTV SXTM VT Minh
                                        Hằng</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_61767136673abd092c406046" value="61767136673abd092c406046"
                                            name="checkbox">
                                        <label for="product_61767136673abd092c406046"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/cams24.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Nước cam S24</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 36-359-13768-2-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty TNHH MTV SXTM VT Minh
                                        Hằng</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_617671df673abd092c40604b" value="617671df673abd092c40604b"
                                            name="checkbox">
                                        <label for="product_617671df673abd092c40604b"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/cls24ok.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Nước chanh leo S24</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 36-359-13768-3-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty TNHH MTV SXTM VT Minh
                                        Hằng</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_617675a6673abd092c40604d" value="617675a6673abd092c40604d"
                                            name="checkbox">
                                        <label for="product_617675a6673abd092c40604d"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/k5-dich-chiet-sam-ngoc-linh-01-1-768x922.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Thực phẩm bảo vệ sức khỏe Dịch chiết sâm K5</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 62-608-23299-2-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty cổ phần Vingin</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cff0e1; width: 100%;"><b>TỈNH ĐÃ
                                            XẾP HẠNG</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_61777192673abd092c4062cd" value="61777192673abd092c4062cd"
                                            name="checkbox">
                                        <label for="product_61777192673abd092c4062cd"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/GI.png"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">GIÒ LỤA NGHỊ ĐƯỢC</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 01-017-00454-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Cơ sở sản xuất thực phẩm Nghị
                                        Được</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cff0e1; width: 100%;"><b>TỈNH ĐÃ
                                            XẾP HẠNG</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6178e769673abd092c4062f9" value="6178e769673abd092c4062f9"
                                            name="checkbox">
                                        <label for="product_6178e769673abd092c4062f9"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/20211005_085224.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Bánh tráng Sachi, Bún phở Sachi</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 52-543-21637-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Công ty TNHH Sachi Nguyễn</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6178faf1673abd092c40738f" value="6178faf1673abd092c40738f"
                                            name="checkbox">
                                        <label for="product_6178faf1673abd092c40738f"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/z2497840478081_995c91ac34b2017e0d2fa2afa1ea8592.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Bánh tráng gạo mè</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 52-543-21637-2-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: CÔNG TY TNHH SACHI NGUYỄN</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6178fb0e673abd092c40739a" value="6178fb0e673abd092c40739a"
                                            name="checkbox">
                                        <label for="product_6178fb0e673abd092c40739a"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/1Y2A9216.JPG"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">HẠT MẮC CA MỞ TAY 250G</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 68-677-24949-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: CÔNG TY TNHH HOÀNG ANH MACA</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6178fb4b673abd092c4073a8" value="6178fb4b673abd092c4073a8"
                                            name="checkbox">
                                        <label for="product_6178fb4b673abd092c4073a8"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/1615358733578.png"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Gạo trắng</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 01-005-00166-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Hợp tác xã Nông nghiệp Hà
                                        Nội</span><br>
                                    <span class="label label-info m-r-10 Hon-thnh"
                                        style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN
                                            THÀNH</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6178fb65673abd092c4073b0" value="6178fb65673abd092c4073b0"
                                            name="checkbox">
                                        <label for="product_6178fb65673abd092c4073b0"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/z2509765824367_e9fa7cf5a8206282fdee80949e95b8e2%252520-%252520Co.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Bánh tráng nước dừa sachi</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 52-543-21637-3-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: CÔNG TY THHH SACHI NGUYỄN</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6178fb75673abd092c4073b6" value="6178fb75673abd092c4073b6"
                                            name="checkbox">
                                        <label for="product_6178fb75673abd092c4073b6"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/TO%252060%2520VIN.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Tảo Spirulina viên nang hộp 60 viên</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 40-421-17176-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: CÔNG TY CP KHOA HỌC CÔNG NGHỆ TẢO
                                        VN</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6178fb8a673abd092c4073bc" value="6178fb8a673abd092c4073bc"
                                            name="checkbox">
                                        <label for="product_6178fb8a673abd092c4073bc"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/tom-kho-3-180877-1368235040.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Tôm khô</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 54-557-22069-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: HKD TP</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6178fb8a673abd092c4073c1" value="6178fb8a673abd092c4073c1"
                                            name="checkbox">
                                        <label for="product_6178fb8a673abd092c4073c1"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 row rowContent">
                                <div class="col-2" style="padding-right: 0;">
                                    <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/images.jpg"
                                        class="imgava">
                                </div>
                                <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
                                    <span class="titleName">Thanh Long ruột đỏ</span><br>
                                    <span class="titleNamechirden">Mã sản phẩm: 92-927-31298-1-2021<br></span>
                                    <span class="titleNamechirden">Tên chủ thể: Phước Thiên</span><br>
                                    <span class="label m-r-10 Hon-thnh "
                                        style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA
                                            NỘP</b></span>
                                </div>
                                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                                    <div class="rounds">
                                        <input type="checkbox" class="productInFor_select"
                                            id="product_6178fb8e673abd092c4073c8" value="6178fb8e673abd092c4073c8"
                                            name="checkbox">
                                        <label for="product_6178fb8e673abd092c4073c8"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="float: right;margin: 24px 0;">
                            <a href="#" class="btn btn-secondary" data-dismiss="modal">Đóng</a>
                            <a href="#" class="btn btn-success" onclick="printResult()" id="btnSuccess">In kết
                                quả chấm</a>
                            <a href="#" class="btn btn-success" onclick="printResultHelpTeams()" id="btnSuccess">In kết
                                quả chấm TTV</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    ...
                </div>
            </div>
        </div>
         --}}
        <div id="filter-section" class="mt-3" data-select2-id="filter-section">
            <div class="row">
                <div class="col-sm-3 input-group mb-2">
                    <input type="search" class="form-control" id="keyword"
                        placeholder=" Tìm theo tên/mã sản phẩm; tên chủ thể">

                </div>
                <div class="col-sm-3 mb-2" style="display:none">
                    <select class="form-control" style="width: 100%;" id="ranking-select">
                        <option value="0" selected="selected">Kết quả xếp hạng</option>
                        <option value="1">Đạt 1 sao</option>
                        <option value="2">Đạt 2 sao</option>
                        <option value="3">Đạt 3 sao</option>
                        <option value="4">Đạt 4 sao</option>
                        <option value="5">Đạt 5 sao</option>
                    </select>
                </div>
                <div class="col-sm-3 mb-2">
                    <select class="form-control" style="width: 100%;" id="productType-select">
                        <option value="0" selected="selected">Tất cả ngành</option>
                        @foreach($productTypes as $item)
                        <option value="{!! $item->id !!}">{!! $item->name!!}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-3 mb-2">
                    <select class="form-control" style="width: 100%;" id="productStatus-select">
                        <option value="ALL" selected="selected">Tất cả trạng thái</option>
                        <option value="WAITTING">Chờ chấm</option>
                        <option value="PROCESSING">Đang chấm</option>
                        {{--<option value="SENDING">Chờ duyệt KQ Chấm</option>--}}
                        <option value="DISTRICTRANKED">Huyện đã xếp hạng</option>
                        <option value="PROVINCERANKED">Tỉnh đã xếp hạng</option>
                        <option value="TWRANKED">TW đã xếp hạng</option>
                        <option value="STOP">Đã dừng</option>
                    </select>
                </div>
                <!-- <div class="col-sm-12 row"> -->
                <div class="col-sm-3 mt-2 mb-2" id="councilSelector" style="" data-select2-id="councilSelector">
                    <select class="multi-select select2-hidden-accessible" style="width: 100%" name="cboCouncil"
                        id="cboCouncil" data-select2-id="cboCouncil" tabindex="-1" aria-hidden="true">

                    </select>
                </div>
                <div class="col-sm-3 mt-2 mb-2" id="stProvical" data-select2-id="stProvical">
                    <select class="multi-select select2-hidden-accessible" style="width: 100%" name="cboPos"
                        id="cboProvincial" data-select2-id="cboProvincial" tabindex="-1" aria-hidden="true">
                    </select>
                    
                </div>
                <div class="col-sm-3 mt-2 mb-2" id="stDistricts" data-select2-id="stDistricts">
                    <select class="multi-select select2-hidden-accessible" style="width: 100%" name="cboPos"
                        id="cboDistricts" data-select2-id="cboDistricts" tabindex="-1" aria-hidden="true">
                    </select>
                    <code id="nof-load-district" style="display: none;">Đang tải ...</code>
                </div>
                <div class="col-sm-3 mt-2 mb-2" id="stCbwards" style="display: none">
                    <select class="multi-select select2-hidden-accessible" style="width: 100%" name="cboPos"
                        id="cboWards" data-select2-id="cboWards" tabindex="-1" aria-hidden="true">
                        <option value="0" data-select2-id="102" selected="selected">Chọn Phường/Xã</option>
                    </select>
                    <code id="nof-load-ward" style="display: none;">Đang tải ...</code>
                </div>
                <div class="col-sm-12 mt-2 mb-2" id="stCbwards">
                    <button id="searchProductsBtn" class="btn"
                        style="background-color: #039252; color: white;float: right;">Tìm kiếm</button>
                </div>

                <!-- </div> -->
            </div>
            <hr>
        </div>
        <!-- <div class="col-sm-12 text-right">Tổng số : <span id="total"></span></div> -->
        <div class="row" id="listeValueResult">
            <!-- <div class="col-sm-12 text-right">Tổng số : <span id="total"></span></div> -->

            {{-- <div class="col-sm-6">
                <div class="row container bg-white mt-3" style="" id="divginore">
                    <div class="col-10" style="display: flex;">
                        <a style="color:black"
                            href="https://app.sohoaocop.com/evaluateFileResult?fileId=612caf21a1f3a73db5997505&amp;&amp;level=0">
                            <img src="OCOP%20|%20ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/Anh%2520Vai.jpg"
                                class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                        </a>
                        <div style="margin-top: -4px;">
                            <a style="color:black"
                                href="https://app.sohoaocop.com/evaluateFileResult?fileId=612caf21a1f3a73db5997505&amp;&amp;level=0">
                                <label class="nametitle">QUEEN THANH HA LYCHEE </label>
                                <p class="subtitile">Mã sản phẩm: 30-294-10852-1-2021</p>
                                <label class="subtitile">Tên chủ thể: Công ty cổ phần Ameii Việt Nam - chi nhánh Hải
                                    Dương</label>
                            </a>
                            <p class="countScored">
                                <a href="#" onclick="getMemberassessor('612caf21a1f3a73db5997505','DONE')"
                                    class="subtitile2 ">0/2 cán bộ chấm đã chấm &gt;
                                </a>
                            </p>
                            <div><a href="https://app.sohoaocop.com/evaluateFileResult?fileId=612caf21a1f3a73db5997505&amp;&amp;level=0&amp;role=helpteam"
                                    class="subtitile2 ">0/1 tổ viên đã chấm &gt;</a><br></div>

                            <p></p>
                        </div>
                    </div>
                    <div class="col-2 text-center" style="margin-top: -12px;">
                        <div class="Rectanglesss">
                            <label style="color: #049252;
                    margin-top: 10px;">0đ</label>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="modal fade" id="modalMemberAssessor" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMemberAssessor">Cán bộ đã chấm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modalMemberAssessor-body">
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-success d-flex"
            style="margin: 20px auto; height: 35px; width: 105px; opacity: 0;"
            id="btnLoadMore">Xem Thêm</button>
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar ps ps--theme_default" data-ps-id="49a1d73b-8bd5-761c-d2a3-c6f4eb86d0dc">
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
@endsection()