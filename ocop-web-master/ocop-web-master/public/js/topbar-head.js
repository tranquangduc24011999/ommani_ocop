let timeout

$(() => {
    //getUserInfo();
    $('.user-info').hide()
    let user = $('.user-pro-body')
    $('#accountAvartar').click(function () {
        $('.user-info').hide()
    })
    user.hover(
        function () {
            timeout = setTimeout(function () {
                $('.user-info').show()
            }, 500)
        },
        function () {
            clearTimeout(timeout)
            $('.user-info').hide()
        }
    )
});
const getUserInfo = () => {
    $.ajax({
        type: `GET`,
        url: `/getAccountInfo`,
        success: (data) => {
            if (data.data) {
                let acc = data.data
                let content = ''
                if(acc.name){
                    content += '<div>' + acc.name + '</div>\n'
                }
                if(acc.email){
                    content += '<div>' + acc.email + '</div>\n'
                }
                if(acc.phone){
                    content += '<div>' + acc.phone + '</div>\n'
                }
                if(acc.address){
                    content += '<div>' + acc.address + '</div>'
                }
                $('.user-info').html(content)
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.warn(errorThrown);
        }
    })
}
