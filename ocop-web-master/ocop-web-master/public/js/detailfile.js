var ImgsArray = []
let productData;
let totalSteps = 1;
let uploadedDropzone = [];
let entitiesId
let idcheck = []
let information = []
let accountInfo;
let labels;
let proofInfo
let isStatusProduct = false
let allowUpProofs = []
let listAllowProofs = []
let levelNoti = false
let contentRequi = ''
var currentEvaluateStatus = '';
let firstTimeSetponti = true // trường kiểm tra điểm
var timerSave = 4000; // 4 giây
var isEvaluateChange = false;
let isSecondTime = false;
let evaluateCompleted = false;
let questionsNameList = [];
let indexNote
let idIndexNote
var firstTimeVisit = true;
let firstTimeSet = true
let sectionsArray = []
let pdfs = ['.pdf', '.PDF']
let uploadImgCommnet = []
let confirmCheck

var _objProductSet;
var _objListGuidequestions = null;
var _objListNotAchievedRank = null;
var _firstEvaluation = false;
var _colorNotCheck = '#212529';
var _colorCheck = '#049252';

var setProduct = document.getElementById('setProduct')
var product = document.getElementById('product')
var entity = document.getElementById('entity')
var adressentity = document.getElementById('adressentity')
let txtUpload = document.getElementById('txtUpload')

function getParam (paramName) {
    var url_string = window.location.href;
    var url = new URL(url_string);
    return url.searchParams.get(paramName);
}
let nameContent
let arrays = []
var productsInfo = getParam('productsInfo');
var productSetId = getParam('productSetId');
var createdUserId = getParam('created_userid');
var productId = getParam('product_id');
var productType = getParam('product_type');
var questionId;
// var proofId
var role = getParam('role');
var IdMember
var nameMember
let poofinfo
let formNumber
//let productId = productsInfo
let formcheck
$(document).ready(function () {
    loadproductSetId();
    loadquote()
    loadgetAccountInfo()
    $('#selected2').select2({
        "width": "100%"
    })
    $('#selectedqa').select2({
        "width": "100%",
        closeOnSelect: false,
        multiple: true
    })
    $('#selected2Queto').select2({
        "width": "100%"
    })
    $('#idText').val('')
    getMemberInfo()
    loadtimetype()
    loadfileId()
    /// namqv xử lý autoSave lưu dữ liệu 14 giây 1 lần nếu có sự thay đổi
    setInterval(autoSave, timerSave);
    getformcheck()
    loadListGuidequestions();
    initQA();
    //clickCheckbox();
    if (productSetId){
        $(`#proofBtn`).attr('href', `/treeProof?productInfoId=${productId}&productSetId=${productSetId}`);
    }
    $(`#proofBtnMobile`).attr('href', `/treeProof?productInfoId=${productId}&productSetId=${productSetId}`);
    if (role && createdUserId) {
        $(`#ShowNote1`).css("display", "none")
        $(`#ShowNote2`).css("display", "none")
    }

})

const clickCheckbox = () => {
    $("input:checkbox").on('click', function () {
        // namqv gán true nếu checkbox được click tương đương với sự thay đổi
        isEvaluateChange = true;
        // end
        let aPart = 0;
        let bPart = 0;
        let cPart = 0;
        var $box = $(this);
        aPart = 0;
        bPart = 0;
        cPart = 0;
        if ($box.is(":checked")) {
            updateMark($box.attr("data-question-id"),$box.attr("data-answer-id"), this.value, true);
            let group = "input:checkbox[name='" + $box.attr("name") + "']";
            let groupLbl = "label[name='lbl_" + $box.attr("name") + "']";
            $(groupLbl).css("color", _colorNotCheck);
            $(`#lbl_` + $box[0].id)[0].style.color = _colorCheck;
            $(group).prop("checked", false);
            $box.prop("checked", true);
            // if (_objListNotAchievedRank != null && _objListNotAchievedRank.length && _objListNotAchievedRank.length > 0)
            // checkNotAchievedRank($box.attr("alt"), $box.attr("name"));  // conflic với update dev
            if (_objListNotAchievedRank != null && _objListNotAchievedRank.length && _objListNotAchievedRank.length > 0)
                checkNotAchievedRank($box.attr("data-answer-id"), $box.attr("data-answer-text"));
            if (firstTimeVisit)
                _firstEvaluation = true;
        } else {
            updateMark($box.attr("data-question-id"),$box.attr("data-answer-id"), this.value, false);
            let group = "input:checkbox[name='" + $box.attr("name") + "']";
            $(group).prop("checked", false);
            $box.prop("checked", false);
            $(`#lbl_` + $box[0].id)[0].style.color = _colorNotCheck;

        }
        $(`#A-content input:checked`).each(function () {
            aPart += Number(this.value);
        });
        $(`#B-content input:checked`).each(function () {
            bPart += Number(this.value);
        });
        $(`#C-content input:checked`).each(function () {
            cPart += Number(this.value);
        });
        let total = aPart + bPart + cPart;

        $(`#A-totalPoint`)[0].innerHTML = aPart;
        $(`#B-totalPoint`)[0].innerHTML = bPart;
        $(`#C-totalPoint`)[0].innerHTML = cPart;
        $(`#totalPoint`)[0].innerHTML = total;

        $(`#A-totalPointmobile`)[0].innerHTML = aPart;
        $(`#B-totalPointmobile`)[0].innerHTML = bPart;
        $(`#C-totalPointmobile`)[0].innerHTML = cPart;
        $(`#totalPointmobile`)[0].innerHTML = total;


        let rankedStar = 1;
        if (total >= 30) {
            rankedStar = 2
        }
        if (total >= 50) {
            rankedStar = 3
        }
        if (total >= 70) {
            rankedStar = 4
        }
        if (total >= 90) {
            rankedStar = 5
        }
        $(`#rankStar`)[0].innerHTML = `${rankedStar} sao`;
        $.toast({
            heading: 'Điểm & Xếp hạng',
            text: `Tổng điểm: ${total} đ - Xếp hạng: ${rankedStar} sao`,
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 2000,
            stack: 6
        });
        // console.table(aPart, bPart, cPart, total);
    });
}

function updateMark(questionId,answerId,point, check) {
    try {

        var _token = $('meta[name="csrf-token"]').attr('content');
        let obj = {
            _token:_token,
            product_id: productId,
            question_id: questionId,
            answer_id: answerId,
            point: point,
            check:check,
            type: 0
        }
        $.ajax({
            url: "updatemark",
            type: "POST",
            data: obj,
            contenType: "aplication/json",
            success: function (response) {

            }
        })

    } catch (error) {
        console.log(error);
    }


}

function saveTotalMark(userId) {
    try {
        aPart = 0;
        bPart = 0;
        cPart = 0;
        $(`#A-content input:checked`).each(function () {
            aPart += Number(this.value);
        });
        $(`#B-content input:checked`).each(function () {
            bPart += Number(this.value);
        });
        $(`#C-content input:checked`).each(function () {
            cPart += Number(this.value);
        });
        let total = aPart + bPart + cPart;

        var _token = $('meta[name="csrf-token"]').attr('content');
        let obj = {
            _token:_token,
            product_id: productId,
            user_id: userId,
            point: total,
            status: 0,
            type: 0
        }
        $.ajax({
            url: "savetotalmark",
            type: "POST",
            data: obj,
            contenType: "aplication/json",
            success: function (response) {

            }
        })

    } catch (error) {
        console.log(error);
    }
}

function initQA() {
    let aPart = 0;
    let bPart = 0;
    let cPart = 0;
    var $box = $(this);
    aPart = 0;
    bPart = 0;
    cPart = 0;

    $(`#A-content input:checked`).each(function () {
        aPart += Number(this.value);
    });
    $(`#B-content input:checked`).each(function () {
        bPart += Number(this.value);
    });
    $(`#C-content input:checked`).each(function () {
        cPart += Number(this.value);
    });

    console.log("Toan");
    console.log(cPart);
    let total = aPart + bPart + cPart;

    $(`#A-totalPoint`)[0].innerHTML = aPart;
    $(`#B-totalPoint`)[0].innerHTML = bPart;
    $(`#C-totalPoint`)[0].innerHTML = cPart;
    $(`#totalPoint`)[0].innerHTML = total;

    $(`#A-totalPointmobile`)[0].innerHTML = aPart;
    $(`#B-totalPointmobile`)[0].innerHTML = bPart;
    $(`#C-totalPointmobile`)[0].innerHTML = cPart;
    $(`#totalPointmobile`)[0].innerHTML = total;


    let rankedStar = 1;
    if (total >= 30) {
        rankedStar = 2
    }
    if (total >= 50) {
        rankedStar = 3
    }
    if (total >= 70) {
        rankedStar = 4
    }
    if (total >= 90) {
        rankedStar = 5
    }
    $(`#rankStar`)[0].innerHTML = `${rankedStar} sao`;
    clickCheckbox();

    $('#question div input[name]').each(function () {
        let existedItem = questionsNameList.find(item => item == $(this).attr('name').toString());
        console.log(existedItem);
        if (!existedItem) {
            questionsNameList.push($(this).attr('name'));
        }
    });
}

const saveResult = (status, showModel, userId) => {
    for (let i = 0; i < questionsNameList.length; i++) {
        if ($(`#question input:checkbox[name="${questionsNameList[i]}"]:checked`).length < 1) {
            let questionComponents = questionsNameList[i].split('_');
            preventSaving = true;
            isNoSave = true;
            $(`#saveProcessBtn`).removeClass('disabled')
            $(`#saveProcessBtnmobile`).removeClass('disabled')
            $(`#completeEvaluate`).attr('disabled', false);
            $(`#completeEvaluatemobile`).attr('disabled', false);
            return Swal.fire('Cảnh báo', `Bạn chưa trả lời đầy đủ câu hỏi của mục ${Number(questionComponents[1][questionComponents[1].length - 1]) + 1}, vui lòng kiểm tra lại.`, 'warning');
        }
    }
    Swal.fire({
        title: 'Gửi kết quả?',
        text: "Bạn đã chấm xong và muốn gửi kết quả chấm đến hội đồng & quản lý ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Đồng ý, Gửi ngay!',
        cancelButtonText: "Bỏ qua"
    }).then((result) => {
        if (result.value) {
            //sendData(ajaxMethod, ajaxUrl, sectionsArray, productInfoId, status, isSecondTime, $(`#totalPoint`)[0].innerHTML, showModel);
            saveTotalMark(userId);
        } else {
            isNoSave = true;
            $(`#saveProcessBtn`).removeClass('disabled')
            $(`#saveProcessBtnmobile`).removeClass('disabled')
            $(`#completeEvaluate`).attr('disabled', false);
            $(`#completeEvaluatemobile`).attr('disabled', false);
        }
    })


}

function getformcheck () {
    $.ajax({
        url: "checkdataresponeform?productInfo=" + productId,
        type: "GET",
        success: function (ret) {
            if (ret) {
                formcheck = ret
            } else {
                formcheck = '01'
            }
            LoadProof()
        }
    })
}
function checkrole () {
    $.ajax({
        url: "getcheckrole?productId=" + productId,
        type: "GET",
        success: function (ret) {
            if (ret && ret.success) {
                if (ret.role == "Norole") {
                    $('.uploadButton').addClass('disabled')
                    $('.questionMem').addClass('disabled')
                    $('.viewMem').addClass('disabled')
                    $('.supportModalMem').addClass('disabled')
                    Swal.fire({
                        title: 'Thông báo',
                        text: 'Anh/Chị chưa có quyền sử dụng tính năng này',
                        type: 'info',
                        confirmButtonText: 'Trang chủ'
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = '/'
                        }
                    })
                } else if (ret.role == "view") {
                    $('.uploadButton').addClass('disabled')
                    $('.questionMem').addClass('disabled')
                    $('.supportModalMem').addClass('disabled')
                }

            } else if (ret && !ret.success) {
                $.toast({
                    heading: 'Cảnh báo!',
                    text: 'Phiên làm việc đã hết hiệu lực, mời bạn đăng nhập lại để tiếp tục làm việc.',
                    position: 'top-right',
                    loaderBg: '#ff6849',
                    icon: 'warning',
                    hideAfter: false,
                    stack: 6
                });
            }
        }
    })
}
function loadgetAccountInfo () {
    $.ajax({
        url: "getAccountInfo",
        type: "GET",
        success: function (ret) {
            if (ret) {
                IdMember = ret.data._id
                nameMember = ret.data.name
            }
        }
    })
}
async function LoadProof() {
    try {
        let dataAllow = await  $.ajax({
            url: `/getAllowProofProduct?productId=${productId}`,
            type: "GET"
        })
        $.ajax({
            url: `/GetrequirementModel?fileId=${productId}`,
            type: "GET",
            success: function (ret) {
                if (ret.length > 0 ) {
                    if(dataAllow.succes &&  dataAllow.data){
                        let data = _.get(dataAllow, 'data.allowProofIds',[])
                        let approval = _.get(dataAllow, 'data.approval',null)
                        levelNoti =  _.get(dataAllow, 'data.level',false)
                        listAllowProofs = data
                        draw(ret, data, approval)
                    }else{
                        draw(ret)
                    }

                }
            }
        })
    } catch (error) {
        $.ajax({
            url: `/GetrequirementModel?fileId=${productId}`,
            type: "GET",
            success: function (ret) {
                if (ret.length > 0) {
                    draw(ret)
                }
            }
        })
    }

}

// async function LoadProof () {
// 	let dataAllow = await $.ajax({
// 			url: `/getAllowProofProduct?productId=${productId}`,
// 			type: "GET"
// 	})
// 	$.ajax({
// 			url: `/GetrequirementModel?fileId=${productId}`,
// 			type: "GET",
// 			success: function (ret) {
// 					if (ret.length > 0) {
// 							if(dataAllow.succes &&  dataAllow.data){
// 									let data = _.get(dataAllow, 'data.allowProofIds',[])
// 									let approval = _.get(dataAllow, 'data.approval',null)
// 									draw(ret, data, approval)
// 							}else{
// 									draw(ret)
// 							}

// 					}
// 			}
// 	})
// }

let requirement
function clicks (id, names) {
    contentRequi = names
    // console.log(listAllowProofs,998)
    const getValueProof = listAllowProofs.filter(item => item._id === id)
    if (getValueProof.length > 0) {
        document.getElementById('note-allowProof').innerHTML = ''
        document.getElementById('note-allowProof').innerHTML = `
            <div class="col-12 Note-Copy" style="    text-align: left;
            margin-bottom: 10px;color: #212529;">Ghi chú:</div>
            <div class="col-12" style="color: #049252;font-family: sans-serif;font-style: italic;">${_.get(getValueProof, '0.note')}</div>
        `
    }
    Dropzone.forElement('#dropzoneMytwo').removeAllFiles(true)
    descriptionImg.value = ''
    $('#selected2').val([]).trigger("change");
    $('#selected2').val(null).trigger("change");
    $('#selected2').val('').trigger("change");
    $('#selected2').empty()
    requirement = id
    loadquote()
    document.getElementById('Copys').innerHTML = ``
    document.getElementById('Copys').innerHTML = names

}
const openMultiChoiceModal = (requirementId, productId, requirementContent) => {
    $(`#multiChoiceOptions`)[0].innerHTML = '';
    let formNumber = '01';
    if (requirementId == "5e4f946cffb6912ea06ea54b") {
        //phiếu đăng ký
        formNumber = formcheck;
    } else if (requirementId == "5e4f946cffb6912ea06ea54c") {
        // Phương án kế hoạch kinh doanh
        formNumber = '03';
    } else if (requirementId == "5e4f946cffb6912ea06ea54d") {
        // Giới thiệu bộ máy tổ chức
        formNumber = '04';
    }
    $(`#multiChoiceOptions`)[0].innerHTML = `
    <li>
        <i class="fa fa-hand-point-right"></i>
        <a onclick="showModal('${requirementId}', '${requirementContent}')" class="producthref" href="#" data-toggle="modal" 
        data-target="#step2" data-dismiss="modal">
            Xem file
        </a>
    </li>`
}

