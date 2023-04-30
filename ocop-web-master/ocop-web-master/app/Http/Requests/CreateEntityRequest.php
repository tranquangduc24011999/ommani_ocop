<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEntityRequest extends FormRequest
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
            'txtName'   => 'required:entity,name',
            'txtTypeAdress' => 'required',
            'cboPos' => 'required',
            'cboDistricts' => 'required',
            'cboWards' => 'required'
            
        ];
    }
    public function messages (){
        return[
            'txtName.required'    =>'Chưa nhập tên chủ thể',
            'txtTypeAdress.required'      =>'Chưa chọn loại hình đơn vị',
            'cboPos.required'      =>'Chưa chọn tỉnh thành',
            'cboDistricts.required'    => 'Chưa chọn quận huyện',
            'cboWards.required'      =>'Chưa chọn phường xã'
        ];
    }
}
