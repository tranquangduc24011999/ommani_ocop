var nameEntity;
var entityId;
function search(){
    var keyword = $(`#search`).val().trim()
    $.ajax({
        url: "searchmemberentity?keyword=" + keyword,
        type: "GET",
        success: function (ret) {
            if (ret.length > 0) {
                drawMember(ret)
            }
          
        }
    })
}

function drawMember(data) {
    document.getElementById('listmembers').innerHTML = ``
    let i = 0
    data.forEach((e) => {
        i++
        document.getElementById('listmembers').innerHTML += `
        <div class="col-md-12 row " style="margin-bottom: 36px;">
            <div class="col-11" style="padding-right: 0;    display: flex;">
            <div style=" margin-right: 14px;">
            <img src="${e.avatar ? e.avatar : 'images/noavatar.png'}" class="imgava">
            </div>
            <div style="  overflow: auto;">
            <span class="titleName">${e.name}</span><br>
            <span class="titleNamechirden">${e.province ? 'Đơn vị ' + e.province : ''} </span></br>
            </div>
            </div>
            <div class="col-1">
                <div class="rounds">
                    <input type="checkbox" onclick="clickli('${e.id}','${e.name}')" class="change-selectorMember2" id="checkbox-${e.id}" value="${e.id}" name="checkbox-group">
                    <label for="checkbox-${e.id}" name="checkbox-group"></label>
                </div>
            </div>
        </div>
        `
        if (i == 1) {
            $(`#checkbox-${e.id}`).attr("checked", true);
            nameEntity = e.name
            clickli(e.id, e.name)
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

function clickli(id, name) {
    entityId = id
    nameEntity = name
    document.getElementById('textTitle').innerHTML = ``
    document.getElementById('textTitle').innerHTML = `HỒ SƠ: ${name}`
    $.ajax({
        url: "getproductsbyentityid?entity_id=" + id,
        type: "GET",
        success: function (response) {
            drawproductInfo(response)
        }
    })
}

function clickproduct(checkbox) {
    var checkboxes = document.getElementsByName('checkbox-product')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
    console.log(checkbox.value);
}

function drawproductInfo(data) {
    document.getElementById('listProducts').innerHTML = ``
    var entity 
    let i = 0
    let status = ''
    data.products.forEach((data) => {

        document.getElementById('listProducts').innerHTML += `
        <div class="col-md-12 row " style="padding-right: 0;  margin-bottom: 36px;">
        <div class="col-10" style="padding-right: 0;    display: flex;">
          <div style=" margin-right: 14px;">
            <img src="${data.image ? data.image : '/images/noavatar.png'}" class="imgava">
          </div>
          <div style="  overflow: auto;">
            <span class="titleName">${data.name} </span><span class="Ch-tch"
              id="title-${data.id}"></span> <br>
            <span class="titleNamechirden">Tên chủ thể: CÔNG TY TNHH NÔNG SẢN HUY HIẾU</span><br>
            <span class="titleNamechirden">Mã sản phẩm: ${data.code}</span><br>

          </div>
        </div>
        <div class="col-1">
          <div class="rounds">
            <input type="checkbox" onclick="clickproduct(this)"
              class="change-selector2" id="checkbox-product-${data.id}" value="${data.id}"
              name="checkbox-product">
            <label for="checkbox-product-${data.id}" style="margin-top: 8px;"></label>
          </div>
        </div>
        <div class="col-1" id="edit-${data.id}" style="text-align: center;">
          <div>
          </div>
        </div>
      </div>
        `
    })
}