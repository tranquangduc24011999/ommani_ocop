function getParam(paramName) {
    var url_string = window.location.href;
    var url = new URL(url_string);
    return url.searchParams.get(paramName);
}
let idcouncil
var productinfo = getParam('productinfo');
let idcouncils
$(document).ready(function () {
    let oldSelect2 = jQuery.fn.select2;
    jQuery.fn.select2 = function() {
        if (arguments.length === 1 && typeof arguments[0] === 'object' && typeof arguments[0].dropdownParent !== 'defined') {
            const modalParent = jQuery(this).parents('div.modal').first();
            if (modalParent.length > 0) {
                arguments[0].dropdownParent = modalParent;
            }
        }
        return oldSelect2.apply(this,arguments);
    };
    getevc()
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
    // $('#step1').modal('show');
    $('#chairmanTgv').select2({
        "width": "100%"
    })
    $('#SecretaryTgv').select2({
        "width": "100%"
    })
    $('#chairman').select2({
        "width": "100%"
    })
    $('#Secretary').select2({
        "width": "100%"
    })
    $('#chairmans').select2({
        "width": "100%"
    })
    $('#Secretarys').select2({
        "width": "100%"
    })
    // getExMa()
    // getEx()
    getproductInfo()
    getMembersByLevel()
    getExaminers()
    $('.row page-titles').css({ "display": "none" })
})

function seach() {
    let data = document.getElementById('seach').value
    $.ajax({
        url: "getsearchexaminerbylevel?keyword=" + data,
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                drawM(ret, document.getElementById('listmember'), 'change-selector2')
            } else {
                document.getElementById('listmember').innerHTML = ``
            }
        }
    })
}

function getExaminers() {

    $.ajax({
        url: "getexaminerbylevel",
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                drawM(ret, document.getElementById('listmember'), 'change-selector2')
            }
        }, error: function (err) {
            console.warn(err)
        }
    })
}

