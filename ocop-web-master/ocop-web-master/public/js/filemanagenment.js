var objProvincials;
var objDistricts;
var objWards;
var cboDate = document.getElementById("cboDate");
var datepk1 = document.getElementById("datepk1");
var datepk2 = document.getElementById("datepk2");
var page = 1;
var limit = 10;
var working = false;
var loading = $('.loading');
var isFirstLoad = true;
var isFiltered = false;
var total = 0;
var seen = 0;
var loadMoreNumber = 10;
var noData = false;
let isDone = false;
let idProvncial = ""
let provncial = ""
let idDis = ""
let Dis = ""
let memberId;
let checkinser = 0
let idcheck
let group
let idExcheck = []
let queryStar;
let productsInfoId
let uploadedDropzone = [];
var ImgsArray = []
let currentProductId = null
let currentTotal = null
let clickBack = null
let oldFilesArr = null
let listIdProof = []
let listIdProofIsCheck = []
let productsInfoIdAllow
let idAllow = false
let levelAllow = false
let checkClickSaveFilesData = null
if (!approveFiles) {
    var approveFiles = false;
    $(`#statusSection`).show();
}
let level
$(document).ready(function () {
    // LoadProof()
    //getTotalProducts();
    $('#btnLoadMore').click(function (e) {
        e.preventDefault();
        $('#btnLoadMore').html('<i class="fas fa-sync fa-spin"></i>');
        $('#btnLoadMore').css({ 'padding': '8px 64px' });
        //SearchProductsByMembers('ALL');
        getProducts();
    })
    getAccountInfo()
    //getevc()
    if (new Date().getMonth().toLocaleString().split('').length == 1) {
        valMonth = `0${new Date().getMonth() + 1}`
    } else {
        valMonth = `${new Date().getMonth() + 1}`
    }
    if (new Date().getDate().toLocaleString().split('').length == 1) {
        valDate = `0${new Date().getDate()}`
    } else {
        valDate = `${new Date().getDate()}`
    }
    $(`#date-selector`).val(
        `${new Date().getFullYear()}-${valMonth}-${valDate}`
    );
    $(`#dateEndUpProof`).val(
        `${new Date().getFullYear()}-${valMonth}-${valDate}`
    );
    // $('#step1').modal('show');
    //getAccountInfo()
    
    $('#cboProvincial').select2()
    $('#cboDistricts').select2()
    $('#cboWards').select2()
    $('#Status').select2()
    if (approveFiles) {
        $('#Status').val('Done').trigger('change');
        $('#Status').prop('disabled', true);
    }

    if (uLevel == 2 && uProvince.val() != ''){
        $('#cboProvincial').prop('disabled', true);
        LoadCboDistricts($('#cboProvincial').val(), '')
    }
    if (uLevel == 3 && uDistrict.val() != ''){
        $('#uDistrict').prop('disabled', true);
        LoadCboWards($('#uDistrict').val(), '')
    }
    $(`#ranking-select`).on('change', (event) => {
        if (event.target.value == 0) {
            queryStar = undefined;
        } else {
            queryStar = event.target.value;
        }
    });
    $('#cboProvincial').on("select2:select", function (e) {
        let data = $('#cboProvincial').select2('data')
        if (e.params) {
            if (e.params.data.id == '0') {
                $('#cboProvincial').select2('val', ['0']);
                cboDistricts.innerHTML = '';
                cboWards.innerHTML = '';
                $('#cboDistricts').select2('val', []);
                $('#cboWards').select2('val', []);
            } else if (data.length == 2 && data[0].id == '0') {
                $('#cboProvincial').select2('val', data[1].id);
                LoadCboDistricts(data[1].id, data[1].text);
            } else {
                LoadCboDistricts(e.params.data.id, e.params.data.text);
            }
        }
    });
    $('#cboDistricts').on("select2:select", function (e) {
        let data = $('#cboDistricts').select2('data')
        if (e.params) {
            if (e.params.data.id == '0') {
                $('#cboDistricts').select2('val', ['0']);
                cboWards.innerHTML = '';
                $('#cboWards').select2('val', []);
                $('#cboBranch').select2('val', []);
            } else if (data.length == 2 && data[0].id == '0') {
                $('#cboDistricts').select2('val', data[1].id);
                LoadCboWards(data[1].id, data[1].text);
            } else {
                LoadCboWards(e.params.data.id, e.params.data.text);
            }
        }
    });
    $('#cboWards').on("select2:select", function (e) {
        let data = $('#cboWards').select2('data')
        if (e.added) {
            if (e.added.id == '0') {
                $('#cboWards').select2('val', ['0']);
                cboBranch.innerHTML = '';
                $('#cboBranch').select2('val', []);
            } else if (data.length == 2 && data[0].id == '0') {
                $('#cboWards').select2('val', data[1].id);
                LoadCboBranch(data[1].id, data[1].text);
            } else {
                LoadCboBranch(e.added.id, e.added.text);
            }
        }
    });
    $('#cboProvincial').on("select2:unselect", function (e) {
        deleteDistrictByProvincial(e.params.data.id);
    });
    $('#cboDistricts').on("select2:unselect", function (e) {
        deleteWardByDistrict(e.params.data.id);
    });

    // if(accontInformation.level === 0) {
    //     let buttons = $('.update-result-button')
    //     console.log('buttons: ', buttons);
    // }
})

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

function resetDefault (limitResult) {
    page = 1;
    $(`#divListProduct`).html('');
    if (limitResult) {
        limit = limitResult;
        // $("#btnLoadMore").css({ opacity: 1 });

    } else {
        limit = 0;
        $("#btnLoadMore").css({ opacity: 0 });
    }
}

function getTotalProducts () {
    let url = '/getproductbyProvincialchekmanager/ALL?total=true';
    if (approveFiles) {
        url += `&sort=1&status=Done`
    }

    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            if (data) {
                total = data.total;
                // $('#total').html(total);
            }
        }
    })
}


