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

    .row.container.bg-white.mt-3 {
      min-height: 91%
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

    .div_border {
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

    .textProof {
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

    .subtitiles {
      margin: 0;

    }

    .subtitile {
      color: #686464;
      font-family: sans-serif;
      margin: 0;
    }

    .text-Null-Data {
      font-size: 13px;
      font-style: italic;
      margin-left: 25px;
    }

    .user-row {
      margin-bottom: 14px;
    }

    .user-row:last-child {
      margin-bottom: 0;
    }


    .dropdown-user:hover {
      cursor: pointer;
    }

    .table-user-information>tbody>tr {
      border-top: 1px solid rgb(221, 221, 221);
    }

    .table-user-information>tbody>tr:first-child {
      border-top: 0;
    }


    .table-user-information>tbody>tr>td {
      border-top: 0;
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
      <div class="modal" id="step4" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="margin-top: 9%;max-height: 723px;  background-color: #ffffff;">
            <div class="modal-body" style="padding: 0 24px;">
              <label style="margin-top: 24px;" class="title">Hội đồng chấm</label>
              <!-- <p class="Note-Copy">Bước 3: Chọn hồ sơ</p> -->
              <div class="form-group">
                <!-- <label for="nameGroup" class="Lable" id="Namegroup">Tên hội đồng</label> -->
                <!-- <a href="#" onclick="seachproduct()"> <img src="img/original.png"
              srcset="img/original@2x.png 2x,img/original@3x.png 3x" class="Original"></a>
          <input style="padding-left: 43px;" type="text" class="form-control input" id="nameProductinfo"
            placeholder="Nhập tên hội đồng"> -->
              </div>
              <div class="row" style="margin-top: 25px;margin-bottom: 25px;margin-right: 0;">
                <div class="col-11">

                </div>
              </div>
              <div class="row " style="max-height: 407px;;    overflow: auto;" id="listcoucils">
    <div class="col-md-12 row rowContent">
        <div class="col-2" style="padding-right: 0;">
        <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
        </div>
        <div class="col-9" style="padding: 0;overflow: auto; ">
        <span class="titleName">test chả mực</span><br>
        <span class="titleNamechirden">2 Thành viên - 4 Bộ hồ sơ</span>
        </div>
        <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
        <div class="rounds">
                        <input type="checkbox" class="change-selector3s" id="entities-613ad6786549ac587a826847" value="613ad6786549ac587a826847" name="fooby[1][]">
                        <label for="entities-613ad6786549ac587a826847"></label>
        </div>
        </div>
    </div>
    
    <div class="col-md-12 row rowContent">
        <div class="col-2" style="padding-right: 0;">
        <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
        </div>
        <div class="col-9" style="padding: 0;overflow: auto; ">
        <span class="titleName">test chấm bát đĩa</span><br>
        <span class="titleNamechirden">2 Thành viên - 3 Bộ hồ sơ</span>
        </div>
        <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
        <div class="rounds">
                        <input type="checkbox" class="change-selector3s" id="entities-6142b660409d27ea5b80d50a" value="6142b660409d27ea5b80d50a" name="fooby[1][]">
                        <label for="entities-6142b660409d27ea5b80d50a"></label>
        </div>
        </div>
    </div>
    
    <div class="col-md-12 row rowContent">
        <div class="col-2" style="padding-right: 0;">
        <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
        </div>
        <div class="col-9" style="padding: 0;overflow: auto; ">
        <span class="titleName">TestHN Hạt</span><br>
        <span class="titleNamechirden">2 Thành viên - 2 Bộ hồ sơ</span>
        </div>
        <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
        <div class="rounds">
                        <input type="checkbox" class="change-selector3s" id="entities-615ff93e1a52da4b19efe6ee" value="615ff93e1a52da4b19efe6ee" name="fooby[1][]">
                        <label for="entities-615ff93e1a52da4b19efe6ee"></label>
        </div>
        </div>
    </div>
    </div>
              <div style="float: right;margin: 24px 0;">
                <a href="#" class="btn btn-secondary" onclick="backstep(4)">Quay lại</a>
                <a href="#" class="btn btn-success" onclick="nextStep(4)">Tiếp theo</a>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="modal" id="step2" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="margin-top: 9%;;height: 524px;  background-color: #ffffff;">
            <div class="modal-body" style="padding: 0 24px;">
              <label style="margin-top: 24px;" class="title">Tạo mới hội đồng chấm</label>
              <p class="Note-Copy">Bước 2: Thông tin hội đồng</p>
              <div class="form-group">
                <label for="nameGroup" class="Lable" id="Namegroup">Tên hội đồng</label>
                <input type="text" class="form-control input" id="nameGroup">
              </div>
              <div class="form-group">
                <label for="chairman" class="Lable">Chủ tịch hội đồng</label>
                <select type="text" class="form-control input select2-hidden-accessible" id="chairman" data-select2-id="chairman" tabindex="-1" aria-hidden="true">
                <option value="0" data-select2-id="7" selected="selected">Chọn chủ tịch</option><option value="5f364c31cb42ae28a848ca9b*quản lý tw">quản lý tw</option><option value="5f43aec7e4c58d3a087d456b*Nguyễn Minh Tiến">Nguyễn Minh Tiến</option><option value="5f43b0e2650dc6513029eb1f*Nguyễn Văn Lâm">Nguyễn Văn Lâm</option><option value="5f43b10be4c58d3a087d48bd*KYC Chấm Trung Ương">KYC Chấm Trung Ương</option><option value="5f43b5f9af3d453ff69c9b70*Nguyễn Hoàng Yến">Nguyễn Hoàng Yến</option><option value="5f43b652af3d453ff69c9b71*Vi Thanh Hoài">Vi Thanh Hoài</option><option value="5f43b702af3d453ff69c9b72*Bùi Trường Minh">Bùi Trường Minh</option><option value="5f43b729af3d453ff69c9b73*Nguyễn Minh Tiến">Nguyễn Minh Tiến</option><option value="5f43b759af3d453ff69c9b74*Lê Bá Anh">Lê Bá Anh</option><option value="5f43b7bfcfe2e74154870f0e*Đồng Quốc Thiều">Đồng Quốc Thiều</option><option value="5f43b7c1cfe2e74154870f0f*Phan Ngân Sơn">Phan Ngân Sơn</option><option value="5f43b84ecfe2e74154870f11*Hạ Thúy Hạnh">Hạ Thúy Hạnh</option><option value="5f43b87ccfe2e74154870f12*Trần Đăng Ninh">Trần Đăng Ninh</option><option value="5f43b88bcfe2e74154870f13*Đào Đức Huấn">Đào Đức Huấn</option><option value="5f43b8b2cfe2e74154870f14*Lê Văn Quyết">Lê Văn Quyết</option><option value="5f43b92dcfe2e74154870f16*Đại diện học viện NNVN">Đại diện học viện NNVN</option><option value="5f43b996cfe2e74154870f18*Trần Văn Môn">Trần Văn Môn</option><option value="5f43b9ebcfe2e74154870f1a*Nguyễn Hoàng Linh">Nguyễn Hoàng Linh</option><option value="5f43be146c9bec3d04799e0c*Tô Thúy Nga">Tô Thúy Nga</option><option value="5f43be259fac087e1f40647a*Nguyễn Hùng Long">Nguyễn Hùng Long</option><option value="5f43befa9fac087e1f40647b*Trần Nhật Lam">Trần Nhật Lam</option><option value="5f43c1b36c9bec3d04799eaa*Nguyễn Thị Hương">Nguyễn Thị Hương</option><option value="5f43c2356c9bec3d04799eab*Đd Đại học Nông Lâm Thái Nguyên">Đd Đại học Nông Lâm Thái Nguyên</option><option value="5f43c5a16c9bec3d04799eec*Đại diện học viện Nông Nghiệp VIệt Nam">Đại diện học viện Nông Nghiệp VIệt Nam</option><option value="5f43c6c96c9bec3d04799eed*Đại diện cục Nông Lâm Thủy Sản">Đại diện cục Nông Lâm Thủy Sản</option><option value="5f43c9a76c9bec3d04799f36*Nguyễn Hoàng Ánh">Nguyễn Hoàng Ánh</option><option value="5f4767c2bfa9f76b1f84469a*Nguyễn Văn Ba">Nguyễn Văn Ba</option><option value="5f91267a0b1ea15dcc365b9d*Nguyễn Minh Tiến">Nguyễn Minh Tiến</option><option value="5f912b750b1ea15dcc366895*Nguyễn Minh Tiến">Nguyễn Minh Tiến</option><option value="5f912f660b1ea15dcc36689a*Trần Thanh Nam">Trần Thanh Nam</option><option value="5f912fe20b1ea15dcc36689e*Phan Ngân Sơn">Phan Ngân Sơn</option><option value="5f91303d0b1ea15dcc3668a2*Phạm Văn Duy">Phạm Văn Duy</option><option value="5f9130a20b1ea15dcc3668a8*Lê Văn Đức">Lê Văn Đức</option><option value="5f9130e90b1ea15dcc3668a9*Nguyễn Văn An">Nguyễn Văn An</option><option value="5f9131ca0b1ea15dcc3668b8*Nguyễn Hoàng Yến">Nguyễn Hoàng Yến</option><option value="5fe9b1023b84f95f0de788c1*Nguyễn Khánh Toàn">Nguyễn Khánh Toàn</option><option value="5ffd6667f74fc8194932ced2*Vi Việt Hoàng">Vi Việt Hoàng</option><option value="611a2535401e8f18e75229ae*Đinh Hoàng Nam">Đinh Hoàng Nam</option><option value="611b1ac0401e8f18e75229c3*Vũ Hồng Lai">Vũ Hồng Lai</option><option value="611b8485401e8f18e7522a20*Liên Test">Liên Test</option><option value="611b84d7401e8f18e7522a21*Liên Test">Liên Test</option><option value="611fbd93404a8b6606d63b6b*Anh Tran">Anh Tran</option><option value="61235f35404a8b6606d63b89*Nguyễn Duy Thanh">Nguyễn Duy Thanh</option><option value="61286daf74341401b7cbb626*KYC Test chấm TW">KYC Test chấm TW</option><option value="6128780674341401b7cbb634*BT">BT</option><option value="61288ea974341401b7cbb637*Lê Thành Thái">Lê Thành Thái</option><option value="6128905f74341401b7cbb638*Lê Thành Thái">Lê Thành Thái</option><option value="612ee21d1756f855d6f76845*KYC Test TGV">KYC Test TGV</option><option value="614d7c790c6d6b30dcd4b46d*KYC Test chấm 2">KYC Test chấm 2</option><option value="615566f7cc988452e8748206*Đoàn Lâm Thanh Tâm">Đoàn Lâm Thanh Tâm</option><option value="6178fa9c673abd092c40737d*Vũ Mạnh Hà">Vũ Mạnh Hà</option><option value="6178fa9d673abd092c40737e*Trần Thị Mai Anh">Trần Thị Mai Anh</option><option value="6178faba673abd092c407384*Hà Quang Trung">Hà Quang Trung</option><option value="6178fb14673abd092c4073a0*Đỗ Đức Thông">Đỗ Đức Thông</option><option value="61790f4b673abd092c40906a*Văn phòng điều phối Nông thôn mới">Văn phòng điều phối Nông thôn mới</option><option value="61791afe673abd092c40aae6*Nguyễn Thị Diễm Nhi">Nguyễn Thị Diễm Nhi</option><option value="622aab25910d6b236160edc8*Nguyễn Văn Hải">Nguyễn Văn Hải</option><option value="622aaba7910d6b236160edc9*Phùng văn Toàn">Phùng văn Toàn</option><option value="62316773910d6b236160f4eb*Phùng Văn Toàn">Phùng Văn Toàn</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-chairman-container"><span class="select2-selection__rendered" id="select2-chairman-container" role="textbox" aria-readonly="true" title="Chọn chủ tịch">Chọn chủ tịch</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>
              <div class="form-group">
                <label for="Secretary" class="Lable">Thư ký hội đồng</label>
                <!-- <input type="text" class="form-control input" id="Secretary"> -->
                <select type="text" class="form-control input select2-hidden-accessible" id="Secretary" data-select2-id="Secretary" tabindex="-1" aria-hidden="true">
                <option value="0" data-select2-id="8" selected="selected">Chọn thư ký</option><option value="5f364c31cb42ae28a848ca9b*quản lý tw">quản lý tw</option><option value="5f43aec7e4c58d3a087d456b*Nguyễn Minh Tiến">Nguyễn Minh Tiến</option><option value="5f43b0e2650dc6513029eb1f*Nguyễn Văn Lâm">Nguyễn Văn Lâm</option><option value="5f43b10be4c58d3a087d48bd*KYC Chấm Trung Ương">KYC Chấm Trung Ương</option><option value="5f43b5f9af3d453ff69c9b70*Nguyễn Hoàng Yến">Nguyễn Hoàng Yến</option><option value="5f43b652af3d453ff69c9b71*Vi Thanh Hoài">Vi Thanh Hoài</option><option value="5f43b702af3d453ff69c9b72*Bùi Trường Minh">Bùi Trường Minh</option><option value="5f43b729af3d453ff69c9b73*Nguyễn Minh Tiến">Nguyễn Minh Tiến</option><option value="5f43b759af3d453ff69c9b74*Lê Bá Anh">Lê Bá Anh</option><option value="5f43b7bfcfe2e74154870f0e*Đồng Quốc Thiều">Đồng Quốc Thiều</option><option value="5f43b7c1cfe2e74154870f0f*Phan Ngân Sơn">Phan Ngân Sơn</option><option value="5f43b84ecfe2e74154870f11*Hạ Thúy Hạnh">Hạ Thúy Hạnh</option><option value="5f43b87ccfe2e74154870f12*Trần Đăng Ninh">Trần Đăng Ninh</option><option value="5f43b88bcfe2e74154870f13*Đào Đức Huấn">Đào Đức Huấn</option><option value="5f43b8b2cfe2e74154870f14*Lê Văn Quyết">Lê Văn Quyết</option><option value="5f43b92dcfe2e74154870f16*Đại diện học viện NNVN">Đại diện học viện NNVN</option><option value="5f43b996cfe2e74154870f18*Trần Văn Môn">Trần Văn Môn</option><option value="5f43b9ebcfe2e74154870f1a*Nguyễn Hoàng Linh">Nguyễn Hoàng Linh</option><option value="5f43be146c9bec3d04799e0c*Tô Thúy Nga">Tô Thúy Nga</option><option value="5f43be259fac087e1f40647a*Nguyễn Hùng Long">Nguyễn Hùng Long</option><option value="5f43befa9fac087e1f40647b*Trần Nhật Lam">Trần Nhật Lam</option><option value="5f43c1b36c9bec3d04799eaa*Nguyễn Thị Hương">Nguyễn Thị Hương</option><option value="5f43c2356c9bec3d04799eab*Đd Đại học Nông Lâm Thái Nguyên">Đd Đại học Nông Lâm Thái Nguyên</option><option value="5f43c5a16c9bec3d04799eec*Đại diện học viện Nông Nghiệp VIệt Nam">Đại diện học viện Nông Nghiệp VIệt Nam</option><option value="5f43c6c96c9bec3d04799eed*Đại diện cục Nông Lâm Thủy Sản">Đại diện cục Nông Lâm Thủy Sản</option><option value="5f43c9a76c9bec3d04799f36*Nguyễn Hoàng Ánh">Nguyễn Hoàng Ánh</option><option value="5f4767c2bfa9f76b1f84469a*Nguyễn Văn Ba">Nguyễn Văn Ba</option><option value="5f91267a0b1ea15dcc365b9d*Nguyễn Minh Tiến">Nguyễn Minh Tiến</option><option value="5f912b750b1ea15dcc366895*Nguyễn Minh Tiến">Nguyễn Minh Tiến</option><option value="5f912f660b1ea15dcc36689a*Trần Thanh Nam">Trần Thanh Nam</option><option value="5f912fe20b1ea15dcc36689e*Phan Ngân Sơn">Phan Ngân Sơn</option><option value="5f91303d0b1ea15dcc3668a2*Phạm Văn Duy">Phạm Văn Duy</option><option value="5f9130a20b1ea15dcc3668a8*Lê Văn Đức">Lê Văn Đức</option><option value="5f9130e90b1ea15dcc3668a9*Nguyễn Văn An">Nguyễn Văn An</option><option value="5f9131ca0b1ea15dcc3668b8*Nguyễn Hoàng Yến">Nguyễn Hoàng Yến</option><option value="5fe9b1023b84f95f0de788c1*Nguyễn Khánh Toàn">Nguyễn Khánh Toàn</option><option value="5ffd6667f74fc8194932ced2*Vi Việt Hoàng">Vi Việt Hoàng</option><option value="611a2535401e8f18e75229ae*Đinh Hoàng Nam">Đinh Hoàng Nam</option><option value="611b1ac0401e8f18e75229c3*Vũ Hồng Lai">Vũ Hồng Lai</option><option value="611b8485401e8f18e7522a20*Liên Test">Liên Test</option><option value="611b84d7401e8f18e7522a21*Liên Test">Liên Test</option><option value="611fbd93404a8b6606d63b6b*Anh Tran">Anh Tran</option><option value="61235f35404a8b6606d63b89*Nguyễn Duy Thanh">Nguyễn Duy Thanh</option><option value="61286daf74341401b7cbb626*KYC Test chấm TW">KYC Test chấm TW</option><option value="6128780674341401b7cbb634*BT">BT</option><option value="61288ea974341401b7cbb637*Lê Thành Thái">Lê Thành Thái</option><option value="6128905f74341401b7cbb638*Lê Thành Thái">Lê Thành Thái</option><option value="612ee21d1756f855d6f76845*KYC Test TGV">KYC Test TGV</option><option value="614d7c790c6d6b30dcd4b46d*KYC Test chấm 2">KYC Test chấm 2</option><option value="615566f7cc988452e8748206*Đoàn Lâm Thanh Tâm">Đoàn Lâm Thanh Tâm</option><option value="6178fa9c673abd092c40737d*Vũ Mạnh Hà">Vũ Mạnh Hà</option><option value="6178fa9d673abd092c40737e*Trần Thị Mai Anh">Trần Thị Mai Anh</option><option value="6178faba673abd092c407384*Hà Quang Trung">Hà Quang Trung</option><option value="6178fb14673abd092c4073a0*Đỗ Đức Thông">Đỗ Đức Thông</option><option value="61790f4b673abd092c40906a*Văn phòng điều phối Nông thôn mới">Văn phòng điều phối Nông thôn mới</option><option value="61791afe673abd092c40aae6*Nguyễn Thị Diễm Nhi">Nguyễn Thị Diễm Nhi</option><option value="622aab25910d6b236160edc8*Nguyễn Văn Hải">Nguyễn Văn Hải</option><option value="622aaba7910d6b236160edc9*Phùng văn Toàn">Phùng văn Toàn</option><option value="62316773910d6b236160f4eb*Phùng Văn Toàn">Phùng Văn Toàn</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-Secretary-container"><span class="select2-selection__rendered" id="select2-Secretary-container" role="textbox" aria-readonly="true" title="Chọn thư ký">Chọn thư ký</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>
              <div class="form-group" style="margin-bottom: 0px;">
                <label for="Secretary" class="Lable">Ngày hết hạn chấm</label>
                <input class="form-control input" type="date" id="date-selector" name="date-selector" value="2022-03-18">
              </div>
              <div style="float: right;margin: 24px 0;">

                <a href="#" class="btn btn-secondary" onclick="backstep(2)">Quay lại</a>
                <a href="#" class="btn btn-success" onclick="nextStep(2)">Tiếp theo</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal" id="step3" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="margin-top: 9%;max-height: 723px;  background-color: #ffffff;">
            <div class="modal-body" style="padding: 0 24px;">
              <label style="margin-top: 24px;" class="title">Tạo mới hội đồng chấm</label>
              <p class="Note-Copy">Bước 3: Danh sách thành viên</p>
              <div class="form-group">
                <!-- <label for="nameGroup" class="Lable" id="Namegroup">Tên hội đồng</label> -->
                <a href="#" onclick="seach()"><img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/original.png" srcset="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/original2x.png 2x, OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/original3x.png 3x" class="Original"></a>
                <input style="padding-left: 43px;" type="text" class="form-control input" id="seach" placeholder="Nhập email/số điện thoại">
              </div>
              <div class="row " style=" max-height: 453px;    overflow: auto;" id="listmember">
<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Nguyễn Minh Tiến</span><br>
    <span class="titleNamechirden">tiennm@gmail.com - </span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f43aec7e4c58d3a087d456b" value="5f43aec7e4c58d3a087d456b*Nguyễn Minh Tiến" name="checkbox">
    <label for="checkbox-5f43aec7e4c58d3a087d456b"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Vi Thanh Hoài</span><br>
    <span class="titleNamechirden">hoaivt@sohoaocop.com - </span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f43b652af3d453ff69c9b71" value="5f43b652af3d453ff69c9b71*Vi Thanh Hoài" name="checkbox">
    <label for="checkbox-5f43b652af3d453ff69c9b71"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Bùi Trường Minh</span><br>
    <span class="titleNamechirden">minhbt@sohoaocop.com - </span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f43b702af3d453ff69c9b72" value="5f43b702af3d453ff69c9b72*Bùi Trường Minh" name="checkbox">
    <label for="checkbox-5f43b702af3d453ff69c9b72"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Đồng Quốc Thiều</span><br>
    <span class="titleNamechirden">thieudq@sohoaocop.com - </span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f43b7bfcfe2e74154870f0e" value="5f43b7bfcfe2e74154870f0e*Đồng Quốc Thiều" name="checkbox">
    <label for="checkbox-5f43b7bfcfe2e74154870f0e"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Đào Đức Huấn</span><br>
    <span class="titleNamechirden">huandd@sohoaocop.com - </span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f43b88bcfe2e74154870f13" value="5f43b88bcfe2e74154870f13*Đào Đức Huấn" name="checkbox">
    <label for="checkbox-5f43b88bcfe2e74154870f13"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Trần Văn Môn</span><br>
    <span class="titleNamechirden">montv@sohoaocop.com - </span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f43b996cfe2e74154870f18" value="5f43b996cfe2e74154870f18*Trần Văn Môn" name="checkbox">
    <label for="checkbox-5f43b996cfe2e74154870f18"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Nguyễn Hoàng Linh</span><br>
    <span class="titleNamechirden">linhnh@sohoaocop.com - </span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f43b9ebcfe2e74154870f1a" value="5f43b9ebcfe2e74154870f1a*Nguyễn Hoàng Linh" name="checkbox">
    <label for="checkbox-5f43b9ebcfe2e74154870f1a"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Tô Thúy Nga</span><br>
    <span class="titleNamechirden">ngatt@sohoaocop.com - </span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f43be146c9bec3d04799e0c" value="5f43be146c9bec3d04799e0c*Tô Thúy Nga" name="checkbox">
    <label for="checkbox-5f43be146c9bec3d04799e0c"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Nguyễn Hùng Long</span><br>
    <span class="titleNamechirden">longnh@sohoaocop.com - </span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f43be259fac087e1f40647a" value="5f43be259fac087e1f40647a*Nguyễn Hùng Long" name="checkbox">
    <label for="checkbox-5f43be259fac087e1f40647a"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Trần Nhật Lam</span><br>
    <span class="titleNamechirden">lamtn@sohoaocop.com - </span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f43befa9fac087e1f40647b" value="5f43befa9fac087e1f40647b*Trần Nhật Lam" name="checkbox">
    <label for="checkbox-5f43befa9fac087e1f40647b"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Nguyễn Văn Ba</span><br>
    <span class="titleNamechirden">Ba.amcvietnam@gmail.com - 0949999196</span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f4767c2bfa9f76b1f84469a" value="5f4767c2bfa9f76b1f84469a*Nguyễn Văn Ba" name="checkbox">
    <label for="checkbox-5f4767c2bfa9f76b1f84469a"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Nguyễn Minh Tiến</span><br>
    <span class="titleNamechirden">tiennm.hdcn@sohoaocop.com - </span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f91267a0b1ea15dcc365b9d" value="5f91267a0b1ea15dcc365b9d*Nguyễn Minh Tiến" name="checkbox">
    <label for="checkbox-5f91267a0b1ea15dcc365b9d"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Trần Thanh Nam</span><br>
    <span class="titleNamechirden">namtt.hdcn@sohoaocop.com - </span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f912f660b1ea15dcc36689a" value="5f912f660b1ea15dcc36689a*Trần Thanh Nam" name="checkbox">
    <label for="checkbox-5f912f660b1ea15dcc36689a"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Phan Ngân Sơn</span><br>
    <span class="titleNamechirden">sonpn.hdcn@sohoaocop.com - </span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f912fe20b1ea15dcc36689e" value="5f912fe20b1ea15dcc36689e*Phan Ngân Sơn" name="checkbox">
    <label for="checkbox-5f912fe20b1ea15dcc36689e"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Phạm Văn Duy</span><br>
    <span class="titleNamechirden">duypv.hdcn@sohoaocop.com - </span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f91303d0b1ea15dcc3668a2" value="5f91303d0b1ea15dcc3668a2*Phạm Văn Duy" name="checkbox">
    <label for="checkbox-5f91303d0b1ea15dcc3668a2"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Lê Văn Đức</span><br>
    <span class="titleNamechirden">duclv.hdcn@sohoaocop.com - </span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f9130a20b1ea15dcc3668a8" value="5f9130a20b1ea15dcc3668a8*Lê Văn Đức" name="checkbox">
    <label for="checkbox-5f9130a20b1ea15dcc3668a8"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Nguyễn Văn An</span><br>
    <span class="titleNamechirden">anhlb.hdcn@sohoaocop.com - </span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f9130e90b1ea15dcc3668a9" value="5f9130e90b1ea15dcc3668a9*Nguyễn Văn An" name="checkbox">
    <label for="checkbox-5f9130e90b1ea15dcc3668a9"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Nguyễn Hoàng Yến</span><br>
    <span class="titleNamechirden">yennh.hdcn@sohoaocop.com - </span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-5f9131ca0b1ea15dcc3668b8" value="5f9131ca0b1ea15dcc3668b8*Nguyễn Hoàng Yến" name="checkbox">
    <label for="checkbox-5f9131ca0b1ea15dcc3668b8"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Liên Test</span><br>
    <span class="titleNamechirden">qltw11@gmail.com - 0813529568</span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-611b84d7401e8f18e7522a21" value="611b84d7401e8f18e7522a21*Liên Test" name="checkbox">
    <label for="checkbox-611b84d7401e8f18e7522a21"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">KYC Test chấm TW</span><br>
    <span class="titleNamechirden">testchamtw@kyc.net.vn - 0762450806</span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-61286daf74341401b7cbb626" value="61286daf74341401b7cbb626*KYC Test chấm TW" name="checkbox">
    <label for="checkbox-61286daf74341401b7cbb626"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">BT</span><br>
    <span class="titleNamechirden">huyxoanpro1@gmail.com - 0848499006</span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-6128780674341401b7cbb634" value="6128780674341401b7cbb634*BT" name="checkbox">
    <label for="checkbox-6128780674341401b7cbb634"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">KYC Test chấm 2</span><br>
    <span class="titleNamechirden">testchamtw2@kyc.net.vn - 0762450989</span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-614d7c790c6d6b30dcd4b46d" value="614d7c790c6d6b30dcd4b46d*KYC Test chấm 2" name="checkbox">
    <label for="checkbox-614d7c790c6d6b30dcd4b46d"></label>
</div>
    </div>
</div>

<div class="col-md-12 row rowContent">
    <div class="col-2" style="padding-right: 0;">
    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/noavatar.png" class="imgava">
    </div>
    <div class="col-9" style="padding: 0;overflow: auto; ">
    <span class="titleName">Đỗ Đức Thông</span><br>
    <span class="titleNamechirden">ddthong78@yahoo.com.vn - 0913116465</span>
    </div>
    <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
    <div class="rounds">
    <input type="checkbox" class="change-selector2" id="checkbox-6178fb14673abd092c4073a0" value="6178fb14673abd092c4073a0*Đỗ Đức Thông" name="checkbox">
    <label for="checkbox-6178fb14673abd092c4073a0"></label>
</div>
    </div>
</div>
</div>
              <div style="float: right;margin: 24px 0;">
                <a href="#" class="btn btn-secondary" onclick="backstep(3)">Quay lại</a>
                <a href="#" class="btn btn-success" onclick="savegroup()">Hoàn thành</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal" id="step5" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="margin-top: 9%;max-height: 723px;  background-color: #ffffff;">
            <div class="modal-body" style="padding: 0 24px;">
              <label style="margin-top: 24px;" class="title">Cán bộ chấm</label>
              <p class="Note-Copy">Bước 3: Danh sách thành viên trong hội đồng chấm</p>
              <div class="form-group">
                <!-- <label for="nameGroup" class="Lable" id="Namegroup">Tên hội đồng</label> -->
                <a href="#" onclick="seach()"><img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/original.png" srcset="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/original2x.png 2x, OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/original3x.png 3x" class="Original"></a>
                <input style="padding-left: 43px;" type="text" class="form-control input" id="seach" placeholder="Nhập email/số điện thoại">
              </div>
              <div class="row " style=" max-height: 453px;    overflow: auto;" id="listmemberEx">


              </div>
              <div style="float: right;margin: 24px 0;">
                <a href="#" class="btn btn-secondary" onclick="backstep(5)">Quay lại</a>
                <a href="#" class="btn btn-success" onclick="savegroup()">Hoàn thành</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal" id="step1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="margin-top: 9%;max-height: 723px;  background-color: #ffffff;">
            <div class="modal-body" style="padding: 0 24px;">
              <label style="margin-top: 24px;" class="title">Tạo mới hội đồng chấm</label>
              <p class="Note-Copy">Bước 1: Chọn hồ sơ</p>
              <div class="form-group">
                <!-- <label for="nameGroup" class="Lable" id="Namegroup">Tên hội đồng</label> -->
                <a href="#" onclick="seachproduct()"> <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/original.png" srcset="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/original2x.png 2x, OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/original3x.png 3x" class="Original"></a>
                <input style="padding-left: 43px;" type="text" class="form-control input" id="nameProductinfo" placeholder="Nhập tên hồ sơ">
              </div>
              <div class="row" style="margin-top: 25px;margin-bottom: 25px;margin-right: 0;">
                <div class="col-11">
                  <span class="Tt-c-h-s">Tất cả hồ sơ</span>
                </div>
                <div class="col-1">
                  <div class="rounds">
                    <input type="checkbox" id="checkbox-all" name="checkbox">
                    <label for="checkbox-all" style="margin-left: -100%;"></label>
                  </div>
                </div>
              </div>
              <div class="row " style="max-height: 407px;;    overflow: auto;" id="listproductinfno">

              </div>
              <div style="float: right;margin: 24px 0;">
                <a href="#" class="btn btn-secondary" onclick="backstep(1)">Hủy</a>
                <a href="#" class="btn btn-success" onclick="check()">Hội đồng</a>
                <a href="#" class="btn btn-success" onclick="nextStep(1)">Tạo mới hội đồng</a>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="modal" id="step1ChangeDateUpStatus" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="margin-top: 9%;  background-color: #ffffff;">
            <div class="modal-body" style="padding: 24px;">
              <p class="Note-Copy" style="margin: 0;">Bước 1: </p>
              <p class="Note-Copy">Chọn yêu cầu minh chứng cần bổ sung</p>
              <div class="row">
                <div style="padding: 15px;display: flex;">
                  <div>
                    <a class="SubHeadingvn" style="margin: 0;">Chọn tất cả: </a>
                  </div>
                  <div>
                    <div class="rounds" style=" margin-left: 10px;margin-top: -5px;">
                      <input type="checkbox" class="checkalldataNewProof" value="checkdata" id="checkbox-all" name="checkbox-group">
                      <label for="checkbox-all" name="checkbox-group"></label>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div style="background-color: white;;
              display: flex;
              padding: 17px;padding-left: 0px;">
                    <div class="Rectanglevn">
                    </div>
                    <span class="SubHeadingvn">
                      Yêu cầu bắt buộc
                    </span>
                  </div>
                </div>
                <div class="col-12 row" id="Obligatorys" style=" padding: 17px;margin: 0;">

                </div>

                <div class="col-12">
                  <div style="background-color: white;;
              display: flex;
              padding: 17px;padding-left: 0px;">
                    <div class="Rectanglevn">
                    </div>
                    <span class="SubHeadingvn">
                      Tài liệu minh chứng bổ sung
                    </span>
                  </div>
                </div>
                <div class="col-12 row" id="Additionally" style=" padding: 17px;margin: 0;">

                </div>

              </div>
              <div style="float: right;margin: 24px 0;">
                <a href="#" class="btn btn-success" onclick="nextStepChangeDateUp(1)">Tiếp tục</a>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="modal" id="step2ChangeDateUpStatus" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="margin-top: 9%;  background-color: #ffffff;">
            <div class="modal-body" style="padding: 24px;">
              <p class="Note-Copy" style="margin: 0;">Bước 2: </p>
              <p class="Note-Copy">Chọn thời gian cho phép</p>
              <div class="row" style="margin: 0px;">
                <div class="col-12">
                  <div style="background-color: white;;
              display: flex;
              padding: 17px;padding-left: 0px;">
                    <div class="Rectanglevn">
                    </div>
                    <span class="SubHeadingvn">
                      Ngày hết hạn bổ sung minh chứng
                    </span>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="date" class="form-control backgroup" id="dateEndUpProof" name="dateEndUpProof" value="2022-03-18">
                  </div>
                </div>
              </div>
              <div style="float: right;margin: 24px 0;">
                <a href="#" class="btn btn-secondary" onclick="backstepChangeDateUp(1)">Quay lại</a>
                <button href="#" class="btn btn-success" id="btnSaveDate" onclick="saveDateEnd()">Hoàn
                  thành</button>
                <button href="#" class="btn btn-success" id="btnupdate" style="display: none;" onclick="updateDateEnd()">Chỉnh sửa</button>
              </div>
            </div>

          </div>
        </div>
      </div>
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
              <div class="col-md-4 m-b-20 p-o">
                <label class="textH">Tìm kiếm sản phẩm</label>
                <div class="input-group">
                  <input type="search" class="form-control" id="keyword" placeholder="Nhập tên/mã sản phẩm" style="background-color: #edf1f5;;">
                </div>
              </div>
              <div class="col-md-4 m-b-20 p-o">
                <label class="textH">Tìm kiếm chủ thể</label>
                <div class="input-group">
                  <input type="search" class="form-control" id="keywordEnt" placeholder="Nhập tên chủ thể" style="background-color: #edf1f5;;">
                </div>
              </div>
              <!-- <div class="col-md-4 mb-2">
          <label class="textH">Kết quả xếp hạng</label>
          <select class="form-control" style="width: 100%;" id="ranking-select">
              <option value="0">Chọn xếp hạng</option>
              <option value="1">Đạt 1 sao</option>
              <option value="2">Đạt 2 sao</option>
              <option value="3">Đạt 3 sao</option>
              <option value="4">Đạt 4 sao</option>
              <option value="5">Đạt 5 sao</option>
          </select>                          
        </div> -->
              <div class="col-md-4 m-b-20">
                <label class="textH">Trạng thái hồ sơ</label>
                <select class="form-control select2-hidden-accessible" multiple="multiple" style="width: 100%" name="cboPos" id="Status" data-select2-id="Status" tabindex="-1" aria-hidden="true">
                <option value="districtRanked">Cấp huyện đã xếp hạng</option>
                <option value="provinceRanked">Cấp tỉnh đã xếp hạng</option>
                <option value="Ranked">Đã xếp hạng</option>
                <option value="Submiting">Đang nộp</option>
                <option value="Done">Hoàn thành</option>

                <option value="Fail">Không đạt</option>
                <option value="Preparing">Chưa nộp</option>
                <option value="Waitting">Chờ chấm</option>
            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="6" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>
              <div class="col-md-12 row m-b-20">
                <div class="col-md-4 m-b-20" id="stProvical">
                  <label for="txtlevel" class="textH">Tỉnh/TP</label>
                  <select class="multi-select select2-hidden-accessible" multiple="multiple" style="width: 100%" name="cboPos" id="cboProvincial" data-select2-id="cboProvincial" tabindex="-1" aria-hidden="true">
                  <option value="0">Tất cả</option><option value="89">An Giang</option><option value="24">Bắc Giang</option><option value="06">Bắc Kạn</option><option value="95">Bạc Liêu</option><option value="27">Bắc Ninh</option><option value="77">Bà Rịa - Vũng Tàu</option><option value="83">Bến Tre</option><option value="52">Bình Định</option><option value="74">Bình Dương</option><option value="70">Bình Phước</option><option value="60">Bình Thuận</option><option value="96">Cà Mau</option><option value="92">Cần Thơ</option><option value="04">Cao Bằng</option><option value="66">Đắk Lắk</option><option value="67">Đắk Nông</option><option value="48">Đà Nẵng</option><option value="11">Điện Biên</option><option value="75">Đồng Nai</option><option value="87">Đồng Tháp</option><option value="64">Gia Lai</option><option value="02">Hà Giang</option><option value="30">Hải Dương</option><option value="31">Hải Phòng</option><option value="35">Hà Nam</option><option value="01">Hà Nội</option><option value="42">Hà Tĩnh</option><option value="93">Hậu Giang</option><option value="17">Hòa Bình</option><option value="79">Hồ Chí Minh</option><option value="33">Hưng Yên</option><option value="56">Khánh Hòa</option><option value="91">Kiên Giang</option><option value="62">Kon Tum</option><option value="12">Lai Châu</option><option value="68">Lâm Đồng</option><option value="20">Lạng Sơn</option><option value="10">Lào Cai</option><option value="80">Long An</option><option value="36">Nam Định</option><option value="40">Nghệ An</option><option value="37">Ninh Bình</option><option value="58">Ninh Thuận</option><option value="25">Phú Thọ</option><option value="54">Phú Yên</option><option value="44">Quảng Bình</option><option value="49">Quảng Nam</option><option value="51">Quảng Ngãi</option><option value="22">Quảng Ninh</option><option value="45">Quảng Trị</option><option value="94">Sóc Trăng</option><option value="14">Sơn La</option><option value="72">Tây Ninh</option><option value="34">Thái Bình</option><option value="19">Thái Nguyên</option><option value="38">Thanh Hóa</option><option value="46">Thừa Thiên Huế</option><option value="82">Tiền Giang</option><option value="84">Trà Vinh</option><option value="08">Tuyên Quang</option><option value="86">Vĩnh Long</option><option value="26">Vĩnh Phúc</option><option value="15">Yên Bái</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                  <code id="nof-load-pro" style="display: none;">Đang tải ...</code>
                </div>
                <div class="col-md-4 m-b-20" id="stDistricts">
                  <label for="txtlevel" class="textH">Quận/Huyện</label>
                  <select class="multi-select select2-hidden-accessible" multiple="multiple" style="width: 100%" name="cboPos" id="cboDistricts" data-select2-id="cboDistricts" tabindex="-1" aria-hidden="true">

                  </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="4" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                  <code id="nof-load-district" style="display: none;">Đang tải ...</code>
                </div>
                <div class="col-md-4 m-b-20" id="stCbwards">
                  <label for="txtname" class="textH">Xã/Phường</label>
                  <select class="multi-select select2-hidden-accessible" multiple="multiple" style="width: 100%" name="cboPos" id="cboWards" data-select2-id="cboWards" tabindex="-1" aria-hidden="true">

                  </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                <a href="#" class="btn btn-success" onclick="getListProductByAllowProof()">LỌC HỒ SƠ</a>
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
                HỒ SƠ CẬP NHẬT MINH CHỨNG
              </span>

            </div>
            <!-- <div class="col-sm-12 text-right">Tổng số : <span id="total"></span></div> -->
            <div class="card-body row" id="productUpNewProof" style="padding: 8px;background-color: #edf1f5;">
    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/th300%2520-%2520bao%2520gia.png" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Bánh đậu xanh Rồng Vàng Hoàng Gia</p>
                    <p> <span class="label m-r-10 Hon-thnh " style="border-radius: 10px; color: black; background-color: #cff0e1"><b>CHỜ CHẤM</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  30-288-10507-1-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Công ty cổ phần Hoàng Giang</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/th300 - bao gia.png','Bánh đậu xanh Rồng Vàng Hoàng Gia','30-288-10507-1-2021','Công ty cổ phần Hoàng Giang','611b601f401e8f18e75229d2')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/Hnh%2520nh%2520khn%2520la%2520t%2520sen.png" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Khăn lụa tơ sen</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>HUYỆN ĐÃ XẾP HẠNG</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  01-282-10474-3-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Công ty TNHH Dầu tằm tơ Mỹ Đức</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/Hình ảnh khăn lụa tơ sen.png','Khăn lụa tơ sen','01-282-10474-3-2021','Công ty TNHH Dầu tằm tơ Mỹ Đức','61483d8d39b6b04cc66d13c5')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/k5-dich-chiet-sam-ngoc-linh-01-1-768x922.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Thực phẩm bảo vệ sức khỏe Dịch chiết sâm K5</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>TỈNH ĐÃ XẾP HẠNG</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  62-608-23299-2-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Công ty cổ phần Vingin</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/k5-dich-chiet-sam-ngoc-linh-01-1-768x922.jpg','Thực phẩm bảo vệ sức khỏe Dịch chiết sâm K5','62-608-23299-2-2021','Công ty cổ phần Vingin','61777192673abd092c4062cd')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/GI.png" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">GIÒ LỤA NGHỊ ĐƯỢC</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>TỈNH ĐÃ XẾP HẠNG</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  01-017-00454-1-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Cơ sở sản xuất thực phẩm Nghị Được</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/GIÒ.png','GIÒ LỤA NGHỊ ĐƯỢC','01-017-00454-1-2021','Cơ sở sản xuất thực phẩm Nghị Được','6178e769673abd092c4062f9')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/TVT_7745.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Thực phẩm bảo vệ sức khỏe Vicumax Mật ong Nano curcumin</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN THÀNH</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  </span><br>
                    <span class="subtitile">Tên chủ thể: Công ty cổ phần Cucurmin Bắc Hà Bắc Kạn</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/TVT_7745.jpg','Thực phẩm bảo vệ sức khỏe Vicumax Mật ong Nano curcumin','null','Công ty cổ phần Cucurmin Bắc Hà Bắc Kạn','61646556d7301b0db194750d')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/NCD%2520-%252022%25201.png" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Nước cốt dừa đậm đặc Delta Coco</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>TỈNH ĐÃ XẾP HẠNG</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  83-838-28906-2-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Công Ty Cổ Phần Đầu Tư Dừa Bến Tre</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/NCD - 22 (1).png','Nước cốt dừa đậm đặc Delta Coco','83-838-28906-2-2021','Công Ty Cổ Phần Đầu Tư Dừa Bến Tre','6180e175673abd092c40b7e5')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/chn%2520bng%2520t%2520tm%2520t%2520dt.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Chăn bông tơ tằm tự dệt</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>HUYỆN ĐÃ XẾP HẠNG</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  01-282-10474-1-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Công ty TNHH Dầu tằm tơ Mỹ Đức</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/chăn bông tơ tằm tự dệt.jpg','Chăn bông tơ tằm tự dệt','01-282-10474-1-2021','Công ty TNHH Dầu tằm tơ Mỹ Đức','613f27a34c09731a3b7fe9c9')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/L%2520vin%2520ngh%2520mt%2520ong%2520150g.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Viên tinh nghệ mật ong</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN THÀNH</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  </span><br>
                    <span class="subtitile">Tên chủ thể: Công ty cổ phần nông sản Bắc Kạn</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/Lọ viên nghệ mật ong 150g.jpg','Viên tinh nghệ mật ong','null','Công ty cổ phần nông sản Bắc Kạn','617bbe4756185b61e098a74a')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/CREAMER.png" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Creamer dừa béo đặc Delta Coco</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>TỈNH ĐÃ XẾP HẠNG</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  83-838-28906-3-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Công Ty Cổ Phần Đầu Tư Dừa Bến Tre</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/CREAMER.1.png','Creamer dừa béo đặc Delta Coco','83-838-28906-3-2021','Công Ty Cổ Phần Đầu Tư Dừa Bến Tre','6180e18f673abd092c40b7e7')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/2_003.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Bánh hoa dừa Tiến Đạt</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>TỈNH ĐÃ XẾP HẠNG</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  83-829-28757-1-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Công ty TNHH Vĩnh Tiến</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/2.3.Hình ảnh mẫu bao bì đính kèm.jpg','Bánh hoa dừa Tiến Đạt','83-829-28757-1-2021','Công ty TNHH Vĩnh Tiến','618e1126673abd092c40bb09')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/z2765879910813_1e6569bcb3fa55fef4038baccaea3dbf.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Khăn lụa tơ tằm</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>HUYỆN ĐÃ XẾP HẠNG</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  01-282-10474-2-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Công ty TNHH Dầu tằm tơ Mỹ Đức</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/z2765879910813_1e6569bcb3fa55fef4038baccaea3dbf.jpg','Khăn lụa tơ tằm','01-282-10474-2-2021','Công ty TNHH Dầu tằm tơ Mỹ Đức','6142b73d4c09731a3b7fec79')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/TVT_7745.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Vicumax Mật ong Nano curcumin</p>
                    <p> <span class="label m-r-10" style="border-radius: 10px; background-color: #fdefce;color:black"><b>ĐANG NỘP</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  06-058-01852-1-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Công ty cổ phần curcumin Bắc Hà Bắc Kạn</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/TVT_7745.jpg','Vicumax Mật ong Nano curcumin','06-058-01852-1-2021','Công ty cổ phần curcumin Bắc Hà Bắc Kạn','6148373139b6b04cc66d1383')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/154.png" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Trà sâm lạc tiên DATO</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>HUYỆN ĐÃ XẾP HẠNG</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  62-612-23401-1-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Công ty TNHH Thảo Dược Tây Nguyên</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/(1)54.png','Trà sâm lạc tiên DATO','62-612-23401-1-2021','Công ty TNHH Thảo Dược Tây Nguyên','6136d32b6d4c283fc6591d97')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/2_002.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Trái sầu riêng tươi</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>TỈNH ĐÃ XẾP HẠNG</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  83-832-28882-1-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Công ty TNHH XNK Trái Cây Chánh Thu</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/2.3. bao bì.jpg','Trái sầu riêng tươi','83-832-28882-1-2021','Công ty TNHH XNK Trái Cây Chánh Thu','618e12b2673abd092c40bb12')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/hinh%2520keo%2520dua%2520sr.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Kẹo dừa sầu riêng</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>TỈNH ĐÃ XẾP HẠNG</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  83-829-28780-1-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Công ty TNHH sản xuất kinh doanh tổng hợp Đông Á</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/hinh keo dua sr.jpg','Kẹo dừa sầu riêng','83-829-28780-1-2021','Công ty TNHH sản xuất kinh doanh tổng hợp Đông Á','61922764b4cf61135be2baf6')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/logo.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Tinh Nghệ Bắc Kạn</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN THÀNH</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  </span><br>
                    <span class="subtitile">Tên chủ thể: Công ty cổ phần nông sản Bắc Kạn</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/logo.jpg','Tinh Nghệ Bắc Kạn','null','Công ty cổ phần nông sản Bắc Kạn','6179251e56185b61e098a698')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/hinh%2520mat%2520na%2520dua.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Mặt nạ dừa</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>TỈNH ĐÃ XẾP HẠNG</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  83-829-28759-1-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Công ty TNHH chế biến dừa Cửu Long</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/hinh mat na dua.jpg','Mặt nạ dừa','83-829-28759-1-2021','Công ty TNHH chế biến dừa Cửu Long','61936b8bb4cf61135be2ce10')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/2.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Kẹo sữa dừa nguyên chất Yến Hoàng</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>TỈNH ĐÃ XẾP HẠNG</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  83-829-28757-2-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Công ty TNHH Vĩnh Tiến</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/2.3.1. Mẫu Thiết kế bao bì kèm theo.jpg','Kẹo sữa dừa nguyên chất Yến Hoàng','83-829-28757-2-2021','Công ty TNHH Vĩnh Tiến','618e1191673abd092c40bb0e')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/z3041517769885_5b67f838617b921bf88145127e630bdf.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Macca Lâm Hà</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN THÀNH</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  68-676-24913-2-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Công ty TNHH TM &amp; DV Sao Vàng Macca</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/z3041517769885_5b67f838617b921bf88145127e630bdf.jpg','Macca Lâm Hà','68-676-24913-2-2021','Công ty TNHH TM &amp; DV Sao Vàng Macca','61c1a75597ad5e4990650ce5')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/MC%2520S%25201.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Tinh dầu lau sàn Mộc S</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN THÀNH</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  80-798-27814-1-2021</span><br>
                    <span class="subtitile">Tên chủ thể: CHI NHÁNH CÔNG TY TNHH DPDL MỘC HOA TRÀM</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/MỘC S 1.jpg','Tinh dầu lau sàn Mộc S','80-798-27814-1-2021','CHI NHÁNH CÔNG TY TNHH DPDL MỘC HOA TRÀM','61a5866a97ad5e4990650285')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/TVT_8296.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Thực phẩm bảo vệ sức khỏe Vicumax Nano Curcumin</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN THÀNH</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  </span><br>
                    <span class="subtitile">Tên chủ thể: Công ty cổ phần Cucurmin Bắc Hà Bắc Kạn</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/TVT_8296.jpg','Thực phẩm bảo vệ sức khỏe Vicumax Nano Curcumin','null','Công ty cổ phần Cucurmin Bắc Hà Bắc Kạn','6154b34903518109dd888a16')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/TVT_7864.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Thực phẩm bảo vệ sức khỏe Vicumax Limited Nano Curcumin</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN THÀNH</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  </span><br>
                    <span class="subtitile">Tên chủ thể: Công ty cổ phần Cucurmin Bắc Hà Bắc Kạn</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/TVT_7864.jpg','Thực phẩm bảo vệ sức khỏe Vicumax Limited Nano Curcumin','null','Công ty cổ phần Cucurmin Bắc Hà Bắc Kạn','6154ade403518109dd8889f3')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/NCD-18%25201.png" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Nước cốt dừa Delta Coco</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>TỈNH ĐÃ XẾP HẠNG</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  83-838-28906-1-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Công Ty Cổ Phần Đầu Tư Dừa Bến Tre</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/NCD-18 (1).png','Nước cốt dừa Delta Coco','83-838-28906-1-2021','Công Ty Cổ Phần Đầu Tư Dừa Bến Tre','6180e154673abd092c40b7e0')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/removal.png" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Macca Sấy Viet’s Nuts Lâm Hà</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN THÀNH</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  68-676-24916-1-2021</span><br>
                    <span class="subtitile">Tên chủ thể: CÔNG TY TNHH NÔNG SẢN HUY HIẾU</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/[removal.ai]_tmp-61c14ef0b780d (1).png','Macca Sấy Viet’s Nuts Lâm Hà','68-676-24916-1-2021','CÔNG TY TNHH NÔNG SẢN HUY HIẾU','61c1502097ad5e4990650c95')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/HINH%2520ANH%2520KEO%2520DUA%2520NGUYEN%2520CHAT.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Kẹo dừa nguyên chất</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>TỈNH ĐÃ XẾP HẠNG</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  83-829-28780-2-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Công ty TNHH sản xuất kinh doanh tổng hợp Đông Á</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/HINH ANH KEO DUA NGUYEN CHAT.jpg','Kẹo dừa nguyên chất','83-829-28780-2-2021','Công ty TNHH sản xuất kinh doanh tổng hợp Đông Á','619362f2b4cf61135be2cdfe')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>

    <div class="col-sm-4" style="padding:10px">
        <div class=" bg-white" style="border-radius: 9px; padding: 23px 18px;height: 100%;">
            <div class="row">
                    <a class="col-2" style="color:black" href="#">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20minh%20chu%CC%9B%CC%81ng_files/1da9cfa86041961fcf50.jpg" class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px" alt="ảnh">
                    </a>
                    <div class="col-10" style="margin-top: -4px;">
                    <a style="color:black" href="#">
                    <div class="nametitle" style="display:flex; justify-content: space-between">
                    <p style="margin-right:2px">Hộp vuông đan mây</p>
                    <p> <span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN THÀNH</b></span></p>
                    </div>
                    <span class="subtitile">Mã sản phẩm:  01-277-10033-1-2021</span><br>
                    <span class="subtitile">Tên chủ thể: Nguyễn Văn Trung</span>
                    </a>
                </div>
            </div>
            <div>
                <button class="btn btn-success btn-sm m-3" style="float:right" data-toggle="modal" data-target="#newProof" onclick="updateProduct('https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1da9cfa86041961fcf50.jpg','Hộp vuông đan mây','01-277-10033-1-2021','Nguyễn Văn Trung','6142a79a4c09731a3b7fec6e')">Minh chứng đã cập nhật</button>
            </div>


        </div>
    </div>
