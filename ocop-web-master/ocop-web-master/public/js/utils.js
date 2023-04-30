/// sort object in array
function dynamicSort(property) {
    var sortOrder = 1;
    if(property[0] === "-") {
        sortOrder = -1;
        property = property.substr(1);
    }
    return function (a,b) {
        /* next line works with strings and numbers, 
         * and you may want to customize it to your needs
         */
        var result = (a[property] < b[property]) ? -1 : (a[property] > b[property]) ? 1 : 0;
        return result * sortOrder;
    }
}
// convert status product
function convertStatusProductInfo(status) {
    if (status == 'Submiting') {
        return `<span class="label m-r-10" style="border-radius: 10px; background-color: #fdefce;color:black"><b>ĐANG NỘP</b></span>`;
    } else if (status == 'Done') {
        return `<span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cce9fc;color:black"><b>HOÀN THÀNH</b></span>`
    } else if (status == 'Ranked') {
        return `<span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;"><b>ĐÃ XẾP HẠNG</b></span>`
    } else if (status == 'Fail') {
        return `<span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #ffd0d0;" ><b>KHÔNG ĐẠT</b></span>`
    } else if (status == 'Preparing') {
        return `<span class="label m-r-10 Hon-thnh " style="border-radius: 10px; color: white; background-color: #818182"><b>CHƯA NỘP</b></span>`
    } else if (status == 'Waitting') {
        return `<span class="label m-r-10 Hon-thnh " style="border-radius: 10px; color: black; background-color: #cff0e1"><b>CHỜ CHẤM</b></span>`
    } else if (status == 'districtRanked') {
        return `<span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1;"><b>HUYỆN ĐÃ XẾP HẠNG</b></span>`
    } else if (status == 'provinceRanked') {
        return `<span class="label label-info m-r-10 Hon-thnh" style="border-radius: 10px;background-color: #cff0e1; width: 100%;"><b>TỈNH ĐÃ XẾP HẠNG</b></span>`
    }
}
