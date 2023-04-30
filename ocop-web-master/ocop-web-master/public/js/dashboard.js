let requirementsArray = [];
$(() => {
    /*
    getGeneralInfo();
    $.ajax({
        type: `GET`,
        url: `/Group4ProductType`,
        success: (data) => {
            $.ajax({
                type: `GET`,
                url: `/productType/all`,
                success: (productType) => {

                    renderTotalChart(data, productType);
                },
                error: (jqXHR, textStatus, errorThrown) => {
                    console.warn(errorThrown);
                }
            });
            ///renderTotalChart(data);
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
    $.ajax({
        type: `GET`,
        url: `/GroupforProvinciallength`,
        success: (result) => {
            if (result) {
                $.ajax({
                    type: `GET`,
                    url: `/GroupforProvincial`,
                    success: (data) => {
                        data = data.map(el => {
                            let numberdone = 0
                            result.forEach((item) => {
                                if (item.idAdress == el.idAdress && item.idAdress) {
                                    // numberdone = numberdone + 1
                                    numberdone = item.Total
                                    el.done = item.Total
                                }
                            })
                            let total = el.Total * 18;
                            let Namepro = el.Name
                            if (!el.Name) {
                                Namepro = el.name
                            }
                            let Name = el.name ? el.name : Namepro;
                            return {
                                Name: Name,
                                Number: el.Total,
                                width: ((numberdone / el.Total) * 100).toFixed(2) !== "NaN" ? ((numberdone / el.Total) * 100).toFixed(2) : 0,
                                done: el.done ? el.done : 0
                            }
                        })
                        
                        drawcharProBar(data);
                    },
                    error: (jqXHR, textStatus, errorThrown) => {
                        console.warn(errorThrown);
                    }
                });
            }
        }, error: function (err) {
            console.log(err)
        }
    })

    $.ajax({
        type: `GET`,
        url: `/Group4TypeAdress`,
        success: (data) => {
            renderOpcopDonutChart(data);
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
    $.ajax({
        type: `GET`,
        url: `/getAllRequiment`,
        success: (data) => {
            requirementsArray = data;
            $.ajax({
                type: `GET`,
                url: `/Group4Ques`,
                success: (result) => {
                    renderSupportChart(result);
                },
                error: (jqXHR, textStatus, errorThrown) => {
                    console.warn(errorThrown);
                }
            });
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
    */
    // Lấy data tiền lệ từ file excel
    // $("#fileUploader").change(function (evt) {
    //     var selectedFile = evt.target.files[0];
    //     var reader = new FileReader();
    //     reader.onload = function (event) {
    //         var data = event.target.result;
    //         var workbook = XLSX.read(data, {
    //             type: 'binary'
    //         });
    //         let colValues = [];

    //         function checkCols(workbook)  //your workbook variable
    //         {
    //             var first_sheet_name = workbook.SheetNames[0];
    //             var worksheet = workbook.Sheets[first_sheet_name];
    //             var cells = Object.keys(worksheet);
    //             for (var i = 0; i < Object.keys(cells).length; i++) {
    //                 if (cells[i].indexOf('1') > -1) {
    //                     colValues.push(worksheet[cells[i]].v); //Contails all column names
    //                 }
    //             }
    //         }
    //         checkCols(workbook);
    //         // Kiểm tra định dạng của file excel, nếu không đúng thì cảnh báo
    //         let insertData = [];
    //         let newObj = {};
    //         let sectionIndex = 0;
    //         let sectionName;
    //         let GroupSection, currentLvl2Sec, currentCase, currentType, pushingCase, Note;
    //         workbook.SheetNames.forEach(function (sheetName) {
    //             let XL_row_object = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
    //             XL_row_object.forEach((obj, index) => {
    //                 XL_row_object[index].Like = 0;
    //                 let splitedArray = obj.Keywords ? obj.Keywords.replace(/[""]/gi, '').split(',') : [];
    //                 splitedArray.forEach((text, index) => splitedArray[index] = text.trim());
    //                 XL_row_object[index].Keywords = splitedArray;
    //                 XL_row_object[index].AuthorPsid = obj.AuthorPsid.replace(/[""]/gi, '')
    //             })
    //             insertData = XL_row_object;
    //         });
    //         if (Object.entries(newObj).length > 0) {
    //             insertData.push(newObj);
    //             newObj = {};
    //         }
    //         $.ajax({
    //             type: `POST`,
    //             url: `/insertPrecedentPostsFromExcel`,
    //             data: {
    //                 // questions: JSON.stringify(insertData)
    //                 precedentPosts: JSON.stringify(insertData)
    //             },
    //             success: (result) => {
    //                 console.log(result);
    //             },
    //             error: (jqXHR, textStatus, errorThrown) => {
    //                 console.warn(errorThrown);
    //             }
    //         })
    //         console.log(insertData)
    //     };
    //     reader.onerror = function (event) {
    //         console.error("File could not be read! Code " + event.target.error.code);
    //     };
    //     reader.readAsBinaryString(selectedFile);
    // });
});