function draw (ret, allowIdProof, approval) {
    document.getElementById('Obligatory').innerHTML = ``
    document.getElementById('Additionally').innerHTML = ``
    document.getElementById('ObligatoryModal').innerHTML = ``
    document.getElementById('AdditionallyModal').innerHTML = ``
    let allowIdProofs = []
    if (allowIdProof) {
        allowIdProofs = allowIdProof.map((item) => {
            return item._id
        })
    }
    let template;
    let Note
    ret.forEach(element => {
        let Dem = ''
        let length = 0
        let statusProof = ''
        let animation = ''
        if (element.proofinfors.length > 0) {
            length = element.proofinfors.length
            Dem = `
                <div style="display: flex;position: absolute;right: 36px;margin-top: 26px;">
                <div class="cice">
                    <p class="textone">${length}</p>
                </div>
                <div>
                    <img src="img/a.png"
                    srcset="img/a@2x.png 2x,
                            img/a@3x.png 3x"
                    class="Black">
                </div>
                </div>
                `
        }
        if (isStatusProduct) {
            if (element._id == "5e4f946cffb6912ea06ea54c"
                || element._id == '5e4f946cffb6912ea06ea54d'
                || element._id == '5e4f946cffb6912ea06ea54b') {
                template = `<a class='uploadButton' href="javascript:openQuestionModal(\'${element._id}\',\'${productsInfo}\',\'${element.content}\')"> <img src="img/primary.png" srcset="img/primary@2x.png 2x,img/primary@3x.png 3x" class="Primary" style="margin-top: 13px;"></a>`
            } else {
                template = `
                    <a class='uploadButton' href="#" data-toggle="modal" data-target="#step1" onclick="clicks(\'${element._id}\',\'${element.content}\')">
                    <img src="img/primary.png" srcset="img/primary@2x.png 2x,img/primary@3x.png 3x" class="Primary" style="margin-top: 13px;">
                    </a>`
            }
        } else {
            if (confirmCheck) {
                template = `
                    <a class='uploadButton' href="##" onclick="alertInfo()">
                    <img src="img/primary.png" srcset="img/primary@2x.png 2x,img/primary@3x.png 3x" class="Primary" style="margin-top: 13px;">
                    </a>
                `
            } else {
                template = `
                    <a class='uploadButton' href="#" data-toggle="modal" data-target="#step1" onclick="clicks(\'${element._id}\',\'${element.content}\')">
                    <img src="img/primary.png" srcset="img/primary@2x.png 2x,img/primary@3x.png 3x" class="Primary" style="margin-top: 13px;">
                    </a>`
            }

            if (allowIdProofs.length > 0) {
                let isUpProof = allowIdProofs.includes(element._id)
                let isAprovoval = approval ? approval.includes(element._id) : false
                let getNoteProof = allowIdProof.filter(item => item._id === element._id)
                if (isUpProof) {
                    $('#savePoof').css({ "display": "none" })
                    $('#saveNewPoof').css({ "display": "" })

                    if (!isAprovoval) {
                        statusProof = '<span style="font-size: 13px;font-style: italic;color: #049252;">(Cập nhật)</span>'
                        animation = ' <div class="animation-notify-bell" id="notify-bell"> <span class="animation-bell"></span> <span class="animation-point"></span> </div>'
                    } else {
                        statusProof = '<span style="font-size: 13px;font-style: italic;color: #049252;">(Đã cập nhật)</span>'
                    }


                    if (element._id == "5e4f946cffb6912ea06ea54c"
                        || element._id == '5e4f946cffb6912ea06ea54d'
                        || element._id == '5e4f946cffb6912ea06ea54b') {
                        template = `<a class='uploadButton' href="javascript:openQuestionModal(\'${element._id}\',\'${productsInfo}\',\'${element.content}\')"> <img src="img/primary.png" srcset="img/primary@2x.png 2x,img/primary@3x.png 3x" class="Primary" style="margin-top: 13px;"></a>`
                    } else {
                        template = `
                                <a class='uploadButton' href="#" data-toggle="modal" data-target="#step1" onclick="clicks(\'${element._id}\',\'${element.content}\')">
                                <img src="img/primary.png" srcset="img/primary@2x.png 2x,img/primary@3x.png 3x" class="Primary" style="margin-top: 13px;">
                                </a>`
                    }
                }
            }

        }

        if (element.type == 'Obligatory') {
            let modalshow = `showModal(\'${element._id}\',\'${element.content}\')`
            let target = `#step2`
            if (element._id == "5e4f946cffb6912ea06ea54b"
                || element._id == "5e4f946cffb6912ea06ea54c"
                || element._id == "5e4f946cffb6912ea06ea54d") {
                target = '#multiChoiceModal';
                modalshow = `openMultiChoiceModal('${element._id}', '${productsInfo}', '${element.content}')`
            }
            document.getElementById('Obligatory').innerHTML += `
                    <div class="ectangle" >
                        <a href="#" data-toggle="modal" data-target="${target}" onclick="${modalshow}" class="viewMem">
                        ${Dem}
                        </a>
                        
                     <div class="titlesinfo">${animation}     <a class="viewMem" herf="#" data-toggle="modal" data-target="${target}" onclick="${modalshow}">${element.content} ${statusProof} </a>
                    
                     </div>
                     <div style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                       <div class="Rectangle-Copy">
                       ${template}
                       </div>
                       <div class="re-Copy" style="margin-right: 8px;">
                       <a href="" data-toggle="modal" data-target="#step3" class="questionMem" onclick="clickquestion(\'${element._id}\')">
                        <img src="img/s.png" srcset="img/s@2x.png 2x,img/s@3x.png 3x"
                              class="Black" style=" margin-top: 13px;">
                              </a>
                       </div>
                       <div class="re-Copy">
                       <a href="#" class="supportModalMem" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal(${JSON.stringify(element)})'>
                            <img src="img/black.png" srcset="img/black@2x.png 2x,img/black@3x.png 3x" class="Black" style="margin-top: 13px;">
                        </a>
                       </div>
                     </div>
                  </div>
                `
            document.getElementById('ObligatoryModal').innerHTML += `
                    <div class="ectangle" >
                        <a href="#" data-toggle="modal" data-target="${target}" onclick="${modalshow}" class="viewMem">
                        ${Dem}
                        </a>
                        
                     <div class="titlesinfo">${animation}     <a class="viewMem" herf="#" data-toggle="modal" data-target="${target}" onclick="${modalshow}">${element.content} ${statusProof} </a>
                    
                     </div>
                     <div style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                       <div class="Rectangle-Copy">
                       ${template}
                       </div>
                       <div class="re-Copy" style="margin-right: 8px;">
                       <a href="" data-toggle="modal" data-target="#step3" class="questionMem" onclick="clickquestion(\'${element._id}\')">
                        <img src="img/s.png" srcset="img/s@2x.png 2x,img/s@3x.png 3x"
                              class="Black" style=" margin-top: 13px;">
                              </a>
                       </div>
                       <div class="re-Copy">
                       <a href="#" class="supportModalMem" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal(${JSON.stringify(element)})'>
                            <img src="img/black.png" srcset="img/black@2x.png 2x,img/black@3x.png 3x" class="Black" style="margin-top: 13px;">
                        </a>
                       </div>
                     </div>
                  </div>
                `
        } else if (element.type == "Additionally") {
            document.getElementById('Additionally').innerHTML += `
            <div class="ectangle" style="position:relative">
              <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal(\'${element._id}\',\'${element.content}\')">
                 ${Dem}
              </a>
               <div class="titlesinfo" style="margin-bottom:50px">${animation}  <a herf="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal(\'${element._id}\',\'${element.content}\')">${element.content} ${statusProof}</a>
              
               </div>
                
                
               <div style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                 <div class="Rectangle-Copy">
                    ${template}
                 </div>
                 <div class="re-Copy" style="margin-right: 8px;">
                 <a href="" data-toggle="modal" data-target="#step3" class="questionMem " onclick="clickquestion(\'${element._id}\')">
                  <img src="img/s.png" srcset="img/s@2x.png 2x, img/s@3x.png 3x" class="Black" style="    margin-top: 13px;">
                 </a>
                 </div>
                 <div class="re-Copy">
                  <a href="#" class="supportModalMem" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal(${JSON.stringify(element)})'>
                    <img src="img/black.png" srcset="img/black@2x.png 2x, img/black@3x.png 3x" class="Black" style="margin-top: 13px;">
                  </a>
                 </div>
               </div>
            </div>
          `
            document.getElementById('AdditionallyModal').innerHTML += `
            <div class="ectangle" style="position:relative">
              <a href="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal(\'${element._id}\',\'${element.content}\')">
                 ${Dem}
              </a>
               <div class="titlesinfo" style="margin-bottom:50px">${animation}  <a herf="#" data-toggle="modal" class="viewMem" data-target="#step2" onclick="showModal(\'${element._id}\',\'${element.content}\')">${element.content} ${statusProof}</a>
              
               </div>
                
                
               <div style="position: absolute;bottom:0px;width:100%;padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                 <div class="Rectangle-Copy">
                    ${template}
                 </div>
                 <div class="re-Copy" style="margin-right: 8px;">
                 <a href="" data-toggle="modal" data-target="#step3" class="questionMem " onclick="clickquestion(\'${element._id}\')">
                  <img src="img/s.png" srcset="img/s@2x.png 2x, img/s@3x.png 3x" class="Black" style="    margin-top: 13px;">
                 </a>
                 </div>
                 <div class="re-Copy">
                  <a href="#" class="supportModalMem" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal(${JSON.stringify(element)})'>
                    <img src="img/black.png" srcset="img/black@2x.png 2x, img/black@3x.png 3x" class="Black" style="margin-top: 13px;">
                  </a>
                 </div>
               </div>
            </div>
          `
        }
    });
    if (role == 'helpteam') {
        $('.uploadButton').addClass('disabled')
        $('.uploadButton').attr('onclick', '')
        $('.uploadButton').attr('href', '#')
        $('.questionMem').addClass('disabled')
        $('.supportModalMem').addClass('disabled')
    }
    // $('#Additionally').css('display', 'grid')
    // $('#Additionally').css('grid-template-columns', 'auto auto')

    // checkrole() // hàm kiểm tra quyền của chủ thể

}
const alertInfo = () => {
    return Swal.fire({
        title: 'Thông báo',
        text: 'Sản phẩm đã được duyệt. Anh/chị cập nhật, thêm mới minh chứng cần được quản lý chấp thuận!',
        type: 'info',
    })
}
const clickquestion = (id) => {
    document.getElementById('buttonquestion').innerHTML = ``
    document.getElementById('buttonquestion').innerHTML = `<a href="#" class="btn btn-secondary" data-dismiss="modal" style="    width: 122px;
    height: 40px;
    border-radius: 8px;
    background-color: #eff0f1;">Đóng</a>
    <a href="#" class="btn btn-success" onclick="loadwswal(\'${id}\')" style="    width: 140px;
    height: 40px;
    border-radius: 8px;
    background-color: #049252;">Gửi</a>
    `
}
const openQuestionModal = (requirementId, productId, content) => {
    proofId = (requirementId);
    ImgsArray = []; //Xóa mảng iamge khi mở một modal mới

    $(`#questionModal`).modal('show');
    $(`#fillFormOption`).css('display', 'none');
    $(`#askForTypeInput`).css('display', '');
    $(`#selectFillFormOption`).off("click").on('click', (event) => {
        event.preventDefault();
        // phiếu đăng ký
        if (requirementId == '5e4f946cffb6912ea06ea54b') {
            $(`#fillFormOption`).css('display', '');
            $(`#askForTypeInput`).css('display', 'none');
            $(`#registerLinksSection`)[0].innerHTML = ``;
            $(`#registerLinksSection`).append(`
                <li style="margin-bottom: 23px;"><i class="fa fa-hand-point-right"></i><a class="producthref" href="newProductRegister?productsInfo=${productsInfo}&requireId=${requirementId}">Đăng ký sản phẩm mới</a></li>
                <li><i class="fa fa-hand-point-right"></i><a class="producthref" href="productRegister?productsInfo=${productsInfo}&requireId=${requirementId}">Đăng ký sản phẩm đã có</a></li>
            `);
        } else {
            clicks(requirementId, content);
            //phương án kế hoạch kinh doanh
            if (requirementId == '5e4f946cffb6912ea06ea54c') {
                window.location.href = `/registermanufacturing?productsInfo=${productId}&requireId=${requirementId}`;
            } else if (requirementId == '5e4f946cffb6912ea06ea54d') {
                //giới thiệu bộ máy tổ chức
                window.location.href = `/introRegister?productsInfo=${productId}&requireId=${requirementId}`;
            }
        }
    });
    $(`#selectUploadFile`).off("click").on('click', (event) => {
        event.preventDefault();
        $(`#questionModal`).modal('toggle');
        clicks(requirementId, content);
        $(`#step1`).modal('toggle');
    });
    $(`#backToAskInput`).off("click").on('click', (event) => {
        event.preventDefault();
        $(`#fillFormOption`).css('display', 'none');
        $(`#askForTypeInput`).css('display', '');
    });
}
Dropzone.options.dropzoneMytwo = {
    url: '/#',
    uploadMultiple: true,
    autoDiscover: true,
    // maxFilesize: 1,
    autoProcessQueue: false,
    parallelUploads: 100,
    dictResponseError: false,
    dictRemoveFile: 'Xóa',
    addRemoveLinks: true,
    dictDefaultMessage: '<span style="font-weight: 600;font-family: sans-serif; color: #039252"><i class="fas fa-cloud-upload-alt fa-5x"></i><br> Chọn file</span><i class="fa fa-folders"></i>',
    dictCancelUpload: 'Xóa',
    accept: function (file, done) {
        $('#savePoof').attr('disabled', 'disabled');
        var progressElement = file.previewElement.querySelector("[data-dz-uploadprogress]");
        for (let i = 0; i < 60; i++) {
            setTimeout(() => {
                progressElement.style.width = i + "%";
            }, 1);
        }
        var contentType = file.type;
        var filename = returnId(file.name)
        let array = []
        $.get('/generatepresignedurl?fileName=' + filename + '&type=' + contentType, function (signedUrl) {
            for (let i = 60; i < 90; i++) {
                setTimeout(() => {
                    progressElement.style.width = i + "%";
                }, 1);
            }
            $.ajax({
                url: signedUrl,
                type: 'PUT',
                dataType: 'html',
                processData: false,
                headers: { 'Content-Type': contentType },
                crossDomain: true,
                data: file
            }).done(function (data, textStatus, error) {
                if (textStatus == 'success') {
                    $(`#dropzoneMytwo`).removeClass('dz-started')
                    $(`#dropzoneMytwo.dz-clickable .dz-image-preview`).remove();
                    $(`#dropzoneMytwo.dz-clickable .dz-file-preview`).remove();
                    progressElement.style.width = 100 + "%";
                    $('.dz-progress').css("opacity", "0")
                    $(".dz-success-mark svg").css("display", "");
                    $(".dz-success-mark").css("opacity", "1");
                    $(".dz-error-mark").css("display", "none");
                    setTimeout(() => {
                        $(".dz-success-mark").css("opacity", "0");
                    }, 1000);
                    let dataName=`https://` + S3_URL +`.s3.ap-southeast-1.amazonaws.com/ocop/`+filename
                    let _id = new Date().getTime() + '_' + getRndInteger(100000, 999999)
                    let objfilename = {
                        dataName: dataName,
                        name: file.name,
                        type:contentType,
                        id: `${file.lastModified}_${file.name}`,
                        _id: _id
                    }
                    ImgsArray.push(objfilename)
                    drawimgDropzone(dataName, _id)
                    $('#savePoof').removeAttr("disabled");
                }
            }).fail(function (jqXHR, textStatus, errorThrown) {
                $('.dz-progress').css("opacity", "0")
                $(".dz-error-mark svg").css("opacity", "1");
                $(".dz-success-mark svg").css("opacity", "0");
            });
        });
    },
    error: function (file, message) {
        $(file.previewElement).addClass("dz-error").find('.dz-error-message').text(message).css({ "margin-top": "20px" }, { "font-weight": " 600" });
    },
    removedfile: function (file) {
        if (file.name && file.size == 12345) {
            ImgsArray.splice(ImgsArray.indexOf(file.name), 1);
            file.previewElement.remove();
        } else {
            this.files.splice(this.files.indexOf(file), 1);
            file.previewElement.remove();
        }

        let fileId = `${file.lastModified}_${file.name}`
        for (let i = 0; i < ImgsArray.length; i++) {
            if (ImgsArray[i].id == fileId) {
                ImgsArray.splice(i, 1)
                // return ImgsArray
            }
        }
        if (ImgsArray.length > 0) {
            $('#dropzoneMytwo').removeClass('dz-started')
            $('.dropzone.dz-clickable .dz-message').css({ "display": "none" })
        } else {
            {
                $('.dropzone.dz-clickable .dz-message').css({ "display": "" })
            }
        }
    }
}
const drawimgDropzone = (srcImg, _id) => {
    let img = ['.jpg', '.gif', '.png', '.jpeg', '.JPEG', '.PNG', '.JPG', '.GIF', '.jfif']
    let doc = ['.docx', '.DOCX', '.doc', '.DOC']
    let excel = ['.xls', '.XLS', '.xlsx', 'XLSX']
    let pdf = ['.pdf', '.PDF']
    let ppt = ['.ppt', '.pptx', '.pps', '.ppsx', '.PPT', '.PPTX', '.PPS', 'PPSX']
    let tepplate
    if (hasExtension(srcImg, img)) {
        tepplate = `<img id="zoomin${_id}" src="${srcImg}" width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;" onclick="clickImg(\'${srcImg}\')">`
    } else if (hasExtension(srcImg, doc)) {
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="images/word.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    } else if (hasExtension(srcImg, excel)) {
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="images/excel.png"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    } else if (hasExtension(srcImg, pdf)) {
        tepplate = ` <a target="_blank" href="${srcImg}"><img src="images/pdf.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    } else if (hasExtension(srcImg, ppt)) {
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="images/ppt.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    }
    let viewImgDropzone = ` 
    <div class="col-4" id="${_id}">
        ${tepplate}
        <div style="text-align:center;width: 100px;">
        <a href="#" onclick="deleteimgDropzone(\'${_id}\')">Xóa</a>
        </div>
    </div>`
    $('#listImgDropzone').append(viewImgDropzone)
}
// const returnId = (name)=>{
//    return  new Date().getTime()+'_'+getRndInteger(100000,999999)+name.replace( /\s/g, '');
// }
// const getRndInteger = (min, max) => {
//   return Math.floor(Math.random() * (max - min + 1)) + min;
// };
const deleteimgDropzone = (id) => {
    for (let i = 0; i < ImgsArray.length; i++) {
        if (ImgsArray[i]._id == id) {
            ImgsArray.splice(i, 1)
        }
    }
    document.getElementById(id).remove()
}

function saveProof() {
    try {
        if(ImgsArray.length == 0){
            return Swal.fire({
                title: 'Cảnh báo!',
                text: "Bạn chưa upload tài liệu!",
                type: 'warning',
            })
        }
        var descriptionImg = $(`#descriptionImg`).val();
        if(descriptionImg.length <= 0){
            return Swal.fire({
                title: 'Cảnh báo!',
                text: "Bạn chưa nhập mô tả minh chứng",
                type: 'warning',
            })
        }
        var _token = $('meta[name="csrf-token"]').attr('content');
        let obj = {
            _token:_token,
            product_id: productId,
            product_type: productType,
            proof_id: proofId,
            images: ImgsArray,
            description: descriptionImg
        }

        $.ajax({
            url: "submitproof",
            type: "POST",
            data: obj,
            contenType: "aplication/json",
            success: function (response) {
                document.getElementById('listImgDropzone').innerHTML = ``
                //loadFileId()
                ImgsArray = []
                $('.btn-disable').prop('disabled', false)
                Swal.fire({
                    title: 'Yêu cầu',
                    text: 'Minh chứng đã được thêm thành công',
                    type: 'info',
                    confirmButtonText: 'Thành công'
                }).then((result) => {
                    if (result.value) {
                        // $('#selected2').val([]).trigger("change");
                        // $('#selected2').val(null).trigger("change");
                        // $('#selected2').val('').trigger("change");
                        // $('#selected2').empty()
                        // loadquote()
                        document.getElementById('descriptionImg').value = ``;
                        // $(`#additionalLinkDescription`).val('');
                        // $(`#additionalLink`).val('');
                        // $('#step1').modal('hide');
                        $('.dz-preview').remove();
                        $('#btnSend').prop('disabled', true);
                        $('#dropzoneMytwo').removeClass('dz-started');
                        location.reload();
                    }
                })
            }
        })

    } catch (error) {
        console.log(error);
        return Swal.fire({
            title: 'Cảnh báo!',
            text: "Đã có lỗi xảy ra vui lòng thử lại!",
            type: 'warning',
        })
    }


}

function doneProof() {
    try {
        var _token = $('meta[name="csrf-token"]').attr('content');
        let obj = {
            _token:_token,
            product_id: productId,
        }
        $.ajax({
            url: "proofdone",
            type: "POST",
            data: obj,
            contenType: "aplication/json",
            success: function (response) {
                if(response === 'success'){
                    Swal.fire({
                        title: 'Yêu cầu',
                        text: 'Bạn đã hoàn thành nộp minh chứng',
                        type: 'info',
                        confirmButtonText: 'Đóng'
                    }).then((result) => {

                    })
                }else if(response === 'fail'){
                    return Swal.fire({
                        title: 'Cảnh báo!',
                        text: "Đã có lỗi xảy ra vui lòng thử lại!",
                        type: 'warning',
                    })
                }else{
                    return Swal.fire({
                        title: 'Cảnh báo!',
                        text: "Bạn phải hoàn thành nộp 5 minh chứng bắt buộc!",
                        type: 'warning',
                    })
                }
            }
        })

    } catch (error) {
        return Swal.fire({
            title: 'Cảnh báo!',
            text: "Đã có lỗi xảy ra vui lòng thử lại!",
            type: 'warning',
        })
    }
}

