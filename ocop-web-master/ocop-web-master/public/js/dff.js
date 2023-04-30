var room = 1;

function education_fields() {

    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass" + room);
    var rdiv = 'removeclass' + room;
    divtest.innerHTML = `<div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" value="" placeholder="url">
                                <div class="input-group-append"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('${room}');"> <i class="fa fa-minus"></i> </button></div>
                            </div>
                        </div>`;

    objTo.appendChild(divtest)
}

function remove_education_fields(rid) {
    $('.removeclass' + rid).remove();
}