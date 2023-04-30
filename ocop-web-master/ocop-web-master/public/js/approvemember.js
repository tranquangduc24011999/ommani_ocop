var objProvincials;
var objDistricts;
var objWards;
var cboDate = document.getElementById("cboDate");
var datepk1 = document.getElementById("datepk1");
var datepk2 = document.getElementById("datepk2");
var limit = 20;
var page = 1;
var working = false;
var isFiltered = false;
var isFirstLoad = true;
var total = 0;
var seen = 0;
var noData = false;

var currentKeyword;
var currentUserType;
var accountInfo;
var idProvncial;
var provncial;
var idDis;
var Dis;
var firstTimeLoad = true;

$(window).scroll(function() {
    if ($(this).scrollTop() + 1 >= $('body').height() - $(window).height()) {
        if(noData) {
            return;
        }

        // if(isFiltered && idProvncial) {
        //     return;
        // }

        if (working == false) {
            working = true;
            $("#btnLoadMore").trigger("click");
            // load();
        }
    }
})

function getTotalMembers() {
    let url = '/getMembernotactive?total=true';
    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            if(data) {
                total = data.total.total;
                // $('#total').html(total);
            }
        }
    })
}

function load() {
    if(isFirstLoad) {
        swal({
            title: "Đang tải thông tin!",
            imageUrl: '/img/Curve-Loading.gif',
            text: "Xin vui lòng chờ trong giây lát ...",
            showConfirmButton: false
        });
    }
    let url = `/getFilterMember?limit=${limit}&page=${page}`;
    if(currentKeyword && currentKeyword != '') {
        url += `&searchKeyword=${currentKeyword}`
    }
    if(currentUserType && currentUserType != '') {
        url += `&userType=${currentUserType}`
    }
    if(idProvncial && idProvncial != 0) {
        url += `&provinceId=${idProvncial}`
    }
    if(idDis && idDis != 0) {
        url += `&districtId=${idDis}`
    }
    $.ajax({
        url: url,
        Type: "GET",
        success: function(ret) {
            if (ret.length > 0 || page == 1) {
                if(isFirstLoad && ret.length < limit) {
                    $('#btnLoadMore').css({ opacity: 0 });
                    // $('#seen').html(ret.length);
                    drawmember(ret);
                    isFirstLoad = false;
                    Swal.close();
                    return;
                }

                if(ret.length < limit) {
                    $("#btnLoadMore").css({ opacity: 0 });
                }

                if(isFiltered) {
                    $(`#listProducts`).html('');
                    $("#btnLoadMore").css({ opacity: 0 });
                    drawmember(ret);
                    Swal.close();
                    return;
                }

                seen += ret.length;
                if(total - seen < limit) {
                    loadMoreNumber = total - seen;
                    if(loadMoreNumber < 0) {
                        loadMoreNumber = limit;
                    }
                }
                isFirstLoad = false;

                drawmember(ret)
                Swal.close();
            }else{
                if(isFirstLoad) {
                    noData = true;
                    $("#btnLoadMore").css({ opacity: 0 });
                    document.getElementById('listmember').innerHTML = `không có dữ liệu`;
                    isFirstLoad = false;
                }
                $("#btnLoadMore").css({ opacity: 0 });
                Swal.close();
            }
        }
    })
}

function getMembers(){
    if(isFirstLoad) {
        swal({
            title: "Đang tải thông tin!",
            imageUrl: '/img/Curve-Loading.gif',
            text: "Xin vui lòng chờ trong giây lát ...",
            showConfirmButton: false
        });
    }
    let url = `/getmemberspaging?limit=${limit}&page=${page}`;
    $.ajax({
        url: url,
        Type: "GET",
        success: function(ret) {
            if (ret.length > 0 || page == 1) {
                if(isFirstLoad && ret.length < limit) {
                    $('#btnLoadMore').css({ opacity: 0 });
                    // $('#seen').html(ret.length);
                    drawMember(ret);
                    isFirstLoad = false;
                    Swal.close();
                    return;
                }

                if(ret.length < limit) {
                    $("#btnLoadMore").css({ opacity: 0 });
                }

                if(isFiltered) {
                    $(`#listProducts`).html('');
                    $("#btnLoadMore").css({ opacity: 0 });
                    drawMember(ret);
                    Swal.close();
                    return;
                }

                seen += ret.length;
                if(total - seen < limit) {
                    loadMoreNumber = total - seen;
                    if(loadMoreNumber < 0) {
                        loadMoreNumber = limit;
                    }
                }
                isFirstLoad = false;

                drawMember(ret)
                Swal.close();
            }else{
                if(isFirstLoad) {
                    noData = true;
                    $("#btnLoadMore").css({ opacity: 0 });
                    document.getElementById('listmember').innerHTML = `không có dữ liệu`;
                    isFirstLoad = false;
                }
                $("#btnLoadMore").css({ opacity: 0 });
                Swal.close();
            }
        }
    })
}

