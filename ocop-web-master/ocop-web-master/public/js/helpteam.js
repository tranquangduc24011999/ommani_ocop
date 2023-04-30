let deadline = false
function getParam(paramName) {
    var url_string = window.location.href;
    var url = new URL(url_string);
    return url.searchParams.get(paramName);
}
var councilId = getParam('council_id');
var id = getParam('id');
var role = getParam('role');
var nummember
var numproduct

let member = []
let product = []
let group;
let memberHelp;
let isFirstLoad = true;
let council;
var userUpdateId;
$(document).ready(function () {
    
    //getEx()
    //getCouncil()
    getMembersHelpTeam()
    getproductInfo()
    //getExaminers()
    getMembersHelpTeamOther()
    getMembersByLevel()
    //getProductsOther();
    //getGroupById()
    // if (id) {
    //     let hrefExcel = (role === 'helpteam' ? `renderAllTHPhieuchamTgv` : `renderAllTHPhieucham`)
    //         + `?idGroud=${id}`
    //     $('#idPrintExcel').click(function () {
    //         blockResubmit(hrefExcel)
    //     })
    //     let hrefBB = `RenderBienBan?IdHD=${id}&isHD=` + (role === 'helpteam' ? 0 : 1)
    //     $('#idPrintBienBan').attr({
    //         "href": hrefBB
    //     })
    // }
    // if (role) {
    //     $('#idPro').hide()
    //     $('#idPrintTonghopPhieucham').click(function(){
    //         sendToken('idPrintTonghopPhieucham',`renderAllStatisticalPhieuchamHelpTeam?idGroud=${id}`)
    //     })
    // }else{
    //     $('#idPrintTonghopPhieucham').click(function(){
    //         sendToken('idPrintTonghopPhieucham',`renderAllStatisticalPhieucham?idGroud=${id}`)
    //     })
    // }
})
function getGroupById() {
    $.ajax({
        url: "getgroupbyid?id=" + id,
        type: "GET",
        success: function (ret) {
            if (ret) {
                group = ret.group
                let arr = []
                ret.group.forEach((data) => {
                    if (data.status == "active") {
                        arr.push(data)
                    }
                })
                nummember = arr.length
                numproduct = ret.group[0].productsInfoId.length
                load()
            }
        }
    })
}

