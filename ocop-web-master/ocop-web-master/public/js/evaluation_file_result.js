function getParam(paramName) {
    var url_string = window.location.href;
    var url = new URL(url_string);
    return url.searchParams.get(paramName);
}

var member = getParam('member');
var fileId = getParam('fileId');
var levelquery = getParam('level')
var role = getParam('role')
var productId = getParam('product_id');
var councilId = getParam('council_id');
let sectionsArray = [];
var averagePoint = 0;
let totalHistoryPoint = 0;
let historyAveragePoint = 0;
let highestPoint = 0;
let lowestPoint = 0;
let hasLargeDistance = false; //biến dùng để xác định có chênh lệch điểm
let evaluateCompleted = false;
let isCompleted = false;
let level;
let tenPointsDistance = false;
let accountInfo;
let statusCheck = false;
let checklv = false;
let isConfirm = true;
let pairs = [];
let isFullMemberConfirm = false;
let isHaveCouncillUp = false;
let council;
let members;
let product;
$(document).ready(function () {
    getUser()
    // checkcouncilLevelUp();
    // if (role) {
    //     getDetailFileEvaluationResults('helpteam')
    // } else {
    //     getDetailFileEvaluationResults('Examiner')
    // }
});
const linkview = () => {
    if (role) {
        window.location.href = "/notebyassessor?productInfo=" + fileId + "&role=helpteam"
    } else {
        window.location.href = "/notebyassessor?productInfo=" + fileId
    }

}
const checkcouncilLevelUp=()=>{
    $.ajax({
        type: `GET`,
        url: `/checkcouncilLevelUp?id=${fileId}`,
        success: (data) => {
            if(data.length > 0 ){
                // $("#rankBtn").hide()
                isHaveCouncillUp = true
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
}
function getUser(){
    $.ajax({
        type: `GET`,
        url: `/getaccountinfo`,
        success: (data) => {
            if (data) {
                accountInfo = data;
                if(accountInfo.roles[0].name === "MANAGER"){
                    $("#rankBtn").show();
                    $("#compareBtn").show();
                    $("#printBtn").show();
                }else{
                    $("#rankBtn").hide();
                    $("#compareBtn").hide();
                    $("#printBtn").show();
                }
                getProduct();
            } else {
                Swal.fire('Cảnh báo', 'Hết phiên đăng nhập', 'warning').then(result => {
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
const getAccountInfo = () => {
    $.ajax({
        type: `GET`,
        url: `/getAccountInfo`,
        success: (data) => {
            if (data.data) {
                accountInfo = data.data;
            } else {
                Swal.fire('Cảnh báo', data.message, 'warning').then(result => {
                    if (result.value) {
                        window.location.href = `/login`;
                    }
                });
            }
            loadfileId();
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
}

let filterBiggerThan10 = (inputArr) => {
    let len = inputArr.length;
    for (let i = 0; i < len; i++) {
        for (let j = i + 1; j < len; j++) {
            if (inputArr[i].totalPoint - inputArr[j].totalPoint > 10 || inputArr[j].totalPoint - inputArr[i].totalPoint > 10) {
                isConfirm = false;
                pairs.push({
                    a: inputArr[i].totalPoint,
                    b: inputArr[j].totalPoint,
                    nameA: inputArr[i].memberInfo[0].name,
                    nameB: inputArr[j].memberInfo[0].name
                });
            }
        }
    }
};

function getCouncil(members){
    let url = `getcouncilbyidv2?id=${councilId}`;
    $.ajax({
        type: `GET`,
        url: url,
        success: (data) => {
            council = data;
            if(council.member_count - 1 == members.length){
                isFullMemberConfirm = true;
            }else{
                isFullMemberConfirm = false;
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    })
}

function getProduct(){
    let url = `getproductbyid?product_id=${productId}`;
    $.ajax({
        type: `GET`,
        url: url,
        success: (data) => {
            product = data;
            if(product.status === 'PREPARING' || product.status === 'SUBMITTING'){
                statusCheck = true;
            }
            if (product.status == 'RANKED') {
                isCompleted = true;
            } else if (Number(accountInfo.level) == 2 && (product.status == 'DISTRICTRANKED' || product.status == 'PROVINCERANKED')) {
                isCompleted = true;
            } else if (Number(accountInfo.level) == 1 && product.status == 'PROVINCERANKED') {
                isCompleted = true;
            } else if(product.status == 'TWRANKED'){
                isCompleted = true;
            }
            getMembersMarked();
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    })
}

const displayRank = (councilData) => {
    filterBiggerThan10(councilData);
    let url
    if (role == 'helpteam') {
        url = `/getCoucilInfo?productInfoId=${fileId}` + `&status=active&` + `role=helpteam`
    } else {
        url = `/getCoucilInfo?productInfoId=${fileId}` + `&status=active&`
    }
    $.ajax({
        type: `GET`,
        url: url,
        success: (data) => {
            if (data.success && data.data.length > 0) {
                let activeInGroup
                if (role == 'helpteam') {
                    activeInGroup = data.data[0].memHelp
                } else {
                    activeInGroup = data.data[0].group.filter(item => item.status == 'active' && item.productsInfoId.includes(fileId));
                }
                if (councilData.length >= activeInGroup.length) {
                    level = data.data[0].level
                    evaluateCompleted = true;
                    let rankedStar = 1;
                    if (averagePoint >= 30) {
                        rankedStar = 2
                    }
                    if (averagePoint >= 50) {
                        rankedStar = 3
                    }
                    if (averagePoint >= 70) {
                        rankedStar = 4
                    }
                    if (averagePoint >= 90) {
                        rankedStar = 5
                    }
                    // if(level == 2 && Number(averagePoint) < 50){
                    //     checklv = true;
                    // }
                    // if(level == 1 && Number(averagePoint) < 90 ){
                    //     checklv = true;
                    // }
                    if (!statusCheck && isCompleted != true && hasLargeDistance != true && evaluateCompleted && tenPointsDistance != true && levelquery == accountInfo.level && !role && !isHaveCouncillUp) {
                        $(`#rankBtn`).attr('disabled', false);
                        $(`#rankBtn`).show();
                        $(`#rankArea`)[0].innerHTML = `<h5>Xếp hạng: ${rankedStar} sao</h5>`;
                    } else {
                        $(`#rankArea`)[0].innerHTML = `Số thành viên trong hội đồng: ${activeInGroup.length}. Số thành viên đã chấm: ${councilData.length}</h5>`;
                    }
                    $(`#rankArea`).show();

                } else {
                    numberCompletePerAll = `${councilData.length}/${activeInGroup.length}`;
                    isFullMemberConfirm = false;
                    $(`#rankArea`)[0].innerHTML = `Số thành viên trong hội đồng: ${activeInGroup.length}. Số thành viên đã chấm: ${councilData.length}</h5>`;
                    $(`#rankArea`).show();

                }
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    })
}

function getProductTypeInfo(typeId) {
    $.ajax({
        url: "/getProductTypeInfo?typeId=" + typeId,
        type: "GET",
        success: function (ret) {
            setProduct.innerHTML = `Bộ sản phẩm: ${ret[0].name}`
        },
        error: function (err) {
            console.warn(err)
        }
    })
}

function loadfileId() {
    
    $.ajax({
        url: "/loadfileId?fileId=" + fileId,
        type: "GET",
        success: function (ret) {
            getProductTypeInfo(ret[0].typeId)
            product.innerHTML = `Sản phẩm: ${ret[0].name}`
            entity.innerHTML = `Chủ thể: ${ret[0].entities[0].name}`
            $(`#idproduct`)[0].innerHTML =`Mã sản phẩm: ${ret[0].code ? ret[0].code :'' }` 
            adressentity.innerHTML = `Địa chỉ: ${ret[0].addressInfo.wardName} - ${ret[0].addressInfo.districtName} - ${ret[0].addressInfo.provinceName}`
            if (ret[0].status == 'Ranked') {
                isCompleted = true;
            } else if (Number(accountInfo.level) == 2 && (ret[0].status == 'districtRanked' || ret[0].status == 'provinceRanked')) {
                isCompleted = true;
            } else if (Number(accountInfo.level) == 1 && ret[0].status == 'provinceRanked') {
                isCompleted = true;
            }
        },
        error: function (err) {
            console.warn(err)
        }
    })
}
let detailMember = false
const getDetailFileEvaluationResults = (check) => {
    let url
    if (check == "helpteam") {
        url = `getDetailFileEvaluationResults?productInfoId=${fileId}&level=${levelquery}&role=helpteam`
    } else {
        url = `getDetailFileEvaluationResults?productInfoId=${fileId}&level=${levelquery}`
    }
    $.ajax({
        url: url,
        type: "GET",
        success: function (ret) {
            if (ret.data.length > 0) {
                detailMember = ret.data
                if (check == "helpteam") {
                    getEvaluationResults('helpteam');
                }else{
                    getEvaluationResults('Examiner');
                }
                
            } else {
                isFullMemberConfirm = false
                numberCompletePerAll = 0
            }

        }
    })
}
const getEvaluationResults = (check) => {
    let url
    if (check == "helpteam") {
        url = `/getFileEvaluationResults?productInfoId=${fileId}&level=${levelquery}&role=helpteam`
    } else {
        url = `/getFileEvaluationResults?productInfoId=${fileId}&level=${levelquery}`
    }
    $.ajax({
        type: `GET`,
        url: url,
        success: (data) => {
            if (data.success) {
                let pointNumbersArray = [];
                let pointsData = [];
                // if (data.data.length >= 2) {
                //     $(`#compareBtn`).attr('disabled', false);
                //     $(`#compareBtn`).show();
                //     $(`#compareAllBtn`).attr('disabled', false);
                //     $(`#compareAllBtn`).show();
                // } else {
                //     $(`#compareBtn`).attr('disabled', true);
                //     $(`#compareBtn`).hide();
                //     $(`#compareAllBtn`).attr('disabled', true);
                //     $(`#compareAllBtn`).hide();
                // }
                data.data.forEach(pointObj => {
                    pointObj.detail = []
                    detailMember.forEach((item)=>{
                        if(pointObj._id == item.createMember){
                            pointObj.detail.push(item.detail)
                        }
                        // console.log(pointObj)
                        // if(pointObj.)
                    })

                    totalHistoryPoint += (Number(pointObj.historyPoint) > 0) ? Number(pointObj.historyPoint) : Number(pointObj.totalPoint);
                    if (!pointNumbersArray.find(numberObj => numberObj.value == pointObj.totalPoint)) {
                        pointNumbersArray.push({
                            value: pointObj.totalPoint,
                            appearTimes: 1
                        });
                    } else {
                        let numberObj = pointNumbersArray.find(numberObj => numberObj.value == pointObj.totalPoint);
                        numberObj.appearTimes = numberObj.appearTimes + 1
                    }
                });
                historyAveragePoint = totalHistoryPoint / data.data.length;
                if (data.data.length > 0) {
                    highestPoint = Math.max.apply(Math, pointNumbersArray.map(function (point) { return point.value; }));
                    lowestPoint = Math.min.apply(Math, pointNumbersArray.map(function (point) { return point.value; }));
                    averagePoint = pointNumbersArray.reduce((acc, curr) => { return acc + curr.value * curr.appearTimes }, 0) / data.data.length;
                    averagePoint = averagePoint.toFixed(2);
                }
                for (let i = 0; i < pointNumbersArray.length; i++) {
                    for (let j = 0; j < pointNumbersArray.length; j++) {
                        if (i != j && Math.abs(Number(pointNumbersArray[i].value) - Number(pointNumbersArray[j].value)) > 10) {
                            tenPointsDistance = true;
                            break;
                        }
                    }
                }
                // drawChart(data.data, averagePoint);
                drawTable(data.data);
                displayRank(data.data);
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    })
}

function getMembersMarked() {
    let url = `/getmembersmarked?product_id=${productId}&council_id=${councilId}` 
    $.ajax({
        type: `GET`,
        url: url,
        success: (data) => {
            if (data.length > 0) {
                members = data;
                let pointNumbersArray = [];
                let pointsData = [];

                data.forEach(item => {
                    pointNumbersArray.push(item.point);
                });
                historyAveragePoint = totalHistoryPoint / data.length;
                if (pointNumbersArray.length > 0) {
                    highestPoint = Math.max.apply(null, pointNumbersArray);
                    lowestPoint = Math.min.apply(null, pointNumbersArray);
                    //averagePoint = pointNumbersArray.reduce((acc, curr) => { return acc + curr.value}, 0) / data.length;
                    var total = pointNumbersArray.reduce(function (r, a) {
                        return r + a;
                        //    ^^^ use the last result without property
                    }, 0);
                    averagePoint = total/data.length;
                    averagePoint = averagePoint.toFixed(2);
                    $("#sum").text(`Điểm trung bình: ${averagePoint}`);
                }

                if(highestPoint - lowestPoint > 10){
                    tenPointsDistance = true;
                }
                //drawChart(data, averagePoint);
                drawTable(data);
                //displayRank(data);
                getCouncil(data);
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    })
}

const drawChart = (data, averagePoint) => {
    let points = []; //Mảng chứa điểm của từng người chấm, phục vụ cho biểu đồ đường
    let xTicks = []; //Mảng chứa tên hiển thị trên trục x
    let averageDatas = []; //Mảng điểm trung bình, biểu đồ đường trung bình
    data.map(item => {
        averageDatas.push(averagePoint);
        points.push(item.totalPoint);
        xTicks.push(item.memberInfo[0] ? item.memberInfo[0].name : 'Không rõ');
    })
    let chart = c3.generate({
        bindto: '#chart',
        data: {
            columns: [
                ['Kết quả chấm', ...points],
                ['Điểm trung bình', ...averageDatas]
            ],
        },
        axis: {
            x: {
                type: 'category',
                categories: xTicks
            }
        },
    });
}


const drawTable = (data) => {
    let total
    let arr = []
    data.forEach(pointData => {
        // let obj = {
        //     member: pointData._id,
        //     checkedcorrectly: true,
        //     total: pointData.totalPoint
        // }
        // for (let j = 0; j < pointData.detail.length; j++) {
           
        //     if (pointData.detail[j].contentType == 'question') {
        //         for (let index = 0; index < pointData.detail[j].answers.length; index++) {
        //             let checktrue = pointData.detail[j].answers.find(element => element.checked == true);
        //             if (!checktrue) {
        //                 obj.checkedcorrectly = false;
        //             }
        //         }

        //     } else if (pointData.detail[j].contentType == 'answer') {
        //         for (let index = 0; index < pointData.detail[j].answers.length; index++) {
        //             let checktrue = pointData.detail[j].answers.find(element => element.checked == true);
        //             if (!checktrue) {
        //                 obj.checkedcorrectly = false;
        //             }
        //         }
        //     } else if (pointData.detail[j].contentType == 'lvl2Question') {
        //         pointData.detail[j].lvl2Questions.forEach((lvl2ques, lvl2Index) => {
        //             if (lvl2ques.answers.length > 0) {
        //                 let checktrue = lvl2ques.answers.find(element => element.checked == true);
        //                 if (!checktrue) {
        //                     obj.checkedcorrectly = false;
        //                 }
        //             }
        //         });
        //     } else if (pointData.detail[j].contentType == 'caseQuestion') {
        //         let arrcheckCaseQuestion = []
        //         pointData.detail[j].caseQuestions.forEach((caseQues, caseIndex) => {
        //             if (caseQues.answers.length > 0) {
        //                 caseQues.answers.forEach((e)=>{
        //                     arrcheckCaseQuestion.push(e)
        //                 })
                        
        //             }
        //         });
        //         if(arrcheckCaseQuestion.length  > 0 ){
        //             let checktrue = arrcheckCaseQuestion.find(element => element.checked == true);
        //             if (!checktrue) {
        //                 obj.checkedcorrectly = false;
        //             }
        //         }
        //     }

        // }
        // if (obj.checkedcorrectly == true) {
        //     arr.push(obj)
        // }

        // if (pointData.status == "PROCESSING") {
        //     statusCheck = true
        // }
        let elementClass = "";
        if (Math.abs(pointData.point - averagePoint) >= 6) {
            elementClass = "bg-warning text-white";
            // hasLargeDistance = true;
        }
        $(`#resultTable tbody`).append(`
            <tr>

                <td class="${elementClass}">
                <a style="color:#039252" href="/viewmarkedbyuser?council_id=${councilId}&product_id=${productId}&product_type=${product.product_type}&created_userid=${product.user_id}&user_mark_id=${pointData.user_mark_id}">
                    ${pointData.name ? pointData.name : 'Không rõ'}
                </a>
                </td>
                <td class='text-center ${elementClass}'>${pointData.point}</td>
                <td class='text-center'><input type="checkbox" class="checkboxinput" name="checkboxinput" id="${pointData.user_mark_id}" value="${pointData.point}"></td>
            </tr>
        `);
    });
    // let averagePointDetail = 0
    // let highandLow = []
    // arr.forEach((item)=>{
    //     averagePointDetail = averagePointDetail + item.total
    //     highandLow.push(item.total)
    // })
    // if(highandLow.length == 0) {
    //     highandLow = [0, 0]
    // }
    // let divideNumber = arr.length > 0 ? arr.length : 1;
    // drawChart(data, (averagePointDetail/divideNumber).toFixed(2));
    // $(`#resultTable tbody`).append(`
    //     <tr>
    //         <td class='text-center'><b>Điểm trung bình</b></td>
    //         <td class='text-center'><b>${(averagePointDetail/divideNumber).toFixed(2)}</b></td>
    //         <td class='text-center'></td>
    //     </tr>
    //     <tr>
    //         <td class='text-center'><b>Điểm cao nhất</b></td>
    //         <td class='text-center'>${Math.max(...highandLow)}</td>
    //         <td class='text-center'></td>
    //     </tr>
    //     <tr>
    //         <td class='text-center'><b>Điểm thấp nhất</b></td>
    //         <td class='text-center'>${Math.min(...highandLow)}</td>
    //         <td class='text-center'></td>
    //     </tr>
    // `);
}

const rankThisFile = () => {
    if (!isConfirm) {
        showHelp();
        return;
    }
    // if (Number(levelquery) !== Number(accountInfo.level)) {
    //     Swal.fire({
    //         type: 'warning',
    //         title: `Duyệt kết quả chi áp dụng cho cùng cấp!`,
    //         text: '',
    //         footer: ''
    //     });
    //     return;
    // }
    /*
    if (!isFullMemberConfirm) {
        Swal.fire({
            type: 'warning',
            title: `Chưa đủ kết quả chấm của toàn bộ thành viên trong hội đồng chấm`,
            text: '',
            footer: ''
        });
        return;
    }
    */
    if (statusCheck) {
        Swal.fire({
            type: 'warning',
            title: `Duyệt kết quả chỉ áp dụng cho bộ hồ sơ đã gửi kết quả!`,
            text: '',
            footer: ''
        });
        return;
    }
    // if (isHaveCouncillUp) {
    //     Swal.fire({
    //         type: 'warning',
    //         title: `Sản phẩm đã được tạo hội đồng ở cấp trên!`,
    //         text: '',
    //         footer: ''
    //     });
    //     return;
    // }
    if (tenPointsDistance) {
        Swal.fire({
            type: 'warning',
            title: `Chênh lệch điểm trong hội đồng!`,
            text: '',
            footer: ''
        });
        return;
    }

    if (isCompleted) {
        Swal.fire({
            type: 'warning',
            title: `Bộ hồ sơ đã được duyệt kết quả!`,
            text: '',
            footer: ''
        });
        return;
    }

    if (hasLargeDistance) {
        Swal.fire({
            type: 'warning',
            title: `Chênh lệch điểm trong hội đồng!`,
            text: '',
            footer: ''
        });
        return;
    }

    if (role == "helpteam") {
        Swal.fire({
            type: 'warning',
            title: `Duyệt kết quả sẽ ngừng quyền chấm của các tổ viên. Anh/chị vẫn muốn tiếp tục?`,
            showCancelButton: true,
            confirmButton: 'Đồng ý',
            cancelButton: 'Quay lại'
        }).then(answer => {
            if (answer.value) {
                $.ajax({
                    url: "changedelineByhelpteam?productInfoId=" + fileId,
                    type: "GET",
                    success: function (ret) {
                        Swal.fire({
                            type: 'success',
                            title: '',
                            text: 'Duyệt kết quả thành công!',
                            footer: ''
                        })
                    }, error: (jqXHR, textStatus, errorThrown) => {
                        console.warn(errorThrown);
                    }
                })
            } else {
                console.log('b')
            }
            // setTimeout(() => {
            //     swal.close();
            // }, 6000);
            // return;
        })
    } else {
        Swal.fire({
            type: 'question',
            title: `Bạn có chắc chắn muốn duyệt xếp hạng cho hồ sơ này?`,
            showCancelButton: true,
            confirmButton: 'Đồng ý',
            cancelButton: 'Quay lại'
        }).then(answer => {
            if (answer.value) {
                // $.ajax({
                //     type: `PUT`,
                //     url: `/rankFile`,
                //     data: {
                //         productInfoId: fileId,
                //         level: level,
                //         averagePoint: averagePoint,
                //         historyAveragePoint: historyAveragePoint
                //     },
                //     success: (data) => {
                //         Swal.fire({
                //             type: 'success',
                //             title: '',
                //             text: 'Hồ sơ đã được xếp hạng!',
                //             footer: ''
                //         }).then(ret => {
                //             if (ret.value) {

                //                 window.location.reload();
                //             }
                //         });
                //     },
                //     error: (jqXHR, textStatus, errorThrown) => {
                //         console.warn(errorThrown);
                //     }
                // })
                var _token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: `POST`,
                    url: `/setproductrank`,
                    data: {
                        _token: _token,
                        product_id: fileId,
                        level: level,
                        average_point: averagePoint,
                    },
                    success: (data) => {
                        Swal.fire({
                            type: 'success',
                            title: '',
                            text: 'Hồ sơ đã được xếp hạng!',
                            footer: ''
                        }).then(ret => {
                            if (ret.value) {
                                window.location.reload();
                            }
                        });
                    },
                    error: (jqXHR, textStatus, errorThrown) => {
                        console.warn(errorThrown);
                    }
                })
            }
        });
    }
}

function setProductRank(){
    Swal.fire({
        type: 'question',
        title: `Bạn có chắc chắn muốn duyệt xếp hạng cho hồ sơ này?`,
        showCancelButton: true,
        confirmButton: 'Đồng ý',
        cancelButton: 'Quay lại'
    }).then(answer => {
        if (answer.value) {
            $.ajax({
                type: `POST`,
                url: `/setproductrank`,
                data: {
                    productId: fileId,
                    level: level,
                    averagePoint: averagePoint,
                },
                success: (data) => {
                    Swal.fire({
                        type: 'success',
                        title: '',
                        text: 'Hồ sơ đã được xếp hạng!',
                        footer: ''
                    }).then(ret => {
                        if (ret.value) {
                            window.location.reload();
                        }
                    });
                },
                error: (jqXHR, textStatus, errorThrown) => {
                    console.warn(errorThrown);
                }
            })
        }
    });
}

function clickCheckbox(mode) {
    let favorite = []
    // if ($("input[name='checkboxinput']:checked").length > 4) {
    //     Swal.fire({
    //         type: 'warning',
    //         title: '',
    //         text: 'Chỉ được so sánh tối đa 4 kết quả chấm!',
    //         footer: ''
    //     });
    //     return
    // }
    if (mode == 'all') {
        $.each($("input[name='checkboxinput']"), function () {
            favorite.push($(this).val());
        });
    } else {
       
        if ($("input[name='checkboxinput']:checked").length <= 1) {
            Swal.fire({
                type: 'warning',
                title: '',
                text: 'Vui lòng chọn từ 2 thành viên trở lên',
                footer: ''
            });
            return
        }
        $.each($("input[name='checkboxinput']:checked"), function () {
            favorite.push($(this).val());
        });
    }
    console.log(Math.min(...favorite));
    console.log(Math.max(...favorite));
    if (Math.abs(Number(Math.max(...favorite)) - Number(Math.min(...favorite))) > 10) {
        
        Swal.fire({
            type: 'warning',
            title: `Chênh lệch hơn 10 điểm trong hội đồng. Yêu cầu chấm lại!`,
            text: '',
            footer: ''
        });
        return;
      
    }else{
        Swal.fire({
            type: 'success',
            title: `Chênh lệch dưới 10 điểm trong hội đồng!`,
            text: '',
            footer: ''
        });
    }
    // let url = ``
    // for (let i = 0; i < favorite.length; i++) {
    //     url += `${favorite[i]}-`
    // }
    //window.location.href = role == 'helpteam' ? `/evaluateFileResultcompare?member=${url}&&fileId=${fileId}&helpTeam=true` : `/evaluateFileResultcompare?member=${url}&&fileId=${fileId}`
}

function showHelp(msg){
    let table=`<div class="table-responsive"><table class="table table-bordered" style="text-align: left"> 
    <thead>
        <tr>
            <th scope="col" style="width:35%">Người A</th>
            <th scope="col" style="width:35%">Người B</th>
            <th scope="col" style="width:30%">Số điểm chênh lệch</th>
        </tr>
    </thead>
    <tbody>`;
    if(pairs.length > 0){
        pairs.forEach((item) => {
            table = table+` <tr class="table-warning">
            <td>${item.nameA} - ${item.a} điểm</td>
            <td>${item.nameB} - ${item.b} điểm</td>
            <td>${Math.abs(item.a - item.b)}</td>
            </tr>`;
        });
    } else {
        table = table + ` <tr class="table-warning"><td colspan="2">Chưa có hướng dẫn</td></tr>`;
    }
    table = table+` </tbody></table></div>`;
    Swal.fire({
        title: 'Những cặp kết quả chênh lệch lớn hơn 10 điểm',
        html: table,
        showCloseButton: true,
    });
}