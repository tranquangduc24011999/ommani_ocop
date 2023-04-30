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
                    $(`#stLevel`).show();
                    if (memberLevel) {
                        $(`#btnContinue`).show();
                    } else {
                        $(`#btnContinue`).hide();
                    }
                }
                else if (type == "Examiner") {
                    $(`#levelHeading`)[0].innerHTML = `Cấp chấm`;
                    $(`#stLevel`).show();
                    // $(`.two-level`).hide();
                    if (memberLevel) {
                        $(`#btnContinue`).show();
                    } else {
                        $(`#btnContinue`).hide();
                    }
                    //memberLevel = 0
                    //$('#lvl0-check').prop('checked', true);
                    //$(`#btnContinue`).show();

                }
                else if (type == "HelpTeam") {
                    $(`#levelHeading`)[0].innerHTML = `Cấp tổ tư vấn`;
                    $(`#stLevel`).show();
                    // $(`.two-level`).hide();
                    if (memberLevel) {
                        $(`#btnContinue`).show();
                    } else {
                        $(`#btnContinue`).hide();
                    }
                    // $('#lvl0-check').prop('checked', true);
                    // memberLevel = 0
                    // $(`#btnContinue`).show();

                } else if (type == "Member") {
                    $('#stotherMember').hide()
                    $(`#stLevel`).hide();
                    $(`#btnContinue`).show();

                }

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
        $(".register_step_2").hide();
        if (type == 'Member') {
            // $('#stWorkunit').hide();
            // $(`#memberPositionWrapper`).css('display', 'none');
            $('#type').val("Member");
            $(`#member`).show();
        }
        if (type == "Manager") {
            $(`#manager`).show();
            if (memberLevel == "1") {
                //Trung ương
                $('#stProvical').hide()
                $('#stBBN').show()
                $('#stWorkunit').hide()
                $('#stCbwards').hide()
                $('#stotherMember').hide()
                $('#stManger').hide()
                $('#stWorkunitPro').hide()
                $('#stWorkunitdisTric').hide()
            }
            else if (memberLevel == "2") {
                //Tỉnh
                $('#stBBN').hide()
                $('#stCbwards').hide()
                $('#stotherMember').hide()
                $('#stManger').hide()
                $('#stWorkunit').hide()
                $('#stWorkunitPro').show()
                $('#stWorkunitdisTric').show()
                $('#forProvince').show()
                $('#forDistrict').hide()
            }
            else if (memberLevel == "3") {
                //Huyện
                $('#stCbwards').hide()
                $('#stotherMember').hide()
                $('#stManger').hide()
                $('#stBBN').hide()
                $('#stWorkunit').hide()
                $('#stWorkunitPro').hide()
                $('#stWorkunitdisTric').show()
                $('#forProvince').hide()
                $('#forDistrict').show()
            }
        }
        if (type == "Examiner") {
            $(`#examiner`).show();
            if (memberLevel == "1") {
                $('#stProvicalExaminer').hide()
                $('#stBBNExaminer').show()
                $('#stWorkunitExaminer').hide()
                $('#stCbwardsExaminer').hide()
                $('#stotherMemberExaminer').hide()
                $('#stMangerExaminer').hide()
                $('#stWorkunitProExaminer').hide()
                $('#stWorkunitdisTricExaminer').hide()
            }
            if (memberLevel == "2") {
                $('#stBBNExaminer').hide()
                $('#stCbwardsExaminer').hide()
                $('#stotherMemberExaminer').hide()
                $('#stMangerExaminer').hide()
                $('#stWorkunitExaminer').show()
                $('#stWorkunitProExaminer').show()
                $('#stWorkunitdisTricExaminer').hide()
            }
            else if (memberLevel == "3") {
                $('#stCbwardsExaminer').hide()
                $('#stotherMemberExaminer').hide()
                $('#stMangerExaminer').hide()
                $('#stBBNExaminer').hide()
                $('#stWorkunitExaminer').show()
                $('#stWorkunitProExaminer').hide()
                $('#stWorkunitdisTricExaminer').show()
            }
        }
        if (type == "HelpTeam") {
            $(`#helpteam`).show();
            if (memberLevel == "1") {
                $('#wokerUnit').show()
                $('#stProvicalExaminer').hide()
                $('#stBBNExaminer').show()
                $('#stWorkunitExaminer').hide()
                $('#stCbwardsExaminer').hide()
                $('#stotherMemberExaminer').hide()
                $('#stMangerExaminer').hide()
                $('#stWorkunitProExaminer').hide()
                $('#stWorkunitdisTricExaminer').hide()
            }
            if (memberLevel == "2") {
                $('#stBBNExaminer').hide()
                $('#stCbwardsExaminer').hide()
                $('#stotherMemberExaminer').hide()
                $('#stMangerExaminer').hide()
                $('#stWorkunitExaminer').hide()
                $('#stWorkunitProExaminer').show()
                $('#stWorkunitdisTricExaminer').hide()
            }
            else if (memberLevel == "3") {
                $('#stCbwardsExaminer').hide()
                $('#stotherMemberExaminer').hide()
                $('#stMangerExaminer').hide()
                $('#stBBNExaminer').hide()
                $('#stWorkunitExaminer').hide()
                $('#stWorkunitProExaminer').hide()
                $('#stWorkunitdisTricExaminer').show()
            }
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


})

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
$('select[name="province_id"]').change(function () {
    $.ajax({
        type: 'POST',
        url: '/getdistrictbyprovince?province_id=' + $(this).val(),
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        success: function (data) {
            let html = '';

            data.forEach(function (item) {
                $('select[name="district_id"]').append('<option value=' + item['id'] + '>' + item['name'] + '</option>')
            }, this);
        }
    });
})
$('input[name="level-check"]').change(function () {
    $('.inputLevel').val($(this).val())
})
$(".form-register .btn-submit").click(function () {
    // validate
    let countError = validateForm($(this));
    console.log(countError);
    if (countError === 0) {
        $(this).closest('form').submit();
    }
})