</div>
          </div>

        </div>
      </div>
      <div class="modal" id="newProof" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="margin-top: 9%;  background-color: #ffffff;">
            <div class="modal-body" style="padding: 24px;">
              <p style=" text-align: center;font-size: 16px;">Minh chứng đã cập nhật</p>
              <div class="row">
                <div class="mt-3 col-12" id="headerProduct">

                </div>
                <div class="mt-3 col-12" id="note-allowProof">

                </div>
                <div class="col-12 mt-3 row" style="margin: 0;padding: 0;">
                  <div class="col-6" style="    padding: 15px;">
                    <div class="row user-row dropdown-user SubHeadingvn" style="margin-left: 1px;">
                      <div class="">
                        <a>Xem ghi chú</a>
                      </div>
                      <div class="col-1 icon_dropdown " data-for=".cyruxx">
                          <i class="fa fa-chevron-down text-muted"></i>
                      </div>
                    </div>
                  
                  </div>
                 <div class="col-6" style="padding: 15px;display: flex;justify-content: flex-end;right: 20px;" id="choseAll"></div>
                </div>
                <div style="padding: 15px;">
                  <div class="row user-infos cyruxx" style="display: none;">
                    <div class="col-12">
                      <div style="background-color: white;;
                        display: flex;
                        padding: 17px;padding-left: 0px;">
                        <div class="Rectanglevn">
                        </div>
                        <span class="SubHeadingvn">
                          Yêu cầu bắt buộc
                        </span>
                      </div>
                    </div>
                    <div class="col-12 row" id="ObligatorysViewProof" style=" padding: 17px;margin: 0;">
    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Phiếu đăng ký</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea54b')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea54b" id="checkbox-5e4f946cffb6912ea06ea54b" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea54b" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea54b" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea54b" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>

    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Phương án, kế hoạch kinh doanh sản phẩm</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea54c')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea54c" id="checkbox-5e4f946cffb6912ea06ea54c" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea54c" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea54c" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea54c" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>

    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Giới thiệu bộ máy tổ chức</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea54d')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea54d" id="checkbox-5e4f946cffb6912ea06ea54d" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea54d" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea54d" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea54d" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>

    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Giấy đăng ký kinh doanh</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea54e')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea54e" id="checkbox-5e4f946cffb6912ea06ea54e" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea54e" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea54e" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea54e" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>

    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Sản phẩm mẫu</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea54f')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea54f" id="checkbox-5e4f946cffb6912ea06ea54f" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea54f" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea54f" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea54f" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>
