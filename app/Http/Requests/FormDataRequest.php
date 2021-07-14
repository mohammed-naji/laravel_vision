<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormDataRequest extends FormRequest
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
            'name' => ['required', 'min:4', 'max:20'],
            'age' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'اسمك الحلو مطلوب',
            'age.min' => 'اسمك الحلو مطلوب',
            'required' => 'هذا الحقل مطلوب ي روح قلبي',
            'min' => 'البيانات المدخلة مش كاملة ي عيني',
            'max' => 'ي حبيبي دلعتك كتير البيانات كتيييييرة'

        ];
    }
}
