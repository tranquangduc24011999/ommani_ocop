$(document).ready(function () {
    getMemberManagerByAdress()
    getMemberExByAdress()
})
const getMemberManagerByAdress = () => {
    $.ajax({
        url: "/getmembermanagerbyadress",
        type: "GET",
        success: function (ret) {

            if(ret){
                drawMemberExAdress(ret)
            }
        }
    })
}
const getMemberExByAdress=()=>{
    $.ajax({
        url:"getMemberExByAdress",
        type:"GET",
        success:function(ret){
            if(ret){
                drawEx(ret)
            }
        }
    })
}
const drawMemberExAdress = (data) => {
    managerAccount.innerHTML = ``
    data.forEach(e => {
        console.log(e)
        let active=false
        if(e.status!=="active"){
            active=true
        }
        managerAccount.innerHTML += `
            <div class="col-md-3 mt-3">
                <a href="/accountmanagementdetail?idMember=${e._id}&role=manager">
                    <div class="divBor">
                        <div style="padding: 24px;text-align:center">
                            <img src="${e.avatarUrl ? e.avatarUrl:'/img/noavatar.png'}" width="64px" height="64px"
                                style="border-radius:100%;">
                        </div>
                        <div style="text-align: center;">
                            <label class="nameMember">${e.name}</label>
                            <p class="subtitile">${e.email}</p>
                            ${active?'<button class="btn btn-sm " style="background-color: #fdefce;border-radius: 10px;"><span>Chờ duyệt</span></button>':''}
                        </div>
                    </div>
                </a>
            </div>
            `
    });

}
const drawEx = (data) => {
    councilAccounts.innerHTML = ``
    data.forEach(e => {
        let info=false
        let active=false
        if(e.evaluationcouncils.length>0){
                info=e.evaluationcouncils.length
        }
        if(e.status!=="active"){
            active=true
        }
        councilAccounts.innerHTML += `
            <div class="col-md-3 mt-3">
             <a href="/accountmanagementdetail?idMember=${e._id}&role=ex">
                <div class="divBor">
                    <div style="padding: 24px;text-align:center">
                        <img src="${e.avatarUrl ? e.avatarUrl:'/img/noavatar.png'}" width="64px" height="64px"
                            style="border-radius:100%;">
                    </div>
                    <div style="text-align: center;">
                        <label class="nameMember">${e.name}</label>
                        <p class="subtitile">${e.email}</p>
                        ${info?'<p class="subtitile2">'+info+' bộ hồ sơ được giao</p>':active?'<button class="btn btn-sm " style="background-color: #fdefce;border-radius: 10px;"><span>Chờ duyệt</span></button>':''}
                    </div>
                </div>
             </a>
            </div>
            `
    });

}