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
             <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/KEO%2520DA%2520CA%2520CAO.jpg" alt="user" class="img-circle" style="margin-top: 10px;margin-right: 21px;width: 62px;height: 62px;">
              <div class="mail-contnet" style="padding-top: 10px;width:100%">
                  <h5 class=".Text-proofTitile">KẸO DỪA CA CAO</h5>
                  <span class="mail-desc">Mã sản phẩm: 83-829-28780-3-2022<br></span>
                  <span class="mail-desc">Tên chủ thể: Công ty TNHH sản xuất kinh doanh tổng hợp Đông Á</span>
                  <div class="comment-footer">
                      <span class="label label-info">Hoàn thành</span>			
                  </div>
                  
                   
                  
                  </div>
          </div>
          <div class="col-12 col-sm-4 " style="padding: 0;text-align: right;margin-top: 12px; ">
                  <button class="btn btn-success btn-sm" style="display:none;width: 100%;border-radius: 0;margin-bottom: 9px;background: #039252;" onclick="changeStatus('Done')">DUYỆT HỒ SƠ</button>
                  <button class="btn btn-success btn-sm" style="display:none;width: 100%;border-radius: 0;margin-bottom: 9px;background: #039252;" onclick="changeStatus('Fail')">TỪ CHỐI HỒ SƠ</button>
                  <button class="btn btn-success btn-sm" style=";width: 100%;border-radius: 0;background: #039252;" data-toggle="modal" data-target="#step1ChangeDateUpStatus" onclick="updateProofDate('621454e2b221160f88c11472')">YÊU CẦU CẬP NHẬT</button>
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
đã duyệt thành công bộ hồ sơ sản phẩm KẸO DỪA CA CAO.  Để gửi hồ sơ tới
các cán bộ chấm đánh giá, vui lòng chọn "Tạo Hội đồng chấm".</p>
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
              <a href="#" data-toggle="modal" data-target="#multiChoiceModal" onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54b', '621454e2b221160f88c11472', 'Phiếu đăng ký')" class="viewMem">
              
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">1</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
           </a>
           <div class="titlesinfo">  <a class="viewMem" herf="#" data-toggle="modal" data-target="#multiChoiceModal" onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54b', '621454e2b221160f88c11472', 'Phiếu đăng ký')">Phiếu đăng ký </a>
           </div>
           <div style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
             <div class="Rectangle-Copy">
             <a class="uploadButton disabled" href="javascript:openQuestionModal('5e4f946cffb6912ea06ea54b','621454e2b221160f88c11472','Phi%E1%BA%BFu %C4%91%C4%83ng k%C3%BD')"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;"></a>
             </div>
             <div class="re-Copy" style="margin-right: 8px;">
             <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea54b')">
              <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style=" margin-top: 13px;">
                    </a>
             </div>
             <div class="re-Copy">
             <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea54b","__v":0,"Contents":"Phiếu đăng ký ý tưởng sản phẩm, đăng ký sản phẩm","true":"1","TextCheck":"PDK","help":"1","check":"1","content":"Phiếu đăng ký","requirements":"Có theo mẫu đính kèm (biểu số 01, 02)","type":"Obligatory","supportInformation":{"explainText":"90% sản phẩm cùng loại trên thị trường được sản xuất từ một nguồn nguyên liệu, theo công nghệ chuẩn và trên thực tế là không có sự khác biệt nào. Vậy làm thế nào để người tiêu dùng phân biệt được tính ưu việt của sản phẩm? Quảng cáo thật nhiều trên các phương tiện truyền thông ư? Nhiều doanh nghiệp có khả năng làm được việc này. Giảm giá sản phẩm chăng? Các doanh nghiệp tuyên chiến với cuộc chiến giá cả thường buộc phải tạm thời quên đi nguồn lợi nhuận của mình. “Câu chuyện sản phẩm” chính là một trong những “chiêu” giúp doanh nghiệp tạo ra lợi nhuận một cách hữu hiệu nhất","tutorialDocs":[{"tutorialName":"Quy trình phiếu đăng ký","type":"doc","dataLinks":["https://view.officeapps.live.com/op/view.aspx?src=https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/CCSP.docx"]}],"tutorialVideos":["https://youtu.be/5JjVyZPu6Hw"]},"proofinfors":[{"_id":"62247dff9c97503b4132d991","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646558628114_428276Biểusố2KẹodừaCaCao.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea54b","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"phiếu đăng ký kẹo dừa ca cao","nameFile":"Biểu số 2 Kẹo dừa Ca Cao.pdf","type":"IMG","__v":0,"createdAt":"2022-03-06T09:25:19.026Z","updatedAt":"2022-03-06T09:25:19.026Z"}]})'>
                  <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
              </a>
             </div>
           </div>
        </div>
      
          <div class="ectangle">
              <a href="#" data-toggle="modal" data-target="#multiChoiceModal" onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54c', '621454e2b221160f88c11472', 'Phương án, kế hoạch kinh doanh sản phẩm')" class="viewMem">
              
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">1</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
           </a>
           <div class="titlesinfo">  <a class="viewMem" herf="#" data-toggle="modal" data-target="#multiChoiceModal" onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54c', '621454e2b221160f88c11472', 'Phương án, kế hoạch kinh doanh sản phẩm')">Phương án, kế hoạch kinh doanh sản phẩm </a>
           </div>
           <div style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
             <div class="Rectangle-Copy">
             <a class="uploadButton disabled" href="javascript:openQuestionModal('5e4f946cffb6912ea06ea54c','621454e2b221160f88c11472','Ph%C6%B0%C6%A1ng %C3%A1n, k%E1%BA%BF ho%E1%BA%A1ch kinh doanh s%E1%BA%A3n ph%E1%BA%A9m')"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;"></a>
             </div>
             <div class="re-Copy" style="margin-right: 8px;">
             <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea54c')">
              <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style=" margin-top: 13px;">
                    </a>
             </div>
             <div class="re-Copy">
             <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea54c","__v":0,"TextCheck":"KHKDSP","check":"1","content":"Phương án, kế hoạch kinh doanh sản phẩm","requirements":"Có theo mẫu đính kèm (biểu số 03)","type":"Obligatory","supportInformation":{"explainText":"Trong quá trình xây dựng và phát triển, các doanh nghiệp ắt hẳn phải nắm vững tình hình hoạt động hiện tại, xác định thị trường mục tiêu, đối thủ cạnh tranh để vạch ra cho mình đường lối phát triển trong tương lai. Đó là lý do vì sao các doanh nghiệp cần phải lập cho mình một bản kế hoạch kinh doanh thật chi tiết và cụ thể. Bạn cứ thử hình dung hoạt đông tương lai của doanh nghiệp như một con đường không ánh sáng, thì bản kế hoạch kinh doanh chính là chiếc đèn pin rọi sáng, giúp bạn bước những bước đi vững chắc về sau.","tutorialDocs":[{"tutorialName":"Infographic Các bước lập kế hoạch kinh doanh ","type":"image","dataLinks":["https://images.app.goo.gl/VpcRCEHPvBzbvwUc7"]},{"tutorialName":"Các bước lập kế hoạch kinh doanh ","type":"doc","dataLinks":["https://docs.google.com/document/d/19pmfKGXbLxZSxWLbKl8EH7vA7OdVl43XemkvrNxpMow/edit?usp=sharing"]}],"tutorialVideos":["https://www.youtube.com/watch?v=362uQ6x018s#action=share"]},"proofinfors":[{"_id":"62247e4a9c97503b4132d993","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646558746008_336994Biểusố3CACAOPhươngánSXkinhdoanhkẹodừ.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea54c","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Phương án sản xuất kinh doanh kẹo dừa ca cao","nameFile":"Biểu số 3 CA CAO Phương án SX kinh doanh kẹo dừ.pdf","type":"IMG","__v":0,"createdAt":"2022-03-06T09:26:34.598Z","updatedAt":"2022-03-06T09:26:34.598Z"}]})'>
                  <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
              </a>
             </div>
           </div>
        </div>
      
          <div class="ectangle">
              <a href="#" data-toggle="modal" data-target="#multiChoiceModal" onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54d', '621454e2b221160f88c11472', 'Giới thiệu bộ máy tổ chức')" class="viewMem">
              
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">1</p>
      </div>
      <div>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/a3x.png 3x" class="Black">
      </div>
      </div>
      
           </a>
           <div class="titlesinfo">  <a class="viewMem" herf="#" data-toggle="modal" data-target="#multiChoiceModal" onclick="openMultiChoiceModal('5e4f946cffb6912ea06ea54d', '621454e2b221160f88c11472', 'Giới thiệu bộ máy tổ chức')">Giới thiệu bộ máy tổ chức </a>
           </div>
           <div style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
             <div class="Rectangle-Copy">
             <a class="uploadButton disabled" href="javascript:openQuestionModal('5e4f946cffb6912ea06ea54d','621454e2b221160f88c11472','Gi%E1%BB%9Bi thi%E1%BB%87u b%E1%BB%99 m%C3%A1y t%E1%BB%95 ch%E1%BB%A9c')"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/primary3x.png 3x" class="Primary" style="margin-top: 13px;"></a>
             </div>
             <div class="re-Copy" style="margin-right: 8px;">
             <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled" onclick="clickquestion('5e4f946cffb6912ea06ea54d')">
              <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/s3x.png 3x" class="Black" style=" margin-top: 13px;">
                    </a>
             </div>
             <div class="re-Copy">
             <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea54d","__v":0,"content":"Giới thiệu bộ máy tổ chức","requirements":"Có theo mẫu đính kèm (biểu số 04)","type":"Obligatory","supportInformation":{"explainText":"1. Sơ đồ tổ chức bộ máy (đối với doanh nghiệp, hợp tác xã): Chuẩn bị một sơ đồ tổ chức mà trong đó từng chức năng được minh họa cụ thể.\n</br> 2. Chức năng nhiệm vụ các bộ phận trong sơ đồ tổ chức: Mô tả nhân sự chủ chốt trong nhóm quản lý về mặt hiểu biết, kinh nghiệm quan hệ sản xuất kinh doanh, trình độ học vấn và trách nhiệm của họ trong sản xuất kinh doanh. Nêu sự khác biệt trong quản lý của chủ thể. ","tutorialDocs":[{"tutorialName":"Infographic Giới thiệu mô hình kinh doanh","type":"image","dataLinks":["http://tokyofounders.com/wp-content/uploads/2019/09/s%C4%914-768x252.png"]},{"tutorialName":"Giới thiệu bộ máy tổ chức","type":"doc","dataLinks":["https://docs.google.com/document/d/18IEch0Aaovk-URqveXvX8K8VUV8ZA9P-sg7Ql_OfUfc/edit?usp=sharing"]}],"tutorialVideos":["https://youtu.be/7c2I0Lo95LI"]},"proofinfors":[{"_id":"62247e9d9c97503b4132d995","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646558844878_822171BMSỐ4.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea54d","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Giới thiệu bộ máy tổ chức của công ty","nameFile":"BM SỐ 4.pdf","type":"IMG","__v":0,"createdAt":"2022-03-06T09:27:57.247Z","updatedAt":"2022-03-06T09:27:57.247Z"}]})'>
                  <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
              </a>
             </div>
           </div>
        </div>
      
          <div class="ectangle">
              <a href="#" data-toggle="modal" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea54e','Giấy đăng ký kinh doanh')" class="viewMem">
              
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">1</p>
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
             <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea54e","__v":0,"Note":"Hãy đảm bảo Giấy đăng ký kinh doanh còn hiệu lực","content":"Giấy đăng ký kinh doanh","requirements":"Bản sao có công chứng, chứng minh hoạt động kinh doanh hợp pháp (đối với các đơn vị/cá nhân có đăng ký kinh doanh)","type":"Obligatory","supportInformation":{"explainText":"Giống như mỗi con người khi được sinh ra đều có giấy khai sinh thì với doanh nghiệp cũng vậy, để biết một doanh nghiệp mới được thành lập hợp pháp thì phải có giấy chứng nhận đăng ký kinh doanh. Theo đó, giấy chứng nhận đăng ký kinh doanh là văn bản, bản điện tử mà Cơ quan nhà nước có thẩm quyền cấp cho doanh nghiệp ghi lại những thông tin về đăng ký kinh doanh mới nhất","tutorialDocs":[{"tutorialName":"infographic Giấy chứng nhận kinh doanh","type":"image","dataLinks":["https://images.app.goo.gl/nMDvCATEsmXQ9e919"]},{"tutorialName":"Giấy chứng nhận đăng ký kinh doanh là gì?","type":"doc","dataLinks":["https://docs.google.com/document/d/1bPnCnEnqujkOmRmfBIfxVAYSGEcto4ZZUBk-MdN2fpg/edit?usp=sharing"]}],"tutorialVideos":["https://www.youtube.com/watch?v=ItdLdvI_M3Q#action=share"]},"proofinfors":[{"_id":"62145f83b221160f88c116d3","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645502248459_9054901636968699159_8038854.Giấyđăngkýkinhdoanh.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea54e","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Loại hình Cty TNHH","nameFile":"1636968699159_8038854.Giấyđăngkýkinhdoanh.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T03:58:59.934Z","updatedAt":"2022-02-22T03:58:59.934Z"}]})'>
                  <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
              </a>
             </div>
           </div>
        </div>
      
          <div class="ectangle">
              <a href="#" data-toggle="modal" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea54f','Sản phẩm mẫu')" class="viewMem">
              
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">1</p>
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
             <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea54f","__v":0,"content":"Sản phẩm mẫu","requirements":"05 đơn vị sản phẩm (trừ sản phẩm dịch vụ)","type":"Obligatory","supportInformation":{"explainText":"Mỗi doanh nghiệp cần có mẫu sản phẩm. Đây là hình thức marketing giới thiệu sản phẩm trực tiếp tới người tiêu dùng và cho người tiêu dùng trải nghiệm sản phẩm đó. Đây là hình thức quảng bá hình ảnh thông minh bởi thông qua hình thức này, doanh nghiệp, công ty có thể thu hồi ý kiến của khách hàng. Từ đó, có thể thay đổi, hoạch định chiến lược cho phù hợp. Ngoài ra, khách hàng cũng có thể quyết định chọn mua nếu cảm thấy hài lòng về sản phẩm.","tutorialDocs":[{"tutorialName":"infographic Cách đóng gói, bao bì sản phẩm","type":"image","dataLinks":["https://images.app.goo.gl/1d7Np14XqtPaXhLh8"]},{"tutorialName":"Xây dựng thương hiệu và mẫu mã sản phẩm","type":"doc","dataLinks":["https://docs.google.com/document/d/1t-lsd5Xk6FGSsxG0tbMCd9w9ZuRCnhRzXcR9fyYwxt8/edit?usp=sharing"]}],"tutorialVideos":["https://youtu.be/YDYycqhfJQk"]},"proofinfors":[{"_id":"62146040b221160f88c116d5","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645502426101_683504KEODỪACACAO.jpg","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea54f","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Kẹo dừa ca cao","nameFile":"KEO DỪA CA CAO.jpg","type":"IMG","__v":0,"createdAt":"2022-02-22T04:02:08.596Z","updatedAt":"2022-02-22T04:02:08.596Z"}]})'>
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
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea550","__v":0,"content":"Giấy đủ điều kiện sản xuất, giấy an toàn vệ sinh thực phẩm ...","requirements":"Bản sao có công chứng (đối với sản phẩm cần phải có giấy chứng nhận theo quy định hiện hành)","type":"Additionally","supportInformation":{"explainText":"Để có thể thành lập công ty hay bất cứ đơn vị nào đều cần check điều kiện sản xuất xem có phù hợp với lĩnh vực ngành nghề họ đăng ký hay không. Và đối với một sản phẩm cần phải có giấy chứng nhận theo quy định hiện hành cho từng loại sản phẩm và được cập nhật thường xuyên theo các văn bản điều chỉnh mới của các ngành. Các chủ hộ, chủ doanh nghiệp sản xuất kinh doanh phải đáp ứng Điều kiện cấp giấy chứng nhận đủ điều kiện sản xuất cho cơ sở kinh doanh của mình. ","tutorialDocs":[{"tutorialName":"Thủ tục cấp giấy chứng nhận cơ sở đủ điều kiện sản xuất","type":"doc","dataLinks":["https://docs.google.com/document/d/1GjDcbbJzgq77ChcQBJJyYcsK-72A2IYt9VSvH3I_OdQ/edit?usp=sharing"]}]},"proofinfors":[{"_id":"62145c17b221160f88c116ce","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645501368205_147151GIAYDUDIEUKIENNAM21-2407082021.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea550","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Giấy đủ điều kiện sản xuất an toàn vệ sinh thực phẩm","nameFile":"GIAY DU DIEU KIEN NAM 21-2407082021.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T03:44:23.890Z","updatedAt":"2022-02-22T03:44:23.890Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea551','Công bố chất lượng sản phẩm')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">1</p>
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
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea551","__v":0,"content":"Công bố chất lượng sản phẩm","requirements":"Bản sao tài liệu, chứng minh chất lượng sản phẩm được công bố","type":"Additionally","supportInformation":{"explainText":"Việc sở hữu giấy chứng nhận chất lượng hàng hóa nhằm chứng minh hàng hóa đạt chất lượng phù hợp với tiêu chuẩn công bố. Các doanh nghiệp nên xin giấy chứng nhận chất lượng cho sản phẩm, hàng hóa của mình vì nó giúp xây dựng niềm tin cho khách hàng về chất lượng và sự an toàn của sản phẩm, thúc đẩy lượng tiêu thụ sản phẩm đó trên thị trường.","tutorialDocs":[{"tutorialName":"Công bố chất lượng sản phẩm","type":"doc","dataLinks":["https://docs.google.com/document/d/1kZHE4RhihkdQgKFiirhdF7_e6PCThPPng016Z44WFjk/edit?usp=sharing"]}]},"proofinfors":[{"_id":"622567649c97503b4132d9b6","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646618361218_976362CBKEOCACAO.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea551","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hồ sơ công tự bố sản phẩm","nameFile":"CB KEO CA CAO.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T02:01:08.262Z","updatedAt":"2022-03-07T02:01:08.262Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea552','Tiêu chuẩn sản phẩm')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">1</p>
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
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea552","__v":0,"content":"Tiêu chuẩn sản phẩm","requirements":"Bản sao tài liệu, chứng minh tiêu chuẩn sản phẩm được công bố","type":"Additionally","supportInformation":{"explainText":"Tiêu chuẩn là quy định về đặc tính kỹ thuật và yêu cầu quản lý dùng làm chuẩn để phân loại, đánh giá sản phẩm, hàng hoá, dịch vụ, quá trình, môi trường và các đối tượng khác trong hoạt động kinh tế - xã hội nhằm nâng cao chất lượng và hiệu quả của các đối tượng này. Tiêu chuẩn do một tổ chức công bố dưới dạng văn bản để tự nguyện áp dụng.","tutorialDocs":[{"tutorialName":"Tiêu chuẩn sản phẩm","type":"doc","dataLinks":["https://docs.google.com/document/d/1cetir_chVVuUb0KMdMnXI3AdrkVuvZNx88HuQDZ_NBE/edit?usp=sharing"]}]},"proofinfors":[{"_id":"62255a609c97503b4132d9ad","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646614989350_324071TiêuchẩncơsởSảnphẩmkẹodừaCaCao.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea552","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Bản tiêu chuẩn cơ sở/ Kỷ thuật thành phần","nameFile":"Tiêu chẩn cơ sở Sản phẩm kẹo dừa Ca Cao.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T01:05:36.144Z","updatedAt":"2022-03-07T01:05:36.144Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea553','Phiếu kết quả kiểm tra chỉ tiêu an toàn thực phẩm theo tiêu chuẩn công bố')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">1</p>
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
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea553","__v":0,"content":"Phiếu kết quả kiểm tra chỉ tiêu an toàn thực phẩm theo tiêu chuẩn công bố","requirements":"Bản sao tài liệu, chứng minh đạt tiêu chuẩn vệ sinh an toàn thực phẩm","type":"Additionally","supportInformation":{"explainText":"Để có thể sản xuất, kinh doanh sản phẩm thực phẩm, công bố chất lượng sản phẩm thực phẩm thì đầu tiên Cơ sở sản xuất, kinh doanh phải được cấp Giấy chứng nhận cơ sở đủ điều kiện an toàn thực phẩm.","tutorialDocs":[{"tutorialName":"Thủ tục cấp giấy chứng nhận cơ sở đủ điều kiện an toàn thực phẩm","type":"doc","dataLinks":["https://docs.google.com/document/d/177NJQX0vUNfx7S99F2I0CXf-NEj5X1Sh2jBjjuOkS9U/edit?usp=sharing"]}]},"proofinfors":[{"_id":"6215d7b2b221160f88c1180c","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645598533917_143207kếtquảphântichchỉtiêuantoànTP.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea553","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Phiếu kiểm tra chỉ tieu an toàn thực phẩm theo tiêu chuẩn công bố kẹo ca cao","nameFile":"kết quả phân tich chỉ tiêu an toàn TP.pdf","type":"IMG","__v":0,"createdAt":"2022-02-23T06:44:02.076Z","updatedAt":"2022-02-23T06:44:02.076Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea554','Mã số mã vạch, tem truy xuất nguồn gốc, chứng nhận sở hữu trí tuệ, chỉ dẫn địa lý, nhãn hiệu sản phẩm...')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">3</p>
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
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea554","__v":0,"check":"1","content":"Mã số mã vạch, tem truy xuất nguồn gốc, chứng nhận sở hữu trí tuệ, chỉ dẫn địa lý, nhãn hiệu sản phẩm...","requirements":"Bản sao tài liệu, chứng minh mã, tem, sở hữu thương hiệu...","type":"Additionally","supportInformation":{"explainText":"Thực trạng hiện nay trước những vấn nạn như hàng giả, hàng nhái, hàng lưu thông không có nguồn gốc xuất xứ, sản phẩm chứa chất cấm, độc hại ảnh hưởng tiêu cực đến sức khỏe người tiêu dùng. Truy xuất nguồn gốc được xem như một giải pháp để giải quyết vấn nạn trên và thực sự truy xuất nguồn gốc đang trở thành vấn đề nóng được quan tâm trên toàn cầu.","tutorialDocs":[{"tutorialName":"Nhãn hàng hóa","type":"doc","dataLinks":["https://docs.google.com/document/d/1ZjXSdk8Bqb-97Kc3850fZELL0QhNTHXlsSlBpa8UY-c/edit?usp=sharing"]}]},"proofinfors":[{"_id":"62255dd89c97503b4132d9af","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646615896488_7011381636968976266_6331892.2.2.GIẤYĐĂNGKÝMSMV.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea554","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Giấy chứng nhận mã số mã vạch, truy suất nguồn gốc","nameFile":"1636968976266_6331892.2.2.GIẤYĐĂNGKÝMSMV.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T01:20:24.895Z","updatedAt":"2022-03-07T01:20:24.895Z"},{"_id":"62255e0b9c97503b4132d9b1","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646616037140_8823031637047827789_8767932.2.1.GIẤYĐĂNGKÝNHÃNHIỆU.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea554","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Giấy chứng nhận đăng ký nhản hiệu","nameFile":"1637047827789_8767932.2.1.GIẤYĐĂNGKÝNHÃNHIỆU.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T01:21:15.258Z","updatedAt":"2022-03-07T01:21:15.258Z"},{"_id":"62280a589c97503b4132f8ff","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646791205841_166042TUICACAO3CAYNOIDIA_20170124.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea554","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hình ảnh nhản hiệu sản phẩm","nameFile":"TUI CA CAO 3 CAY NOI DIA_20170124.pdf","type":"IMG","__v":0,"createdAt":"2022-03-09T02:00:56.826Z","updatedAt":"2022-03-09T02:00:56.826Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea555','Nguồn gốc nguyên liệu, liên kết chuỗi')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">17</p>
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
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea555","__v":0,"content":"Nguồn gốc nguyên liệu, liên kết chuỗi","requirements":"Bản sao tài liệu: Giấy xác nhận, hợp đồng, hóa đơn... chứng minh việc mua bán nguyên vật liệu, hợp đồng, thỏa thuận liên kết","type":"Additionally","supportInformation":{"explainText":"Liên kết sản xuất gắn với tiêu thụ nông sản có vai trò rất quan trọng trong phát triển nông nghiệp. Vì vậy, những năm gần đây, các địa phương trong tỉnh đang đẩy mạnh thực hiện phát triển chuỗi liên kết, tiêu thụ sản phẩm nông nghiệp, góp phần nâng cao năng suất, chất lượng, giá trị sản phẩm nông nghiệp, đồng thời tăng quy mô sản xuất hàng hóa, áp dụng các quy trình sản xuất hiện đại, nâng cao năng lực quản lý, điều hành, tổ chức sản xuất cho các doanh nghiệp (DN), hợp tác xã (HTX) liên kết và trình độ của người dân.","tutorialDocs":[{"tutorialName":"Nguồn gốc nguyên liệu, liên kết chuỗi","type":"doc","dataLinks":["https://docs.google.com/document/d/1evZ0ipZhGZgr-IRRx4asZ2NfdrY0hCVp0Jb3kiH_Dc8/edit?usp=sharing"]}]},"proofinfors":[{"_id":"6215a5c6b221160f88c11799","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645585745804_694345BANTHOATHUẬNLIÊNKẾTMUATRÁIDỪAKHÔ.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"BẢN THỎA THUẬN LIÊN KẾT MUA DỪA 3 BÊN","nameFile":"BANTHOATHUẬNLIÊNKẾTMUATRÁIDỪAKHÔ.pdf","type":"IMG","__v":0,"createdAt":"2022-02-23T03:11:02.881Z","updatedAt":"2022-02-23T03:11:02.881Z"},{"_id":"6215a63bb221160f88c1179f","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645585878675_719680GIAYXACNHANNGUỒNGỐCNGUYÊNLIỆU.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Giấy xác nhận nguồn gốc nguyên liệu địa phương","nameFile":"GIAYXACNHANNGUỒNGỐCNGUYÊNLIỆU.pdf","type":"IMG","__v":0,"createdAt":"2022-02-23T03:12:59.129Z","updatedAt":"2022-02-23T03:12:59.129Z"},{"_id":"6215a6b7b221160f88c117a2","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645586037108_689238HOÁĐƠNMUACƠMDỪA2.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hóa đơn mua cơm dừa","nameFile":"HOÁĐƠNMUACƠMDỪA2.pdf","type":"IMG","__v":0,"createdAt":"2022-02-23T03:15:03.808Z","updatedAt":"2022-02-23T03:15:03.808Z"},{"_id":"6215a700b221160f88c117a4","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645586127487_817676HỢPĐỒNGMUACƠMDỪA.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hợp đồng mua cơm dừa","nameFile":"HỢPĐỒNGMUACƠMDỪA.pdf","type":"IMG","__v":0,"createdAt":"2022-02-23T03:16:16.361Z","updatedAt":"2022-02-23T03:16:16.361Z"},{"_id":"6215a731b221160f88c117a6","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645586187736_272140HỢPĐỒNGMUABAOBÌNHỰA.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hợp đồng mua bao bì nhựa Thành Phú","nameFile":"HỢPĐỒNGMUABAOBÌNHỰA.pdf","type":"IMG","__v":0,"createdAt":"2022-02-23T03:17:05.949Z","updatedAt":"2022-02-23T03:17:05.949Z"},{"_id":"6215a763b221160f88c117a8","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645586243652_158172HỢPĐỒNGMUAĐƯỜNGCÁTTRẮNG.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hợp đồng mua đường cát","nameFile":"HỢPĐỒNGMUAĐƯỜNGCÁTTRẮNG.pdf","type":"IMG","__v":0,"createdAt":"2022-02-23T03:17:55.217Z","updatedAt":"2022-02-23T03:17:55.217Z"},{"_id":"6215a796b221160f88c117aa","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645586290330_195774HỢPĐỒNGMUAMẠCHNHANẾPTƯTRINH.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hợp đồng mua mạch nha Tư Trinh","nameFile":"HỢPĐỒNGMUAMẠCHNHANẾP TƯ TRINH.pdf","type":"IMG","__v":0,"createdAt":"2022-02-23T03:18:46.338Z","updatedAt":"2022-02-23T03:18:46.338Z"},{"_id":"6215a817b221160f88c117ac","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645586366135_921130HỢPĐỒNGMUAMÀNGMỎNGTINHBỘT.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hợp đồng mua giất tan gói bên trong viên kẹo,kết quả phân tích, công bố chất lượng, nhà nhập khẩu","nameFile":"HỢPĐỒNGMUAMÀNGMỎNGTINHBỘT.pdf","type":"IMG","__v":0,"createdAt":"2022-02-23T03:20:55.013Z","updatedAt":"2022-02-23T03:20:55.013Z"},{"_id":"6215a85fb221160f88c117ae","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645586471537_748336HỢPĐỒNGMUAMẠCHNHANẾP.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hợp đồng mua mạch nha Huê Long","nameFile":"HỢPĐỒNGMUAMẠCHNHANẾP.pdf","type":"IMG","__v":0,"createdAt":"2022-02-23T03:22:07.510Z","updatedAt":"2022-02-23T03:22:07.510Z"},{"_id":"6215a8bdb221160f88c117b0","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645586552491_550647KẾTQUẢPHÂNTÍCHBAOBÌNHỰA.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Kết quả phân tích chất lượng bao bì nhựa thành phú","nameFile":"KẾTQUẢPHÂNTÍCHBAOBÌNHỰA.pdf","type":"IMG","__v":0,"createdAt":"2022-02-23T03:23:41.433Z","updatedAt":"2022-02-23T03:23:41.433Z"},{"_id":"6215ab5eb221160f88c117bc","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645587185369_570783HỢPĐỒNGMUATHÙNGCARTON.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hợp đồng mua thùng carton","nameFile":"HỢPĐỒNGMUATHÙNGCARTON.pdf","type":"IMG","__v":0,"createdAt":"2022-02-23T03:34:54.225Z","updatedAt":"2022-02-23T03:34:54.225Z"},{"_id":"6215abf6b221160f88c117c0","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645587342806_881728KẾTQUẢPHÂNTÍCHBAOBÌNHỰA.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Kết quả phân tích bao bì nhưa Thành Phú","nameFile":"KẾTQUẢPHÂNTÍCHBAOBÌNHỰA.pdf","type":"IMG","__v":0,"createdAt":"2022-02-23T03:37:26.752Z","updatedAt":"2022-02-23T03:37:26.752Z"},{"_id":"6215ac43b221160f88c117c6","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645587475196_845296KẾTQUẢPHÂNTÍCHBAOBÌNHỰANĂM2021.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Kết quả phân tích bao bì nhựa 2","nameFile":"KẾTQUẢPHÂNTÍCHBAOBÌNHỰANĂM2021.pdf","type":"IMG","__v":0,"createdAt":"2022-02-23T03:38:43.559Z","updatedAt":"2022-02-23T03:38:43.559Z"},{"_id":"6215ad1db221160f88c117ce","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645587551328_506884PHỤLỤCMUATHÙNGCARTON.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Phụ lục hợp đồng Đông Hải","nameFile":"PHỤLỤCMUATHÙNGCARTON.pdf","type":"IMG","__v":0,"createdAt":"2022-02-23T03:42:21.564Z","updatedAt":"2022-02-23T03:42:21.564Z"},{"_id":"6215ad9ab221160f88c117d2","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645587765676_926250VĂNBẢNCAMKẾTBAOBÌNHỰA.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Cam kết bao bì nhựa","nameFile":"VĂNBẢNCAMKẾTBAOBÌNHỰA.pdf","type":"IMG","__v":0,"createdAt":"2022-02-23T03:44:26.319Z","updatedAt":"2022-02-23T03:44:26.319Z"},{"_id":"6215afd6b221160f88c117ee","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645588379701_5567791640679929835_671435HOADONTIENDIEN.doc","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"hóa đơn thanh toán tiền điện","nameFile":"1640679929835_671435HOADONTIENDIEN.doc","type":"DOC","__v":0,"createdAt":"2022-02-23T03:53:58.875Z","updatedAt":"2022-02-23T03:53:58.875Z"},{"_id":"6215b362b221160f88c1180a","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645588947239_404647QUIMOSANXUAT02232022.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea555","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Giấy xác nhận sản xuất qui mô lớn","nameFile":"QUI MO SAN XUAT02232022.pdf","type":"IMG","__v":0,"createdAt":"2022-02-23T04:09:06.648Z","updatedAt":"2022-02-23T04:09:06.648Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea557','Hệ thống quản lý chất lượng tiên tiến, kiểm soát chất lượng')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">4</p>
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
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea557","__v":0,"content":"Hệ thống quản lý chất lượng tiên tiến, kiểm soát chất lượng","requirements":"Bản sao tài liệu: chứng nhận Hệ thống quản lý chất lượng tiên tiến, chứng minh hệ thống quản lý đạt tiêu chuẩn","type":"Additionally","supportInformation":{"explainText":"Hệ thống quản lý chất lượng là hệ thống quản lý để định hướng và kiểm soát một tổ chức về mặt chất lượng sản phẩm","tutorialDocs":[{"tutorialName":"Hệ thống quản lý là gì?","type":"doc","dataLinks":["https://docs.google.com/document/d/12BxjGmnW0GT720r5xKom6hiiuiiPyPPVZO68RbR_8eY/edit?usp=sharing"]}]},"proofinfors":[{"_id":"62256ab99c97503b4132d9b8","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646619222508_212943chungnhanISO05132021.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea557","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"giấy chứng nhận ISO 19001-2015","nameFile":"chung nhan ISO05132021.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T02:15:21.764Z","updatedAt":"2022-03-07T02:15:21.764Z"},{"_id":"62256ae59c97503b4132d9ba","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646619334690_720895GIAYFDA05132021.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea557","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"giấy chứng nhận FDA","nameFile":"GIAY FDA05132021.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T02:16:05.656Z","updatedAt":"2022-03-07T02:16:05.656Z"},{"_id":"62256b0b9c97503b4132d9bc","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646619376841_455999HACCP04142021.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea557","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Giấy chứng nhận HCCP","nameFile":"HACCP04142021.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T02:16:43.462Z","updatedAt":"2022-03-07T02:16:43.462Z"},{"_id":"62256c0d9c97503b4132d9c8","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646619417821_386004HALAL10052021.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea557","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Giấy chứng nhận HALAL","nameFile":"HALAL10052021.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T02:21:01.662Z","updatedAt":"2022-03-07T02:21:01.662Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea556','Bảo vệ môi trường')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">6</p>
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
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea556","__v":0,"content":"Bảo vệ môi trường","requirements":"Bản sao tài liệu: Giấy xác nhận Kế hoạch bảo vệ môi trường, chứng minh cam kết, đánh giá tác động môi trường","type":"Additionally","supportInformation":{"explainText":"Giấy xác nhận Kế hoạch bảo vệ môi trường là một loại hồ sơ môi trường, là hồ sơ pháp lý thay cho lời cam kết bảo vệ môi trường của chủ Doanh nghiệp. Chủ doanh nghiệp sẽ phải phân tích, đánh giá và dự báo về mức độ gây ô nhiễm môi trường của dự án mà mình sẽ đầu tư gây ra từ giai đoạn xậy dựng cho đến khi đi vào hoạt động","tutorialDocs":[{"tutorialName":"Bảo vệ môi trường","type":"doc","dataLinks":["https://docs.google.com/document/d/1MgR-Tx-krPLy14RauQ8VJ3cKEFNmoL1rNV2HzXgLDB8/edit?usp=sharing"]}]},"proofinfors":[{"_id":"62146503b221160f88c116d7","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645503678539_3998271637034403481_4788501.5.2.GIẤYXÁCNHẬNBẢNCAMKẾTBVMT.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea556","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Giấy xác nhận cam kết bảo vệ môi trường","nameFile":"1637034403481_4788501.5.2.GIẤYXÁCNHẬNBẢNCAMKẾTBVMT.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T04:22:27.391Z","updatedAt":"2022-02-22T04:22:27.391Z"},{"_id":"621465aeb221160f88c116da","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645503849033_7551361637034376939_4141371.5.1.BẢNCAMKẾTBẢOVỆMỘITRƯỜNG.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea556","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Cam kết bảo vệ môi trường","nameFile":"1637034376939_4141371.5.1.BẢNCAMKẾTBẢOVỆMỘITRƯỜNG.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T04:25:18.493Z","updatedAt":"2022-02-22T04:25:18.493Z"},{"_id":"621465e8b221160f88c116dc","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645503933478_9363991637034428592_1348411.5.3.BÁOCÁOCÔNGTÁCBVMT.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea556","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Báo cáo xã thải qua xử lý ra môi trường","nameFile":"1637034428592_1348411.5.3.BÁOCÁOCÔNGTÁCBVMT.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T04:26:16.485Z","updatedAt":"2022-02-22T04:26:16.485Z"},{"_id":"62146622b221160f88c116de","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645503990817_6243111637034469144_8746481.5.4.QuyếtđịnhvềviệccấpphépchocôngtyTNHHSXKDĐôngÁxảnướcthảivàonguồnnước.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea556","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Giấy quyết định xả thải","nameFile":"1637034469144_8746481.5.4.QuyếtđịnhvềviệccấpphépchocôngtyTNHHSXKDĐôngÁxảnướcthảivàonguồnnước.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T04:27:14.999Z","updatedAt":"2022-02-22T04:27:14.999Z"},{"_id":"62146671b221160f88c116e0","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645504047190_9814551637034493142_5452821.5.5.Hợpđồngthugom,vậnchuyển,xửlýrácthảisinhhoạtkhôngnguyhại.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea556","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hợp đồng rác thải không nguy hại","nameFile":"1637034493142_5452821.5.5.Hợpđồngthugom,vậnchuyển,xửlýrácthảisinhhoạtkhôngnguyhại.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T04:28:33.888Z","updatedAt":"2022-02-22T04:28:33.888Z"},{"_id":"6214669ab221160f88c116e2","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645504124151_6019911637034530968_7140911.5.6.Hợpđồngdịchvụvậnchuyểnbùnrácthải.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea556","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hợp đồng bùn thải nguy hại","nameFile":"1637034530968_7140911.5.6.Hợpđồngdịchvụvậnchuyểnbùnrácthải.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T04:29:14.366Z","updatedAt":"2022-02-22T04:29:14.366Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea558','Kế toán')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">12</p>
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
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea558","__v":0,"content":"Kế toán","requirements":"Bản sao tài liệu, minh chứng hoạt động kế toán của cơ sở","type":"Additionally","supportInformation":{"explainText":"Hoạt động kế toán nói một cách đơn giản là tập hợp ghi chép tất cả các giao dịch, tài chính phát sinh của công ty, được sắp xếp một cách có hệ thống để dễ dàng tra cứu và kiểm tra. Sự minh bạch trong tài chính là điều cơ bản mà một doanh nghiệp cần phải có. Bất kỳ doanh nghiệp lớn nhỏ nào đều có sổ sách kế toán, bởi đây là cơ sở là minh chứng cho thấy hiệu quả của hoạt động kinh doanh. Sổ sách kế toán còn là căn cứ để doanh nghiệp hoàn thành nghĩa vụ thuế với cơ quan thuế nhà nước.","tutorialDocs":[{"tutorialName":"Quy định về chứng từ kế toán theo luật Kế Toán 2015","type":"doc","dataLinks":["https://docs.google.com/document/d/1LfMwbUjk5wsTM3BeUbPIX2r2bASIVTHoUfZMQJm3wgU/edit?usp=sharing"]}]},"proofinfors":[{"_id":"62148dd3b221160f88c116e4","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645514097921_145219BẰNGCẤPKẾTOÁNTRƯỞNG.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Bằng cấp kế toán trưởng","nameFile":"BẰNGCẤPKẾTOÁNTRƯỞNG.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T07:16:35.390Z","updatedAt":"2022-02-22T07:16:35.390Z"},{"_id":"62148e5db221160f88c116e6","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645514213037_890893BẢNMÔTẢPHÒNGKẾTOÁN-KẾTOÁNSẢNXUẤT.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Bảng mô tả phòng kế toán","nameFile":"BẢNMÔTẢPHÒNGKẾTOÁN-KẾTOÁNSẢNXUẤT.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T07:18:53.544Z","updatedAt":"2022-02-22T07:18:53.544Z"},{"_id":"62148ee1b221160f88c116e8","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645514364141_964779BẢNMÔTẢPHÒNGKẾTOÁN-KẾTOÁNTRƯỞNG.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"BẢNG MÔ TẢ CÔNG VIỆC KẾ TOÁN TRƯỞNG","nameFile":"BẢNMÔTẢPHÒNGKẾTOÁN-KẾTOÁNTRƯỞNG.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T07:21:05.422Z","updatedAt":"2022-02-22T07:21:05.422Z"},{"_id":"62148f21b221160f88c116ea","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645514488644_464302BẢNMÔTẢPHÒNGKẾTOÁN-THỦQUỸ.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"BẢNG MÔ TẢ CÔNG VIỆC CỦA THỦ QUỸ","nameFile":"BẢNMÔTẢPHÒNGKẾTOÁN-THỦQUỸ.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T07:22:09.446Z","updatedAt":"2022-02-22T07:22:09.446Z"},{"_id":"62148f4db221160f88c116ec","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645514543549_542194BẢNMÔTẢPHÒNGKINHDOANH.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"BẢNG MÔ TẢ PHÒNG KINH DOANH","nameFile":"BẢNMÔTẢPHÒNGKINHDOANH.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T07:22:53.712Z","updatedAt":"2022-02-22T07:22:53.712Z"},{"_id":"62148f81b221160f88c116ee","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645514592198_198830CHỨNGCHỈBỒIDƯỠNGKẾTOÁNTRƯỞNG.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"CHỨNG CHỈ BỒI DƯỠNG KẾ TOÁN ","nameFile":"CHỨNGCHỈBỒIDƯỠNGKẾTOÁNTRƯỞNG.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T07:23:45.206Z","updatedAt":"2022-02-22T07:23:45.206Z"},{"_id":"62148fccb221160f88c116f0","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645514641720_651013DANHSÁCHCÔNGNHÂNVIÊN.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"DANH SÁCH CÔNG NHÂN VIÊN VÀ NGƯỜI LAO ĐỘNG","nameFile":"DANHSÁCHCÔNGNHÂNVIÊN.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T07:25:00.301Z","updatedAt":"2022-02-22T07:25:00.301Z"},{"_id":"6214903ab221160f88c116f2","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645514719812_635315DSHOIDONGTHANHVIENCONGTY.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"DANH SÁCH HỘI ĐỒNG THÀNH VIÊN","nameFile":"DSHOIDONGTHANHVIENCONGTY.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T07:26:50.864Z","updatedAt":"2022-02-22T07:26:50.864Z"},{"_id":"62149086b221160f88c116f4","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645514839262_147222HỢPĐỒNGLAOĐỘNGKẾTOÁNTRƯỞNG.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"HỢP ĐỒNG LAO ĐỘNG KẾ TOÁN TRƯỞNG","nameFile":"HỢPĐỒNGLAOĐỘNGKẾTOÁNTRƯỞNG.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T07:28:06.955Z","updatedAt":"2022-02-22T07:28:06.955Z"},{"_id":"621490cdb221160f88c116f7","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645514907731_413883HỢPĐỒNGLAOĐỘNGKINHDOANH.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"HỢP ĐỒNG LAO ĐỘNG PHÒNG KINH DOANH","nameFile":"HỢPĐỒNGLAOĐỘNGKINHDOANH.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T07:29:17.771Z","updatedAt":"2022-02-22T07:29:17.771Z"},{"_id":"62149104b221160f88c116f9","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645514971770_954309QĐBỔNHIỆMTRƯỞNGPHÒNGKINHDOANH.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Q Đ BỔ NHIỆM TRƯỞNG PHÒNG KINH DOANH","nameFile":"QĐBỔNHIỆMTRƯỞNGPHÒNGKINHDOANH.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T07:30:12.772Z","updatedAt":"2022-02-22T07:30:12.772Z"},{"_id":"62149158b221160f88c116fc","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1645515041843_278706QĐTHÀNHLẬPPHÒNGKINHDOANH.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea558","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"QĐ THÀNH LẬP PHÒNG KINH DOANH","nameFile":"QĐTHÀNHLẬPPHÒNGKINHDOANH.pdf","type":"IMG","__v":0,"createdAt":"2022-02-22T07:31:36.416Z","updatedAt":"2022-02-22T07:31:36.416Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea559','Phát triển thị trường, hoạt động quảng bá, xúc tiến thương mại')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">18</p>
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
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea559","__v":0,"content":"Phát triển thị trường, hoạt động quảng bá, xúc tiến thương mại","requirements":"Bản sao tài liệu: Hợp đồng, cam kết, xác nhận về phân phối sản phẩm, xuất khẩu sản phẩm, hoạt động xúc tiến thương mại...","type":"Additionally","supportInformation":{"explainText":"Xúc tiến thương mại là hoạt động thúc đẩy, tìm kiếm cơ hội mua bán hàng hoá và cung ứng dịch vụ, bao gồm hoạt động khuyến mại, quảng cáo thương mại, trưng bày, giới thiệu hàng hoá, dịch vụ và hội chợ, triển lãm thương mại","tutorialDocs":[{"tutorialName":"Phát triển thị trường, hoạt động quảng bá, xúc tiến thương mại","type":"doc","dataLinks":["https://docs.google.com/document/d/1FQuDX4U19I5XDShVqyd68eHSwWlqLcWNGUOluWEOZfc/edit?usp=sharing"]}]},"proofinfors":[{"_id":"62256feb9c97503b4132d9ef","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646620508543_4276691637045828442_4256694.1.1.HợpđồngbánsảnphẩmchocôngtyThươngHảngPhúHoa-TrungQuốc.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"HĐ Thương mai với cty Phú Hoa TQ","nameFile":"1637045828442_4256694.1.1.HợpđồngbánsảnphẩmchocôngtyThươngHảngPhúHoa-TrungQuốc.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T02:37:31.073Z","updatedAt":"2022-03-07T02:37:31.073Z"},{"_id":"6225704c9c97503b4132d9fb","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646620670933_8108851637045919387_8629854.1.1.1.HoáđơnbánsảnphẩmchocôngtyThươngHảngPhúHoa-TrungQuốc1.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hóa đơn 1 xuất cho Cty Phú Hoa Trung Quốc","nameFile":"1637045919387_8629854.1.1.1.HoáđơnbánsảnphẩmchocôngtyThươngHảngPhúHoa-TrungQuốc1.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T02:39:08.201Z","updatedAt":"2022-03-07T02:39:08.201Z"},{"_id":"622570b29c97503b4132d9ff","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646620764036_6813661637046051792_1336074.1.1.2.HOADONBANHANGPHÚHOA2.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hóa đơn số 2 xuất cho cty phú Hoa Trung Quốc","nameFile":"1637046051792_1336074.1.1.2.HOADONBANHANGPHÚHOA2.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T02:40:50.055Z","updatedAt":"2022-03-07T02:40:50.055Z"},{"_id":"622571009c97503b4132da03","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646620868973_9236451637046069907_5760064.1.1.3.HOADONBANHANGPHÚHOA3.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hóa đơn 3 xuất cho cty phú Hoa","nameFile":"1637046069907_5760064.1.1.3.HOADONBANHANGPHÚHOA3.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T02:42:08.634Z","updatedAt":"2022-03-07T02:42:08.634Z"},{"_id":"622572269c97503b4132da11","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646620947976_3677521637046182056_2563284.3.1.HợpđồngcôngtáchậucầnchongườithamdựvàthamquanhộichơCAEXPOtạiTrungQuốc.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"HĐ Tham gia hội chợ quảng bá thương hiệu-CAEXPO-2018  tại Trung quốc","nameFile":"1637046182056_2563284.3.1.HợpđồngcôngtáchậucầnchongườithamdựvàthamquanhộichơCAEXPOtạiTrungQuốc.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T02:47:02.953Z","updatedAt":"2022-03-07T02:47:02.953Z"},{"_id":"622572789c97503b4132da15","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646621238415_4614611637046224625_2514944.3.1.1.HoáđơncôngtáchậucầnchongườithamdựvàthamquanhộichơCAEXPOtạiTrungQuốc(1).pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hóa đơn tham gia hội chợ CAEXPO-2018","nameFile":"1637046224625_2514944.3.1.1.HoáđơncôngtáchậucầnchongườithamdựvàthamquanhộichơCAEXPOtạiTrungQuốc (1).pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T02:48:24.684Z","updatedAt":"2022-03-07T02:48:24.684Z"},{"_id":"622572dd9c97503b4132da21","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646621338755_6651251637046224625_2514944.3.1.1.HoáđơncôngtáchậucầnchongườithamdựvàthamquanhộichơCAEXPOtạiTrungQuốc.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hoa đơn","nameFile":"1637046224625_2514944.3.1.1.HoáđơncôngtáchậucầnchongườithamdựvàthamquanhộichơCAEXPOtạiTrungQuốc.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T02:50:05.845Z","updatedAt":"2022-03-07T02:50:05.845Z"},{"_id":"622573e59c97503b4132da2b","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646621444947_8953561637046365681_4018144.3.2.HợpđồngkinhtếhỗtrợchiphíthuêgianhàngthamgiahộichợcôngnghiệpthươngmạiBếnTre2019.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Họp đồng kinh tế hỗ trợ chi phí thuê gian hàng hội chợ thương mại công nghiệp Bến tre 2019","nameFile":"1637046365681_4018144.3.2.HợpđồngkinhtếhỗtrợchiphíthuêgianhàngthamgiahộichợcôngnghiệpthươngmạiBếnTre2019.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T02:54:29.459Z","updatedAt":"2022-03-07T02:54:29.459Z"},{"_id":"6225756e9c97503b4132da30","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646621756269_5277441637046439008_6505584.3.3.Hợpđồnghỗtrợkinhphítrưngbày,triểnlãmngàyhộikhởinghiệpđổimớisángtạovùngđồngbằngsôngcửalongtạitỉnhBếnTre.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"HĐ hỗ trợ kinh phí trưng bày tiển lãm ngày hội khởi nghiệp đỗi mới sáng tạo vùng đồng bằng sông Cữu Long tại tỉnh Bến Tre( Techfest Mekong 2020","nameFile":"1637046439008_6505584.3.3.Hợpđồnghỗtrợkinhphítrưngbày,triểnlãmngàyhộikhởinghiệpđổimớisángtạovùngđồngbằngsôngcửalongtạitỉnhBếnTre.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T03:01:02.788Z","updatedAt":"2022-03-07T03:01:02.788Z"},{"_id":"6225764f9c97503b4132da3a","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646622173283_4761621637046478397_4619154.3.4.ThôngtintrangWeb.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Trang web bán hàng","nameFile":"1637046478397_4619154.3.4.ThôngtintrangWeb.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T03:04:47.912Z","updatedAt":"2022-03-07T03:04:47.912Z"},{"_id":"6225770d9c97503b4132e124","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646622311686_6526181637633343430_3456171.3.1.ĐƠNXÁCNHẬNVỀQUYMÔSẢNXUẤT.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Đơn xác nhận qui mô sản xuất","nameFile":"1637633343430_3456171.3.1.ĐƠNXÁCNHẬNVỀQUYMÔSẢNXUẤT.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T03:07:57.859Z","updatedAt":"2022-03-07T03:07:57.859Z"},{"_id":"622578449c97503b4132e765","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646622709521_2107161640249553287_5233131.1.3.HỢPĐỒNGMUACƠMDỪA.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"HĐ mua cơm dừa","nameFile":"1640249553287_5233131.1.3.HỢPĐỒNGMUACƠMDỪA.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T03:13:08.963Z","updatedAt":"2022-03-07T03:13:08.963Z"},{"_id":"622578b09c97503b4132e767","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646622824384_1610141640249611785_7521881.1.3.1.HOÁĐƠNMUACƠMDỪA1.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hóa đơn mua cơm dừa 1","nameFile":"1640249611785_7521881.1.3.1.HOÁĐƠNMUACƠMDỪA1.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T03:14:56.607Z","updatedAt":"2022-03-07T03:14:56.607Z"},{"_id":"622578fe9c97503b4132e769","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646622917397_7482021640249734918_5083181.1.3.2.HOÁĐƠNMUACƠMDỪA2.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hóa đơn mua cơm dừa 2","nameFile":"1640249734918_5083181.1.3.2.HOÁĐƠNMUACƠMDỪA2.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T03:16:14.031Z","updatedAt":"2022-03-07T03:16:14.031Z"},{"_id":"622579429c97503b4132e76b","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646623014037_4382391640249761212_9315421.1.3.3.HOÁĐƠNMUACƠMDỪA3.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hóa đơn mua cơ dừa 3","nameFile":"1640249761212_9315421.1.3.3.HOÁĐƠNMUACƠMDỪA3.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T03:17:22.245Z","updatedAt":"2022-03-07T03:17:22.245Z"},{"_id":"622579b09c97503b4132e76d","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646623116936_1511071640249785087_1742801.1.4.HỢPĐỒNGMUAMẠCHNHANẾP(1).pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hợp đồng mua mạch nha nếp","nameFile":"1640249785087_1742801.1.4.HỢPĐỒNGMUAMẠCHNHANẾP (1).pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T03:19:12.464Z","updatedAt":"2022-03-07T03:19:12.464Z"},{"_id":"6225b7699c97503b4132e777","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646638898571_952310HĐCACAO.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Hợp Đồng mua ca cao","nameFile":"HĐ CA CAO.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T07:42:33.180Z","updatedAt":"2022-03-07T07:42:33.180Z"},{"_id":"6225ba089c97503b4132e779","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646639595261_938324TUICACAO3CAYNOIDIA_20170124.ai","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea559","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Nhản hiệu bao bì sản phẩm","nameFile":"TUI CA CAO 3 CAY NOI DIA_20170124.ai","type":"DOC","__v":0,"createdAt":"2022-03-07T07:53:44.298Z","updatedAt":"2022-03-07T07:53:44.298Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea55a','Câu chuyện về sản phẩm')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">1</p>
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
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea55a","__v":0,"content":"Câu chuyện về sản phẩm","requirements":"Bản sao tờ rơi, hình ảnh, phim, ghi âm... minh chứng về câu chuyện của sản phẩm","type":"Additionally","supportInformation":{"explainText":"Câu chuyện sản phẩm là thông điệp mà chủ thể truyền tải phần “GIÁ TRỊ CỐT LÕI” của sản phẩm đến với khách hàng.","tutorialDocs":[{"tutorialName":"Câu chuyện về sản phẩm","type":"doc","dataLinks":["https://docs.google.com/document/d/1gQPvZEI4Grae31K_LXc9w8nKKPxYbDep4EqOxvTw93o/edit?usp=sharing"]}]},"proofinfors":[{"_id":"6225b44c9c97503b4132e771","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646638061732_6927811637570109935_4652065.1CAUCHUYENSP.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea55a","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Câu chuyện sản phẩm","nameFile":"1637570109935_4652065.1CAUCHUYENSP.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T07:29:16.112Z","updatedAt":"2022-03-07T07:29:16.112Z"}]})'>
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
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea55b","__v":0,"content":"Kế hoạch kiểm soát chất lượng, ghi hồ sơ lô sản xuất...","requirements":"Bản sao tài liệu, minh chứng về hoạt động kiểm soát chất lượng sản phẩm theo từng lô sản xuất","type":"Additionally","supportInformation":{"explainText":"Kế hoạch kiểm soát chất lượng là biện pháp góp phần nâng cao chất lượng của hàng hóa và dịch vụ. Hồ sơ lô là tất cả tài liệu có liên quan đến việc sản xuất một lô bán thành phẩm hoặc thành phẩm.","tutorialDocs":[{"tutorialName":"Kế hoạch kiểm soát chất lượng, ghi hồ sơ lô sản xuất...","type":"doc","dataLinks":["https://docs.google.com/document/d/1vdK9kxI70L3jc1ZYjt-AA8_YjAySeR2WPVZ_8U-r53w/edit?usp=sharing"]}]},"proofinfors":[{"_id":"6225b6209c97503b4132e773","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646638489341_488908kếhoạchkiểmsoátchấtlượng.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea55b","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Kiểm soát hóa trình sản xuất và chất lượng sản phẩm","nameFile":"kế hoạch kiểm soát chất lượng.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T07:37:04.477Z","updatedAt":"2022-03-07T07:37:04.477Z"},{"_id":"6225b6529c97503b4132e775","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646638637644_7266411637045216478_6225029.2.NHẬTKÝGHICHÉP.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea55b","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Ghi hồ sơ lô sản xuất","nameFile":"1637045216478_6225029.2.NHẬTKÝGHICHÉP.pdf","type":"IMG","__v":0,"createdAt":"2022-03-07T07:37:54.147Z","updatedAt":"2022-03-07T07:37:54.147Z"}]})'>
          <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black.png" srcset="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black2x.png 2x, OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/black3x.png 3x" class="Black" style="margin-top: 13px;">
        </a>
       </div>
     </div>
  </div>

  <div class="ectangle" style="position:relative">
    <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal('5e4f946cffb6912ea06ea55c','Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế...')">
       
      <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
      <div class="cice">
          <p class="textone">5</p>
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
        <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal({"_id":"5e4f946cffb6912ea06ea55c","__v":0,"content":"Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế...","requirements":"Bản sao tài liệu, minh chứng về các thành tích, giải thưởng, bình chọn...","type":"Additionally","supportInformation":{"explainText":"Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế... giúp thể hiện sự công nhận của các tổ chức với những đóng góp của doanh nghiệp, cá nhân sản xuất kinh doanh trong hoạt động sản xuất, quảng bá sản phẩm. ","tutorialDocs":[{"tutorialName":"Giải thưởng của sản phẩm, bình chọn của các tổ chức uy tín trong nước và quốc tế..","type":"doc","dataLinks":["https://docs.google.com/document/d/1iS_lzNCzOSYIZKJ5cADM_CUi_I9LDHBJtre0Ho_Y0Oo/edit?usp=sharing"]}]},"proofinfors":[{"_id":"622473ba9c97503b4132d989","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646555942308_392362GIẤYCHU71NGNHA65NSAOVÀNG.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea55c","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Giấy chứng nhận sao vàng năm 2014","nameFile":"GIẤY CHU71NGNHA65N SAO VÀNG.pdf","type":"IMG","__v":0,"createdAt":"2022-03-06T08:41:30.023Z","updatedAt":"2022-03-06T08:41:30.023Z"},{"_id":"622473e99c97503b4132d98b","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646556103353_756289BANGKHENTHUTUONG.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea55c","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Bằng khen của Thủ Tướng Chính phủ","nameFile":"BANGKHENTHUTUONG.pdf","type":"IMG","__v":0,"createdAt":"2022-03-06T08:42:17.081Z","updatedAt":"2022-03-06T08:42:17.081Z"},{"_id":"6224741d9c97503b4132d98d","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646556146775_4992671637030118505_462365GIẤYCHỨNGNHẬNNỮDOANHNHÂNXUẤTSẮC.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea55c","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Giấy chứng nhận nữ doanh nhân xuất sắc","nameFile":"1637030118505_462365GIẤYCHỨNGNHẬNNỮDOANHNHÂNXUẤTSẮC.pdf","type":"IMG","__v":0,"createdAt":"2022-03-06T08:43:09.367Z","updatedAt":"2022-03-06T08:43:09.367Z"},{"_id":"622474499c97503b4132d98f","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646556199211_5424331637030113905_186088vienkeokiluc04212021.pdf","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea55c","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Viên kẹo kỷ luật Việt Nam","nameFile":"1637030113905_186088vienkeokiluc04212021.pdf","type":"IMG","__v":0,"createdAt":"2022-03-06T08:43:53.603Z","updatedAt":"2022-03-06T08:43:53.603Z"},{"_id":"622812c49c97503b4132f92c","data":"https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646793325632_646713DSC_5359.JPG","note":null,"productsInfo":"621454e2b221160f88c11472","status":"ACTIVE","memberId":"6191db92b4cf61135be29bbe","requirementId":"5e4f946cffb6912ea06ea55c","memberName":"Công ty TNHH sản xuất kinh doanh tỏng hợp Đông Á","descriptionImg":"Sản phẩm công nghiệp nông thôn tiêu biểu cấp tỉnh","nameFile":"DSC_5359.JPG","type":"IMG","__v":0,"createdAt":"2022-03-09T02:36:52.555Z","updatedAt":"2022-03-09T02:36:52.555Z"}]})'>
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
                      <span id="product" class="titileoCop">KẸO DỪA CA CAO</span><br>
                      <label class="entili" id="entity">Công ty TNHH sản xuất kinh doanh tổng hợp Đông Á</label><br>
                      <span class="textOcop" id="setProduct"><span class="productTi">Bộ sản phẩm</span>: Chế biến từ rau, củ, quả, hạt</span><br>

                      <span class="textOcop" id="productcode"><span class="productTi">Mã sản phẩm</span>: 83-829-28780-3-2022</span>
                      <br>

                      <span class="textOcop" id="adressentity"><span class="productTi">Địa chỉ</span>: Bến Tre</span>
                      <div class="text-center" id="noteText" style="color:#039252!important;font-size:16px"> <span>Đang chấm</span> <br><i>lần chấm thứ 1</i></div>
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
                             
                              <span><b>1.1. Nguồn nguyên liệu  <a href="javascript:showHelp('1.1. Ngu%E1%BB%93n nguy%C3%AAn li%E1%BB%87u')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('1.detail[0]','5f28d6d57c7f9046bc5e16c7')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote1.detail[0]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11511','5e4f946cffb6912ea06ea553-*5e4f946cffb6912ea06ea550-*5e4f946cffb6912ea06ea550-*5e4f946cffb6912ea06ea550-*5e4f946cffb6912ea06ea550-*5e4f946cffb6912ea06ea551-*','1.detail[0]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span>Ghi chú: Bị loại nếu sử dụng toàn bộ nguyên liệu nhập khẩu hoặc không rõ nguồn gốc</span></i></div>
                                    <div id="AQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question0" id="A_Section0_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e16c8" data-answer-text="Sử dụng nguyên liệu có nguồn gốc trong tỉnh dưới 50%" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question0" id="lbl_A_Section0_Question0_Answer0" for="A_Section0_Question0_Answer0"> Sử dụng nguyên liệu có nguồn gốc trong tỉnh dưới 50%</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question0" id="A_Section0_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e16c9" data-answer-text="Sử dụng nguyên liệu có nguồn gốc trong tỉnh từ 50% đến dưới 75%" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question0" id="lbl_A_Section0_Question0_Answer1" for="A_Section0_Question0_Answer1"> Sử dụng nguyên liệu có nguồn gốc trong tỉnh từ 50% đến dưới 75%</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" checked="checked" class="radio" name="A_Section0_Question0" id="A_Section0_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e16ca" data-answer-text="Sử dụng nguyên liệu có nguồn gốc trong tỉnh từ 75% đến 100%" disabled="disabled">
                                                                            <label style="width: 80%;color:#049252;" name="lbl_A_Section0_Question0" id="lbl_A_Section0_Question0_Answer2" for="A_Section0_Question0_Answer2"> Sử dụng nguyên liệu có nguồn gốc trong tỉnh từ 75% đến 100%</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>1.2. Gia tăng giá trị  <a href="javascript:showHelp('1.2. Gia t%C4%83ng gi%C3%A1 tr%E1%BB%8B')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('1.detail[1]','5f28d6d57c7f9046bc5e16cb')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote1.detail[1]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11511','5e4f946cffb6912ea06ea552-*5e4f946cffb6912ea06ea552-*5e4f946cffb6912ea06ea552-*5e4f946cffb6912ea06ea552-*5e4f946cffb6912ea06ea552-*5e4f946cffb6912ea06ea551-*5e4f946cffb6912ea06ea551-*5e4f946cffb6912ea06ea551-*5e4f946cffb6912ea06ea551-*5e4f946cffb6912ea06ea551-*5e4f946cffb6912ea06ea552-*','1.detail[1]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-1">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question1" id="A_Section0_Question1_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e16cc" data-answer-text="Chế biến đơn giản" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question1" id="lbl_A_Section0_Question1_Answer0" for="A_Section0_Question1_Answer0"> Chế biến đơn giản</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question1" id="A_Section0_Question1_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e16cd" data-answer-text="Chế biến" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question1" id="lbl_A_Section0_Question1_Answer1" for="A_Section0_Question1_Answer1"> Chế biến</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question1" id="A_Section0_Question1_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e16ce" data-answer-text="Chế biến sâu (tạo ra sản phẩm chất lượng cao hơn)" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question1" id="lbl_A_Section0_Question1_Answer2" for="A_Section0_Question1_Answer2"> Chế biến sâu (tạo ra sản phẩm chất lượng cao hơn)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>1.3. Năng lực sản xuất để phân phối  <a href="javascript:showHelp('1.3. N%C4%83ng l%E1%BB%B1c s%E1%BA%A3n xu%E1%BA%A5t %C4%91%E1%BB%83 ph%C3%A2n ph%E1%BB%91i')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('1.detail[2]','5f28d6d57c7f9046bc5e16cf')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote1.detail[2]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11511','5e4f946cffb6912ea06ea555-*5e4f946cffb6912ea06ea554-*5e4f946cffb6912ea06ea554-*5e4f946cffb6912ea06ea554-*5e4f946cffb6912ea06ea551-*5e4f946cffb6912ea06ea551-*5e4f946cffb6912ea06ea551-*5e4f946cffb6912ea06ea551-*5e4f946cffb6912ea06ea551-*','1.detail[2]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span>(Khả năng sản xuất đáp ứng nhu cầu về số lượng/quy mô của thị trường)</span></i></div>
                                    <div id="AQuestion-2">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question2" id="A_Section0_Question2_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e16d0" data-answer-text="Có năng lực, quy mô sản xuất mức độ nhỏ" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question2" id="lbl_A_Section0_Question2_Answer0" for="A_Section0_Question2_Answer0"> Có năng lực, quy mô sản xuất mức độ nhỏ</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question2" id="A_Section0_Question2_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e16d1" data-answer-text="Có năng lực, quy mô sản xuất trung bình" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question2" id="lbl_A_Section0_Question2_Answer1" for="A_Section0_Question2_Answer1"> Có năng lực, quy mô sản xuất trung bình</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question2" id="A_Section0_Question2_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e16d2" data-answer-text="Có năng lực, quy mô sản xuất lớn" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question2" id="lbl_A_Section0_Question2_Answer2" for="A_Section0_Question2_Answer2"> Có năng lực, quy mô sản xuất lớn</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question2" id="A_Section0_Question2_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="4" data-answer-id="5f28d6d57c7f9046bc5e16d3" data-answer-text="Có năng lực, quy mô sản xuất lớn, có thể đáp ứng thị trường xuất khẩu" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question2" id="lbl_A_Section0_Question2_Answer3" for="A_Section0_Question2_Answer3"> Có năng lực, quy mô sản xuất lớn, có thể đáp ứng thị trường xuất khẩu</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">4 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>1.4. Liên kết chuỗi trong sản xuất  <a href="javascript:showHelp('1.4. Li%C3%AAn k%E1%BA%BFt chu%E1%BB%97i trong s%E1%BA%A3n xu%E1%BA%A5t')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('1.detail[3]','5f28d6d57c7f9046bc5e16d4')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote1.detail[3]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11511','5e4f946cffb6912ea06ea558-*5e4f946cffb6912ea06ea557-*5e4f946cffb6912ea06ea557-*5e4f946cffb6912ea06ea557-*5e4f946cffb6912ea06ea557-*5e4f946cffb6912ea06ea557-*5e4f946cffb6912ea06ea557-*5e4f946cffb6912ea06ea557-*','1.detail[3]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-3">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question3" id="A_Section0_Question3_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e16d5" data-answer-text="Không có liên kết hoặc có nhưng không rõ ràng" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question3" id="lbl_A_Section0_Question3_Answer0" for="A_Section0_Question3_Answer0"> Không có liên kết hoặc có nhưng không rõ ràng</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question3" id="A_Section0_Question3_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e16d6" data-answer-text="Có liên kết, chặt chẽ (phạm vi trong tỉnh)" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question3" id="lbl_A_Section0_Question3_Answer1" for="A_Section0_Question3_Answer1"> Có liên kết, chặt chẽ (phạm vi trong tỉnh)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question3" id="A_Section0_Question3_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e16d7" data-answer-text="Liên kết chuỗi chặt chẽ (phạm vi trong tỉnh), quy mô lớn hoặc có hộ nghèo (trong tỉnh) tham gia liên kết" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question3" id="lbl_A_Section0_Question3_Answer2" for="A_Section0_Question3_Answer2"> Liên kết chuỗi chặt chẽ (phạm vi trong tỉnh), quy mô lớn hoặc có hộ nghèo (trong tỉnh) tham gia liên kết</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>1.5. Bảo vệ môi trường trong quá trình sản xuất  <a href="javascript:showHelp('1.5. B%E1%BA%A3o v%E1%BB%87 m%C3%B4i tr%C6%B0%E1%BB%9Dng trong qu%C3%A1 tr%C3%ACnh s%E1%BA%A3n xu%E1%BA%A5t')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('1.detail[4]','5f28d6d57c7f9046bc5e16d8')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote1.detail[4]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11511','5e4f946cffb6912ea06ea555-*5e4f946cffb6912ea06ea54b-*','1.detail[4]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-4">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question4" id="A_Section0_Question4_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e16d9" data-answer-text="Có quan tâm (bằng hoạt động cụ thể) đến các tác động môi trường trong quá trình sản xuất" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question4" id="lbl_A_Section0_Question4_Answer0" for="A_Section0_Question4_Answer0"> Có quan tâm (bằng hoạt động cụ thể) đến các tác động môi trường trong quá trình sản xuất</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question4" id="A_Section0_Question4_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e16da" data-answer-text="Có đánh giá tác động môi trường/kế hoạch bảo vệ môi trường (hoặc tương đương) nhưng chưa theo quy định hiện hành" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question4" id="lbl_A_Section0_Question4_Answer1" for="A_Section0_Question4_Answer1"> Có đánh giá tác động môi trường/kế hoạch bảo vệ môi trường (hoặc tương đương) nhưng chưa theo quy định hiện hành</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question4" id="A_Section0_Question4_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e16db" data-answer-text="Có đánh giá tác động môi trường/kế hoạch bảo vệ môi trường (hoặc tương đương) theo quy định hiện hành" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question4" id="lbl_A_Section0_Question4_Answer2" for="A_Section0_Question4_Answer2"> Có đánh giá tác động môi trường/kế hoạch bảo vệ môi trường (hoặc tương đương) theo quy định hiện hành</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question4" id="A_Section0_Question4_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="4" data-answer-id="5f28d6d57c7f9046bc5e16dc" data-answer-text="Có đánh giá tác động môi trường/kế hoạch bảo vệ môi trường (hoặc tương đương) theo quy định hiện hành; có minh chứng triển khai/áp dụng" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question4" id="lbl_A_Section0_Question4_Answer3" for="A_Section0_Question4_Answer3">
