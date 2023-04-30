
var setProduct = document.getElementById('setProduct')
var product = document.getElementById('product')
var entity = document.getElementById('entity')
var adressentity = document.getElementById('adressentity')
var fileData;
var firstTimeVisit = true;
let txtUpload = document.getElementById('txtUpload')
let imgs
let arrEdit = []
let timescheck1
let checkActive = false
//namqv khai báo biến static  trạng thái phiếu chấm 
//Dùng để check cho tính năng auto save theo thời gian cố định
var currentEvaluateStatus = '';
var isEvaluateChange = false;
var timerSave = 4000; // 4 giây
var _objListNotAchievedRank = null;
var _objListGuidequestions = null;
var _objProductSet;
var _firstEvaluation = false;
var _isSave = true;
var _colorNotCheck = '#212529';
var _colorCheck = '#049252';
//end 
let evaluateCompleted = false;
let isSecondTime = false;
let firstTimeSet = true
let firstTimeSetponti = true // trường kiểm tra điểm
var ImgsArray = []
let productData;
let totalSteps = 1;
let uploadedDropzone = [];
let entitiesId
let idcheck = [];
let information = [];
let accountInfo;
let labels;
let indexNote
let idIndexNote
let pdfs = ['.pdf', '.PDF']
let isDoneStatus = false
let uploadImgCommnet = []
function getParam (paramName) {
    var url_string = window.location.href;
    var url = new URL(url_string);
    return url.searchParams.get(paramName);
}
var productInfoId = getParam('product_id');
let productsInfo = productInfoId
var productSetId = getParam('product_type');
let createdUserId = getParam('createdUserId')
var role = getParam('role');
let sectionsArray = [];
let questionsNameList = [];
let nameContent
let arrays = []
var IdMember
var IdMembers
var nameMember
let poofinfo
let formNumber
let productId = productInfoId
let formcheck
let timecheck = 0
let edittingPrecedent = null;
$(document).ready(function () {
    // if (productInfoId) {
    //     $('#ButtonHelpTeam').attr({ "href": `/evaluaResultHelpTeam?productInfo=${productInfoId}` })
    //     $('#ButtonHelpTeamMobile').attr({ "href": `/evaluaResultHelpTeam?productInfo=${productInfoId}` })
    //     $('#SelfScore').attr({ "href": `/viewSelfScore?productInfo=${productInfoId}&productSetId=${productSetId}&createdUserId=${createdUserId}` })
    //     $('#SelfScoreMobile').attr({ "href": `/viewSelfScore?productInfo=${productInfoId}&productSetId=${productSetId}&createdUserId=${createdUserId}` })
    // }
    // $(`#newPrecedentTopic`).autocomplete({
    //     source: function (request, response) {
    //         $.ajax({
    //             url: `/getPrecedentTopicsList?keyword=${request.term}`,
    //             type: `GET`,
    //             success: function (data) {
    //                 response($.map(data.data, function (item) {
    //                     return {
    //                         label: item._id,
    //                         value: item._id
    //                     }
    //                 }));
    //             }
    //         });
    //     },
    //     minLength: 3,
    //     select: function (event, ui) {
    //         return
    //     },
    // });
    // $(`#openCreateNewPrecedentBtn`).on('click', (event) => {
    //     event.preventDefault();
    //     $(`#createPrecedentBtn`).css('display', '');
    //     $(`#updatePrecedentBtn`).css('display', 'none');
    //     $(`#newPrecedentTopic`).val('');
    //     $(`#newPrecedentTitle`).val('');
    //     $(`#newPrecedentKeywords`).tagsinput('removeAll');
    //     $('#summernoteEditor').summernote('reset');
    //     $(`#lookupPrecedentModal`).modal('toggle');
    //     $(`#createNewPrecedent`).modal('toggle');
    // });
    // $(`#createPrecedentBtn`).on('click', (event) => {
    //     event.preventDefault();
    //     let newPrecedent = {
    //         Topic: $(`#newPrecedentTopic`).val().trim(),
    //         Title: $(`#newPrecedentTitle`).val(),
    //         Keywords: $(`#newPrecedentKeywords`).val().split(','),
    //         Content: $('#summernoteEditor').summernote('code'),
    //     }
    //     createNewPrecedent(newPrecedent);
    // });
    // $(`#updatePrecedentBtn`).on('click', (event) => {
    //     event.preventDefault();
    //     let precedent = {
    //         Topic: $(`#newPrecedentTopic`).val().trim(),
    //         Title: $(`#newPrecedentTitle`).val(),
    //         Keywords: $(`#newPrecedentKeywords`).val().split(','),
    //         Content: $('#summernoteEditor').summernote('code'),
    //     }
    //     if (edittingPrecedent) {
    //         $.ajax({
    //             type: `PUT`,
    //             url: `/updatePost`,
    //             data: {
    //                 _id: edittingPrecedent,
    //                 post: JSON.stringify(precedent)
    //             },
    //             success: (response) => {
    //                 if (response.success) {
    //                     $(`#newPrecedentTopic`).val('');
    //                     $(`#newPrecedentTitle`).val('');
    //                     $(`#newPrecedentKeywords`).tagsinput('removeAll');
    //                     $('#summernoteEditor').summernote('reset');
    //                     $(`#createNewPrecedent`).modal('toggle');
    //                     Swal.fire('', 'Tiền lệ đã được cập nhật', 'success');
    //                 } else {
    //                     Swal.fire('', 'Đã có lỗi xảy ra', 'error')
    //                 }
    //             },
    //             error: (jqXHR, textStatus, errorThrown) => {
    //                 Swal.fire('', 'Đã có lỗi xảy ra', 'error');
    //                 console.warn(errorThrown);
    //             }
    //         })
    //     }
    // });
    // screenheight()
    // loadproductSetId();
    // loadfileId();
    // loadtimetype()
    // if (productSetId) {
    //     getAccountInfo1()
    // }
    // getformcheck();
    // $(`#proofBtn`).attr('href', `/treeProof?productInfoId=${productInfoId}&productSetId=${productSetId}`);
    // $(`#proofBtnMobile`).attr('href', `/treeProof?productInfoId=${productInfoId}&productSetId=${productSetId}`);

    // /// namqv xử lý autoSave lưu dữ liệu 14 giây 1 lần nếu có sự thay đổi
    // setInterval(autoSave, timerSave);
    // /// end
    // loadListGuidequestions();
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
        if (!existedItem) {
            questionsNameList.push($(this).attr('name'));
        }
    });
});
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
            check:check
        }
        console.log(obj);
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
const screenheight = () => {
    // let heights = Number(screen.height) - 300
    let heights = Number(screen.height)
    $('.bodycontent').css({ 'height': `${heights}px` })
}

