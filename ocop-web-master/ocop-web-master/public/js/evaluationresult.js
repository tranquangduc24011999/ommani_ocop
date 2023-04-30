let accountInfo
let level;
var currentType = undefined;
var currentStatus = undefined;
var objProvincials;
var objDistricts;
var objWards;

var page = 1;
var limit = 10;
var working = false;
var isDone = false;
var noData = false;
var isPause = false;
var isFiltered = false;
var isFirstLoadResultsStop = true;
var getvalueResultsStopDone = false;
var isLoadDoneGetDistricts = null;
var isFirstLoadDone = false;
var total = 0;
var totalPauseProducts = 0;
var totalDoneProducts = 0;
var totalCheckDone = 0;
let idProvncial = ""
let provncial = ""
let idDis = ""
let Dis = ""
let idWard = ""
var objProvincials;
var objDistricts;
var objWards;
var isFirstLoad = true;
var queryStar;
var searchingKeyword;
var onlyPaused = false;
var exceptPaused = false;
var currentCouncil;
var seachEvalue = false;
var wardName = '';
var provinceId;
var districtId;
var wardId;
$(document).ready(function () {
	// getTotalProductsDoneInputScore()
    if(accontInformation && accontInformation.level === 1) {
        $('.countScored').css("display", "none")
    }
    // renderTotalProducts();
    /*
    if(isFiltered) {
        $('#btnLoadMore').css({ opacity: 0 });
    }
    $('#btnLoadMore').css({ opacity: 0 });
    */
    $('#cboProvincial').select2();
    $('#cboDistricts').select2();
    $('#cboWards').select2();
    $('#cboCouncil').select2();

    $(`#btnLoadMore`).on('click', (event) => {
        event.preventDefault();
        $('#btnLoadMore').css({ 'padding': '8px 44px' });
        $('#btnLoadMore').html('<i class="fas fa-sync fa-spin"></i>');
        //getvalueResults();
        getProducts();
    });
    $(`#searchProductsBtn`).on('click', (event) => {
        $('#listeValueResult').html('');
        seachEvalue = true;
        event.preventDefault();
        resetDefault();
        isFiltered = true;
        let queryKeyword = $(`#keyword`).val().trim();
        if(queryKeyword.length > 0) {
            searchingKeyword = queryKeyword;
        } else {
            searchingKeyword = ''
        }
        //getvalueResults();
        filter();
    });
    getProducts()
    $(`#ranking-select`).on('change', (event) => {
        if (event.target.value == 0) {
            resetDefault();
            isFiltered = true;
            queryStar = undefined;
        } else {
            resetDefault();
            isFiltered = true;
            queryStar = event.target.value;
        }
       
    });
    $(`#productType-select`).on('change', (event) => {
        if (event.target.value == 0) {
            resetDefault();
            isFiltered = true;
            currentType = undefined;
        } else {
            resetDefault();
            isFiltered = true;
            currentType = event.target.value;
        }
       
    });
    $(`#productStatus-select`).on('change', (event) => {
        if (event.target.value === "ALL") {
            resetDefault();
            isFiltered = true;
            currentStatus = undefined;
            onlyPaused = false;
            exceptPaused = false;
        } else {
            resetDefault();
            isFiltered = true;
            currentStatus = event.target.value;
            if(currentStatus == 'Pause') {
                onlyPaused = true;
            } else {
                onlyPaused = false;
            }
            if(currentStatus == 'WAITTING' || currentStatus == 'PROCESSING' || currentStatus == 'SENDING') {
                exceptPaused = true;
            } else {
                exceptPaused = false;
            }
        }
       
    });
    $(`#cboCouncil`).on('change', (event) => {
        if(event.target.value == 0) {
            resetDefault();
            isFiltered = true;
            currentCouncil = undefined;
        } else {
            resetDefault();
            isFiltered = true;
            currentCouncil = event.target.value;
        }

    });
    getAccountInfo();    
    //getProductType();
    // getTotalAllStatus()
    getCouncils();
});

/*
$(window).scroll(function() {
    if ($(this).scrollTop() + 1 >= $('body').height() - $(window).height()) {
        if(isFirstLoad) {
            return;
        }
        if(isFiltered) {
            $('#btnLoadMore').css({ 
                opacity: 0,
                "cursor": "wait",
                "pointer-events": "none"
            })
            return;
        }

        if(isDone && isPause) {
            return;
        }

        if(getvalueResultsStopDone && isFirstLoadDone) {
            $('#btnLoadMore').css({ 
                opacity: 0, 
                "cursor": "wait",
                "pointer-events": "none"
            })
            return;
        }

        if(!isLoadDoneGetDistricts && idProvncial) {
            return;
        }

        if(isDone && !isPause) {
            if(!working) {
                working = true;
                additionalQueries = `&limit=${limit}&page=${page}`;
                getvalueResultsStop(additionalQueries);
                return;
            }
        }

        if (working == false) {
            working = true;
            $('#btnLoadMore').trigger("click");
            return;
        }
    }
})
*/
$(window).scroll(function () {
    if ($(this).scrollTop() + 1 >= $('body').height() - $(window).height()) {
        if (isFirstLoad) {
            return;
        }
        if (noData) {
            return;
        }

        if (isFiltered) {
            return;
        }

        if (isDone) {
            return;
        }

        if (working == false) {
            working = true;
            $("#btnLoadMore").trigger("click");
            // swal({
            //     title: "Đang tải thông tin!",
            //     imageUrl: '/img/Curve-Loading.gif',
            //     text: "Xin vui lòng chờ trong giây lát ...",
            //     showConfirmButton: false
            // });
        }
    }
})

