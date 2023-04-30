@extends('master')
@section('content')
<link rel="stylesheet" href="{{ asset('css/evaluationStyle.css') }}">
<link href="{{ asset('css/c3.css') }}" rel="stylesheet">
<style>
    @media print {
        .left-sidebar{
          display: none;
        }
      }

    .Rectanglevn {
      width: 4px;
      height: 12px;
      border-radius: 1px;
      background-color: #fd9600;
      margin-top: 3px;
      margin-right: 12px;
    }

    .SubHeadingvn {
      width: 100%;
      height: 20px;
      font-family: 'Quicksand', sans-serif;
      font-size: 16px;
      font-weight: bold !important;
      font-stretch: normal;
      font-style: normal;
      line-height: 1.33;
      letter-spacing: normal;
      color: #151c30;
    }

    .dropzone.dz-clickable .dz-message {
      padding: 0;
      margin: 4px;
      margin-top: 0px;
    }

    .dropzone .dz-preview .dz-image img {
      width: 100% !important;
    }

    /* .dropzone.dz-started .dz-message{
      display: block!import;
    } */
    .dropzone.dz-clickable {
      max-height: 426px;
      /* overflow: scroll; */
    }

    .dropzone {
      min-height: auto;
      border-style: dotted;
      border-radius: 5px;
    }

    .dropzone.dz-clickable {
      height: 130px;
    }

    .dropzone .dz-preview .dz-image {
      width: 100px;
      margin-top: -26px;
      height: 100px;
    }

    .Note-Copy {
      width: 385px;
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
      margin-bottom: 29px;
    }

    .sub-title {
      color: #6d7182;
      font-family: 'Quicksand', sans-serif;
      font-size: 15px;
      font-weight: normal;
      font-stretch: normal;
      font-style: normal;
      line-height: 1.33;
      letter-spacing: normal;
      text-align: center;
    }

    .inline { 
      display: inline-block; 
      margin:10px;
    }

    .close-button {
      position: absolute;
      top: 1px;
      right: 24px;
    }
    .box_text{
      padding: 3px 10px;
      line-height: 13px;
      color: #fff;
      /* font-weight: 400; */
      border-radius: .25rem;
      font-size: 80%;
      background-color: #039252;
      margin-top: 10px;
    }
  </style>
