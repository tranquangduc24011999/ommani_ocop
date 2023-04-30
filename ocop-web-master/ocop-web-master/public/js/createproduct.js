var fileObj = {};
let starRate;
let moneyByYear = [];
let thisYear = new Date().getFullYear();
let minYear = thisYear;
// let ImgsArray = [];
let entityInfo;
let provicial = false
let distric = false
let ward = false
let typeId = false
let ImgProduct = []
let enlityId
let enlityEdit
let statusProduct = false
let active = false
let changeTypeId = false
let typetext = false

// Dropzone
function getParam (paramName) {
    var url_string = window.location.href;
    var url = new URL(url_string);
    return url.searchParams.get(paramName);
}
// let psid = getParam('psid');
var entityId = getParam('entity_id');
var productId = getParam('product_id');
var editrole = getParam('edit');
Dropzone.options.mydropzone = {
    url: '/#',
    uploadMultiple: false,
    autoDiscover: true,
    // maxFilesize: 1,
    maxFiles: 1,
    autoProcessQueue: false,
    parallelUploads: 100,
    dictResponseError: false,
    dictRemoveFile: 'Xóa',
    acceptedFiles: 'image/jpeg,image/png,image/gif,image/jpg',
    addRemoveLinks: true,
    dictDefaultMessage: '<span style="font-weight: 600;font-family: sans-serif; color: #039252"><i class="fas fa-cloud-upload-alt fa-5x"></i><br> Chọn ảnh</span><i class="fa fa-folders"></i>',
    dictCancelUpload: 'Xóa',
    accept: function (file, done) {
        $('#EditStep').prop("disabled", true);
        ImgProduct = []
        if (this.files.length > 1) {
            this.removeFile(this.files[0]);
        }
        var progressElement = file.previewElement.querySelector("[data-dz-uploadprogress]");
        for (let i = 0; i < 60; i++) {
            setTimeout(() => {
                progressElement.style.width = i + "%";
            }, 1);
        }
        var contentType = file.type;
        var filename = new Date().getTime() +'_'+file.name;
        let array = [];
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
                    let dataName = `https://`+ awsBucket +`.s3.ap-southeast-1.amazonaws.com/ocop/` + filename
                    // ImgsArray = [dataName];
                    ImgProduct = [dataName]
                    $('#EditStep').prop("disabled", false);
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
        ImgProduct = []
        file.previewElement.remove();
        // ImgsArray = [];
    }
}
// Kiểm tra xem đã có thông tin chủ thể hay chưa


$(() => {
    //loadsesion()
    if (productId) {
        $('#complete3Steps').hide()
        $('#EditStep').show()
        //loadEditProduct(productId)
    } else {
        getoptionProductType()
    }
    if (entityId) {
        disableEntiti()
        getEntity()
    }
    if(editrole){
        disableEntiti()
    }
    // if(!entityId){
    //     getoptionProductType()
    // }
    // getEntity()
    // Lấy các nhóm sản phẩm

    //
    $(`.rate`).on('change', (event) => {
        starRate = event.target.value;
        console.log(starRate);
    });

    for (let year = thisYear - 1; year >= thisYear - 3; year--) {
        minYear = year;
        moneyByYear.push({
            year: year,
            revenue: 0,
            cost: 0
        });
        $(`#revenueTable tbody`).append(`
            <tr id='year-${year}'>
                <td class="pl-2 pr-2">${year}</td>
                <td class="pl-2 pr-2"><input id='revenue-${year}' class="form-control text-center" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency" style="width: 100%;" placeholder="0"></td>
                <td class="pl-2 pr-2"><input id='cost-${year}' class="form-control text-center" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency" style="width: 100%;" placeholder="0"></td>
            </tr>
        `);
    }
    $("input[data-type='currency']").on({
        keyup: function () {
            formatCurrency($(this));
        },
        blur: function () {
            formatCurrency($(this), "blur");
        }
    });
});

const loadsesion = () => {
    $.ajax({
        url: "loadsesion",
        type: "GET",
        success: function (ret) {
            if (ret) {
                typetext = ret.type
            }
        }
    })
}

