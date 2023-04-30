@extends('master')
@section('content')
<style>
  #row1 {
    flex: 0 0 50%;
    max-width: 50%;
  }

  #col-11id {
    text-align: right;
  }

  @media only screen and (min-width: 768px) and (max-width: 1024px) {
    #avatar {
      text-align: center;
    }

    #textcontent {
      text-align: center;
    }

    #row1 {
      flex: 0 0 100%;
      max-width: 100%;
    }

    #col-11id {
      text-align: left;
    }
  }

  @media (min-width: 481px) and (max-width: 767px) {
    #avatar {
      text-align: center;
    }

    #textcontent {
      text-align: center;
    }

    #row1 {
      flex: 0 0 100%;
      max-width: 100%;
    }

    #col-11id {
      text-align: left;
    }

  }

  @media (min-width: 320px) and (max-width: 480px) {
    #avatar {
      text-align: center;
    }

    #textcontent {
      text-align: center;
    }

    #row1 {
      flex: 0 0 100%;
      max-width: 100%;
    }

    #col-11id {
      text-align: left;
    }
  }

  .dropdown-menu.show {
    left: -145px !important;
    top: 19px !important;
    position: absolute !important;
    /* transform: translate3d(-109px, -20px, 0px)!important; */
    will-change: transform !important;
  }

  .dropdown-toggle::after {
    display: none !important;
  }

  .dropdown-item-tool {
    display: block;
    width: 99%;
    height: 26px;
    padding: .45rem 1.5rem;
    clear: both;
    text-align: center;
    margin-top: -12px;
    background-color: transparent;
    border: 0;
  }
