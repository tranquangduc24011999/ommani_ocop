var currentType = undefined;
var currentStatus = undefined;
let idProvncial = ""
let provncial = ""
let idDis = ""
let Dis = ""
let idWard = ""
var page = 1;
var isFiltered = false;
var isFirstLoad = true;
let limit = 10;
var objProvincials;
var objDistricts;
var objWards;
var preLoad = false
var working = false;
var total = 0;
var seen = 0;
var loadMoreNumber = 10;
var firstLoadWard = true;
$(document).ready(function () {
    // getTotalProducts();
    // $('#btnLoadMore').css({ opacity: 0 });
    // $('#btnLoadMore').click(function(){
    //     $('#btnLoadMore').css({ 'padding': '8px 64px' });
    //     $('#btnLoadMore').html('<i class="fas fa-sync fa-spin"></i>');
    //     getPendingEvaluateProducts();
    // });
    $('#cboProvincial1').select2();
    $('#cboDistricts1').select2();
    // $('#cboWards').select2()
    getAccountInfo();
    // $(`#productType-select`).on('change', (event) => {
    //     if (event.target.value == 0) {
    //         currentType = undefined;
    //         page = 1;
    //         limit = 10;
    //         $('#btnLoadMore').css({ opacity: 0 });
    //         isFiltered = true;
    //         getPendingEvaluateProducts();
    //     } else {
    //         setDefault();
    //         isFiltered = true;
    //         currentType = event.target.value;
    //         console.log(currentType,21)
    //         getPendingEvaluateProducts(currentType);
    //     }
    // });
    // $(`#productStatus-select`).on('change', (event) => {
    //     if (event.target.value === "ALL") {
    //         currentStatus = undefined;
    //         setDefault();
    //         getPendingEvaluateProducts();
    //     } else {
    //         setDefault();
    //         isFiltered = true;
    //         currentStatus = event.target.value;
    //         getPendingEvaluateProducts(currentType);
    //     }
    // });

    // $(`#searchProductsBtn`).on('click', (event) => {
    //     event.preventDefault();
    //     setDefault();
    //     isFiltered = true;
    //     getPendingEvaluateProducts(currentType, $(`#keyword`).val());
    // });

    $(`#searchProductsBtn1`).on('click', (event) => {
        $('#listProducts').html('');
        seachEvalue = true;
        event.preventDefault();
        //resetDefault();
        isFiltered = true;
        let queryKeyword = $(`#keyword`).val().trim();
        if(queryKeyword.length > 0) {
            searchingKeyword = queryKeyword;
        } else {
            searchingKeyword = ''
        }
        //getvalueResults();
        filter();
    });
    $('#cboProvincial1').on("select2:select", function (e) {
        // if(!e.params.time){
        //     var productTypeElement = $("#productType-select :selected").val() 
        //     var productStatus = $("#productStatus-select :selected").val()
        //     if(productTypeElement!=="0"){
        //         setDefault();
        //         getPendingEvaluateProducts(productTypeElement)
        //     }else{
        //         setDefault(true);
        //         getPendingEvaluateProducts()
        //     }
        // }
        //resetDefault();
        $('#cboDistricts1').select2('val', ['0'])
        document.getElementById("cboDistricts1").options.length = 0;
        $('#cboDistricts1')
            .find('option')
            .remove()
            .end()
        let Text = $('#cboProvincial1 option:selected').text()
        let Id = $('#cboProvincial1 option:selected').val()
        let ids = Id.split(',')
        console.log(ids[0]);
        getDistricts(ids[0])
    });
    // $('#cboDistricts').on("select2:select", function (e) {
    //     if(!e.params.time){
    //         var productTypeElement = $("#productType-select :selected").val() 
    //         var productStatus = $("#productStatus-select :selected").val()
    //         if(productTypeElement!=="0"){
    //             setDefault();
    //             getPendingEvaluateProducts(productTypeElement)
    //         }else{
    //             setDefault();
    //             getPendingEvaluateProducts()
    //         }
    //     }
    // });
    // $('#cboWards').on("select2:select", function (e) {
    //     if(!e.params.time){
    //         var productTypeElement = $("#productType-select :selected").val() 
    //         var productStatus = $("#productStatus-select :selected").val()
    //         if(productTypeElement!=="0"){
    //             setDefault();
    //             getPendingEvaluateProducts(productTypeElement)
    //         }else{
    //             setDefault();
    //             getPendingEvaluateProducts()
    //         }
    //     }
    // });
    

});