function save (role) {
    try {
        $('.btn-disable').prop('disabled', true)
        let data = $("#selected2").select2('data')
        let desImg = descriptionImg.value
        let obj = {
            requirement: requirement,
            memberId: IdMember,
            productsInfo: productsInfo,
            memberName: nameMember,
            descriptionImg: desImg
        }
        if (role === 'NEWPROOF') {
            obj.status = 'NEW'
        }
        if (ImgsArray.length > 0 || $(`#additionalLink`).val().trim().length > 0) {
            let sendData = ImgsArray;
            if ($(`#additionalLink`).val().trim().length > 0) {
                if ($(`#additionalLinkDescription`).val() == '') {
                    Swal.fire({
                        title: 'Cảnh báo',
                        text: 'Mô tả link không được để trống',
                        type: 'warning',
                    })
                    $('.btn-disable').prop('disabled', false)
                    return;
                }
                let additionalLinkObj = {
                    type: 'link',
                    name: $(`#additionalLinkDescription`).val(),
                    dataName: $(`#additionalLink`).val(),
                }
                sendData = [...sendData, additionalLinkObj]
            }
            obj.data = JSON.stringify(sendData);
            if (ImgsArray.length > 0 && desImg == '') {
                Swal.fire({
                    title: 'Cảnh báo',
                    text: 'Mô tả minh chứng không được để trống',
                    type: 'warning',
                })
                $('.btn-disable').prop('disabled', false)
                return
            }
        } else {
            Swal.fire({
                title: 'Cảnh báo',
                text: 'Bạn vui lòng chọn thêm minh chứng',
                type: 'warning',
            })
            $('.btn-disable').prop('disabled', false)
            return
        }
        let arrayLink = []
        if (data.length > 0) {
            let arrs = []
            data.forEach((e) => {
                let id = e.id.split('-')
                arrays.forEach((c) => {
                    if (c._id == id[0]) {
                        arrs.push(c)
                    }
                })
            })
            var uniqueArray = removeDuplicates(arrs, "_id");
            data.forEach((e) => {
                let id = e.id.split('-')
                if (id.length == 3) {
                    for (let j = 0; j < uniqueArray.length; j++) {
                        if (uniqueArray[j].sectionIndex == Number(id[1])) {
                            let objpush = {
                                index: `${uniqueArray[j].sectionIndex}.detail[${Number(id[2] - 1)}]`,
                                nameQuote: uniqueArray[j].detail[Number(id[2] - 1)].question,
                            }
                            if (uniqueArray[j].detail[Number(id[2] - 1)].contentType == "answer") {
                                objpush.nameQuote = uniqueArray[j].sectionName
                            } else if (uniqueArray[j].detail[Number(id[2] - 1)].contentType == "caseQuestion" && uniqueArray[j].detail[Number(id[2] - 1)].question == "") {
                                objpush.nameQuote = uniqueArray[j].sectionName
                            }
                            arrayLink.push(objpush)
                            // if (!uniqueArray[j].detail[Number(id[2] - 1)].requirement) {
                            //     uniqueArray[j].detail[Number(id[2] - 1)].requirement = [{ requirement: requirement, productsInfo: productsInfo }]
                            //     arrayLink.push(`detail[${id[2] - 1}]`)
                            // } else {
                            //     uniqueArray[j].detail[Number(id[2] - 1)].requirement.push({ requirement: requirement, productsInfo: productsInfo })
                            //     arrayLink.push(`detail[${Number(id[2] - 1)}]`)
                            // }
                        }
                    }
                } else if (id.length == 4) {
                    for (let j = 0; j < uniqueArray.length; j++) {
                        if (uniqueArray[j].sectionIndex == Number(id[1])) {
                            arrayLink.push({
                                nameQuote: uniqueArray[j].detail[Number(id[2] - 1)].lvl2Questions[Number(id[3] - 1)].question,
                                index: `${uniqueArray[j].sectionIndex}.detail[${Number(id[2] - 1)}].lvl2Questions[${Number(id[3] - 1)}]`
                            })
                            // if (!uniqueArray[j].detail[Number(id[2] - 1)].lvl2Questions[Number(id[3] - 1)].requirement) {
                            //     uniqueArray[j].detail[Number(id[2] - 1)].lvl2Questions[Number(id[3] - 1)].requirement = [{ requirement: requirement, productsInfo: productsInfo }]
                            //     arrayLink.push(`detail[${Number(id[2] - 1)}].lvl2Questions[${Number(id[3] - 1)}]`)
                            // } else {
                            //     uniqueArray[j].detail[Number(id[2] - 1)].lvl2Questions[Number(id[3] - 1)].requirement.push({ requirement: requirement, productsInfo: productsInfo })
                            //     arrayLink.push(`detail[${Number(id[2] - 1)}].lvl2Questions[${Number(id[3] - 1)}]`)
                            // }
                        }
                    }
                }
            })
            obj.uniqueArray = JSON.stringify(arrayLink)
        }
        if (!isStatusProduct) {
            sendNotiToManager(productsInfo, requirement)
        }
        $.ajax({
            url: "postData",
            type: "POST",
            data: obj,
            contenType: "aplication/json",
            success: function (ret) {
                document.getElementById('listImgDropzone').innerHTML = ``
                loadFileId()
                if (ret.length > 0) {
                    ImgsArray = []
                    // LoadProof()
                    $('.btn-disable').prop('disabled', false)
                    Swal.fire({
                        title: 'Yêu cầu',
                        text: 'Bạn đã thêm thành công ' + ret.length + ' minh chứng ',
                        type: 'info',
                        confirmButtonText: 'Thành công'
                    }).then((result) => {
                        if (result.value) {
                            $('#selected2').val([]).trigger("change");
                            $('#selected2').val(null).trigger("change");
                            $('#selected2').val('').trigger("change");
                            // $('#selected2').empty()
                            // loadquote()
                            document.getElementById('descriptionImg').value = ``;
                            $(`#additionalLinkDescription`).val('');
                            $(`#additionalLink`).val('');
                            // $('#step1').modal('hide');
                            $('.dz-preview').remove();
                            $('#btnSend').prop('disabled', true)
                            $('#dropzoneMytwo').removeClass('dz-started')
                        }
                    })
                } else {
                    ImgsArray = []

                    // LoadProof()
                    $('.btn-disable').prop('disabled', false)
                    Swal.fire({
                        title: 'Yêu cầu',
                        text: 'Minh chứng đã được thêm thành công',
                        type: 'info',
                        confirmButtonText: 'Thành công'
                    }).then((result) => {
                        if (result.value) {
                            // loadquote()
                            $('#selected2').val([]).trigger("change");
                            $('#selected2').val(null).trigger("change");
                            $('#selected2').val('').trigger("change");
                            // $('#selected2').empty()
                            document.getElementById('descriptionImg').value = ``;
                            $(`#additionalLinkDescription`).val('');
                            $(`#additionalLink`).val('');
                            // $('#step1').modal('hide');
                            $('#mySelect2').val(null).trigger('change');
                            $('.dz-preview').remove();
                            $('#btnSend').prop('disabled', true)
                            $('#dropzoneMytwo').removeClass('dz-started')
                        }
                    })
                }
            }
        })
    } catch (error) {
        return Swal.fire({
            title: 'Cảnh báo!',
            text: "Đã có lỗi xảy ra vui lòng thử lại!",
            type: 'warning',
        })
    }
}

function successProduct () {
    $('.btn-successProduct').prop('disabled', true)
    $.ajax({
        url: "changeStatusToSucessProduct",
        type: "POST",
        data: {
            productId: productsInfo
        },
        contenType: "aplication/json",
        success: function (ret) {
            $('.btn-successProduct').prop('disabled', false)
            if (ret.error) {
                Swal.fire({
                    title: 'Cảnh báo',
                    text: ret.data,
                    type: 'warning',
                })
            }
            if (ret.success) {
                loadFileId()
                Swal.fire({
                    title: 'Thành công',
                    text: 'Anh/Chị đã hoàn tất nộp minh chứng!',
                    type: 'success',
                })
            }
        }
    })
}

function showModal (_id, name) {
    nameContent = name
    requirement = _id
    document.getElementById('docu').innerHTML = nameContent
    document.getElementById('ImgModal-info-detailfile').innerHTML = ``
    document.getElementById('DocModal-info-detailfile').innerHTML = ``
    var _token = $('meta[name="csrf-token"]').attr('content');
    let obj = {
        _token:_token,
        proof_id: _id,
        product_id: productId,
        user_id: createdUserId
    }
    $.ajax({
        type: 'POST',
        contenType: "aplication/json",
        data: obj,
        url: "/getprooffile",
        success: function (data) {
            let Img
            let doc
            if (data.length > 0) {
                let img = ['.jpg', '.gif', '.png', '.jpeg', '.JPEG', '.PNG', '.JPG', '.GIF', '.jfif']
                let doc = ['.docx', '.DOCX', '.doc', '.DOC']
                let excel = ['.xls', '.XLS', '.xlsx', 'XLSX']
                let pdf = ['.pdf', '.PDF']
                let ppt = ['.ppt', '.pptx', '.pps', '.ppsx', '.PPT', '.PPTX', '.PPS', 'PPSX']
                let dot = false
                data.forEach((e) => {
                    if (e.type !== "INFO") {
                        $('#Text-cancel').css({ "display": "none" })
                        $('#body-Info').css({ "display": "" })
                        $('#Product').css({ "display": "none" })
                        $('#imgshow').show()
                        let link = `<img src="${e.data}" class="img-thumbnail" style="height: 121px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..." onclick="clickImg(\'${e.data}\')">`
                        // if (hasExtension(e.data, pdf)) {
                        //     link = `<a target="_blank" href="${e.data}"><img src="images/pdf.jpg" class="img-thumbnail" style="height: 121px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a>`
                        // }

                        if (hasExtension(e.data, img)) {
                            link = `<img id="zoomin${_id}" src="${e.data}" width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;" onclick="clickImg(\'${e.data}\')">`
                        } else if (hasExtension(e.data, doc)) {
                            link = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.data}"><img src="images/word.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
                        } else if (hasExtension(e.data, excel)) {
                            link = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.data}"><img src="images/excel.png"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
                        } else if (hasExtension(e.data, pdf)) {
                            link = `<a target="_blank" href="${e.data}"><img src="images/pdf.jpg" class="img-thumbnail" style="height: 121px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a>`
                        } else if (hasExtension(e.data, ppt)) {
                            link = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.data}"><img src="images/ppt.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
                        }
                        let textdes = e.description ? e.description : ''
                        if (textdes.length > 100) {
                            textdes = textdes.slice(0, 100);
                            dot = true
                        }
                        let deleteQuote = `<a href="##"  class="btn btn-sm btn-outline-secondary deleteQuote" role="button" onclick="deleteFile(\'${e.proof_file_id}\',\'${e.proof_information_id}\')" style="float: right;">Xóa</a>`
                        if (role == "helpteam") {
                            deleteQuote = ``
                        }
                        document.getElementById('ImgModal-info-detailfile').innerHTML += `
                            <div class="col-6">          
                            <div class="card mb-4 shadow-sm">
                                <a href="#">
                                ${link}
                                </a>

                                ${e.descriptionImg ? `
                                <div  class="tootip" id="tootip${e._id}" onmouseleave="tooltip(\'${e._id}\',1)">
                                    <span>
                                    ${e.descriptionImg}
                                    </span>
                                </div>
                                <div class="textDes">
                                ${textdes} ${dot ? `<a href="#" onmouseover="tooltip(\'${e._id}\',0)">...xem</a>` : ''}
                                </div>`: ''} 
                                <div class="textDesQueto" multiple id="${e.id}" style="    color: #039252;">
                                ${e.name_file}
                                </div>
                                <div style="padding:10px">
                                        <a  href="##" class="btn btn-sm btn-outline-secondary" role="button" onclick="editQuote(\'${e.proof_information_id}\', \'${e.description}\')" style="margin-right: 11px;" >Sửa</a>
                                        ${deleteQuote}
                                </div>
                                
                                </div>
                            </div>
                            </div>
                            `
                    }

                })
            } else {
                $('#Text-cancel').css({ "display": "" })
                $('#body-Info').css({ "display": "none" })
                $('#Product').css({ "display": "none" })
            }
        },
        error: function (err) {
        }
    });
}


// function showModal (_id, name) {
//     nameContent = name
//     requirement = _id
//     document.getElementById('docu').innerHTML = nameContent
//     document.getElementById('ImgModal-info').innerHTML = ``
//     document.getElementById('DocModal-info').innerHTML = ``
//     var _token = $('meta[name="csrf-token"]').attr('content');
//     let obj = {
//         _token:_token,
//         proof_id: _id,
//         product_id: productId
//     }
//     $.ajax({
//         type: 'POST',
//         contenType: "aplication/json",
//         data: obj,
//         url: "/getprooffile",
//         success: function (data) {
//             let Img
//             let doc
//             if (data.length > 0) {
//                 let pdf = ['.pdf', '.PDF']
//                 let doc = ['.docx', '.DOCX', '.doc', '.DOC']
//                 let excel = ['.xls', '.XLS', '.xlsx', 'XLSX']
//                 let ppt = ['.ppt', '.pptx', '.pps', '.ppsx', '.PPT', '.PPTX', '.PPS', 'PPSX']
//                 let dot = false
//                 data.forEach((e) => {
//                     if (e.type !== "INFO") {
//                         $('#Text-cancel').css({ "display": "none" })
//                         $('#body-Info').css({ "display": "" })
//                         $('#Product').css({ "display": "none" })
//                         if (e.type == "IMG") {
//                             $('#imgshow').show()
//                             let link = `<img src="${e.data}" class="img-thumbnail" style="height: 121px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..." onclick="clickImg(\'${e.data}\')">`
//                             if (hasExtension(e.data, pdf)) {
//                                 link = `<a target="_blank" href="${e.data}"><img src="images/pdf.jpg" class="img-thumbnail" style="height: 121px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a>`
//                             }
//                             let textdes = e.descriptionImg ? e.descriptionImg : ''
//                             if (textdes.length > 100) {
//                                 textdes = textdes.slice(0, 100);
//                                 dot = true
//                             }
//                             let deleteQuote = `<a href="##"  class="btn btn-sm btn-outline-secondary deleteQuote" role="button" onclick="deleteFile(\'${e._id}\',\'${e.requirementId}\')" style="float: right;">Xóa</a>`
//                             if (role == "helpteam") {
//                                 deleteQuote = ``
//                             }
//                             document.getElementById('ImgModal-info').innerHTML += `
//                                 <div class="col-6">
//                                 <div class="card mb-4 shadow-sm">
//                                     <a href="#">
//                                     ${link}
//                                     </a>
//                                     <div style="margin: 9px 0px;">
//                                     ${convertStatusProof(e.status)} ${e.isApprovalDis || e.isApprovalProvi ? '<span class="text-title-Status">( Đã duyệt )</span>' : ''}
//                                     </div>
//                                     ${e.descriptionImg ? `
//                                     <div  class="tootip" id="tootip${e._id}" onmouseleave="tooltip(\'${e._id}\',1)">
//                                         <span>
//                                         ${e.descriptionImg}
//                                         </span>
//                                     </div>
//                                     <div class="textDes">
//                                     ${textdes} ${dot ? `<a href="#" onmouseover="tooltip(\'${e._id}\',0)">...xem</a>` : ''}
//                                     </div>`: ''}
//                                     <div class="textDesQueto" multiple id="${e._id}" style="    color: #df293b;">
//                                     </div>
//                                     <div style="padding:10px">
//                                             <a  href="##" class="btn btn-sm btn-outline-secondary" role="button" onclick="editQuote(\'${e._id}\')" style="margin-right: 11px;" >Sửa</a>
//                                             ${deleteQuote}
//                                     </div>

//                                     </div>
//                                 </div>
//                                 </div>
//                                 `

//                             if (e.quotes.length > 0) {
//                                 e.quotes.forEach((item) => {
//                                     let opiton = `<option selected>${item.nameQuote}</option>`
//                                     $(`#${e._id}`).append(opiton)
//                                 })

//                             }
//                         } else if (e.type == "LINK") {
//                             let textdes = e.descriptionImg ? e.descriptionImg : ''
//                             if (textdes.length > 100) {
//                                 textdes = textdes.slice(0, 20);
//                                 dot = true
//                             }
//                             document.getElementById('ImgModal-info').innerHTML += `
//                                 <div class="col-6">
//                                 <div class="card mb-4 shadow-sm">
//                                     <a href="${e.data}" target="_blank">
//                                         <img src="img/linkicon.jpg" style="object-fit: fit;width: 100%;padding: 11px; height: 121px;">
//                                         <div style="margin: 9px 0px;">
//                                         ${convertStatusProof(e.status)} ${e.isApprovalDis || e.isApprovalProvi ? '<span class="text-title-Status">( Đã duyệt )</span>' : ''}
//                                         </div>
//                                         <div class="textDes">${textdes}${dot ? `...` : ''}</div>
//                                     </a>
//                                     <div class="textDesQueto" multiple id="${e._id}" style="color: #df293b;">
//                                     </div>
//                                     <div style="padding:10px">
//                                             <a  href="##" class="btn btn-sm btn-outline-secondary" role="button" onclick="editQuote(\'${e._id}\')" style="margin-right: 11px;" >Sửa</a>
//                                             <a href="##" class="btn btn-sm btn-outline-secondary deleteFileBtn" role="button" onclick="deleteFile(\'${e._id}\',\'${e.requirementId}\')" style="float: right;">Xóa</a>
//                                     </div>