function drawM(ret, dom, className) {
    dom.innerHTML = ``
    ret.forEach((data) => {
        dom.innerHTML += `
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
                <input type="checkbox" class="${className}" id="checkbox-${data.id}" value="${data.id}" name="checkbox" />
                <label for="checkbox-${data.id}"></label>
            </div>
            </div>
      </div>
        `
    })
}
function getMembersByLevel(){
    $.ajax({
        url: "getmemberbylevel",
        type: "GET",
        success: function (response) {
            if (response.length > 0) {
                var p = new Option("Chọn chủ tịch", "0");
                var c = new Option("Chọn thư ký", "0");
                var d = new Option("Chọn chủ tịch", "0");
                var e = new Option("Chọn thư ký", "0");
                $("#chairman").append(p);
                $("#Secretary").append(c);
                $("#chairmans").append(d);
                $("#Secretarys").append(e);
                $("#chairmanTgv").append(new Option("Chọn tổ trưởng", "0"));
                $("#SecretaryTgv").append(new Option("Chọn tổ phó", "0"));
                let arrays = []
                response.forEach(element => {
                    if (element.role == "HELPTEAM") {
                        var o = new Option(element.name, `${element.id}`);
                        var e = new Option(element.name, `${element.id}`);
                        $("#chairmanTgv").append(o);
                        $("#SecretaryTgv").append(e);
                        arrays.push(element)

                    } else {
                        var o = new Option(element.name, `${element.id}`);
                        var e = new Option(element.name, `${element.id}`);
                        var op = new Option(element.name, `${element.id}`);
                        var ep = new Option(element.name, `${element.id}`);
                        $("#chairman").append(o);
                        $("#Secretary").append(e);
                        $("#chairmans").append(op);
                        $("#Secretarys").append(ep);
                    }

                });
                drawM(arrays, document.getElementById('listmemberTgv'), 'change-selet')
            }
        }, error: function (err) {
            console.log(err)
        }
    })
}
function getExMa() {
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
                $("#chairmanTgv").append(new Option("Chọn tổ trưởng", "0"));
                $("#SecretaryTgv").append(new Option("Chọn tổ phó", "0"));
                let arrays = []
                ret.forEach(element => {
                    if (element.type == "HELPTEAM") {
                        var o = new Option(element.name, `${element._id}*${element.name}`);
                        var e = new Option(element.name, `${element._id}*${element.name}`);
                        $("#chairmanTgv").append(o);
                        $("#SecretaryTgv").append(e);
                        arrays.push(element)

                    } else {
                        var o = new Option(element.name, `${element._id}*${element.name}`);
                        var e = new Option(element.name, `${element._id}*${element.name}`);
                        var op = new Option(element.name, `${element._id}*${element.name}`);
                        var ep = new Option(element.name, `${element._id}*${element.name}`);
                        $("#chairman").append(o);
                        $("#Secretary").append(e);
                        $("#chairmans").append(op);
                        $("#Secretarys").append(ep);
                    }

                });
                // drawM(arrays, document.getElementById('listmemberTgv'), 'change-selet')


            }
        }, error: function (err) {
            console.log(err)
        }
    })
}
function nextStep(step) {
    if (step == "tgv1") {
        if ($('#nameGroupTgv').val() == "") {
            Swal.fire({
                type: 'warning',
                title: '',
                text: 'Bạn vui lòng nhập tên tổ tư vấn sau đó tiếp tục',
            });
            return
        }
        if ($('#chairmanTgv option:selected').val() == "0") {
            Swal.fire({
                type: 'warning',
                title: '',
                text: 'Bạn vui lòng chọn tổ trưởng',
            });
            return
        }
        if ($('#SecretaryTgv option:selected').val() == "0") {
            Swal.fire({
                type: 'warning',
                title: '',
                text: 'Bạn vui lòng chọn tổ phó',
            });
            return
        }
        
        let Datestart = document.getElementById('date-selectorTgv').value;
        let Datenow = new Date(Datestart)
        if(Datenow == 'Invalid Date'){
            Swal.fire({
                type: 'warning',
                title: '',
                text: 'Bạn vui lòng chọn ngày hết hạn',
            });
            return
        }
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
            $(`#date-selectorTgv`).val(
                `${new Date().getFullYear()}-${valMonth}-${valDate}`
            );
            return false
        }
        $('#step1Tgv').modal('toggle');
        $('#step2Tgv').modal('show');
    } else if (step == 'Tgv2') {
        // let arr = []
        // let data = document.getElementsByClassName("change-selector2")
        // for (var i = 0; data[i]; ++i) {
        //     if (data[i].checked) {
        //         arr.push(data[i].value);
        //     }
        // }
        // if (arr.length == 0) {
        //     Swal.fire({
        //         type: 'warning',
        //         title: '',
        //         text: 'Bạn vui chọn cán bộ chấm ',
        //     });
        //     return
        // }
        $('#step2Tgv').modal('toggle');
        $('#step1').modal('show');
    }
    if (step == 1) {
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
        $('#step1').modal('toggle');
        $('#step2').modal('show');
    } else if (step == 2) {
        let arr = []
        let data = document.getElementsByClassName("change-selector2")
        for (var i = 0; data[i]; ++i) {
            if (data[i].checked) {
                arr.push(data[i].value);
            }
        }
        if (arr.length == 0) {
            Swal.fire({
                type: 'warning',
                title: '',
                text: 'Bạn vui chọn cán bộ chấm ',
            });
            return
        }
        $('#step2').modal('toggle');
        $('#step3').modal('show');
    }
}
function backstep(step) {
    if (step == 3) {
        $('#step2').modal('show');
        $('#step3').modal('toggle');
    } else if (step == 2) {

        $('#step2').modal('toggle');
        $('#step1').modal('show');
    } else if (step == 1) {
        $('#step1').modal('toggle');
        $('#step2Tgv').modal('show');
    } else if (step == "tgv1") {
        $('#step2Tgv').modal('toggle');
        $('#step1Tgv').modal('show');
    } else {
        $('#step1Tgv').modal('toggle');
    }
}
function getproductInfo() {
    $.ajax({
        url: "getproductsbylevel",
        type: "GET",
        success: function (response) {
            if (response != null) {
                drawproductInfo(response)
            } else {
                document.getElementById('listproductinfno').innerHTML = `<span class="titleNamechirdens">Đơn vị của bạn đã hết sản phẩm cần tạo hội đồng</a>`
            }
        }
    })
}
function seachproduct() {
    let data = document.getElementById('nameProductinfo').value
    $.ajax({
        url: "getProductinfobysesion?search=" + data,
        type: "GET",
        success: function (ret) {
            if (ret.success) {
                drawproductInfo(ret.data)
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
            <img src="${data.image}" class="imgava">
            </div>
            <div class="col-9" style="padding: 0;overflow: auto; ">
            <span class="titleName">${data.name}</span></br>
            <span class="titleNamechirden">Mã sản phẩm: ${data.code}</span></br>
            <span class="titleNamechirden">Tên chủ thể: ${data.entity_name}</span>
            </div>
            <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
            <div class="rounds">
                <input type="checkbox" class="change-selector" id="entities-${data.id}" value="${data.id}*${data.name}" name="checkbox" />
                <label for="entities-${data.id}"></label>
            </div>
            </div>
        </div>
        `
    })
    if (productinfo) {
        $(`#entities-${productinfo}`).prop("checked", true);
    }
}
$("#checkbox-all").on("click", function () {
    $(".change-selector").prop("checked", $(this).prop("checked"));
});
function savegroup() {
    $('#btnSuccess').addClass('disabled')
    let productInfo = []
    let memExs = []
    let memHelp = []
    let productInfoHelp = []
    let endate = document.getElementById('date-selector').value;
    let endateTgv = document.getElementById('date-selectorTgv').value;
    let nameGroup = document.getElementById('nameGroup').value
    let chairman = $('#chairman option:selected').val()
    let secretary = $('#Secretary option:selected').val()

    let leader = $('#chairmanTgv option:selected').val()
    let viceTeamLeader = $('#SecretaryTgv option:selected').val()

    let memEx = document.getElementsByClassName("change-selector2");
    let productinfo = document.getElementsByClassName("change-selector");
    let helpteams = document.getElementsByClassName('change-selet');

    let memberHelp = [];
    let leaderMember = {
        id: leader,
        type: 'leader'
    }

    let viceleaderMember = {
        id: viceTeamLeader,
        type: 'viceleader'
    }
    memberHelp.push(leaderMember);
    memberHelp.push(viceleaderMember);


    for (var i = 0; helpteams[i]; ++i) {
        if (helpteams[i].checked) {
            //let dataHelp = helpteams[i].value.split('*')
            //memHelp.push(dataHelp[0]);
            memHelp.push(helpteams[i].value);
        }
    }
    for(var i = 0; memHelp[i]; i++ ){
        if(!checkExitsMember(memHelp[i], memberHelp)){
            let member = {
                id: memHelp[i],
                type: 'member'
            }
            memberHelp.push(member);
        }
    }

    for (var i = 0; productinfo[i]; ++i) {
        if (productinfo[i].checked) {
            let dataHelp = productinfo[i].value.split('*')
            productInfo.push(productinfo[i].value);
            productInfoHelp.push(dataHelp[0])
        }
    }
    for (var i = 0; memEx[i]; ++i) {
        if (memEx[i].checked) {
            memExs.push(memEx[i].value);
        }
    }
    if (productInfo.length == 0) {
        Swal.fire({
            type: 'warning',
            title: '',
            text: 'Bạn vui lòng chọn sản phẩm cần chấm',
        });
        $('#btnSuccess').removeClass('disabled')
        return
    }
    let memCouncil = [];
    let chairmanMember = {
        id: chairman,
        type: 'chairman'
    }
    let secretaryMember = {
        id: secretary,
        type: 'secretary'
    }
    memCouncil.push(chairmanMember);
    memCouncil.push(secretaryMember);
    for(var i = 0; memExs[i]; i++){
        if(!checkExitsMember(memExs[i], memCouncil)){
            let member = {
                id: memExs[i],
                type: 'member'
            }
            memCouncil.push(member);
        }
    }

    let obj = {
        name_council: nameGroup,
        chairman: chairman,
        secretary: secretary,
        deadline: endate,
        members: memCouncil,
        product_info: productInfoHelp
        // memExs: JSON.stringify(memExs),
        // productInfo: JSON.stringify(productInfo)
    }
    var _token = $('meta[name="csrf-token"]').attr('content');
    let arr = {
        _token:_token,
        council: obj,
    }
    let objtgv = false
    if (memHelp.length > 0) {
        arr.help_team = {
            name_help_team: nameGroupTgv.value,
            leader: leader,
            vice_teamleader: viceTeamLeader,
            //deadline: endateTgv,
            members: memberHelp,
            product: productInfoHelp
            // memHelp: JSON.stringify(memHelp),
            // product: JSON.stringify(productInfoHelp)
        }
    }
    console.log(arr);
    $.ajax({
        url: "savecouncil",
        type: "POST",
        data: arr,
        success: function (ret) {
            if (ret == 'success') {
                Swal.fire({
                    type: 'success',
                    title: '',
                    text: 'Bạn thêm hội đồng chấm thành công',
                })
                $('#btnSuccess').removeClass('disabled')
                getevc()
                $('#step3').modal('toggle');
                document.getElementById('nameGroup').value = ''
                $("#chairman").val('0').trigger("change");
                $("#Secretary").val('0').trigger("change");
                $(".change-selector").prop("checked", false);
                $(".change-selector2").prop("checked", false);
            }
            if (ret.error) {
                Swal.fire({
                    type: 'warning',
                    title: '',
                    text: 'Đã có lỗi xảy ra. Xin vui lòng thử lại.',
                })
            }
        }
    })
}

function checkExitsMember(id, members){
    var result = false;
    for(var i = 0 ; members[i] ; i++){
        if(members[i].id == id){
            result = true;
            break;
        }
    }
    return result
}
function getevc() {
    $.ajax({
        url: "getcouncils",
        type: "GET",
        success: function (response) {
            document.getElementById('listcouncil').innerHTML = ``
            if (response.length > 0) {
                drawevaluationcouncils(response)
            }
        }
    })
}
function drawevaluationcouncils(data) {
    document.getElementById('listcouncil').innerHTML = ``
    data.forEach((e) => {
        // let product = []
        // for (let i = 0; i < e.group.length; i++) {
        //     if (e.group[i].status == "pending") {
        //         e.group.splice(i, 1)
        //     }

        // }

        // let member = e.group.length
        // e.group.forEach((data) => {
        //     data.productsInfoId.forEach((v) => {
        //         product.push(v)
        //     })
        // })
        let teamplate = ` <div id="${e.id}" class="Rectangles" style="display:none;    height: 117px;position: absolute;width: 200px;left: -169px;top: 26px;z-index: 9;" >
        <div><a href="#" onclick="outclick(\'${e.id}\')" style="color: #818182;font-weight: 600;">x</a></div>
        <div class="Menu-Menu-Menu buttons"><a href="##" style="font-weight: 600;" data-toggle="modal" data-target="#step4" onclick="updatecouncils(\'${e.id}\',\'${e.chairman_id}\',\'${e.chairman_name}\',\'${e.secretary_id}\',\'${e.secretary_name}\',\'${e.expired}\',\'${e.name}\')">Sửa</a></div>
        <div class="Delete buttons"><a href="##"  style="font-weight: 600;" onclick="stopGroup(\'${e.id}\')">Dừng</div></a>
        <!--<div class=" buttons" style="    margin-top: 9px;"><a href="##"  style="font-weight: 600;" data-toggle="modal" data-target="#step1Tgv" onclick="addHelpTeam(\'${e.id}\')" >Thêm tổ giúp việc</div>-->`
        // if (e.helpteamcouncils.length > 0) {
        //     teamplate = `<div id="${e.id}" class="Rectangles" style="display:none;height: 93px;">
        //     <div><a href="#" onclick="outclick(\'${e.id}\')" style="color: #818182;font-weight: 600;">x</a></div>
        //     <span class="Menu-Menu-Menu">
        //     <a href="##" style="font-weight: 600;" data-toggle="modal" data-target="#step4" onclick="updatecouncils(\'${e.id}\',\'${e.chairman_id}\',\'${e.chairman_name}\',\'${e.secretary_id}\',\'${e.secretary_name}\',\'${e.expired}\',\'${e.name}\')">
        //     Sửa</span>
        //     <span class="Delete "><a href="##"  style="font-weight: 600;" onclick="stopGroup(\'${e.id}\')">Dừng</span></a>`
        // }
        // const uniqueSet = new Set(product);
        // const backToArray = [...uniqueSet];
        document.getElementById('listcouncil').innerHTML += `
        <div class="col-md-6 " style="padding-bottom: 20px ;">
            <div class="row Rectangle" style="margin-right: 0px;padding-right: 0px;">

            <div class="col-11" style="padding-right: 0;    display: flex;">
                <a href="detailcouncils?id=${e.id}&&member=${e.member}&&product=${e.product}" style="display: flex;">
                <div style=" margin-right: 14px;">
                <img src="images/noavatar.png" class="imgava">
                </div>
                <div style="    overflow: auto;">
                    <span class="titleName">${e.name}</span></br>
                    <span class="titleNamechirden">${e.member - 2} thành viên - ${e.product} bộ hồ sơ</span></br>
                    <span class="titleNamechirden">Ngày hết hạn chấm ${new Date(e.expired).toLocaleDateString()}</span></br>
                    
                </div>
                </a>
               
            </div>
            
            <div class="col-1" style="padding-left: 0;margin-top: 0px;text-align: right;">
            <a href="##" onclick="onmouseovers(\'${e.id}\')" >
                 <img src="images/grey.png" srcset="images/grey2x.png 2x,images/grey3x.png 3x" class="Grey">
                </a>
                        ${teamplate}
                </a>
                </div>
           
            </div>
            <div class="col-12" style="margin-left: 61px;margin-top: 8px;" id="helpTeam_${e.team_id}">
                <a href="/helpteam?id=${e.team_id}&council_id=${e.id}" style="font-weight: bold;font-size: 14px;font-family: sans-serif;">Tổ tư vấn</a>
            </div>
            </div>
        </div>
        
        `
    })
    //getHelpTeam()
}
const checkHelpTeam = () => {
    let Datestart = document.getElementById('date-selectorTgv').value;
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
        $(`#date-selectorTgv`).val(
            `${new Date().getFullYear()}-${valMonth}-${valDate}`
        );
        return false
    }
    if ($('#nameGroupTgv').val() == "") {
        Swal.fire({
            type: 'warning',
            title: '',
            text: 'Bạn vui lòng nhập tên hội đồng sau đó tiếp tục',
        });
        return
    }
    if ($('#chairmanTgv option:selected').val() == "0" || $('#SecretaryTgv option:selected').val() == "0") {
        Swal.fire({
            type: 'warning',
            title: '',
            text: 'Bạn vui lòng nhập thêm cán bộ vào hội đồng sau đó tiếp tục',
        });
        return
    }
    $('#step1Tgv').modal('toggle');
    $('#step2Tgv').modal('show');
}
const addHelpTeam = (id) => {
    idcouncil = id
    $('#buttonNext').hide()
    $('#buttonDone').show()
    $('#tgv1').attr({ "onclick": "checkHelpTeam()" })


}
const showButton = () => {
    $('#buttonNext').show()
    $('#buttonDone').hide()
    $('#tgv1').attr({ "onclick": "nextStep('tgv1')" })
}
const saveCouncilHelpTeam = () => {
    $.ajax({
        url: "getgroupbyid?id=" + idcouncil,
        type: "GET",
        success: function (ret) {
            if (ret) {
                let productH = _.get(ret, 'group[0].productsInfoId', [])
                if (productH.length > 0) {
                    let endateTgv = document.getElementById('date-selectorTgv').value;
                    let leader = $('#chairmanTgv option:selected').val()
                    let viceTeamLeader = $('#SecretaryTgv option:selected').val()
                    let memHelp = []
                    let productInfoHelp = []
                    let helpteams = document.getElementsByClassName('change-selet');
                    for (var i = 0; helpteams[i]; ++i) {
                        if (helpteams[i].checked) {
                            let dataHelp = helpteams[i].value.split('*')
                            memHelp.push(dataHelp[0]);
                        }
                    }

                    let dataleader = leader.split('*')
                    let dataviceTeamLeader = viceTeamLeader.split('*')
                    let obj = {
                        _idCouncil:idcouncil,
                        nameCouncil: nameGroupTgv.value,
                        leader: dataleader[0],
                        nameLeader: dataleader[1],
                        viceTeamLeader: dataviceTeamLeader[0],
                        nameviceTeamLeader: dataviceTeamLeader[1],
                        deadline: endateTgv,
                        memHelp: JSON.stringify(memHelp),
                        product: JSON.stringify(productH)
                    }
                    $.ajax({
                        url: "savecouncilHepteam",
                        type: "POST",
                        data: obj,
                        success: function (ret) {
                            if (ret == 'success') {
                                Swal.fire({
                                    type: 'success',
                                    title: '',
                                    text: 'Bạn thêm hội đồng tổ tư vấn thành công',
                                })
                                getevc()
                                // $('#btnSuccess').removeClass('disabled')
                                // getevc()
                                $('#step2Tgv').modal('toggle');
                                // document.getElementById('nameGroup').value = ''
                                // $("#chairman").val('0').trigger("change");
                                // $("#Secretary").val('0').trigger("change");
                                // $(".change-selector").prop("checked", false);
                                // $(".change-selector2").prop("checked", false);
                            }
                        }
                    })
                } else {
                    Swal.fire({
                        type: 'warning',
                        title: '',
                        text: 'Tạo tổ tư vấn cho hội đồng thất bại',
                    });
                }
            }
        }
    })


}
const getHelpTeam = () => {
    $.ajax({
        url: "getHelpTeamcouncils",
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                ret.forEach((item) => {
                    if (document.getElementById(`helpTeam_${item._idCouncil}`)) {
                        document.getElementById(`helpTeam_${item._idCouncil}`).innerHTML = ` <a href="/addcouncils?id=${item._idCouncil}&&role=helpteam" style="font-weight: bold;font-size: 14px;font-family: sans-serif;">Tổ tư vấn</a>`
                    }
                })
            }
        }, error: function (errr) {
            console.log(errr)
        }
    })
}

