
var objProvincials;
var objDistricts;
var objWards;
var arrayObject = []
let member
let entity
let addressInfos
function getParam(paramName) {
    var url_string = window.location.href;
    var url = new URL(url_string);
    return url.searchParams.get(paramName);
}
// let psidm = getParam('psid');
// var entityId = getParam('entityId');
function loadDate() {
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
    $(`#dateEnd-selector`).val(
        `${new Date().getFullYear()}-${valMonth}-${valDate}`
    );
}
var typeAdress = [
    {
        _id: 1,
        Name: "Doanh nghiệp",
        val: "DOANHNGHIEP"
    },
    {
        _id: 2,
        Name: "Hợp tác xã",
        val: "HOPTACXA"
    },
    {
        _id: 3,
        Name: "Tổ hợp tác",
        val: "TOHOPTAC"
    },
    {
        _id: 4,
        Name: "Hộ kinh doanh cá thể",
        val: "HOKINHDOANHCATHE"
    },

] //KHAI BÁO mảng loại hình đơn vị
var typeAdressSon = [
    {
        typeAdress: 1,
        Name: "Doanh nghiệp tư nhân",
        _id: "DOANHNGHIEPTUNHAN"
    },
    {
        typeAdress: 1,
        Name: "Công ty TNHH 1 thành viên",
        _id: "CONGTYTNHH1THANHVIEN"
    },
    {
        typeAdress: 1,
        Name: "Công ty TNHH 2 thành viên",
        _id: "CONGTYTNHH2THANHVIEN"
    },
    {
        typeAdress: 1,
        Name: "Công ty Cổ phần",
        _id: "CONGTYCOPHAN"
    },
    {
        typeAdress: 1,
        Name: "Công ty Hợp danh",
        _id: "CONGTYHOPDANH"
    },

] //loại hình doanh nghiệp

