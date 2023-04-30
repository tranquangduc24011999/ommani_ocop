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
var councilId = getParam('council_id');
// var proofId
var role = getParam('role');
var IdMember
var nameMember
let poofinfo
let formNumber
//let productId = productsInfo
let formcheck
var questionId;

$(document).ready(function () {
    initQA();
    clickCheckbox();
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
            council_id: councilId,
            question_id: questionId,
            answer_id: answerId,
            point: point,
            check:check,
            type:1
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
            council_id: councilId,
            user_id: userId,
            point: total,
            status: 1,
            type: 1
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
    let total = aPart + bPart + cPart;
    console.log("Toan");
    console.log(cPart);

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

function showModal (_id, name) {
    nameContent = name
    requirement = _id
    document.getElementById('docu').innerHTML = nameContent
    document.getElementById('ImgModal-info').innerHTML = ``
    document.getElementById('DocModal-info').innerHTML = ``
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
                        if (hasExtension(e.data, img)) {
                            link = `<img id="zoomin${e.id}" src="${e.data}" width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;" onclick="clickImg(\'${e.data}\')">`
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
                        document.getElementById('ImgModal-info').innerHTML += `
                            <div class="col-6">          
                            <div class="card mb-4 shadow-sm">
                                <a href="#">
                                ${link}
                                </a>
                                <div style="margin: 9px 0px;">
                                ${convertStatusProof(e.status)} ${e.isApprovalDis || e.isApprovalProvi ? '<span class="text-title-Status">( Đã duyệt )</span>' : ''}
                                </div>
                                ${e.description ? `
                                <div  class="tootip" id="tootip${e._id}" onmouseleave="tooltip(\'${e._id}\',1)">
                                    <span>
                                    ${e.description}
                                    </span>
                                </div>
                                <div class="textDes">
                                ${textdes} ${dot ? `<a href="#" onmouseover="tooltip(\'${e.id}\',0)">...xem</a>` : ''}
                                </div>`: ''} 
                                <div class="textDesQueto" multiple id="${e.id}" style="    color: #039252;">
                                ${e.name_file}
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

function hasExtension (fileName, exts) {
    return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
}

const convertStatusProof = (status) => {
    switch (status) {
        case 'NEW':
            return '<span class="text-title-Status">Mới cập nhật</span>'

        default:
            return ''
    }
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