const getAccountInfo = () => {
    $.ajax({
        type: `GET`,
        url: `/getaccountinfo`,
        success: (data) => {
            if (data) {
                acc = data;
                /*
                memberId = acc._id;
                SearchProductsByMembers('ALL');
                if (acc.level == 1) {
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
                } else if (acc.level == 2) {
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
                } else {
                    $('#isRank').css({ "display": "" })
                    document.getElementById('Status').innerHTML = `
                        <option value="districtRanked">Cấp huyện đã xếp hạng</option>
                        <option value="provinceRanked">Cấp tỉnh đã xếp hạng</option>
                        <option value="Ranked">Đã xếp hạng</option>
                        <option value="Submiting">Đang nộp</option>
                        <option value="Done">Hoàn thành</option>

                        <option value="Fail">Không đạt</option>
                        <option value="Preparing">Chưa nộp</option>
                        <option value="Waitting">Chờ chấm</option>
                    `
                }
                LoadCboProvincials()
                */
                getProducts();
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

function getProducts(){
    if (isFirstLoad) {
        swal({
            title: "Đang tải thông tin!",
            imageUrl: '/img/Curve-Loading.gif',
            text: "Xin vui lòng chờ trong giây lát ...",
            showConfirmButton: false
        });
    }

    let url = "/getproductbylevelpaging"+ `?page=${page}&limit=${limit}`

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
                $('#btnLoadMore').text(`Xem thêm (${loadMoreNumber})`);
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

function drawProduct (objProducts) {
    // var divListProduct = document.getElementById("divListProduct");
    var divListProduct = $("#divListProduct");
    if (objProducts.length < limit) {
        $('#btnLoadMore').css({ opacity: 0 });
    } else {
        $('#btnLoadMore').css({ opacity: 1 });
    }
    var html = '';
    // divListProduct.innerHTML = html;
    var count = 0;
    var submitingValue = 0;
    var doneValue = 0;
    var rankedValue = 0;
    var failValue = 0;
    var preparingValue = 0;
    let Img = ['.jpg', '.gif', '.png', '.PNG', '.JPG', '.GIF', '.jfif', '.pdf', '.jpeg', '.JPEG']
    for (i = 0; i < objProducts.length; i++) {
        var status = '';
        console.log(objProducts[i].status);
        if (objProducts[i].status) {
            let confirm = false
            let teamplate = ``
            count = count + 1;
            if (objProducts[i].status == 'SUBMITTING') {
                status = '<span class="label label-primary">Đang nộp</span>';
                submitingValue = submitingValue + 1;
                if (acc.level == 3 && acc.roles[0].name === 'MANAGER') {
                    teamplate = ` <div style="position: absolute;right: 16px;top: 20px;" >
                    <a href="##" onclick="onmouseovers(\'${objProducts[i].id}\')">
                    </a>
                    <div style="background-color: rgb(3, 146, 82);
                    text-align: center; text-align: center;display:none" id="${objProducts[i].id}">
                    <a href="##" onclick="outclick(\'${objProducts[i].id}\')" style="color: white;font-weight: 600;">x</a>
                    </div>
                        <div class="dropdown">
                                <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <a href="javascript:void(0)"><img id="accountAvartar" src="images/grey.png" srcset="images/grey2x.png 2x,images/grey3x.png 3x" class="Grey"></a>
                                    </div>
                                    <div class="dropdown-menu animated flipInY" style="top: 60px!important; left: -80px;background-color: rgb(3, 146, 82);text-align: center;">
                                        <a href="/editproduct?created_userid=${objProducts[i].user_id}&product_id=${objProducts[i].id}&entity_id=${objProducts[i].entity_id}" target="_blank" class="dropdown-item-tool" style="color: #ffffff;font-weight: bold;">Sửa sản phẩm</a>
                                    </div>
                        </div>
                    </div>`
                }
            } else if (objProducts[i].status == 'DONE') {
                status = '<span class="label label-info">Hoàn thành</span>';
                doneValue = doneValue + 1;
                if (objProducts[i].confirm && objProducts[i].confirm == 1) {
                    confirm = true
                }
                if (acc.level == 3 && acc.roles[0].name === 'MANAGER') {
                    teamplate = ` <div style="position: absolute;right: 16px;top: 20px;" >
                    <a href="##" onclick="onmouseovers(\'${objProducts[i].id}\')">
                    </a>
                    <div style="background-color: rgb(3, 146, 82);
                    text-align: center; text-align: center;display:none" id="${objProducts[i].id}">
                    <a href="##" onclick="outclick(\'${objProducts[i].id}\')" style="color: white;font-weight: 600;">x</a>
                    </div>
                        <div class="dropdown">
                                <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <a href="javascript:void(0)"><img id="accountAvartar" src="images/grey.png" srcset="images/grey2x.png 2x,images/grey3x.png 3x" class="Grey"></a>
                                    </div>
                                    <div class="dropdown-menu animated flipInY" style="top: 60px!important; left: -80px;background-color: rgb(3, 146, 82);text-align: center;">
                                        <a href="/editproduct?created_userid=${objProducts[i].user_id}&product_id=${objProducts[i].id}&entity_id=${objProducts[i].entity_id}" target="_blank" class="dropdown-item-tool" style="color: #ffffff;font-weight: bold;">Sửa sản phẩm</a>
                                    </div>
                        </div>
                    </div>`
                }
            } else if (objProducts[i].status == 'RANKED') {
                status = '<span class="label label-success">Đã xếp hạng</span>';
                rankedValue = rankedValue + 1;
                if (acc.level == 3 && acc.roles[0].name === 'MANAGER') {
                    teamplate = ` <div style="position: absolute;right: 16px;top: 20px;" >
                    <a href="##" onclick="onmouseovers(\'${objProducts[i].id}\')">
                    </a>
                    <div style="background-color: rgb(3, 146, 82);
                    text-align: center; text-align: center;display:none" id="${objProducts[i].id}">
                    <a href="##" onclick="outclick(\'${objProducts[i].id}\')" style="color: white;font-weight: 600;">x</a>
                    </div>
                        <div class="dropdown">
                                <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <a href="javascript:void(0)"><img id="accountAvartar" src="images/grey.png" srcset="images/grey2x.png 2x,images/grey3x.png 3x" class="Grey"></a>
                                    </div>
                                    <div class="dropdown-menu animated flipInY" style="top: 60px!important; left: -80px;background-color: rgb(3, 146, 82);text-align: center;">
                                        <a href="/editproduct?created_userid=${objProducts[i].user_id}&product_id=${objProducts[i].id}&entity_id=${objProducts[i].entity_id}" target="_blank" class="dropdown-item-tool" style="color: #ffffff;font-weight: bold;">Sửa sản phẩm</a>
                                    </div>
                        </div>
                    </div>`
                }
            } else if (objProducts[i].status == 'FAIL') {
                status = '<span class="label label-danger">Không đạt</span>';
                failValue = failValue + 1;
                if (acc.level == 3 && acc.roles[0].name === 'MANAGER') {
                    teamplate = ` <div style="position: absolute;right: 16px;top: 20px;" >
                    <a href="##" onclick="onmouseovers(\'${objProducts[i]._id}\')">
                    </a>
                    <div style="background-color: rgb(3, 146, 82);
                    text-align: center; text-align: center;display:none" id="${objProducts[i]._id}">
                    <a href="##" onclick="outclick(\'${objProducts[i]._id}\')" style="color: white;font-weight: 600;">x</a>
                    </div>
                        <div class="dropdown">
                                <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <a href="javascript:void(0)"><img id="accountAvartar" src="images/grey.png" srcset="images/grey2x.png 2x,images/grey3x.png 3x" class="Grey"></a>
                                    </div>
                                    <div class="dropdown-menu animated flipInY" style="top: 60px!important; left: -80px;background-color: rgb(3, 146, 82);text-align: center;">
                                        <a href="/editproduct?created_userid=${objProducts[i].user_id}&product_id=${objProducts[i].id}&entity_id=${objProducts[i].entity_id}" target="_blank" class="dropdown-item-tool" style="color: #ffffff;font-weight: bold;">Sửa sản phẩm</a>
                                    </div>
                        </div>
                    </div>`
                }
            } else if (objProducts[i].status === 'PREPARING') {
                status = '<span class="label label-inverse">Chưa nộp</span>';
                preparingValue = preparingValue + 1;
                if (acc.level == 3 && acc.roles[0].name === 'MANAGER') {
                    teamplate = ` <div style="position: absolute;right: 16px;top: 20px;" >
                    <a href="##" onclick="onmouseovers(\'${objProducts[i].id}\')">
                    </a>
                    <div style="background-color: rgb(3, 146, 82);
                    text-align: center; text-align: center;display:none" id="${objProducts[i].id}">
                    <a href="##" onclick="outclick(\'${objProducts[i].id}\')" style="color: white;font-weight: 600;">x</a>
                    </div>
                        <div class="dropdown">
                                <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <a href="javascript:void(0)"><img id="accountAvartar" src="images/grey.png" srcset="images/grey2x.png 2x,images/grey3x.png 3x" class="Grey"></a>
                                    </div>
                                    <div class="dropdown-menu animated flipInY" style="top: 60px!important; left: -80px;background-color: rgb(3, 146, 82);text-align: center;">
                                        <a href="/editproduct?created_userid=${objProducts[i].user_id}&product_id=${objProducts[i].id}&entity_id=${objProducts[i].entity_id}" target="_blank" class="dropdown-item-tool" style="color: #ffffff;font-weight: bold;">Sửa sản phẩm</a>
                                    </div>
                        </div>
                    </div>`
                }

            } else if (objProducts[i].status == 'WAITTING') {

                status = '<span class="label label-light" style="background-color: #7f7c7c">Chờ chấm</span>';
                if (acc.level == 3 && acc.roles[0].name === 'MANAGER') {
                    teamplate = ` <div style="position: absolute;right: 16px;top: 20px;" >
                    <a href="##" onclick="onmouseovers(\'${objProducts[i].id}\')">
                    </a>
                    <div style="background-color: rgb(3, 146, 82);
                    text-align: center; text-align: center;display:none" id="${objProducts[i].id}">
                    <a href="##" onclick="outclick(\'${objProducts[i].id}\')" style="color: white;font-weight: 600;">x</a>
                    </div>
                        <div class="dropdown">
                                <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <a href="javascript:void(0)"><img id="accountAvartar" src="images/grey.png" srcset="images/grey2x.png 2x,images/grey3x.png 3x" class="Grey"></a>
                                    </div>
                                    <div class="dropdown-menu animated flipInY" style="top: 60px!important; left: -80px;background-color: rgb(3, 146, 82);text-align: center;">
                                        <a href="##" onclick="addcounlis(\'${objProducts[i].id}\')" class="dropdown-item-tool" style="color: #ffffff;font-weight: bold;">Sửa sản phẩm</a>
                                    </div>
                        </div>
                    </div>`
                }
            } else if (objProducts[i].status == 'DISTRICTRANKED') {
                status = '<span class="label label-success">Cấp huyện đã xếp hạng</span>';
                if (acc.level == 3 && acc.roles[0].name === 'MANAGER') {
                    teamplate = ` <div style="position: absolute;right: 16px;top: 20px;" >
                    <a href="##" onclick="onmouseovers(\'${objProducts[i].id}\')">
                    </a>
                    <div style="background-color: rgb(3, 146, 82);
                    text-align: center; text-align: center;display:none" id="${objProducts[i].id}">
                    <a href="##" onclick="outclick(\'${objProducts[i].id}\')" style="color: white;font-weight: 600;">x</a>
                    </div>
                        <div class="dropdown">
                                <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <a href="javascript:void(0)"><img id="accountAvartar" src="images/grey.png" srcset="images/grey2x.png 2x,images/grey3x.png 3x" class="Grey"></a>
                                    </div>
                                    <div class="dropdown-menu animated flipInY" style="top: 60px!important; left: -80px;background-color: rgb(3, 146, 82);text-align: center;">
                                        <a href="/editproduct?created_userid=${objProducts[i].user_id}&product_id=${objProducts[i].id}&entity_id=${objProducts[i].entity_id}" target="_blank" class="dropdown-item-tool" style="color: #ffffff;font-weight: bold;">Sửa sản phẩm</a>
                                    </div>
                        </div>
                    </div>`
                }
            } else if (objProducts[i].status == 'PROVINCERANKED') {
                status = '<span class="label label-success">Cấp tỉnh đã xếp hạng</span>';
                if (acc.level == 3 && acc.roles[0].name === 'MANAGER') {
                    teamplate = ` <div style="position: absolute;right: 16px;top: 20px;" >
                    <a href="##" onclick="onmouseovers(\'${objProducts[i].id}\')">
                    </a>
                    <div style="background-color: rgb(3, 146, 82);
                    text-align: center; text-align: center;display:none" id="${objProducts[i].id}">
                    <a href="##" onclick="outclick(\'${objProducts[i].id}\')" style="color: white;font-weight: 600;">x</a>
                    </div>
                        <div class="dropdown">
                                <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <a href="javascript:void(0)"><img id="accountAvartar" src="images/grey.png" srcset="images/grey2x.png 2x,images/grey3x.png 3x" class="Grey"></a>
                                    </div>
                                    <div class="dropdown-menu animated flipInY" style="top: 60px!important; left: -80px;background-color: rgb(3, 146, 82);text-align: center;">
                                        <a href="/editproduct?created_userid=${objProducts[i].user_id}&product_id=${objProducts[i].id}&entity_id=${objProducts[i].entity_id}" target="_blank" class="dropdown-item-tool" style="color: #ffffff;font-weight: bold;">Sửa sản phẩm</a>
                                    </div>
                        </div>
                    </div>`
                }
            }
            var options = {
                hour12: false
            };
            var date = new Date(objProducts[i].created_at);
            var imgUrl = '/img/logoocop.png';
            if (objProducts[i].image) {
                if (hasExtension(objProducts[i].image, Img)) {
                    imgUrl = objProducts[i].image;
                }
            }
            let viewHTML = '<div style="    padding: 25px;"></div>'
            if (objProducts[i].status !== 'SUBMITTING' && objProducts[i].status !== 'PREPARING') {
                viewHTML = `<div class="col-12 " style="padding: 12px">
 
                                </div>`
            }
            // (objProducts[i].status === 'districtRanked' || objProducts[i].status === 'provinceRanked') &&
            html = html + `
            <div class="col-sm-6" >
                 ${teamplate}
                <div style="color:black;background-color:white;border-radius: 8px;"  >
                <div class="row container bg-white mt-3 member-info-wrap" style="padding: 18px 5px; margin: 0px; border-radius: 12px">
                    <a class="row col-12" href="/detailfile?product_id=${objProducts[i].id}&product_type=${objProducts[i].product_type}&created_userid=${objProducts[i].user_id}">
                        <div class="col-12 col-sm-2 text-center" style="margin-bottom:16px">
                            <img src="` + imgUrl + `" class="img-circle" style="width: 50px; height: 50px" alt="ảnh">
                        </div>
                        <div class="col-12 col-sm-6" style="margin-bottom:5px">
                            <p style="margin-bottom: 3px; font-weight: bold; font-stretch: normal;
                            font-style: normal; line-height: 1.29; letter-spacing: normal;color: black">` + objProducts[i].name + ` ${confirm ? '<span class="Ch-tch">Đã duyệt</span>' : ''}</p>
                            <p style="margin-bottom: 0px; color: black; font-weight: normal">${objProducts[i].code ? 'Mã sản phẩm: ' + objProducts[i].code : ''}</p>
                            <p style="margin-bottom: 0px; color: black; font-weight: normal"> ${'Tên chủ thể: ' + objProducts[i].entity_name} </p>
                            <p style="margin-bottom: 0px; color: black; font-weight: normal">` + date.toLocaleString("en-GB", options) + ` </p>
                        </div>
                        <div class="col-12 col-sm-4 text-left">
                            ${convertStatus(objProducts[i].status)}
                        </div>

                    </a>
                    ${viewHTML}
                    
                </div>
                </div>
            </div>
            `

        }
    }
    if (isFiltered) {
        $('#btnLoadMore').css({ opacity: 0 });
    }
    $('#divListProduct').append(html);
    if (isFirstLoad && !isFiltered) {
        $('#btnLoadMore').css({ opacity: 1 });
    }
    page++;
    working = false;
    Swal.close();
}

function SearchProductsByMembers (provincialValue) {
    if (isFirstLoad) {
        swal({
            title: "Đang tải thông tin!",
            imageUrl: '/img/Curve-Loading.gif',
            text: "Xin vui lòng chờ trong giây lát ...",
            showConfirmButton: false
        });
    }
    // document.getElementById("divListProduct").innerHTML = `<div class="loader">
    // <div class="loader__figure"></div>
    // <p class="loader__label"><img src="/assets/imgs/tgtext-min.png" alt="homepage" class="dark-logo" style="height: 15px;"/></p>
    // </div>`;
    let url = "/getproductbyProvincialchekmanager/" + provincialValue + "?sort=1" + `&page=${page}&limit=${limit}`
    if (approveFiles) {
        url += `&status=Done`
    }
    $.ajax({
        url: url,
        dataType: 'json',
        success: function (data) {
            drawTableProduct(data);
            if (data.length > 0) {
                if (isFirstLoad && data.length < limit) {
                    $('#btnLoadMore').css({ opacity: 0 });
                    // $('#seen').html(data.length);
                    isFirstLoad = false;
                    return;
                }

                if (data.length < limit) {
                    $('#btnLoadMore').css({ opacity: 0 });
                }
                seen += data.length;
                if (total - seen < limit) {
                    loadMoreNumber = total - seen;
                    if (loadMoreNumber < 0) {
                        loadMoreNumber = limit;
                    }
                    // $('#btnLoadMore').css({ opacity: 0 });
                }
                // $('#seen').html(seen);
                isFirstLoad = false;
                $('#btnLoadMore').css({ 'padding': '' });
                $('#btnLoadMore').text(`Xem thêm (${loadMoreNumber})`);
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
};

function drawTableProduct (objProducts) {
    // var divListProduct = document.getElementById("divListProduct");
    var divListProduct = $("#divListProduct");
    if (objProducts.length < limit) {
        $('#btnLoadMore').css({ opacity: 0 });
    } else {
        $('#btnLoadMore').css({ opacity: 1 });
    }
    var html = '';
    // divListProduct.innerHTML = html;
    var count = 0;
    var submitingValue = 0;
    var doneValue = 0;
    var rankedValue = 0;
    var failValue = 0;
    var preparingValue = 0;
    let Img = ['.jpg', '.gif', '.png', '.PNG', '.JPG', '.GIF', '.jfif', '.pdf', '.jpeg', '.JPEG']
    for (i = 0; i < objProducts.length; i++) {
        var status = '';
        if (objProducts[i].status) {
            let confirm = false
            let teamplate = ``
            count = count + 1;
            if (objProducts[i].status == 'Submiting') {
                status = '<span class="label label-primary">Đang nộp</span>';
                submitingValue = submitingValue + 1;
            } else if (objProducts[i].status == 'Done') {
                status = '<span class="label label-info">Hoàn thành</span>';
                doneValue = doneValue + 1;
                if (objProducts[i].confirm && objProducts[i].confirm == 1) {
                    confirm = true
                }
                // if (acc.level == 2) {
                //     teamplate = ` <div style="position: absolute;right: 16px;top: 20px;" >
                //     <a href="##" onclick="onmouseovers(\'${objProducts[i]._id}\')">
                //     </a>
                //     <div style="background-color: rgb(3, 146, 82);
                //     text-align: center; text-align: center;display:none;" id="${objProducts[i]._id}">
                //     <a href="##" onclick="outclick(\'${objProducts[i]._id}\')" style="color: white;font-weight: 600;">x</a>
                //     </div>
                //         <div class="dropdown">
                //                 <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                //                         <a href="javascript:void(0)"><img id="accountAvartar" src="img/grey.png" srcset="img/grey@2x.png 2x,img/grey@3x.png 3x" class="Grey"></a>
                //                     </div>
                //                     <div class="dropdown-menu animated flipInY" style="text-align: center;top: 60px!important; left: -80px; background-color: rgb(3, 146, 82);">
                //                         <a href="##" onclick="addcounlis(\'${objProducts[i]._id}\')" class="dropdown-item-tool" style="color: white;
                //                         font-weight: bold;">Tạo hội đồng</a>
                //                     </div>
                //         </div>
                //     </div>`
                // }
            } else if (objProducts[i].status == 'Ranked') {
                status = '<span class="label label-success">Đã xếp hạng</span>';
                rankedValue = rankedValue + 1;
            } else if (objProducts[i].status == 'Fail') {
                status = '<span class="label label-danger">Không đạt</span>';
                failValue = failValue + 1;
            } else if (objProducts[i].status == 'Preparing') {
                status = '<span class="label label-inverse">Chưa nộp</span>';
                preparingValue = preparingValue + 1;

            } else if (objProducts[i].status == 'Waitting') {

                status = '<span class="label label-light" style="background-color: #7f7c7c">Chờ chấm</span>';
            } else if (objProducts[i].status == 'districtRanked') {
                status = '<span class="label label-success">Cấp huyện đã xếp hạng</span>';
                // if (acc.level == 1) {
                //     teamplate = ` <div style="position: absolute;right: 16px;top: 20px;" >
                //     <a href="##" onclick="onmouseovers(\'${objProducts[i]._id}\')">
                //     </a>
                //     <div style="background-color: rgb(3, 146, 82);
                //     text-align: center; text-align: center;display:none" id="${objProducts[i]._id}">
                //     <a href="##" onclick="outclick(\'${objProducts[i]._id}\')" style="color: white;font-weight: 600;">x</a>
                //     </div>
                //         <div class="dropdown">
                //                 <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                //                         <a href="javascript:void(0)"><img id="accountAvartar" src="img/grey.png" srcset="img/grey@2x.png 2x,img/grey@3x.png 3x" class="Grey"></a>
                //                     </div>
                //                     <div class="dropdown-menu animated flipInY" style="top: 60px!important; left: -80px;background-color: rgb(3, 146, 82);text-align: center;">
                //                         <a href="##" onclick="addcounlis(\'${objProducts[i]._id}\')" class="dropdown-item-tool" style="color: #343a40;font-weight: bold;">Tạo hội đồng</a>
                //                     </div>
                //         </div>
                //     </div>`
                // }
            } else if (objProducts[i].status == 'provinceRanked') {
                status = '<span class="label label-success">Cấp tỉnh đã xếp hạng</span>';
                if (acc.level == 0) {
                    teamplate = ` <div style="position: absolute;right: 16px;top: 20px;" >
                    <a href="##" onclick="onmouseovers(\'${objProducts[i]._id}\')">
                    </a>
                    <div style="background-color: rgb(3, 146, 82);
                    text-align: center; text-align: center;display:none" id="${objProducts[i]._id}">
                    <a href="##" onclick="outclick(\'${objProducts[i]._id}\')" style="color: white;font-weight: 600;">x</a>
                    </div>
                        <div class="dropdown">
                                <div id="accountDropdown" style="${objProducts[i].evaluaresultinputscores && objProducts[i].evaluaresultinputscores.totalAverage < 90 ? 'display: none' : '' }" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <a href="javascript:void(0)"><img id="accountAvartar" src="img/grey.png" srcset="img/grey@2x.png 2x,img/grey@3x.png 3x" class="Grey"></a>
                                    </div>
                                    <div class="dropdown-menu animated flipInY" style="top: 60px !important; left: -80px;">
                                        <a href="##" onclick="addcounlis(\'${objProducts[i]._id}\')" class="dropdown-item" style="color: #343a40;
                                        font-weight: bold;">Tạo hội đồng</a>
                                    </div>
                        </div>
                    </div>`
                }
            }
            var options = {
                hour12: false
            };
            var date = new Date(objProducts[i].createdAt);
            var imgUrl = '/img/logoocop.png';
            if (objProducts[i].imgUrl[0]) {
                if (hasExtension(objProducts[i].imgUrl[0], Img)) {
                    imgUrl = objProducts[i].imgUrl[0];
                }
            }
            let viewHTML = '<div style="    padding: 25px;"></div>'
            if (objProducts[i].status !== 'Submiting' && objProducts[i].status !== 'Preparing') {
                viewHTML = `<div class="col-12 " style="padding: 12px">
 

                                ${accontInformation.level === 2 && objProducts[i].status === 'Done' && objProducts[i].confirm === 1 ? `<button class="btn btn-success btn-sm mr-2 update-result-button" style="float:right" data-toggle="modal" onclick="openDialogInputScore(\'${objProducts[i]._id}\')">Cập nhật kết quả</button>` : ''}

                                ${accontInformation.level === 1 && objProducts[i].status === 'districtRanked' && objProducts[i].evaluaresultinputscores && objProducts[i].evaluaresultinputscores.totalAverage >= 50 ? `<button class="btn btn-success btn-sm mr-2 update-result-button" style="float:right" data-toggle="modal" onclick="openDialogInputScore(\'${objProducts[i]._id}\')">Cập nhật kết quả</button>` : ''}
                            </div>`
            }
            // (objProducts[i].status === 'districtRanked' || objProducts[i].status === 'provinceRanked') &&
            html = html + `
            <div class="col-sm-6" >
                 ${teamplate}
                <div style="color:black;background-color:white;border-radius: 8px;"  >
                <div class="row container bg-white mt-3 member-info-wrap" style="padding: 18px 5px; margin: 0px; border-radius: 12px">
                    <a class="row col-12" href="/recordsproof?fileId=${objProducts[i]._id}&productSetId=${objProducts[i].typeId}&createdUserId=${objProducts[i].Member && objProducts[i].Member._id ? objProducts[i].Member._id : objProducts[i].Entity.createdMemberId}">
                        <div class="col-12 col-sm-2 text-center" style="margin-bottom:16px">
                            <img src="` + imgUrl + `" class="img-circle" style="width: 50px; height: 50px" alt="ảnh">
                        </div>
                        <div class="col-12 col-sm-6" style="margin-bottom:5px">
                            <p style="margin-bottom: 3px; font-weight: bold; font-stretch: normal;
                            font-style: normal; line-height: 1.29; letter-spacing: normal;color: black">` + objProducts[i].name + ` ${confirm ? '<span class="Ch-tch">Đã duyệt</span>' : ''}</p>
                            <p style="margin-bottom: 0px; color: black; font-weight: normal">${objProducts[i].code ? 'Mã sản phẩm: ' + objProducts[i].code : ''}</p>
                            <p style="margin-bottom: 0px; color: black; font-weight: normal"> ${'Tên chủ thể: ' + objProducts[i].Entity.name} </p>
                            <p style="margin-bottom: 0px; color: black; font-weight: normal">` + date.toLocaleString("en-GB", options) + ` </p>
                        </div>
                        <div class="col-12 col-sm-4 text-left">
                            ${convertStatus(objProducts[i].status)}
                        </div>
                        <p class="member-info">
                            ${objProducts[i].Member ? objProducts[i].Member.name : ""}<br>
                            ${objProducts[i].Member ? objProducts[i].Member.email : ""}<br>
                            ${objProducts[i].Member ? objProducts[i].Member.phone : ""}
                        </p>
                    </a>
                    ${viewHTML}
                    
                </div>
                </div>
            </div>
            `

        }
    }
    if (isFiltered) {
        $('#btnLoadMore').css({ opacity: 0 });
    }
    $('#divListProduct').append(html);
    if (isFirstLoad && !isFiltered) {
        $('#btnLoadMore').css({ opacity: 1 });
    }
    page++;
    working = false;
    Swal.close();
}
function hasExtension (fileName, exts) {
    return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
}
// const updateProofDate = (id) => {
//     let inputElements = document.getElementsByClassName("change-selectorChangeDateUp");
//     for (let i = 0; i < inputElements.length; i++) {
//         inputElements[i].checked = false
//     }
//     dateNow()
//     productsInfoIdAllow = id
//     getAllowUpProof(id)
// }
const convertStatus = (status) => {
    if (status == 'SUBMITTING') {
        return `<span class="label m-r-10" style="border-radius: 10px; background-color: #fdefce;color:black"><b>ĐANG NỘP</b></span>`;
    } else if (status == 'DONE') {
        return `<span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN THÀNH</b></span>`
    } else if (status == 'RANKED') {
        return `<span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;"><b>ĐÃ XẾP HẠNG</b></span>`
    } else if (status == 'FAIL') {
        return `<span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #ffd0d0;" ><b>KHÔNG ĐẠT</b></span>`
    } else if (status == 'PREPARING') {
        return `<span class="label m-r-10 Hon-thnh " style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA NỘP</b></span>`
    } else if (status == 'WAITTING') {
        return `<span class="label m-r-10 Hon-thnh " style="border-radius: 10px; color: black; background-color: #cff0e1"><b>CHỜ CHẤM</b></span>`
    } else if (status == 'DISTRICTRANKED') {
        return `<span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>HUYỆN ĐÃ XẾP HẠNG</b></span>`
    } else if (status == 'PROVINCERANKED') {
        return `<span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>TỈNH ĐÃ XẾP HẠNG</b></span>`
    }
}
function cboDateChange (event) {
    if (event.selectedIndex == '5') {
        document.getElementById("date1").style.display = 'inline';
        document.getElementById("date2").style.display = 'inline';
    } else {
        document.getElementById("date1").style.display = 'none';
        document.getElementById("date2").style.display = 'none';
    }
}

function LoadCboProvincials () {
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
                var o = new Option(objProvincials[0].name, `${objProvincials[0].id}`);
                $("#cboProvincial").append(o);
                LoadCboDistricts(objProvincials[0].id, objProvincials[0].name);
            } else {
                // if (cboProvincial.length > 0) cboProvincial.options[0] = new Option("Chọn", "0");
                var b = new Option("Tất cả", "0")
                $("#cboProvincial").append(b);
                for (var i = 1, len = objProvincials.length + 1; i < len; ++i) {
                    var o = new Option(objProvincials[i - 1].name, `${objProvincials[i - 1].id}`);
                    $("#cboProvincial").append(o);
                }
            }
            if (data.length == 1) {
                $('#cboProvincial').select2('val', [data[0].id]);
            }
            nof_loadAdress('pro', 0);
            if (idProvncial || idProvncial !== "") {
                $('#cboProvincial').val(`${idProvncial}`)
                $('#cboProvincial').trigger('change.select2')
                var data = {
                    "id": idProvncial,
                    "text": provncial,
                };
                $('#cboProvincial').trigger({
                    type: 'select2:select',
                    params: {
                        data: data
                    }
                });
                $("#cboProvincial").prop("disabled", true);
            }
        },
        error: function (err) {
            if (err.responseText == 'Unauthorized') {
                AlertWarning("Bạn đã bị time out", '', 'error');
            }
        }
    });
};

function LoadCboDistricts (idProvincial, name) {
    var selectElemRef = document.getElementById("cboDistricts");
    nof_loadAdress('district', 1);
    var gr = document.createElement("OPTGROUP");
    // gr.setAttribute("label", name);
    gr.id = 'Pro' + idProvincial;

    $.ajax({
        url:"/getdistrictbyprovince",
        type: "POST",
        data: {
            province_id: idProvincial,
            _token: csrfHidden
        },
        dataType : 'json',
        success: function (data) {
            objDistricts = data;
            if (objDistricts.length == 1) {
                var o = new Option(objDistricts[0].name, objDistricts[0].id);
                gr.append(o);
                LoadCboWards(objDistricts[0].id, objDistricts[0].name);
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
                $('#cboDistricts').val(`${idDis}`)
                $('#cboDistricts').trigger('change.select2')
                var data = {
                    "id": idDis,
                    "text": Dis,
                };
                $('#cboDistricts').trigger({
                    type: 'select2:select',
                    params: {
                        data: data
                    }
                });
                $("#cboDistricts").prop("disabled", true);
            }
        },
        error: function (err) {
            if (err.responseText == 'Unauthorized') {
                alert("Bạn đã bị time out", '', 'error');

            }
        }
    });
};

function LoadCboWards (idDistrict, name) {
    var selectElemRef = document.getElementById("cboWards");
    var objWards;
    nof_loadAdress('ward', 1);
    var gr = document.createElement("OPTGROUP");
    // gr.setAttribute("label", name);
    gr.id = 'Dis' + idDistrict;
    $.ajax({
        dataType: "json",
        url: "/getwardbydistrict",
        type: "POST",
        data: {
            district_id: idDistrict,
            _token: csrfHidden
        },
        success: function (data) {
            objWards = data;
            if (objWards.length == 1) {
                var o = new Option(objWards[0].name, objWards[0].id);
                gr.append(o);
                LoadCboBranch(objWards[0].id)
            } else {
                if (cboWards.length == 0) cboWards.options[0] = new Option("Tất cả", "0");
                for (var i = 1, len = objWards.length + 1; i < len; ++i) {
                    var o = new Option(objWards[i - 1].name, objWards[i - 1].id);
                    gr.append(o);
                }
            }
            cboWards.append(gr);
            nof_loadAdress('ward', 0);
            if (data.length == 1) {
                $('#cboWards').select2('val', [data[0].id]);
            }

        },
        error: function (err) {
            if (err.responseText == 'Unauthorized') {
                alert("Bạn đã bị time out", '', 'error');

            }
        }
    });
};

function deleteDistrictByProvincial (idProvincial) {
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

function deleteWardByDistrict (idDistrict) {
    let arr = $('#cboWards').select2('val');
    $('#Dis' + idDistrict).remove();
    arr.filter(element => {
        return $('#cboWards').find(`[value=${element}]`).length == 1;
    });
    $('#cboWards').select2('val', arr);

}

function deleteBranchByWard (idward) {
    let arr = $('#cboBranch').select2('val');
    $('#Ward' + idward).remove();
    arr.filter(element => {
        return $('#cboBranch').find(`[value=${element}]`).length == 1;
    });
    $('#cboBranch').select2('val', arr);
}


function nof_loadAdress (block, load) {
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

function getQuery () {
    var d = {};
    let search = "";
    d.date = getDate();
    if ($('#keyword').val() != "" && $('#keyword').val() != undefined && $('#keyword').is(':visible'))
        d.search = $("#keyword").val();
    if ($('#keywordEnt').val() != "" && $('#keywordEnt').val() != undefined && $('#keywordEnt').is(':visible'))
        d.searchEnt = $("#keywordEnt").val();
    if ($('#Status').select2('val').length && $('#Status').select2('val')[0] != '0') {
        d.Status = JSON.stringify({
            $in: $('#Status').select2('val')
        });
    }
    if ($('#cboProvincial').select2('val').length && $('#cboProvincial').select2('val')[0] != '0') {
        d.IdProvincial = JSON.stringify({
            $in: $('#cboProvincial').select2('val')
        });
    }
    if ($('#cboDistricts').select2('val').length && $('#cboDistricts').select2('val')[0] != '0') {
        d.IdDistrict = JSON.stringify({
            $in: $('#cboDistricts').select2('val')
        });
    }
    if ($('#cboWards').select2('val').length && $('#cboWards').select2('val')[0] != '0') {
        d.IdWard = JSON.stringify({
            $in: $('#cboWards').select2('val')
        });
    }
    return d;
}

function getDate () {
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

function fillter () {
    let prod = $('#keyword').val(),
        entity = $('#keywordEnt').val(),
        rank = $('#ranking-select').val(),
        stt = $('#Status').val(),
        province = $('#cboProvincial').val(),
        district = $('#cboDistricts').val(),
        ward = $('#cboWards').val(),
        cboDate = $('#cboDate').val()
    $('#btnLoadMore').css({ opacity: 0 });
    let data = getQuery();
    let filterData = genFilterData(prod, entity, rank, stt, province, district, ward, data.date.date1, data.date.date2, cboDate);
    isFiltered = true;
    if (data.hasOwnProperty('date') && data.date === '') {
        resetDefault(10);
    }

    let url = `/fillteFile`;
    // if (approveFiles) {
    //     url += `&status=Done`;
    // }
    if (queryStar) {
        url += `?queryStar=${queryStar}`
    }
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

function genFilterData(prod, entity, rank, stt, province, district, ward, dateFrom, dateTo, cboDate){
    let data = {
        'dateFrom' : dateFrom,
        'dateTo' : dateTo,
        'cboDate': cboDate
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
    if (stt != ''){
        data.status = stt;
    }
    if (province != ''){
        data.province = province;
    }
    if (district != ''){
        data.district = district;
    }
    if (ward != ''){
        data.ward = ward;
    }

    return data;
}

function onmouseovers (id) {
    $(`#${id}`).show()
}
function outclick (id) {
    $(`#${id}`).hide()
}
function seach () {
    let data = document.getElementById('seach').value
    $.ajax({
        url: "gettextseach?text=" + data,
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                drawM(ret)
            }
        }
    })
}

function getEx () {

    $.ajax({
        url: "getEXbysesion",
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                drawM(ret)
            } else {
                window.href.location = '/';
            }
        }, error: function (err) {
            console.warn(err)
        }
    })
}
function drawM (ret) {
    document.getElementById('listmember').innerHTML = ``
    ret.forEach((data) => {
        document.getElementById('listmember').innerHTML += `
        <div class="col-md-12 row rowContent">
            <div class="col-2" style="padding-right: 0;">
            <img src="${data.avatarUrl ? data.avatarUrl : 'img/noavatar.png'}" class="imgava">
            </div>
            <div class="col-9" style="padding: 0;overflow: auto; " >
            <span class="titleName">${data.name}</span></br>
            <span class="titleNamechirden">${data.email} - ${data.phone}</span>
            </div>
            <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
            <div class="rounds">
            <input type="checkbox" class="change-selector2" id="checkbox-${data._id}" value="${data._id}*${data.name}" name="checkbox" />
            <label for="checkbox-${data._id}"></label>
        </div>
            </div>
      </div>
        `
    })
}
function getExMa () {
    $.ajax({
        url: "getmemberchairman",
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                var p = new Option("Chọn chủ tịch", "0");
                var c = new Option("Chọn thư ký", "0");
                var d = new Option("Chọn chủ tịch", "0");
                var e = new Option("Chọn thư ký", "0");
                $("#chairman").append(p);
                $("#Secretary").append(c);
                $("#chairmans").append(d);
                $("#Secretarys").append(e);
                ret.forEach(element => {
                    var o = new Option(element.name, `${element._id}*${element.name}`);
                    var e = new Option(element.name, `${element._id}*${element.name}`);
                    var op = new Option(element.name, `${element._id}*${element.name}`);
                    var ep = new Option(element.name, `${element._id}*${element.name}`);
                    $("#chairman").append(o);
                    $("#Secretary").append(e);
                    $("#chairmans").append(op);
                    $("#Secretarys").append(ep);
                });
            } else {
                window.href.location = '/';
            }
        }, error: function (err) {
            console.warn(err)
        }
    })
}
function nextStep (step) {
    if (step == 1) {
        checkinser = 0
        $('#step1').modal('toggle');
        $('#step2').modal('show');
    } else if (step == 2) {
        let Datestart = document.getElementById('date-selector').value;
        let Datenow = new Date(Datestart)
        let ThisDate = new Date(new Date().setHours(0, 0, 0, 0))
        if (Datenow < ThisDate) {
            Swal.fire({
                title: 'Ngày hết hạn chấm không hợp lệ!',
                text: "Ngày hết hạn chấm được tính từ ngày hôm nay",
                type: 'warning',
            })
            if (new Date().getMonth().toLocaleString().split('').length == 1) {
                valMonth = `0${new Date().getMonth() + 1}`
            } else {
                valMonth = `${new Date().getMonth() + 1}`
            }
            if (new Date().getDate().toLocaleString().split('').length == 1) {
                valDate = `0${new Date().getDate()}`
            } else {
                valDate = `${new Date().getDate()}`
            }
            $(`#date-selector`).val(
                `${new Date().getFullYear()}-${valMonth}-${valDate}`
            );
            return false
        }
        if ($('#nameGroup').val() == "") {
            Swal.fire({
                type: 'warning',
                title: '',
                text: 'Bạn vui lòng nhập tên hội đồng sau đó tiếp tục',
            });
            return
        }
        if ($('#chairman option:selected').val() == "0" || $('#Secretary option:selected').val() == "0") {
            Swal.fire({
                type: 'warning',
                title: '',
                text: 'Bạn vui lòng nhập thêm cán bộ vào hội đồng sau đó tiếp tục',
            });
            return
        }
        getEx()
        // let arr=[]
        // let data= document.getElementsByClassName("change-selector2")
        // for (var i = 0; data[i]; ++i) {
        //     if (data[i].checked) {
        //         arr.push(data[i].value);
        //     }
        //   }
        // if(arr.length==0){
        //     Swal.fire({
        //         type: 'warning',
        //         title: '',
        //         text: 'Bạn vui chọn cán bộ chấm ',
        //     });
        //     return
        // }
        $('#step2').modal('toggle');
        $('#step3').modal('show');
    }
    else if (step == 4) {
        let counli = []
        let counlis = document.getElementsByClassName("change-selector3s");
        for (var i = 0; counlis[i]; ++i) {
            if (counlis[i].checked) {
                counli.push(counlis[i].value);
            }
        }
        if (counli.length > 1) {
            Swal('Cảnh báo !', 'Chỉ được chọn 1 hội đồng chấm cho 1 sản phẩm', 'warning')
            return
        } else if (counli.length === 0) {
            Swal('Cảnh báo !', 'Anh/Chị vui lòng chọn một hội đồng chấm đã có!', 'warning')
            return
        }
        $.ajax({
            url: "getgroupbyid?id=" + counli[0],
            type: "GET",
            success: function (ret) {
                if (ret.group) {
                    ret.group.forEach((e) => {
                        idExcheck.push(e.memberExId)
                    })
                    group = ret.group
                    savegroup()
                    // $.ajax({
                    //     url: "postExbyid",
                    //     type: "POST",
                    //     data: { data: JSON.stringify(idExcheck) },
                    //     success: function (ret) {
                    //         if (ret.length > 0) {
                    //             drawM(ret)
                    //         }
                    //     }
                    // })
                }

            }
        })
        // $('#step4').modal('toggle');
        // $('#step3').modal('show');
    } else if (step == 5) {
        $('#step5').modal('toggle');
        $('#step4').modal('show');
    }
}
function backstep (step) {
    if (step == 3) {
        $('#step2').modal('show');
        $('#step3').modal('toggle');
    } else if (step == 2) {

        $('#step2').modal('toggle');
        $('#step1').modal('show');
    } else if (step == 1) {
        $('#step1').modal('toggle');
    } else if (step == 4) {
        $('#step4').modal('toggle');
        $('#step1').modal('show');
    }
}
function getproductInfo () {
    $.ajax({
        url: "getProductinfobysesion",
        type: "GET",
        success: function (ret) {
            console.log(ret,987)
            if (ret) {
                drawproductInfo(ret.data)

            }
        }
    })
}
function seachproduct () {
    let data = document.getElementById('nameProductinfo').value
    $.ajax({
        url: "getproductbysession?text=" + data,
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                drawproductInfo(ret, 'draw')
            }
        }
    })
}
function drawproductInfo (ret,role) {
    document.getElementById('listproductinfno').innerHTML = ``
    ret.forEach((data) => {
        let html
        console.log(data._id, idcheck)
        if (data.productId == idcheck) {
            html = `<div class="rounds">
                    <input type="checkbox" class="change-selector" id="${role ? `entities-${data._id}` : `entities-${_.get(data,'product._id','')}`}" value="${role ? `${data._id}` : `${_.get(data,'product._id','')}`}" name="checkbox" checked disabled/>
                    <label for="${role ? `entities-${data._id}` : `entities-${_.get(data,'product._id','')}`}"></label>
                </div>`
        } else {
            html = `<div class="rounds">
                    <input type="checkbox" class="change-selector" id="${role ? `entities-${data._id}` : `entities-${_.get(data,'product._id','')}`}" value="${role ? `${data._id}` : `${_.get(data,'product._id','')}`}" name="checkbox" />
                    <label for="${role ? `entities-${data._id}` : `entities-${_.get(data,'product._id','')}`}"></label>
                </div>`
        }
        if(role){
            document.getElementById('listproductinfno').innerHTML += `
            <div class="col-md-12 row rowContent">
                <div class="col-2" style="padding-right: 0;">
                <img src="${ data.imgUrl &&  data.imgUrl.length > 0 ? data.imgUrl : 'img/noavatar.png'}" class="imgava">
                </div>
                <div class="col-9" style="padding: 0;overflow: auto; ">
                <span class="titleName">${data.name}</span></br>
                <span class="titleNamechirden">${data.entities && data.entities[0].name}</span>
                </div>
                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                ${html}
                </div>
            </div>
            `
        }else{
            document.getElementById('listproductinfno').innerHTML += `
            <div class="col-md-12 row rowContent">
                <div class="col-2" style="padding-right: 0;">
                <img src="${ _.get(data,'product.imgUrl[0]','')}" class="imgava">
                </div>
                <div class="col-9" style="padding: 0;overflow: auto; ">
                <span class="titleName">${_.get(data,'product.name','')}</span></br>
                <span class="titleNamechirden">Mã sản phẩm: ${_.get(data,'product.code','')}</span></br>
                <span class="titleNamechirden">Tên chủ thể: ${_.get(data,'entitie.name','')}</span>
                </div>
                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                ${html}
                </div>
            </div>
            `
        }


    })


}
$("#checkbox-all").on("click", function () {
    $(".change-selector").prop("checked", $(this).prop("checked"));
});

function addcounlis (id) {
    $.ajax({
        url: "getproductbyid?id=" + id,
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                Swal.fire('Cảnh báo', 'Sản phẩm đã có hội đồng chấm', 'warning')
            } else {
                idcheck = id
                getproductInfo()
                $('#step1').modal('show');
            }
        }
    })
}
function check () {
    checkinser = 1
    $('#step1').modal('toggle');
    $('#step4').modal('show');
}
function savegroup () {
    let productInfo = []

    let memExs = []
    let endate = document.getElementById('date-selector').value;
    let nameGroup = document.getElementById('nameGroup').value
    let chairman = $('#chairman option:selected').val()
    let secretary = $('#Secretary option:selected').val()
    let memEx = document.getElementsByClassName("change-selector2");
    let productinfo = document.getElementsByClassName("change-selector");
    for (var i = 0; productinfo[i]; ++i) {
        if (productinfo[i].checked) {
            productInfo.push(productinfo[i].value);
        }
    }
    for (var i = 0; memEx[i]; ++i) {
        if (memEx[i].checked) {
            memExs.push(memEx[i].value);
        }
    }
    if (checkinser == 0) {
        if (productInfo.length == 0) {
            Swal.fire({
                type: 'warning',
                title: '',
                text: 'Bạn vui lòng chọn sản phẩm cần chấm',
            });
            return
        }
        let datachairman = chairman.split('*')
        let datasecretary = secretary.split('*')

        let obj = {
            evaluecouncill: {
                nameCouncil: nameGroup,
                chairman: datachairman[0],
                nameChairman: datachairman[1],
                secretary: datasecretary[0],
                nameSecretary: datasecretary[1],
                deadline: endate,
                memExs: JSON.stringify(memExs),
                productInfo: JSON.stringify(productInfo)
            }
        }
        $.ajax({
            url: "savecoincils",
            type: "POST",
            data: obj,
            success: function (ret) {
                if (ret == 'success') {
                    Swal.fire({
                        type: 'success',
                        title: '',
                        text: 'Bạn thêm hội đồng chấm thành công',
                    });
                    getevc()
                    // addcounlis()
                    $('#step3').modal('toggle');
                    nameGroup = ''
                    $('#chairman option[value=0]').attr('selected', 'selected');
                    $('#Secretary option[value=0]').attr('selected', 'selected');
                    $(".change-selector").prop("checked", false);
                    $(".change-selector2").prop("checked", false);
                }
            }
        })
    } else if (checkinser == 1) {
        let counli = []
        let counlis = document.getElementsByClassName("change-selector3s");
        for (var i = 0; counlis[i]; ++i) {
            if (counlis[i].checked) {
                counli.push(counlis[i].value);
            }
        }
        for (let j = 0; j < group.length; j++) {
            let arr = []
            productInfo.forEach((data) => {
                arr.push(data)
            })
            group[j].productsInfoId.forEach((e) => {
                arr.push((e))
            })
            group[j].productsInfoId = arr
        }
        $.ajax({
            url: "updateproductinfo",
            data: { group: JSON.stringify(group), _id: counli[0], isChangeProduct: true, productAddHelpTeam: JSON.stringify(productInfo) },
            type: "POST",
            success: function (ret) {
                if (ret) {
                    // load()
                    getproductInfo()
                    // getGroupById()
                    Swal.fire({
                        type: 'success',
                        title: '',
                        text: 'Bạn thêm sản phầm vào hội đồng chấm thành công!',
                    });
                    // $('#step3').modal('toggle');
                    $('#step4').modal('toggle');
                }
            }
        })
    }


}
function getevc () {
    $.ajax({
        url: "getevaluationcouncils",
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                drawcounls(ret)
            }
        }
    })
}
function drawcounls (data) {
    document.getElementById('listcoucils').innerHTML = ``
    data.forEach((e) => {
        document.getElementById('listcoucils').innerHTML += `
            <div class="col-md-12 row rowContent">
                <div class="col-2" style="padding-right: 0;">
                <img src="${e.members[0].avatarUrl ? e.members[0].avatarUrl : 'img/noavatar.png'}" class="imgava">
                </div>
                <div class="col-9" style="padding: 0;overflow: auto; ">
                <span class="titleName">${e.nameCouncil}</span></br>
                <span class="titleNamechirden">${e.group.length} Thành viên - ${e.group[0].productsInfoId.length} Bộ hồ sơ</span>
                </div>
                <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
                <div class="rounds">
                                <input type="checkbox" class="change-selector3s" id="entities-${e._id}" value="${e._id}"  name="fooby[1][]" />
                                <label for="entities-${e._id}"></label>
                </div>
                </div>
            </div>
            `
    })
}
function addseach (role) {
    if (role == "1") {
        $('#Obligatory').fadeIn('slow')
        $('#plus').hide()
        $('#minus').show()
    } else {
        $('#Obligatory').fadeOut('slow')
        $('#plus').show()
        $('#minus').hide()
    }
}