function onmouseovers(id) {
    $(`#${id}`).show()
}
function outclick(id) {
    $(`#${id}`).hide()
}

function updatecouncils(id, chariman, nameChairman, secretary, nameSecretary, deadline, name) {
    idcouncils = id
    $('#nameGroups').val(`${name}`)
    $(`#chairmans`).val(`${chariman}*${nameChairman}`).trigger('change');
    $(`#Secretarys`).val(`${secretary}*${nameSecretary}`).trigger('change');
    let date = new Date(deadline)
    if (date.getMonth().toLocaleString().split('').length == 1) {
        valMonth = `0${date.getMonth() + 1}`
    } else {
        valMonth = `${date.getMonth() + 1}`
    }
    if (date.getDate().toLocaleString().split('').length == 1) {
        valDate = `0${date.getDate()}`
    } else {
        valDate = `${date.getDate()}`
    }
    $(`#date-selectors`).val(
        `${date.getFullYear()}-${valMonth}-${valDate}`
    );
}
function saveupdatecouncils() {
    let data = $('#chairmans option:selected').val().split('*')
    let data2 = $('#Secretarys option:selected').val().split('*')
    let endate = document.getElementById('date-selectors').value;
    let obj = {
        _id: idcouncils,
        nameCouncil: $('#nameGroups').val(),
        chairman: data[0],
        nameChairman: data[1],
        secretary: data2[0],
        nameSecretary: data2[1],
        deadline: endate
    }
    console.log(obj)
    if (obj.nameCouncil == '') {
        Swal.fire({
            type: 'warning',
            title: '',
            text: 'Bạn vui lòng thêm tên hội đồng',
        });
        return
    }
    if (obj.nameChairman == '' || obj.chairman == "0") {
        Swal.fire({
            type: 'warning',
            title: '',
            text: 'Bạn vui chọn chủ tịch hội đồng',
        });
        return
    }
    if (obj.secretary == '' || obj.secretary == "0") {
        Swal.fire({
            type: 'warning',
            title: '',
            text: 'Bạn vui chọn thư ký hội đồng',
        });
        return
    }
    let Datestart = document.getElementById('date-selectors').value;
    let Datenow = new Date(Datestart)
    let ThisDate = new Date(new Date().setHours(0, 0, 0, 0))
    if (Datenow < ThisDate) {
       return Swal.fire({
            title: 'Ngày hết hạn chấm không hợp lệ!',
            text: "Ngày hết hạn chấm được tính từ ngày hôm nay",
            type: 'warning',
        })
    }
    $.ajax({
        url: "updatecouncils",
        type: "POST",
        data: obj,
        success: function (ret) {
            if (ret) {
                Swal.fire({
                    type: 'success',
                    title: '',
                    text: 'Bạn chỉnh sửa hội đồng chấm thành công',
                });
                getevc()
                getproductInfo()
            }
        }
    })
}
function Delete(idgroup) {
    $.ajax({
        url: "deletegroup?id=" + idgroup,
        type: "GET",
        success: function (ret) {
            if (ret) {
                Swal.fire({
                    type: 'success',
                    title: '',
                    text: 'Bạn xóa hội đồng thành công',
                });
                getevc()
            }
        }
    })
}
function stopGroup(idgroup) {
    $.ajax({
        url: "stopGroup?id=" + idgroup,
        type: "GET",
        success: function (ret) {
            if (ret.data=='201') {
                Swal.fire({
                    type: 'info',
                    title: '',
                    text: 'Hội đồng chấm có sản phẩm đang xử lý ở cấp trên, Anh/chị vui lòng không dừng hội đồng!',
                });
            }else{
                Swal.fire({
                    type: 'success',
                    title: '',
                    text: 'Hội đồng chấm đã dừng',
                });
                getevc()
                getproductInfo()
            }
        }
    })
}