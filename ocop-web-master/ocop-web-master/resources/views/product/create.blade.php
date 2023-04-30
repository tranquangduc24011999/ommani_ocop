@extends('mastersecond')
@section('content')
<div class="container-fluid mt-3">
    <div id="main-wrapper" class="mt-5">
        <div class="container-fluid mt-3">
            <div class="text-center">
                <h4><b>Phiếu thu thập thông tin</b></h4>
            </div>

            <div class="container">

                <div>
                        <div class="row">
                            <div class="col-12 text-center mt-3">
                                <h5><b>THÔNG TIN CHỦ THỂ</b></h5>
                            </div>
                            <div class="mt-3">
                                <!-- <div class="col-md-12"> -->
                                <div id="entitySection">
                                    <div class="form-material row">
                                        <div class="form-group col-6" style="padding-left: 0;">
                                            <b class="control-label mt-3">TÊN CHỦ THỂ</b>
                                            <input maxlength="100" id="txtName" type="text" class="form-control input-s"
                                                placeholder=" " value="{!! $entity->name!!}" disabled>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <b class="mt-3">LOẠI HÌNH ĐƠN VỊ</b>
                                            <select id="txtTypeAdress" class="form-control input-s">
                                                {{-- <option value="1">Doanh nghiệp</option>
                                                <option value="2">Hợp tác xã</option>
                                                <option value="3" selected="selected">Tổ hợp tác</option>
                                                <option value="4">Hộ kinh doanh cá thể</option> --}}
                                                @foreach($unitTypes as $item)
                                                <option value="{!! $item->id !!}" {{ ($entity['unit_id']==$item->id) ? '
                                                    selected=selected' : '' }} disabled>{!! $item->name!!}</option>
                                                @endforeach
                                            </select>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="form-group row" id="THX">
                                        <div class="col-md-4">
                                            <b class="mt-3">TỈNH/TP</b>
                                            <input name="province" id="province" value="{!! $entity->province_id
                                                !!}" hidden/>
                                            <span class="select2 select2-container select2-container--default" dir="ltr"
                                                data-select2-id="1" style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single" role="combobox"
                                                        aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                        aria-labelledby="select2-cboProvincial-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-cboProvincial-container" role="textbox"
                                                            aria-readonly="true" title="{!! $entity->province
                                                                !!}">{!! $entity->province
                                                            !!}</span><span class="select2-selection__arrow"
                                                            role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            <br><br>
                                        </div>
                                        <div class="col-md-4">
                                            <b class="mt-3">QUẬN/HUYỆN </b>
                                            <input name="district" id="district" value="{!! $entity->district_id
                                                !!}" hidden/>
                                            <select class="form-control select2-hidden-accessible" style="width: 100%"
                                                name="cboDistricts" id="cboDistricts" data-select2-id="cboDistricts"
                                                tabindex="-1" aria-hidden="true">
                                            </select><span class="select2 select2-container select2-container--default"
                                                dir="ltr" data-select2-id="3" style="width: 100%;"><span
                                                    class="selection"><span
                                                        class="select2-selection select2-selection--single" role="combobox"
                                                        aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                        aria-labelledby="select2-cboDistricts-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-cboDistricts-container" role="textbox"
                                                            aria-readonly="true" title="{!! $entity->district
                                                                !!}">{!! $entity->district
                                                                !!}</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            <br><br>
                                        </div>
                                        <div class="col-md-4">
                                            <b class="mt-3">PHƯỜNG/XÃ</b>
                                            <input name="ward" id="ward" value="{!! $entity->ward_id
                                                !!}" hidden/>
                                            <select class="form-control select2-hidden-accessible" style="width: 100%"
                                                name="cboWards" id="cboWards" data-select2-id="cboWards" tabindex="-1"
                                                aria-hidden="true">
                                            </select><span class="select2 select2-container select2-container--default"
                                                dir="ltr" data-select2-id="4" style="width: 100%;"><span
                                                    class="selection"><span
                                                        class="select2-selection select2-selection--single" role="combobox"
                                                        aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                        aria-labelledby="select2-cboWards-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-cboWards-container" role="textbox"
                                                            aria-readonly="true" title="{!! $entity->ward
                                                                !!}">{!! $entity->ward
                                                                !!}</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center mt-3">
                                        <h5><b>THÔNG TIN SẢN PHẨM</b></h5>
                                    </div>
                                    <div class="mt-3">
                                        <div class="form-material row">
                                            <div class="form-group col-md-6">
                                                <b class="mt-3">BỘ SẢN PHẨM ĐĂNG KÝ</b>
                                                <select id="productType" name="productType" class="form-control">
                                                    <option value="0" selected="selected">Chọn</option>
                                                    @foreach($productTypes as $item)
                                                    <option value="{!! $item->id !!}">{!! $item->name!!}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <b class="mt-3">TÊN SẢN PHẨM</b>
                                                <input type="text" id="productName" name="productName"
                                                    class="form-control form-control-line pl-3" placeholder=" ">
                                                <br><br>
                                            </div>
                                            <div class="form-group col-md-6"></div>
                                            <div class="form-group col-md-6">
                                                <b class="mt-3">MÃ SẢN PHẨM</b>
                                                <div name="form-control form-control-line" style="width: 100%; height: 38px; background-color: #f3f3f3 !important; display: flex; align-items: center; padding: 0 12px; font-size: 14px; color: #495057; border-radius: 0.6rem;">
                                                    <span id="provinceCode">{!!$province->code_int!!}-</span>
                                                    <span id="districtCode">{!!$district->code!!}-</span>
                                                    <input type="text" id="productCount" name="productCount" style="width: 35px; height: 20px; border-top: none; border-right: none; border-left: none;  border-bottom: 1px solid #000; border-radius: 0 !important; background: transparent !important;" placeholder=" ">
                                                    <span id="year">-{!!$year!!}</span>
                                                </div>
                                                <br><br>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <b class="mt-3">ẢNH SẢN PHẨM</b>
                                                <div method="post" enctype="multipart/form-data">
                                                    <input type="text" id="pimage" name="pimage" hidden/>
                                                    <div class="dropzone dz-clickable" id="mydropzone">
                                                        <div class="dropzone-previews" id="DataDrop"></div>
                                                        <div class="dz-default dz-message"><span><span
                                                                    style="font-weight: 600;font-family: sans-serif; color: #039252"><i
                                                                        class="fas fa-cloud-upload-alt fa-5x"></i><br> Chọn
                                                                    ảnh</span><i class="fa fa-folders"></i></span></div>
                                                    </div>
                                                </div>
                                                <br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center container mt-3 mb-3">
                                    <button id="complete3Steps" onclick="saveProduct()"
                                        class="btn btn-lg btn-block" style="background-color: #039252; color: white;">
                                        Hoàn thành
                                    </button>
                                    <button id="EditStep" onclick="saveInformation('update')" class="btn btn-lg btn-block"
                                        style="background-color: #039252; color: white;display: none" disabled="disabled">
                                        Lưu
                                    </button>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    <div class="row setup-content" id="step-3" style="display: none;">
                        <div class="text-center container mt-3 mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-lg btn-block previousBtn"
                                        style="background-color: #275641; color: white;">
                                        Quay lại
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button id="complete3Steps" onclick="saveInformation()" class="btn btn-lg btn-block"
                                        style="background-color: #039252; color: white;">
                                        Hoàn thành
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()