// function LoadProof () {
//     $.ajax({
//         url: `/GetListRequirementModel`,
//         type: "GET",
//         success: function (ret) {
//             if (ret.length > 0) {
//                 draw(ret)
//             }
//         }
//     })
// }
// const getAllowUpProof = (productsInfoId) => {
//     $.ajax({
//         url: `/getAllowUpProof?productId=${productsInfoId}`,
//         type: "GET",
//         success: function (ret) {
//             if (ret.succes) {
//                 if (ret.data.length > 0) {
//                     idAllow = ret.data[0]._id ? ret.data[0]._id : false
//                     levelAllow = ret.data[0].level ? ret.data[0].level : false
//                     $('#btnSaveDate').css({ 'display': 'none' })
//                     $('#btnupdate').css({ 'display': '' })
//                     let inputElements = document.getElementsByClassName("change-selectorChangeDateUp");

//                     let allowProofIds = _.get(ret.data,'0.allowProofIds',[]).map((item) =>{
//                         return item._id
//                     } )
//                     for (let i = 0; i < inputElements.length; i++) {
//                             let isHave = allowProofIds ? allowProofIds.includes(inputElements[i].value) : false
//                             if (isHave) {
//                                 listIdProofIsCheck.push(inputElements[i].value)
//                                 const getValueAllow = _.get(ret.data,'0.allowProofIds',[]).filter(item => item._id === inputElements[i].value)
//                                 inputElements[i].checked = true
//                                 $(`#${inputElements[i].value}`).css({"display":""})
//                                 $(`#val_${inputElements[i].value}`).val(_.get(getValueAllow,'0.note',''))
//                             }
//                     }
//                     convertDateToShow(ret.data[0].deadline ? ret.data[0].deadline : false)
//                 } else {
//                     $('#btnSaveDate').css({ 'display': '' })
//                     $('#btnupdate').css({ 'display': 'none' })
//                 }
//             } else {
//                 Swal.fire({
//                     title: 'Cảnh báo!',
//                     text: "Đã có lỗi xảy ra vui lòng thử lại!",
//                     type: 'warning',
//                 })
//             }
//         }
//     })
// }
// const convertDateToShow = (date) => {
//     let year = new Date(date).getFullYear()
//     let month = new Date(date).getMonth() + 1
//     let dates = new Date(date).getDate()
//     let dataTime = `${year}-${month < 10 ? '0' + month : month}-${dates < 10 ? '0' + dates : dates}`
//     $(`#dateEndUpProof`).val(dataTime);
// }
// function draw (ret) {
//     document.getElementById('Obligatorys').innerHTML = ``
//     document.getElementById('Additionally').innerHTML = ``
//     for (let i = 0; i < ret.length; i++) {
//         listIdProof.push(ret[i]._id)
//         let teamPlate = `
//             <div class="div_border">
//                 <div style="    width: 95%;">
//                     <a class="textProof" style="margin: 0;">${ret[i].content}</a>
//                 </div>
//                 <div>
//                 <div class="rounds">
//                     <input type="checkbox" onchange="checkedCheckbox(\'${ret[i]._id}\')" class="change-selectorChangeDateUp" value="${ret[i]._id}" id="checkbox-${ret[i]._id}" name="checkbox-group">
//                     <label for="checkbox-${ret[i]._id}" name="checkbox-group"></label>
//                 </div>
//                 </div>
//             </div>
//             <div id="${ret[i]._id}" style="width:100%;display:none">
//                 <textarea class="textAre_Note form-control" style="    background-color: #f4fffa;" id="val_${ret[i]._id}" placeholder="Vui lòng nhập ghi chú cho yêu cầu minh chứng!"  name="note" rows="3" ></textarea>
//             </div>
//         `
//         if (ret[i].type === "Additionally") {
//             document.getElementById('Additionally').innerHTML += teamPlate
//         } else {
//             document.getElementById('Obligatorys').innerHTML += teamPlate
//         }
//     }