function getCouncil(){
    $.ajax({
        url: "getcouncilbyid?id=" + id,
        type: "GET",
        success: function (response) {
            if (response) {
                council = response;
                deadline = council.expired;
                document.getElementById('namecouncils').innerHTML = council.name;
            }
        }
    })
}
let memberHelpTeam = []
const gethelpteamcouncilsBy_idCouncil = () => {
    $.ajax({
        url: "helpteamcouncilsBy_idCouncil?_id=" + id,
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                let newDeline =  new Date(_.get(ret, '[0].deadline', '')).toLocaleDateString()
                $('.dealine').text(`Hết hạn ${newDeline}`)
                namecouncils.innerHTML = _.get(ret, '[0].nameCouncil', 'Hội đồng tổ giúp việc')
                memberTgv.innerHTML = 'THÀNH VIÊN TỔ TƯ VẤN'
                ret.forEach((item) => {
                    let obj = {
                        email: _.get(item, 'members.email', false),
                        name: _.get(item, 'members.name', false),
                        phone: _.get(item, 'members.phone', false),
                        url: _.get(item, 'members.avatarUrl', false),
                        _id: _.get(item, 'members._id', false),
                    }
                    memberHelpTeam.push(obj)
                })
                drawchairmanAndsecretary(ret[0], 1)
                document.getElementById('memberNumber').innerHTML = memberHelpTeam.length
                drawMemberEx(memberHelpTeam, 'helpteam')
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
        isFirstLoad = false;
    }

    document.getElementById('numberquan').innerHTML = ``
    $.ajax({
        url: "/getcouncilm?_id=" + id,
        type: "GET",
        success: function (ret) {
            if (ret) {
                Swal.close();
                deadline = _.get(ret, 'council[0].deadline', '')
                document.getElementById('namecouncils').innerHTML = _.get(ret, 'council[0].nameCouncil', '')
                document.getElementById('numberquan').innerHTML = '<span id="memberNumber">' + _.get(ret, 'member', []).length + '</span>' + ' thành viên - ' + _.get(ret, 'product', []).length + ' bộ hồ sơ'
                drawCouncilm(ret.council, ret.member, ret.product, ret.memberCharmain, ret.membersecretary)
            }
        }
    })
}
function drawCouncilm(ret, member, prodsuct, memberCharmain, membersecretary) {
    document.getElementById('listproductinfnos').innerHTML = ``
    document.getElementById('listmembers').innerHTML = ``
    prodsuct.forEach(element => {
        let valMonth
        let valDate
        if (new Date(deadline).getMonth().toLocaleString().split('').length == 1) {
            valMonth = `0${new Date(deadline).getMonth() + 1}`
        } else {
            valMonth = `${new Date(deadline).getMonth() + 1}`
        }
        if (new Date(deadline).getDate().toLocaleString().split('').length == 1) {
            valDate = `0${new Date(deadline).getDate()}`
        } else {
            valDate = `${new Date(deadline).getDate()}`
        }
        document.getElementById('listproductinfnos').innerHTML += `
            <div class="rowContent" style="width: 100%;  padding-left: 10px;">
            <div class="row" style="" id="row1">
            <div class="col-11" style="padding-right: 0;    display: flex;">
                <div style=" margin-right: 14px;">
                <img src="${element.imgUrl.length == 0 ? 'img/noavatar.png' : element.imgUrl[0]}" class="imgava">
                </div>
                <div style="overflow: auto;">
                    <span class="titleName">${element.name}</span></br>
                     <span class="titleNamechirden">${element.code ? 'Mã sản phẩm: ' + element.code + '</br>' : ''}</span>
                    <span class="titleNamechirden">Chủ thể:  ${_.get(element, 'entities[0].name', '')}</span>
                </div>
            </div>

            </div>
            <div class="row" style="flex: 0 0 50%; max-width: 50%;">
            <div class="col-11" id="col-11id">
                <span class="titleNamechirden dealine">Hết hạn ${new Date(deadline).toLocaleDateString()}</span></br>
            </div>
            <div class="col-1" style="padding-left: 0;margin-top: 0px;text-align: right;">
                <div class="dropdown">
                        <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <a href="javascript:void(0)"><img id="accountAvartar" src="images/grey.png" srcset="images/grey2x.png 2x,images/grey3x.png 3x" class="Grey"></a>
                        </div>
                        <div class="dropdown-menu animated flipInY"  style="height: 32px;">
                            <a href="##" class="dropdown-item-tool"  onclick="deletegroupIitem(\'${element._id}\')" style="height: 36px;background-color: #049252;color: white;border-bottom: 4px solid white;">Xóa</a>
                            <a href="/printReport?productsInfo=${element._id}&role=${role}" class="dropdown-item-tool"  onclick="" style="height: 34px;background-color: #049252;margin-top: -3px;color: white;">Báo cáo chi tiết</a>
                            <a href="/reportTonghopPhieuCham?productId=${element._id}" class="dropdown-item-tool"  onclick="" style="height: 34px;background-color: #049252;margin-top: -3px;color: white;">BC tổng hợp</a>
                        </div>
                </div>
            </div>
            </div>
        </div>
        `
    });
    let objCharmain = {
        chairman: memberCharmain,
        secretary: membersecretary
    }
    if (!role) {
        drawchairmanAndsecretary(objCharmain, false)
        drawMemberEx(member)

    } else {
        gethelpteamcouncilsBy_idCouncil()
    }

}
const drawchairmanAndsecretary = (ret, role) => {
    let roles = 'Chủ Tịch'
    let toPho = 'Thư ký'
    if (role) {
        roles = 'Tổ Trưởng'
        toPho = 'Tổ Phó'
    }
    if (_.get(ret, 'chairman', []).length > 0) {
        let append = `
        <div class="col-md-12 row rowContent">
            <div class="col-11" style="padding-right: 0;    display: flex;">
            <div style=" margin-right: 14px;">
            <img src="${_.get(ret, 'chairman[0].avatarUrl', 'img/noavatar.png')} " class="imgava">
            </div>
            <div style="    overflow: auto;">
            <span class="titleName">${_.get(ret, 'chairman[0].name', '')}</span><span class="Ch-tch">${roles}</span></br>
            <span class="titleNamechirden">${_.get(ret, 'chairman[0].email', '')} - ${_.get(ret, 'chairman[0].phone', '')}</span>
            </div>
        </div>
        </div>
        `
        $('#listmembers').append(append)
    }

    if (_.get(ret, 'secretary', []).length > 0) {
        let appendse = `
            <div class="col-md-12 row rowContent">
            <div class="col-11" style="padding-right: 0;    display: flex;">
                <div style=" margin-right: 14px;">
                <img src="${_.get(ret, 'secretary[0].avatarUrl', 'img/noavatar.png')}" class="imgava">
                </div>
                <div style="    overflow: auto;">
                <span class="titleName">${_.get(ret, 'secretary[0].name', '')}</span><span class="Ch-tch">${toPho}</span></br>
                <span class="titleNamechirden">${_.get(ret, 'secretary[0].email', '')} - ${_.get(ret, 'secretary[0].phone', '')}</span>
                </div>
            </div>
            </div>
            `
        $('#listmembers').append(appendse)
    }
}
const drawMemberEx = (member, role) => {
    member.forEach((e) => {
        let teamplate = `<a href="##" class="dropdown-item-tool" style="color: red;height: 34px;" onclick="changestatus(\'${e._id}\')">Dừng</a>`
        if (role) {
            teamplate = `<a href="##" class="dropdown-item-tool" style="color: red;height: 34px;" onclick="changestatus(\'${e._id}\','helpteam')">Dừng</a>`
        }
        let data = `
        <div class="col-md-12 row rowContent">
            <div class="col-11" style="padding-right: 0;    display: flex;">
                <div style=" margin-right: 14px;">
                <img src="${e.url == "" || !e.url ? 'img/noavatar.png' : e.url} " class="imgava">
                </div>
                <div style="    overflow: auto;">
                    <span class="titleName">${e.name}</span><span class="Ch-tch"></span></br>
                    <span class="titleNamechirden">${e.email} - ${e.phone}</span>
                </div>
            </div>
            
            <div class="col-1" style="padding-left: 0;margin-top: 0px;text-align: right;">
                <div class="dropdown">
                        <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <a href="javascript:void(0)"><img id="accountAvartar" src="img/grey.png" srcset="img/grey2x.png 2x,img/grey3x.png 3x" class="Grey"></a>
                        </div>
                        <div class="dropdown-menu animated flipInY"  style="height: 32px;">
                            ${teamplate}
                        </div>
                </div>
            </div>
        </div>
        `
        $('#listmembers').append(data)
    })
}

function deleteProductCouncil(productId){
    Swal.fire({
        title: 'Cảnh báo',
        text: "Bạn có chắc chắn muốn xóa hồ sơ này?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: 'gray',
        confirmButtonText: 'Xóa',
        cancelButtonText: 'Quay lại'
    }).then(result => {
        member = []
        product = []
        if (group[0].productsInfoId.length == 1) {
            Swal.fire({
                type: 'warning',
                title: '',
                text: 'Hội đồng chấm phải có ít nhất 1 sản phẩm',
            });
            return
        }
        // document.getElementById('listproductinfnos').innerHTML = ``
        for (let i = 0; i < group.length; i++) {
            removeA(group[i].productsInfoId, idss);
        }
        if(result.value) {
            $.ajax({
                url: "deleteproductcouncil?council_id=" + id + "&product_id=" + productId,
                success: function (ret) {
                    if(ret== 'success'){
                        getproductInfo()
                    }else{
                        setTimeout(() => {
                            Swal.fire({
                                type: 'info',
                                title: '',
                                text: 'Đã có lỗi xảy ra. Vui lòng tải lại trang!',
                            });
                        }, 300);
                    }
                   
                }
            })
        } else {
            getproductInfo()
        }
    });
}
function deletegroupIitem(idss) {
    Swal.fire({
        title: 'Cảnh báo',
        text: "Bạn có chắc chắn muốn xóa hồ sơ này?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: 'gray',
        confirmButtonText: 'Xóa',
        cancelButtonText: 'Quay lại'
    }).then(result => {
        member = []
        product = []
        if (group[0].productsInfoId.length == 1) {
            Swal.fire({
                type: 'warning',
                title: '',
                text: 'Hội đồng chấm phải có ít nhất 1 sản phẩm',
            });
            return
        }
        // document.getElementById('listproductinfnos').innerHTML = ``
        for (let i = 0; i < group.length; i++) {
            removeA(group[i].productsInfoId, idss);
        }
        if(result.value) {
            $.ajax({
                url: "updateproductinfo",
                data: { group: JSON.stringify(group), deleteproductId: idss, _id: id },
                type: "POST",
                success: function (ret) {
                    if(ret.success){
                        getproductInfo()
                        getGroupById()
                        if (ret.data==='201') {
                            setTimeout(() => {
                                Swal.fire({
                                    type: 'info',
                                    title: '',
                                    text: 'Sản phẩm đang được xử lý ở cấp trên, Vui lòng không xóa sản phẩm!',
                                });
                            }, 300);
                            
                          
                        }else{
                            setTimeout(() => {
                                Swal.fire({
                                    type: 'success',
                                    title: '',
                                    text: 'Bạn xóa sản phẩm chấm thành công!',
                                });
                            }, 300);
                        }
                    }else{
                        setTimeout(() => {
                            Swal.fire({
                                type: 'info',
                                title: '',
                                text: 'Đã có lỗi xảy ra. Vui lòng tải lại trang!',
                            });
                        }, 300);
                    }
                   
                }
            })
        } else {
            getproductInfo()
            getGroupById()
        }
    });
}
function removeA(arr) {
    var what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax = arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}
function changestatus(ids, role) {
    if (role) {
        Swal.fire({
            title: 'Bạn có chắc dừng chấm thành viên?',
            text: "Thành viên này sẽ không được phép tham gia chấm các sản phẩm trong hội đồng",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Hủy',
            confirmButtonText: 'Đồng ý'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "updateMemberHelpTeam",
                    data: { memberId: ids, id: id },
                    type: "POST",
                    success: function (ret) {
                        if (ret) {
                            if (ret.text) {
                               return Swal.fire({
                                    type: 'warning',
                                    title: 'Dừng thất bại',
                                    text: ret.text,
                                });

                            } else {
                                document.getElementById('listproductinfnos').innerHTML = ``
                                document.getElementById('listmembers').innerHTML = ``
                                // load()
                                memberHelpTeam = []
                                getproductInfo()
                                getEx()
                                getGroupById()
                                Swal.fire({
                                    type: 'success',
                                    title: '',
                                    text: 'Cán bộ chấm đã dừng chấm',
                                });
                            }


                        }
                    }
                })
            }
        })
    } else {
        member = []
        if (group.length <= 1) {
            Swal.fire({
                type: 'warning',
                title: 'Dừng thất bại',
                text: 'Hội đồng tối thiểu có một cán bộ chấm',
            });
            return
        }
        group.forEach((data) => {
            if (data.memberExId == ids) {
                data.status = 'pending'
            }
        })

        Swal.fire({
            title: 'Bạn có chắc dừng chấm thành viên?',
            text: "Thành viên này sẽ không được phép tham gia chấm các sản phẩm trong hội đồng",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Hủy',
            confirmButtonText: 'Đồng ý'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "updateproductinfo",
                    data: { group: JSON.stringify(group), _id: id,memberId : ids },
                    type: "POST",
                    success: function (ret) {
                        if (ret.success) {
                            if(ret.data=="201"){
                                Swal.fire({
                                    type: 'info',
                                    title: '',
                                    text: 'Đã có sản phẩm đang được xử lý ở cấp trên Anh/Chị vui lòng không xóa người chấm, để tránh ảnh hưởng đến kết quả chấm!',
                                });
                            }else{
                                document.getElementById('listproductinfnos').innerHTML = ``
                                document.getElementById('listmembers').innerHTML = ``
                                // load()
                                // getproductInfo()
                                getEx()
                                getGroupById()
                                Swal.fire({
                                    type: 'success',
                                    title: '',
                                    text: 'Cán bộ chấm đã dừng chấm',
                                });
                            }
                        }
                    }
                })
            }
        })
    }


}
function removeDuplicates(originalArray, prop) {
    var newArray = [];
    var lookupObject = {};

    for (var i in originalArray) {
        lookupObject[originalArray[i][prop]] = originalArray[i];
    }

    for (i in lookupObject) {
        newArray.push(lookupObject[i]);
    }
    return newArray;
}
function getMembersHelpTeam(){
    $.ajax({
        url: 'getmembershelpteam?id=' + id +'&council_id=' + councilId ,
        type: "GET",
        success: function (response) {
            if (response.length > 0) {
                document.getElementById('listmember').innerHTML = ``
                document.getElementById('listmembers').innerHTML = ``
                document.getElementById('memberNumber').innerHTML = `${response.length - 2} thành viên`
                drawMembers(response)
            }else{
                document.getElementById('listmembers').innerHTML = ``
            }
        }, error: function (err) {
            window.location.href = "/"
        }
    })
}