Có đánh giá tác động môi trường/kế hoạch bảo vệ môi trường (hoặc tương 
đương) theo quy định hiện hành; có minh chứng triển khai/áp dụng</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">4 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question4" id="A_Section0_Question4_Answer4" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d6d57c7f9046bc5e16dd" data-answer-text="Có đánh giá tác động môi trường/kế hoạch bảo vệ môi trường (hoặc tương đương) theo quy định hiện hành; có minh chứng triển khai/áp dụng; có sử dụng/tái chế phụ phẩm, chất thải trong quá trình sản xuất" disabled="disabled">
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
                             
                              <span><b>1.6. Sử dụng năng lượng, công nghệ thân thiện bền vững trong SX  <a href="javascript:showHelp('1.6. S%E1%BB%AD d%E1%BB%A5ng n%C4%83ng l%C6%B0%E1%BB%A3ng, c%C3%B4ng ngh%E1%BB%87 th%C3%A2n thi%E1%BB%87n b%E1%BB%81n v%E1%BB%AFng trong SX')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('1.detail[5]','5f28d6d57c7f9046bc5e16de')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote1.detail[5]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11511','5e4f946cffb6912ea06ea54b-*','1.detail[5]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-5">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question5" id="A_Section0_Question5_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e16df" data-answer-text="Không sử dụng năng lượng hiện đại, bền vững, đáng tin cậy (sạch, tái tạo,…)/công nghệ thân thiện môi trường" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question5" id="lbl_A_Section0_Question5_Answer0" for="A_Section0_Question5_Answer0"> Không sử dụng năng lượng hiện đại, bền vững, đáng tin cậy (sạch, tái tạo,…)/công nghệ thân thiện môi trường</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section0_Question5" id="A_Section0_Question5_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e16e0" data-answer-text="Có sử dụng năng lượng hiện đại, bền vững, đáng tin cậy (sạch, tái tạo,…)/công nghệ thân thiện môi trường" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section0_Question5" id="lbl_A_Section0_Question5_Answer1" for="A_Section0_Question5_Answer1"> Có sử dụng năng lượng hiện đại, bền vững, đáng tin cậy (sạch, tái tạo,…)/công nghệ thân thiện môi trường</label>
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
                             
                              <span><b>2.1. Nguồn gốc ý tưởng sản phẩm  <a href="javascript:showHelp('2.1. Ngu%E1%BB%93n g%E1%BB%91c %C3%BD t%C6%B0%E1%BB%9Fng s%E1%BA%A3n ph%E1%BA%A9m')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('2.detail[0]','5f28d6d57c7f9046bc5e16e2')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote2.detail[0]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c1152c','false','2.detail[0]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question0" id="A_Section1_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e16e3" data-answer-text="Phát triển dựa trên sản phẩm của nhà sản xuất khác, chỉ thay đổi nhãn hiệu" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question0" id="lbl_A_Section1_Question0_Answer0" for="A_Section1_Question0_Answer0"> Phát triển dựa trên sản phẩm của nhà sản xuất khác, chỉ thay đổi nhãn hiệu</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question0" id="A_Section1_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e16e4" data-answer-text="Phát triển dựa trên sản phẩm của nhà sản xuất khác, chỉ thay đổi nhãn hiệu, có cải tiến về chất lượng, bao bì." disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question0" id="lbl_A_Section1_Question0_Answer1" for="A_Section1_Question0_Answer1"> Phát triển dựa trên sản phẩm của nhà sản xuất khác, chỉ thay đổi nhãn hiệu, có cải tiến về chất lượng, bao bì.</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question0" id="A_Section1_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e16e5" data-answer-text="Phát triển dựa trên ý tưởng của mình, sản phẩm chưa có trên thị trường" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question0" id="lbl_A_Section1_Question0_Answer2" for="A_Section1_Question0_Answer2"> Phát triển dựa trên ý tưởng của mình, sản phẩm chưa có trên thị trường</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question0" id="A_Section1_Question0_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e16e6" data-answer-text="Phát triển ý tưởng của mình gắn với bảo tồn sản phẩm truyền thông/đặc sản/thế mạnh của địa phương" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question0" id="lbl_A_Section1_Question0_Answer3" for="A_Section1_Question0_Answer3"> Phát triển ý tưởng của mình gắn với bảo tồn sản phẩm truyền thông/đặc sản/thế mạnh của địa phương</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>2.2. Tính hoàn thiện của bao bì  <a href="javascript:showHelp('2.2. T%C3%ADnh ho%C3%A0n thi%E1%BB%87n c%E1%BB%A7a bao b%C3%AC')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('2.detail[1]','5f28d6d57c7f9046bc5e16e7')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote2.detail[1]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c1152c','5e4f946cffb6912ea06ea54f-*','2.detail[1]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-1">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question1" id="A_Section1_Question1_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e16e8" data-answer-text="Bao bì đơn giản, thông tin ghi nhãn chưa đầy đủ" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question1" id="lbl_A_Section1_Question1_Answer0" for="A_Section1_Question1_Answer0"> Bao bì đơn giản, thông tin ghi nhãn chưa đầy đủ</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question1" id="A_Section1_Question1_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e16e9" data-answer-text="Bao bì đơn giản, thông tin ghi nhãn đầy đủ" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question1" id="lbl_A_Section1_Question1_Answer1" for="A_Section1_Question1_Answer1"> Bao bì đơn giản, thông tin ghi nhãn đầy đủ</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question1" id="A_Section1_Question1_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e16ea" data-answer-text="Bao bì phù hợp, thông tin ghi nhãn đầy đủ, có truy xuất nguồn gốc" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question1" id="lbl_A_Section1_Question1_Answer2" for="A_Section1_Question1_Answer2"> Bao bì phù hợp, thông tin ghi nhãn đầy đủ, có truy xuất nguồn gốc</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question1" id="A_Section1_Question1_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e16eb" data-answer-text="Bao bì phù hợp, thông tin ghi nhãn đầy đủ, có truy xuất nguồn gốc, có chứng nhận bảo hộ nhãn hiệu/kiểu dáng công nghiệp" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question1" id="lbl_A_Section1_Question1_Answer3" for="A_Section1_Question1_Answer3"> Bao bì phù hợp, thông tin ghi nhãn đầy đủ, có truy xuất nguồn gốc, có chứng nhận bảo hộ nhãn hiệu/kiểu dáng công nghiệp</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>2.3. Phong cách của bao bì  <a href="javascript:showHelp('2.3. Phong c%C3%A1ch c%E1%BB%A7a bao b%C3%AC')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('2.detail[2]','5f28d6d57c7f9046bc5e16ec')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote2.detail[2]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c1152c','5e4f946cffb6912ea06ea54f-*','2.detail[2]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-2">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question2" id="A_Section1_Question2_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e16ed" data-answer-text="Không thuận tiện, không đẹp" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question2" id="lbl_A_Section1_Question2_Answer0" for="A_Section1_Question2_Answer0"> Không thuận tiện, không đẹp</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question2" id="A_Section1_Question2_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e16ee" data-answer-text="Thuận tiện hoặc đẹp" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question2" id="lbl_A_Section1_Question2_Answer1" for="A_Section1_Question2_Answer1"> Thuận tiện hoặc đẹp</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section1_Question2" id="A_Section1_Question2_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e16ef" data-answer-text="Thuận tiện, đẹp, sang trọng" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section1_Question2" id="lbl_A_Section1_Question2_Answer2" for="A_Section1_Question2_Answer2"> Thuận tiện, đẹp, sang trọng</label>
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
                             
                              <span><b>3.1. Loại hình tổ chức sản xuất - kinh doanh  <a href="javascript:showHelp('3.1. Lo%E1%BA%A1i h%C3%ACnh t%E1%BB%95 ch%E1%BB%A9c s%E1%BA%A3n xu%E1%BA%A5t - kinh doanh')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('3.detail[0]','5f28d6d57c7f9046bc5e16f1')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote3.detail[0]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c1153b','false','3.detail[0]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section2_Question0" id="A_Section2_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e16f2" data-answer-text="Hộ gia đình có đăng ký kinh doanh, tổ hợp tác (có giấy đăng ký kinh doanh của tổ trưởng), Công ty trách nhiệm hữu hạn (TNHH) 1 thành viên, doanh nghiệp tư nhân (DNTN)" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question0" id="lbl_A_Section2_Question0_Answer0" for="A_Section2_Question0_Answer0">