// }
const checkedCheckbox = (id) => {
    if ($(`#checkbox-${id}`).is(":checked")) {
        listIdProofIsCheck.push(id)
        $(`#${id}`).css({ "display": "" })
    } else {

        const data = listIdProofIsCheck.filter(item => item !== id)
        listIdProofIsCheck = data
        $(`#${id}`).css({ "display": "none" })
    }
}

function openDialogInputScore (productId) {
    currentProductId = productId

    $.ajax({
        type: 'GET',
        url: `/evaluaResultInputScore?productId=${productId}&level=1`,
        success: (data) => {
            if (data.success) {

            }
            console.log('data: ', data);
        },
        error: (error) => {
            console.log(error);
        }
    });

    $('#modalInputScore').modal('toggle')
    Dropzone.forElement('#dropzoneMytwo').removeAllFiles(true)
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
										checkClickSaveFilesData = false
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
	console.log('checkClickSaveFilesData: ', checkClickSaveFilesData);
	if(!checkClickSaveFilesData) {
		return Swal.fire({
			title: 'Thông báo!',
			text: "Anh/Chị vui lòng ấn xác nhận tải lên để tiếp tục!",
			type: 'warning',
		})
	}
    $('#modalInputScoreNext').modal('toggle')
    $('#modalInputScore').modal('toggle')
		checkClickSaveFilesData = false
};