const drawMembers = (member) => {
    member.forEach((e) => {
        let role = '';
        if(e.type === 'leader'){
            role = 'Tổ trưởng'
        }else if(e.type === 'viceleader'){
            role = 'Tổ phó'
        }

        let teamplate = ``
        if (e.type === 'member') {
            //teamplate = `<a href="##" class="dropdown-item-tool" style="color: red;height: 34px;" onclick="changestatus(\'${e.user_id}\','helpteam')">Dừng</a>`
            teamplate = `
            <a href="##" class="dropdown-item-tool" style="color: red;height: 34px;" onclick="deleteMember(\'${e.user_id}\')">Xóa</a>`
        }else{
            teamplate = `<a href="##" data-toggle="modal" data-target="#updatemember" class="dropdown-item-tool" style="color: red;height: 34px;" onclick="setUserUpdateId(\'${e.user_id}\')">Cập nhật</a>`
        }
        //display:${e.type === 'member' ? 'none' : 'none'}
        let data = `
        <div class="col-md-12 row rowContent">
            <div class="col-11" style="padding-right: 0;    display: flex;">
                <div style=" margin-right: 14px;">
                <img src="${e.avatar == "" || !e.avatar ? 'images/noavatar.png' : e.avatar} " class="imgava">
                </div>
                <div style="    overflow: auto;">
                    <span class="titleName">${e.name}</span><span class="Ch-tch">${role}</span></br>
                    <span class="titleNamechirden">${e.email} - ${e.phone}</span>
                </div>
            </div>
            
            <div class="col-1" style="padding-left: 0;margin-top: 0px;text-align: right;">
                <div class="dropdown">
                        <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <a href="javascript:void(0)"><img id="accountAvartar" src="images/grey.png" srcset="images/grey2x.png 2x,images/grey3x.png 3x" class="Grey"></a>
                        </div>
                        <div class="dropdown-menu animated flipInY"  style="height: 32px;">
                            ${teamplate}
                        </div>
                </div>
            </div>
        </div>
        `
        $('#listmembers').append(data)
    })
}

