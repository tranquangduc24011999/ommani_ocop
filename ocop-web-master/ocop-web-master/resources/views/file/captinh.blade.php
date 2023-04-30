<div class="page-wrapper" style="background-color: white; min-height: 954px;">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->

      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Info box Content -->
      <!-- ============================================================== -->
      <div class="row pl-3" style="margin-bottom: 19px;" id="headerFile">
          <div class="col-12 col-sm-8" style="padding: 0;    display: flex;">
             <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/6.jpg" alt="user" class="img-circle" style="margin-top: 10px;margin-right: 21px;width: 62px;height: 62px;">
              <div class="mail-contnet" style="padding-top: 10px;width:100%">
                  <h5 class=".Text-proofTitile">Trái sầu riêng cấp đông</h5>
                  <span class="mail-desc">Mã sản phẩm: 83-832-28882-2-2022<br></span>
                  <span class="mail-desc">Tên chủ thể: Công ty TNHH XNK Trái Cây Chánh Thu</span>
                  <div class="comment-footer">
                      <span class="label label-success">Cấp tỉnh đã xếp hạng</span>			
                  </div>
                  <br><div class="m-b-5"><a class="button_viewResut " href="https://app.sohoaocop.com/viewEvaluateFileResult?fileId=622577879c97503b4132e763&amp;&amp;level=2&amp;&amp;isView=true" style="font-weight: 600;">Xem kết quả chấm cấp huyện</a></div>
                   <div class="m-b-5"><a class="button_viewResut" href="https://app.sohoaocop.com/viewEvaluateFileResult?fileId=622577879c97503b4132e763&amp;&amp;level=1&amp;&amp;isView=true" style="font-weight: 600;">Xem kết quả chấm cấp Tỉnh</a></div>
                  
                  </div>
          </div>
          <div class="col-12 col-sm-4 " style="padding: 0;text-align: right;margin-top: 12px; ">
                  <button class="btn btn-success btn-sm" style="display:none;width: 100%;border-radius: 0;margin-bottom: 9px;background: #039252;" onclick="changeStatus('Done')">DUYỆT HỒ SƠ</button>
                  <button class="btn btn-success btn-sm" style="display:none;width: 100%;border-radius: 0;margin-bottom: 9px;background: #039252;" onclick="changeStatus('Fail')">TỪ CHỐI HỒ SƠ</button>
                  <button class="btn btn-success btn-sm" style=";width: 100%;border-radius: 0;background: #039252;" data-toggle="modal" data-target="#step1ChangeDateUpStatus" onclick="updateProofDate('622577879c97503b4132e763')">YÊU CẦU CẬP NHẬT</button>
          </div></div>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 156px;">
        <div class="modal-dialog" role="document" style="    padding: 5%;">
          <div class="modal-content">
            <div class="modal-header" style="padding-bottom: 0;">
              <ion-icon name="checkmark-circle" style="font-size: 58px;color: #039252;position: absolute;margin-top: -45px;margin-left: 109px;" role="img" class="md hydrated" aria-label="checkmark circle">
              </ion-icon>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <h3 style="text-align: center;font-weight: 600;margin: 0;">Thành công!</h3><br>
              <p style="font-family: sans-serif;" id="textmodal">Bạn
đã duyệt thành công bộ hồ sơ sản phẩm Trái sầu riêng cấp đông.  Để gửi 
hồ sơ tới các cán bộ chấm đánh giá, vui lòng chọn "Tạo Hội đồng chấm".</p>
            </div>
            <div class="modal-footer">
              <button class="btn btn-success btn-sm" style="width: 100%;border-radius: 0;background: #039252;" onclick="loctionHref()">Tạo hội đồng chấm</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 156px;">
        <div class="modal-dialog" role="document" style="    padding: 5%;">
          <div class="modal-content">
            <div class="modal-header" style="padding-bottom: 0;">
              <ion-icon name="checkmark-circle" style="font-size: 58px;color: #039252;position: absolute;margin-top: -45px;margin-left: 109px;" role="img" class="md hydrated" aria-label="checkmark circle">
              </ion-icon>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <h3 style="text-align: center;font-weight: 600;margin: 0;">Thành công!</h3><br>
              <p style="font-family: sans-serif;" id="textmodal">Bạn đã từ chối hồ sơ thành công. Vui lòng nhập
                lý do
                để gửi lời nhắn tới các chủ thể OCOP nhé!</p><br>
              <textarea rows="5" placeholder="Nhập lý do" style="    margin-top: -13px;width: 100%;border-radius: 4px;border: 1px solid #039252;" id="messtext"></textarea>
            </div>
            <div class="modal-footer">
              <button class="btn btn-success btn-sm" style="width: 100%;border-radius: 0;background: #039252;" onclick="sendmessstatus()">Gửi</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal" id="step1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="margin-top: 9%;max-height: 723px;  background-color: #ffffff;">
            <div class="modal-body" style="padding: 0 24px;">
              <label style="margin-top: 24px;text-align: center;font-size: 20px;width: 100%;" class="title">Nộp
                minh
                chứng</label>
              <p class="Note-Copy" style="width:100%" id="Copys"></p>

              <div class="row " style=" max-height: 453px;    overflow: auto;" id="upload">
                <form method="post" action="#" enctype="multipart/form-data" id="DropzoneNew" style="width:100%">
                  <div id="load" style="text-align: left;font-size: 14px;font-weight: 600;color: #ff847b;">
                  </div>
                  <div class="dropzone dz-clickable" id="dropzoneMytwo">
                    <div class="dropzone-previews">
                    </div>
                  <div class="dz-default dz-message"><span><span style="font-weight: 600;font-family: sans-serif; color: #039252"><i class="fas fa-cloud-upload-alt fa-5x"></i><br> Chọn file</span><i class="fa fa-folders"></i></span></div></div>

                  <div id="quote" style="margin-left: 2px;    margin-top: 40px;">
                    <label class="Note-Copy" style="text-align: left;margin-bottom: 10px; width: 74px;">Viện
                      dẫn</label>
                    <a class="test" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chủ động lựa chọn tiêu chí trong mục 'Viện dẫn' sẽ tạo điều kiện thuận lợi cho doanh nghiệp đánh giá được các minh chứng đã nộp trước khi sản phẩm được xếp hạng."><i class="fa fa-info-circle" style="font-size: 16px;color: #03a9f3;"></i></a>

                    <select id="selected2" multiple="multiple" data-select2-id="selected2" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                  </div>
                </form>
                
              </div>
              <div style="float: right;margin: 24px 0;">
                <a href="#" class="btn btn-secondary" data-dismiss="modal" style="    width: 122px;
          height: 40px;
          border-radius: 8px;
          background-color: #eff0f1;">Đóng</a>
                <button href="#" class="btn btn-success" onclick="save()" style="    width: 140px;
          height: 40px;
          border-radius: 8px;
          background-color: #049252;" id="savePoof">Lưu</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal" id="step2" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="margin-top: 9%; background-color: #ffffff;">
            <div class="modal-body" style="padding: 0 24px;">
              <label style="margin-top: 24px;text-align: center;font-size: 20px;width: 100%;" class="title">Minh
                chứng
                đã
                nộp</label>
              <p class="Note-Copy" id="docu" style="width: 100%;"></p>
              <div class="row " style="    overflow: auto;" id="ImgModal-info">
              </div>
              <div class="row " style="   overflow: auto;" id="DocModal-info">
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
        background-color: #eff0f1;" placeholder="Vd: Tôi không thể tải ảnh" id="idText">
        </textarea>
              <div style="float: right;margin: 24px 0;">
                <a href="#" class="btn btn-secondary" data-dismiss="modal" style="    width: 122px;
          height: 40px;
          border-radius: 8px;
          background-color: #eff0f1;">Đóng</a>
                <a href="#" class="btn btn-success" onclick="loadwswal()" style="    width: 140px;
          height: 40px;
          border-radius: 8px;
          background-color: #049252;">Gửi</a>
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
              <label style="margin-top: 24px;text-align: center;font-size: 20px; height: unset;" class="titles">Hướng
                dẫn</label>
              <h6 id="requirementName" class="text-center" style="color: gray;"></h6>
              <div class="mt-3">
                <h5 class="supportHeading">Giải thích</h5>
                <div id="explainDiv" class="mt-2" style="text-align: justify; font-family: 'Quicksand', sans-serif; font-weight: 500;">

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
      <div class="modal" id="step1ChangeDateUpStatus" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="margin-top: 9%;  background-color: #ffffff;">
            <div class="modal-body" style="padding: 24px;">
              <p class="Note-Copy" style="margin: 0;">Bước 1: </p>
              <p class="Note-Copy">Chọn yêu cầu minh chứng cần bổ sung</p>
              <div class="row">
                <div style="padding: 15px;display: flex;">
                  <div style="width: 95%;">
                    <a class="SubHeadingvn" style="margin: 0;">Chọn tất cả: </a>
                  </div>
                  <div>
                    <div class="rounds" style=" margin-left: 10px;margin-top: -5px;">
                      <input type="checkbox" class="checkalldata" value="checkdata" id="checkbox-all-Up" name="checkbox-group">
                      <label for="checkbox-all-Up" name="checkbox-group"></label>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div style="background-color: white;;
              display: flex;
              padding: 17px;padding-left: 0px;">
                    <div class="Rectanglevn">
                    </div>
                    <span class="SubHeadingvn">
                      Yêu cầu bắt buộc
                    </span>
                  </div>
                </div>
                <div class="col-12 row" id="Obligatorys" style=" padding: 17px;margin: 0;">
  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Phiếu đăng ký</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea54b')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea54b" id="checkbox-5e4f946cffb6912ea06ea54b" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea54b" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea54b" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea54b" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>

  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Phương án, kế hoạch kinh doanh sản phẩm</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea54c')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea54c" id="checkbox-5e4f946cffb6912ea06ea54c" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea54c" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea54c" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea54c" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>

  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Giới thiệu bộ máy tổ chức</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea54d')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea54d" id="checkbox-5e4f946cffb6912ea06ea54d" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea54d" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea54d" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea54d" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>

  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Giấy đăng ký kinh doanh</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea54e')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea54e" id="checkbox-5e4f946cffb6912ea06ea54e" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea54e" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea54e" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea54e" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>

  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Sản phẩm mẫu</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea54f')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea54f" id="checkbox-5e4f946cffb6912ea06ea54f" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea54f" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea54f" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea54f" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>
</div>

                <div class="col-12">
                  <div style="background-color: white;;
              display: flex;
              padding: 17px;padding-left: 0px;">
                    <div class="Rectanglevn">
                    </div>
                    <span class="SubHeadingvn">
                      Tài liệu minh chứng bổ sung
                    </span>
                  </div>
                </div>
                <div class="col-12 row" id="Additionallys" style=" padding: 17px;margin: 0;">
  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Giấy đủ điều kiện sản xuất, giấy an toàn vệ sinh thực phẩm ...</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea550')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea550" id="checkbox-5e4f946cffb6912ea06ea550" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea550" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea550" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea550" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>

  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Công bố chất lượng sản phẩm</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea551')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea551" id="checkbox-5e4f946cffb6912ea06ea551" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea551" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea551" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea551" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>

  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Tiêu chuẩn sản phẩm</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea552')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea552" id="checkbox-5e4f946cffb6912ea06ea552" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea552" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea552" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea552" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>

  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Phiếu kết quả kiểm tra chỉ tiêu an toàn thực phẩm theo tiêu chuẩn công bố</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea553')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea553" id="checkbox-5e4f946cffb6912ea06ea553" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea553" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea553" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea553" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>

  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Mã số mã vạch, tem truy xuất nguồn gốc, chứng nhận sở hữu trí tuệ, chỉ dẫn địa lý, nhãn hiệu sản phẩm...</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea554')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea554" id="checkbox-5e4f946cffb6912ea06ea554" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea554" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea554" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea554" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>

  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Nguồn gốc nguyên liệu, liên kết chuỗi</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea555')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea555" id="checkbox-5e4f946cffb6912ea06ea555" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea555" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea555" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea555" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>

  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Hệ thống quản lý chất lượng tiên tiến, kiểm soát chất lượng</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea557')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea557" id="checkbox-5e4f946cffb6912ea06ea557" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea557" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea557" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea557" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>

  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Bảo vệ môi trường</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea556')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea556" id="checkbox-5e4f946cffb6912ea06ea556" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea556" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea556" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea556" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>

  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Kế toán</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea558')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea558" id="checkbox-5e4f946cffb6912ea06ea558" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea558" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea558" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea558" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>

  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Phát triển thị trường, hoạt động quảng bá, xúc tiến thương mại</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea559')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea559" id="checkbox-5e4f946cffb6912ea06ea559" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea559" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea559" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea559" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>

  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Câu chuyện về sản phẩm</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea55a')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea55a" id="checkbox-5e4f946cffb6912ea06ea55a" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea55a" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea55a" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea55a" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>

  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Kế hoạch kiểm soát chất lượng, ghi hồ sơ lô sản xuất...</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea55b')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea55b" id="checkbox-5e4f946cffb6912ea06ea55b" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea55b" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea55b" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea55b" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>

  <div class="div_border">
      <div style="    width: 95%;">
          <a class="textProof" style="margin: 0;">Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế...</a>
      </div>
      <div>
      <div class="rounds">
          <input type="checkbox" onchange="checkedCheckbox('5e4f946cffb6912ea06ea55c')" class="change-selectorChangeDateUp" value="5e4f946cffb6912ea06ea55c" id="checkbox-5e4f946cffb6912ea06ea55c" name="checkbox-group">
          <label for="checkbox-5e4f946cffb6912ea06ea55c" name="checkbox-group"></label>
      </div>
      </div>
  </div>
  <div id="5e4f946cffb6912ea06ea55c" style="width:100%;display:none">
      <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_5e4f946cffb6912ea06ea55c" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" name="note" rows="3"></textarea>
  </div>