//                                     </div>
//                                 </div>
//                                 </div>
//                                 `
//                             if (role == 'helpteam') {
//                                 $('.deleteFileBtn').hide();
//                             }
//                             if (e.quotes.length > 0) {
//                                 e.quotes.forEach((item) => {
//                                     let opiton = `<option selected>${item.nameQuote}</option>`
//                                     $(`#${e._id}`).append(opiton)
//                                 })
//                             }
//                         } else if (e.type == "DOC") {
//                             $('#DocModal-info1').show()
//                             let namefile = ''
//                             if (e.descriptionImg) {
//                                 namefile = `<div class="textDes">${e.descriptionImg} </div>`
//                             }
//                             let doclink = `<a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.data}" >${namefile}</a>`
//                             // if (hasExtension(e.data, pdf)) {
//                             //     doclink = `<a target="_blank" href="${e.data}" >${namefile}</a>`
//                             // }
//                             if (hasExtension(e.data, doc)) {
//                                 doclink = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.data}"><img src="images/word.jpg" style="object-fit: cover;cursor: zoom-in;width: 100%;padding: 11px;border-radius: 17%;height: 121px;">${namefile}</a> `
//                             } else if (hasExtension(e.data, excel)) {
//                                 doclink = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.data}"><img src="images/excel.png" style="object-fit: cover;cursor: zoom-in;width: 100%;padding: 11px;border-radius: 17%;height: 121px;">${namefile}</a> `
//                             } else if (hasExtension(e.data, pdf)) {
//                                 doclink = ` <a target="_blank" href="${e.data}"><img src="images/pdf.jpg" style="object-fit: cover;cursor: zoom-in;width: 100%;padding: 11px;border-radius: 17%;height: 121px;">${namefile}</a> `
//                             } else if (hasExtension(e.data, ppt)) {
//                                 doclink = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.data}"><img src="images/ppt.jpg" style="object-fit: cover;cursor: zoom-in;width: 100%;padding: 11px;border-radius: 17%;height: 121px;">${namefile}</a> `
//                             }
//                             document.getElementById('DocModal-info').innerHTML += `
//                             <div class="col-6" id="oveflow" style="overflow: hidden;">
//                                 <div class="card mb-4 shadow-sm">
//                                     <div style="margin: 9px 0px;">
//                                     ${convertStatusProof(e.status)} ${e.isApprovalDis || e.isApprovalProvi ? '<span class="text-title-Status">( Đã duyệt )</span>' : ''}
//                                     </div>
//                                     ${doclink}
//                                     <div class="textDesQueto" multiple id="${e._id}" style="    color: #df293b;">
//                                     </div>
//                                     <div style="padding:10px">
//                                          <a  href="#" class="btn btn-sm btn-outline-secondary" style="margin-right: 11px;" role="button" onclick="editQuote(\'${e._id}\')" style="margin-right: 11px;" >Sửa</a>
//                                         <a  href="#" class="btn btn-sm btn-outline-secondary deleteFileBtn" role="button" onclick="deleteFile(\'${e._id}\',\'${e.requirementId}\')" style="float: right;">Xóa</a>
//                                     </div>
//                                 </div>
//                             </div>
//                             `
//                             if (role == 'helpteam') {
//                                 $('.deleteFileBtn').hide();
//                             }
//                             if (e.quotes.length > 0) {
//                                 e.quotes.forEach((item) => {
//                                     let opiton = `<option selected>${item.nameQuote}</option>`
//                                     $(`#${e._id}`).append(opiton)
//                                 })
//                             }
//                         } else if (e.type == "TEXT") {
//                             $('#Text-cancel').css({ "display": "none" })
//                             $('#body-Info').css({ "display": "none" })
//                             $('#Product').css({ "display": "" })
//                         }
//                     } else {
//                         $('#Text-cancel').css({ "display": "none" })
//                         $('#body-Info').css({ "display": "none" })
//                         $('#Product').css({ "display": "" })
//                         data.forEach((e) => {
//                             let marketList = '';
//                             let qualityList = '';
//                             let customerList = '';
//                             let incomeList = '';
//                             e.Data.Des.marketRange.forEach(range => {
//                                 marketList += `<li>${range}</li>`
//                             });
//                             e.fileInfo[0].Des.qualityTarget.forEach(target => {
//                                 qualityList += `<li>${target}</li>`
//                             });
//                             e.Data.Des.customerTarget.forEach(target => {
//                                 customerList += `<li>${target}</li>`
//                             });
//                             e.Data.Des.incomeTarget.forEach(target => {
//                                 incomeList += `<li>${target}</li>`
//                             });
//                             document.getElementById('Product-info').innerHTML = `
//                             <div id="main-wrapper" >
//                                 <div class="container-fluid>
//                                     <div class="mt-3">
//                                         <form class="form-material">
//                                             <div class="form-control">
//                                                 <label for="productName">
//                                                     <div class="numberCircle">01</div><b>
//                                                         TÊN SẢN PHẨM</b>
//                                                 </label><br>
//                                                 <input type="text" id="productName" name="productName" value="${e.fileInfo[0].name}"
//                                                     class="form-control form-control-line pl-3" placeholder="Nhập tên hoặc ý tưởng sản phẩm">
//                                             <br><br>
//                                             </div>
//                                             <div class="form-control">
//                                                 <label for="productName">
//                                                     <div class="numberCircle">02</div><b>
//                                                         MÔ TẢ SẢN PHẨM</b>
//                                                 </label><br>
//                                                 <b class="mt-3">a. Giá trị mục tiêu của sản phẩm/phần cốt lõi</b>
//                                                 <input type="text" id="productValue" name="" value="${e.Data.Des.value}"
//                                                     class="form-control form-control-line pl-3"
//                                                     placeholder="Lý do khiến khách hàng muốn mua sản phẩm">
//                                                 <b class="mt-3">b. Quy cách đóng gói</b>
//                                                 <input type="text" id="packingMethod" name="" value="${e.Data.Des.packingMethod}"
//                                                     class="form-control form-control-line pl-3"
//                                                     placeholder="Ví dụ: đóng túi, chai, lọ, ...">
//                                                 <b class="mt-3">c. Tên nhãn hiệu sản phẩm/dịch vụ dự kiến</b>
//                                                 <input type="text" id="brandName" name="" value="${e.Data.Des.brandName}"
//                                                     class="form-control form-control-line pl-3" placeholder="Nhập tên bạn dự kiến đặt">
//                                                 <b class="mt-3">d. Mục tiêu chất lượng của sản phẩm</b>
//                                                 <br>
//                                                 <!-- <div class="container">
//                                                     <input type="checkbox" class="inp-cbx" id="vehicle1" style="display: none;">
//                                                     <label class="cbx" for="vehicle1">
//                                                         <span>
//                                                             <svg width="12px" height="10px" viewbox="0 0 12 10">
//                                                                 <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
//                                                             </svg>
//                                                         </span><span> Cho thị trường quốc tế</span></label><br> -->
//                                                 <div id="quality-target">
//                                                     <ul>${qualityList}</ul>
//                                                 </div>
//                                             </div>
//                                             <div class="form-control">
//                                                 <b>đ. Mục tiêu thị trường tiêu thụ</b>
//                                                 <div>
//                                                     Phạm vi tiêu thụ
//                                                     <div class="row container" id="range-market">
//                                                         <ul>${marketList}</ul>
//                                                     </div>
//                                                 </div>
//                                                 <div>
//                                                     Đối tượng khách hàng
//                                                     <div class="row container" id="customerTarget">
//                                                         <ul>${customerList}</ul>
//                                                     </div>
//                                                 </div>
//                                                 <div>
//                                                     Đối tượng khách hàng có thu nhập
//                                                     <div class="row container" id="incomeTarget">
//                                                     <ul>${incomeList}</ul>
//                                                     </div>
//                                                 </div>
//                                             </div>

//                                             <div class="form-control mt-3">
//                                                 <b class="mt-3">e. Đối thủ cạnh tranh</b>
//                                                 <div>Các sản phẩm tương tự đã có trên thị trường</div>
//                                                 <input id="competitorProducts" type="text" name="" value="${e.Data.CompetitorProducts}" class="form-control form-control-line pl-3"
//                                                     placeholder="Các sản phẩm tương tự đã có trên thị trường">
//                                                 <div>Điểm mới, điểm khác biệt của sản phẩm</div>
//                                                 <input id="Advantages" type="text" name="" value=${e.Data.Advantages}"" class="form-control form-control-line pl-3"
//                                                     placeholder="Sản phẩm của bạn có gì nổi bật?">
//                                                 <b class="mt-3">g. Quy mô thị trường dự kiến</b>
//                                                 <div>Lượng sản phẩm hoặc khách hàng dự kiến</div>
//                                                 <input id="PredictNumber" type="text" name="" value="${e.Data.PredictNumber}" class="form-control form-control-line pl-3"
//                                                     placeholder="Số sản phẩm, khách hàng/năm">
//                                                 <b class="mt-3">h. Giá bán dự kiến đến tay người tiêu dùng</b>
//                                                 <input id="expectedPrice" style="width: 50%;" type="number" name="" value="${e.Data.ExpectedPrice}"
//                                                     class="form-control form-control-line pl-3" placeholder="0"><span>VNĐ/sản
//                                                     phẩm</span>
//                                                 <br>
//                                             </div>
//                                             <div class="form-control mt-5">
//                                                 <b>i. Câu chuyện về sản phẩm</b>
//                                                 <div>Nguồn gốc lịch sử</div>
//                                                 <input id="historyOrigin" type="text" name="" value="${e.fileInfo[0].History}" class="form-control form-control-line pl-3"
//                                                     placeholder="Nguồn gốc lịch sử ra đời của sản phẩm">
//                                                 <div>Yếu tố văn hóa</div>
//                                                 <input id="cultureElement" type="text" name="" value="${e.fileInfo[0].Culture}" class="form-control form-control-line pl-3"
//                                                     placeholder="Sản phẩm mang ý nghĩa văn hóa gì?">
//                                                 <div>Yếu tố địa danh</div>
//                                                 <input id="geoElement" type="text" name="" value="${e.fileInfo[0].GeoElement}" class="form-control form-control-line pl-3"
//                                                     placeholder="Sản phẩm mang ý nghĩa địa phương thế nào?">
//                                                 <div>Yếu tố khác (nếu có)</div>
//                                                 <input id="otherElement" type="text" name="" value="${e.fileInfo[0].OtherElement}" class="form-control form-control-line pl-3"
//                                                     placeholder="Các yếu tố khác liên quan đến sản phẩm"><br>
//                                             </div>
//                                             <br>
//                                             <div class="form-control">
//                                                 <label for="productName">
//                                                     <div class="numberCircle">03</div><b>
//                                                         TÍNH MỚI CỦA SẢN PHẨM</b>
//                                                 </label><br>
//                                                 <div class="container" id="novelty">
//                                                     <li>${e.Data.Novelty}</li>
//                                                 </div>
//                                                 <br>
//                                             </div>
//                                             <div class="form-control">
//                                                 <label for="productName">
//                                                     <div class="numberCircle">04</div><b>
//                                                         MỨC ĐỘ MINH CHỨNG ĐẠT ĐƯỢC</b>
//                                                 </label><br>
//                                                 <div class="row text-center">
//                                                 <ul>
//                                                     <li>${e.Data.Evaluate}</li>
//                                                 </ul>
//                                                 </div>
//                                             </div>
//                                             <div class="form-control">
//                                                 <label for="productName">
//                                                     <div class="numberCircle">05</div><b>
//                                                         MỨC ĐỘ KHÓ KHĂN KHI NỘP MINH CHỨNG</b>
//                                                 </label><br>
//                                                 <div class="row text-center">
//                                                 <ul>
//                                                 <li>${e.Data.Difficulty}</li>
//                                                 </ul>
//                                                 </div>
//                                                 <br>
//                                             </div>
//                                     </div>
//                                     </form>
//                                 </div>
//                             </div>
//                       `
//                         })
//                     }

//                 })
//             } else {
//                 $('#Text-cancel').css({ "display": "" })
//                 $('#body-Info').css({ "display": "none" })
//                 $('#Product').css({ "display": "none" })
//             }
//         },
//         error: function (err) {
//         }
//     });
// }
const convertStatusProof = (status) => {
    switch (status) {
        case 'NEW':
            return '<span class="text-title-Status">Mới cập nhật</span>'

        default:
            return ''
    }
}
const editQuote = (id, description) => {
    proofInfo = (id)
    $("#selected2Queto").val([]).trigger("change");
    $('#step2').modal('toggle');
    $('#stepEdit').modal('show');
    document.getElementById('imgQueto').innerHTML = ``
    descriptionImgQuote.value = description
    buttonQuote.innerHTML = ``
    buttonQuote.innerHTML = `
    <a href="#" class="btn btn-secondary" data-dismiss="modal" style="    width: 122px;
    height: 40px;
    border-radius: 8px;
    background-color: #eff0f1;">Đóng</a>
    <button href="#" class="btn btn-success" onclick="savepoof(\'${id}\')" style="    width: 140px;
    height: 40px;
    border-radius: 8px;
    background-color: #049252;" id="savePoofQuote">Lưu</button>
    `
}
// const editQuote = (id) => {
//     proofInfo = (id)
//     $("#selected2Queto").val([]).trigger("change");
//     $('#step2').modal('toggle');
//     $('#stepEdit').modal('show');
//     $.ajax({
//         url: "findQuote?id=" + id,
//         type: "GET",
//         success: function (ret) {
//             if (ret.length > 0) {
//                 document.getElementById('imgQueto').innerHTML = ``
//                 let link = `<img src="${ret[0].data}" width="100px" height="100px" style="object-fit: cover;cursor: zoom-in;border-radius: 15px;" onclick="clickImg(\'${ret[0].data}\')">`
//                 if (hasExtension(ret[0].data, doc)) {
//                     link = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${ret[0].data}"><img src="images/word.jpg" style="object-fit: cover;cursor: zoom-in; width="100px"; height="100px";padding: 11px;border-radius: 17%;height: 121px;"></a> `
//                 } else if (hasExtension(ret[0].data, excel)) {
//                     link = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${ret[0].data}"><img src="images/excel.png" style="object-fit: cover;cursor: zoom-in; width="100px"; height="100px";padding: 11px;border-radius: 17%;height: 121px;" ></a> `
//                 } else if (hasExtension(ret[0].data, pdf)) {
//                     link = ` <a target="_blank" href="${ret[0].data}"><img src="images/pdf.jpg" style="object-fit: cover;cursor: zoom-in; width="100px"; height="100px";padding: 11px;border-radius: 17%;height: 121px;" ></a> `
//                 } else if (ret[0].type == 'LINK') {
//                     link = ` <a target="_blank" href="${ret[0].data}">${ret[0].data}</a> `
//                 }
//                 descriptionImgQuote.value = ret[0].descriptionImg
//                 document.getElementById('imgQueto').innerHTML = `${link}`
//                 let arrRe = []
//                 ret[0].quotes.forEach((item) => {
//                     arrRe.push(item.index)
//                 })
//                 $('#selected2Queto').val(arrRe);
//                 $('#selected2Queto').trigger('change');
//                 buttonQuote.innerHTML = ``
//                 buttonQuote.innerHTML = `
//                 <a href="#" class="btn btn-secondary" data-dismiss="modal" style="    width: 122px;
//                 height: 40px;
//                 border-radius: 8px;
//                 background-color: #eff0f1;">Đóng</a>
//                 <button href="#" class="btn btn-success" onclick="savepoof(\'${ret[0]._id}\')" style="    width: 140px;
//                 height: 40px;
//                 border-radius: 8px;
//                 background-color: #049252;" id="savePoofQuote">Lưu</button>
//                 `
//             }
//         }
//     })
// }
const savepoof = (id) => {
    var _token = $('meta[name="csrf-token"]').attr('content');
    let objquote = {
        _token:_token,
        product_id: productId,
        proof_information_id: id,
        description: descriptionImgQuote.value
    }
    $.ajax({
        url: "updateproofinformation",
        type: "POST",
        data: objquote,
        contenType: "aplication/json",
        success: function (response) {
            if (response === 'success') {
                Swal.fire({
                    title: 'Yêu cầu',
                    text: 'Cập nhật thành công',
                    type: 'info',
                    confirmButtonText: 'Thành công'
                }).then((result) => {
                })
            }else{
                Swal.fire({
                    title: 'Cảnh báo',
                    text: 'Cập nhật thất bại',
                    type: 'warning',
                    confirmButtonText: 'Đóng'
                }).then((result) => {
                })
            }
        }
    })

}
// const savepoof = (id) => {
//     $('#savePoofQuote').prop("disabled", true);
//     let data = $("#selected2Queto").select2('data')
//     let arr = []
//     data.forEach((e) => {
//         let obj = {
//             index: e.id,
//             memQuote: IdMember,
//             nameQuote: e.text,
//             poofQuote: id,
//             productId: productsInfo
//         }
//         arr.push(obj)
//     })
//     let objquote = {
//         productId: productsInfo,
//         id: id,
//         descriptionImg: descriptionImgQuote.value
//     }
//     if (arr.length > 0) {
//         objquote.data = JSON.stringify(arr)
//     }
//     $.ajax({
//         url: "saveQueto",
//         type: "POST",
//         data: objquote,
//         contenType: "aplication/json",
//         success: function (ret) {
//             if (ret) {
//                 $('#savePoofQuote').prop("disabled", false);
//                 Swal.fire({
//                     title: 'Yêu cầu',
//                     text: 'Bạn đã thêm viện dẫn minh chứng thành công',
//                     type: 'info',
//                     confirmButtonText: 'Thành công'
//                 }).then((result) => {
//                     if (result.value) {
//                         // loadquote()

//                     }
//                 })
//             }
//         }
//     })

// }
$('#selected2Queto').on('select2:unselect', function (e) {
    let id = e.params.data.id.split('-')
    let obj = {
        index: id,
        poofQuote: proofInfo,
        productId: productsInfo
    }
    $.ajax({
        url: "deleteQuote",
        type: "POST",
        data: obj,
        success: (ret) => {
            console.log('deleteQuote: ', ret)
        }
    })
})
const backModal = () => {
    $('#step2').modal('show');
    $('#stepEdit').modal('toggle');
    showModal(requirement, nameContent)
}
const tooltip = (id, role) => {
    if (role == "0") {
        $(`#tootip${id}`).show()
    } else {
        $(`#tootip${id}`).hide()
    }

}
function hasExtension (fileName, exts) {
    return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
}
function getYoutubeId (url) {
    const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
    const match = url.match(regExp);
    return (match && match[2].length === 11) ? match[2] : null;
}

function showSupportModal (item) {
    $(`#requirementName`)[0].innerHTML = ``;
    $(`#explainDiv`)[0].innerHTML = ``;
    $(`#tutorialDocDiv`)[0].innerHTML = ``;
    $(`#tutorialVideoDiv`)[0].innerHTML = ``;
    $.ajax({
        type: 'POST',
        url: "/getSupDoc",
        data: {
            "_token": csrfHidden,
            "productId": item.product_id,
            "supId": item.sup_id
        },
        success: function (data) {
            if (data) {
                // $(`#requirementName`)[0].innerHTML = item.content;
                $(`#explainDiv`)[0].innerHTML = item.explain;
                data.forEach(doc => {
                    if (doc.type === 'doc'){
                        $(`#tutorialDocDiv`).append(`
                            <button onclick='openDataLink(${JSON.stringify(doc.link)})' class="btn btn-block" style="border: 1px solid #e2e0e0;"><span style="float: left">${doc.name}</span> <span style="float: right"><i class="fas fa-cloud-download-alt"></i></span></button>
                        `);
                    }
                });
                data.forEach(video => {
                    if (video.type === "video"){
                        let ytVideoId = getYoutubeId(video.link);
                        $(`#tutorialVideoDiv`).append(`
                            <div class="text-center">
                                <iframe style="width: 100%" height="315" src="https://www.youtube.com/embed/${ytVideoId}"></iframe>
                            </div>
                        `);
                    }
                });
            }
        }
    });
}

const openDataLink = (dataLinks) => {
    dataLinks.forEach(link => {
        window.open(link);
    });
}

