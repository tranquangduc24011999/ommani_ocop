@extends('master')
@section('content')
<link href="{{ asset('css/wvprooinfo.css') }}" rel="stylesheet">
<style>
    .Rectangle-Copy {
        background-color: #039252;
    }

    a.disabled {
        pointer-events: none;
        cursor: default;
    }

    .role {
        padding: 9px;
        position: absolute;
        background-color: #049252;
        font-weight: 600;
        border-radius: 10px;
        font-family: sans-serif;
        right: 16%;
        bottom: 12px;
    }

    .role>a {
        color: white;
    }

    .role>a:hover {
        color: #fb9678;
    }

    .Ch-tch {
        font-weight: 700;
    }

    .page-titles {
        padding-left: 42px;
    }

    #swal2-content {
        font-family: sans-serif;
    }

    input {
        outline: none;
    }

    .group {
        position: relative;
        float: right;
    }

    input {
        padding: 10px 10px 10px 5px;
        display: block;
        width: 255px;
        border: none;
        border-bottom: 1px solid #dee2e6;
    }

    input:focus {
        outline: none;
    }

    /* LABEL ======================================= */
    .labelbuton {
        color: #999;
        font-size: 14px;
        font-weight: normal;
        position: absolute;
        pointer-events: none;
        left: 5px;
        top: 10px;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }

    /* active state */
    input:focus~label,
    input:valid~label {
        top: -20px;
        font-size: 14px;
        color: #039252;
    }

    /* BOTTOM BARS ================================= */
    .bar {
        position: relative;
        display: block;
        width: 255px;
    }

    .bar:before,
    .bar:after {
        content: '';
        height: 2px;
        width: 0;
        bottom: 0px;
        position: absolute;
        background: #039252;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }

    .bar:before {
        left: 50%;
    }

    .bar:after {
        right: 50%;
    }

    /* active state */
    input:focus~.bar:before,
    input:focus~.bar:after {
        width: 50%;
    }

    /* HIGHLIGHTER ================================== */
    .highlight {
        position: absolute;
        height: 60%;
        width: 100px;
        top: 25%;
        left: 0;
        pointer-events: none;
        opacity: 0.5;
    }

    /* active state */
    input:focus~.highlight {
        -webkit-animation: inputHighlighter 0.3s ease;
        -moz-animation: inputHighlighter 0.3s ease;
        animation: inputHighlighter 0.3s ease;
    }

    .Original {
        width: 16px;
        height: 16px;
        object-fit: contain;
        position: absolute;
        margin-top: 15px;
        margin-left: -18px;
        color: #dee2e6;
    }

    .nametitle {
        width: 322px;
        font-size: 16px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.29;
        letter-spacing: normal;
        color: #191935;
        font-family: 'Quicksand', sans-serif;
        margin-bottom: 5px;
    }

    .subtitile {
        width: 270px;
        height: 20px;
        font-size: 14px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.33;
        letter-spacing: normal;
        color: #6d7182;
        font-family: 'Quicksand', sans-serif;
    }
    .ectangle{
        min-height:95%;
        position: relative;
    }
    .content-button{
        padding-bottom: 10px;
        padding-left: 12px;
        padding-right: 12px;
        display: flex;
        justify-content: flex-end;
        position: absolute;
        bottom: 5px;
        width: 100%;
    }
    .titlesinfo{
        margin-bottom: 50px;
    }
</style>
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
    <h4 class="text-themecolor">Tham gia chủ thể</h4>
</div>
<div class="col-md-7 align-self-center text-right">
    <div class="d-flex justify-content-end align-items-center">
        <ol class="breadcrumb">
            <!-- <li class="breadcrumb-item"><a href="javascript:void(0)"> </a></li> -->
            <!-- <li class="breadcrumb-item active">Tham gia chủ thể</li> -->
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
            <div id="step1" class="col-md-12" style="margin-bottom: 20px;padding: 0;">
                <div class="row" style="background-color: #ffffff;width: 100%;margin: 0;border-radius: 24px;padding: 0;">
                    <div class="col-md-12" style="display: flex;padding: 24px;">
                        <div class="rec"></div>
                        <label class="SubHeading">CHỦ THỂ</label>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="group">
                                <a href="#"><img src="{{ asset('images/original.png') }}" srcset="{{ asset('images/original2x.png') }} 2x, {{ asset('images/original3x.png') }} 3x" class="Original"></a>
                                <input onchange="seach()" type="text" required="" id="seach" style="font-size: 14px;" placeholder="">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label class="labelbuton">Nhập tên chủ thể</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 row" id="listmembers" style="margin-top: 22px;padding-right: 0;">
<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">vinh test</span><br>
            
            
            <span class="subtitile">Ngày thêm: 6/15/2021 </span>
        </div>
    </div>
<div class="content-button">
        
    <div class="Rectangle-Copy" style="width:40%;background-color:#e9ecef;">
        <a href="#">
            <p style="color:#4f5467;margin-top:10px">Chưa xét duyệt</p>
        </a>
    </div>
    
 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">chủ thể test 2</span><br>
            
            
            <span class="subtitile">Ngày thêm: 6/15/2021 </span>
        </div>
    </div>
<div class="content-button">
        
    <div class="Rectangle-Copy" style="width:40%;background-color:#e9ecef;">
        <a href="#">
            <p style="color:#4f5467;margin-top:10px">Chưa xét duyệt</p>
        </a>
    </div>
    
 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">HTX Nông nghiệp</span><br>
            
            
            <span class="subtitile">Ngày thêm: 6/16/2021 </span>
        </div>
    </div>
<div class="content-button">
        
    <div class="Rectangle-Copy" style="width:40%;background-color:#e9ecef;">
        <a href="#">
            <p style="color:#4f5467;margin-top:10px">Chưa xét duyệt</p>
        </a>
    </div>
    
 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty Cổ phần rau sạch Tâm An</span><br>
            
            
            <span class="subtitile">Ngày thêm: 6/17/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60cabc65a8d69b0692238081','Công ty Cổ phần rau sạch Tâm An')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">HTX Nông nghiệp An Giang</span><br>
            
            
            <span class="subtitile">Ngày thêm: 6/17/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60cb191c82701f3b9690172b','HTX Nông nghiệp An Giang')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">HTX Nông nghiệp 1 thành viên</span><br>
            
            
            <span class="subtitile">Ngày thêm: 6/18/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60cc7760e3b6d54fe6a04cc5','HTX Nông nghiệp 1 thành viên')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">vinh chủ thể</span><br>
            
            
            <span class="subtitile">Ngày thêm: 6/22/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60d158a6f26c6200082389e6','vinh chủ thể')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Tổ hợp tác kinh doanh nông nghiệp A</span><br>
            
            
            <span class="subtitile">Ngày thêm: 6/22/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60d15a79cc21341c4987e17f','Tổ hợp tác kinh doanh nông nghiệp A')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">HTX Nông Nghiệp Mới</span><br>
            
            
            <span class="subtitile">Ngày thêm: 6/22/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60d18cf6a4afea1e6d77e0b5','HTX Nông Nghiệp Mới')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">HTX Nông Nghiệp 2021</span><br>
            
            
            <span class="subtitile">Ngày thêm: 6/22/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60d1a4cc4be1a426e47a5cc4','HTX Nông Nghiệp 2021')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Cong ty CP KYC</span><br>
            
            
            <span class="subtitile">Ngày thêm: 6/22/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60d1abba4be1a426e47a86e9','Cong ty CP KYC')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">a</span><br>
            
            
            <span class="subtitile">Ngày thêm: 6/24/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60d400507a8ab0423cfe6586','a')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">HTX Nông nghiệp An Phú</span><br>
            
            
            <span class="subtitile">Ngày thêm: 7/6/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60e3cfa082ce7b671af8dd48','HTX Nông nghiệp An Phú')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">HTX Nông sản xanh Ba Vì</span><br>
            
            
            <span class="subtitile">Ngày thêm: 7/7/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60e5281be4ce347aeace2f62','HTX Nông sản xanh Ba Vì')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Cong ty CP KYC TEST</span><br>
            
            
            <span class="subtitile">Ngày thêm: 7/12/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60ebb0f8f5a82f16daa3586a','Cong ty CP KYC TEST')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">HTX Nông nghiệp số</span><br>
            
            
            <span class="subtitile">Ngày thêm: 7/13/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60ed6b7e7b0e3d4bd7912bc3','HTX Nông nghiệp số')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">chủ thể bắc giang</span><br>
            
            
            <span class="subtitile">Ngày thêm: 7/14/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60ee5c3cdfe43d214cc99cf1','chủ thể bắc giang')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">chủ thể an giang</span><br>
            
            
            <span class="subtitile">Ngày thêm: 7/14/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60ee5ce3621c5618980dca7f','chủ thể an giang')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty CP Nông sản xanh</span><br>
            
            
            <span class="subtitile">Ngày thêm: 7/15/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60efddb377fe1f5990e01944','Công ty CP Nông sản xanh')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">HTX Nông nghiệp</span><br>
            
            
            <span class="subtitile">Ngày thêm: 7/15/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60efde2977fe1f5990e0194b','HTX Nông nghiệp')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Hộ kinh doanh Nguyễn Gia</span><br>
            
            
            <span class="subtitile">Ngày thêm: 7/15/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60efdebb77fe1f5990e01952','Hộ kinh doanh Nguyễn Gia')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">chu the linh</span><br>
            
            
            <span class="subtitile">Ngày thêm: 7/15/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60efdf1ba86c5d3a301a4a05','chu the linh')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty TNHH MTV</span><br>
            
            
            <span class="subtitile">Ngày thêm: 7/19/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60f530722341e945d0b0558c','Công ty TNHH MTV')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Doanh nghiệp A</span><br>
            
            
            <span class="subtitile">Ngày thêm: 7/22/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60f8c5c7f41a13673fd5ecba','Doanh nghiệp A')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Hộ KD Nguyễn Vân Anh</span><br>
            
            
            <span class="subtitile">Ngày thêm: 7/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('60ff715ecfea550cea41ff96','Hộ KD Nguyễn Vân Anh')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">HTX SXKD Dịch vụ thủy sản Hồng Tiến</span><br>
            
            
            <span class="subtitile">Ngày thêm: 7/29/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61026653703f6a3df95d8dd6','HTX SXKD Dịch vụ thủy sản Hồng Tiến')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">HỢP TÁC XÃ NÔNG NGHIỆP HỮU CƠ TÀM XÁ</span><br>
            
            
            <span class="subtitile">Ngày thêm: 8/16/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('611a2e9e401e8f18e75229b7','HỢP TÁC XÃ NÔNG NGHIỆP HỮU CƠ TÀM XÁ')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty cổ phần Hoàng Giang</span><br>
            
            
            <span class="subtitile">Ngày thêm: 8/17/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('611b601f401e8f18e75229d3','Công ty cổ phần Hoàng Giang')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">htx nn</span><br>
            
            
            <span class="subtitile">Ngày thêm: 8/17/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('611b85b8401e8f18e7522a23','htx nn')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">LÂM VĂN DẠY</span><br>
            
            
            <span class="subtitile">Ngày thêm: 8/20/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('611f06a4404a8b6606d63b4d','LÂM VĂN DẠY')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">CÔNG TY TNHH CÔNG NGHỆ THỰC PHẨM VIỆT ĐỨC</span><br>
            
            
            <span class="subtitile">Ngày thêm: 8/20/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('611fb689404a8b6606d63b64','CÔNG TY TNHH CÔNG NGHỆ THỰC PHẨM VIỆT ĐỨC')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">vương khương duy</span><br>
            
            
            <span class="subtitile">Ngày thêm: 8/25/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61257379404a8b6606d63ba1','vương khương duy')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">OCOP Hà Nội</span><br>
            
            
            <span class="subtitile">Ngày thêm: 8/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('612876cc74341401b7cbb62f','OCOP Hà Nội')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">DOANH NGHIỆP TƯ NHÂN</span><br>
            
            
            <span class="subtitile">Ngày thêm: 8/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6128b3e074341401b7cbb67d','DOANH NGHIỆP TƯ NHÂN')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty cổ phần Ameii Việt Nam - chi nhánh Hải Dương</span><br>
            
            
            <span class="subtitile">Ngày thêm: 8/30/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('612caf21a1f3a73db5997506','Công ty cổ phần Ameii Việt Nam - chi nhánh Hải Dương')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Phạm Văn Hậu</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/2/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6130a3b89402317562b74669','Phạm Văn Hậu')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Nguyễn Đình Bình</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/2/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6130ccf09402317562b74699','Nguyễn Đình Bình')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">CÔNG TY TNHH MTV NAM HUY ĐỒNG THÁP</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/2/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6130dbc99402317562b746c0','CÔNG TY TNHH MTV NAM HUY ĐỒNG THÁP')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">nguyễn thị gái</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/6/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6135c7b59402317562b74765','nguyễn thị gái')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty TNHH Thảo Dược Tây Nguyên</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/7/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6136d32b6d4c283fc6591d98','Công ty TNHH Thảo Dược Tây Nguyên')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty TNHH MTV Traphacosapa</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/13/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('613f11e24c09731a3b7fe9bd','Công ty TNHH MTV Traphacosapa')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty TNHH Dầu tằm tơ Mỹ Đức</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/13/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('613f27a34c09731a3b7fe9ca','Công ty TNHH Dầu tằm tơ Mỹ Đức')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty TNHH Traphacosapa</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/14/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('613ff9c14c09731a3b7fe9d2','Công ty TNHH Traphacosapa')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Nguyễn Văn Trung</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/16/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6142a79a4c09731a3b7fec6f','Nguyễn Văn Trung')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Hợp Tác Xã Nông Nghiệp Sông Hồng</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/16/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6142ff304c09731a3b7fecbd','Hợp Tác Xã Nông Nghiệp Sông Hồng')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Lê Văn Đực</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/16/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('614302b34c09731a3b7fecc3','Lê Văn Đực')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">CÔNG TY CỔ PHẦN BÁNH MỨT KẸO BẢO MINH</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/17/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61441d7ef02768153b559028','CÔNG TY CỔ PHẦN BÁNH MỨT KẸO BẢO MINH')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty cổ phần curcumin Bắc Hà Bắc Kạn</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/20/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6148373139b6b04cc66d1384','Công ty cổ phần curcumin Bắc Hà Bắc Kạn')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">HTX sản xuất chế biến và dịch vụ thực phẩm Hương vân Đạ Lây</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/21/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61493ae1bd84ee5affd65614','HTX sản xuất chế biến và dịch vụ thực phẩm Hương vân Đạ Lây')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">CTy TNHH TRÀ VINH FARM</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/21/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6149501cbd84ee5affd65669','CTy TNHH TRÀ VINH FARM')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công Ty TNHH Túi Việt Htvncrafts</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/21/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61499ee5bd84ee5affd669cf','Công Ty TNHH Túi Việt Htvncrafts')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Trần Quang Hiệp</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/22/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('614b2c066b297507d1e8e7a1','Trần Quang Hiệp')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty TNHH Chế Biến Dừa Sáp Cầu Kè</span><br>
            
            
            <span class="subtitile">Ngày thêm: 9/23/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('614ca3d69fa47a23129b743f','Công ty TNHH Chế Biến Dừa Sáp Cầu Kè')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">CÔNG TY CỔ PHẦN VINGIN</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/6/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('615d15ba6082b06a9d437510','CÔNG TY CỔ PHẦN VINGIN')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">CÔNG TY CỔ PHẦN VINGIN</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/7/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('615eb60a1a52da4b19efe0d8','CÔNG TY CỔ PHẦN VINGIN')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Hoàng Thị Điển</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/10/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('616231e6bba93a6a8d1b409c','Hoàng Thị Điển')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">HTX THƯƠNG MẠI VÀ DỊCH VỤ TOÀN DÂN</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/11/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6163b8f4bba93a6a8d1b40ed','HTX THƯƠNG MẠI VÀ DỊCH VỤ TOÀN DÂN')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Hợp Tác Xã Thanh Long Hàm Đức</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/23/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6173d349673abd092c406010','Hợp Tác Xã Thanh Long Hàm Đức')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty TNHH MTV SXTM VT Minh Hằng</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/25/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61767136673abd092c406047','Công ty TNHH MTV SXTM VT Minh Hằng')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty cổ phần Vingin</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/26/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61777192673abd092c4062ce','Công ty cổ phần Vingin')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Cơ sở sản xuất thực phẩm Nghị Được</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6178e769673abd092c4062fa','Cơ sở sản xuất thực phẩm Nghị Được')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty TNHH Sachi Nguyễn</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6178faf1673abd092c407390','Công ty TNHH Sachi Nguyễn')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">CÔNG TY TNHH SACHI NGUYỄN</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6178fb0e673abd092c40739b','CÔNG TY TNHH SACHI NGUYỄN')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">CÔNG TY TNHH HOÀNG ANH MACA</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6178fb4b673abd092c4073a9','CÔNG TY TNHH HOÀNG ANH MACA')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Hợp tác xã Nông nghiệp Hà Nội</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6178fb65673abd092c4073b1','Hợp tác xã Nông nghiệp Hà Nội')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">CÔNG TY THHH SACHI NGUYỄN</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6178fb75673abd092c4073b7','CÔNG TY THHH SACHI NGUYỄN')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">CÔNG TY CP KHOA HỌC CÔNG NGHỆ TẢO VN</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6178fb8a673abd092c4073bd','CÔNG TY CP KHOA HỌC CÔNG NGHỆ TẢO VN')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">HKD TP</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6178fb8a673abd092c4073c2','HKD TP')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Phước Thiên</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6178fb8e673abd092c4073c9','Phước Thiên')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Hợp tác xã Chè Phìn Hồ</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6178fbba673abd092c4073cf','Hợp tác xã Chè Phìn Hồ')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Tổ Hợp tác xã Cà Dy</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6178fbbb673abd092c4073d4','Tổ Hợp tác xã Cà Dy')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Thanh Nhãn Tư Thông</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6178fbd6673abd092c4073d9','Thanh Nhãn Tư Thông')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Hợp tác xã XXX</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6178feba673abd092c407b7c','Hợp tác xã XXX')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Chu Ngọc Chung</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6178ffca673abd092c407cbd','Chu Ngọc Chung')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty TNHH Du Hành Đại Hữu</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61790452673abd092c40903b','Công ty TNHH Du Hành Đại Hữu')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">HTX sx &amp; kd hàng nông sản Bốn Vân</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6179070a673abd092c409053','HTX sx &amp; kd hàng nông sản Bốn Vân')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Đỗ Thị Lãnh</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61790a08673abd092c40905e','Đỗ Thị Lãnh')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">TRẦN THỊ LỤA</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6179107c673abd092c40906d','TRẦN THỊ LỤA')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">CÔNG TY TNHH CA CAO TRỌNG ĐỨC</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6179175e673abd092c40aadf','CÔNG TY TNHH CA CAO TRỌNG ĐỨC')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Hợp tác xã Nông nghiệp - Sản xuất - Thương mại - Dịch vụ Thành Phương</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/29/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('617b9eed673abd092c40ae70','Hợp tác xã Nông nghiệp - Sản xuất - Thương mại - Dịch vụ Thành Phương')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">HTXNN xã Bích Hoà</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/29/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('617bab96673abd092c40aed3','HTXNN xã Bích Hoà')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công Ty Cổ Phần Đầu Tư Dừa Bến Tre</span><br>
            
            
            <span class="subtitile">Ngày thêm: 11/2/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6180e154673abd092c40b7e1','Công Ty Cổ Phần Đầu Tư Dừa Bến Tre')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">CÔNG TY TNHH MTV TRỊNH VĂN PHÚ</span><br>
            
            
            <span class="subtitile">Ngày thêm: 11/2/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6180fdb0673abd092c40b815','CÔNG TY TNHH MTV TRỊNH VĂN PHÚ')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty TNHH XNK Trái Cây Chánh Thu</span><br>
            
            
            <span class="subtitile">Ngày thêm: 11/12/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('618de3f6673abd092c40bb04','Công ty TNHH XNK Trái Cây Chánh Thu')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty TNHH Vĩnh Tiến</span><br>
            
            
            <span class="subtitile">Ngày thêm: 11/12/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('618e1126673abd092c40bb0a','Công ty TNHH Vĩnh Tiến')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Hộ kinh doan Trà hoa vàng</span><br>
            
            
            <span class="subtitile">Ngày thêm: 11/15/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61920980b4cf61135be2ba93','Hộ kinh doan Trà hoa vàng')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty TNHH sản xuất kinh doanh tổng hợp Đông Á</span><br>
            
            
            <span class="subtitile">Ngày thêm: 11/15/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61922764b4cf61135be2baf7','Công ty TNHH sản xuất kinh doanh tổng hợp Đông Á')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty TNHH chế biến dừa Cửu Long</span><br>
            
            
            <span class="subtitile">Ngày thêm: 11/16/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61936b8bb4cf61135be2ce11','Công ty TNHH chế biến dừa Cửu Long')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">cong ty tnhh thao duoc tay nguyen</span><br>
            
            
            <span class="subtitile">Ngày thêm: 11/23/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('619c389ab4cf61135be2de3c','cong ty tnhh thao duoc tay nguyen')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Lương Thị Mỹ Huệ</span><br>
            
            
            <span class="subtitile">Ngày thêm: 11/25/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('619f37e397ad5e499064f91b','Lương Thị Mỹ Huệ')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">lương thị huệ</span><br>
            
            
            <span class="subtitile">Ngày thêm: 11/25/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('619f4bc597ad5e499064fb8a','lương thị huệ')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Hằng Thuận Tây Nguyên</span><br>
            
            
            <span class="subtitile">Ngày thêm: 11/25/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('619f558d97ad5e4990650203','Hằng Thuận Tây Nguyên')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">HỢP TÁC XÃ THẢO DƯỢC CỘNG ĐỒNG A &amp; Y NGỌC YÊU</span><br>
            
            
            <span class="subtitile">Ngày thêm: 11/25/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('619f565697ad5e4990650208','HỢP TÁC XÃ THẢO DƯỢC CỘNG ĐỒNG A &amp; Y NGỌC YÊU')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Hợp tác xã Cao Thượng</span><br>
            
            
            <span class="subtitile">Ngày thêm: 11/25/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('619f94fd97ad5e499065020f','Hợp tác xã Cao Thượng')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">CHI NHÁNH CÔNG TY TNHH DPDL MỘC HOA TRÀM</span><br>
            
            
            <span class="subtitile">Ngày thêm: 11/30/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61a5866a97ad5e4990650286','CHI NHÁNH CÔNG TY TNHH DPDL MỘC HOA TRÀM')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">CÔNG TY TNHH NÔNG SẢN HUY HIẾU</span><br>
            
            
            <span class="subtitile">Ngày thêm: 12/21/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61c1502097ad5e4990650c96','CÔNG TY TNHH NÔNG SẢN HUY HIẾU')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty TNHH TM &amp; DV Sao Vàng Macca</span><br>
            
            
            <span class="subtitile">Ngày thêm: 12/21/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61c1a75597ad5e4990650ce6','Công ty TNHH TM &amp; DV Sao Vàng Macca')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">CÔNG TY TNHH SẢN XUẤT VÀ KINH DOANH NƯỚC MẮM THANH QUỐC</span><br>
            
            
            <span class="subtitile">Ngày thêm: 12/31/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61cebbd8b221160f88c0a8c9','CÔNG TY TNHH SẢN XUẤT VÀ KINH DOANH NƯỚC MẮM THANH QUỐC')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Hộ kinh doanh Lê Thị Kim Yến</span><br>
            
            
            <span class="subtitile">Ngày thêm: 1/12/2022 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61de2e86b221160f88c0b1ec','Hộ kinh doanh Lê Thị Kim Yến')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty cổ phần Cucurmin Bắc Hà Bắc Kạn</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/19/2020 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('5f8d15ee34f6471e63fe6d39','Công ty cổ phần Cucurmin Bắc Hà Bắc Kạn')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty cổ phần nông sản Bắc Kạn</span><br>
            
            
            <span class="subtitile">Ngày thêm: 10/27/2021 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('6179251e56185b61e098a699','Công ty cổ phần nông sản Bắc Kạn')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty TNHH Sản xuất và Thương mại YesHue</span><br>
            
            
            <span class="subtitile">Ngày thêm: 1/19/2022 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('61e79d44b221160f88c0cefb','Công ty TNHH Sản xuất và Thương mại YesHue')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Hộ kinh doanh Trần Minh Tâm</span><br>
            
            
            <span class="subtitile">Ngày thêm: 2/16/2022 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('620ca8deb221160f88c0e806','Hộ kinh doanh Trần Minh Tâm')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty TNHH dược liệu Vũ Gia</span><br>
            
            
            <span class="subtitile">Ngày thêm: 2/22/2022 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('62149237b221160f88c11700','Công ty TNHH dược liệu Vũ Gia')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>