</div>

              </div>
              <div style="float: right;margin: 24px 0;">
                <a href="#" class="btn btn-success" onclick="nextStepChangeDateUp(1)">Tiếp tục</a>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="modal" id="step2ChangeDateUpStatus" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content" style="margin-top: 9%;  background-color: #ffffff;">
            <div class="modal-body" style="padding: 24px;">
              <p class="Note-Copy" style="margin: 0;">Bước 2: </p>
              <p class="Note-Copy">Chọn thời gian cho phép</p>
              <div class="row" style="margin: 0px;">
                <div class="col-12">
                  <div style="background-color: white;;
              display: flex;
              padding: 17px;padding-left: 0px;">
                    <div class="Rectanglevn">
                    </div>
                    <span class="SubHeadingvn">
                      Ngày hết hạn bổ sung minh chứng
                    </span>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="date" class="form-control backgroup" id="dateEndUpProof" name="dateEndUpProof" value="2022-03-18">
                  </div>
                </div>
                <!-- <div class="col-12">
            <div  style="background-color: white;;
              display: flex;
              padding: 17px;padding-left: 0px;">
              <div class="Rectanglevn">
              </div>
              <span class="SubHeadingvn">
                Ghi chú
              </span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <textarea placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!" class="form-control backgroup" id="note" name="note" rows="4" ></textarea>
            </div>
          </div> -->
              </div>
              <div style="float: right;margin: 24px 0;">
                <a href="#" class="btn btn-secondary" onclick="backstepChangeDateUp(1)">Quay lại</a>
                <button href="#" class="btn btn-success" id="btnSaveDate" onclick="saveDateEnd()">Hoàn
                  thành</button>
                <button href="#" class="btn btn-success" id="btnupdate" style="display: none;" onclick="updateDateEnd()">Chỉnh sửa</button>
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
              <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Nộp yêu cầu minh
                chứng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Tự chấm đánh giá</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <!-- ************************* PANEL NỘP MINH CHỨNG ************************* -->

            <div role="tabpanel" class="tab-pane in active" id="profile">
              <div class="row">
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
          <div class="ectangle">
              <a href="#" data-toggle="modal" data-target="#multiChoiceModal" onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54b', '622577879c97503b4132e763', 'Phiếu đăng ký')" class="viewMem">
              
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">1</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
           </a>
           <div class="titlesinfo">  <a class="viewMem" herf="#" data-toggle="modal" data-target="#multiChoiceModal" onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54b', '622577879c97503b4132e763', 'Phiếu đăng ký')">Phiếu đăng ký </a>
           </div>
           <div style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
             <div class="Rectangle-Copy">
             <a class="uploadButton disabled" href="javascript:openQuestionModal('5e4f946cffb6912ea06ea54b','622577879c97503b4132e763','Phi%E1%BA%BFu %C4%91%C4%83ng k%C3%BD')"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;"></a>
             </div>
             <div class="re-Copy" style="margin-right: 8px;">
             <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea54b')">
              <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style=" margin-top: 13px;">
                    </a>
             </div>
             <div class="re-Copy">
             <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea54b","__v":0,"Contents":"Phiếu đăng ký ý tưởng sản phẩm, đăng ký sản phẩm","true":"1","TextCheck":"PDK","help":"1","check":"1","content":"Phiếu đăng ký","requirements":"Có theo mẫu đính kèm (biểu số 01, 02)","type":"Obligatory","supportInformation":{"explainText":"90% sản phẩm cùng loại trên thị trường được sản xuất từ một nguồn nguyên liệu, theo công nghệ chuẩn và trên thực tế là không có sự khác biệt nào. Vậy làm thế nào để người tiêu dùng phân biệt được tính ưu việt của sản phẩm? Quảng cáo thật nhiều trên các phương tiện truyền thông ư? Nhiều doanh nghiệp có khả năng làm được việc này. Giảm giá sản phẩm chăng? Các doanh nghiệp tuyên chiến với cuộc chiến giá cả thường buộc phải tạm thời quên đi nguồn lợi nhuận của mình. “Câu chuyện sản phẩm” chính là một trong những “chiêu” giúp doanh nghiệp tạo ra lợi nhuận một cách hữu hiệu nhất","tutorialDocs":[{"tutorialName":"Quy trình phiếu đăng ký","type":"doc","dataLinks":["https://view.officeapps.live.com/op/view.aspx?src=https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/CCSP.docx"]}],"tutorialVideos":["https://youtu.be/5JjVyZPu6Hw"]},"proofinfors":[{"_id":"6225ba5f9c97503b4132e77b","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646639705769_1236721.Phiếuđăngkýsảnphẩm-Biểumẫusố2.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea54b","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Phiếu đăng ký sản phẩm - Biểu mẫu số 2","nameFile":"1. Phiếu đăng ký sản phẩm - Biểu mẫu số 2.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T07:55:11.141Z","updatedAt":"2022-03-07T07:55:11.141Z"}]})'>
                  <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
              </a>
             </div>
           </div>
        </div>
      
          <div class="ectangle">
              <a href="#" data-toggle="modal" data-target="#multiChoiceModal" onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54c', '622577879c97503b4132e763', 'Phương án, kế hoạch kinh doanh sản phẩm')" class="viewMem">
              
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">1</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
           </a>
           <div class="titlesinfo">  <a class="viewMem" herf="#" data-toggle="modal" data-target="#multiChoiceModal" onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54c', '622577879c97503b4132e763', 'Phương án, kế hoạch kinh doanh sản phẩm')">Phương án, kế hoạch kinh doanh sản phẩm </a>
           </div>
           <div style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
             <div class="Rectangle-Copy">
             <a class="uploadButton disabled" href="javascript:openQuestionModal('5e4f946cffb6912ea06ea54c','622577879c97503b4132e763','Ph%C6%B0%C6%A1ng %C3%A1n, k%E1%BA%BF ho%E1%BA%A1ch kinh doanh s%E1%BA%A3n ph%E1%BA%A9m')"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;"></a>
             </div>
             <div class="re-Copy" style="margin-right: 8px;">
             <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea54c')">
              <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style=" margin-top: 13px;">
                    </a>
             </div>
             <div class="re-Copy">
             <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea54c","__v":0,"TextCheck":"KHKDSP","check":"1","content":"Phương án, kế hoạch kinh doanh sản phẩm","requirements":"Có theo mẫu đính kèm (biểu số 03)","type":"Obligatory","supportInformation":{"explainText":"Trong quá trình xây dựng và phát triển, các doanh nghiệp ắt hẳn phải nắm vững tình hình hoạt động hiện tại, xác định thị trường mục tiêu, đối thủ cạnh tranh để vạch ra cho mình đường lối phát triển trong tương lai. Đó là lý do vì sao các doanh nghiệp cần phải lập cho mình một bản kế hoạch kinh doanh thật chi tiết và cụ thể. Bạn cứ thử hình dung hoạt đông tương lai của doanh nghiệp như một con đường không ánh sáng, thì bản kế hoạch kinh doanh chính là chiếc đèn pin rọi sáng, giúp bạn bước những bước đi vững chắc về sau.","tutorialDocs":[{"tutorialName":"Infographic Các bước lập kế hoạch kinh doanh ","type":"image","dataLinks":["https://images.app.goo.gl/VpcRCEHPvBzbvwUc7"]},{"tutorialName":"Các bước lập kế hoạch kinh doanh ","type":"doc","dataLinks":["https://docs.google.com/document/d/19pmfKGXbLxZSxWLbKl8EH7vA7OdVl43XemkvrNxpMow/edit?usp=sharing"]}],"tutorialVideos":["https://www.youtube.com/watch?v=362uQ6x018s#action=share"]},"proofinfors":[{"_id":"6225ba7f9c97503b4132e77d","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646639736004_8637002.Phươngán,kếhoạchkinhdoanhsảnphẩm-Biểumẫusố3.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea54c","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Phương án, kế hoạch kinh doanh sản phẩm - Biểu mẫu số 3","nameFile":"2. Phương án, kế hoạch kinh doanh sản phẩm - Biểu mẫu số 3.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T07:55:43.382Z","updatedAt":"2022-03-07T07:55:43.382Z"}]})'>
                  <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
              </a>
             </div>
           </div>
        </div>
      
          <div class="ectangle">
              <a href="#" data-toggle="modal" data-target="#multiChoiceModal" onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54d', '622577879c97503b4132e763', 'Giới thiệu bộ máy tổ chức')" class="viewMem">
              
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">2</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
           </a>
           <div class="titlesinfo">  <a class="viewMem" herf="#" data-toggle="modal" data-target="#multiChoiceModal" onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54d', '622577879c97503b4132e763', 'Giới thiệu bộ máy tổ chức')">Giới thiệu bộ máy tổ chức </a>
           </div>
           <div style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
             <div class="Rectangle-Copy">
             <a class="uploadButton disabled" href="javascript:openQuestionModal('5e4f946cffb6912ea06ea54d','622577879c97503b4132e763','Gi%E1%BB%9Bi thi%E1%BB%87u b%E1%BB%99 m%C3%A1y t%E1%BB%95 ch%E1%BB%A9c')"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;"></a>
             </div>
             <div class="re-Copy" style="margin-right: 8px;">
             <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea54d')">
              <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style=" margin-top: 13px;">
                    </a>
             </div>
             <div class="re-Copy">
             <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea54d","__v":0,"content":"Giới thiệu bộ máy tổ chức","requirements":"Có theo mẫu đính kèm (biểu số 04)","type":"Obligatory","supportInformation":{"explainText":"1. Sơ đồ tổ chức bộ máy (đối với doanh nghiệp, hợp tác xã): Chuẩn bị một sơ đồ tổ chức mà trong đó từng chức năng được minh họa cụ thể.\n</br> 2. Chức năng nhiệm vụ các bộ phận trong sơ đồ tổ chức: Mô tả nhân sự chủ chốt trong nhóm quản lý về mặt hiểu biết, kinh nghiệm quan hệ sản xuất kinh doanh, trình độ học vấn và trách nhiệm của họ trong sản xuất kinh doanh. Nêu sự khác biệt trong quản lý của chủ thể. ","tutorialDocs":[{"tutorialName":"Infographic Giới thiệu mô hình kinh doanh","type":"image","dataLinks":["http://tokyofounders.com/wp-content/uploads/2019/09/s%C4%914-768x252.png"]},{"tutorialName":"Giới thiệu bộ máy tổ chức","type":"doc","dataLinks":["https://docs.google.com/document/d/18IEch0Aaovk-URqveXvX8K8VUV8ZA9P-sg7Ql_OfUfc/edit?usp=sharing"]}],"tutorialVideos":["https://youtu.be/7c2I0Lo95LI"]},"proofinfors":[{"_id":"6225baa39c97503b4132e77f","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646639762320_5977003.Giớithiệubộmáytổchức-Biểumẫusố4.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea54d","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Giới thiệu bộ máy tổ chức - Biểu mẫu số 4","nameFile":"3. Giới thiệu bộ máy tổ chức - Biểu mẫu số 4.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T07:56:19.978Z","updatedAt":"2022-03-07T07:56:19.978Z"},{"_id":"6226ca059c97503b4132e81b","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646709216931_2807721.2.1.Quytrìnhsảnxuấtxửlýsầuriêngcápđông.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea54d","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Quy trình sản xuấtxử lý sầu riêng cáp đông","nameFile":"1.2.1. Quy trình sản xuấtxử lý sầu riêng cáp đông.pdf","type":"IMG","__v":0,"createdAt":"2022-03-08T03:14:13.526Z","updatedAt":"2022-03-08T03:14:13.526Z"}]})'>
                  <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
              </a>
             </div>
           </div>
        </div>
      
          <div class="ectangle">
              <a href="#" data-toggle="modal" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea54e','Giấy đăng ký kinh doanh')" class="viewMem">
              
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">2</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
           </a>
           <div class="titlesinfo">  <a class="viewMem" herf="#" data-toggle="modal" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea54e','Giấy đăng ký kinh doanh')">Giấy đăng ký kinh doanh </a>
           </div>
           <div style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
             <div class="Rectangle-Copy">
             
                      <a class="uploadButton disabled" href="#" data-toggle="modal" data-target="#step1" onclick="clicks('5e4f946cffb6912ea06ea54e','Giấy đăng ký kinh doanh')">
                      <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;">
                      </a>
             </div>
             <div class="re-Copy" style="margin-right: 8px;">
             <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea54e')">
              <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style=" margin-top: 13px;">
                    </a>
             </div>
             <div class="re-Copy">
             <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea54e","__v":0,"Note":"Hãy đảm bảo Giấy đăng ký kinh doanh còn hiệu lực","content":"Giấy đăng ký kinh doanh","requirements":"Bản sao có công chứng, chứng minh hoạt động kinh doanh hợp pháp (đối với các đơn vị/cá nhân có đăng ký kinh doanh)","type":"Obligatory","supportInformation":{"explainText":"Giống như mỗi con người khi được sinh ra đều có giấy khai sinh thì với doanh nghiệp cũng vậy, để biết một doanh nghiệp mới được thành lập hợp pháp thì phải có giấy chứng nhận đăng ký kinh doanh. Theo đó, giấy chứng nhận đăng ký kinh doanh là văn bản, bản điện tử mà Cơ quan nhà nước có thẩm quyền cấp cho doanh nghiệp ghi lại những thông tin về đăng ký kinh doanh mới nhất","tutorialDocs":[{"tutorialName":"infographic Giấy chứng nhận kinh doanh","type":"image","dataLinks":["https://images.app.goo.gl/nMDvCATEsmXQ9e919"]},{"tutorialName":"Giấy chứng nhận đăng ký kinh doanh là gì?","type":"doc","dataLinks":["https://docs.google.com/document/d/1bPnCnEnqujkOmRmfBIfxVAYSGEcto4ZZUBk-MdN2fpg/edit?usp=sharing"]}],"tutorialVideos":["https://www.youtube.com/watch?v=ItdLdvI_M3Q#action=share"]},"proofinfors":[{"_id":"6225bae69c97503b4132e781","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646639800304_5387984.Giấyđăngkýkinhdoanh.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea54e","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Giấy đăng ký kinh doanh","nameFile":"4.Giấy đăng ký kinh doanh.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T07:57:26.399Z","updatedAt":"2022-03-07T07:57:26.399Z"},{"_id":"6226cd679c97503b4132e81d","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646710068419_3331111.3.1.ĐơnxácnhậnquymôsảnxuấtcủaUBNDxãHoàNghĩa,huyệnChợLách,tỉnhBếnTre.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea54e","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Đơn xác nhận quy mô sản xuất lớn có thể đáp ưng nhu cầu xuất khẩu","nameFile":"1.3.1. Đơn xác nhận quy mô sản xuất của UBND xã Hoà Nghĩa, huyện Chợ Lách, tỉnh Bến Tre.pdf","type":"IMG","__v":0,"createdAt":"2022-03-08T03:28:39.300Z","updatedAt":"2022-03-08T03:28:39.300Z"}]})'>
                  <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
              </a>
             </div>
           </div>
        </div>
      
          <div class="ectangle">
              <a href="#" data-toggle="modal" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea54f','Sản phẩm mẫu')" class="viewMem">
              
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">7</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
           </a>
           <div class="titlesinfo">  <a class="viewMem" herf="#" data-toggle="modal" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea54f','Sản phẩm mẫu')">Sản phẩm mẫu </a>
           </div>
           <div style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
             <div class="Rectangle-Copy">
             
                      <a class="uploadButton disabled" href="#" data-toggle="modal" data-target="#step1" onclick="clicks('5e4f946cffb6912ea06ea54f','Sản phẩm mẫu')">
                      <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;">
                      </a>
             </div>
             <div class="re-Copy" style="margin-right: 8px;">
             <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea54f')">
              <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style=" margin-top: 13px;">
                    </a>
             </div>
             <div class="re-Copy">
             <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea54f","__v":0,"content":"Sản phẩm mẫu","requirements":"05 đơn vị sản phẩm (trừ sản phẩm dịch vụ)","type":"Obligatory","supportInformation":{"explainText":"Mỗi doanh nghiệp cần có mẫu sản phẩm. Đây là hình thức marketing giới thiệu sản phẩm trực tiếp tới người tiêu dùng và cho người tiêu dùng trải nghiệm sản phẩm đó. Đây là hình thức quảng bá hình ảnh thông minh bởi thông qua hình thức này, doanh nghiệp, công ty có thể thu hồi ý kiến của khách hàng. Từ đó, có thể thay đổi, hoạch định chiến lược cho phù hợp. Ngoài ra, khách hàng cũng có thể quyết định chọn mua nếu cảm thấy hài lòng về sản phẩm.","tutorialDocs":[{"tutorialName":"infographic Cách đóng gói, bao bì sản phẩm","type":"image","dataLinks":["https://images.app.goo.gl/1d7Np14XqtPaXhLh8"]},{"tutorialName":"Xây dựng thương hiệu và mẫu mã sản phẩm","type":"doc","dataLinks":["https://docs.google.com/document/d/1t-lsd5Xk6FGSsxG0tbMCd9w9ZuRCnhRzXcR9fyYwxt8/edit?usp=sharing"]}],"tutorialVideos":["https://youtu.be/YDYycqhfJQk"]},"proofinfors":[{"_id":"6225c0969c97503b4132e783","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646640210822_1589816.1.Mẫusảnphẩm-Quảnhỏđồngđều,gainở,múinhỏ,hạtnhỏ,cơmdày..jpg","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea54f","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Mẫu sản phẩm - Quả nhỏ đồng đều, gai nở, múi nhỏ, hạt nhỏ, cơm dày.","nameFile":"6.1.Mẫu sản phẩm - Quả nhỏ đồng đều, gai nở, múi nhỏ, hạt nhỏ, cơm dày..jpg","type":"IMG","__v":0,"createdAt":"2022-03-07T08:21:42.676Z","updatedAt":"2022-03-07T08:21:42.676Z"},{"_id":"6225c0c79c97503b4132e785","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646641313858_2587426.2.Mẫusảnphẩm-Cơmmàuvàngtươi,dẻo,mịn.jpg","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea54f","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Mẫu sản phẩm - Cơm màu vàng tươi, dẻo, mịn","nameFile":"6.2.Mẫu sản phẩm - Cơm màu vàng tươi, dẻo, mịn.jpg","type":"IMG","__v":0,"createdAt":"2022-03-07T08:22:32.000Z","updatedAt":"2022-03-07T08:22:32.000Z"},{"_id":"6225c0ea9c97503b4132e787","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646641370061_6895076.3.Mẫusảnphẩm-Mùithơmđặctrưngcủasầuriêng.Vịngọtthanh,béo..jpg","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea54f","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Mẫu sản phẩm - Mùi thơm đặc trưng của sầu riêng. Vị ngọt thanh, béo.","nameFile":"6.3. Mẫu sản phẩm - Mùi thơm đặc trưng của sầu riêng. Vị ngọt thanh, béo..jpg","type":"IMG","__v":0,"createdAt":"2022-03-07T08:23:06.365Z","updatedAt":"2022-03-07T08:23:06.365Z"},{"_id":"6225c1169c97503b4132e789","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646641404376_2941406.4.Mẫusảnphẩm-Sảnphẩmđẩmbảochấtlượngantoànthựcphẩm..jpg","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea54f","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Mẫu sản phẩm - Sản phẩm đẩm bảo chất lượng an toàn thực phẩm.","nameFile":"6.4. Mẫu sản phẩm - Sản phẩm đẩm bảo chất lượng an toàn thực phẩm..jpg","type":"IMG","__v":0,"createdAt":"2022-03-07T08:23:50.416Z","updatedAt":"2022-03-07T08:23:50.416Z"},{"_id":"6225c1439c97503b4132e78b","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646641448877_5393406.5.Mẫusảnphẩm-Sảnphẩmđượcbaogói,sắpxếpgọngàngtrongthùngcarton..jpg","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea54f","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Mẫu sản phẩm - Sản phẩm được bao gói, sắp xếp gọn gàng trong thùng carton.","nameFile":"6.5. Mẫu sản phẩm - Sản phẩm được bao gói, sắp xếp gọn gàng trong thùng carton..jpg","type":"IMG","__v":0,"createdAt":"2022-03-07T08:24:35.229Z","updatedAt":"2022-03-07T08:24:35.229Z"},{"_id":"6225c1e29c97503b4132e78d","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646641611439_9244598.Tínhđộcđáo.jpg","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea54f","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Mẫu sản phẩm - tính độc đáo","nameFile":"8. Tính độc đáo.jpg","type":"IMG","__v":0,"createdAt":"2022-03-07T08:27:14.416Z","updatedAt":"2022-03-07T08:27:14.416Z"},{"_id":"6226d3969c97503b4132e82e","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646711634004_8559858.Tínhđộcđáo.jpg","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea54f","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Mẫu sản phẩm- sản phẩm độc đáo có nét riêng, khác biệt, không lẫn vào sản phẩm cùng loại của địa phương khác","nameFile":"8. Tính độc đáo.jpg","type":"IMG","__v":0,"createdAt":"2022-03-08T03:55:02.221Z","updatedAt":"2022-03-08T03:55:02.221Z"}]})'>
                  <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
              </a>
             </div>
           </div>
        </div>
      </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card">
                    <div class="card-header" style="background-color: white;display: flex;padding: 17px;">
                      <div class="Rectangle">
                      </div>
                      <span class="SubHeading ">
                        TÀI LIỆU MINH CHỨNG BỔ SUNG
                      </span>

                    </div>
                    <div class="card-body row" id="Additionally">
  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea550','Giấy đủ điều kiện sản xuất, giấy an toàn vệ sinh thực phẩm ...')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">1</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
    </a>
     <div class="titlesinfo" style="margin-bottom:50px">  <a herf="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea550','Giấy đủ điều kiện sản xuất, giấy an toàn vệ sinh thực phẩm ...')">Giấy đủ điều kiện sản xuất, giấy an toàn vệ sinh thực phẩm ... </a>
     </div>
     <div style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
       <div class="Rectangle-Copy">
          
                      <a class="uploadButton disabled" href="#" data-toggle="modal" data-target="#step1" onclick="clicks('5e4f946cffb6912ea06ea550','Giấy đủ điều kiện sản xuất, giấy an toàn vệ sinh thực phẩm ...')">
                      <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;">
                      </a>
       </div>
       <div class="re-Copy" style="margin-right: 8px;">
       <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea550')">
        <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style="    margin-top: 13px;">
       </a>
       </div>
       <div class="re-Copy">
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea550","__v":0,"content":"Giấy đủ điều kiện sản xuất, giấy an toàn vệ sinh thực phẩm ...","requirements":"Bản sao có công chứng (đối với sản phẩm cần phải có giấy chứng nhận theo quy định hiện hành)","type":"Additionally","supportInformation":{"explainText":"Để có thể thành lập công ty hay bất cứ đơn vị nào đều cần check điều kiện sản xuất xem có phù hợp với lĩnh vực ngành nghề họ đăng ký hay không. Và đối với một sản phẩm cần phải có giấy chứng nhận theo quy định hiện hành cho từng loại sản phẩm và được cập nhật thường xuyên theo các văn bản điều chỉnh mới của các ngành. Các chủ hộ, chủ doanh nghiệp sản xuất kinh doanh phải đáp ứng Điều kiện cấp giấy chứng nhận đủ điều kiện sản xuất cho cơ sở kinh doanh của mình. ","tutorialDocs":[{"tutorialName":"Thủ tục cấp giấy chứng nhận cơ sở đủ điều kiện sản xuất","type":"doc","dataLinks":["https://docs.google.com/document/d/1GjDcbbJzgq77ChcQBJJyYcsK-72A2IYt9VSvH3I_OdQ/edit?usp=sharing"]}]},"proofinfors":[{"_id":"6225c4ac9c97503b4132e78f","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646641662811_6654035.Giấychứngnhậncơsởđủđiềukiệnantoànthựcphẩm.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea550","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Giấy chứng nhận cơ sở đủ điều kiện an toàn thực phẩm","nameFile":"5. Giấy chứng nhận cơ sở đủ điều kiện an toàn thực phẩm.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T08:39:08.781Z","updatedAt":"2022-03-07T08:39:08.781Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea551','Công bố chất lượng sản phẩm')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">3</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
    </a>
     <div class="titlesinfo" style="margin-bottom:50px">  <a herf="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea551','Công bố chất lượng sản phẩm')">Công bố chất lượng sản phẩm </a>
     </div>
     <div style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
       <div class="Rectangle-Copy">
          
                      <a class="uploadButton disabled" href="#" data-toggle="modal" data-target="#step1" onclick="clicks('5e4f946cffb6912ea06ea551','Công bố chất lượng sản phẩm')">
                      <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;">
                      </a>
       </div>
       <div class="re-Copy" style="margin-right: 8px;">
       <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea551')">
        <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style="    margin-top: 13px;">
       </a>
       </div>
       <div class="re-Copy">
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea551","__v":0,"content":"Công bố chất lượng sản phẩm","requirements":"Bản sao tài liệu, chứng minh chất lượng sản phẩm được công bố","type":"Additionally","supportInformation":{"explainText":"Việc sở hữu giấy chứng nhận chất lượng hàng hóa nhằm chứng minh hàng hóa đạt chất lượng phù hợp với tiêu chuẩn công bố. Các doanh nghiệp nên xin giấy chứng nhận chất lượng cho sản phẩm, hàng hóa của mình vì nó giúp xây dựng niềm tin cho khách hàng về chất lượng và sự an toàn của sản phẩm, thúc đẩy lượng tiêu thụ sản phẩm đó trên thị trường.","tutorialDocs":[{"tutorialName":"Công bố chất lượng sản phẩm","type":"doc","dataLinks":["https://docs.google.com/document/d/1kZHE4RhihkdQgKFiirhdF7_e6PCThPPng016Z44WFjk/edit?usp=sharing"]}]},"proofinfors":[{"_id":"6225d5069c97503b4132e7db","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646475253_4200949.1.1.Cóbảntựcôngbốchấtlượng.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea551","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Hồ sơ công bố tiêu chuẩn sản phẩm của cơ sở sản xuất-Bản tự công bố","nameFile":"9.1.1. Có bản tự công bố chất lượng.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:48:54.792Z","updatedAt":"2022-03-09T02:48:16.481Z"},{"_id":"6225d5069c97503b4132e7dc","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646483047_2331999.1.2.Quyếtđịnhbanhànhtiêuchuẩncơsở.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea551","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Quyết định ban hành và công bố áp dụng Tiêu chuẩn cơ sở","nameFile":"9.1.2. Quyết định ban hành tiêu chuẩn cơ sở.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:48:54.792Z","updatedAt":"2022-03-09T02:48:28.314Z"},{"_id":"6225d5069c97503b4132e7dd","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646490559_8635579.1.3.Tiêuchuẩncơsởsổ022021VT.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea551","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Hồ sơ công bố tiêu chuẩn sản phẩm của cơ sở sản xuất","nameFile":"9.1.3. Tiêu chuẩn cơ sở sổ 022021VT.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:48:54.793Z","updatedAt":"2022-03-09T02:48:39.686Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea552','Tiêu chuẩn sản phẩm')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">3</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
    </a>
     <div class="titlesinfo" style="margin-bottom:50px">  <a herf="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea552','Tiêu chuẩn sản phẩm')">Tiêu chuẩn sản phẩm </a>
     </div>
     <div style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
       <div class="Rectangle-Copy">
          
                      <a class="uploadButton disabled" href="#" data-toggle="modal" data-target="#step1" onclick="clicks('5e4f946cffb6912ea06ea552','Tiêu chuẩn sản phẩm')">
                      <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;">
                      </a>
       </div>
       <div class="re-Copy" style="margin-right: 8px;">
       <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea552')">
        <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style="    margin-top: 13px;">
       </a>
       </div>
       <div class="re-Copy">
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea552","__v":0,"content":"Tiêu chuẩn sản phẩm","requirements":"Bản sao tài liệu, chứng minh tiêu chuẩn sản phẩm được công bố","type":"Additionally","supportInformation":{"explainText":"Tiêu chuẩn là quy định về đặc tính kỹ thuật và yêu cầu quản lý dùng làm chuẩn để phân loại, đánh giá sản phẩm, hàng hoá, dịch vụ, quá trình, môi trường và các đối tượng khác trong hoạt động kinh tế - xã hội nhằm nâng cao chất lượng và hiệu quả của các đối tượng này. Tiêu chuẩn do một tổ chức công bố dưới dạng văn bản để tự nguyện áp dụng.","tutorialDocs":[{"tutorialName":"Tiêu chuẩn sản phẩm","type":"doc","dataLinks":["https://docs.google.com/document/d/1cetir_chVVuUb0KMdMnXI3AdrkVuvZNx88HuQDZ_NBE/edit?usp=sharing"]}]},"proofinfors":[{"_id":"6225cf209c97503b4132e795","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646644887811_1694929.1.3.Tiêuchuẩncơsởsổ022021VT.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea552","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Hồ sơ công bố tiêu chuẩn sản phẩm của cơ sở sản xuất: Tiêu chuẩn cơ sở sổ 02:2021/VT","nameFile":"9.1.3. Tiêu chuẩn cơ sở sổ 022021VT.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:23:44.082Z","updatedAt":"2022-03-09T02:44:12.293Z"},{"_id":"6225cf209c97503b4132e796","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646644901558_1056149.1.2.Quyếtđịnhbanhànhtiêuchuẩncơsở.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea552","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Hồ sơ công bố tiêu chuẩn sản phẩm của cơ sở sản xuất: Quyết định ban hành TCCS","nameFile":"9.1.2. Quyết định ban hành tiêu chuẩn cơ sở.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:23:44.082Z","updatedAt":"2022-03-09T02:44:28.146Z"},{"_id":"6225cf209c97503b4132e797","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646644913080_1042309.1.1.Cóbảntựcôngbốchấtlượng.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea552","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Hồ sơ công bố tiêu chuẩn sản phẩm của cơ sở sản xuất: Có bản tự công bố chất lượng","nameFile":"9.1.1. Có bản tự công bố chất lượng.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:23:44.082Z","updatedAt":"2022-03-09T02:44:49.562Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea553','Phiếu kết quả kiểm tra chỉ tiêu an toàn thực phẩm theo tiêu chuẩn công bố')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">3</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
    </a>
     <div class="titlesinfo" style="margin-bottom:50px">  <a herf="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea553','Phiếu kết quả kiểm tra chỉ tiêu an toàn thực phẩm theo tiêu chuẩn công bố')">Phiếu kết quả kiểm tra chỉ tiêu an toàn thực phẩm theo tiêu chuẩn công bố </a>
     </div>
     <div style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
       <div class="Rectangle-Copy">
          
                      <a class="uploadButton disabled" href="#" data-toggle="modal" data-target="#step1" onclick="clicks('5e4f946cffb6912ea06ea553','Phiếu kết quả kiểm tra chỉ tiêu an toàn thực phẩm theo tiêu chuẩn công bố')">
                      <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;">
                      </a>
       </div>
       <div class="re-Copy" style="margin-right: 8px;">
       <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea553')">
        <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style="    margin-top: 13px;">
       </a>
       </div>
       <div class="re-Copy">
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea553","__v":0,"content":"Phiếu kết quả kiểm tra chỉ tiêu an toàn thực phẩm theo tiêu chuẩn công bố","requirements":"Bản sao tài liệu, chứng minh đạt tiêu chuẩn vệ sinh an toàn thực phẩm","type":"Additionally","supportInformation":{"explainText":"Để có thể sản xuất, kinh doanh sản phẩm thực phẩm, công bố chất lượng sản phẩm thực phẩm thì đầu tiên Cơ sở sản xuất, kinh doanh phải được cấp Giấy chứng nhận cơ sở đủ điều kiện an toàn thực phẩm.","tutorialDocs":[{"tutorialName":"Thủ tục cấp giấy chứng nhận cơ sở đủ điều kiện an toàn thực phẩm","type":"doc","dataLinks":["https://docs.google.com/document/d/177NJQX0vUNfx7S99F2I0CXf-NEj5X1Sh2jBjjuOkS9U/edit?usp=sharing"]}]},"proofinfors":[{"_id":"6225cf7a9c97503b4132e79b","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645058773_3390529.2.1PhiếukếtquảkiểmnghiệmcácchỉtiêuATTPđạtvàđầyđủ-bs2.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea553","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Có đầy đủ các chỉ tiêu an toàn thực phẩm-Phiếu kết quả thử nghiệm","nameFile":"9.2.1Phiếu kết quả kiểm nghiệm các chỉ tiêu ATTP đạt và đầy đủ-bs 2.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:25:14.223Z","updatedAt":"2022-03-09T02:55:14.993Z"},{"_id":"6225cf7a9c97503b4132e79c","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645067792_4217899.2.2PhiếukếtquảkiểmnghiệmcácchỉtiêuATTPđạtvàđầyđủ-bs1.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea553","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Có đầy đủ các chỉ tiêu an toàn thực phẩm-kết quả thử nghiệm các chỉ tiêu vi sinh","nameFile":"9.2.2 Phiếu kết quả kiểm nghiệm các chỉ tiêu ATTP đạt và đầy đủ-bs 1.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:25:14.223Z","updatedAt":"2022-03-09T02:55:35.208Z"},{"_id":"6225cf7a9c97503b4132e79d","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645075894_1350309.2.3PhiếukếtquảkiểmnghiệmcácchỉtiêuATTPđạtvàđầyđủ..pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea553","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Có đầy đủ các chỉ tiêu an toàn thực phẩm-Phiếu kết quả thử nghiệm các kim loại nặng","nameFile":"9.2.3 Phiếu kết quả kiểm nghiệm các chỉ tiêu ATTP đạt và đầy đủ..pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:25:14.223Z","updatedAt":"2022-03-09T02:55:48.342Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea554','Mã số mã vạch, tem truy xuất nguồn gốc, chứng nhận sở hữu trí tuệ, chỉ dẫn địa lý, nhãn hiệu sản phẩm...')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">7</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
    </a>
     <div class="titlesinfo" style="margin-bottom:50px">  <a herf="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea554','Mã số mã vạch, tem truy xuất nguồn gốc, chứng nhận sở hữu trí tuệ, chỉ dẫn địa lý, nhãn hiệu sản phẩm...')">Mã số mã vạch, tem truy xuất nguồn gốc, chứng nhận sở hữu trí tuệ, chỉ dẫn địa lý, nhãn hiệu sản phẩm... </a>
     </div>
     <div style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
       <div class="Rectangle-Copy">
          
                      <a class="uploadButton disabled" href="#" data-toggle="modal" data-target="#step1" onclick="clicks('5e4f946cffb6912ea06ea554','Mã số mã vạch, tem truy xuất nguồn gốc, chứng nhận sở hữu trí tuệ, chỉ dẫn địa lý, nhãn hiệu sản phẩm...')">
                      <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;">
                      </a>
       </div>
       <div class="re-Copy" style="margin-right: 8px;">
       <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea554')">
        <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style="    margin-top: 13px;">
       </a>
       </div>
       <div class="re-Copy">
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea554","__v":0,"check":"1","content":"Mã số mã vạch, tem truy xuất nguồn gốc, chứng nhận sở hữu trí tuệ, chỉ dẫn địa lý, nhãn hiệu sản phẩm...","requirements":"Bản sao tài liệu, chứng minh mã, tem, sở hữu thương hiệu...","type":"Additionally","supportInformation":{"explainText":"Thực trạng hiện nay trước những vấn nạn như hàng giả, hàng nhái, hàng lưu thông không có nguồn gốc xuất xứ, sản phẩm chứa chất cấm, độc hại ảnh hưởng tiêu cực đến sức khỏe người tiêu dùng. Truy xuất nguồn gốc được xem như một giải pháp để giải quyết vấn nạn trên và thực sự truy xuất nguồn gốc đang trở thành vấn đề nóng được quan tâm trên toàn cầu.","tutorialDocs":[{"tutorialName":"Nhãn hàng hóa","type":"doc","dataLinks":["https://docs.google.com/document/d/1ZjXSdk8Bqb-97Kc3850fZELL0QhNTHXlsSlBpa8UY-c/edit?usp=sharing"]}]},"proofinfors":[{"_id":"6225d20d9c97503b4132e7af","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645667128_2991112.2.1.Giấychứngnhậnđăngkýnhãnhiệusố159916.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea554","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Tính hoàn thiện bao bì - Giấy chứng nhận đăng ký nhãn hiệu","nameFile":"2.2.1. Giấy chứng nhận đăng ký nhãn hiệu số 159916.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:36:13.104Z","updatedAt":"2022-03-09T02:33:30.149Z"},{"_id":"6225d20d9c97503b4132e7b0","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645674195_9567962.2.2.Giấychứngnhậnmãsốmãvạchsố893603882.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea554","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Tính hoàn thiện bao bì - Giấy chứng nhận mã số mã vạch","nameFile":"2.2.2. Giấy chứng nhận mã số mã vạch số 893603882.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:36:13.104Z","updatedAt":"2022-03-09T02:34:23.281Z"},{"_id":"6225d20d9c97503b4132e7b1","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645683349_2485612.2.3.HợpđồngcungcấpdịchvụQRcode.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea554","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Tính hoàn thiện bao bì - Hợp đồng cung cấp dịch vụ QR code.","nameFile":"2.2.3. Hợp đồng cung cấp dịch vụ QR code.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:36:13.104Z","updatedAt":"2022-03-09T02:35:18.721Z"},{"_id":"6225d20d9c97503b4132e7b2","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645690583_6919392.2.4.Giấychứngnhậnquyềnsửdụngchỉdẫnđịalý“CáiMơn”số0013GI080-CN-SKHCN.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea554","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Tính hoàn thiện bao bì - Giấy chứng nhận quyền sử dụng chỉ dẫn địa lý “Cái Mơn” số 0013/GI080-CN-SKHCN","nameFile":"2.2.4.Giấy chứng nhận quyền sử dụng chỉ dẫn địa lý “Cái Mơn” số 0013GI080-CN-SKHCN.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:36:13.104Z","updatedAt":"2022-03-09T02:36:07.818Z"},{"_id":"6225d20d9c97503b4132e7b3","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645704414_8361492.2.5.Quyếtđịnhcấpgiấychứngnhậnquyềnsửdụngchỉdẫnđịalý“CáiMơn”số138QĐ-SKHCN.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea554","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Tính hoàn thiện bao bì - Quyết định cấp giấy chứng nhận quyền sử dụng chỉ dẫn địa lý “Cái Mơn” số 138/QĐ-SKHCN","nameFile":"2.2.5.Quyết định cấp giấy chứng nhận quyền sử dụng chỉ dẫn địa lý “Cái Mơn” số 138QĐ-SKHCN.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:36:13.104Z","updatedAt":"2022-03-09T02:36:37.017Z"},{"_id":"6226d1099c97503b4132e825","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646711004998_2151272.3.Hìnhảnhmẫubaobìđínhkèm.jpg","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea554","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Bao bì đẹp, thuận tiện, sang trọng","nameFile":"2.3.Hình ảnh mẫu bao bì đính kèm.jpg","type":"IMG","__v":0,"createdAt":"2022-03-08T03:44:09.545Z","updatedAt":"2022-03-08T03:45:13.220Z"},{"_id":"6226d1099c97503b4132e826","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646711013818_4482766.1.Mẫusảnphẩm-Quảnhỏđồngđều,gainở,múinhỏ,hạtnhỏ,cơmdày..jpg","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea554","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Bao bì đẹp, thuận tiện, sang trọng","nameFile":"6.1.Mẫu sản phẩm - Quả nhỏ đồng đều, gai nở, múi nhỏ, hạt nhỏ, cơm dày..jpg","type":"IMG","__v":0,"createdAt":"2022-03-08T03:44:09.545Z","updatedAt":"2022-03-08T03:45:56.236Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea555','Nguồn gốc nguyên liệu, liên kết chuỗi')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">10</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
    </a>
     <div class="titlesinfo" style="margin-bottom:50px">  <a herf="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea555','Nguồn gốc nguyên liệu, liên kết chuỗi')">Nguồn gốc nguyên liệu, liên kết chuỗi </a>
     </div>
     <div style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
       <div class="Rectangle-Copy">
          
                      <a class="uploadButton disabled" href="#" data-toggle="modal" data-target="#step1" onclick="clicks('5e4f946cffb6912ea06ea555','Nguồn gốc nguyên liệu, liên kết chuỗi')">
                      <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;">
                      </a>
       </div>
       <div class="re-Copy" style="margin-right: 8px;">
       <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea555')">
        <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style="    margin-top: 13px;">
       </a>
       </div>
       <div class="re-Copy">
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea555","__v":0,"content":"Nguồn gốc nguyên liệu, liên kết chuỗi","requirements":"Bản sao tài liệu: Giấy xác nhận, hợp đồng, hóa đơn... chứng minh việc mua bán nguyên vật liệu, hợp đồng, thỏa thuận liên kết","type":"Additionally","supportInformation":{"explainText":"Liên kết sản xuất gắn với tiêu thụ nông sản có vai trò rất quan trọng trong phát triển nông nghiệp. Vì vậy, những năm gần đây, các địa phương trong tỉnh đang đẩy mạnh thực hiện phát triển chuỗi liên kết, tiêu thụ sản phẩm nông nghiệp, góp phần nâng cao năng suất, chất lượng, giá trị sản phẩm nông nghiệp, đồng thời tăng quy mô sản xuất hàng hóa, áp dụng các quy trình sản xuất hiện đại, nâng cao năng lực quản lý, điều hành, tổ chức sản xuất cho các doanh nghiệp (DN), hợp tác xã (HTX) liên kết và trình độ của người dân.","tutorialDocs":[{"tutorialName":"Nguồn gốc nguyên liệu, liên kết chuỗi","type":"doc","dataLinks":["https://docs.google.com/document/d/1evZ0ipZhGZgr-IRRx4asZ2NfdrY0hCVp0Jb3kiH_Dc8/edit?usp=sharing"]}]},"proofinfors":[{"_id":"6225d0759c97503b4132e7a1","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645138138_6990151.1.1.ĐơnđềnghịxácnhậnTỷlệlaođộngđịaphương,tỷlệnguồnnguyênliệuđịaphươngchosảnphẩmthamgiađánhgiá,phânhạngOCOPnăm2021.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Đơn đề nghị xác nhận tỷ lệ nguồn nguyên liệu địa phương cho sản phẩm tham gia đánh giá, phân hạng OCOP năm 2021","nameFile":"1.1.1. Đơn đề nghị xác nhận Tỷ lệ lao động địa phương, tỷ lệ nguồn nguyên liệu địa phương cho sản phẩm tham gia đánh giá, phân hạng OCOP năm 2021.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:29:25.774Z","updatedAt":"2022-03-09T01:42:11.701Z"},{"_id":"6225d0759c97503b4132e7a2","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645144911_3105731.1.2.HợpđồngmuatráisầuriêngtươicủaTHTsầuriêngBìnhAn–BếnTre+hoáđơn,phiếunhậpkho..pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Hợp đồng mua trái sầu riêng tươi của THT sầu riêng Bình An – Bến Tre + hoá đơn, phiếu nhập kho","nameFile":"1.1.2. Hợp đồng mua trái sầu riêng tươi của THT sầu riêng Bình An – Bến Tre + hoá đơn, phiếu nhập kho..pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:29:25.774Z","updatedAt":"2022-03-09T01:43:01.080Z"},{"_id":"6225d0759c97503b4132e7a3","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645149572_5404351.1.3.HợpđồngmuatráisầuriêngtươicủaTHTsầuriêngHoàThạnh–BếnTre+hoáđơn,phiếunhậpkho..pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Hợp đồng mua trái sầu riêng tươi của THT sầu riêng Hoà Thạnh – Bến Tre + hoá đơn, phiếu nhập kho","nameFile":"1.1.3. Hợp đồng mua trái sầu riêng tươi của THT sầu riêng Hoà Thạnh – Bến Tre + hoá đơn, phiếu nhập kho..pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:29:25.774Z","updatedAt":"2022-03-09T01:44:07.216Z"},{"_id":"6225d0759c97503b4132e7a4","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645157687_9325911.1.4.HợpđồngmuatráisầuriêngtươicủaTHTsầuriêngNhơnPhú–BếnTre+hoáđơn,phiếunhậpkho.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Hợp đồng mua trái sầu riêng tươi của THT sầu riêng Nhơn Phú– Bến Tre + hoá đơn, phiếu nhập kho","nameFile":"1.1.4. Hợp đồng mua trái sầu riêng tươi của THT sầu riêng Nhơn Phú– Bến Tre + hoá đơn, phiếu nhập kho.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:29:25.774Z","updatedAt":"2022-03-09T01:44:32.668Z"},{"_id":"6225d0759c97503b4132e7a5","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645164583_8114311.1.5.HợpđồngmuatráisầuriêngtươicủaTHTsầuriêngĐịnhBình–BếnTre+hoáđơn,phiếunhậpkho..pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Hợp đồng mua trái sầu riêng tươi của THT sầu riêng Định Bình – Bến Tre + hoá đơn, phiếu nhập kho","nameFile":"1.1.5. Hợp đồng mua trái sầu riêng tươi của THT sầu riêng Định Bình – Bến Tre + hoá đơn, phiếu nhập kho..pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:29:25.774Z","updatedAt":"2022-03-09T01:59:41.206Z"},{"_id":"6225d0759c97503b4132e7a6","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645171714_1000781.1.6.HợpđồngmuatráisầuriêngtươicủaHTXNN–TM-DVXuânLập.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Hợp đồng mua trái sầu riêng tươi của HTX NN – TM-DV Xuân Lập","nameFile":"1.1.6. Hợp đồng mua trái sầu riêng tươi của HTX NN – TM-DV Xuân Lập.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:29:25.774Z","updatedAt":"2022-03-09T02:00:29.078Z"},{"_id":"6225d0759c97503b4132e7a7","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645178962_7480751.1.7.HợpđồngmuathùngcartoncủaCôngtyTNHHSXTMDVTânThiênÂn..pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Hợp đồng mua thùng carton của Công ty TNHH SX TM DV Tân Thiên Ân","nameFile":"1.1.7. Hợp đồng mua thùng carton của Công ty TNHH SX TM DV Tân Thiên Ân..pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:29:25.774Z","updatedAt":"2022-03-09T02:01:11.549Z"},{"_id":"6226ce209c97503b4132e81f","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646710233030_4940001.4.Hợpđồngtàitrợtheohìnhthứchợptáccông–tư(PPP)trongkhuônkhổdựánAMDBếnTre..pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Hợp đồng tài trợ theo hình thức hợp tác công – tư (PPP) trong khuôn khổ dự án AMD Bến Tre.","nameFile":"1.4.Hợp đồng tài trợ theo hình thức hợp tác công – tư (PPP) trong khuôn khổ dự án AMD Bến Tre..pdf","type":"IMG","__v":0,"createdAt":"2022-03-08T03:31:44.100Z","updatedAt":"2022-03-09T02:03:04.877Z"},{"_id":"6226ce209c97503b4132e820","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646710255247_5716461.1.2.HợpđồngmuatráisầuriêngtươicủaTHTsầuriêngBìnhAn–BếnTre+hoáđơn,phiếunhậpkho..pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Có liên kết chuỗi chặc chẽ, có hộ nghèo tham gia liên kết","nameFile":"1.1.2. Hợp đồng mua trái sầu riêng tươi của THT sầu riêng Bình An – Bến Tre + hoá đơn, phiếu nhập kho..pdf","type":"IMG","__v":0,"createdAt":"2022-03-08T03:31:44.100Z","updatedAt":"2022-03-08T03:31:44.100Z"},{"_id":"6226ce209c97503b4132e821","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646710259822_3136791.1.3.HợpđồngmuatráisầuriêngtươicủaTHTsầuriêngHoàThạnh–BếnTre+hoáđơn,phiếunhậpkho..pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Có liên kết chuỗi chặc chẽ, có hộ nghèo tham gia liên kết","nameFile":"1.1.3. Hợp đồng mua trái sầu riêng tươi của THT sầu riêng Hoà Thạnh – Bến Tre + hoá đơn, phiếu nhập kho..pdf","type":"IMG","__v":0,"createdAt":"2022-03-08T03:31:44.100Z","updatedAt":"2022-03-08T03:31:44.100Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea557','Hệ thống quản lý chất lượng tiên tiến, kiểm soát chất lượng')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">2</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
    </a>
     <div class="titlesinfo" style="margin-bottom:50px">  <a herf="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea557','Hệ thống quản lý chất lượng tiên tiến, kiểm soát chất lượng')">Hệ thống quản lý chất lượng tiên tiến, kiểm soát chất lượng </a>
     </div>
     <div style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
       <div class="Rectangle-Copy">
          
                      <a class="uploadButton disabled" href="#" data-toggle="modal" data-target="#step1" onclick="clicks('5e4f946cffb6912ea06ea557','Hệ thống quản lý chất lượng tiên tiến, kiểm soát chất lượng')">
                      <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;">
                      </a>
       </div>
       <div class="re-Copy" style="margin-right: 8px;">
       <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea557')">
        <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style="    margin-top: 13px;">
       </a>
       </div>
       <div class="re-Copy">
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea557","__v":0,"content":"Hệ thống quản lý chất lượng tiên tiến, kiểm soát chất lượng","requirements":"Bản sao tài liệu: chứng nhận Hệ thống quản lý chất lượng tiên tiến, chứng minh hệ thống quản lý đạt tiêu chuẩn","type":"Additionally","supportInformation":{"explainText":"Hệ thống quản lý chất lượng là hệ thống quản lý để định hướng và kiểm soát một tổ chức về mặt chất lượng sản phẩm","tutorialDocs":[{"tutorialName":"Hệ thống quản lý là gì?","type":"doc","dataLinks":["https://docs.google.com/document/d/12BxjGmnW0GT720r5xKom6hiiuiiPyPPVZO68RbR_8eY/edit?usp=sharing"]}]},"proofinfors":[{"_id":"6225d2729c97503b4132e7b9","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645807276_31828010.3GiấychứngnhậnHALAL.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea557","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Chứng nhận quản lý  chất lượng tiên tiến-Chứng nhận HALAL","nameFile":"10.3 Giấy chứng nhận HALAL.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:37:54.603Z","updatedAt":"2022-03-09T02:45:20.961Z"},{"_id":"6225d2729c97503b4132e7ba","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645817721_76087210.4.GiấychứngnhậnFSSC22000.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea557","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Chứng nhận quản lý  chất lượng tiên tiến-Chứng nhận ISO","nameFile":"10.4. Giấy chứng nhận FSSC 22000.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:37:54.603Z","updatedAt":"2022-03-09T02:45:54.446Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea556','Bảo vệ môi trường')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">4</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
    </a>
     <div class="titlesinfo" style="margin-bottom:50px">  <a herf="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea556','Bảo vệ môi trường')">Bảo vệ môi trường </a>
     </div>
     <div style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
       <div class="Rectangle-Copy">
          
                      <a class="uploadButton disabled" href="#" data-toggle="modal" data-target="#step1" onclick="clicks('5e4f946cffb6912ea06ea556','Bảo vệ môi trường')">
                      <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;">
                      </a>
       </div>
       <div class="re-Copy" style="margin-right: 8px;">
       <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea556')">
        <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style="    margin-top: 13px;">
       </a>
       </div>
       <div class="re-Copy">
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea556","__v":0,"content":"Bảo vệ môi trường","requirements":"Bản sao tài liệu: Giấy xác nhận Kế hoạch bảo vệ môi trường, chứng minh cam kết, đánh giá tác động môi trường","type":"Additionally","supportInformation":{"explainText":"Giấy xác nhận Kế hoạch bảo vệ môi trường là một loại hồ sơ môi trường, là hồ sơ pháp lý thay cho lời cam kết bảo vệ môi trường của chủ Doanh nghiệp. Chủ doanh nghiệp sẽ phải phân tích, đánh giá và dự báo về mức độ gây ô nhiễm môi trường của dự án mà mình sẽ đầu tư gây ra từ giai đoạn xậy dựng cho đến khi đi vào hoạt động","tutorialDocs":[{"tutorialName":"Bảo vệ môi trường","type":"doc","dataLinks":["https://docs.google.com/document/d/1MgR-Tx-krPLy14RauQ8VJ3cKEFNmoL1rNV2HzXgLDB8/edit?usp=sharing"]}]},"proofinfors":[{"_id":"6225d5839c97503b4132e7e1","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646568298_3611361.5.1.Kếhoạchbảovệmôitrườngnăm2017.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea556","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Bảo vệ môi trường trong quá trình sản xuất: Kế hoạch bảo vệ môi trường","nameFile":"1.5.1. Kế hoạch bảo vệ môi trường năm 2017.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:50:59.815Z","updatedAt":"2022-03-09T02:31:22.873Z"},{"_id":"6225d5839c97503b4132e7e2","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646575639_4868621.5.2.Kếtquảquantrắcmôitrườngnăm2021.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea556","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Bảo vệ môi trường trong quá trình sản xuất: Kết quả quan trắc môi trường năm 2021","nameFile":"1.5.2. Kết quả quan trắc môi trường năm 2021.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:50:59.815Z","updatedAt":"2022-03-09T02:31:49.961Z"},{"_id":"6225d5839c97503b4132e7e3","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646584423_4721301.5.3.Hợpđồngvềviệcvậnchuyểnrácsinhhoạt.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea556","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Bảo vệ môi trường trong quá trình sản xuất: Hợp đồng về việc vận chuyển rác sinh hoạt","nameFile":"1.5.3. Hợp đồng về việc vận chuyển rác sinh hoạt.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:50:59.815Z","updatedAt":"2022-03-09T02:32:12.514Z"},{"_id":"6225d5ab9c97503b4132e7e7","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646670598_5500231.6.Hóađơntiềnđiện.jpg","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea556","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Sử dụng điện+ Hoá đơn tiền điện","nameFile":"1.6. Hóa đơn tiền điện.jpg","type":"IMG","__v":0,"createdAt":"2022-03-07T09:51:39.570Z","updatedAt":"2022-03-07T09:51:39.570Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea558','Kế toán')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">10</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
    </a>
     <div class="titlesinfo" style="margin-bottom:50px">  <a herf="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea558','Kế toán')">Kế toán </a>
     </div>
     <div style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
       <div class="Rectangle-Copy">
          
                      <a class="uploadButton disabled" href="#" data-toggle="modal" data-target="#step1" onclick="clicks('5e4f946cffb6912ea06ea558','Kế toán')">
                      <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;">
                      </a>
       </div>
       <div class="re-Copy" style="margin-right: 8px;">
       <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea558')">
        <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style="    margin-top: 13px;">
       </a>
       </div>
       <div class="re-Copy">
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea558","__v":0,"content":"Kế toán","requirements":"Bản sao tài liệu, minh chứng hoạt động kế toán của cơ sở","type":"Additionally","supportInformation":{"explainText":"Hoạt động kế toán nói một cách đơn giản là tập hợp ghi chép tất cả các giao dịch, tài chính phát sinh của công ty, được sắp xếp một cách có hệ thống để dễ dàng tra cứu và kiểm tra. Sự minh bạch trong tài chính là điều cơ bản mà một doanh nghiệp cần phải có. Bất kỳ doanh nghiệp lớn nhỏ nào đều có sổ sách kế toán, bởi đây là cơ sở là minh chứng cho thấy hiệu quả của hoạt động kinh doanh. Sổ sách kế toán còn là căn cứ để doanh nghiệp hoàn thành nghĩa vụ thuế với cơ quan thuế nhà nước.","tutorialDocs":[{"tutorialName":"Quy định về chứng từ kế toán theo luật Kế Toán 2015","type":"doc","dataLinks":["https://docs.google.com/document/d/1LfMwbUjk5wsTM3BeUbPIX2r2bASIVTHoUfZMQJm3wgU/edit?usp=sharing"]}]},"proofinfors":[{"_id":"6225d2f39c97503b4132e7bd","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645916889_8698423.5.1.Quyếtđịnhthànhlậpcácphòngkếtoán.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Kế toán-Thành lập các phòng ban trực thuộc Công ty TNHH XNK Trái Cây Chánh Thu-Thành lập phòng Tài chính-kế toán","nameFile":"3.5.1. Quyết định thành lập các phòng kế toán.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:40:03.130Z","updatedAt":"2022-03-09T02:38:38.301Z"},{"_id":"6225d2f39c97503b4132e7be","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645925198_8656803.5.2.Quyếtđịnhvềviệcbổnhiệmkếtoántrưởngcôngty.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Kế toán-Quyết định về việc bổ nhiệm kế toán trưởng công ty","nameFile":"3.5.2. Quyết định về việc bổ nhiệm kế toán trưởng công ty.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:40:03.130Z","updatedAt":"2022-03-09T02:39:09.901Z"},{"_id":"6225d2f39c97503b4132e7bf","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645932113_4304983.5.3.Hợpđồnglaođộngkếtoántrưởng+bằngcấp.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Kế toán-Hợp đồng lao động kế toán trưởng + bằng cấp\n3.5.4. Hợp đồng lao động kế toán thu mua + bằng cấp\n","nameFile":"3.5.3. Hợp đồng lao động kế toán trưởng + bằng cấp.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:40:03.130Z","updatedAt":"2022-03-09T02:39:41.437Z"},{"_id":"6225d2f39c97503b4132e7c0","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645945358_7177283.5.4.Hợpđồnglaođộngkếtoánthumua+bằngcấp.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Kế toán-Hợp đồng lao động kế toán thu mua","nameFile":"3.5.4. Hợp đồng lao động kế toán thu mua + bằng cấp.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:40:03.130Z","updatedAt":"2022-03-09T02:40:45.490Z"},{"_id":"6225d2f39c97503b4132e7c1","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645958244_9930063.5.5.Hợpđồnglaođộngkếtoántàichính+Bằngcấp.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Kế toán-Hợp đồng lao động kế toán tài chính ","nameFile":"3.5.5. Hợp đồng lao động kế toán tài chính + Bằng cấp.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:40:03.130Z","updatedAt":"2022-03-09T02:41:22.486Z"},{"_id":"6225d2f39c97503b4132e7c2","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646645967144_6738753.5.6.Hợpđộnglaođộngkếtoántổnghợp+Bằngcấp.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Kế toán-Hợp động lao động kế toán tổng hợp ","nameFile":"3.5.6. Hợp động lao động kế toán tổng hợp + Bằng cấp.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:40:03.130Z","updatedAt":"2022-03-09T02:42:14.509Z"},{"_id":"6225d34c9c97503b4132e7c9","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646021008_5594273.4.1.BCTCnăm2019.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Tăng trưởng sản xuất kinh doanh lớn hơn 10% về doanh thu so với năm trước liền kề-Báo cáo tài chính năm 2019\n","nameFile":"3.4.1. BCTC năm 2019.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:41:32.234Z","updatedAt":"2022-03-09T02:37:29.605Z"},{"_id":"6225d34c9c97503b4132e7ca","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646027875_1983273.4.2.BCTCnăm2020.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Tăng trưởng sản xuất kinh doanh lớn hơn 10% về doanh thu so với năm trước liền kề-Báo cáo tài chính năm 2020","nameFile":"3.4.2. BCTC năm 2020.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:41:32.234Z","updatedAt":"2022-03-09T02:37:50.935Z"},{"_id":"6226d2289c97503b4132e829","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646711305222_4118603.3.2.Giấyxácnhậnlaođộngđịaphương.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Giấy xác nhận lao động địa phương","nameFile":"3.3.2. Giấy xác nhận lao động địa phương.pdf","type":"IMG","__v":0,"createdAt":"2022-03-08T03:48:56.174Z","updatedAt":"2022-03-09T02:42:41.498Z"},{"_id":"6226d2479c97503b4132e82b","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646711353018_4712893.3.1.Danhsáchcánbộcôngnhânviênvàlaođộngtạicôngty.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Danh sách cán bộ công nhân viên và lao động tại công ty","nameFile":"3.3.1. Danh sách cán bộ công nhân viên và lao động tại công ty.pdf","type":"IMG","__v":0,"createdAt":"2022-03-08T03:49:27.809Z","updatedAt":"2022-03-08T03:49:27.809Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea559','Phát triển thị trường, hoạt động quảng bá, xúc tiến thương mại')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">10</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
    </a>
     <div class="titlesinfo" style="margin-bottom:50px">  <a herf="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea559','Phát triển thị trường, hoạt động quảng bá, xúc tiến thương mại')">Phát triển thị trường, hoạt động quảng bá, xúc tiến thương mại </a>
     </div>
     <div style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
       <div class="Rectangle-Copy">
          
                      <a class="uploadButton disabled" href="#" data-toggle="modal" data-target="#step1" onclick="clicks('5e4f946cffb6912ea06ea559','Phát triển thị trường, hoạt động quảng bá, xúc tiến thương mại')">
                      <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;">
                      </a>
       </div>
       <div class="re-Copy" style="margin-right: 8px;">
       <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea559')">
        <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style="    margin-top: 13px;">
       </a>
       </div>
       <div class="re-Copy">
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea559","__v":0,"content":"Phát triển thị trường, hoạt động quảng bá, xúc tiến thương mại","requirements":"Bản sao tài liệu: Hợp đồng, cam kết, xác nhận về phân phối sản phẩm, xuất khẩu sản phẩm, hoạt động xúc tiến thương mại...","type":"Additionally","supportInformation":{"explainText":"Xúc tiến thương mại là hoạt động thúc đẩy, tìm kiếm cơ hội mua bán hàng hoá và cung ứng dịch vụ, bao gồm hoạt động khuyến mại, quảng cáo thương mại, trưng bày, giới thiệu hàng hoá, dịch vụ và hội chợ, triển lãm thương mại","tutorialDocs":[{"tutorialName":"Phát triển thị trường, hoạt động quảng bá, xúc tiến thương mại","type":"doc","dataLinks":["https://docs.google.com/document/d/1FQuDX4U19I5XDShVqyd68eHSwWlqLcWNGUOluWEOZfc/edit?usp=sharing"]}]},"proofinfors":[{"_id":"6225d6149c97503b4132e7e9","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646731196_75283211.1.HợpđồngsầuriêngcấpđôngxuấtkhẩusangCanadasốCT-HL010920.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Hợp đồng sầu riêng cấp đông xuất khẩu sang Canada số CT-HL 010920","nameFile":"11.1. Hợp đồng sầu riêng cấp đông xuất khẩu sang Canada số CT-HL 010920.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:53:24.210Z","updatedAt":"2022-03-09T02:56:33.678Z"},{"_id":"6225d6149c97503b4132e7ea","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646739100_24166811.2.HợpđồngsầuriêngcấpđôngxuấtkhẩusangHànQuốcsốMN01-202106.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Hợp đồng sầu riêng cấp đông xuất khẩu sang Hàn Quốc số MN/01-2021/06","nameFile":"11.2. Hợp đồng sầu riêng cấp đông xuất khẩu sang Hàn Quốc số MN01-202106.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:53:24.210Z","updatedAt":"2022-03-09T02:56:46.471Z"},{"_id":"6225d6149c97503b4132e7eb","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646747361_70910611.3.HợpđồngsầuriêngcấpđôngxuấtkhẩusangMỹsốTTCT–SEA040521.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":" Hợp đồng sầu riêng cấp đông xuất khẩu sang Mỹ số TT/CT – SEA040521","nameFile":"11.3. Hợp đồng sầu riêng cấp đông xuất khẩu sang Mỹ số TTCT – SEA040521.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:53:24.210Z","updatedAt":"2022-03-09T02:57:00.561Z"},{"_id":"6225d6ad9c97503b4132e7ef","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646876339_9778054.2.1.Quyếtđịnhthànhlậpphòngkinhdoanh.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Tổ chức phân phối: Thành lập các phòng ban trực thuộc Công ty TNHH XNK Trái Cây Chánh Thu-Quyết định thành lập phòng kinh doanh","nameFile":"4.2.1. Quyết định thành lập phòng kinh doanh.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:55:57.440Z","updatedAt":"2022-03-09T02:28:26.737Z"},{"_id":"6225d6ad9c97503b4132e7f0","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646883091_7514444.2.2.Quyếtđịnhbổnhiệmtrưởngphòngkinhdoanhtổnghợp.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Tổ chức phân phối-Quyết định bổ nhiệm trưởng phòng kinh doanh tổng hợp","nameFile":"4.2.2. Quyết định bổ nhiệm trưởng phòng kinh doanh tổng hợp.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:55:57.441Z","updatedAt":"2022-03-09T02:29:01.406Z"},{"_id":"6225d6ad9c97503b4132e7f1","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646889560_7417704.2.3.Hợpđồnglaođộngtrưởngphòngkinhdoanh.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Tổ chức phân phối: Hợp đồng lao động  trưởng phòng kinh doanh","nameFile":"4.2.3. Hợp đồng lao động  trưởng phòng kinh doanh.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:55:57.441Z","updatedAt":"2022-03-09T02:29:35.638Z"},{"_id":"6225d7159c97503b4132e7f5","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646981206_5265274.3.2.QuảngbátrênWebsitecủaCôngty.jpg","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Quảng bá sản phẩm; có nhiều hoạt động quảng bá, có website","nameFile":"4.3.2.Quảng bá trên Website của Công ty.jpg","type":"IMG","__v":0,"createdAt":"2022-03-07T09:57:41.588Z","updatedAt":"2022-03-07T09:57:41.588Z"},{"_id":"6225d7159c97503b4132e7f6","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646993013_3546222.jpg","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Quảng bá sản phẩm; có nhiều hoạt động quảng bá, có website","nameFile":"2.jpg","type":"IMG","__v":0,"createdAt":"2022-03-07T09:57:41.589Z","updatedAt":"2022-03-07T09:57:41.589Z"},{"_id":"6225d7159c97503b4132e7f7","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646647001377_33967811.jpg","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Quảng bá sản phẩm; có nhiều hoạt động quảng bá, có website","nameFile":"11.jpg","type":"IMG","__v":0,"createdAt":"2022-03-07T09:57:41.589Z","updatedAt":"2022-03-07T09:57:41.589Z"},{"_id":"6225d7159c97503b4132e7f8","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646647009445_96002817.jpg","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Hoạt động quảng bá phát triển sản phẩm","nameFile":"17.jpg","type":"IMG","__v":0,"createdAt":"2022-03-07T09:57:41.589Z","updatedAt":"2022-03-09T02:30:22.652Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea55a','Câu chuyện về sản phẩm')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">4</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
    </a>
     <div class="titlesinfo" style="margin-bottom:50px">  <a herf="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea55a','Câu chuyện về sản phẩm')">Câu chuyện về sản phẩm </a>
     </div>
     <div style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
       <div class="Rectangle-Copy">
          
                      <a class="uploadButton disabled" href="#" data-toggle="modal" data-target="#step1" onclick="clicks('5e4f946cffb6912ea06ea55a','Câu chuyện về sản phẩm')">
                      <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;">
                      </a>
       </div>
       <div class="re-Copy" style="margin-right: 8px;">
       <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea55a')">
        <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style="    margin-top: 13px;">
       </a>
       </div>
       <div class="re-Copy">
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea55a","__v":0,"content":"Câu chuyện về sản phẩm","requirements":"Bản sao tờ rơi, hình ảnh, phim, ghi âm... minh chứng về câu chuyện của sản phẩm","type":"Additionally","supportInformation":{"explainText":"Câu chuyện sản phẩm là thông điệp mà chủ thể truyền tải phần “GIÁ TRỊ CỐT LÕI” của sản phẩm đến với khách hàng.","tutorialDocs":[{"tutorialName":"Câu chuyện về sản phẩm","type":"doc","dataLinks":["https://docs.google.com/document/d/1gQPvZEI4Grae31K_LXc9w8nKKPxYbDep4EqOxvTw93o/edit?usp=sharing"]}]},"proofinfors":[{"_id":"6225d39c9c97503b4132e7cd","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646158736_3869452.1.Câuchuyệnsảnphẩm-Nguồngốcýtưởngsảnphẩmdựatrênthếmạnhcủađịaphương.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea55a","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Câu chuyện sản phẩm - Nguồn gốc ý tưởng sản phẩm dựa trên thế mạnh của địa phương","nameFile":"2.1.Câu chuyện sản phẩm - Nguồn gốc ý tưởng sản phẩm dựa trên thế mạnh của địa phương.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:42:52.659Z","updatedAt":"2022-03-07T09:42:52.659Z"},{"_id":"6225d4039c97503b4132e7cf","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646205262_4546085.1.1.Cócâuchuyệnđượctưliệuhóatrêntờrơi..pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea55a","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Câu chuyện sản phẩm được tư liệu hóa","nameFile":"5.1.1. Có câu chuyện được tư liệu hóa trên tờ rơi..pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:44:35.357Z","updatedAt":"2022-03-07T09:44:35.357Z"},{"_id":"6225d4219c97503b4132e7d1","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646295522_4876155.2.1Cócâuchuyệnriêngthểhiệnbảnsắccủađịaphương.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea55a","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Có câu chuyện riêng thể hiện bản sắc của địa phương","nameFile":"5.2.1 Có câu chuyện riêng thể hiện bản sắc của địa phương.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:45:05.279Z","updatedAt":"2022-03-07T09:45:05.279Z"},{"_id":"6225d4549c97503b4132e7d3","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646322765_2014235.3.1.Câuchuyệnsảnphẩmcócấutrúctheodòngchảythờigianvàkếthợpvớiviệcmôtảquátrìnhsảnxuấtsảnphẩm.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea55a","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Câu chuyện sản phẩm có cấu trúc theo dòng chảy thời gian và kết hợp với việc mô tả quá trình sản xuất sản phẩm","nameFile":"5.3.1. Câu chuyện sản phẩm có cấu trúc theo dòng chảy thời gian và kết hợp với việc mô tả quá trình sản xuất sản phẩm.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T09:45:56.800Z","updatedAt":"2022-03-07T09:45:56.800Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea55b','Kế hoạch kiểm soát chất lượng, ghi hồ sơ lô sản xuất...')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">2</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
    </a>
     <div class="titlesinfo" style="margin-bottom:50px">  <a herf="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea55b','Kế hoạch kiểm soát chất lượng, ghi hồ sơ lô sản xuất...')">Kế hoạch kiểm soát chất lượng, ghi hồ sơ lô sản xuất... </a>
     </div>
     <div style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
       <div class="Rectangle-Copy">
          
                      <a class="uploadButton disabled" href="#" data-toggle="modal" data-target="#step1" onclick="clicks('5e4f946cffb6912ea06ea55b','Kế hoạch kiểm soát chất lượng, ghi hồ sơ lô sản xuất...')">
                      <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;">
                      </a>
       </div>
       <div class="re-Copy" style="margin-right: 8px;">
       <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea55b')">
        <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style="    margin-top: 13px;">
       </a>
       </div>
       <div class="re-Copy">
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea55b","__v":0,"content":"Kế hoạch kiểm soát chất lượng, ghi hồ sơ lô sản xuất...","requirements":"Bản sao tài liệu, minh chứng về hoạt động kiểm soát chất lượng sản phẩm theo từng lô sản xuất","type":"Additionally","supportInformation":{"explainText":"Kế hoạch kiểm soát chất lượng là biện pháp góp phần nâng cao chất lượng của hàng hóa và dịch vụ. Hồ sơ lô là tất cả tài liệu có liên quan đến việc sản xuất một lô bán thành phẩm hoặc thành phẩm.","tutorialDocs":[{"tutorialName":"Kế hoạch kiểm soát chất lượng, ghi hồ sơ lô sản xuất...","type":"doc","dataLinks":["https://docs.google.com/document/d/1vdK9kxI70L3jc1ZYjt-AA8_YjAySeR2WPVZ_8U-r53w/edit?usp=sharing"]}]},"proofinfors":[{"_id":"6225c6299c97503b4132e791","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646642670763_47830510.1.Kếhoạchkiểmsoátchấtlượng.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea55b","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Kế hoạch kiểm soát chất lượng quá trình sản xuất/xử lý sầu riêng cấp đông","nameFile":"10.1. Kế hoạch kiểm soát chất lượng.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T08:45:29.777Z","updatedAt":"2022-03-09T02:24:37.689Z"},{"_id":"6225c6299c97503b4132e792","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646642685604_53250910.2.Nhậtkýghichép.pdf","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea55b","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Nhật ký hồ sơ sản xuất","nameFile":"10.2. Nhật ký ghi chép.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T08:45:29.777Z","updatedAt":"2022-03-09T02:25:19.421Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea55c','Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế...')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">3</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
    </a>
     <div class="titlesinfo" style="margin-bottom:50px">  <a herf="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea55c','Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế...')">Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế... </a>
     </div>
     <div style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
       <div class="Rectangle-Copy">
          
                      <a class="uploadButton disabled" href="#" data-toggle="modal" data-target="#step1" onclick="clicks('5e4f946cffb6912ea06ea55c','Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế...')">
                      <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;">
                      </a>
       </div>
       <div class="re-Copy" style="margin-right: 8px;">
       <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea55c')">
        <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style="    margin-top: 13px;">
       </a>
       </div>
       <div class="re-Copy">
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea55c","__v":0,"content":"Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế...","requirements":"Bản sao tài liệu, minh chứng về các thành tích, giải thưởng, bình chọn...","type":"Additionally","supportInformation":{"explainText":"Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế... giúp thể hiện sự công nhận của các tổ chức với những đóng góp của doanh nghiệp, cá nhân sản xuất kinh doanh trong hoạt động sản xuất, quảng bá sản phẩm. ","tutorialDocs":[{"tutorialName":"Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế..","type":"doc","dataLinks":["https://docs.google.com/document/d/1iS_lzNCzOSYIZKJ5cADM_CUi_I9LDHBJtre0Ho_Y0Oo/edit?usp=sharing"]}]},"proofinfors":[{"_id":"6225d49b9c97503b4132e7d5","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646392008_641259z2434304353864_a1b09a32c1d21c5e4f9503ae18ac347e.jpg","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea55c","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Các giải thưởng","nameFile":"z2434304353864_a1b09a32c1d21c5e4f9503ae18ac347e.jpg","type":"IMG","__v":0,"createdAt":"2022-03-07T09:47:07.787Z","updatedAt":"2022-03-07T09:47:07.787Z"},{"_id":"6225d49b9c97503b4132e7d6","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646397645_150918k3.jpg","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea55c","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Các giải thưởng","nameFile":"k3.jpg","type":"IMG","__v":0,"createdAt":"2022-03-07T09:47:07.787Z","updatedAt":"2022-03-07T09:47:07.787Z"},{"_id":"6225d49b9c97503b4132e7d7","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646646406176_872589z2434304339919_83512be3f87c08cc0e018eafb4b523c8.jpg","note":null,"productsInfo":"622577879c97503b4132e763","status":"ACTIVE","memberId":"618de2ab673abd092c40bb01","requirementId":"5e4f946cffb6912ea06ea55c","memberName":"Công ty TNHH XNK Trái Cây Chánh Thu","descriptionImg":"Các giải thưởng","nameFile":"z2434304339919_83512be3f87c08cc0e018eafb4b523c8.jpg","type":"IMG","__v":0,"createdAt":"2022-03-07T09:47:07.787Z","updatedAt":"2022-03-07T09:47:07.787Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>
</div>
                  </div>

                </div>
              </div>
            </div>
            <!-- ************************* PANEL TỰ CHẤM ĐIỂM ************************* -->
            <div role="tabpanel" class="tab-pane fade" id="buzz">
              <div class="container-fluid">
                <div class="row" style="margin-top: 26px;">
                  <div class="col-lg-8">
                    <div class="col-md-12" style="text-align: left;border-bottom: 1px solid #dee2e6;padding-bottom: 24px;    background-color: white;text-align: center;">
                      <span id="product" class="titileoCop">Trái sầu riêng cấp đông</span><br>
                      <label class="entili" id="entity">Công ty TNHH XNK Trái Cây Chánh Thu</label><br>
                      <span class="textOcop" id="setProduct"><span class="productTi">Bộ sản phẩm</span>: Rau, củ, quả, hạt tươi</span><br>

                      <span class="textOcop" id="productcode"><span class="productTi">Mã sản phẩm</span>: 83-832-28882-2-2022</span>
                      <br>

                      <span class="textOcop" id="adressentity"><span class="productTi">Địa chỉ</span>: Bến Tre</span>
                      <div class="text-center" id="noteText" style="color:#039252!important;font-size:16px"> <span>Đã chấm</span> <br><i>lần chấm thứ 1</i></div>
                    </div>
                    <div id="question" style="background-color: white;padding: 26px;">
                      <div class="row" id="A">
                        <div class="col-md-12" style="margin-bottom: 24px;">
                          <span class="titileoCop">PHẦN A: SẢN PHẨM VÀ SỨC MẠNH CỘNG ĐỒNG (35
                            điểm)</span>
                        </div>
                        <br>
                        <div class="col-md-12" id="A-content" style="padding: 0;margin: 0;">
                                    <form class="form-material" id="A_Section0">
                                            <div>
                                                    <label for="productName">
                                                            <div style="display:flex">
                                                                    <div class="Rectangle"></div>
                                                                    <span class="SubHeading">TỔ CHỨC SẢN XUẤT </span>
                                                            </div>
                                                    </label>
                                                    
                                                    
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>1.1. Nguồn nguyên liệu  <a href="javascript:showHelp('1.1. Ngu%E1%BB%93n nguy%C3%AAn li%E1%BB%87u')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('1.detail[0]','5f28d51b7c7f9046bc5e1292')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote1.detail[0]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e8cd','5e4f946cffb6912ea06ea555-*','1.detail[0]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question0" id="A_Section0_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e1293" data-answer-text="Sử dụng nguyên liệu có nguồn gốc trong tỉnh dưới 50%" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question0" id="lbl_A_Section0_Question0_Answer0" for="A_Section0_Question0_Answer0"> Sử dụng nguyên liệu có nguồn gốc trong tỉnh dưới 50%</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question0" id="A_Section0_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e1294" data-answer-text="Sử dụng nguyên liệu có nguồn gốc trong tỉnh từ 50% đến dưới 75%" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question0" id="lbl_A_Section0_Question0_Answer1" for="A_Section0_Question0_Answer1"> Sử dụng nguyên liệu có nguồn gốc trong tỉnh từ 50% đến dưới 75%</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="A_Section0_Question0" id="A_Section0_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e1295" data-answer-text="Sử dụng nguyên liệu có nguồn gốc trong tỉnh từ 75% đến 100%" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_A_Section0_Question0" id="lbl_A_Section0_Question0_Answer2" for="A_Section0_Question0_Answer2"> Sử dụng nguyên liệu có nguồn gốc trong tỉnh từ 75% đến 100%</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>1.2. Gia tăng giá trị  <a href="javascript:showHelp('1.2. Gia t%C4%83ng gi%C3%A1 tr%E1%BB%8B')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('1.detail[1]','5f28d51b7c7f9046bc5e1296')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote1.detail[1]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e8cd','5e4f946cffb6912ea06ea552-*5e4f946cffb6912ea06ea55c-*','1.detail[1]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-1">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question1" id="A_Section0_Question1_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e1297" data-answer-text="Phân loại" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question1" id="lbl_A_Section0_Question1_Answer0" for="A_Section0_Question1_Answer0"> Phân loại</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question1" id="A_Section0_Question1_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e1298" data-answer-text="Sơ chế (rửa, làm sạch,…)" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question1" id="lbl_A_Section0_Question1_Answer1" for="A_Section0_Question1_Answer1"> Sơ chế (rửa, làm sạch,…)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question1" id="A_Section0_Question1_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e1299" data-answer-text="Ứng dụng công nghệ cao trong trồng, sơ chế." disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question1" id="lbl_A_Section0_Question1_Answer2" for="A_Section0_Question1_Answer2"> Ứng dụng công nghệ cao trong trồng, sơ chế.</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="A_Section0_Question1" id="A_Section0_Question1_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e129a" data-answer-text="Ứng dụng công nghệ cao trong trồng, sơ chế, bảo quản (nâng cao chất lượng sản phẩm/ giữ chất lượng ổn định trong quá trình bảo quản…)" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_A_Section0_Question1" id="lbl_A_Section0_Question1_Answer3" for="A_Section0_Question1_Answer3">
Ứng dụng công nghệ cao trong trồng, sơ chế, bảo quản (nâng cao chất 
lượng sản phẩm/ giữ chất lượng ổn định trong quá trình bảo quản…)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>1.3. Năng lực sản xuất đáp ứng yêu cầu phân phối  <a href="javascript:showHelp('1.3. N%C4%83ng l%E1%BB%B1c s%E1%BA%A3n xu%E1%BA%A5t %C4%91%C3%A1p %E1%BB%A9ng y%C3%AAu c%E1%BA%A7u ph%C3%A2n ph%E1%BB%91i')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('1.detail[2]','5f28d51b7c7f9046bc5e129b')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote1.detail[2]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e8cd','5e4f946cffb6912ea06ea54e-*','1.detail[2]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span>(Khả năng sản xuất đáp ứng nhu cầu về số lượng/quy mô của thị trường)</span></i></div>
                                    <div id="AQuestion-2">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question2" id="A_Section0_Question2_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e129c" data-answer-text="Có năng lực, quy mô sản xuất mức độ nhỏ" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question2" id="lbl_A_Section0_Question2_Answer0" for="A_Section0_Question2_Answer0"> Có năng lực, quy mô sản xuất mức độ nhỏ</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question2" id="A_Section0_Question2_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e129d" data-answer-text="Có năng lực, quy mô sản xuất trung bình" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question2" id="lbl_A_Section0_Question2_Answer1" for="A_Section0_Question2_Answer1"> Có năng lực, quy mô sản xuất trung bình</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question2" id="A_Section0_Question2_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e129e" data-answer-text="Có năng lực, quy mô sản xuất lớn" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question2" id="lbl_A_Section0_Question2_Answer2" for="A_Section0_Question2_Answer2"> Có năng lực, quy mô sản xuất lớn</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="A_Section0_Question2" id="A_Section0_Question2_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="4" data-answer-id="5f28d51b7c7f9046bc5e129f" data-answer-text="Có năng lực, quy mô sản xuất lớn, có thể đáp ứng thị trường xuất khẩu" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_A_Section0_Question2" id="lbl_A_Section0_Question2_Answer3" for="A_Section0_Question2_Answer3"> Có năng lực, quy mô sản xuất lớn, có thể đáp ứng thị trường xuất khẩu</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">4 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>1.4. Liên kết sản xuất  <a href="javascript:showHelp('1.4. Li%C3%AAn k%E1%BA%BFt s%E1%BA%A3n xu%E1%BA%A5t')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('1.detail[3]','5f28d51b7c7f9046bc5e12a0')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote1.detail[3]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e8cd','5e4f946cffb6912ea06ea554-*','1.detail[3]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-3">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question3" id="A_Section0_Question3_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e12a1" data-answer-text="Không có liên kết hoặc có nhưng không rõ ràng" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question3" id="lbl_A_Section0_Question3_Answer0" for="A_Section0_Question3_Answer0"> Không có liên kết hoặc có nhưng không rõ ràng</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question3" id="A_Section0_Question3_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12a2" data-answer-text="Có liên kết, chặt chẽ (phạm vi trong tỉnh)" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question3" id="lbl_A_Section0_Question3_Answer1" for="A_Section0_Question3_Answer1"> Có liên kết, chặt chẽ (phạm vi trong tỉnh)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="A_Section0_Question3" id="A_Section0_Question3_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e12a3" data-answer-text="Liên kết chuỗi chặt chẽ (phạm vi trong tỉnh), quy mô lớn hoặc có hộ nghèo (trong tỉnh) tham gia liên kết" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_A_Section0_Question3" id="lbl_A_Section0_Question3_Answer2" for="A_Section0_Question3_Answer2"> Liên kết chuỗi chặt chẽ (phạm vi trong tỉnh), quy mô lớn hoặc có hộ nghèo (trong tỉnh) tham gia liên kết</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>1.5. Bảo vệ môi trường trong quá trình sản xuất  <a href="javascript:showHelp('1.5. B%E1%BA%A3o v%E1%BB%87 m%C3%B4i tr%C6%B0%E1%BB%9Dng trong qu%C3%A1 tr%C3%ACnh s%E1%BA%A3n xu%E1%BA%A5t')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('1.detail[4]','5f28d51b7c7f9046bc5e12a4')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote1.detail[4]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e8cd','5e4f946cffb6912ea06ea557-*','1.detail[4]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-4">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question4" id="A_Section0_Question4_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12a5" data-answer-text="Có quan tâm (bằng hoạt động cụ thể) đến các tác động môi trường trong quá trình sản xuất" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question4" id="lbl_A_Section0_Question4_Answer0" for="A_Section0_Question4_Answer0"> Có quan tâm (bằng hoạt động cụ thể) đến các tác động môi trường trong quá trình sản xuất</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question4" id="A_Section0_Question4_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e12a6" data-answer-text="Có đánh giá tác động môi trường/kế hoạch bảo vệ môi trường (hoặc tương đương) nhưng chưa theo quy định hiện hành" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question4" id="lbl_A_Section0_Question4_Answer1" for="A_Section0_Question4_Answer1"> Có đánh giá tác động môi trường/kế hoạch bảo vệ môi trường (hoặc tương đương) nhưng chưa theo quy định hiện hành</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question4" id="A_Section0_Question4_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e12a7" data-answer-text="Có đánh giá tác động môi trường/kế hoạch bảo vệ môi trường (hoặc tương đương) theo quy định hiện hành" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question4" id="lbl_A_Section0_Question4_Answer2" for="A_Section0_Question4_Answer2"> Có đánh giá tác động môi trường/kế hoạch bảo vệ môi trường (hoặc tương đương) theo quy định hiện hành</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="A_Section0_Question4" id="A_Section0_Question4_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="4" data-answer-id="5f28d51b7c7f9046bc5e12a8" data-answer-text="Có đánh giá tác động môi trường/kế hoạch bảo vệ môi trường (hoặc tương đương) theo quy định hiện hành; có minh chứng triển khai/áp dụng" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_A_Section0_Question4" id="lbl_A_Section0_Question4_Answer3" for="A_Section0_Question4_Answer3">