<div class="page-wrapper" style="background-color: white; min-height: 954px;">
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
          <span class="textOcop" id="setProduct">Bộ sản phẩm: Rau, củ, quả, hạt tươi</span><br>
          <span style="  font-size: 15px;
                  font-family: sans-serif;
                  font-weight: 600;
                  color: #666666;" id="product">Sản phẩm: Trái sầu riêng cấp đông</span><br>
          <span class="textOcop" id="idproduct">Mã sản phẩm: 83-832-28882-2-2022</span><br>
          <span class="textOcop" id="entity">Chủ thể: Công ty TNHH XNK Trái Cây Chánh Thu</span><br>
          <span class="textOcop" id="adressentity">Địa chỉ: Xã Hòa Nghĩa - Huyện Chợ Lách - Bến Tre</span><br>
          <div style="margin-top: 13px;">
            <span class=" box_text" id="statusEvalue">Kết quả chấm cấp Tỉnh</span>
          </div>
          </div>
         
      </div>

      <div style="background-color: white;;
        display: flex;
        padding: 17px;padding-left: 0px;">
        <div class="Rectanglevn">
        </div>
        <span class="SubHeadingvn">
          KẾT QUẢ ĐÁNH GIÁ
        </span>
      </div>

      <div id="resultChart">

      </div>

      <div class="table-responsive mt-3">
        <table id="resultTable" class="table" style="border: none; border-collapse: collapse;" cellspacing="1">
            <thead>
                <tr>
                    <th class="text-center"><b>Điểm</b></th>
                    <th class="text-center"><b>Kết quả</b></th>
                </tr>
            </thead>
            <tbody>

            
      <tr>
          <td class="text-center"><b>Điểm trung bình phần A</b></td>
          <td class="text-center">31.00</td>
          <td class="text-center"></td>
      </tr>
      <tr>
          <td class="text-center"><b>Điểm trung bình phần B</b></td>
          <td class="text-center">24.00</td>
          <td class="text-center"></td>
      </tr>
      <tr>
          <td class="text-center"><b>Điểm trung bình phần C</b></td>
          <td class="text-center">38.00</td>
          <td class="text-center"></td>
      </tr>
      <tr>
          <td class="text-center"><b>Tổng điểm</b></td>
          <td class="text-center"><b>93.00</b></td>
          <td class="text-center"></td>
      </tr>
  </tbody>
        </table>
    </div>

    <hr>
    <div id="rankArea" class="text-center text-success" style=""><h5>Xếp hạng: 5 sao</h5></div>

    <div class="col-12">
      <div style="background-color: white;;
        display: flex;
        padding: 17px;padding-left: 0px;">
        <div class="Rectanglevn">
        </div>
        <span class="SubHeadingvn">
          VĂN BẢN ĐÍNH KÈM
        </span>
      </div>
      <div class="row pt-3" style="overflow: auto;" id="ImgModal-info">
          <div class="col-2">          
          <div class="card mb-4 shadow-sm">
                  <a href="#">
                   </a><a target="_blank" href="https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646814833949_7814961.C%C3%B4ngv%C4%83ns%E1%BB%91317UBND-KTng%C3%A0y17012022c%E1%BB%A7a%E1%BB%A6ybannh%C3%A2nd%C3%A2nt%E1%BB%89nhv%E1%BB%81vi%E1%BB%87c%C4%91%E1%BB%81xu%E1%BA%A5t%C4%91%C3%A1nhgi%C3%A1,ph%C3%A2nh%E1%BA%A1ngs%E1%BA%A3nph%E1%BA%A9mOCOPc%E1%BA%A5pqu%E1%BB%91cgia.pdf"><img src="OCOP%20|%20Ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/pdf.jpg" id="1. Công văn số 317UBND-KT ngày 17012022 của Ủy ban nhân dân tỉnh về việc đề xuất đánh giá, phân hạng sản phẩm OCOP cấp quốc gia.pdf1646814834491_988532" class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> 
                  
                  
                      <div style="font-size: 14px;font-weight: 500; margin: 10px;max-height: 79px;
                      overflow: auto;color: #767989;text-align: center;">
                      V/v đề xuất đánh giá, phân hạng