</div>
                    <div class="col-12">
                      <div style="background-color: white;;
                        display: flex;
                        padding: 17px;padding-left: 0px;">
                        <div class="Rectanglevn">
                        </div>
                        <span class="SubHeadingvn">
                          Tài liệu minh chứng bổ sung
                        </span>
                      </div>
                    </div>
                     <div class="col-12 row" id="AdditionallyViewProof" style=" padding: 17px;margin: 0;">
    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Giấy đủ điều kiện sản xuất, giấy an toàn vệ sinh thực phẩm ...</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea550')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea550" id="checkbox-5e4f946cffb6912ea06ea550" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea550" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea550" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea550" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>

    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Công bố chất lượng sản phẩm</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea551')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea551" id="checkbox-5e4f946cffb6912ea06ea551" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea551" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea551" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea551" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>

    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Tiêu chuẩn sản phẩm</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea552')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea552" id="checkbox-5e4f946cffb6912ea06ea552" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea552" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea552" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea552" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>

    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Phiếu kết quả kiểm tra chỉ tiêu an toàn thực phẩm theo tiêu chuẩn công bố</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea553')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea553" id="checkbox-5e4f946cffb6912ea06ea553" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea553" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea553" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea553" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>

    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Mã số mã vạch, tem truy xuất nguồn gốc, chứng nhận sở hữu trí tuệ, chỉ dẫn địa lý, nhãn hiệu sản phẩm...</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea554')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea554" id="checkbox-5e4f946cffb6912ea06ea554" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea554" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea554" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea554" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>

    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Nguồn gốc nguyên liệu, liên kết chuỗi</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea555')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea555" id="checkbox-5e4f946cffb6912ea06ea555" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea555" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea555" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea555" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>

    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Hệ thống quản lý chất lượng tiên tiến, kiểm soát chất lượng</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea557')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea557" id="checkbox-5e4f946cffb6912ea06ea557" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea557" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea557" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea557" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>

    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Bảo vệ môi trường</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea556')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea556" id="checkbox-5e4f946cffb6912ea06ea556" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea556" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea556" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea556" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>

    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Kế toán</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea558')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea558" id="checkbox-5e4f946cffb6912ea06ea558" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea558" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea558" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea558" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>

    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Phát triển thị trường, hoạt động quảng bá, xúc tiến thương mại</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea559')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea559" id="checkbox-5e4f946cffb6912ea06ea559" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea559" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea559" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea559" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>

    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Câu chuyện về sản phẩm</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea55a')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea55a" id="checkbox-5e4f946cffb6912ea06ea55a" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea55a" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea55a" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea55a" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>

    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Kế hoạch kiểm soát chất lượng, ghi hồ sơ lô sản xuất...</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea55b')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea55b" id="checkbox-5e4f946cffb6912ea06ea55b" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea55b" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea55b" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea55b" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>

    <div class="div_border">
        <div style="    width: 95%;">
            <a class="textProof" style="margin: 0;">Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế...</a>
        </div>
        <div>
        <div class="rounds">
            <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea55c')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea55c" id="checkbox-5e4f946cffb6912ea06ea55c" name="checkbox-group">
            <label for="checkbox-5e4f946cffb6912ea06ea55c" name="checkbox-group"></label>
        </div>
        </div>
    </div>
    <div id="5e4f946cffb6912ea06ea55c" style="width:100%;display:none">
        <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea55c" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
    </div>
 