function loadquote () {
    $('#selected2Queto').val([]).trigger("change");
    $('#selected2Queto').val(null).trigger("change");
    $('#selected2Queto').val('').trigger("change");
    $('#selected2Queto').empty()
    idcheck = []
    arrId = []
    $.ajax({
        url: "getevalute_questionsBy?id=" + productsInfo,
        type: "GET",
        success: function (ret) {
            if (ret) {
                xuly(ret)
            }
        }
    })
}
function xuly (data) {
    let arr = []
    let arrQuote = []
    idcheck = []
    arrId = []
    data.forEach((data => {
        arrays.push(data.fileInfo)
        for (let i = 0; i < data.fileInfo.detail.length; i++) {
            let obj
            let objQuote
            if (data.fileInfo.detail[i].lvl2Questions) {
                if (data.fileInfo.detail[i].lvl2Questions.length > 0) {
                    for (let j = 0; j < data.fileInfo.detail[i].lvl2Questions.length; j++) {
                        if (data.fileInfo.detail[i].lvl2Questions[j].requirement) {
                            data.fileInfo.detail[i].lvl2Questions[j].requirement.forEach((x) => {
                                if (x.requirement == requirement && x.productsInfo == productsInfo) {
                                    let id = `${data.fileInfo._id}-${data.fileInfo.sectionIndex}-${i + 1}-${j + 1}`
                                    idcheck.push(id)
                                }
                            })
                        }
                        objQuote = {
                            index: `${data.fileInfo.sectionIndex}.detail[${i}].lvl2Questions[${j}]`
                        }
                        obj = {
                            sectionIndex: `${data.fileInfo.sectionIndex}.${i + 1}.${j + 1}`,
                            id: data.fileInfo.sectionIndex,
                            idparent: i + 1,
                            idparent2: j + 1,
                            _id: data.fileInfo._id,

                        }
                        if (data.fileInfo.detail[i].lvl2Questions[j].question) {
                            obj.text = data.fileInfo.detail[i].lvl2Questions[j].question
                            objQuote.text = data.fileInfo.detail[i].lvl2Questions[j].question
                        } else {
                            obj.text = `${data.fileInfo.sectionIndex}.${i + 1}.${j + 1}`
                            objQuote.text = `${data.fileInfo.sectionIndex}.${i + 1}.${j + 1}`
                        }
                        arr.push(obj)
                        arrQuote.push(objQuote)
                    }
                } else {
                    if (data.fileInfo.detail[i].requirement) {
                        data.fileInfo.detail[i].requirement.forEach((x) => {
                            if (x.requirement == requirement && x.productsInfo == productsInfo) {
                                let id = `${data.fileInfo._id}-${data.fileInfo.sectionIndex}-${i + 1}`
                                idcheck.push(id)
                            }
                        })

                    }
                    objQuote = {
                        index: `${data.fileInfo.sectionIndex}.detail[${i}]`
                    }
                    obj = {
                        sectionIndex: `${data.fileInfo.sectionIndex}.${i + 1}`,
                        id: data.fileInfo.sectionIndex,
                        idparent: i + 1,
                        _id: data.fileInfo._id,
                    }
                    if (data.fileInfo.detail[i].question) {
                        obj.text = data.fileInfo.detail[i].question
                        objQuote.text = data.fileInfo.detail[i].question
                    } else {
                        obj.text = `${data.fileInfo.sectionName}`
                        objQuote.text = `${data.fileInfo.sectionName}`
                    }
                    if (data.fileInfo.detail[i].contentType == "answer") {
                        obj.text = data.fileInfo.sectionName
                        objQuote.text = data.fileInfo.sectionName
                    }
                    arr.push(obj)
                    arrQuote.push(objQuote)
                }
            } else {
                if (data.fileInfo.detail[i].requirement) {
                    data.fileInfo.detail[i].requirement.forEach((x) => {
                        if (x.requirement == requirement && x.productsInfo == productsInfo) {
                            let id = `${data.fileInfo._id}-${data.fileInfo.sectionIndex}-${i + 1}`
                            idcheck.push(id)
                        }
                    })

                }
                objQuote = {
                    index: `${data.fileInfo.sectionIndex}.detail[${i}]`
                }
                obj = {
                    sectionIndex: `${data.fileInfo.sectionIndex}.${i + 1}`,
                    id: data.fileInfo.sectionIndex,
                    idparent: i + 1,
                    _id: data.fileInfo._id,
                }
                if (data.fileInfo.detail[i].question) {
                    objQuote.text = data.fileInfo.detail[i].question
                    obj.text = data.fileInfo.detail[i].question
                } else {
                    objQuote.text = data.fileInfo.detail[i].question
                    obj.text = `${data.fileInfo.sectionIndex}`
                }
                if (data.fileInfo.detail[i].contentType == "answer") {
                    obj.text = data.fileInfo.sectionName
                    objQuote.text = data.fileInfo.sectionName
                }
                arr.push(obj)
                arrQuote.push(objQuote)
            }
        }
    }))
    arrQuote.forEach((data) => {
        let c = new Option(data.text, `${data.index}`);
        $('#selected2Queto').append(c)
    })
    arr.forEach((data) => {
        if (data.idparent2) {
            let p = new Option(data.text, `${data._id}-${data.id}-${data.idparent}-${data.idparent2}`);
            $('#selected2').append(p)
        } else {
            let p = new Option(data.text, `${data._id}-${data.id}-${data.idparent}`);
            $('#selected2').append(p)
        }

    })
    // if (idcheck.length > 0) {
    //     $('#selected2').val(idcheck).trigger('change')
    // }
    let arrs = []
    // $('#selected2').on('select2:unselect', function (e) {
    //     let id = e.params.data.id.split('-')
    //     arrays.forEach((c) => {
    //         if (c._id == id[0]) {
    //             arrs.push(c)
    //         }
    //     })
    //     var uniqueArray = removeDuplicates(arrs, "_id");
    //     if (id.length == 3) {
    //         for (let j = 0; j < uniqueArray.length; j++) {
    //             if (uniqueArray[j].sectionIndex == Number(id[1])) {
    //                 if (uniqueArray[j].detail[Number(id[2] - 1)].requirement) {
    //                     for (let m = 0; m < uniqueArray[j].detail[Number(id[2] - 1)].requirement.length; m++) {
    //                         // if (uniqueArray[j].detail[Number(id[2] - 1)].requirement[m].productsInfo == productsInfo && uniqueArray[j].detail[Number(id[2] - 1)].requirement[m].requirement == requirement) {
    //                         //     console.log('đã vào')
    //                             // uniqueArray[j].detail[Number(id[2] - 1)].requirement.splice(m, 2)
    //                             let new_arr = uniqueArray[j].detail[Number(id[2] - 1)].requirement.filter(item =>  (item.productsInfo==productsInfo && item.requirement !== requirement)||(item.productsInfo!==productsInfo && item.requirement !== requirement) );
    //                             uniqueArray[j].detail[Number(id[2] - 1)].requirement = new_arr
    //                         // }

    //                     }
    //                 }
    //             }
    //         }


    //     } else if (id.length == 4) {
    //         for (let j = 0; j < uniqueArray.length; j++) {
    //             if (uniqueArray[j].sectionIndex == Number(id[1])) {
    //                 if (uniqueArray[j].detail[Number(id[2] - 1)].lvl2Questions[Number(id[3] - 1)].requirement) {
    //                     for (let m = 0; m < uniqueArray[j].detail[Number(id[2] - 1)].lvl2Questions[Number(id[3] - 1)].requirement.length; m++) {
    //                         let new_arr = uniqueArray[j].detail[Number(id[2] - 1)].lvl2Questions[Number(id[3] - 1)].requirement.filter(item => (item.productsInfo==productsInfo && item.requirement !== requirement)||(item.productsInfo!==productsInfo && item.requirement !== requirement));
    //                         uniqueArray[j].detail[Number(id[2] - 1)].lvl2Questions[Number(id[3] - 1)].requirement = new_arr
    //                         // if (uniqueArray[j].detail[Number(id[2] - 1)].lvl2Questions[Number(id[3] - 1)].requirement[m].productsInfo == productsInfo && uniqueArray[j].detail[Number(id[2] - 1)].lvl2Questions[Number(id[3] - 1)].requirement[m].requirement == requirement) {
    //                         //     uniqueArray[j].detail[Number(id[2] - 1)].lvl2Questions[Number(id[3] - 1)].requirement.splice(m, 1)
    //                         // }
    //                     }
    //                 }
    //             }
    //         }
    //     }
    //     $.ajax({
    //         url: "addquote",
    //         data: { data: JSON.stringify(uniqueArray) },
    //         type: "POST",
    //         success: function (ret) {
    //             if (ret) {
    //                 Swal.fire({
    //                     title: 'Thành công',
    //                     text: 'Bạn đã xóa thành công viện dẫn minh chứng ',
    //                     type: 'info',
    //                     confirmButtonText: 'Thành công'
    //                 })
    //             }
    //         }
    //     })
    // });
}


function removeDuplicates (originalArray, prop) {
    var newArray = [];
    var lookupObject = {};

    for (var i in originalArray) {
        lookupObject[originalArray[i][prop]] = originalArray[i];
    }

    for (i in lookupObject) {
        newArray.push(lookupObject[i]);
    }
    return newArray;
}
function removeA (arr) {
    var what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax = arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}
// function deleteFile (id, _idproof) {
//     Swal.fire({
//         title: 'Cảnh báo',
//         text: 'Anh/Chị có muốn xóa minh chứng',
//         type: 'warning',
//         confirmButtonText: 'Đồng ý',
//         cancelButtonText: 'Đóng',
//         showCancelButton: true,
//         //  ButtonText: 'Đồng ý'
//     }).then((result) => {
//         if (result.value) {
//             $.ajax({
//                 type: 'POST',
//                 contentType: 'application/json',
//                 url: "/DeleteGetPrr",
//                 data: JSON.stringify({
//                     id: id,
//                     productsInfo
//                 }),
//                 success: function (data) {
//                     LoadProof()
//                     showModal(_idproof, nameContent)
//                 }
//             });
//         }
//     })

// }
function deleteFile (id, _idproof) {
    Swal.fire({
        title: 'Cảnh báo',
        text: 'Bạn có muốn xóa minh chứng',
        type: 'warning',
        confirmButtonText: 'Đồng ý',
        cancelButtonText: 'Đóng',
        showCancelButton: true,
        //  ButtonText: 'Đồng ý'
    }).then((result) => {
        if (result.value) {
            var _token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                type: 'POST',
                url: "/deleteprooffile",
                data: {
                    "_token":_token,
                    "id": id
                },
                success: function (data) {
                    LoadProof()
                    showModal(_idproof, nameContent)
                }
            });
        }
    })

}
function loadwswal (idrement) {
    let data = document.getElementById('idText').value
    let obj = {
        Question: data,
        _Idrequirement: idrement,
        productsInfo: productsInfo
    }
    $.ajax({
        url: "SavequesttionModel",
        type: "POST",
        data: obj,
        success: function (ret) {
            if (ret) {
                document.getElementById('idText').value = ''
                Swal.fire({
                    title: 'Yêu cầu',
                    text: 'Câu hỏi của bạn đã được gửi lên hệ thống. Chúng tôi sẽ phản hồi sơm nhất ',
                    type: 'success',
                    confirmButtonText: 'Thành công'
                })
            }
        }
    })
}

// function clickImg(src){
//     var modal;
//     function removeModal(){ modal.remove(); $('body').off('keyup.modal-close'); }
//     modal = $('<div>').css({
//         background: `RGBA(0,0,0,.5) url('${src}') no-repeat center`,
//         backgroundSize: 'contain',
//         width:'100%', height:'100%',
//         position:'fixed',
//         zIndex:'10000',
//         top:'0', left:'0',
//         cursor: 'zoom-out'
//     }).click(function(){
//         removeModal();
//     }).appendTo('body');
//     //handling ESC
//     $('body').on('keyup.modal-close', function(e){
//       if(e.key==='Escape'){ removeModal(); }
//     });
// }

