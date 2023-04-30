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
        <h4 class="text-themecolor">Quản lý thành viên</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <!-- <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li> -->
            <!-- <li class="breadcrumb-item active">Quản lý thành viên</li> -->
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
        <a href="#" class="btn btn-success" style="    float: right;
            margin-bottom: 13px;" onclick="sendMess()">Gửi lời mời</a>
      </div>
      <div class="col-md-5" style="    margin-bottom: 20px;">
        <div class="row" style="  background-color: #ffffff;width: 100%;margin: 0;border-radius: 24px;padding: 19px;">
          <div class="col-md-12" style="display: flex;padding: 24px;">
            <div class="rec"></div>
            <label class="SubHeading ">THÀNH VIÊN</label>

          </div>
          <div class="col-md-12">
            <div class="form-group">
              <!-- <label for="nameGroup" class="Lable" id="Namegroup">Tên hội đồng</label> -->
              <a href="#"><img src="{{ asset('images/original.png') }}"
                  srcset="{{ asset('images/original2x.png') }} 2x, {{ asset('images/original3x.png') }} 3x"
                  class="Original"></a>
              <input onchange="search()" style="padding-left: 43px;" type="text" class="form-control input" id="search"
                placeholder="Nhập tên email/số điện thoại">
            </div>
          </div>
          <div class="col-md-12 row" id="listmembers" style="margin-top: 22px;
              padding-right: 0;
              overflow: auto;
              max-height: 330px;">
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <div class="row" style="  background-color: #ffffff;width: 100%;margin: 0;border-radius: 24px;padding: 19px;">
          <div class="col-md-12" style="display: flex;padding: 24px;">
            <div class="rec"></div>
            <label class="SubHeading" id="textTitle">HỒ SƠ</label>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <!-- <label for="nameGroup" class="Lable" id="Namegroup">Tên hội đồng</label> -->
              <a href="#"><img src="{{ asset('images/original.png') }}"
                  srcset="{{ asset('images/original2x.png') }} 2x, {{ asset('images/original3x.png') }} 3x"
                  class="Original"></a>
              <input onchange="seachProduct()" style="padding-left: 43px;max-width: 49%;" type="text"
                class="form-control input" id="seachproduct" placeholder="Nhập tên hồ sơ">
              <select onchange="seachProduct()" style="max-width: 49%;" type="text" class="form-control input"
                id="seachproductselect">
                <option value="0" selected="selected">Chọn</option>
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
          <div class="col-md-12 row" id="listProducts" style="margin-top: 22px;
                padding-right: 0;
                ">
            {{-- <div class="col-md-12 row " style="padding-right: 0;  margin-bottom: 36px;">
              <div class="col-10" style="padding-right: 0;    display: flex;">
                <div style=" margin-right: 14px;">
                  <img src="{{ asset('images/removal.png') }}" class="imgava">
                </div>
                <div style="  overflow: auto;">
                  <span class="titleName">Macca Sấy Viet’s Nuts Lâm Hà </span><span class="Ch-tch"
                    id="title-61c1502097ad5e4990650c95"></span> <br>
                  <span class="titleNamechirden">Tên chủ thể: CÔNG TY TNHH NÔNG SẢN HUY HIẾU</span><br>
                  <span class="titleNamechirden">Mã sản phẩm: 68-676-24916-1-2021</span><br>

                </div>
              </div>
              <div style="position: absolute;display:none ;" class="role" id="role-61c1502097ad5e4990650c95">
                <a href="##" onclick="role('view','61c1502097ad5e4990650c95','61c1502097ad5e4990650c96')">Có quyền
                  xem</a><br>
                <a href="##" onclick="role('edit','61c1502097ad5e4990650c95','61c1502097ad5e4990650c96')">Có quyền chỉnh
                  sửa</a><br>
                <a href="##" onclick="role('0','61c1502097ad5e4990650c95','61c1502097ad5e4990650c96')">Không có quyền
                  xem</a><br>
              </div>
              <div class="col-1">
                <div class="rounds">
                  <input type="checkbox" onchange="changeRole('61c1502097ad5e4990650c95','61c1502097ad5e4990650c96')"
                    class="change-selector2" id="checkbox-61c1502097ad5e4990650c95" value="61c1502097ad5e4990650c95"
                    name="checkbox-61c1502097ad5e4990650c95">
                  <label for="checkbox-61c1502097ad5e4990650c95" style="margin-top: 8px;"></label>
                </div>
              </div>
              <div class="col-1" id="edit-61c1502097ad5e4990650c95" style="text-align: center;">
                <div>
                </div>
              </div>
            </div>
            <div class="col-md-12 row " style="padding-right: 0;  margin-bottom: 36px;">
              <div class="col-10" style="padding-right: 0;    display: flex;">
                <div style=" margin-right: 14px;">
                  <img src="{{ asset('images/chethainguyen.jpg') }}" class="imgava">
                </div>
                <div style="  overflow: auto;">
                  <span class="titleName">Chè Thái Nguyên </span><span class="Ch-tch"
                    id="title-623148e7910d6b236160f4e5"></span> <br>
                  <span class="titleNamechirden">Tên chủ thể: CÔNG TY TNHH NÔNG SẢN HUY HIẾU</span><br>
                  <span class="titleNamechirden">Mã sản phẩm: 68-676-24916-2-2022</span><br>

                </div>
              </div>
              <div style="position: absolute;display:none ;" class="role" id="role-623148e7910d6b236160f4e5">
                <a href="##" onclick="role('view','623148e7910d6b236160f4e5','61c1502097ad5e4990650c96')">Có quyền
                  xem</a><br>
                <a href="##" onclick="role('edit','623148e7910d6b236160f4e5','61c1502097ad5e4990650c96')">Có quyền chỉnh
                  sửa</a><br>
                <a href="##" onclick="role('0','623148e7910d6b236160f4e5','61c1502097ad5e4990650c96')">Không có quyền
                  xem</a><br>
              </div>
              <div class="col-1">
                <div class="rounds">
                  <input type="checkbox" onchange="changeRole('623148e7910d6b236160f4e5','61c1502097ad5e4990650c96')"
                    class="change-selector2" id="checkbox-623148e7910d6b236160f4e5" value="623148e7910d6b236160f4e5"
                    name="checkbox-623148e7910d6b236160f4e5">
                  <label for="checkbox-623148e7910d6b236160f4e5" style="margin-top: 8px;"></label>
                </div>
              </div>
              <div class="col-1" id="edit-623148e7910d6b236160f4e5" style="text-align: center;">
                <div>
                </div>
              </div>
            </div>
            <div class="col-md-12 row " style="padding-right: 0;  margin-bottom: 36px;">
              <div class="col-10" style="padding-right: 0;    display: flex;">
                <div style=" margin-right: 14px;">
                  <img src="{{ asset('images/banhgao.jpg') }}" class="imgava">
                </div>
                <div style="  overflow: auto;">
                  <span class="titleName">Bánh gạo </span><span class="Ch-tch"
                    id="title-62306c28910d6b236160f0b3"></span> <br>
                  <span class="titleNamechirden">Tên chủ thể: Công ty sản xuất thực phẩm MTP</span><br>
                  <span class="titleNamechirden">Mã sản phẩm: 01-009-00367-3-2022</span><br>

                </div>
              </div>
              <div style="position: absolute;display:none ;" class="role" id="role-62306c28910d6b236160f0b3">
                <a href="##" onclick="role('view','62306c28910d6b236160f0b3','62306c28910d6b236160f0b4')">Có quyền
                  xem</a><br>
                <a href="##" onclick="role('edit','62306c28910d6b236160f0b3','62306c28910d6b236160f0b4')">Có quyền chỉnh
                  sửa</a><br>
                <a href="##" onclick="role('0','62306c28910d6b236160f0b3','62306c28910d6b236160f0b4')">Không có quyền
                  xem</a><br>
              </div>
              <div class="col-1">
                <div class="rounds">
                  <input type="checkbox" onchange="changeRole('62306c28910d6b236160f0b3','62306c28910d6b236160f0b4')"
                    class="change-selector2" id="checkbox-62306c28910d6b236160f0b3" value="62306c28910d6b236160f0b3"
                    name="checkbox-62306c28910d6b236160f0b3">
                  <label for="checkbox-62306c28910d6b236160f0b3" style="margin-top: 8px;"></label>
                </div>
              </div>
              <div class="col-1" id="edit-62306c28910d6b236160f0b3" style="text-align: center;">
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
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <div class="right-sidebar ps ps--theme_default" data-ps-id="4af5d6c7-a666-f070-09b4-29823dfd4eae">
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