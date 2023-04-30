function getParam (paramName) {
    var url_string = window.location.href;
    var url = new URL(url_string);
    return url.searchParams.get(paramName);
}
var member = getParam('member');
var fileId = getParam('fileId');
var levelquery = getParam('level')
var isView = getParam('isView')
var role = getParam('role')
let sectionsArray = [];
let averagePoint = 0;
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
let isFullMemberConfirm = true;
let isHaveCouncillUp = false

var ImgsArray = []
let currentProductId = null
let currentTotal = null
let currentListFiles = null
let clickBack = null
let oldFilesArr = null
$(document).ready(function () {
    getAccountInfo();
    checkcouncilLevelUp();
    getEvaluaResultInputScore()
    if(levelquery){
        convertLevelEvalueResult(levelquery)
    }
    
    // if (role) {
    //     // getEvaluationResults('helpteam');
    //     getDetailFileEvaluationResults('helpteam')
    // } else {
    //     // getEvaluationResults('Examiner');
    //     getDetailFileEvaluationResults('Examiner')
    // }

});

const getEvaluaResultInputScore = () => {
    let url = `/evaluaResultInputScore?productId=${fileId}`
    if (levelquery) {
        url += `&&level=` + levelquery
    }
    $.ajax({
        type: `GET`,
        url: url,
        success: (res) => {
            if (res.success) {

                $('#partAScore').val(res.data.averageSectionA)
                $('#partBScore').val(res.data.averageSectioB)
                $('#partCScore').val(res.data.averageSectionC)
                $('#averageScore').val(res.data.totalAverage)

                let dot = false
                let img = ['.jpg', '.gif', '.png', '.jpeg', '.JPEG', '.PNG', '.JPG', '.GIF', '.jfif']
                let doc = ['.docx', '.DOCX', '.doc', '.DOC']
                let excel = ['.xls', '.XLS', '.xlsx', 'XLSX']
                let pdf = ['.pdf', '.PDF']
                let ppt = ['.ppt', '.pptx', '.pps', '.ppsx', '.PPT', '.PPTX', '.PPS', 'PPSX']

                ImgsArray = res.data.listFiles

                ImgsArray.forEach((e) => {

                    if (hasExtension(e.name, img)) {
                        link = `<img id="${e.name + e._id}" class="img-thumbnail" src="${e.dataName}" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..." onclick="clickImg(\'${e.dataName}\')">`
                    } else if (hasExtension(e.name, doc)) {
                        link = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.dataName}"><img id="${e.name + e._id}" src="img/word.jpg"  class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> `
                    } else if (hasExtension(e.name, excel)) {
                        link = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.dataName}"><img id="${e.name + e._id}" src="img/excel.png"  class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> `
                    } else if (hasExtension(e.name, pdf)) {
                        link = ` <a target="_blank" href="${e.dataName}"><img src="img/pdf.jpg" id="${e.name + e._id}"  class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> `
                    } else if (hasExtension(e.name, ppt)) {
                        link = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.dataName}"><img src="img/ppt.jpg" id="${e.name + e._id}"  class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> `
                    }

                    let textdes = e.description && e.hasOwnProperty('description') ? e.description : $('#descriptionImg').val()
                    if (!e.hasOwnProperty('description')) e.description = textdes
                    if (textdes.length > 100) {
                        textdes = textdes.slice(0, 100);
                        dot = true
                    }

                    document.getElementById('ImgModal-info-modal').innerHTML += `
                        <div class="col-6" id="${e._id}">          
                        <div class="card mb-4 shadow-sm">
                                <a href="#">
                                ${link}
                                </a>
                                ${textdes ? `
                                    <div style="font-size: 14px;font-weight: 500; margin: 10px;max-height: 79px;
                                    overflow: auto;color: #767989;text-align: center;">
                                    ${textdes} ${dot ? `<a href="#" onmouseover="tooltip(\'${e._id}\',0)">...xem</a>` : ''}
                                    </div>`: ''}
                                <div class="card-footer bg-white">
                                <div class="row d-flex align-items-center">
                                        <div class="col" align="right">
                                        <div class="ml-auto bd-highlight">
                                        </div>
                                        </div>
                                </div>
                                <div class="row d-flex justify-content-between">
                                    <div class="">
                                    <!-- <button class="btn btn-success onclick="editImgDropzone(\'${e._id}\')">Sửa</button> -->
                                    </div> 
            
                                    <textarea class="d-none" id="editDescritionFile-${e._id}">${e.description ? e.description : ''}</textarea>
                                    
                                    <div class="">
                                        <button class="btn btn-danger" onclick="deleteimgDropzone(\'${e._id}\')">Xóa</button>
                                    </div> 
                                </div>
                                </div>
                        </div>
                        </div>
                    `
                });

                let totalScore = parseFloat(res.data.totalAverage)

                let rankedStar = 1;
                if (totalScore >= 30) {
                    rankedStar = 2
                }
                if (totalScore >= 50) {
                    rankedStar = 3
                }
                if (totalScore >= 70) {
                    rankedStar = 4
                }
                if (totalScore >= 90) {
                    rankedStar = 5
                }

                drawTable(res.data);
                renderListFile(res.data.listFiles)
                console.log('res.data: ', res.data);
                // renderListFile()
                $(`#rankBtn`).attr('disabled', false);
                $(`#rankBtn`).show();
                $(`#rankArea`)[0].innerHTML = `<h5>Xếp hạng: ${rankedStar} sao</h5>`;
                $(`#rankArea`).show();
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
}

const linkview = () => {
    if (role) {
        window.location.href = "/notebyassessor?productInfo=" + fileId + "&role=helpteam"
    } else {
        window.location.href = "/notebyassessor?productInfo=" + fileId
    }

}
const checkcouncilLevelUp = () => {
    $.ajax({
        type: `GET`,
        url: `/checkcouncilLevelUp?id=${fileId}`,
        success: (data) => {
            if (data.length > 0) {
                // $("#rankBtn").hide()
                isHaveCouncillUp = true
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
                renderListButton()
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

function getProductTypeInfo (typeId) {
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

function loadfileId () {

    $.ajax({
        url: "/loadfileId?fileId=" + fileId,
        type: "GET",
        success: function (ret) {
            getProductTypeInfo(ret[0].typeId)
            product.innerHTML = `Sản phẩm: ${ret[0].name}`
            entity.innerHTML = `Chủ thể: ${ret[0].entities[0].name}`
            $(`#idproduct`)[0].innerHTML = `Mã sản phẩm: ${ret[0].code ? ret[0].code : ''}`
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
                } else {
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
                if (data.data.length >= 2) {
                    $(`#compareBtn`).attr('disabled', false);
                    $(`#compareBtn`).show();
                    $(`#compareAllBtn`).attr('disabled', false);
                    $(`#compareAllBtn`).show();
                } else {
                    $(`#compareBtn`).attr('disabled', true);
                    $(`#compareBtn`).hide();
                    $(`#compareAllBtn`).attr('disabled', true);
                    $(`#compareAllBtn`).hide();
                }
                data.data.forEach(pointObj => {
                    pointObj.detail = []
                    detailMember.forEach((item) => {
                        if (pointObj._id == item.createMember) {
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
    let averagePointDetail = 10
    let divideNumber = 3
    $(`#resultTable tbody`).append(`
        <tr>
            <td class='text-center'><b>Điểm trung bình phần A</b></td>
            <td class='text-center'>${data.averageSectionA.toFixed(2)}</td>
            <td class='text-center'></td>
        </tr>
        <tr>
            <td class='text-center'><b>Điểm trung bình phần B</b></td>
            <td class='text-center'>${data.averageSectioB.toFixed(2)}</td>
            <td class='text-center'></td>
        </tr>
        <tr>
            <td class='text-center'><b>Điểm trung bình phần C</b></td>
            <td class='text-center'>${data.averageSectionC.toFixed(2)}</td>
            <td class='text-center'></td>
        </tr>
        <tr>
            <td class='text-center'><b>Tổng điểm</b></td>
            <td class='text-center'><b>${data.totalAverage.toFixed(2)}</b></td>
            <td class='text-center'></td>
        </tr>
    `);
}

const rankThisFile = () => {
    if (!isConfirm) {
        showHelp();
        return;
    }
    if (Number(levelquery) !== Number(accountInfo.level)) {
        Swal.fire({
            type: 'warning',
            title: `Duyệt kết quả chi áp dụng cho cùng cấp!`,
            text: '',
            footer: ''
        });
        return;
    }
    if (!isFullMemberConfirm) {
        Swal.fire({
            type: 'warning',
            title: `Chưa đủ kết quả chấm của toàn bộ thành viên trong hội đồng chấm (${numberCompletePerAll})`,
            text: '',
            footer: ''
        });
        return;
    }
    if (statusCheck) {
        Swal.fire({
            type: 'warning',
            title: `Duyệt kết quả chỉ áp dụng cho bộ hồ sơ đã gửi kết quả!`,
            text: '',
            footer: ''
        });
        return;
    }
    if (isHaveCouncillUp) {
        Swal.fire({
            type: 'warning',
            title: `Sản phẩm đã được tạo hội đồng ở cấp trên!`,
            text: '',
            footer: ''
        });
        return;
    }
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
                $.ajax({
                    type: `PUT`,
                    url: `/rankFile`,
                    data: {
                        productInfoId: fileId,
                        level: level,
                        averagePoint: averagePoint,
                        historyAveragePoint: historyAveragePoint
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

function clickCheckbox (mode) {
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
        if ($("input[name='checkboxinput']:checked").length == 0) {
            Swal.fire({
                type: 'warning',
                title: '',
                text: 'Bạn vui lòng chọn cán bộ chấm để so sánh',
                footer: ''
            });
            return
        }
        $.each($("input[name='checkboxinput']:checked"), function () {
            favorite.push($(this).val());
        });
    }
    let url = ``
    for (let i = 0; i < favorite.length; i++) {
        url += `${favorite[i]}-`
    }
    window.location.href = role == 'helpteam' ? `/evaluateFileResultcompare?member=${url}&&fileId=${fileId}&helpTeam=true` : `/evaluateFileResultcompare?member=${url}&&fileId=${fileId}`
}

function showHelp (msg) {
    let table = `<div class="table-responsive"><table class="table table-bordered" style="text-align: left"> 
    <thead>
        <tr>
            <th scope="col" style="width:35%">Người A</th>
            <th scope="col" style="width:35%">Người B</th>
            <th scope="col" style="width:30%">Số điểm chênh lệch</th>
        </tr>
    </thead>
    <tbody>`;
    if (pairs.length > 0) {
        pairs.forEach((item) => {
            table = table + ` <tr class="table-warning">
            <td>${item.nameA} - ${item.a} điểm</td>
            <td>${item.nameB} - ${item.b} điểm</td>
            <td>${Math.abs(item.a - item.b)}</td>
            </tr>`;
        });
    } else {
        table = table + ` <tr class="table-warning"><td colspan="2">Chưa có hướng dẫn</td></tr>`;
    }
    table = table + ` </tbody></table></div>`;
    Swal.fire({
        title: 'Những cặp kết quả chênh lệch lớn hơn 10 điểm',
        html: table,
        showCloseButton: true,
    });
}

function renderListFile (ImgsArray) {
    let dot = false
    let img = ['.jpg', '.gif', '.png', '.jpeg', '.JPEG', '.PNG', '.JPG', '.GIF', '.jfif']
    let doc = ['.docx', '.DOCX', '.doc', '.DOC']
    let excel = ['.xls', '.XLS', '.xlsx', 'XLSX']
    let pdf = ['.pdf', '.PDF']
    let ppt = ['.ppt', '.pptx', '.pps', '.ppsx', '.PPT', '.PPTX', '.PPS', 'PPSX']



    ImgsArray.forEach((e) => {

        if (hasExtension(e.name, img)) {
            link = `<img id="${e.name + e._id}" class="img-thumbnail" src="${e.dataName}" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..." onclick="clickImg(\'${e.dataName}\')">`
        } else if (hasExtension(e.name, doc)) {
            link = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.dataName}"><img id="${e.name + e._id}" src="img/word.jpg"  class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> `
        } else if (hasExtension(e.name, excel)) {
            link = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.dataName}"><img id="${e.name + e._id}" src="img/excel.png"  class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> `
        } else if (hasExtension(e.name, pdf)) {
            link = ` <a target="_blank" href="${e.dataName}"><img src="img/pdf.jpg" id="${e.name + e._id}"  class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> `
        } else if (hasExtension(e.name, ppt)) {
            link = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.dataName}"><img src="img/ppt.jpg" id="${e.name + e._id}"  class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> `
        }

        let textdes = e.description && e.hasOwnProperty('description') ? e.description : $('#descriptionImg').val()
        if (!e.hasOwnProperty('description')) e.description = textdes
        if (textdes && textdes.length > 100) {
            textdes = textdes.slice(0, 100);
            dot = true
        }

        document.getElementById('ImgModal-info').innerHTML += `
			<div class="col-2">          
			<div class="card mb-4 shadow-sm">
					<a href="#">
					${link}
					</a>
					${textdes ? `
						<div style="font-size: 14px;font-weight: 500; margin: 10px;max-height: 79px;
						overflow: auto;color: #767989;text-align: center;">
						${textdes} ${dot ? `<a href="#" onmouseover="tooltip(\'${e._id}\',0)">...xem</a>` : ''}
						</div>`: ''}
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
    });
}

function hasExtension (fileName, exts) {
    return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
}

function clickImg (src) {
    var modal;
    function removeModal () { modal.remove(); $('body').off('keyup.modal-close'); }
    modal = $('<div>').css({
        background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
        backgroundSize: 'contain',
        width: '100%', height: '100%',
        position: 'fixed',
        zIndex: '10000',
        top: '0', left: '0',
        cursor: 'zoom-out'
    }).click(function () {
        removeModal();
    }).appendTo('body');
    //handling ESC
    $('body').on('keyup.modal-close', function (e) {
        if (e.key === 'Escape') { removeModal(); }
    });
}

function renderListButton () {
    let productId = getUrlParameter('fileId')
    if (accountInfo && accountInfo.level !== 0 && !isView) {
        $('#listButton').append(`
        <button id="compareBtn" class="evaluateStatus text-white btn mr-2" style="flex: 1; background-color: #039252; width:30px;" 
        onclick="openDialogInputScore(\'${productId}\')">Sửa kết quả</button>

        <button id="compareAllBtn" class="evaluateStatus text-white btn mr-2" style="flex: 1; background-color: #039252; width:100px;" onclick="back()">Quay lại</button>
    `)
    }

}

function openDialogInputScore (productId) {
    currentProductId = productId

		console.log(accountInfo);
		if(accountInfo.level === 2) {
			$.ajax({
        type: 'GET',
        url: `/evaluaResultInputScore?productId=${productId}&level=1`,
        success: (data) => {
            if (data.success) {
                console.log('data.data: ', data.data);
                if(!data.data) {
                    $('#modalInputScore').modal('toggle')
                    Dropzone.forElement('#dropzoneMytwo').removeAllFiles(true)
                    return 
                } 
                $('#modalInputScore').modal('hide')
                Swal.fire({
                    title: 'Cấp tỉnh đã xếp hạng',
                    text: "Không được phép sửa điểm",
                    type: 'error',
                }).then(result => {
                    if(result.value) {
                        $('#modalInputScore').modal('hide')
                    }
                });

                // $('#modalInputScore').modal('toggle')
                // Dropzone.forElement('#dropzoneMytwo').removeAllFiles(true)
            }
        },
        error: (error) => {
            console.log(error);
        }
    	});
		} else if(accountInfo.level === 1) {
			$.ajax({
				url: `/checkcProductInCouncil?productId=${productId}`,
				type: 'GET'
			})
				.done(function(res) {
					if(res.data.length > 0 && res.data[0]) {
						console.log('Có: ', res);
						Swal.fire({
							title: 'Đã tạo hội đồng cho sản phẩm này',
							text: "Không được phép sửa điểm",
							type: 'error',
						}).then(result => {
								if(result.value) {
										$('#modalInputScore').modal('hide')
								}
						});
					} else {
						console.log('Không: ', res);
						$('#modalInputScore').modal('toggle')
						Dropzone.forElement('#dropzoneMytwo').removeAllFiles(true)
					}
				})
				.fail(function(res) {
					console.log('error: ', res);
					Swal.fire({
						title: 'Có lỗi xảy ra',
						text: "Không thể thực hiện hành động này",
						type: 'error',
					})
				})
				// .always(function() {
				// 	alert( "complete" );
				// });
		}
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
                    let dataName = `https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/` + filename
                    let _id = new Date().getTime() + '_' + getRndInteger(100000, 999999)
                    let objfilename = {
                        dataName: dataName,
                        name: file.name,
                        id: `${file.lastModified}_${file.name}`,
                        _id: _id,
                        // description: $('#descriptionImg')
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
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="img/word.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    } else if (hasExtension(srcImg, excel)) {
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="img/excel.png"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    } else if (hasExtension(srcImg, pdf)) {
        tepplate = ` <a target="_blank" href="${srcImg}"><img src="img/pdf.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    } else if (hasExtension(srcImg, ppt)) {
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="img/ppt.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    }
    let viewImgDropzone = ` 
    <div class="col-4" id="${_id}">
        ${tepplate}
        <div style="text-align:center;width: 100px;">
        <a href="#" onclick="deleteimgDropzone(\'${_id}\')">Xóa</a>
        </div>
    </div>`
    $('#listImgDropzone').append(viewImgDropzone)
    $('#descriptionFile').css({
        display: 'block'
    })
    $('#descriptionImg').val('')
    // $('#listImgDropzone').data( , 52 );
}

const drawimgListFiles = (srcImg, _id) => {
    let img = ['.jpg', '.gif', '.png', '.jpeg', '.JPEG', '.PNG', '.JPG', '.GIF', '.jfif']
    let doc = ['.docx', '.DOCX', '.doc', '.DOC']
    let excel = ['.xls', '.XLS', '.xlsx', 'XLSX']
    let pdf = ['.pdf', '.PDF']
    let ppt = ['.ppt', '.pptx', '.pps', '.ppsx', '.PPT', '.PPTX', '.PPS', 'PPSX']
    let tepplate
    if (hasExtension(srcImg, img)) {
        tepplate = `<img id="zoomin${_id}" src="${srcImg}" width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;" onclick="clickImg(\'${srcImg}\')">`
    } else if (hasExtension(srcImg, doc)) {
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="img/word.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    } else if (hasExtension(srcImg, excel)) {
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="img/excel.png"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    } else if (hasExtension(srcImg, pdf)) {
        tepplate = ` <a target="_blank" href="${srcImg}"><img src="img/pdf.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    } else if (hasExtension(srcImg, ppt)) {
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="img/ppt.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
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

const deleteimgDropzone = (id) => {
    for (let i = 0; i < ImgsArray.length; i++) {
        if (ImgsArray[i]._id == id) {
            ImgsArray.splice(i, 1)
        }
    }
    document.getElementById(id).remove()
    $('#descriptionImg').html('')
}

const returnId = (name) => {
    return new Date().getTime() + '_' + getRndInteger(100000, 999999) + name.replace(/[&'"\s]/g, '')
}

const getRndInteger = (min, max) => {
    return Math.floor(Math.random() * (max - min + 1)) + min;
};

const nextInputScore = (min, max) => {
    $('#modalInputScoreNext').modal('toggle')
    $('#modalInputScore').modal('toggle')
};

const backstepChangeDateUp = (step) => {
    if (step == 1) {
        $('#step1ChangeDateUpStatus').modal('show');
        $('#step2ChangeDateUpStatus').modal('toggle');
    }
}

const backstepInputScore = (step) => {
    if (step == 1) {
        clickBack = true
        $('#modalInputScoreNext').modal('toggle');
        $('#modalInputScore').modal('show');
    }
}

$('#partAScore').on('input', function (e) {
    if (e.target.value > 35) {
        Swal.fire({
            title: 'Tổng điểm vượt quá 35 điểm',
            text: "Tổng điểm vượt quá cho phép",
            type: 'error',
        });
        let total = $('#averageScore').val();
        if (total) {
            total -= parseFloat(e.target.value)
            total = parseFloat(total).toFixed(2)
            $('#averageScore').val(total)
        }
        $('#partAScore').val(null)
    } else if (e.target.value < 0) {
        Swal.fire({
            title: 'Tổng điểm dưới 0 điểm',
            text: "Tổng điểm không được là số âm",
            type: 'error',
        });
        $('#partAScore').val(null)
    }
});

$('#partBScore').on('input', function (e) {
    if (e.target.value > 25) {
        Swal.fire({
            title: 'Tổng điểm vượt quá 25 điểm',
            text: "Tổng điểm vượt quá cho phép",
            type: 'error',
        });
        let total = $('#averageScore').val();
        if (total) {
            total -= parseFloat(e.target.value)
            total = parseFloat(total).toFixed(2)
            $('#averageScore').val(total)
        }
        $('#partBScore').val(null)
    } else if (e.target.value < 0) {
        Swal.fire({
            title: 'Tổng điểm dưới 0 điểm',
            text: "Tổng điểm không được là số âm",
            type: 'error',
        });
        $('#partAScore').val(null)
    }
});

$('#partCScore').on('input', function (e) {
    if (e.target.value > 40) {
        Swal.fire({
            title: 'Tổng điểm vượt quá 40 điểm',
            text: "Tổng điểm vượt quá cho phép",
            type: 'error',
        });
        let total = $('#averageScore').val();
        if (total) {
            total -= parseFloat(e.target.value)
            total = parseFloat(total).toFixed(2)
            $('#averageScore').val(total)
        }
        $('#partCScore').val(null)
    } else if (e.target.value < 0) {
        Swal.fire({
            title: 'Tổng điểm dưới 0 điểm',
            text: "Tổng điểm không được là số âm",
            type: 'error',
        });
        $('#partAScore').val(null)
    }
});

$('#modalInputScoreNext').on('hidden.bs.modal', function () {
    if (!clickBack) {
        $('#partAScore').val(null)
        $('#partBScore').val(null)
        $('#partCScore').val(null)
        $('#averageScore').val(null)
        // $('#listImgDropzone').css("display", "none")
        $('#descriptionImg').val(null)
        document.getElementById('listImgDropzone').innerHTML = ``
        return
    }
    // $('#partAScore').val(null)
    // $('#partBScore').val(null)
    // $('#partCScore').val(null)
    // $('#averageScore').val(null)
    // $('#descriptionImg').val(null)
    // document.getElementById('listImgDropzone').innerHTML = ``
});

$('#ds').on('hidden.bs.modal', function () {
    $('#partAScore').val(null)
    $('#partBScore').val(null)
    $('#partCScore').val(null)
    $('#averageScore').val(null)
    $('#descriptionFile').css({
        display: 'block'
    })

    $('#ImgModal-info').css("display", "none")
    // $('#listImgDropzone').css("display", "none")
    $('#descriptionImg').val(null)
    document.getElementById('listImgDropzone').innerHTML = ``
});

function getParam (paramName) {
    var url_string = window.location.href;
    var url = new URL(url_string);
    return url.searchParams.get(paramName);
}

function acceptSend () {
    let descriptionImg = $('#descriptionImg').val();
    let totalAvgScore = $('#averageScore').val();
    currentTotal = parseFloat(totalAvgScore);
    if (currentTotal > 100) {
        // alert('Vượt 100 điểm');
        Swal.fire({
            title: 'Tổng điểm vượt quá 100 điểm',
            text: "Tổng điểm vượt quá cho phép",
            type: 'error',
        });
        return
    } else if (currentTotal < 0) {
        Swal.fire({
            title: 'Tổng điểm là số âm',
            text: "Tổng điểm không được là số âm",
            type: 'error',
        });
        return
    }

    if (!currentTotal) {
        Swal.fire({
            title: 'Vui lòng điền đầy đủ thông tin',
            text: "Không được để trường thông tin trống",
            type: 'error',
        });
        return
    }
    Swal.fire({
        title: 'Xác nhận gửi kết quả lên cấp trên',
        text: "Kết quả và các văn bản mà bạn vừa đính kèm sẽ được gửi lên cấp trên để tiếp tục đánh giá, xét duyệt cho hồ sơ này.",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Hủy',
        confirmButtonText: 'Đồng ý'
    }).then((result) => {
        var productId = getParam('fileId');
        console.log(accontInformation);
        let levelCheck
        if (accontInformation.level === 2) {
            levelCheck = 1
        }
        if (result.value) {
            $.ajax({
                type: 'GET',
                contentType: 'application/json',
                url: `/evaluaResultInputScore?productId=${productId}&level=${levelCheck}`,
                success: function (res) {
                    if (!res.data) {
                        let dataCreate = {
                            productId: currentProductId,
                            averageSectionA: $('#partAScore').val(),
                            averageSectioB: $('#partBScore').val(),
                            averageSectionC: $('#partCScore').val(),
                            totalAverage: $('#averageScore').val(),
                            listFiles: ImgsArray,
                            fileDescription: $('#descriptionImg').val()
                        }
                        $.ajax({
                            type: 'POST',
                            data: JSON.stringify(dataCreate),
                            contentType: 'application/json',
                            url: '/evaluaResultInputScore',
                            success: function (data) {
                                Swal.fire('Thành công', `Nhập dữ liệu thành công`, 'success').then(result => {
                                    if (result.value) {
                                        window.location.href = `/login`;
                                    }
                                    location.reload();
                                });
                                $('#modalInputScoreNext').modal('toggle');
                            },
                            error: function (err) {
                                Swal.fire({
                                    type: 'warning',
                                    title: 'Dừng thất bại',
                                    text: 'Thêm dữ liệu không thành công',
                                });
                            }
                        });

                        document.getElementById('listImgDropzone').innerHTML = ``
                        // $('#listImgDropzone').css("display", "none")
                        currentProductId = null
                    } else {
                        Swal.fire({
                            type: 'warning',
                            title: ' Cấp tỉnh đã xếp hạng',
                            text: 'Kết quả không thể được sửa',
                        });
                    }
                },
                error: function (err) {
                    Swal.fire({
                        type: 'warning',
                        title: 'Dừng thất bại',
                        text: 'Thêm dữ liệu không thành công',
                    });
                }
            });
        }
    })
    // $('#modalInputScoreNext').modal('toggle');
}

$(function () {
    $('.avarage-score-input').change(function () {
        currentTotal = 0;

        $('.avarage-score-input').each(function () {
            if ($(this).val() != '')
                currentTotal += parseFloat($(this).val());
        });

        $('#averageScore').val(currentTotal.toFixed(2));
    });
});

$('#averageScore').prop('readonly', true);

function closeModalInputScore () {
    $('#partAScore').val(null)
    $('#partBScore').val(null)
    $('#partCScore').val(null)
    $('#averageScore').val(null)
    // $('#listImgDropzone').css("display", "none")
    $('#ImgModal-info').css("display", "none")
    $('#descriptionImg').val(null)
    document.getElementById('listImgDropzone').innerHTML = ``
}

function clickImg (src) {
    var modal;
    function removeModal () { modal.remove(); $('body').off('keyup.modal-close'); }
    modal = $('<div>').css({
        background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
        backgroundSize: 'contain',
        width: '100%', height: '100%',
        position: 'fixed',
        zIndex: '10000',
        top: '0', left: '0',
        cursor: 'zoom-out'
    }).click(function () {
        removeModal();
    }).appendTo('body');
    //handling ESC
    $('body').on('keyup.modal-close', function (e) {
        if (e.key === 'Escape') { removeModal(); }
    });
}

function saveFilesData () {
    let link
    $('#ImgModal-info-modal').html('');
    $('#ImgModal-info-modal').css('display', '');

    if (ImgsArray.length === 0) {
        // alert('Chưa chọn file');
				Swal.fire({
					title: 'Chưa chọn file',
					text: "Anh/chị vui lòng chọn file",
					type: 'warning',
				})
        return
    }

    let dot = false
    let img = ['.jpg', '.gif', '.png', '.jpeg', '.JPEG', '.PNG', '.JPG', '.GIF', '.jfif']
    let doc = ['.docx', '.DOCX', '.doc', '.DOC']
    let excel = ['.xls', '.XLS', '.xlsx', 'XLSX']
    let pdf = ['.pdf', '.PDF']
    let ppt = ['.ppt', '.pptx', '.pps', '.ppsx', '.PPT', '.PPTX', '.PPS', 'PPSX']



    ImgsArray.forEach((e) => {

        if (hasExtension(e.name, img)) {
            link = `<img id="${e.name + e._id}" class="img-thumbnail" src="${e.dataName}" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..." onclick="clickImg(\'${e.dataName}\')">`
        } else if (hasExtension(e.name, doc)) {
            link = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.dataName}"><img id="${e.name + e._id}" src="img/word.jpg"  class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> `
        } else if (hasExtension(e.name, excel)) {
            link = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.dataName}"><img id="${e.name + e._id}" src="img/excel.png"  class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> `
        } else if (hasExtension(e.name, pdf)) {
            link = ` <a target="_blank" href="${e.dataName}"><img src="img/pdf.jpg" id="${e.name + e._id}"  class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> `
        } else if (hasExtension(e.name, ppt)) {
            link = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${e.dataName}"><img src="img/ppt.jpg" id="${e.name + e._id}"  class="img-thumbnail" style="height: 150px;width: 100%; object-fit: cover;cursor: zoom-in" alt="..."></a> `
        }

        let textdes = e.description && e.hasOwnProperty('description') ? e.description : $('#descriptionImg').val()
        if (!e.hasOwnProperty('description')) e.description = textdes
        if (textdes.length > 100) {
            textdes = textdes.slice(0, 100);
            dot = true
        }

        document.getElementById('ImgModal-info-modal').innerHTML += `
			<div class="col-6" id="${e._id}">          
			<div class="card mb-4 shadow-sm">
					<a href="#">
					${link}
					</a>
					${textdes ? `
						<div style="font-size: 14px;font-weight: 500; margin: 10px;max-height: 79px;
						overflow: auto;color: #767989;text-align: center;">
						${textdes} ${dot ? `<a href="#" onmouseover="tooltip(\'${e._id}\',0)">...xem</a>` : ''}
						</div>`: ''}
					<div class="card-footer bg-white">
					<div class="row d-flex align-items-center">
							<div class="col" align="right">
							<div class="ml-auto bd-highlight">
							</div>
							</div>
					</div>
                    <div class="row d-flex justify-content-between">
                    <!-- <div class="">
                            <button class="btn btn-success onclick="editImgDropzone(\'${e._id}\')">Sửa</button>
                        </div>  -->

                        <textarea class="d-none" id="editDescritionFile-${e._id}">${e.description ? e.description : ''}</textarea>
                        
                        <div class="">
                            <button class="btn btn-danger" onclick="deleteimgDropzone(\'${e._id}\')">Xóa</button>
                        </div>
					</div>
					</div>
			</div>
			</div>
		`
    });

    oldFilesArr = [...ImgsArray]
    $('#listImgDropzone').html('')
    $('#descriptionFile').css({
        display: 'none'
    })
}

const tooltip = (id, role) => {
    if (role == "0") {
        $(`#tootip${id}`).show()
    } else {
        $(`#tootip${id}`).hide()
    }
}

// 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
$('#descriptionImg').on('input', function (e) {
});

function editImgDropzone (id) {
    let editDescritionFile = $(`#editDescritionFile-${id}`)
    console.log('editDescritionFile: ', editDescritionFile);
}

var getUrlParameter = function getUrlParameter (sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};

function back () {
    window.location.href = '/evaluationresult'
}
const convertLevelEvalueResult = (level) => {
    switch (level) {
        case '1':
            document.getElementById('statusEvalue').innerHTML = 'Kết quả chấm cấp Tỉnh'
            break;
        case '2':
            document.getElementById('statusEvalue').innerHTML = 'Kết quả chấm cấp Huyện'
            break;

        default:
            break;
    }
}