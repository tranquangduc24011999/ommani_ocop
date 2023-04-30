let provicial = false
let distric = false
let ward = false
var isFirstLoad = true;
function getParam(paramName) {
    var url_string = window.location.href;
    var url = new URL(url_string);
    return url.searchParams.get(paramName);
}
var nameEnlity = false
var entityIds
var user = JSON.parse(window.localStorage.getItem('user'));
var memberId = user.id;
$(document).ready(function () {
    getEntities();
})

function getEntities(){
    if (isFirstLoad) {
        swal({
            title: "Đang tải thông tin!",
            imageUrl: '/images/Curve-Loading.gif',
            text: "Xin vui lòng chờ trong giây lát ...",
            showConfirmButton: false
        });
    }
    $.ajax({
        url: "getentitiesbyuserid",
        type: "GET",
        success: function (ret) {
            if (ret.entities.length > 0) {
                drawMember(ret)
            }else{
                isFirstLoad = false;
                Swal.close();
            }
          
        }
    })
}


function clickli(id, name) {
    entityIds = id
    nameEnlity = name
    document.getElementById('textTitle').innerHTML = ``
    document.getElementById('textTitle').innerHTML = `HỒ SƠ: ${name}`
    $.ajax({
        url: "getproductsbyentityid?entity_id=" + id,
        type: "GET",
        success: function (response) {
            isFirstLoad = false;
            drawproductInfo(response)
            Swal.close();
        }
    })
}
function locations() {
    if (entityIds) {
        //window.location.href = '/createproduct?memberId=' + memberId + '&&entityId=' + entityIds
        window.location.href = '/createproduct?entity_id=' + entityIds
    } else {
        Swal.fire({
            type: 'warning',
            title: '',
            text: 'Anh/Chị chưa chọn chủ thể',
        });
        return
    }

}