const getGeneralInfo = () => {
    // Group4Status 
    $.ajax({
        type: `GET`,
        url: `/getdatastatistical`,
        success: (result) => {
            if (result.success) {
                if(result.data.length>0){
                    if (result.data[0].totalProduct.length > 0) {
                        $(`#fileNumber`)[0].innerHTML = result.data[0].totalProduct[0].total
                    }
                    if (result.data[0].totalEtiti.length > 0) {
                        $(`#ocopNumber`)[0].innerHTML = result.data[0].totalEtiti[0].total
                    }
                    if (result.data[0].totalEvaluetionresult.length > 0) {
                        $(`#markedNumber`)[0].innerHTML = result.data[0].totalEvaluetionresult[0].total
                    }
                    if (result.data[0].totalProductdone.length > 0) {
                        $(`#completedNumber`)[0].innerHTML = result.data[0].totalProductdone[0].total
                    }
                }
                
            }
            // let fileNumber = 0;
            // let ocopNumber = 0;
            // let markedNumber = 0;
            // let completedNumber = 0;
            // result.forEach(item => {
            //     if (typeof (item) == 'number') return;
            //     if (typeof (item._id.Status) != 'string') return;
            //     if (item._id.Status != 'Preparing') {
            //         fileNumber += item.Total
            //     }
            //     if (item._id.Status == 'Ranked' || item._id.Status == 'Fail') {
            //         markedNumber += item.Total
            //     }
            //     if (item._id.Status == 'Done') {
            //         completedNumber += item.Total
            //     }
            //     ocopNumber += item.Total
            // });
            // $(`#fileNumber`)[0].innerHTML = ` ${fileNumber}`;
            // $(`#ocopNumber`)[0].innerHTML = ` ${result[result.length - 1]}`;
            // $(`#markedNumber`)[0].innerHTML = ` ${markedNumber}`;
            // $(`#completedNumber`)[0].innerHTML = ` ${completedNumber}`;
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
}

const renderSupportChart = (data) => {
    let valuesArray = [];
    let ticksArray = [];
    let startChartPosition = 3;
    let startLabelPosition = 5;
    for (let i = 0; i < 18; i++) {
        let colorCode = i >= 10 ? i : `0${i}`;
        ticksArray.push([startLabelPosition + i * 10, `ND ${i + 1}`]);
        // valuesArray.push([startChartPosition + i * 10, 0]);
        valuesArray.push({
            // data: [[startChartPosition + i * 10, 0]],
            data: [[startChartPosition + i * 10,0]],//Fake values
            color: `#0${colorCode}efb`,
            //  yaxis: 2
        })
    }
    data.forEach(item => {
            let indexInRequirement = requirementsArray.findIndex(require => require._id == item._id);
            if (indexInRequirement != -1) {
                // valuesArray[indexInRequirement][1] = item.Total
                valuesArray[indexInRequirement].data[0][1] = item.Total
            }
    })
    
    var barOptions = {
        series: {
            bars: {
                show: true
                , barWidth: 4
            }
        },
        xaxis: {
            ticks: ticksArray
        },
        yaxis: {
            tickDecimals: 0,
            beginAtZero: true,
            min:0,
        }
        , legend: {
            show: false
        }
        , grid: {
            color: "#AFAFAF"
            , hoverable: true
            , borderWidth: 0
            , backgroundColor: '#FFF'
        }
        , tooltip: true
        , tooltipOpts: {
            content: "%y",
            defaultTheme: false
        }
    };
    // var barData = {
    //     label: "bar"
    //     // , color: "#009efb"
    //     , data: valuesArray
    // };
    // $.plot($("#flot-bar-chart"), [barData], barOptions);
    $.plot($("#flot-bar-chart"), valuesArray, barOptions);
}

const renderOpcopDonutChart = (data) => {
    let total = 0;
    let Enterprise = 0;
    let Householdbusiness = 0;
    let CooperativeGroup = 0;
    let Cooperative = 0;
    data.filter(obj => obj._id.Status != null).forEach(item => {
        if (item._id.Status == 'Doanh nghiệp') {
            Enterprise = 100 * item.Total;
        }
        if (item._id.Status == 'Hộ kinh doanh cá thể') {
            Householdbusiness = 100 * item.Total;
        }
        if (item._id.Status == 'Tổ hợp tác') {
            CooperativeGroup = 100 * item.Total;
        }
        if (item._id.Status == 'Hợp tác xã') {
            Cooperative = 100 * item.Total;
        }
        total += item.Total;
    });
    let donutChart = Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Doanh nghiệp",
            value: (Enterprise / total).toFixed(2),
        }, {
            label: "Hợp tác xã",
            value: (Cooperative / total).toFixed(2)
        }, {
            label: "Tổ hợp tác",
            value: (CooperativeGroup / total).toFixed(2)
        }, {
            label: "Hộ kinh doanh cá thể",
            value: (Householdbusiness / total).toFixed(2)
        }],
        formatter: function (value) { return (value) + '%'; },
        resize: true,
        colors: ['#009efb', '#55ce63', '#2f3d4a', '#ffbc34']
    });
}

