var objProvincials;
var objDistricts;
var objWards;
var firstTimeLoad = true;
var isMember = false;
var acc;
var accountLvl;
let isChangeFile = false;
let dataName='';

$(() => {
    $('#cboProvincial').select2();
    $('#cboDistricts').select2();
    $('#cboWards').select2();
    getAccountInfo();

    $(`#confirmUpdatePassBtn`).on(`click`, (event) => {
        $(`#confirmUpdatePassBtn`)[0].disabled = true;
        event.preventDefault();
        if ($(`#txtPass`).val() != $(`#txtCfPass`).val()) {
            Swal.fire('Cảnh báo', "Bạn phải xác nhận đúng mật khẩu", 'warning');
            $(`#confirmUpdatePassBtn`)[0].disabled = false;
            $(`#confirmUpdatePassBtn`)[0].style.color = '#FFFFFF';
            return;
        } else if (!$(`#txtOldPass`).val() || !$(`#txtPass`).val() || !$(`#txtCfPass`).val()) {
            Swal.fire('Cảnh báo', "Bạn chưa nhập đầy đủ các thông tin yêu cầu", 'warning');
            $(`#confirmUpdatePassBtn`)[0].disabled = false;
            $(`#confirmUpdatePassBtn`)[0].style.color = '#FFFFFF';
            return;
        } else {
            var _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: `PUT`,
                url: `/changepassword`,
                data: {
                    _token:_token,
                    old_pass: $(`#txtOldPass`).val(),
                    confirm_pass:$(`#txtCfPass`).val(),
                    new_pass: $(`#txtPass`).val(),
                },
                success: (data) => {
                    if (data.status == 'success') {
                        Swal.fire('', "Mật khẩu của bạn đã được cập nhật", 'success')
                    } else {
                        Swal.fire('Lỗi', `${data.message}`, 'warning');
                    }
                    $(`#confirmUpdatePassBtn`)[0].disabled = false;
                    $(`#confirmUpdatePassBtn`)[0].style.color = '#FFFFFF';
                },
                error: (jqXHR, textStatus, errorThrown) => {
                    console.warn(errorThrown);
                    $(`#confirmUpdatePassBtn`)[0].disabled = false;
                    $(`#confirmUpdatePassBtn`)[0].style.color = '#FFFFFF';
                }
            })
        }
    });
    $(`#saveInfoBtn`).on(`click`, (event) => {
        event.preventDefault();
        SaveObject();
    });
    $('#uploadInput').change(function () {
        isChangeFile = true;
    });
});