Có đánh giá tác động môi trường/kế hoạch bảo vệ môi trường (hoặc tương 
đương) theo quy định hiện hành; có minh chứng triển khai/áp dụng</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">4 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question4" id="A_Section0_Question4_Answer4" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d51b7c7f9046bc5e12a9" data-answer-text="Có đánh giá tác động môi trường/kế hoạch bảo vệ môi trường (hoặc tương đương) theo quy định hiện hành; có minh chứng triển khai/áp dụng; có sử dụng/tái chế phụ phẩm, chất thải trong quá trình sản xuất" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question4" id="lbl_A_Section0_Question4_Answer4" for="A_Section0_Question4_Answer4">
Có đánh giá tác động môi trường/kế hoạch bảo vệ môi trường (hoặc tương 
đương) theo quy định hiện hành; có minh chứng triển khai/áp dụng; có sử 
dụng/tái chế phụ phẩm, chất thải trong quá trình sản xuất</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">5 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>1.6. Sử dụng năng lượng, công nghệ thân thiện bền vững trong SX  <a href="javascript:showHelp('1.6. S%E1%BB%AD d%E1%BB%A5ng n%C4%83ng l%C6%B0%E1%BB%A3ng, c%C3%B4ng ngh%E1%BB%87 th%C3%A2n thi%E1%BB%87n b%E1%BB%81n v%E1%BB%AFng trong SX')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('1.detail[5]','5f28d51b7c7f9046bc5e12aa')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote1.detail[5]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e8cd','5e4f946cffb6912ea06ea550-*','1.detail[5]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-5">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question5" id="A_Section0_Question5_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e12ab" data-answer-text="Không sử dụng năng lượng hiện đại, bền vững, đáng tin cậy (sạch, tái tạo,…)/công nghệ thân thiện môi trường" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question5" id="lbl_A_Section0_Question5_Answer0" for="A_Section0_Question5_Answer0"> Không sử dụng năng lượng hiện đại, bền vững, đáng tin cậy (sạch, tái tạo,…)/công nghệ thân thiện môi trường</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="A_Section0_Question5" id="A_Section0_Question5_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12ac" data-answer-text="Có sử dụng năng lượng hiện đại, bền vững, đáng tin cậy (sạch, tái tạo,…)/công nghệ thân thiện môi trường" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_A_Section0_Question5" id="lbl_A_Section0_Question5_Answer1" for="A_Section0_Question5_Answer1"> Có sử dụng năng lượng hiện đại, bền vững, đáng tin cậy (sạch, tái tạo,…)/công nghệ thân thiện môi trường</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                                            </div>
                                    </form>
                                    
                                    <form class="form-material" id="A_Section1">
                                            <div>
                                                    <label for="productName">
                                                            <div style="display:flex">
                                                                    <div class="Rectangle"></div>
                                                                    <span class="SubHeading"> PHÁT TRIỂN SẢN PHẨM </span>
                                                            </div>
                                                    </label>
                                                    
                                                    
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>2.1. Nguồn gốc ý tưởng sản phẩm  <a href="javascript:showHelp('2.1. Ngu%E1%BB%93n g%E1%BB%91c %C3%BD t%C6%B0%E1%BB%9Fng s%E1%BA%A3n ph%E1%BA%A9m')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('2.detail[0]','5f28d51b7c7f9046bc5e12ae')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote2.detail[0]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e8e9','5e4f946cffb6912ea06ea55a-*','2.detail[0]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question0" id="A_Section1_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e12af" data-answer-text="Phát triển dựa trên sản phẩm của nhà sản xuất khác, chỉ thay đổi nhãn hiệu" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question0" id="lbl_A_Section1_Question0_Answer0" for="A_Section1_Question0_Answer0"> Phát triển dựa trên sản phẩm của nhà sản xuất khác, chỉ thay đổi nhãn hiệu</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question0" id="A_Section1_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12b0" data-answer-text="Phát triển dựa trên sản phẩm của nhà sản xuất khác, có cải tiến về chất lượng, bao bì." disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question0" id="lbl_A_Section1_Question0_Answer1" for="A_Section1_Question0_Answer1"> Phát triển dựa trên sản phẩm của nhà sản xuất khác, có cải tiến về chất lượng, bao bì.</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question0" id="A_Section1_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e12b1" data-answer-text="Phát triển dựa trên ý tưởng của mình, sản phẩm chưa có trên thị trường" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question0" id="lbl_A_Section1_Question0_Answer2" for="A_Section1_Question0_Answer2"> Phát triển dựa trên ý tưởng của mình, sản phẩm chưa có trên thị trường</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="A_Section1_Question0" id="A_Section1_Question0_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e12b2" data-answer-text="Phát triển ý tưởng của mình gắn với bảo tồn sản phẩm truyền thông/đặc sản/thế mạnh của địa phương" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_A_Section1_Question0" id="lbl_A_Section1_Question0_Answer3" for="A_Section1_Question0_Answer3"> Phát triển ý tưởng của mình gắn với bảo tồn sản phẩm truyền thông/đặc sản/thế mạnh của địa phương</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>2.2. Tính hoàn thiện của bao bì  <a href="javascript:showHelp('2.2. T%C3%ADnh ho%C3%A0n thi%E1%BB%87n c%E1%BB%A7a bao b%C3%AC')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('2.detail[1]','5f28d51b7c7f9046bc5e12b3')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote2.detail[1]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e8e9','5e4f946cffb6912ea06ea54f-*5e4f946cffb6912ea06ea54f-*5e4f946cffb6912ea06ea554-*','2.detail[1]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-1">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question1" id="A_Section1_Question1_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e12b4" data-answer-text="Bao bì đơn giản, thông tin ghi nhãn chưa đầy đủ" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question1" id="lbl_A_Section1_Question1_Answer0" for="A_Section1_Question1_Answer0"> Bao bì đơn giản, thông tin ghi nhãn chưa đầy đủ</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question1" id="A_Section1_Question1_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12b5" data-answer-text="Bao bì đơn giản, thông tin ghi nhãn đầy đủ" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question1" id="lbl_A_Section1_Question1_Answer1" for="A_Section1_Question1_Answer1"> Bao bì đơn giản, thông tin ghi nhãn đầy đủ</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question1" id="A_Section1_Question1_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e12b6" data-answer-text="Bao bì phù hợp, thông tin ghi nhãn đầy đủ, có truy xuất nguồn gốc" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question1" id="lbl_A_Section1_Question1_Answer2" for="A_Section1_Question1_Answer2"> Bao bì phù hợp, thông tin ghi nhãn đầy đủ, có truy xuất nguồn gốc</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="A_Section1_Question1" id="A_Section1_Question1_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e12b7" data-answer-text="Bao bì phù hợp, thông tin ghi nhãn đầy đủ, có truy xuất nguồn gốc, có chứng nhận bảo hộ nhãn hiệu/kiểu dáng công nghiệp" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_A_Section1_Question1" id="lbl_A_Section1_Question1_Answer3" for="A_Section1_Question1_Answer3"> Bao bì phù hợp, thông tin ghi nhãn đầy đủ, có truy xuất nguồn gốc, có chứng nhận bảo hộ nhãn hiệu/kiểu dáng công nghiệp</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>2.3. Phong cách, hình thức của bao bì  <a href="javascript:showHelp('2.3. Phong c%C3%A1ch, h%C3%ACnh th%E1%BB%A9c c%E1%BB%A7a bao b%C3%AC')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('2.detail[2]','5f28d51b7c7f9046bc5e12b8')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote2.detail[2]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e8e9','false','2.detail[2]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-2">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question2" id="A_Section1_Question2_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e12b9" data-answer-text="Không thuận tiện, không đẹp" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question2" id="lbl_A_Section1_Question2_Answer0" for="A_Section1_Question2_Answer0"> Không thuận tiện, không đẹp</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question2" id="A_Section1_Question2_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12ba" data-answer-text="Thuận tiện hoặc đẹp" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question2" id="lbl_A_Section1_Question2_Answer1" for="A_Section1_Question2_Answer1"> Thuận tiện hoặc đẹp</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="A_Section1_Question2" id="A_Section1_Question2_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e12bb" data-answer-text="Thuận tiện, đẹp, sang trọng" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_A_Section1_Question2" id="lbl_A_Section1_Question2_Answer2" for="A_Section1_Question2_Answer2"> Thuận tiện, đẹp, sang trọng</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                                            </div>
                                    </form>
                                    
                                    <form class="form-material" id="A_Section2">
                                            <div>
                                                    <label for="productName">
                                                            <div style="display:flex">
                                                                    <div class="Rectangle"></div>
                                                                    <span class="SubHeading"> SỨC MẠNH CỘNG ĐỒNG </span>
                                                            </div>
                                                    </label>
                                                    
                                                    
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>3.1. Loại hình tổ chức  <a href="javascript:showHelp('3.1. Lo%E1%BA%A1i h%C3%ACnh t%E1%BB%95 ch%E1%BB%A9c')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('3.detail[0]','5f28d51b7c7f9046bc5e12bd')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote3.detail[0]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e8f8','5e4f946cffb6912ea06ea54e-*','3.detail[0]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section2_Question0" id="A_Section2_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12be" data-answer-text="Hộ gia đình có đăng ký kinh doanh, tổ hợp tác (có giấy đăng ký kinh doanh của tổ trưởng), Công ty trách nhiệm hữu hạn (TNHH) 1 thành viên, doanh nghiệp tư nhân (DNTN)" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question0" id="lbl_A_Section2_Question0_Answer0" for="A_Section2_Question0_Answer0">
Hộ gia đình có đăng ký kinh doanh, tổ hợp tác (có giấy đăng ký kinh 
doanh của tổ trưởng), Công ty trách nhiệm hữu hạn (TNHH) 1 thành viên, 
doanh nghiệp tư nhân (DNTN)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section2_Question0" id="A_Section2_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e12bf" data-answer-text="Công ty TNHH hai thành viên trở lên, công ty cổ phần có vốn góp của cộng đồng địa phương &lt; 51%" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question0" id="lbl_A_Section2_Question0_Answer1" for="A_Section2_Question0_Answer1"> Công ty TNHH hai thành viên trở lên, công ty cổ phần có vốn góp của cộng đồng địa phương &lt; 51%</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="A_Section2_Question0" id="A_Section2_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e12c0" data-answer-text="HTX tổ chức, hoạt động theo Luật HTX 2012 hoặc công ty cổ phần có vốn góp của cộng đồng địa phương ≥ 51%" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_A_Section2_Question0" id="lbl_A_Section2_Question0_Answer2" for="A_Section2_Question0_Answer2"> HTX tổ chức, hoạt động theo Luật HTX 2012 hoặc công ty cổ phần có vốn góp của cộng đồng địa phương ≥ 51%</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>3.2. Sự tham gia của cộng đồng trong quản lý, điều hành  <a href="javascript:showHelp('3.2. S%E1%BB%B1 tham gia c%E1%BB%A7a c%E1%BB%99ng %C4%91%E1%BB%93ng trong qu%E1%BA%A3n l%C3%BD, %C4%91i%E1%BB%81u h%C3%A0nh')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('3.detail[1]','5f28d51b7c7f9046bc5e12c1')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote3.detail[1]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e8f8','5e4f946cffb6912ea06ea559-*','3.detail[1]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span>Lựa chọn một trong hai trường hợp sau:</span></i></div>
                                    <div id="AQuestion-1">
                                            
                                            <div class="ml-3">
                                                    <label>a. Trường hợp 1: Công ty TNHH 2 thành viên trở lên, công ty cổ phần, HTX, Tổ hợp tác 
                                                    </label>
                                                            
                                            <div style="display: flex;">
                                                    <input type="checkbox" class="radio" name="A_Section2_Question1" id="A_Section2_Question1_Case0_Answer0" style="margin-top: 4px;
                                                            margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12c3" data-answer-text="Có &lt; 50% số thành viên quản trị cao cấp (Ban giám đốc, Hội đồng quản trị - HĐQT, Hội đồng thành viên - HĐTV) tham gia quản lý là người trong tỉnh hoặc tổ hợp tác có số thành viên là người trong tỉnh &lt; 50% số thành viên của tổ hợp tác" disabled="disabled">
                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question1" id="lbl_A_Section2_Question1_Case0_Answer0" for="A_Section2_Question1_Case0_Answer0">