</style>
<link href="{{ asset('css/councils.css') }}" rel="stylesheet">
<div class="page-wrapper" style="background-color: rgb(247, 247, 247); min-height: 954px;">
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor"></h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <!-- <li class="breadcrumb-item"><a href="javascript:void(0)"> </a></li> -->
            <!-- <li class="breadcrumb-item active"></li> -->
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
    <div class="modal" id="updatemember" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top: 9%;max-height: 723px;  background-color: #ffffff;">
          <div class="modal-body" style="padding: 0 24px;">
            <label style="margin-top: 24px;" class="title">Cập nhật thành viên</label>
            <!-- <p class="Note-Copy">Bước 2: Danh sách thành viên</p> -->
            <div class="form-group">
              <!-- <label for="nameGroup" class="Lable" id="Namegroup">Tên hội đồng</label> -->
              <a href="#"><img src="images/original.png"
                  srcset="images/original2x.png 2x, images/original3x.png 3x" class="Original"></a>
              <input onchange="searchMemberHelpTeam()" style="padding-left: 43px;" type="text" class="form-control input" id="search_update"
                placeholder="Nhập email/số điện thoại">
            </div>
            <div class="row " style=" max-height: 453px;    overflow: auto;" id="listmemberhelpteam">

            </div>
            <div style="float: right;margin: 24px 0;">
              <a href="#" class="btn btn-secondary" data-dismiss="modal" onclick="">Hủy</a>
              <button href="#" class="btn btn-success" id="updateMemberToHelpTeam" onclick="updateMember()">Cập nhật</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal" id="step2" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top: 9%;max-height: 723px;  background-color: #ffffff;">
          <div class="modal-body" style="padding: 0 24px;">
            <label style="margin-top: 24px;" class="title">Thêm thành viên</label>
            <!-- <p class="Note-Copy">Bước 2: Danh sách thành viên</p> -->
            <div class="form-group">
              <!-- <label for="nameGroup" class="Lable" id="Namegroup">Tên hội đồng</label> -->
              <a href="#"><img src="images/original.png"
                  srcset="images/original2x.png 2x, images/original3x.png 3x" class="Original"></a>
              <input onchange="search()" style="padding-left: 43px;" type="text" class="form-control input" id="search"
                placeholder="Nhập email/số điện thoại">
            </div>
            <div class="row " style=" max-height: 453px;    overflow: auto;" id="listmember">

            </div>
            <div style="float: right;margin: 24px 0;">
              <a href="#" class="btn btn-secondary" data-dismiss="modal" onclick="">Hủy</a>
              <button href="#" class="btn btn-success" id="addMemberToCouncils" onclick="addMember()">Thêm</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal" id="step3" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top: 9%;max-height: 723px;  background-color: #ffffff;">
          <div class="modal-body" style="padding: 0 24px;">
            <label style="margin-top: 24px;" class="title">Thêm hồ sơ</label>
            <!-- <p class="Note-Copy">Bước 3: Chọn hồ sơ</p> -->
            <div class="form-group">
              <!-- <label for="nameGroup" class="Lable" id="Namegroup">Tên hội đồng</label> -->
              <a href="#"> <img src="images/original.png"
                  srcset="images/original2x.png 2x, images/original3x.png 3x" class="Original"></a>
              <input onchange="seachproduct()" style="padding-left: 43px;" type="text" class="form-control input"
                id="nameProductinfo" placeholder="Nhập tên hồ sơ">
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
              <a href="#" class="btn btn-secondary" onclick="" data-dismiss="modal">Quay lại</a>
              <button href="#" class="btn btn-success" id="addProductInGroup" onclick="updatefile()">Thêm</button>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="row" style="margin: 2px;">
      <div class="col-12" style="margin-bottom: 23px;">
        <label class="Qun-l-h-s " id="namecouncils"></label><br>
        <label class="-thnh-vin---5-b" id="numberquan"><span id="memberNumber">2 thành viên</span> - <span id="productNumber">1 bộ hồ sơ</span> </label>
        <a href="#" class="btn btn-sm btn-success" style="float: right;margin-right: 16px;" data-toggle="modal"
          data-target=".bd-example-modal-lg">Biên Bản</a>
      </div>

    </div>

    <div class="modal fade bd-example-modal-lg" id="modalreport" tabindex="-1" role="dialog"
      aria-labelledby="modalreportlable" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalreportlable">Tất cả biên bản</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row" style="padding: 16px;">
              <div class="col-md-4" style="margin-bottom: 16px;">
                <div class="card mb-4 shadow-sm">
                  <a href="#">
                    <img src="{{ asset('images/BBTTV.png') }}" class="img-thumbnail"
                      style="height: 121px;width: 100%; object-fit: cover;cursor: zoom-in" alt="...">
                  </a>
                  <div class="text" style="font-weight: 600;padding: 5px;">
                    Mẫu biên bản 01
                  </div>

                  <div style="padding:10px">
                    <a target="blank"
                      href="https://view.officeapps.live.com/op/view.aspx?src=https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1601967057111_209150Bi%C3%AAnb%E1%BA%A3nh%E1%BB%8Dph%E1%BB%99i%C4%91%E1%BB%93ng%C4%91%C3%A1nhgi%C3%A1s%E1%BA%A3nph%E1%BA%A9mhuy%E1%BB%87n%C4%90Ang%C3%A0y27_09_2020.docx"
                      class="btn btn-sm btn-outline-secondary" role="button" style="margin-right: 11px;">Xem trước</a>
                    <a href="##" class="btn btn-sm btn-outline-secondary deleteQuote" role="button"
                      style="float: right;width: 81px;color: white;background-color: #049252;border-color:#049252 ;"
                      onclick="printResultToDOc()">In</a>
                  </div>

                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <a href="#">
                    <img src="{{ asset('images/excelReport.PNG') }}" class="img-thumbnail"
                      style="height: 121px;width: 100%; object-fit: cover;cursor: zoom-in" alt="...">
                  </a>
                  <div class="text" style="font-weight: 600;padding: 5px;">
                    Mẫu biên bản 02
                  </div>

                  <div style="padding:10px">
                    <a target="blank"
                      href="https://view.officeapps.live.com/op/view.aspx?src=https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1601966809937_579188B%C3%A1oc%C3%A1ot%E1%BB%95ngh%E1%BB%A3p5b%E1%BB%99s%E1%BA%A3nph%E1%BA%A9m.xlsx"
                      class="btn btn-sm btn-outline-secondary" role="button" style="margin-right: 11px;">Xem trước</a>
                    <a id="idPrintExcel" href="##" class="btn btn-sm btn-outline-secondary deleteQuote" role="button"
                      style="float: right;width: 81px;color: white;background-color: #049252;border-color:#049252 ;">In</a>
                  </div>

                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <a href="#">
                    <img src="{{ asset('images/BienBan.PNG') }}" class="img-thumbnail"
                      style="height: 121px;width: 100%; object-fit: cover;cursor: zoom-in" alt="...">
                  </a>
                  <div class="text" style="font-weight: 600;padding: 5px;">
                    Mẫu biên bản 03
                  </div>

                  <div style="padding:10px">
                    <a target="blank"
                      href="https://view.officeapps.live.com/op/view.aspx?src=https://kyc-nosa-file.s3-ap-southeast-1.amazonaws.com/Ocop/Bi%C3%AAn+b%E1%BA%A3n+h%E1%BB%8Dp+h%E1%BB%99i+%C4%91%E1%BB%93ng+%C4%91%C3%A1nh+gi%C3%A1+s%E1%BA%A3n+ph%E1%BA%A9m-1603442610553.docx"
                      class="btn btn-sm btn-outline-secondary" role="button" style="margin-right: 11px;">Xem
                      trước</a>
                    <a id="idPrintBienBan"
                      href="https://app.sohoaocop.com/RenderBienBan?IdHD=613ad6786549ac587a826847&amp;isHD=1"
                      class="btn btn-sm btn-outline-secondary deleteQuote" role="button"
                      style="float: right;width: 81px;color: white;background-color: #049252;border-color:#049252 ;">In</a>
                  </div>

                </div>
              </div>

              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <a href="#">
                    <img src="{{ asset('images/2020-11-02_16h15_54.png') }}" class="img-thumbnail"
                      style="height: 121px;width: 100%; object-fit: cover;cursor: zoom-in" alt="...">
                  </a>
                  <div class="text" style="font-weight: 600;padding: 5px;">
                    Mẫu biên bản 04
                  </div>

                  <div style="padding:10px">
                    <a target="blank"
                      href="https://view.officeapps.live.com/op/view.aspx?src=https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1604308773626_450136M%E1%BA%ABubi%C3%AAnb%E1%BA%A3ns%E1%BB%9104.xlsx"
                      class="btn btn-sm btn-outline-secondary" role="button" style="margin-right: 11px;">Xem
                      trước</a>
                    <a id="idPrintTonghopPhieucham" href="##" class="btn btn-sm btn-outline-secondary deleteQuote"
                      role="button"
                      style="float: right;width: 81px;color: white;background-color: #049252;border-color:#049252 ;">In</a>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div>

    <div class="row" id="" style="    margin: 11px;">
      <div class="col-md-5">
        <div class="row" style="  background-color: #ffffff;width: 100%;">
          <div class="col-md-12" style="display: flex;padding: 24px;">
            <div class="rec"></div>
            <label class="SubHeading " id="memberTgv">THÀNH VIÊN TỔ TƯ VẤN</label>
            <div style="width: 112px;padding-top: 6px;    text-align: right;" id="addMem">
              <a href="#" data-toggle="modal" data-target="#step2">
                <img src="{{ asset('images/s1.png') }}" class="Primary">
                <span class="Text">Thêm mới</span>
              </a>
              <!-- <label class="text"></label> -->
            </div>
          </div>
        </div>
        <div class="row"
          style="  max-height: 500px; overflow: auto; background-color: #ffffff;width: 100%;margin-bottom: 20px;"
          id="listmembers">
        </div>
      </div>
      <div class="col-md-7" style="overflow: auto;max-height: 462px;">
        <div class="row" style="  background-color: #ffffff;width: 100%;">

          <div class="col-md-12" style="display: flex;padding: 24px;">
            <div class="rec"></div>
            <label class="SubHeading ">DANH SÁCH HỒ SƠ </label>
          </div>

        </div>
        <div class="row " style=" background-color: #ffffff;width: 100%;" id="listproductinfnos">

        </div>

      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <div class="right-sidebar ps ps--theme_default" data-ps-id="198c76c8-9fce-ee4d-8879-cda3a04471de">
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