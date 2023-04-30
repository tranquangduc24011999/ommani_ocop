let type;
var objProvincials;
var objDistricts;
var objWards;
var memberLevel;
var currentType;
let newMember = null
let linkherf = `/login`
let timeInterval
var BBNS = [{
    _id: 1,
    Name: "Bộ Nông nghiệp và Phát triển nông thôn",
    val: "BONONGHIEPVAPHATTRIENNONGTHON"
}, {
    _id: 2,
    Name: "Bộ Công Thương",
    val: "BÔCNGTHUONG"
}, {
    _id: 3,
    Name: "Bộ Y tế",
    val: "BOYTE"
}, {
    _id: 4,
    Name: "Bộ Khoa học và Công nghệ",
    val: "BOKHOAHOCVACONGNGE"
}, {
    _id: 5,
    Name: "Bộ Văn hóa , Thể thao và Du lịch",
    val: "BOVANHOATHETHAOVADULICH"
}, {
    _id: 6,
    Name: "Đoàn Thanh niên Cộng sản Hồ Chí Minh",
    val: "DOANTHANHNIENCONGSANHOCHIMINH"
}, {
    _id: 7,
    Name: "Bộ Tài nguyên & Môi trường ",
    val: "BOTAINGUYEN&MOITRUONG"
}] //KHAI BÁO mảng bộ ban ngành
var DVCT = [{
    idBBN: 1,
    Name: "Văn phòng nông thôn mới",
    val: "VANPHONGNONGTHONMOI"
}, {
    idBBN: 2,
    Name: "Vụ thị trường trong nước",
    val: "VUTHITRUONGTRONGNUOC"
}, {
    idBBN: 6,
    Name: "Ban thanh niên nông thôn",
    val: "BANTHANHNIENNONGTHON"
},] //đơn vị công tác
function getParam(paramName) {
    var url_string = window.location.href;
    var url = new URL(url_string);
    return url.searchParams.get(paramName);
}

let psid = getParam('psid');
let fbId = getParam('fbId');
let ggId = getParam('ggId');
let srcId = getParam('srcId');
let prefillEmail = getParam('email');
let prefillname = getParam('name');
let prefillphone = getParam('phone');
// let prefilltype=getParam('prefilltype');