const renderTotalChart = (data, productType) => {
    let typeArray = [];
    let textArray = [];
    let valuesArray = [];
    let labels = [];
    let count = 0;
    productType.data.forEach(item => {
        ///count=count+1;
        typeArray.push(item._id);
        textArray.push(item.name);
        valuesArray.push(0);
        labels.push("Ngành " + (++count));
    });
    data.forEach(item => {
        let valueArrayIndex = typeArray.findIndex(type => type == item._id.Status);
        if (valueArrayIndex != -1) {
            valuesArray[valueArrayIndex] = Number(item.Total);
        }
    });
    new Chart(document.getElementById("chart2"),
        {
            "type": "bar",
            "data": {
                "labels": labels,
                "datasets": [{
                    "label": "",
                    "data": valuesArray,
                    "fill": false,
                    // "backgroundColor": ["rgba(255, 159, 64, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 159, 64, 0.2)"],
                    // "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)"],
                    "borderWidth": 1
                }]
            },
            "options": {
                "legend": {
                    display: false
                },
                "scales": { "yAxes": [{ "ticks": { "beginAtZero": true } }] },
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            let textIndex = data.labels.findIndex(label => label == tooltipItem.xLabel);
                            let convertText = textArray[textIndex];
                            return convertText + `: ${tooltipItem.yLabel} hồ sơ`;
                        }
                    }
                }
            },
        });
}

function drawcharProBar(ret) {
    // console.log(ret,374)
    ret.forEach((data) => {
        let teamplate = false
        if (data.done !== 0) {
            teamplate = `<small>Hồ sơ hoàn thành: ${data.done}/${data.Number} = ${((Number(data.done)/Number(data.Number)) * 100).toFixed(2)}%</small>`
        }
        document.getElementById('li-char').innerHTML += `<li>
        <h2>${data.Number}</h2> 
        <small>${data.Name}</small></br>
        ${teamplate ? teamplate : ''}
        <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50"
                aria-valuemin="0" aria-valuemax="100" style="width:${Number(data.width)}%; height: 6px;">
                <span class="sr-only">${data.width}% Complete</span></div>
            </div>
        </li>`
        let o = `
        <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
        <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__scrollbar-y-rail" style="top: 0px; height: 280px; right: 0px;">
            <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 135px;">
            </div>
        </div>
        `
        $('#li-char').append(o)
    })
}