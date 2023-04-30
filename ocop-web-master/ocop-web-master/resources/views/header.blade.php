<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-collapse" style="background-color: #f7f7f7">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
                <li class="nav-item"> <a style="color: black;" class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <li class="nav-item"> <a style="color: black;" class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu pr-2 pl-3"></i></a> </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="{{ url('/') }}"><img src="{{ asset('images/ocopLogoIcon.png') }}" height="30px"></a></li>
            </ul>
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav mr-3 ml-3">
                <li class="nav-item dropdown show" id="notify-bell-li" style="">
                    <a onclick="getNotify()" class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="ti-bell" style="color: black;"></i>
                        <div class="notify" id="notify-bell"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                        <ul>
                            <li>
                                <div class="drop-title d-flex justify-content-between">
																	<div>Thông báo</div>
																	<div onclick="seenAll()" style="cursor: pointer">Đánh dấu xem tất cả</div>
																</div>
                            </li>
                            <li>
                                <div class="message-center ps ps--theme_default" id="notify-data" data-ps-id="1f527d55-f34e-1e7b-6605-c0bf184117b8">
              <a onclick="isWatching('61d871ccb221160f88c0a986')" href="#" class="">
                  <img src="{{ asset('images/removal.png') }}" style="border-radius: 100%;width: 35px;height: 35px;">
                      <div class="mail-contnet" style="    width: 86%;">
                        <div class="mail-desc" style="white-space: break-spaces;"><span>Sản phẩm Macca Sấy Viet’s Nuts Lâm Hà đã hết hạn cập nhật minh chứng. Anh chị chưa cập nhật đủ các minh chứng quản lý cấp Huyện yêu cầu bổ sung.!</span></div> 
                        <span class="time" style="color:#2196f3">2 tháng trước</span>
                     </div>
                </a>
            
              <a onclick="isWatching('61c3cbe0b221160f88c004fd')" href="#" class="isSee">
                  <img src="{{ asset('images/removal.png') }}" style="border-radius: 100%;width: 35px;height: 35px;">
                      <div class="mail-contnet" style="    width: 86%;">
                        <div class="mail-desc" style="white-space: break-spaces;"><span>Bộ hồ sơ HẠT MACCA VIET'S NUT'S LÂM HÀ của anh/chị có yêu cầu cập nhật bổ sung minh chứng từ cấp Huyện. Vui lòng bổ sung trước ngày 7-1-2022 để hội đồng tiến hành đánh giá, phân hạng.!</span></div> 
                        <span class="time" style="color:#2196f3">2 tháng trước</span>
                     </div>
                </a>
            </div>
                                </li>
                        </ul>
                    </div>
                    </li>
                    <li>
                    
                    </li>
                <div id="accountUserName" class="mt-3 mr-3 text-right d-none d-sm-block" style="display: inline;">
            <span style="font-weight: 600;">{{Auth::guard('web')->user()->name}}</span>
            <br>
            <span style="color: #6d7182">{{convertRoleToString(Auth::guard('web')->user())}} </span></div>
                <div class="user-profile mt-2">
                    <div class="user-pro-body">
                        <div class="dropdown">
                            <div id="accountDropdown" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <a href="javascript:void(0)"><img src="{{Auth::guard('web')->user()->avatar ?? '/images/noavatar.png'}}" alt="user-img" style="height: 50px;" class="img-circle" id="accountAvartar"></a>
                            </div>
                            <div class="user-info" style="display: none;"><div>{{Auth::guard('web')->user()->name}}</div>
<div>{{Auth::guard('web')->user()->email}}</div>
<div>{{Auth::guard('web')->user()->phone}}</div>
</div>
                            <div class="dropdown-menu animated flipInY" style="top: 60px !important; left: -80px;">
                                <a href="{{ url('/') }}/account" class="dropdown-item"><i class="ti-user"></i> Tài khoản</a>
                                <a href="{{ url('/') }}/logout" class="dropdown-item"><i class="fa fa-power-off"></i> Đăng
                                    xuất</a>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
</header>
<style>
    .isSee {
        background-color: #e9ecef;
    }
</style>