const getMemberInfo = () => {
    $.ajax({
        type: `GET`,
        url: `/getAccountInfo`,
        success: (data) => {

            if (data.data) {
                memberInfo = data.data;
                loadFileId()

            } else {
                Swal.fire('Cảnh báo', data.message, 'warning').then(result => {
                    if (result.value) {
                        window.location.href = `/login`;
                    }
                });
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    })
}

function loadFileId () {
    $.ajax({
        url: "getproductfilesById/" + productsInfo,
        type: "GET",
        success: function (ret) {
            drawFile(ret)
            LoadProof()
        }
    })
}

function drawFile (data) {
    console.log(data, 98)
    document.getElementById('headerFile').innerHTML = ``
    let status
    data.forEach((e) => {
        let statusShowButton = false
        if (e.confirm) {
            confirmCheck = true
        }
        if (e.status === 'Submiting') {
            isStatusProduct = true
            statusShowButton = true
            status = '<span class="label label-primary">Đang nộp</span>';
        } else if (e.status === 'Done') {
            status = '<span class="label label-info">Hoàn thành</span>';
        } else if (e.status === 'Ranked') {
            status = '<span class="label label-success">Đã xếp hạng</span>';
        } else if (e.status === 'Fail') {
            status = '<span class="label label-danger">Không đạt</span>';
        } else if (e.status === 'Preparing') {
            isStatusProduct = true
            statusShowButton = true
            status = '<span class="label label-inverse">Chưa nộp</span>';
        } else if (e.status === 'Waitting') {
            status = '<span class="label label-light" style="background-color: #7f7c7c">Chờ chấm</span>';
        } else if (e.status === 'districtRanked') {
            status = '<span class="label label-success">Cấp huyện đã xếp hạng</span>';
            if (memberInfo.level === 1) {
                level = 1
            }
        } else if (e.status == 'provinceRanked') {
            status = '<span class="label label-success">Cấp tỉnh đã xếp hạng</span>';
            if (memberInfo.level === 0) {
                level = 0
            }
        }
        if (statusShowButton) {
            $('.btn-successProduct').show()
        } else {
            $('.btn-successProduct').hide()
        }
        document.getElementById('headerFile').innerHTML = `
                  <div class="col-8" style="padding: 0;    display: flex;">
                     <img src="${e.imgUrl.length > 0 ? e.imgUrl[0] : '/img/noavatar.png'}" alt="user" class="img-circle" style="margin-top: 10px;margin-right: 21px;width: 62px;height: 62px;">
                      <div class="mail-contnet" style="padding-top: 10px;width:100%">
                          <h5 class=".Text-proofTitile">${e.name}</h5>
                          <span class="mail-desc">Tên chủ thể: ${e.Entity.name}</span><br>
                          <span class="mail-desc">Mã sản phẩm : ${e.code}</span>
                          <div class="comment-footer m-b-10">
                              ${status}			
                          </div>
                      </div>
                  </div>
                `
    })
}

const getAllowUpProof = () => {
    $.ajax({
        url: `/getAllowProofProduct?productId=${productsInfo}`,
        type: "GET",
        success: function (ret) {
            if (ret.succes) {
                if (ret.data.length > 0) {
                    return ret.data[0].allowProofIds
                }
            } else {
                return Swal.fire({
                    title: 'Cảnh báo!',
                    text: "Đã có lỗi xảy ra vui lòng thử lại!",
                    type: 'warning',
                })
            }
        }
    })
}

const sendNotiToManager = (productId, requirement) => {
    try {
        if (productId && requirement) {
            $.ajax({
                type: "POST",
                url: "/sendNotiToManager",
                data: {
                    productId: productId,
                    requirement: requirement,
                    levelNoti: levelNoti,
                    contentRequi: contentRequi
                },
                success: (ret) => {
                    return true
                },
                error: (err) => {
                    Swal.fire({
                        title: 'Cảnh báo!',
                        text: "Đã có lỗi xảy ra vui lòng thử lại!",
                        type: 'warning',
                    })
                }
            })
        }

    } catch (error) {
        return Swal.fire({
            title: 'Cảnh báo!',
            text: "Đã có lỗi xảy ra vui lòng thử lại!",
            type: 'warning',
        })
    }
}

function loadtimetype () {
    let detailUrl = `/getTimeType?productInfoId=${productId}`
    if (role && createdUserId) {
        detailUrl = `/getTimeType?productInfoId=${productId}&&createMemberId=${createdUserId}`
    }
    $.ajax({
        url: detailUrl,
        type: "GET",
        success: function (ret) {
            if (ret.length) {
                console.log('timecheck: ', ret.length);
                timecheck = ret.length
                timecheck1 = ret.length
                loadType(timecheck)
            } else {
                timecheck1 = 1
                loadType(1)

            }


        }
    })
}

// Lấy dữ liệu bộ câu hỏi
function loadType (timescheck) {
    $(`#bootommIdeaPc`).hide();
    $(`#bootommIdea`).hide();
    let detailUrl1 = "/getDatareviewernotes?id=" + productId
    let detailUrl2 = `/getEvaluationsByFileIdAndMemId?productInfoId=${productId}&&times=${timescheck}`
    if (role && createdUserId) {
        detailUrl1 = `/getDatareviewernotes?id=${productId}&&createMemberId=${createdUserId}`
        detailUrl2 = `/getEvaluationsByFileIdAndMemId?productInfoId=${productId}&&times=${timescheck}&&createMemberId=${createdUserId}`
    }
    $.ajax({
        url: detailUrl1,
        type: "GET",
        success: (result) => {
            $.ajax({
                url: detailUrl2,
                type: "GET",
                success: function (ret) {
                    if (ret.success) {
                        if (ret.data.length > 0) {
                            firstTimeVisit = false;
                            firstTimeSetponti = false
                            _firstEvaluation = false;
                            sectionsArray = ret.data;
                            result.forEach((e) => {
                                let index = e._id.split('.')
                                // e.index = index.join('.');
                                if (index.length == 2) {
                                    if (sectionsArray.length > 0) {
                                        // ret[Number(index[0] - 1)].[`.${index[1]}`] = e
                                        eval(`sectionsArray[${Number(index[0] - 1)}].${index[1]}.totalInfo = e.total`)
                                    }
                                } else if (index.length == 3) {
                                    if (sectionsArray.length > 0) {
                                        eval(`sectionsArray[${Number(index[0] - 1)}].${index[1]}.${index[2]}.totalInfo = e.total`)
                                    }
                                }

                            })
                            $.ajax({
                                url: "/getProductTypeEvalueQuestion?productSetId=" + productSetId,
                                type: "GET",
                                success: (ret) => {
                                    console.log('rgetProductTypeEvalueQuestion1: ', ret);
                                    for (let j = 0; j < ret.length; j++) {
                                        for (let i = 0; i < ret[j].detail.length; i++) {
                                            if (ret[j] && ret[j].detail[i] && ret[j].detail[i].requirement) {
                                                sectionsArray[j].detail[i]["requirement"] = ret[j].detail[i].requirement;
                                            }
                                            // if (sectionsArray[j].detail[i].contentType == 'caseQuestion') {
                                            //     for(let k = 0 ; k < sectionsArray[j].detail[i].caseQuestions.length; k++){
                                            //         for(let h = 0 ; h < sectionsArray[j].detail[i].caseQuestions[k].answers.length; h++){
                                            //             sectionsArray[j].detail[i].caseQuestions[k].answers[h].rootId = ret[j].detail[i].caseQuestions[k].answers[h]._id;
                                            //         }
                                            //     }
                                            // }else if (sectionsArray[j].detail[i].contentType == 'lvl2Question') {
                                            //     for(let k = 0 ; k < sectionsArray[j].detail[i].lvl2Questions.length; k++){
                                            //         for(let h = 0 ; h < sectionsArray[j].detail[i].lvl2Questions[k].answers.length; h++){
                                            //             sectionsArray[j].detail[i].lvl2Questions[k].answers[h].rootId = ret[j].detail[i].lvl2Questions[k].answers[h]._id;
                                            //         }
                                            //     }
                                            // }else{
                                            //     for(let k = 0 ; k < sectionsArray[j].detail[i].answers.length; k++){
                                            //         sectionsArray[j].detail[i].answers[k].rootId = ret[j].detail[i].answers[k]._id;
                                            //     }
                                            // }
                                        }
                                    }
                                    //namqv lấy và gán trạng thái phiếu chấm vào biến static
                                    currentEvaluateStatus = sectionsArray[0].status;
                                    // end
                                    if (sectionsArray[0].status == 'DONE') {
                                        firstTimeSet = false
                                        isSecondTime = true;
                                        firstTimeVisit = true
                                        // $(`#noteText`)[0].innerHTML = `<span>Chờ duyệt kết quả</span> `;
                                        $(`#noteText`)[0].innerHTML = ` <span>Đã chấm</span> </br><i>lần chấm thứ ${timescheck}</i>`
                                        $(`#completeEvaluate`).attr('disabled', true);
                                        $(`#completeEvaluatemobile`).attr('disabled', true);
                                        // if (sectionsArray[0].times == 2) {
                                        //     $(`#noteText`)[0].innerHTML = `<i>(Quá trình chấm đã kết thúc)</i>`
                                        //     evaluateCompleted = true;
                                        // }
                                    } else {
                                        $(`#noteText`)[0].innerHTML = ` <span>Đang chấm</span> </br><i>lần chấm thứ ${timescheck}</i>`
                                    };

                                    renderEvaluateQuestions(sectionsArray);

                                },
                                error: (jqXHR, textStatus, errorThrown) => {
                                    console.warn(errorThrown);
                                }
                            });
                        } else {
                            $(`#noteText`)[0].innerHTML = `<span>Chưa chấm</span> </br><i>lần chấm thứ 1</i>`;
                            $(`#completeEvaluate`).attr('disabled', true);
                            $(`#completeEvaluatemobile`).attr('disabled', true);

                            // firstTimeSet = false
                            $.ajax({
                                url: "/getProductTypeEvalueQuestion?productSetId=" + productSetId,
                                type: "GET",
                                success: (ret) => {
                                    console.log('getProductTypeEvalueQuestion2: ', ret);
                                    sectionsArray = ret;
                                    result.forEach((e) => {
                                        let index = e._id.split('.')
                                        // e.index = index.join('.');
                                        if (index.length == 2) {
                                            if (sectionsArray.length > 0) {
                                                // ret[Number(index[0] - 1)].[`.${index[1]}`] = e
                                                eval(`sectionsArray[${Number(index[0] - 1)}].${index[1]}.totalInfo = e.total`)
                                            }
                                        } else if (index.length == 3) {
                                            if (sectionsArray.length > 0) {
                                                eval(`sectionsArray[${Number(index[0] - 1)}].${index[1]}.${index[2]}.totalInfo = e.total`)
                                            }
                                        }

                                    })
                                    if (_firstEvaluation == false) {
                                        renderEvaluateQuestions(sectionsArray);
                                        _firstEvaluation = true;
                                    } else {
                                        $(`#bootommIdeaPc`).show();
                                        $(`#bootommIdea`).show();
                                    }
                                },
                                error: (jqXHR, textStatus, errorThrown) => {
                                    console.warn(errorThrown);
                                }
                            });
                        }
                    }
                },
                error: (jqXHR, textStatus, errorThrown) => {
                    console.warn(errorThrown);
                }
            });
        }
    })

}

const checkform = (arr, IdMembers, productInfoId) => {
    $.ajax({
        url: "applyHelpTeam?IdMember=" + IdMembers + "&&productsInfos=" + productInfoId,
        type: "GET",
        success: (ret) => {
            if (ret) {
                arr.forEach((item) => {
                    ret.forEach((el) => {
                        if (item.sectionIndex == el.sectionIndex) {
                            item.totalPoint = el.totalPoint
                            item.detail = el.detail
                            // item.evaluatetimes = el.evaluatetimes
                            // item.productInfoId = productInfoId
                            // item.productSetId = productSetId
                            // item.times = el.times
                            return item
                        }

                    })

                })
                Swal.close();
                sectionsArray = arr
                renderEvaluateQuestions(arr);
            }
        }
    })
}



const checkroleEvalueSet = () => {
    console.log('checkroleEvalueSet: ', $('#statusServe').innerHTML)
    if (role == "view") {
        // $(':checkbox').attr('disabled', 'disabled ')
        $('#completeEvaluate').attr('disabled', 'disabled ')
        $('#completeEvaluatemobile').attr('disabled', 'disabled ')
        // $('.evaluateStatus').attr('disabled', 'disabled ')
        // $('.iconrole').attr({ 'data-toggle': 'modal', 'onclick': '' })
        // $('#saveProcessBtn').addClass('disabled')
        $('#saveProcessBtnmobile').addClass('disabled')
        $('#lowerLevelBtnMobile').addClass('disabled')
        $('#ButtonHelpTeamMobile').addClass('disabled')
        $('#lowerLevelBtnMobiles').addClass('disabled')
        $('#lowerLevelBtns').addClass('disabled')
        $('#ButtonHelpTeam').addClass('disabled')

    }
    else {
        $.ajax({
            url: "checkevaluationSet?productInfoId=" + productId,
            type: "GET",
            success: function (ret) {
                if (ret == "100") {
                    // $(':checkbox').attr('disabled', 'disabled ')
                    $('#completeEvaluate').attr('disabled', 'disabled ')
                    $('#completeEvaluatemobile').attr('disabled', 'disabled ')
                    // $('.evaluateStatus').attr('disabled', 'disabled ')
                    // $('.evaluateStatus').addClass('disabled')
                    // $('.iconrole').attr({ 'data-toggle': '', 'onclick': '' })
                    // $('#saveProcessBtn').addClass('disabled')
                    $('#saveProcessBtnmobile').addClass('disabled')
                    $('#lowerLevelBtnMobile').addClass('disabled')
                    $('#ButtonHelpTeamMobile').addClass('disabled')
                    $('#lowerLevelBtnMobiles').addClass('disabled')
                    $('#lowerLevelBtns').addClass('disabled')
                    $('#ButtonHelpTeam').addClass('disabled')
                }
            }
        })
    }

}

function loadproductSetId () {
    if (productSetId) {
        $.ajax({
            url: "/getsetById?productSetId=" + productSetId,
            type: "GET",
            success: function (ret) {
                _objProductSet = ret;
                setProduct.innerHTML = `<span class="productTi">Bộ sản phẩm</span>: ${ret[0].name}`;
                loadListNotAchievedRank();

            },
            error: function (jqXHR, textStatus, err) {
                console.warn(err)
            }
        })
    } else {
        $.ajax({
            url: "/getsetByProductId?productId=" + productId,
            type: "GET",
            success: function (ret) {
                _objProductSet = ret;
                setProduct.innerHTML = `<span class="productTi">Bộ sản phẩm</span>: ${ret[0].name}`;
                productSetId = ret[0]._id
                $(`#proofBtn`).attr('href', `/treeProof?productInfoId=${productId}&productSetId=${productSetId}`);
                loadListNotAchievedRank();

            },
            error: function (jqXHR, textStatus, err) {
                console.warn(err)
            }
        })
    }
}

function loadListGuidequestions () {
    $.ajax({
        url: `/getguidequestion?product_type=` + productType,
        type: "GET",
        success: function (ret) {
            _objListGuidequestions = ret;
        }
    })
};

/// namqv xử lý autoSave lưu dữ liệu 15 giây 1 lần nếu có sự thay đổi
function autoSave () {
    if (currentEvaluateStatus == 'PROCESSING' && isEvaluateChange && isNoSave) {
        isNoSave = false;
        saveEvaluate("PROCESSING", false);
    }

    if (currentEvaluateStatus == 'DONE' && isEvaluateChange && isNoSave) {
        isNoSave = false;
        saveEvaluate("PROCESSING", false);
    }

    /// Autosave cho lần tích đầu tiên của lần chấm đầu tiên
    if (currentEvaluateStatus == '' && isEvaluateChange && firstTimeVisit && _firstEvaluation && isNoSave) {
        isNoSave = false;
        saveEvaluate("PROCESSING", false);
    }

    /// Autosave cho lần tích đầu tiên của lần chấm đầu tiên
    if (currentEvaluateStatus == 'DONE' && isEvaluateChange && firstTimeVisit && _firstEvaluation && isNoSave) {
        isNoSave = false;
        saveEvaluate("PROCESSING", false);
    }
}

function loadListNotAchievedRank () {
    $.ajax({
        url: `/getListNotAchievedRank?subGroups=${_objProductSet[0].code}`,
        type: "GET",
        success: function (ret) {
            _objListNotAchievedRank = ret;
        }
    })
};

const getQuoteFromProofinfo = () => {
    $.ajax({
        type: "GET",
        url: "getQuoteFromProofinfo?productsInfo=" + productId,
        success: (ret) => {
            if (ret.succes) {
                let uniq = [...new Set(ret.data)];
                console.log(uniq, 99)
            }

        }
    })
}

const showTooltip = (indexQuote) => {
    document.getElementById(`tooltip-${indexQuote}`).style.display = ''
}
const outTooltip = (indexQuote) => {
    document.getElementById(`tooltip-${indexQuote}`).style.display = 'none'
}

function loadfileId () {
    $.ajax({
        url: "loadfileId?fileId=" + productId,
        type: "GET",
        success: function (ret) {
            productcode.innerHTML = '<span class="productTi">Mã sản phẩm</span>: ' + `${_.get(ret, "0.code", '')}`
            product.innerHTML = `${_.get(ret, "0.name", '')}`
            entity.innerHTML = `${_.get(ret, "0.entities[0].name", '')}`
            adressentity.innerHTML = `<span class="productTi">Địa chỉ</span>: ${_.get(ret, "0.entities[0].addressInfo.provinceName", '')}`
            if ($(`#provinceCode`)[0] && $(`#districtCode`)[0]) {
                $(`#provinceCode`)[0].innerHTML = _.get(ret, "0.entities[0].addressInfo.provinceId", '');
                $(`#districtCode`)[0].innerHTML = _.get(ret, "0.entities[0].addressInfo.districtId", '');
            }
        },
        error: function (jqXHR, textStatus, err) {
            console.warn(err)
        }
    })
}

function showHelp (questionId) {
    console.log(_objListGuidequestions);
    let obj = _objListGuidequestions.find(o => o.question_id == questionId);
    let table = `<div class="table-responsive"><table class="table table-bordered" style="text-align: left"> 
	<thead>
			<tr>
					<th scope="col" style="width:40%">Tiêu chí</th>
					<th scope="col">Hướng dẫn</th>
			</tr>
	</thead>
	<tbody>`;
    if (obj) {
        obj.contents.forEach((objContent) => {
            arrGuideQuestions = objContent.content.split(":");
            table = table + ` <tr class="table-warning">
					<td>`+ arrGuideQuestions[0].trim() + `</td>
					<td>`+ arrGuideQuestions[1].trim() + `</td>
					</tr>`;
        });
    } else {
        table = table + ` <tr class="table-warning"><td colspan="2">Chưa có hướng dẫn</td></tr>`;
    }
    table = table + ` </tbody></table></div>`;
    var footer = `<a href="javascript:void(0)">
	<div class="user-img"> <img src="/img/dhkhxhnv.png" alt="user" class="img-circle"></div>
	<div class="mail-contnet ml-4" style="width:80%">
	<small class="text-muted">Bản quyền thuộc về OmmaniSoft</small><br><small class="text-muted">Công ty cổ phần công nghệ OmmaniSoft.</small> </div>
	</a>`
    Swal.fire({
        title: 'Hướng dẫn đánh giá minh chứng',
        html: table,
        footer: footer,
        showCloseButton: true,
    });

}

function checkInfoOcop (productId, questionId) {
    document.getElementById('listpoofdoc').innerHTML = ``
    document.getElementById('listpoof').innerHTML = ``
    document.getElementById('listpoofdocQuote').innerHTML = ``
    document.getElementById('listpoofQuote').innerHTML = ``
    document.getElementById('ImgModal-info-detailfile').innerHTML = ``
    document.getElementById('DocModal-info-detailfile').innerHTML = ``

    $.ajax({
        url: "getprooffilebyquestionid?product_id=" + productId + "&question_id=" + questionId,
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                drawQuote(ret, document.getElementById('listpoofQuote'), document.getElementById('listpoofdocQuote'))
            } else {
                document.getElementById('listpoofQuote').innerHTML = '<div class="col-12 textHeadermodal text-center">Tiêu chí chấm này chưa có tài liệu minh chứng!</div>'
            }
        }
    })
    id = parseInt(id);
    $(`#contentByPart`).show();
    $(`#allFileContent`).hide();
    document.getElementById('LHDV').innerHTML = ''
    document.getElementById('LHDN').innerHTML = ''
    document.getElementById('SGPDKKD').innerHTML = ''
    document.getElementById('GPKD').innerHTML = ''
    document.getElementById('SVGDL').innerHTML = ''
    document.getElementById('SVGCCĐP').innerHTML = ''
    document.getElementById('SNLD').innerHTML = ''
    document.getElementById('SNLDLNDP').innerHTML = ''
    document.getElementById('tbody').innerHTML = ''
    $.ajax({
        url: "getEtitybyFileid?fileId=" + productId,
        type: "GET",
        success: function (ret) {
            fileData = ret;
            document.getElementById('LHDV').innerHTML = _.get(ret, "0.entity[0].typeId", '')
            document.getElementById('LHDN').innerHTML = _.get(ret, "0.entity[0].subtypeId", '')
            document.getElementById('SGPDKKD').innerHTML = _.get(ret, "0.entity[0].businessLicense", '')
            document.getElementById('GPKD').innerHTML = _.get(ret, "0.entity[0].businessLicense", '') ? `<img src="${_.get(ret, "0.entity[0].imgUrl[0]", "")}" height="300px" style="max-width:200px">` : ''
            document.getElementById('SVGDL').innerHTML = _.get(ret, "0.entity[0].des.capital", "") ? numberWithCommas(_.get(ret, "0.entity[0].des.capita", "")) : ''
            document.getElementById('SVGCCĐP').innerHTML = _.get(ret, "0.entity[0].des.capitalCommunity", '') ? numberWithCommas(_.get(ret, "0.entity[0].des.capitalCommunity", '')) : ''
            document.getElementById('SNLD').innerHTML = _.get(ret, "0.entity[0].des.amountLabor", '') ? numberWithCommas(_.get(ret, "0.entity[0].des.amountLabor", '')) + ' Lao động' : ''
            document.getElementById('SNLDLNDP').innerHTML = _.get(ret, "0.entity[0].des.amountLaborDistric", '') ? numberWithCommas(_.get(ret, "0.entity[0].des.amountLaborDistric", '')) + ' Lao động' : ''

            _.get(ret, "0.des.moneyDataByYear", []).forEach(data => {
                document.getElementById('tbody').innerHTML += `
											<td>${data.year}</td>
											<td>${data.revenue}</td>
											<td>${data.cost}</td>
							`
            })
            if (id == 1) {
                $('#GDKKD').show()
                $('#SLD').hide()
                $('#DT').hide()
            }
            else if (id == 2) {
                $('#GDKKD').hide()
                $('#SLD').show()
                $('#DT').hide()
            }
            else if (id == 3) {
                $('#GDKKD').hide()
                $('#SLD').hide()
                $('#DT').show()
            }
            else {
                $('#GDKKD').hide()
                $('#SLD').hide()
                $('#DT').hide()
            }

        }, error: function (jqXHR, textStatus, err) {
            console.warn(err)
        }
    })
    let obj = {
        _id: EvaluationId,
        productsInfo: productId
    }
    $.ajax({
        type: 'POST',
        contenType: "aplication/json",
        data: obj,
        url: "/GetPrr",
        success: function (data) {
            if (data.length > 0) {
                data.forEach((e) => {
                    if (e.type !== "INFO") {
                        $('#Text-cancel').css({
                            "display": "none"
                        })
                        $('#body-Info').css({
                            "display": ""
                        })
                        $('#Product').css({
                            "display": "none"
                        })
                        if (e.type == "IMG") {
                            let link = `<img src="${e.data}" class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..." onclick="clickImg(\'${e.data}\')">`
                            if (hasExtension(e.data, pdfs)) {
                                link = `<a target="_blank" href="${e.data}"><img data-pdf-thumbnail-file="${e.data}" data-pdf-thumbnail-height="600" src="images/pdf.jpg" class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a>`
                            }
                            document.getElementById('ImgModal-info').innerHTML += `
															<div class="col-6">          
															<div class="card mb-4 ">
																	<a href="/theards?tid=5da44b172c75d36902e5bf0c">
																	 ${link}
																	</a>
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
													`
                        } else if (e.type == "LINK") {
                            document.getElementById('ImgModal-info').innerHTML += `
															<div class="col-6">          
															<div class="card mb-4 ">
																	<a href="${e.data}" target="_blank">
																			<img src="img/linkicon.jpg" style="object-fit: fit;width: 100%;padding: 11px; height: 150px;">
																			<div class="textDes text-center">${e.nameFile}</div>   
																	</a>
															</div>
															</div>
															`
                        } else if (e.type == "DOC") {
                            document.getElementById('DocModal-info').innerHTML += `
					<div class="col-10 m-b-20" id="oveflow">
					<a href="${e.Data}" >${e.Data}</a>
					</div>
					<div class="col-2">
					
					</div>
					`
                        } else if (e.type == "TEXT") {
                            $('#Text-cancel').css({
                                "display": "none"
                            })
                            $('#body-Info').css({
                                "display": "none"
                            })
                            $('#Product').css({
                                "display": ""
                            })
                        }
                    } else {
                        $('#Text-cancel').css({
                            "display": "none"
                        })
                        $('#body-Info').css({
                            "display": "none"
                        })
                        $('#Product').css({
                            "display": ""
                        })
                        data.forEach((e) => {
                            document.getElementById('Product-info').innerHTML = `
					<div id="main-wrapper" >
					<div class="container-fluid>
						<div class="mt-3">
							<form class="form-material">
								<div class="form-control">
									<label for="productName">
										<div class="numberCircle">01</div><b>
											TÊN SẢN PHẨM</b>
									</label><br>
									<input type="text" id="productName" name="productName" value="${e.fileInfo[0].name}"
										class="form-control form-control-line pl-3" placeholder="Nhập tên hoặc ý tưởng sản phẩm">
								<br><br>    
								</div>
								<div class="form-control">
									<label for="productName">
										<div class="numberCircle">02</div><b>
											MÔ TẢ SẢN PHẨM</b>
									</label><br>
									<b class="mt-3">a. Giá trị mục tiêu của sản phẩm/phần cốt lõi</b>
									<input type="text" id="productValue" name="" value="${e.Data.des.value}"
										class="form-control form-control-line pl-3"
										placeholder="Lý do khiến khách hàng muốn mua sản phẩm">
									<b class="mt-3">b. Quy cách đóng gói</b>
									<input type="text" id="packingMethod" name="" value="${e.Data.des.packingMethod}"
										class="form-control form-control-line pl-3"
										placeholder="Ví dụ: đóng túi, chai, lọ, ...">
									<b class="mt-3">c. Tên nhãn hiệu sản phẩm/dịch vụ dự kiến</b>
									<input type="text" id="brandName" name="" value="${e.Data.des.brandName}"
										class="form-control form-control-line pl-3" placeholder="Nhập tên bạn dự kiến đặt">
									<b class="mt-3">d. Mục tiêu chất lượng của sản phẩm</b>
									<br>
									<!-- <div class="container">
										<input type="checkbox" class="inp-cbx" id="vehicle1" style="display: none;">
										<label class="cbx" for="vehicle1">
											<span>
												<svg width="12px" height="10px" viewbox="0 0 12 10">
													<polyline points="1.5 6 4.5 9 10.5 1"></polyline>
												</svg>
											</span><span> Cho thị trường quốc tế</span></label><br> -->
									<div id="quality-target">
										<li>${e.fileInfo[0].des.qualityTarget[0]}</li>
									</div>
								</div>
								<div class="form-control">
									<b>đ. Mục tiêu thị trường tiêu thụ</b>
									<div>
										Phạm vi tiêu thụ
										<div class="row container" id="range-market">
											<li>${e.Data.des.marketRange[0]}</li>
										</div>
									</div>
									<div>
										Đối tượng khách hàng
										<div class="row container" id="customerTarget">
											<li>${e.Data.des.customerTarget[0]}</li>
										</div>
									</div>
									<div>
										Đối tượng khách hàng có thu nhập
										<div class="row container" id="incomeTarget">
											<li>${e.Data.des.incomeTarget[0]}</li>
										</div>
									</div>
								</div>

								<div class="form-control mt-3">
									<b class="mt-3">e. Đối thủ cạnh tranh</b>
									<div>Các sản phẩm tương tự đã có trên thị trường</div>
									<input id="competitorProducts" type="text" name="" value="${e.Data.CompetitorProducts}" class="form-control form-control-line pl-3"
										placeholder="Các sản phẩm tương tự đã có trên thị trường">
									<div>Điểm mới, điểm khác biệt của sản phẩm</div>
									<input id="Advantages" type="text" name="" value=${e.Data.Advantages}"" class="form-control form-control-line pl-3"
										placeholder="Sản phẩm của bạn có gì nổi bật?">
									<b class="mt-3">g. Quy mô thị trường dự kiến</b>
									<div>Lượng sản phẩm hoặc khách hàng dự kiến</div>
									<input id="PredictNumber" type="text" name="" value="${e.Data.PredictNumber}" class="form-control form-control-line pl-3"
										placeholder="Số sản phẩm, khách hàng/năm">
									<b class="mt-3">h. Giá bán dự kiến đến tay người tiêu dùng</b>
									<input id="expectedPrice" style="width: 50%;" type="number" name="" value="${e.Data.ExpectedPrice}"
										class="form-control form-control-line pl-3" placeholder="0"><span>VNĐ/sản
										phẩm</span>
									<br>
								</div>
								<div class="form-control mt-5">
									<b>i. Câu chuyện về sản phẩm</b>
									<div>Nguồn gốc lịch sử</div>
									<input id="historyOrigin" type="text" name="" value="${e.fileInfo[0].History}" class="form-control form-control-line pl-3"
										placeholder="Nguồn gốc lịch sử ra đời của sản phẩm">
									<div>Yếu tố văn hóa</div>
									<input id="cultureElement" type="text" name="" value="${e.fileInfo[0].Culture}" class="form-control form-control-line pl-3"
										placeholder="Sản phẩm mang ý nghĩa văn hóa gì?">
									<div>Yếu tố địa danh</div>
									<input id="geoElement" type="text" name="" value="${e.fileInfo[0].GeoElement}" class="form-control form-control-line pl-3"
										placeholder="Sản phẩm mang ý nghĩa địa phương thế nào?">
									<div>Yếu tố khác (nếu có)</div>
									<input id="otherElement" type="text" name="" value="${e.fileInfo[0].OtherElement}" class="form-control form-control-line pl-3"
										placeholder="Các yếu tố khác liên quan đến sản phẩm"><br>
								</div>
								<br>
								<div class="form-control">
									<label for="productName">
										<div class="numberCircle">03</div><b>
											TÍNH MỚI CỦA SẢN PHẨM</b>
									</label><br>
									<div class="container" id="novelty">
										<li>${e.Data.Novelty}</li>                                        
									</div>
									<br>
								</div>
								<div class="form-control">
									<label for="productName">
										<div class="numberCircle">04</div><b>
											MỨC ĐỘ MINH CHỨNG ĐẠT ĐƯỢC</b>
									</label><br>
									<div class="row text-center">
										<ul>
										<li>${e.Data.Evaluate}</li>                                        
										</ul>
									</div>
								</div>
								<div class="form-control">
									<label for="productName">
										<div class="numberCircle">05</div><b>
											MỨC ĐỘ KHÓ KHĂN KHI NỘP MINH CHỨNG</b>
									</label><br>
									<div class="row text-center">
										<ul>
										 <li>${e.Data.Difficulty}</li>
										</ul>
									</div>
									<br>
								</div>
						</div>
						</form>
					</div>
				</div>
					`
                        })
                    }
                })
                createPDFThumbnails();
            } else {
                $('#Text-cancel').css({
                    "display": ""
                })
                $('#body-Info').css({
                    "display": "none"
                })
                $('#Product').css({
                    "display": "none"
                })
            }
            $('#ContentProof').html($('#ImgModal-info').html())
        },
        error: function (jqXHR, textStatus, err) {
            console.warn(err)
        }
    });
}