function drawMember(data){
    if(page == 1) {
        document.getElementById('listmember').innerHTML = ``
    }
    let type
    for (let i = 0; i < data.length; i++) {
        if(data[i].role=="EXAMINER"){
            type="Cán bộ chấm"
        }else if(data[i].role=="MANAGER"){
            type="Quản lý"
        } else if(data[i].role=="HELPTEAM") {
            type = "Tổ giúp việc"
        }
        let html = ` 
        <div class="col-md-3 mt-3">
                <div class="divBor">
                    <div style="padding: 24px;text-align:center">
                        <img src="${data[i].image ? data[i].image:"images/noavatar.png"}" width="64px" height="64px"
                            style="border-radius:100%;">
                    </div>
                    <div style="text-align: center;">
                        <label class="nameMember">${data[i].name ? data[i].name:''}</label>
                        <p class="subtitile">${data[i].phone ? data[i].phone:''}</p>
                        <p class="subtitile">${data[i].email ? data[i].email:''}</p>
                        <p class="subtitile"><span class="label label-info">${type}</span></p>
                    </div>
                    <div style="float: right;" class="mt-3 mb-3">
                      <a  href="#" class="btn btn-sm btn-success ${data[i].status ==1 ? 'disabled' : '' } " onclick="change(\'${data[i].id}\',\'${data[i].role}\',\'1\')" style="border-radius: 7px;background-color: #049252;">Duyệt</a>
                      <a href="#" class="btn btn-sm btn-success" onclick="change(\'${data[i].id}\',\'${data[i].role}\',\'0\')" style="margin-right: 15px;    border-radius: 7px;background-color: #dee2e6;border-color: #dee2e6;color: #4f5467;">Hủy</a>
                    </div>
                </div>
        </div>
        `
        $('#listmember').append(html);
    }
    if(data.length < limit) {
        $("#btnLoadMore").css({ opacity: 0 });
    } else {
        $("#btnLoadMore").css({ opacity: 1 });
    }
    page++;
    working = false;
}

function drawmember(data) {
    if(page == 1) {
        document.getElementById('listmember').innerHTML = ``
    }
    var type;
    for (let i = 0; i < data.length; i++) {
        if(data[i].roles[0].role_name=="EXAMINER"){
            type="Cán bộ chấm"
        }else if(data[i].roles[0].role_name==="MANAGER"){
            type="Quản lý"
        } else if(data[i].roles[0].role_name=="HELPTEAM") {
            type = "Tổ giúp việc"
        }
        let html = ` 
        <div class="col-md-3 mt-3">
                <div class="divBor">
                    <div style="padding: 24px;text-align:center">
                        <img src="${data[i].ImgUrl?data[i].avatarUrl:"images/noavatar.png"}" width="64px" height="64px"
                            style="border-radius:100%;">
                    </div>
                    <div style="text-align: center;">
                        <label class="nameMember">${data[i].name ? data[i].name:''}</label>
                        <p class="subtitile">${data[i].phone ? data[i].phone:''}</p>
                        <p class="subtitile">${data[i].email ? data[i].email:''}</p>
                        <p class="subtitile"><span class="label label-info">${type}</span></p>
                    </div>
                    <div style="float: right;" class="mt-3 mb-3">
                        <a  href="#" class="btn btn-sm btn-success ${data[i].status ==1 ? 'disabled' : '' } " onclick="change(\'${data[i].id}\',\'${data[i].roles[0].role_name}\',\'1\')" style="border-radius: 7px;background-color: #049252;">Duyệt</a>
                        <a href="#" class="btn btn-sm btn-success" onclick="change(\'${data[i].id}\',\'${data[i].roles[0].role_name}\',\'0\')" style="margin-right: 15px;    border-radius: 7px;background-color: #dee2e6;border-color: #dee2e6;color: #4f5467;">Hủy</a>
                    </div>
                </div>
        </div>
        `
        $('#listmember').append(html);
    }
    if(data.length < limit) {
        $("#btnLoadMore").css({ opacity: 0 });
    } else {
        $("#btnLoadMore").css({ opacity: 1 });
    }
    page++;
    working = false;
}

