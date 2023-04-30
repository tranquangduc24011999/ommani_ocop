var pageResultPrint = 1;
var limitResultPrint = 20;
var workingResultPrint = false;
var isLoadDone = false;
var isFilteredResultPrint = false;
var cboDate = document.getElementById("cboDate");
var datepk1 = document.getElementById("datepk1");
var datepk2 = document.getElementById("datepk2");
$(document).ready(function(){
    getProductDoneEvalueResult()
    $('#Status').select2()
    $('.cat-list li').addClass('fnd');
    function counter_set() {
        $('.cat-list').each(function () {
            var cnt = $(this).children('.cat-list li.fnd').length;

            $(this).parent().parent().parent().find('.incat-count').text(cnt);
        });
    }

    counter_set();

    $('.srch').keyup(function () {
        var txt = $(this).val().toLowerCase();
        $('.cat-list li').filter(function () {
            var mt = $(this).text().toLowerCase().indexOf(txt) > -1;
            $(this).toggle(mt);
            $(this).toggleClass('fnd', mt);
        });
        counter_set();
    });
    $('#cboProvincialMulti').select2()
    $('#cboDistrictsMulti').select2()
    $('#cboWardsMulti').select2()
    $('#Status').select2()
    $('#cboProvincialMulti').on("select2:select", function (e) {
        let data = $('#cboProvincialMulti').select2('data')
        if (e.params) {
            if (e.params.data.id == '0') {
                $('#cboProvincialMulti').select2('val', ['0']);
                cboDistrictsMulti.innerHTML = '';
                cboWardsMulti.innerHTML = '';
                $('#cboDistrictsMulti').select2('val', []);
                $('#cboWardsMulti').select2('val', []);
            } else if (data.length == 2 && data[0].id == '0') {
                $('#cboProvincialMulti').select2('val', data[1].id);
                LoadCboDistricts(data[1].id, data[1].text);
            } else {
                LoadCboDistricts(e.params.data.id, e.params.data.text);
            }
        }
    });
    $('#cboDistrictsMulti').on("select2:select", function (e) {
        let data = $('#cboDistrictsMulti').select2('data')
        if (e.params) {
            if (e.params.data.id == '0') {
                $('#cboDistrictsMulti').select2('val', ['0']);
                cboWardsMulti.innerHTML = '';
                $('#cboWardsMulti').select2('val', []);
                $('#cboBranch').select2('val', []);
            } else if (data.length == 2 && data[0].id == '0') {
                $('#cboDistrictsMulti').select2('val', data[1].id);
                LoadCboWards(data[1].id, data[1].text);
            } else {
                LoadCboWards(e.params.data.id, e.params.data.text);
            }
        }
    });
    $('#cboWardsMulti').on("select2:select", function (e) {
        let data = $('#cboWardsMulti').select2('data')
        if (e.added) {
            if (e.added.id == '0') {
                $('#cboWardsMulti').select2('val', ['0']);
                cboBranch.innerHTML = '';
                $('#cboBranch').select2('val', []);
            } else if (data.length == 2 && data[0].id == '0') {
                $('#cboWardsMulti').select2('val', data[1].id);
                LoadCboBranch(data[1].id, data[1].text);
            } else {
                LoadCboBranch(e.added.id, e.added.text);
            }
        }
    });
    $('#cboProvincialMulti').on("select2:unselect", function (e) {
        deleteDistrictByProvincial(e.params.data.id);
    });
    $('#cboDistrictsMulti').on("select2:unselect", function (e) {
        deleteWardByDistrict(e.params.data.id);
    });
})

$("#listproductinfno").scroll(function() {
    if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {

        if(isFilteredResultPrint) {
            return;
        }

        if(isLoadDone) {
            return;
        }

        if(!workingResultPrint) {
            workingResultPrint = true;
            console.log('pageResultPrint: ', pageResultPrint);
            getProductDoneEvalueResult();
        }

        console.log('isFilteredResultPrint: ', isFilteredResultPrint);
    } else {
        
    }
});

