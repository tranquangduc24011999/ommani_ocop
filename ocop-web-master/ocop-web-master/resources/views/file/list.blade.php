@extends('master')
@section('content')
<style>
    .Hon-thnh {
      font-family: 'Quicksand', sans-serif;
      font-size: 11px;
      font-weight: bold;
      font-stretch: normal;
      font-style: normal;
      line-height: 1.09;
      letter-spacing: normal;
      color: #191935;
    }

    .ectanglevn {
      width: 99%;
      /* height: 122px; */
      border-radius: 12px;
      box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.1);
      background-color: #ffffff;
      margin-bottom: 10px;
    }

    .Rectanglevn {
      width: 4px;
      height: 12px;
      border-radius: 1px;
      background-color: #fd9600;
      margin-top: 3px;
      margin-right: 12px;
    }

    .SubHeadingvn {
      width: 100%;
      height: 20px;
      font-family: 'Quicksand', sans-serif;
      font-size: 15px;
      font-weight: bold;
      font-stretch: normal;
      font-style: normal;
      line-height: 1.33;
      letter-spacing: normal;
      color: #151c30;
    }

    input {
      background-color: #ffffff !important;
    }

    .select2-container--default.select2-container--disabled .select2-selection--multiple {
      background-color: #ffffff !important;
    }

    .a-head {
      border-bottom: 1px solid #e9ecef;
      display: block;
      text-decoration: none;
      padding: 9px 15px;
    }

    .user-img {
      width: 45px;
      position: relative;
      display: inline-block;
      margin: 0 10px 15px 0;
    }

    .mail-contnet {
      display: inline-block;
      width: 70%;
      vertical-align: middle;
    }

    .oveflow {
      overflow: overlay;
    }
    .row.container.bg-white.mt-3{
      min-height:91%
    }
    @media only screen and (min-width: 768px) and (max-width: 1024px) {
      .oveflow {
        overflow: scroll;
      }
    }

    @media (min-width: 481px) and (max-width: 767px) {
      .oveflow {
        overflow: scroll;
      }

    }

    @media (min-width: 320px) and (max-width: 480px) {
      .oveflow {
        overflow: scroll;
      }
    }

    .textH {
      font-size: 16px;
      font-weight: 500;
      color: #787879;
    }

    #keyword {
      background-color: white !important;
    }

    .textL {
      font-size: 14px;
      font-weight: 500;
    }

    .backgroup {
      background-color: white !important;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
      background: #039252;
      color: #fff;
      border-color: #039252;
    }

    .dropdown-menu.show {
      display: block;
      left: -126px !important;
      top: 30px !important;
      position: absolute;
      transform: translate3d(0px, 63px, 0px);
      will-change: transform;
    }

    .dropdown-toggle::after {
      display: none !important;
    }

    .dropdown-menu>a.dropdown-item-tool:hover {
      background-color: rgb(3, 146, 82);
    }

    .member-info-wrap .member-info {
      display: none;
      position: absolute;
      top: 8%;
    right: 32px;
      border-radius: 5px;
      background-color: rgba(3, 146, 82, 0.9);
      padding: 5px;
      color: white;
    }
    .member-info-wrap:hover .member-info {
      display: block;
    }
    .div_border{
      width: 100%;
      /* border-radius: 5px; */
      background: #FFFFFF;
      border: 0.891566px solid #EFEEEE;
      box-sizing: border-box;
      box-shadow: 0px 3.56627px 3.56627px rgb(0 0 0 / 25%);
      border-radius: 8.91566px;
      padding: 11px 17px;
      display: flex;
      margin-bottom: 13px;
    }
    .textProof{
      font-size: 14px;
      color: #6d7182;
      font-family: sans-serif;
    }

    .dropzone.dz-clickable .dz-message {
      padding: 0;
      margin: 4px;
      margin-top: 0px;
    }

    .dropzone .dz-preview .dz-image img {
      width: 100% !important;
    }

    /* .dropzone.dz-started .dz-message{
      display: block!import;
    } */
    .dropzone.dz-clickable {
      max-height: 426px;
      /* overflow: scroll; */
    }

    .dropzone {
      min-height: auto;
      border-style: dotted;
      border-radius: 5px;
    }

    .dropzone.dz-clickable {
      height: 130px;
    }

    .dropzone .dz-preview .dz-image {
      width: 100px;
      margin-top: -26px;
      height: 100px;
    }

    .Note-Copy {
      width: 385px;
      height: 20px;
      font-family: 'Quicksand', sans-serif;
      font-size: 15px;
      font-weight: normal;
      font-stretch: normal;
      font-style: normal;
      line-height: 1.33;
      letter-spacing: normal;
      text-align: center;
      color: #6d7182;
      margin-bottom: 29px;
    }

    .sub-title {
      color: #6d7182;
      font-family: 'Quicksand', sans-serif;
      font-size: 15px;
      font-weight: normal;
      font-stretch: normal;
      font-style: normal;
      line-height: 1.33;
      letter-spacing: normal;
      text-align: center;
    }

    .inline {
      display: inline-block;
      margin:10px;
    }

    .close-button {
      position: absolute;
      top: 1px;
      right: 24px;
    }
    .textAre_Note{
      box-sizing: border-box;
      box-shadow: 0px 1.56627px 4.56627px rgb(0 0 0 / 25%);
      border-radius: 8.91566px;
      margin-bottom: 29px;
    }
  </style>
