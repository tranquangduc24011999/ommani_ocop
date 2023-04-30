@extends('master')
@section('content')
<link href="{{ asset('css/wvprooinfo.css') }}" rel="stylesheet">
<link href="{{ asset('css/customFormStyle.css') }}" rel="stylesheet">
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
<style>
    .divBor {
        /* width: 208px; */
        height: 250px;
        border-radius: 12px;
        box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.1);
        border: solid 1px #eff0f1;
        background-color: #ffffff;
        padding: 0px 10px;
    }

    .nameMember {
        height: 22px;
        font-family: 'Quicksand', sans-serif;
        font-size: 17px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.29;
        letter-spacing: normal;
        text-align: center;
        color: #191935;
    }

    .subtitile {
        font-family: 'Quicksand', sans-serif;
        font-size: 13px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.33;
        letter-spacing: normal;
        text-align: center;
        color: #797989;
    }

    .subtitile2 {
        font-family: 'Quicksand', sans-serif;
        font-size: 13px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.23;
        letter-spacing: normal;
        text-align: center;
        color: #6d7182;
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
    <h4 class="text-themecolor">Quản lý tài khoản</h4>
</div>
<div class="col-md-7 align-self-center text-right">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb">
            <!-- <li class="breadcrumb-item"><a href="javascript:void(0)"> </a></li> -->
            <!-- <li class="breadcrumb-item active">Quản lý tài khoản</li> -->
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
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="width: 100%;">
                    <div class="card-header" style="background-color: white;display: flex;padding: 24px;">
                        <div class="Rectangle">
                        </div>
                        <span class="SubHeading">
                            Tài khoản cùng cấp quản lý
                        </span>
                    </div>
                    <div class="card-body row" id="managerAccount" style="padding: 24px;">
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f1e816a3638e900178fba5c&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Trần Quốc Thái</label>
                    <p class="subtitile">huyendoantrande2010@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f364c31cb42ae28a848ca9b&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">quản lý tw</label>
                    <p class="subtitile">qltwnhhn@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f43b0e2650dc6513029eb1f&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Văn Lâm</label>
                    <p class="subtitile">qltw@lamdong.com.vn</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f912b750b1ea15dcc366895&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Minh Tiến</label>
                    <p class="subtitile">tienm.qltw@sohoaocop.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5fe9b1023b84f95f0de788c1&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Khánh Toàn</label>
                    <p class="subtitile">bfsc89@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5ffd6667f74fc8194932ced2&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Vi Việt Hoàng</label>
                    <p class="subtitile">viethoangvi@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611a1724401e8f18e75229a4&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20ta%CC%80i%20khoa%CC%89n_files/new_TINH%2520KON%2520TUM.png" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Văn phòng điều phối  nông thôn mới tỉnh Kon Tum</label>
                    <p class="subtitile">nongthonmoikt@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611a18f9401e8f18e75229a5&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Xuân Đại</label>
                    <p class="subtitile">nguyenxuandaidanang@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611a24b6401e8f18e75229ad&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Lê Đình Trung</label>
                    <p class="subtitile">ledinhtrungtb@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611a2535401e8f18e75229ae&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Đinh Hoàng Nam</label>
                    <p class="subtitile">hoangnam225@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611a36f5401e8f18e75229be&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Hoàng Long</label>
                    <p class="subtitile">nguyenhoanglong2307@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611b08f4401e8f18e75229c0&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20ta%CC%80i%20khoa%CC%89n_files/new_Hnh.JPG" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Võ Hưng</label>
                    <p class="subtitile">daihung.ktct@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611b0b0f401e8f18e75229c1&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Đỗ Văn Huy</label>
                    <p class="subtitile">dvhuyqc@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611b3614401e8f18e75229c7&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Bùi Đình Đông</label>
                    <p class="subtitile">buidinhdongna@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611b36a7401e8f18e75229c8&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Lê Quốc Khánh</label>
                    <p class="subtitile">khanhstsnl@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611b58b4401e8f18e75229c9&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20ta%CC%80i%20khoa%CC%89n_files/new_20180408_121830.jpg" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Phạm Tấn Hưng</label>
                    <p class="subtitile">phongptnttv@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611b5cbd401e8f18e75229cd&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20ta%CC%80i%20khoa%CC%89n_files/new_z2690481063634_b405de35c1ccf0f562204725eaa86180.jpg" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Thị Mộng Thường</label>
                    <p class="subtitile">ntmthuongocopdongthap@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611b668b401e8f18e75229ed&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Duy Dương</label>
                    <p class="subtitile">duongnnptnt.hp@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611b68a1401e8f18e75229f8&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Thị Huệ</label>
                    <p class="subtitile">huent218@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611b6ac9401e8f18e7522a01&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Thị Trà Phương</label>
                    <p class="subtitile">traphuongptnt@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611bcb67401e8f18e7522a29&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Võ Phát Triển</label>
                    <p class="subtitile">hieudhkt1987@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611c6932401e8f18e7522a2b&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20ta%CC%80i%20khoa%CC%89n_files/new_nong-san-250121211.jpg" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Thị Thu Hương</label>
                    <p class="subtitile">chebienhaiduong@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611c6c7d401e8f18e7522a2c&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Trần Đức Đạt</label>
                    <p class="subtitile">ducdatptnt@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611dc11f404a8b6606d63b41&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Trần Hoàng Dũng</label>
                    <p class="subtitile">tranhoangdung.st@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611dd7e6404a8b6606d63b45&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Trương Thị Xuân Ngân</label>
                    <p class="subtitile">ttxngan2020@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611e26b1404a8b6606d63b47&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Vy Thế Quang</label>
                    <p class="subtitile">ocopptntld@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611e5350404a8b6606d63b48&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Thị Thương</label>
                    <p class="subtitile">huyenthuong1950@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611eff7a404a8b6606d63b49&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Thanh An</label>
                    <p class="subtitile">thanhannguyen1202@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611f135b404a8b6606d63b53&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Đoàn Văn Biển</label>
                    <p class="subtitile">doanbien2013@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=611f200e404a8b6606d63b54&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Đoàn Trung Tuấn</label>
                    <p class="subtitile">tuandt@snnptnt.binhdinh.gov.vn</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6122fd88404a8b6606d63b7d&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Lê Thị Vân</label>
                    <p class="subtitile">lethivan201068@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=612304c3404a8b6606d63b81&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Phạm Thị Nguyệt</label>
                    <p class="subtitile">phongnongnghiepthanhha@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=612308f0404a8b6606d63b83&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn văn Sơn</label>
                    <p class="subtitile">soncn95@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6123683d404a8b6606d63b8b&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20ta%CC%80i%20khoa%CC%89n_files/new_3%2520minh.JPG" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Mai Văn Minh</label>
                    <p class="subtitile">vpntmannhon@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61249fb9404a8b6606d63b94&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Huỳnh Thanh Tâm</label>
                    <p class="subtitile">httam.snn@kiengiang.gov.vn</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6124a09b404a8b6606d63b95&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Huỳnh Công Chất</label>
                    <p class="subtitile">huynhcongchat@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6125a668404a8b6606d63ba7&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">TRẦN LÂM DUY</label>
                    <p class="subtitile">lamduytran1991@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6126031f404a8b6606d63bab&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20ta%CC%80i%20khoa%CC%89n_files/new_fe2d74885baeb9f0e0bf.jpg" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">ĐINH THỊ MỸ LINH</label>
                    <p class="subtitile">dinhthimylinh1978@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61284f1074341401b7cbb620&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Phạm Tiến Lực</label>
                    <p class="subtitile">phongnn.dateh@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61286cd974341401b7cbb624&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">KYC Demo QL huyện</label>
                    <p class="subtitile">testqlhuyen@kyc.net.vn</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61286d4574341401b7cbb625&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">KYC Demo QL tỉnh</label>
                    <p class="subtitile">testqltinh@kyc.net.vn</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6128aa2c74341401b7cbb64a&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Trần Lâm Duy</label>
                    <p class="subtitile">lamduytran1109@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=612d8daaa1f3a73db599754f&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">NGUYỄN MINH TÙNG</label>
                    <p class="subtitile">vpdpntmtayninh@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=612da584a1f3a73db5997559&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20ta%CC%80i%20khoa%CC%89n_files/new_z2714176917694_7c780c03b726ee001fe31e8d6655dba5.jpg" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Thị Mộng Thường</label>
                    <p class="subtitile">ntmthuongptnt@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=612da903a1f3a73db599755d&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Thị Dung</label>
                    <p class="subtitile">nguyendungpnn@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=612f309d1756f855d6f768f6&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Hữu Phước</label>
                    <p class="subtitile">vanphongj@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=613581119402317562b74750&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Lê Thị Ngọc Sương</label>
                    <p class="subtitile">ngsuongle@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=613598f99402317562b7475b&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Hoàng Thị Minh Hương</label>
                    <p class="subtitile">huonghoangppsd@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6136f57d6d4c283fc6592faa&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Trương Thị Loan</label>
                    <p class="subtitile">loancckg@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6137059e6d4c283fc6592fab&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Văn phòng điều phối nông thôn mới huyện Đăk Tô</label>
                    <p class="subtitile">pnndakto@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=613710d36d4c283fc6592fae&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Lê Văn Thử</label>
                    <p class="subtitile">hophu.cuahangnongdanhue@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=613718b46d4c283fc6592fba&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Lê Văn Thử 2</label>
                    <p class="subtitile">phongptnt53@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61371ef06d4c283fc6592fbd&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Lê Văn Trung</label>
                    <p class="subtitile">trungstsbt@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=613727026d4c283fc6592fbf&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">y ly sa</label>
                    <p class="subtitile">ylysa1988ktm@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=613818f46d4c283fc6592fc6&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20ta%CC%80i%20khoa%CC%89n_files/new_at_chiem-nguong-nui-doi-quan-ba_c45d6dbd96104eb43ce36b0d.jpg" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Thào Văn Quý</label>
                    <p class="subtitile">phongktht1@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=613879d86d4c283fc659302e&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Hoàng Đình Kiểm</label>
                    <p class="subtitile">hoanganhkiem1988@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61396422e5927d6e99a77ebb&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">VPĐP NTM Cao Bằng</label>
                    <p class="subtitile">vanphongdieuphoicb@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61396ddde5927d6e99a77ebc&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">LÝ MINH QUÝ</label>
                    <p class="subtitile">conongtroi1406@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=613b24154c09731a3b7fe9a5&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20ta%CC%80i%20khoa%CC%89n_files/new_Logo%2520OCOP%2520HN.jpg" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">OCOP HÀ NỘI</label>
                    <p class="subtitile">namdaolc@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=613db5fc4c09731a3b7fe9a8&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">OCOP huyện Mỹ Đức</label>
                    <p class="subtitile">nguyenthiha_myduc@hanoi.gov.vn</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61416e894c09731a3b7fec46&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Lê Đình Trung</label>
                    <p class="subtitile">vpđpntmthaibinh@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=614171524c09731a3b7fec4a&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Phùng Thị Kim Thoa</label>
                    <p class="subtitile">phungkimthoa298@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=614178d44c09731a3b7fec4e&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Thị Bé</label>
                    <p class="subtitile">nthibe@tiengiang.gov.vn</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=614296a24c09731a3b7fec5f&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Tiến Đạt</label>
                    <p class="subtitile">tiendatvb@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6142a2c84c09731a3b7fec61&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Thị Mỹ</label>
                    <p class="subtitile">mynguyen25384@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=614305d34c09731a3b7fecc8&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Phạm Thu Trang</label>
                    <p class="subtitile">phamthutrang7475@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61440c3cf02768153b558c50&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Trần Thị Thanh Hương</label>
                    <p class="subtitile">pktsapa@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6147f397572ba72cb80de6ef&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Thị Thuý</label>
                    <p class="subtitile">ocopvixuyen@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6147fc4f572ba72cb80de731&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Tống Quốc Khánh Dư</label>
                    <p class="subtitile">pnngodau@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=614839c439b6b04cc66d13a0&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Hà Linh</label>
                    <p class="subtitile">halinh39cln@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61484f9c39b6b04cc66d1462&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Phan Anh Tuấn</label>
                    <p class="subtitile">anhtuankt36@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61498dcebd84ee5affd66991&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Hoàng Minh Nguyệt</label>
                    <p class="subtitile">nguyethm.tp@backan.gov.vn</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=615ac2d26082b06a9d4374e7&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Huyện Đông Anh</label>
                    <p class="subtitile">dothanhhuyenda@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61777c98673abd092c4062d2&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Dương Thanh Thủy</label>
                    <p class="subtitile">thanhduongthuy@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6178fa80673abd092c407374&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Tấn Thạnh</label>
                    <p class="subtitile">nguyentanthanhphongnn@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6178fad9673abd092c40738b&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Hữu Tiến</label>
                    <p class="subtitile">nongthonmoibatri@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6178fb02673abd092c407397&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Nguyễn Mậu Hoan</label>
                    <p class="subtitile">nguyenhoan122@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6178fb4d673abd092c4073ad&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Phạm Thị Diễm Tri</label>
                    <p class="subtitile">phamdiemtri809@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6178fd6d673abd092c4076e3&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Phòng Kinh tế thành phố</label>
                    <p class="subtitile">phongkinhtethixa@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6178ff30673abd092c407b83&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Lê Đình Trung</label>
                    <p class="subtitile">vpdpntmthaibinh@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=617903bc673abd092c409039&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Đào Huyền Trinh</label>
                    <p class="subtitile">daohuyentrinh@phuyen.gov.vn</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=617a6ab7673abd092c40acdd&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Ro Da Búp</label>
                    <p class="subtitile">fnnlamha.ld@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61930c55b4cf61135be2bb3a&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Văn phòng Điều phối nông thôn mới tỉnh Long An</label>
                    <p class="subtitile">vpdplongan@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61974e4cb4cf61135be2ced0&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Phòng Nông nghiệp và PTNT huyện Mỏ Cày Bắc</label>
                    <p class="subtitile">pnnptnt.mocaybac@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=619da65ab4cf61135be2df12&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Phòng Nông nghiệp và PTNT huyện Mộc Hóa</label>
                    <p class="subtitile">phongnnptntmh@longan.gov.vn</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61cd4ddeb221160f88c0a89b&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Phòng Kinh tế thành phố Bến Tre</label>
                    <p class="subtitile">phuong.lehoai.xd@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61cd511db221160f88c0a89d&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Phòng NN và PTNT huyện Chợ Lách</label>
                    <p class="subtitile">nongthonmoicholach@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61dcd7b8b221160f88c0a9f6&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="OCOP%20|%20Qua%CC%89n%20ly%CC%81%20ta%CC%80i%20khoa%CC%89n_files/new_IMG20210212151846.jpg" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Đặng Thị Duy Lan</label>
                    <p class="subtitile">dtdlan.ubhgt@bentre.gov.vn</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61dd3c66b221160f88c0a9fb&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Lê Thị Minh Hiền</label>
                    <p class="subtitile">ltmhien.tphue@thuathienhue.gov.vn</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61e63dc0b221160f88c0cedd&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Trần Văn Chính</label>
                    <p class="subtitile">tranvanchinhnd@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    
    <div class="col-md-3 mt-3">
        <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6204bce3b221160f88c0d2aa&amp;role=manager">
            <div class="divBor">
                <div style="padding: 24px;text-align:center">
                    <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                    <label class="nameMember">Dương Thị Mỹ trang</label>
                    <p class="subtitile">mytrang0507@gmail.com</p>
                    
                </div>
            </div>
        </a>
    </div>
    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: white;display: flex;padding: 24px;">
                        <div class="Rectangle">
                        </div>
                        <span class="SubHeading ">
                            Tài khoản hội đồng chấm
                        </span>
                    </div>
                    <div class="card-body row" id="councilAccounts" style="    padding: 24px;">
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f43b652af3d453ff69c9b71&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Vi Thanh Hoài</label>
                <p class="subtitile">hoaivt@sohoaocop.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f43b702af3d453ff69c9b72&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Bùi Trường Minh</label>
                <p class="subtitile">minhbt@sohoaocop.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f43b7bfcfe2e74154870f0e&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Đồng Quốc Thiều</label>
                <p class="subtitile">thieudq@sohoaocop.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f43b88bcfe2e74154870f13&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Đào Đức Huấn</label>
                <p class="subtitile">huandd@sohoaocop.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f43b996cfe2e74154870f18&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Trần Văn Môn</label>
                <p class="subtitile">montv@sohoaocop.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f43b9ebcfe2e74154870f1a&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Hoàng Linh</label>
                <p class="subtitile">linhnh@sohoaocop.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f43be146c9bec3d04799e0c&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Tô Thúy Nga</label>
                <p class="subtitile">ngatt@sohoaocop.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f43be259fac087e1f40647a&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Hùng Long</label>
                <p class="subtitile">longnh@sohoaocop.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f43befa9fac087e1f40647b&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Trần Nhật Lam</label>
                <p class="subtitile">lamtn@sohoaocop.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f4767c2bfa9f76b1f84469a&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Văn Ba</label>
                <p class="subtitile">Ba.amcvietnam@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f91267a0b1ea15dcc365b9d&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Minh Tiến</label>
                <p class="subtitile">tiennm.hdcn@sohoaocop.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f912f660b1ea15dcc36689a&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Trần Thanh Nam</label>
                <p class="subtitile">namtt.hdcn@sohoaocop.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f912fe20b1ea15dcc36689e&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Phan Ngân Sơn</label>
                <p class="subtitile">sonpn.hdcn@sohoaocop.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f91303d0b1ea15dcc3668a2&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Phạm Văn Duy</label>
                <p class="subtitile">duypv.hdcn@sohoaocop.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f9130a20b1ea15dcc3668a8&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Lê Văn Đức</label>
                <p class="subtitile">duclv.hdcn@sohoaocop.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f9130e90b1ea15dcc3668a9&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Văn An</label>
                <p class="subtitile">anhlb.hdcn@sohoaocop.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=5f9131ca0b1ea15dcc3668b8&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Hoàng Yến</label>
                <p class="subtitile">yennh.hdcn@sohoaocop.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61286daf74341401b7cbb626&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">KYC Test chấm TW</label>
                <p class="subtitile">testchamtw@kyc.net.vn</p>
                <p class="subtitile2">9 bộ hồ sơ được giao</p>
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6128a2d0627e378319029541&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">TRẦN LÂM DUY</label>
                <p class="subtitile">lamduytran1991@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=612d7f5d627e3783193a32df&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Phạm Tiến Lực</label>
                <p class="subtitile">phongnn.dateh@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=612d8f1a627e3783193ae001&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">NGUYỄN MINH TÙNG</label>
                <p class="subtitile">vpdpntmtayninh@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=612da5f1627e3783193be322&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Thị Mộng Thường</label>
                <p class="subtitile">ntmthuongptnt@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6130d828627e3783195f9883&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Võ Phát Triển</label>
                <p class="subtitile">hieudhkt1987@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6130d829627e3783195f989d&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Trương Thị Xuân Ngân</label>
                <p class="subtitile">ttxngan2020@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61358155627e37831991f093&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Lê Thị Ngọc Sương</label>
                <p class="subtitile">ngsuongle@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=613581b9627e37831991f520&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Thị Dung</label>
                <p class="subtitile">nguyendungpnn@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6135c038627e378319949c9f&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Hoàng Thị Minh Hương</label>
                <p class="subtitile">huonghoangppsd@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6136c223627e3783199f89e0&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">ĐINH THỊ MỸ LINH</label>
                <p class="subtitile">dinhthimylinh1978@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6136c3a2627e3783199f9a5f&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Thanh An</label>
                <p class="subtitile">thanhannguyen1202@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=613705f7627e378319a27681&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Van phong dieu phoi nong thon moi Dak To</label>
                <p class="subtitile">pnndakto@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=613715b4627e378319a32391&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Lê Văn Thử</label>
                <p class="subtitile">hophu.cuahangnongdanhue@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61382c8f627e378319aeee2a&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Thào Văn Quý</label>
                <p class="subtitile">phongktht1@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61387a41627e378319b245ad&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Hoàng Đình Kiểm</label>
                <p class="subtitile">hoanganhkiem1988@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61396e34627e378319bf32f3&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">LÝ MINH QUÝ</label>
                <p class="subtitile">conongtroi1406@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61396e69627e378319bf3673&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">VPĐP NTM Cao Bằng</label>
                <p class="subtitile">vanphongdieuphoicb@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=613b255b627e378319d339fc&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Trương Thanh Nam</label>
                <p class="subtitile">namdaolc@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=613ea5a6627e378319f90331&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Thị Hà</label>
                <p class="subtitile">nguyenthiha_myduc@hanoi.gov.vn</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61416efd627e378319178974&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Lê Đình Trung</label>
                <p class="subtitile">vpđpntmthaibinh@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61417191627e37831917b3c9&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Phùng Thị Kim Thoa</label>
                <p class="subtitile">phungkimthoa298@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=614299fc627e37831926acf7&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Tiến Đạt</label>
                <p class="subtitile">tiendatvb@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6142a311627e378319270fdd&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Thị Mỹ</label>
                <p class="subtitile">mynguyen25384@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6143068e627e3783192d1c4f&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Phạm Thu Trang</label>
                <p class="subtitile">phamthutrang7475@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6147f4bc627e3783196c3f7d&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Thị Thuý</label>
                <p class="subtitile">ocopvixuyen@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61484930627e37831971a5a3&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Trần Thị Thanh Hương</label>
                <p class="subtitile">pktsapa@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61493ae0627e3783197efb78&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Hà Linh</label>
                <p class="subtitile">halinh39cln@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61498e0f627e37831984d8be&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Hoàng Minh Nguyệt</label>
                <p class="subtitile">nguyethm.tp@backan.gov.vn</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=614a7f4d627e3783199329b8&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Thị Bé</label>
                <p class="subtitile">nthibe@tiengiang.gov.vn</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=614a7f51627e3783199329ee&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Hữu Phước</label>
                <p class="subtitile">vanphongj@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=614a7f56627e378319932a32&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Trần Lâm Duy</label>
                <p class="subtitile">lamduytran1109@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=614aff96627e3783199d261c&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Lê Văn Thử 2</label>
                <p class="subtitile">phongptnt53@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=614d7c790c6d6b30dcd4b46d&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">KYC Test chấm 2</label>
                <p class="subtitile">testchamtw2@kyc.net.vn</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6153e41c627e3783190d7d3c&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Phan Anh Tuấn</label>
                <p class="subtitile">anhtuankt36@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=615ac476627e37831959dd44&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Huyện Đông Anh</label>
                <p class="subtitile">dothanhhuyenda@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=616e7d55627e3783193e8a44&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Tống Quốc Khánh Dư</label>
                <p class="subtitile">pnngodau@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6177b6ee023517b21dfd6c29&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">y ly sa</label>
                <p class="subtitile">ylysa1988ktm@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6178fbc9023517b21d04c4ba&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Mậu Hoan</label>
                <p class="subtitile">nguyenhoan122@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6178fc92023517b21d04cde0&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Lê Đình Trung</label>
                <p class="subtitile">ledinhtrungtb@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6178fe0f023517b21d04da48&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Phòng Kinh tế thành phố</label>
                <p class="subtitile">phongkinhtethixa@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6178ff97023517b21d04e600&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Lê Đình Trung</label>
                <p class="subtitile">vpdpntmthaibinh@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=617904d6023517b21d0510f5&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Đào Huyền Trinh</label>
                <p class="subtitile">daohuyentrinh@phuyen.gov.vn</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=617907b1023517b21d05250a&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Tấn Thạnh</label>
                <p class="subtitile">nguyentanthanhphongnn@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61790834023517b21d0528e7&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Phạm Thị Diễm Tri</label>
                <p class="subtitile">phamdiemtri809@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61790836023517b21d0528f5&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Hữu Tiến</label>
                <p class="subtitile">nongthonmoibatri@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=617908dd023517b21d052df4&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Lê Văn Trung</label>
                <p class="subtitile">trungstsbt@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=617a69fe023517b21d0d251c&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Dương Thanh Thủy</label>
                <p class="subtitile">thanhduongthuy@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=617a6ae6023517b21d0d2b2e&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Nguyễn Thị Trà Phương</label>
                <p class="subtitile">traphuongptnt@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=617a6b32023517b21d0d2d3e&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Ro Da Búp</label>
                <p class="subtitile">fnnlamha.ld@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61974ebe023517b21dd0573b&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Phòng Nông nghiệp và PTNT huyện Mỏ Cày Bắc</label>
                <p class="subtitile">pnnptnt.mocaybac@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=619da6c2023517b21d14ebf6&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Phòng Nông nghiệp và PTNT huyện Mộc Hóa</label>
                <p class="subtitile">phongnnptntmh@longan.gov.vn</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61cd4fba023517b21ded0ce8&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Phòng Kinh tế thành phố Bến Tre</label>
                <p class="subtitile">phuong.lehoai.xd@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61cd517e023517b21ded2064&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Phòng NN và PTNT huyện Chợ Lách</label>
                <p class="subtitile">nongthonmoicholach@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61ced62b023517b21dfd8b17&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Trương Thị Loan</label>
                <p class="subtitile">loancckg@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61dcd977023517b21d94d38c&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Đặng Thị Duy Lan</label>
                <p class="subtitile">dtdlan.ubhgt@bentre.gov.vn</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61dffbe6023517b21db6b05b&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Lê Thị Minh Hiền</label>
                <p class="subtitile">ltmhien.tphue@thuathienhue.gov.vn</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=61e68c82023517b21dfd0f8e&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Trần Văn Chính</label>
                <p class="subtitile">tranvanchinhnd@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    
    <div class="col-md-3 mt-3">
     <a href="https://app.sohoaocop.com/accountmanagementdetail?idMember=6204bfa1023517b21da95609&amp;role=ex">
        <div class="divBor">
            <div style="padding: 24px;text-align:center">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
            </div>
            <div style="text-align: center;">
                <label class="nameMember">Dương Thị Mỹ trang</label>
                <p class="subtitile">mytrang0507@gmail.com</p>
                
            </div>
        </div>
     </a>
    </div>
    </div>
                </div>

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar ps ps--theme_default" data-ps-id="a617a838-8021-bab2-94d1-c2499d4ddd34">
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