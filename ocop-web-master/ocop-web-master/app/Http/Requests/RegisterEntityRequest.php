<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterEntityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtFullName'   => 'required:users,name',
            'txtPhone'   => 'required:users,phone',
            'txtEmail'   => 'required|email|unique:users,email',
            'txtPass' =>'required|min:6',
            'txtCfPass'       =>'required|min:6|same:password',
        ];
    }

    public function messages (){
        return[
            'txtFullName.required'      =>'Xin vui lòng nhập tên',
            'txtPhone.required'      =>'Xin vui lòng nhập số điện thoại',
            'txtEmail.required'      =>'Xin vui lòng nhập email',
            'txtEmail.unique'      =>'Email đã tồn tại',
            'txtPass.required'  => 'Xin vui lòng nhập mật khẩu',
            'txtCfPass.required'  => 'Xin vui lòng nhập lại mật khẩu',
            'txtCfPass.same'  => 'Mật khẩu không khớp'
        ];
    }
}