$(() => {
    if (prefillEmail && prefillEmail != 'null') {
        $(`#txtEmail`).val(prefillEmail);
        // $(`#txtEmail`).attr('disabled', true);
    }
    if (prefillname && prefillname !== 'null') {
        $(`#txtFullName`).val(prefillname)
        // $(`#txtFullName`).attr('disabled', true);
    }
    if (prefillphone && prefillphone != 'null') {
        $(`#txtPhone`).val(prefillphone)
        // $(`#txtPhone`).attr('disabled', true);
    }
    if (fbId) {
        $('#stPass').hide()
        $('#stCfPass').hide()
    }

    loadBBN();
    $('input[name="group-check"]').click(function () {
        var $box = $(this);
        $('#lvl0-check').prop('checked', false)
        if ($box.is(":checked")) {
            let group = "input:radio[name='" + $box.attr("name") + "']";
            $(group).prop("checked", false);
            $box.prop("checked", true);
            type = $box.val();
            if (type) {
                currentType = type;
                if (type == "Manager") {
                    $(`#levelHeading`)[0].innerHTML = `Cấp quản lý`;
                    $('.two-level').show()
                    $(`#stLevel`).show();
                    if (memberLevel) {
                        $(`#btnContinue`).show();
                        loadBBN();
                        nof_load('Manager')
                    } else {
                        $(`#btnContinue`).hide();
                    }
                } else if (type == "Examiner") {
                    $(`#levelHeading`)[0].innerHTML = `Cấp chấm`;
                    $('.two-level').hide()
                    $(`#stLevel`).show();
                    memberLevel = 0
                    $('#lvl0-check').prop('checked', true);
                    $(`#btnContinue`).show();
                    nof_load('Examiner');
                } else if (type == "HelpTeam") {
                    $(`#levelHeading`)[0].innerHTML = `Cấp chấm`;
                    $('.two-level').hide()
                    $(`#stLevel`).show();
                    $('#lvl0-check').prop('checked', true);
                    memberLevel = 0
                    $(`#btnContinue`).show();
                    nof_load('Examiner');
                } else if (type == "Member") {
                    $('#stotherMember').hide()
                    $(`#stLevel`).hide();
                    $(`#btnContinue`).show();
                    nof_load('Member');
                }
                LoadCboProvincials();
                $('#cboProvincial').select2();
                $('#cboDistricts').select2();
                $('#cboWards').select2();
                $('#txtBBN').select2();
                $('#txtRole').select2();
                $('#txtstWorkunitdisTric').select2();
                $('#txtstWorkunitPro').select2();
            }
        } else {
            $box.prop("checked", false);
        }
    });
    $("#level-select input:radio").on('click', function (event) {
        memberLevel = event.target.value;
        $(`#part1 input[value=${$("#part1 input:checked").val()}]`).click();
        $(`#txtstWorkunitPro`).val('0');
        $(`#txtstWorkunitdisTric`).val('0');
        $(`#otherWorkUnitWrapper`).css('display', 'none');
        $(`#txtOtherWorkUnit`).val('');
        $(`#txtmemberPosition`).val('');
        if ($(this).attr('id') === 'lvl0-check') {
            $(`#lvl0-check`).prop('checked', true)
        }
    });
    $("input:checkbox").on('click', function () {
        var $box = $(this);
        if ($box.is(":checked")) {
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
    });
    $(`#btnContinue`).on('click', () => {
        $(`#part1`).hide();
        $(`#part2`).show();

        $('#stWorkunit').show()
        $('#stWorkunitPro').hide()
        $('#stWorkunitdisTric').hide()
        if (type == "Examiner" && memberLevel == "0") {
            $('#stWorkunit').hide()
            $('#stBBN').show()
        }
        if (type == "Manager" && memberLevel == "0") {
            $('#stBBN').show()
            $('#stWorkunit').hide()
        }

        if (type == "Examiner" && memberLevel == "1") {
            $('#stBBN').hide()
            $('#stWorkunit').hide()
            $('#stWorkunitPro').show()
            $('#stWorkunitdisTric').hide()
        } else if (type == "Examiner" && memberLevel == "2") {
            $('#stBBN').hide()
            $('#stWorkunit').hide()
            $('#stWorkunitPro').hide()
            $('#stWorkunitdisTric').show()
        }
        if (type == "Manager" && memberLevel == "1") {
            $('#stBBN').hide()
            $('#stWorkunit').hide()
            $('#stWorkunitPro').show()
            $('#stWorkunitdisTric').hide()
        } else if (type == "Manager" && memberLevel == "2") {
            $('#stBBN').hide()
            $('#stWorkunit').hide()
            $('#stWorkunitPro').hide()
            $('#stWorkunitdisTric').show()
        }
        if (type == 'Member') {
            $('#stWorkunit').hide();
            $(`#memberPositionWrapper`).css('display', 'none');
        } else {
            $(`#memberPositionWrapper`).css('display', '');
        }

    });
    $(`#btnBackToPart1`).on('click', () => {
        $(`#part2`).hide();
        $(`#part1`).show();
    });
    $(`#txtstWorkunitPro`).on('change', (event) => {
        console.log(event.target.value);
        if (event.target.value == 9) {
            $(`#otherWorkUnitWrapper`).css('display', '');
        } else {
            $(`#otherWorkUnitWrapper`).css('display', 'none');
        }
    });
    $(`#stWorkunitdisTric`).on('change', (event) => {
        console.log(event.target.value);
        if (event.target.value == 7) {
            $(`#otherWorkUnitWrapper`).css('display', '');
        } else {
            $(`#otherWorkUnitWrapper`).css('display', 'none');
        }
    });

    $('.digit-group').find('input').each(function () {
        $(this).attr('maxlength', 1);
        $(this).on('keyup', function (e) {
            if (e.keyCode === 8 || e.keyCode === 37 || (e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
                let parent = $($(this).parent());
                if (e.keyCode === 8 || e.keyCode === 37) {
                    let prev = parent.find('input#' + $(this).data('previous'));

                    if (prev.length) {
                        $(prev).select()
                    }
                } else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
                    let next = parent.find('input#' + $(this).data('next'));

                    if (next.length) {
                        $(next).select()
                    }
                }
            }
        });
    });

    $('#btn-otp').click(function () {
        $('#error-otp').hide()
        let otp = ''
        $('.digit-group').find('input').each(function () {
            otp += $(this).val()
        });

        let otpData = {
            otp: otp,
            memberId: newMember._id
        }

        $.ajax({
            url: "/checkOtp",
            type: "POST",
            data: otpData,
            dataType: "text",
            success: function (ret) {
                let data = JSON.parse(ret)
                if (data.success) {
                    window.location.href = '/login';
                } else {
                    $('.error-otp').text(data.message)
                    $('.error-otp').show()
                }
            },
            error: function (err) {
                throw new Error(err)
            }
        })
    })

    $('#resent-otp').click(function () {
        $.ajax({
            url: "/resentOtp",
            type: "POST",
            data: newMember,
            dataType: "text",
            success: function (ret) {
                let data = JSON.parse(ret)
                if (data.success) {
                    let time = 60 * 3
                    let display = document.querySelector('#countTime')
                    clearInterval(timeInterval);
                    startTimer(time, display);
                }
            },
            error: function (err) {
                throw new Error(err)
            }
        })
    })
})

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
                var o = new Option(objProvincials[0].Name, `${objProvincials[0]._id},${objProvincials[0].GeoCode}`);
                $("#cboProvincial").append(o);
                LoadCboDistricts(objProvincials[0]._id, objProvincials[0].Name);
            } else {
                var b = new Option("Chọn", "0")
                $("#cboProvincial").append(b);
                for (var i = 1, len = objProvincials.length + 1; i < len; ++i) {
                    var o = new Option(objProvincials[i - 1].Name, `${objProvincials[i - 1]._id},${objProvincials[i - 1].GeoCode}`);
                    $("#cboProvincial").append(o);
                }
            }
            if (data.length == 1) {
                $('#cboProvincial').select2('val', [data[0]._id]);
            }
            nof_loadAdress('pro', 0);
        },
        error: function (err) {
            if (err.responseText == 'Unauthorized') {
                AlertWarning("time out", '', 'error');
            }
        }
    });
};

