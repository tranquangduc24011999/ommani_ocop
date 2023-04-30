@extends('master')
@section('content')
<link href="{{ asset('css/councils.css') }}" rel="stylesheet">
<div class="page-wrapper" style="min-height: 954px;">
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid" style="padding: 0;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Chủ thể và bộ sản phẩm</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <!-- <li class="breadcrumb-item"><a href="javascript:void(0)"> </a></li> -->
            <!-- <li class="breadcrumb-item active">Chủ thể và bộ sản phẩm</li> -->
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
    <div class="row" id="" style="    margin: 11px;">
      <div class="col-md-12">
        <button onclick="locations()" type="button" class="btn btn-info btn-rounded m-t-10 float-right"
          style="margin-bottom: 15px;">Thêm sản phẩm</button>
        <a href="{{ url('/') }}/createentity" type="button" class="btn btn-info btn-rounded m-t-10 float-right" style="margin-bottom: 15px;
          margin-right: 10px;
          background-color: #049252;">Thêm chủ thể</a>
      </div>
      <div class="col-md-5" style="    margin-bottom: 20px;">
        <div class="row" style="  background-color: #ffffff;width: 100%;margin: 0;border-radius: 24px;padding: 19px;">
          <div class="col-md-12" style="display: flex;padding: 24px;">
            <div class="rec"></div>
            <label class="SubHeading ">CHỦ THỂ</label>

          </div>
          <div class="col-md-12 row" id="listmembers" style="margin-top: 22px;
              padding-right: 0;
              overflow: auto;
              max-height: 425px;">
            {{-- <div class="col-md-12 row " style="margin-bottom: 36px;">
              <div class="col-11" style="padding-right: 0;    display: flex;">
                <div style=" margin-right: 14px;">
                  <img src="{{ asset('images/noavatar.png') }}" class="imgava">
                </div>
                <div style="  overflow: auto;">
                  <span class="titleName">CÔNG TY TNHH NÔNG SẢN HUY HIẾU</span><br>
                  <span class="titleNamechirden">Đơn vị Lâm Đồng </span><br>
                  <span class="titleNamechirden"> </span><br>
                </div>
              </div>
              <div class="col-1">
                <div class="rounds">
                  <input type="checkbox" onclick="clickli('61c1502097ad5e4990650c96','CÔNG TY TNHH NÔNG SẢN HUY HIẾU')"
                    class="change-selectorMember2" id="checkbox-61c1502097ad5e4990650c96"
                    value="61c1502097ad5e4990650c96" name="checkbox-group" checked="checked">
                  <label for="checkbox-61c1502097ad5e4990650c96" name="checkbox-group"></label>
                </div>
              </div>
            </div>

            <div class="col-md-12 row " style="margin-bottom: 36px;">
              <div class="col-11" style="padding-right: 0;    display: flex;">
                <div style=" margin-right: 14px;">
                  <img src="{{ asset('images/noavatar.png') }}" class="imgava">
                </div>
                <div style="  overflow: auto;">
                  <span class="titleName">Công ty sản xuất thực phẩm MTP</span><br>
                  <span class="titleNamechirden">Đơn vị Hà Nội </span><br>
                  <span class="titleNamechirden"> </span><br>
                </div>
              </div>
              <div class="col-1">
                <div class="rounds">
                  <input type="checkbox" onclick="clickli('62306c28910d6b236160f0b4','Công ty sản xuất thực phẩm MTP')"
                    class="change-selectorMember2" id="checkbox-62306c28910d6b236160f0b4"
                    value="62306c28910d6b236160f0b4" name="checkbox-group">
                  <label for="checkbox-62306c28910d6b236160f0b4" name="checkbox-group"></label>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="row" style="  background-color: #ffffff;width: 100%;margin: 0;border-radius: 24px;padding: 19px;">
          <div class="col-md-12" style="display: flex;padding: 24px;">
            <div class="rec"></div>
            <label class="SubHeading " id="textTitle"></label>
          </div>
          <div class="col-md-12 row" id="divListProduct" style="margin-top: 22px;
                padding-right: 0;
                ">
            {{-- <div class="col-md-6  " style="margin-bottom: 36px;">
              <div class="row">
                <div class="col-12" style="padding-right: 0;    display: flex;">
                  <a href="{{ url('/') }}/submitproof" style="padding: 0px 0px;display: flex;">
                    <div style=" margin-right: 14px;">
                      <img src="{{ asset('images/removal.png') }}" class="imgava">
                    </div>
                    <div style="overflow: auto;" class="nameproduct">
                      <span class="titleName">Macca Sấy Viet’s Nuts Lâm Hà</span><br>
                      <span class="titleNamechirden">Mã sản phẩm: 68-676-24916-1-2021 </span><br>
                      <span class="titleNamechirden">Ngày tạo: 12/21/2021, 10:55:12 AM </span><br>
                      <span class="titleNamechirden">Tiến độ hoàn thành: 100%</span><br>
                      <div class="progress" style="    margin-bottom: 10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%; height: 6px;"
                          aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="comment-footer">
                        <span class="label label-info">Hoàn thành</span>
                      </div>
                    </div>

                  </a>

                  <div class="dropdown show" style="position: absolute;right: 1px;">
                    <div id="accountDropdown" style="" href="javascript:void(0)"
                      class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button"
                      aria-haspopup="true" aria-expanded="true">
                      <a href="javascript:void(0)"><img id="accountAvartar" src="{{ asset('images/grey.png') }}"
                          srcset="{{ asset('images/grey.png') }} 2x, {{ asset('images/grey3x.png') }} 3x"
                          class="Grey"></a>
                    </div>
                    <div id="addcoucil" class="dropdown-menu animated flipInY "
                      style="    padding: 0;text-align: center;  background-color: rgb(3, 146, 82);top: 20px; position: absolute; transform: translate3d(-110px, 24px, 0px); will-change: transform;"
                      x-placement="bottom-start">
                      <div style="padding: 5px;border-bottom: 1px solid white;">
                        <a href="#" style="color: white">
                          <div>Sửa</div>
                        </a>
                      </div>
                      <div style="padding: 5px;">
                        <a href="##" data-toggle="modal"
                          onclick="deletProdut('61c1502097ad5e4990650c95','61c1502097ad5e4990650c96')"
                          data-target=".modal" class="dropdown-item-tool" style="color: white">
                          <div>Xóa</div>
                        </a>
                      </div>
                    </div>
                  </div>


                </div>
                <div>

                </div>
              </div>
            </div>
            <div class="col-md-6  " style="margin-bottom: 36px;">
              <div class="row">
                <div class="col-12" style="padding-right: 0;    display: flex;">
                  <a href="{{ url('/') }}/submitproof" style="padding: 0px 0px;display: flex;">
                    <div style=" margin-right: 14px;">
                      <img src="{{ asset('images/chethainguyen.jpg') }}" class="imgava">
                    </div>
                    <div style="overflow: auto;" class="nameproduct">
                      <span class="titleName">Chè Thái Nguyên</span><br>
                      <span class="titleNamechirden">Mã sản phẩm: 68-676-24916-2-2022 </span><br>
                      <span class="titleNamechirden">Ngày tạo: 3/16/2022, 9:18:15 AM </span><br>
                      <span class="titleNamechirden">Tiến độ hoàn thành: 0%</span><br>
                      <div class="progress" style="    margin-bottom: 10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 0%; height: 6px;"
                          aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="comment-footer">
                        <span class="label label-inverse">Chưa nộp</span>
                      </div>
                    </div>

                  </a>

                  <div class="dropdown show" style="position: absolute;right: 1px;">
                    <div id="accountDropdown" style="" href="javascript:void(0)"
                      class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button"
                      aria-haspopup="true" aria-expanded="true">
                      <a href="javascript:void(0)"><img id="accountAvartar" src="{{ asset('images/grey.png') }}"
                          srcset="{{ asset('images/grey2x.png') }} 2x, {{ asset('images/grey3x.png') }} 3x"
                          class="Grey"></a>
                    </div>
                    <div id="addcoucil" class="dropdown-menu animated flipInY "
                      style="    padding: 0;text-align: center;  background-color: rgb(3, 146, 82);top: 20px; position: absolute; transform: translate3d(-110px, 24px, 0px); will-change: transform;"
                      x-placement="bottom-start">
                      <div style="padding: 5px;border-bottom: 1px solid white;">
                        <a href="#" style="color: white">
                          <div>Sửa</div>
                        </a>
                      </div>
                      <div style="padding: 5px;">
                        <a href="##" data-toggle="modal"
                          onclick="deletProdut('623148e7910d6b236160f4e5','61c1502097ad5e4990650c96')"
                          data-target=".modal" class="dropdown-item-tool" style="color: white">
                          <div>Xóa</div>
                        </a>
                      </div>
                    </div>
                  </div>


                </div>
                <div>

                </div>
              </div>
            </div> --}}
          </div>
          <div class="col-md-12" style="text-align: center;display:none" id="snpinner">
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
        </div>
      </div>
    </div>
    <!-- <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Thay đổi thông tin: <span id="productEdit"></span></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12 m-t-10">
                  <label>Ảnh sản phẩm</label>
                  <form method="post" action="#" enctype="multipart/form-data" id="DropzoneNew" style="width:100%">
                    <div class="dropzone" id="dropzoneMytwo">
                      <div class="dropzone-previews">
                      </div>
                    </div>
                  </form>

                </div>
                <div class="col-md-12 m-t-10">
                  <label>Tên sản phẩm</label>
                  <input class="form-control" type="text" id="nameProduct">
                </div>
                <div class="col-md-12 m-t-10">
                  <label>Tên chủ thể</label>
                  <input class="form-control" type="text" id="nameEnlity">
                </div>
                <div class="col-md-12 m-t-10">
                  <div class="col-md-12  m-b-20" style="padding: 0;">
                    <div class="row" style="padding: 0;margin: 0;">
                      <div class="col-md-4 m-b-20 p-1" id="stProvical">
                        <label for="txtlevel" class="textH">Tỉnh/TP</label>
                        <select class="multi-select" style="width: 100%" name="cboPos" id="cboProvincial">
                        </select>
                        <code id='nof-load-pro' style="display: none;">Đang tải ...</code>
                      </div>
                      <div class="col-md-4 m-b-20 p-1" id="stDistricts">
                        <label for="txtlevel" class="textH">Quận/Huyện</label>
                        <select class="multi-select" style="width: 100%" name="cboPos" id="cboDistricts">

                        </select>
                        <code id='nof-load-district' style="display: none;">Đang tải ...</code>
                      </div>
                      <div class="col-md-4 m-b-20 p-1" id="stCbwards">
                        <label for="txtname" class="textH">Xã/Phường</label>
                        <select class="multi-select" style="width: 100%" name="cboPos" id="cboWards">

                        </select>
                        <code id='nof-load-ward' style="display: none;">Đang tải ...</code>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Lưu</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
          </div>
        </div>
      </div> -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <div class="right-sidebar ps ps--theme_default" data-ps-id="f27099a4-6c67-d4f3-1f09-dbd8b4814815">
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
<script src="{{ asset('js/getproductbye.js?v=4') }}"></script>
@endsection()