function getMembersHelpTeamOther() {

    $.ajax({
        url: "getmembershelpteamotherbylevel?id=" + id,
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                drawM(ret)
            }
        }, error: function (err) {
            console.warn(err)
        }
    })
}

function getEx() {
    let url ;
    if(role =="helpteam"){
        url = "getExbysessionandnin?id=" + id + "&&role=helpteam"
    }else{
        url = "getExbysessionandnin?id=" + id
    }
    $.ajax({
        url: url,
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                drawM(ret)
            }else{
                document.getElementById('listmember').innerHTML = ``
            }
        }, error: function (err) {
            window.location.href = "/"
        }
    })
}
function drawM(ret) {
    document.getElementById('listmember').innerHTML = ``
    ret.forEach((data) => {
        document.getElementById('listmember').innerHTML += `
        <div class="col-md-12 row rowContent">
            <div class="col-2" style="padding-right: 0;">
            <img src="${data.avatar ? data.avatar : 'images/noavatar.png'}" class="imgava">
            </div>
            <div class="col-9" style="padding: 0;overflow: auto; " >
            <span class="titleName">${data.name}</span></br>
            <span class="titleNamechirden">${data.email} - ${data.phone}</span>
            </div>
            <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
            <div class="rounds">
                <input type="checkbox" class="change-selector2" id="checkbox-${data.id}" value="${data.id}" name="checkbox" />
                <label for="checkbox-${data.id}"></label>
            </div>
            </div>
      </div>
        `
    })
}