const getAccountInfo1 = () => {
    $.ajax({
        type: `GET`,
        url: `/getAccountInfo`,
        success: (data) => {
            console.log(data, 180)
            if (data.data) {
                IdMembers = _.get(data, 'data._id', false)
                console.log(_.get(data, 'data.addressInfo.provinceId', ''), 175)
                if ($(`#level`)[0].innerHTML <= 1 && _.get(data, 'data.addressInfo.provinceId', '') !== "14") {
                    console.log(123)
                    $(`#lowerLevelBtn`).show();
                    $(`#lowerLevelBtn`).attr('href', `/lowerLvlEvaluations?productInfoId=${productInfoId}&productSetId=${productSetId}`);
                    $(`#lowerLevelBtnMobile`).show();
                    $(`#lowerLevelBtnMobile`).attr('href', `/lowerLvlEvaluations?productInfoId=${productInfoId}&productSetId=${productSetId}`);
                    
                    $(`#viewResultProvicial`).show();
                    $(`#viewResultProvicial`).attr('href', `viewEvaluateFileResult?fileId=${productInfoId}&&level=1`);
                    $(`#viewResultDistric`).show();
                    $(`#viewResultDistric`).attr('href', `viewEvaluateFileResult?fileId=${productInfoId}&&level=2`);

                    $(`#viewResultProvicialMobile`).show();
                    $(`#viewResultProvicialMobile`).attr('href', `viewEvaluateFileResult?fileId=${productInfoId}&&level=1`);
                    $(`#viewResultDistricMobile`).show();
                    $(`#viewResultDistricMobile`).attr('href', `viewEvaluateFileResult?fileId=${productInfoId}&&level=2`);
                } else if ($(`#level`)[0].innerHTML == 2) {
                    $(`#lowerLevelBtn`).hide();
                } else {
                    $(`#lowerLevelBtn`).hide();
                }
                getDataEvalueHelpTeam()
            }
        }
    })
}
const getDataEvalueHelpTeam = () => {
    let url = "/getDataEvalueHelpTeam?productSetId=" + productSetId + '&&productInfoId=' + productInfoId
    $.ajax({
        url: url,
        type: "GET",
        success: (ret) => {
            ///console.log(ret, 166)
            if (ret.data.length > 0) {
                drawEvalueHelpTeam(ret.data)
            } else {
                document.getElementById('listProducts').innerHTML = `Bạn chưa có kết quả chấm của bộ sp tương tự để tham chiếu!`
            }
        }

    })
}
let prosesProduct = 0
const drawEvalueHelpTeam = (data) => {
    document.getElementById('listProducts').innerHTML = ``
    data.forEach((item) => {
        if (productInfoId == _.get(item, 'productInfo[0]._id', '')) {
            prosesProduct = item.progressPercent
        }
        // console.log(prosesProduct,198)
        document.getElementById('listProducts').innerHTML += `
        <div class="col-sm-9" style="display: flex;padding: 15px 12px;">
            <img src="${_.get(item, 'productInfo[0].imgUrl[0]', 'img/noavatar.png')}" class="imgava">
            <div style="    margin-left: 10px;width: 100%;">
                <span class="titleName" style="font-weight: bold!important;">${_.get(item, 'productInfo[0].name', '')}</span><br>
                <span class="titleNamechirden">${_.get(item, 'entityInfo[0].name', '')} </span>
                <div class="row">
                            <div class="col-8">
                                <div class="progress mt-2" style="background-color: lightgrey">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" style="width:${isNaN(Number(item.progressPercent)) ? 0 : Math.floor(Number(item.progressPercent))}%; height: 8px;">
                                    </div>
                                </div>                                    
                            </div>
                            <div class="col-4 pr-0 pl-0">
                                ${isNaN(Number(item.progressPercent)) ? 0 : Math.floor(Number(item.progressPercent))}%
                            </div>
            </div>
            </div>
            
        </div>
        <div class="col-sm-3" style="padding: 15px 12px;">
            <a class="btn btn-success btn-sm" style=" margin-top: 9px;float: right;color: white;background-color: #039252;border-color: #049252;" onclick="applyHelpTeam(\'${IdMembers}\',\'${_.get(item, 'productInfo[0]._id', false)}\',\'${item.progressPercent}\',\'${prosesProduct}\')">Tham khảo</a>
        </div>
        `
    })
}
const applyHelpTeam = (IdMember, productsInfos, apply, products) => {
    firstTimeSetponti = false
    if (Number(apply) < Number(products)) {
        Swal.fire({
            title: 'Kết quả đánh giá của bộ hồ sơ này chưa đầy đủ, bạn xác nhận muốn tham khảo kết quả này?',
            text: 'Khi xác nhận, kết quả đánh giá sẽ được cập nhật theo bộ hồ sơ bạn muốn tham khảo.',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: ` Xác nhận`,
            denyButtonText: `Hủy`,
        }).then((result) => {
            if (result.value) {
                $(`#A-totalPoint`)[0].innerHTML = '';
                $(`#B-totalPoint`)[0].innerHTML = '';
                $(`#C-totalPoint`)[0].innerHTML = '';
                $(`#totalPoint`)[0].innerHTML = '';

                $(`#A-totalPointmobile`)[0].innerHTML = '';
                $(`#B-totalPointmobile`)[0].innerHTML = '';
                $(`#C-totalPointmobile`)[0].innerHTML = '';
                $(`#totalPointmobile`)[0].innerHTML = '';
                $('#example').modal('toggle');
                swal({
                    title: "Đang tải thông tin!",
                    imageUrl: '/img/Curve-Loading.gif',
                    text: "Xin vui lòng chờ trong giây lát ...",
                    showConfirmButton: false
                }); $.ajax({
                    url: "/getDatareviewernotes?id=" + productInfoId,
                    type: "GET",
                    success: (result) => {
                        $.ajax({
                            url: `/getEvaluationsByFileIdAndMemId?productInfoId=${productInfoId}&&times=${timescheck1}`,
                            type: "GET",
                            success: function (ret) {
                                if (ret.success) {
                                    if (ret.data.length > 0) {
                                        firstTimeVisit = false;
                                        firstTimeSetponti = false
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
                                                for (let j = 0; j < ret.length; j++) {
                                                    for (let i = 0; i < ret[j].detail.length; i++) {
                                                        if (ret[j].detail[i].requirement) {
                                                            sectionsArray[j].detail[i].requirement = ret[j].detail[i].requirement;
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
                                                    isDoneStatus = true
                                                    // $(`#noteText`)[0].innerHTML = `<i>(lần chấm thứ ${timescheck + 1})</i>`
                                                    // if (sectionsArray[0].times == 2) {
                                                    //     $(`#noteText`)[0].innerHTML = `<i>(Quá trình chấm đã kết thúc)</i>`
                                                    //     evaluateCompleted = true;
                                                    // }
                                                } else {
                                                    // $(`#noteText`)[0].innerHTML = `<i>(lần chấm thứ ${timescheck} + Chưa gửi kết quả)`
                                                };

                                                // renderEvaluateQuestions(sectionsArray);
                                                checkform(sectionsArray, IdMember, productsInfos)

                                            },
                                            error: (jqXHR, textStatus, errorThrown) => {
                                                console.warn(errorThrown);
                                            }
                                        });
                                    } else {
                                        // firstTimeSet = false
                                        $.ajax({
                                            url: "/getProductTypeEvalueQuestion?productSetId=" + productSetId,
                                            type: "GET",
                                            success: (ret) => {
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
                                                checkform(sectionsArray, IdMember, productsInfos)
                                                // renderEvaluateQuestions(sectionsArray);
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
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        })
    } else {
        $(`#A-totalPoint`)[0].innerHTML = '';
        $(`#B-totalPoint`)[0].innerHTML = '';
        $(`#C-totalPoint`)[0].innerHTML = '';
        $(`#totalPoint`)[0].innerHTML = '';

        $(`#A-totalPointmobile`)[0].innerHTML = '';
        $(`#B-totalPointmobile`)[0].innerHTML = '';
        $(`#C-totalPointmobile`)[0].innerHTML = '';
        $(`#totalPointmobile`)[0].innerHTML = '';
        $('#example').modal('toggle');
        swal({
            title: "Đang tải thông tin!",
            imageUrl: '/img/Curve-Loading.gif',
            text: "Xin vui lòng chờ trong giây lát ...",
            showConfirmButton: false
        }); $.ajax({
            url: "/getDatareviewernotes?id=" + productInfoId,
            type: "GET",
            success: (result) => {
                $.ajax({
                    url: `/getEvaluationsByFileIdAndMemId?productInfoId=${productInfoId}&&times=${timescheck1}`,
                    type: "GET",
                    success: function (ret) {
                        if (ret.success) {
                            if (ret.data.length > 0) {
                                firstTimeVisit = false;
                                firstTimeSetponti = false
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
                                        for (let j = 0; j < ret.length; j++) {
                                            for (let i = 0; i < ret[j].detail.length; i++) {
                                                if (ret[j].detail[i].requirement) {
                                                    sectionsArray[j].detail[i].requirement = ret[j].detail[i].requirement;
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
                                            isDoneStatus = true
                                            // $(`#noteText`)[0].innerHTML = `<i>(lần chấm thứ ${timescheck + 1})</i>`
                                            // if (sectionsArray[0].times == 2) {
                                            //     $(`#noteText`)[0].innerHTML = `<i>(Quá trình chấm đã kết thúc)</i>`
                                            //     evaluateCompleted = true;
                                            // }
                                        } else {
                                            // $(`#noteText`)[0].innerHTML = `<i>(lần chấm thứ ${timescheck} + Chưa gửi kết quả)`
                                        };

                                        // renderEvaluateQuestions(sectionsArray);
                                        checkform(sectionsArray, IdMember, productsInfos)

                                    },
                                    error: (jqXHR, textStatus, errorThrown) => {
                                        console.warn(errorThrown);
                                    }
                                });
                            } else {
                                // firstTimeSet = false
                                $.ajax({
                                    url: "/getProductTypeEvalueQuestion?productSetId=" + productSetId,
                                    type: "GET",
                                    success: (ret) => {
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
                                        checkform(sectionsArray, IdMember, productsInfos)
                                        // renderEvaluateQuestions(sectionsArray);
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
const createNewPrecedent = (data) => {
    $.ajax({
        url: `/createPrecedent`,
        type: `POST`,
        data: { precedentPost: JSON.stringify(data) },
        success: (result) => {
            if (result.success) {
                $(`#newPrecedentTopic`).val('');
                $(`#newPrecedentTitle`).val('');
                $(`#newPrecedentKeywords`).tagsinput('removeAll');
                $('#summernoteEditor').summernote('reset');
                $(`#createNewPrecedent`).modal('toggle');
                Swal.fire('Thành công', `Bạn đã đăng tải tiền lệ thành công`, 'success');
            } else {
                Swal.fire('Lỗi', `Đã có lỗi xảy ra, vui lòng thử lại sau`, 'error');
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            Swal.fire('Lỗi', `Đã có lỗi xảy ra, vui lòng thử lại sau`, 'error');
            console.warn(errorThrown);
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
function loadproductSetId () {
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
}

function loadfileId () {
    $.ajax({
        url: "loadfileId?fileId=" + productInfoId,
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

function loadtimetype () {
    $.ajax({
        url: `/getTimeType?productInfoId=${productInfoId}`,
        type: "GET",
        success: function (ret) {
            if (ret.length) {
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
    $.ajax({
        url: "/getDatareviewernotes?id=" + productInfoId,
        type: "GET",
        success: (result) => {
            $.ajax({
                url: `/getEvaluationsByFileIdAndMemId?productInfoId=${productInfoId}&&times=${timescheck}`,
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
                                    for (let j = 0; j < ret.length; j++) {
                                        for (let i = 0; i < ret[j].detail.length; i++) {
                                            if (ret[j].detail[i].requirement) {
                                                sectionsArray[j].detail[i].requirement = ret[j].detail[i].requirement;
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
                                        isDoneStatus = true
                                        $(`#noteText`)[0].innerHTML = `<span>Chờ duyệt kết quả</span> `;
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
// Hiển thị các câu hỏi
const renderEvaluateQuestions = async (ret) => {
    let getQuoteFromProofinfos = await $.ajax({
        type: "GET",
        url: "getQuoteFromProofinfo?productsInfo=" + productInfoId,
    })
    let QuetenNewProof = []
    if (getQuoteFromProofinfos.succes) {
        QuetenNewProof = [...new Set(getQuoteFromProofinfos.data)];
    }

    document.getElementById('A-content').innerHTML = ''
    document.getElementById('B-content').innerHTML = ''
    document.getElementById('C-content').innerHTML = ''
    ret.forEach((section, sectionIndex) => {
        let questionPart = ``;
        // Nếu là lần chấm thứ 2 và chưa có lịch sử thì sẽ lưu thông tin về lần chấm trước
        if (isSecondTime && !section.history) {
            section.history = {
                times: section.times,
                detail: section.detail,
                createdAt: section.createdAt,
                updatedAt: section.createdAt,
                totalPoint: section.totalPoint,
            };
        }
        //Hiển thị tổng điểm nếu không phải lần đầu vào form chấm
        if (firstTimeSetponti !== true) {
            $(`#${section.groupSection}-totalPoint`)[0].innerHTML = Number($(`#${section.groupSection}-totalPoint`)[0].innerHTML) + section.totalPoint;
            $(`#totalPoint`)[0].innerHTML = Number($(`#totalPoint`)[0].innerHTML) + section.totalPoint;

            $(`#${section.groupSection}-totalPointmobile`)[0].innerHTML = Number($(`#${section.groupSection}-totalPointmobile`)[0].innerHTML) + section.totalPoint;
            $(`#totalPointmobile`)[0].innerHTML = Number($(`#totalPointmobile`)[0].innerHTML) + section.totalPoint;

            let rankedStar = 1;

            if (Number($(`#totalPoint`)[0].innerHTML) >= 30) {
                rankedStar = 2
            }
            if (Number($(`#totalPoint`)[0].innerHTML) >= 50) {
                rankedStar = 3
            }
            if (Number($(`#totalPoint`)[0].innerHTML) >= 70) {
                rankedStar = 4
            }
            if (Number($(`#totalPoint`)[0].innerHTML) >= 90) {
                rankedStar = 5
            }
            $(`#rankStar`)[0].innerHTML = `${rankedStar} sao`;
            $(`#rankStarmobile`)[0].innerHTML = `${rankedStar} sao`;
        }
        var helpModelButton = '';
      
        section.detail.forEach((item, index) => {
            
            helpModelButton = '';
            let lv2Question = false
            let answersPart = '';
            let indexQuote = `${section.sectionIndex}.detail[${index}]`
            console.log(isDoneStatus,987)
            let bell = !isDoneStatus ? '<div class="animation-notify-bell" id="notify-bell"> <span class="animation-bell-default"></span> </span> </div>' : ''
            var iconTag = bell + `<a class="data-tooltip"  onmouseover="showTooltip(\'${indexQuote}\')" onmouseout="outTooltip(\'${indexQuote}\')"><i class="fa fa-tag" style="color:#FAA432" ></i> </a> <div class="animation-tooltip" id="tooltip-${indexQuote}" style="display:none">Mới cập nhật minh chứng</div>` // icon đánh dấu tiêu chí viện dẫn có minh chứng mới cập nhật
            let indexId = item._id
            let checkTitle = item.check ? item.check : 0;
            let requirementarray = ''
            let totalNote = ''
            if (item.requirement) {
                if (item.requirement.length > 0) {
                    for (let i = 0; i < item.requirement.length; i++) {
                        requirementarray += item.requirement[i].requirement + '-*'
                    }
                }
            }
            if (item.contentType == 'caseQuestion') {
                item.caseQuestions.forEach((questionCase, caseIndex) => {
                    let caseAnswerPart = ``;

                    questionCase.answers.forEach((answer, answerIndex) => {
                        var rootId = answer._id;
                        // if(!isNew)
                        //     rootId=answer.rootId;
                        let isChecked = answer.checked ? 'checked' : '';
                        let colorText = _colorNotCheck;
                        if (isChecked)
                            colorText = _colorCheck;
                        caseAnswerPart += `
                            <div style="display: flex;">
                                <input type="checkbox" ${isChecked} class="radio" name="${section.groupSection}_Section${sectionIndex}_Question${index}" id="${section.groupSection}_Section${sectionIndex}_Question${index}_Case${caseIndex}_Answer${answerIndex}" style="margin-top: 4px;
                                    margin-right: 6px;" value="${answer.point}" data-answer-id="${answer._id}" data-answer-text="${answer.answerText}">
                                    <label style="width: 80%;color:${colorText};" name="lbl_${section.groupSection}_Section${sectionIndex}_Question${index}" id="lbl_${section.groupSection}_Section${sectionIndex}_Question${index}_Case${caseIndex}_Answer${answerIndex}" for="${section.groupSection}_Section${sectionIndex}_Question${index}_Case${caseIndex}_Answer${answerIndex}"> ${answer.answerText}</label><br>
                                <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">${answer.point} điểm</span>
                            </div>`
                    });
                    answersPart += `
                            <div class="ml-3">
                                <label>${questionCase.case} 
                                </label>
                                    ${caseAnswerPart}
                             </div>`;
                });
            } else if (item.contentType == 'lvl2Question') {
                lv2Question = true
                item.lvl2Questions.forEach((questionObj, lvl2QuestionIndex) => {
                    let lvl2AnswerPart = ``;
                    indexQuote = `${section.sectionIndex}.detail[${index}].lvl2Questions[${lvl2QuestionIndex}]`
                    indexId = item.lvl2Questions[lvl2QuestionIndex]._id
                    questionObj.answers.forEach((answer, answerIndex) => {
                        var rootId = answer._id;
                        // if(!isNew)
                        //     rootId=answer.rootId;
                        let isChecked = answer.checked ? 'checked' : ''
                        let colorText = _colorNotCheck;
                        if (isChecked)
                            colorText = _colorCheck;
                        lvl2AnswerPart += `
                            <div style="display: flex;">
                                 <input type="checkbox" ${isChecked} class="radio" name="${section.groupSection}_Section${sectionIndex}_Question${index}_lvl2QuesIndex${lvl2QuestionIndex}" id="${section.groupSection}_Section${sectionIndex}_Question${index}_lvl2QuesIndex${lvl2QuestionIndex}_Answer${answerIndex}"
                                    style="margin-top: 4px;margin-right: 6px;" value="${answer.point}" data-answer-id="${answer._id}" data-answer-text="${answer.answerText}">
                                <label style="width: 80%;color:${colorText};" name="lbl_${section.groupSection}_Section${sectionIndex}_Question${index}" id="lbl_${section.groupSection}_Section${sectionIndex}_Question${index}_lvl2QuesIndex${lvl2QuestionIndex}_Answer${answerIndex}" for="${section.groupSection}_Section${sectionIndex}_Question${index}_lvl2QuesIndex${lvl2QuestionIndex}_Answer${answerIndex}"> ${answer.answerText}</label><br>
                                <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">${answer.point} điểm</span>
                            </div>`
                    });
                    let totalNoteLv2 = ''
                    if (questionObj.totalInfo) {
                        totalNoteLv2 = `<div class="infoNotelv2" id="infoNote${indexQuote}">${questionObj.totalInfo}</div>`
                    } else {
                        totalNoteLv2 = `<div class="infoNotelv2" id="infoNote${indexQuote}" style="display:none"></div>`
                    }
                    let isHaveNewProof = QuetenNewProof.includes(indexQuote)
                    answersPart += `
                        <div class="ml-3" style="position: relative;">
                           ${isHaveNewProof ? iconTag : ''} ${'<label><b>' + questionObj.question + ` <a href="javascript:showHelp('` + questionObj.question + `')"><i class="mdi mdi-help-circle"></i></a> </b></label><a  class="iconrole" href="#" data-toggle="modal" data-target=".comment" onclick="openCommnent(\'` + indexQuote + '\',\'' + indexId + '\')"><div class="divComment"> <img src="/img/fi-xnsuxx-comment-square-solid.png" width="16px" height="16px" style="margin-left: 10px;margin-top: 6px;"></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(' + `${checkTitle},'${section._id}','${requirementarray == '' ? false : requirementarray}'` + ',\'' + indexQuote + '\')"><div class="divocop"><img src="img/blacsk@.png" class="Black" style="margin-left: 10px;margin-top: 6px;">' + totalNoteLv2 + '</div></a><div><i>' + item.note + '</i></div>'}
                                ${lvl2AnswerPart}
                        </div>`;
                });
            } else {

                item.answers.forEach((answer, answerIndex) => {
                    var rootId = answer._id;
                    // if(!isNew)
                    //     rootId=answer.rootId;
                    let isChecked = answer.checked ? 'checked' : '';
                    let colorText = _colorNotCheck;
                    if (isChecked)
                        colorText = _colorCheck;
                    answersPart += `
                                    <div style="display: flex;">
                                            <input type="checkbox" ${isChecked} class="radio" name="${section.groupSection}_Section${sectionIndex}_Question${index}" id="${section.groupSection}_Section${sectionIndex}_Question${index}_Answer${answerIndex}"
                                                style="margin-top: 4px;
                                                margin-right: 6px;" value="${answer.point}" data-answer-id="${answer._id}" data-answer-text="${answer.answerText}">
                                            <label style="width: 80%;color:${colorText};" name="lbl_${section.groupSection}_Section${sectionIndex}_Question${index}" id="lbl_${section.groupSection}_Section${sectionIndex}_Question${index}_Answer${answerIndex}" for="${section.groupSection}_Section${sectionIndex}_Question${index}_Answer${answerIndex}"> ${answer.answerText}</label>
                                            <span style="font-size: 13px;float: right;position: absolute;right: 4px;font-style: italic;font-weight: 600!important;color: #039252!important;">${answer.point} điểm</span>
                                            <br>
                                    </div>`;
                });
            }
            // <div>
            //     <a href="#">
            //     <img width="18px" src="https://s3-alpha-sig.figma.com/img/fa87/80fa/9c750d435041437d4a53a136afa4cbd8?Expires=1599436800&Signature=MWVxW3uw67aoZyTEQe28eYvjuIIlUXYFacb4B7Kd0ov0gxq52yXA8-iCU~GAAriYD7R5IgefGKQHHZm~NTK1nk1kCVYjHgoZKneuWqfgJdq855iOErZMq-VshhSQXZF92-H6fM31N4sensfWjAaQlXNVAjiHeTtPUZ-fdBtE23S8sHr1s-wzToVcNIx3r9TGcOgLEOx9pgn78tzgA-2h7MxmlSfIx1qqCMFsTrqq~4rdV5xQp8E4nyIzqGcRyxf8Wnvl7N-6-T1dYsQmaEUMm02GpOuour3BQnUk355fwnjeiiU5YNJFElg0FpNhHRUzxMFdxDIDSD~-4Wq3J4iqEQ__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA">
            //      <i class="fa fa-plus" ></i>
            //     </a>
            // </div>
            let nolv2 = ''
            let note = ''
            let helpModelButtonLv2 = '';
            if (item.totalInfo) {
                totalNote = `<div class="infoNote" id="infoNote${indexQuote}">${item.totalInfo}</div>`
            } else {
                totalNote = `<div class="infoNote" id="infoNote${indexQuote}" style="display:none"></div>`
            }
            if (!lv2Question) {
                note = '<a  class="iconrole" href="#" data-toggle="modal" data-target=".comment" onclick="openCommnent(\'' + indexQuote + '\',\'' + indexId + '\')"><div class="divComment"> <img src="/img/fi-xnsuxx-comment-square-solid.png" width="16px" height="16px" style="margin-left: 10px;margin-top: 6px;">' + totalNote + '</div></a>'
                nolv2 = '<a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(' + `${checkTitle},'${section._id}','${requirementarray == '' ? false : requirementarray}'` + ',\'' + indexQuote + '\')"><div class="divocop"><img src="img/blacsk@.png" class="Black" style="margin-left: 10px;margin-top: 6px;"></div></a>'
                helpModelButtonLv2 = ` <a href="javascript:showHelp('` + item.question + `')"><i class="mdi mdi-help-circle"></i></a> `;
            }
            if (item.question == '') {
                let qs = section.sectionName.split('.').splice(1).join('.');
                helpModelButton = ` <a href="javascript:showHelp('` + qs + `')"><i class="mdi mdi-help-circle"></i></a> `;
            }
            let isHaveNewProof = QuetenNewProof.includes(indexQuote)
            questionPart += `
                     <div style="width:100%;position: relative;display: inline-table;" >
                     ${isHaveNewProof ? iconTag : ''}
                     ${item.question != '' ?
                    ' <span><b>' + item.question + ' ' + helpModelButtonLv2 + ' </b></span>' + note + nolv2 + '<div><i> <span>' + item.note + '</span></i></div>'
                    : '<div><i><p style="max-width:96%">' + item.note + '</p></i><a  class="iconrole" href="#" data-toggle="modal" data-target=".comment" onclick="openCommnent(\'' + indexQuote + '\',\'' + indexId + '\')"><div class="divComment"> <img src="/img/fi-xnsuxx-comment-square-solid.png" width="16px" height="16px" style="margin-left: 10px;margin-top: 6px;"></div></a><a class="iconroles" href="#" data-toggle="modal" data-target="#exampleModalOcop" onclick="checkInfoOcop(' + `${checkTitle},'${section._id}','${requirementarray == '' ? false : requirementarray}'` + ',\'' + indexQuote + '\')"> <div class="divocop"><img src="img/blacsk@.png" class="Black" style="margin-left: 10px;margin-top: 6px;">' + totalNote + '</div> </a><div>'}
                        <div id="${section.groupSection}Question-${index}">
                            ${answersPart}
                        </div>
                    </div>`;
        });

        $(`#${section.groupSection}-content`).append(`
                        <form class="form-material" id="${section.groupSection}_Section${section.sectionIndex - 1}">
                            <div>
                                <label for="productName">
                                    <div style="display:flex">
                                        <div class="Rectangle"></div>
                                        <span class="SubHeading">${section.sectionName.split('.').splice(1).join('.')} ${helpModelButton}</span> 
                                    </div>
                                </label>
                                
                                ${questionPart}
                            </div>
                        </form>
                        `)
    });
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
    if (evaluateCompleted) {
        $(`input:checkbox`).attr('disabled', true);
        $(`#completeEvaluate`).attr('disabled', true);
        $(`#completeEvaluatemobile`).attr('disabled', true);
        $(`#saveProcessBtn`).hide();
        $(`#saveProcessBtn`).attr('href', 'javascript:void(0)');
        $(`#saveProcessBtnmobile`).hide();
        $(`#saveProcessBtnmobile`).attr('href', 'javascript:void(0)');
    }
    $('#question div input[name]').each(function () {
        let existedItem = questionsNameList.find(item => item == $(this).attr('name').toString());
        if (!existedItem) {
            questionsNameList.push($(this).attr('name'));
        }
    });
    // kiểm tra quyền truy cập từ mục thống kê



    checkroleEvalueSet()
    $(`#bootommIdeaPc`).show();
    $(`#bootommIdea`).show();
}

const checkroleEvalueSet = () => {
    console.log($('#statusServe').innerHTML)
    if (role == "view") {
        $(':checkbox').attr('disabled', 'disabled ')
        $('#completeEvaluate').attr('disabled', 'disabled ')
        $('#completeEvaluatemobile').attr('disabled', 'disabled ')
        // $('.evaluateStatus').attr('disabled', 'disabled ')
        $('.iconrole').attr({ 'data-toggle': '', 'onclick': '' })
        $('#saveProcessBtn').addClass('disabled')
        $('#saveProcessBtnmobile').addClass('disabled')
        $('#lowerLevelBtnMobile').addClass('disabled')
        $('#ButtonHelpTeamMobile').addClass('disabled')
        $('#lowerLevelBtnMobiles').addClass('disabled')
        $('#lowerLevelBtns').addClass('disabled')
        $('#ButtonHelpTeam').addClass('disabled')

    }
    else {
        $.ajax({
            url: "checkevaluationSet?productInfoId=" + productInfoId,
            type: "GET",
            success: function (ret) {
                if (ret == "100") {
                    $(':checkbox').attr('disabled', 'disabled ')
                    $('#completeEvaluate').attr('disabled', 'disabled ')
                    $('#completeEvaluatemobile').attr('disabled', 'disabled ')
                    // $('.evaluateStatus').attr('disabled', 'disabled ')
                    // $('.evaluateStatus').addClass('disabled')
                    $('.iconrole').attr({ 'data-toggle': '', 'onclick': '' })
                    $('#saveProcessBtn').addClass('disabled')
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
function checkInfoOcop (id, EvaluationId, requirement, quote) {
    console.log(id, 11198)
    console.log(EvaluationId, 11198)
    console.log(requirement, 11198)
    console.log(quote, 11198)
    document.getElementById('listpoofdoc').innerHTML = ``
    document.getElementById('listpoof').innerHTML = ``
    document.getElementById('listpoofdocQuote').innerHTML = ``
    document.getElementById('listpoofQuote').innerHTML = ``
    document.getElementById('ImgModal-info').innerHTML = ``
    document.getElementById('DocModal-info').innerHTML = ``

    $.ajax({
        url: "getQuoteByIndexAndProduct?index=" + quote + "&productInfoId=" + productInfoId,
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
        url: "getEtitybyFileid?fileId=" + productInfoId,
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
        productsInfo: productInfoId
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
                                link = `<a target="_blank" href="${e.data}"><img data-pdf-thumbnail-file="${e.data}" data-pdf-thumbnail-height="600" src="img/pdf.jpg" class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a>`
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
                link = `<a target="_blank" href="${e.data}"><img data-pdf-thumbnail-file="${e.data}" data-pdf-thumbnail-height="600" src="img/pdf.jpg" class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a>`
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
const convertStatusProof = (status) => {
    switch (status) {
        case 'NEW':
            return '<span class="text-title-Status">Mới cập nhật</span>'

        default:
            return ''
    }
}

function numberWithCommas (x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
        x = x.replace(pattern, "$1,$2");
    return x;
}
const saveResult = (status, showModel) => {
    console.log("Toan");
    // for (let i = 0; i < questionsNameList.length; i++) {
    //     if ($(`#question input:checkbox[name="${questionsNameList[i]}"]:checked`).length < 1) {
    //         let questionComponents = questionsNameList[i].split('_');
    //         preventSaving = true;
    //         isNoSave = true;
    //         $(`#saveProcessBtn`).removeClass('disabled')
    //         $(`#saveProcessBtnmobile`).removeClass('disabled')
    //         $(`#completeEvaluate`).attr('disabled', false);
    //         $(`#completeEvaluatemobile`).attr('disabled', false);
    //         return Swal.fire('Cảnh báo', `Bạn chưa trả lời đầy đủ câu hỏi của mục ${Number(questionComponents[1][questionComponents[1].length - 1]) + 1}, vui lòng kiểm tra lại.`, 'warning');
    //     }
    // }
    //return Swal.fire('Cảnh báo', `Bạn chưa trả lời đầy đủ câu hỏi của mục , vui lòng kiểm tra lại.`, 'warning');
    return Swal.fire({
        title: 'Cảnh báo!',
        text: "Đã có lỗi xảy ra vui lòng thử lại!",
        type: 'warning',
    });
}
var isNoSave = true;
const saveEvaluate = (status, showModel) => {
    // if (isNoSave) {
    isNoSave = false;
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
    let ajaxUrl = `/saveEvaluateResult`;
    // Đổi sang update nếu không phải lần đầu tiên vào form chấm
    if (firstTimeVisit != true) {
        ajaxMethod = `PUT`;
        ajaxUrl = `/updateEvaluateResult`;
    }
    // Nếu người chấm chọn gửi kết quả khi chưa trả lời hết các câu hỏi, hiển thị thông báo và không cho gửi
    let preventSaving = false;
    var messWaiting = "Đang thực hiện lưu dữ liệu";
    if (status == 'DONE') {
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
        messWaiting = "Đang thực hiện gửi kết quả";
    }
    //console.log(sectionsArray, 1282)
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
                    sendData(ajaxMethod, ajaxUrl, sectionsArray, productInfoId, status, isSecondTime, $(`#totalPoint`)[0].innerHTML, showModel);
                } else {
                    isNoSave = true;
                    $(`#saveProcessBtn`).removeClass('disabled')
                    $(`#saveProcessBtnmobile`).removeClass('disabled')
                    $(`#completeEvaluate`).attr('disabled', false);
                    $(`#completeEvaluatemobile`).attr('disabled', false);
                }
            })

        } else {
            sendData(ajaxMethod, ajaxUrl, sectionsArray, productInfoId, status, isSecondTime, $(`#totalPoint`)[0].innerHTML, showModel);
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
function sendData (ajaxMethod, ajaxUrl, sectionsArray, productInfoId, status, isSecondTime, totalPoint, showModel) {
    $.ajax({
        type: ajaxMethod,
        url: ajaxUrl,
        data: {
            evaluateSections: JSON.stringify(sectionsArray),
            productInfoId: productInfoId,
            totalPoint: $(`#totalPoint`)[0].innerHTML,
            status: status,
            isSecondTime: isSecondTime ? isSecondTime : undefined,
        },
        success: (data) => {
            isNoSave = true;
            if (data.success) {
                if (data.errorArray && data.errorArray.length > 0) {
                    console.warn(data.errorArray);
                }
                if (showModel) {
                    Swal.fire({
                        type: 'success',
                        title: '',
                        text: status == 'PROCESSING' ? 'Đánh giá đã được lưu!' : 'Kết quả đánh giá đã được gửi đến quản lý!',
                        footer: ''
                    }).then(ret => {
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
const openPrecedentModal = () => {
    $(`#lookupPrecedentModal`).modal('show');
    getPrecedentTopicsList(1);
    // getForumPosts();
}
const tooltip = (id, role) => {
    if (role == "0") {
        $(`#tootip${id}`).show()
    } else {
        $(`#tootip${id}`).hide()
    }

}

const getPrecedentTopicsList = (page) => {
    $.ajax({
        url: `/getPrecedentTopicsList?page=${page}`,
        type: `GET`,
        success: (response) => {
            if (response.success) {
                $(`#precedentDetail`).hide();
                $(`#precedentPostsWrapper`).hide();
                $(`#topicWrapper`).show();
                $(`#precedentTopicsList`)[0].innerHTML = `<h4 class="text-center">Danh sách chủ đề</h4>`;
                $(`#topicPagin`)[0].innerHTML = ``;
                let { data: topics, numberOfPages } = response;
                topics.forEach(topic => {
                    $(`#precedentTopicsList`).append(`
                    <div class="row">
                        <div class="col-12">
                            <div class="media">
                                <div class="media-body pb-3 mb-3 ml-2">
                                    <h5>${topic._id}</h5><br>
                                    <a
                                    href='javascript:getForumPosts(${undefined},"${topic._id}")' class="stretched-link">
                                        ${topic.quantity} bài viết
                                    </a>
                                </div>
                            </div>
                    </div>`)
                });
                for (let i = 1; i <= numberOfPages; i++) {
                    $(`#topicPagin`).append(`
                        <li class="page-item"><a class="page-link" href="javascript:getPrecedentTopicsList(${i})">${i}</a></li>
                    `)
                }
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
}

const getForumPosts = (keyword, topic, page) => {
    if (!page) page = 1;
    let url = `/getForumPosts?page=${page}`;
    if (topic) {
        url += `&topic=${topic}`
    } else if (keyword) {
        url += `&keyword=${keyword}`
    }
    $.ajax({
        type: `GET`,
        url: url,
        success: (data) => {
            if (data.success) {
                $(`#precedentDetail`).hide();
                $(`#topicWrapper`).hide();
                $(`#precedentPostsWrapper`).show();
                $(`#precedentPagin`)[0].innerHTML = ``;
                $(`#precedentPostsList`)[0].innerHTML = `<button class="btn btn-info mb-3" onClick="getPrecedentTopicsList(1)">Xem danh sách chủ đề</button>`;
                data.results.forEach(post => {
                    let advanceOptions = post.isAuthor ? `
                    <a href='javascript:editPrecedent("${post._id}")' style="color: #00c292">Sửa</a> 
                    <a href='javascript:deletePrecedent("${post._id}", "${keyword}", "${topic}")' style="color: red">Xóa</a>` : '';
                    $(`#precedentPostsList`).append(`
                        <div class="row">
                            <div class="col-2 align-items-center text-center">
                            <div class="text-center">
                                <a class="badge badge-light bg-white" href='javascript:Vote("${post._id}",1);'
                                data-toggle="tooltip" title="Up Vote">
                                <i class="fa fa-arrow-up fa-2" aria-hidden="true" style="font-size: 16px;"></i>
                                </a>
                            </div>
                            <div class="text-center" id="VotePoint-${post._id}">${post.Like}</div>
                            <div class="text-center">
                                <a class="badge badge-light bg-white" href='javascript:Vote("${post._id}",-1);'
                                data-toggle="tooltip" title="Up Vote"><i class="fa fa-arrow-down fa-2" aria-hidden="true"
                                    style="font-size: 16px;"></i></a>
                            </div>
                            <p><span class="badge badge-success"><i class="fa fa-eye" aria-hidden="true"></i>
                                ${post.Views}</span></p>
                            </div>
                            <div class="col-10">
                            <div class="media">
                                <div class="media-body pb-3 mb-3 ml-2">
                                    [${post.Topic ? post.Topic : ''}] - ${post.Title} 
                                    <div>
                                        <a href='javascript:precedentPostDetail("${post._id}")' style="color: #0286c1">Xem</a>`
                        + advanceOptions +
                        `</div>
                                </div>
                            </div>
                            </div>
                        </div>`);
                });
                for (let i = 1; i <= data.numberOfPages; i++) {
                    topic = topic ? `${topic}` : undefined
                    $(`#precedentPagin`).append(`
                        <li class="page-item"><a class="page-link" href="javascript:getForumPosts('${keyword}', ${topic}, ${i})">${i}</a></li>
                    `)
                }
            } else {
                console.warn(`error happened:`, data.error);
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
}

const editPrecedent = (precedentId) => {
    edittingPrecedent = precedentId;
    $.ajax({
        type: `GET`,
        url: `/getPrecedentById?precedentId=${precedentId}`,
        success: (response) => {
            if (response.success) {
                let { Topic, Title, Keywords, Content } = response.data;
                $(`#newPrecedentTopic`).val(Topic);
                $(`#newPrecedentTitle`).val(Title);
                $(`#newPrecedentKeywords`).tagsinput('removeAll');
                Keywords.forEach(keyword => {
                    $(`#newPrecedentKeywords`).tagsinput('add', keyword);
                });
                $('#summernoteEditor').summernote('code', Content);

                $(`#lookupPrecedentModal`).modal('toggle');
                $(`#createPrecedentBtn`).css('display', 'none');
                $(`#updatePrecedentBtn`).css('display', '');
                $(`#createNewPrecedent`).modal('toggle');
            } else {
                console.warn(response.data)
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
}

const deletePrecedent = (precedentId, currentKeyword, currentTopic) => {
    Swal.fire({
        title: 'Cảnh báo',
        text: "Bạn có chắc chắn muốn xóa tiền lệ này?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: 'gray',
        confirmButtonText: 'Xóa',
        cancelButtonText: 'Quay lại'
    }).then(result => {
        if (result.value) {
            $.ajax({
                url: `/deletePrecedent?precedentId=${precedentId}`,
                type: `DELETE`,
                success: (response) => {
                    if (response.success) {
                        Swal.fire('', 'Tiền lệ đã được xóa', 'success').then(choice => {
                            if (choice.value) {
                                getForumPosts(currentKeyword, currentTopic);
                            }
                        })
                    }
                },
                error: (jqXHR, textStatus, errorThrown) => {
                    console.warn(errorThrown);
                }
            })
        }
    });
}

const backToPrecedentList = () => {
    $(`#precedentPostsWrapper`).show();
    $(`#precedentDetail`).hide();
}

const precedentPostDetail = (precedentId) => {
    $.ajax({
        type: `GET`,
        url: `/getPrecedentById?precedentId=${precedentId}`,
        success: (response) => {
            if (response.success) {
                postData = response.data;
                $(`#precedentDetail`)[0].innerHTML = ''
                $(`#precedentDetail`).append(`
                <div>
                    <button onclick='backToPrecedentList()' class='btn btn-success mb-3'>Quay lại</button>
                    <h4>[${postData.Topic}]</h4>
                    <h5>${postData.Title}</h5>
                    <small>Ngày đăng: ${new Date(postData.createdAt).toLocaleString()}</small>
                    <p class='mt-3'>${postData.Content}</p>
                </div>`);
                $(`#precedentPostsWrapper`).hide();
                $(`#precedentDetail`).show();
                postData.Views = Number(postData.Views) + 1;
                $.ajax({
                    type: `PUT`,
                    url: `/updatePost`,
                    data: {
                        _id: postData._id,
                        post: JSON.stringify(postData)
                    },
                    success: (data) => {
                        console.log(data);
                    },
                    error: (jqXHR, textStatus, errorThrown) => {
                        console.warn(errorThrown);
                    }
                })
            } else {
                console.warn(response.data)
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
}

const Vote = (postId, changePoint) => {
    let Like = Number($(`#VotePoint-${postId}`)[0].innerHTML) + Number(changePoint);
    $.ajax({
        type: `PUT`,
        url: `/updatePost`,
        data: {
            _id: postId,
            post: JSON.stringify({ Like })
        },
        success: (data) => {
            $(`#VotePoint-${postId}`)[0].innerHTML = Like;
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
}

$('#keyword').keypress(function (event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if (keycode == '13') {
        searchPrecedent();
    }
});

function searchPrecedent () {
    getForumPosts($(`#keyword`).val());
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
function getformcheck () {
    $.ajax({
        url: "checkdataresponeform?productInfo=" + productInfoId,
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
async function LoadProof () {
    let dataAllow = await $.ajax({
        url: `/getAllowProofProduct?productId=${productInfoId}`,
        type: "GET"
    })
    $.ajax({
        url: `/GetrequirementModel?fileId=${productInfoId}`,
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                if(dataAllow.succes &&  dataAllow.data){
                    let data = _.get(dataAllow, 'data.allowProofIds',[]) 
                    let approval = _.get(dataAllow, 'data.approval',null) 
                    draw(ret, data, approval)
                }else{
                    draw(ret)
                }

            }
        }
    })
}
let requirement

function draw (ret, allowIdProof,approval) {
    document.getElementById('Obligatory').innerHTML = ``
    document.getElementById('Additionally').innerHTML = ``
    let template;
    let Note
    let allowIdProofs = []
    if(allowIdProof){
        allowIdProofs = allowIdProof.map((item)=>{
            return item._id
        })
    }
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
        // }
        if (element._id == "5e4f946cffb6912ea06ea54c") {
            // Phương án kế hoạch kinh doanh
            template = `
                    <a class='uploadButton disabled' href="registermanufacturing?productsInfo=${productInfoId}&requireId=${element._id}"  onclick="clicks(\'${element._id}\',\'${element.content}\')"> <img src="img/primary.png" srcset="img/primary@2x.png 2x,img/primary@3x.png 3x" class="Primary" style="margin-top: 13px;"></a>  
                    `
        } else if (element._id == '5e4f946cffb6912ea06ea54d') {
            // Giới thiệu bộ máy tổ chức
            template = `
                    <a class='uploadButton disabled' href="introRegister?productsInfo=${productInfoId}&requireId=${element._id}"  onclick="clicks(\'${element._id}\',\'${element.content}\')"> <img src="img/primary.png" srcset="img/primary@2x.png 2x,img/primary@3x.png 3x" class="Primary" style="margin-top: 13px;"></a>  
                    `
        } else if (element._id == '5e4f946cffb6912ea06ea54b') {
            // Phiếu đăng ký
            template = `
                  <a class='uploadButton disabled' class="disabled" href="javascript:openQuestionModal(\'${element._id}\',\'${productInfoId}\')"> <img src="img/primary.png" srcset="img/primary@2x.png 2x,img/primary@3x.png 3x" class="Primary" style="margin-top: 13px;"></a>  
                  `
        } else {
            template = `
                    <a class='uploadButton disabled' class="disabled" href="#" data-toggle="modal" data-target="#step1" onclick="clicks(\'${element._id}\',\'${element.content}\')">
                    <img src="img/primary.png" srcset="img/primary@2x.png 2x,img/primary@3x.png 3x" class="Primary" style="margin-top: 13px;">
                    </a>`
        }
        if (allowIdProofs) {
            let isUpProof = allowIdProofs.includes(element._id)
            let isAprovoval = approval ? approval.includes(element._id) : false
            if (isUpProof) { 
                if(!isAprovoval){
                    statusProof = '<span style="font-size: 13px;font-style: italic;color: #049252;">(Cập nhật)</span>'
                    animation = ' <div class="animation-notify-bell" id="notify-bell"> <span class="animation-bell"></span> <span class="animation-point"></span> </div>'
                }else{
                    statusProof = '<span style="font-size: 13px;font-style: italic;color: #049252;">(Đã cập nhật)</span>'
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
                          <a href="#" data-toggle="modal"  onclick="${modalshow}" class="viewMem">
                          ${Dem}
                       </a>
                       <div class="titlesinfo"> ${animation}  <a class="viewMem" herf="#" data-toggle="modal"  onclick="${modalshow}">${element.content} ${statusProof}</a>
                       </div>
                       <div style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                         <div class="Rectangle-Copy">
                         ${template}
                         </div>
                         <div class="re-Copy" style="margin-right: 8px;">
                         <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled">
                          <img src="img/s.png" srcset="img/s@2x.png 2x,img/s@3x.png 3x"
                                class="Black" style=" margin-top: 13px;">
                                </a>
                         </div>
                         <div class="re-Copy">
                         <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal(${JSON.stringify(element)})'>
                              <img src="img/black.png" srcset="img/black@2x.png 2x,img/black@3x.png 3x" class="Black" style="margin-top: 13px;">
                          </a>
                         </div>
                       </div>
                    </div>
                      `
        } else if (element.type == "Additionally") {
            document.getElementById('Additionally').innerHTML += `
              <div class="col-md-12" style="padding: 0;">
              <div class="ectangle">
                <a href="#" data-toggle="modal" class="viewMem"  onclick="showModal(\'${element._id}\',\'${element.content}\')">
                   ${Dem}
                </a>
                 <div class="titlesinfo"> ${animation}  <a herf="#" data-toggle="modal" class="viewMem"  onclick="showModal(\'${element._id}\',\'${element.content}\')">${element.content} ${statusProof}</a>
                 </div>
                 <div style="padding-top: 24px;padding-bottom: 10px;padding-left: 12px;padding-right: 12px;display: flex;justify-content: center;">
                   <div class="Rectangle-Copy">
                   <a class='uploadButton disabled' href="#" data-toggle="modal" data-target="#step1" onclick="clicks(\'${element._id}\',\'${element.content}\')">
                    <img src="img/primary.png" srcset="img/primary@2x.png 2x,img/primary@3x.png 3x" class="Primary" style="margin-top: 13px;">
                    </a>
                   </div>
                   <div class="re-Copy" style="margin-right: 8px;">
                   <a href="" data-toggle="modal" data-target="#step3" class="questionMem disabled">
                    <img src="img/s.png" srcset="img/s@2x.png 2x, img/s@3x.png 3x" class="Black" style="    margin-top: 13px;">
                   </a>
                   </div>
                   <div class="re-Copy">
                    <a href="#" class="supportModalMem disabled" data-toggle="modal" data-target="#supportModal" onclick='showSupportModal(${JSON.stringify(element)})'>
                      <img src="img/black.png" srcset="img/black@2x.png 2x, img/black@3x.png 3x" class="Black" style="margin-top: 13px;">
                    </a>
                   </div>
                 </div>
              </div>
            </div>`
        }
    });

}

const openMultiChoiceModal = (requirementId, productId, requirementContent) => {
    $(`#exampleModalOcop`).modal('toggle');
    $(`#multiChoiceModal`).modal('show');
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
    <li style="margin-bottom: 23px;">
        <i class="fa fa-hand-point-right"></i>
        <a onclick="getSavedProof('${formNumber}', '${productId}')" class="viewMem" href="#">
            Xem biểu mẫu
        </a>
    </li>
    <li>
        <i class="fa fa-hand-point-right"></i>
        <a onclick="showModal('${requirementId}', '${requirementContent}')" class="producthref" href="#">
            Xem file
        </a>
    </li>`
}

// function showModal(_id, name) {
//     $(`#multiChoiceModal`).modal('hide');
//     $(`#exampleModalOcop`).modal('hide');
//     $('#Modaliffo').modal('toggle');
//     nameContent = name
//     requirement = _id
//     document.getElementById('LinkModal-info').innerHTML = ''
//     document.getElementById('docu').innerHTML = nameContent
//     document.getElementById('ImgModal-info').innerHTML = ``
//     document.getElementById('DocModal-info').innerHTML = ``

//     let obj = {
//         _id: _id,
//         productsInfo: productInfoId
//     }
//     $.ajax({
//         type: 'POST',
//         contenType: "aplication/json",
//         data: obj,
//         url: "/GetPrr",
//         success: function (data) {
//             let Img
//             let doc
//             if (data.length > 0) {
//                 $('#ImgModal-info').append(`<div class="col-md-12 Note-Copy" style="text-align: left;padding-left:0px;display:none" id="imgshow">Ảnh</div>`)
//                 $('#ImgModal-info').append(`<div class="col-md-12 Note-Copy" style="text-align: left;padding-left:0px;display:none" id="linkShow">Liên kết</div>`)
//                 $('#DocModal-info').append(`<div class="col-md-12 Note-Copy row" id="DocModal-info1" style="text-align: left;display:none" >Tài liệu</div>`)
//                 let pdf = ['.pdf', '.PDF']
//                 let dot = false
//                 data.forEach((e) => {
//                     if (e.type !== "INFO") {
//                         $('#Text-cancel').css({ "display": "none" })
//                         $('#body-Info').css({ "display": "" })
//                         $('#Product').css({ "display": "none" })
//                         if (e.type == "IMG") {
//                             $('#imgshow').show()
//                             let link = `<img src="${e.data}" class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..." onclick="clickImg(\'${e.data}\')">`
//                             if (hasExtension(e.data, pdf)) {
//                                 link = `<a target="_blank" href="${e.data}"><img data-pdf-thumbnail-file="${e.data}" data-pdf-thumbnail-height="600"  src="img/pdf.jpg" class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a>`
//                             }
//                             let textdes = e.descriptionImg ? e.descriptionImg : ''
//                             if (textdes.length > 100) {
//                                 textdes = textdes.slice(0, 100);
//                                 dot = true
//                             }
//                             document.getElementById('ImgModal-info').innerHTML += `
//                                 <div class="col-6">          
//                                 <div class="card mb-4 ">
//                                     <a href="#">
//                                     ${link}
//                                     </a>
//                                     ${e.descriptionImg ? `
//                                     <div  class="tootip" id="tootip${e._id}" onmouseleave="tooltip(\'${e._id}\',1)">
//                                         <span>
//                                         ${e.descriptionImg}
//                                         </span>
//                                     </div>
//                                     <div style="font-size: 14px;font-weight: 500;margin-top: 10px;max-height: 79px;
//                                     overflow: auto;color: #767989;">
//                                     ${textdes} ${dot ? `<a href="#" onmouseover="tooltip(\'${e._id}\',0)">...xem</a>` : ''}
//                                     </div>`: ''}
//                                     <div class="card-footer bg-white">
//                                     <div class="row d-flex align-items-center">
//                                         <div class="col" align="right">
//                                         </div>
//                                     </div>
//                                     </div>
//                                 </div>
//                                 </div>
//                             `
//                         } else if (e.type == "LINK") {
//                             $('#linkShow').show()
//                             let link = `<img src="img/linkicon.jpg" class="img-thumbnail" style="object-fit: fit;width: 100%;padding: 11px; height: 150px;">`
//                             let textdes = e.descriptionImg ? e.descriptionImg : ''
//                             if (textdes.length > 100) {
//                                 textdes = textdes.slice(0, 100);
//                                 dot = true
//                             }
//                             document.getElementById('LinkModal-info').innerHTML += `
//                                 <div class="col-6">          
//                                 <div class="card mb-4 ">
//                                     <a href="${e.data}" target="_blank">
//                                     ${link}
//                                     <div class="textDes">${textdes}${dot ? `...` : ''}</div>   
//                                     </a>
//                                 </div>
//                                 </div>
//                             `
//                         } else if (e.type == "DOC") {
//                             $('#DocModal-info1').show()
//                             let namefile = e.data
//                             if (e.nameFile) {
//                                 namefile = e.nameFile
//                             }
//                             let doclink = `<a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.data}" >${namefile}</a>`
//                             if (hasExtension(e.data, pdf)) {
//                                 doclink = `<a target="_blank" href="${e.data}" >${namefile}</a>`
//                             }
//                             document.getElementById('DocModal-info').innerHTML += `
//                             <div class="col-10 m-b-20" id="oveflow" style="overflow: hidden;">
//                                     ${doclink}
//                             </div>
//                             <div class="col-2">
//                             <a href="#" class="btn btn-sm btn-outline-secondary" role="button" onclick="deleteFile(\'${e._id}\',\'${e.requirementId}\')">Xóa</a>
//                             </div>
//                             `
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
//                       <div id="main-wrapper" >
//                         <div class="container-fluid>
//                             <div class="mt-3">
//                                 <form class="form-material">
//                                     <div class="form-control">
//                                         <label for="productName">
//                                             <div class="numberCircle">01</div><b>
//                                                 TÊN SẢN PHẨM</b>
//                                         </label><br>
//                                         <input type="text" id="productName" name="productName" value="${e.fileInfo[0].name}"
//                                             class="form-control form-control-line pl-3" placeholder="Nhập tên hoặc ý tưởng sản phẩm">
//                                     <br><br>    
//                                     </div>
//                                     <div class="form-control">
//                                         <label for="productName">
//                                             <div class="numberCircle">02</div><b>
//                                                 MÔ TẢ SẢN PHẨM</b>
//                                         </label><br>
//                                         <b class="mt-3">a. Giá trị mục tiêu của sản phẩm/phần cốt lõi</b>
//                                         <input type="text" id="productValue" name="" value="${e.Data.Des.value}"
//                                             class="form-control form-control-line pl-3"
//                                             placeholder="Lý do khiến khách hàng muốn mua sản phẩm">
//                                         <b class="mt-3">b. Quy cách đóng gói</b>
//                                         <input type="text" id="packingMethod" name="" value="${e.Data.Des.packingMethod}"
//                                             class="form-control form-control-line pl-3"
//                                             placeholder="Ví dụ: đóng túi, chai, lọ, ...">
//                                         <b class="mt-3">c. Tên nhãn hiệu sản phẩm/dịch vụ dự kiến</b>
//                                         <input type="text" id="brandName" name="" value="${e.Data.Des.brandName}"
//                                             class="form-control form-control-line pl-3" placeholder="Nhập tên bạn dự kiến đặt">
//                                         <b class="mt-3">d. Mục tiêu chất lượng của sản phẩm</b>
//                                         <br>
//                                         <!-- <div class="container">
//                                             <input type="checkbox" class="inp-cbx" id="vehicle1" style="display: none;">
//                                             <label class="cbx" for="vehicle1">
//                                                 <span>
//                                                     <svg width="12px" height="10px" viewbox="0 0 12 10">
//                                                         <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
//                                                     </svg>
//                                                 </span><span> Cho thị trường quốc tế</span></label><br> -->
//                                         <div id="quality-target">
//                                             <ul>${qualityList}</ul>
//                                         </div>
//                                     </div>
//                                     <div class="form-control">
//                                         <b>đ. Mục tiêu thị trường tiêu thụ</b>
//                                         <div>
//                                             Phạm vi tiêu thụ
//                                             <div class="row container" id="range-market">
//                                                 <ul>${marketList}</ul>
//                                             </div>
//                                         </div>
//                                         <div>
//                                             Đối tượng khách hàng
//                                             <div class="row container" id="customerTarget">
//                                                 <ul>${customerList}</ul>
//                                             </div>
//                                         </div>
//                                         <div>
//                                             Đối tượng khách hàng có thu nhập
//                                             <div class="row container" id="incomeTarget">
//                                               <ul>${incomeList}</ul>
//                                             </div>
//                                         </div>
//                                     </div>

//                                     <div class="form-control mt-3">
//                                         <b class="mt-3">e. Đối thủ cạnh tranh</b>
//                                         <div>Các sản phẩm tương tự đã có trên thị trường</div>
//                                         <input id="competitorProducts" type="text" name="" value="${e.Data.CompetitorProducts}" class="form-control form-control-line pl-3"
//                                             placeholder="Các sản phẩm tương tự đã có trên thị trường">
//                                         <div>Điểm mới, điểm khác biệt của sản phẩm</div>
//                                         <input id="Advantages" type="text" name="" value=${e.Data.Advantages}"" class="form-control form-control-line pl-3"
//                                             placeholder="Sản phẩm của bạn có gì nổi bật?">
//                                         <b class="mt-3">g. Quy mô thị trường dự kiến</b>
//                                         <div>Lượng sản phẩm hoặc khách hàng dự kiến</div>
//                                         <input id="PredictNumber" type="text" name="" value="${e.Data.PredictNumber}" class="form-control form-control-line pl-3"
//                                             placeholder="Số sản phẩm, khách hàng/năm">
//                                         <b class="mt-3">h. Giá bán dự kiến đến tay người tiêu dùng</b>
//                                         <input id="expectedPrice" style="width: 50%;" type="number" name="" value="${e.Data.ExpectedPrice}"
//                                             class="form-control form-control-line pl-3" placeholder="0"><span>VNĐ/sản
//                                             phẩm</span>
//                                         <br>
//                                     </div>
//                                     <div class="form-control mt-5">
//                                         <b>i. Câu chuyện về sản phẩm</b>
//                                         <div>Nguồn gốc lịch sử</div>
//                                         <input id="historyOrigin" type="text" name="" value="${e.fileInfo[0].History}" class="form-control form-control-line pl-3"
//                                             placeholder="Nguồn gốc lịch sử ra đời của sản phẩm">
//                                         <div>Yếu tố văn hóa</div>
//                                         <input id="cultureElement" type="text" name="" value="${e.fileInfo[0].Culture}" class="form-control form-control-line pl-3"
//                                             placeholder="Sản phẩm mang ý nghĩa văn hóa gì?">
//                                         <div>Yếu tố địa danh</div>
//                                         <input id="geoElement" type="text" name="" value="${e.fileInfo[0].GeoElement}" class="form-control form-control-line pl-3"
//                                             placeholder="Sản phẩm mang ý nghĩa địa phương thế nào?">
//                                         <div>Yếu tố khác (nếu có)</div>
//                                         <input id="otherElement" type="text" name="" value="${e.fileInfo[0].OtherElement}" class="form-control form-control-line pl-3"
//                                             placeholder="Các yếu tố khác liên quan đến sản phẩm"><br>
//                                     </div>
//                                     <br>
//                                     <div class="form-control">
//                                         <label for="productName">
//                                             <div class="numberCircle">03</div><b>
//                                                 TÍNH MỚI CỦA SẢN PHẨM</b>
//                                         </label><br>
//                                         <div class="container" id="novelty">
//                                             <li>${e.Data.Novelty}</li>                                        
//                                         </div>
//                                         <br>
//                                     </div>
//                                     <div class="form-control">
//                                         <label for="productName">
//                                             <div class="numberCircle">04</div><b>
//                                                 MỨC ĐỘ MINH CHỨNG ĐẠT ĐƯỢC</b>
//                                         </label><br>
//                                         <div class="row text-center">
//                                           <ul>
//                                             <li>${e.Data.Evaluate}</li>                                        
//                                           </ul>
//                                         </div>
//                                     </div>
//                                     <div class="form-control">
//                                         <label for="productName">
//                                             <div class="numberCircle">05</div><b>
//                                                 MỨC ĐỘ KHÓ KHĂN KHI NỘP MINH CHỨNG</b>
//                                         </label><br>
//                                         <div class="row text-center">
//                                           <ul>
//                                            <li>${e.Data.Difficulty}</li>
//                                           </ul>
//                                         </div>
//                                         <br>
//                                     </div>
//                             </div>
//                             </form>
//                         </div>
//                     </div>
//                       `
//                         })
//                     }
//                 })
//                 createPDFThumbnails();
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
function showModal (_id, name) {
    $(`#multiChoiceModal`).modal('hide');
    $(`#exampleModalOcop`).modal('hide');
    $('#Modaliffo').modal('toggle');
    nameContent = name
    requirement = _id
    document.getElementById('docu').innerHTML = nameContent
    document.getElementById('ImgModal-info').innerHTML = ``
    document.getElementById('DocModal-info').innerHTML = ``
    let obj = {
        _id: _id,
        productsInfo: productsInfo
    }
    $.ajax({
        type: 'POST',
        contenType: "aplication/json",
        data: obj,
        url: "/GetPrr",
        success: function (data) {
            let Img
            let doc
            if (data.length > 0) {
                let pdf = ['.pdf', '.PDF']
                let doc = ['.docx', '.DOCX', '.doc', '.DOC']
                let excel = ['.xls', '.XLS', '.xlsx', 'XLSX']
                let ppt = ['.ppt', '.pptx', '.pps', '.ppsx', '.PPT', '.PPTX', '.PPS', 'PPSX']
                let dot = false
                data.forEach((e) => {
                    if (e.type !== "INFO") {
                        $('#Text-cancel').css({ "display": "none" })
                        $('#body-Info').css({ "display": "" })
                        $('#Product').css({ "display": "none" })
                        if (e.type == "IMG") {
                            $('#imgshow').show()
                            let link = `<img src="${e.data}" class="img-thumbnail" style="height: 121px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..." onclick="clickImg(\'${e.data}\')">`
                            if (hasExtension(e.data, pdf)) {
                                link = `<a target="_blank" href="${e.data}"><img src="img/pdf.jpg" class="img-thumbnail" style="height: 121px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a>`
                            }
                            let textdes = e.descriptionImg ? e.descriptionImg : ''
                            if (textdes.length > 100) {
                                textdes = textdes.slice(0, 100);
                                dot = true
                            }
                            let deleteQuote = `<a href="##"  class="btn btn-sm btn-outline-secondary deleteQuote" role="button" onclick="deleteFile(\'${e._id}\',\'${e.requirementId}\')" style="float: right;">Xóa</a>`
                            document.getElementById('ImgModal-info').innerHTML += `
                                <div class="col-6">          
                                <div class="card mb-4 shadow-sm">
                                    <a href="#">
                                    ${link}
                                    </a>
                                    <div style="margin: 9px 0px;">
                                    ${convertStatusProof(e.status)} ${e.isApprovalDis || e.isApprovalProvi ? '<span class="text-title-Status">( Đã duyệt )</span>' : ''}
                                    </div>
                                    ${e.descriptionImg ? `
                                    <div  class="tootip" id="tootip${e._id}" onmouseleave="tooltip(\'${e._id}\',1)">
                                        <span>
                                        ${e.descriptionImg}
                                        </span>
                                    </div>
                                    <div class="textDes">
                                    ${textdes} ${dot ? `<a href="#" onmouseover="tooltip(\'${e._id}\',0)">...xem</a>` : ''}
                                    </div>`: ''} 
                             
                                    
                                    </div>
                                </div>
                                </div>
                                `


                        } else if (e.type == "LINK") {
                            let textdes = e.descriptionImg ? e.descriptionImg : ''
                            if (textdes.length > 100) {
                                textdes = textdes.slice(0, 20);
                                dot = true
                            }
                            document.getElementById('ImgModal-info').innerHTML += `
                                <div class="col-6">          
                                <div class="card mb-4 shadow-sm">
                                    <a href="${e.data}" target="_blank">
                                        <img src="img/linkicon.jpg" style="object-fit: fit;width: 100%;padding: 11px; height: 121px;">
                                        <div style="margin: 9px 0px;">
                                        ${convertStatusProof(e.status)} ${e.isApprovalDis || e.isApprovalProvi ? '<span class="text-title-Status">( Đã duyệt )</span>' : ''}
                                        </div>
                                        <div class="textDes">${textdes}${dot ? `...` : ''}</div>   
                                    </a>
                          
                                    </div>
                                </div>
                                </div>
                                `
                        } else if (e.type == "DOC") {
                            console.log(e, 998)
                            $('#DocModal-info1').show()
                            let namefile = ''
                            if (e.descriptionImg) {
                                namefile = `<div class="textDes">${e.descriptionImg} </div>`
                            }
                            let statusDoc = `  <div style="margin: 9px 0px;">
                            ${convertStatusProof(e.status)} ${e.isApprovalDis || e.isApprovalProvi ? '<span class="text-title-Status">( Đã duyệt )</span>' : ''}
                          </div>`
                            let doclink = `<a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.data}" >${namefile}</a>`
                            // if (hasExtension(e.data, pdf)) {
                            //     doclink = `<a target="_blank" href="${e.data}" >${namefile}</a>`
                            // }
                            if (hasExtension(e.data, doc)) {
                                doclink = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.data}"><img src="img/word.jpg" style="object-fit: cover;cursor: zoom-in;width: 100%;padding: 11px;border-radius: 17%;height: 121px;">
                  ${statusDoc}
                  ${namefile}</a> `
                            } else if (hasExtension(e.data, excel)) {
                                doclink = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.data}"><img src="img/excel.png" style="object-fit: cover;cursor: zoom-in;width: 100%;padding: 11px;border-radius: 17%;height: 121px;"> 
                  ${statusDoc}
                  ${namefile}</a> `
                            } else if (hasExtension(e.data, pdf)) {
                                doclink = ` <a target="_blank" href="${e.data}"><img src="img/pdf.jpg" style="object-fit: cover;cursor: zoom-in;width: 100%;padding: 11px;border-radius: 17%;height: 121px;">
                  ${statusDoc}
                  ${namefile}</a> `
                            } else if (hasExtension(e.data, ppt)) {
                                doclink = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.data}"><img src="img/ppt.jpg" style="object-fit: cover;cursor: zoom-in;width: 100%;padding: 11px;border-radius: 17%;height: 121px;">
                  ${statusDoc}
                  ${namefile}</a> `
                            }
                            document.getElementById('DocModal-info').innerHTML += `
                            <div class="col-6" id="oveflow" style="overflow: hidden;">
                                <div class="card mb-4 shadow-sm">
                                   
                                    ${doclink}
  
                                </div>  
                            </div>
                            `
                        } else if (e.type == "TEXT") {
                            $('#Text-cancel').css({ "display": "none" })
                            $('#body-Info').css({ "display": "none" })
                            $('#Product').css({ "display": "" })
                        }
                    } else {
                        $('#Text-cancel').css({ "display": "none" })
                        $('#body-Info').css({ "display": "none" })
                        $('#Product').css({ "display": "" })
                        data.forEach((e) => {
                            let marketList = '';
                            let qualityList = '';
                            let customerList = '';
                            let incomeList = '';
                            e.Data.Des.marketRange.forEach(range => {
                                marketList += `<li>${range}</li>`
                            });
                            e.fileInfo[0].Des.qualityTarget.forEach(target => {
                                qualityList += `<li>${target}</li>`
                            });
                            e.Data.Des.customerTarget.forEach(target => {
                                customerList += `<li>${target}</li>`
                            });
                            e.Data.Des.incomeTarget.forEach(target => {
                                incomeList += `<li>${target}</li>`
                            });
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
                                                <input type="text" id="productValue" name="" value="${e.Data.Des.value}"
                                                    class="form-control form-control-line pl-3"
                                                    placeholder="Lý do khiến khách hàng muốn mua sản phẩm">
                                                <b class="mt-3">b. Quy cách đóng gói</b>
                                                <input type="text" id="packingMethod" name="" value="${e.Data.Des.packingMethod}"
                                                    class="form-control form-control-line pl-3"
                                                    placeholder="Ví dụ: đóng túi, chai, lọ, ...">
                                                <b class="mt-3">c. Tên nhãn hiệu sản phẩm/dịch vụ dự kiến</b>
                                                <input type="text" id="brandName" name="" value="${e.Data.Des.brandName}"
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
                                                    <ul>${qualityList}</ul>
                                                </div>
                                            </div>
                                            <div class="form-control">
                                                <b>đ. Mục tiêu thị trường tiêu thụ</b>
                                                <div>
                                                    Phạm vi tiêu thụ
                                                    <div class="row container" id="range-market">
                                                        <ul>${marketList}</ul>
                                                    </div>
                                                </div>
                                                <div>
                                                    Đối tượng khách hàng
                                                    <div class="row container" id="customerTarget">
                                                        <ul>${customerList}</ul>
                                                    </div>
                                                </div>
                                                <div>
                                                    Đối tượng khách hàng có thu nhập
                                                    <div class="row container" id="incomeTarget">
                                                    <ul>${incomeList}</ul>
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
const getSavedProof = (formNumber, productsInfo, role) => {
    $(`#multiChoiceModal`).modal('hide');
    // $(`#form01`).modal('show');
    let idform
    if (role == "0") {
        idform = 'mainContent'
        $('#form01').show()
        $('#mainContent').hide()
        $('#spinner').show()
        $('#infoswal').hide()
        document.getElementById('mainContentcontroll').innerHTML = ``
        document.getElementById('mainContent').innerHTML = ``
    } else {
        idform = 'mainContentcontroll'
        $('#spinner1').show()
        $('#infoswal1').hide()
        $('#formcontrol').modal('show')
        $('#exampleModalOcop').modal('hide');
        $('#mainContentcontroll').hide()
        document.getElementById('mainContent').innerHTML = ``
        document.getElementById('mainContentcontroll').innerHTML = ``
    }

    $.ajax({
        type: `GET`,
        url: `/getSavedProof?form=${formNumber}&productsInfo=${productsInfo}`,
        success: (data) => {
            if (data.success) {
                if (data.data.length > 0) {
                    if (role == "0") {
                        $('#infoswal').hide()
                        $(`#${idform}`).show()
                    } else {
                        $('#spinner1').hide()
                        $('#infoswal1').hide()
                        $(`#${idform}`).show()
                    }
                    $(`#${idform}`).show()
                    getProductInfo(productsInfo)
                    getAccountInfo(formNumber, idform)
                } else {
                    if (role == "0") {
                        $('#infoswal').show()
                        $('#mainContent').hide()
                    } else {
                        $('#spinner1').hide()
                        $('#infoswal1').show()
                        $('#mainContentcontroll').hide()
                    }

                }
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
}

var nextstep = (index, formNumber) => {
    let currentStep = Number(index) - 1
    for (let i = 1; i <= totalSteps; i++) {
        if (i == index) {
            $(`#step${i}form1`).show();
        } else {
            $(`#step${i}form1`).hide();
        }
    }
}

var backstep = (index) => {
    for (let i = 1; i <= totalSteps; i++) {
        if (i == index) {
            $(`#step${i}form1`).show()
        } else {
            $(`#step${i}form1`).hide()
        }
    }
}

const getAccountInfo = (formNumber, idform) => {
    $.ajax({
        type: `GET`,
        url: `/getAccountInfo`,
        success: (data) => {
            if (data.data) {
                accountInfo = data.data;
                getElementTemplates(formNumber, idform);
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
    });
}
// Bắt đầu vẽ các bước
function getElementTemplates (formNumber, idform) {
    $.ajax({
        url: `/classifiedElementTemplateByStep?formNumber=${formNumber}`,
        type: "get",
        success: function (ret) {
            if (ret.success) {
                $('#spinner').hide()
                totalSteps = ret.data.length;
                drawInitial(ret.data, formNumber, idform);
            } else {
                console.warn(ret.error);
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
}

const drawInitial = (data, formNumber, idform) => {
    let Title
    if (formNumber == "01") {
        Title = `PHIẾU ĐĂNG KÝ SẢN PHẨM MỚI`
    } else if (formNumber == "02") {
        Title = `PHIẾU ĐĂNG KÝ SẢN PHẨM ĐÃ CÓ`
    } else if (formNumber == "03") {
        Title = `Phương án sản xuất kinh doanh`
    } else if (formNumber == "04") {
        Title = `MẪU GIỚI THIỆU VỀ TỔ CHỨC THAM GIA CHƯƠNG TRÌNH OCOP`
    }
    for (let i = 1; i <= data.length; i++) {
        if (i == 1) {
            let buttonDiv = `<button class="btn btn-lg btn-block nextBtn" style="background-color: #039252; color: white;" onclick="nextstep(${i + 1},${formNumber})">
                Tiếp tục
            </button>`;
            if (i >= data.length) {
                buttonDiv = `<button class="btn btn-lg btn-block nextBtn"  onclick="closeModalform01()" style="background-color: #039252; color: white;" >
                    Đóng
                </button>`
            }
            $(`#${idform}`).append(`
            <div id="step1form1">
                <div class="row" style="background-color: white;">
                    <div class="col-md-12" style="text-align: center; margin-top: 65px;">
                        <h5 style="font-weight: 500; color: black">Biểu số ${formNumber}</h5>
                        <label style="font-family: 'Quicksand', sans-serif; font-size: 18px; font-weight: bold; font-stretch: normal; font-style: normal;
                                line-height: 1.25; letter-spacing: normal; text-align: center; color: #191935;"> ${Title}</label>
                    </div>
                </div>
                <div class="row mt-2" style="background-color: white;">
                    <div class="col-md-12">
                        <div class="row" id="listform${i}${idform}">
                                
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="text-align: center; margin-top: 30px;margin-bottom: 30px;">
                        ${buttonDiv}
                    </div>
                </div>
            </div>`);
        } else {
            let buttonDiv = `<div class="col-md-6" style="text-align: center; margin-top: 30px;margin-bottom: -15px;">
                <button class="btn btn-lg btn-block nextBtn" style="color: #191935;background-color: #eff0f1;" onclick="backstep(${i - 1})">
                    Quay lại
                </button>
            </div>
            <div class="col-md-6" style="text-align: center; margin-top: 30px;margin-bottom: 30px;">
                <button class="btn btn-lg btn-block nextBtn" style="background-color: #039252; color: white;" onclick="nextstep(${i + 1},${formNumber})">
                    Tiếp tục
                </button>
            </div>`;
            if (i == data.length) {
                buttonDiv = `<div class="col-md-6" style="text-align: center; margin-top: 30px;margin-bottom: -15px;">
                    <button class="btn btn-lg btn-block nextBtn" style="color: #191935;background-color: #eff0f1;" onclick="backstep(${i - 1})">
                        Quay lại
                    </button>
                </div>
                <div class="col-md-6" style="text-align: center; margin-top: 30px;margin-bottom: 30px;">
                    <button class="btn btn-lg btn-block nextBtn" id="closemodal"  onclick="closeModalform01()" style="background-color: #039252; color: white;" >
                        Đóng
                    </button>
                </div>`
            }
            $(`#${idform}`).append(`
            <div id="step${i}form1" style="display: none;">
                <div class="row" style="background-color: white;">
                    <div class="col-md-12" style="text-align: center; margin-top: 65px;">
                        <h5 style="font-weight: 500; color: black">Biểu số ${formNumber}</h5>
                        <label style="font-family: 'Quicksand', sans-serif; font-size: 18px; font-weight: bold; font-stretch: normal; font-style: normal;
                                line-height: 1.25; letter-spacing: normal; text-align: center; color: #191935;">${Title}</label>
                    </div>
                </div>
                <div class="row mt-2" style="background-color: white;">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-12 col-s" id="listform${i}${idform}">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    ${buttonDiv}
                </div>
            </div>`);
        }
    }
    drawForm(data, formNumber, idform);


}

const drawForm = (data, formNumber, idform) => {
    let disableParentId;
    let notRequireId;
    data.forEach(lvlObj => {
        $(`#listform${lvlObj._id}${idform}`)[0].innerHTML = ``;
        lvlObj.data.forEach((element) => {
            if (accountInfo.type == 'Manager') {
                if (accountInfo.level == 2 && element.document == `1. DÀNH CHO CẤP HUYỆN`) {
                    disableParentId = element._id;
                } else if (accountInfo.level == 1 && element.document == `1. DÀNH CHO CẤP HUYỆN`) {
                    disableParentId = element._id;
                }
            } else if (element.document == `A. DÀNH CHO CÁN BỘ QUẢN LÝ CHƯƠNG TRÌNH OCOP`) {
                disableParentId = element._id;
            }
            if (/điền nếu chưa có mẫu sản phẩm/gi.test(element.document)) {
                notRequireId = element._id;
            }
            let html = drawElement(element, element.parentId, formNumber, idform);
            // append
            if (html != '') {
                if (element.level == 1) {
                    $(`#listform${lvlObj._id}${idform}`).append(html);
                } else {
                    $(`#${element.parentId} > .row`).append(html);
                }
                if (element.dataAvailable) {
                    if (element.type == 'text' || element.type == 'email' || element.type == 'tel' || element.type == 'date' || element.type == 'number' || element.type == 'numbertext' || element.type == 'textarea') {
                        $(`#${element._id}`).attr('onblur', `autosavedataAvailable(\'${element._id}\',\'${element.dataAvailable[0].tableName}\',\'${element.dataAvailable[0].data}\')`)
                    }
                    $.ajax({
                        url: "getdataAvailable?nametable=" + element.dataAvailable[0].tableName + "&productInfo=" + productsInfo,
                        data: "GET",
                        success: function (ret) {
                            if (ret) {
                                $(`#${element._id}`).val(`${ret[element.dataAvailable[0].data] ? ret[element.dataAvailable[0].data] : ''}`)
                            }
                        }
                    })
                }
            }

        });
    });
    getOtherElementValues(formNumber);
    $(`#${disableParentId} input`).attr('disabled', true);
    $(`#${notRequireId} input`).attr('required', false);
    $(`input, textarea`).on(`input`, (event) => {
        document.getElementById(event.target.id).style.border = '0px';
    });
    $("input[data-type='currency']").on({
        keyup: function () {
            formatCurrency($(this));
        },
        blur: function () {
            formatCurrency($(this), "blur");
        }
    });
}

const drawElement = (element, parentId, formNumber, idform) => {
    let html = '';
    let labelHtml = `<span style="display: none"></span>`;

    if (element.document) {
        if (element.classLable == 'nameTitile') {
            labelHtml = `<div style="display: flex"><div class="nameTitile" style="display:flex; margin-top: 4px;"></div><span style="margin-left: 8px;display: flex;"><h5>${element.document}</h5></span></div>`
        } else {
            labelHtml = `<h5 class="${element.classLable ? element.classLable : ''}">${element.document}</h5>`
        }
    }
    let css;
    if (labelHtml == `<span style="display: none"></span>`) {
        css = 'top: 15px'
    } else {
        // css = 'top: 49px;'
        css = 'top: none;'
    }
    let requiredValue = 'required';
    if (/nếu có/gi.test(element.document) || /nếu biết/gi.test(element.document)) {
        requiredValue = '';
    }
    if (element.type == 'text' || element.type == 'email' || element.type == 'tel' || element.type == 'date') {
        let disabled = false;
        let elementType = element.type;
        if (/fax/i.test(element.document)) {
            elementType = 'number'
        }
        if (/website/i.test(element.document)) {
            elementType = 'website'
        }
        if ($(`#${parentId} h5`)[0] && /website/i.test($(`#${parentId} h5`)[0].innerHTML.trim())) {
            elementType = 'website'
        }
        html = `<div class="${element.className ? element.className : 'col-12'} mt-2 mb-2">
                ${labelHtml}
                <input id="${element._id}" type="${elementType}" 
                 class="form-control" disabled placeholder="${element.placehoder ? element.placehoder : ''}" ${disabled ? 'disabled' : ''} ${requiredValue}>
                <div class="spinner-border spinner-border-sm text-success" role="status"
                id="${element._id}Spinner" style="${css};display: none; ">
                <span class="sr-only">Loading...</span>
                </div>
                <i class="fa fa-check-circle text-success" id="${element._id}Icon"
                    style="${css};display: none;"></i>
                <i class="fa fa-minus text-danger" id="${element._id}Fail"
                    style="${css};display: none;"></i>
            </div>
        `;
    } else if (element.type == 'number' || element.type == 'numbertext') {
        let preFill = '';
        let disabled = false;
        if (element.placehoder == 'Mã tỉnh' || element.placehoder == 'Mã huyện' || element.placehoder == 'Năm') {
            disabled = true;
            if (element.placehoder == 'Năm') {
                preFill = new Date().getFullYear();
            } else if (element.placehoder == 'Mã tỉnh') {
                preFill = productData.addressInfo.provinceId;
            } else if (element.placehoder == 'Mã huyện') {
                preFill = productData.addressInfo.districtId;
            }
        }
        html = `
        <div class="${element.className ? element.className : 'col-12'} mt-2 mb-2">
            ${labelHtml}
            <input disabled id="${element._id}" type="text" pattern="^$d{1,3}(,d{3})*(.d+)?$" data-type="currency" 
                class="form-control" placeholder="${element.placehoder ? element.placehoder : ''}"
                ${disabled ? 'disabled' : ''} value="${preFill}" ${requiredValue}>
            <div class="spinner-border spinner-border-sm text-success" role="status"
                id="${element._id}Spinner" style="${css};display: none; ">
                <span class="sr-only">Loading...</span>
            </div>
            <i class="fa fa-check-circle text-success" id="${element._id}Icon"
                style="${css};display: none;"></i>
            <i class="fa fa-minus text-danger" id="${element._id}Fail"
                style="${css};display: none;"></i>        
        </div>`;
    } else if (element.type == 'textarea') {
        html = `
        <div class="${element.className ? element.className : 'col-12'} mt-2 mb-2">
            ${labelHtml}
            <${element.type} disabled id="${element._id}" class="form-control" rows="5" placeholder="${element.placehoder ? element.placehoder : ''}" ${requiredValue}></${element.type}>
            <div class="spinner-border spinner-border-sm text-success" role="status"
            id="${element._id}Spinner" style="${css};display: none; ">
            <span class="sr-only">Loading...</span>
            </div>
            <i class="fa fa-check-circle text-success" id="${element._id}Icon"
                style="${css};display: none;"></i>
            <i class="fa fa-minus text-danger" id="${element._id}Fail"
                style="${css};display: none;"></i>
        </div>`
    } else if (element.type == "file") {
        if (element.className == 'dropzone') {
            let ImgsArray = [];
            let appendHtml = `
                <div class="col-12 mt-2" id="${element._id}">
                    ${labelHtml}
                    <form method="post" enctype="multipart/form-data">
                        <div class="dropzone dropzone-previews" id="dropzone${element._id}${idform}">
                        </div>
                    </form>
                    <div id="imgdropzone${element._id}" class="row dropzoneimg"> 
                    </div>
                    <div class="spinner-border spinner-border-sm text-success" role="status"
                    id="${element._id}Spinner" style="${css};display: none; ">
                    <span class="sr-only">Loading...</span>
                    </div>
                    <i class="fa fa-check-circle text-success" id="${element._id}Icon"
                        style="${css};display: none;"></i>
                    <i class="fa fa-minus text-danger" id="${element._id}Fail"
                        style="${css};display: none;"></i>
                </div>
            `
            if (element.level == 1) {
                $(`#listform${lvlObj._id}${idform}`).append(appendHtml);
            } else {
                $(`#${element.parentId} > .row`).append(appendHtml)
            }
            let images = [];
            // Xử lý up nhiều ảnh
            $(`div#dropzone${element._id}${idform}`).dropzone({
                url: '/#',
                uploadMultiple: true,
                autoDiscover: true,
                autoProcessQueue: false,
                acceptedFiles: "image/*",
                // previewsContainer: '.dropzone-previews',
                parallelUploads: 100,
                dictResponseError: false,
                dictRemoveFile: '',
                addRemoveLinks: true,
                dictDefaultMessage: '<span style="font-weight: 600; font-family: sans-serif; color: #039252"><i class="fas fa-cloud-upload-alt fa-5x"></i><br> Chọn file</span><i class="fa fa-folders"></i>',
                dictCancelUpload: 'Xóa',
                // accept: function (file, done) {
                //     let progressElement = file.previewElement.querySelector("[data-dz-uploadprogress]");
                //     for (let i = 0; i < 60; i++) {
                //         setTimeout(() => {
                //             progressElement.style.width = i + "%";
                //         }, 1);
                //     }
                //     let contentType = file.type;
                //     let filename = file.name
                //     $.get('/generatepresignedurl?fileName=' + filename + '&type=' + contentType, function (signedUrl) {
                //         for (let i = 60; i < 90; i++) {
                //             setTimeout(() => {
                //                 progressElement.style.width = i + "%";
                //             }, 1);
                //         }
                //         $.ajax({
                //             url: signedUrl,
                //             type: 'PUT',
                //             dataType: 'html',
                //             processData: false,
                //             headers: {
                //                 'Content-Type': contentType
                //             },
                //             crossDomain: true,
                //             data: file
                //         }).done(function (data, textStatus, error) {
                //             if (textStatus == 'success') {
                //                 progressElement.style.width = 100 + "%";
                //                 $('.dz-progress').css("opacity", "0")
                //                 $(".dz-success-mark svg").css("display", "");
                //                 $(".dz-success-mark").css("opacity", "1");
                //                 $(".dz-error-mark").css("display", "none");
                //                 setTimeout(() => {
                //                     $(".dz-success-mark").css("opacity", "0");
                //                 }, 1000);
                //                 let dataName = `https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/` + filename;
                //                 ImgsArray.push(dataName);
                //                 if (!uploadedDropzone.find(dropzoneId => dropzoneId == element._id)) {
                //                     uploadedDropzone.push(element._id);
                //                 }
                //                 let uploadObj = {
                //                     productsInfoId: productsInfo,
                //                     templateId: element._id,
                //                     form: formNumber,
                //                     isMore: false,
                //                     value: JSON.stringify(ImgsArray),
                //                     type: 'file',
                //                 }
                //                 pushDataToServer(element._id, uploadObj);
                //             }
                //         }).fail(function (jqXHR, textStatus, errorThrown) {
                //             $('.dz-progress').css("opacity", "0")
                //             $(".dz-error-mark svg").css("opacity", "1");
                //             $(".dz-success-mark svg").css("opacity", "0");
                //         });
                //     });
                // },
                error: function (file, message) {
                    $(file.previewElement).addClass("dz-error").find('.dz-error-message').text(message).css({
                        "margin-top": "20px"
                    }, {
                        "font-weight": " 600"
                    });
                },
                // removedfile: function (file) {
                //     if (file.name && file.size == 12345) {
                //         ImgsArray.splice(ImgsArray.indexOf(file.name), 1);
                //         file.previewElement.remove();
                //     } else {
                //         this.files.splice(this.files.indexOf(file), 1);
                //         file.previewElement.remove();
                //     }
                //     let fileName = "https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/" + file.name
                //     for (let i = 0; i < ImgsArray.length; i++) {
                //         if (ImgsArray[i] == fileName) {
                //             ImgsArray.splice(i, 1);
                //         }
                //     }
                //     let uploadObj = {
                //         productsInfoId: productsInfo,
                //         templateId: element._id,
                //         form: formNumber,
                //         isMore: false,
                //         value: JSON.stringify(ImgsArray),
                //         type: 'file',
                //     }
                //     if (ImgsArray.length == 0) {
                //         uploadedDropzone = uploadedDropzone.filter(dropzoneId => dropzoneId != element._id);
                //     }
                //     pushDataToServer(element._id, uploadObj);
                //     return ImgsArray
                // },
                init: () => {
                    // Load những ảnh đã có sẵn
                    $.ajax({
                        type: `GET`,
                        url: `/getImgsElements?formNumber=${formNumber}&templateId=${element._id}&productsInfoId=${productId}`,
                        success: (data) => {
                            if (data.success) {
                                if (data.data.length > 0) {
                                    images = JSON.parse(data.data[0].value);
                                }
                                images.forEach(image => {
                                    // let mockFile = {
                                    //     name: `${image.split(`https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/`)[1]}`,
                                    //     size: 12345,
                                    //     type: 'image/jpeg'
                                    // };
                                    // Dropzone.forElement(`div#dropzone${element._id}`).emit("addedfile", mockFile);
                                    // Dropzone.forElement(`div#dropzone${element._id}`).emit("success", mockFile);
                                    // Dropzone.forElement(`div#dropzone${element._id}`).emit("thumbnail", mockFile, `${image}`);
                                    // Dropzone.forElement(`div#dropzone${element._id}`).emit("complete", mockFile);
                                    // Dropzone.forElement(`div#dropzone${element._id}`).files.push(mockFile);
                                    ImgsArray.push(image);
                                    drawimg(`${element._id}`, `${element._id}`, image, ImgsArray)
                                })
                                if (ImgsArray.length > 0) {
                                    uploadedDropzone.push(element._id);
                                }
                            }
                        },
                        error: (jqXHR, textStatus, errorThrown) => {
                            console.warn(errorThrown);
                        }
                    });
                },
            });
        }
    } else if (element.type == 'checkbox-group') {
        let optionsHtml = ``
        element.values.forEach(item => {
            let subOptions = ``;
            if (item.value.split('_').length > 1) {
                let optionsList = item.value.split('_');
                if (optionsList[1] == 'checkbox') {
                    for (let i = 2; i < optionsList.length; i++) {
                        subOptions += `<div class="col-lg-3 col-md-3 col-6">
                                <div style="display: flex;">
                                    <input type="checkbox" class="radio" name="${element._id}_${optionsList[0]}" id="${element._id}_${optionsList[0]}_${i - 2}"
                                        style="margin-top: 4px;
                                        margin-right: 6px;" value="${optionsList[i]}">
                                    <label for="${element._id}_${optionsList[0]}_${i - 2}"> ${optionsList[i]}</label>
                                </div>
                            </div>`
                    }
                } else if (optionsList[1] == 'input') {
                    let subOptTitle = `<span style="display: none"></span>`
                    if (optionsList[3]) {
                        subOptTitle = `<h5 class="smallLabel">${optionsList[3]}</h5>`
                    }
                    subOptions += `
                    <div class="col-12">
                        ${subOptTitle}
                        <input id="${element._id}_${optionsList[0]}_${0}" type="text" class="form-control" placeholder="${optionsList[2]}">
                    </div>`
                }
            }
            let optionName = `name="${element._id}"`;
            if (element.classParent == 'multiChoice') {
                optionName = ``
            }
            optionsHtml += `<div class="${element.className == 'halfSplitOption' ? 'col-6' : ''}">
                <div style="display: flex;">
                    <input type="checkbox" class="radio firstCheck" ${optionName} id="${element._id}_${item.value}"
                        style="margin-top: 4px;
                        margin-right: 6px;" value="${item.value}">
                    <label for="${element._id}_${item.value}"> ${item.label}</label><br>
                </div>
                <div class="row subOptions${element._id}" style='display: none' id='subOptions${element._id}_${item.value}'>
                    ${subOptions}
                </div>
            </div>`
        })
        let appendHtml = `
            <div class="${element.className != 'halfSplitOption' ? element.className : ''} col-12 mt-2">
                ${labelHtml}
                <div id="${element._id}" class="${element.className == 'halfSplitOption' ? 'row' : ''}">
                    ${optionsHtml}
                </div>
                <div class="spinner-border spinner-border-sm text-success" role="status"
                    id="${element._id}Spinner" style="${css};display: none; ">
                    <span class="sr-only">Loading...</span>
                </div>
                <i class="fa fa-check-circle text-success" id="${element._id}Icon"
                    style="${css};display: none;"></i>
                <i class="fa fa-minus text-danger" id="${element._id}Fail"
                    style="${css};display: none;"></i>
            </div>`
        if (element.level == 1) {
            $(`#listform${lvlObj._id}${idform}`).append(appendHtml);
        } else {
            $(`#${element.parentId} > .row`).append(appendHtml);
        }

    } else if (element.type == 'button') {
        html = ``
    } else if (element.type == "select") {
        $(`#${element.parentId} > .row`).append(`
            <div class="${element.classParent ? element.classParent : element.className}">
                ${labelHtml}
                <select disabled id="${element._id}" onchange="autosave('${element._id}','${element.type}','${element.parentId}')"  class="form-control">
                </select>

                <div class="spinner-border spinner-border-sm text-success" role="status"
                id="${element._id}Spinner" style="${css};display: none; ">
                <span class="sr-only">Loading...</span>
                </div>
                <i class="fa fa-check-circle text-success" id="${element._id}Icon"
                    style="${css};display: none;"></i>
                <i class="fa fa-minus text-danger" id="${element._id}Fail"
                    style="${css};display: none;"></i>
            </div>`);
        if (element.database) {
            $.ajax({
                url: "getProductType?product_Set=true",
                type: "GET",
                success: function (ret) {
                    if (ret.success) {
                        let html = `<option value="0">Chọn</option>`
                        $(`#${element._id}`).append(html)
                        ret.data.forEach((data) => {
                            let htmls = `<option value="${data._id}">${data.name}</option>`
                            $(`#${element._id}`).append(htmls)
                        })
                    }
                }
            })
        }
    } else {
        let titleHtml = `<${element.type} class="${element.className ? element.className : ''} ">
            ${element.document}
        </${element.type}>`;
        if (element.className == 'nameTitile') {
            titleHtml = `<div style="display: flex">
                    <div class="nameTitile" style="display:flex; margin-top: 4px;"></div><span style="margin-left: 8px;display: flex;"><${element.type}>${element.document}<${element.type}></span>
                </div>`
        }
        html = `
        <div id="${element._id}" class="${element.classParent ? element.classParent : 'col-12'} mt-2">
            ${titleHtml}
            <div class='row'>
            
            </div>
        </div>`
    }
    return html
}

const getProductInfo = (id) => {
    $.ajax({
        type: `GET`,
        url: `/getProductDetailWithEntity?id=${id}`,
        success: (data) => {
            if (data.success) {
                productData = data.data[0];
            } else {
                Swal.fire({
                    type: 'error',
                    title: '',
                    text: 'Đã có lỗi xảy ra, vui lòng thử lại sau.',
                });
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
}

// format number
const formatNumber = (n) => {
    return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}
const formatCurrency = (input) => {
    $(`#${input[0].id}`).val(formatNumber(input.val()));
}
const getOtherElementValues = (formNumber) => {
    $.ajax({
        url: `/getotherelementvalues?formNumber=${formNumber}&productId=${productId}`,
        type: "GET",
        success: (ret) => {
            if (ret.length > 0) {
                ret.forEach((element) => {
                    if (element.isMore) {
                        if (formNumber == "01") {
                            let parentIds = element.parentId.split('-')
                            $(`#${parentIds[0]} > .row`).append(`
                                <div id="${element.parentId}" class="col-12" style="margin: 10px 0px;">
                                    <h5 class="Lablelever2">${element.lable}</h5>
                                    <div class="row">
    
                                    </div>
                                </div>
                            `)
                            $.ajax({
                                url: "/getTemplateByparentId?parentId=" + parentIds[0],
                                type: "GET",
                                success: function (ret) {
                                    if (ret.data.length > 0) {
                                        ret.data.forEach((item) => {
                                            if (item.type == 'text' || item.type == 'email' || item.type == 'tel' || item.type == 'date') {
                                                $(`#${element.parentId} > .row`).append(`
                                                    <div class="${item.classParent ? item.className : 'col-12'}">
                                                        <input id="${item._id}-${element.time}"  class="form-control">
                                                        <div class="spinner-border spinner-border-sm text-success" role="status"
                                                            id="${item._id}-${element.time}Spinner" style="top:15px;display: none; ">
                                                            <span class="sr-only">Loading...</span>
                                                        </div>
                                                        <i class="fa fa-check-circle text-success" id="${item._id}-${element.time}Icon"
                                                            style="top:15px;display: none;"></i>
                                                        <i class="fa fa-minus text-danger" id="${item._id}-${element.time}Fail"
                                                            style="top:15px;display: none;"></i>
                                                    </div>
                                                `);
                                            } else if (item.type == 'textarea') {
                                                $(`#${element.parentId} > .row`).append(`
                                                    <div class="${item.className ? item.className : 'col-12'}">
                                                        <textarea id="${item._id}-${element.time}"   class="form-control" placeholder="${item.placehoder ? item.placehoder : ''}" rows="5" col="5"></textarea>
                                                        <div class="spinner-border spinner-border-sm text-success" role="status"
                                                            id="${item._id}-${element.time}Spinner" style="top:15px;display: none;">
                                                            <span class="sr-only">Loading...</span>
                                                        </div>
                                                        <i class="fa fa-check-circle text-success" id="${item._id}-${element.time}Icon"
                                                            style="top:15px;display: none;"></i>
                                                        <i class="fa fa-minus text-danger" id="${item._id}-${element.time}Fail"
                                                            style="top:15px;display: none;"></i>
                                                    </div>
                                                `);
                                            }
                                        })
                                    }
                                    element.value.forEach((data) => {
                                        if (data.type == "select") {
                                            $(`#${data.templateId} option[value=${data.data}]`).attr('selected', 'selected');
                                        } else if (element.type == "numbertext") {
                                            document.getElementById(data.templateId).value = formatNumber(data.data)
                                        } else {
                                            document.getElementById(data.templateId).value = data.data
                                        }
                                    })
                                    $("input[data-type='currency']").on({
                                        keyup: function () {
                                            formatCurrency($(this));
                                        },
                                        blur: function () {
                                            formatCurrency($(this), "blur");
                                        }
                                    });
                                }
                            })
                        } else if (formNumber == "03") {
                            let e = element
                            let parentIds = e.parentId.split('-')
                            $(`#${parentIds[0]} > .row`).append(`
                            <div id="${e.parentId}" class="col-12" style="margin: 10px 0px;">
                                <h5 class="Lablelever2">${e.lable}</h5>
                                <div class="row">
                                </div>
                            </div>
                        `)
                            $.ajax({
                                url: "getTemplateByparentId?parentId=" + parentIds[0],
                                type: "GET",
                                success: function (ret) {
                                    if (ret.data.length > 0) {
                                        ret.data.forEach((item) => {
                                            let html = '';
                                            let labelHtml = `<span style="display: none"></span>`;
                                            let css
                                            if (item.type == 'text' || item.type == 'email' || item.type == 'tel' || item.type == 'date') {
                                                $(`#${e.parentId} > .row`).append(`
                                                    <div class="${item.classParent ? item.classParent : item.className}">     
                                                        <input id="${item._id}-${e.time}" onblur="autosave('${item._id}-${e.time}','${item.type}','${e.parentId}','${true}','${item.classParent ? item.classParent : item.className}')" type="${item.type}" class="form-control" placeholder="${item.placehoder ? item.placehoder : ''}">
                                                        <div class="spinner-border spinner-border-sm text-success" role="status"
                                                        id="${item._id}-${e.time}Spinner" style="top:15px;display: none; ">
                                                        <span class="sr-only">Loading...</span>
                                                        </div>
                                                        <i class="fa fa-check-circle text-success" id="${item._id}-${e.time}Icon"
                                                            style="top:15px;display: none;"></i>
                                                        <i class="fa fa-minus text-danger" id="${item._id}-${e.time}Fail"
                                                            style="top:15px;display: none;"></i>
                                                    </div>
                                                `);
                                            } else if (item.type == 'number') {
                                                $(`#${e.parentId} > .row`).append(`
                                                    <div class="${item.classParent ? item.classParent : item.className}">
                                                        <input id="${item._id}-${e.time}" onblur="autosave('${item._id}-${e.time}','numbertext','${e.parentId}','${true}','${item.classParent ? item.classParent : item.className}')" type="text" pattern="^$d{1,3}(,d{3})*(.d+)?$" data-type="currency" class="form-control" placeholder="${item.placehoder ? item.placehoder : ''}">
                                                        <div class="spinner-border spinner-border-sm text-success" role="status"
                                                        id="${item._id}-${e.time}Spinner" style="top:15px;display: none; ">
                                                        <span class="sr-only">Loading...</span>
                                                        </div>
                                                        <i class="fa fa-check-circle text-success" id="${item._id}-${e.time}Icon"
                                                            style="top:15px;display: none;"></i>
                                                        <i class="fa fa-minus text-danger" id="${item._id}-${e.time}Fail"
                                                            style="top:15px;display: none;"></i>
                                                    </div>
                                                `);
                                            } else if (item.type == 'textarea') {
                                                $(`#${e.parentId} > .row`).append(`
                                                    <div class="${item.classParent ? item.classParent : item.className}">
                                                        
                                                        <textarea id="${item._id}-${e.time}" onblur="autosave('${item._id}-${e.time}','${item.type}','${e.parentId}','${true}','${item.classParent ? item.classParent : item.className}')"  class="form-control" placeholder="${item.placehoder ? item.placehoder : ''}" rows="5" col="5"></textarea>
                            
                                                        <div class="spinner-border spinner-border-sm text-success" role="status"
                                                        id="${item._id}-${e.time}Spinner" style="top:15px;display: none; ">
                                                        <span class="sr-only">Loading...</span>
                                                        </div>
                                                        <i class="fa fa-check-circle text-success" id="${item._id}-${e.time}Icon"
                                                            style="top:15px;display: none;"></i>
                                                        <i class="fa fa-minus text-danger" id="${item._id}-${e.time}Fail"
                                                            style="top:15px;display: none;"></i>
                                                    </div>
                                                `);
                                            }
                                            else if (item.type == "select") {
                                                $(`#${e.parentId} > .row`).append(`
                                                    <div class="${item.classParent ? item.classParent : item.className}">
                                                        <select id="${item._id}-${e.time}" onchange="autosave('${item._id}-${e.time}','${item.type}','${e.parentId}','${true}','${item.classParent ? item.classParent : item.className}')"  class="form-control">
                                                            <option value="0">Chọn</option>
                                                            <option value="1">NGÀNH VÀI, MAY MẶC</option>
                                                            <option value="2">NÔNG NGHIỆP, LÂM NGHIỆP VÀ THUỶ
                                                            SẢN
                                                            </option>
                                                        </select>
                            
                                                        <div class="spinner-border spinner-border-sm text-success" role="status"
                                                        id="${item._id}-${e.time}Spinner" style="top:15px;display: none; ">
                                                        <span class="sr-only">Loading...</span>
                                                        </div>
                                                        <i class="fa fa-check-circle text-success" id="${item._id}-${e.time}Icon"
                                                            style="top:15px;display: none;"></i>
                                                        <i class="fa fa-minus text-danger" id="${item._id}-${e.time}Fail"
                                                            style="top:15px;display: none;"></i>
                                                    </div>`);
                                            }
                                        })
                                    }
                                    e.value.forEach((data) => {
                                        if (data.type == "select") {
                                            $(`#${data.templateId} option[value=${data.data}]`).attr('selected', 'selected');
                                        } else if (e.type == "numbertext") {
                                            document.getElementById(data.templateId).value = formatNumber(data.data)
                                        } else {
                                            document.getElementById(data.templateId).value = data.data
                                        }
                                    })
                                }
                            })
                        }

                    } else {
                        if (element.type == "select") {
                            $(`#${element.templateId} option[value=${element.value}]`).attr('selected', 'selected');
                        } else if (element.type == "numbertext" || element.type == "number") {
                            document.getElementById(element.templateId).value = formatNumber(element.value)
                        } else if (element.type == "checkbox-group") {
                            let values = JSON.parse(element.value);
                            $(`#${element.templateId} input`).each(function (index) {
                                let components = $(this).val().split('_');
                                if (document.getElementById(`${element.templateId}_${components[0]}`) && document.getElementById(`${element.templateId}_${components[0]}`).name == '') {
                                    values.forEach(val => {
                                        if (val == components[0]) {
                                            // console.log(`${element.templateId}_${Number(val)}`)
                                            // console.log(`components[0]: ${components[0]}`, `val: ${val}`)
                                            $(`#${element.templateId} .firstCheck`)[Number(val)].click();
                                        }
                                    })
                                } else if (!isNaN(components[0]) && values[0] == components[0]) {
                                    $(`#${element.templateId} .firstCheck`)[Number(values[0])].click();
                                    if (element.value[1]) {
                                        if (isNaN(values[1])) {
                                            $(`#${element.templateId}_${values[0]}_0`).val(values[1]);
                                        } else {
                                            $(`#${element.templateId}_${values[0]}_${values[1]}`).click();
                                        }
                                    }
                                }
                            });
                        } else {
                            document.getElementById(element.templateId).value = element.value
                        }
                    }
                    let funcTooltipLoad = () => {
                        $('#mainContent input').prop("disabled", true);
                        let inputText = $('#mainContent input')
                        for (let index = 0; index < inputText.length; index++) {
                            if ($(inputText[index]).attr('type') == 'checkbox') continue
                            var element = $($(inputText[index]).parent());
                            element.attr('data-toggle', 'tooltip')
                            element.attr('data-placement', 'bottom')
                            element.attr('title', $(inputText[index]).val())
                        }

                        $('[data-toggle="tooltip"]').tooltip();
                    }
                    setTimeout(funcTooltipLoad, 200)
                    setTimeout(funcTooltipLoad, 500)
                    setTimeout(funcTooltipLoad, 1000)
                    setTimeout(funcTooltipLoad, 1500)
                    setTimeout(funcTooltipLoad, 2000)
                    setTimeout(funcTooltipLoad, 2500)
                    setTimeout(funcTooltipLoad, 3000)
                })
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
}
function closeModalform01 () {
    $('#form01').hide();
}
function closeModalform () {
    $('#formcontrol').modal('toggle');
}
// function clickImg(src) {
//     var modal;
//     function removeModal() { modal.remove(); $('body').off('keyup.modal-close'); }
//     modal = $('<div>').css({
//         background: `RGBA(0,0,0,.5) url('${src}') no-repeat center`,
//         backgroundSize: 'contain',
//         width: '100%', height: '100%',
//         position: 'fixed',
//         zIndex: '10000',
//         top: '0', left: '0',
//         cursor: 'zoom-out'
//     }).click(function () {
//         removeModal();
//     }).appendTo('body');
//     //handling ESC
//     $('body').on('keyup.modal-close', function (e) {
//         if (e.key === 'Escape') { removeModal(); }
//     });
// }
// function hasExtension(fileName, exts) {
//     return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
// }
var actionButton = document.getElementById("actionBtn");
var body = document.getElementsByTagName("body")[0];

function toggleActionButton () {
    if (body.classList.contains('actionsBoxOpen')) {
        body.classList.remove('actionsBoxOpen');
    } else {
        body.classList.add('actionsBoxOpen');
    }
}

actionButton.addEventListener('click', toggleActionButton);
actionButton.addEventListener('click', toggleActionButton);
actionButton.addEventListener('click', toggleActionButton);
/// namqv xử lý autoSave lưu dữ liệu 15 giây 1 lần nếu có sự thay đổi
function autoSave () {
    if (currentEvaluateStatus == 'PROCESSING' && isEvaluateChange && isNoSave) {
        isNoSave = false;
        saveEvaluate("PROCESSING", false);
    }
    /// Autosave cho lần tích đầu tiên của lần chấm đầu tiên
    if (currentEvaluateStatus == '' && isEvaluateChange && firstTimeVisit && _firstEvaluation && isNoSave) {
        isNoSave = false;
        saveEvaluate("PROCESSING", false);
    }


}
/// End
function loadListNotAchievedRank () {
    $.ajax({
        url: `/getListNotAchievedRank?subGroups=${_objProductSet[0].code}`,
        type: "GET",
        success: function (ret) {
            _objListNotAchievedRank = ret;
        }
    })
};
function loadListGuidequestions () {
    $.ajax({
        url: `/getListGuideQuestions`,
        type: "GET",
        success: function (ret) {
            _objListGuidequestions = ret;
        }
    })
};

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

// tải ảnh comment
function FileListItem (a) {
    a = [].slice.call(Array.isArray(a) ? a : arguments)
    for (var c, b = c = a.length, d = !0; b-- && d;) d = a[b] instanceof File
    if (!d) throw new TypeError("expected argument to FileList is File or array of File objects")
    for (b = (new ClipboardEvent("")).clipboardData || new DataTransfer; c--;) b.items.add(a[c])
    return b.files
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
const openCommnent = (index, id) => {
    indexNote = index
    idIndexNote = id
    $.ajax({
        url: "getreviewernotes?idIndexNote=" + id + "&productId=" + productInfoId,
        type: "GET",
        success: (ret) => {
            if (ret.length > 0) {
                $('#listNote').animate({ scrollTop: 9999 }, 'slow');
                document.getElementById('listNote').innerHTML = ''
                appendNote(ret)
            } else {
                document.getElementById('listNote').innerHTML = 'Bạn chưa có ghi chú nào cho tiêu chí!'
            }
        }
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
    })
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
const delteImgEdit = (nameImg, id, _id) => {
    $(`#${id}`).remove()
    let obj = {
        _id: _id,
        nameImg: nameImg
    }
    if (arrEdit.length > 0) {
        for (let i = 0; i < arrEdit.length; i++) {
            if (arrEdit[i] == nameImg) {
                arrEdit.splice(i, 1)
            }
        }
    }
    $.ajax({
        url: "updateNote",
        type: "POST",
        data: obj,
        success: (ret) => {
            console.log(ret)
        }
    })
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
const sendcommnet = () => {
    let obj = {
        productId: productInfoId,
        index: indexNote,
        idIndex: idIndexNote
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
        url: "savereviewerNotes",
        type: "POST",
        data: obj,
        success: function (ret) {
            uploadImgCommnet = []
            document.getElementById('img_product').innerHTML = ``
            textNode.value = ''
            openCommnent(indexNote, idIndexNote)
            // loadtimetype()
            if (document.getElementById(`infoNote${indexNote}`)) {
                document.getElementById(`infoNote${indexNote}`).innerHTML = Number(document.getElementById(`infoNote${indexNote}`).innerHTML) + 1
                document.getElementById(`infoNote${indexNote}`).style.display = ''
                $(`#infoNote${indexNote}`).show()
            }
        }, error: function (err) {
            console.log(err)
        }
    })
}
const delteImg = (nameImg, id) => {
    for (let i = 0; i < uploadImgCommnet.length; i++) {
        if (uploadImgCommnet[i] == nameImg) {
            uploadImgCommnet.splice(i, 1)
        }
    }
    $(`#${id}`).remove()
}
function showHelp (msg) {

    let obj = _objListGuidequestions.find(o => o.question.trim() === msg.trim());
    let table = `<div class="table-responsive"><table class="table table-bordered" style="text-align: left"> 
    <thead>
        <tr>
            <th scope="col" style="width:40%">Tiêu chí</th>
            <th scope="col">Hướng dẫn</th>
        </tr>
    </thead>
    <tbody>`;
    if (obj) {
        obj.content.forEach((objContent) => {
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
    <small class="text-muted">Bản quyền thuộc về Tiến sỹ Ngô Thị Thu Trang</small><br><small class="text-muted">Trường Đại học Khoa học Xã hội & Nhân văn - Đại học Quốc gia TP. Hồ Chí Minh</small> </div>
    </a>`
    Swal.fire({
        title: 'Hướng dẫn đánh giá minh chứng',
        html: table,
        footer: footer,
        showCloseButton: true,
    });

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
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="img/word.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    } else if (hasExtension(srcImg, excel)) {
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="img/excel.png"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    } else if (hasExtension(srcImg, pdf)) {
        tepplate = ` <a target="_blank" href="${srcImg}"><img src="img/pdf.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    } else if (hasExtension(srcImg, ppt)) {
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="img/ppt.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    }
    return tepplate
}

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
const showTooltip = (indexQuote)=>{
    document.getElementById(`tooltip-${indexQuote}`).style.display = ''
}
const outTooltip  = (indexQuote)=>{
    document.getElementById(`tooltip-${indexQuote}`).style.display = 'none'
}