$("#checkbox-all-Up").on("click", function () {
    if ($("#checkbox-all-Up").is(":checked")) {
        for (let i = 0; i < listIdProof.length; i++) {
            $(`#${listIdProof[i]}`).css({ "display": "" })
            listIdProofIsCheck.push(listIdProof[i])
        }
    } else {
        for (let i = 0; i < listIdProof.length; i++) {
            $(`#${listIdProof[i]}`).css({ "display": "none" })
            listIdProofIsCheck = []
        }
    }
    $(".change-selectorChangeDateUp").prop("checked", $(this).prop("checked"));

});
const nextStepChangeDateUp = (step) => {
    if (step == 1) {
        let inputElements = document.getElementsByClassName("change-selectorChangeDateUp");
        let checkedValue = []
        for (let i = 0; i < inputElements.length; i++) {
            if (inputElements[i].checked) {
                checkedValue.push(inputElements[i].value);
            }
        }
        if (checkedValue.length === 0) {
            return Swal.fire({
                title: 'Thông báo!',
                text: "Anh/Chị vui lòng chọn tiêu chí để tiếp tục!",
                type: 'warning',
            })
        }
        for (let i = 0; i < listIdProofIsCheck.length; i++) {
            if ($(`#val_${listIdProofIsCheck[i]}`).val().trim() === '') {
                return Swal.fire({
                    title: 'Thông báo!',
                    text: "Anh/chị vui lòng nhập đầy đủ ghi chú cho tiêu chí!",
                    type: 'warning',
                })
            }
        }

        $('#step1ChangeDateUpStatus').modal('toggle');
        $('#step2ChangeDateUpStatus').modal('show');
    }
}
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

