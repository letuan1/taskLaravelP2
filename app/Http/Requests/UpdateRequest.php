<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'id' => 'required|integer',
            'name' => 'required|max:100',
            'phone' => 'required|integer',
            'email' => 'required|email',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Name không được để trống',
            'name.max' => 'Name không được quá 100 kí tự',
            'phone.required' => 'Phone không được để trống',
            'phone.integer' => 'Phone phải là số',
            'email.required' => 'Email phải là số',
            'email.email' => 'Email phải là dạng email',
            'id.required' => 'Id không được để trống',
            'id.integer' => 'Id phải là số',
        ];
    }
}