// <h6 style="color:black">${data.product_types[0].Name}</h6>
function drawproductInfo(data) {
    document.getElementById('divListProduct').innerHTML = ``
    var entity 
    let i = 0
    let status = ''
    data.products.forEach((data) => {
        let role
        if (data.user_id === memberId) {
            role = 'all'
        } else {
            role = 'noRole'
            // _.get(data, "entities[0].listMemberId", []).forEach((item) => {
            //     _.get(item, "role", []).forEach((e) => {
            //         if (item.memberId == memberId && e.productInfoId == data._id) {
            //             role = e.roleName
            //         } else {
            //             role = 'noRole'
            //         }
            //     })

            // })
        }
        let teamplate = ''
        if ((data.status == "DONE" && data.confirm !== 1) || data.status == "SUBMITTING" || data.status == "PREPARING" || data.status == "FAIL") {
            if (role == 'all' || role == '0') {
                teamplate = `
                <div class="dropdown show" style="position: absolute;right: 1px;">
                    <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                            <a href="javascript:void(0)"><img id="accountAvartar" src="images/grey.png" srcset="images/grey2x.png 2x,images/grey3x.png 3x" class="Grey"></a>
                        </div>
                        <div id="addcoucil" class="dropdown-menu animated flipInY " style="    padding: 0;text-align: center;  background-color: rgb(3, 146, 82);top: 20px; position: absolute; transform: translate3d(-110px, 24px, 0px); will-change: transform;" x-placement="bottom-start">
                            <div style="padding: 5px;border-bottom: 1px solid white;">
                                <a href="/editproduct?created_userid=${memberId}&product_id=${data.id}&entity_id=${entityIds}"   style="color: white"><div>Sửa</div></a>
                            </div>
                            <div style="padding: 5px;display:none">
                                <a href="##" data-toggle="modal" onclick="deletProdut(\'${data.id}\',\'${data.entitiesId}\')"  data-target=".modal" class="dropdown-item-tool" style="color: white"><div>Xóa</div></a>
                            </div>
                        </div>
                </div>
                `
            }
            //  else if (role = 'edit') {
            //     teamplate = `
            //     <div class="dropdown show" style="position: absolute;right: 1px;">
            //         <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
            //                 <a href="javascript:void(0)"><img id="accountAvartar" src="img/grey.png" srcset="img/grey@2x.png 2x,img/grey@3x.png 3x" class="Grey"></a>
            //             </div>
            //             <div id="addcoucil" class="dropdown-menu animated flipInY " style="    padding: 0;text-align: center;  background-color: rgb(3, 146, 82);top: 20px; position: absolute; transform: translate3d(-110px, 24px, 0px); will-change: transform;" x-placement="bottom-start">
            //                 <div style="padding: 5px;border-bottom: 1px solid white;">
            //                 <a href="/submitForm1?memberId=${memberId}&&productId=${data._id}&&edit=1" style="color: white"><div>Sửa</div></a>
            //                 </div>
            //             </div>
            //     </div>
            //     `
            // }
        }else{
            teamplate = `
            <div class="dropdown show" style="position: absolute;right: 1px;">
                <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                        <a href="javascript:void(0)"><img id="accountAvartar" src="images/grey.png" srcset="images/grey2x.png 2x,images/grey3x.png 3x" class="Grey"></a>
                    </div>
                    <div id="addcoucil" class="dropdown-menu animated flipInY " style="    padding: 0;text-align: center;  background-color: rgb(3, 146, 82);top: 20px; position: absolute; transform: translate3d(-110px, 24px, 0px); will-change: transform;" x-placement="bottom-start">
                        <div style="padding: 5px;border-bottom: 1px solid white;">
                        <a href="/editproduct?created_userid=${memberId}&product_id=${data.id}&entity_id=${entityIds}" style="color: white"><div>Sửa</div></a>
                        </div>
                    </div>
            </div>
            `
        }
        
        
        //let totalProcess = 0
        i++
        if (data.status == 'SUBMITING') {
            status = '<span class="label label-primary">Đang nộp</span>';
        } else if (data.status == 'DONE') {
            status = '<span class="label label-info">Hoàn thành</span>';
        } else if (data.status == 'RANKED') {
            status = '<span class="label label-success">Đã đạt</span>';
        } else if (data.status == 'FAIL') {
            status = '<span class="label label-danger">Không đạt</span>';
        } else if (data.status == 'PREPARING') {
            status = '<span class="label label-inverse">Chưa nộp</span>';
        }
        else if (data.status == 'WAITTING') {
            status = '<span class="label label-light" style="background-color: #7f7c7c">Chờ chấm</span>';
        }
        else if (data.status == 'DISTRICTRANKED') {
            status = '<span class="label label-info" style="background-color: #7f7c7c">Cấp huyện đã xếp hạng</span>';
        }else if (data.status == "PROVINCERANKED") {
            status = '<span class="label label-info" style="background-color: #7f7c7c">Cấp tỉnh đã xếp hạng</span>';
        }else if(status == 'TWRANKED'){
            status = '<span class="label label-info" style="background-color: #7f7c7c">Cấp trung ương đã xếp hạng</span>';
        }
        // if (data.total_process > 0) {
        //     totalProcess = Number(data.total_process * 100 / 5)
        //     if (totalProcess > 100) {
        //         totalProcess = 100
        //     }
        // }

        document.getElementById('divListProduct').innerHTML += `
        <div class="col-md-6  " style="margin-bottom: 36px;">
            <div class="row">
            <div class="col-12" style="padding-right: 0; display: flex;">
                 <a href="/submitproof?product_id=${data.id}&product_type=${data.product_type}&created_userid=${data.user_id}&entity_id=${entityIds}" style="padding: 0px 0px;display: flex;">
                <div style=" margin-right: 14px;">
                <img src="${data.image ? data.image : '/images/noavatar.png'}" class="imgava">
                </div>
                <div style="overflow: auto;" class="nameproduct">
                ${data.name ? `<span class="titleName">${data.name}</span><br>` : ''}
                <span class="titleNamechirden">Mã sản phẩm: ${data.code}  </span></br>
                <span class="titleNamechirden">Ngày tạo: ${new Date(data.created_at).toLocaleString()}  </span></br>
                
                <span class="titleNamechirden">Tiến độ hoàn thành: ${data.total_process}%</span></br>
                    <div class="progress" style="    margin-bottom: 10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: ${data.total_process}%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="comment-footer">
                    ${status}
                    </div>
                </div>
                
                </a>
                ${teamplate}
                
            </div>
            <div>
            
        </div>
        `
    })
}

