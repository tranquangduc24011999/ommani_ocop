@extends('master')
@section('content')
<link href="{{ asset('css/councils.css') }}" rel="stylesheet">
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
    <div class="modal" id="step1Tgv" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top: 9%;;height: 524px;  background-color: #ffffff;">
          <div class="modal-body" style="padding: 0 24px;">
            <label style="margin-top: 24px;" class="title">Tổ tư vấn</label>
            <p class="Note-Copy">Bước 1: Tạo tổ tư vấn</p>
            <div class="form-group">
              <label for="nameGroup" class="Lable" id="Namegroup">Tên tổ tư vấn</label>
              <input type="text" class="form-control input" id="nameGroupTgv">
            </div>
            <div class="form-group">
              <label for="chairman" class="Lable">Tổ trưởng tổ tư vấn</label>
              <select type="text" class="form-control input" id="chairmanTgv"
                data-select2-id="chairmanTgv" tabindex="-1">
              </select>
            </div>
            <div class="form-group">
              <label for="Secretary" class="Lable">Tổ phó tổ tư vấn</label>
              <!-- <input type="text" class="form-control input" id="Secretary"> -->
              <select type="text" class="form-control input select2-hidden-accessible" id="SecretaryTgv"
                data-select2-id="SecretaryTgv" tabindex="-1" aria-hidden="true">
              </select>
            </div>
            <div class="form-group" style="margin-bottom: 0px;">
              <label for="Secretary" class="Lable">Ngày hết hạn chấm</label>
              <input class="form-control input" type="date" id="date-selectorTgv" name="date-selectorTgv">
            </div>
            <div style="float: right;margin: 24px 0;">
              <a href="#" class="btn btn-secondary" onclick="backstep()">Hủy</a>
              <a href="#" class="btn btn-success" onclick="nextStep('tgv1')" id="tgv1">Tiếp theo</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" id="step2Tgv" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top: 9%;;height: 524px;  background-color: #ffffff;">
          <div class="modal-body" style="padding: 0 24px;">
            <label style="margin-top: 24px;" class="title">Tạo tổ tư vấn</label>
            <p class="Note-Copy">Bước 2: Thành viên tổ tư vấn</p>
            <div class="row " style=" max-height: 312px;    overflow: auto;" id="listmemberTgv">
            </div>
            <div style="float: right;margin: 24px 0;">
              <a href="#" class="btn btn-secondary" onclick="backstep('tgv1')">Quay lại</a>
              <a href="#" class="btn btn-success" onclick="nextStep('Tgv2')" id="buttonNext">Tiếp theo</a>
              <a href="#" class="btn btn-success" onclick="saveCouncilHelpTeam()" style="display: none;"
                id="buttonDone">Hoàn thành</a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="modal" id="step1" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top: 9%;;height: 524px;  background-color: #ffffff;">
          <div class="modal-body" style="padding: 0 24px;">
            <label style="margin-top: 24px;" class="title">Tạo mới hội đồng chấm</label>
            <p class="Note-Copy">Bước 3: Thông tin hội đồng</p>
            <div class="form-group">
              <label for="nameGroup" class="Lable" id="Namegroup">Tên hội đồng</label>
              <input type="text" class="form-control input" id="nameGroup">
            </div>
            <div class="form-group">
              <label for="chairman" class="Lable">Chủ tịch hội đồng</label>
              <select type="text" class="form-control input select2-hidden-accessible" name="chairman" id="chairman"
                data-select2-id="chairman" tabindex="-1" aria-hidden="true">
              </select>
            </div>
            <div class="form-group">
              <label for="Secretary" class="Lable">Thư ký hội đồng</label>
              <!-- <input type="text" class="form-control input" id="Secretary"> -->
              <select type="text" class="form-control input select2-hidden-accessible" id="Secretary"
                data-select2-id="Secretary" tabindex="-1" aria-hidden="true">
              </select>
            </div>
            <div class="form-group" style="margin-bottom: 0px;">
              <label for="Secretary" class="Lable">Ngày hết hạn chấm</label>
              <input class="form-control input" type="date" id="date-selector" name="date-selector" value="2022-03-18">
            </div>
            <div style="float: right;margin: 24px 0;">
              <a href="#" class="btn btn-secondary" onclick="backstep(1)">Quay lại</a>
              <a href="#" class="btn btn-success" onclick="nextStep(1)">Tiếp theo</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal" id="step2" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top: 9%;height: 548px;
          max-height: 550px;;  background-color: #ffffff;">
          <div class="modal-body" style="padding: 0 24px;">
            <label style="margin-top: 24px;" class="title">Tạo mới hội đồng chấm</label>
            <p class="Note-Copy">Bước 4: Danh sách thành viên</p>
            <div class="form-group">
              <!-- <label for="nameGroup" class="Lable" id="Namegroup">Tên hội đồng</label> -->
              <a href="#"><img src="OCOP%20|_files/original.png"
                  srcset="OCOP%20|_files/original2x.png 2x, OCOP%20|_files/original3x.png 3x" class="Original"></a>
              <input onchange="seach()" style="padding-left: 43px;" type="text" class="form-control input" id="seach"
                placeholder="Nhập email/số điện thoại">
            </div>
            <div class="row " style=" max-height: 312px;    overflow: auto;" id="listmember">

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
        <div class="modal-content" style="margin-top: 9%;max-height: 586px;  background-color: #ffffff;">
          <div class="modal-body" style="padding: 0 24px;">
            <label style="margin-top: 24px;" class="title">Tạo mới hội đồng chấm</label>
            <p class="Note-Copy">Bước 5: Chọn hồ sơ</p>
            <div class="form-group">
              <!-- <label for="nameGroup" class="Lable" id="Namegroup">Tên hội đồng</label> -->
              <a href="#"> <img src="images/original.png"
                  srcset="images/original2x.png 2x, images/original3x.png 3x" class="Original"></a>
              <input onchange="seachproduct()" style="padding-left: 43px;" type="text" class="form-control input"
                id="nameProductinfo" placeholder="Nhập tên/mã hồ sơ">

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
            <div class="row " style="max-height: 284px;    overflow: auto;" id="listproductinfno">

            </div>
            <div style="float: right;margin: 24px 0;">
              <a href="#" class="btn btn-secondary" onclick="backstep(3)">Quay lại</a>
              <a href="#" class="btn btn-success" onclick="savegroup()" id="btnSuccess">Hoàn thành</a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="row" style="margin: 2px;">
      <div class="col-12" style="margin-bottom: 23px;">
        <label class="Qun-l-h-s ">Danh sách hội đồng chấm</label>
      </div>
      <div class="col-12">
        <a href="#" class="btn btn-success Rectangle-Copy" data-toggle="modal" data-target="#step1Tgv"
          onclick="showButton()"><img src="{{ asset('images/white.png') }}"
            srcset="{{ asset('images/white2x.png') }} 2x, {{ asset('images/white3x.png') }} 3x" class="White"> <span
            class="Button-Copy">Tạo hội đồng chấm</span></a>
      </div>
    </div>
    <div class="row" style="    margin: 19px;margin-left: 11px;padding: 0;margin-right: 11px;" id="listcouncil">

    </div>
    <div class="modal" id="step4" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top: 9%;;height: 524px;  background-color: #ffffff;">
          <div class="modal-body" style="padding: 0 24px;">
            <label style="margin-top: 24px;" class="title">Cập nhật đồng chấm</label>

            <div class="form-group">
              <label for="nameGroup" class="Lable" id="Namegroup">Tên hội đồng</label>
              <input type="text" class="form-control input" id="nameGroups">
            </div>
            <div class="form-group">
              <label for="chairman" class="Lable">Chủ tịch hội đồng</label>
              <select type="text" class="form-control input select2-hidden-accessible" id="chairmans"
                data-select2-id="chairmans" tabindex="-1" aria-hidden="true">

              </select>
            </div>
            <div class="form-group">
              <label for="Secretary" class="Lable">Thư ký hội đồng</label>
              <!-- <input type="text" class="form-control input" id="Secretary"> -->
              <select type="text" class="form-control input select2-hidden-accessible" id="Secretarys"
                data-select2-id="Secretarys" tabindex="-1" aria-hidden="true">
              </select>
            </div>
            <div class="form-group" style="margin-bottom: 0px;">
              <label for="Secretary" class="Lable">Ngày hết hạn chấm</label>
              <input class="form-control input" type="date" id="date-selectors" name="date-selectors">
            </div>
            <div style="float: right;margin: 24px 0;">
              <a href="#" class="btn btn-secondary" data-dismiss="modal">Hủy</a>
              <a href="#" class="btn btn-success" onclick="saveupdatecouncils()">Cập nhật</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <div class="right-sidebar ps ps--theme_default" data-ps-id="74f159fe-3260-ed55-3225-cde70d444374">
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