Có &lt; 50% số thành viên quản trị cao cấp (Ban giám đốc, Hội đồng quản
trị - HĐQT, Hội đồng thành viên - HĐTV) tham gia quản lý là người trong
tỉnh hoặc tổ hợp tác có số thành viên là người trong tỉnh &lt; 50% số 
thành viên của tổ hợp tác</label><br>
                                                    <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                            </div>
                                            <div style="display: flex;">
                                                    <input type="checkbox" checked="checked" class="radio" name="A_Section2_Question1" id="A_Section2_Question1_Case0_Answer1" style="margin-top: 4px;
                                                            margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e12c4" data-answer-text="Có ≥ 50% số thành viên quản trị cao cấp (Ban giám đốc, HĐQT, HĐTV) tham gia quản lý là người trong tỉnh hoặc &lt; 50% số thành viên quản trị cao cấp cao cấp là người trong tỉnh nhưng có thành viên là phụ nữ địa phương" disabled="disabled">
                                                            <label style="width: 80%;color:#049252;" name="lbl_A_Section2_Question1" id="lbl_A_Section2_Question1_Case0_Answer1" for="A_Section2_Question1_Case0_Answer1">
Có ≥ 50% số thành viên quản trị cao cấp (Ban giám đốc, HĐQT, HĐTV) tham
gia quản lý là người trong tỉnh hoặc &lt; 50% số thành viên quản trị 
cao cấp cao cấp là người trong tỉnh nhưng có thành viên là phụ nữ địa 
phương</label><br>
                                                    <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                            </div>
                                             </div>
                                            <div class="ml-3">
                                                    <label>b. Trường hợp 2: Công ty TNHH 1 thành viên, doanh nghiệp tư nhân, hộ gia đình 
                                                    </label>
                                                            
                                            <div style="display: flex;">
                                                    <input type="checkbox" class="radio" name="A_Section2_Question1" id="A_Section2_Question1_Case1_Answer0" style="margin-top: 4px;
                                                            margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e12c6" data-answer-text="Giám đốc/Chủ hộ không phải là người trong tỉnh" disabled="disabled">
                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question1" id="lbl_A_Section2_Question1_Case1_Answer0" for="A_Section2_Question1_Case1_Answer0"> Giám đốc/Chủ hộ không phải là người trong tỉnh</label><br>
                                                    <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                            </div>
                                            <div style="display: flex;">
                                                    <input type="checkbox" class="radio" name="A_Section2_Question1" id="A_Section2_Question1_Case1_Answer1" style="margin-top: 4px;
                                                            margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12c7" data-answer-text="Giám đốc/Chủ hộ là người trong tỉnh" disabled="disabled">
                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question1" id="lbl_A_Section2_Question1_Case1_Answer1" for="A_Section2_Question1_Case1_Answer1"> Giám đốc/Chủ hộ là người trong tỉnh</label><br>
                                                    <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                            </div>
                                             </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>3.3. Sử dụng lao động địa phương  <a href="javascript:showHelp('3.3. S%E1%BB%AD d%E1%BB%A5ng lao %C4%91%E1%BB%99ng %C4%91%E1%BB%8Ba ph%C6%B0%C6%A1ng')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('3.detail[2]','5f28d51b7c7f9046bc5e12c8')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote3.detail[2]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e8f8','5e4f946cffb6912ea06ea555-*','3.detail[2]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-2">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section2_Question2" id="A_Section2_Question2_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e12c9" data-answer-text="Có sử dụng &lt; 50% lao động là người địa phương" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question2" id="lbl_A_Section2_Question2_Answer0" for="A_Section2_Question2_Answer0"> Có sử dụng &lt; 50% lao động là người địa phương</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="A_Section2_Question2" id="A_Section2_Question2_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12ca" data-answer-text="Có sử dụng ≥ 50% lao động là người địa phương hoặc có thu nhập bình quân/lao động ≥ mức thu nhập bình quân/người đạt chuẩn nông thôn mới của địa phương tại thời điểm đánh giá." disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_A_Section2_Question2" id="lbl_A_Section2_Question2_Answer1" for="A_Section2_Question2_Answer1">
