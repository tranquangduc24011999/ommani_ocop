const login = () => {
    var _token = $('meta[name="csrf-token"]').attr('content');
    var email = $(`#email`).val().trim();
    var password = $(`#password`).val();

    if(email.length == 0){
        return Swal.fire({
            type: 'warning',
            title: '',
            text: 'Email không được để trống',
        });
    }
    if(password.length == 0){
        return Swal.fire({
            type: 'warning',
            title: '',
            text: 'Mật khẩu không được để trống',
        });
    }
    
    $.ajax({
        url: '/login',
        type: 'POST',
        cache: false,
        data: {
            "_token":_token,
            "email":email,
            "password":password
        },
        success:function(response){
            if(response.status === 'success'){
                window.localStorage.setItem('user', JSON.stringify(response.data));
                response.data.roles.forEach((item) => {
                    if(item.name === 'MEMBER'){
                        window.location.href = `/entities`;
                    }else if(item.name === 'MANAGER'){
                        window.location.href = `/dashboard`;
                    }else if(item.name === 'EXAMINER'){
                        window.location.href = `/evaluation`;
                    }else if(item.name === 'HELPTEAM'){
                        window.location.href = `/dashboard`;
                    }
                })
                
            }else{
                return Swal.fire({
                    type: 'warning',
                    title: '',
                    text: 'Đăng nhập thất bại. Xin vui lòng thử lại',
                });
            }
        }
    });

}