sản phẩm OCOP cấp quốc gia 
                      </div>
                  <div class="card-footer bg-white">
                  <div class="row d-flex align-items-center">
                          <div class="col" align="right">
                          <div class="ml-auto bd-highlight">
                          </div>
                          </div>
                  </div>
                  </div>
          </div>
          </div>
      
          <div class="col-2">          
          <div class="card mb-4 shadow-sm">
                  <a href="#">
                   </a><a target="_blank" href="https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646814848851_1429022.Bi%C3%AAnb%E1%BA%A3ns%E1%BB%914057BB-SNNng%C3%A0y22112021c%E1%BB%A7aS%E1%BB%9FN%C3%B4ngnghi%E1%BB%87pv%C3%A0Ph%C3%A1ttri%E1%BB%83nn%C3%B4ngth%C3%B4nv%E1%BB%81vi%E1%BB%87ch%E1%BB%8Dp%C4%91%C3%A1nhgi%C3%A1,ph%C3%A2nh%E1%BA%A1ngs%E1%BA%A3nph%E1%BA%A9mthu%E1%BB%99cCh%C6%B0%C6%A1ngtr%C3%ACnhOCOP.pdf"><img src="OCOP%20|%20Ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/pdf.jpg" id="2. Biên bản số 4057BB-SNN ngày 22112021 của Sở Nông nghiệp và Phát triển nông thôn về việc họp đánh giá, phân hạng sản phẩm thuộc Chương trình OCOP.pdf1646814849593_981359" class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> 
                  
                  
                      <div style="font-size: 14px;font-weight: 500; margin: 10px;max-height: 79px;
                      overflow: auto;color: #767989;text-align: center;">
                      Biên bản họp đánh giá, phân hạng sản phẩm OCOP tỉnh Bến Tre đợt 2 năm 2021 
                      </div>
                  <div class="card-footer bg-white">
                  <div class="row d-flex align-items-center">
                          <div class="col" align="right">
                          <div class="ml-auto bd-highlight">
                          </div>
                          </div>
                  </div>
                  </div>
          </div>
          </div>
      
          <div class="col-2">          
          <div class="card mb-4 shadow-sm">
                  <a href="#">
                   </a><a target="_blank" href="https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646814891090_1616593.Quy%E1%BA%BFt%C4%91%E1%BB%8Bnhs%E1%BB%912751Q%C4%90-UBNDng%C3%A0y24112021c%E1%BB%A7a%E1%BB%A6ybannh%C3%A2nd%C3%A2nt%E1%BB%89nhv%E1%BB%81vi%E1%BB%87cph%C3%AAduy%E1%BB%87tk%E1%BA%BFtqu%E1%BA%A3%C4%91%C3%A1nhgi%C3%A1,ph%C3%A2nh%E1%BA%A1ngs%E1%BA%A3nph%E1%BA%A9mOCOPt%E1%BB%89nhB%E1%BA%BFnTren%C4%83m20.pdf"><img src="OCOP%20|%20Ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/pdf.jpg" id="3. Quyết định số 2751QĐ-UBND ngày 24112021 của Ủy ban nhân dân tỉnh về việc phê duyệt kết quả đánh giá, phân hạng sản phẩm OCOP tỉnh Bến Tre năm 20.pdf1646814891589_900054" class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> 
                  
                  
                      <div style="font-size: 14px;font-weight: 500; margin: 10px;max-height: 79px;
                      overflow: auto;color: #767989;text-align: center;">
                      Về việc phê duyệt kết quả đánh giá, phân hạng sản phẩm
OCOP tỉnh Bến Tre năm 2021 (đợt 2) 
                      </div>
                  <div class="card-footer bg-white">
                  <div class="row d-flex align-items-center">
                          <div class="col" align="right">
                          <div class="ml-auto bd-highlight">
                          </div>
                          </div>
                  </div>
                  </div>
          </div>
          </div>
      </div>
    </div>

    <div class="text-center">
      <div style="display: flex;" id="listButton">
        
      </div>
    </div>

    <div class="modal" id="modalInputScore" tabindex="-1" role="dialog" style="overflow-y: auto">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top: 9%;  background-color: #ffffff;">
          <div class="modal-body" style="padding: 0 24px;">
            <div style="display: flex;">
              <label style="text-align: center;font-size: 20px;width: 100%;padding: 5px;margin-top: 11px;" class="titlesinfo">Bước 1:</label>

              <a href="#" style="    font-size: 22px;color: #7e7171;font-weight: 600;margin-top: 9px;" data-dismiss="modal" aria-label="Close">x</a>
            </div>
            <p style="text-align: center; font-size: 18px;">Thêm các văn bản đính kèm</p>
            <p class="sub-title" style="text-align: center;">Vui lòng đính kèm các văn bản, quyết định, biên bản, báo cáo,...về kết quả đánh giá cho hồ sơ này.</p>
            
            <div class="rowclickImg" id="upload">
              <form method="post" action="#" enctype="multipart/form-data" id="DropzoneNew" style="width:100%">
                <div id="load" style="text-align: left;font-size: 14px;font-weight: 600;color: #ff847b;">
                </div>
                <div class="dropzone dz-clickable" id="dropzoneMytwo">
                  <div class="dropzone-previews">
                  </div>
                <div class="dz-default dz-message"><span><span style="font-weight: 600;font-family: sans-serif; color: #039252"><i class="fas fa-cloud-upload-alt fa-5x"></i><br> Chọn file</span><i class="fa fa-folders"></i></span></div></div>
                <div id="listImgDropzone" class="row" style="margin-top: 9px;">
                </div>
                <div style="margin-top: 14px;" id="descriptionFile">
                  <label>Mô tả file</label>
                  <textarea class="form-control" rows="5" placeholder="Vui lòng nhập mô tả cho yêu cầu minh chứng bạn đã nộp tại đây" id="descriptionImg"></textarea>
                </div>
              </form>
              
            </div>
            <div>
              <div class="row pt-3" style="overflow: auto;" id="ImgModal-info-modal">
              
                      <div class="col-6" id="1646814834491_988532">          
                      <div class="card mb-4 shadow-sm">
                              <a href="#">
                               </a><a target="_blank" href="https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646814833949_7814961.C%C3%B4ngv%C4%83ns%E1%BB%91317UBND-KTng%C3%A0y17012022c%E1%BB%A7a%E1%BB%A6ybannh%C3%A2nd%C3%A2nt%E1%BB%89nhv%E1%BB%81vi%E1%BB%87c%C4%91%E1%BB%81xu%E1%BA%A5t%C4%91%C3%A1nhgi%C3%A1,ph%C3%A2nh%E1%BA%A1ngs%E1%BA%A3nph%E1%BA%A9mOCOPc%E1%BA%A5pqu%E1%BB%91cgia.pdf"><img src="OCOP%20|%20Ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/pdf.jpg" id="1. Công văn số 317UBND-KT ngày 17012022 của Ủy ban nhân dân tỉnh về việc đề xuất đánh giá, phân hạng sản phẩm OCOP cấp quốc gia.pdf1646814834491_988532" class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> 
                              
                              
                                  <div style="font-size: 14px;font-weight: 500; margin: 10px;max-height: 79px;
                                  overflow: auto;color: #767989;text-align: center;">
                                  V/v đề xuất đánh giá, phân hạng