Hộ gia đình có đăng ký kinh doanh, tổ hợp tác (có giấy đăng ký kinh 
doanh của tổ trưởng), Công ty trách nhiệm hữu hạn (TNHH) 1 thành viên, 
doanh nghiệp tư nhân (DNTN)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section2_Question0" id="A_Section2_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e16f3" data-answer-text="Công ty TNHH hai thành viên trở lên, công ty cổ phần có vốn góp của cộng đồng địa phương &lt; 51%" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question0" id="lbl_A_Section2_Question0_Answer1" for="A_Section2_Question0_Answer1"> Công ty TNHH hai thành viên trở lên, công ty cổ phần có vốn góp của cộng đồng địa phương &lt; 51%</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section2_Question0" id="A_Section2_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f6dc8f595373625bbef7f87" data-answer-text="HTX tổ chức, hoạt động theo Luật HTX 2012 hoặc công ty cổ phần có vốn góp của cộng đồng địa phương ≥ 51%  " disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question0" id="lbl_A_Section2_Question0_Answer2" for="A_Section2_Question0_Answer2"> HTX tổ chức, hoạt động theo Luật HTX 2012 hoặc công ty cổ phần có vốn góp của cộng đồng địa phương ≥ 51%  </label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>3.2. Sự tham gia của cộng đồng trong quản lý, điều hành  <a href="javascript:showHelp('3.2. S%E1%BB%B1 tham gia c%E1%BB%A7a c%E1%BB%99ng %C4%91%E1%BB%93ng trong qu%E1%BA%A3n l%C3%BD, %C4%91i%E1%BB%81u h%C3%A0nh')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('3.detail[1]','5f28d6d57c7f9046bc5e16f4')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote3.detail[1]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c1153b','false','3.detail[1]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span>Lựa chọn một trong hai trường hợp sau</span></i></div>
                                    <div id="AQuestion-1">
                                            
                                            <div class="ml-3">
                                                    <label>a. Trường hợp 1: Công ty TNHH 2 thành viên trở lên, công ty cổ phần, HTX, Tổ hợp tác 
                                                    </label>
                                                            
                                            <div style="display: flex;">
                                                    <input type="checkbox" class="radio" name="A_Section2_Question1" id="A_Section2_Question1_Case0_Answer0" style="margin-top: 4px;
                                                            margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e16f6" data-answer-text="Có &lt; 50% số thành viên quản trị cao cấp (Ban giám đốc, HĐQT, HĐTV) tham gia quản lý là người trong tỉnh hoặc tổ hợp tác có số thành viên là người trong tỉnh &lt; 50% số thành viên của tổ hợp tác" disabled="disabled">
                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question1" id="lbl_A_Section2_Question1_Case0_Answer0" for="A_Section2_Question1_Case0_Answer0">