const saveDateEnd = () => {
    $('#btnSaveDate').prop('disabled', true);
    let inputElements = document.getElementsByClassName("change-selectorChangeDateUp");
    let Datestart = document.getElementById('dateEndUpProof').value;
    let Datenow = new Date(Datestart)
    let ThisDate = new Date(new Date().setHours(23, 59, 59, 59))
    if (Datenow < ThisDate) {
        Swal.fire({
            title: 'Thông báo!',
            text: "Ngày hết hạn bổ sung minh chứng không hợp lệ",
            type: 'warning',
        })
        dateNow()
        $('#btnSaveDate').prop('disabled', false);
        return false
    }

    let checkedValue = []
    for (let i = 0; i < inputElements.length; i++) {
        if (inputElements[i].checked) {
            checkedValue.push(inputElements[i].value);
        }
    }
    let dateTime = Datenow.setHours(23, 59, 59, 59)
    let allowObjProof = []
    for (let i = 0; i < checkedValue.length; i++) {
        let obj = {
            _id: checkedValue[i]
        }
        if($(`#val_${checkedValue[i]}`).val()!==''){
            obj.note =  $(`#val_${checkedValue[i]}`).val()
        }
        allowObjProof.push(obj)
    }
    let data = {
        date: dateTime,
        allowProofId: allowObjProof,
        productId: productsInfoIdAllow,
        // note: note.value
    }
    $.ajax({
        url: "createAllowUpdatesProof",
        type: "POST",
        data: data,
        success: function (ret) {
            if (ret.succes) {
                Swal.fire({
                    title: 'Thành công!',
                    text: "Tạo thời gian cập nhật minh chứng thành công!",
                    type: 'success',
                })
                for (let i = 0; i < inputElements.length; i++) {
                    if (inputElements[i].checked) {
                        inputElements[i].checked = false
                    }
                }
                document.getElementsByClassName('checkalldata')[0].checked = false
                $('#step2ChangeDateUpStatus').modal('toggle');
                $('#btnSaveDate').prop('disabled', false);
            } else {
                Swal.fire({
                    title: 'Thất bại!',
                    text: "Đã có lỗi xảy ra vui lòng thử lại!",
                    type: 'warning',
                })
            }
        }
    })
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

function acceptSend () {
    let descriptionImg = $('#descriptionImg').val();
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
        if (result.value) {
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

$(document).click(function (e) {
    if (!$(e.target).closest('#modalInputScoreNext').length) {
    }
});
const dateNow = () => {
    if (new Date().getMonth().toLocaleString().split('').length == 1) {
        valMonth = `0${new Date().getMonth() + 1}`
    } else {
        valMonth = `${new Date().getMonth() + 1}`
    }
    if (new Date().getDate().toLocaleString().split('').length == 1) {
        valDate = `0${new Date().getDate()}`
    } else {
        valDate = `${new Date().getDate()}`
    }
    $(`#dateEndUpProof`).val(
        `${new Date().getFullYear()}-${valMonth}-${valDate}`
    );
}

const updateDateEnd = () => {
    if (idAllow) {
        $('#btnupdate').prop('disabled', true);
        let inputElements = document.getElementsByClassName("change-selectorChangeDateUp");
        let Datestart = document.getElementById('dateEndUpProof').value;
        let Datenow = new Date(Datestart)
        let ThisDate = new Date(new Date().setHours(23, 59, 59, 59))
        if (Datenow < ThisDate) {
            Swal.fire({
                title: 'Thông báo!',
                text: "Ngày hết hạn bổ sung minh chứng không hợp lệ",
                type: 'warning',
            })
            dateNow()
            $('#btnupdate').prop('disabled', false);
            return false
        }
        // if (note.value === '') {
        //     $('#btnSaveDate').prop('disabled', false);
        //     return Swal.fire({
        //         title: 'Thông báo!',
        //         text: "Anh/Chị vui lòng nhập ghi chú cho minh chứng",
        //         type: 'warning',
        //     })
        // }
        let checkedValue = []
        for (let i = 0; i < inputElements.length; i++) {
            if (inputElements[i].checked) {
                checkedValue.push(inputElements[i].value);
            }
        }
        let timeDate = new Date(Datenow).setHours(23, 59, 59, 59)

        let allowObjProof = []
        for (let i = 0; i < checkedValue.length; i++) {
            let obj = {
                _id: checkedValue[i]
            }
            if($(`#val_${checkedValue[i]}`).val()!==''){
                obj.note =  $(`#val_${checkedValue[i]}`).val()
            }
            allowObjProof.push(obj)
        }
        let data = {
            date: timeDate,
            allowProofId: allowObjProof,
            productId: productsInfoIdAllow,
            _id: idAllow,
            level: levelAllow,
            // note: note.value
        }
        $.ajax({
            url: "updateAllowUpdatesProof",
            type: "POST",
            data: data,
            success: function (ret) {
                if (ret.succes) {
                    Swal.fire({
                        title: 'Thành công!',
                        text: "Cập nhật thông tin yêu cầu thành công!",
                        type: 'success',
                    })
                    for (let i = 0; i < inputElements.length; i++) {
                        if (inputElements[i].checked) {
                            inputElements[i].checked = false
                        }
                    }
                    document.getElementsByClassName('checkalldata')[0].checked = false
                    $('#step2ChangeDateUpStatus').modal('toggle');
                    $('#btnupdate').prop('disabled', false);
                } else {
                    Swal.fire({
                        title: 'Thất bại!',
                        text: "Đã có lỗi xảy ra vui lòng thử lại!",
                        type: 'warning',
                    })
                }
            }
        })
    }
}


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
    let imgModalInfo = $('#ImgModal-info');
    // $('#ImgModal-info').css("display", "block")
    let link
    $('#ImgModal-info').html('');
    $('#ImgModal-info').css('display', '');

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

        document.getElementById('ImgModal-info').innerHTML += `
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
                        </div> 

                        <textarea class="d-none" id="editDescritionFile-${e._id}">${e.description ? e.description : ''}</textarea>
                        
                        <div class="">
                            <button class="btn btn-danger" onclick="deleteimgDropzone(\'${e._id}\')">Xóa</button>
                        </div> -->
					</div>
					</div>
			</div>
			</div>
		`
    });

    oldFilesArr = [...ImgsArray]
		checkClickSaveFilesData = true
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

// gQJrvQiDC7ZCoOC1u+N5ww==$Q/cJBdkbP6ymEk+bkqBCo37n19RQ86GzXtBxZg/hJT2598NRSEGZer0KoY5Nq+OnSKtZyeDGyoE0Q3tKvEkwzw==