sản phẩm OCOP cấp quốc gia 
                                  </div>
                              <div class="card-footer bg-white">
                              <div class="row d-flex align-items-center">
                                      <div class="col" align="right">
                                      <div class="ml-auto bd-highlight">
                                      </div>
                                      </div>
                              </div>
                              <div class="row d-flex justify-content-between">
                                  <div class="">
                                  <!-- <button class="btn btn-success onclick="editImgDropzone('1646814834491_988532')">Sửa</button> -->
                                  </div> 
          
                                  <textarea class="d-none" id="editDescritionFile-1646814834491_988532">V/v đề xuất đánh giá, phân hạng
sản phẩm OCOP cấp quốc gia</textarea>
                                  
                                  <div class="">
                                      <button class="btn btn-danger" onclick="deleteimgDropzone('1646814834491_988532')">Xóa</button>
                                  </div> 
                              </div>
                              </div>
                      </div>
                      </div>
                  
                      <div class="col-6" id="1646814849593_981359">          
                      <div class="card mb-4 shadow-sm">
                              <a href="#">
                               </a><a target="_blank" href="https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646814848851_1429022.Bi%C3%AAnb%E1%BA%A3ns%E1%BB%914057BB-SNNng%C3%A0y22112021c%E1%BB%A7aS%E1%BB%9FN%C3%B4ngnghi%E1%BB%87pv%C3%A0Ph%C3%A1ttri%E1%BB%83nn%C3%B4ngth%C3%B4nv%E1%BB%81vi%E1%BB%87ch%E1%BB%8Dp%C4%91%C3%A1nhgi%C3%A1,ph%C3%A2nh%E1%BA%A1ngs%E1%BA%A3nph%E1%BA%A9mthu%E1%BB%99cCh%C6%B0%C6%A1ngtr%C3%ACnhOCOP.pdf"><img src="OCOP%20|%20Ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/pdf.jpg" id="2. Biên bản số 4057BB-SNN ngày 22112021 của Sở Nông nghiệp và Phát triển nông thôn về việc họp đánh giá, phân hạng sản phẩm thuộc Chương trình OCOP.pdf1646814849593_981359" class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> 
                              
                              
                                  <div style="font-size: 14px;font-weight: 500; margin: 10px;max-height: 79px;
                                  overflow: auto;color: #767989;text-align: center;">
                                  Biên bản họp đánh giá, phân hạng sản phẩm OCOP tỉnh Bến Tre đợt 2 năm 2021 
                                  </div>
                              <div class="card-footer bg-white">
                              <div class="row d-flex align-items-center">
                                      <div class="col" align="right">
                                      <div class="ml-auto bd-highlight">
                                      </div>
                                      </div>
                              </div>
                              <div class="row d-flex justify-content-between">
                                  <div class="">
                                  <!-- <button class="btn btn-success onclick="editImgDropzone('1646814849593_981359')">Sửa</button> -->
                                  </div> 
          
                                  <textarea class="d-none" id="editDescritionFile-1646814849593_981359">Biên bản họp đánh giá, phân hạng sản phẩm OCOP tỉnh Bến Tre đợt 2 năm 2021</textarea>
                                  
                                  <div class="">
                                      <button class="btn btn-danger" onclick="deleteimgDropzone('1646814849593_981359')">Xóa</button>
                                  </div> 
                              </div>
                              </div>
                      </div>
                      </div>
                  
                      <div class="col-6" id="1646814891589_900054">          
                      <div class="card mb-4 shadow-sm">
                              <a href="#">
                               </a><a target="_blank" href="https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/1646814891090_1616593.Quy%E1%BA%BFt%C4%91%E1%BB%8Bnhs%E1%BB%912751Q%C4%90-UBNDng%C3%A0y24112021c%E1%BB%A7a%E1%BB%A6ybannh%C3%A2nd%C3%A2nt%E1%BB%89nhv%E1%BB%81vi%E1%BB%87cph%C3%AAduy%E1%BB%87tk%E1%BA%BFtqu%E1%BA%A3%C4%91%C3%A1nhgi%C3%A1,ph%C3%A2nh%E1%BA%A1ngs%E1%BA%A3nph%E1%BA%A9mOCOPt%E1%BB%89nhB%E1%BA%BFnTren%C4%83m20.pdf"><img src="OCOP%20|%20Ke%CC%82%CC%81t%20qua%CC%89%20cha%CC%82%CC%81m_files/pdf.jpg" id="3. Quyết định số 2751QĐ-UBND ngày 24112021 của Ủy ban nhân dân tỉnh về việc phê duyệt kết quả đánh giá, phân hạng sản phẩm OCOP tỉnh Bến Tre năm 20.pdf1646814891589_900054" class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> 
                              
                              
                                  <div style="font-size: 14px;font-weight: 500; margin: 10px;max-height: 79px;
                                  overflow: auto;color: #767989;text-align: center;">
                                  Về việc phê duyệt kết quả đánh giá, phân hạng sản phẩm