function LoadCboDistricts(idProvincial, name) {
    var selectElemRef = document.getElementById("cboDistricts");
    nof_loadAdress('district', 1);
    $.ajax({
        dataType: "json",
        url: "/getDistrict?idProvincial=" + idProvincial,
        data: objDistricts,
        success: function (data) {
            objDistricts = data;
            if (objDistricts.length == 1) {
                var o = new Option(objDistricts[0].Name, objDistricts[0]._id);
                $('#cboDistricts').append(o);
                LoadCboWards(objDistricts[0]._id, objDistricts[0].Name);
            } else {
                if (cboDistricts.length == 0) cboDistricts.options[0] = new Option("Chọn", "0");
                for (var i = 1, len = objDistricts.length + 1; i < len; ++i) {
                    var o = new Option(objDistricts[i - 1].Name, objDistricts[i - 1]._id);
                    $('#cboDistricts').append(o);
                }
            }
            nof_loadAdress('district', 0);
            if (data.length == 1) {
                $('#cboDistricts').select2('val', [data[0]._id]);
            }
        },
        error: function (err) {
            if (err.responseText == 'Unauthorized') {
                AlertWarning("time out", '', 'error');
            }
        }
    });
};

function LoadCboWards(idDistrict, name) {
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
                if (cboWards.length == 0) cboWards.options[0] = new Option("Chọn", "0");
                for (var i = 1, len = objWards.length + 1; i < len; ++i) {
                    var o = new Option(objWards[i - 1].Name, objWards[i - 1]._id);
                    $('#cboWards').append(o);
                }
            }
            nof_loadAdress('ward', 0);
            if (data.length == 1) {
                $('#cboWards').select2('val', [data[0]._id]);
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
    $('#cboDistricts').select2('val', ['0'])
    document.getElementById("cboDistricts").options.length = 0;
    $('#cboDistricts')
        .find('option')
        .remove()
        .end()
    let Text = $('#cboProvincial option:selected').text()
    let Id = $('#cboProvincial option:selected').val()
    let ids = Id.split(',')
    LoadCboDistricts(ids[0], Text)
});