Có &lt; 50% số thành viên quản trị cao cấp (Ban giám đốc, HĐQT, HĐTV) 
tham gia quản lý là người trong tỉnh hoặc tổ hợp tác có số thành viên là
người trong tỉnh &lt; 50% số thành viên của tổ hợp tác</label><br>
                                                    <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                            </div>
                                            <div style="display: flex;">
                                                    <input type="checkbox" class="radio" name="A_Section2_Question1" id="A_Section2_Question1_Case0_Answer1" style="margin-top: 4px;
                                                            margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e16f7" data-answer-text="Có ≥ 50% số thành viên quản trị cao cấp (Ban giám đốc, HĐQT, HĐTV) tham gia quản lý là người trong tỉnh hoặc &lt; 50% số thành viên quản trị cao cấp là người trong tỉnh nhưng có thành viên là phụ nữ địa phương" disabled="disabled">
                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question1" id="lbl_A_Section2_Question1_Case0_Answer1" for="A_Section2_Question1_Case0_Answer1">
Có ≥ 50% số thành viên quản trị cao cấp (Ban giám đốc, HĐQT, HĐTV) tham
gia quản lý là người trong tỉnh hoặc &lt; 50% số thành viên quản trị 
cao cấp là người trong tỉnh nhưng có thành viên là phụ nữ địa phương</label><br>
                                                    <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                            </div>
                                             </div>
                                            <div class="ml-3">
                                                    <label>b. Trường hợp 2: Công ty TNHH 1 thành viên, doanh nghiệp tư nhân, hộ gia đình 
                                                    </label>
                                                            
                                            <div style="display: flex;">
                                                    <input type="checkbox" class="radio" name="A_Section2_Question1" id="A_Section2_Question1_Case1_Answer0" style="margin-top: 4px;
                                                            margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e16f9" data-answer-text="Giám đốc/Chủ hộ không phải là người trong tỉnh" disabled="disabled">
                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question1" id="lbl_A_Section2_Question1_Case1_Answer0" for="A_Section2_Question1_Case1_Answer0"> Giám đốc/Chủ hộ không phải là người trong tỉnh</label><br>
                                                    <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                            </div>
                                            <div style="display: flex;">
                                                    <input type="checkbox" class="radio" name="A_Section2_Question1" id="A_Section2_Question1_Case1_Answer1" style="margin-top: 4px;
                                                            margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e16fa" data-answer-text="Giám đốc/Chủ hộ là người trong tỉnh" disabled="disabled">
                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question1" id="lbl_A_Section2_Question1_Case1_Answer1" for="A_Section2_Question1_Case1_Answer1"> Giám đốc/Chủ hộ là người trong tỉnh</label><br>
                                                    <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                            </div>
                                             </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>3.3. Sử dụng lao động địa phương  <a href="javascript:showHelp('3.3. S%E1%BB%AD d%E1%BB%A5ng lao %C4%91%E1%BB%99ng %C4%91%E1%BB%8Ba ph%C6%B0%C6%A1ng')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('3.detail[2]','5f28d6d57c7f9046bc5e16fb')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote3.detail[2]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c1153b','false','3.detail[2]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-2">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section2_Question2" id="A_Section2_Question2_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e16fc" data-answer-text="Có sử dụng &lt; 50% lao động là người địa phương" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question2" id="lbl_A_Section2_Question2_Answer0" for="A_Section2_Question2_Answer0"> Có sử dụng &lt; 50% lao động là người địa phương</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section2_Question2" id="A_Section2_Question2_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e16fd" data-answer-text="Có sử dụng ≥ 50% lao động là người địa phương hoặc có thu nhập bình quân/lao động ≥ mức thu nhập bình quân/người đạt chuẩn nông thôn mới của địa phương tại thời điểm đánh giá." disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question2" id="lbl_A_Section2_Question2_Answer1" for="A_Section2_Question2_Answer1">