<div class="page-wrapper" style="background-color: rgb(237, 241, 245); min-height: 954px;">
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

      <!-- old -->
      <!-- <div class="card">
        <div class="card-body">
          <div class="row m-b-20 m-t-30" style="border-bottom: 1px solid #dee2e6;" id="op-seach">
            <div class="col-md-4 m-b-20 p-o">
              <label class="textH" style="margin-left: -12px;">Tìm kiếm sản phẩm</label>
              <div class="input-group">
                <input type="search" class="form-control" id="keyword" placeholder="Nhập tên sản phẩm"
                  style="background-color: white;">
              </div>
            </div>
            <div class="col-md-4 m-b-20 p-o">
              <label class="textH">Tìm kiếm chủ thể</label>
              <div class="input-group">
                <input type="search" class="form-control" id="keywordEnt" placeholder="Nhập tên chủ thể"
                  style="background-color: white;">
              </div>
            </div>
            <div class="col-md-4 m-b-20">
              <label class="textH">Trạng thái hồ sơ</label>
              <select class="form-control" multiple="multiple" style="width: 100%" name="cboPos" id="Status">
                <option value="districtRanked">Cấp huyện đã xếp hạng</option>
                <option value="provinceRanked">Cấp tỉnh đã xếp hạng</option>
                <option value="Ranked">Đã xếp hạng</option>
                <option value="Submiting">Đang nộp</option>
                <option value="Done">Hoàn thành</option>

                <option value="Fail">Không đạt</option>
                <option value="Preparing">Chưa nộp</option>
                <option value="Waitting">Chờ chấm</option>

              </select>
            </div>
          </div>
          <div class="row m-b-20" style="border-bottom: 1px solid #dee2e6;">
            <div class="col-12 p-0" style="    margin-bottom: 10px;">
              <label class="textH">Bộ lọc theo đơn vị</label>
            </div>
            <div class="col-md-4 m-b-20" id="stProvical">
              <label for="txtlevel" class="textL">Tỉnh/TP</label>
              <select class="multi-select" multiple="multiple" style="width: 100%" name="cboPos" id="cboProvincial">
              </select>
              <code id='nof-load-pro' style="display: none;">Đang tải ...</code>
            </div>
            <div class="col-md-4 m-b-20" id="stDistricts">
              <label for="txtlevel" class="textL">Quận/Huyện</label>
              <select class="multi-select" multiple="multiple" style="width: 100%" name="cboPos" id="cboDistricts">

              </select>
              <code id='nof-load-district' style="display: none;">Đang tải ...</code>
            </div>
            <div class="col-md-4 m-b-20" id="stCbwards">
              <label for="txtname" class="textL">Xã/Phường</label>
              <select class="multi-select" multiple="multiple" style="width: 100%" name="cboPos" id="cboWards">

              </select>
              <code id='nof-load-ward' style="display: none;">Đang tải ...</code>
            </div>
          </div>
          <div class="row m-b-20" style="border-bottom: 1px solid #dee2e6;">
            <label class="textH" style="    margin-bottom: 10px;">Bộ lọc theo thời gian</label>
            <div class="col-md-12">

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="txtlevel" class="textL">Ngày đăng ký</label>
                    <select id="cboDate" name="cboDate" class="form-control" onchange="cboDateChange(this)">
                      <option value="0">Tất cả</option>
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
                    <label for="txtdate1" class="textL">Bắt đầu từ ngày:</label>
                    <input type="date" class="form-control backgroup" id="datepk1" name="datepk1" />
                  </div>
                </div>
                <div class="col-md-4" style="display: none;" id="date2">
                  <div class="form-group">
                    <label for="txtdate2" class="textL">Đến ngày:</label>
                    <input type="date" class="form-control backgroup" id="datepk2" name="datepk2" />
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="card-footer" style="    background: white;">
          <div class="row">
            <div class="col-4">

            </div>
            <div class="col-md-4">

            </div>

            <diV class="col-md-4 p-0">
              <a style="width:100%;border-radius: 0;    background-color: #039252;" href="#" class="btn btn-success"
                onclick="fillter()">LỌC HỒ SƠ</a>
            </diV>

          </div>
        </div>
      </div>
      <div class="row m-t-60" style="margin-top: 60px;">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body" style="padding: 0px;">
              <div>
                <div class="message-box">
                  <div class="message-widget message-scroll">
                    <div id='divListProduct' class="row">

                    </div>

                  </div>
                </div>
              </div>
              </di>
            </div>
          </div>
        </div>
      </div> -->
      <!-- new  -->
      <div class="row">
         <div class="col-md-12">
          <div class="card" style="width: 100%;">
            <div class="card-header" style="background-color: #edf1f5;;
              display: flex;
              padding: 17px;padding-left: 0px;">
              <div class="Rectanglevn">
              </div>
              <span class="SubHeadingvn">
                BỘ LỌC TÌM KIẾM
              </span>
            </div>
            <a href="#" onclick="addseach('1')" id="plus" style="background-color: rgb(237, 241, 245);">
              <i class="fa fa-plus" style="font-size: 20px;
              color: #049252;"></i>
            </a>
            <a href="#" style="display: none;" id="minus" onclick="addseach('0')">
              <i class="fa fa-minus" style="font-size: 20px;
              color: #e46a76;"></i>
            </a>

            <div class="card-body row ectanglevn" id="Obligatory" style="margin: 0px; display: none;">
              <div class="col-md-4 m-b-20 p-o" id="isProduct">
                <label class="textH">Tìm kiếm sản phẩm</label>
                <div class="input-group">
                  <input type="search" class="form-control" id="keyword" placeholder="Nhập tên/mã sản phẩm" style="background-color: #edf1f5;;">
                </div>
              </div>
              <div class="col-md-4 m-b-20 p-o" id="isEntiti">
                <label class="textH">Tìm kiếm chủ thể</label>
                <div class="input-group">
                  <input type="search" class="form-control" id="keywordEnt" placeholder="Nhập tên chủ thể" style="background-color: #edf1f5;;">
                </div>
              </div>
              <div class="col-md-4 mb-2" id="isRank" style="">
                <label class="textH">Kết quả xếp hạng</label>
                <select class="form-control" style="width: 100%;" id="ranking-select">
                    <option value="0" selected="selected">Chọn xếp hạng</option>
                    <option value="1">Đạt 1 sao</option>
                    <option value="2">Đạt 2 sao</option>
                    <option value="3">Đạt 3 sao</option>
                    <option value="4">Đạt 4 sao</option>
                    <option value="5">Đạt 5 sao</option>
                </select>
              </div>
              <div class="col-md-4 m-b-20" id="isStatus">
                <label class="textH">Trạng thái hồ sơ</label>
                <select class="form-control select2-hidden-accessible" multiple="multiple" style="width: 100%" name="cboPos" id="Status" data-select2-id="Status" tabindex="-1" aria-hidden="true">
                    @foreach($briefStt as $key => $stt)
                        <option value="{{ $key }}">{{ $stt }}</option>
                    @endforeach
                  </select>
              </div>
              <div class="col-md-12 row m-b-20">
                  <input type="hidden" id="uProvince" value="{{ $user->address->province_id }}">
                  <input type="hidden" id="uDistrict" value="{{ $user->address->district_id }}">
                  <input type="hidden" id="uWard" value="{{ $user->address->ward_id }}">
                  <input type="hidden" id="uLevel" value="{{ $user->level }}">
                <div class="col-md-4 m-b-20" id="stProvical">
                  <label for="txtlevel" class="textH">Tỉnh/TP</label>
                  <select class="multi-select select2-hidden-accessible" multiple="multiple" style="width: 100%"
                          name="cboPos" id="cboProvincial" data-select2-id="cboProvincial" tabindex="-1" aria-hidden="true"
                        @if($user->level == 3 || $user->level == 2) disabled="disabled" @endif>
                      @foreach($provinces as $item)
                          <option value="{!! $item->id !!}"
                          @if($user->level == 3 && $item->id == $user->address->province_id ||
                          $user->level == 2 && $item->id == $user->address->province_id ) selected="selected" @endif>{!! $item->name !!}</option>
                      @endforeach
                  </select>
                  <code id="nof-load-pro" style="display: none;">Đang tải ...</code>
                </div>
                <div class="col-md-4 m-b-20" id="stDistricts">
                  <label for="txtlevel" class="textH">Quận/Huyện</label>
                  <select class="multi-select select2-hidden-accessible" multiple="multiple"
                          style="width: 100%" name="cboPos" id="cboDistricts" data-select2-id="cboDistricts"
                          tabindex="-1" aria-hidden="true" @if($user->level == 3) disabled="disabled" @endif>
                      @if($user->level == 3)
                          <option selected value="{{ $user->address->district_id }}">{{ $user->address->district_prefix }} {{ $user->address->district }}</option>
                      @endif
                  </select>
                  <code id="nof-load-district" style="display: none;">Đang tải ...</code>
                </div>
                <div class="col-md-4 m-b-20" id="stCbwards">
                  <label for="txtname" class="textH">Xã/Phường</label>
                  <select class="multi-select select2-hidden-accessible" multiple="multiple" style="width: 100%" name="cboPos" id="cboWards" data-select2-id="cboWards" tabindex="-1" aria-hidden="true">
                  </select>
                  <code id="nof-load-ward" style="display: none;">Đang tải ...</code>
                </div>
              </div>
              <div class="col-md-12 row m-b-20">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="txtlevel" class="textH">Ngày đăng ký</label>
                        <select id="cboDate" name="cboDate" class="form-control" onchange="cboDateChange(this)">
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
                        <label for="txtdate1" class="textH">Bắt đầu từ ngày:</label>
                        <input type="date" class="form-control backgroup" id="datepk1" name="datepk1">
                      </div>
                    </div>
                    <div class="col-md-4" style="display: none;" id="date2">
                      <div class="form-group">
                        <label for="txtdate2" class="textH">Đến ngày:</label>
                        <input type="date" class="form-control backgroup" id="datepk2" name="datepk2">
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-md-12">
                  <input type="hidden" id="hiddenCsrf" value="{{ csrf_token() }}">
                <a href="#" class="btn btn-success" onclick="fillter()">LỌC HỒ SƠ</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header" style="background-color: #edf1f5;;display: flex;padding: 17px;padding-left: 0px;">
              <div class="Rectanglevn">
              </div>
              <span class="SubHeadingvn">
                HỒ SƠ
              </span>

            </div>
            <!-- <div class="col-sm-12 text-right">Tổng số : <span id="total"></span></div> -->
            <div class="card-body row" id="divListProduct" style="padding: 0;background-color: #edf1f5;">

      <div class="modal" id="modalInputScore" tabindex="-1" role="dialog" style="overflow-y: auto">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="margin-top: 9%;  background-color: #ffffff;">
            <div class="modal-body" style="padding: 0 24px;">
              <div style="display: flex;">
                <label style="text-align: center;font-size: 20px;width: 100%;padding: 5px;margin-top: 11px;" class="titlesinfo">Bước 1:</label>

                <a href="#" style="    font-size: 22px;color: #7e7171;font-weight: 600;margin-top: 9px;" data-dismiss="modal" aria-label="Close">x</a>
              </div>
              <p style="text-align: center; font-size: 18px;">Thêm các văn bản đính kèm</p>
              <p class="sub-title" style="text-align: center;">Vui lòng đính kèm các văn bản, quyết định, biên bản, báo cáo,...về kết quả đánh giá cho hồ sơ này.</p>

              <div class="rowclickImg" id="upload">
                <form method="post" action="#" enctype="multipart/form-data" id="DropzoneNew" style="width:100%">
                  <div id="load" style="text-align: left;font-size: 14px;font-weight: 600;color: #ff847b;">
                  </div>
                  <div class="dropzone dz-clickable" id="dropzoneMytwo">
                    <div class="dropzone-previews">
                    </div>
                  <div class="dz-default dz-message"><span><span style="font-weight: 600;font-family: sans-serif; color: #039252"><i class="fas fa-cloud-upload-alt fa-5x"></i><br> Chọn file</span><i class="fa fa-folders"></i></span></div></div>
                  <div id="listImgDropzone" class="row" style="margin-top: 9px;">
                  </div>
                  <div style="margin-top: 14px;" id="descriptionFile">
                    <label>Mô tả file</label>
                    <textarea class="form-control" rows="5" placeholder="Vui lòng nhập mô tả cho yêu cầu minh chứng bạn đã nộp tại đây" id="descriptionImg"></textarea>
                  </div>
                </form>

              </div>
                              <div>
                                  <div class="row pt-3" style="overflow: auto;" id="ImgModal-info">
                                  </div>
                                  <div class="row " style="overflow: auto;" id="DocModal-info">
                                  </div>
                              </div>
              <div style="float: right;margin: 24px 0;">
                <a href="#" class="btn btn-success" style="width: 140px;
                height: 40px;
                border-radius: 8px;
                                  background-color: #049252;" onclick="saveFilesData()">Xác nhận tải lên</a>

                <button href="#" class="btn btn-secondary btn-disable" onclick="nextInputScore()" style="width: 140px;
                height: 40px;
                border-radius: 8px;
                                  background-color: #eff0f1;" id="savePoof">Tiếp tục</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal" id="modalInputScoreNext" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="margin-top: 9%;max-height: 723px;  background-color: #ffffff;">
            <div class="modal-body" style="padding: 0 24px;">
              <div>
                <label style="margin-top: 24px; text-align: center; font-size: 20px; width: 100%; " class="title inline">Bước 2:</label>
              </div>

              <div class="close-button">
                <a href="#" class="inline" style="font-size: 22px; color: #7e7171; font-weight: 600; margin-top: 9px; width: 25%; float: right" data-dismiss="modal" aria-label="Close">x</a>
              </div>

              <p style="text-align: center; font-size: 18px;">Nhập kết quả đánh giá</p>
              <p class="sub-title" style="text-align: center;">Vui lòng nhập điểm (bằng số) trung bình của tất cà các thành viên trong hội đồng theo từng phần.</p>

              <div class="col-12">
                <div style="background-color: white;;
                  display: flex;
                  padding: 17px;padding-left: 0px;">
                  <div class="Rectanglevn">
                  </div>
                  <span class="SubHeadingvn">
                    Phần A: Sản phẩm và sức mạnh cộng đồng (35 điểm)
                  </span>
                </div>
                <input type="number" class="form-control avarage-score-input input" id="partAScore" step=".01">
              </div>
              <div class="col-12">
                <div style="background-color: white;;
                  display: flex;
                  padding: 17px;padding-left: 0px;">
                  <div class="Rectanglevn">
                  </div>
                  <span class="SubHeadingvn">
                    Phần B: Khả năng tiếp thị (25 điểm)
                  </span>
                </div>
                <input type="number" class="form-control avarage-score-input input" id="partBScore" step=".01">
              </div>

              <div class="col-12">
                <div style="background-color: white;;
                  display: flex;
                  padding: 17px;padding-left: 0px;">
                  <div class="Rectanglevn">
                  </div>
                  <span class="SubHeadingvn">
                    Phần C: Chất lượng sản phẩm (40 điểm)
                  </span>
                </div>
                <input type="number" class="form-control avarage-score-input input" id="partCScore" step=".01">
              </div>

              <div class="col-12">
                <div style="background-color: white;;
                  display: flex;
                  padding: 17px;padding-left: 0px;">
                  <div class="Rectanglevn">
                  </div>
                  <span class="SubHeadingvn">
                    TỔNG ĐIỂM TRUNG BÌNH
                  </span>
                </div>
                <input type="number" class="form-control input disabled" id="averageScore" step=".01" readonly="readonly">

              </div>
              <div class="row " style="max-height: 407px;;    overflow: auto;" id="listproductinfno">

              </div>
              <div style="float: right;margin: 24px 0;">
                <a href="#" class="btn btn-secondary" onclick="backstepInputScore(1)">Quay lại</a>
                <a href="#" class="btn btn-success" onclick="acceptSend()">Xác nhận gửi</a>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <div class="right-sidebar ps ps--theme_default" data-ps-id="f957ddb9-0c29-fac7-ff2e-714ca181314d">
      <div class="slimscrollright">
          <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
          <div class="r-panel-body">
              <ul id="themecolors" class="m-t-20">
                  <li><b>With Light sidebar</b></li>
                  <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme working">1</a></li>
                  <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                  <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                  <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                  <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                  <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                  <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                  <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                  <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                  <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                  <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                  <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                  <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
              </ul>

          </div>
      </div>
  <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
    <script type="text/javascript">
        var csrfHidden = '{{csrf_token()}}',
            uProvince = $('#uProvince'),
            uDistrict = $('#uDistrict'),
            uWard = $('#uWard'),
            uLevel = $('#uLevel').val()
    </script>
  </div>
</div>
@endsection()
