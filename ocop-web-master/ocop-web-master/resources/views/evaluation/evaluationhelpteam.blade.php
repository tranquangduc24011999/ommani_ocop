@extends('master')
@section('content')
<style>
    #divginore {
        padding: 24px 24px;
        margin: 0px;
        border-radius: 12px;
    }
</style>
<div class="page-wrapper" style="min-height: 234px;">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Info box Content -->
        <!-- ============================================================== -->
        <div id="mainContent">
            <div id="filter-section" class="mt-3" style="display: none">
                <div class="row">
                    <div class="col-sm-4 input-group" style="margin-bottom:10px;">
                        <input type="search" class="form-control" id="keyword"
                            placeholder=" Tìm kiếm theo tên sản phẩm/tên chủ thể">
                        <button id="searchProductsBtn" class="btn" style="background-color: #039252; color: white;"><i
                                class="fas fa-search"></i></button>
                    </div>

                    <div class="col-sm-4" style="margin-bottom:10px;">
                        <select class="form-control" style="width: 100%;" id="productType-select">
                            <option value="0">Tất cả ngành</option>
                            <option value="5e4f86607a80891424175fce">Chè tươi, chế biến</option>

                            <option value="5e4f86607a80891424175fc8">Chế biến từ gạo, ngũ cốc</option>

                            <option value="5e4f86607a80891424175fc9">Chế biến từ rau, củ, quả, hạt</option>

                            <option value="5e4f86607a80891424175fca">Chế biến từ thịt, trứng, sữa</option>

                            <option value="5e4f86607a80891424175fcb">Chế biến từ thủy, hải sản</option>

                            <option value="5e4f86607a80891424175fb9">Cà phê, Ca cao</option>

                            <option value="5e4f86607a80891424175fcf">Các sản phẩm khác từ chè, trà</option>

                            <option value="5e4f86607a80891424175fc2">Dịch vụ du lịch cộng đồng và điểm du lịch</option>

                            <option value="5e4f86607a80891424175fcd">Gia vị khác</option>

                            <option value="5e4f86607a80891424175fc5">Gạo, ngũ cốc</option>

                            <option value="5e4f86607a80891424175fc6">Mật ong, các sản phẩm từ mật ong, mật khác</option>

                            <option value="5e4f86607a80891424175fbd">Mỹ phẩm</option>

                            <option value="5e4f86607a80891424175fb2">NGÀNH VẢI, MAY MẶC</option>

                            <option value="5e4f86607a80891424175fd2">Nước khoáng thiên nhiên, nước uống tinh khiết
                            </option>

                            <option value="5e4f86607a80891424175fc3">Rau, củ, quả, hạt tươi</option>

                            <option value="5e4f86607a80891424175fd0">Rượu trắng</option>

                            <option value="5e4f86607a80891424175fbf">Thảo dược khác</option>

                            <option value="5e4f86607a80891424175fc4">Thịt, trứng, sữa tươi</option>

                            <option value="5e4f86607a80891424175fc1">Thủ công mỹ nghệ gia dụng</option>

                            <option value="5e4f86607a80891424175fc0">Thủ công mỹ nghệ, trang trí</option>

                            <option value="5e4f86607a80891424175fbc">Thực phẩm chức năng, thuốc từ dược liệu, thuốc Y
                                học cổ truyền</option>

                            <option value="5e4f86607a80891424175fbe">Trang thiết bị, dụng cụ y tế</option>

                            <option value="5e4f86607a80891424175fcc">Tương, nước mắm, gia vị dạng lỏng khác</option>

                            <option value="5e4f86607a80891424175fd1">Đồ uống có cồn khác</option>

                            <option value="5e4f86607a80891424175fd3">Đồ uống không cồn</option>

                            <option value="5e4f86607a80891424175fc7">Đồ ăn nhanh</option>
                        </select>
                    </div>
                    <div class="col-sm-4" style="margin-bottom:10px;">
                        <select class="form-control" style="width: 100%;" id="productStatus-select">
                            <option value="ALL">Tất cả trạng thái</option>
                            <option value="WAITING">Chờ chấm</option>
                            <option value="PROCESSING">Đang chấm</option>
                            <option value="SENDING">Chờ duyệt KQ Chấm</option>
                            <option value="DONE">Đã duyệt</option>
                        </select>
                    </div>
                    <div class="col-sm-12 row m-b-20">
                        <div class="col-sm-4 m-b-20" id="stProvical">
                            <label for="txtlevel" class="textH">Tỉnh/TP</label>
                            <select class="multi-select select2-hidden-accessible" style="width: 100%" name="cboPos"
                                id="cboProvincial" data-select2-id="cboProvincial" tabindex="-1" aria-hidden="true">
                                <option value="0" data-select2-id="4">Chọn</option>
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
                            </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                data-select2-id="1" style="width: 100%;"><span class="selection"><span
                                        class="select2-selection select2-selection--single" role="combobox"
                                        aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-labelledby="select2-cboProvincial-container"><span
                                            class="select2-selection__rendered" id="select2-cboProvincial-container"
                                            role="textbox" aria-readonly="true" title="Chọn">Chọn</span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <code id="nof-load-pro" style="display: none;">Đang tải ...</code>
                        </div>
                        <div class="col-sm-4 m-b-20" id="stDistricts">
                            <label for="txtlevel" class="textH">Quận/Huyện</label>
                            <select class="multi-select select2-hidden-accessible" style="width: 100%" name="cboPos"
                                id="cboDistricts" data-select2-id="cboDistricts" tabindex="-1" aria-hidden="true">

                            </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                data-select2-id="2" style="width: 100%;"><span class="selection"><span
                                        class="select2-selection select2-selection--single" role="combobox"
                                        aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-labelledby="select2-cboDistricts-container"><span
                                            class="select2-selection__rendered" id="select2-cboDistricts-container"
                                            role="textbox" aria-readonly="true"></span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <code id="nof-load-district" style="display: none;">Đang tải ...</code>
                        </div>
                        <div class="col-sm-4 m-b-20" id="stCbwards">
                            <label for="txtname" class="textH">Xã/Phường</label>
                            <select class="multi-select select2-hidden-accessible" style="width: 100%" name="cboPos"
                                id="cboWards" data-select2-id="cboWards" tabindex="-1" aria-hidden="true">

                            </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                data-select2-id="3" style="width: 100%;"><span class="selection"><span
                                        class="select2-selection select2-selection--single" role="combobox"
                                        aria-haspopup="true" aria-expanded="false" tabindex="0"
                                        aria-labelledby="select2-cboWards-container"><span
                                            class="select2-selection__rendered" id="select2-cboWards-container"
                                            role="textbox" aria-readonly="true"></span><span
                                            class="select2-selection__arrow" role="presentation"><b
                                                role="presentation"></b></span></span></span><span
                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <code id="nof-load-ward" style="display: none;">Đang tải ...</code>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <div class="row" id="listProducts">
                {{-- <div class="col-sm-6">
                    <div class="row container bg-white mt-3" style="" id="divginore">
                        <div class="col-10" style="display: flex;">
                            <a style="color:black"
                                href="/evaluateFileResult?fileId=612caf21a1f3a73db5997505&amp;&amp;level=0">
                                <img src="https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/Anh Vai.jpg"
                                    class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px"
                                    alt="ảnh">
                            </a>
                            <div style="margin-top: -4px;">
                                <a style="color:black"
                                    href="/evaluateFileResult?fileId=612caf21a1f3a73db5997505&amp;&amp;level=0">
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
                                <div><a href="/evaluateFileResult?fileId=612caf21a1f3a73db5997505&amp;&amp;level=0&amp;role=helpteam"
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
            <button class="btn btn-success d-flex"
                style="margin: 20px auto; height: 35px; width: 140px; padding-left: 18px; opacity: 0;"
                id="btnLoadMore">Xem thêm</button>
        </div>

        <div id="notAuthorizeDiv" style="display: none;">
            Xin lỗi giao diện này chỉ dành riêng cho người chấm
        </div>

        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar ps ps--theme_default" data-ps-id="00fd60d1-fa83-cfee-513e-878d44614f54">
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