function loadTypeAdress() {
    var b = new Option('Chọn', '0');
    $("#txtTypeAdress").append(b);
    typeAdress.forEach(data => {
        var o = new Option(data.Name, data._id);
        $("#txtTypeAdress").append(o);
    });
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
                var o = new Option(objProvincials[0].Name, `${objProvincials[0]._id},${objProvincials[0].GeoCode}`);
                $("#cboProvincial").append(o);
                LoadCboDistricts(objProvincials[0]._id, objProvincials[0].Name);
            }
            else {
                // if (cboProvincial.length > 0) cboProvincial.options[0] = new Option("Chọn", "0");
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
            // getEntity()
            if (provicial) {

                $('#cboProvincial').val(`${provicial}`);
                $('#cboProvincial').trigger('change');
            }
        },
        error: function (err) {
            if (err.responseText == 'Unauthorized') {
                AlertWarning("Bạn đã bị time out", '', 'error');
                window.location.href = 'login.html';
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
            // while (selectElemRef.length > 0) {
            //     selectElemRef.remove(0);
            // }
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
            // cboDistricts.append(gr);
            nof_loadAdress('district', 0);
            if (data.length == 1) {
                $('#cboDistricts').select2('val', [data[0]._id]);
            }
            //  else if (entityId && entityInfo.addressInfo.districtId && entityInfo.addressInfo.districtId !== 'NA') {
            //     $(`#cboDistricts`).val(`${entityInfo.addressInfo.districtId}`).trigger('change');
            //     $(`#cboDistricts option[value="${entityInfo.addressInfo.districtId}"]`).attr('selected', true);
            // }
            if (distric) {
                console.log(distric, 1998)
                $('#cboDistricts').val(distric);
                $('#cboDistricts').trigger('change');
            }
        },
        error: function (err) {
            if (err.responseText == 'Unauthorized') {
                AlertWarning("Bạn đã bị time out", '', 'error');
                window.location.href = 'login.html';
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
            // while (selectElemRef.length > 0) {
            //     selectElemRef.remove(0);
            // }
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
            //  else if (entityId && entityInfo.addressInfo.wardId && entityInfo.addressInfo.wardId !== 'NA') {
            //     $(`#cboWards`).val(`${entityInfo.addressInfo.wardId}`).trigger('change');
            //     $(`#cboWards option[value="${entityInfo.addressInfo.wardId}"]`).attr('selected', true);
            //     $(`#entitySection select`).prop('disabled', true);
            // }
            if (ward) {
                $('#cboWards').val(ward);
                $('#cboWards').trigger('change');
            }

        },
        error: function (err) {
            if (err.responseText == 'Unauthorized') {
                AlertWarning("Bạn đã bị time out", '', 'error');
                window.location.href = 'login.html';
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
$(document).ready(function () {
    $('#cboProvincial').select2()
    $('#cboDistricts').select2()
    $('#cboWards').select2()
    $('#txtBBN').select2()
    $('#txtstWorkunit').select2()
    $('#txtGender').select2()
    let txtGender = $('#txtGender option:selected').val()
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
    nof_load('Member')


})
$('#cboProvincial').on("change", function (e) {
    $('#cboDistricts').select2('val', ['0'])
    document.getElementById("cboDistricts").options.length = 0;
    $('#cboDistricts')
        .find('option')
        .remove()
        .end()
    let Text = $('#cboProvincial option:selected').text()
    let Id = $('#cboProvincial option:selected').val()
    let ids 
    if(Id){
        ids = Id.split(',')
        LoadCboDistricts(ids[0], Text)
    }
   
});
$('#cboDistricts').on("change", function (e) {
    $('#cboWards').select2('val', ['0'])
    document.getElementById("cboWards").options.length = '';
    let Text = $('#cboDistricts option:selected').text()
    let Id = $('#cboDistricts option:selected').val()
    if (Text == undefined || Id == undefined) {
        console.log('Load chậm')
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
$('#txtTypeAdress').change(function () {
    let txtTypeAdress = $('#txtTypeAdress Option:selected').val()
})
$('#txtTypeAdresson').change(function () {
    let txtTypeAdresson = $('#txtTypeAdresson Option:selected').val()
    if (txtTypeAdresson == 'DOANHNGHIEPTUNHAN' || txtTypeAdresson == "CONGTYTNHH1THANHVIEN") {
        nof_load('1')
    } if (txtTypeAdresson == "CONGTYTNHH2THANHVIEN") {
        nof_load('2')
    } if (txtTypeAdresson == "CONGTYCOPHAN" || txtTypeAdresson == "CONGTYHOPDANH") {
        nof_load('3')
    }
})
function nof_load(block) {
    switch (block) {
        case '1':
            $('#SLD').show()
            $('#SLDDP').show()
            $('#MTNBQLD').show()

            $('#STVQTCC').hide()
            $('#STVQTCCTT').hide()
            $('#SPNDPLQTCC').hide()
            $('#SVGDL').hide()
            $('#SVGCDDP').hide()
            $('#NTL').hide()
            $('#SDKTLHTX').hide()
            $('#HVT').hide()

            $('#DC').hide()
            $('#E').hide()
            $('#SDT').hide()
            $('#AIMG').show()
            $('#SNTGHTX').hide()
            $('#STVLNDP').hide()
            break;
        case '2':

            $('#SLD').show()
            $('#SLDDP').show()
            $('#MTNBQLD').show()

            $('#STVQTCC').show()
            $('#STVQTCCTT').show()
            $('#SPNDPLQTCC').show()

            $('#SVGDL').hide()
            $('#SVGCDDP').hide()
            $('#NTL').hide()
            $('#SDKTLHTX').hide()
            $('#HVT').hide()

            $('#DC').hide()
            $('#E').hide()
            $('#SDT').hide()
            $('#AIMG').show()

            $('#SNTGHTX').hide()
            $('#STVLNDP').hide()
            break;
        case '3':

            $('#SLD').show()
            $('#SLDDP').show()
            $('#MTNBQLD').show()
            $('#SVGDL').show()
            $('#SVGCDDP').show()

            $('#STVQTCC').hide()
            $('#STVQTCCTT').hide()
            $('#SPNDPLQTCC').hide()
            $('#NTL').hide()
            $('#SDKTLHTX').hide()
            $('#HVT').hide()

            $('#DC').hide()
            $('#E').hide()
            $('#SDT').hide()
            $('#AIMG').show()

            $('#SNTGHTX').hide()
            $('#STVLNDP').hide()
            break;
        case '4':
            $('#NTL').show()
            $('#HVT').show()

            $('#DC').show()
            $('#E').show()
            $('#SDT').show()
            $('#AIMG').show()
            $(`#uploadImgText`)[0].innerHTML = `XIN MỜI CHỤP ẢNH HOẶC ĐĂNG TẢI ẢNH SCAN GIẤY CHỨNG NHẬN ĐĂNG KÝ HỢP TÁC XÃ`
            $('#SNTGHTX').show()
            $('#STVLNDP').show()
            $('#SDKTLHTX').show()

            $('#LHDN').hide()
            // $('#LHDN').css({'display':"none"})
            $('#SLD').hide()
            $('#SLDDP').hide()
            $('#MTNBQLD').hide()
            $('#SVGDL').hide()
            $('#SVGCDDP').hide()

            $('#STVQTCC').hide()
            $('#STVQTCCTT').hide()
            $('#SPNDPLQTCC').hide()
            break;
        case '5':
            $('#HVT').show()
            $('#DC').show()
            $('#E').show()
            $('#SDT').show()
            $('#AIMG').show()
            $(`#uploadImgText`)[0].innerHTML = `XIN MỜI CHỤP ẢNH HOẶC ĐĂNG TẢI ẢNH SCAN GIẤY CHỨNG NHẬN ĐĂNG KÝ HỢP TÁC XÃ`
            $('#SNTGHTX').show()
            $('#STVLNDP').show()
            $('#NTL').show()
            $('#LHDN').hide()
            // $('#LHDN').css({'display':"none"})
            $('#SLD').hide()
            $('#SLDDP').hide()
            $('#MTNBQLD').hide()
            $('#SVGDL').hide()
            $('#SVGCDDP').hide()
            $('#STVQTCC').hide()
            $('#STVQTCCTT').hide()
            $('#SPNDPLQTCC').hide()
            $('#SDKTLHTX').hide()
            break;
        case '6':
            $('#NTL').hide()
            $('#LHDN').hide()
            $('#SLD').hide()
            $('#SLDDP').hide()
            $('#MTNBQLD').hide()
            $('#SVGDL').hide()
            $('#SVGCDDP').hide()

            $('#STVQTCC').hide()
            $('#STVQTCCTT').hide()
            $('#SPNDPLQTCC').hide()

            $('#SDKTLHTX').hide()
            $('#HVT').show()
            $('#DC').show()
            $('#E').show()
            $('#SDT').show()
            $('#AIMG').show()
            $(`#uploadImgText`)[0].innerHTML = `XIN MỜI CHỤP ẢNH HOẶC ĐĂNG TẢI ẢNH SCAN GIẤY CHỨNG NHẬN ĐĂNG KÝ HỢP TÁC XÃ`
            $('#SNTGHTX').hide()
            $('#STVLNDP').hide()
            break;
        case '7':
            $(`#GPDKKD`).show()
            $('#LHDN').show()
            $('#SLD').hide()
            $('#SLDDP').hide()
            $('#MTNBQLD').hide()

            $('#STVQTCC').hide()
            $('#STVQTCCTT').hide()
            $('#SPNDPLQTCC').hide()
            $('#SVGDL').hide()
            $('#SVGCDDP').hide()
            $('#NTL').hide()
            $('#SDKTLHTX').hide()
            $('#HVT').hide()

            $('#DC').hide()
            $('#E').show()
            $('#SDT').show()
            $('#AIMG').show()
            $(`#uploadImgText`)[0].innerHTML = `CHỤP HOẶC ĐĂNG TẢI ẢNH SCAN GIẤY PHÉP ĐĂNG KÝ KINH DOANH`
            $('#SNTGHTX').hide()
            $('#STVLNDP').hide()
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
loadTypeAdress()
if (!entityId) {
LoadCboProvincials()
}
loadDate()
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
    dictDefaultMessage: '<span style="font-weight: 600;font-family: sans-serif; color: #039252"><i class="fas fa-cloud-upload-alt fa-5x"></i><br> Chọn ảnh</span><i class="fa fa-folders"></i>',
    dictCancelUpload: 'Xóa',
    accept: function (file, done) {
        $('.nextBtn').attr('disabled', 'disabled');
        var progressElement = file.previewElement.querySelector("[data-dz-uploadprogress]");
        for (let i = 0; i < 60; i++) {
            setTimeout(() => {
                progressElement.style.width = i + "%";
            }, 1);
        }
        var contentType = file.type;
        var filename = file.name
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
                    progressElement.style.width = 100 + "%";
                    $('.dz-progress').css("opacity", "0")
                    $(".dz-success-mark svg").css("display", "");
                    $(".dz-success-mark").css("opacity", "1");
                    $(".dz-error-mark").css("display", "none");
                    setTimeout(() => {
                        $(".dz-success-mark").css("opacity", "0");
                    }, 1000);
                    let dataName = `https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/` + filename
                    arrayObject.push(dataName)
                    $('.nextBtn').removeAttr('disabled');
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
            arrayObject.splice(arrayObject.indexOf(file.name), 1);
            file.previewElement.remove();
        } else {
            this.files.splice(this.files.indexOf(file), 1);
            file.previewElement.remove();
        }
        let fileName = "https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/" + file.name
        for (let i = 0; i < arrayObject.length; i++) {
            if (arrayObject[i] == fileName) {
                arrayObject.splice(i, 1)
                return arrayObject
            }
        }
    }
}

$("input:checkbox").on('click', function () {
    // in the handler, 'this' refers to the box clicked on
    var $box = $(this);
    if ($box.is(":checked")) {
        // the name of the box is retrieved using the .attr() method
        // as it is assumed and expected to be immutable
        var group = "input:checkbox[name='" + $box.attr("name") + "']";
        // the checked state of the group/box on the other hand will change
        // and the current value is retrieved using .prop() method
        $(group).prop("checked", false);
        $box.prop("checked", true);
    } else {
        $box.prop("checked", false);
    }
});

const getEntity = () => {
    if (entityId) {
        $.ajax({
            type: `GET`,
            url: `/getEntity?entityId=${entityId}`,
            success: (results) => {
                if (results.success) {
                    console.log(results, 1998)
                    entityInfo = results.data[0];
                    if (entityInfo) {
                        $(`#txtName`).val(entityInfo.name);
                        $("#txtTypeAdress option").filter(function () {
                            return this.text == entityInfo.typeId;
                        }).attr('selected', true);
                        $('#txtTypeAdress').val($("#txtTypeAdress").val()).change();
                        provicial = `${_.get(results, "data[0].addressInfo.provinceId", '')},${_.get(results, "data[0].addressInfo.provinceGeoCode", '')}`
                        distric = _.get(results, "data[0].addressInfo.districtId", '')
                        ward = _.get(results, "data[0].addressInfo.wardId", '')
                        typeId = _.get(results, "data[0].entityInfo[0].typeId", '')
                        LoadCboProvincials()
                        // $("#txtTypeAdresson option").filter(function () {
                        //     return this.text == entityInfo.subtypeId;
                        // }).attr('selected', true);
                        // $('#txtTypeAdresson').val($("#txtTypeAdresson").val()).change();
                        // if (entityInfo.des) {
                        //     $(`#txtquanLabor`).val(`${entityInfo.des.amountLabor ? entityInfo.des.amountLabor : ''}`);
                        //     $(`#txtquanLaborThis`).val(entityInfo.des.amountLaborDistric ? entityInfo.des.amountLabor : '');
                        //     $(`#txtincomeLabor`).val(entityInfo.des.mediumSalaryLabor ? entityInfo.des.mediumSalaryLabor : '');
                        //     if(entityInfo.des.nameObject){
                        //         $('#txtMemberName').val(`${entityInfo.des.nameObject}`)
                        //     }
                        // }
                        // $(`.radio[value='${entityInfo.accountancy ? entityInfo.accountancy : ''}']`).attr('checked', true);
                        // if (entityInfo.addressInfo.provinceId !== 'NA' && entityInfo.addressInfo.provinceId && entityInfo.addressInfo.provinceGeoCode) {
                        //     $(`#cboProvincial`).val(`${entityInfo.addressInfo.provinceId},${entityInfo.addressInfo.provinceGeoCode}`).trigger('change');
                        //     $(`#cboProvincial option[value="${entityInfo.addressInfo.provinceId},${entityInfo.addressInfo.provinceGeoCode}"]`).attr('selected', true);
                        //     $(`#entitySection input`).prop('disabled', true);
                        // }
                        if (entityInfo.addressInfo) {
                            addressInfos = entityInfo.addressInfo
                        }

                        // $("#cboDistricts option").filter(function () {
                        //     return this.text == entityInfo.addressInfo.districtName
                        // }).attr('selected', true);

                        // $("#cboWards option").filter(function () {
                        //     return this.text == entityInfo.addressInfo.wardName;
                        // }).attr('selected', true);


                        // $(`.stepwizard-step [href="#step-2"]`).click();
                        // $(`#step-1 input`).attr('disabled', true);
                        // $(`#step-1 select`).attr('disabled', true);
                        // $(`#cboProvincial`).select2("enable", false)
                        // if (entityInfo.email) {
                        //     $('#txtMemberEmail').val(`${entityInfo.email}`)
                        // } if (entityInfo.phone) {
                        //     $('#txtMemberPhone').val(`${entityInfo.phone}`)
                        // }
                    }
                } else {
                    console.warn(`error at get entity`, results.error);
                }
            },
            error: (jqXHR, textStatus, errorThrown) => {
                console.warn(errorThrown);
            }
        })
    }

}