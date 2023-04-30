@extends('master')
@section('content')
<link href="{{ asset('css/wvprooinfo.css') }}" rel="stylesheet">
<link href="{{ asset('css/customFormStyle.css') }}" rel="stylesheet">
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
<style>
  .cardbody {
    padding: 6px;
    max-height: 122px;
    overflow: hidden;
    height: 122px;

    text-align: center;
  }

  .NameM {
    max-height: 38px;
    overflow: hidden;
    font-size: 14px;
    font-weight: 600;
  }

  .elemeinfo {
    font-size: 13px;
    font-weight: 600;
    color: #6c757d !important;
    margin: 0;
  }

  @media (min-width: 768px) and (max-width: 1024px) {
    .col-3 {
      flex: 0 0 33.33333%;
      max-width: 33.33333%;
    }

    .cardbody {
      overflow: scroll;
    }

  }

  @media (min-width: 481px) and (max-width: 767px) {

    .col-3 {
      flex: 0 0 50%;
      max-width: 50%;
    }

    .cardbody {
      overflow: scroll;
    }
  }

  @media (min-width: 320px) and (max-width: 480px) {

    .col-3 {
      flex: 0 0 50%;
      max-width: 50%;
    }

    .cardbody {
      overflow: scroll;
    }
  }

  .divBor {
    /* width: 208px; */
    height: 100%;
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
    margin: 0;
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

  .select2-container--default .select2-selection--multiple .select2-selection__choice {
    background: #039252;
    color: #fff;
    border-color: #039252;
  }

  .select2-container--default .select2-selection--single .select2-selection__rendered,
  .select2-container--default .select2-selection--single {
    background-color: #ffffff !important;
    border-radius: 4px;
  }

  .select2-container--default .select2-selection--single .select2-selection__rendered,
  .select2-container--default .select2-selection--single {
    font-weight: bold;
  }

  .select2-container--default .select2-selection--single .select2-selection__rendered,
  .select2-container--default .select2-selection--single,
  .select2-container--default .select2-selection--single .select2-selection__arrow {
    font-weight: 700px !important;
    height: 38px;
  }
</style>
<div class="page-wrapper" style="min-height: 954px;">
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid" style="    padding-top: 20px;">
    <div class="row">
      <div class="col-md-12">
        <div class="card" style="width: 100%;">
          <div class="card-header" style="background-color: white;display: flex;padding: 24px;">
            <div class="Rectangle">
            </div>
            <span class="SubHeading">
              Xét duyệt thành viên
            </span>
          </div>
           <div class="row bg-light" style="padding: 1rem;">
            <div class="col-sm-3 input-group mb-2">
              <input type="search" class="form-control" id="keyword" style="background-color: white;"
                placeholder="Tìm kiếm">
              <button id="searchBtn" class="text-center btn btn-success"
                style="margin: auto; background-color: #039252; color: white;">
                <i class="fas fa-search text-white" style="margin:0;"></i>
              </button>
            </div>
            <div class="col-sm-3">
              <select id="userTypeSelector" style="background-color: white;" class="form-control">
                <option value="0" selected="selected">Tất cả nhóm thành viên</option>
                <option value="Examiner">Cán bộ chấm</option>
                <option value="Manager">Quản lý</option>
                <option value="HelpTeam">Tổ giúp việc</option>
              </select>
            </div>
            <div class="col-sm-3" id="stProvical">
                <input type="hidden" id="uLevel" value="{{ $user->level }}">
              <select class="multi-select select2-hidden-accessible" style="width: 100%" name="cboPos"
                id="cboProvincial" data-select2-id="cboProvincial" tabindex="-1" aria-hidden="true">
                <option value="0">Tất cả Tỉnh/TP</option>
                @foreach($provinces as $key => $province)
                      <option value="{!! $province->id !!}">{!! $province->name !!}</option>
                @endforeach
              </select>
              <code id="nof-load-pro" style="display: none;">Đang tải ...</code>
            </div>
            <div class="col-sm-3" id="stDistricts">
              <select class="multi-select select2-hidden-accessible" style="width: 100%" name="cboPos" id="cboDistricts"
                data-select2-id="cboDistricts" tabindex="-1" aria-hidden="true">
                <option value="0">Tất cả Quận/Huyện</option>
              </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2"
                style="width: 100%;"><span class="selection">
              <code id="nof-load-district" style="display: none;">Đang tải ...</code>
            </div>
          </div>
          <!-- <div class="col-sm-12 text-right mt-3 pr-4">Tổng số : <span id="total"></span></div> -->
          <div class="card-body row" id="listmember" style="padding: 24px;">
            {{-- <div class="col-md-3 mt-3">
              <div class="divBor">
                <div style="padding: 24px;text-align:center">
                  <img src="{{ asset('images/noavatar.png') }}" style="border-radius:100%;" width="64px" height="64px">
                </div>
                <div style="text-align: center;">
                  <label class="nameMember">Nguyễn Quốc Huy</label>
                  <p class="subtitile">0814793909</p>
                  <p class="subtitile">nqhuy0606@gmail.com</p>
                  <p class="subtitile"></p>
                  <p class="subtitile"><span class="label label-info">Quản lý</span></p>
                </div>
                <div style="float: right;" class="mt-3 mb-3">
                  <a href="#" class="btn btn-sm btn-success"
                    onclick="change('62329f16910d6b23616107dd','Manager','active')"
                    style="border-radius: 7px;background-color: #049252;">Duyệt</a>
                  <a href="#" class="btn btn-sm btn-success"
                    onclick="change('62329f16910d6b23616107dd','Manager','notActive')"
                    style="margin-right: 15px;    border-radius: 7px;background-color: #dee2e6;border-color: #dee2e6;color: #4f5467;">Hủy</a>
                </div>
              </div>
            </div> --}}
          </div>
          <button class="btn btn-success d-flex"
            style="margin: 20px auto; height: 35px; width: 140px; padding: 8px 64px; opacity: 1;" id="btnLoadMore"><i
              class="fas fa-sync fa-spin text-white"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    var csrfHidden = '{{csrf_token()}}',
        uLevel = $('#uLevel').val()
</script>
@endsection()
