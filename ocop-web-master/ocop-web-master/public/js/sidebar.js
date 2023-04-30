
const sidebar = {
    loadSidebar:()=>{
        let data=[]
        let parent = $('#sidebarnav > li');
        for (let index = 0; index < parent.length; index++) {
            const element = $(parent[index]);
            let textp = element.children('a').children('span').text().replace(element.children('a').children('span').children('span').text(), '')
            textp = textp.trim()
            if ($(element).children('ul').length) {
                let sub = $($(element).children('ul')).children('li')
                
                for (let index = 0; index < sub.length; index++) {
                    const el = $(sub[index]);
                    data.push({
                        href: $(el).children('a')[0].href.replace(window.location.origin, ''),
                        parent: element,
                        isParent: false,
                        sub:el,
                        pName:textp,
                        cName:el.text(),
                        listSub:sub
                    })
                }
            }else{
                data.push({
                    href: $(element).children('a')[0].href.replace(window.location.origin, ''),
                    parent:element,
                    isParent:true,
                    pName: textp,
                })
            }
        }
        return data
    },
    getAcL: ()=>{
        return new Promise((rel,rej)=>{
            $.ajax({
                url: "/acl/sidebar",
                type: 'get',
                success: (data) =>{
                    if (data.length) {
                        rel(data)
                    } else {
                        rel([])
                    }
                },
                error:(err)=>{
                    rej(err)
                }
            })
        })
        
    },
    sidebar:async ()=>{
        let acl = await sidebar.getAcL();
        var arr=sidebar.loadSidebar()
        for (let index = 0; index < arr.length; index++) {
            const element = arr[index];
            let found = acl.find(el => el==element.href);
            if(!found){
                if(element.isParent){
                    element.parent.hide()
                }else{
                    element.sub.hide();
                    element.sub.prop('isHide', true)
                    let isAllHide= sidebar.checkSubHide(element.listSub);
                    if(isAllHide) element.parent.hide()
                }
            }
        }
        $('#menuSidebarnav')[0].style.visibility = "visible"; 
        
    },
    checkSubHide:(list)=>{
        let result=true;
        for (let index = 0; index < list.length; index++) {
            const element = $(list[index]);
            if (!element.prop('isHide')) return result = false
        }
        return result;
    }
}

$('document').ready(()=>{
    $('#menuSidebarnav')[0].style.visibility = 'hidden';
    sidebar.sidebar()
})