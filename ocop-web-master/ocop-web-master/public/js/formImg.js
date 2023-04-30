let img = ['.jpg', '.gif', '.png', '.PNG', '.JPG', '.GIF', '.jfif', '.jpeg', '.JPEG']
let doc = ['.docx', '.DOCX', '.doc', '.DOC']
let excel = ['.xls', '.XLS', '.xlsx', 'XLSX']
let pdf = ['.pdf', '.PDF']
let ppt = ['.ppt', '.pptx', '.pps', '.ppsx', '.PPT', '.PPTX', '.PPS', 'PPSX']
const drawimg = (iddraw, idelement, srcImg) => {
    let tepplate
    if (hasExtension(srcImg, img)) {
        tepplate = `<img src="${srcImg}" style="width: 100%;padding: 11px;border-radius: 17%;height: 139px;object-fit: cover;cursor: zoom-in" onclick="clickImg(\'${srcImg}\')">`
    } else if (hasExtension(srcImg, doc)) {
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="img/word.jpg" style="width: 100%;padding: 11px;border-radius: 17%;height: 139px;"></a> `
    } else if (hasExtension(srcImg, excel)) {
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="img/excel.png" style="width: 100%;padding: 11px;border-radius: 17%;height: 139px;"></a> `
    } else if (hasExtension(srcImg, pdf)) {
        tepplate = ` <a target="_blank" href="${srcImg}"><img src="img/pdf.jpg" style="width: 100%;padding: 11px;border-radius: 17%;height: 139px;"></a> `
    } else if (hasExtension(srcImg, ppt)) {
        tepplate = ` <a target="_blank" href="https://view.officeapps.live.com/op/view.aspx?src=${srcImg}"><img src="img/ppt.jpg"  width="100px"  height= "100px" style="object-fit: cover;cursor: zoom-in;border-radius: 19px;"></a> `
    }
    let html = `<div style="width: 150px;" >
                 ${tepplate}
                <div style="text-align: center;">
                    <a href="##" onclick="deleteImgForm(\'${srcImg}\',\'${idelement}\')" class="deleteImgQuote">Xóa</a>
                </div>
            </div>
           
            `
    $(`#imgdropzone${iddraw}`).append(html)
}