Có sử dụng ≥ 50% lao động là người địa phương hoặc có thu nhập bình 
quân/lao động ≥ mức thu nhập bình quân/người đạt chuẩn nông thôn mới của
địa phương tại thời điểm đánh giá.</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>3.4. Tăng trưởng sản xuất kinh doanh  <a href="javascript:showHelp('3.4. T%C4%83ng tr%C6%B0%E1%BB%9Fng s%E1%BA%A3n xu%E1%BA%A5t kinh doanh')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('3.detail[3]','5f28d51b7c7f9046bc5e12cb')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote3.detail[3]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e8f8','false','3.detail[3]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-3">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section2_Question3" id="A_Section2_Question3_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e12cc" data-answer-text="Tăng trưởng &lt; 10% về doanh thu so với năm trước liền kề" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question3" id="lbl_A_Section2_Question3_Answer0" for="A_Section2_Question3_Answer0"> Tăng trưởng &lt; 10% về doanh thu so với năm trước liền kề</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="A_Section2_Question3" id="A_Section2_Question3_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12cd" data-answer-text="Tăng trưởng ≥ 10% về doanh thu so với năm trước liền kề" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_A_Section2_Question3" id="lbl_A_Section2_Question3_Answer1" for="A_Section2_Question3_Answer1"> Tăng trưởng ≥ 10% về doanh thu so với năm trước liền kề</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>3.5. Kế toán  <a href="javascript:showHelp('3.5. K%E1%BA%BF to%C3%A1n')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('3.detail[4]','5f28d51b7c7f9046bc5e12ce')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote3.detail[4]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e8f8','5e4f946cffb6912ea06ea558-*','3.detail[4]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-4">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section2_Question4" id="A_Section2_Question4_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e12cf" data-answer-text="Không có kế toán hoặc chỉ thuê kế toán khi có yêu cầu, thời vụ" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question4" id="lbl_A_Section2_Question4_Answer0" for="A_Section2_Question4_Answer0"> Không có kế toán hoặc chỉ thuê kế toán khi có yêu cầu, thời vụ</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section2_Question4" id="A_Section2_Question4_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12d0" data-answer-text="Có kế toán, công tác kế toán được thực hiện thường xuyên" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question4" id="lbl_A_Section2_Question4_Answer1" for="A_Section2_Question4_Answer1"> Có kế toán, công tác kế toán được thực hiện thường xuyên</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="A_Section2_Question4" id="A_Section2_Question4_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e12d1" data-answer-text="Có Tổ chức hệ thống kế toán" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_A_Section2_Question4" id="lbl_A_Section2_Question4_Answer2" for="A_Section2_Question4_Answer2"> Có Tổ chức hệ thống kế toán</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                                            </div>
                                    </form>
                                    </div>
                      </div>
                      <div class="row" id="B">
                        <div class="col-md-12" style="margin-top: 22px;margin-bottom: 22px;">
                          <span class="titileoCop">PHẦN B: KHẢ NĂNG TIẾP THỊ (25 điểm)</span>
                        </div>
                        <br>
                        <div class="col-md-12" id="B-content" style="padding: 0;margin: 0;">
                                    <form class="form-material" id="B_Section3">
                                            <div>
                                                    <label for="productName">
                                                            <div style="display:flex">
                                                                    <div class="Rectangle"></div>
                                                                    <span class="SubHeading"> TIẾP THỊ </span>
                                                            </div>
                                                    </label>
                                                    
                                                    
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>4.1. Khu vực phân phối chính  <a href="javascript:showHelp('4.1. Khu v%E1%BB%B1c ph%C3%A2n ph%E1%BB%91i ch%C3%ADnh')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('4.detail[0]','5f28d51b7c7f9046bc5e12d3')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote4.detail[0]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e90e','false','4.detail[0]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="BQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question0" id="B_Section3_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12d4" data-answer-text="Thị trường trong huyện" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question0" id="lbl_B_Section3_Question0_Answer0" for="B_Section3_Question0_Answer0"> Thị trường trong huyện</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question0" id="B_Section3_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e12d5" data-answer-text="Thị trường ngoài huyện, có dưới 5 đại diện/đại lý phân phối" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question0" id="lbl_B_Section3_Question0_Answer1" for="B_Section3_Question0_Answer1"> Thị trường ngoài huyện, có dưới 5 đại diện/đại lý phân phối</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question0" id="B_Section3_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e12d6" data-answer-text="Thị trường ngoài huyện, có ≥ 5 đại diện/đại lý phân phối" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question0" id="lbl_B_Section3_Question0_Answer2" for="B_Section3_Question0_Answer2"> Thị trường ngoài huyện, có ≥ 5 đại diện/đại lý phân phối</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="B_Section3_Question0" id="B_Section3_Question0_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d51b7c7f9046bc5e12d7" data-answer-text="Thị trường quốc tế" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_B_Section3_Question0" id="lbl_B_Section3_Question0_Answer3" for="B_Section3_Question0_Answer3"> Thị trường quốc tế</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">5 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>4.2. Tổ chức phân phối  <a href="javascript:showHelp('4.2. T%E1%BB%95 ch%E1%BB%A9c ph%C3%A2n ph%E1%BB%91i')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('4.detail[1]','5f28d51b7c7f9046bc5e12d8')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote4.detail[1]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e90e','false','4.detail[1]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span>(Gồm: Tổ chức kinh doanh, phân phối sản phẩm)</span></i></div>
                                    <div id="BQuestion-1">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question1" id="B_Section3_Question1_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e12d9" data-answer-text="Không có người chịu trách nhiệm quản lý phân phối" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question1" id="lbl_B_Section3_Question1_Answer0" for="B_Section3_Question1_Answer0"> Không có người chịu trách nhiệm quản lý phân phối</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question1" id="B_Section3_Question1_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12da" data-answer-text="Có người chịu trách nhiệm quản lý phân phối" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question1" id="lbl_B_Section3_Question1_Answer1" for="B_Section3_Question1_Answer1"> Có người chịu trách nhiệm quản lý phân phối</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question1" id="B_Section3_Question1_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e12db" data-answer-text="Có bộ phận/phòng quản lý phân phối" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question1" id="lbl_B_Section3_Question1_Answer2" for="B_Section3_Question1_Answer2"> Có bộ phận/phòng quản lý phân phối</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="B_Section3_Question1" id="B_Section3_Question1_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d51b7c7f9046bc5e12dc" data-answer-text="Có bộ phận/phòng quản lý phân phối, có ứng dụng công nghệ thông tin trong quản lý" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_B_Section3_Question1" id="lbl_B_Section3_Question1_Answer3" for="B_Section3_Question1_Answer3"> Có bộ phận/phòng quản lý phân phối, có ứng dụng công nghệ thông tin trong quản lý</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">5 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>4.3. Quảng bá sản phẩm  <a href="javascript:showHelp('4.3. Qu%E1%BA%A3ng b%C3%A1 s%E1%BA%A3n ph%E1%BA%A9m')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('4.detail[2]','5f28d51b7c7f9046bc5e12dd')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote4.detail[2]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e90e','5e4f946cffb6912ea06ea55c-*5e4f946cffb6912ea06ea54f-*','4.detail[2]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="BQuestion-2">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question2" id="B_Section3_Question2_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e12de" data-answer-text="Không có hoạt động quảng bá" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question2" id="lbl_B_Section3_Question2_Answer0" for="B_Section3_Question2_Answer0"> Không có hoạt động quảng bá</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question2" id="B_Section3_Question2_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12df" data-answer-text="Có một số hoạt động quảng bá" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question2" id="lbl_B_Section3_Question2_Answer1" for="B_Section3_Question2_Answer1"> Có một số hoạt động quảng bá</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question2" id="B_Section3_Question2_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e12e0" data-answer-text="Có nhiều hoạt động quảng bá, có website của cơ sở, có tham gia hoạt động xúc tiến thương mại trong tỉnh" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question2" id="lbl_B_Section3_Question2_Answer2" for="B_Section3_Question2_Answer2"> Có nhiều hoạt động quảng bá, có website của cơ sở, có tham gia hoạt động xúc tiến thương mại trong tỉnh</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question2" id="B_Section3_Question2_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e12e1" data-answer-text="Có nhiều hoạt động quảng bá, có website của cơ sở, có tham gia hoạt động xúc tiến thương mại ngoài tỉnh" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question2" id="lbl_B_Section3_Question2_Answer3" for="B_Section3_Question2_Answer3"> Có nhiều hoạt động quảng bá, có website của cơ sở, có tham gia hoạt động xúc tiến thương mại ngoài tỉnh</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="B_Section3_Question2" id="B_Section3_Question2_Answer4" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d51b7c7f9046bc5e12e2" data-answer-text="Có nhiều hoạt động quảng bá, có website của cơ sở, có tham gia hoạt động xúc tiến thương mại ngoài tỉnh và quốc tế" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_B_Section3_Question2" id="lbl_B_Section3_Question2_Answer4" for="B_Section3_Question2_Answer4"> Có nhiều hoạt động quảng bá, có website của cơ sở, có tham gia hoạt động xúc tiến thương mại ngoài tỉnh và quốc tế</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">5 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                                            </div>
                                    </form>
                                    
                                    <form class="form-material" id="B_Section4">
                                            <div>
                                                    <label for="productName">
                                                            <div style="display:flex">
                                                                    <div class="Rectangle"></div>
                                                                    <span class="SubHeading"> CÂU CHUYỆN VỀ SẢN PHẨM </span>
                                                            </div>
                                                    </label>
                                                    
                                                    
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>5.1. Câu chuyện về sản phẩm  <a href="javascript:showHelp('5.1. C%C3%A2u chuy%E1%BB%87n v%E1%BB%81 s%E1%BA%A3n ph%E1%BA%A9m')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('5.detail[0]','5f28d51b7c7f9046bc5e12e4')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote5.detail[0]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e91f','5e4f946cffb6912ea06ea55a-*','5.detail[0]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="BQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question0" id="B_Section4_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e12e5" data-answer-text="Không có câu chuyện, hoặc có nhưng không được tư liệu hóa" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question0" id="lbl_B_Section4_Question0_Answer0" for="B_Section4_Question0_Answer0"> Không có câu chuyện, hoặc có nhưng không được tư liệu hóa</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question0" id="B_Section4_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12e6" data-answer-text="Có tài liệu giới thiệu về sản phẩm" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question0" id="lbl_B_Section4_Question0_Answer1" for="B_Section4_Question0_Answer1"> Có tài liệu giới thiệu về sản phẩm</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question0" id="B_Section4_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e12e7" data-answer-text="Có câu chuyện được tư liệu hóa (có cốt truyện, nội dung cụ thể)" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question0" id="lbl_B_Section4_Question0_Answer2" for="B_Section4_Question0_Answer2"> Có câu chuyện được tư liệu hóa (có cốt truyện, nội dung cụ thể)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question0" id="B_Section4_Question0_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e12e8" data-answer-text="Có câu chuyện được tư liệu hóa, trình bày trên nhãn/tờ rơi" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question0" id="lbl_B_Section4_Question0_Answer3" for="B_Section4_Question0_Answer3"> Có câu chuyện được tư liệu hóa, trình bày trên nhãn/tờ rơi</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question0" id="B_Section4_Question0_Answer4" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="4" data-answer-id="5f28d51b7c7f9046bc5e12e9" data-answer-text="Có câu chuyện được tư liệu hóa, trình bày trên nhãn/tờ rơi và website" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question0" id="lbl_B_Section4_Question0_Answer4" for="B_Section4_Question0_Answer4"> Có câu chuyện được tư liệu hóa, trình bày trên nhãn/tờ rơi và website</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">4 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="B_Section4_Question0" id="B_Section4_Question0_Answer5" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d51b7c7f9046bc5e12ea" data-answer-text="Có câu chuyện được tư liệu hóa, trình bày trên nhãn/tờ rơi, website (dưới dạng hình ảnh, clip,…)" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_B_Section4_Question0" id="lbl_B_Section4_Question0_Answer5" for="B_Section4_Question0_Answer5"> Có câu chuyện được tư liệu hóa, trình bày trên nhãn/tờ rơi, website (dưới dạng hình ảnh, clip,…)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">5 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>5.2. Trí tuệ/bản sắc địa phương  <a href="javascript:showHelp('5.2. Tr%C3%AD tu%E1%BB%87/b%E1%BA%A3n s%E1%BA%AFc %C4%91%E1%BB%8Ba ph%C6%B0%C6%A1ng')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('5.detail[1]','5f28d51b7c7f9046bc5e12eb')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote5.detail[1]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e91f','5e4f946cffb6912ea06ea55a-*5e4f946cffb6912ea06ea54f-*','5.detail[1]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span>Chỉ áp dụng khi có câu chuyện, đánh giá nội dung câu chuyện:</span></i></div>
                                    <div id="BQuestion-1">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question1" id="B_Section4_Question1_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e12ec" data-answer-text="Giống với câu chuyện sản phẩm ở nơi khác" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question1" id="lbl_B_Section4_Question1_Answer0" for="B_Section4_Question1_Answer0"> Giống với câu chuyện sản phẩm ở nơi khác</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question1" id="B_Section4_Question1_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12ed" data-answer-text="Tương đối giống câu chuyện sản phẩm ở nơi khác, có thay đổi một số yếu tố" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question1" id="lbl_B_Section4_Question1_Answer1" for="B_Section4_Question1_Answer1"> Tương đối giống câu chuyện sản phẩm ở nơi khác, có thay đổi một số yếu tố</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question1" id="B_Section4_Question1_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e12ee" data-answer-text="Có câu chuyện riêng" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question1" id="lbl_B_Section4_Question1_Answer2" for="B_Section4_Question1_Answer2"> Có câu chuyện riêng</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="B_Section4_Question1" id="B_Section4_Question1_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e12ef" data-answer-text="Có câu chuyện riêng, thể hiện trí tuệ/bản sắc địa phương" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_B_Section4_Question1" id="lbl_B_Section4_Question1_Answer3" for="B_Section4_Question1_Answer3"> Có câu chuyện riêng, thể hiện trí tuệ/bản sắc địa phương</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>5.3. Cấu trúc câu chuyện  <a href="javascript:showHelp('5.3. C%E1%BA%A5u tr%C3%BAc c%C3%A2u chuy%E1%BB%87n')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('5.detail[2]','5f28d51b7c7f9046bc5e12f0')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote5.detail[2]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e91f','5e4f946cffb6912ea06ea55a-*','5.detail[2]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span>Chỉ áp dụng khi có câu chuyện</span></i></div>
                                    <div id="BQuestion-2">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="B_Section4_Question2" id="B_Section4_Question2_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12f1" data-answer-text="Đơn giản" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_B_Section4_Question2" id="lbl_B_Section4_Question2_Answer0" for="B_Section4_Question2_Answer0"> Đơn giản</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question2" id="B_Section4_Question2_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e12f2" data-answer-text="Có đầy đủ các yếu tố của câu chuyện sản phẩm" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question2" id="lbl_B_Section4_Question2_Answer1" for="B_Section4_Question2_Answer1"> Có đầy đủ các yếu tố của câu chuyện sản phẩm</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                                            </div>
                                    </form>
                                    </div>
                      </div>
                      <div class="row" id="C">
                        <div class="col-md-12" style="margin-top: 22px;margin-bottom: 22px; ">
                          <span class="titileoCop">PHẦN C: CHẤT LƯỢNG SẢN PHẨM (40 điểm)</span>
                        </div>
                        <br>
                        <div class="col-md-12" id="C-content" style="padding: 0;margin: 0;">
                                    <form class="form-material" id="C_Section5">
                                            <div>
                                                    <label for="productName">
                                                            <div style="display:flex">
                                                                    <div class="Rectangle"></div>
                                                                    <span class="SubHeading"> CHỈ TIÊU CẢM QUAN </span>
                                                            </div>
                                                    </label>
                                                    
                                                    
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>6.1. Kích thước, hình dạng bề ngoài  <a href="javascript:showHelp('6.1. K%C3%ADch th%C6%B0%E1%BB%9Bc, h%C3%ACnh d%E1%BA%A1ng b%E1%BB%81 ngo%C3%A0i')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('6.detail[0]','5f28d51b7c7f9046bc5e12f4')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote6.detail[0]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e92f','5e4f946cffb6912ea06ea54f-*5e4f946cffb6912ea06ea54f-*','6.detail[0]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="CQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question0" id="C_Section5_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e12f5" data-answer-text="Không đồng đều" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question0" id="lbl_C_Section5_Question0_Answer0" for="C_Section5_Question0_Answer0"> Không đồng đều</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="C_Section5_Question0" id="C_Section5_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12f6" data-answer-text="Không đồng đều, chấp nhận được" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_C_Section5_Question0" id="lbl_C_Section5_Question0_Answer1" for="C_Section5_Question0_Answer1"> Không đồng đều, chấp nhận được</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question0" id="C_Section5_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e12f7" data-answer-text="Đồng đều" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question0" id="lbl_C_Section5_Question0_Answer2" for="C_Section5_Question0_Answer2"> Đồng đều</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>6.2. Màu sắc, độ chín  <a href="javascript:showHelp('6.2. M%C3%A0u s%E1%BA%AFc, %C4%91%E1%BB%99 ch%C3%ADn')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('6.detail[1]','5f28d51b7c7f9046bc5e12f8')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote6.detail[1]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e92f','5e4f946cffb6912ea06ea54f-*5e4f946cffb6912ea06ea54f-*5e4f946cffb6912ea06ea54f-*','6.detail[1]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="CQuestion-1">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question1" id="C_Section5_Question1_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e12f9" data-answer-text="Không phù hợp" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question1" id="lbl_C_Section5_Question1_Answer0" for="C_Section5_Question1_Answer0"> Không phù hợp</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question1" id="C_Section5_Question1_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e12fa" data-answer-text="Chấp nhận được" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question1" id="lbl_C_Section5_Question1_Answer1" for="C_Section5_Question1_Answer1"> Chấp nhận được</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question1" id="C_Section5_Question1_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e12fb" data-answer-text="Tương đối phù hợp" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question1" id="lbl_C_Section5_Question1_Answer2" for="C_Section5_Question1_Answer2"> Tương đối phù hợp</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question1" id="C_Section5_Question1_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d51b7c7f9046bc5e12fc" data-answer-text="Phù hợp" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question1" id="lbl_C_Section5_Question1_Answer3" for="C_Section5_Question1_Answer3"> Phù hợp</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">5 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="C_Section5_Question1" id="C_Section5_Question1_Answer4" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="8" data-answer-id="5f28d51b7c7f9046bc5e12fd" data-answer-text="Rất phù hợp" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_C_Section5_Question1" id="lbl_C_Section5_Question1_Answer4" for="C_Section5_Question1_Answer4"> Rất phù hợp</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">8 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>6.3. Mùi/vị  <a href="javascript:showHelp('6.3. M%C3%B9i/v%E1%BB%8B')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('6.detail[2]','5f28d51b7c7f9046bc5e12fe')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote6.detail[2]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e92f','false','6.detail[2]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="CQuestion-2">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question2" id="C_Section5_Question2_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e12ff" data-answer-text="Kém" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question2" id="lbl_C_Section5_Question2_Answer0" for="C_Section5_Question2_Answer0"> Kém</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question2" id="C_Section5_Question2_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e1300" data-answer-text="Trung bình" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question2" id="lbl_C_Section5_Question2_Answer1" for="C_Section5_Question2_Answer1"> Trung bình</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question2" id="C_Section5_Question2_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e1301" data-answer-text="Tương đối tốt" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question2" id="lbl_C_Section5_Question2_Answer2" for="C_Section5_Question2_Answer2"> Tương đối tốt</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="C_Section5_Question2" id="C_Section5_Question2_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e1302" data-answer-text="Tốt" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_C_Section5_Question2" id="lbl_C_Section5_Question2_Answer3" for="C_Section5_Question2_Answer3"> Tốt</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>6.4. Tính đầy đủ, sạch  <a href="javascript:showHelp('6.4. T%C3%ADnh %C4%91%E1%BA%A7y %C4%91%E1%BB%A7, s%E1%BA%A1ch')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('6.detail[3]','5f28d51b7c7f9046bc5e1303')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote6.detail[3]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e92f','5e4f946cffb6912ea06ea54f-*5e4f946cffb6912ea06ea54f-*','6.detail[3]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="CQuestion-3">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question3" id="C_Section5_Question3_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e1304" data-answer-text="Tương đối chấp nhận được" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question3" id="lbl_C_Section5_Question3_Answer0" for="C_Section5_Question3_Answer0"> Tương đối chấp nhận được</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question3" id="C_Section5_Question3_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e1305" data-answer-text="Chấp nhận được" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question3" id="lbl_C_Section5_Question3_Answer1" for="C_Section5_Question3_Answer1"> Chấp nhận được</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="C_Section5_Question3" id="C_Section5_Question3_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e1306" data-answer-text="Tốt" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_C_Section5_Question3" id="lbl_C_Section5_Question3_Answer2" for="C_Section5_Question3_Answer2"> Tốt</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question3" id="C_Section5_Question3_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e1307" data-answer-text="Rất tốt" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question3" id="lbl_C_Section5_Question3_Answer3" for="C_Section5_Question3_Answer3"> Rất tốt</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>6.5. Kết cấu/cách sắp đặt  <a href="javascript:showHelp('6.5. K%E1%BA%BFt c%E1%BA%A5u/c%C3%A1ch s%E1%BA%AFp %C4%91%E1%BA%B7t')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('6.detail[4]','5f28d51b7c7f9046bc5e1308')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote6.detail[4]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e92f','false','6.detail[4]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="CQuestion-4">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question4" id="C_Section5_Question4_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e1309" data-answer-text="Nghèo nàn" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question4" id="lbl_C_Section5_Question4_Answer0" for="C_Section5_Question4_Answer0"> Nghèo nàn</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question4" id="C_Section5_Question4_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e130a" data-answer-text="Trung bình" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question4" id="lbl_C_Section5_Question4_Answer1" for="C_Section5_Question4_Answer1"> Trung bình</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="C_Section5_Question4" id="C_Section5_Question4_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e130b" data-answer-text="Tốt" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_C_Section5_Question4" id="lbl_C_Section5_Question4_Answer2" for="C_Section5_Question4_Answer2"> Tốt</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                                            </div>
                                    </form>
                                    
                                    <form class="form-material" id="C_Section6">
                                            <div>
                                                    <label for="productName">
                                                            <div style="display:flex">
                                                                    <div class="Rectangle"></div>
                                                                    <span class="SubHeading"> DINH DƯỠNG  <a href="javascript:showHelp(' DINH D%C6%AF%E1%BB%A0NG')"><i class="mdi mdi-help-circle"></i></a> </span>
                                                            </div>
                                                    </label>
                                                    
                                                    
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                             <div><i><p style="max-width:96%">Chỉ ra hàm lượng của các chỉ tiêu dinh dưỡng như: Protit, Lipid, Vitamin,… (theo phiếu kiểm nghiệm do cơ quan có thẩm quyền cấp)</p></i><a class="iconrole" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('7.detail[0]','5f28d51b7c7f9046bc5e130d')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e948','false','7.detail[0]')"> <div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"><div class="infoNote" id="infoNote7.detail[0]" style="display:none"></div></div> </a><div>
                                    <div id="CQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section6_Question0" id="C_Section6_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e130e" data-answer-text="Không có" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section6_Question0" id="lbl_C_Section6_Question0_Answer0" for="C_Section6_Question0_Answer0"> Không có</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section6_Question0" id="C_Section6_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e130f" data-answer-text="Có 1 - 2 chỉ tiêu" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section6_Question0" id="lbl_C_Section6_Question0_Answer1" for="C_Section6_Question0_Answer1"> Có 1 - 2 chỉ tiêu</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="C_Section6_Question0" id="C_Section6_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e1310" data-answer-text="Có trên 2 chỉ tiêu" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_C_Section6_Question0" id="lbl_C_Section6_Question0_Answer2" for="C_Section6_Question0_Answer2"> Có trên 2 chỉ tiêu</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                                            </div>
                                    
                                    </div></div></form>
                                    <form class="form-material" id="C_Section7">
                                            <div>
                                                    <label for="productName">
                                                            <div style="display:flex">
                                                                    <div class="Rectangle"></div>
                                                                    <span class="SubHeading"> TÍNH ĐỘC ĐÁO  <a href="javascript:showHelp(' T%C3%8DNH %C4%90%E1%BB%98C %C4%90%C3%81O')"><i class="mdi mdi-help-circle"></i></a> </span>
                                                            </div>
                                                    </label>
                                                    
                                                    
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                             <div><i><p style="max-width:96%">(Chất lượng: Có nét riêng, khác biệt, không lẫn với sản phẩm khác, tiềm năng thành thương hiệu của địa phương)</p></i><a class="iconrole" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('8.detail[0]','5f28d51b7c7f9046bc5e1312')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e94d','false','8.detail[0]')"> <div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"><div class="infoNote" id="infoNote8.detail[0]" style="display:none"></div></div> </a><div>
                                    <div id="CQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section7_Question0" id="C_Section7_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e1313" data-answer-text="Trung bình" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section7_Question0" id="lbl_C_Section7_Question0_Answer0" for="C_Section7_Question0_Answer0"> Trung bình</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section7_Question0" id="C_Section7_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e1314" data-answer-text="Tương đối độc đáo" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section7_Question0" id="lbl_C_Section7_Question0_Answer1" for="C_Section7_Question0_Answer1"> Tương đối độc đáo</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="C_Section7_Question0" id="C_Section7_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e1315" data-answer-text="Độc đáo" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_C_Section7_Question0" id="lbl_C_Section7_Question0_Answer2" for="C_Section7_Question0_Answer2"> Độc đáo</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section7_Question0" id="C_Section7_Question0_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d51b7c7f9046bc5e1316" data-answer-text="Rất độc đáo" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section7_Question0" id="lbl_C_Section7_Question0_Answer3" for="C_Section7_Question0_Answer3"> Rất độc đáo</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">5 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                                            </div>
                                    
                                    </div></div></form>
                                    <form class="form-material" id="C_Section8">
                                            <div>
                                                    <label for="productName">
                                                            <div style="display:flex">
                                                                    <div class="Rectangle"></div>
                                                                    <span class="SubHeading"> CÔNG BỐ CHẤT LƯỢNG SẢN PHẨM </span>
                                                            </div>
                                                    </label>
                                                    
                                                    
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>9.1. Hồ sơ công bố tiêu chuẩn sản phẩm của cơ sở sản xuất  <a href="javascript:showHelp('9.1. H%E1%BB%93 s%C6%A1 c%C3%B4ng b%E1%BB%91 ti%C3%AAu chu%E1%BA%A9n s%E1%BA%A3n ph%E1%BA%A9m c%E1%BB%A7a c%C6%A1 s%E1%BB%9F s%E1%BA%A3n xu%E1%BA%A5t')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('9.detail[0]','5f28d51b7c7f9046bc5e1318')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote9.detail[0]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e953','5e4f946cffb6912ea06ea551-*5e4f946cffb6912ea06ea551-*','9.detail[0]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span>(Khuyến khích cơ sở xây dựng, công bố Tiêu chuẩn sản phẩm) </span></i></div>
                                    <div id="CQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section8_Question0" id="C_Section8_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e1319" data-answer-text="Không có Bản công bố tiêu chuẩn sản phẩm/chất lượng" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section8_Question0" id="lbl_C_Section8_Question0_Answer0" for="C_Section8_Question0_Answer0"> Không có Bản công bố tiêu chuẩn sản phẩm/chất lượng</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section8_Question0" id="C_Section8_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e131a" data-answer-text="Có Tiêu chuẩn sản phẩm" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section8_Question0" id="lbl_C_Section8_Question0_Answer1" for="C_Section8_Question0_Answer1"> Có Tiêu chuẩn sản phẩm</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="C_Section8_Question0" id="C_Section8_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e131b" data-answer-text="Có Tiêu chuẩn sản phẩm, có Bản công bố tiêu chuẩn/chất lượng" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_C_Section8_Question0" id="lbl_C_Section8_Question0_Answer2" for="C_Section8_Question0_Answer2"> Có Tiêu chuẩn sản phẩm, có Bản công bố tiêu chuẩn/chất lượng</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>9.2. Kiểm tra định kỳ các chỉ tiêu ATTP  <a href="javascript:showHelp('9.2. Ki%E1%BB%83m tra %C4%91%E1%BB%8Bnh k%E1%BB%B3 c%C3%A1c ch%E1%BB%89 ti%C3%AAu ATTP')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('9.detail[1]','5f28d51b7c7f9046bc5e131c')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote9.detail[1]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e953','5e4f946cffb6912ea06ea551-*5e4f946cffb6912ea06ea553-*5e4f946cffb6912ea06ea552-*','9.detail[1]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span>(Phiếu kiểm nghiệm định kỳ các chỉ tiêu ATTP)</span></i></div>
                                    <div id="CQuestion-1">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section8_Question1" id="C_Section8_Question1_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e131d" data-answer-text="Không có" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section8_Question1" id="lbl_C_Section8_Question1_Answer0" for="C_Section8_Question1_Answer0"> Không có</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section8_Question1" id="C_Section8_Question1_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e131e" data-answer-text="Có, nhưng không đạt" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section8_Question1" id="lbl_C_Section8_Question1_Answer1" for="C_Section8_Question1_Answer1"> Có, nhưng không đạt</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section8_Question1" id="C_Section8_Question1_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e131f" data-answer-text="Có, đạt nhưng không đủ" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section8_Question1" id="lbl_C_Section8_Question1_Answer2" for="C_Section8_Question1_Answer2"> Có, đạt nhưng không đủ</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="C_Section8_Question1" id="C_Section8_Question1_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e1320" data-answer-text="Có, đạt đầy đủ(vi sinh, kim loại nặng, dư lượng thuốc BVTV, phụ gia, hóa chất không mong muốn,…) theo quy định" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_C_Section8_Question1" id="lbl_C_Section8_Question1_Answer3" for="C_Section8_Question1_Answer3"> Có, đạt đầy đủ(vi sinh, kim loại nặng, dư lượng thuốc BVTV, phụ gia, hóa chất không mong muốn,…) theo quy định</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                                            </div>
                                    </form>
                                    
                                    <form class="form-material" id="C_Section9">
                                            <div>
                                                    <label for="productName">
                                                            <div style="display:flex">
                                                                    <div class="Rectangle"></div>
                                                                    <span class="SubHeading"> ĐẢM BẢO CHẤT LƯỢNG SẢN PHẨM  <a href="javascript:showHelp(' %C4%90%E1%BA%A2M B%E1%BA%A2O CH%E1%BA%A4T L%C6%AF%E1%BB%A2NG S%E1%BA%A2N PH%E1%BA%A8M')"><i class="mdi mdi-help-circle"></i></a> </span>
                                                            </div>
                                                    </label>
                                                    
                                                    
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                             <div><i><p style="max-width:96%">Ghi chú: Không đánh giá các bước tiếp theo nếu Chứng nhận đủ điều kiện ATTP (hoặc tương đương) không phù hợp theo quy định</p></i><a class="iconrole" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('10.detail[0]','5f28d51b7c7f9046bc5e1322')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e95d','5e4f946cffb6912ea06ea554-*5e4f946cffb6912ea06ea555-*5e4f946cffb6912ea06ea55b-*5e4f946cffb6912ea06ea554-*5e4f946cffb6912ea06ea551-*5e4f946cffb6912ea06ea551-*','10.detail[0]')"> <div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"><div class="infoNote" id="infoNote10.detail[0]" style="display:none"></div></div> </a><div>
                                    <div id="CQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section9_Question0" id="C_Section9_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d51b7c7f9046bc5e1323" data-answer-text="Không có hoạt động kiểm soát chất lượng sản phẩm" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section9_Question0" id="lbl_C_Section9_Question0_Answer0" for="C_Section9_Question0_Answer0"> Không có hoạt động kiểm soát chất lượng sản phẩm</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section9_Question0" id="C_Section9_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e1324" data-answer-text="Có kế hoạch kiểm soát chất lượng sản phẩm" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section9_Question0" id="lbl_C_Section9_Question0_Answer1" for="C_Section9_Question0_Answer1"> Có kế hoạch kiểm soát chất lượng sản phẩm</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section9_Question0" id="C_Section9_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d51b7c7f9046bc5e1325" data-answer-text="Có ghi hồ sơ lô sản xuất" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section9_Question0" id="lbl_C_Section9_Question0_Answer2" for="C_Section9_Question0_Answer2"> Có ghi hồ sơ lô sản xuất</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section9_Question0" id="C_Section9_Question0_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e1326" data-answer-text="Có kế hoạch kiểm soát chất lượng sản phẩm, có ghi hồ sơ lô sản xuất" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section9_Question0" id="lbl_C_Section9_Question0_Answer3" for="C_Section9_Question0_Answer3"> Có kế hoạch kiểm soát chất lượng sản phẩm, có ghi hồ sơ lô sản xuất</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="C_Section9_Question0" id="C_Section9_Question0_Answer4" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="4" data-answer-id="5f28d51b7c7f9046bc5e1327" data-answer-text="Có chứng nhận quản lý chất lượng tiên tiến (VietGAP/GlobalGAP/hữu cơ/…)" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_C_Section9_Question0" id="lbl_C_Section9_Question0_Answer4" for="C_Section9_Question0_Answer4"> Có chứng nhận quản lý chất lượng tiên tiến (VietGAP/GlobalGAP/hữu cơ/…)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">4 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section9_Question0" id="C_Section9_Question0_Answer5" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d51b7c7f9046bc5e1328" data-answer-text="Có chứng nhận đủ điều kiện ATTP cho xuất khẩu và các thủ tục pháp lý khác theo yêu cầu của thị trường đích" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section9_Question0" id="lbl_C_Section9_Question0_Answer5" for="C_Section9_Question0_Answer5"> Có chứng nhận đủ điều kiện ATTP cho xuất khẩu và các thủ tục pháp lý khác theo yêu cầu của thị trường đích</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">5 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                                            </div>
                                    
                                    </div></div></form>
                                    <form class="form-material" id="C_Section10">
                                            <div>
                                                    <label for="productName">
                                                            <div style="display:flex">
                                                                    <div class="Rectangle"></div>
                                                                    <span class="SubHeading"> CƠ HỘI THỊ TRƯỜNG TOÀN CẦU  <a href="javascript:showHelp(' C%C6%A0 H%E1%BB%98I TH%E1%BB%8A TR%C6%AF%E1%BB%9CNG TO%C3%80N C%E1%BA%A6U')"><i class="mdi mdi-help-circle"></i></a> </span>
                                                            </div>
                                                    </label>
                                                    
                                                    
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                             <div><i><p style="max-width:96%"></p></i><a class="iconrole" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('11.detail[0]','5f28d51b7c7f9046bc5e132a')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'6226d4229c97503b4132e965','5e4f946cffb6912ea06ea559-*5e4f946cffb6912ea06ea55c-*','11.detail[0]')"> <div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"><div class="infoNote" id="infoNote11.detail[0]" style="display:none"></div></div> </a><div>
                                    <div id="CQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section10_Question0" id="C_Section10_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d51b7c7f9046bc5e132b" data-answer-text="Có thể xuất khẩu đến thị trường khu vực" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section10_Question0" id="lbl_C_Section10_Question0_Answer0" for="C_Section10_Question0_Answer0"> Có thể xuất khẩu đến thị trường khu vực</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section10_Question0" id="C_Section10_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d51b7c7f9046bc5e132c" data-answer-text="Có thể xuất khẩu các thị trường ngoài khu vực" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section10_Question0" id="lbl_C_Section10_Question0_Answer1" for="C_Section10_Question0_Answer1"> Có thể xuất khẩu các thị trường ngoài khu vực</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="C_Section10_Question0" id="C_Section10_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d51b7c7f9046bc5e132d" data-answer-text="Có thể xuất khẩu đến các thị trường có tiêu chuẩn cao (Mỹ, Nhật, EU…)" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_C_Section10_Question0" id="lbl_C_Section10_Question0_Answer2" for="C_Section10_Question0_Answer2"> Có thể xuất khẩu đến các thị trường có tiêu chuẩn cao (Mỹ, Nhật, EU…)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">5 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                                            </div>
                                    
                                    </div></div></form></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4" id="reponsivePc">
                    <div class="bodycontent" id="scrollPc" style="background-color: white;padding: 26px 26px 50px;position: relative;width: 100%;">
                      <div id="bootommIdeaPc" style="">
                        <div class="row">
                          <div class="col-md-12" style="margin-top: 22px;">
                            <div style="margin-bottom: 16px;">
                              <span class="Part">Phần A</span> <span class="Part" style="float: right;">/35đ</span><span id="A-totalPoint" class="Part" style="float: right;">34</span><br>
                            </div>
                            <div style="margin-bottom: 16px;">
                              <span class="Part">Phần B</span>
                              <span class="Part" style="float: right;">/25đ</span>
                              <span id="B-totalPoint" class="Part" style="float: right;">24</span><br>
                            </div>
                            <div style="margin-bottom: 16px;">
                              <span class="Part">Phần C</span>
                              <span class="Part" style="float: right;">/40đ</span>
                              <span id="C-totalPoint" class="Part" style="float: right;">35</span><br>
                            </div>
                            <div style="margin-bottom: 16px;    width: 100%;">
                              <span class="Part">Tổng điểm</span>
                              <span class="Part" style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">đ</span>
                              <span id="totalPoint" class="Part" style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">93</span><br>
                            </div>
                            <div style="margin-bottom: 16px;    width: 100%;">
                              <span class="Part">Xếp hạng</span> <span id="rankStar" class="Part" style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">5 sao</span><br>
                            </div>
                          </div>
                          <div class="col-12">
                            <a id="proofBtnMobile" href="https://app.sohoaocop.com/treeProof?productInfoId=622577879c97503b4132e763&amp;productSetId=5e4f86607a80891424175fc3" target="_blank" style="color: #fd9600;"><label>Xem mục lục
                                    minh chứng đã nộp &gt;</label></a>
                          </div>
                          <div class="col-md-12" style="margin-top: 20px;">
                            <a class="btn" style="color: #f8f9fa;width: 100%;background-color: rgb(4, 146, 82,0.5);">Lưu</a>
                          </div>
                          <!-- <div class="col-md-12" style="margin-top: 12px;">
                                                                    <button id="completeEvaluate" onclick="saveEvaluate('DONE',true)"
                                                                        class="evaluateStatus text-white btn mr-2"
                                                                        style="flex: 1; background-color: #039252; width:100%;" data-toggle="tooltip"
                                                                        data-placement="top">Gửi kết quả</button>
                                                                </div> -->
                          <div class="col-md-12 " style="  margin-top: 10px;">
                            <div class="row">
                              <div class="col-4 opacity-0">
                                <div style="background-color: #eff0f1;    text-align: center; border-radius: 8px;">
                                  <a class="btn evaluationTooltip">
                                    <!-- href="javascript:openPrecedentModal() opacity-0" -->
                                    <!-- <span class="evaluationTooltipText">Tra cứu tiền
                                                                                        lệ</span> -->
                                    <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/seach.png" class="Grey" style="">
                                  </a>
                                </div>
                              </div>
                              <div class="col-4 opacity-0">
                                <div style="background-color: #eff0f1;    text-align: center; border-radius: 8px;">
                                  <a class="btn evaluateStatus evaluationTooltip">
                                    <!-- href="javascript:printEvaluationResultPdf()" -->
                                    <!-- <span class="evaluationTooltipText">Tải phiếu
                                                                                        chấm</span> -->
                                    <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/docx-download-17-17.png" class="Grey">
                                  </a>
                                </div>
                              </div>
                              <div class="col-4 opacity-0">
                                <div style="background-color: #eff0f1;    text-align: center; border-radius: 8px;">
                                  <a class="btn evaluateStatus evaluationTooltip">
                                    <!-- href="javascript: openMailModel()" -->
                                    <!-- <span class="evaluationTooltipText">Gửi mail</span> -->
                                    <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/gmail-black.png" class="Grey">
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
                              <span class="Part">Phần A</span> <span class="Part" style="float: right;">/35đ</span>
                              <span id="A-totalPointmobile" class="Part" style="float: right;">34</span><br>
                            </div>
                            <div style="margin-bottom: 16px;">
                              <span class="Part">Phần B</span>
                              <span class="Part" style="float: right;">/25đ</span>
                              <span id="B-totalPointmobile" class="Part" style="float: right;">24</span><br>
                            </div>
                            <div style="margin-bottom: 16px;">
                              <span class="Part">Phần C</span>
                              <span class="Part" style="float: right;">/40đ</span>
                              <span id="C-totalPointmobile" class="Part" style="float: right;">35</span><br>
                            </div>
                            <div style="margin-bottom: 16px;    width: 100%;">
                              <span class="Part">Tổng điểm</span>
                              <span class="Part" style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">đ</span>
                              <span id="totalPointmobile" class="Part" style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">93</span><br>
                            </div>
                            <div style="margin-bottom: 16px;    width: 100%;">
                              <span class="Part">Xếp hạng</span> <span id="rankStarmobile" class="Part" style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">5 sao</span><br>
                            </div>
                          </div>
                          <div class="col-12">
                            <a id="proofBtnMobile" href="#" target="_blank" style="color: #fd9600;"><label>Xem mục lục
                                    minh chứng đã nộp &gt;</label></a>
                          </div>
                          <div class="col-4">
                            <div style="background-color: #eff0f1;    text-align: center; border-radius: 8px;">
                              <a class="btn evaluationTooltip" href="javascript:openPrecedentModal()">
                                <span class="evaluationTooltipText">Tra cứu tiền lệ</span>
                                <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/seach.png" class="Grey" style="">
                              </a>
                            </div>
                          </div>
                          <div class="col-4">
                            <div style="background-color: #eff0f1;    text-align: center; border-radius: 8px;">
                              <a class="btn evaluateStatus evaluationTooltip" href="javascript:printEvaluationResultPdf()">
                                <span class="evaluationTooltipText">Tải phiếu chấm</span>
                                <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/docx-download-17-17.png" class="Grey">
                              </a>
                            </div>
                          </div>
                          <div class="col-4">
                            <div style="background-color: #eff0f1;    text-align: center; border-radius: 8px;">
                              <a class="btn evaluateStatus evaluationTooltip" href="javascript: openMailModel()">
                                <span class="evaluationTooltipText">Gửi mail</span>
                                <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/gmail-black.png" class="Grey">
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="btnaction" class="row">
                        <div class="col-6">
                          <a class="btn btn-success disabled" id="saveProcessBtnmobile" role="button" href="javascript:saveEvaluate('PROCESSING',true)" style="color: #f8f9fa;width: 100%;background-color: #049252;">Lưu</a>
                        </div>
                        <div class="col-6">
                          <button id="completeEvaluatemobile" onclick="saveEvaluate('DONE',true)" class="evaluateStatus text-white btn mr-2" style="flex: 1; background-color: #039252; width:100%;" data-toggle="tooltip" data-placement="top" data-original-title="" title="" disabled="disabled">Gửi kết quả</button>
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
                          <div class="chat-rbox ps ps--theme_default ps--active-y" data-ps-id="52f577ce-a481-e766-3cda-1f864ca06dd4">
                            <ul class="chat-list p-3" style="max-height: 500px;" id="listNote">
                              <!--chat Row -->

                            </ul>
                            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: -1436px;">
                              <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;">
                              </div>
                            </div>
                            <div class="ps__scrollbar-y-rail" style="top: 1436px; right: 0px; height: 285px;">
                              <div class="ps__scrollbar-y" tabindex="0" style="top: 176px; height: 35px;">
                              </div>
                            </div>
                          </div>
                          <div class="card-body border-top">
                            <div class="row">
                              <div class="col-12">
                                <div id="img_product">

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="example" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content" style="margin-top: 9%;max-height: 550px;;  background-color: #ffffff;">
                      <div class="modal-header" style="padding: 9px 20px;">
                        <h4 class="modal-title mt-3" style="    font-weight: bold!important;">Tham
                          khảo kết quả
                          chấm</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      </div>
                      <div class="modal-body" style="padding: 0 24px;">
                        <div class="row " style=" max-height: 312px;    overflow: auto;" id="listmember">
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
                <div class="modal fade bs-example-modal-lg" id="exampleModalOcop" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                  <div class="modal-dialog " role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <a id="a-clickat" href="javascript:showAllFileContent()" class="btn btn-sm btn-success">Xem hồ sơ đầy đủ</a>
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
                                    <tr><th>Năm</th>
                                    <th>Doanh thu</th>
                                    <th>Chi phí</th>
                                  </tr></thead>
                                  <tbody id="tbody">

                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12" id="ContentProof">

                          </div>
                        </div>
                        <div id="allFileContent" class=" m-b-15">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="card" style="width: 100%;">
                                <div class="card-header" style="background-color: white;display: flex;padding: 17px;">
                                  <div class="Rectangle">
                                  </div>
                                  <span class="SubHeading">YÊU CẦU BẮT BUỘC

                                  </span>
                                </div>
                                <div class="card-body" id="Obligatory">

                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="card">
                                <div class="card-header" style="background-color: white;display: flex;padding: 17px;">
                                  <div class="Rectangle">
                                  </div>
                                  <span class="SubHeading ">TÀI LIỆU MINH CHỨNG BỔ
                                    SUNG</span>

                                </div>
                                <div class="card-body row" id="Additionally">

                                </div>
                              </div>

                            </div>

                          </div>
                          <div class="modal" id="form01" style="display: none;" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document" style="top: -16px;left: -8px;margin-bottom: 74px;">
                              <div class="modal-content" style="margin-top: 9%;  background-color: #ffffff;">
                                <button type="button" class="close" onclick="closeModalform01()" aria-label="Đóng">
                                  <span aria-hidden="true">
                                    <font style="vertical-align: inherit;float: right;
                                                                                                    margin-right: 20px;">
                                      <font style="vertical-align: inherit;font-size: 32px;">
                                        ×
                                      </font>
                                    </font>
                                  </span>
                                </button>
                                <div class="modal-body" style="padding: 0 24px;padding: 0 24px;min-height: 150px;">
                                  <div id="spinner" style="display: none ;margin-top: 39px;    text-align: center;">
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
                                  <div id="infoswal" style="margin-top: 38px;font-weight: 600;font-size: 17px;font-style: italic;display: none;">
                                    <span>Bạn chưa hoàn thành biểu mẫu</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade long-modal" id="Modaliffo" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" style="display: none;overflow: auto;">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="longmodal">Minh chứng đã nộp</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      </div>
                      <div class="modal-body">
                        <p class="Note-Copy" id="docu" style="width: 100%;"></p>
                        <div class="row" id="ImgModal-info">
                        </div>
                        <div class="row" id="LinkModal-info">
                        </div>
                        <div class="row" id="DocModal-info">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" onclick="closeModal()">Đóng</button>
                      </div>
                    </div>
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
                        <div class="dz-default dz-message"><span><span style="font-weight: 600;font-family: sans-serif; color: #039252"><i class="fas fa-cloud-upload-alt fa-5x"></i><br> Chọn file</span><i class="fa fa-folders"></i></span></div></div>
                        <div class="form-group">
                          <label for="emailsend">Địa chỉ email người nhận*</label>
                          <div class="tags-default">
                            <div class="bootstrap-tagsinput"><input type="text" placeholder=""></div><input type="text" data-role="tagsinput" id="emailsend" style="display: none;">
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
                        <button class="btn btn-success btn-sm" id="senmail" style="width: 100%;border-radius: 0;background: #039252;" onclick="sendmail()">Lập
                          lệnh gửi</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal" id="formcontrol" style="display: none;overflow: auto;" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document" style="margin-bottom: 74px;">
                    <div class="modal-content" style="margin-top: 9%;  background-color: #ffffff;">
                      <div class="modal-header">
                        <a href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="closeModalform()">
                          <i class="fa fa-arrow-left"></i><label style="margin-top: 10px;    margin-left: 7px;">Quay lại</label>
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

                      <div class="modal-body" style="padding: 0 24px;padding: 0 24px;min-height: 150px;">
                        <div id="spinner1" style="display: none ;margin-top: 39px;    text-align: center;">
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
                        <div id="infoswal1" style="margin-top: 38px;font-weight: 600;font-size: 17px;font-style: italic;display: none;">
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
              <div id="infoswal" style="margin-top: 38px;font-weight: 600;font-size: 17px;font-style: italic;display: none;">
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


      <!-- ============================================================== -->
      <!-- Right sidebar -->
      <!-- ============================================================== -->
      <!-- .right-sidebar -->
      <div class="right-sidebar ps ps--theme_default" data-ps-id="d8a934a9-2803-5c9f-ca3a-9726fff9032a">
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