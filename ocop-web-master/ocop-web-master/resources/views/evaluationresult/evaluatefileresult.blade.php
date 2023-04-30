@extends('master')
@section('content')
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
<div class="page-wrapper" style="background-color: white; min-height: 377px;">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row">
        <div class="col-md-12" style="text-align: center;
              margin-top: 10px;">
          <span class="textOcop" id="setProduct">Bộ sản phẩm: {!!$product->product_type_name!!}</span><br>
          <span style="  font-size: 15px;
                  font-family: sans-serif;
                  font-weight: 600;
                  color: #666666;" id="product">Sản phẩm: {!!$product->name!!}</span><br>
          <span class="textOcop" id="idproduct">Mã sản phẩm: {!!$product->code!!}</span><br>
          <span class="textOcop" id="entity">Chủ thể: {!!$product->entity_name!!}</span><br>
          <span class="textOcop" id="adressentity">Địa chỉ: {{  !empty($product->street) ? $product->street.'-' : ''  }} {{$product->ward}} - {{$product->district}} - {{$product->province}}</span><br>
          <span style="  font-size: 16px;
          font-family: sans-serif;
          font-weight: 600;
          color: red;" id="sum"></span>
        </div>
      </div>
      <div style="border: solid thin; display:none" class="mt-3">
        <div class="text-center mt-3"><h5>Biểu đồ thể hiện kết quả chấm so với kết quả chấm trung bình</h5></div>
        <div id="chart"></div>  
      </div>

      <div id="resultChart">

      </div>

      <div class="table-responsive mt-3">
        <table id="resultTable" class="table" cellspacing="1" style="border: none; border-collapse: collapse;">
            <thead>
                <tr>
                    <th class="text-center"><b>Cán bộ chấm</b></th>
                    <th class="text-center"><b>Kết quả</b></th>
                    <th class="text-center"><b>So sánh</b></th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($members as $item)
                <tr>
                    <td class="">{{$item->name}}</td>
                    <td class='text-center'>{{$item->point}}</td>
                    <td class='text-center'><input type="checkbox" class="checkboxinput" name="checkboxinput" id="{{$item->user_mark_id}}" value="{{$item->user_mark_id}}"></td>
                </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>

    <hr>
    <div id="rankArea" class="text-center text-success" style="display: none;">
    </div>

    
    <div class="text-center">
        <div style="display: flex;">
          <button class="evaluateStatus text-white btn mr-2" style="flex: 1; background-color: #039252; width:100px;display:none" onclick="linkview()">Xem ghi chú</button>
          <button id="rankBtn" class="evaluateStatus text-white btn mr-2" style="flex: 1; background-color: #039252; width:100px;display:none" onclick="rankThisFile()">Duyệt kết quả</button>
          <button id="compareBtn" class="evaluateStatus text-white btn mr-2" style="flex: 1; background-color: #039252; width:100px;display:none" onclick="clickCheckbox()">So sánh</button>
          <button id="compareAllBtn" class="evaluateStatus text-white btn mr-2" style="flex: 1; background-color: #039252; width:100px;display:none" onclick="clickCheckbox('all')">So sánh tổng hợp</button>
          <button id="printBtn" class="evaluateStatus text-white btn mr-2" style="flex: 1; background-color: #039252; width:100px;display:none" onclick="window.print()">In</button>
          <!-- <a onclick="document.title='Ocop_Bangketquacham'; window.print(); return false;" id="email"class="evaluateStatus text-white btn mr-2" style="flex: 1; background-color: #039252; width:100px;" 
             href="##" >
                Email
          </a> -->
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="padding-bottom: 0;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="dropzone dz-clickable" id="dropzoneMytwo" style="margin-bottom: 20px;    text-align: center;">
                <div class="dropzone-previews">
                </div>
              <div class="dz-default dz-message"><span><span style="font-weight: 600;font-family: sans-serif; color: #039252"><i class="fas fa-cloud-upload-alt fa-5x"></i><br> file đã in</span><i class="fa fa-folders"></i></span></div></div>
              <!-- <p style="font-family: sans-serif;" id="textmodal"></p></br> -->
              <!-- <div class="form-group">
                <label for="email">Địa chỉ email của bạn*</label>
                <input type="email" class="form-control" id="emailadress" >
              </div> -->
              <div class="form-group">
                <label for="emailsend">Địa chỉ email người nhận*</label>
                <div class="tags-default">
                  <div class="bootstrap-tagsinput"><input type="text" placeholder=""></div><input type="text" value="" data-role="tagsinput" id="emailsend" style="display: none;"> 
                </div>
              </div>
              <div class="form-group">
                <label for="su">Chủ đề*</label>
                <input type="text" class="form-control" id="su">
              </div>
              <div class="form-group">
                <label for="bcc">Bcc*</label>
                <div class="tags-default">
                  <div class="bootstrap-tagsinput"><input type="text" placeholder=""></div><input type="text" value="" data-role="tagsinput" id="bcc" style="display: none;"> 
                </div>
                <!-- <input type="text" class="form-control" id="bcc"> -->
              </div>
              <div class="form-group">
                <label for="cc">Cc*</label>
                <div class="tags-default">
                  <div class="bootstrap-tagsinput"><input type="text" placeholder=""></div><input type="text" value="" data-role="tagsinput" id="cc" style="display: none;"> 
                </div>
                <!-- <input type="text" class="form-control" id="cc"> -->
              </div>
              <!-- <textarea rows="5" placeholder="Nhập nội dung tin nhắn" style="    margin-top: -13px;width: 100%;border-radius: 4px;border: 1px solid #039252;" id="messtext"></textarea> -->
          </div>
          <div class="modal-footer">
              <button class="btn btn-success btn-sm" id="senmail" style="width: 100%;border-radius: 0;background: #039252;" onclick="sendmail()">Lập lệnh gửi</button>
          </div>
        </div>
      </div>
  </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Info box Content -->
      <!-- ============================================================== -->

      <!-- ============================================================== -->
      <!-- Right sidebar -->
      <!-- ============================================================== -->
      <!-- .right-sidebar -->
      <div class="right-sidebar ps ps--theme_default" data-ps-id="b65c958d-93d7-e6bf-cc13-52512a0d1499">
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