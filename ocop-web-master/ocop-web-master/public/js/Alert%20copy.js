function sawl(title,text,type)
{   
	 swal.fire({   
        title: title,
        text: text,
        type:type 
    })
}

const sawlWithCallBack = (title,text,type, callback) => {
    swal.fire({   
        title: title,
        text: text,
        type:type 
    }).then((result) => {
        if(result.value) {
            callback();
        }
    });
}