const openCommnent = (productId, questionid) => {
    questionId = questionid;
    // indexNote = index
    // idIndexNote = id
    let detailUrl = "getquestioncomment?product_id=" + productId + "&question_id=" + questionid
    // if (role && createdUserId) {
    //     console.log(12312312311111111);
    //     detailUrl = "getreviewernotes?idIndexNote=" + id + "&productId=" + productId + "&createdUserId=" + createdUserId
    // }
    $.ajax({
        url: detailUrl,
        type: "GET",
        success: (ret) => {
            if (ret.length > 0) {
                console.log(ret);
                $('#listNote').animate({ scrollTop: 9999 }, 'slow');
                document.getElementById('listNote').innerHTML = ''
                drawNote(ret)
            } else {
                if (role && createdUserId) {
                    document.getElementById('listNote').innerHTML = 'Chủ thể chưa có ghi chú nào cho tiêu chí!'
                } else {
                    document.getElementById('listNote').innerHTML = 'Bạn chưa có ghi chú nào cho tiêu chí!'
                }
            }
        }
    })
}

function checkNotAchievedRank (id, text) {
    clearNotAchievedRank();
    var listRankNumber = "Dựa trên thông tư 781, nếu chọn " + name + " thì sản phảm không đạt được OCOP : ";
    var listRankNumberGuide = "";
    _objListNotAchievedRank.forEach((notAchievedRank) => {

        // if (notAchievedRank.answerId.toString() == id || notAchievedRank.answerName.toLowerCase().trim() == id.toLowerCase().trim()) { // confilic với file của vinh
        if (notAchievedRank.answerId.toString() == id || notAchievedRank.answerName.toLowerCase().trim() == text.toLowerCase().trim()) {

            notAchievedRank.notRank.sort(dynamicSort("rank"));
            notAchievedRank.notRank.forEach((notRank) => {
                setTextNotAchievedRank(notRank.rank, notRank.guide, notRank.qualitative, notAchievedRank.answerName);
            });
            listRankNumber = listRankNumber + " Sao";
            $("#mdNotAchievedRank").modal();
            return;

            //if(notAchievedRank.)

        }
    });
}

var isNoSave = true;
const saveEvaluate = (status, showModel) => {
    // if (isNoSave) {
    isNoSave = false;
    let checkNotDone = 0;
    $(`#saveProcessBtn`).addClass('disabled')
    $(`#saveProcessBtnmobile`).addClass('disabled')
    $(`#completeEvaluate`).attr('disabled', true);
    $(`#completeEvaluatemobile`).attr('disabled', true);
    // Tính tổng điểm của câu hỏi lớn
    sectionsArray.forEach(section => {
        if (firstTimeVisit) {
            delete section._id;
        }
        let sectionTotalPoint = 0;
        $(`#${section.groupSection}_Section${section.sectionIndex - 1} input:checked`).each(function (index, inputItem) {
            sectionTotalPoint += Number(inputItem.value);
        });
        section.totalPoint = sectionTotalPoint;
        if (firstTimeSet != true) {
            section.evaluatetimes = timecheck + 1
        }
    });
    // Đánh dấu đáp án đã chọn
    $(`#question input[type="checkbox"]`).each((index, item) => {
        let itemIdElements = item.id.split('_'); //tách các thành phần của id theo thứ tự: group, section, question, answer
        let docObj = sectionsArray.find(section => section.groupSection == itemIdElements[0] && section.sectionIndex - 1 == itemIdElements[1].split('Section')[1])
        let questionIndex = itemIdElements[2].split('Question')[1]; // lấy chữ cái cuối cùng (tương đương với vị trí)
        let answerIndex;
        if (/case/gi.test(itemIdElements[3])) {
            let caseIndex = itemIdElements[3].split('Case')[1];// lấy chữ cái cuối cùng (tương đương với vị trí)
            answerIndex = itemIdElements[4].split('Answer')[1];// lấy chữ cái cuối cùng (tương đương với vị trí)
            docObj.detail[questionIndex].caseQuestions[caseIndex].answers[answerIndex].checked = item.checked;
        } else if (/lvl2QuesIndex/gi.test(itemIdElements[3])) {
            let lvl2QuestionIndex = Number(itemIdElements[3].split("lvl2QuesIndex")[1]);// lấy chữ cái cuối cùng (tương đương với vị trí)
            answerIndex = itemIdElements[4].split('Answer')[1];// lấy chữ cái cuối cùng (tương đương với vị trí)
            docObj.detail[questionIndex].lvl2Questions[lvl2QuestionIndex].answers[answerIndex].checked = item.checked;
        } else {
            answerIndex = itemIdElements[3].split('Answer')[1];// lấy chữ cái cuối cùng (tương đương với vị trí)
            docObj.detail[questionIndex].answers[answerIndex].checked = item.checked;
        }
    })
    let ajaxMethod = 'POST';
    let ajaxUrl = `/saveEvaluateResultEntity`;
    // Đổi sang update nếu không phải lần đầu tiên vào form chấm
    if (firstTimeVisit != true) {
        ajaxMethod = `PUT`;
        ajaxUrl = `/updateEvaluateResultEntity`;
    }
    // Nếu người chấm chọn gửi kết quả khi chưa trả lời hết các câu hỏi, hiển thị thông báo và không cho gửi
    let preventSaving = false;
    var messWaiting = "Đang thực hiện lưu dữ liệu";

    for (let i = 0; i < questionsNameList.length; i++) {
        let check = $(`#question input:checkbox[name="${questionsNameList[i]}"]:checked`)
        if (check.length < 1) {
            // preventSaving = true;
            checkNotDone++;
            // isNoSave = true;
        }
    }
    if (preventSaving == false) {
        if (showModel) {
            swal({
                title: messWaiting,
                imageUrl: '/img/Curve-Loading.gif',
                text: "Xin vui lòng chờ trong giây lát ...",
                showConfirmButton: false
            });
        }
        if (status == 'DONE') {
            Swal.fire({
                title: 'Gửi kết quả?',
                text: "Bạn đã chấm xong và muốn gửi kết quả chấm đến hội đồng & quản lý ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý, Gửi ngay!',
                cancelButtonText: "Bỏ qua"
            }).then((result) => {
                if (result.value) {
                    sendData(ajaxMethod, ajaxUrl, sectionsArray, productId, status, isSecondTime, $(`#totalPoint`)[0].innerHTML, showModel);
                } else {
                    isNoSave = true;
                    $(`#saveProcessBtn`).removeClass('disabled')
                    $(`#saveProcessBtnmobile`).removeClass('disabled')
                    $(`#completeEvaluate`).attr('disabled', false);
                    $(`#completeEvaluatemobile`).attr('disabled', false);
                }
            })

        } else {
            sendData(ajaxMethod, ajaxUrl, sectionsArray, productId, status, isSecondTime, $(`#totalPoint`)[0].innerHTML, showModel, checkNotDone);
        }
    } else {
        isNoSave = true;
        $(`#saveProcessBtn`).removeClass('disabled')
        $(`#saveProcessBtnmobile`).removeClass('disabled')
        $(`#completeEvaluate`).attr('disabled', false);
        $(`#completeEvaluatemobile`).attr('disabled', false);
    }
    // }

}

function clearNotAchievedRank () {
    $("#tlNotAchievedRank")[0].innerText = "";
    $("#txtNotAchievedRank1")[0].innerText = "...";
    $("#txtNotAchievedRank2")[0].innerText = "...";
    $("#txtNotAchievedRank3")[0].innerText = "...";
    $("#txtNotAchievedRank4")[0].innerText = "...";
    $("#txtNotAchievedRank5")[0].innerText = "...";

    $("#rowNotAchievedRank1")[0].className = "list-group-item list-group-item-action flex-column align-items-start";
    $("#rowNotAchievedRank2")[0].className = "list-group-item list-group-item-action flex-column align-items-start";
    $("#rowNotAchievedRank3")[0].className = "list-group-item list-group-item-action flex-column align-items-start";
    $("#rowNotAchievedRank4")[0].className = "list-group-item list-group-item-action flex-column align-items-start";
    $("#rowNotAchievedRank5")[0].className = "list-group-item list-group-item-action flex-column align-items-start";

}

function setTextNotAchievedRank (r, g, q, n) {
    $("#tlNotAchievedRank")[0].innerText = n;//'Theo quyết định 781 ocop với lựa chọn "'+n+'"';
    g = g.replace(/\./g, "");
    switch (r) {
        case 1:
            $("#txtNotAchievedRank1")[0].innerText = g;
            if (!q && g != "Không yêu cầu đạt tiêu chí tối thiểu" && g != "Theo Quyết định 781/QĐ-TTg, sản phẩm đủ điều kiện xếp hạng")
                $("#rowNotAchievedRank1")[0].className = "list-group-item list-group-item-action flex-column align-items-start active";
            break;
        case 2:
            $("#txtNotAchievedRank2")[0].innerText = g;
            if (!q && g != "Không yêu cầu đạt tiêu chí tối thiểu" && g != "Theo Quyết định 781/QĐ-TTg, sản phẩm đủ điều kiện xếp hạng")
                $("#rowNotAchievedRank2")[0].className = "list-group-item list-group-item-action flex-column align-items-start active";
            break;
        case 3:
            $("#txtNotAchievedRank3")[0].innerText = g;
            if (!q && g != "Không yêu cầu đạt tiêu chí tối thiểu" && g != "Theo Quyết định 781/QĐ-TTg, sản phẩm đủ điều kiện xếp hạng")
                $("#rowNotAchievedRank3")[0].className = "list-group-item list-group-item-action flex-column align-items-start active";
            break;
        case 4:
            $("#txtNotAchievedRank4")[0].innerText = g;
            if (!q && g != "Không yêu cầu đạt tiêu chí tối thiểu" && g != "Theo Quyết định 781/QĐ-TTg, sản phẩm đủ điều kiện xếp hạng")
                $("#rowNotAchievedRank4")[0].className = "list-group-item list-group-item-action flex-column align-items-start active";
            break;
        case 5:
            $("#txtNotAchievedRank5")[0].innerText = g;
            if (!q && g != "Không yêu cầu đạt tiêu chí tối thiểu" && g != "Theo Quyết định 781/QĐ-TTg, sản phẩm đủ điều kiện xếp hạng")
                $("#rowNotAchievedRank5")[0].className = "list-group-item list-group-item-action flex-column align-items-start active";
            break;
        default:
        // code block
    }
}

function sendData (ajaxMethod, ajaxUrl, sectionsArray, productInfoId, status, isSecondTime, totalPoint, showModel, countkNotDone) {
    console.log('countkNotDone: ', countkNotDone);
    if (countkNotDone === 0) {
        status = 'DONE'
    } else {
        status = 'PROCESSING'
    }
    $.ajax({
        type: ajaxMethod,
        url: ajaxUrl,
        data: {
            evaluateSections: JSON.stringify(sectionsArray),
            productInfoId: productInfoId,
            totalPoint: $(`#totalPoint`)[0].innerHTML,
            status: status,
            isSecondTime: isSecondTime ? isSecondTime : undefined,
            clickSave: showModel
        },
        success: (data) => {
            isNoSave = true;
            if (data.success) {
                if (data.newEvaluation) {
                    firstTimeSet = true
                }

                if (data.errorArray && data.errorArray.length > 0) {
                    console.warn(data.errorArray);
                }
                if (showModel) {
                    Swal.fire({
                        type: 'success',
                        title: '',
                        text: status == 'PROCESSING' ? 'Kết quả chấm của bạn đã được ghi nhận. Vui lòng chấm hết phiếu để đảm bảo kết quả cuối của sản phẩm được ghi nhận trước khi hội đồng chấm đánh giá!' : `Kết quả chấm của bạn đã được ghi nhận. Bạn đã hoàn thành lần chấm thứ ${timecheck}`,
                        footer: ''
                    })
                        .then(ret => {
                            window.location.reload();
                        });
                } else {
                    if (_firstEvaluation) {
                        clearPoint();
                        loadtimetype();
                        _firstEvaluation = false;
                    }
                    $.toast({
                        heading: 'Thông báo',
                        text: 'Dữ liệu chấm đã được ghi nhớ.',
                        position: 'top-right',
                        loaderBg: '#ff6849',
                        icon: 'success',
                        hideAfter: 1000,
                        stack: 6
                    });
                }
                $(`#saveProcessBtn`).removeClass('disabled')
                $(`#saveProcessBtnmobile`).removeClass('disabled')
                $(`#completeEvaluate`).attr('disabled', false);
                $(`#completeEvaluatemobile`).attr('disabled', false);
            } else {
                if (showModel) {
                    Swal.fire({
                        type: 'error',
                        title: '',
                        text: 'Đã có lỗi xảy ra',
                        footer: ''
                    });
                }
                console.warn(data.error);
            }
            ///namqv trạng thái có sự thay đổi =false
            isEvaluateChange = false;
        },
        error: (jqXHR, textStatus, errorThrown) => {
            isNoSave = true;
            ///namqv trạng thái có sự thay đổi =false
            isEvaluateChange = false;
            console.warn(errorThrown);
            if (showModel) {
                Swal.fire({
                    type: 'error',
                    title: '',
                    text: 'Đã có lỗi xảy ra',
                    footer: ''
                });
            }
        }
    });
}

function clearPoint () {
    $(`#A-totalPoint`)[0].innerHTML = 0;
    $(`#B-totalPoint`)[0].innerHTML = 0;
    $(`#C-totalPoint`)[0].innerHTML = 0;
    $(`#totalPoint`)[0].innerHTML = 0;

    $(`#A-totalPointmobile`)[0].innerHTML = 0;
    $(`#B-totalPointmobile`)[0].innerHTML = 0;
    $(`#C-totalPointmobile`)[0].innerHTML = 0;
    $(`#totalPointmobile`)[0].innerHTML = 0;
}