function change(id, type, status) {
    var _token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: "updatememberstatus",
        type: "POST",
        data: { _token: _token, id: id, type: type, status: status },
        success: function(ret) {
            if (ret) {
                if (status == '1') {
                    Swal.fire({
                        type: 'success',
                        title: '',
                        text: 'Bạn đã duyệt thành viên thành công',
                    });
                } else {
                    Swal.fire({
                        type: 'success',
                        title: '',
                        text: 'Bạn đã hủy thành viên thành công',
                    });
                }
                document.getElementById('listmember').innerHTML = ``
                page = 1
                //getMembers();
                load();
            }
        }
    })
}
function cboDateChange(event) {
    if (event.selectedIndex == '5') {
        document.getElementById("date1").style.display = 'inline';
        document.getElementById("date2").style.display = 'inline';
    } else {
        document.getElementById("date1").style.display = 'none';
        document.getElementById("date2").style.display = 'none';
    }
}
function LoadCboProvincials() {
    var selectElemRef = document.getElementById("cboProvincial");
    nof_loadAdress('pro', 1);
    $.ajax({
        dataType: "json",
        url: "/getProvincial",
        data: objProvincials,
        success: function (data) {
			objProvincials = data;
            while (selectElemRef.length > 0) {
                selectElemRef.remove(0);
            }
            if (objProvincials.length == 1) {
                var o = new Option(objProvincials[0].Name, `${objProvincials[0]._id}`);
                $("#cboProvincial").append(o);
                LoadCboDistricts(objProvincials[0]._id, objProvincials[0].Name);
            }
            else {
                var b=new Option("Tất cả Tỉnh/TP", "0")
                $("#cboProvincial").append(b);
                for (var i = 1, len = objProvincials.length + 1; i < len; ++i) {
                    var o = new Option(objProvincials[i - 1].Name, `${objProvincials[i-1]._id}`);
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
                if(accountInfo.level > 0) {
                    $("#cboProvincial").prop("disabled", true);
                }
            }
        },
        error: function(err) {
            if (err.responseText == 'Unauthorized') {
                AlertWarning("Bạn đã bị time out", '', 'error');
                window.location.href = 'login.html';
            }
        }
    });
};

function LoadCboDistricts(idProvincial, name) {
    nof_loadAdress('district', 1);
    var gr = document.createElement("OPTGROUP");
    gr.id = 'Pro' + idProvincial;
    $.ajax({
        url:"/getdistrictbyprovince",
        type: "POST",
        data: {
            province_id: idProvincial,
            _token: csrfHidden
        },
        dataType: "json",
        success: function(data) {
            objDistricts = data;
            if (objDistricts.length == 1) {
                var o = new Option(objDistricts[0].name, objDistricts[0].id);
                gr.append(o);
            } else {
                if (cboDistricts.length == 0) cboDistricts.options[0] = new Option("Tất cả Quận/Huyện", "0");
                for (var i = 1, len = objDistricts.length + 1; i < len; ++i) {
                    var o = new Option(objDistricts[i - 1].name, objDistricts[i - 1].id);
                    gr.append(o);
                }
            }
            cboDistricts.append(gr);
            nof_loadAdress('district', 0);
            if (data.length == 1) {
                $('#cboDistricts').select2('val', [data[0].id]);
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
                // if(uLevel > 1) {
                //     $("#cboDistricts").prop("disabled", true);
                // }
            }
        },
        error: function(err) {
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
        return $('#cboWards').find(`[value=${element}]`).length == 1;
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
$(document).ready(function(){
    $('#btnLoadMore').css({ opacity: 0 });
    //getAccountInfo();
	$('#cboProvincial').select2()
    $('#cboDistricts').select2()
	// $('#Status').select2()
    load();
    //getMembers();
	$('#cboProvincial').on("select2:select", function (e) {
        // isFiltered = true;
        page = 1;
		let data=$('#cboProvincial').select2('data')
		if (e.params) {
            if (e.params.data.id == '0') {
                idProvncial = undefined;
                idDis = undefined;
                $('#cboProvincial').select2('val', ['0']);
                $('#cboDistricts')[0].innerHTML = `<option value="0">Tất cả Quận/Huyện</option>`
                $('#cboDistricts').select2('val', ['0']);
            } else {
                idProvncial = e.params.data.id
				LoadCboDistricts(e.params.data.id, e.params.data.text);
            }
            // if(firstTimeLoad && uLevel <= 1) {
            //     firstTimeLoad = false;
            // } else {
            //     load();
            // }
        }

    });
    $('#cboDistricts').on("select2:select", function(e) {
        // isFiltered = true;
        page = 1;
        let data = $('#cboDistricts').select2('data')
        if (e.params) {
            if (e.params.data.id == '0') {
                $('#cboDistricts').select2('val', ['0']);
                idDis = undefined
            } else {
                idDis = e.params.data.id
            }
            if(firstTimeLoad && uLevel <= 2) {
                firstTimeLoad = false;
            } else {
                load();
            }
        }
    });
    $(`#searchBtn`).on('click', (event) => {
        isFiltered = true;
        page = 1;
        event.preventDefault();
        currentKeyword = $(`#keyword`).val().trim();
        load();
    });
    $(`#userTypeSelector`).on('change', (event) => {
        isFiltered = true;
        page = 1;
        if(event.target.value != 0) {
            currentUserType = event.target.value;
        } else {
            currentUserType = undefined;
        }
        load();
    });
    $('#btnLoadMore').click(function(){
        $('#btnLoadMore').css({ 'padding': '8px 64px' });
        $('#btnLoadMore').html('<i class="fas fa-sync fa-spin text-white"></i>');
        load();
    });
})

const getAccountInfo = () => {
    $.ajax({
        type: `GET`,
        url: `/getAccountInfo`,
        success: (data) => {
            if (data.data) {
                accountInfo = data.data;
                if (accountInfo.level == 1) {
                    idProvncial =  _.get(accountInfo, "addressInfo.provinceId", '') ;
                    provncial =  _.get(accountInfo, "addressInfo.provinceName", '');
                } else if (accountInfo.level == 2) {
                    idProvncial = _.get(accountInfo, "addressInfo.provinceId", '') ;
                    provncial =  _.get(accountInfo, "addressInfo.provinceName", '');
                    idDis =   _.get(accountInfo, "addressInfo.districtId", '');
                    Dis =  _.get(accountInfo, "addressInfo.districtName", '');
                }
                LoadCboProvincials();
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

function getQuery() {
    var d = {};
    let search = "";
    d.date = getDate();
    if ($('#keyword').val() != "" && $('#keyword').val() != undefined && $('#keyword').is(':visible'))
        d.name = $("#keyword").val()
    else {
        d.name = ''
    }
    d.type = $('#TypePos').select2('val').length && $('#TypePos').select2('val')[0] != '0' ? JSON.stringify({
        $in: $('#TypePos').select2('val')
    }) : '';
    d.provinceId = $('#cboProvincial').select2('val').length && $('#cboProvincial').select2('val')[0] != '0' ? JSON.stringify({
        $in: $('#cboProvincial').select2('val')
    }) : '';
    d.districtId = $('#cboDistricts').select2('val').length && $('#cboDistricts').select2('val')[0] != '0' ? JSON.stringify({
        $in: $('#cboDistricts').select2('val')
    }) : '';
    d.wardId = $('#cboWards').select2('val').length && $('#cboWards').select2('val')[0] != '0' ? JSON.stringify({
        $in: $('#cboWards').select2('val')
    }) : '';
    return d;
}

function getDate() {
    value = cboDate.value;
    var data = {};
    var d = new Date();
    data.date1 = new Date();
    data.date2 = new Date();
    if (value == '0' || !$(cboDate).is(':visible'))
        return '';
    if (value == '1') {
        data.date1.setDate(d.getDate());
        data.date2.setDate(d.getDate() + 1);
    }
    if (value == '2') {
        data.date1.setDate(d.getDate() - 1);
        data.date2.setDate(d.getDate());
    }
    if (value == '3') {
        data.date1.setDate(1);
        data.date2.setDate(d.getDate() + 1);
    }
    if (value == '4') {
        data.date1.setDate(1);
        data.date1.setMonth(d.getMonth() - 1);
        data.date2.setDate(1);
    }
    if (value == '5') {
        data.date1 = new Date(datepk1.value);
        data.date2 = new Date(datepk2.value);
    }
    data.date1.setHours(0);
    data.date1.setMinutes(0);
    data.date2.setHours(0);
    data.date2.setMinutes(0);
    data.date1 = data.date1.toISOString();
    data.date2 = data.date2.toISOString();
    return data;
}

function fillter() {
    let data = getQuery()
    $.ajax({
        url: "fillteMember",
        type: "GET",
        data: data,
        success: function(ret) {
            if (ret.length > 0) {
                drawmember(ret)
            } else {
                document.getElementById('listmember').innerHTML = ``
            }
        }
    })
}
