@extends('master')
@section('content')
<link href="{{ asset('css/wvprooinfo.css') }}" rel="stylesheet">
<link href="{{ asset('css/evaluationset.css') }}" rel="stylesheet">
<link href="{{ asset('css/evaluationStyle.css') }}" rel="stylesheet">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css">
<style>
    .tootip {
        position: absolute;
        background-color: #049252;
        padding: 10px;
        border: 1px solid #e4e0e0;
        border-radius: 5px;
        top: 149px;
        z-index: 999;
        opacity: 1;
        color: white;
        display: none;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        float: left;
        margin-right: 4px;
        margin-left: 0px
    }

    .select2-container--default .select2-selection--multiple {
        max-height: 200px;
        overflow: scroll;
    }

    @media (min-width: 800px) {
        #Additionally {
            display: grid;
            grid-template-columns: auto auto;
        }
    }

    ul li {
        list-style: none;
    }


    /* .dropzone.dz-clickable {
pointer-events: none;
cursor: default;
} */
    input {
        pointer-events: none;
        cursor: default;
    }

    .spinner {
        position: inherit;
    }

    .dropzone .dz-preview .dz-image img {
        width: 100% !important;
    }

    /* .dropzone.dz-started .dz-message{
display: block!import;
} */
    .dropzone.dz-clickable {
        max-height: 426px;
        overflow: scroll;
    }

    ::-webkit-scrollbar {
        width: 2px;
        height: 0px;
    }



    .dropzone.dz-clickable {
        max-height: 342px;
        overflow: scroll;
    }

    .modal-header {
        padding: 6px 17px;
    }

    .dropzone.dz-clickable .dz-message {
        padding: 0;
        margin: 4px;
        margin-top: 16px;
    }

    .dropzone {
        min-height: auto;
    }

    .dropzone.dz-clickable {
        height: 130px;
    }

    .dropzone .dz-preview .dz-image {
        width: 100px;
        margin-top: -26px;
        height: 100px;
    }

    .modal-header {
        border-bottom: none;
    }

    .textDes {
        font-size: 14px;
        font-weight: 500;
        /* margin-top: 10px; */
        max-height: 79px;
        overflow: auto;
        color: black;
        /* text-align: center; */
    }

    .textDesQueto {
        font-size: 14px;
        font-weight: 500;
        margin-top: 10px;
        max-height: 100px;
        overflow: auto;
        color: black;
    }

    .modal {
        overflow: auto
    }

    a.disabled {
        pointer-events: none;
        cursor: default;
    }

    .imgava {
        width: 48px;
        height: 48px;
        border-radius: 10%;
    }

    .text-member {
        font-family: 'Quicksand', sans-serif;
    }

    .text-title-Status {
        color: #049252;
        font-style: italic;
        font-size: 13px;
    }

    .animation-bell {
        left: -23px;
        top: -1px;
        position: absolute;
        height: 25px;
        width: 25px;
        z-index: 10;
        border: 5px solid #fd9600;
        border-radius: 70px;
        -moz-animation: heartbit 1s ease-out;
        -moz-animation-iteration-count: infinite;
        -o-animation: heartbit 1s ease-out;
        -o-animation-iteration-count: infinite;
        -webkit-animation: heartbit 1s ease-out;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
    }

    .animation-point {
        width: 6px;
        height: 6px;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        border-radius: 30px;
        background-color: #fd9600;
        position: absolute;
        left: -14px;
        top: 8px;
    }

    .animation-notify-bell {
        position: relative;
    }

    /* ********** Evalueset css *********** */
    .fa-plus {
        font-size: 9px;
        position: absolute;
        color: #ffffff;
        left: 14px;
        margin-top: 6px;
    }

    .titlesinfo {
        width: 90%;
    }

    .tootip {
        position: absolute;
        background-color: #049252;
        padding: 10px;
        border: 1px solid #e4e0e0;
        border-radius: 5px;
        top: 163px;
        left: 1px;
        z-index: 999;
        opacity: 1;
        color: white;
        display: none;
    }

    ::-webkit-scrollbar {
        width: 1px;
    }

    .chat-list {
        overflow: auto;
    }

    .modal-header {
        padding: 4px 11px;
        border-bottom: 0
    }

    .deleteImgQuote {
        display: none;
    }

    .ui-autocomplete {
        z-index: 1100;
        background-color: #e1ecf7;
        border: thin;
        width: 15rem;
    }

    .divComment {
        position: absolute;
        right: 38px;
        margin-top: -33px;
        width: 34px;
        background-color: #eff0f1;
        height: 30px;
        border-radius: 8px;
    }

    #img_product>canvas {
        margin-right: 10px;
        border-radius: 12px;
    }

    .text-success {
        position: initial;
        right: 0;
        font-size: 101px;
        margin-top: 10px;
        margin-left: 10px;
    }

    .imgupload {
        height: 80px;
        width: 80px;
        padding: 10px;
        margin-top: 10px;
        background-color: #eff0f1;
        border-radius: 20px;
        clear: right;
        float: left;
    }

    .actionsBoxOpen .action-button-content {
        height: 430px;
    }

    .modal iframe {
        width: 100%;
    }

    .input {
        height: 46px;
        border-radius: 8px;
        /* background-color: #eff0f1; */
    }

    .rowContent {
        display: flex;
        padding-top: 24px;
        padding-bottom: 24px;
    }

    .col-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .imgava {
        width: 48px;
        height: 48px;
        width: 48px;
        height: 48px;
        border-radius: 100%;
    }

    .title {
        width: 100%;
        height: 32px;
        font-family: 'Quicksand', sans-serif;
        font-size: 24px;
        font-weight: bold;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.33;
        letter-spacing: normal;
        text-align: center;
        color: #191935;
    }

    .Note-Copy {
        width: 100%;
        height: 20px;
        font-family: 'Quicksand', sans-serif;
        font-size: 15px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.33;
        letter-spacing: normal;
        text-align: center;
        color: #6d7182;
    }

    .form-group {
        margin-bottom: 16px;
    }

    .Original {
        width: 16px;
        height: 16px;
        object-fit: contain;
        position: absolute;
        margin-top: 16px;
        margin-left: 12px;
    }

    .rounds {
        position: relative;
    }

    .rounds label {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 50%;
        cursor: pointer;
        height: 28px;
        left: 0;
        position: absolute;
        top: 0;
        width: 28px;
    }

    .rounds label:after {
        border: 2px solid #fff;
        border-top: none;
        border-right: none;
        content: "";
        height: 6px;
        left: 7px;
        opacity: 0;
        position: absolute;
        top: 8px;
        transform: rotate(-45deg);
        width: 12px;
    }

    .rounds input[type="checkbox"] {
        visibility: hidden;
    }

    .rounds input[type="checkbox"]:checked+label {
        background-color: #049252;
        border-color: #049252;
    }

    .rounds input[type="checkbox"]:checked+label:after {
        opacity: 1;
    }

    .chat-list {
        flex-wrap: wrap;
        margin-right: 0px;
        margin-left: 0px;
    }

    /* .evaluationTooltip {
            position: relative;
            display: inline-block;
    } */

    /* .evaluationTooltip .evaluationTooltipText {
            visibility: hidden;
            width: 120px;
            background-color: #fd9600;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            top: 150%;
            left: 50%;
            margin-left: -60px;
    }

    .evaluationTooltip .evaluationTooltipText::after {
            content: "";
            position: absolute;
            bottom: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: transparent transparent #fd9600 transparent;
    } */

    .textTileUpProof {
        font-size: 14px;
        font-weight: 500;
        max-height: 79px;
        overflow: auto;
        color: #767989;
        padding: 6px;
        padding-bottom: 22px;

    }

    /* .evaluationTooltip:hover .evaluationTooltipText {
            visibility: visible;
    } */

    .text-title-Status {
        color: #049252;
        font-style: italic;
        font-size: 13px;
    }

    .animation-bell {
        left: -23px;
        top: -1px;
        position: absolute;
        height: 25px;
        width: 25px;
        z-index: 10;
        border: 5px solid #fd9600;
        border-radius: 70px;
        -moz-animation: heartbit 1s ease-out;
        -moz-animation-iteration-count: infinite;
        -o-animation: heartbit 1s ease-out;
        -o-animation-iteration-count: infinite;
        -webkit-animation: heartbit 1s ease-out;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
    }

    .animation-point {
        width: 6px;
        height: 6px;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        border-radius: 30px;
        background-color: #fd9600;
        position: absolute;
        left: -14px;
        top: 8px;
    }

    .animation-notify-bell {
        position: relative;
    }

    .animation-tooltip {
        width: auto;
        border-radius: 3px;
        border: 1px solid gray;
        position: absolute;
        background-color: #049252;
        color: white;
        top: -25px;
        padding: 0px 17px;
    }

    .opacity-0 {
        opacity: 0.5 !important;
        /* display: none; */
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
                <h4 class="text-themecolor">Nộp minh chứng</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li> -->
                        <!-- <li class="breadcrumb-item active">Nộp minh chứng</li> -->
                    </ol>
                </div>
            </div>
        </div> <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Info box Content -->
        <!-- ============================================================== -->
        <div class="row pl-3" style="margin-bottom: 19px;" id="headerFile">
            <div class="col-8" style="padding: 0;    display: flex;">
                <img src="{!! $product->image!!}" alt="user" class="img-circle"
                    style="margin-top: 10px;margin-right: 21px;width: 62px;height: 62px;">
                <div class="mail-contnet" style="padding-top: 10px;width:100%">
                    <h5 class=".Text-proofTitile">{!! $product->name !!}</h5>
                    <span class="mail-desc">Tên chủ thể: {!! $entity->name !!}</span><br>
                    <span class="mail-desc">Mã sản phẩm : {!! $product->code !!}</span>
                    <div class="comment-footer m-b-10">
                        <span class="label label-inverse">Chưa nộp</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="step1" tabindex="-1" role="dialog" style="overflow-y: auto">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="margin-top: 9%;  background-color: #ffffff;">
                    <div class="modal-body" style="padding: 0 24px;">
                        <div style="display: flex;">
                            <label style="text-align: center;font-size: 20px;width: 100%;padding: 5px;margin-top: 11px;"
                                class="titlesinfo">Nộp minh chứng</label>
                            <a href="#" style="    font-size: 22px;color: #7e7171;font-weight: 600;margin-top: 9px;"
                                data-dismiss="modal" aria-label="Close">x</a>
                        </div>
                        <p class="Note-Copy" style="width:100%" id="Copys"></p>
                        <div id="note-allowProof" class="row" style="padding-bottom: 20px;word-break: break-all;">
                        </div>
                        <div class="rowclickImg" id="upload">
                            <form method="post" action="#" enctype="multipart/form-data" id="DropzoneNew"
                                style="width:100%">
                                <div id="load"
                                    style="text-align: left;font-size: 14px;font-weight: 600;color: #ff847b;">
                                </div>
                                <div class="dropzone dz-clickable" id="dropzoneMytwo">
                                    <div class="dropzone-previews">
                                    </div>
                                    <div class="dz-default dz-message"><span><span
                                                style="font-weight: 600;font-family: sans-serif; color: #039252"><i
                                                    class="fas fa-cloud-upload-alt fa-5x"></i><br> Chọn file</span><i
                                                class="fa fa-folders"></i></span></div>
                                </div>
                                <div id="listImgDropzone" class="row" style="    margin-top: 9px;">
                                </div>
                                <div style="margin-top: 14px;">
                                    <label>Mô tả minh chứng</label>
                                    <textarea class="form-control" rows="5"
                                        placeholder="Vui lòng nhập mô tả cho yêu cầu minh chứng bạn đã nộp tại đây"
                                        id="descriptionImg"></textarea>
                                </div>
                                <div>
                                    <input id="additionalLink" class="form-control mt-2"
                                        style="pointer-events: visible;" name="additionalLink"
                                        placeholder="Dán link (nếu có)" type="text" hidden>
                                    <input id="additionalLinkDescription" style="pointer-events: visible;"
                                        class="form-control mt-3" name="linkDes" placeholder="Mô tả link (nếu có)"
                                        type="text" hidden>
                                </div>
                                <div id="quote" style="margin-left: 2px;    margin-top: 40px; display:none">
                                    <label class="Note-Copy"
                                        style="text-align: left;margin-bottom: 10px; width: 74px;">Viện
                                        dẫn</label>
                                    <a class="test" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Chủ động lựa chọn tiêu chí trong mục 'Viện dẫn' sẽ tạo điều kiện thuận lợi cho doanh nghiệp đánh giá được các minh chứng đã nộp trước khi sản phẩm được xếp hạng."><i
                                            class="fa fa-info-circle" style="font-size: 16px;color: #03a9f3;"></i></a>
                                    <select id="selected2" multiple="multiple" data-select2-id="selected2" tabindex="-1"
                                        class="select2-hidden-accessible" aria-hidden="true">
                                        <option value="5f28da6ee373ac1058761053-1-1">1.1. Nguồn nguyên liệu</option>
                                        <option value="5f28da6ee373ac1058761053-1-2">1.2. Gia tăng giá trị</option>
                                        <option value="5f28da6ee373ac1058761053-1-3">1.3. Năng lực sản xuất để phân phối
                                        </option>
                                        <option value="5f28da6ee373ac1058761053-1-4">1.4. Liên kết chuỗi trong sản xuất
                                        </option>
                                        <option value="5f28da6ee373ac1058761053-1-5">1.5. Bảo vệ môi trường trong quá
                                            trình sản xuất</option>
                                        <option value="5f28da6ee373ac1058761053-1-6">1.6. Sử dụng năng lượng, công nghệ
                                            thân thiện bền vững trong SX</option>
                                        <option value="5f28da6ee373ac105876106e-2-1">2.1. Nguồn gốc ý tưởng sản phẩm
                                        </option>
                                        <option value="5f28da6ee373ac105876106e-2-2">2.2. Tính hoàn thiện của bao bì
                                        </option>
                                        <option value="5f28da6ee373ac105876106e-2-3">2.3. Phong cách của bao bì</option>
                                        <option value="5f28da6ee373ac105876107d-3-1">3.1. Loại hình tổ chức sản xuất -
                                            kinh doanh</option>
                                        <option value="5f28da6ee373ac105876107d-3-2">3.2. Sự tham gia của cộng đồng
                                            trong quản lý, điều hành</option>
                                        <option value="5f28da6ee373ac105876107d-3-3">3.3. Sử dụng lao động địa phương
                                        </option>
                                        <option value="5f28da6ee373ac105876107d-3-4">3.4. Tăng trưởng sản xuất kinh
                                            doanh</option>
                                        <option value="5f28da6ee373ac105876107d-3-5">3.5. Kế toán</option>
                                        <option value="5f28da6ee373ac1058761093-4-1">4.1. Khu vực phân phối chính
                                        </option>
                                        <option value="5f28da6ee373ac1058761093-4-2">4.2. Tổ chức phân phối</option>
                                        <option value="5f28da6ee373ac1058761093-4-3">4.3. Quảng bá sản phẩm</option>
                                        <option value="5f28da6ee373ac10587610a4-5-1">5.1. Câu chuyện về sản phẩm
                                        </option>
                                        <option value="5f28da6ee373ac10587610a4-5-2">5.2. Trí tuệ/bản sắc địa phương
                                        </option>
                                        <option value="5f28da6ee373ac10587610a4-5-3">5.3. Cấu trúc câu chuyện</option>
                                        <option value="5f28da6ee373ac10587610b4-6-1">6.1. Tạp chất lạ</option>
                                        <option value="5f28da6ee373ac10587610b4-6-2">6.2. Ngoại hình</option>
                                        <option value="5f28da6ee373ac10587610b4-6-3">6.3. Màu sắc</option>
                                        <option value="5f28da6ee373ac10587610b4-6-4">6.4. Mùi </option>
                                        <option value="5f28da6ee373ac10587610b4-6-5">6.5. Vị</option>
                                        <option value="5f28da6ee373ac10587610b4-6-6">6.6. Kết cấu/cách sắp đặt</option>
                                        <option value="5f28da6ee373ac10587610d2-7-1">7. TÍNH ĐỘC ĐÁO</option>
                                        <option value="5f28da6ee373ac10587610d8-8-1">8.1. Hồ sơ công bố chất lượng sản
                                            phẩm</option>
                                        <option value="5f28da6ee373ac10587610d8-8-2">8.2. Kiểm tra định kỳ các chỉ tiêu
                                            ATTP</option>
                                        <option value="5f28da6ee373ac10587610e2-9-1">9. ĐẢM BẢO CHẤT LƯỢNG SẢN PHẨM
                                        </option>
                                        <option value="5f28da6ee373ac10587610ea-10-1">10. CƠ HỘI THỊ TRƯỜNG TOÀN CẦU
                                        </option>
                                    </select><span class="select2 select2-container select2-container--default"
                                        dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span
                                                class="select2-selection select2-selection--multiple" role="combobox"
                                                aria-haspopup="true" aria-expanded="false" tabindex="-1">
                                                <ul class="select2-selection__rendered">
                                                    <li class="select2-search select2-search--inline"><input
                                                            class="select2-search__field" type="search" tabindex="0"
                                                            autocomplete="off" autocorrect="off" autocapitalize="none"
                                                            spellcheck="false" role="textbox" aria-autocomplete="list"
                                                            placeholder="" style="width: 0.75em;"></li>
                                                </ul>
                                            </span></span><span class="dropdown-wrapper"
                                            aria-hidden="true"></span></span>
                                </div>
                            </form>

                        </div>
                        <div style="float: right;margin: 24px 0;">
                            <a href="#" class="btn btn-secondary" data-dismiss="modal" style="    width: 122px;
height: 40px;
border-radius: 8px;
background-color: #eff0f1;">Đóng</a>
                            <button href="#" class="btn btn-success btn-disable" onclick="saveProof()" style="    width: 140px;
height: 40px;
border-radius: 8px;
background-color: #049252;" id="savePoof">Lưu</button>

                            <button href="#" class="btn btn-success btn-disable" onclick="save('NEWPROOF')" style="    width: 140px;
height: 40px;
border-radius: 8px;
background-color: #049252;
display: none" id="saveNewPoof">Cập nhật</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="stepEdit" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="margin-top: 9%;  background-color: #ffffff;">
                    <div class="modal-body" style="padding: 0 24px;">
                        <div style="display: flex;">
                            <h5 class="mt-3" style="display: inline; float: left;">
                                <a href="javascript:backModal()" style="color: #343a40;"><i class="fa fa-arrow-left"
                                        data-toggle="modal" data-target="#step2"></i></a> 
                            </h5>
                            <label style="text-align: center;font-size: 20px;width: 100%;padding: 5px;margin-top: 11px;"
                                class="titlesinfo"></label>
                            <a href="#" style="font-size: 22px;color: #343a40;font-weight: 600;margin-top: 9px;"
                                data-dismiss="modal" aria-label="Close">x</a>
                        </div>
                        <div style="text-align:center;" id="imgQueto">

                        </div>
                        <div style="margin-top: 14px;">
                            <label>Mô tả minh chứng</label>
                            <textarea class="form-control" rows="5"
                                placeholder="Vui lòng nhập mô tả cho yêu cầu minh chứng bạn đã nộp tại đây"
                                id="descriptionImgQuote"></textarea>
                        </div>
                        <div style="float: right;margin: 24px 0;" id="buttonQuote">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="step2" tabindex="-1" role="dialog" style="padding: 0;">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="margin-top: 9%; background-color: #ffffff;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="padding: 21px;">
                        <label
                            style="text-align: center;font-size: 20px;width: 100%;padding: 0px!important;    margin: 0;"
                            class="titlesinfo">Minh chứng đã
                            nộp</label>
                        <p class="Note-Copy" id="docu" style="width: 100%;"></p>
                        <div class="row " style="overflow: auto;padding: 0px 16px;" id="ImgModal-info-detailfile">
                        </div>
                        <div class="row " style="overflow: auto;padding: 0px 16px;" id="DocModal-info-detailfile">
                        </div>
                        <div style="float: right;margin: 24px 0;">
                            <a href="#" class="btn btn-secondary" data-dismiss="modal" style="    width: 122px;
height: 40px;
border-radius: 8px;
background-color: #eff0f1;">Đóng</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="step3" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="margin-top: 9%;max-height: 723px;  background-color: #ffffff;">
                    <div class="modal-body" style="padding: 0 24px;">
                        <label style="margin-top: 24px;text-align: center;font-size: 20px;" class="titles">Hãy cho chúng
                            tôi
                            biết vấn đề bạn đang gặp phải là gì?</label>
                        <p class="Note-Copy" id="Copys"></p>
                        <textarea style="width: 100%;
height: 200px;
border-radius: 8px;
background-color: #eff0f1;" placeholder="Vd: Tôi không thể tải ảnh" id="idText"></textarea>
                        <div style="float: right;margin: 24px 0;" id="buttonquestion">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="supportModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="margin-top: 9%; background-color: #ffffff;">
                    <div class="modal-header" style="padding: 0.5rem;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body" style="padding: 0 24px;">
                        <label style="margin-top: 24px;text-align: center;font-size: 20px; height: unset;"
                            class="titles">Hướng
                            dẫn</label>
                        <h6 id="requirementName" class="text-center" style="color: gray;"></h6>
                        <div class="mt-3">
                            <h5 class="supportHeading">Giải thích</h5>
                            <div id="explainDiv" class="mt-2"
                                style="text-align: justify; font-family: 'Quicksand', sans-serif; font-weight: 500;">

                            </div>
                        </div>
                        <div class="mt-3">
                            <h5 class="supportHeading">Tài liệu hướng dẫn</h5>
                            <div id="tutorialDocDiv" class="mt-2">

                            </div>
                        </div>
                        <div class="mt-3">
                            <h5 class="supportHeading">Video hướng dẫn</h5>
                            <div id="tutorialVideoDiv" class="mt-2">

                            </div>
                        </div>
                        <div>
                            <button class="btn btn-block btn-light mb-3 mt-3" data-dismiss="modal">
                                <h5 class="supportHeading">Đã hiểu</h5>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Nộp yêu cầu minh chứng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Tự chấm đánh giá</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                                        <!-- ************************* PANEL NỘP MINH CHỨNG ************************* -->

                    <div role="tabpanel" class="tab-pane in active" id="profile">
                        <div class="row" style="margin-top: 26px;">
                            <div class="col-md-4">
                                <div class="card" style="width: 100%;">
                                    <div class="card-header" style="background-color: white;
                            display: flex;
                            padding: 17px;">
                                        <div class="Rectangle">
                                        </div>
                                        <span class="SubHeading">
                                            YÊU CẦU BẮT BUỘC
                                        </span>
                                    </div>
                                    <div class="card-body" id="Obligatory">
                                        @foreach($proofs as $item)
                                        @if($item->type == 1)
                                        <div class="ectangle">
                                            @if($item->count_file > 0)
                                            <a href="#" data-toggle="modal" data-target="#multiChoiceModal"
                                                onclick="openMultiChoiceModal({!! $item->id!!}, {!! $product->id!!}, '{!! $item->title!!}')"
                                                class="viewMem">
                                                <div
                                                    style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
                                                    <div class="cice">
                                                        <p class="textone">{!! $item->count_file !!}</p>
                                                    </div>
                                                    <div>
                                                        <img src="images/a.png" srcset="images/a@2x.png 2x,
                                                                images/a@3x.png 3x" class="Black">
                                                    </div>
                                                </div>
                                            </a>
                                            @endif
                                            <div class="titlesinfo"> <a class="viewMem" herf="#" data-toggle="modal"
                                                    data-target="#multiChoiceModal"
                                                    onclick="openMultiChoiceModal({!! $item->id!!}, {!! $product->id!!}, '{!! $item->title!!}')">{!!
                                                    $item->title !!} </a>

                                            </div>
                                            <div
                                                style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                {{-- <div class="Rectangle-Copy">
                                                    <a class="uploadButton"
                                                        href="javascript:openQuestionModal({!! $item->id !!},{!! $product->id !!},'{!! $item->title!!}')">
                                                        <img src="{{ asset('images/primary.png') }}"
                                                            srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                            class="Primary" style="margin-top: 13px;"></a>
                                                </div>
                                                <div class="re-Copy" style="margin-right: 8px;">
                                                    <a href="" data-toggle="modal" data-target="#step3"
                                                        class="questionMem"
                                                        onclick="clickquestion('5e4f946cffb6912ea06ea54b')">
                                                        <img src="{{ asset('images/s.png') }}"
                                                            srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                            class="Black" style=" margin-top: 13px;">
                                                    </a>
                                                </div>
                                                <div class="re-Copy">
                                                    <a href="#" class="supportModalMem" data-toggle="modal"
                                                        data-target="#supportModal"
                                                        onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea54b","__v":0,"Contents":"Phiếu đăng ký ý tưởng sản phẩm, đăng ký sản phẩm","true":"1","TextCheck":"PDK","help":"1","check":"1","content":"Phiếu đăng ký","requirements":"Có theo mẫu đính kèm (biểu số 01, 02)","type":"Obligatory","supportInformation":{"explainText":"90% sản phẩm cùng loại trên thị trường được sản xuất từ một nguồn nguyên liệu, theo công nghệ chuẩn và trên thực tế là không có sự khác biệt nào. Vậy làm thế nào để người tiêu dùng phân biệt được tính ưu việt của sản phẩm? Quảng cáo thật nhiều trên các phương tiện truyền thông ư? Nhiều doanh nghiệp có khả năng làm được việc này. Giảm giá sản phẩm chăng? Các doanh nghiệp tuyên chiến với cuộc chiến giá cả thường buộc phải tạm thời quên đi nguồn lợi nhuận của mình. “Câu chuyện sản phẩm” chính là một trong những “chiêu” giúp doanh nghiệp tạo ra lợi nhuận một cách hữu hiệu nhất","tutorialDocs":[{"tutorialName":"Quy trình phiếu đăng ký","type":"doc","dataLinks":["https://view.officeapps.live.com/op/view.aspx?src=https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/CCSP.docx"]}],"tutorialVideos":["https://youtu.be/5JjVyZPu6Hw"]},"proofinfors":[]})'>
                                                        <img src="{{ asset('images/black.png') }}"
                                                            srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                            class="Black" style="margin-top: 13px;">
                                                    </a>
                                                </div> --}}
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header"
                                        style="background-color: white;display: flex;padding: 17px;">
                                        <div class="Rectangle">
                                        </div>
                                        <span class="SubHeading ">
                                            TÀI LIỆU MINH CHỨNG BỔ SUNG
                                        </span>

                                    </div>
                                    <div class="card-body row" id="Additionally">
                                        @foreach($proofs as $item)
                                        @if($item->type == 0)
                                        <div class="ectangle" style="position:relative">
                                            @if($item->count_file > 0)
                                            <a href="#" data-toggle="modal" class="viewMem" data-target="#multiChoiceModal" onclick="openMultiChoiceModal({!! $item->id!!}, {!! $product->id!!}, '{!! $item->title!!}')">

                                                <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">

                                                <div class="cice">
                                                    <p class="textone">{!! $item->count_file !!}</p>
                                                </div>
                                                <div>
                                                    <img src="images/a.png" srcset="images/a@2x.png 2x,
                                                            images/a@3x.png 3x" class="Black">
                                                </div>
                                                </div>

                                              </a>
                                              @endif
                                            <div class="titlesinfo" style="margin-bottom:50px"> <a herf="#"
                                                    data-toggle="modal" class="viewMem" data-target="#multiChoiceModal"
                                                    onclick="openMultiChoiceModal({!! $item->id!!}, {!! $product->id!!}, '{!! $item->title!!}')">{!!$item->title!!}
                                                </a>

                                            </div>


                                            <div
                                                style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">

                                                <div class="re-Copy" style="margin-right: 8px;" onclick="clickquestion('{!! $item->id!!}')">
                                                    <a href="" data-toggle="modal" data-target="#step3"
                                                        class="questionMem "
                                                        onclick="clickquestion('{!! $item->id!!}')">
                                                        <img src="{{ asset('images/s.png') }}"
                                                            srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                            class="Black" style="    margin-top: 13px;">
                                                    </a>
                                                </div>
                                                    <?php $explain = '"'.$item->explain.'"';
                                                    ?>
                                                <div class="re-Copy" onclick='showSupportModal({"product_id": {!! $item->id !!},"sup_id": {!! $item->sup_id !!},"explain": {!! $explain !!}})'>
                                                    <a href="#" class="supportModalMem" data-toggle="modal"
                                                        data-target="#supportModal"
                                                        onclick='showSupportModal({"product_id": {!! $item->id !!},"sup_id": {!! $item->sup_id !!},"explain": {!! $explain !!}})'>
                                                        <img src="{{ asset('images/black.png') }}"
                                                            srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                            class="Black" style="margin-top: 13px;">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                            {{-- <div class="col-md-12">
                                <button type="button"
                                    class="btn btn-info btn-rounded m-t-10 float-right btn-successProduct"
                                    onclick="doneProof()" style="margin-bottom: 15px;background-color: #049252;">Hoàn
                                    thành</button>
                            </div> --}}
                        </div>
                    </div>
                    <!-- ************************* PANEL TỰ CHẤM ĐIỂM ************************* -->
                    <div role="tabpanel" class="tab-pane" id="buzz">
                        <div class="container-fluid">
                            <div class="row" style="margin-top: 26px;">
                                <div class="col-lg-8">
                                    <div class="col-md-12"
                                        style="text-align: left;border-bottom: 1px solid #dee2e6;padding: 24px 0;    background-color: white;text-align: center;">
                                        <span id="product" class="titileoCop">{!! $product->name!!}</span><br>
                                        <label class="entili" id="entity">{!! $entity->name!!}</label><br>
                                        <span class="textOcop" id="setProduct"><span class="productTi">Bộ sản
                                                phẩm</span>: {!!$product2->product_type_name!!}</span><br>

                                        <span class="textOcop" id="productcode"><span class="productTi">Mã sản
                                                phẩm</span>: {!! $product->code!!}</span>
                                        <br>

                                        <span class="textOcop" id="adressentity"><span class="productTi">Địa chỉ</span>:
                                        {{  !empty($product2->street) ? $product2->street.'-' : ''  }} {{$product2->ward}} - {{$product2->district}} - {{$product2->province}}</span>
                                        <div class="text-center" id="noteText"
                                            style="color:#039252!important;font-size:16px"> <span>Đang chấm</span>
                                            <br><i>lần chấm thứ 1</i>
                                        </div>
                                    </div>
                                    <div id="question" style="background-color: white;padding: 26px;">
                                        <?php $index = -1 ?>
                                        <div class="row" id="A">
                                            <div class="col-md-12" style="margin-top: 22px;margin-bottom: 22px; ">
                                                <span class="titileoCop">PHẦN A: {!!Str::of($groupA[0][0]->groupName)->upper()!!}</span>
                                            </div>
                                            <br>
                                            <div class="col-md-12" id="A-content" style="padding: 0;margin: 0;">
                                                @foreach($groupA as $items)
                                                <?php $index += 1 ?>
                                                <form class="form-material" id="A_Section{!!$index!!}">
                                                    <div>
                                                        <label for="productName">
                                                            <div style="display:flex">
                                                                <div class="Rectangle"></div>
                                                                <span class="SubHeading"> {!! $items[0]->sectionName!!} </span>
                                                            </div>
                                                        </label>
                                                        <?php $questionIndexA = -1 ?>
                                                        @foreach($items as $item)
                                                        <?php $questionIndexA += 1 ?>
                                                        <div
                                                            style="width:100%;position: relative;display: inline-table;">

                                                            <span>
                                                                <b>
                                                                {!!$item->question!!}
                                                                <a href="javascript:showHelp('{!!$item->questionId!!}')"><i class="mdi mdi-help-circle"></i></a>
                                                                </b>
                                                            </span>
                                                            <div><i> <span>{!!$item->questionNote!!}</span></i></div>
                                                            <div id="AQuestion-{!!$questionIndexA!!}">
                                                                @if($item->questionParentId > 0)
                                                                <?php $lv2QuestionIndexA = -1 ?>
                                                                @foreach($item->question2 as $item2)
                                                                <?php $lv2QuestionIndexA += 1 ?>
                                                                <div class="ml-3" style="position: relative;">
                                                                    <label><b>{!! $item2->question!!} <a
                                                                                href="javascript:showHelp('6.1.1. Tạp chất lạ')"><i
                                                                                    class="mdi mdi-help-circle"></i></a>
                                                                        </b></label><a class="iconrole" href="#"
                                                                        data-toggle="modal" data-target="#comment"
                                                                        onclick="openCommnent('6.detail[0].lvl2Questions[0]','5f28d61d7c7f9046bc5e1560')">
                                                                        <div class="divComment"> <img
                                                                                src="{{ asset('images/fi-xnsuxx-comment-square-solid.png') }}"
                                                                                style="margin-left: 10px;margin-top: 6px;"
                                                                                width="16px" height="16px"></div>
                                                                    </a><a class="iconroles" href="#"
                                                                        data-toggle="modal"
                                                                        data-target="#exampleModalOcop"
                                                                        onclick="checkInfoOcop('{{$product->id}}','{{$item->questionId}}')">
                                                                        <div class="divocop"><img src="{{ asset('images/blacsk.png') }}"
                                                                                class="Black"
                                                                                style="margin-left: 10px;margin-top: 6px;">
                                                                            <div class="infoNotelv2"
                                                                                id="infoNote6.detail[0].lvl2Questions[0]"
                                                                                style="display:none"></div>
                                                                        </div>
                                                                    </a>
                                                                    <div><i>{!!$item2->questionNote!!}</i></div>
                                                                    <?php $answerIndex1A = -1 ?>
                                                                    @foreach($item2->answers as $answer)
                                                                    <?php $answerIndex1A += 1 ?>
                                                                    @if(isset($answer->title))
                                                                    <label>{!!$answer->title!!}</label>
                                                                    @else
                                                                    @endif
                                                                    <div style="display: flex;">
                                                                        <input type="checkbox" class="radio"
                                                                            {{ ($answer->answer==$answer->answerId) ? '
                                                                            checked=checked ' : '' }}
                                                                            name="A_Section{!!$index!!}_Question{!!$questionIndexA!!}_lvl2QuesIndex{!!$lv2QuestionIndexA!!}"
                                                                            id="A_Section{!!$index!!}_Question{!!$questionIndexA!!}_lvl2QuesIndex{!!$lv2QuestionIndexA!!}_Answer{!!$answerIndex1A!!}"
                                                                            style="margin-top: 4px;margin-right: 6px;"
                                                                            value="{!!$answer->point!!}"
                                                                            data-question-id="{!!$answer->questionId!!}"
                                                                            data-answer-id="{!!$answer->answerId!!}"
                                                                            data-answer-text="{!! $answer->content!!}
                                                                            " disabled="disabled">
                                                                        <label style="width: 80%;color:#212529;"
                                                                            name="lbl_A_Section{!!$index!!}_Question{!!$questionIndexA!!}"
                                                                            id="lbl_A_Section{!!$index!!}_Question{!!$questionIndexA!!}_lvl2QuesIndex{!!$lv2QuestionIndexA!!}_Answer{!!$answerIndex1A!!}"
                                                                            for="A_Section{!!$index!!}_Question{!!$questionIndexA!!}_lvl2QuesIndex{!!$lv2QuestionIndexA!!}_Answer{!!$answerIndex1A!!}">
                                                                            {!! $answer->content!!}</label><br>
                                                                        <span
                                                                            style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">{!! $answer->point!!}
                                                                            điểm</span>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                                @endforeach

                                                                @else
                                                                <?php $answerIndex2A = -1 ?>
                                                                @foreach($item->answers as $answer)
                                                                <?php $answerIndex2A += 1 ?>
                                                                @if(isset($answer->title))
                                                                <label>{!!$answer->title!!}</label>
                                                                @else
                                                                @endif
                                                                <div style="display: flex;">
                                                                    <input type="checkbox" class="radio"
                                                                        {{ ($answer->answer==$answer->answerId) ? '
                                                                                checked=checked ' : '' }}
                                                                        name="A_Section{!!$index!!}_Question{!!$questionIndexA!!}"
                                                                        id="A_Section{!!$index!!}_Question{!!$questionIndexA!!}_Answer{!!$answerIndex2A!!}"
                                                                        style="margin-top: 4px;margin-right: 6px;"
                                                                        value="{!!$answer->point!!}"
                                                                        data-question-id="{!!$answer->questionId!!}"
                                                                        data-answer-id="{!!$answer->answerId!!}"
                                                                        data-answer-text="{!! $answer->content!!}" disabled="disabled">
                                                                    <label style="width: 80%;color:#212529; font-weight:400;font-style: normal"
                                                                        name="lbl_A_Section{!!$index!!}_Question{!!$questionIndexA!!}"
                                                                        id="lbl_A_Section{!!$index!!}_Question{!!$questionIndexA!!}_Answer{!!$answerIndex2A!!}"
                                                                        for="A_Section{!!$index!!}_Question{!!$questionIndexA!!}_Answer{!!$answerIndex2A!!}">
                                                                        {!! $answer->content!!}</label><br>
                                                                    <span
                                                                        style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">{!! $answer->point!!}
                                                                        điểm</span>
                                                                </div>
                                                                @endforeach
                                                                @endif

                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </form>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="row" id="B">
                                            <div class="col-md-12" style="margin-top: 22px;margin-bottom: 22px; ">
                                                <span class="titileoCop">PHẦN B: {!!Str::of($groupB[0][0]->groupName)->upper()!!}</span>
                                            </div>
                                            <br>
                                            <div class="col-md-12" id="B-content" style="padding: 0;margin: 0;">
                                                @foreach($groupB as $items)
                                                <?php $index += 1 ?>
                                                <form class="form-material" id="B_Section{!!$index!!}">
                                                    <div>
                                                        <label for="productName">
                                                            <div style="display:flex">
                                                                <div class="Rectangle"></div>
                                                                <span class="SubHeading"> {!! $items[0]->sectionName!!} </span>
                                                            </div>
                                                        </label>
                                                        <?php $questionIndexB = -1 ?>
                                                        @foreach($items as $item)
                                                        <?php $questionIndexB += 1 ?>
                                                        <div
                                                            style="width:100%;position: relative;display: inline-table;">

                                                            <span>
                                                                <b>
                                                                    {!!$item->question!!}
                                                                    <a href="javascript:showHelp('{!!$item->questionId!!}')"><i class="mdi mdi-help-circle"></i></a>
                                                                </b>
                                                            </span>
                                                            <div><i> <span>{!!$item->questionNote!!}</span></i></div>
                                                            <div id="BQuestion-{!!$questionIndexB!!}">
                                                                @if($item->questionParentId > 0)
                                                                <?php $lv2QuestionIndexB = -1 ?>
                                                                @foreach($item->question2 as $item2)
                                                                <?php $lv2QuestionIndexB += 1 ?>
                                                                <div class="ml-3" style="position: relative;">
                                                                    <label><b>{!! $item2->question!!} <a
                                                                                href="javascript:showHelp('6.1.1. Tạp chất lạ')"><i
                                                                                    class="mdi mdi-help-circle"></i></a>
                                                                        </b></label><a class="iconrole" href="#"
                                                                        data-toggle="modal" data-target="#comment"
                                                                        onclick="openCommnent('6.detail[0].lvl2Questions[0]','5f28d61d7c7f9046bc5e1560')">
                                                                        <div class="divComment"> <img
                                                                                src="{{ asset('images/fi-xnsuxx-comment-square-solid.png') }}"
                                                                                style="margin-left: 10px;margin-top: 6px;"
                                                                                width="16px" height="16px"></div>
                                                                    </a><a class="iconroles" href="#"
                                                                        data-toggle="modal"
                                                                        data-target="#exampleModalOcop"
                                                                        onclick="checkInfoOcop('{{$product->id}}','{{$item->questionId}}')">
                                                                        <div class="divocop"><img src="{{ asset('images/blacsk.png') }}"
                                                                                class="Black"
                                                                                style="margin-left: 10px;margin-top: 6px;">
                                                                            <div class="infoNotelv2"
                                                                                id="infoNote6.detail[0].lvl2Questions[0]"
                                                                                style="display:none"></div>
                                                                        </div>
                                                                    </a>
                                                                    <div><i>{!!$item2->questionNote!!}</i></div>
                                                                    <?php $answerIndex1B = -1 ?>
                                                                    @foreach($item2->answers as $answer)
                                                                    <?php $answerIndex1B += 1 ?>
                                                                    @if(isset($answer->title))
                                                                    <label>{!!$answer->title!!}</label>
                                                                    @else
                                                                    @endif
                                                                    <div style="display: flex;">
                                                                        <input type="checkbox" class="radio"
                                                                            {{ ($answer->answer==$answer->answerId) ? '
                                                                            checked=checked ' : '' }}
                                                                            name="B_Section{!!$index!!}_Question{!!$questionIndexB!!}_lvl2QuesIndex{!!$lv2QuestionIndexB!!}"
                                                                            id="B_Section{!!$index!!}_Question{!!$questionIndexB!!}_lvl2QuesIndex{!!$lv2QuestionIndexB!!}_Answer{!!$answerIndex1B!!}"
                                                                            style="margin-top: 4px;margin-right: 6px;"
                                                                            value="{!!$answer->point!!}"
                                                                            data-question-id="{!!$answer->questionId!!}"
                                                                            data-answer-id="{!!$answer->answerId!!}"
                                                                            data-answer-text="Có các tạp chất, chấp nhận được" disabled="disabled">
                                                                        <label style="width: 80%;color:#212529;"
                                                                            name="lbl_B_Section{!!$index!!}_Question{!!$questionIndexB!!}"
                                                                            id="lbl_B_Section{!!$index!!}_Question{!!$questionIndexB!!}_lvl2QuesIndex{!!$lv2QuestionIndexB!!}_Answer{!!$answerIndex1B!!}"
                                                                            for="B_Section{!!$index!!}_Question{!!$questionIndexB!!}_lvl2QuesIndex{!!$lv2QuestionIndexB!!}_Answer{!!$answerIndex1B!!}">
                                                                            {!! $answer->content!!}</label><br>
                                                                        <span
                                                                            style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">{!! $answer->point!!}
                                                                            điểm</span>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                                @endforeach

                                                                @else
                                                                <?php $answerIndex2B = -1 ?>
                                                                @foreach($item->answers as $answer)
                                                                <?php $answerIndex2B += 1 ?>
                                                                @if(isset($answer->title))
                                                                <label>{!!$answer->title!!}</label>
                                                                @else
                                                                @endif
                                                                <div style="display: flex;">
                                                                    <input type="checkbox" class="radio"
                                                                        {{ ($answer->answer==$answer->answerId) ? '
                                                                        checked=checked ' : '' }}
                                                                        name="B_Section{!!$index!!}_Question{!!$questionIndexB!!}"
                                                                        id="B_Section{!!$index!!}_Question{!!$questionIndexB!!}_Answer{!!$answerIndex2B!!}"
                                                                        style="margin-top: 4px;margin-right: 6px;"
                                                                        value="{!!$answer->point!!}"
                                                                        data-question-id="{!!$answer->questionId!!}"
                                                                        data-answer-id="{!!$answer->answerId!!}"
                                                                        data-answer-text="Có các tạp chất, chấp nhận được" disabled="disabled">
                                                                    <label style="width: 80%;color:#212529;"
                                                                        name="lbl_B_Section{!!$index!!}_Question{!!$questionIndexB!!}"
                                                                        id="lbl_B_Section{!!$index!!}_Question{!!$questionIndexB!!}_Answer{!!$answerIndex2B!!}"
                                                                        for="B_Section{!!$index!!}_Question{!!$questionIndexB!!}_Answer{!!$answerIndex2B!!}">
                                                                        {!! $answer->content!!}</label><br>
                                                                    <span
                                                                        style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">{!! $answer->point!!}
                                                                        điểm</span>
                                                                </div>
                                                                @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </form>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="row" id="C">
                                            <div class="col-md-12" style="margin-top: 22px;margin-bottom: 22px; ">
                                                <span class="titileoCop">PHẦN C: {!!Str::of($groupC[0][0]->groupName)->upper()!!}</span>
                                            </div>
                                            <br>
                                            <div class="col-md-12" id="C-content" style="padding: 0;margin: 0;">
                                                @foreach($groupC as $items)
                                                <?php $index += 1 ?>
                                                <form class="form-material" id="C_Section{!!$index!!}">
                                                    <div>
                                                        <label for="productName">
                                                            <div style="display:flex">
                                                                <div class="Rectangle"></div>
                                                                <span class="SubHeading"> {!! $items[0]->sectionName!!} </span>
                                                            </div>
                                                        </label>
                                                        <?php $questionIndexC = -1 ?>
                                                        @foreach($items as $item)
                                                        <?php $questionIndexC += 1 ?>
                                                        <div
                                                            style="width:100%;position: relative;display: inline-table;">

                                                            <span>
                                                                <b>
                                                                    {!!$item->question!!}
                                                                    <a href="javascript:showHelp('{!!$item->questionId!!}')"><i class="mdi mdi-help-circle"></i></a>
                                                                </b>
                                                            </span>
                                                            <div><i> <span>{!!$item->questionNote!!}</span></i></div>
                                                            <div id="CQuestion-{!!$questionIndexC!!}">
                                                                @if($item->questionParentId > 0)
                                                                <?php $lv2QuestionIndexC = -1 ?>
                                                                @foreach($item->question2 as $item2)
                                                                <?php $lv2QuestionIndexC += 1 ?>
                                                                <div class="ml-3" style="position: relative;">
                                                                    <label><b>{!! $item2->question!!} <a
                                                                                href="javascript:showHelp('6.1.1. Tạp chất lạ')"><i
                                                                                    class="mdi mdi-help-circle"></i></a>
                                                                        </b></label><a class="iconrole" href="#"
                                                                        data-toggle="modal" data-target="#comment"
                                                                        onclick="openCommnent('6.detail[0].lvl2Questions[0]','5f28d61d7c7f9046bc5e1560')">
                                                                        <div class="divComment"> <img
                                                                                src="{{ asset('images/fi-xnsuxx-comment-square-solid.png') }}"
                                                                                style="margin-left: 10px;margin-top: 6px;"
                                                                                width="16px" height="16px"></div>
                                                                    </a><a class="iconroles" href="#"
                                                                        data-toggle="modal"
                                                                        data-target="#exampleModalOcop"
                                                                        onclick="checkInfoOcop('{{$product->id}}','{{$item->questionId}}')">
                                                                        <div class="divocop"><img src="{{ asset('images/blacsk.png') }}"
                                                                                class="Black"
                                                                                style="margin-left: 10px;margin-top: 6px;">
                                                                            <div class="infoNotelv2"
                                                                                id="infoNote6.detail[0].lvl2Questions[0]"
                                                                                style="display:none"></div>
                                                                        </div>
                                                                    </a>
                                                                    <div><i>{!!$item2->questionNote!!}</i></div>
                                                                    <?php $answerIndex1C = -1 ?>
                                                                    @foreach($item2->answers as $answer)
                                                                    <?php $answerIndex1C += 1 ?>
                                                                    @if(isset($answer->title))
                                                                    <label>{!!$answer->title!!}</label>
                                                                    @else
                                                                    @endif
                                                                    <div style="display: flex;">
                                                                        <input type="checkbox" class="radio"
                                                                        {{ ($answer->answer==$answer->answerId) ? '
                                                                        checked=checked ' : '' }}
                                                                            name="C_Section{!!$index!!}_Question{!!$questionIndexC!!}_lvl2QuesIndex{!!$lv2QuestionIndexC!!}"
                                                                            id="C_Section{!!$index!!}_Question{!!$questionIndexC!!}_lvl2QuesIndex{!!$lv2QuestionIndexC!!}_Answer{!!$answerIndex1C!!}"
                                                                            style="margin-top: 4px;margin-right: 6px;"
                                                                            value="{!!$answer->point!!}"
                                                                            data-question-id="{!!$answer->questionId!!}"
                                                                            data-answer-id="{!!$answer->answerId!!}"
                                                                            data-answer-text="Có các tạp chất, chấp nhận được" disabled="disabled">
                                                                        <label style="width: 80%;color:#212529;"
                                                                            name="lbl_C_Section{!!$index!!}_Question{!!$questionIndexC!!}"
                                                                            id="lbl_C_Section{!!$index!!}_Question{!!$questionIndexC!!}_lvl2QuesIndex{!!$lv2QuestionIndexC!!}_Answer{!!$answerIndex1C!!}"
                                                                            for="C_Section{!!$index!!}_Question{!!$questionIndexC!!}_lvl2QuesIndex{!!$lv2QuestionIndexC!!}_Answer{!!$answerIndex1C!!}">
                                                                            {!! $answer->content!!}</label><br>
                                                                        <span
                                                                            style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">{!! $answer->point!!}
                                                                            điểm</span>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                                @endforeach

                                                                @else
                                                                <?php $answerIndex2C = -1 ?>
                                                                @foreach($item->answers as $answer)
                                                                <?php $answerIndex2C += 1 ?>
                                                                @if(isset($answer->title))
                                                                <label>{!!$answer->title!!}</label>
                                                                @else
                                                                @endif
                                                                <div style="display: flex;">
                                                                    <input type="checkbox" class="radio"
                                                                    {{ ($answer->answer==$answer->answerId) ? '
                                                                    checked=checked ' : '' }}
                                                                        name="C_Section{!!$index!!}_Question{!!$questionIndexC!!}"
                                                                        id="C_Section{!!$index!!}_Question{!!$questionIndexC!!}_Answer{!!$answerIndex2C!!}"
                                                                        style="margin-top: 4px;margin-right: 6px;"
                                                                        value="{!!$answer->point!!}"
                                                                        data-question-id="{!!$answer->questionId!!}"
                                                                        data-answer-id="{!!$answer->answerId!!}"
                                                                        data-answer-text="Có các tạp chất, chấp nhận được" disabled="disabled">
                                                                    <label style="width: 80%;color:#212529;"
                                                                        name="lbl_C_Section{!!$index!!}_Question{!!$questionIndexC!!}"
                                                                        id="lbl_C_Section{!!$index!!}_Question{!!$questionIndexC!!}_Answer{!!$answerIndex2C!!}"
                                                                        for="C_Section{!!$index!!}_Question{!!$questionIndexC!!}_Answer{!!$answerIndex2C!!}">
                                                                        {!! $answer->content!!}</label><br>
                                                                    <span
                                                                        style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">{!! $answer->point!!}
                                                                        điểm</span>
                                                                </div>
                                                                @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </form>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4" id="reponsivePc">
                                    <div class="bodycontent" id="scrollPc"
                                        style="background-color: white; padding: 26px 26px 50px; position: relative; width: 100%; top: 0px;">
                                        <div id="bootommIdeaPc" style="">
                                            <div class="row">
                                                <div class="col-md-12" style="margin-top: 22px;">
                                                    <div style="margin-bottom: 16px;">
                                                        <span class="Part">Phần A</span> <span class="Part"
                                                            style="float: right;">/{!!$totalA!!}đ</span>
                                                        <span id="A-totalPoint"
                                                            class="Part" style="float: right;">{!! $scoreA !!}</span><br>
                                                    </div>
                                                    <div style="margin-bottom: 16px;">
                                                        <span class="Part">Phần B</span>
                                                        <span class="Part" style="float: right;">/{!!$totalB!!}đ</span>
                                                        <span id="B-totalPoint" class="Part"
                                                            style="float: right;">{!! $scoreB !!}</span><br>
                                                    </div>
                                                    <div style="margin-bottom: 16px;">
                                                        <span class="Part">Phần C</span>
                                                        <span class="Part" style="float: right;">/{!!$totalC!!}đ</span>
                                                        <span id="C-totalPoint" class="Part"
                                                            style="float: right;">{!! $scoreC !!}</span><br>
                                                    </div>
                                                    <div style="margin-bottom: 16px;    width: 100%;">
                                                        <span class="Part">Tổng điểm</span>
                                                        <span class="Part"
                                                            style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">đ</span>
                                                        <span id="totalPoint" class="Part"
                                                            style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">{!! $totalScore !!}</span><br>
                                                    </div>
                                                    <div style="margin-bottom: 16px;    width: 100%;">
                                                        <span class="Part">Xếp hạng</span>
                                                        @if($totalScore >= 30 && $totalScore < 50)
                                                            <span id="rankStar"
                                                                class="Part"
                                                                style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">2
                                                                sao</span><br>
                                                        @elseif($totalScore >= 50 && $totalScore < 70)
                                                            <span id="rankStar"
                                                                  class="Part"
                                                                  style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">3
                                                                sao</span><br>
                                                        @elseif($totalScore >= 70 && $totalScore < 90)
                                                            <span id="rankStar"
                                                                  class="Part"
                                                                  style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">4
                                                                sao</span><br>
                                                        @elseif($totalScore >= 90)
                                                            <span id="rankStar"
                                                                  class="Part"
                                                                  style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">5
                                                                sao</span><br>
                                                        @else
                                                            <span id="rankStar"
                                                                  class="Part"
                                                                  style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">0
                                                                sao</span><br>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="display: none">
                                                    <a id="proofBtn"
                                                        href="https://app.sohoaocop.com/treeProof?productInfoId=62306c28910d6b236160f0b3&amp;productSetId=5e4f86607a80891424175fc8"
                                                        target="_blank" style="color: #fd9600;"><label>Xem mục lục
                                                            minh chứng đã nộp &gt;</label></a>
                                                </div>

                                                <div class="col-md-12" style="margin-top: 20px;">
                                                    {{-- <a class="btn btn-success" id="saveProcessBtn" role="button"
                                                        href="javascript:saveResult('PROCESSING',true)"
                                                        style="color: #f8f9fa;width: 100%;background-color: #049252;">Lưu</a> --}}
                                                        <button type="submit" onclick="saveResult('PROCESSING',true,{{Auth::guard('web')->user()->id}})" style="background-color: #039252; color: #ffff;" value="Đăng nhập"
                                                        class="btn btn-block">Lưu</button>
                                                </div>
                                                <!-- <div class="col-md-12" style="margin-top: 12px;">
                                                        <button id="completeEvaluate" onclick="saveEvaluate('DONE',true)"
                                                            class="evaluateStatus text-white btn mr-2"
                                                            style="flex: 1; background-color: #039252; width:100%;" data-toggle="tooltip"
                                                            data-placement="top">Gửi kết quả</button>
                                                    </div> -->
                                                <div class="col-md-12 " style="display:none;  margin-top: 10px;">
                                                    <div class="row">
                                                        <div class="col-4 opacity-0">
                                                            <div
                                                                style="background-color: #eff0f1;    text-align: center; border-radius: 8px;">
                                                                <a class="btn evaluationTooltip checkRoletootTip"
                                                                    href="javascript:openNotUsedModal()">
                                                                    <!-- href="javascript:openPrecedentModal() opacity-0" -->
                                                                    <!-- <span class="evaluationTooltipText">Tra cứu tiền
                                                                            lệ</span> -->
                                                                    <img src="{{ asset('images/seach.png') }}"
                                                                        class="Grey" style="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 opacity-0">
                                                            <div
                                                                style="background-color: #eff0f1;    text-align: center; border-radius: 8px;">
                                                                <a class="btn evaluateStatus evaluationTooltip checkRoletootTip"
                                                                    href="javascript:openNotUsedModal()">
                                                                    <!-- href="javascript:printEvaluationResultPdf()" -->
                                                                    <!-- <span class="evaluationTooltipText">Tải phiếu
                                                                            chấm</span> -->
                                                                    <img src="{{ asset('images/docx-download-17-17.png') }}"
                                                                        class="Grey">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 opacity-0">
                                                            <div
                                                                style="background-color: #eff0f1;    text-align: center; border-radius: 8px;">
                                                                <a class="btn evaluateStatus evaluationTooltip checkRoletootTip"
                                                                    href="javascript: openNotUsedModal()">
                                                                    <!-- href="javascript: openMailModel()" -->
                                                                    <!-- <span class="evaluationTooltipText">Gửi mail</span> -->
                                                                    <img src="{{ asset('images/gmail-black.png') }}"
                                                                        class="Grey">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4" id="reponsiveMobile">
                                    <div id="bootommIdea" style="">
                                        <div id="actionBtn" class="action-button">
                                            <div class="action-button-content row">
                                                <div class="col-md-12" style="margin-top: 22px;">
                                                    <div style="margin-bottom: 16px;">
                                                        <span class="Part">Phần A</span> <span class="Part"
                                                            style="float: right;">/35đ</span>
                                                        <span id="A-totalPointmobile" class="Part"
                                                            style="float: right;">4</span><br>
                                                    </div>
                                                    <div style="margin-bottom: 16px;">
                                                        <span class="Part">Phần B</span>
                                                        <span class="Part" style="float: right;">/25đ</span>
                                                        <span id="B-totalPointmobile" class="Part"
                                                            style="float: right;">0</span><br>
                                                    </div>
                                                    <div style="margin-bottom: 16px;">
                                                        <span class="Part">Phần C</span>
                                                        <span class="Part" style="float: right;">/40đ</span>
                                                        <span id="C-totalPointmobile" class="Part"
                                                            style="float: right;">0</span><br>
                                                    </div>
                                                    <div style="margin-bottom: 16px;    width: 100%;">
                                                        <span class="Part">Tổng điểm</span>
                                                        <span class="Part"
                                                            style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">đ</span>
                                                        <span id="totalPointmobile" class="Part"
                                                            style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">4</span><br>
                                                    </div>
                                                    <div style="margin-bottom: 16px;    width: 100%;">
                                                        <span class="Part">Xếp hạng</span> <span id="rankStarmobile"
                                                            class="Part"
                                                            style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">1
                                                            sao</span><br>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <a id="proofBtnMobile"
                                                        href="https://app.sohoaocop.com/treeProof?productInfoId=62306c28910d6b236160f0b3&amp;productSetId=5e4f86607a80891424175fc8"
                                                        target="_blank" style="color: #fd9600;"><label>Xem mục lục
                                                            minh chứng đã nộp &gt;</label></a>
                                                </div>

                                                <div class="col-4">
                                                    <div
                                                        style="background-color: #eff0f1;    text-align: center; border-radius: 8px;">
                                                        <a class="btn evaluationTooltip"
                                                            href="javascript:openPrecedentModal()">
                                                            <span class="evaluationTooltipText">Tra cứu tiền lệ</span>
                                                            <img src="{{ asset('images/seach.png') }}" class="Grey"
                                                                style="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div
                                                        style="background-color: #eff0f1;    text-align: center; border-radius: 8px;">
                                                        <a class="btn evaluateStatus evaluationTooltip"
                                                            href="javascript:printEvaluationResultPdf()">
                                                            <span class="evaluationTooltipText">Tải phiếu chấm</span>
                                                            <img src="{{ asset('images/docx-download-17-17.png') }}"
                                                                class="Grey">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div
                                                        style="background-color: #eff0f1;    text-align: center; border-radius: 8px;">
                                                        <a class="btn evaluateStatus evaluationTooltip"
                                                            href="javascript: openMailModel()">
                                                            <span class="evaluationTooltipText">Gửi mail</span>
                                                            <img src="{{ asset('images/gmail-black.png') }}"
                                                                class="Grey">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="btnaction" class="row">
                                            <div class="col-6">
                                                <a class="btn btn-success disabled" id="saveProcessBtnmobile"
                                                    role="button" href="javascript:saveEvaluate('PROCESSING',true)"
                                                    style="color: #f8f9fa;width: 100%;background-color: #049252;">Lưu</a>
                                            </div>
                                            <div class="col-6">
                                                <button id="completeEvaluatemobile" onclick="saveEvaluate('DONE',true)"
                                                    class="evaluateStatus text-white btn mr-2"
                                                    style="flex: 1; background-color: #039252; width:100%;"
                                                    data-toggle="tooltip" data-placement="top" disabled="disabled">Gửi
                                                    kết quả</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="comment" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="    padding: 0;">
                                            <div class="chat-right-aside">
                                                <div class="chat-main-header">
                                                    <div class="p-3 b-b">
                                                        <h4 class="box-title">Ghi chú</h4>
                                                    </div>
                                                </div>
                                                <div class="chat-rbox ps ps--theme_default ps--active-y"
                                                    data-ps-id="52f577ce-a481-e766-3cda-1f864ca06dd4">
                                                    <ul class="chat-list p-3" style="max-height: 500px;" id="listNote">
                                                        <!--chat Row -->

                                                    </ul>
                                                    <div class="ps__scrollbar-x-rail"
                                                        style="left: 0px; bottom: -1436px;">
                                                        <div class="ps__scrollbar-x" tabindex="0"
                                                            style="left: 0px; width: 0px;">
                                                        </div>
                                                    </div>
                                                    <div class="ps__scrollbar-y-rail"
                                                        style="top: 1436px; right: 0px; height: 285px;">
                                                        <div class="ps__scrollbar-y" tabindex="0"
                                                            style="top: 176px; height: 35px;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body border-top">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div id="img_product">

                                                            </div>
                                                        </div>
                                                        <div class="col-10" id="ShowNote1">
                                                            <div>
                                                                <div class="fileupload  waves-effect waves-light" style="position: absolute;
                                                                top: 97px;
                                                                right: 22px;">
                                                                    <span><i class="fa fa-paperclip" style="    color: #818182;
                                                                                font-size: 16px;" data-toggle="tooltip"
                                                                            title="Hooray!"></i></span>
                                                                    <input type="file" class="upload" id="txtUpload"
                                                                        multiple="">
                                                                </div>
                                                                <textarea placeholder="Nhập ghi chú"
                                                                    class="form-control border-0" rows="5"
                                                                    id="textNode"></textarea>
                                                            </div>

                                                        </div>
                                                        <div class="col-2 text-right" id="ShowNote2">
                                                            <button type="button" class="btn btn-info btn-circle btn-lg"
                                                                style="background-color: #049252;
                                                        border-color: #049252;margin-top: 71px;"
                                                                onclick="sendcommnet()"><i class="fas fa-paper-plane"
                                                                    style="color: white;"></i> </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="example"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content"
                                        style="margin-top: 9%;max-height: 550px;;  background-color: #ffffff;">
                                        <div class="modal-header" style="padding: 9px 20px;">
                                            <h4 class="modal-title mt-3" style="font-weight: bold!important;">Tham
                                                khảo kết quả
                                                chấm</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body" style="padding: 0 24px;">
                                            <div class="row " style=" max-height: 312px;overflow: auto;"
                                                id="listmember">
                                                <div class="col-md-12 row rowContent" id="listProducts">

                                                </div>

                                            </div>
                                            <div style="float: right;margin: 24px 0;">
                                                <a href="#" class="btn btn-info" data-dismiss="modal">Đóng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="modal fade bs-example-modal-lg" id="exampleModalOcop" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog " role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="display: none;">
                                            <a id="a-clickat" href="javascript:showAllFileContent()"
                                                class="btn btn-sm btn-success">Xem hồ sơ đầy đủ</a>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="contentByPart" class="row" data-spy="scroll">
                                                <div class="col-md-12" style="text-align: center;">
                                                    <label class="textHeadermodal">Minh chứng</label><br>
                                                    <span style="font-style: italic;">(trích xuất dữ liệu từ sản phẩm đã
                                                        đăng
                                                        ký)</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row" style="    margin-top: 30px;" id="listpoof">

                                                    </div>
                                                    <div class="row" style="margin-top: 30px;" id="listpoofdoc">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row" style="    margin-top: 30px;" id="listpoofQuote">
                                                    </div>
                                                    <div class="row" style="margin-top: 30px;" id="listpoofdocQuote">
                                                    </div>
                                                </div>
                                                <div class="col-md-12" id="GDKKD" style="display: none;">
                                                    <div class="col-12">
                                                        <label class="textContentModal">Loại hình đơn vị</label><br>
                                                        <span id="LHDV"></span>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="textContentModal">Loại hình doanh
                                                            nghiệp</label><br>
                                                        <span id="LHDN"></span>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="textContentModal">Số giấy phép đăng ký kinh
                                                            doanh</label><br>
                                                        <span id="SGPDKKD"></span>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="textContentModal">Giấy phép kinh doanh</label><br>
                                                        <div id="GPKD" style="text-align: center;">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="textContentModal">Số vốn góp điều lệ</label><br>
                                                        <span id="SVGDL"></span>
                                                    </div>
                                                    <div class="col-12">
                                                        <label class="textContentModal">Số vốn góp của cộng đồng địa
                                                            phương</label><br>
                                                        <span id="SVGCCĐP"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12" id="SLD" style="display: none;">
                                                    <div class="col-12">
                                                        <label class="textContentModal">Số người lao động</label><br>
                                                        <span id="SNLD"></span>

                                                    </div>
                                                    <div class="col-12">
                                                        <label class="textContentModal">Số người lao động là người địa
                                                            phương</label><br>
                                                        <span id="SNLDLNDP"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12" id="DT" style="display: none;">
                                                    <div class="col-12">
                                                        <label class="textContentModal">Doanh thu chi phí</label><br>
                                                        <div class="table-responsive-md">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Năm</th>
                                                                        <th>Doanh thu</th>
                                                                        <th>Chi phí</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="tbody">

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12" id="ContentProof">

                                                </div>
                                            </div>
                                            <div id="allFileContent" class=" m-b-15" style="display: none;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card" style="width: 100%;">
                                                            <div class="card-header"
                                                                style="background-color: white;display: flex;padding: 17px;">
                                                                <div class="Rectangle">
                                                                </div>
                                                                <span class="SubHeading">YÊU CẦU BẮT BUỘC

                                                                </span>
                                                            </div>
                                                            <div class="card-body" id="ObligatoryModal">
                                                                <div class="ectangle">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#multiChoiceModal"
                                                                        onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54b', '62306c28910d6b236160f0b3', 'Phiếu đăng ký')"
                                                                        class="viewMem">

                                                                    </a>

                                                                    <div class="titlesinfo"> <a class="viewMem" herf="#"
                                                                            data-toggle="modal"
                                                                            data-target="#multiChoiceModal"
                                                                            onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54b', '62306c28910d6b236160f0b3', 'Phiếu đăng ký')">Phiếu
                                                                            đăng ký </a>

                                                                    </div>
                                                                    <div
                                                                        style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">
                                                                            <a class="uploadButton"
                                                                                href="javascript:openQuestionModal('5e4f946cffb6912ea06ea54b','62306c28910d6b236160f0b3','Phi%E1%BA%BFu %C4%91%C4%83ng k%C3%BD')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;"></a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3" class="questionMem"
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea54b')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style=" margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea54b","__v":0,"Contents":"Phiếu đăng ký ý tưởng sản phẩm, đăng ký sản phẩm","true":"1","TextCheck":"PDK","help":"1","check":"1","content":"Phiếu đăng ký","requirements":"Có theo mẫu đính kèm (biểu số 01, 02)","type":"Obligatory","supportInformation":{"explainText":"90% sản phẩm cùng loại trên thị trường được sản xuất từ một nguồn nguyên liệu, theo công nghệ chuẩn và trên thực tế là không có sự khác biệt nào. Vậy làm thế nào để người tiêu dùng phân biệt được tính ưu việt của sản phẩm? Quảng cáo thật nhiều trên các phương tiện truyền thông ư? Nhiều doanh nghiệp có khả năng làm được việc này. Giảm giá sản phẩm chăng? Các doanh nghiệp tuyên chiến với cuộc chiến giá cả thường buộc phải tạm thời quên đi nguồn lợi nhuận của mình. “Câu chuyện sản phẩm” chính là một trong những “chiêu” giúp doanh nghiệp tạo ra lợi nhuận một cách hữu hiệu nhất","tutorialDocs":[{"tutorialName":"Quy trình phiếu đăng ký","type":"doc","dataLinks":["https://view.officeapps.live.com/op/view.aspx?src=https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/CCSP.docx"]}],"tutorialVideos":["https://youtu.be/5JjVyZPu6Hw"]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ectangle">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#multiChoiceModal"
                                                                        onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54c', '62306c28910d6b236160f0b3', 'Phương án, kế hoạch kinh doanh sản phẩm')"
                                                                        class="viewMem">

                                                                    </a>

                                                                    <div class="titlesinfo"> <a class="viewMem" herf="#"
                                                                            data-toggle="modal"
                                                                            data-target="#multiChoiceModal"
                                                                            onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54c', '62306c28910d6b236160f0b3', 'Phương án, kế hoạch kinh doanh sản phẩm')">Phương
                                                                            án, kế hoạch kinh doanh sản phẩm </a>

                                                                    </div>
                                                                    <div
                                                                        style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">
                                                                            <a class="uploadButton"
                                                                                href="javascript:openQuestionModal('5e4f946cffb6912ea06ea54c','62306c28910d6b236160f0b3','Ph%C6%B0%C6%A1ng %C3%A1n, k%E1%BA%BF ho%E1%BA%A1ch kinh doanh s%E1%BA%A3n ph%E1%BA%A9m')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;"></a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3" class="questionMem"
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea54c')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style=" margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea54c","__v":0,"TextCheck":"KHKDSP","check":"1","content":"Phương án, kế hoạch kinh doanh sản phẩm","requirements":"Có theo mẫu đính kèm (biểu số 03)","type":"Obligatory","supportInformation":{"explainText":"Trong quá trình xây dựng và phát triển, các doanh nghiệp ắt hẳn phải nắm vững tình hình hoạt động hiện tại, xác định thị trường mục tiêu, đối thủ cạnh tranh để vạch ra cho mình đường lối phát triển trong tương lai. Đó là lý do vì sao các doanh nghiệp cần phải lập cho mình một bản kế hoạch kinh doanh thật chi tiết và cụ thể. Bạn cứ thử hình dung hoạt đông tương lai của doanh nghiệp như một con đường không ánh sáng, thì bản kế hoạch kinh doanh chính là chiếc đèn pin rọi sáng, giúp bạn bước những bước đi vững chắc về sau.","tutorialDocs":[{"tutorialName":"Infographic Các bước lập kế hoạch kinh doanh ","type":"image","dataLinks":["https://images.app.goo.gl/VpcRCEHPvBzbvwUc7"]},{"tutorialName":"Các bước lập kế hoạch kinh doanh ","type":"doc","dataLinks":["https://docs.google.com/document/d/19pmfKGXbLxZSxWLbKl8EH7vA7OdVl43XemkvrNxpMow/edit?usp=sharing"]}],"tutorialVideos":["https://www.youtube.com/watch?v=362uQ6x018s#action=share"]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ectangle">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#multiChoiceModal"
                                                                        onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54d', '62306c28910d6b236160f0b3', 'Giới thiệu bộ máy tổ chức')"
                                                                        class="viewMem">

                                                                    </a>

                                                                    <div class="titlesinfo"> <a class="viewMem" herf="#"
                                                                            data-toggle="modal"
                                                                            data-target="#multiChoiceModal"
                                                                            onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54d', '62306c28910d6b236160f0b3', 'Giới thiệu bộ máy tổ chức')">Giới
                                                                            thiệu bộ máy tổ chức </a>

                                                                    </div>
                                                                    <div
                                                                        style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">
                                                                            <a class="uploadButton"
                                                                                href="javascript:openQuestionModal('5e4f946cffb6912ea06ea54d','62306c28910d6b236160f0b3','Gi%E1%BB%9Bi thi%E1%BB%87u b%E1%BB%99 m%C3%A1y t%E1%BB%95 ch%E1%BB%A9c')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;"></a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3" class="questionMem"
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea54d')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style=" margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea54d","__v":0,"content":"Giới thiệu bộ máy tổ chức","requirements":"Có theo mẫu đính kèm (biểu số 04)","type":"Obligatory","supportInformation":{"explainText":"1. Sơ đồ tổ chức bộ máy (đối với doanh nghiệp, hợp tác xã): Chuẩn bị một sơ đồ tổ chức mà trong đó từng chức năng được minh họa cụ thể.\n</br> 2. Chức năng nhiệm vụ các bộ phận trong sơ đồ tổ chức: Mô tả nhân sự chủ chốt trong nhóm quản lý về mặt hiểu biết, kinh nghiệm quan hệ sản xuất kinh doanh, trình độ học vấn và trách nhiệm của họ trong sản xuất kinh doanh. Nêu sự khác biệt trong quản lý của chủ thể. ","tutorialDocs":[{"tutorialName":"Infographic Giới thiệu mô hình kinh doanh","type":"image","dataLinks":["http://tokyofounders.com/wp-content/uploads/2019/09/s%C4%914-768x252.png"]},{"tutorialName":"Giới thiệu bộ máy tổ chức","type":"doc","dataLinks":["https://docs.google.com/document/d/18IEch0Aaovk-URqveXvX8K8VUV8ZA9P-sg7Ql_OfUfc/edit?usp=sharing"]}],"tutorialVideos":["https://youtu.be/7c2I0Lo95LI"]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ectangle">
                                                                    <a href="#" data-toggle="modal" data-target="#step2"
                                                                        onclick="showModal('5e4f946cffb6912ea06ea54e','Giấy đăng ký kinh doanh')"
                                                                        class="viewMem">

                                                                    </a>

                                                                    <div class="titlesinfo"> <a class="viewMem" herf="#"
                                                                            data-toggle="modal" data-target="#step2"
                                                                            onclick="showModal('5e4f946cffb6912ea06ea54e','Giấy đăng ký kinh doanh')">Giấy
                                                                            đăng ký kinh doanh </a>

                                                                    </div>
                                                                    <div
                                                                        style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">

                                                                            <a class="uploadButton" href="#"
                                                                                data-toggle="modal" data-target="#step1"
                                                                                onclick="clicks('5e4f946cffb6912ea06ea54e','Giấy đăng ký kinh doanh')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3" class="questionMem"
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea54e')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style=" margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea54e","__v":0,"Note":"Hãy đảm bảo Giấy đăng ký kinh doanh còn hiệu lực","content":"Giấy đăng ký kinh doanh","requirements":"Bản sao có công chứng, chứng minh hoạt động kinh doanh hợp pháp (đối với các đơn vị/cá nhân có đăng ký kinh doanh)","type":"Obligatory","supportInformation":{"explainText":"Giống như mỗi con người khi được sinh ra đều có giấy khai sinh thì với doanh nghiệp cũng vậy, để biết một doanh nghiệp mới được thành lập hợp pháp thì phải có giấy chứng nhận đăng ký kinh doanh. Theo đó, giấy chứng nhận đăng ký kinh doanh là văn bản, bản điện tử mà Cơ quan nhà nước có thẩm quyền cấp cho doanh nghiệp ghi lại những thông tin về đăng ký kinh doanh mới nhất","tutorialDocs":[{"tutorialName":"infographic Giấy chứng nhận kinh doanh","type":"image","dataLinks":["https://images.app.goo.gl/nMDvCATEsmXQ9e919"]},{"tutorialName":"Giấy chứng nhận đăng ký kinh doanh là gì?","type":"doc","dataLinks":["https://docs.google.com/document/d/1bPnCnEnqujkOmRmfBIfxVAYSGEcto4ZZUBk-MdN2fpg/edit?usp=sharing"]}],"tutorialVideos":["https://www.youtube.com/watch?v=ItdLdvI_M3Q#action=share"]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ectangle">
                                                                    <a href="#" data-toggle="modal" data-target="#step2"
                                                                        onclick="showModal('5e4f946cffb6912ea06ea54f','Sản phẩm mẫu')"
                                                                        class="viewMem">

                                                                    </a>

                                                                    <div class="titlesinfo"> <a class="viewMem" herf="#"
                                                                            data-toggle="modal" data-target="#step2"
                                                                            onclick="showModal('5e4f946cffb6912ea06ea54f','Sản phẩm mẫu')">Sản
                                                                            phẩm mẫu </a>

                                                                    </div>
                                                                    <div
                                                                        style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">

                                                                            <a class="uploadButton" href="#"
                                                                                data-toggle="modal" data-target="#step1"
                                                                                onclick="clicks('5e4f946cffb6912ea06ea54f','Sản phẩm mẫu')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3" class="questionMem"
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea54f')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style=" margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea54f","__v":0,"content":"Sản phẩm mẫu","requirements":"05 đơn vị sản phẩm (trừ sản phẩm dịch vụ)","type":"Obligatory","supportInformation":{"explainText":"Mỗi doanh nghiệp cần có mẫu sản phẩm. Đây là hình thức marketing giới thiệu sản phẩm trực tiếp tới người tiêu dùng và cho người tiêu dùng trải nghiệm sản phẩm đó. Đây là hình thức quảng bá hình ảnh thông minh bởi thông qua hình thức này, doanh nghiệp, công ty có thể thu hồi ý kiến của khách hàng. Từ đó, có thể thay đổi, hoạch định chiến lược cho phù hợp. Ngoài ra, khách hàng cũng có thể quyết định chọn mua nếu cảm thấy hài lòng về sản phẩm.","tutorialDocs":[{"tutorialName":"infographic Cách đóng gói, bao bì sản phẩm","type":"image","dataLinks":["https://images.app.goo.gl/1d7Np14XqtPaXhLh8"]},{"tutorialName":"Xây dựng thương hiệu và mẫu mã sản phẩm","type":"doc","dataLinks":["https://docs.google.com/document/d/1t-lsd5Xk6FGSsxG0tbMCd9w9ZuRCnhRzXcR9fyYwxt8/edit?usp=sharing"]}],"tutorialVideos":["https://youtu.be/YDYycqhfJQk"]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-header"
                                                                style="background-color: white;display: flex;padding: 17px;">
                                                                <div class="Rectangle">
                                                                </div>
                                                                <span class="SubHeading ">TÀI LIỆU MINH CHỨNG BỔ
                                                                    SUNG</span>

                                                            </div>
                                                            <div class="card-body row" id="AdditionallyModal">
                                                                <div class="ectangle" style="position:relative">
                                                                    <a href="#" data-toggle="modal" class="viewMem"
                                                                        data-target="#step2"
                                                                        onclick="showModal('5e4f946cffb6912ea06ea550','Giấy đủ điều kiện sản xuất, giấy an toàn vệ sinh thực phẩm ...')">

                                                                    </a>
                                                                    <div class="titlesinfo" style="margin-bottom:50px">
                                                                        <a herf="#" data-toggle="modal" class="viewMem"
                                                                            data-target="#step2"
                                                                            onclick="showModal('5e4f946cffb6912ea06ea550','Giấy đủ điều kiện sản xuất, giấy an toàn vệ sinh thực phẩm ...')">Giấy
                                                                            đủ điều kiện sản xuất, giấy an toàn vệ sinh
                                                                            thực phẩm ... </a>

                                                                    </div>


                                                                    <div
                                                                        style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">

                                                                            <a class="uploadButton" href="#"
                                                                                data-toggle="modal" data-target="#step1"
                                                                                onclick="clicks('5e4f946cffb6912ea06ea550','Giấy đủ điều kiện sản xuất, giấy an toàn vệ sinh thực phẩm ...')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3"
                                                                                class="questionMem "
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea550')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="    margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea550","__v":0,"content":"Giấy đủ điều kiện sản xuất, giấy an toàn vệ sinh thực phẩm ...","requirements":"Bản sao có công chứng (đối với sản phẩm cần phải có giấy chứng nhận theo quy định hiện hành)","type":"Additionally","supportInformation":{"explainText":"Để có thể thành lập công ty hay bất cứ đơn vị nào đều cần check điều kiện sản xuất xem có phù hợp với lĩnh vực ngành nghề họ đăng ký hay không. Và đối với một sản phẩm cần phải có giấy chứng nhận theo quy định hiện hành cho từng loại sản phẩm và được cập nhật thường xuyên theo các văn bản điều chỉnh mới của các ngành. Các chủ hộ, chủ doanh nghiệp sản xuất kinh doanh phải đáp ứng Điều kiện cấp giấy chứng nhận đủ điều kiện sản xuất cho cơ sở kinh doanh của mình. ","tutorialDocs":[{"tutorialName":"Thủ tục cấp giấy chứng nhận cơ sở đủ điều kiện sản xuất","type":"doc","dataLinks":["https://docs.google.com/document/d/1GjDcbbJzgq77ChcQBJJyYcsK-72A2IYt9VSvH3I_OdQ/edit?usp=sharing"]}]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ectangle" style="position:relative">
                                                                    <a href="#" data-toggle="modal" class="viewMem"
                                                                        data-target="#step2"
                                                                        onclick="showModal('5e4f946cffb6912ea06ea551','Công bố chất lượng sản phẩm')">

                                                                    </a>
                                                                    <div class="titlesinfo" style="margin-bottom:50px">
                                                                        <a herf="#" data-toggle="modal" class="viewMem"
                                                                            data-target="#step2"
                                                                            onclick="showModal('5e4f946cffb6912ea06ea551','Công bố chất lượng sản phẩm')">Công
                                                                            bố chất lượng sản phẩm </a>

                                                                    </div>


                                                                    <div
                                                                        style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">

                                                                            <a class="uploadButton" href="#"
                                                                                data-toggle="modal" data-target="#step1"
                                                                                onclick="clicks('5e4f946cffb6912ea06ea551','Công bố chất lượng sản phẩm')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3"
                                                                                class="questionMem "
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea551')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="    margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea551","__v":0,"content":"Công bố chất lượng sản phẩm","requirements":"Bản sao tài liệu, chứng minh chất lượng sản phẩm được công bố","type":"Additionally","supportInformation":{"explainText":"Việc sở hữu giấy chứng nhận chất lượng hàng hóa nhằm chứng minh hàng hóa đạt chất lượng phù hợp với tiêu chuẩn công bố. Các doanh nghiệp nên xin giấy chứng nhận chất lượng cho sản phẩm, hàng hóa của mình vì nó giúp xây dựng niềm tin cho khách hàng về chất lượng và sự an toàn của sản phẩm, thúc đẩy lượng tiêu thụ sản phẩm đó trên thị trường.","tutorialDocs":[{"tutorialName":"Công bố chất lượng sản phẩm","type":"doc","dataLinks":["https://docs.google.com/document/d/1kZHE4RhihkdQgKFiirhdF7_e6PCThPPng016Z44WFjk/edit?usp=sharing"]}]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ectangle" style="position:relative">
                                                                    <a href="#" data-toggle="modal" class="viewMem"
                                                                        data-target="#step2"
                                                                        onclick="showModal('5e4f946cffb6912ea06ea552','Tiêu chuẩn sản phẩm')">

                                                                    </a>
                                                                    <div class="titlesinfo" style="margin-bottom:50px">
                                                                        <a herf="#" data-toggle="modal" class="viewMem"
                                                                            data-target="#step2"
                                                                            onclick="showModal('5e4f946cffb6912ea06ea552','Tiêu chuẩn sản phẩm')">Tiêu
                                                                            chuẩn sản phẩm </a>

                                                                    </div>


                                                                    <div
                                                                        style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">

                                                                            <a class="uploadButton" href="#"
                                                                                data-toggle="modal" data-target="#step1"
                                                                                onclick="clicks('5e4f946cffb6912ea06ea552','Tiêu chuẩn sản phẩm')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3"
                                                                                class="questionMem "
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea552')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="    margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea552","__v":0,"content":"Tiêu chuẩn sản phẩm","requirements":"Bản sao tài liệu, chứng minh tiêu chuẩn sản phẩm được công bố","type":"Additionally","supportInformation":{"explainText":"Tiêu chuẩn là quy định về đặc tính kỹ thuật và yêu cầu quản lý dùng làm chuẩn để phân loại, đánh giá sản phẩm, hàng hoá, dịch vụ, quá trình, môi trường và các đối tượng khác trong hoạt động kinh tế - xã hội nhằm nâng cao chất lượng và hiệu quả của các đối tượng này. Tiêu chuẩn do một tổ chức công bố dưới dạng văn bản để tự nguyện áp dụng.","tutorialDocs":[{"tutorialName":"Tiêu chuẩn sản phẩm","type":"doc","dataLinks":["https://docs.google.com/document/d/1cetir_chVVuUb0KMdMnXI3AdrkVuvZNx88HuQDZ_NBE/edit?usp=sharing"]}]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ectangle" style="position:relative">
                                                                    <a href="#" data-toggle="modal" class="viewMem"
                                                                        data-target="#step2"
                                                                        onclick="showModal('5e4f946cffb6912ea06ea553','Phiếu kết quả kiểm tra chỉ tiêu an toàn thực phẩm theo tiêu chuẩn công bố')">

                                                                    </a>
                                                                    <div class="titlesinfo" style="margin-bottom:50px">
                                                                        <a herf="#" data-toggle="modal" class="viewMem"
                                                                            data-target="#step2"
                                                                            onclick="showModal('5e4f946cffb6912ea06ea553','Phiếu kết quả kiểm tra chỉ tiêu an toàn thực phẩm theo tiêu chuẩn công bố')">Phiếu
                                                                            kết quả kiểm tra chỉ tiêu an toàn thực phẩm
                                                                            theo tiêu chuẩn công bố </a>

                                                                    </div>


                                                                    <div
                                                                        style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">

                                                                            <a class="uploadButton" href="#"
                                                                                data-toggle="modal" data-target="#step1"
                                                                                onclick="clicks('5e4f946cffb6912ea06ea553','Phiếu kết quả kiểm tra chỉ tiêu an toàn thực phẩm theo tiêu chuẩn công bố')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3"
                                                                                class="questionMem "
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea553')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="    margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea553","__v":0,"content":"Phiếu kết quả kiểm tra chỉ tiêu an toàn thực phẩm theo tiêu chuẩn công bố","requirements":"Bản sao tài liệu, chứng minh đạt tiêu chuẩn vệ sinh an toàn thực phẩm","type":"Additionally","supportInformation":{"explainText":"Để có thể sản xuất, kinh doanh sản phẩm thực phẩm, công bố chất lượng sản phẩm thực phẩm thì đầu tiên Cơ sở sản xuất, kinh doanh phải được cấp Giấy chứng nhận cơ sở đủ điều kiện an toàn thực phẩm.","tutorialDocs":[{"tutorialName":"Thủ tục cấp giấy chứng nhận cơ sở đủ điều kiện an toàn thực phẩm","type":"doc","dataLinks":["https://docs.google.com/document/d/177NJQX0vUNfx7S99F2I0CXf-NEj5X1Sh2jBjjuOkS9U/edit?usp=sharing"]}]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ectangle" style="position:relative">
                                                                    <a href="#" data-toggle="modal" class="viewMem"
                                                                        data-target="#step2"
                                                                        onclick="showModal('5e4f946cffb6912ea06ea554','Mã số mã vạch, tem truy xuất nguồn gốc, chứng nhận sở hữu trí tuệ, chỉ dẫn địa lý, nhãn hiệu sản phẩm...')">

                                                                    </a>
                                                                    <div class="titlesinfo" style="margin-bottom:50px">
                                                                        <a herf="#" data-toggle="modal" class="viewMem"
                                                                            data-target="#step2"
                                                                            onclick="showModal('5e4f946cffb6912ea06ea554','Mã số mã vạch, tem truy xuất nguồn gốc, chứng nhận sở hữu trí tuệ, chỉ dẫn địa lý, nhãn hiệu sản phẩm...')">Mã
                                                                            số mã vạch, tem truy xuất nguồn gốc, chứng
                                                                            nhận sở hữu trí tuệ, chỉ dẫn địa lý, nhãn
                                                                            hiệu sản phẩm... </a>

                                                                    </div>


                                                                    <div
                                                                        style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">

                                                                            <a class="uploadButton" href="#"
                                                                                data-toggle="modal" data-target="#step1"
                                                                                onclick="clicks('5e4f946cffb6912ea06ea554','Mã số mã vạch, tem truy xuất nguồn gốc, chứng nhận sở hữu trí tuệ, chỉ dẫn địa lý, nhãn hiệu sản phẩm...')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3"
                                                                                class="questionMem "
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea554')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="    margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea554","__v":0,"check":"1","content":"Mã số mã vạch, tem truy xuất nguồn gốc, chứng nhận sở hữu trí tuệ, chỉ dẫn địa lý, nhãn hiệu sản phẩm...","requirements":"Bản sao tài liệu, chứng minh mã, tem, sở hữu thương hiệu...","type":"Additionally","supportInformation":{"explainText":"Thực trạng hiện nay trước những vấn nạn như hàng giả, hàng nhái, hàng lưu thông không có nguồn gốc xuất xứ, sản phẩm chứa chất cấm, độc hại ảnh hưởng tiêu cực đến sức khỏe người tiêu dùng. Truy xuất nguồn gốc được xem như một giải pháp để giải quyết vấn nạn trên và thực sự truy xuất nguồn gốc đang trở thành vấn đề nóng được quan tâm trên toàn cầu.","tutorialDocs":[{"tutorialName":"Nhãn hàng hóa","type":"doc","dataLinks":["https://docs.google.com/document/d/1ZjXSdk8Bqb-97Kc3850fZELL0QhNTHXlsSlBpa8UY-c/edit?usp=sharing"]}]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ectangle" style="position:relative">
                                                                    <a href="#" data-toggle="modal" class="viewMem"
                                                                        data-target="#step2"
                                                                        onclick="showModal('5e4f946cffb6912ea06ea555','Nguồn gốc nguyên liệu, liên kết chuỗi')">

                                                                    </a>
                                                                    <div class="titlesinfo" style="margin-bottom:50px">
                                                                        <a herf="#" data-toggle="modal" class="viewMem"
                                                                            data-target="#step2"
                                                                            onclick="showModal('5e4f946cffb6912ea06ea555','Nguồn gốc nguyên liệu, liên kết chuỗi')">Nguồn
                                                                            gốc nguyên liệu, liên kết chuỗi </a>

                                                                    </div>


                                                                    <div
                                                                        style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">

                                                                            <a class="uploadButton" href="#"
                                                                                data-toggle="modal" data-target="#step1"
                                                                                onclick="clicks('5e4f946cffb6912ea06ea555','Nguồn gốc nguyên liệu, liên kết chuỗi')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3"
                                                                                class="questionMem "
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea555')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="    margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea555","__v":0,"content":"Nguồn gốc nguyên liệu, liên kết chuỗi","requirements":"Bản sao tài liệu: Giấy xác nhận, hợp đồng, hóa đơn... chứng minh việc mua bán nguyên vật liệu, hợp đồng, thỏa thuận liên kết","type":"Additionally","supportInformation":{"explainText":"Liên kết sản xuất gắn với tiêu thụ nông sản có vai trò rất quan trọng trong phát triển nông nghiệp. Vì vậy, những năm gần đây, các địa phương trong tỉnh đang đẩy mạnh thực hiện phát triển chuỗi liên kết, tiêu thụ sản phẩm nông nghiệp, góp phần nâng cao năng suất, chất lượng, giá trị sản phẩm nông nghiệp, đồng thời tăng quy mô sản xuất hàng hóa, áp dụng các quy trình sản xuất hiện đại, nâng cao năng lực quản lý, điều hành, tổ chức sản xuất cho các doanh nghiệp (DN), hợp tác xã (HTX) liên kết và trình độ của người dân.","tutorialDocs":[{"tutorialName":"Nguồn gốc nguyên liệu, liên kết chuỗi","type":"doc","dataLinks":["https://docs.google.com/document/d/1evZ0ipZhGZgr-IRRx4asZ2NfdrY0hCVp0Jb3kiH_Dc8/edit?usp=sharing"]}]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ectangle" style="position:relative">
                                                                    <a href="#" data-toggle="modal" class="viewMem"
                                                                        data-target="#step2"
                                                                        onclick="showModal('5e4f946cffb6912ea06ea557','Hệ thống quản lý chất lượng tiên tiến, kiểm soát chất lượng')">

                                                                    </a>
                                                                    <div class="titlesinfo" style="margin-bottom:50px">
                                                                        <a herf="#" data-toggle="modal" class="viewMem"
                                                                            data-target="#step2"
                                                                            onclick="showModal('5e4f946cffb6912ea06ea557','Hệ thống quản lý chất lượng tiên tiến, kiểm soát chất lượng')">Hệ
                                                                            thống quản lý chất lượng tiên tiến, kiểm
                                                                            soát chất lượng </a>

                                                                    </div>


                                                                    <div
                                                                        style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">

                                                                            <a class="uploadButton" href="#"
                                                                                data-toggle="modal" data-target="#step1"
                                                                                onclick="clicks('5e4f946cffb6912ea06ea557','Hệ thống quản lý chất lượng tiên tiến, kiểm soát chất lượng')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3"
                                                                                class="questionMem "
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea557')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="    margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea557","__v":0,"content":"Hệ thống quản lý chất lượng tiên tiến, kiểm soát chất lượng","requirements":"Bản sao tài liệu: chứng nhận Hệ thống quản lý chất lượng tiên tiến, chứng minh hệ thống quản lý đạt tiêu chuẩn","type":"Additionally","supportInformation":{"explainText":"Hệ thống quản lý chất lượng là hệ thống quản lý để định hướng và kiểm soát một tổ chức về mặt chất lượng sản phẩm","tutorialDocs":[{"tutorialName":"Hệ thống quản lý là gì?","type":"doc","dataLinks":["https://docs.google.com/document/d/12BxjGmnW0GT720r5xKom6hiiuiiPyPPVZO68RbR_8eY/edit?usp=sharing"]}]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ectangle" style="position:relative">
                                                                    <a href="#" data-toggle="modal" class="viewMem"
                                                                        data-target="#step2"
                                                                        onclick="showModal('5e4f946cffb6912ea06ea556','Bảo vệ môi trường')">

                                                                    </a>
                                                                    <div class="titlesinfo" style="margin-bottom:50px">
                                                                        <a herf="#" data-toggle="modal" class="viewMem"
                                                                            data-target="#step2"
                                                                            onclick="showModal('5e4f946cffb6912ea06ea556','Bảo vệ môi trường')">Bảo
                                                                            vệ môi trường </a>

                                                                    </div>


                                                                    <div
                                                                        style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">

                                                                            <a class="uploadButton" href="#"
                                                                                data-toggle="modal" data-target="#step1"
                                                                                onclick="clicks('5e4f946cffb6912ea06ea556','Bảo vệ môi trường')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3"
                                                                                class="questionMem "
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea556')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="    margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea556","__v":0,"content":"Bảo vệ môi trường","requirements":"Bản sao tài liệu: Giấy xác nhận Kế hoạch bảo vệ môi trường, chứng minh cam kết, đánh giá tác động môi trường","type":"Additionally","supportInformation":{"explainText":"Giấy xác nhận Kế hoạch bảo vệ môi trường là một loại hồ sơ môi trường, là hồ sơ pháp lý thay cho lời cam kết bảo vệ môi trường của chủ Doanh nghiệp. Chủ doanh nghiệp sẽ phải phân tích, đánh giá và dự báo về mức độ gây ô nhiễm môi trường của dự án mà mình sẽ đầu tư gây ra từ giai đoạn xậy dựng cho đến khi đi vào hoạt động","tutorialDocs":[{"tutorialName":"Bảo vệ môi trường","type":"doc","dataLinks":["https://docs.google.com/document/d/1MgR-Tx-krPLy14RauQ8VJ3cKEFNmoL1rNV2HzXgLDB8/edit?usp=sharing"]}]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ectangle" style="position:relative">
                                                                    <a href="#" data-toggle="modal" class="viewMem"
                                                                        data-target="#step2"
                                                                        onclick="showModal('5e4f946cffb6912ea06ea558','Kế toán')">

                                                                    </a>
                                                                    <div class="titlesinfo" style="margin-bottom:50px">
                                                                        <a herf="#" data-toggle="modal" class="viewMem"
                                                                            data-target="#step2"
                                                                            onclick="showModal('5e4f946cffb6912ea06ea558','Kế toán')">Kế
                                                                            toán </a>

                                                                    </div>


                                                                    <div
                                                                        style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">

                                                                            <a class="uploadButton" href="#"
                                                                                data-toggle="modal" data-target="#step1"
                                                                                onclick="clicks('5e4f946cffb6912ea06ea558','Kế toán')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3"
                                                                                class="questionMem "
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea558')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="    margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea558","__v":0,"content":"Kế toán","requirements":"Bản sao tài liệu, minh chứng hoạt động kế toán của cơ sở","type":"Additionally","supportInformation":{"explainText":"Hoạt động kế toán nói một cách đơn giản là tập hợp ghi chép tất cả các giao dịch, tài chính phát sinh của công ty, được sắp xếp một cách có hệ thống để dễ dàng tra cứu và kiểm tra. Sự minh bạch trong tài chính là điều cơ bản mà một doanh nghiệp cần phải có. Bất kỳ doanh nghiệp lớn nhỏ nào đều có sổ sách kế toán, bởi đây là cơ sở là minh chứng cho thấy hiệu quả của hoạt động kinh doanh. Sổ sách kế toán còn là căn cứ để doanh nghiệp hoàn thành nghĩa vụ thuế với cơ quan thuế nhà nước.","tutorialDocs":[{"tutorialName":"Quy định về chứng từ kế toán theo luật Kế Toán 2015","type":"doc","dataLinks":["https://docs.google.com/document/d/1LfMwbUjk5wsTM3BeUbPIX2r2bASIVTHoUfZMQJm3wgU/edit?usp=sharing"]}]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ectangle" style="position:relative">
                                                                    <a href="#" data-toggle="modal" class="viewMem"
                                                                        data-target="#step2"
                                                                        onclick="showModal('5e4f946cffb6912ea06ea559','Phát triển thị trường, hoạt động quảng bá, xúc tiến thương mại')">

                                                                    </a>
                                                                    <div class="titlesinfo" style="margin-bottom:50px">
                                                                        <a herf="#" data-toggle="modal" class="viewMem"
                                                                            data-target="#step2"
                                                                            onclick="showModal('5e4f946cffb6912ea06ea559','Phát triển thị trường, hoạt động quảng bá, xúc tiến thương mại')">Phát
                                                                            triển thị trường, hoạt động quảng bá, xúc
                                                                            tiến thương mại </a>

                                                                    </div>


                                                                    <div
                                                                        style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">

                                                                            <a class="uploadButton" href="#"
                                                                                data-toggle="modal" data-target="#step1"
                                                                                onclick="clicks('5e4f946cffb6912ea06ea559','Phát triển thị trường, hoạt động quảng bá, xúc tiến thương mại')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3"
                                                                                class="questionMem "
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea559')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="    margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea559","__v":0,"content":"Phát triển thị trường, hoạt động quảng bá, xúc tiến thương mại","requirements":"Bản sao tài liệu: Hợp đồng, cam kết, xác nhận về phân phối sản phẩm, xuất khẩu sản phẩm, hoạt động xúc tiến thương mại...","type":"Additionally","supportInformation":{"explainText":"Xúc tiến thương mại là hoạt động thúc đẩy, tìm kiếm cơ hội mua bán hàng hoá và cung ứng dịch vụ, bao gồm hoạt động khuyến mại, quảng cáo thương mại, trưng bày, giới thiệu hàng hoá, dịch vụ và hội chợ, triển lãm thương mại","tutorialDocs":[{"tutorialName":"Phát triển thị trường, hoạt động quảng bá, xúc tiến thương mại","type":"doc","dataLinks":["https://docs.google.com/document/d/1FQuDX4U19I5XDShVqyd68eHSwWlqLcWNGUOluWEOZfc/edit?usp=sharing"]}]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ectangle" style="position:relative">
                                                                    <a href="#" data-toggle="modal" class="viewMem"
                                                                        data-target="#step2"
                                                                        onclick="showModal('5e4f946cffb6912ea06ea55a','Câu chuyện về sản phẩm')">

                                                                    </a>
                                                                    <div class="titlesinfo" style="margin-bottom:50px">
                                                                        <a herf="#" data-toggle="modal" class="viewMem"
                                                                            data-target="#step2"
                                                                            onclick="showModal('5e4f946cffb6912ea06ea55a','Câu chuyện về sản phẩm')">Câu
                                                                            chuyện về sản phẩm </a>

                                                                    </div>


                                                                    <div
                                                                        style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">

                                                                            <a class="uploadButton" href="#"
                                                                                data-toggle="modal" data-target="#step1"
                                                                                onclick="clicks('5e4f946cffb6912ea06ea55a','Câu chuyện về sản phẩm')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3"
                                                                                class="questionMem "
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea55a')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="    margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea55a","__v":0,"content":"Câu chuyện về sản phẩm","requirements":"Bản sao tờ rơi, hình ảnh, phim, ghi âm... minh chứng về câu chuyện của sản phẩm","type":"Additionally","supportInformation":{"explainText":"Câu chuyện sản phẩm là thông điệp mà chủ thể truyền tải phần “GIÁ TRỊ CỐT LÕI” của sản phẩm đến với khách hàng.","tutorialDocs":[{"tutorialName":"Câu chuyện về sản phẩm","type":"doc","dataLinks":["https://docs.google.com/document/d/1gQPvZEI4Grae31K_LXc9w8nKKPxYbDep4EqOxvTw93o/edit?usp=sharing"]}]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ectangle" style="position:relative">
                                                                    <a href="#" data-toggle="modal" class="viewMem"
                                                                        data-target="#step2"
                                                                        onclick="showModal('5e4f946cffb6912ea06ea55b','Kế hoạch kiểm soát chất lượng, ghi hồ sơ lô sản xuất...')">

                                                                    </a>
                                                                    <div class="titlesinfo" style="margin-bottom:50px">
                                                                        <a herf="#" data-toggle="modal" class="viewMem"
                                                                            data-target="#step2"
                                                                            onclick="showModal('5e4f946cffb6912ea06ea55b','Kế hoạch kiểm soát chất lượng, ghi hồ sơ lô sản xuất...')">Kế
                                                                            hoạch kiểm soát chất lượng, ghi hồ sơ lô sản
                                                                            xuất... </a>

                                                                    </div>


                                                                    <div
                                                                        style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">

                                                                            <a class="uploadButton" href="#"
                                                                                data-toggle="modal" data-target="#step1"
                                                                                onclick="clicks('5e4f946cffb6912ea06ea55b','Kế hoạch kiểm soát chất lượng, ghi hồ sơ lô sản xuất...')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3"
                                                                                class="questionMem "
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea55b')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="    margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea55b","__v":0,"content":"Kế hoạch kiểm soát chất lượng, ghi hồ sơ lô sản xuất...","requirements":"Bản sao tài liệu, minh chứng về hoạt động kiểm soát chất lượng sản phẩm theo từng lô sản xuất","type":"Additionally","supportInformation":{"explainText":"Kế hoạch kiểm soát chất lượng là biện pháp góp phần nâng cao chất lượng của hàng hóa và dịch vụ. Hồ sơ lô là tất cả tài liệu có liên quan đến việc sản xuất một lô bán thành phẩm hoặc thành phẩm.","tutorialDocs":[{"tutorialName":"Kế hoạch kiểm soát chất lượng, ghi hồ sơ lô sản xuất...","type":"doc","dataLinks":["https://docs.google.com/document/d/1vdK9kxI70L3jc1ZYjt-AA8_YjAySeR2WPVZ_8U-r53w/edit?usp=sharing"]}]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="ectangle" style="position:relative">
                                                                    <a href="#" data-toggle="modal" class="viewMem"
                                                                        data-target="#step2"
                                                                        onclick="showModal('5e4f946cffb6912ea06ea55c','Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế...')">

                                                                    </a>
                                                                    <div class="titlesinfo" style="margin-bottom:50px">
                                                                        <a herf="#" data-toggle="modal" class="viewMem"
                                                                            data-target="#step2"
                                                                            onclick="showModal('5e4f946cffb6912ea06ea55c','Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế...')">Giải
                                                                            thưởng của sản phẩm, bình chọn của các tổ
                                                                            chức uy tín trong nước và quốc tế... </a>

                                                                    </div>


                                                                    <div
                                                                        style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                                                                        <div class="Rectangle-Copy">

                                                                            <a class="uploadButton" href="#"
                                                                                data-toggle="modal" data-target="#step1"
                                                                                onclick="clicks('5e4f946cffb6912ea06ea55c','Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế...')">
                                                                                <img src="{{ asset('images/primary.png') }}"
                                                                                    srcset="{{ asset('images/primary2x.png') }} 2x, {{ asset('images/primary3x.png') }} 3x"
                                                                                    class="Primary"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy" style="margin-right: 8px;">
                                                                            <a href="" data-toggle="modal"
                                                                                data-target="#step3"
                                                                                class="questionMem "
                                                                                onclick="clickquestion('5e4f946cffb6912ea06ea55c')">
                                                                                <img src="{{ asset('images/s.png') }}"
                                                                                    srcset="{{ asset('images/s2x.png') }} 2x, {{ asset('images/s3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="    margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                        <div class="re-Copy">
                                                                            <a href="#" class="supportModalMem"
                                                                                data-toggle="modal"
                                                                                data-target="#supportModal"
                                                                                onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea55c","__v":0,"content":"Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế...","requirements":"Bản sao tài liệu, minh chứng về các thành tích, giải thưởng, bình chọn...","type":"Additionally","supportInformation":{"explainText":"Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế... giúp thể hiện sự công nhận của các tổ chức với những đóng góp của doanh nghiệp, cá nhân sản xuất kinh doanh trong hoạt động sản xuất, quảng bá sản phẩm. ","tutorialDocs":[{"tutorialName":"Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế..","type":"doc","dataLinks":["https://docs.google.com/document/d/1iS_lzNCzOSYIZKJ5cADM_CUi_I9LDHBJtre0Ho_Y0Oo/edit?usp=sharing"]}]},"proofinfors":[]})'>
                                                                                <img src="{{ asset('images/black.png') }}"
                                                                                    srcset="{{ asset('images/black2x.png') }} 2x, {{ asset('images/black3x.png') }} 3x"
                                                                                    class="Black"
                                                                                    style="margin-top: 13px;">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="modal" id="form01" style="display: none;" tabindex="-1"
                                                    role="dialog">
                                                    <div class="modal-dialog" role="document"
                                                        style="top: -16px;left: -8px;margin-bottom: 74px;">
                                                        <div class="modal-content"
                                                            style="margin-top: 9%;  background-color: #ffffff;">
                                                            <button type="button" class="close"
                                                                onclick="closeModalform01()" aria-label="Đóng">
                                                                <span aria-hidden="true">
                                                                    <font style="vertical-align: inherit;float: right;
                                                                                        margin-right: 20px;">
                                                                        <font
                                                                            style="vertical-align: inherit;font-size: 32px;">
                                                                            ×
                                                                        </font>
                                                                    </font>
                                                                </span>
                                                            </button>
                                                            <div class="modal-body"
                                                                style="padding: 0 24px;padding: 0 24px;min-height: 150px;">
                                                                <div id="spinner"
                                                                    style="display: none ;margin-top: 39px;    text-align: center;">
                                                                    <div class="spinner-grow text-success spinner"
                                                                        role="status">
                                                                        <span class="sr-only">Loading...</span>
                                                                    </div>
                                                                    <div class="spinner-grow text-danger spinner"
                                                                        role="status">
                                                                        <span class="sr-only">Loading...</span>
                                                                    </div>
                                                                    <div class="spinner-grow text-warning spinner"
                                                                        role="status">
                                                                        <span class="sr-only">Loading...</span>
                                                                    </div>
                                                                </div>

                                                                <div id="mainContent">

                                                                </div>
                                                                <div id="infoswal"
                                                                    style="margin-top: 38px;font-weight: 600;font-size: 17px;font-style: italic;display: none;">
                                                                    <span>Bạn chưa hoàn thành biểu mẫu</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Đóng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade long-modal" id="Modaliffo" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true"
                                style="display: none;overflow: auto;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="longmodal">Minh chứng đã nộp</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="Note-Copy" id="docu" style="width: 100%;"></p>
                                            <div class="row" id="ImgModal-info-detailfile">
                                            </div>
                                            <div class="row" id="LinkModal-info-detailfile">
                                            </div>
                                            <div class="row" id="DocModal-info-detailfile">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button"
                                                onclick="closeModal()">Đóng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="padding-bottom: 0;">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="dropzone dz-clickable" id="dropzoneMytwo"
                                                style="margin-bottom: 20px;    text-align: center;">
                                                <div class="dropzone-previews">
                                                </div>
                                                <div class="dz-default dz-message"><span><span
                                                            style="font-weight: 600;font-family: sans-serif; color: #039252"><i
                                                                class="fas fa-cloud-upload-alt fa-5x"></i><br> Chọn
                                                            file</span><i class="fa fa-folders"></i></span></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="emailsend">Địa chỉ email người nhận*</label>
                                                <div class="tags-default">
                                                    <div class="bootstrap-tagsinput"><input type="text" placeholder="">
                                                    </div><input type="text" data-role="tagsinput" id="emailsend"
                                                        style="display: none;">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="su">Chủ đề*</label>
                                                <input type="text" class="form-control" id="su">
                                            </div>
                                            <div class="form-group">
                                                <label for="bcc">Bcc*</label>
                                                <input type="text" class="form-control" id="bcc">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc">Cc*</label>
                                                <input type="text" class="form-control" id="cc">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-success btn-sm" id="senmail"
                                                style="width: 100%;border-radius: 0;background: #039252;"
                                                onclick="sendmail()">Lập
                                                lệnh gửi</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal" id="formcontrol" style="display: none;overflow: auto;" tabindex="-1"
                                role="dialog">
                                <div class="modal-dialog" role="document" style="margin-bottom: 74px;">
                                    <div class="modal-content" style="margin-top: 9%;  background-color: #ffffff;">
                                        <div class="modal-header">
                                            <a href="#" data-toggle="modal" data-target="#exampleModalOcop"
                                                onclick="closeModalform()">
                                                <i class="fa fa-arrow-left"></i><label
                                                    style="margin-top: 10px;    margin-left: 7px;">Quay lại</label>
                                            </a>
                                            <a href="#" class="close btn" onclick="closeModalform()" aria-label="Đóng">
                                                <span aria-hidden="true">
                                                    <font style="vertical-align: inherit;float: right;
                                                        margin-right: 20px;">
                                                        <font style="vertical-align: inherit;font-size: 32px;">×
                                                        </font>
                                                    </font>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="modal-body"
                                            style="padding: 0 24px;padding: 0 24px;min-height: 150px;">
                                            <div id="spinner1"
                                                style="display: none ;margin-top: 39px;    text-align: center;">
                                                <div class="spinner-grow text-success spinner" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                <div class="spinner-grow text-danger spinner" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                                <div class="spinner-grow text-warning spinner" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </div>

                                            <div id="mainContentcontroll">

                                            </div>
                                            <div id="infoswal1"
                                                style="margin-top: 38px;font-weight: 600;font-size: 17px;font-style: italic;display: none;">
                                                <span>Bạn chưa hoàn thành biểu mẫu</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal" id="form01" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="margin-top: 9%;  background-color: #ffffff;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="padding: 0 24px;padding: 0 24px;min-height: 150px;">
                        <div id="spinner" style="display:none ;margin-top: 39px;    text-align: center;">
                            <div class="spinner-grow text-success spinner" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow text-danger spinner" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow text-warning spinner" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        <div id="mainContent">

                        </div>
                        <div id="infoswal"
                            style="margin-top: 38px;font-weight: 600;font-size: 17px;font-style: italic;display: none;">
                            <span>Bạn chưa hoàn thành biểu mẫu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="multiChoiceModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="margin-top: 9%;  background-color: #ffffff;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul id="multiChoiceOptions">

                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ************ Models evaluation Set ************* -->
        <div id="createNewPrecedent" class="modal fade" tabindex="-1" data-backdrop="static" role="dialog"
            aria-hidden="true" style="overflow: auto !important;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title mt-3">Tiền lệ</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="form-group">
                                <label for="name">Chủ đề :</label>
                                <input type="text" class="form-control mb-2" id="newPrecedentTopic">
                                <label for="name">Tiêu đề :</label>
                                <input type="text" class="form-control mb-2" id="newPrecedentTitle">
                                <label for="name">Từ khóa :</label>
                                <div class="bootstrap-tagsinput"><input type="text"
                                        placeholder="ấn phím 'enter' để tạo"></div><input type="text"
                                    placeholder="ấn phím 'enter' để tạo" data-role="tagsinput" class="form-control mb-2"
                                    id="newPrecedentKeywords" style="display: none;">
                            </div>
                            <h6 class="mt-2 mb-2">Nội dung:</h6>
                            <div id="summernoteEditor" class="mt-3" style="display: none;">
                            </div>
                            <div class="note-editor note-frame card">
                                <div class="note-dropzone">
                                    <div class="note-dropzone-message"></div>
                                </div>
                                <div class="note-toolbar-wrapper">
                                    <div class="note-toolbar card-header" role="toolbar">
                                        <div class="note-btn-group btn-group note-style">
                                            <div class="note-btn-group btn-group"><button type="button"
                                                    class="note-btn btn btn-light btn-sm dropdown-toggle" role="button"
                                                    tabindex="-1" data-toggle="dropdown" title="Style"
                                                    aria-label="Style"><i class="note-icon-magic"></i></button>
                                                <div class="dropdown-menu dropdown-style" role="list"
                                                    aria-label="Style"><a class="dropdown-item" href="#" data-value="p"
                                                        role="listitem" aria-label="p">
                                                        <p>Normal</p>
                                                    </a><a class="dropdown-item" href="#" data-value="blockquote"
                                                        role="listitem" aria-label="[object Object]">
                                                        <blockquote class="blockquote">Blockquote</blockquote>
                                                    </a><a class="dropdown-item" href="#" data-value="h1"
                                                        role="listitem" aria-label="h1">
                                                        <h1>Header 1</h1>
                                                    </a><a class="dropdown-item" href="#" data-value="h2"
                                                        role="listitem" aria-label="h2">
                                                        <h2>Header 2</h2>
                                                    </a><a class="dropdown-item" href="#" data-value="h3"
                                                        role="listitem" aria-label="h3">
                                                        <h3>Header 3</h3>
                                                    </a><a class="dropdown-item" href="#" data-value="h4"
                                                        role="listitem" aria-label="h4">
                                                        <h4>Header 4</h4>
                                                    </a><a class="dropdown-item" href="#" data-value="h5"
                                                        role="listitem" aria-label="h5">
                                                        <h5>Header 5</h5>
                                                    </a><a class="dropdown-item" href="#" data-value="h6"
                                                        role="listitem" aria-label="h6">
                                                        <h6>Header 6</h6>
                                                    </a></div>
                                            </div>
                                        </div>
                                        <div class="note-btn-group btn-group note-font"><button type="button"
                                                class="note-btn btn btn-light btn-sm note-btn-bold" role="button"
                                                tabindex="-1" title="Bold (⌘+B)" aria-label="Bold (⌘+B)"><i
                                                    class="note-icon-bold"></i></button><button type="button"
                                                class="note-btn btn btn-light btn-sm note-btn-underline" role="button"
                                                tabindex="-1" title="Underline (⌘+U)" aria-label="Underline (⌘+U)"><i
                                                    class="note-icon-underline"></i></button><button type="button"
                                                class="note-btn btn btn-light btn-sm" role="button" tabindex="-1"
                                                title="Remove Font Style (⌘+\)" aria-label="Remove Font Style (⌘+\)"><i
                                                    class="note-icon-eraser"></i></button></div>
                                        <div class="note-btn-group btn-group note-fontname">
                                            <div class="note-btn-group btn-group"><button type="button"
                                                    class="note-btn btn btn-light btn-sm dropdown-toggle" role="button"
                                                    tabindex="-1" data-toggle="dropdown" title="Font Family"
                                                    aria-label="Font Family"><span class="note-current-fontname"
                                                        style="font-family: Quicksand;">Quicksand</span></button>
                                                <div class="dropdown-menu note-check dropdown-fontname" role="list"
                                                    aria-label="Font Family"><a class="dropdown-item checked" href="#"
                                                        data-value="Quicksand" role="listitem" aria-label="Quicksand"><i
                                                            class="note-icon-menu-check"></i> <span
                                                            style="font-family: 'Quicksand'">Quicksand</span></a></div>
                                            </div>
                                        </div>
                                        <div class="note-btn-group btn-group note-color">
                                            <div class="note-btn-group btn-group note-color"><button type="button"
                                                    class="note-btn btn btn-light btn-sm note-current-color-button"
                                                    role="button" tabindex="-1" title="Recent Color"
                                                    aria-label="Recent Color" data-backcolor="#FFFF00"><i
                                                        class="note-icon-font note-recent-color"
                                                        style="background-color: rgb(255, 255, 0);"></i></button><button
                                                    type="button" class="note-btn btn btn-light btn-sm dropdown-toggle"
                                                    role="button" tabindex="-1" data-toggle="dropdown"
                                                    title="More Color" aria-label="More Color"></button>
                                                <div class="dropdown-menu" role="list">
                                                    <div class="note-palette">
                                                        <div class="note-palette-title">Background Color</div>
                                                        <div> <button type="button"
                                                                class="note-color-reset btn btn-light"
                                                                data-event="backColor" data-value="inherit">Transparent
                                                            </button> </div>
                                                        <div class="note-holder" data-event="backColor">
                                                            <div class="note-color-palette">
                                                                <div class="note-color-row"><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#000000"
                                                                        data-event="backColor" data-value="#000000"
                                                                        title="Black" aria-label="Black"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#424242"
                                                                        data-event="backColor" data-value="#424242"
                                                                        title="Tundora" aria-label="Tundora"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#636363"
                                                                        data-event="backColor" data-value="#636363"
                                                                        title="Dove Gray" aria-label="Dove Gray"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#9C9C94"
                                                                        data-event="backColor" data-value="#9C9C94"
                                                                        title="Star Dust" aria-label="Star Dust"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#CEC6CE"
                                                                        data-event="backColor" data-value="#CEC6CE"
                                                                        title="Pale Slate" aria-label="Pale Slate"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#EFEFEF"
                                                                        data-event="backColor" data-value="#EFEFEF"
                                                                        title="Gallery" aria-label="Gallery"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#F7F7F7"
                                                                        data-event="backColor" data-value="#F7F7F7"
                                                                        title="Alabaster" aria-label="Alabaster"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FFFFFF"
                                                                        data-event="backColor" data-value="#FFFFFF"
                                                                        title="White" aria-label="White"
                                                                        data-toggle="button" tabindex="-1"></button>
                                                                </div>
                                                                <div class="note-color-row"><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FF0000"
                                                                        data-event="backColor" data-value="#FF0000"
                                                                        title="Red" aria-label="Red"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FF9C00"
                                                                        data-event="backColor" data-value="#FF9C00"
                                                                        title="Orange Peel" aria-label="Orange Peel"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FFFF00"
                                                                        data-event="backColor" data-value="#FFFF00"
                                                                        title="Yellow" aria-label="Yellow"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#00FF00"
                                                                        data-event="backColor" data-value="#00FF00"
                                                                        title="Green" aria-label="Green"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#00FFFF"
                                                                        data-event="backColor" data-value="#00FFFF"
                                                                        title="Cyan" aria-label="Cyan"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#0000FF"
                                                                        data-event="backColor" data-value="#0000FF"
                                                                        title="Blue" aria-label="Blue"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#9C00FF"
                                                                        data-event="backColor" data-value="#9C00FF"
                                                                        title="Electric Violet"
                                                                        aria-label="Electric Violet"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FF00FF"
                                                                        data-event="backColor" data-value="#FF00FF"
                                                                        title="Magenta" aria-label="Magenta"
                                                                        data-toggle="button" tabindex="-1"></button>
                                                                </div>
                                                                <div class="note-color-row"><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#F7C6CE"
                                                                        data-event="backColor" data-value="#F7C6CE"
                                                                        title="Azalea" aria-label="Azalea"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FFE7CE"
                                                                        data-event="backColor" data-value="#FFE7CE"
                                                                        title="Karry" aria-label="Karry"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FFEFC6"
                                                                        data-event="backColor" data-value="#FFEFC6"
                                                                        title="Egg White" aria-label="Egg White"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#D6EFD6"
                                                                        data-event="backColor" data-value="#D6EFD6"
                                                                        title="Zanah" aria-label="Zanah"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#CEDEE7"
                                                                        data-event="backColor" data-value="#CEDEE7"
                                                                        title="Botticelli" aria-label="Botticelli"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#CEE7F7"
                                                                        data-event="backColor" data-value="#CEE7F7"
                                                                        title="Tropical Blue" aria-label="Tropical Blue"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#D6D6E7"
                                                                        data-event="backColor" data-value="#D6D6E7"
                                                                        title="Mischka" aria-label="Mischka"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#E7D6DE"
                                                                        data-event="backColor" data-value="#E7D6DE"
                                                                        title="Twilight" aria-label="Twilight"
                                                                        data-toggle="button" tabindex="-1"></button>
                                                                </div>
                                                                <div class="note-color-row"><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#E79C9C"
                                                                        data-event="backColor" data-value="#E79C9C"
                                                                        title="Tonys Pink" aria-label="Tonys Pink"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FFC69C"
                                                                        data-event="backColor" data-value="#FFC69C"
                                                                        title="Peach Orange" aria-label="Peach Orange"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FFE79C"
                                                                        data-event="backColor" data-value="#FFE79C"
                                                                        title="Cream Brulee" aria-label="Cream Brulee"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#B5D6A5"
                                                                        data-event="backColor" data-value="#B5D6A5"
                                                                        title="Sprout" aria-label="Sprout"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#A5C6CE"
                                                                        data-event="backColor" data-value="#A5C6CE"
                                                                        title="Casper" aria-label="Casper"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#9CC6EF"
                                                                        data-event="backColor" data-value="#9CC6EF"
                                                                        title="Perano" aria-label="Perano"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#B5A5D6"
                                                                        data-event="backColor" data-value="#B5A5D6"
                                                                        title="Cold Purple" aria-label="Cold Purple"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#D6A5BD"
                                                                        data-event="backColor" data-value="#D6A5BD"
                                                                        title="Careys Pink" aria-label="Careys Pink"
                                                                        data-toggle="button" tabindex="-1"></button>
                                                                </div>
                                                                <div class="note-color-row"><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#E76363"
                                                                        data-event="backColor" data-value="#E76363"
                                                                        title="Mandy" aria-label="Mandy"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#F7AD6B"
                                                                        data-event="backColor" data-value="#F7AD6B"
                                                                        title="Rajah" aria-label="Rajah"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FFD663"
                                                                        data-event="backColor" data-value="#FFD663"
                                                                        title="Dandelion" aria-label="Dandelion"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#94BD7B"
                                                                        data-event="backColor" data-value="#94BD7B"
                                                                        title="Olivine" aria-label="Olivine"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#73A5AD"
                                                                        data-event="backColor" data-value="#73A5AD"
                                                                        title="Gulf Stream" aria-label="Gulf Stream"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#6BADDE"
                                                                        data-event="backColor" data-value="#6BADDE"
                                                                        title="Viking" aria-label="Viking"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#8C7BC6"
                                                                        data-event="backColor" data-value="#8C7BC6"
                                                                        title="Blue Marguerite"
                                                                        aria-label="Blue Marguerite"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#C67BA5"
                                                                        data-event="backColor" data-value="#C67BA5"
                                                                        title="Puce" aria-label="Puce"
                                                                        data-toggle="button" tabindex="-1"></button>
                                                                </div>
                                                                <div class="note-color-row"><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#CE0000"
                                                                        data-event="backColor" data-value="#CE0000"
                                                                        title="Guardsman Red" aria-label="Guardsman Red"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#E79439"
                                                                        data-event="backColor" data-value="#E79439"
                                                                        title="Fire Bush" aria-label="Fire Bush"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#EFC631"
                                                                        data-event="backColor" data-value="#EFC631"
                                                                        title="Golden Dream" aria-label="Golden Dream"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#6BA54A"
                                                                        data-event="backColor" data-value="#6BA54A"
                                                                        title="Chelsea Cucumber"
                                                                        aria-label="Chelsea Cucumber"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#4A7B8C"
                                                                        data-event="backColor" data-value="#4A7B8C"
                                                                        title="Smalt Blue" aria-label="Smalt Blue"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#3984C6"
                                                                        data-event="backColor" data-value="#3984C6"
                                                                        title="Boston Blue" aria-label="Boston Blue"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#634AA5"
                                                                        data-event="backColor" data-value="#634AA5"
                                                                        title="Butterfly Bush"
                                                                        aria-label="Butterfly Bush" data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#A54A7B"
                                                                        data-event="backColor" data-value="#A54A7B"
                                                                        title="Cadillac" aria-label="Cadillac"
                                                                        data-toggle="button" tabindex="-1"></button>
                                                                </div>
                                                                <div class="note-color-row"><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#9C0000"
                                                                        data-event="backColor" data-value="#9C0000"
                                                                        title="Sangria" aria-label="Sangria"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#B56308"
                                                                        data-event="backColor" data-value="#B56308"
                                                                        title="Mai Tai" aria-label="Mai Tai"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#BD9400"
                                                                        data-event="backColor" data-value="#BD9400"
                                                                        title="Buddha Gold" aria-label="Buddha Gold"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#397B21"
                                                                        data-event="backColor" data-value="#397B21"
                                                                        title="Forest Green" aria-label="Forest Green"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#104A5A"
                                                                        data-event="backColor" data-value="#104A5A"
                                                                        title="Eden" aria-label="Eden"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#085294"
                                                                        data-event="backColor" data-value="#085294"
                                                                        title="Venice Blue" aria-label="Venice Blue"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#311873"
                                                                        data-event="backColor" data-value="#311873"
                                                                        title="Meteorite" aria-label="Meteorite"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#731842"
                                                                        data-event="backColor" data-value="#731842"
                                                                        title="Claret" aria-label="Claret"
                                                                        data-toggle="button" tabindex="-1"></button>
                                                                </div>
                                                                <div class="note-color-row"><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#630000"
                                                                        data-event="backColor" data-value="#630000"
                                                                        title="Rosewood" aria-label="Rosewood"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#7B3900"
                                                                        data-event="backColor" data-value="#7B3900"
                                                                        title="Cinnamon" aria-label="Cinnamon"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#846300"
                                                                        data-event="backColor" data-value="#846300"
                                                                        title="Olive" aria-label="Olive"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#295218"
                                                                        data-event="backColor" data-value="#295218"
                                                                        title="Parsley" aria-label="Parsley"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#083139"
                                                                        data-event="backColor" data-value="#083139"
                                                                        title="Tiber" aria-label="Tiber"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#003163"
                                                                        data-event="backColor" data-value="#003163"
                                                                        title="Midnight Blue" aria-label="Midnight Blue"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#21104A"
                                                                        data-event="backColor" data-value="#21104A"
                                                                        title="Valentino" aria-label="Valentino"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#4A1031"
                                                                        data-event="backColor" data-value="#4A1031"
                                                                        title="Loulou" aria-label="Loulou"
                                                                        data-toggle="button" tabindex="-1"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="note-palette">
                                                        <div class="note-palette-title">Foreground Color</div>
                                                        <div> <button type="button"
                                                                class="note-color-reset btn btn-light"
                                                                data-event="removeFormat" data-value="foreColor">Reset
                                                                to default </button> </div>
                                                        <div class="note-holder" data-event="foreColor">
                                                            <div class="note-color-palette">
                                                                <div class="note-color-row"><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#000000"
                                                                        data-event="foreColor" data-value="#000000"
                                                                        title="Black" aria-label="Black"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#424242"
                                                                        data-event="foreColor" data-value="#424242"
                                                                        title="Tundora" aria-label="Tundora"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#636363"
                                                                        data-event="foreColor" data-value="#636363"
                                                                        title="Dove Gray" aria-label="Dove Gray"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#9C9C94"
                                                                        data-event="foreColor" data-value="#9C9C94"
                                                                        title="Star Dust" aria-label="Star Dust"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#CEC6CE"
                                                                        data-event="foreColor" data-value="#CEC6CE"
                                                                        title="Pale Slate" aria-label="Pale Slate"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#EFEFEF"
                                                                        data-event="foreColor" data-value="#EFEFEF"
                                                                        title="Gallery" aria-label="Gallery"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#F7F7F7"
                                                                        data-event="foreColor" data-value="#F7F7F7"
                                                                        title="Alabaster" aria-label="Alabaster"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FFFFFF"
                                                                        data-event="foreColor" data-value="#FFFFFF"
                                                                        title="White" aria-label="White"
                                                                        data-toggle="button" tabindex="-1"></button>
                                                                </div>
                                                                <div class="note-color-row"><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FF0000"
                                                                        data-event="foreColor" data-value="#FF0000"
                                                                        title="Red" aria-label="Red"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FF9C00"
                                                                        data-event="foreColor" data-value="#FF9C00"
                                                                        title="Orange Peel" aria-label="Orange Peel"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FFFF00"
                                                                        data-event="foreColor" data-value="#FFFF00"
                                                                        title="Yellow" aria-label="Yellow"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#00FF00"
                                                                        data-event="foreColor" data-value="#00FF00"
                                                                        title="Green" aria-label="Green"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#00FFFF"
                                                                        data-event="foreColor" data-value="#00FFFF"
                                                                        title="Cyan" aria-label="Cyan"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#0000FF"
                                                                        data-event="foreColor" data-value="#0000FF"
                                                                        title="Blue" aria-label="Blue"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#9C00FF"
                                                                        data-event="foreColor" data-value="#9C00FF"
                                                                        title="Electric Violet"
                                                                        aria-label="Electric Violet"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FF00FF"
                                                                        data-event="foreColor" data-value="#FF00FF"
                                                                        title="Magenta" aria-label="Magenta"
                                                                        data-toggle="button" tabindex="-1"></button>
                                                                </div>
                                                                <div class="note-color-row"><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#F7C6CE"
                                                                        data-event="foreColor" data-value="#F7C6CE"
                                                                        title="Azalea" aria-label="Azalea"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FFE7CE"
                                                                        data-event="foreColor" data-value="#FFE7CE"
                                                                        title="Karry" aria-label="Karry"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FFEFC6"
                                                                        data-event="foreColor" data-value="#FFEFC6"
                                                                        title="Egg White" aria-label="Egg White"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#D6EFD6"
                                                                        data-event="foreColor" data-value="#D6EFD6"
                                                                        title="Zanah" aria-label="Zanah"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#CEDEE7"
                                                                        data-event="foreColor" data-value="#CEDEE7"
                                                                        title="Botticelli" aria-label="Botticelli"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#CEE7F7"
                                                                        data-event="foreColor" data-value="#CEE7F7"
                                                                        title="Tropical Blue" aria-label="Tropical Blue"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#D6D6E7"
                                                                        data-event="foreColor" data-value="#D6D6E7"
                                                                        title="Mischka" aria-label="Mischka"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#E7D6DE"
                                                                        data-event="foreColor" data-value="#E7D6DE"
                                                                        title="Twilight" aria-label="Twilight"
                                                                        data-toggle="button" tabindex="-1"></button>
                                                                </div>
                                                                <div class="note-color-row"><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#E79C9C"
                                                                        data-event="foreColor" data-value="#E79C9C"
                                                                        title="Tonys Pink" aria-label="Tonys Pink"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FFC69C"
                                                                        data-event="foreColor" data-value="#FFC69C"
                                                                        title="Peach Orange" aria-label="Peach Orange"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FFE79C"
                                                                        data-event="foreColor" data-value="#FFE79C"
                                                                        title="Cream Brulee" aria-label="Cream Brulee"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#B5D6A5"
                                                                        data-event="foreColor" data-value="#B5D6A5"
                                                                        title="Sprout" aria-label="Sprout"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#A5C6CE"
                                                                        data-event="foreColor" data-value="#A5C6CE"
                                                                        title="Casper" aria-label="Casper"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#9CC6EF"
                                                                        data-event="foreColor" data-value="#9CC6EF"
                                                                        title="Perano" aria-label="Perano"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#B5A5D6"
                                                                        data-event="foreColor" data-value="#B5A5D6"
                                                                        title="Cold Purple" aria-label="Cold Purple"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#D6A5BD"
                                                                        data-event="foreColor" data-value="#D6A5BD"
                                                                        title="Careys Pink" aria-label="Careys Pink"
                                                                        data-toggle="button" tabindex="-1"></button>
                                                                </div>
                                                                <div class="note-color-row"><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#E76363"
                                                                        data-event="foreColor" data-value="#E76363"
                                                                        title="Mandy" aria-label="Mandy"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#F7AD6B"
                                                                        data-event="foreColor" data-value="#F7AD6B"
                                                                        title="Rajah" aria-label="Rajah"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#FFD663"
                                                                        data-event="foreColor" data-value="#FFD663"
                                                                        title="Dandelion" aria-label="Dandelion"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#94BD7B"
                                                                        data-event="foreColor" data-value="#94BD7B"
                                                                        title="Olivine" aria-label="Olivine"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#73A5AD"
                                                                        data-event="foreColor" data-value="#73A5AD"
                                                                        title="Gulf Stream" aria-label="Gulf Stream"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#6BADDE"
                                                                        data-event="foreColor" data-value="#6BADDE"
                                                                        title="Viking" aria-label="Viking"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#8C7BC6"
                                                                        data-event="foreColor" data-value="#8C7BC6"
                                                                        title="Blue Marguerite"
                                                                        aria-label="Blue Marguerite"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#C67BA5"
                                                                        data-event="foreColor" data-value="#C67BA5"
                                                                        title="Puce" aria-label="Puce"
                                                                        data-toggle="button" tabindex="-1"></button>
                                                                </div>
                                                                <div class="note-color-row"><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#CE0000"
                                                                        data-event="foreColor" data-value="#CE0000"
                                                                        title="Guardsman Red" aria-label="Guardsman Red"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#E79439"
                                                                        data-event="foreColor" data-value="#E79439"
                                                                        title="Fire Bush" aria-label="Fire Bush"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#EFC631"
                                                                        data-event="foreColor" data-value="#EFC631"
                                                                        title="Golden Dream" aria-label="Golden Dream"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#6BA54A"
                                                                        data-event="foreColor" data-value="#6BA54A"
                                                                        title="Chelsea Cucumber"
                                                                        aria-label="Chelsea Cucumber"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#4A7B8C"
                                                                        data-event="foreColor" data-value="#4A7B8C"
                                                                        title="Smalt Blue" aria-label="Smalt Blue"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#3984C6"
                                                                        data-event="foreColor" data-value="#3984C6"
                                                                        title="Boston Blue" aria-label="Boston Blue"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#634AA5"
                                                                        data-event="foreColor" data-value="#634AA5"
                                                                        title="Butterfly Bush"
                                                                        aria-label="Butterfly Bush" data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#A54A7B"
                                                                        data-event="foreColor" data-value="#A54A7B"
                                                                        title="Cadillac" aria-label="Cadillac"
                                                                        data-toggle="button" tabindex="-1"></button>
                                                                </div>
                                                                <div class="note-color-row"><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#9C0000"
                                                                        data-event="foreColor" data-value="#9C0000"
                                                                        title="Sangria" aria-label="Sangria"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#B56308"
                                                                        data-event="foreColor" data-value="#B56308"
                                                                        title="Mai Tai" aria-label="Mai Tai"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#BD9400"
                                                                        data-event="foreColor" data-value="#BD9400"
                                                                        title="Buddha Gold" aria-label="Buddha Gold"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#397B21"
                                                                        data-event="foreColor" data-value="#397B21"
                                                                        title="Forest Green" aria-label="Forest Green"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#104A5A"
                                                                        data-event="foreColor" data-value="#104A5A"
                                                                        title="Eden" aria-label="Eden"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#085294"
                                                                        data-event="foreColor" data-value="#085294"
                                                                        title="Venice Blue" aria-label="Venice Blue"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#311873"
                                                                        data-event="foreColor" data-value="#311873"
                                                                        title="Meteorite" aria-label="Meteorite"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#731842"
                                                                        data-event="foreColor" data-value="#731842"
                                                                        title="Claret" aria-label="Claret"
                                                                        data-toggle="button" tabindex="-1"></button>
                                                                </div>
                                                                <div class="note-color-row"><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#630000"
                                                                        data-event="foreColor" data-value="#630000"
                                                                        title="Rosewood" aria-label="Rosewood"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#7B3900"
                                                                        data-event="foreColor" data-value="#7B3900"
                                                                        title="Cinnamon" aria-label="Cinnamon"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#846300"
                                                                        data-event="foreColor" data-value="#846300"
                                                                        title="Olive" aria-label="Olive"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#295218"
                                                                        data-event="foreColor" data-value="#295218"
                                                                        title="Parsley" aria-label="Parsley"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#083139"
                                                                        data-event="foreColor" data-value="#083139"
                                                                        title="Tiber" aria-label="Tiber"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#003163"
                                                                        data-event="foreColor" data-value="#003163"
                                                                        title="Midnight Blue" aria-label="Midnight Blue"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#21104A"
                                                                        data-event="foreColor" data-value="#21104A"
                                                                        title="Valentino" aria-label="Valentino"
                                                                        data-toggle="button"
                                                                        tabindex="-1"></button><button type="button"
                                                                        class="note-color-btn"
                                                                        style="background-color:#4A1031"
                                                                        data-event="foreColor" data-value="#4A1031"
                                                                        title="Loulou" aria-label="Loulou"
                                                                        data-toggle="button" tabindex="-1"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="note-btn-group btn-group note-para"><button type="button"
                                                class="note-btn btn btn-light btn-sm" role="button" tabindex="-1"
                                                title="Unordered list (⌘+⇧+NUM7)"
                                                aria-label="Unordered list (⌘+⇧+NUM7)"><i
                                                    class="note-icon-unorderedlist"></i></button><button type="button"
                                                class="note-btn btn btn-light btn-sm" role="button" tabindex="-1"
                                                title="Ordered list (⌘+⇧+NUM8)" aria-label="Ordered list (⌘+⇧+NUM8)"><i
                                                    class="note-icon-orderedlist"></i></button>
                                            <div class="note-btn-group btn-group"><button type="button"
                                                    class="note-btn btn btn-light btn-sm dropdown-toggle" role="button"
                                                    tabindex="-1" data-toggle="dropdown" title="Paragraph"
                                                    aria-label="Paragraph"><i class="note-icon-align-left"></i></button>
                                                <div class="dropdown-menu" role="list">
                                                    <div class="note-btn-group btn-group note-align"><button
                                                            type="button" class="note-btn btn btn-light btn-sm"
                                                            role="button" tabindex="-1" title="Align left (⌘+⇧+L)"
                                                            aria-label="Align left (⌘+⇧+L)"><i
                                                                class="note-icon-align-left"></i></button><button
                                                            type="button" class="note-btn btn btn-light btn-sm"
                                                            role="button" tabindex="-1" title="Align center (⌘+⇧+E)"
                                                            aria-label="Align center (⌘+⇧+E)"><i
                                                                class="note-icon-align-center"></i></button><button
                                                            type="button" class="note-btn btn btn-light btn-sm"
                                                            role="button" tabindex="-1" title="Align right (⌘+⇧+R)"
                                                            aria-label="Align right (⌘+⇧+R)"><i
                                                                class="note-icon-align-right"></i></button><button
                                                            type="button" class="note-btn btn btn-light btn-sm"
                                                            role="button" tabindex="-1" title="Justify full (⌘+⇧+J)"
                                                            aria-label="Justify full (⌘+⇧+J)"><i
                                                                class="note-icon-align-justify"></i></button></div>
                                                    <div class="note-btn-group btn-group note-list"><button
                                                            type="button" class="note-btn btn btn-light btn-sm"
                                                            role="button" tabindex="-1" title="Outdent (⌘+[)"
                                                            aria-label="Outdent (⌘+[)"><i
                                                                class="note-icon-align-outdent"></i></button><button
                                                            type="button" class="note-btn btn btn-light btn-sm"
                                                            role="button" tabindex="-1" title="Indent (⌘+])"
                                                            aria-label="Indent (⌘+])"><i
                                                                class="note-icon-align-indent"></i></button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="note-btn-group btn-group note-table">
                                            <div class="note-btn-group btn-group"><button type="button"
                                                    class="note-btn btn btn-light btn-sm dropdown-toggle" role="button"
                                                    tabindex="-1" data-toggle="dropdown" title="Table"
                                                    aria-label="Table"><i class="note-icon-table"></i></button>
                                                <div class="dropdown-menu note-table" role="list" aria-label="Table">
                                                    <div class="note-dimension-picker">
                                                        <div class="note-dimension-picker-mousecatcher"
                                                            data-event="insertTable" data-value="1x1"
                                                            style="width: 10em; height: 10em;"></div>
                                                        <div class="note-dimension-picker-highlighted"></div>
                                                        <div class="note-dimension-picker-unhighlighted"></div>
                                                    </div>
                                                    <div class="note-dimension-display">1 x 1</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="note-btn-group btn-group note-insert"><button type="button"
                                                class="note-btn btn btn-light btn-sm" role="button" tabindex="-1"
                                                title="Link (⌘+K)" aria-label="Link (⌘+K)"><i
                                                    class="note-icon-link"></i></button><button type="button"
                                                class="note-btn btn btn-light btn-sm" role="button" tabindex="-1"
                                                title="Picture" aria-label="Picture"><i
                                                    class="note-icon-picture"></i></button><button type="button"
                                                class="note-btn btn btn-light btn-sm" role="button" tabindex="-1"
                                                title="Video" aria-label="Video"><i
                                                    class="note-icon-video"></i></button></div>
                                        <div class="note-btn-group btn-group note-view"><button type="button"
                                                class="note-btn btn btn-light btn-sm btn-fullscreen" role="button"
                                                tabindex="-1" title="Full Screen" aria-label="Full Screen"><i
                                                    class="note-icon-arrows-alt"></i></button><button type="button"
                                                class="note-btn btn btn-light btn-sm btn-codeview" role="button"
                                                tabindex="-1" title="Code View" aria-label="Code View"><i
                                                    class="note-icon-code"></i></button><button type="button"
                                                class="note-btn btn btn-light btn-sm" role="button" tabindex="-1"
                                                title="Help" aria-label="Help"><i
                                                    class="note-icon-question"></i></button></div>
                                    </div>
                                </div>
                                <div class="note-editing-area">
                                    <div class="note-handle">
                                        <div class="note-control-selection">
                                            <div class="note-control-selection-bg"></div>
                                            <div class="note-control-holder note-control-nw"></div>
                                            <div class="note-control-holder note-control-ne"></div>
                                            <div class="note-control-holder note-control-sw"></div>
                                            <div class="note-control-sizing note-control-se"></div>
                                            <div class="note-control-selection-info"></div>
                                        </div>
                                    </div><textarea class="note-codable" role="textbox"
                                        aria-multiline="true"></textarea>
                                    <div class="note-editable card-block" role="textbox" aria-multiline="true"
                                        style="height: 350px;" contenteditable="true">
                                    </div>
                                </div><output class="note-status-output" aria-live="polite"></output>
                                <div class="note-statusbar" role="status"> <output class="note-status-output"
                                        aria-live="polite"></output>
                                    <div class="note-resizebar" role="seperator" aria-orientation="horizontal"
                                        aria-label="Resize">
                                        <div class="note-icon-bar"></div>
                                        <div class="note-icon-bar"></div>
                                        <div class="note-icon-bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="createPrecedentBtn" class="btn btn-success waves-effect">Tạo</button>
                        <button type="button" id="updatePrecedentBtn" class="btn btn-success waves-effect"
                            style="display: none;">Cập nhật</button>
                        <button type="button" class="btn btn-info waves-effect" data-toggle="modal" data-dismiss="modal"
                            data-target="#lookupPrecedentModal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="lookupPrecedentModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            style="overflow: auto !important; display: none">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title mt-3">Tra cứu tiền lệ</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <button class="btn btn-success" id="openCreateNewPrecedentBtn">+ Tạo tiền lệ
                                mới</button>
                            <div class="input-group" style="border-radius: 10px; border: 1px; padding: 2px;">
                                <input type="search" class="form-control" id="keyword"
                                    placeholder=" Nhập nội dung bạn muốn tra cứu">
                                <div class="input-group-prepend">
                                    <button style="font-family: FontAwesome;" onclick="searchPrecedent()"
                                        class="btn btn-info"></button>
                                </div>
                            </div>
                        </div>
                        <div style="position: relative;" class="card mt-3">
                            <div class="card-body" id="topicWrapper" style="display: none;">
                                <div id="precedentTopicsList"></div>
                                <ul id="topicPagin" class="pagination">
                                </ul>
                            </div>
                            <div class="card-body" id="precedentPostsWrapper" style="display: none;">
                                <div id="precedentPostsList"></div>
                                <ul id="precedentPagin" class="pagination">
                                </ul>
                            </div>
                            <div id="precedentDetail" style="display: none;">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="multiChoiceModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="margin-top: 9%;  background-color: #ffffff;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul id="multiChoiceOptions">

                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="mdNotAchievedRank" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="margin-top: 9%;  background-color: #ffffff;">
                    <div class="modal-header">
                        <h4 class="modal-title" id="tlNotAchievedRank"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="list-group">
                            <a id="rowNotAchievedRank1" href="javascript:void(0)"
                                class="list-group-item list-group-item-action flex-column align-items-start active">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1 text-white"><i class="fas fa-star"></i></h5>
                                    <small>OCOP 1 Sao</small>
                                </div>
                                <p class="mb-1" id="txtNotAchievedRank1">...</p>

                            </a>
                            <a id="rowNotAchievedRank2" href="javascript:void(0)"
                                class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1"><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </h5>
                                    <small class="text-muted">OCOP 2 Sao</small>
                                </div>
                                <p class="mb-1" id="txtNotAchievedRank2">...</p>

                            </a>
                            <a id="rowNotAchievedRank3" href="javascript:void(0)"
                                class="list-group-item list-group-item-action flex-column align-items-start active">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></h5>
                                    <small class="text-muted">OCOP 3 Sao</small>
                                </div>
                                <p class="mb-1" id="txtNotAchievedRank3">...</p>

                            </a>
                            <a id="rowNotAchievedRank4" href="javascript:void(0)"
                                class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i></h5>
                                    <small class="text-muted">OCOP 4 Sao</small>
                                </div>
                                <p class="mb-1" id="txtNotAchievedRank4">...</p>

                            </a>
                            <a id="rowNotAchievedRank5" href="javascript:void(0)"
                                class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                            class="fas fa-star"></i></h5>
                                    <small class="text-muted">OCOP 5 Sao</small>
                                </div>
                                <p class="mb-1" id="txtNotAchievedRank5">...</p>

                            </a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="askForTypeInput">
                    <h5 class="pl-3 pr-3 pb-3">Anh/chị vui lòng chọn "Tải lên file" với file minh
                        chứng
                        có
                        sẵn.</h5>
                    <ul>
                        <li style="margin-bottom: 23px; display:none"><i class="fa fa-hand-point-right"></i><a
                                id="selectFillFormOption" class="producthref" href="#">Nhập biểu mẫu</a></li>
                        <li><i class="fa fa-hand-point-right"></i><a class="producthref" href="#"
                                id="selectUploadFile">Tải lên
                                file</a></li>
                    </ul>
                </div>
                <div style="display: none;" id="fillFormOption">
                    <label class="ml-3"><a id="backToAskInput" href="#"><i class="fa fa-arrow-left"></i> Quay
                            lại</a></label><br>
                    <label class="titlesinfo">Anh/chị muốn đăng ký sản phẩm mới hay đăng ký sản phẩm đã có?</label>
                    <ul id="registerLinksSection" style="padding-left: 22px;">

                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Not Used-->
<div class="modal fade" id="not-used" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div style="font-size: 18px; color: rgb(251, 134, 0)">Tính năng này đang trong quá trình cập nhật cho
                    chủ thể!</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<style>
    ul li {
        list-style: none;
    }

    li>.fa,
    .fas {
        font-size: 15px;
        color: #049252;
        margin-right: 10px;
    }

    .infoNote {
        left: -12px;
        width: auto;
        min-width: 27px;
        padding: 4px;
        border-radius: 50%;
        background-color: #f9a505;
        text-align: center;
        color: white;
        z-index: 9;
        position: absolute;
        top: -15px;
    }

    .infoNotelv2 {
        right: 51px;
        width: auto;
        min-width: 27px;
        padding: 4px;
        border-radius: 50%;
        background-color: #f9a505;
        text-align: center;
        color: white;
        z-index: 9;
        position: absolute;
        top: -15px;
    }
</style>
<script src="{{ asset('js/formImg.js') }}"></script>
<script src="{{ asset('js/detailfile.js?v=7') }}"></script>
@endsection()
