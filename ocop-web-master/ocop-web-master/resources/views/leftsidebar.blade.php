<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar ps ps--theme_default" data-ps-id="2bcb8c57-ce43-e899-644d-69992d6d8d86">
        <!-- User Profile-->
        <!-- <div class="user-profile">
            <div class="user-pro-body">
                <div><img src='/img/noavatar.png' alt="user-img" class="img-circle" id="accountAvartar"></div>
                <div class="dropdown">
                    <div id="accountDropdown" style="display: none;" href="javascript:void(0)"
                        class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false"><a href="javascript:void(0)"><span id="accountUserName"> USER</span><span
                                class="caret"></span></a></div>
                    <div class="dropdown-menu animated flipInY">
                        <a href="/accountSetting" class="dropdown-item"><i class="ti-user"></i> Tài khoản</a>
                        <a href="javascript: logout()" class="dropdown-item"><i class="fa fa-power-off"></i> Đăng
                            xuất</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav sidebarnavmanager" id="sidebarnav">
            <!-- <img id="menuSidebarnavImgLoad" src="/img/loader.gif" alt="Trulli" width="80" height="80"> -->
            <div id="menuSidebarnav" style="visibility: visible;" class="active">
                <ul id="sidebarnav" class="in">
                    <li style="display: none;">
                        <a href="https://app.sohoaocop.com/dashboard" aria-expanded="false">
                            <i class="icon-speedometer"></i>
                            <span class="hide-menu">Thống kê
                            </span>
                        </a>
                        <!-- <ul aria-expanded="false" class="collapse">
                            <li><a href="dashboard">Tổng quan</a></li> -->
                            <!-- <li><a href="map">Bản đồ</a></li> -->
                            <!-- <li><a href="reportGet">Báo cáo</a></li>
                        </ul> -->
                    </li>
                    <!-- <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-user-following"></i>
                        <span class="hide-menu">Chủ thể<span class="badge badge-pill badge-cyan ml-auto">2</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">DS Sản phẩm</a></li>
                        <li><a href="/#">Duyệt Sản phẩm</a></li>
                    </ul>
                    </li> -->
                    <li style="display: none;"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="ti-files"></i>
                            <span class="hide-menu">Quản lý hồ sơ</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li style="display: none;"><a id="hrefEx" href="https://app.sohoaocop.com/recordsManagement">Danh sách hồ sơ</a></li>
                                <li id="profileReview" style="display: none;"><a href="https://app.sohoaocop.com/approveFiles">Duyệt hồ sơ</a></li>
                                <li style="display: none;"> <a href="https://app.sohoaocop.com/proofmanagement" aria-expanded="false"> QL yêu cầu cập nhật</a>
                                </li>
                                <!-- <li><a href="/councils">Tạo chủ thể</a></li> -->
                            </ul>
                    </li>
                
                    <li style="display: none;"> <a href="https://app.sohoaocop.com/councils" aria-expanded="false">
                            <i class="icon-layers"></i>
                            <span class="hide-menu">Hội đồng chấm </span></a>
                    </li>
                    <li style="display: none;">
                        <a href="https://app.sohoaocop.com/evaluationresult" aria-expanded="false">
                            <i class="ti-layout-grid2"></i> <span class="hide-menu">Kết quả chấm</span>
                        </a>
                    </li>
                    <li style="display: none;"> <a href="https://app.sohoaocop.com/creatnoti" aria-expanded="false">
                            <i class="ti-announcement"></i> <span class="hide-menu">Tạo thông báo</span></a>
                    </li>
                    <li style="display: none;">
                        <a href="https://app.sohoaocop.com/entityMembersAuthorize" aria-expanded="false">
                            <i class="ti-widget-alt"></i> <span class="hide-menu">Phân quyền chủ thể </span>
                        </a>
                    </li>
                    <li style="display: none;">
                        <a href="https://app.sohoaocop.com/evaluation" aria-expanded="false">
                            <i class="icon-note"></i> <span class="hide-menu">Hồ sơ cần chấm</span>
                        </a>
                    </li>

                    <li style="display: none;"> <a href="https://app.sohoaocop.com/getproductHelpTeam" aria-expanded="false">
                        <i class="icon-layers"></i><span class="hide-menu">Quản lý hồ sơ</span></a>
                    </li>

                    <li style="display: none;"> <a href="https://app.sohoaocop.com/evaluationHelpTeam" aria-expanded="false">
                        <i class="icon-note"></i><span class="hide-menu">Hồ sơ cần chấm</span></a>
                    </li>

                    <li style="display: none;">
                        <a href="https://app.sohoaocop.com/councilAnalytics" aria-expanded="false">
                            <i class="icon-note"></i> <span class="hide-menu">Thống kê dữ liệu chấm</span></a>
                    </li>
                    <li style="display: none;">
                        <a href="https://app.sohoaocop.com/accountmanagement" aria-expanded="false">
                            <i class="icon-note"></i> <span class="hide-menu">Quản lý tài khoản</span>
                        </a>
                    </li>
                    @if(Auth::user()->hasRole('MEMBER'))
                        <li style="display:none;"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="ti-files"></i>
                            <span class="hide-menu">Quản lý hồ sơ</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="{{ url('/') }}/invitemember">Mời thêm thành viên</a></li>
                                <li><a href="#">Hồ sơ được mời</a></li>
                            </ul>
                        </li>
                        <li style="display: none;"> <a href="{{ url('/') }}/joinentity" aria-expanded="false">
                            <i class="icon-layers"></i>
                            <span class="hide-menu">Tham gia chủ thể</span></a>
                        </li>
                        <li style="display: none;"> <a href="#" aria-expanded="false">
                            <i class="icon-people"></i>
                            <span class="hide-menu">Quản lý thành viên</span></a>
                        </li>
                        <li class="active"> <a href="{{ url('/') }}/entities" aria-expanded="false" class="active">
                            <i class="icon-layers"></i>
                            <span class="hide-menu">Quản lý chủ thể</span></a>
                        </li>
                    @elseif(Auth::user()->hasRole('MANAGER'))
                        <li>
                            <a href="{{ url('/') }}/dashboard" aria-expanded="false">
                                <i class="icon-speedometer"></i>
                                <span class="hide-menu">Thống kê
                                </span>
                            </a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="ti-files"></i>
                            <span class="hide-menu">Quản lý hồ sơ</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a id="hrefEx" href="{{ url('/') }}/filemanagement">Danh sách hồ sơ</a></li>
                                <li id="profileReview" style="display: none;"><a href="/approveFiles">Duyệt hồ sơ</a></li>
                                <!--
                                <li> <a href="{{ url('/') }}/proofmanagement" aria-expanded="false"> QL yêu cầu cập nhật</a>
                                </li>
                                -->
                                <!-- <li><a href="/councils">Tạo chủ thể</a></li> -->
                            </ul>
                        </li>
                        <li> <a href="{{ url('/') }}/councils" aria-expanded="false">
                            <i class="icon-layers"></i>
                            <span class="hide-menu">Hội đồng chấm </span></a>
                        </li>
                        <li> <a href="{{ url('/') }}/evaluation" aria-expanded="false">
                            <i class="icon-layers"></i>
                            <span class="hide-menu">Hồ sơ cần chấm </span></a>
                        </li>
                        <li>
                            <a href="{{ url('/') }}/evaluationresult" aria-expanded="false">
                                <i class="ti-layout-grid2"></i> <span class="hide-menu">Kết quả chấm</span>
                            </a>
                        </li>
                        <!--
                        <li>
                            <a href="{{ url('/') }}/accountmanagement" aria-expanded="false">
                                <i class="icon-note"></i> <span class="hide-menu">Quản lý tài khoản</span>
                            </a>
                        </li>
                        -->
                        <li> <a href="{{ url('/') }}/approvemember" aria-expanded="false">
                            <i class="ti-credit-card"></i>
                            <span class="hide-menu">Xét duyệt thành viên</span></a>
                        </li>
                        <li> <a href="/submember/getUrlLogin" target="_blank" aria-expanded="false" style="display: none;">
                            <i class=" icon-action-redo"></i>
                            <span class="hide-menu">Giao diện người chấm</span></a>
                        </li>
                    @elseif(Auth::user()->hasRole('EXAMINER'))   
                        <li> <a href="{{ url('/') }}/evaluation" aria-expanded="false">
                            <i class="icon-layers"></i>
                            <span class="hide-menu">Hồ sơ cần chấm </span></a>
                        </li>
                    @elseif(Auth::user()->hasRole('HELPTEAM'))
                    <li>
                        <a href="{{ url('/') }}/dashboard" aria-expanded="false">
                            <i class="icon-speedometer"></i>
                            <span class="hide-menu">Thống kê
                            </span>
                        </a>
                    </li>
                    <li> <a href="/evaluationhelpteam" aria-expanded="false">
                        <i class="icon-note"></i><span class="hide-menu">Hồ sơ cần chấm</span></a>
                    </li>

                    <li style="display: none;">
                        <a href="/councilAnalytics" aria-expanded="false">
                            <i class="icon-note"></i> <span class="hide-menu">Thống kê dữ liệu chấm</span></a>
                    </li>
                    @endif
                    <li style="display: none;"> <a href="https://app.sohoaocop.com/wvbrowsemembers" aria-expanded="false">
                        <i class="ti-credit-card"></i>
                        <span class="hide-menu">Xét duyệt thành viên</span></a>
                    </li>
                    <li style="display: none;"> <a href="https://app.sohoaocop.com/submember/getUrlLogin" target="_blank" aria-expanded="false" style="display: none;">
                        <i class=" icon-action-redo"></i>
                        <span class="hide-menu">Giao diện người chấm</span></a>
                    </li>

               

                </ul>
            </div>
        </nav>
        <!-- <nav class="sidebar-nav sidernaExaim" style="display: none;">
            <ul >
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <i class="ti-layout-grid2"></i>
                    <span class="hide-menu">Thống kê</span>
                    
                </a></li>
                <li> <a id="hrefEx" href="/evaluation?psid=" aria-expanded="false">
                        <i class="icon-people"></i>
                        <span class="hide-menu">Quản lý hồ sơ</span></a>
                </li>
            </ul>
        </nav> -->
        <!-- End Sidebar navigation -->
    <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    <!-- End Sidebar scroll-->
    <div id="authorizeList" style="display: none"></div>
    <script src="{{ asset('js/jquery-3.js') }}"></script>
    <!--<script src="{{ asset('js/sidebar.js') }}" type="text/javascript"></script>-->
    </aside>