const getProductDoneEvalueResult = () => {
    // listproductinfno.innerHTML = `<span style="margin-left:10px">Đang tải dữ liệu...</span>`
    let url = `/getProductDoneEvalueResult?limit=${limitResultPrint}&page=${pageResultPrint}`
    $.ajax({
        type: `GET`,
        url: url,
        success: (data) => {
            if (data.length > 0) {
                drawproductInfo(data)
            }else{
                isLoadDone = true;
                // listproductinfno.innerHTML = `<span style="margin-left:10px">Không có sản phẩm cần in!</span>`
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    })
}
function drawproductInfo (ret) {
    // document.getElementById('listproductinfno').innerHTML = ``
    let html = '';
    ret.forEach((data) => {
        html += `
        <div class="col-md-6 row rowContent">
            <div class="col-2" style="padding-right: 0;">
            <img src="${data.imgUrl.length > 0 ? data.imgUrl[0] : 'img/noavatar.png'}" class="imgava">
            </div>
            <div class="col-9" style="overflow: auto;padding: 0px 13px; ">
            <span class="titleName">${data.name}</span></br>
              <span class="titleNamechirden">${data.code ? 'Mã sản phẩm: ' + data.code + '</br>' : ''}</span>
            <span class="titleNamechirden">Tên chủ thể: ${data.entityInfo[0].name}</span></br>
            ${convertStatusProductInfo(data.status)}
            </div>
            <div class="col-1" style="padding-left: 0;    margin-top: 11px;">
            <div class="rounds">
                <input type="checkbox" class="productInFor_select" id="product_${data._id}"  value="${data._id}" name="checkbox" />
                <label for="product_${data._id}"></label>
            </div>
            </div>
        </div>
        `
    })
    $('#listproductinfno').append(html);
    pageResultPrint++;
    workingResultPrint = false;
}
$("#checkbox-all").on("click", function () {
    $(".productInFor_select").prop("checked", $(this).prop("checked"));
});
function cboDateChange(event) {
    if (event.selectedIndex == '5') {
        document.getElementById("date1").style.display = 'inline';
        document.getElementById("date2").style.display = 'inline';
    } else {
        document.getElementById("date1").style.display = 'none';
        document.getElementById("date2").style.display = 'none';
    }
}

function getQuery() {
    var d = {};
    let search = "";
    let date = getDate();
    if(date !==''){
        d.date = date
    }
    if(nameProductinfo.value !==''){
        d.search = nameProductinfo.value
    }
    if ($('#Status').select2('val').length && $('#Status').select2('val')[0] != '0') {
        d.Status = JSON.stringify({
            $in: $('#Status').select2('val')
        });
    }
    if ($('#cboProvincialMulti').select2('val').length && $('#cboProvincialMulti').select2('val')[0] != '0') {
        d.IdProvincial = JSON.stringify({
            $in: $('#cboProvincialMulti').select2('val')
        });
    }
    if ($('#cboDistrictsMulti').select2('val').length && $('#cboDistrictsMulti').select2('val')[0] != '0') {
        d.IdDistrict = JSON.stringify({
            $in: $('#cboDistrictsMulti').select2('val')
        });
    }
    if ($('#cboWardsMulti').select2('val').length && $('#cboWardsMulti').select2('val')[0] != '0') {
        d.IdWard = JSON.stringify({
            $in: $('#cboWardsMulti').select2('val')
        });
    }
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
    isFilteredResultPrint = true;
    // listproductinfno.innerHTML = `<span style="margin-left:10px">Đang tải dữ liệu...</span>`
    $('#listproductinfno').html('');
    let data = getQuery();
    $.ajax({
        url: "getProductDoneEvalueResult",
        type: "GET",
        data: data,
        success: function (ret) {
            if (ret.length > 0) {
                drawproductInfo(ret)
            }else{
                listproductinfno.innerHTML = `<span style="margin-left:10px">Không có sản phẩm cần in!</span>`
            }
        }
    })
}
const printResult = ()=>{
    swal({
        title: "Đang in kết quả chấm!",
        imageUrl: '/img/Curve-Loading.gif',
        text: "Xin vui lòng chờ trong giây lát ...",
        showConfirmButton: false
    });
    let productInFoIdArr = []
    let productInFoId = document.getElementsByClassName("productInFor_select");
    for (var i = 0; productInFoId[i]; ++i) {
        if (productInFoId[i].checked) {
            productInFoIdArr.push(productInFoId[i].value);
        }
    }
    let obj = {
        data : JSON.stringify(productInFoIdArr)
    }
    $.ajax({
        type: `POST`,
        url: `/getALLReportEvaluationsByFileIdAndMemId`,
        data:obj,
        success: (ret) => {
            if (ret.success) {
                if (ret.data) {
                    generate(ret.data.url,ret.data.fileName);
                } else {
                    Swal.fire({
                        type: 'success',
                        title: '',
                        text: 'Không có dữ liệu để khai thác báo cáo',
                        footer: ''
                    });
                }
            }else{
                Swal.fire({
                    type: 'error',
                    title: 'Đã có lỗi xảy ra',
                    text: ret.messenger,
                    footer: ''
                });
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
            Swal.fire({
                type: 'error',
                title: 'Đã có lỗi xảy ra',
                text: 'Đã có lỗi xảy ra',
                footer: ''
            });
        }
    })
}
const printResultHelpTeams = ()=>{
    swal({
        title: "Đang in kết quả chấm tổ tư vấn!",
        imageUrl: '/img/Curve-Loading.gif',
        text: "Xin vui lòng chờ trong giây lát ...",
        showConfirmButton: false
    });
    let productInFoIdArr = []
    let productInFoId = document.getElementsByClassName("productInFor_select");
    for (var i = 0; productInFoId[i]; ++i) {
        if (productInFoId[i].checked) {
            productInFoIdArr.push(productInFoId[i].value);
        }
    }
    let obj = {
        data : JSON.stringify(productInFoIdArr)
    }
    $.ajax({
        type: `POST`,
        url: `/getALLReportEvaluationsHelpTeamsByFileIdAndMemId`,
        data:obj,
        success: (ret) => {
            if (ret.success) {
                if (ret.data) {
                    generate(ret.data.url,ret.data.fileName);
                } else {
                    Swal.fire({
                        type: 'success',
                        title: '',
                        text: 'Không có dữ liệu để khai thác báo cáo',
                        footer: ''
                    });
                }
            }else{
                Swal.fire({
                    type: 'error',
                    title: 'Đã có lỗi xảy ra',
                    text: ret.messenger,
                    footer: ''
                });
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
            Swal.fire({
                type: 'error',
                title: 'Đã có lỗi xảy ra',
                text: 'Đã có lỗi xảy ra',
                footer: ''
            });
        }
    })
}
function loadFile(url,callback){
    PizZipUtils.getBinaryContent(url,callback);
}
function generate(url,fileName) {
    loadFile(url,function(error,content){
        if (error) { throw error };

        // The error object contains additional information when logged with JSON.stringify (it contains a properties object containing all suberrors).
        function replaceErrors(key, value) {
            if (value instanceof Error) {
                return Object.getOwnPropertyNames(value).reduce(function(error, key) {
                    error[key] = value[key];
                    return error;
                }, {});
            }
            return value;
        }

        function errorHandler(error) {
            console.log(JSON.stringify({error: error}, replaceErrors));
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
        var out=zip.generate({
            type:"blob",
            mimeType: "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
        }) //Output the document using Data-URI
        ////out =new Blob(content, {type: 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'});
        saveAs(out,fileName);
        swal.close();
        swal({   
            title: "Kết quả chấm đã được tải về!",
            type: "success",
            showConfirmButton: true 
        });
        
    })
}