function validateForm(el) {
    $(".text-error").remove();
    let countError = 0;
    let elForm = $(el).closest('form');
    let provinceId = $(elForm).find("select[name='province_id']").val();
    let districtId = $(elForm).find("select[name='district_id']").val();
    var work_unit_id;
    if(memberLevel == "3"){
        work_unit_id = $(elForm).find("select[name='work_unit_id_district']").val();
    }else if(memberLevel == "2"){
        work_unit_id = $(elForm).find("select[name='work_unit_id_province']").val();
    }
    let work_unit = $(elForm).find("input[name='work_unit']").val();
    let name = $(elForm).find("input[name='fullname']").val();
    let position = $(elForm).find("input[name='position']").val();
    let phone = $(elForm).find("input[name='phone']").val();
    let email = $(elForm).find("input[name='email']").val();
    let password = $(elForm).find("input[name='password']").val();
    let re_password = $(elForm).find("input[name='re_password']").val();
    if (provinceId == null && $(elForm).find("select[name='province_id']").is(":visible")) {
        $(elForm).find("select[name='province_id']").after(getErrorValidateEl("Không được để trống"))
        console.log("province_id");
        countError ++;
    }
    if (districtId == null && $(elForm).find("select[name='district_id']").is(":visible")) {
        $(elForm).find("select[name='district_id']").after(getErrorValidateEl("Không được để trống"))
        console.log("district_id");
        countError ++;
    }
    if (name == null || name === '') {
        if ($(elForm).find("input[name='fullname']").is(":visible")) {
            $(elForm).find("input[name='fullname']").after(getErrorValidateEl("Không được để trống"))
            console.log("fullname");
            countError ++;
        }
    }
    if (position == null || position === '') {
        if ($(elForm).find("input[name='position']").is(":visible")) {
            $(elForm).find("input[name='position']").after(getErrorValidateEl("Không được để trống"))
            console.log("position");
            countError ++;
        }
    }

    if ((work_unit_id == null && $(elForm).find("select[name='work_unit_id_district']").is(":visible")) || 
    (work_unit_id == null && $(elForm).find("select[name='work_unit_id_province']").is(":visible"))
    ) {
        $(elForm).find("select[name='work_unit_id_district']").after(getErrorValidateEl("Không được để trống"))
        $(elForm).find("select[name='work_unit_id_province']").after(getErrorValidateEl("Không được để trống"))
        console.log("work_unit_id");
        countError ++;
    }
    if (work_unit == null && $(elForm).find("input[name='work_unit']").is(":visible")) {
        $(elForm).find("input[name='work_unit']").after(getErrorValidateEl("Không được để trống"))
        console.log("work_unit");
        countError ++;
    }
    if ($(elForm).find("input[name='phone']").is(":visible")) {
        if (phone == null || phone === '') {
            $(elForm).find("input[name='phone']").after(getErrorValidateEl("Không được để trống"))
            console.log("phone");
            countError ++;
        } else {
            if (!validatePhoneNumber(phone)) {
                $(elForm).find("input[name='phone']").after(getErrorValidateEl("Số điện thoại không đúng định dạng"))
                console.log("phone");
                countError ++;
            }
        }
    }
    if ($(elForm).find("input[name='email']").is(":visible")) {
        if (email == null || email === '') {
            $(elForm).find("input[name='email']").after(getErrorValidateEl("Không được để trống"))
            console.log("email");
            countError ++;
        } else {
            if (!validateEmail(email)) {
                $(elForm).find("input[name='email']").after(getErrorValidateEl("Email không đúng định dạng"))
                console.log("email");
                countError ++;
            }
        }
    }
    if ($(elForm).find("input[name='password']").is(":visible")) {
        if (password == null || password === '') {
            $(elForm).find("input[name='password']").after(getErrorValidateEl("Không được để trống"))
            console.log("password");
            countError ++;
        }
    }
    if ($(elForm).find("input[name='re_password']").is(":visible")) {
        if (re_password == null || re_password === '') {
            $(elForm).find("input[name='re_password']").after(getErrorValidateEl("Không được để trống"))
            console.log("re_password");
            countError ++;
        } else {
            if (password !== re_password) {
                $(elForm).find("input[name='re_password']").after(getErrorValidateEl("Mật khẩu không khớp "))
                console.log("re_password");
                countError ++;
            }
        }
    }
    return countError;
}