<div style="float: right;margin: 24px 0;">
    <button href="#" class="btn btn-success" onclick="closeNote()">Đóng</button>
</div>
</div>
                </div>
                </div>
                <div class="col-12">
                  <div style="background-color: white;;
                    display: flex;
                    padding: 17px;padding-left: 0px;">
                    <div class="Rectanglevn">
                    </div>
                    <span class="SubHeadingvn">
                      Yêu cầu bắt buộc
                    </span>
                  </div>
                </div>
                <div class="col-12 row" id="ObligatoryNewProof" style="margin: 0;    padding: 0;">

                </div>

                <div class="col-12">
                  <div style="background-color: white;;
              display: flex;
              padding: 17px;padding-left: 0px;">
                    <div class="Rectanglevn">
                    </div>
                    <span class="SubHeadingvn">
                      Tài liệu minh chứng bổ sung
                    </span>
                  </div>
                </div>
                <div class="col-12 row" id="AdditionallyNewProof" style="margin: 0;    padding: 0;">

                </div>

              </div>
              <div style="float: right;margin: 24px 0;">
                <button href="#" class="btn btn-success" id="buttonApproval" onclick="approval()" disabled="disabled" style="display:none !important">Xét
                  duyệt</button>
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
    <div class="right-sidebar ps ps--theme_default" data-ps-id="cfe8a23c-0746-3bbb-d01c-97d4c650ed0c">
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
  </div>
</div>
@endsection()