Có sử dụng ≥ 50% lao động là người địa phương hoặc có thu nhập bình 
quân/lao động ≥ mức thu nhập bình quân/người đạt chuẩn nông thôn mới của
địa phương tại thời điểm đánh giá.</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>3.4. Tăng trưởng sản xuất kinh doanh  <a href="javascript:showHelp('3.4. T%C4%83ng tr%C6%B0%E1%BB%9Fng s%E1%BA%A3n xu%E1%BA%A5t kinh doanh')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('3.detail[3]','5f28d6d57c7f9046bc5e16fe')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote3.detail[3]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c1153b','false','3.detail[3]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-3">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section2_Question3" id="A_Section2_Question3_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e16ff" data-answer-text="Tăng trưởng &lt; 10% về doanh thu so với năm trước liền kề" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question3" id="lbl_A_Section2_Question3_Answer0" for="A_Section2_Question3_Answer0"> Tăng trưởng &lt; 10% về doanh thu so với năm trước liền kề</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section2_Question3" id="A_Section2_Question3_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e1700" data-answer-text="Tăng trưởng ≥ 10% về doanh thu so với năm trước liền kề" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question3" id="lbl_A_Section2_Question3_Answer1" for="A_Section2_Question3_Answer1"> Tăng trưởng ≥ 10% về doanh thu so với năm trước liền kề</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>3.5. Kế toán  <a href="javascript:showHelp('3.5. K%E1%BA%BF to%C3%A1n')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('3.detail[4]','5f28d6d57c7f9046bc5e1701')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote3.detail[4]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c1153b','false','3.detail[4]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="AQuestion-4">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section2_Question4" id="A_Section2_Question4_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e1702" data-answer-text="Không có kế toán hoặc chỉ thuê kế toán khi có yêu cầu, thời vụ" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question4" id="lbl_A_Section2_Question4_Answer0" for="A_Section2_Question4_Answer0"> Không có kế toán hoặc chỉ thuê kế toán khi có yêu cầu, thời vụ</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section2_Question4" id="A_Section2_Question4_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e1703" data-answer-text="Có kế toán, công tác kế toán được thực hiện thường xuyên" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question4" id="lbl_A_Section2_Question4_Answer1" for="A_Section2_Question4_Answer1"> Có kế toán, công tác kế toán được thực hiện thường xuyên</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="A_Section2_Question4" id="A_Section2_Question4_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e1704" data-answer-text="Có Tổ chức hệ thống kế toán" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_A_Section2_Question4" id="lbl_A_Section2_Question4_Answer2" for="A_Section2_Question4_Answer2"> Có Tổ chức hệ thống kế toán</label>
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
                             
                              <span><b>4.1. Khu vực phân phối chính  <a href="javascript:showHelp('4.1. Khu v%E1%BB%B1c ph%C3%A2n ph%E1%BB%91i ch%C3%ADnh')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('4.detail[0]','5f28d6d57c7f9046bc5e1706')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote4.detail[0]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11551','false','4.detail[0]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="BQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question0" id="B_Section3_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e1707" data-answer-text="Thị trường trong huyện" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question0" id="lbl_B_Section3_Question0_Answer0" for="B_Section3_Question0_Answer0"> Thị trường trong huyện</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question0" id="B_Section3_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e1708" data-answer-text="Thị trường ngoài huyện, có dưới 5 đại diện/đại lý phân phối" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question0" id="lbl_B_Section3_Question0_Answer1" for="B_Section3_Question0_Answer1"> Thị trường ngoài huyện, có dưới 5 đại diện/đại lý phân phối</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question0" id="B_Section3_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e1709" data-answer-text="Thị trường ngoài huyện, có ≥ 5 đại diện/đại lý phân phối" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question0" id="lbl_B_Section3_Question0_Answer2" for="B_Section3_Question0_Answer2"> Thị trường ngoài huyện, có ≥ 5 đại diện/đại lý phân phối</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question0" id="B_Section3_Question0_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d6d57c7f9046bc5e170a" data-answer-text="Thị trường quốc tế" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question0" id="lbl_B_Section3_Question0_Answer3" for="B_Section3_Question0_Answer3"> Thị trường quốc tế</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">5 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>4.2. Tổ chức phân phối  <a href="javascript:showHelp('4.2. T%E1%BB%95 ch%E1%BB%A9c ph%C3%A2n ph%E1%BB%91i')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('4.detail[1]','5f28d6d57c7f9046bc5e170b')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote4.detail[1]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11551','false','4.detail[1]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span>(Gồm: Tổ chức kinh doanh, phân phối sản phẩm)</span></i></div>
                                    <div id="BQuestion-1">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question1" id="B_Section3_Question1_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e170c" data-answer-text="Không có người chịu trách nhiệm quản lý phân phối" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question1" id="lbl_B_Section3_Question1_Answer0" for="B_Section3_Question1_Answer0"> Không có người chịu trách nhiệm quản lý phân phối</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question1" id="B_Section3_Question1_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e170d" data-answer-text="Có người chịu trách nhiệm quản lý phân phối" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question1" id="lbl_B_Section3_Question1_Answer1" for="B_Section3_Question1_Answer1"> Có người chịu trách nhiệm quản lý phân phối</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question1" id="B_Section3_Question1_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e170e" data-answer-text="Có bộ phận/phòng quản lý phân phối" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question1" id="lbl_B_Section3_Question1_Answer2" for="B_Section3_Question1_Answer2"> Có bộ phận/phòng quản lý phân phối</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question1" id="B_Section3_Question1_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d6d57c7f9046bc5e170f" data-answer-text="Có bộ phận/phòng quản lý phân phối, có ứng dụng công nghệ thông tin trong quản lý" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question1" id="lbl_B_Section3_Question1_Answer3" for="B_Section3_Question1_Answer3"> Có bộ phận/phòng quản lý phân phối, có ứng dụng công nghệ thông tin trong quản lý</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">5 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>4.3. Quảng bá sản phẩm  <a href="javascript:showHelp('4.3. Qu%E1%BA%A3ng b%C3%A1 s%E1%BA%A3n ph%E1%BA%A9m')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('4.detail[2]','5f28d6d57c7f9046bc5e1710')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote4.detail[2]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11551','false','4.detail[2]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="BQuestion-2">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question2" id="B_Section3_Question2_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e1711" data-answer-text="Không có hoạt động quảng bá" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question2" id="lbl_B_Section3_Question2_Answer0" for="B_Section3_Question2_Answer0"> Không có hoạt động quảng bá</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question2" id="B_Section3_Question2_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e1712" data-answer-text="Có một số hoạt động quảng bá" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question2" id="lbl_B_Section3_Question2_Answer1" for="B_Section3_Question2_Answer1"> Có một số hoạt động quảng bá</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question2" id="B_Section3_Question2_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e1713" data-answer-text="Có nhiều hoạt động quảng bá, có website của cơ sở, có tham gia hoạt động xúc tiến thương mại trong tỉnh" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question2" id="lbl_B_Section3_Question2_Answer2" for="B_Section3_Question2_Answer2"> Có nhiều hoạt động quảng bá, có website của cơ sở, có tham gia hoạt động xúc tiến thương mại trong tỉnh</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question2" id="B_Section3_Question2_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e1714" data-answer-text="Có nhiều hoạt động quảng bá, có website của cơ sở, có tham gia hoạt động xúc tiến thương mại ngoài tỉnh" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question2" id="lbl_B_Section3_Question2_Answer3" for="B_Section3_Question2_Answer3"> Có nhiều hoạt động quảng bá, có website của cơ sở, có tham gia hoạt động xúc tiến thương mại ngoài tỉnh</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section3_Question2" id="B_Section3_Question2_Answer4" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d6d57c7f9046bc5e1715" data-answer-text="Có nhiều hoạt động quảng bá, có website của cơ sở, có tham gia hoạt động xúc tiến thương mại ngoài tỉnh và quốc tế" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section3_Question2" id="lbl_B_Section3_Question2_Answer4" for="B_Section3_Question2_Answer4"> Có nhiều hoạt động quảng bá, có website của cơ sở, có tham gia hoạt động xúc tiến thương mại ngoài tỉnh và quốc tế</label>
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
                             
                              <span><b>5.1. Câu chuyện về sản phẩm  <a href="javascript:showHelp('5.1. C%C3%A2u chuy%E1%BB%87n v%E1%BB%81 s%E1%BA%A3n ph%E1%BA%A9m')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('5.detail[0]','5f28d6d57c7f9046bc5e1717')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote5.detail[0]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11562','false','5.detail[0]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="BQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question0" id="B_Section4_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e1718" data-answer-text="Không có câu chuyện (hoặc có nhưng không được tư liệu hóa)" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question0" id="lbl_B_Section4_Question0_Answer0" for="B_Section4_Question0_Answer0"> Không có câu chuyện (hoặc có nhưng không được tư liệu hóa)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question0" id="B_Section4_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e1719" data-answer-text="Có tài liệu giới thiệu về sản phẩm" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question0" id="lbl_B_Section4_Question0_Answer1" for="B_Section4_Question0_Answer1"> Có tài liệu giới thiệu về sản phẩm</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question0" id="B_Section4_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e171a" data-answer-text="Có câu chuyện được tư liệu hóa (có cốt truyện, nội dung cụ thể)" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question0" id="lbl_B_Section4_Question0_Answer2" for="B_Section4_Question0_Answer2"> Có câu chuyện được tư liệu hóa (có cốt truyện, nội dung cụ thể)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question0" id="B_Section4_Question0_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e171b" data-answer-text="Có câu chuyện được tư liệu hóa, trình bày trên nhãn/tờ rơi" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question0" id="lbl_B_Section4_Question0_Answer3" for="B_Section4_Question0_Answer3"> Có câu chuyện được tư liệu hóa, trình bày trên nhãn/tờ rơi</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question0" id="B_Section4_Question0_Answer4" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="4" data-answer-id="5f28d6d57c7f9046bc5e171c" data-answer-text="Có câu chuyện được tư liệu hóa, trình bày trên nhãn/tờ rơi và website" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question0" id="lbl_B_Section4_Question0_Answer4" for="B_Section4_Question0_Answer4"> Có câu chuyện được tư liệu hóa, trình bày trên nhãn/tờ rơi và website</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">4 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question0" id="B_Section4_Question0_Answer5" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d6d57c7f9046bc5e171d" data-answer-text="Có câu chuyện được tư liệu hóa, trình bày trên nhãn/tờ rơi, website (dưới dạng hình ảnh, clip,…)" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question0" id="lbl_B_Section4_Question0_Answer5" for="B_Section4_Question0_Answer5"> Có câu chuyện được tư liệu hóa, trình bày trên nhãn/tờ rơi, website (dưới dạng hình ảnh, clip,…)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">5 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>5.2. Trí tuệ/bản sắc địa phương  <a href="javascript:showHelp('5.2. Tr%C3%AD tu%E1%BB%87/b%E1%BA%A3n s%E1%BA%AFc %C4%91%E1%BB%8Ba ph%C6%B0%C6%A1ng')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('5.detail[1]','5f28d6d57c7f9046bc5e171e')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote5.detail[1]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11562','false','5.detail[1]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span>Chỉ áp dụng khi có câu chuyện, đánh giá nội dung câu chuyện:</span></i></div>
                                    <div id="BQuestion-1">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question1" id="B_Section4_Question1_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e171f" data-answer-text="Giống với câu chuyện sản phẩm ở nơi khác" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question1" id="lbl_B_Section4_Question1_Answer0" for="B_Section4_Question1_Answer0"> Giống với câu chuyện sản phẩm ở nơi khác</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question1" id="B_Section4_Question1_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e1720" data-answer-text="Tương đối giống câu chuyện sản phẩm ở nơi khác, có thay đổi một số yếu tố" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question1" id="lbl_B_Section4_Question1_Answer1" for="B_Section4_Question1_Answer1"> Tương đối giống câu chuyện sản phẩm ở nơi khác, có thay đổi một số yếu tố</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question1" id="B_Section4_Question1_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e1721" data-answer-text="Có câu chuyện riêng" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question1" id="lbl_B_Section4_Question1_Answer2" for="B_Section4_Question1_Answer2"> Có câu chuyện riêng</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question1" id="B_Section4_Question1_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e1722" data-answer-text="Có câu chuyện riêng, thể hiện trí tuệ/bản sắc địa phương" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question1" id="lbl_B_Section4_Question1_Answer3" for="B_Section4_Question1_Answer3"> Có câu chuyện riêng, thể hiện trí tuệ/bản sắc địa phương</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>5.3. Cấu trúc câu chuyện  <a href="javascript:showHelp('5.3. C%E1%BA%A5u tr%C3%BAc c%C3%A2u chuy%E1%BB%87n')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('5.detail[2]','5f28d6d57c7f9046bc5e1723')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote5.detail[2]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11562','false','5.detail[2]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span>Chỉ áp dụng khi có câu chuyện</span></i></div>
                                    <div id="BQuestion-2">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question2" id="B_Section4_Question2_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e1724" data-answer-text="Đơn giản" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_B_Section4_Question2" id="lbl_B_Section4_Question2_Answer0" for="B_Section4_Question2_Answer0"> Đơn giản</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="B_Section4_Question2" id="B_Section4_Question2_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e1725" data-answer-text="Có đầy đủ các yếu tố của câu chuyện sản phẩm" disabled="disabled">
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
                             
                              <span><b>6.1. Tạp chất lạ  <a href="javascript:showHelp('6.1. T%E1%BA%A1p ch%E1%BA%A5t l%E1%BA%A1')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('6.detail[0]','5f28d6d57c7f9046bc5e1727')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote6.detail[0]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11572','false','6.detail[0]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span>Ghi chú: Nếu bị 0 Điểm, sẽ không đánh giá các bước tiếp theo</span></i></div>
                                    <div id="CQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question0" id="C_Section5_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e1728" data-answer-text="Có các tạp chất không chấp nhận được như ruồi bọ, lông, len, cát sỏi,…" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question0" id="lbl_C_Section5_Question0_Answer0" for="C_Section5_Question0_Answer0"> Có các tạp chất không chấp nhận được như ruồi bọ, lông, len, cát sỏi,…</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question0" id="C_Section5_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e1729" data-answer-text="Có các tạp chất, chấp nhận được" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question0" id="lbl_C_Section5_Question0_Answer1" for="C_Section5_Question0_Answer1"> Có các tạp chất, chấp nhận được</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question0" id="C_Section5_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e172a" data-answer-text="Có rất ít tạp chất, chấp nhận được" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question0" id="lbl_C_Section5_Question0_Answer2" for="C_Section5_Question0_Answer2"> Có rất ít tạp chất, chấp nhận được</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question0" id="C_Section5_Question0_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e172b" data-answer-text="Sạch, không phát hiện tạp chất" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question0" id="lbl_C_Section5_Question0_Answer3" for="C_Section5_Question0_Answer3"> Sạch, không phát hiện tạp chất</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>6.2. Hình dạng, thể chất  <a href="javascript:showHelp('6.2. H%C3%ACnh d%E1%BA%A1ng, th%E1%BB%83 ch%E1%BA%A5t')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('6.detail[1]','5f28d6d57c7f9046bc5e172c')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote6.detail[1]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11572','false','6.detail[1]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="CQuestion-1">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question1" id="C_Section5_Question1_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e172d" data-answer-text="Kích thước/hình dạng không đồng đều" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question1" id="lbl_C_Section5_Question1_Answer0" for="C_Section5_Question1_Answer0"> Kích thước/hình dạng không đồng đều</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question1" id="C_Section5_Question1_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e172e" data-answer-text="Kích thước/hình dạng khá đồng đều (&gt; 60%)" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question1" id="lbl_C_Section5_Question1_Answer1" for="C_Section5_Question1_Answer1"> Kích thước/hình dạng khá đồng đều (&gt; 60%)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question1" id="C_Section5_Question1_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e172f" data-answer-text="Kích thước/hình dạng đồng đều (&gt;90%)" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question1" id="lbl_C_Section5_Question1_Answer2" for="C_Section5_Question1_Answer2"> Kích thước/hình dạng đồng đều (&gt;90%)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>6.3. Màu sắc  <a href="javascript:showHelp('6.3. M%C3%A0u s%E1%BA%AFc')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('6.detail[2]','5f28d6d57c7f9046bc5e1730')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote6.detail[2]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11572','false','6.detail[2]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="CQuestion-2">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question2" id="C_Section5_Question2_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e1731" data-answer-text="Không đều (hoặc đồng đều nhưng không phù hợp với đặc tính sản phẩm)" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question2" id="lbl_C_Section5_Question2_Answer0" for="C_Section5_Question2_Answer0"> Không đều (hoặc đồng đều nhưng không phù hợp với đặc tính sản phẩm)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question2" id="C_Section5_Question2_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e1732" data-answer-text="Không đều, chấp nhận được" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question2" id="lbl_C_Section5_Question2_Answer1" for="C_Section5_Question2_Answer1"> Không đều, chấp nhận được</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question2" id="C_Section5_Question2_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e1733" data-answer-text="Tương đối đồng đều, phù hợp với tính chất sản phẩm" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question2" id="lbl_C_Section5_Question2_Answer2" for="C_Section5_Question2_Answer2"> Tương đối đồng đều, phù hợp với tính chất sản phẩm</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question2" id="C_Section5_Question2_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e1734" data-answer-text="Đồng đều, phù hợp với tính chất sản phẩm" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question2" id="lbl_C_Section5_Question2_Answer3" for="C_Section5_Question2_Answer3"> Đồng đều, phù hợp với tính chất sản phẩm</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>6.4. Mùi   <a href="javascript:showHelp('6.4. M%C3%B9i ')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('6.detail[3]','5f28d6d57c7f9046bc5e1735')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote6.detail[3]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11572','false','6.detail[3]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="CQuestion-3">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question3" id="C_Section5_Question3_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e1736" data-answer-text="Không mong muốn" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question3" id="lbl_C_Section5_Question3_Answer0" for="C_Section5_Question3_Answer0"> Không mong muốn</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question3" id="C_Section5_Question3_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e1737" data-answer-text="Không phải là mùi của thành phần tạo nên (mùi của hương liệu)" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question3" id="lbl_C_Section5_Question3_Answer1" for="C_Section5_Question3_Answer1"> Không phải là mùi của thành phần tạo nên (mùi của hương liệu)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question3" id="C_Section5_Question3_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e1738" data-answer-text="Tự nhiên của thành phần" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question3" id="lbl_C_Section5_Question3_Answer2" for="C_Section5_Question3_Answer2"> Tự nhiên của thành phần</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question3" id="C_Section5_Question3_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d6d57c7f9046bc5e1739" data-answer-text="Tự nhiên của thành phần, phù hợp, hấp dẫn" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question3" id="lbl_C_Section5_Question3_Answer3" for="C_Section5_Question3_Answer3"> Tự nhiên của thành phần, phù hợp, hấp dẫn</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">5 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>6.5. Vị  <a href="javascript:showHelp('6.5. V%E1%BB%8B')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('6.detail[4]','5f28d6d57c7f9046bc5e173a')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote6.detail[4]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11572','false','6.detail[4]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="CQuestion-4">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question4" id="C_Section5_Question4_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e173b" data-answer-text="Vị khác thường" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question4" id="lbl_C_Section5_Question4_Answer0" for="C_Section5_Question4_Answer0"> Vị khác thường</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question4" id="C_Section5_Question4_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e173c" data-answer-text="Chấp nhận được" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question4" id="lbl_C_Section5_Question4_Answer1" for="C_Section5_Question4_Answer1"> Chấp nhận được</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question4" id="C_Section5_Question4_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e173d" data-answer-text="Phù hợp với sản phẩm" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question4" id="lbl_C_Section5_Question4_Answer2" for="C_Section5_Question4_Answer2"> Phù hợp với sản phẩm</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question4" id="C_Section5_Question4_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d6d57c7f9046bc5e173e" data-answer-text="Phù hợp, hấp dẫn" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question4" id="lbl_C_Section5_Question4_Answer3" for="C_Section5_Question4_Answer3"> Phù hợp, hấp dẫn</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">5 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>6.6. Kết cấu/cách sắp đặt  <a href="javascript:showHelp('6.6. K%E1%BA%BFt c%E1%BA%A5u/c%C3%A1ch s%E1%BA%AFp %C4%91%E1%BA%B7t')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('6.detail[5]','5f28d6d57c7f9046bc5e173f')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote6.detail[5]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11572','false','6.detail[5]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span></span></i></div>
                                    <div id="CQuestion-5">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question5" id="C_Section5_Question5_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e1740" data-answer-text="Nghèo nàn" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question5" id="lbl_C_Section5_Question5_Answer0" for="C_Section5_Question5_Answer0"> Nghèo nàn</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question5" id="C_Section5_Question5_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e1741" data-answer-text="Trung bình" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question5" id="lbl_C_Section5_Question5_Answer1" for="C_Section5_Question5_Answer1"> Trung bình</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section5_Question5" id="C_Section5_Question5_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e1742" data-answer-text="Tốt" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section5_Question5" id="lbl_C_Section5_Question5_Answer2" for="C_Section5_Question5_Answer2"> Tốt</label>
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
                                                                    <span class="SubHeading"> TÍNH ĐỘC ĐÁO  <a href="javascript:showHelp(' T%C3%8DNH %C4%90%E1%BB%98C %C4%90%C3%81O')"><i class="mdi mdi-help-circle"></i></a> </span>
                                                            </div>
                                                    </label>
                                                    
                                                    
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                             <div><i><p style="max-width:96%">(Chất lượng: Có nét riêng, khác biệt, không lẫn với sản phẩm khác)</p></i><a class="iconrole" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('7.detail[0]','5f28d6d57c7f9046bc5e1744')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c1158f','false','7.detail[0]')"> <div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"><div class="infoNote" id="infoNote7.detail[0]" style="display:none"></div></div> </a><div>
                                    <div id="CQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section6_Question0" id="C_Section6_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e1745" data-answer-text="Trung bình" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section6_Question0" id="lbl_C_Section6_Question0_Answer0" for="C_Section6_Question0_Answer0"> Trung bình</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section6_Question0" id="C_Section6_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e1746" data-answer-text="Tương đối độc đáo" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section6_Question0" id="lbl_C_Section6_Question0_Answer1" for="C_Section6_Question0_Answer1"> Tương đối độc đáo</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section6_Question0" id="C_Section6_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e1747" data-answer-text="Độc đáo" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section6_Question0" id="lbl_C_Section6_Question0_Answer2" for="C_Section6_Question0_Answer2"> Độc đáo</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section6_Question0" id="C_Section6_Question0_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d6d57c7f9046bc5e1748" data-answer-text="Rất độc đáo" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section6_Question0" id="lbl_C_Section6_Question0_Answer3" for="C_Section6_Question0_Answer3"> Rất độc đáo</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">5 điểm</span>
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
                                                                    <span class="SubHeading"> CÔNG BỐ CHẤT LƯỢNG SẢN PHẨM, KIỂM TRA ĐỊNH KỲ </span>
                                                            </div>
                                                    </label>
                                                    
                                                    
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>8.1. Hồ sơ công bố chất lượng sản phẩm  <a href="javascript:showHelp('8.1. H%E1%BB%93 s%C6%A1 c%C3%B4ng b%E1%BB%91 ch%E1%BA%A5t l%C6%B0%E1%BB%A3ng s%E1%BA%A3n ph%E1%BA%A9m')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('8.detail[0]','5f28d6d57c7f9046bc5e174a')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote8.detail[0]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11595','false','8.detail[0]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span> Ghi chú: Bản Tiêu chuẩn sản phẩm cần có phiếu kiểm nghiệm các chỉ tiêu ATTP</span></i></div>
                                    <div id="CQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section7_Question0" id="C_Section7_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e174b" data-answer-text="Không có bản tự công bố (hoặc có nhưng không đúng)" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section7_Question0" id="lbl_C_Section7_Question0_Answer0" for="C_Section7_Question0_Answer0"> Không có bản tự công bố (hoặc có nhưng không đúng)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section7_Question0" id="C_Section7_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e174c" data-answer-text="Có bản tự công bố nhưng thiếu" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section7_Question0" id="lbl_C_Section7_Question0_Answer1" for="C_Section7_Question0_Answer1"> Có bản tự công bố nhưng thiếu</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section7_Question0" id="C_Section7_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e174d" data-answer-text="Có bản tiêu chuẩn sản phẩm" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section7_Question0" id="lbl_C_Section7_Question0_Answer2" for="C_Section7_Question0_Answer2"> Có bản tiêu chuẩn sản phẩm</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section7_Question0" id="C_Section7_Question0_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e174e" data-answer-text="Có bản tự công bố (hoặc tương đương), có tiêu chuẩn sản phẩm" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section7_Question0" id="lbl_C_Section7_Question0_Answer3" for="C_Section7_Question0_Answer3"> Có bản tự công bố (hoặc tương đương), có tiêu chuẩn sản phẩm</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                              <span><b>8.2. Kiểm tra định kỳ các chỉ tiêu ATTP  <a href="javascript:showHelp('8.2. Ki%E1%BB%83m tra %C4%91%E1%BB%8Bnh k%E1%BB%B3 c%C3%A1c ch%E1%BB%89 ti%C3%AAu ATTP')"><i class="mdi mdi-help-circle"></i></a>  </b></span><a class="iconrole alo2" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('8.detail[1]','5f28d6d57c7f9046bc5e174f')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"><div class="infoNote" id="infoNote8.detail[1]" style="display:none"></div></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c11595','false','8.detail[1]')"><div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a><div><i> <span>Phiếu kiểm nghiệm định kỳ các chỉ tiêu ATTP</span></i></div>
                                    <div id="CQuestion-1">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section7_Question1" id="C_Section7_Question1_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e1750" data-answer-text="Có, nhưng không đạt" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section7_Question1" id="lbl_C_Section7_Question1_Answer0" for="C_Section7_Question1_Answer0"> Có, nhưng không đạt</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section7_Question1" id="C_Section7_Question1_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e1751" data-answer-text="Có, đạt nhưng không đủ" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section7_Question1" id="lbl_C_Section7_Question1_Answer1" for="C_Section7_Question1_Answer1"> Có, đạt nhưng không đủ</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section7_Question1" id="C_Section7_Question1_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e1752" data-answer-text="Có, đạt đầy đủ(vi sinh, kim loại nặng, phụ gia, hóa chất không mong muốn,…) theo quy định" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section7_Question1" id="lbl_C_Section7_Question1_Answer2" for="C_Section7_Question1_Answer2"> Có, đạt đầy đủ(vi sinh, kim loại nặng, phụ gia, hóa chất không mong muốn,…) theo quy định</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                                            </div>
                                    </form>
                                    
                                    <form class="form-material" id="C_Section8">
                                            <div>
                                                    <label for="productName">
                                                            <div style="display:flex">
                                                                    <div class="Rectangle"></div>
                                                                    <span class="SubHeading"> ĐẢM BẢO CHẤT LƯỢNG SẢN PHẨM  <a href="javascript:showHelp(' %C4%90%E1%BA%A2M B%E1%BA%A2O CH%E1%BA%A4T L%C6%AF%E1%BB%A2NG S%E1%BA%A2N PH%E1%BA%A8M')"><i class="mdi mdi-help-circle"></i></a> </span>
                                                            </div>
                                                    </label>
                                                    
                                                    
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                             <div><i><p style="max-width:96%">Ghi chú: Không đánh giá các bước tiếp theo nếu Chứng nhận đủ điều kiện ATTP (hoặc tương đương) không phù hợp theo quy định</p></i><a class="iconrole" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('9.detail[0]','5f28d6d57c7f9046bc5e1754')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c1159f','false','9.detail[0]')"> <div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"><div class="infoNote" id="infoNote9.detail[0]" style="display:none"></div></div> </a><div>
                                    <div id="CQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section8_Question0" id="C_Section8_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="0" data-answer-id="5f28d6d57c7f9046bc5e1755" data-answer-text="Không có hoạt động kiểm soát chất lượng sản phẩm" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section8_Question0" id="lbl_C_Section8_Question0_Answer0" for="C_Section8_Question0_Answer0"> Không có hoạt động kiểm soát chất lượng sản phẩm</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">0 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section8_Question0" id="C_Section8_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e1756" data-answer-text="Có kế hoạch kiểm soát chất lượng sản phẩm" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section8_Question0" id="lbl_C_Section8_Question0_Answer1" for="C_Section8_Question0_Answer1"> Có kế hoạch kiểm soát chất lượng sản phẩm</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section8_Question0" id="C_Section8_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="2" data-answer-id="5f28d6d57c7f9046bc5e1757" data-answer-text="Có ghi hồ sơ lô sản xuất" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section8_Question0" id="lbl_C_Section8_Question0_Answer2" for="C_Section8_Question0_Answer2"> Có ghi hồ sơ lô sản xuất</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">2 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section8_Question0" id="C_Section8_Question0_Answer3" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e1758" data-answer-text="Có kế hoạch kiểm soát chất lượng sản phẩm, có ghi hồ sơ lô sản xuất" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section8_Question0" id="lbl_C_Section8_Question0_Answer3" for="C_Section8_Question0_Answer3"> Có kế hoạch kiểm soát chất lượng sản phẩm, có ghi hồ sơ lô sản xuất</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section8_Question0" id="C_Section8_Question0_Answer4" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="4" data-answer-id="5f28d6d57c7f9046bc5e1759" data-answer-text="Có chứng nhận quản lý chất lượng tiên tiến (ISO/GMP/HACCP…)" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section8_Question0" id="lbl_C_Section8_Question0_Answer4" for="C_Section8_Question0_Answer4"> Có chứng nhận quản lý chất lượng tiên tiến (ISO/GMP/HACCP…)</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">4 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section8_Question0" id="C_Section8_Question0_Answer5" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d6d57c7f9046bc5e175a" data-answer-text="Có chứng nhận đủ điều kiện ATTP cho xuất khẩu và các thủ tục pháp lý khác theo yêu cầu của thị trường đích" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section8_Question0" id="lbl_C_Section8_Question0_Answer5" for="C_Section8_Question0_Answer5"> Có chứng nhận đủ điều kiện ATTP cho xuất khẩu và các thủ tục pháp lý khác theo yêu cầu của thị trường đích</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">5 điểm</span>
                                                                            <br>
                                                            </div>
                                    </div>
                            </div>
                                            </div>
                                    
                                    </div></div></form>
                                    <form class="form-material" id="C_Section9">
                                            <div>
                                                    <label for="productName">
                                                            <div style="display:flex">
                                                                    <div class="Rectangle"></div>
                                                                    <span class="SubHeading"> CƠ HỘI THỊ TRƯỜNG TOÀN CẦU  <a href="javascript:showHelp(' C%C6%A0 H%E1%BB%98I TH%E1%BB%8A TR%C6%AF%E1%BB%9CNG TO%C3%80N C%E1%BA%A6U')"><i class="mdi mdi-help-circle"></i></a> </span>
                                                            </div>
                                                    </label>
                                                    
                                                    
                             <div style="width:100%;position: relative;display: inline-table;">
                             
                             <div><i><p style="max-width:96%"></p></i><a class="iconrole" href="#" data-toggle="modal" data-target="#comment" onclick="openCommnent('10.detail[0]','5f28d6d57c7f9046bc5e175c')"><div class="divComment"> <img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/fi-xnsuxx-comment-square-solid.png" style="margin-left: 10px;margin-top: 6px;" width="16px" height="16px"></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(0,'621457eeb221160f88c115a7','false','10.detail[0]')"> <div class="divocop"><img src="OCOP%20|%20Ho%CC%82%CC%80%20so%CC%9B%20sa%CC%89n%20pha%CC%82%CC%89m_files/blacsk.png" class="Black" style="margin-left: 10px;margin-top: 6px;"><div class="infoNote" id="infoNote10.detail[0]" style="display:none"></div></div> </a><div>
                                    <div id="CQuestion-0">
                                            
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section9_Question0" id="C_Section9_Question0_Answer0" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="1" data-answer-id="5f28d6d57c7f9046bc5e175d" data-answer-text="Có thể xuất khẩu đến thị trường khu vực" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section9_Question0" id="lbl_C_Section9_Question0_Answer0" for="C_Section9_Question0_Answer0"> Có thể xuất khẩu đến thị trường khu vực</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">1 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section9_Question0" id="C_Section9_Question0_Answer1" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="3" data-answer-id="5f28d6d57c7f9046bc5e175e" data-answer-text="Có thể xuất khẩu các thị trường ngoài khu vực" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section9_Question0" id="lbl_C_Section9_Question0_Answer1" for="C_Section9_Question0_Answer1"> Có thể xuất khẩu các thị trường ngoài khu vực</label>
                                                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">3 điểm</span>
                                                                            <br>
                                                            </div>
                                                            <div style="display: flex;">
                                                                            <input type="checkbox" class="radio" name="C_Section9_Question0" id="C_Section9_Question0_Answer2" style="margin-top: 4px;
                                                                                    margin-right: 6px;" value="5" data-answer-id="5f28d6d57c7f9046bc5e175f" data-answer-text="Có thể xuất khẩu đến các thị trường có tiêu chuẩn cao (Mỹ, Nhật, EU…)" disabled="disabled">
                                                                            <label style="width: 80%;color:#212529;" name="lbl_C_Section9_Question0" id="lbl_C_Section9_Question0_Answer2" for="C_Section9_Question0_Answer2"> Có thể xuất khẩu đến các thị trường có tiêu chuẩn cao (Mỹ, Nhật, EU…)</label>
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
                              <span class="Part">Phần A</span> <span class="Part" style="float: right;">/35đ</span><span id="A-totalPoint" class="Part" style="float: right;">3</span><br>
                            </div>
                            <div style="margin-bottom: 16px;">
                              <span class="Part">Phần B</span>
                              <span class="Part" style="float: right;">/25đ</span>
                              <span id="B-totalPoint" class="Part" style="float: right;">0</span><br>
                            </div>
                            <div style="margin-bottom: 16px;">
                              <span class="Part">Phần C</span>
                              <span class="Part" style="float: right;">/40đ</span>
                              <span id="C-totalPoint" class="Part" style="float: right;">0</span><br>
                            </div>
                            <div style="margin-bottom: 16px;    width: 100%;">
                              <span class="Part">Tổng điểm</span>
                              <span class="Part" style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">đ</span>
                              <span id="totalPoint" class="Part" style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">3</span><br>
                            </div>
                            <div style="margin-bottom: 16px;    width: 100%;">
                              <span class="Part">Xếp hạng</span> <span id="rankStar" class="Part" style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">1 sao</span><br>
                            </div>
                          </div>
                          <div class="col-12">
                            <a id="proofBtnMobile" href="https://app.sohoaocop.com/treeProof?productInfoId=621454e2b221160f88c11472&amp;productSetId=5e4f86607a80891424175fc9" target="_blank" style="color: #fd9600;"><label>Xem mục lục
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
                              <span id="A-totalPointmobile" class="Part" style="float: right;">3</span><br>
                            </div>
                            <div style="margin-bottom: 16px;">
                              <span class="Part">Phần B</span>
                              <span class="Part" style="float: right;">/25đ</span>
                              <span id="B-totalPointmobile" class="Part" style="float: right;">0</span><br>
                            </div>
                            <div style="margin-bottom: 16px;">
                              <span class="Part">Phần C</span>
                              <span class="Part" style="float: right;">/40đ</span>
                              <span id="C-totalPointmobile" class="Part" style="float: right;">0</span><br>
                            </div>
                            <div style="margin-bottom: 16px;    width: 100%;">
                              <span class="Part">Tổng điểm</span>
                              <span class="Part" style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">đ</span>
                              <span id="totalPointmobile" class="Part" style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">3</span><br>
                            </div>
                            <div style="margin-bottom: 16px;    width: 100%;">
                              <span class="Part">Xếp hạng</span> <span id="rankStarmobile" class="Part" style="float: right;font-size: 20px;color: #049252;font-weight: bold!important;">1 sao</span><br>
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
      <div class="right-sidebar ps ps--theme_default" data-ps-id="a54dcf2b-efc5-4a87-954a-a8d2e600c8e7">
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