function drawMemberHelpTeam(ret) {
    document.getElementById('listmemberhelpteam').innerHTML = ``
    ret.forEach((data) => {
        document.getElementById('listmemberhelpteam').innerHTML += `
        <div class="col-md-12 row rowContent">
            <div class="col-2" style="padding-right: 0;">
            <img src="${data.avatar ? data.avatar : 'images/noavatar.png'}" class="imgava">
            </div>
            <div class="col-9" style="padding: 0;overflow: auto; " >
            <span class="titleName">${data.name}</span></br>
            <span class="titleNamechirden">${data.email} - ${data.phone}</span>
            </div>
            <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
            <div class="rounds">
                <input type="checkbox" class="change-selector2-helpteam" id="checkbox-member-helpteam-${data.id}" value="${data.id}" name="checkbox_member_helpteam" onclick="onlyOne(this)" />
                <label for="checkbox-member-helpteam-${data.id}"></label>
            </div>
            </div>
      </div>
        `
    })
}

function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('checkbox_member_helpteam')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}

function setUserUpdateId(id){
    userUpdateId = id;
}

function search() {
    let data = document.getElementById('search').value
    $.ajax({
        url: "getsearchmemberbylevel?keyword=" + data,
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                drawM(ret)
            } else {
                document.getElementById('listmember').innerHTML = ``
            }
        }
    })
}

function getMembersByLevel(){
    $.ajax({
        url: "getmemberbylevel",
        type: "GET",
        success: function (response) {
            if (response.length > 0) {
                let arrays = []
                response.forEach(element => {
                    if (element.role == "HELPTEAM") {
                        arrays.push(element)

                    } 

                });
                drawMemberHelpTeam(arrays)
            }
        }, error: function (err) {
            console.log(err)
        }
    })
}

function searchMemberHelpTeam() {
    let data = document.getElementById('search_update').value
    $.ajax({
        url: "getsearchmemberbylevel?keyword=" + data,
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                let arrays = []
                response.forEach(element => {
                    if (element.role == "HELPTEAM") {
                        arrays.push(element)

                    } 

                });
                drawMemberHelpTeam(arrays)
            } else {
                document.getElementById('listmemberhelpteam').innerHTML = ``
            }
        }
    })
}


function getproductInfo() {
    $.ajax({
        url: "getproductsbycouncil?id="+councilId,
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                drawListProduct(ret)
                document.getElementById('productNumber').innerHTML = `${ret.length} hồ sơ`
            } else {
                document.getElementById('listproductinfnos').innerHTML = `<span class="titleNamechirdens">Đơn vị của bạn đã hết sản phẩm cần tạo hội đồng</a>`
            }
        }
    })
}

