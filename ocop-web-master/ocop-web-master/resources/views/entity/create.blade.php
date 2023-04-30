@extends('mastersecond')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-fluid mt-3">
    <div id="main-wrapper" class="mt-5">
        <div class="container-fluid mt-3">
            <div class="text-center">
                <h4><b>Phiếu thu thập thông tin</b></h4>
            </div>

            <div class="container">
                <div>
                    @include('blocks.result')
                    <form action="{!! route('postCreateEntity') !!}" method="POST" enctype="multipart/form-data" class="form-material">
                        {{ csrf_field() }}
                        @include('blocks.errors')
                    <div class="row">
                        <div class="col-12 text-center mt-3">
                            <h5><b>THÔNG TIN CHỦ THỂ</b></h5>
                        </div>
                        <div class="mt-3">
                            <!-- <div class="col-md-12"> -->
                            <div id="entitySection">
                                <div class="row">
                                    <div class="form-group col-6" style="padding-left: 0;">
                                        <b class="control-label mt-3">TÊN CHỦ THỂ</b>
                                        <input maxlength="100" id="txtName" name="txtName" type="text" class="form-control input-s"
                                            placeholder=" ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <b class="mt-3">LOẠI HÌNH ĐƠN VỊ</b>
                                        <select id="txtTypeAdress" name="txtTypeAdress" class="form-control input-s">
                                            <option value="0" selected="selected">Chọn</option>
                                            @foreach($unitTypes as $item)
                                            <option value="{!! $item->id !!}">{!! $item->name!!}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                    </div>
                                </div>
                                <div class="form-group row" id="THX">
                                    <div class="col-md-4">
                                        <b class="mt-3">TỈNH/TP</b>
                                        <select class="form-control input-s" style="width: 100%" name="cboPos"
                                            id="cboProvincial">

                                            <option value="0" selected="selected">Chọn</option>
                                            @foreach($provinces as $item)
                                            <option value="{!! $item->id !!}">{!! $item->name !!}</option>
                                            @endforeach
                                        </select>

                                        <br><br>
                                    </div>
                                    <div class="col-md-4">
                                        <b class="mt-3">QUẬN/HUYỆN </b>
                                        <select class="form-control" style="width: 100%"
                                            name="cboDistricts" id="cboDistricts" data-select2-id="cboDistricts">
                                        </select>
                                        <br><br>
                                    </div>
                                    <div class="col-md-4">
                                        <b class="mt-3">PHƯỜNG/XÃ</b>
                                        <select class="form-control" style="width: 100%"
                                            name="cboWards" id="cboWards">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-12 text-center mt-3">
                                    <h5><b>THÔNG TIN SẢN PHẨM</b></h5>
                                </div>
                                <div class="mt-3">
                                    <div class="form-material row">
                                        <div class="form-group col-md-6">
                                            <b class="mt-3">BỘ SẢN PHẨM ĐĂNG KÝ</b>
                                            <select id="productType" class="form-control">
                                                <option value="5e4f86607a80891424175fce" selected="selected">
                                                    &nbsp;&nbsp;Chè tươi, chế biến</option>
                                                <option value="5e4f86607a80891424175fc8">&nbsp;&nbsp;Chế biến từ gạo,
                                                    ngũ cốc</option>
                                                <option value="5e4f86607a80891424175fc9">&nbsp;&nbsp;Chế biến từ rau,
                                                    củ, quả, hạt</option>
                                                <option value="5e4f86607a80891424175fca">&nbsp;&nbsp;Chế biến từ thịt,
                                                    trứng, sữa</option>
                                                <option value="5e4f86607a80891424175fcb">&nbsp;&nbsp;Chế biến từ thủy,
                                                    hải sản</option>
                                                <option value="5e4f86607a80891424175fb9">&nbsp;&nbsp;Cà phê, Ca cao
                                                </option>
                                                <option value="5e4f86607a80891424175fcf">&nbsp;&nbsp;Các sản phẩm khác
                                                    từ chè, trà</option>
                                                <option value="5e4f86607a80891424175fc2">&nbsp;&nbsp;Dịch vụ du lịch
                                                    cộng đồng và điểm du lịch</option>
                                                <option value="5e4f86607a80891424175fcd">&nbsp;&nbsp;Gia vị khác
                                                </option>
                                                <option value="5e4f86607a80891424175fc5">&nbsp;&nbsp;Gạo, ngũ cốc
                                                </option>
                                                <option value="5e4f86607a80891424175fc6">&nbsp;&nbsp;Mật ong, các sản
                                                    phẩm từ mật ong, mật khác</option>
                                                <option value="5e4f86607a80891424175fbd">&nbsp;&nbsp;Mỹ phẩm</option>
                                                <option value="5e4f86607a80891424175fb2">&nbsp;&nbsp;NGÀNH VẢI, MAY MẶC
                                                </option>
                                                <option value="5e4f86607a80891424175fd2">&nbsp;&nbsp;Nước khoáng thiên
                                                    nhiên, nước uống tinh khiết</option>
                                                <option value="5e4f86607a80891424175fc3">&nbsp;&nbsp;Rau, củ, quả, hạt
                                                    tươi</option>
                                                <option value="5e4f86607a80891424175fd0">&nbsp;&nbsp;Rượu trắng</option>
                                                <option value="5e4f86607a80891424175fbf">&nbsp;&nbsp;Thảo dược khác
                                                </option>
                                                <option value="5e4f86607a80891424175fc4">&nbsp;&nbsp;Thịt, trứng, sữa
                                                    tươi</option>
                                                <option value="5e4f86607a80891424175fc1">&nbsp;&nbsp;Thủ công mỹ nghệ
                                                    gia dụng</option>
                                                <option value="5e4f86607a80891424175fc0">&nbsp;&nbsp;Thủ công mỹ nghệ,
                                                    trang trí</option>
                                                <option value="5e4f86607a80891424175fbc">&nbsp;&nbsp;Thực phẩm chức
                                                    năng, thuốc từ dược liệu, thuốc Y học cổ truyền</option>
                                                <option value="5e4f86607a80891424175fbe">&nbsp;&nbsp;Trang thiết bị,
                                                    dụng cụ y tế</option>
                                                <option value="5e4f86607a80891424175fcc">&nbsp;&nbsp;Tương, nước mắm,
                                                    gia vị dạng lỏng khác</option>
                                                <option value="5e4f86607a80891424175fd1">&nbsp;&nbsp;Đồ uống có cồn khác
                                                </option>
                                                <option value="5e4f86607a80891424175fd3">&nbsp;&nbsp;Đồ uống không cồn
                                                </option>
                                                <option value="5e4f86607a80891424175fc7">&nbsp;&nbsp;Đồ ăn nhanh
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <b class="mt-3">TÊN SẢN PHẨM</b>
                                            <input type="text" id="productName" name="productName"
                                                class="form-control form-control-line pl-3" placeholder=" ">
                                            <br><br>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <b class="mt-3">ẢNH SẢN PHẨM</b>
                                            <form method="post" enctype="multipart/form-data">
                                                <div class="dropzone dz-clickable" id="mydropzone">
                                                    <div class="dropzone-previews" id="DataDrop"></div>
                                                    <div class="dz-default dz-message"><span><span
                                                                style="font-weight: 600;font-family: sans-serif; color: #039252"><i
                                                                    class="fas fa-cloud-upload-alt fa-5x"></i><br> Chọn
                                                                ảnh</span><i class="fa fa-folders"></i></span></div>
                                                </div>
                                            </form>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="text-center container mt-3 mb-3">
                                <button type="submit"
                                    class="btn btn-lg btn-block" style="background-color: #039252; color: white;">
                                    Hoàn thành
                                </button>
                                {{-- <button id="EditStep" onclick="saveInformation('update')" class="btn btn-lg btn-block"
                                    style="background-color: #039252; color: white;display: none" disabled="disabled">
                                    Lưu
                                </button> --}}
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>

                    {{-- <div class="row setup-content" id="step-3" style="display: none;">
                        <div class="text-center container mt-3 mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-lg btn-block previousBtn"
                                        style="background-color: #275641; color: white;">
                                        Quay lại
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button id="complete3Steps" type="submit" class="btn btn-lg btn-block"
                                        style="background-color: #039252; color: white;">
                                        Hoàn thành
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#cboProvincial').on('change', function() {
            var province_id = this.value;
            $("cboDistricts").html('');
            $.ajax({
                url:"{{url('getdistrictbyprovince')}}",
                type: "POST",
                data: {
                    province_id: province_id,
                    _token: '{{csrf_token()}}' 
                },
                dataType : 'json',
                success: function(result){
                    $('#cboDistricts').html('<option value="0">Chọn</option>'); 
                    $.each(result,function(key,value){
                    $("#cboDistricts").append('<option value="'+value.id+'">'+value.name+'</option>');
                    });
                    $('#city-dropdown').html('<option value="">Select State First</option>'); 
                }
            });
        });    
        $('#cboDistricts').on('change', function() {
            var district_id = this.value;
            $("#cboWards").html('');
            $.ajax({
                url:"{{url('getwardbydistrict')}}",
                type: "POST",
                data: {
                    district_id: district_id,
                    _token: '{{csrf_token()}}' 
                },
                dataType : 'json',
                success: function(result){
                    $('#cboWards').html('<option value="0">Chọn</option>'); 
                    $.each(result,function(key,value){
                    $("#cboWards").append('<option value="'+value.id+'">'+value.name+'</option>');
                    });
                }
            });
        });
    });
</script>
@endsection()