const deletProdut = (id,enlity) => {
    Swal.fire({
        text: 'Bạn có chắc chắn muốn xóa hồ sơ!',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: `Đồng ý`,
        showCancelText: 'Đóng'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: "deleteProduct?productsInfos=" + id,
                type: "GET",
                success: function (ret) {
                    console.log(ret)
                    if (ret.length > 0) {
                        clickli(enlity,nameEnlity)
                        Swal.fire({
                            text: 'Anh chị vừa xoá thành công hồ sơ. Anh chị có thể tạo mới hồ sơ bằng cách chọn "Thêm sản phẩm"',
                            showDenyButton: true,
                            showCancelButton: true,
                            confirmButtonText: `Thêm sản phẩm`,
                            showCancelText: 'Đóng'
                        }).then((result) => {
                            if (result.value) {
                                window.location.href=`/submitForm1?memberId=${memberId}&&entityId=${enlity}`
                            }
                        })
                    }
                }
            })
        }
    })

}
function drawMember(data) {
    document.getElementById('listmembers').innerHTML = ``
    let i = 0
    data.entities.forEach((e) => {
        i++
        document.getElementById('listmembers').innerHTML += `
        <div class="col-md-12 row " style="margin-bottom: 36px;">
            <div class="col-11" style="padding-right: 0;    display: flex;">
            <div style=" margin-right: 14px;">
            <img src="${data.user.avatar ? data.user.avatar : 'images/noavatar.png'}" class="imgava">
            </div>
            <div style="  overflow: auto;">
            <span class="titleName">${e.name}</span><br>
            <span class="titleNamechirden">${e.province ? 'Đơn vị ' + e.province : ''} </span></br>
            <span class="titleNamechirden">${e.subtypeId ? e.subtypeId : ''} </span></br>
            </div>
            </div>
            <div class="col-1">
                <div class="rounds">
                    <input type="checkbox" onclick="clickli('${e.entity_id}','${e.name}')" class="change-selectorMember2" id="checkbox-${e.entity_id}" value="${e.entity_id}" name="checkbox-group">
                    <label for="checkbox-${e.entity_id}" name="checkbox-group"></label>
                </div>
            </div>
        </div>
        `
        if (i == 1) {
            $(`#checkbox-${e.entity_id}`).attr("checked", true);
            nameEnlity = e.name
            clickli(e.entity_id, e.name)
        }
    })
    $("input:checkbox").on('click', function () {
        var $box = $(this);
        if ($box.is(":checked")) {
            let group = "input:checkbox[name='" + $box.attr("name") + "']";
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
    })
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
        // $('#savePoof').attr('disabled', 'disabled');
        // var progressElement = file.previewElement.querySelector("[data-dz-uploadprogress]");
        // for (let i = 0; i < 60; i++) {
        //     setTimeout(() => {
        //         progressElement.style.width = i + "%";
        //     }, 1);
        // }
        // var contentType = file.type;
        // var filename = returnId(file.name)
        // let array = []
        // $.get('/generatepresignedurl?fileName=' + filename + '&type=' + contentType, function (signedUrl) {
        //     for (let i = 60; i < 90; i++) {
        //         setTimeout(() => {
        //             progressElement.style.width = i + "%";
        //         }, 1);
        //     }
        //     $.ajax({
        //         url: signedUrl,
        //         type: 'PUT',
        //         dataType: 'html',
        //         processData: false,
        //         headers: { 'Content-Type': contentType },
        //         crossDomain: true,
        //         data: file
        //     }).done(function (data, textStatus, error) {
        //         if (textStatus == 'success') {
        //             $(`#dropzoneMytwo`).removeClass('dz-started')
        //             $(`#dropzoneMytwo.dz-clickable .dz-image-preview`).remove();
        //             $(`#dropzoneMytwo.dz-clickable .dz-file-preview`).remove();
        //             progressElement.style.width = 100 + "%";
        //             $('.dz-progress').css("opacity", "0")
        //             $(".dz-success-mark svg").css("display", "");
        //             $(".dz-success-mark").css("opacity", "1");
        //             $(".dz-error-mark").css("display", "none");
        //             setTimeout(() => {
        //                 $(".dz-success-mark").css("opacity", "0");
        //             }, 1000);
        //             let dataName = `https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/` + filename
        //             let _id = new Date().getTime() + '_' + getRndInteger(100000, 999999)
        //             let objfilename = {
        //                 dataName: dataName,
        //                 name: file.name,
        //                 id: `${file.lastModified}_${file.name}`,
        //                 _id: _id
        //             }
        //             ImgsArray.push(objfilename)
        //             drawimgDropzone(dataName, _id)
        //             $('#savePoof').removeAttr("disabled");
        //         }
        //     }).fail(function (jqXHR, textStatus, errorThrown) {
        //         $('.dz-progress').css("opacity", "0")
        //         $(".dz-error-mark svg").css("opacity", "1");
        //         $(".dz-success-mark svg").css("opacity", "0");
        //     });
        // });
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
const saveEdit = () => {

}