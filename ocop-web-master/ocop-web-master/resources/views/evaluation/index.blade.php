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
            <div id="filter-section" class="mt-3" style="display:">
                <div class="row">
                    <div class="col-sm-4 input-group" style="margin-bottom:10px;">
                        <input type="search" class="form-control" id="keyword"
                            placeholder=" Tìm kiếm theo tên sản phẩm/mã sản phẩm">
                        <button id="searchProductsBtn" class="btn" style="display:none;background-color: #039252; color: white;"><i
                                class="fas fa-search"></i></button>
                    </div>

                    <div class="col-sm-4" style="margin-bottom:10px;">
                        <select class="form-control" style="width: 100%;" id="productType-select">
                            <option value="0" selected="selected">Tất cả ngành</option>
                            @foreach($productTypes as $item)
                            <option value="{!! $item->id !!}">{!! $item->name!!}</option>
                            @endforeach
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
                                id="cboProvincial1" data-select2-id="cboProvincial1" tabindex="-1" aria-hidden="true">
                            </select>
                            
                        </div>
                        <div class="col-sm-4 m-b-20" id="stDistricts">
                            <label for="txtlevel" class="textH">Quận/Huyện</label>
                            <select class="multi-select select2-hidden-accessible" style="width: 100%" name="cboPos"
                                id="cboDistricts1" data-select2-id="cboDistricts1" tabindex="-1" aria-hidden="true">

                            </select>
                            
                        </div>
                        <div class="col-sm-4 m-b-20" id="stCbwards" style="display:none">
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
                    <div class="col-sm-12 mt-2 mb-2" id="stCbwards">
                        <button id="searchProductsBtn1" class="btn"
                            style="background-color: #039252; color: white;float: right;">Tìm kiếm</button>
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