function drawListProduct(products){
    products.forEach(element => {
        document.getElementById('listproductinfnos').innerHTML += `
            <div class="rowContent" style="width: 100%;  padding-left: 10px;">
            <div class="row" style="" id="row1">
            <div class="col-11" style="padding-right: 0;    display: flex;">
                <div style=" margin-right: 14px;">
                <img src="${element.image ? 'images/noavatar.png' : element.image}" class="imgava">
                </div>
                <div style="overflow: auto;">
                    <span class="titleName">${element.name}</span></br>
                     <span class="titleNamechirden">${element.code ? 'Mã sản phẩm: ' + element.code + '</br>' : ''}</span>
                    <span class="titleNamechirden">Chủ thể:  ${element.entity_name}</span>
                </div>
            </div>

            </div>
            <div class="row" style="flex: 0 0 50%; max-width: 50%;">
            <div class="col-11" id="col-11id">
                <span class="titleNamechirden dealine">Hết hạn ${new Date(deadline).toLocaleDateString()}</span></br>
            </div>
            <div class="col-1" style="padding-left: 0;margin-top: 0px;text-align: right;">
                <div class="dropdown">
                        <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <a href="javascript:void(0)"><img id="accountAvartar" src="images/grey.png" srcset="images/grey2x.png 2x,images/grey3x.png 3x" class="Grey"></a>
                        </div>
                        <div class="dropdown-menu animated flipInY"  style="height: 32px;">
                            <a href="##" class="dropdown-item-tool"  onclick="deleteProductCouncil(\'${element.id}\')" style="height: 36px;background-color: #049252;color: white;border-bottom: 4px solid white;">Xóa</a>
                            <!--<a href="/printReport?productsInfo=${element.id}&role=${role}" class="dropdown-item-tool"  onclick="" style="height: 34px;background-color: #049252;margin-top: -3px;color: white;">Báo cáo chi tiết</a>-->
                            <!--<a href="/reportTonghopPhieuCham?productId=${element.id}" class="dropdown-item-tool"  onclick="" style="height: 34px;background-color: #049252;margin-top: -3px;color: white;">BC tổng hợp</a>-->
                        </div>
                </div>
            </div>
            </div>
        </div>
        `
    });
}

function getProductsOther(){
    $.ajax({
        url: "getproductsotherbycouncil?id=" + id,
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                drawproductInfo(ret)
            } else {
                document.getElementById('listproductinfno').innerHTML = `<span class="titleNamechirdens">Đơn vị của bạn đã hết sản phẩm cần tạo hội đồng</a>`
            }
        }
    })
}
function seachproduct() {
    let data = document.getElementById('nameProductinfo').value
    $.ajax({
        url: "searchproductsotherbycouncil?keyword=" + data + "&id=" + id,
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                drawproductInfo(ret)
            } else {
                document.getElementById('listproductinfno').innerHTML = `<span class="titleNamechirdens">Đơn vị của bạn đã hết sản phẩm cần tạo hội đồng</a>`
            }
        }
    })
}