const showAllFileContent = () => {
    if ($(`#contentByPart`).is(':visible')) {
        $(`#contentByPart`).hide();
        $('#a-clickat').html('Xem minh chứng')
        $(`#allFileContent`).show();
    } else {
        $(`#contentByPart`).show();
        $(`#allFileContent`).hide();
        $('#a-clickat').html('Xem hồ sơ đầy đủ')
    }

}
function addEvent (obj, type, fn) {

    if (obj.attachEvent) {

        obj['e' + type + fn] = fn;
        obj[type + fn] = function () { obj['e' + type + fn](window.event); };
        obj.attachEvent('on' + type, obj[type + fn]);
    } else {
        obj.addEventListener(type, fn, false);
    }
}
function getScrollY () {
    var scrOfY = 0;
    if (typeof (window.pageYOffset) == 'number') {
        //Netscape compliant
        scrOfY = window.pageYOffset;

    } else if (document.body && document.body.scrollTop) {
        //DOM compliant
        scrOfY = document.body.scrollTop;
    }
    return scrOfY;
}
addEvent(window, 'scroll', function (event) {

    var x = document.getElementById("scrollPc");

    var y = getScrollY();
    if (y >= 280) {
        x.style.position = "fixed";
        x.style.top = "74px";
        x.style.width = "auto"
    } else {
        x.style.position = "relative";
        x.style.width = "100%"
        x.style.top = "0";
    }
});

const drawQuote = (ret, imgElement, docElement) => {
    ret.forEach((e) => {
        let dot = false
        if (e.type == "IMG") {
            let namefile = e.data.split(/(\\|\/)/g).pop()
            let namefiles = namefile
            if (e.nameFile) {
                namefiles = e.nameFile
            }
            let link = `<img src="${e.data}" class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..." onclick="clickImg(\'${e.data}\')">`
            if (hasExtension(e.data, pdfs)) {
                link = `<a target="_blank" href="${e.data}"><img data-pdf-thumbnail-file="${e.data}" data-pdf-thumbnail-height="600" src="images/pdf.jpg" class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a>`
            }
            let textdes = e.descriptionImg ? e.descriptionImg : ''
            if (textdes.length > 80) {
                textdes = textdes.slice(0, 80);
                dot = true
            }
            imgElement.innerHTML += `
					<div class="col-md-6" >
							<div class="ectangle">
							<div >
									${link}
							</div>
							<div style="margin: 9px 6px;">
							${convertStatusProof(e.status)} ${e.isApprovalDis || e.isApprovalProvi ? '<span class="text-title-Status">( Đã duyệt )</span>' : ''}
							</div>
							<a href="#"  class="viewMem">
							</a>
							<div class=""> <a class="viewMem" herf="#">
							${e.descriptionImg ? `
									<div  class="tootip" id="tootip${e._id}" onmouseleave="tooltip(\'${e._id}\',1)">
											<span>
											${e.descriptionImg}
											</span>
									</div>
									<div class="textTileUpProof">
									${textdes} ${dot ? `<a href="#" onmouseover="tooltip(\'${e._id}\',0)">...xem</a>` : ''}
									</div>`: namefile}
									</a>
							</div>
							</div>
					</div>
					`
        } else if (e.type == "LINK") {
            let textdes = e.descriptionImg ? e.descriptionImg : ''
            if (textdes.length > 80) {
                textdes = textdes.slice(0, 80);
                dot = true
            }
            let link = `<img src="img/linkicon.jpg" class="img-thumbnail" style="object-fit: fit;width: 100%;padding: 11px; height: 150px;">`
            imgElement.innerHTML += `
					<div class="col-md-6">
							<div class="ectangle">
									<div class="card mb-4 " >
											<a href="${e.data}" target="_blank">
													${link}
													<div style="margin: 9px 6px;">
													${convertStatusProof(e.status)} ${e.isApprovalDis || e.isApprovalProvi ? '<span class="text-title-Status">( Đã duyệt )</span>' : ''}
													</div>
													<div class="textTileUpProof">${textdes}${dot ? `...` : ''}</div>   
											</a>
									</div>
							</div>
					</div>
					`
        } else if (e.type == "FORM") {
            let realname
            if (e.data == "01") {
                realname = `PHIẾU ĐĂNG KÝ SẢN PHẨM MỚI`
            } else if (e.data == "02") {
                realname = `PHIẾU ĐĂNG KÝ SẢN PHẨM ĐÃ CÓ`
            } if (e.data == "03") {
                realname = `PHƯƠNG ÁN SẢN XUẤT KINH DOANH`
            } if (e.data == "04") {
                realname = `MẪU GIỚI THIỆU VỀ TỔ CHỨC THAM GIA CHƯƠNG TRÌNH OCOP`
            }
            let links = `<a  href="#" onclick="getSavedProof(\'${e.data}\',\'${e.productsInfo}\','1')"  data-toggle="modal">Biểu mẫu ${e.data}</a>`
            docElement.innerHTML += `
					<div class="col-md-6">
					<div class="ectangle">
						<div style="display: flex;">
							<i class="fa fa-hand-point-right" style="    font-size: 15px;color: #049252; margin-left: 9px;margin-top: 16px;"></i>
							<div class="producthref" style="overflow: hidden;margin-right: 13px;">
							${links}
							</div>
						</div>
						<div style="margin: 9px 6px;">
							${convertStatusProof(e.status)} ${e.isApprovalDis || e.isApprovalProvi ? '<span class="text-title-Status">( Đã duyệt )</span>' : ''}
						</div>
						<a href="#" class="viewMem">
						</a>
						<div class=""> <a class="viewMem" herf="#" style="    font-size: 14px;font-weight: 500;margin-top: 10px; max-height: 79px;overflow: auto;color: #767989;
						">${realname}</a>
						</div>
					</div>
				</div>
					`
        } else {
            let namefile = e.data.split(/(\\|\/)/g).pop()
            let namefiles = namefile
            if (e.nameFile) {
                namefiles = e.nameFile
            }
            let title = ''
            if (e.descriptionImg) {
                title = e.descriptionImg
            }
            // let links = `<a target="_blank"  href="https://view.officeapps.live.com/op/view.aspx?src=${e.data}">${namefiles}</a>`
            let links = drawimgs(e.data)
            // if (hasExtension(e.data, pdfs)) {
            //     links = `<a   href="${e.data}" target="_blank">${namefiles}</a>`
            // }
            docElement.innerHTML += `
					<div class="col-md-6">
					<div class="ectangle">
						<div style="display: flex;">
						 
							<div class="producthref" style="overflow: hidden;margin-right: 13px;">
							${links}
							</div>
						</div>
						<div style="margin: 9px 6px;">
						${convertStatusProof(e.status)} ${e.isApprovalDis || e.isApprovalProvi ? '<span class="text-title-Status">( Đã duyệt )</span>' : ''}
						</div>
						<a href="#" class="viewMem">
						</a>
						<div class="textTileUpProof"> <a class="viewMem" herf="#">${title}</a>
						</div>
					</div>
				</div>
					`
        }
    })
    createPDFThumbnails();
    ;
}

const saveNoteEdit = (id) => {
    let note = document.getElementById(`textNode${id}`).value
    let obj = {
        _id: id,
    }
    if (arrEdit.length > 0) {
        obj.data = JSON.stringify(arrEdit)
    }
    if (note !== '') {
        obj.note = note
    }
    $.ajax({
        url: "updateNoteEdit",
        type: "POST",
        data: obj,
        success: (ret) => {
            if (ret) {
                openCommnent(indexNote, idIndexNote)
            }
        }
    })
}

const sendcommnet = () => {
    var _token = $('meta[name="csrf-token"]').attr('content');
    let obj = {
        _token: _token,
        product_id: productId,
        question_id: questionId
    }
    if (textNode.value == "" && uploadImgCommnet.length == 0) {
        return Swal.fire({
            title: '',
            text: `Bạn vui lòng nhập ghi chú cho tiêu chí`,
            type: 'warning',
        })
    }
    if (uploadImgCommnet.length > 0) {
        obj.data = JSON.stringify(uploadImgCommnet)
    }
    if (textNode.value !== "") {
        obj.note = textNode.value
    }
    $.ajax({
        url: "savenote",
        type: "POST",
        data: obj,
        success: function (ret) {
            uploadImgCommnet = []
            document.getElementById('img_product').innerHTML = ``
            textNode.value = ''
            openCommnent(productId, questionId)
            // loadtimetype()
            if (document.getElementById(`infoNote${questionId}`)) {
                document.getElementById(`infoNote${questionId}`).innerHTML = Number(document.getElementById(`infoNote${questionId}`).innerHTML) + 1
                document.getElementById(`infoNote${questionId}`).style.display = ''
                $(`#infoNote${questionId}`).show()
            }
        }, error: function (err) {
            console.log(err)
        }
    })
}

const drawNote = (data) => {
    data.forEach((e) => {
        let TeamplateImg = ''

        document.getElementById('listNote').innerHTML += `
        <li>
                <div class="chat-img"><img src="${e.avatar ? e.avatar : '/images/noavatar.png'}"
                                alt="user"></div>
                <div class="chat-content" style=" background-color: #f0f2f5;
                border-radius: 10px;
                padding: 11px;">
                        <h5>${e.user_name}</h5>
                        ${TeamplateImg !== '' ? '<div style="display: inline-block;" id="append' + e.id + '">' + TeamplateImg + '</div></br>' : '<div style="display: inline-block;" id="append' + e.id + '"></div>'}
                        <div  style="padding:0px;padding-left:0px;background-color: #f0f2f5;" id="note${e.id}">${e.note ? e.note : ''}</div>
                        <div class="chat-time">${new Date(e.created_at).toLocaleString()}</div>
                </div>
        </li>
        `

    })
}

const appendNote = (data) => {
    data.forEach((e) => {
        let TeamplateImg = ''
        if (e.data.length > 0) {
            e.data.forEach((item) => {
                let idElementDelte = getRndInteger(11111, 999999)
                TeamplateImg += `<div style="display: grid;float: left;clear: right;" id="${idElementDelte}"><img src="${item}" width="90px" height="90px" style="padding:10px;padding-left:0px;object-fit: cover;cursor: zoom-in" onclick="clickImg(\'${item}\')"><a class="img${e._id}" herf="#" style="text-align: center;
							color: #e46a76;display:none" onclick="delteImgEdit(\'${item}\',\'${idElementDelte}\',\'${e._id}\')">Xóa</a></div>`
            })
        }
        if (role && createdUserId) {
            document.getElementById('listNote').innerHTML += `
                <li>
                        <div class="chat-img"><img src="/img/noavatar.png"
                                        alt="user"></div>
                        <div class="chat-content" style=" background-color: #f0f2f5;
                        border-radius: 10px;
                        padding: 11px;">
                                <h5>${e.namememNote}</h5>
                                ${TeamplateImg !== '' ? '<div style="display: inline-block;" id="append' + e._id + '">' + TeamplateImg + '</div></br>' : '<div style="display: inline-block;" id="append' + e._id + '"></div>'}
                                <div  style="padding:0px;padding-left:0px;background-color: #f0f2f5;" id="note${e._id}">${e.note ? e.note : ''}</div>
                                <div class="chat-time">${new Date(e.createdAt).toLocaleString()}</div>
                        </div>
                </li>
                `
        } else {
            document.getElementById('listNote').innerHTML += `
                <li>
                        <div class="chat-img"><img src="/img/noavatar.png"
                                        alt="user"></div>
                        <div class="chat-content" style=" background-color: #f0f2f5;
                        border-radius: 10px;
                        padding: 11px;">
                                <h5>${e.namememNote}</h5>
                                ${TeamplateImg !== '' ? '<div style="display: inline-block;" id="append' + e._id + '">' + TeamplateImg + '</div></br>' : '<div style="display: inline-block;" id="append' + e._id + '"></div>'}
                                <div  style="padding:0px;padding-left:0px;background-color: #f0f2f5;" id="note${e._id}">${e.note ? e.note : ''}</div>
                                <div class="chat-time">${new Date(e.createdAt).toLocaleString()}</div>
                                <div style="float: right;">
                                <a href="##" style="color: #65676b;margin-right: 12px;display:none"  id="saveNoteEdit${e._id}" onclick="saveNoteEdit(\'${e._id}\')">Lưu</a>
                                <a href="#" style="color: #65676b;margin-right: 12px;" onclick="updateNote(\'${e._id}\')" id="editNote${e._id}">Sửa</a>  <a href="##" id="deleteNoteC${e._id}" style="color: #65676b" onclick="deleteNote(\'${e._id}\')">Xóa</a> 
                                </div>
                        </div>
                </li>
                `
        }

    })
}

const deleteNote = (id) => {
    $.ajax({
        url: "deletNote?id=" + id,
        type: "GET",
        success: (ret) => {
            if (ret) {
                openCommnent(indexNote, idIndexNote)
                // loadtimetype()
                if (document.getElementById(`infoNote${indexNote}`)) {
                    document.getElementById(`infoNote${indexNote}`).innerHTML = Number(document.getElementById(`infoNote${indexNote}`).innerHTML) - 1
                    document.getElementById(`infoNote${indexNote}`).style.display = ''
                    $(`#infoNote${indexNote}`).show()
                }
            }
        }
    })
}

const openNotUsedModal = () => {
    $(`#not-used`).modal('show');
    // $(`#lookupPrecedentModal`).modal('show');
    // getForumPosts();
}

const drawimgs = (srcImg) => {
    let img = ['.jpg', '.gif', '.png', '.jpeg', '.JPEG', '.PNG', '.JPG', '.GIF', '.jfif']
    let doc = ['.docx', '.DOCX', '.doc', '.DOC']
    let excel = ['.xls', '.XLS', '.xlsx', 'XLSX']
    let pdf = ['.pdf', '.PDF']
    let ppt = ['.ppt', '.pptx', '.pps', '.ppsx', '.PPT', '.PPTX', '.PPS', 'PPSX']
    let tepplate
    if (hasExtension(srcImg, img)) {
        tepplate = `<img src="${srcImg}" width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;" onclick="clickImg(\'${srcImg}\')">`
    } else if (hasExtension(srcImg, doc)) {
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="images/word.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    } else if (hasExtension(srcImg, excel)) {
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="images/excel.png"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    } else if (hasExtension(srcImg, pdf)) {
        tepplate = ` <a target="_blank" href="${srcImg}"><img src="images/pdf.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    } else if (hasExtension(srcImg, ppt)) {
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="images/ppt.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    }
    return tepplate
}

const updateNote = (id) => {
    arrEdit = []
    if ($(`.img${id}`).length > 0) {
        $(`.img${id}`).show()
    }
    $(`#deleteNoteC${id}`).hide()
    $(`#editNote${id}`).hide()
    $(`#saveNoteEdit${id}`).show()
    $.ajax({
        url: "getreviewerTextNote?id=" + id,
        type: "GET",
        success: (ret) => {
            if (ret) {
                ret.data.forEach((e) => {
                    arrEdit.push(e)
                })
                document.getElementById(`note${id}`).innerHTML = `
							<div>
							<div class="fileupload  waves-effect waves-light" style="    position: relative;margin-top: 10px;top: 118px;float: right;right: 10px;">
									<span><i class="fa fa-paperclip" style="    color: #818182;
											font-size: 16px;" data-toggle="tooltip"
											title="Hooray!"></i></span>
									<input type="file" class="upload" id='txtUploadEdit${ret._id}' multiple>
							</div>
							<textarea placeholder="Nhập ghi chú" class="form-control border-0"
							rows="5" id="textNode${ret._id}" style="background-color: white;" >${ret.note ? ret.note : ''}</textarea>
							</div>
							`
                document.getElementById(`txtUploadEdit${ret._id}`).onchange = function change () {
                    const files = this.files;
                    let filesArr = []
                    for (let i = 0; i < files.length; i++) {
                        filesArr.push(files[i])
                    }
                    filesArr.forEach((file) => {
                        if (!file) return;
                        let contentType = file.type;
                        var filename = returnId(file.name)
                        $.get('/generatepresignedurl?fileName=' + filename + '&type=' + contentType, function (signedUrl) {
                            $.ajax({
                                url: signedUrl,
                                type: 'PUT',
                                dataType: 'html',
                                processData: false,
                                headers: {
                                    'Content-Type': contentType
                                },
                                crossDomain: true,
                                data: file
                            }).done(function (data, textStatus, error) {
                                if (textStatus == "success") {
                                    let idElementDelte = getRndInteger(11111, 999999)
                                    let dataName = `https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/` + filename;

                                    let html = `<div style="display: grid;float: left;clear: right;" id="${idElementDelte}"><img src="${dataName}" width="90px" height="90px" style="padding:10px;padding-left:0px;object-fit: cover;cursor: zoom-in" onclick="clickImg(\'${dataName}\')"><a class="img${id}" herf="#" style="text-align: center;
																	color: #e46a76;" onclick="delteImgEdit(\'${dataName}\',\'${idElementDelte}\',\'${id}\')">Xóa</a></div>`
                                    arrEdit.push(dataName)
                                    // document.getElementById('img_product').append(html);
                                    $(`#append${id}`).append(html);
                                    // document.getElementById('img_product').innerHTML += html

                                }


                            }).fail(function (jqXHR, textStatus, errorThrown) {
                                $('.dz-progress').css("opacity", "0")
                                $(".dz-error-mark svg").css("opacity", "1");
                                $(".dz-success-mark svg").css("opacity", "0");
                            });
                        });
                    })
                };
            }
        }
    })
}

txtUpload.onchange = function change () {
    const files = this.files;
    let filesArr = []
    for (let i = 0; i < files.length; i++) {
        filesArr.push(files[i])
    }
    filesArr.forEach((file) => {
        let id = getRndInteger(11111, 999999)
        // document.getElementById('img_product').innerHTML +=`
        // <div class="spinner-border spinner-border-sm text-success" role="status" id="5eba46ef137e662a006c33f7Spinner" style="top: 15px;">
        //     <span class="sr-only">Loading...</span>
        // </div>`
        let spinner = `
			<div class="imgupload" id="${id}">
			<div class="spinner-border spinner-border-sm text-success" role="status"  style="top: 15px; ">
					<span class="sr-only">Loading...</span>
			</div></div>`
        $(`#img_product`).append(spinner)
        if (!file) return;
        let contentType = file.type;
        var filename = returnId(file.name)
        $.get('/generatepresignedurl?fileName=' + filename + '&type=' + contentType, function (signedUrl) {
            $.ajax({
                url: signedUrl,
                type: 'PUT',
                dataType: 'html',
                processData: false,
                headers: {
                    'Content-Type': contentType
                },
                crossDomain: true,
                data: file
            }).done(function (data, textStatus, error) {
                if (textStatus == "success") {
                    $(`#${id}`).remove()
                    let idElementDelte = getRndInteger(11111, 999999)
                    let dataName = `https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/` + filename;
                    let html = `<div style="float: left;
									clear: right;
									display: grid;
									text-align: center;" id="${idElementDelte}"><img src="${dataName}" style="width: 100px;height: 100px;padding: 10px;border-radius: 12px; object-fit: cover;cursor: zoom-in" onclick="clickImg(\'${dataName}\')"><a herf="#" style="color: #e46a76;" onclick="delteImg(\'${dataName}\',\'${idElementDelte}\')">xóa</a></div>`
                    uploadImgCommnet.push(dataName)
                    // document.getElementById('img_product').append(html);
                    $(`#img_product`).append(html);
                    // document.getElementById('img_product').innerHTML += html

                }


            }).fail(function (jqXHR, textStatus, errorThrown) {
                $('.dz-progress').css("opacity", "0")
                $(".dz-error-mark svg").css("opacity", "1");
                $(".dz-success-mark svg").css("opacity", "0");
            });
        });
    })
};
