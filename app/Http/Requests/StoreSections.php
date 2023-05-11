<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSections extends FormRequest
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

            'title' => 'required|string|regex:/^[A-Za-z0-9]*$/i|unique:articles',
//            'description' => 'string|digits_between:50.5000',
              'description' => 'string|max:5000',
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'يجب ادخال البيانات فى هذا الحقل',
            'title.regex' => 'يجب ادخال البيانات من حروف انجليزية وارقام',
            'title.unique:articles' => 'يجب عدم تكرار هذا العنوان',
            'description' => 'يجب ادخال العدد المطلوب ويتعدي 5000 حرف',


        ];
    }
}