function drawproductInfo(ret) {
    document.getElementById('listproductinfno').innerHTML = ``
    ret.forEach((data) => {
        document.getElementById('listproductinfno').innerHTML += `
        <div class="col-md-12 row rowContent">
            <div class="col-2" style="padding-right: 0;">
            <img src="${ data.image}" class="imgava">
            </div>
            <div class="col-9" style="padding: 0;overflow: auto; ">
            <span class="titleName">${data.name}</span></br>
            <span class="titleNamechirden">Mã sản phẩm: ${data.code}</span></br>
            <span class="titleNamechirden">Tên chủ thể: ${data.entity_name}</span>
            </div>
            <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
            <div class="rounds">
                <input type="checkbox" class="change-selector" id="entities-${data.id}" value="${data.id}" name="checkbox" />
                <label for="entities-${data.id}"></label>
            </div>
            </div>
        </div>
        `
    })
}
$("#checkbox-all").on("click", function () {
    $(".change-selector").prop("checked", $(this).prop("checked"));
});
function updatefile () {
    
    let productInfo = []
    let productinfocheck = document.getElementsByClassName("change-selector");
    for (var i = 0; productinfocheck[i]; ++i) {
        if (productinfocheck[i].checked) {
            productInfo.push(productinfocheck[i].value);
        }
    }
    if (productInfo.length == 0) {
        Swal.fire({
            type: 'warning',
            title: '',
            text: 'Bạn chưa chọn bộ hồ sơ để thêm',
        });
        return
    }
    // for (let j = 0; j < group.length; j++) {
    //     let arr = []
    //     productInfo.forEach((data) => {
    //         arr.push(data)
    //     })
    //     group[j].productsInfoId.forEach((e) => {
    //         arr.push((e))
    //     })
    //     group[j].productsInfoId = arr
    // }

    var _token = $('meta[name="csrf-token"]').attr('content');

    let obj = {
        _token:_token,
        products: productInfo,
        id:id
    }


    $('#addProductInGroup').attr('disabled', true);
    $.ajax({
        url: "updateproductcouncil",
        data: obj,
        type: "POST",
        success: function (ret) {
            if (ret) {
                // load()
                document.getElementById('listproductinfnos').innerHTML = ``
                getproductInfo()
                //getGroupById()
                setTimeout(() => {
                    Swal.fire({
                        type: 'success',
                        title: '',
                        text: 'Bạn đã thêm bộ hồ sơ thành công',
                    });
                }, 300);
                $('#addProductInGroup').attr('disabled', false);
                $('#step3').modal('toggle');
            }
        }
    })
}
function addMember(){
    $('#addMemberToCouncils').prop('disabled', true)
    let mem = [];
    let data = document.getElementsByClassName("change-selector2")
    for (var i = 0; data[i]; ++i) {
        if (data[i].checked) {
            mem.push(data[i].value);
        }
    }
    var _token = $('meta[name="csrf-token"]').attr('content');

    let obj = {
        _token:_token,
        members: mem,
        id:id
    }
    $.ajax({
        url: "addmemberhelpteam",
        data: obj,
        type: "POST",
        success: function (ret) {
            if (ret == 'success') {
                getMembersHelpTeam()
                getMembersHelpTeamOther();
                setTimeout(() => {
                    Swal.fire({
                        type: 'success',
                        title: '',
                        text: 'Bạn đã thêm thành viên thành công',
                    });
                }, 300);
                $('#addMemberToCouncils').prop('disabled', false)
                $('#step2').modal('toggle');
            }else{
                Swal.fire({
                    type: 'warning',
                    title: '',
                    text: 'Thêm thành viên thất bại.',
                });
            }
        }
    })
}
function savemem () {
    $('#addMemberToCouncils').prop('disabled', true)
    let mem = [];
    let memHelp = [];
    let data = document.getElementsByClassName("change-selector2")
    for (var i = 0; data[i]; ++i) {
        if (data[i].checked) {
            mem.push(data[i].value);
        }
    }
    mem.forEach((e) => {
        let ret = e.split('*')
        let obj = {
            memberExId: ret[0],
            nameMember: ret[1],
            productsInfoId: group[0].productsInfoId,
            status: "active",
        }
        memHelp.push(ret[0])
        group.push(obj)
    })
    if(role){
        $.ajax({
            url: "/updateMemberHelp",
            data: { group: JSON.stringify(memHelp), _id: id },
            type: "POST",
            success: function (ret) {
                if (ret) {
                    memberHelpTeam = []
                    listmembers.innerHTML = ''
                    getEx()
                    gethelpteamcouncilsBy_idCouncil()
                    Swal.fire({
                        type: 'success',
                        title: '',
                        text: 'Bạn đã thêm thành viên thành công',
                    });
                    $('#addMemberToCouncils').prop('disabled', false)
                    $('#step2').modal('toggle');
                }
            }, error: (err) => {
                $('#addMemberToCouncils').prop('disabled', false)
                console.log(err)
            }
        })
    }else{
        $.ajax({
            url: "updateproductinfo",
            data: { group: JSON.stringify(group), _id: id },
            type: "POST",
            success: function (ret) {
                if (ret) {
                    // load()
                    getEx()
                    getGroupById()
                    Swal.fire({
                        type: 'success',
                        title: '',
                        text: 'Bạn đã thêm thành viên thành công',
                    });
                    $('#addMemberToCouncils').prop('disabled', false)
                    $('#step2').modal('toggle');
                }
            }, error: (err) => {
                $('#addMemberToCouncils').prop('disabled', false)
                console.log(err)
            }
        })
    }

}
function onmouseovers(id) {
    $(`#${id}`).show()
}
function outclick(id) {
    $(`#${id}`).hide()
}
function printResultToDOc() {
    swal({
        title: "Đang tải biên bản!",
        imageUrl: '/img/Curve-Loading.gif',
        text: "Xin vui lòng chờ trong giây lát ...",
        showConfirmButton: false
    });
    $.ajax({
        url: `/reportPrintALLResult?id=${id}&role=${role}`,
        type: "GET",
        success: function (ret) {
            if (ret.success) {
                if (ret.data) {
                    generate(ret.data.url, ret.data.fileName);
                } else {

                }
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
};



function loadFile(url, callback) {
    PizZipUtils.getBinaryContent(url, callback);
}
function generate(url, fileName) {
    loadFile(url, function (error, content) {
        if (error) { throw error };

        // The error object contains additional information when logged with JSON.stringify (it contains a properties object containing all suberrors).
        function replaceErrors(key, value) {
            if (value instanceof Error) {
                return Object.getOwnPropertyNames(value).reduce(function (error, key) {
                    error[key] = value[key];
                    return error;
                }, {});
            }
            return value;
        }

        function errorHandler(error) {
            console.log(JSON.stringify({ error: error }, replaceErrors));
            if (error.properties && error.properties.errors instanceof Array) {
                const errorMessages = error.properties.errors.map(function (error) {
                    return error.properties.explanation;
                }).join("\n");
                console.log('errorMessages', errorMessages);
                // errorMessages is a humanly readable message looking like this :
                // 'The tag beginning with "foobar" is unopened'
            }
            throw error;
        }
        var zip = new PizZip(content);
        var out = zip.generate({
            type: "blob",
            mimeType: "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
        }) //Output the document using Data-URI
        ////out =new Blob(content, {type: 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'});
        saveAs(out, fileName);
        swal.close();
        swal({
            title: "Biên bản đã được tải về!",
            type: "success",
            html:
                'Bạn có thể mở biên bản đánh giá sản phẩm ở máy bạn hoặc tải qua link sau : ' +
                '<a href="' + url + '"> Tải biên bản đánh giá sản phẩm</a> ',
            showConfirmButton: true
        });

    })
}

function getDownloadCookie(name) {
    let parts = document.cookie.split(name + "=");
    if (parts.length === 2) return parts.pop().split(";").shift();
}

function expireCookie(cName) {
    document.cookie = encodeURIComponent(cName) + "=deleted; expires=" + new Date(0).toUTCString();
}

let downloadTimer;

function blockResubmit(hrefExcel) {
    swal({
        title: "Đang tải biên bản!",
        imageUrl: '/img/Curve-Loading.gif',
        text: "Xin vui lòng chờ trong giây lát ...",
        showConfirmButton: false,
        allowOutsideClick: false
    });
    let downloadToken = (new Date().getTime()).toString();
    $('#idPrintExcel').attr('href', `${hrefExcel}&token=${downloadToken}`)
    downloadTimer = window.setInterval(function () {
        let token = getDownloadCookie("downloadToken");
        if (token === downloadToken) {
            unblockSubmit();
        }
    }, 1000);
}

function sendToken(id,hrefExcel) {
    swal({
        title: "Đang tải biên bản!",
        imageUrl: '/img/Curve-Loading.gif',
        text: "Xin vui lòng chờ trong giây lát ...",
        showConfirmButton: false,
        allowOutsideClick: false
    });
    let downloadToken = (new Date().getTime()).toString();
    $(`#${id}`).attr('href', `${hrefExcel}&token=${downloadToken}`)
    downloadTimer = window.setInterval(function () {
        let token = getDownloadCookie("downloadToken");
        if (token === downloadToken) {
            unblockSubmit();
        }
    }, 1000);
}

function unblockSubmit() {
    swal.close();
    window.clearInterval(downloadTimer);
    expireCookie("downloadToken");
}

function updateMember(){
    $('#updateMemberToHelpTeam').prop('disabled', true)
    let mem = [];
    let data = document.getElementsByClassName("change-selector2-helpteam")
    for (var i = 0; data[i]; ++i) {
        if (data[i].checked) {
            mem.push(data[i].value);
        }
    }
    var _token = $('meta[name="csrf-token"]').attr('content');

    let obj = {
        _token:_token,
        user_update_id:userUpdateId,
        user_id: mem[0],
        team_id:id
    }
    $.ajax({
        url: "updatememberhelpteam",
        data: obj,
        type: "POST",
        success: function (ret) {
            if (ret == 'success') {
                setUserUpdateId(mem[0])
                getMembersHelpTeam()
                getMembersHelpTeamOther()
                getMembersByLevel()
                setTimeout(() => {
                    Swal.fire({
                        type: 'success',
                        title: '',
                        text: 'Bạn đã cập nhật thành viên thành công',
                    });
                }, 300);
                $('#updateMemberToHelpTeam').prop('disabled', false)
                $('#updatemember').modal('toggle');
            }else{
                Swal.fire({
                    type: 'warning',
                    title: '',
                    text: 'Cập nhật thành viên thất bại.',
                });
            }
        }
    })
}

function deleteMember(memberId){
    Swal.fire({
        title: 'Bạn có chắc xóa thành viên?',
        text: "Thành viên này sẽ không được phép tham gia tư vấn các sản phẩm trong hội đồng",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Hủy',
        confirmButtonText: 'Đồng ý'
    }).then((result) => {
        if (result.value) {
            var _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "deletememberhelpteam",
                data: { _token: _token, user_id: memberId, team_id: id },
                type: "POST",
                success: function (ret) {
                    if (ret) {
                        if (ret.text) {
                           return Swal.fire({
                                type: 'warning',
                                title: 'Dừng thất bại',
                                text: ret.text,
                            });

                        } else {
                            getMembersHelpTeam()
                            getMembersHelpTeamOther()
                            getMembersByLevel()
                            Swal.fire({
                                type: 'success',
                                title: '',
                                text: 'Đã xóa thành viên',
                            });
                        }


                    }
                }
            })
        }
    })
}