<div class="col-md-4">
   <div class="ectangle">
        <div class="titlesinfo" style="width:100%;display: flex;">
            <div style=" margin-right: 14px;">
                <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%" width="64px" height="64px">
            </div>
        <div style="  overflow: auto;">
            <span class="nametitle">Công ty sản xuất thực phẩm MTP</span><br>
            
            
            <span class="subtitile">Ngày thêm: 3/15/2022 </span>
        </div>
    </div>
<div class="content-button">
        
<div class="Rectangle-Copy" style="width:30%">
    <a href="#" onclick="saveentiy('62306c28910d6b236160f0b4','Công ty sản xuất thực phẩm MTP')">
        <p style="color:white;margin-top:10px">Tham gia</p>
    </a>
</div>

 </div>
</div>
</div>
</div>
                </div>
            </div>
            <div id="step2" class="col-md-12" style="padding: 0;display: none;">
                <div class="row" style="background-color: #ffffff;width: 100%;margin: 0;border-radius: 24px;padding: 0;">
                    <div class="col-md-12" style="display: flex;padding: 24px;">
                        <div class="rec"></div>
                        <label class="SubHeading ">HỒ SƠ</label>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <!-- <label for="nameGroup" class="Lable" id="Namegroup">Tên hội đồng</label> -->
                            <a href="#"><img src="OCOP%20|%20Tham%20gia%20chu%CC%89%20the%CC%82%CC%89_files/original.png" srcset="OCOP%20|%20Tham%20gia%20chu%CC%89%20the%CC%82%CC%89_files/original2x.png 2x, OCOP%20|%20Tham%20gia%20chu%CC%89%20the%CC%82%CC%89_files/original3x.png 3x" class="Original"></a>
                            <input onchange="seachProduct()" style="padding-left: 43px;max-width: 49%;" type="text" class="form-control input" id="seachproduct" placeholder="Nhập tên hồ sơ">
                            <select onchange="seachProduct()" style="max-width: 49%;" type="text" class="form-control input" id="seachproductselect">
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
                    <div class="col-md-12" style="margin-bottom: 21px;">
                        <a href="#" class="btn btn-secondary" style="width: 48%;" onclick="backstep(2)">Quay
                            lại</a>
                        <a href="#" class="btn btn-success" style="width: 48%;" onclick="sendMess()">Gửi lời
                            mời</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar ps ps--theme_default" data-ps-id="f2d00e72-244a-1f0a-58b5-1186538a8a1e">
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