const getoptionProductType = () => {
    $.ajax({
        type: `GET`,
        url: `/getProductType?product_Set=1`,
        success: (result) => {
            if (result.success) {
                result.data.forEach(type => {
                    // $(`#productType`).append(`<option value='${type.BranchName}__${type.Code}'>&nbsp&nbsp${type.Name}</option>`);
                    $(`#productType`).append(`<option value='${type._id}'>&nbsp&nbsp${type.name}</option>`);
                });
                $(`#productType option[value=${changeTypeId}]`).prop('selected', true);
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
}
const loadEditProduct = (id) => {
    // $('div.dz-success').remove();
    $.ajax({
        url: "getProductDetailWithEntity?id=" + id,
        type: "GET",
        success: (ret) => {
            if (ret.success) {
                console.log(ret, 1998)
                changeTypeId = _.get(ret, "data[0].typeId", '')
                enlityEdit = _.get(ret, "data[0].entitiesId", '')
                statusProduct = _.get(ret, "data[0].status", '')
                active = _.get(ret, "data[0].confirm", '')
                // if((statusProduct =="Done" && active!==1) || statusProduct =="Submiting" || statusProduct == "Preparing" || statusProduct == "Fail"){
                $('#EditStep').removeAttr("disabled");
                // }
                productName.value = _.get(ret, "data[0].name", '')
                txtName.value = _.get(ret, "data[0].entityInfo[0].name", '')
                let mockFile = {
                    name: `${_.get(ret, "data[0].imgUrl[0]", '').split(`https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/`)[1]}`,
                    size: 12345,
                    type: 'image/jpeg'
                };
                ImgProduct.push(_.get(ret, "data[0].imgUrl[0]", ''))
                Dropzone.forElement(`div#mydropzone`).emit("addedfile", mockFile);
                Dropzone.forElement(`div#mydropzone`).emit("success", mockFile);
                Dropzone.forElement(`div#mydropzone`).emit("thumbnail", mockFile, `${_.get(ret, "data[0].imgUrl[0]", '')}`);
                Dropzone.forElement(`div#mydropzone`).emit("complete", mockFile);
                Dropzone.forElement(`div#mydropzone`).files.push(mockFile);
                provicial = `${_.get(ret, "data[0].addressInfo.provinceId", '')},${_.get(ret, "data[0].addressInfo.provinceGeoCode", '')}`
                distric = _.get(ret, "data[0].addressInfo.districtId", '')
                ward = _.get(ret, "data[0].addressInfo.wardId", '')
                typeId = _.get(ret, "data[0].entityInfo[0].typeId", '')
                $(`#txtTypeAdress option:contains(${_.get(ret, "data[0].entityInfo[0].typeId", '')})`).attr('selected', 'selected');
                getoptionProductType();
                $('#cboProvincial').val(`${provicial}`);
                $('#cboProvincial').trigger('change');
                if (editrole) {
                    $('#productType').prop("disabled", true);
                    if (statusProduct == "Done" || statusProduct == "Submiting" || statusProduct == "Preparing" || statusProduct == "Fail") {
                        $('#productType').prop("disabled", false);
                    }
                }
            }
        }
    })

}
// Jquery Dependency
function formatNumber (n) {
    // format number 1000000 to 1,234,567
    return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}

function formatCurrency (input) {
    $(`#${input[0].id}`).val(formatNumber(input.val()));
}

const deleteRowByYear = (year) => {
    $(`#year-${year}`).remove();
    moneyByYear = moneyByYear.filter(yearData => yearData.year != year)
    // minYear += 1;
}

const addRowToRevenueTable = () => {
    minYear -= 1;
    moneyByYear.push({
        year: minYear,
        revenue: 0,
        cost: 0
    });
    $(`#revenueTable tbody`).append(`
        <tr id='year-${minYear}'>
            <td class="pl-2 pr-2"><div>${minYear}</div><button onclick="deleteRowByYear(${minYear})" class='btn' style="background-color: #275641; color: white"><b>-</b></button></td>
            <td class="pl-2 pr-2"><input id='revenue-${minYear}' class="form-control text-center" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency" style="width: 100%;" placeholder="0"></td>
            <td class="pl-2 pr-2"><input id='cost-${minYear}' class="form-control text-center" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency" style="width: 100%;" placeholder="0"></td>
        </tr>
    `)
}
const saveProduct = () => {
    var _token = $('meta[name="csrf-token"]').attr('content');
    var name = $(`#productName`).val().trim();//Tên sp
    var product_type = $(`#productType`).val().trim();
    var province_id = $(`#province`).val().trim();
    var district_id = $(`#district`).val().trim();
    var ward_id = $(`#ward`).val().trim();
    var province_code = document.getElementById("provinceCode").innerText;
    var district_code = document.getElementById("districtCode").innerText;
    var year = document.getElementById("year").innerText;
    var product_count = $(`#productCount`).val().trim();


    if (ImgProduct.length == 0) {
        return Swal.fire({
            type: 'warning',
            title: '',
            text: 'Hình ảnh sản phẩm không được để trống!',
        });
    }
    if(name.length == 0){
        return Swal.fire({
            type: 'warning',
            title: '',
            text: 'Chưa nhập tên sản phẩm',
        });
    }
    if(product_type.length == 0){
        return Swal.fire({
            type: 'warning',
            title: '',
            text: 'Chưa chọn bộ sản phẩm đăng ký',
        });
    }

    $.ajax({
        url: '/createproduct',
        type: 'POST',
        cache: false,
        data: {
            "_token":_token,
            "entity_id":entityId,
            "name":name,
            "product_type":product_type,
            "image":ImgProduct[0],
            "province_id":province_id,
            "district_id":district_id,
            "ward_id":ward_id,
            "code":province_code + district_code + product_count+year
        },
        success:function(data){
            console.log(data);
            if(data === 'success'){
                Swal.fire({
                    type: 'success',
                    title: '',
                    text: 'Thêm sản phẩm thành công.',
                }).then((result) => {
                    if (result.value) {
                        MessengerExtensions.requestCloseBrowser(function success () {
                            console.log("Webview closing");
                        }, function error (err) {
                            console.log("getElementById Err:" + err);
                        });
                        window.location.href = `/entities`
                    }
                })
            }else{
                if(data === 'failed'){
                    return Swal.fire({
                        type: 'warning',
                        title: '',
                        text: 'Tạo sản phẩm thất bại. Xin vui lòng thử lại',
                    });
                }else{
                    return Swal.fire({
                        type: 'warning',
                        title: '',
                        text: data,
                    });
                }

            }
        }
    });

}

const updateProduct = () => {
    var _token = $('meta[name="csrf-token"]').attr('content');
    var name = $(`#productName`).val().trim();//Tên sp
    var product_type = $(`#productType`).val().trim();
    var province_id = $(`#province`).val().trim();
    var district_id = $(`#district`).val().trim();
    var ward_id = $(`#ward`).val().trim();
    var province_code = document.getElementById("provinceCode").innerText;
    var district_code = document.getElementById("districtCode").innerText;
    var year = document.getElementById("year").innerText;
    var product_count = $(`#productCount`).val().trim();
    if(name.length == 0){
        return Swal.fire({
            type: 'warning',
            title: '',
            text: 'Chưa nhập tên sản phẩm',
        });
    }
    if(product_type.length == 0){
        return Swal.fire({
            type: 'warning',
            title: '',
            text: 'Chưa chọn bộ sản phẩm đăng ký',
        });
    }

    $.ajax({
        url: '/editproduct',
        type: 'POST',
        cache: false,
        data: {
            "product_id": productId,
            "_token":_token,
            "entity_id":entityId,
            "name":name,
            "product_type":product_type,
            "image":ImgProduct.length > 0 ? ImgProduct[0] : '',
            "province_id":province_id,
            "district_id":district_id,
            "ward_id":ward_id,
            "code":province_code + district_code + product_count+year
        },
        success:function(data){
            console.log(data);
            if(data === 'success'){
                Swal.fire({
                    type: 'success',
                    title: '',
                    text: 'Cập nhật sản phẩm thành công.',
                }).then((result) => {
                    if (result.value) {
                        MessengerExtensions.requestCloseBrowser(function success () {
                            console.log("Webview closing");
                        }, function error (err) {
                            console.log("getElementById Err:" + err);
                        });
                        window.location.href = `/entities`
                    }
                })
            }else{
                return Swal.fire({
                    type: 'warning',
                    title: '',
                    text: 'Tạo sản phẩm thất bại. Xin vui lòng thử lại',
                });
            }
        }
    });

}

//các comment cũ tạm thời lưu lại hiện tại nhiều bảng vẫn chưa có
const saveInformation = (role) => {
    let District = $('#cboDistricts option:selected').text()
    let IdDistrict = $('#cboDistricts option:selected').val()
    let ward = $('#cboWards option:selected').text()
    let Idward = $('#cboWards option:selected').val()
    let textmess = 'Đã thêm thành công'
    fileObj = {
        name: $(`#productName`).val().trim(),//Tên sp
        typeId: $(`#productType`).val().trim(),
        imgUrl: ImgProduct,
    }
    if (ImgProduct.length == 0) {
        return Swal.fire({
            type: 'warning',
            title: '',
            text: 'Hình ảnh sản phẩm không được để trống!',
        });
    }
    let txtTypeAdressText = $('#txtTypeAdress option:selected').text()
    let txtTypeAdressId = $('#txtTypeAdress option:selected').val()
    let Provincial = $('#cboProvincial option:selected').text()
    let IdProvincial = $('#cboProvincial option:selected').val()
    let txtName = $('#txtName').val().trim();
    let IdProvincials = IdProvincial.split(',');
    let addressInfoData = {
        provinceName: Provincial !== "" ? Provincial : 'NA',
        provinceId: IdProvincial !== "0" ? IdProvincials[0] : 'NA',
        districtName: District !== "" ? District : 'NA',
        districtId: IdDistrict !== "0" ? IdDistrict : 'NA',
        wardName: ward !== "" ? ward : 'NA',
        wardId: Idward !== "0" ? Idward : 'NA',
        provinceGeoCode: IdProvincials[1]
    }
    fileObj.addressInfo = addressInfoData;
    if (role == "save") {
        if (fileObj.name.length == 0 || fileObj.typeId.length == 0 || fileObj.imgUrl.length == 0) {
            $(`#complete3Steps`).attr('disabled', false);
            return Swal.fire({
                type: 'warning',
                title: '',
                text: 'Vui lòng nhập đầy đủ thông tin sản phẩm',
            });
        }
        if (!IdProvincial || !IdDistrict || !Idward || Idward == 0 || !txtTypeAdressId || txtTypeAdressId == 0) {
            return Swal.fire({
                type: 'warning',
                title: '',
                text: 'Vui lòng nhập đầy đủ thông tin chủ thể',
            });
        }
    }
    entity = {
        name: txtName,
        addressInfo: addressInfoData,
        typeId: txtTypeAdressText, //loại hình đơn vị
    }
    $('#quality-target input:checked').each(function () {
        fileObj.des.qualityTarget.push(this.nextElementSibling.innerText);
    });

    let url = `/register`;
    if (role == "update") {
        textmess = 'Đã sửa thành công'
        url = `/updateProductEnliTy`
        fileObj.imgUrl = ImgProduct
        fileObj._id = productId
        entity._id = enlityEdit
        fileObj.addressInfo = {
            provinceName: Provincial !== "" ? Provincial : 'NA',
            provinceId: IdProvincial !== "0" ? IdProvincials[0] : 'NA',
            districtName: District !== "" ? District : 'NA',
            districtId: IdDistrict !== "0" ? IdDistrict : 'NA',
            wardName: ward !== "" ? ward : 'NA',
            wardId: Idward !== "0" ? Idward : 'NA',
            provinceGeoCode: IdProvincials[1]
        }
        if (changeTypeId !== fileObj.typeId) {
            fileObj.changeType = true
        }
    }

    if (entityId) {
        url += `?entityIdquery=${entityId}`;
        dataObj = {
            // memberId:memberId,
            productsInfo: JSON.stringify(fileObj),
        }
    } else {
        if (entity.name.length == 0 || entity.typeId.length == 0) {
            $(`#complete3Steps`).attr('disabled', false);
            return Swal.fire({
                type: 'warning',
                title: '',
                text: 'Vui lòng cung cấp đầy đủ thông tin chủ thể',
            });
        }
        dataObj = {
            // memberId:memberId,
            productsInfo: JSON.stringify(fileObj),
            entity: JSON.stringify(entity)
        }
    }
    if (editrole) {
        if (changeTypeId !== fileObj.typeId) {
            Swal.fire({
                text: 'Việc thay đổi nhóm ngành của sản phẩm, sẽ khiến tất cả phiếu chấm, viện dẫn, ghi chú của Anh/Chị thay đổi,Bạn có muốn tiếp tục',
                showCancelButton: true,
                confirmButtonText: `Tiếp tục`,
                cancelButtonText: `Từ chối`,
            }).then((result) => {
                if (result.value) {
                    sendDataEditProduct(dataObj, textmess, url)
                } else {
                    return
                }
            })

        } else {
            sendDataEditProduct(dataObj, textmess, url)
        }
    } else {
        sendDataEditProduct(dataObj, textmess, url)
    }
}

const sendDataEditProduct = (dataObj, textmess, url) => {
    $(`#complete3Steps`).attr('disabled', true);
    $.ajax({
        type: `POST`,
        url: url,
        data: dataObj,
        success: (data) => {
            if (data == 'success') {
                Swal.fire({
                    type: 'success',
                    title: '',
                    text: textmess,
                }).then((result) => {
                    if (result.value) {
                        MessengerExtensions.requestCloseBrowser(function success () {
                            console.log("Webview closing");
                        }, function error (err) {
                            console.log("getElementById Err:" + err);
                        });
                        if (typetext && typetext == "HelpTeam") {
                            window.location.href = `/getproductHelpTeam`
                        } else {
                            window.location.href = `/getproductbyentities`
                        }

                    }
                })
            } else {
                Swal.fire({
                    type: 'error',
                    title: '',
                    text: 'Đã xảy ra lỗi, vui lòng thử lại',
                });
                $(`#complete3Steps`).attr('disabled', false);
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
            Swal.fire({
                type: 'error',
                title: '',
                text: 'Đã xảy ra lỗi, vui lòng thử lại',
            });
            $(`#complete3Steps`).attr('disabled', false);
        }
    })
}
const disableEntiti = () => {
    $('#txtName').prop({ "disabled": true })
    $('#txtTypeAdress').prop({ "disabled": true })

    $("#cboProvincial").change(function () {
        $(this).prop("disabled", true);
    });
    $("#cboDistricts").change(function () {
        $(this).prop("disabled", true);
    });
    $("#cboWards").change(function () {
        $(this).prop("disabled", true);
    });
}