const getAccountInfo = () => {
    $.ajax({
        type: `GET`,
        url: `/getaccountinfo`,
        success: (data) => {
            if (data) {
                console.log(data);
                acc = data;
                accountLvl = (acc.level != null) ? acc.level : 3;
                // if (acc.type == 'Member') {
                //     isMember = true;
                // }
                //let birthday = new Date(acc.birthDay);
                $(`#txtFullName`).val(acc.name);
                $(`#txtType`).val(`${convertRoleToString(acc.roles)} - cấp ${acc.level == 0 ? 'Trung ương' : (acc.level == 2 ? 'Tỉnh' : 'Huyện')}`)
                $(`#workUnit`).val(acc.work_unit);
                //$(`#workPosition`).val(acc.position);
                $(`#txtPhone`).val(acc.phone);
                $(`#txtEmail`).val(acc.email);
                $(`#txtAddress`).val(`${acc.address ? acc.address.street ? acc.address.street : ''  : ''}`);
                //$(`#txtBirthDay`).val(`${birthday.getFullYear()}-${(birthday.getMonth() + 1) < 10 ? "0"+ (birthday.getMonth() + 1) : (birthday.getMonth() + 1)}-${birthday.getDate() < 10 ? "0" + birthday.getDate() : birthday.getDate()}`);
                if (acc.avatar) {
                    $(`#img_avatar`)[0].innerHTML = `<img src=${acc.avatar} style="width: 180px; height: 180px; border-radius: 50%;" alt='Image'>`
                }
                if (accountLvl == 0) {
                    $(`#locationSelector select`).attr('disabled', true);
                    $(`#locationSelector`).hide();
                } else {
                    LoadCboProvincials();
                }
                if (accountLvl < 3) {
                    $(`#cboWards`).attr('disabled', true);
                }
                if (accountLvl < 2) {
                    $(`#cboDistricts`).attr('disabled', true);
                    $(`#cboWards`).attr('disabled', true);
                }
            } else {
                Swal.fire('Cảnh báo', data.message, 'warning').then(result => {
                    if(result.value) {
                        window.location.href = `/login`;
                    }
                });
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    })
}

function SaveObject() {
    let Provincial = $('#cboProvincial option:selected').text()
    let IdProvincial = $('#cboProvincial option:selected').val()
    let District = $('#cboDistricts option:selected').text()
    let IdDistrict = $('#cboDistricts option:selected').val()
    let ward = $('#cboWards option:selected').text()
    let Idward = $('#cboWards option:selected').val()
    let IdProvincials;
    if(IdProvincial){
        IdProvincials = IdProvincial.split(',');
    }
    var _token = $('meta[name="csrf-token"]').attr('content');

    let obj = {
        _token:_token,
        name: $('#txtFullName').val(),
        phone: $('#txtPhone').val(),
        email: $('#txtEmail').val(),
        // workUnit: $(`#workUnit`).val(),
        // position: $(`#workPosition`).val(),
        address: {
            province_name: IdProvincial !== "0" ? Provincial : 'NA',
            province_id: IdProvincial && IdProvincial !== "0" ? IdProvincials[0] : 'NA',
            district: IdDistrict !== "0" ? District : 'NA',
            district_id: IdDistrict !== "0" ? IdDistrict : 'NA',
            ward: Idward !== "0" ? ward : 'NA',
            ward_id: Idward !== "0" ? Idward : 'NA',
            street:$('#txtAddress').val()
        },
    }
    // if($(`#txtBirthDay`).val()) {
    //     obj.birthDay = new Date($(`#txtBirthDay`).val());
    // }
    if(dataName!==''){
        obj.avatar=dataName
        $(`#accountAvartar`).attr('src', dataName);
    }
    // if (isMember) {
    //     obj.headquarters = $('#txtAddress').val();
    // } else {
    //     obj.address = $('#txtAddress').val();
    // }
    console.log(obj);
    $.ajax({
        url: "/updateaccount",
        type: "PUT",
        data: obj,
        success: function (ret) {
            if (ret ==='success') {
                $('#accountUserName span:first-child').html(obj.name);
                Swal.fire({
                    title: 'Thành công',
                    text: "Thông tin của bạn đã được cập nhật",
                    type: 'success',
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ok'
                })
            } else {
                Swal.fire({
                    title: '',
                    text: "Đã có lỗi xảy ra",
                    type: 'error',
                });
                console.warn(ret.error);
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            Swal.fire({
                title: '',
                text: "Đã có lỗi xảy ra",
                type: 'error',
            });
            console.warn(errorThrown);
        }
    });
}

// Xử lý ảnh
const maxWidth = 180;
const maxHeight = 180;

function FileListItem(a) {
    a = [].slice.call(Array.isArray(a) ? a : arguments)
    for (var c, b = c = a.length, d = !0; b-- && d;) d = a[b] instanceof File
    if (!d) throw new TypeError("expected argument to FileList is File or array of File objects")
    for (b = (new ClipboardEvent("")).clipboardData || new DataTransfer; c--;) b.items.add(a[c])
    return b.files
}

$(`#uploadInput`)[0].onchange =  function change() {
    const file = this.files[0];
    $('#spinner').show()
    $('#img_avatar').hide()
    var filename = new Date().getTime() +'_'+file.name;
    var fd = new FormData();
    fd.append( 'file', file );
    var contentType = file.type;
    if (!file) return;

    $.get('/generatepresignedurl?fileName='+filename+'&type='+contentType,function(signedUrl) {
        $.ajax({
            url: signedUrl,
            type: 'PUT',
            dataType: 'html',
            processData: false,
            headers: {'Content-Type': contentType},
            crossDomain: true,
            data: file
        }).done(function(data,textStatus,error) {
            dataName=`https://` + S3_URL +`.s3.ap-southeast-1.amazonaws.com/ocop/`+filename
            file.image().then(img => {
                
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                $('#spinner').hide()
                $('#img_avatar').show()
                // calculate new size
                const ratio = Math.min(maxWidth / img.width, maxHeight / img.height);
                // const width = dataName.width * ratio + .5 | 0;
                // const height = dataName.height * ratio + .5 | 0;
                const width = maxWidth;
                const height = maxHeight;
                // resize the canvas to the new dimensions
                canvas.width = width;
                canvas.height = height;
                canvas.style = 'border-radius: 50%';
                // scale & draw the image onto the canvas
                ctx.drawImage(img, 0, 0, width, height);
                document.getElementById('img_avatar').innerHTML = '';
                document.getElementById('img_avatar').appendChild(canvas);
                // Get the binary (aka blob)
                canvas.toBlob(blob => {
                    var name = file.name;
                    name = (new Date()).getTime() + '-' + name;
                    const resizedFile = new File([blob], name, file);
                    const fileList = new FileListItem(resizedFile);
                    // temporary remove event listener since
                    // assigning a new filelist to the input
                    // will trigger a new change event...
                    $(`#uploadInput`)[0].onchange = null;
                    $(`#uploadInput`)[0].files = fileList;
                    $(`#uploadInput`)[0].onchange = change;
                });
            });
        }).fail(function (jqXHR, textStatus, errorThrown) {
            alert("Error!");
        });
    });
    
         
};

function LoadCboProvincials() {
    var selectElemRef = document.getElementById("cboProvincial");
    //nof_loadAdress('pro', 1);
    var _token = $('meta[name="csrf-token"]').attr('content');
    let obj = {
        _token:_token,
    }
    $.ajax({
        dataType: "json",
        url: "/getprovinces",
        data: obj,
        type: "POST",
        success: function (data) {
            console.log(data);
            objProvincials = data;
            while (selectElemRef.length > 0) {
                selectElemRef.remove(0);
            }
            if (objProvincials.length == 1) {
                var o = new Option(objProvincials[0].name, objProvincials[0].id);
                $("#cboProvincial").append(o);
                if (accountLvl >= 2) {
                    LoadCboDistricts(objProvincials[0].id, objProvincials[0].name);
                }
            } else {
                
                var b = new Option("Chọn", "0")
                $("#cboProvincial").append(b);
                for (var i = 0;i < objProvincials.length; i++) {
                    var o = new Option(objProvincials[i].name, `${objProvincials[i].id}`);
                    $("#cboProvincial").append(o);
                }
            }
            
    
            if (data.length == 1) {
                $('#cboProvincial').select2('val', [data[0].id]);
            }
            
            if (firstTimeLoad) {
                $('#cboProvincial').val(`${acc.address.province_id}`).trigger('change');
                if (accountLvl < 2) {
                    firstTimeLoad = false;
                }
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
        url: "/getdistrictbyprovince?province_id=" + idProvincial,
        data: objDistricts,
        success: function (data) {
            objDistricts = data;
            if (objDistricts.length == 1) {
                var o = new Option(objDistricts[0].name, objDistricts[0].id);
                $('#cboDistricts').append(o);
                if (accountLvl > 2) {
                    LoadCboWards(objDistricts[0].id, objDistricts[0].name);
                }
            } else {
                if (cboDistricts.length == 0) cboDistricts.options[0] = new Option("Chọn", "0");
                for (var i = 0 ; i < objDistricts.length; i++) {
                    var o = new Option(objDistricts[i].name, objDistricts[i].id);
                    $('#cboDistricts').append(o);
                }
            }
            nof_loadAdress('district', 0);
            if (data.length == 1) {
                $('#cboDistricts').select2('val', [data[0]._id]);
            }
            if (firstTimeLoad) {
                $('#cboDistricts').val(`${acc.address.district_id}`).trigger('change');
                if (accountLvl < 3) {
                    firstTimeLoad = false;
                }
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
        url: "/getwardbydistrict?district_id=" + idDistrict,
        data: objWards,
        success: function (data) {
            objWards = data;
            if (objWards.length == 1) {
                var o = new Option(objWards[0].name, objWards[0].id);
                $('#cboWards').append(o);
                LoadCboBranch(objWards[0].id)
            } else {
                if (cboWards.length == 0) cboWards.options[0] = new Option("Chọn", "0");
                for (var i = 0; i < objWards.length; i++) {
                    var o = new Option(objWards[i].name, objWards[i].id);
                    $('#cboWards').append(o);
                }
            }
            nof_loadAdress('ward', 0);
            if (data.length == 1) {
                $('#cboWards').select2('val', [data[0].id]);
            }
            if (firstTimeLoad) {
                $('#cboWards').val(`${acc.address.ward_id}`).trigger('change');
                firstTimeLoad = false;
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
    if(Id) {
        let ids = Id.split(',');
        if (Text == undefined || Id == undefined) {
            console.log('stop loading district')
        } else {
            if (accountLvl > 1) {
                LoadCboDistricts(ids[0], Text)
            }
        }
    }
});

$('#cboDistricts').on("change", function (e) {
    $('#cboWards').select2('val', ['0'])
    document.getElementById("cboWards").options.length = '';
    let Text = $('#cboDistricts option:selected').text()
    let Id = $('#cboDistricts option:selected').val()
    if (Text == undefined || Id == undefined) {
        console.log('stop loading ward')
    } else {
        if (accountLvl > 2) {
            LoadCboWards(Id, Text)
        }
    }
});

$('#cboWards').on("change", function (e) {
    $('#cboBranch').select2('val', ['0'])
    $('#cboBranch').select2('data', null);
    $("#cboBranch").val(null).trigger("change");
    let Text = $('#cboWards option:selected').text()
    let Id = $('#cboWards option:selected').val()
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

function convertRoleToString(roles){
    var returnResult = 'Không rõ';
    for(i = 0; i < roles.length; i++){
        if(roles[i].name === 'MEMBER'){
            returnResult = 'Chủ thể';
            break;
        }else if(roles[i].name === 'HELPTEAM'){
            returnResult = 'Tổ tư vấn'
            break;
        }else if(roles[i].name === 'EXAMINER'){
            returnResult = 'Người chấm'
            break;
        }else if(roles[i].name === 'MANAGER'){
            returnResult = 'Quản lý'
            break;
        }
    }
    return returnResult;
}
