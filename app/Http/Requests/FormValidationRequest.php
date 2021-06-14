<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidationRequest extends FormRequest
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
            'firs_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required',
            'email' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'user_name' => 'Kullanıcı Adı',
            'email' => 'E-posta',
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => 'Last Name alanı boş geçilemezzzz',
            'email.required' => ':attribute alanı boş geçilemez',
        ];
    }
}