function getErrorValidateEl(text) {
    return "<p class='text-danger mt-1 text-error'>" + text + "</p>";
}

$("input[name='level-check']").click(function () {
    let level = $(this).val();
    if (level === '1' ) { // tw
        $(".districts").hide();
        $(".provinces").hide();
    } else if(level === '2'){ // province
        $(".districts").hide();
        $(".provinces").show();
    } else { // district
        $(".districts").show();
        $(".provinces").show();
    }
})
$("select[name='work_unit_id_district']").change(function () {
    let work_unit_id = $(this).val();
    if (work_unit_id === '100' ) {
        $(this).closest('.form-group').find("input[name='work_unit']").removeClass('d-none');

    } else {
        $(this).closest('.form-group').find("input[name='work_unit']").addClass('d-none');
    }
})

$("select[name='work_unit_id_province']").change(function () {
    let work_unit_id = $(this).val();
    if (work_unit_id === '100' ) {
        $(this).closest('.form-group').find("input[name='work_unit']").removeClass('d-none');

    } else {
        $(this).closest('.form-group').find("input[name='work_unit']").addClass('d-none');
    }
})

$(".btn-back").click(function () {
    $(`#part1`).show();
    $(`#part2`).hide();
})

$(".toggle-password").click(function () {
    if ($(this).closest("div").find("input[type='password']").attr('type') === 'password') {
        $(this).closest("div").find("input[type='password']").attr('type', 'text');
    } else {
        $(this).closest("div").find("input[type='text']").attr('type', 'password');
    }
})