$(window).scroll(function() {
    if ($(this).scrollTop() + 1 >= $('body').height() - $(window).height()) {
        if (working == false) {
            working = true;
            $('#btnLoadMore').trigger("click");
        }
    }
})


function setDefault(notLimit){
    if(!notLimit) {
        limit = 10;
    } 
    $(`#listProducts`).html('');
    // $('#btnLoadMore').css({ opacity: 1 });
    page = 1;
    limit = 0;
}

function getTotalProducts() {
    $.ajax({
        url: "/getPendingEvaluateProducts?total=true",
        type: "GET",
        success: function (data) {
            if(data.success) {
                let total = _.get(data, 'data.total', false)
                if (!total) {
                    // $('#total').html(total);
                    total = 0;
                    return;
                }
                total = total;
                $('#total').html(total);
            }
        }
    })
}

// Lấy thông tin tài khoản
function getAccountInfo1() {
    $.ajax({
        url: "/getAccountInfo",
        type: "GET",
        success: function (data) {
            let ret = data.data;
            if (ret) {
                if (ret.type == "Examiner" || ret.type == "HelpTeam") {
                    $('#listProducts').show();
                    $('#notAuthorizeDiv').hide();
                    getProductType();
                    getPendingEvaluateProducts();
                } else {
                    $('#listProducts').hide();
                    $('#notAuthorizeDiv').show();
                    window.location.href = '/';
                }
                if (ret.level == 1) {
                    idProvncial =  _.get(ret, "addressInfo.provinceId", '') ;
                    provncial =  _.get(ret, "addressInfo.provinceName", '');
                } else if (ret.level == 2) {
                    idProvncial = _.get(ret, "addressInfo.provinceId", '') ;
                    provncial =  _.get(ret, "addressInfo.provinceName", '');
                    idDis =   _.get(ret, "addressInfo.districtId", '');
                    Dis =  _.get(ret, "addressInfo.districtName", '');
                    idWard =  _.get(ret, "addressInfo.wardId", '');
                }
                LoadCboProvincials()
            } else {
                $('#listProducts').hide();
                $('#notAuthorizeDiv').show();
                window.location.href = '/';
                LoadCboProvincials()
            }
        }, error: function (error) {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Xuất hiện lỗi!',
            });
        }
    })
}