const deleteImgForm = (name,id)=>{
    $.ajax({
        type: `GET`,
        url: `/getImgsElements?formNumber=${formNumber}&templateId=${id}&productsInfoId=${productId}`,
        success: (data) => {
            if (data.success) {
                let arrayDele=[]
                JSON.parse(data.data[0].value).forEach(image => {
                    arrayDele.push(image);
                })
                 for (let i = 0; i < arrayDele.length; i++) {
                    if (arrayDele[i] == name) {
                        console.log(i)
                        arrayDele.splice(i, 1);
                    }
                }
                let uploadObj = {
                    productsInfoId: productId,
                    templateId: id,
                    form: formNumber,
                    isMore: false,
                    value: JSON.stringify(arrayDele),
                    type: 'file',
                }
                pushDataToServer(id, uploadObj);
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
   
}
const getImgsElements = (formNumber,idTeamplate,productId,ImgsArray)=>{
    document.getElementById(`imgdropzone${idTeamplate}`).innerHTML=``
    $.ajax({
        type: `GET`,
        url: `/getImgsElements?formNumber=${formNumber}&templateId=${idTeamplate}&productsInfoId=${productId}`,
        success: (data) => {
            console.log(data,66)
            if (data.success) {
                if (data.data.length > 0) {
                document.getElementById(`imgdropzone${idTeamplate}`).innerHTML=``   
                JSON.parse(data.data[0].value).forEach(image => {
                    let mockFile = {
                        name: `${image.split(`https://kyc-nosa-file.s3.ap-southeast-1.amazonaws.com/Ocop/`)[1]}`,
                        size: 12345,
                        type: 'image/jpeg'
                    };
                    drawimg(`${idTeamplate}`,`${idTeamplate}`,image)
                })
                }
                
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    });
}
const clickImg = (src)=>{
    var modal;
    function removeModal(){ modal.remove(); $('body').off('keyup.modal-close'); }
    modal = $('<div>').css({
        background: `RGBA(0,0,0,.5)`,
        backgroundSize: 'contain',
        width:'100%', height:'100%',
        position:'fixed',
        zIndex:'10000',
        top:'0', left:'0',
        'text-align':'center',
        overflow: 'scroll',
      
    });
    var img=$('<img>').css({
        // background: `RGBA(0,0,0,.5) url('${src}') no-repeat center`,
        backgroundSize: 'contain',
        width:'80%',
        height:'auto',
        'max-width':'85%', 
        position:'relative',
        zIndex:'10001',
        left: '0',
        right: '0',
        bottom: '0',
        top: '10px',
        cursor: 'zoom-out',
        margin: 'auto',
        'margin-bottom': '90px',
    });
    // var img=$('<img>').css({
    //     // background: `RGBA(0,0,0,.5) url('${src}') no-repeat center`,
    //     backgroundSize: 'contain',
    //     width:'100%', //  height:'100%',
    //     zIndex:'10001',
    //     position: 'absolute',
    //     margin: 'auto',
    //     top: '0',
    //     left: '0',
    //     right: '0',
    //     bottom: '0',
    //     cursor: 'zoom-out',
    // });
    img[0].src=src;
    var btClose= $('<button data-toggle="tooltip" title="Đóng" data-placement="left" data-delay="{ show: 0, hide: 0}">').css({
        'display': 'inline-block',
        'position': 'absolute',
        'top': '10px',
        'right': '10px',
        'text-align': 'center',
         zIndex:'10001',
    });
    var btnFlip = $('<button data-toggle="tooltip" data-placement="left" title="Xoay ảnh">').css({
        'display': 'inline-block',
        'position': 'absolute',
        'top': '60px',
        'right': '10px',
        'text-align': 'center',
         zIndex:'10001',
    });

    // var btnDownloadImg = $('<a>').css({

    //     'display': 'inline-block',
    //     'position': 'absolute',
    //     'top': '120px',
    //     'right': '10px',
    //     'text-align': 'center',
    //      zIndex:'10001',
    // });

    btClose.html('<i class="fa fa-times"></i>');
    btClose
    //btnDownloadImg.html(`<i class="fas fa-download"></i>`);
    btnFlip.html('<i class="fas fa-redo"></i>');

 
    btClose[0].className ="btn btn-circle btn-outline-success";
    ///btnDownloadImg[0].className ="btn btn-circle btn-outline-success";
    btnFlip[0].className ="btn btn-circle btn-outline-success";

    btClose.click(function(){
         removeModal();
     });
    var current_rotation = 0;
    btnFlip.click(function(){

        current_rotation += 90;
        //scaleY(-1);
        img[0].style.transform = 'rotate(' + current_rotation + 'deg)';
       
    });
    // btnDownloadImg.click(function(ev){
    //     // $.get(src).then(function(data) {
    //     //     var blob = new Blob([data], { type: 'audio/wav' });
    //     //     saveAs(`'`+src+`'`, `'`+src.substring(src.lastIndexOf('/')+1)+`'`);
    //     //   });
    //     btnDownloadImg[0].href =src;
    //     btnDownloadImg[0].download = src.substring(src.lastIndexOf('/')+1);
    //     btnDownloadImg[0]
       
    // });
  
    img.click(function(){
        removeModal();
    });
    modal.append(img);
    modal.append(btClose);
    // modal.append(btnDownloadImg);
    modal.append(btnFlip);
    
    modal.appendTo('body');
    //handling ESC
    $('body').on('keyup.modal-close', function(e){
      if(e.key==='Escape'){ removeModal(); } 
    });
}

const returnId = (name)=>{
    return  new Date().getTime()+'_'+getRndInteger(100000,999999)+name.replace(/[&'"\s]/g, '')
}
const getRndInteger = (min, max) => {
   return Math.floor(Math.random() * (max - min + 1)) + min;
};

function hasExtension(fileName, exts) {
    return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
}