OCOP tỉnh Bến Tre năm 2021 (đợt 2) 
                                  </div>
                              <div class="card-footer bg-white">
                              <div class="row d-flex align-items-center">
                                      <div class="col" align="right">
                                      <div class="ml-auto bd-highlight">
                                      </div>
                                      </div>
                              </div>
                              <div class="row d-flex justify-content-between">
                                  <div class="">
                                  <!-- <button class="btn btn-success onclick="editImgDropzone('1646814891589_900054')">Sửa</button> -->
                                  </div> 
          
                                  <textarea class="d-none" id="editDescritionFile-1646814891589_900054">Về việc phê duyệt kết quả đánh giá, phân hạng sản phẩm
OCOP tỉnh Bến Tre năm 2021 (đợt 2)</textarea>
                                  
                                  <div class="">
                                      <button class="btn btn-danger" onclick="deleteimgDropzone('1646814891589_900054')">Xóa</button>
                                  </div> 
                              </div>
                              </div>
                      </div>
                      </div>
                  </div>
              <div class="row " style="overflow: auto;" id="DocModal-info">
              </div>
            </div>
            <div style="float: right;margin: 24px 0;">
              <a href="#" class="btn btn-secondary" style="width: 122px;
              height: 40px;
              border-radius: 8px;
              background-color: #eff0f1;" onclick="saveFilesData()">Xác nhận tải lên</a>
              
              <button href="#" class="btn btn-success btn-disable" onclick="nextInputScore()" style="width: 140px;
              height: 40px;
              border-radius: 8px;
              background-color: #049252;" id="savePoof">Tiếp tục</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" id="modalInputScoreNext" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top: 9%;max-height: 723px;  background-color: #ffffff;">
          <div class="modal-body" style="padding: 0 24px;">
            <div>
              <label style="margin-top: 24px; text-align: center; font-size: 20px; width: 100%; " class="title inline">Bước 2:</label>
            </div>

            <div class="close-button"> 
              <a href="#" class="inline" style="font-size: 22px; color: #7e7171; font-weight: 600; margin-top: 9px; width: 25%; float: right" data-dismiss="modal" aria-label="Close">x</a>
            </div>

            <p style="text-align: center; font-size: 18px;">Nhập kết quả đánh giá</p>
            <p class="sub-title" style="text-align: center;">Vui lòng nhập điểm (bằng số) trung bình của tất cà các thành viên trong hội đồng theo từng phần.</p>
            
            <div class="col-12">
              <div style="background-color: white;;
                display: flex;
                padding: 17px;padding-left: 0px;">
                <div class="Rectanglevn">
                </div>
                <span class="SubHeadingvn">
                  Phần A: Sản phẩm và sức mạnh cộng đồng (35 điểm)
                </span>
              </div>
              <input type="number" class="form-control avarage-score-input input" id="partAScore" step=".01" value="31">
            </div>
            <div class="col-12">
              <div style="background-color: white;;
                display: flex;
                padding: 17px;padding-left: 0px;">
                <div class="Rectanglevn">
                </div>
                <span class="SubHeadingvn">
                  Phần B: Khả năng tiếp thị (25 điểm)
                </span>
              </div>
              <input type="number" class="form-control avarage-score-input input" id="partBScore" step=".01" value="24">
            </div>
            
            <div class="col-12">
              <div style="background-color: white;;
                display: flex;
                padding: 17px;padding-left: 0px;">
                <div class="Rectanglevn">
                </div>
                <span class="SubHeadingvn">
                  Phần C: Chất lượng sản phẩm (40 điểm)
                </span>
              </div>
              <input type="number" class="form-control avarage-score-input input" id="partCScore" step=".01" value="38">
            </div>

            <div class="col-12">
              <div style="background-color: white;;
                display: flex;
                padding: 17px;padding-left: 0px;">
                <div class="Rectanglevn">
                </div>
                <span class="SubHeadingvn">
                  TỔNG ĐIỂM TRUNG BÌNH
                </span>
              </div>
              <input type="number" class="form-control input disabled" id="averageScore" step=".01" readonly="readonly" value="93">

            </div>
            <div class="row " style="max-height: 407px;;    overflow: auto;" id="listproductinfno">

            </div>
            <div style="float: right;margin: 24px 0;">
              <a href="#" class="btn btn-secondary" onclick="backstepInputScore(1)">Quay lại</a>
              <a href="#" class="btn btn-success" onclick="acceptSend()">Xác nhận gửi</a>
            </div>
          </div>

        </div>
      </div>
    </div>

    
    <!-- <div class="text-center">
        <div style="display: flex;">
          <button class="evaluateStatus text-white btn mr-2" style="flex: 1; background-color: #039252; width:100px;" onclick="linkview()" >Xem ghi chú</button>
          <button id="rankBtn" class="evaluateStatus text-white btn mr-2" style="flex: 1; background-color: #039252; width:100px;" onclick="rankThisFile()">Duyệt kết quả</button>
          <button id="compareBtn" class="evaluateStatus text-white btn mr-2" style="flex: 1; background-color: #039252; width:100px;" onclick="clickCheckbox()">So sánh</button>
          <button id="compareAllBtn" class="evaluateStatus text-white btn mr-2" style="flex: 1; background-color: #039252; width:100px;" onclick="clickCheckbox('all')">So sánh tổng hợp</button>
          <button class="evaluateStatus text-white btn mr-2" style="flex: 1; background-color: #039252; width:100px;" onclick="window.print()">In</button>
        </div>
    </div> -->
    
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
      <div class="right-sidebar ps ps--theme_default" data-ps-id="ae75ee3e-4b14-007f-39da-b13e5b4a4358">
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