const getAccountInfo = () => {
    $.ajax({
        type: `GET`,
        url: `/getaccountinfo`,
        success: (data) => {
            if (data) {
                accountInfo = data;
                getPendingEvaluateProducts();
                /*
                if (data.level == 1) {
                    
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
                } else if (data.level == 3) {
                    
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
                }else{
                    document.getElementById('Status').innerHTML = `
                    <option value="districtRanked">Cấp huyện đã xếp hạng</option>
                    <option value="Submiting">Đang nộp</option>
                    <option value="Done">Hoàn thành</option>
                    <option value="Fail">Không đạt</option>
                    <option value="Preparing">Chưa nộp</option>
                    <option value="Waitting">Chờ chấm</option>
                    `
                    $('#councilSelector').css({"display":""})
                }
                */
                /*
                accountInfo = data.data;

                if (accountInfo.level == 1) {
                    idProvncial =  _.get(accountInfo, "addressInfo.provinceId", '') ;
                    provncial =  _.get(accountInfo, "addressInfo.provinceName", '');
                } else if (accountInfo.level == 2) {
                    idProvncial = _.get(accountInfo, "addressInfo.provinceId", '') ;
                    provncial =  _.get(accountInfo, "addressInfo.provinceName", '');
                    idDis =   _.get(accountInfo, "addressInfo.districtId", '');
                    Dis =  _.get(accountInfo, "addressInfo.districtName", '');
                    idWard =  _.get(accountInfo, "addressInfo.wardId", '');
                    wardName = _.get(accountInfo, "addressInfo.wardName", '');
                }
                let dynamicStatuses = [
                    {value: 'districtRanked', text:'Huyện đã xếp hạng'},
                    {value: 'provinceRanked', text:'Tỉnh đã xếp hạng'},
                    {value: 'Ranked', text:'TW đã xếp hạng'},
                    {value: 'Pause', text:'Đã dừng'}
                ]
                let additionalStatuses = [];
                switch(Number(accountInfo.level)) {
                    case 0:
                        additionalStatuses = dynamicStatuses.filter(item => item.value = 'Ranked')
                        break;
                    case 1:
                        additionalStatuses = dynamicStatuses.filter(item => item.value = !'districtRanked')
                        break;
                    case 2:
                        additionalStatuses = dynamicStatuses
                        break;
                    default: break;
                }
                additionalStatuses.forEach(status => {
                    $(`#productStatus-select`).append(`<option value=${status.value}>${status.text}</option>`);
                });
                */
                //LoadCboProvincials();
            } else {
                Swal.fire('Cảnh báo', data.message, 'warning').then(result => {
                    if (result.value) {
                        window.location.href = `/login`;
                    }
                });
            }
            getProvinces(data)
            //LoadCboProvincials()
            //LoadCboProvincialFillter()
            //getCouncils()
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
}

function getProvinces(acc){
    $.ajax({
        type: `GET`,
        url: `/provinces`,
        success: (data) => {
            $(`#cboProvincial1`)[0].innerHTML = `<option value="0">Chọn tỉnh/tp</option>`;
            data.forEach(item => {
                $(`#cboProvincial1`).append(`
                    <option value="${item.id}">${item.name}</option>
                `);
            });        
            //$('#cboProvincial').val(`${acc.address.province_id}`).trigger('change');
            //$('#cboProvincial').val(`${accountInfo.address.province_id}`);
            //getDistricts(accountInfo.address.province_id);
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    })
}

function getDistricts(provinceId){
    $.ajax({
        type: `GET`,
        url: `/getdistrictbyprovince?province_id=`+provinceId,
        success: (data) => {
            $(`#cboDistricts1`)[0].innerHTML = `<option value="0">Chọn quận/huyện</option>`;
            data.forEach(item => {
                $(`#cboDistricts1`).append(`
                    <option value="${item.id}">${item.name}</option>
                `);
            });        
            //$('#cboDistricts').val(`${accountInfo.address.district_id}`).trigger('change');
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    })
}

const getProductType = () => {
    $.ajax({
        type: `GET`,
        url: `/getProductType?product_Set=1`,
        success: (data) => {
            if (data.success) {
                $(`#productType-select`)[0].innerHTML = `<option value="0">Tất cả ngành</option>`;
                data.data.forEach(productType => {
                    $(`#productType-select`).append(`
                        <option value="${productType._id}">${productType.name}</option>
                    `);
                });
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    })
}
//hàm lấy các sản phẩm đang chờ chấm
function getPendingEvaluateProducts(typeId, keyword ) {
    // if(isFirstLoad) {
    //     swal({
    //         title: "Đang tải thông tin!",
    //         imageUrl: '/img/Curve-Loading.gif',
    //         text: "Xin vui lòng chờ trong giây lát ...",
    //         showConfirmButton: false
    //     });
    //     isFirstLoad = false;
    // }
    let url = `/getproductsevaluation?limit=${limit}&page=${page}`;
    if(isFiltered) {
        url = url.replace(/limit=\b\d+\b&page=\b\d+\b/g, '');
        url = url.replace('?', '');
    }
    
    if (typeId) {
        // url = url.split('?')[0];    
        url += `?productTypeId=${typeId}`;
        if (keyword && keyword.trim() != '') {
            url += `&keyword=${keyword}`;
        }
    } else if (keyword && keyword.trim() != '') {
        // url = url.split('?')[0];
        url += `?keyword=${keyword}`
    }
    $.ajax({
        url: url,
        type: "GET",
        success: function (ret) {
            if (ret != null) {
                if(ret.length > 0){
                    // if(isFirstLoad && ret.length < limit) {
                    //     $('#btnLoadMore').css({ opacity: 1 });
                    //     isFirstLoad = false;
                    //     return;
                    // }
                    // $('#btnLoadMore').css({ opacity: 1 });
                    // seen += ret.length;
                    // if(total - seen < limit) {
                    //     loadMoreNumber = total - seen;
                    //     if(loadMoreNumber < 0) {
                    //         loadMoreNumber = limit;
                    //     }
                    // }
                    // let result = getAdressFind()
                    // let rets = ret.data
                    // if(result.IdWard){
                    //     rets = ret.data.filter(e =>  _.get(e, "fileInfo[0].addressInfo.wardId", '') == result.IdWard);
                    // }else if(result.IdDistrict){
                    //     rets = ret.data.filter(e => _.get(e, "fileInfo[0].addressInfo.districtId", '')  == result.IdDistrict);
                    // }else if(result.IdProvincial){
                    //     rets = ret.data.filter(e => _.get(e, "fileInfo[0].addressInfo.provinceId", '')  == result.IdProvincial);
                    // }

                    // if(isFiltered) {
                    //     $(`#listProducts`).html('');
                    //     renderProducts(rets);
                    //     return;
                    // }

                    // $('#btnLoadMore').css({ 'padding': '' });
                    // $('#btnLoadMore').text(`Xem Thêm (${loadMoreNumber})`);
                    // renderProducts(rets);
                    // isFirstLoad = false;
                    drawProducts(ret);
                }else{
                    if(isFirstLoad) {
                        $('#btnLoadMore').css({ opacity: 0 });
                        $(`#listProducts`)[0].innerHTML = 'Không có dữ liệu';
                        isFirstLoad = false;
                    }
                    if(isFiltered) {
                        $('#btnLoadMore').css({ opacity: 0 });
                        $(`#listProducts`)[0].innerHTML = 'Không có dữ liệu';
                    }
                    $('#btnLoadMore').css({ opacity: 0 });
                    Swal.close();
                }
                
            } else {
                Swal.fire({
                    type: 'error',
                    title: '',
                    text: 'Đã có lỗi xảy ra!',
                });
            }
        }, error: (jqXHR, textStatus, errorThrown) => {
            Swal.fire({
                type: 'error',
                title: '',
                text: 'Đã có lỗi xảy ra!',
            });
            console.warn(errorThrown);
        }
    })
}
const getAdressFind =()=>{
    var d = {}
    if ($('#cboProvincial').select2('val') && $('#cboProvincial').select2('val') !=='' && $('#cboProvincial').select2('val') != '0') {
        d.IdProvincial =  $('#cboProvincial').select2('val')
    }
    if ($('#cboDistricts').select2('val') && $('#cboDistricts').select2('val')  !=='' && $('#cboDistricts').select2('val') != '0') {
        d.IdDistrict = $('#cboDistricts').select2('val')
    }
    if ( $('#cboWards').select2('val') && $('#cboWards').select2('val') !=='' && $('#cboWards').select2('val') != '0') {
        d.IdWard =  $('#cboWards').select2('val')
    }
    return d

}
const convertStatus = (status, productData) => {
    if (status == 'SUBMITTING') {
        return `<span class="label" style="border-radius: 10px; background-color: #fdefce"><b>ĐANG NỘP</b></span>`;
    } else if (status == 'DONE') {
        return `<span class="label label-info"  style="border-radius: 10px;"><b>HOÀN THÀNH</b></span>`
    } else if (status == 'RANKED') {
        return `<span class="label label-info"  style="border-radius: 10px;"><b>ĐÃ XẾP HẠNG</b></span>`
    } else if (status == 'FAIL') {
        return `<span class="label label-info"  style="border-radius: 10px;"><b>KHÔNG ĐẠT</b></span>`
    } else if (status == 'PREPARING') {
        return `<span class="label" style="border-radius: 10px; color: black; background-color: #cff0e1"><b>CHUẨN BỊ</b></span>`
    } else if (status == 'WAITTING') {
        if (productData && productData.evaluateInfo && productData.evaluateInfo.length > 0) {

            /// Đang chấm
            var rsFindProcessing = productData.evaluateInfo.filter(function (v, i) {
                return (v.active === 1 && v.status == "PROCESSING");
            });
            if (rsFindProcessing && rsFindProcessing.length > 0) {
                return `<span class="label" style="border-radius: 10px; color: black; background-color: #3498DB"><b>ĐANG CHẤM</b></span>`;
            } else {
                /// Đã chấm xong chờ duyệt
                var rsFindDone = productData.evaluateInfo.filter(function (v, i) {
                    return (v.active === 1 && v.status == "DONE");
                });
                if (rsFindDone && rsFindDone.length > 0) {
                    return `<span class="label" style="border-radius: 10px; color: black; background-color: #D68910"><b>CHỜ DUYỆT</b></span>`;
                } else {
                    /// Chưa chấm tiêu chí nào
                    return `<span class="label" style="border-radius: 10px; color: black; background-color: #F1C40F"><b>CHỜ CHẤM</b></span>`;
                }
            }
        } else {
            /// Chưa chấm tiêu chí nào
            return `<span class="label" style="border-radius: 10px; color: black; background-color: #F1C40F"><b>CHỜ CHẤM</b></span>`;
        }
    } else if (status == 'DISTRICTRANKED') {
        return `<span class="label label-info" style="border-radius: 10px;"><b>HUYỆN ĐÃ XẾP HẠNG</b></span>`
    } else if (status == 'PROVINCERANKED') {
        return `<span class="label label-info"  style="border-radius: 10px;"><b>TỈNH ĐÃ XẾP HẠNG</b></span>`
    }
}

const drawProducts = (data) => {
    let teamplate = ``
    data.forEach(productData => {

        if (productData.council_type === 'secretary') {
            teamplate = ` <div style="position: absolute;right: 16px;top: 20px;" >
            <a href="##" onclick="onmouseovers(\'${productData.id}\')">
            </a>
            <div style="background-color: rgb(3, 146, 82);
            text-align: center; text-align: center;display:none" id="${productData.id}">
            <a href="##" onclick="outclick(\'${productData.id}\')" style="color: white;font-weight: 600;">x</a>
            </div>
                <div class="dropdown">
                        <div id="accountDropdown" style="" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <a href="javascript:void(0)"><img id="accountAvartar" src="images/grey.png" srcset="images/grey2x.png 2x,images/grey3x.png 3x" class="Grey"></a>
                            </div>

                            <div id="addcoucil" class="dropdown-menu animated flipInY " style="    padding: 0;text-align: center;  background-color: rgb(3, 146, 82);top: 20px; position: absolute; transform: translate3d(-110px, 24px, 0px); will-change: transform;" x-placement="bottom-start">
                            <div style="padding: 5px;border-bottom: 1px solid white;">
                                <a href="/editproduct?created_userid=${productData.user_id}&product_id=${productData.id}&entity_id=${productData.entity_id}"   style="color: white"><div>Sửa sản phẩm</div></a>
                            </div>
                            <div style="padding: 5px;">
                                <a href="/evaluatefileresult?product_id=${productData.id}&council_id=${productData.council_id}"  data-target=".modal" class="dropdown-item-tool" style="color: white"><div>Xem điểm</div></a>
                            </div>
                        </div>
                </div>
            </div>`
        }
        $(`#listProducts`).append(`
            <div class="col-sm-6">
                ${teamplate}
                <a style="color:black" href="/evaluationset?council_id=${productData.council_id}&product_id=${productData.id}&product_type=${productData.product_type}&created_userid=${productData.user_id}">
                <div class='row container bg-white mt-3' style="padding: 15px; margin: 0px; border-radius: 12px">
                    <div class="col-4 text-center">
                        <img src='${productData.image ? productData.image : "/images/logoocop.png"}' class="img-circle" style="width: 50px; height: 50px" alt="ảnh">
                        <p>
                        ${convertStatus(productData.status, productData)}</p>
                        </div>
                    <div class="col-8">
                        <p style="margin-bottom: 0px; font-weight: bold; font-stretch: normal; 
                        font-style: normal; line-height: 1.29; letter-spacing: normal;">${productData.name.toUpperCase()}</p>
                        <p style="color: #6d7182; margin-bottom: 0.5rem">${productData.product_type_name}</p>
                        <p style="color: #6d7182; margin-bottom: 0.5rem">${productData.entity_name}</p>
                        <p style="color: #6d7182; margin-bottom: 0.5rem">${productData.council_name}</p>

                        <p style="margin-bottom: 0px; color: black; font-weight: normal">Ngày đăng ký: ${new Date(productData.created_at).toLocaleDateString('en-GB', { timeZone: 'UTC' })}</p>
                        <p style="margin-bottom: 0px; color: black; font-weight: normal">Thời hạn chấm: ${new Date(productData.expired).toLocaleDateString('en-GB', { timeZone: 'UTC' })}</p>

                    </div>
                
                </div>
                </a>
            </div>
        `);
    });
}

const renderProducts = (data) => {
    if (data.length > 0) {

        var findObject = [];
        ///lọc lại theo trạng thái trước khi render
        //if( data.evaluateInfo && data.evaluateInfo.length>0){
        if (currentStatus === "PROCESSING") {
            var findObjectTemp = data.filter(function (v, i) {
                return (v.evaluateInfo != undefined && v.evaluateInfo.length > 0);
            });
            if (findObjectTemp && findObjectTemp.length > 0) {
                findObjectTemp.forEach(temp => {
                    var tempFind = temp.evaluateInfo.filter(function (v, i) {
                        return (v.active === 1 && v.status == "PROCESSING");
                    });
                    if (tempFind && tempFind.length > 0) {
                        findObject.push(temp);
                    }
                });
            }
        } else if (currentStatus === "SENDING") {
            var findObjectTemp = data.filter(function (v, i) {
                return (v.evaluateInfo != undefined && v.evaluateInfo.length > 0);
            });
            if (findObjectTemp && findObjectTemp.length > 0) {
                findObjectTemp.forEach(temp => {
                    var tempFind = temp.evaluateInfo.filter(function (v, i) {
                        return (v.active === 1 && v.status == "DONE");
                    });
                    if (tempFind && tempFind.length > 0) {
                        findObject.push(temp);
                    }
                });
            }
        } else if (currentStatus === "DONE") {
            findObject = data.filter(function (v, i) {
                return (v.fileInfo[0].status == "districtRanked" || v.fileInfo[0].status == "provinceRanked" || v.fileInfo[0].status == "Ranked");
            });
        } else if (currentStatus === "WAITING") {
            findObject = data.filter(function (v, i) {
                return (v.evaluateInfo.length === 0);
            });
        } else {
            findObject = data;
        }
    
        if (findObject.length > 0) {
            if(isFiltered) {
                $('#btnLoadMore').css({ opacity: 0 })
                findObject.forEach(productData => {
                    let total = 0
                    if(productData.evaluateInfo.length>0){
                        productData.evaluateInfo.forEach((item)=>{
                            total = total + item.totalPoint
                        })
                    }
                    console.log(productData,111);
                    $(`#listProducts`).append(`
                        <div class="col-sm-6">
                            <a style="color:black" href="/evaluationSet?productInfoId=${productData._id}&productSetId=${productData.fileInfo[0].typeId}&createdUserId=${productData.entitiesInfo[0].createdMemberId}">
                            <div class='row container bg-white mt-3' style="padding: 15px; margin: 0px; border-radius: 12px">
                                <div class="col-4 text-center">
                                    <img src='${productData.fileInfo[0].imgUrl[0] ? productData.fileInfo[0].imgUrl[0] : "/img/logoocop.png"}' class="img-circle" style="width: 50px; height: 50px" alt="ảnh">
                                    <p>
                                    ${convertStatus(productData.fileInfo[0].status, productData)}</p>
                                    </div>
                                <div class="col-8">
                                    <p style="margin-bottom: 0px; font-weight: bold; font-stretch: normal; 
                                    font-style: normal; line-height: 1.29; letter-spacing: normal;">${productData.fileInfo[0].name.toUpperCase()}</p>
                                    <p style="color: #6d7182; margin-bottom: 0.5rem">${productData.entitiesInfo[0].name}</p>
                                    <p style="margin-bottom: 0px; color: black; font-weight: normal">Ngày đăng ký: ${new Date(productData.fileInfo[0].createdAt).toLocaleDateString('en-GB', { timeZone: 'UTC' })}</p>
                                    <p style="margin-bottom: 0px; color: black; font-weight: normal">Thời hạn chấm: ${new Date(productData.deadline).toLocaleDateString('en-GB', { timeZone: 'UTC' })}</p>
                                </div>
                            
                            </div>
                            </a>
                        </div>
                    `);
                });
                // isFiltered = false;
            } else {
              
                findObject.forEach(productData => {
                    let total = 0
                    if(productData.evaluateInfo.length>0){
                        productData.evaluateInfo.forEach((item)=>{
                            total = total + item.totalPoint
                        })
                    }
                    console.log(productData);
                    $(`#listProducts`).append(`
                        <div class="col-sm-6">
                            <a style="color:black" href="/evaluationSet?productInfoId=${productData._id}&productSetId=${productData.fileInfo[0].typeId}&createdUserId=${productData.entitiesInfo[0].createdMemberId}">
                            <div class='row container bg-white mt-3' style="padding: 15px; margin: 0px; border-radius: 12px">
                                <div class="col-4 text-center">
                                    <img src='${productData.fileInfo[0].imgUrl[0] ? productData.fileInfo[0].imgUrl[0] : "/img/logoocop.png"}' class="img-circle" style="width: 50px; height: 50px" alt="ảnh">
                                    <p>
                                    ${convertStatus(productData.fileInfo[0].status, productData)}</p>
                                    </div>
                                <div class="col-8">
                                    <p style="margin-bottom: 0px; font-weight: bold; font-stretch: normal; 
                                    font-style: normal; line-height: 1.29; letter-spacing: normal;">${productData.fileInfo[0].name.toUpperCase()}</p>
                                    <p style="color: #6d7182; margin-bottom: 0.5rem">${productData.entitiesInfo[0].name}</p>
                                    <p style="margin-bottom: 0px; color: black; font-weight: normal">Ngày đăng ký: ${new Date(productData.fileInfo[0].createdAt).toLocaleDateString('en-GB', { timeZone: 'UTC' })}</p>
                                    <p style="margin-bottom: 0px; color: black; font-weight: normal">Thời hạn chấm: ${new Date(productData.deadline).toLocaleDateString('en-GB', { timeZone: 'UTC' })}</p>
                                </div>
                            
                            </div>
                            </a>
                        </div>
                    `);
                });
                if(findObject.length < limit) {
                    $("#btnLoadMore").css({ opacity: 0 });
                } else {
                    $("#btnLoadMore").css({ opacity: 1 });
                }
                page++;
                working = false;
                $('#btnLoadMore').removeClass('padding');
                $('#btnLoadMore').css({ 'padding-left': '18px' })
            }
        } else {
            $(`#listProducts`)[0].innerHTML = `<div class='col-12 text-center'>Không có hồ sơ nào</div>`;
            $('#btnLoadMore').css({ opacity: 0 });
        }
    } else {
        $(`#listProducts`)[0].innerHTML = `<div class='col-12 text-center'>Không có hồ sơ nào</div>`;
        $('#btnLoadMore').css({ opacity: 0 });
    }
    Swal.close();
}

var objProvincials;
var objDistricts;
var objWards;
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
                var o = new Option(objProvincials[0].Name, `${objProvincials[0]._id}`);
                $("#cboProvincial").append(o);
                LoadCboDistricts(objProvincials[0]._id, objProvincials[0].Name);
            } else {
                var b = new Option("Chọn", "0")
                $("#cboProvincial").append(b);
                for (var i = 1, len = objProvincials.length + 1; i < len; ++i) {
                    var o = new Option(objProvincials[i - 1].Name, `${objProvincials[i - 1]._id}`);
                    $("#cboProvincial").append(o);
                }
            }
            if (data.length == 1) {
                $('#cboProvincial').select2('val', [data[0]._id]);
            }
            nof_loadAdress('pro', 0);
            if (idProvncial || idProvncial !== "") {
                console.log(idProvncial)
                $('#cboProvincial').val(`${idProvncial}`).trigger('change');
                // $('#cboProvincial').trigger('change.select2')
                var data = {
                    "id": idProvncial,
                    "text": provncial,
                };
                $('#cboProvincial').trigger({
                    type: 'select2:select',
                    params: {
                        data: data,
                        time:1
                    }
                });
                $("#cboProvincial").prop("disabled", true);
            }
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
            if (idDis || Dis !== "") {
                $('#cboDistricts').val(`${idDis}`).trigger('change');
                // $('#cboDistricts').trigger('change.select2')
                var data = {
                    "id": idDis,
                    "text": Dis,
                };
                $('#cboDistricts').trigger({
                    type: 'select2:select',
                    params: {
                        data: data,
                        time:1
                    }
                });
                $("#cboDistricts").prop("disabled", true);
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
            if (idDis || Dis !== "") {
                $('#cboWards').val(`${idDis}`).trigger('change');
                // $('#cboWards').trigger('change.select2')
                var data = {
                    "id": idDis,
                    "text": Dis,
                };
                $('#cboWards').trigger({
                    type: 'select2:select',
                    params: {
                        data: data,
                        time:1
                    }
                });
                $("#cboWards").prop("disabled", true);
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
    console.log(e)
    isFiltered = idProvncial? false : true;
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
    if(!firstLoadWard) {
        isFiltered = true;
    }
    $('#cboBranch').select2('val', ['0'])
    $('#cboBranch').select2('data', null);
    $("#cboBranch").val(null).trigger("change");
    let Text = $('#cboWards option:selected').text()
    let Id = $('#cboWards option:selected').val()
    firstLoadWard = false;
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

function filter () {
    let prod = $('#keyword').val(),
        status = $('#productStatus-select').val(),
        productType = $('#productType-select').val(),
        province = $('#cboProvincial1').val(),
        district = $('#cboDistricts1').val()
    $('#btnLoadMore').css({ opacity: 0 });
    //let data = getQuery();
    let filterData = genFilterData(prod, status,productType, province, district);
    isFiltered = true;

    let url = `/filterevaluation`;
    // if (approveFiles) {
    //     url += `&status=Done`;
    // }

    $.ajax({
        url: url,
        type: "GET",
        data: filterData,
        success: function (ret) {
            if (ret.length > 0) {
                setDefault();
                drawProducts(ret)
            } else {
                document.getElementById("divListProduct").innerHTML = `Không có dữ liệu`;
                $('#btnLoadMore').css({ opacity: 0 });
            }
        }
    })
}

function genFilterData(prod,status,productType, province, district){
    let data = {
    };
    if (prod != ''){
        data.product = prod;
    }

    if (status != ''){
        data.status = status;
    }
    if (productType != ''){
        data.productType = productType;
    }
    if (province != ''){
        data.province = province;
    }
    if (district != ''){
        data.district = district;
    }

    return data;
}