function getTotalProductByStatus(status) {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: `/getevalueresult?status=${status}&total=true`,
            type: "GET",
            success: function (ret) {
                if (ret.success) {
                    resolve(ret.data);
                } 
            }, error: function (err) {
                reject(err);
            }
        });
    });
}

async function renderTotalProducts() { 
    let [ totalDoneResult, totalPauseResult ] = await Promise.all([ 
        getTotalProductByStatus('DONE'),  
        getTotalProductByStatus('PAUSE')  
    ]);
    totalDoneProducts = totalDoneResult;
    totalPauseProducts = totalPauseResult;

    $('#total').html(totalDoneResult + totalPauseResult);
}

function resetDefault() {
    page = 1;
    limit = 10;
    // $('#listeValueResult').html('');
    // $('#btnLoadMore').css({ opacity: 0 });
}

// filter
const getProductType = () => {
    $.ajax({
        type: `GET`,
        url: `/getProductType?product_Set=1`,
        success: (data) => {
            console.log(data,219)
            if (data.success) {
                $(`#productType-select`)[0].innerHTML = `<option value="0">Tất cả ngành</option>`;
                data.data.forEach(productType => {
                    $(`#productType-select`).append(`
                        <option value="${productType._id}">${productType.name}</option>
                    `);
                });
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    })
}

const getCouncils = () => {
    $.ajax({
        type: `GET`,
        url: `/getcouncils`,
        success: (data) => {
            $(`#cboCouncil`)[0].innerHTML = `<option value="0">Chọn hội đồng</option>`;
            data.forEach(item => {
                $(`#cboCouncil`).append(`
                    <option value="${item.id}">${item.name}</option>
                `);
            });
           
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    })
}
function getProvinces(acc){
    $.ajax({
        type: `GET`,
        url: `/provinces`,
        success: (data) => {
            $(`#cboProvincial`)[0].innerHTML = `<option value="0">Chọn tỉnh/tp</option>`;
            data.forEach(item => {
                $(`#cboProvincial`).append(`
                    <option value="${item.id}">${item.name}</option>
                `);
            });        
            //$('#cboProvincial').val(`${acc.address.province_id}`).trigger('change');
            //$('#cboProvincial').val(`${accountInfo.address.province_id}`);
            //getDistricts(accountInfo.address.province_id);
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    })
}

function getDistricts(provinceId){
    $.ajax({
        type: `GET`,
        url: `/getdistrictbyprovince?province_id=`+provinceId,
        success: (data) => {
            $(`#cboDistricts`)[0].innerHTML = `<option value="0">Chọn quận/huyện</option>`;
            data.forEach(item => {
                $(`#cboDistricts`).append(`
                    <option value="${item.id}">${item.name}</option>
                `);
            });        
            //$('#cboDistricts').val(`${accountInfo.address.district_id}`).trigger('change');
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    })
}
function LoadCboProvincialFillter() {
    var selectElemRef = document.getElementById("cboProvincial");
    nof_loadAdress('pro', 1);
    $.ajax({
        dataType: "json",
        url: "/getprovinces",
        data: objProvincials,
        success: function (data) {
            objProvincials = data;
            while (selectElemRef.length > 0) {
                selectElemRef.remove(0);
            }
            if (objProvincials.length == 1) {
                var o = new Option(objProvincials[0].Name, `${objProvincials[0]._id}`);
                $("#cboProvincial").append(o);
                LoadCboDistrictsFillter(objProvincials[0]._id, objProvincials[0].Name);
            } else {
                var b = new Option("Chọn Tỉnh/TP", "0")
                $("#cboProvincial").append(b);
                for (var i = 1, len = objProvincials.length + 1; i < len; ++i) {
                    var o = new Option(objProvincials[i - 1].Name, `${objProvincials[i - 1]._id}`);
                    $("#cboProvincial").append(o);
                }
            }
            if (data.length == 1) {
                $('#cboProvincial').select2('val', [data[0]._id]);
            }
            nof_loadAdress('pro', 0);
            if (idProvncial || idProvncial !== "") {
                $('#cboProvincial').val(`${idProvncial}`).trigger('change');
                var data = {
                    "id": idProvncial,
                    "text": provncial,
                };
                $('#cboProvincial').trigger({
                    type: 'select2:select',
                    params: {
                        data: data,
                        time:1
                    }
                });
                $("#cboProvincial").prop("disabled", true);
            }
        },
        error: function (err) {
            if (err.responseText == 'Unauthorized') {
                AlertWarning("time out", '', 'error');
            }
        }
    });
};

function LoadCboDistrictsFillter(idProvincial, name) {
    var selectElemRef = document.getElementById("cboDistricts");
    nof_loadAdress('district', 1);
    $.ajax({
        dataType: "json",
        url: "/getDistrict?idProvincial=" + idProvincial,
        data: objDistricts,
        success: function (data) {
            if(idProvincial) {
                isLoadDoneGetDistricts = true;
            }
            objDistricts = data;
            if (objDistricts.length == 1) {
                var o = new Option(objDistricts[0].Name, objDistricts[0]._id);
                $('#cboDistricts').append(o);
                LoadCboWardsFillter(objDistricts[0]._id, objDistricts[0].Name);
            } else {
                var b = new Option("Chọn Quận/Huyện", "0")
                $("#cboDistricts").append(b);
                for (var i = 1, len = objDistricts.length + 1; i < len; ++i) {
                    var o = new Option(objDistricts[i - 1].Name, objDistricts[i - 1]._id);
                    $('#cboDistricts').append(o);
                }
            }
            nof_loadAdress('district', 0);
            if (data.length == 1) {
                $('#cboDistricts').select2('val', [data[0]._id]);
            }
            if (idDis || Dis !== "") {
                $('#cboDistricts').val(`${idDis}`).trigger('change');
                var data = {
                    "id": idDis,
                    "text": Dis,
                };
                $('#cboDistricts').trigger({
                    type: 'select2:select',
                    params: {
                        data: data,
                        time:1
                    }
                });
                $("#cboDistricts").prop("disabled", true);
            }
        },
        error: function (err) {
            if (err.responseText == 'Unauthorized') {
                AlertWarning("time out", '', 'error');
            }
        }
    });
};

function LoadCboWardsFillter(idDistrict, name) {
    var selectElemRef = document.getElementById("cboWards");
    var objWards;
    nof_loadAdress('ward', 1);
    $.ajax({
        dataType: "json",
        url: "/getWards?idDistrict=" + idDistrict,
        data: objWards,
        success: function (data) {
            objWards = data;
            if (objWards.length == 1) {
                var o = new Option(objWards[0].Name, objWards[0]._id);
                $('#cboWards').append(o);
                LoadCboBranch(objWards[0]._id)
            } else {
                if (cboWards.length == 0) cboWards.options[0] = new Option("Chọn Phường/Xã", "0");
                for (var i = 1, len = objWards.length + 1; i < len; ++i) {
                    var o = new Option(objWards[i - 1].Name, objWards[i - 1]._id);
                    $('#cboWards').append(o);
                }
            }
            nof_loadAdress('ward', 0);
            if (data.length == 1) {
                $('#cboWards').select2('val', [data[0]._id]);
            }
            if (idWard || wardName !== "") {
                $('#cboWards').val(`${idWard}`).trigger('change');
                var data = {
                    "id": idWard,
                    "text": wardName,
                };
                $('#cboWards').trigger({
                    type: 'select2:select',
                    params: {
                        data: data,
                        time:1
                    }
                });
                $("#cboWards").prop("disabled", true);
            }
        },
        error: function (err) {
            if (err.responseText == 'Unauthorized') {
                AlertWarning("time out", '', 'error');
            }
        }
    });
};

function deleteDistrictByProvincial(idProvincial) {
    let arr = $('#cboDistricts').select2('val');
    $('#Pro' + idProvincial).remove();
    arr.filter(element => {
        if ($('#cboDistricts').find(`[value=${element}]`).length == 0) {
            deleteWardByDistrict(element);
            return false;
        }
        return true;
    });
    $('#cboDistricts').select2('val', arr);
}

function deleteWardByDistrict(idDistrict) {
    let arr = $('#cboWards').select2('val');
    $('#Dis' + idDistrict).remove();
    arr.filter(element => {
        if ($('#cboWards').find(`[value=${element}]`).length == 0) {
            deleteBranchByWard(element);
            return false;
        }
        return true;
    });
    $('#cboWards').select2('val', arr);
}

function deleteBranchByWard(idward) {
    let arr = $('#cboBranch').select2('val');
    $('#Ward' + idward).remove();
    arr.filter(element => {
        return $('#cboBranch').find(`[value=${element}]`).length == 1;
    });
    $('#cboBranch').select2('val', arr);
}

$('#cboProvincial').on("change", function (e) {
    // isFiltered = true;
    resetDefault();
    $('#cboDistricts').select2('val', ['0'])
    document.getElementById("cboDistricts").options.length = 0;
    $('#cboDistricts')
        .find('option')
        .remove()
        .end()
    let Text = $('#cboProvincial option:selected').text()
    let Id = $('#cboProvincial option:selected').val()
    let ids = Id.split(',')
    getDistricts(ids[0])
    if(accountInfo.level == 1) {
        // getvalueResults();
    }
});

$('#cboDistricts').on("change", function (e) {
    resetDefault();
    $('#cboWards').select2('val', ['0'])
    document.getElementById("cboWards").options.length = '';
    let Text = $('#cboDistricts option:selected').text()
    let Id = $('#cboDistricts option:selected').val();
    if (Text == undefined || Id == undefined) {
        console.log('stop loading district')
    } else {
        //LoadCboWardsFillter(Id, Text)
    }
});

$('#cboWards').on("change", function (e) {
    resetDefault();
    $('#cboBranch').select2('val', ['0'])
    $('#cboBranch').select2('data', null);
    $("#cboBranch").val(null).trigger("change");
    let Text = $('#cboWards option:selected').text();
    let Id = $('#cboWards option:selected').val();
    // getvalueResults();
});

function nof_loadAdress(block, load) {
    switch (block) {
        case 'pro':
            if (load == 1) {
                $('#cboProvincial').prop('disabled', true);
                $('#nof-load-pro').show();
            } else {
                $('#cboProvincial').prop('disabled', false);
                $('#nof-load-pro').hide();
            }
            break;
        case 'district':
            if (load == 1) {
                $('#cboDistricts').prop('disabled', true);
                $('#nof-load-district').show();
            } else {
                $('#cboDistricts').prop('disabled', false);
                $('#nof-load-district').hide();
            }
            break;
        case 'ward':
            if (load == 1) {
                $('#cboWards').prop('disabled', true);
                $('#nof-load-ward').show();
            } else {
                $('#cboWards').prop('disabled', false);
                $('#nof-load-ward').hide();
            }
            break;
        case 'BBN':
            if (load == 1) {
                $('#txtstWorkunit').prop('disabled', true);
            } else {
                $('#txtstWorkunit').prop('disabled', false);
            }
            break;
        default:
            break;
    }
}
const filterDataByStar = (data) => {
    let returnResults = [];
    switch(Number(queryStar)) {
        case 1:
            returnResults = data.filter(item => item.avgPoint < 30);
            break;
        case 2:
            returnResults = data.filter(item => item.avgPoint >= 30 && item.avgPoint < 50);
            break;
        case 3:
            returnResults = data.filter(item => item.avgPoint >= 50 && item.avgPoint < 70);
            break;
        case 4:
            returnResults = data.filter(item => item.avgPoint >= 70 && item.avgPoint < 90);
            break;
        case 5:
            returnResults = data.filter(item => item.avgPoint >= 90);
            break;
        default: break;
    }
    return returnResults;
}

function getProducts(){
    if (isFirstLoad) {
        swal({
            title: "Đang tải thông tin!",
            imageUrl: '/img/Curve-Loading.gif',
            text: "Xin vui lòng chờ trong giây lát ...",
            showConfirmButton: false
        });
    }

    let url = "/getproductbystatus"+ `?status=PREPARING&page=${page}&limit=${limit}`

    $.ajax({
        url: url,
        dataType: 'json',
        success: function (data) {
            drawProduct(data);
            if (data.length > 0) {
                if (isFirstLoad && data.length < limit) {
                    $('#btnLoadMore').css({ opacity: 0 });
                    isFirstLoad = false;
                    return;
                }

                if (data.length < limit) {
                    $('#btnLoadMore').css({ opacity: 0 });
                }
                // seen += data.length;
                // if (total - seen < limit) {
                //     loadMoreNumber = total - seen;
                //     if (loadMoreNumber < 0) {
                //         loadMoreNumber = limit;
                //     }
                // }
                isFirstLoad = false;
                $('#btnLoadMore').css({ 'padding': '' });
                $('#btnLoadMore').text(`Xem thêm`);
            } else {
                if (isFirstLoad) {
                    noData = true;
                }
                isDone = true;
                Swal.close();
                $('#btnLoadMore').css({ opacity: 0 });
            }
        },
        error: function (err) {
            if (err.responseText = -'Unauthorized')
                alert("Bạn đã bị time out");
        }
    });
}

function getvalueResults(){
    if(isFirstLoad || seachEvalue) {
        swal({
            title: "Đang tải thông tin!",
            imageUrl: '/images/Curve-Loading.gif',
            text: "Xin vui lòng chờ trong giây lát ...",
            showConfirmButton: false
        });
        seachEvalue = false;
    }
    let additionalQueries = ``;
    additionalQueries += `&limit=${limit}&page=${page}`
    let queryProvince = $('#cboProvincial option:selected').val();
    let queryDistrict = $('#cboDistricts option:selected').val();
    let queryWard = $('#cboWards option:selected').val();
    if(queryProvince && queryProvince != 0) {
        additionalQueries += `&queryProvince=${queryProvince}`;
    }
    if(queryDistrict && queryDistrict != 0) {
        additionalQueries += `&queryDistrict=${queryDistrict}`
    }
    if(queryWard && queryWard != 0) {
        additionalQueries += `&queryWard=${queryWard}`
    }
    if(currentType) {
        additionalQueries += `&typeId=${currentType}`
    }
    if(currentStatus) {
        if(currentStatus == 'districtRanked' || currentStatus == 'provinceRanked' || currentStatus == 'Ranked') {
            additionalQueries += `&productStatus=${currentStatus}`
        } else {
            additionalQueries += `&groupEvaluateStatus=${currentStatus}`
        }
    }
    if(currentCouncil){
        additionalQueries += `&councilId=${currentCouncil}`
    }
    if(searchingKeyword) {
        additionalQueries += `&keyword=${searchingKeyword}`
    }

    if(isFiltered) {
        additionalQueries = additionalQueries.replace(/&limit=\b\d+\b&page=\b\d+\b/g, '');
    }

    if(additionalQueries.match(/page=1&queryProvince=/)) {
        page = 2;
        additionalQueries = additionalQueries.replace(/page=1/, 'page=2');
    }

    $.ajax({
        url: `/getevalueresult?status=DONE${additionalQueries}`,
        type: "GET",
        cache: false,
        success: function (ret) {
            console.log(ret,1998 + 'a')
            if (ret.success) {
                if(isFiltered) {
                    // $('#btnLoadMore').css({ opacity: 0 });
                    getvalueResultsStop(additionalQueries);
                }
                if(ret.data.length > 0) {
                    if(queryStar) {
                        ret.data = filterDataByStar(ret.data);
                    }

                    if(isFirstLoad && ret.data.length < limit) {
                        $('#btnLoadMore').css({ 
                            opacity: 0,
                            "cursor": "wait",
                            "pointer-events": "none"
                        });
                        getvalueResultsStop(additionalQueries);
                        isFirstLoadDone = true;
                    }
                    if(!onlyPaused) {
                        console.log(ret.data,630)
                        drawevalueresult(ret.data,'DONE')
                    }

                    if(isFiltered && !onlyPaused    ) {
                        $(`#listeValueResult`).html('');
                        // $('#btnLoadMore').css({ opacity: 0 });
                        drawevalueresult(ret.data,'DONE')
                        return;
                    }

                    // $('#btnLoadMore').css({ opacity: 1 });
                    $('#btnLoadMore').css({ 'padding': '' });
                    $('#btnLoadMore').html('Xem Thêm');
                    isFirstLoad = false;
                } else {
                    // if(isFirstLoad) {
                    //     $(`#listeValueResult`)[0].innerHTML = 'Không có dữ liệu';
                    // }
                    isDone = true;
                    page = 1;
                    additionalQueries = `&limit=${limit}&page=${page}`;
                    if(!isPause && !exceptPaused && !isFiltered) {
                        getvalueResultsStop(additionalQueries)
                    }
                    Swal.close();
                    isFirstLoad = false;
                }
                // $(`#listeValueResult`)[0].innerHTML = "";
            
            } else {
                Swal.close();
            }
        }, error: function (err) {
            Swal.close();
            console.log(err)
        }
    });
    
}
const getvalueResultsStop=(additionalQueries='')=>{
    $.ajax({
        url: `/getevalueresult?status=PAUSE${additionalQueries}`,
        type: "GET",
        success: function (ret) {
            console.log(ret,1998)
            if (ret.success) {
                if(isFirstLoadResultsStop) {
                    if(ret.data.length === 0 || ret.data.length < limit) {
                        getvalueResultsStopDone = true;
                    }
                    isFirstLoadResultsStop = false;
                }
                if(ret.data.length > 0) {
                    if(queryStar) {
                        ret.data = filterDataByStar(ret.data);
                    }
                    // page++;
                    drawevalueresult(ret.data,'PAUSE')
                    if(ret.data.length < limit) {
                        $('#btnLoadMore').css({ 
                            opacity: 0, 
                            "cursor": "wait",
                            "pointer-events": "none" 
                        });
                        return;
                    }

                    // if(ret.data.length < limit) {
                        
                    // }
                } else {
                    // if(isFiltered) {
                    //     $(`#listeValueResult`)[0].innerHTML = 'Không có dữ liệu';
                    // }
                    $('#btnLoadMore').css({ 
                        opacity: 0,
                        cursor: "wait",
                        "pointer-events": "none"
                    });
                    isPause = true;
                    Swal.close();
                }
            }
        }, error: function (err) {
            console.log(err)
        }
    });
}
const getAccountInfo = () => {
    $.ajax({
        type: `GET`,
        url: `/getaccountinfo`,
        success: (data) => {
            if (data) {
                accountInfo = data;
                /*
                if (data.level == 1) {
                    
                    idProvncial = acc.addressInfo.provinceId;
                    provncial = acc.addressInfo.provinceName;
   
                    document.getElementById('Status').innerHTML = `
                    <option value="districtRanked">Cấp huyện đã xếp hạng</option>
                    <option value="provinceRanked">Cấp tỉnh đã xếp hạng</option>
                    <option value="Submiting">Đang nộp</option>
                    <option value="Done">Hoàn thành</option>
                    <option value="Fail">Không đạt</option>
                    <option value="Preparing">Chưa nộp</option>
                    <option value="Waitting">Chờ chấm</option>
                    `
                } else if (data.level == 3) {
                    
                    idProvncial = acc.addressInfo.provinceId;
                    provncial = acc.addressInfo.provinceName;
                    idDis = acc.addressInfo.districtId;
                    Dis = acc.addressInfo.districtName;
                    
                    document.getElementById('Status').innerHTML = `
                    <option value="districtRanked">Cấp huyện đã xếp hạng</option>
                    <option value="Submiting">Đang nộp</option>
                    <option value="Done">Hoàn thành</option>
                    <option value="Fail">Không đạt</option>
                    <option value="Preparing">Chưa nộp</option>
                    <option value="Waitting">Chờ chấm</option>
                    `
                }else{
                    document.getElementById('Status').innerHTML = `
                    <option value="districtRanked">Cấp huyện đã xếp hạng</option>
                    <option value="Submiting">Đang nộp</option>
                    <option value="Done">Hoàn thành</option>
                    <option value="Fail">Không đạt</option>
                    <option value="Preparing">Chưa nộp</option>
                    <option value="Waitting">Chờ chấm</option>
                    `
                    $('#councilSelector').css({"display":""})
                }
                */
                /*
                accountInfo = data.data;

                if (accountInfo.level == 1) {
                    idProvncial =  _.get(accountInfo, "addressInfo.provinceId", '') ;
                    provncial =  _.get(accountInfo, "addressInfo.provinceName", '');
                } else if (accountInfo.level == 2) {
                    idProvncial = _.get(accountInfo, "addressInfo.provinceId", '') ;
                    provncial =  _.get(accountInfo, "addressInfo.provinceName", '');
                    idDis =   _.get(accountInfo, "addressInfo.districtId", '');
                    Dis =  _.get(accountInfo, "addressInfo.districtName", '');
                    idWard =  _.get(accountInfo, "addressInfo.wardId", '');
                    wardName = _.get(accountInfo, "addressInfo.wardName", '');
                }
                let dynamicStatuses = [
                    {value: 'districtRanked', text:'Huyện đã xếp hạng'},
                    {value: 'provinceRanked', text:'Tỉnh đã xếp hạng'},
                    {value: 'Ranked', text:'TW đã xếp hạng'},
                    {value: 'Pause', text:'Đã dừng'}
                ]
                let additionalStatuses = [];
                switch(Number(accountInfo.level)) {
                    case 0:
                        additionalStatuses = dynamicStatuses.filter(item => item.value = 'Ranked')
                        break;
                    case 1:
                        additionalStatuses = dynamicStatuses.filter(item => item.value = !'districtRanked')
                        break;
                    case 2:
                        additionalStatuses = dynamicStatuses
                        break;
                    default: break;
                }
                additionalStatuses.forEach(status => {
                    $(`#productStatus-select`).append(`<option value=${status.value}>${status.text}</option>`);
                });
                */
                //LoadCboProvincials();
            } else {
                Swal.fire('Cảnh báo', data.message, 'warning').then(result => {
                    if (result.value) {
                        window.location.href = `/login`;
                    }
                });
            }
            getProvinces(data)
            //LoadCboProvincials()
            //LoadCboProvincialFillter()
            //getCouncils()
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
}
const drawevalueresult = (data, status) => {
    let numberOfcheckedcorrectly = 0;
    data.forEach(item => {
        let isCompleted = false
        let hasLargeDistance = false
        let tenPointsDistance = false
        let evaluateCompleted = false
        let totalHistoryPoint = 0;
        let historyAveragePoint = 0;
        let total = 0
        let sum
        let titile = ''
        // let satus='DONE'
        let numberMemberEx = 0;
        let href = `/evaluateFileResult?fileId=${item._id.productId}&&level=${accountInfo.level}`
        if (item._id.status && item._id.status == "stop") {
            titile = `<span class="ttilte" style="color:#e46a76">Đã dừng</span>`
            // satus=`PAUSE`
        }
        if (item.productData.status == 'Ranked') {
            isCompleted = true;
        } else if (Number(accountInfo.level) == 2 && (item.productData.status == 'districtRanked' || item.productData.status == 'provinceRanked')) {
            isCompleted = true;
        } else if (Number(accountInfo.level) == 1 && item.productData.status == 'provinceRanked') {
            isCompleted = true;
        }
        if (item.evaluateInfo.length > 0) {
            item.evaluateInfo.forEach((e) => {
                totalHistoryPoint += (Number(e.historyPoint) > 0) ? Number(e.historyPoint) : Number(e.totalPoint);
                if (Math.abs(e.totalPoint - total) >= 6) {
                    hasLargeDistance = true
                }
            })
            for (let i = 0; i < item.evaluateInfo.length; i++) {
                if (item.evaluateInfo[i].status == "DONE") {
                    numberMemberEx = numberMemberEx + 1
                }
                for (let j = 0; j < item.evaluateInfo.length; j++) {
                    if (i != j && Math.abs(Number(item.evaluateInfo[i].totalPoint) - Number(item.evaluateInfo[j].totalPoint)) > 10) {
                        tenPointsDistance = true;
                        break;
                    }
                }
            }
        }
        historyAveragePoint = parseFloat(totalHistoryPoint / item.evaluateInfo.length).toFixed(2);
        if (Number(item.total) == Number(numberMemberEx)) {
            evaluateCompleted = true
        }
        let helpTeamPlate = '';
        if (item.helpTeamQuantity.length > 0) {
            helpTeamPlate = `<a href="${href}&role=helpteam" class="subtitile2 ${accontInformation.level !== 0 ? 'd-none' : ''}">${item.evaluate_resulthelpteams.length}/${item.helpTeamQuantity.length} tổ viên đã chấm ></a></br>`
        }
        let html = ` 
        <div class="col-sm-6">
                <div class="row container bg-white mt-3"
                    style="" id="divginore">
                    <div class="col-10" style="display: flex;">
                        <a style="color:black" href=${href}>
                        <img src="${_.get(item, 'productData.imgUrl[0]', '/img/logoocop.png')}"
                            class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px"
                            alt="ảnh">
                        </a>
                        <div style="margin-top: -4px;">
                            <a style="color:black" href=${href}>
                            <label class="nametitle">${item.productData.name}  ${titile}</label>
                            <p class="subtitile">${item.productData.code ? 'Mã sản phẩm: ' + item.productData.code : ''}</p>
                            <label class="subtitile">${item.entityInfo.name ? 'Tên chủ thể: ' + item.entityInfo.name : ''}</label>
                            </a>
                            <p class="countScored">
                            <a href="#" onclick="getMemberassessor(\'${item._id.productId}\',\'${status}\')" class="subtitile2 ${accontInformation.level !== 0 ? 'd-none' : ''}">${item.evaluateInfo.length}/${item.total} cán bộ chấm đã chấm  >
                            <div>${helpTeamPlate}</div>
                            </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-2 text-center" style="margin-top: -12px;">
                        <div class="Rectanglesss">
                            <label style="color: #049252;
                            margin-top: 10px;">${Math.round(item.avgPoint * 100) / 100}đ</label>
                        </div>
                    </div>   
                </div>
        </div>`
        // if (status == "DONE") {
        //     document.getElementById('listeValueResult').innerHTML += html
        // } else {
        //     $('#listeValueResult').append(html)
        // }
        $('#listeValueResult').append(html)
    });
    if (status == "PAUSE" && data.length < limit) {
        $("#btnLoadMore").css({ 
            opacity: 0, 
            "cursor": "wait",
            "pointer-events": "none" 
        });
        // document.getElementById('listeValueResult').innerHTML = ``
    }
    if(data.length < limit) {
        $("#btnLoadMore").css({ 
            opacity: 0,
            "cursor": "wait",
            "pointer-events": "none" 
        });
    }
    if(isFiltered) {
        $('#btnLoadMore').css({ 
            opacity: 0,
            "cursor": "wait",
            "pointer-events": "none" 
        });
    } else {
        if(isFirstLoad && data.length < limit) {
            $('#btnLoadMore').css({ 
                opacity: 0, 
                "cursor": "wait",
                "pointer-events": "none"
            });
        } else {
            $('#btnLoadMore').css({ opacity: 1 });
        }
    }
    if (status == "DONE" || status == "PAUSE") {
        page++;
        working = false;
    }
    Swal.close();
}

const drawProduct = (data) => {
    let numberOfcheckedcorrectly = 0;
    data.forEach(item => {
        let isCompleted = false
        let hasLargeDistance = false
        let tenPointsDistance = false
        let evaluateCompleted = false
        let totalHistoryPoint = 0;
        let historyAveragePoint = 0;
        let total = 0
        let sum
        let title = ''
        // let satus='DONE'
        let numberMemberEx = 0;
        let href = `/evaluatefileresult?product_id=${item.id}&council_id=${item.council_id}`
        if (item.status && item.status == "STOP") {
            title = `<span class="ttilte" style="color:#e46a76">Đã dừng</span>`
            // satus=`PAUSE`
        }
        if (item.status == 'RANKED') {
            isCompleted = true;
        } else if ((item.status == 'DISTRICTRANKED' || item.status == 'PROVINCERANKED')) {
            isCompleted = true;
        } else if (item.status == 'PROVINCERANKED') {
            isCompleted = true;
        }
        let helpTeamPlate = '';
        // if (item.helpTeamQuantity.length > 0) {
        //     helpTeamPlate = `<a href="${href}&role=helpteam" class="subtitile2 ${accontInformation.level !== 0 ? 'd-none' : ''}">${item.evaluate_resulthelpteams.length}/${item.helpTeamQuantity.length} tổ viên đã chấm ></a></br>`
        // }
        let html = ` 
        <div class="col-sm-6">
                <div class="row container bg-white mt-3"
                    style="" id="divginore">
                    <div class="col-10" style="display: flex;">
                        <a style="color:black" href=${href}>
                        <img src="${item.image}"
                            class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px"
                            alt="ảnh">
                        </a>
                        <div style="margin-top: -4px;">
                            <a style="color:black" href=${href}>
                            <label class="nametitle">${item.name}  ${title}</label>
                            <p class="subtitile">${item.code ? 'Mã sản phẩm: ' + item.code : ''}</p>
                            <label class="subtitile">${item.entity_name ? 'Tên chủ thể: ' + item.entity_name : ''}</label>
                            <label class="subtitile">${item.council_name ? 'Tên hội đồng: ' + item.council_name : ''}</label>
                            <label class="subtitile">${item.product_type_name ? 'Bộ sản phẩm: ' + item.product_type_name : ''}</label>
                            </a>
                        </div>
                    </div>
                    <div class="col-2 text-center" style="margin-top: -12px;">
                        <div class="Rectanglesss">
                            <label style="color: #049252;
                            margin-top: 10px;">${Math.round(item.avg_point * 100) / 100}đ</label>
                        </div>
                    </div>   
                </div>
        </div>`
        // if (status == "DONE") {
        //     document.getElementById('listeValueResult').innerHTML += html
        // } else {
        //     $('#listeValueResult').append(html)
        // }
        $('#listeValueResult').append(html)
    });
    if (status == "PAUSE" && data.length < limit) {
        $("#btnLoadMore").css({ 
            opacity: 0, 
            "cursor": "wait",
            "pointer-events": "none" 
        });
        // document.getElementById('listeValueResult').innerHTML = ``
    }
    if(data.length < limit) {
        $("#btnLoadMore").css({ 
            opacity: 0,
            "cursor": "wait",
            "pointer-events": "none" 
        });
    }
    if(isFiltered) {
        $('#btnLoadMore').css({ 
            opacity: 0,
            "cursor": "wait",
            "pointer-events": "none" 
        });
    } else {
        if(isFirstLoad && data.length < limit) {
            $('#btnLoadMore').css({ 
                opacity: 0, 
                "cursor": "wait",
                "pointer-events": "none"
            });
        } else {
            $('#btnLoadMore').css({ opacity: 1 });
        }
    }
    if (status == "DONE" || status == "PAUSE") {
        //page++;
        working = false;
    }
    page++;
    Swal.close();
}

function onmouseovers(id){
    $(`#show${id}`).hide() 
}

function getMemberassessor(productId, status) {
    $(`#show${productId}`).show()
    $.ajax({
        url: "getMemberassessor?productId=" + productId + '&&status=' + status,
        type: "GET",
        success: function (ret) {
            if (ret.success) {
                drawgetMs(ret.data)
            }
        }, error: function (err) {
            console.log(err)
        }
    })
}
function drawgetMs(data) {
    let content = ''
    data.forEach((e) => {
        content += `
                <div class="col-12" style="display:flex;padding: 16px;">
                    <img src="${_.get(e, "membes.avatarUrl", '/img/noavatar.png')}" width="50px" height="50px" style="border-radius: 50px;margin-right: 12px;
                    border-bottom: 1px solid #dee2e6;">
                    <div style="margin-right: 8px;width: 100%">
                        <label class="Nguyn-Vn-Linh">${_.get(e, "membes[0].name", 'e.group.nameMember')}</label></br>
                        <label class="Linkgmailcom">${_.get(e, "membes[0].email", '')} </label>
                    </div>
                    <div style="width: 20%;">
                    <div class="Rectasngles">
                            <label style="color: #049252;
                            margin-top: 6px;">${e.evaluateInfo.length > 0 ? e.evaluateInfo[0].totalPoint + 'd' : '0d'}</label>
                    </div>
                    <div>
                </div>
                </div>
                </div>
            `
    })
    $('#modalMemberAssessor-body').html(content)
    $('#modalMemberAssessor').modal('show')
}

const rankThisFile = (historyAveragePoint, averagePoint, id) => {
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
                    productInfoId: id,
                    level: accountInfo.level,
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

function getTotalProductsDoneInputScore() {
	let url = '/getproductDonebyProvincialchekmanager/ALL';
	$.ajax({
			url: url,
			type: "GET",
			success: function (data) {
                data.forEach(item => {
                    let href = `/evaluateFileResult?fileId=${item.evaluaresultinputscores.productId}&&level=${accontInformation.level}`
                    let html = ` 
                    <div class="col-sm-6">
                        <div class="row container bg-white mt-3"
                            style="" id="divginore">
                            <div class="col-10" style="display: flex;">
                                <a style="color:black" href=${href}>
                                    <img src="${item.imgUrl[0]}"
                                    class="img-circle" style="    margin-right: 24px;width: 50px; height: 50px"
                                    alt="ảnh">
                                </a>
                                <div style="margin-top: -4px;">
                                    <label class="nametitle">${item.name}</label>
                                    <p class="subtitile">${item.code ? 'Mã sản phẩm: ' + item.code : ''}</p>
                                    <label class="subtitile">${item.Entity.name ? 'Tên chủ thể: ' + item.Entity.name : ''}</label>
                                    </a>
                                    <p class="countScored">
                                    </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-2 text-center" style="margin-top: -2px;">
                                <div class="Rectanglesss">
                                    <label style="color: #049252;
                                    margin-top: 10px;">${item.evaluaresultinputscores.totalAverage}đ</label>
                                </div>
                            </div>     
                        </div>
                    </div>`
                    $('#listeValueResult').append(html)
                })
			}
	})
}

function filter () {
    let prod = $('#keyword').val(),
        entity = $('#keywordEnt').val(),
        rank = $('#ranking-select').val(),
        status = $('#productStatus-select').val(),
        productType = $('#productType-select').val(),
        council = $('#cboCouncil').val(),
        province = $('#cboProvincial').val(),
        district = $('#cboDistricts').val()
    $('#btnLoadMore').css({ opacity: 0 });
    //let data = getQuery();
    let filterData = genFilterData(prod, entity, rank, status,productType,council, province, district);
    isFiltered = true;

    let url = `/filterevaluationresult`;
    // if (approveFiles) {
    //     url += `&status=Done`;
    // }

    $.ajax({
        url: url,
        type: "GET",
        data: filterData,
        success: function (ret) {
            if (ret.length > 0) {
                resetDefault();
                drawProduct(ret)
            } else {
                document.getElementById("divListProduct").innerHTML = `Không có dữ liệu`;
                $('#btnLoadMore').css({ opacity: 0 });
            }
        }
    })
}

function genFilterData(prod, entity, rank, status,productType,council, province, district){
    let data = {
    };
    if (prod != ''){
        data.product = prod;
    }
    if (entity != ''){
        data.entity = entity;
    }
    if (rank != ''){
        data.rank = rank;
    }
    if (status != ''){
        data.status = status;
    }
    if (productType != ''){
        data.productType = productType;
    }
    if (council != ''){
        data.council = council;
    }
    if (province != ''){
        data.province = province;
    }
    if (district != ''){
        data.district = district;
    }

    return data;
}

function onmouseovers(id) {
    $(`#${id}`).show()
}
function outclick(id) {
    $(`#${id}`).hide()
}