$('#cboDistricts').on("change", function (e) {
    $('#cboWards').select2('val', ['0'])
    document.getElementById("cboWards").options.length = '';
    let Text = $('#cboDistricts option:selected').text()
    let Id = $('#cboDistricts option:selected').val()
    if (Text == undefined || Id == undefined) {
        console.log('stop loading district')
    } else {
        LoadCboWards(Id, Text)
    }
});

$('#cboWards').on("change", function (e) {
    $('#cboBranch').select2('val', ['0'])
    $('#cboBranch').select2('data', null);
    $("#cboBranch").val(null).trigger("change");
    let Text = $('#cboWards option:selected').text()
    let Id = $('#cboWards option:selected').val()
});

function validateEmail(email) {
    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validatePhoneNumber = (phoneNumber) => {
    let re = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    return re.test(String(phoneNumber));
}

function Close() {
    MessengerExtensions.requestCloseBrowser(function success() {
        console.log("Webview closing");
    }, function error(err) {
        console.log("getElementById Err:" + err);
    });
};

function nof_load(block) {
    switch (block) {
        case 'Member':
            $('#stEmail').show()
            $('#stProvical').hide()
            $('#stCbwards').hide()
            $('#tsAdress').show()
            $('#tsTypeAdress').show()
            $('#stHeadquarters').show()
            $('#stManufacturing').show()
            $('#stName').show()
            $('#stPhone').show()
            $('#stWebsite').show()

            $('#stBBN').hide()
            $('#stWorkunit').hide()
            // $('#stworkUnitforExaminer').hide()
            $('#stManger').hide()
            LoadCboProvincials();
            break;
        case 'Examiner':
            $('#stName').show()
            $('#stManger').hide()
            $('#stPhone').show()
            $('#stEmail').show()
            // $('#stworkUnitforExaminer').show()
            $('#stWorkunit').hide()
            //
            $('#stCbwards').hide()
            $('#tsAdress').hide()
            $('#tsTypeAdress').hide()
            $('#stHeadquarters').hide()
            $('#stManufacturing').hide()
            $('#stWebsite').hide()
            $('#stBBN').hide()
            $('#stotherMember').hide()
            break;
        case 'Manager':
            $('#stName').show()
            $('#stBBN').show()
            $('#stWorkunit').show()
            $('#stManger').hide()
            $('#stPhone').show()
            $('#stEmail').show()
            $('#stotherMember').hide()

            //
            $('#stCbwards').hide()
            $('#tsAdress').hide()
            $('#tsTypeAdress').hide()
            $('#stHeadquarters').hide()
            $('#stManufacturing').hide()
            $('#stWebsite').hide()
            // $('#stworkUnitforExaminer').hide()
            break;
        default:
            break;
    }
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

function SaveObject() {
    let obj
    let txtRole = $('#txtRole option:selected').val()
    let Provincial = $('#cboProvincial option:selected').text()
    let IdProvincial = $('#cboProvincial option:selected').val()
    let District = $('#cboDistricts option:selected').text()
    let IdDistrict = $('#cboDistricts option:selected').val()
    let ward = $('#cboWards option:selected').text()
    let Idward = $('#cboWards option:selected').val()
    let checkradio = $("input[name='options']:checked").val()
    let IdProvincials = IdProvincial.split(',');
    let regexTest = /đơn vị khác/gi;
    if (type == 'Member') {
        obj = {
            name: $('#txtFullName').val(),
            phone: $('#txtPhone').val(),
            email: $('#txtEmail').val(),
            addressInfo: JSON.stringify({
                provinceName: IdProvincial !== "0" ? Provincial : 'NA',
                provinceId: IdProvincial !== "0" ? IdProvincials[0] : 'NA',
                districtName: IdDistrict !== "0" ? District : 'NA',
                districtId: IdDistrict !== "0" ? IdDistrict : 'NA',
                wardName: Idward !== "0" ? ward : 'NA',
                wardId: Idward !== "0" ? Idward : 'NA',
                provinceGeoCode: IdProvincials[1],
            }),
            psid: psid,
            type: "Member"
        }
    } else if (type == 'Manager') {
        let txtBBN = $('#txtBBN option:selected').text()
        let txtBBNvl = $('#txtBBN option:selected').val()
        let txtstWorkunitval = $('#txtstWorkunit').val()
        obj = {
            name: $('#txtFullName').val(),
            phone: $('#txtPhone').val(),
            email: $('#txtEmail').val(),
            bBN: txtBBN, // lấy giá trị bộ ban ngành
            workUnit: txtstWorkunitval, //đơn vị công tác,
            position: $(`#txtmemberPosition`).val(), //Chức vụ
            address: $(`#txtstManagerAddress`).val(),
            addressInfo: JSON.stringify({
                provinceName: IdProvincial !== "0" ? Provincial : 'NA',
                provinceId: IdProvincial !== "0" ? IdProvincials[0] : 'NA',
                districtName: IdDistrict !== "0" ? District : 'NA',
                districtId: IdDistrict !== "0" ? IdDistrict : 'NA',
                provinceGeoCode: IdProvincials[1],
            }),
            level: memberLevel,
            psid: psid,
            type: "Manager"
        }
        let txtstWorkunitdisTric = $('#txtstWorkunitdisTric option:selected').text()
        let txtstWorkunitPro = $('#txtstWorkunitPro option:selected').text()
        if (memberLevel == "2") {
            obj.workUnit = txtstWorkunitdisTric;
            if (regexTest.test(txtstWorkunitdisTric) && $(`#txtOtherWorkUnit`).val().length > 0) {
                obj.workUnit = $(`#txtOtherWorkUnit`).val();
            }
        } else if (memberLevel == "1") {
            obj.workUnit = txtstWorkunitPro;
            if (regexTest.test(txtstWorkunitPro) && $(`#txtOtherWorkUnit`).val().length > 0) {
                obj.workUnit = $(`#txtOtherWorkUnit`).val();
            }
        }
    } else {
        let workUnit = document.getElementById('txtstWorkunit').value
        obj = {
            name: $('#txtFullName').val(),
            phone: $('#txtPhone').val(),
            email: $('#txtEmail').val(),
            workUnit: workUnit,
            position: $(`#txtmemberPosition`).val(), //Chức vụ
            address: $(`#txtstManagerAddress`).val(),
            addressInfo: JSON.stringify({
                provinceName: IdProvincial !== "0" ? Provincial : 'NA',
                provinceId: IdProvincial !== "0" ? IdProvincials[0] : 'NA',
                districtName: IdDistrict !== "0" ? District : 'NA',
                districtId: IdDistrict !== "0" ? IdDistrict : 'NA',
                provinceGeoCode: IdProvincials[1],
            }),
            level: memberLevel,
            psid: psid,
            type: "Examiner"
        }
        let txtstWorkunitdisTric = $('#txtstWorkunitdisTric option:selected').text()
        let txtstWorkunitPro = $('#txtstWorkunitPro option:selected').text()
        if (memberLevel == "2") {
            obj.workUnit = txtstWorkunitdisTric;
            if (regexTest.test(txtstWorkunitdisTric) && $(`#txtOtherWorkUnit`).val().length > 0) {
                obj.workUnit = $(`#txtOtherWorkUnit`).val();
            }
        } else if (memberLevel == "1") {
            obj.workUnit = txtstWorkunitPro;
            if (regexTest.test(txtstWorkunitPro) && $(`#txtOtherWorkUnit`).val().length > 0) {
                obj.workUnit = $(`#txtOtherWorkUnit`).val();
            }
        }
    }
    if (type == 'HelpTeam') {
        obj.type = 'HelpTeam'
    }
    if ($(`#gender-select input[type='radio']:checked `).val()) {
        obj = {
            ...obj,
            sex: $(`#gender-select input[type='radio']:checked `).val(),

        }
    }
    if ($(`#txtBirthDay`).val() !== '') {
        obj = {
            ...obj,
            birthDay: new Date($(`#txtBirthDay`).val()),
        }
    }
    if ($(`#txtPass`).val() !== '') {
        obj = {
            ...obj,
            password: $(`#txtPass`).val(),
        }
    }
    if (fbId) {
        obj = {
            ...obj,
            source: JSON.stringify([{type: 'facebook', memberId: fbId, srcId: srcId}])
        }
    }
    if (ggId) {
        obj = {
            ...obj,
            source: JSON.stringify([{type: 'google', memberId: ggId}])
        }
    }
    let block
    if (psid) {
        if (type == 'Member') {
            block = `memberocop`
        } else if (type == 'Manager') {
            block = `qlocop`
        } else if (type == 'Examiner') {
            block = `cocop`
        }
        obj.psid = psid
        linkherf = `http://m.me/197599867569788?ref=${block}`

    }
    if (!fbId) {
        if ($(`#txtPass`).val() != $(`#txtCfPass`).val()) {
            Swal.fire('Cảnh báo', "Bạn phải xác nhận đúng mật khẩu", 'warning', () => {
                btnSend.disabled = false;
                btnSend.style.color = '#FFFFFF';
            });
            return;
        }
    }

    $('#snipiner').css({
        "display": ""
    })

    $.ajax({
        url: "PostDataRegister",
        type: "POST",
        data: obj,
        contenType: "aplication/json",
        success: function (ret) {
            if (ret.success) {
                $('#snipiner').css({
                    "display": "none"
                });
                newMember = ret.data
                $('#OTPModal').modal('show')
                $('#OTPModal').on('shown.bs.modal', function () {
                    $('#digit-1').focus();
                })
                let time = 60 * 3
                let display = document.querySelector('#countTime');
                startTimer(time, display);
                // let texturl = `Cảm ơn anh/chị đã đăng ký tham gia.Thông tin xác thực đã được gửi tới email của anh/chị. Anh/chị vui lòng kiểm tra email để được tiếp tục!`
                // if (obj.type == 'Member') {
                //     texturl = `Cảm ơn anh/chị đã đăng ký tham gia. Anh/chị vui lòng chọn 'ok' để tiếp tục`
                // }
                // Swal.fire({
                //     title: 'Thành công',
                //     text: texturl,
                //     type: 'success',
                //     confirmButtonColor: '#3085d6',
                //     cancelButtonColor: '#d33',
                //     confirmButtonText: 'Ok'
                // }).then((result) => {
                //     if (result.value) {
                //         window.location.href = linkherf;
                //         MessengerExtensions.requestCloseBrowser(function success() {
                //             console.log("Webview closing");
                //         }, function error(err) {
                //             console.log("getElementById Err:" + err);
                //         });
                //     }
                // })
            } else {
                $('#snipiner').css({
                    "display": "none"
                });
                if (ret.error) {
                    console.warn(ret.error)
                } else if (ret.msg) {
                    let errorMess = ''
                    for (const item of ret.msg) {
                        errorMess += `<div>- ${item}</div>`
                    }
                    Swal.fire({
                        html: `<div>${errorMess}</div>`,
                        type: 'warning',
                    });
                }
            }
        },
        error: function (err) {
            throw new Error(err)
        }
    })
}

function loadBBN() {
    var b = new Option('Chọn', '0');
    $("#txtBBN").append(b);
    BBNS.forEach(data => {
        var o = new Option(data.Name, data._id);
        $("#txtBBN").append(o);
    })
}

$('#txtBBN').change(function () {
    $('#txtstWorkunit').val('')
    let txtBBN = $('#txtBBN Option:selected').val()
    const result = DVCT.filter(data => data.idBBN == txtBBN);
    if (result.length == 0) {
        nof_loadAdress('BBN', 1)
    } else {
        nof_loadAdress('BBN', 0)
    }
})


function startTimer(duration, display) {
    let timer = duration, minutes, seconds;
    timeInterval = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = `(${minutes}:${seconds})`;

        if (--timer < 0) {
            clearInterval(timeInterval)
        }
    }, 1000);
}
