<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;

class AdsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //إذا كان دالة هذي فولس أي مستخدم لايملك حق التحديث
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'title'=>'required|max:50',
            'text'=>'required',
            'price'=>'required|numeric|digits_between:2,22',
            'image'=>'required|mimes:png,jpg,bmp',
       
        ];

    }
    public function messages(){
        return [        
            'title.required' => 'ادخل عنوان الإعلان', 
            'title.max' => 'حقل عنوان الإعلان يجب أن لا يتجاوز 50 حرف', 
            'text.required' => 'أدخل تفاصيل الإعلان',
            'price.required' => 'حقل السعر فارغ', 
            'price.numeric' => 'حقل السعر يجب أن يكون قيمة رقمية', 
            'price.digits_between' => 'السعر المدخل يجب أن يتكون من (2 - 11) خانة رقمية',             
            'image.mimes' => 'صيغة الملف يجب أن تكون jpeg,bmp,png',      
            'image.required' => 'يجب إرفاق صورة',      
        ];
    }
}
