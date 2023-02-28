<?php

namespace App\Http\Requests\auth;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            // check exist email, Fullname, password
            'email' => 'required|email|unique:users,email',
            'fullname' => 'required|min:2|max:50',
            'password' => 'required|min:6',
        ];
        // edit response message
        
    }
    public function messages()
        {
            return [
                'email.required' => 'Email không được để trống',
                'email.email' => 'Email không đúng định dạng',
                'email.unique' => 'Email đã tồn tại',
                'fullname.required' => 'Họ tên không được để trống',
                'fullname.min' => 'Họ tên phải có ít nhất 2 ký tự',
                'fullname.max' => 'Họ tên không được quá 50 ký tự',
                'password.required' => 'Mật khẩu không được để trống',
                'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            ];
        }
}
