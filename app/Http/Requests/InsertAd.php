<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertAd extends FormRequest
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
            'percent' => 'required|numeric',
            'coin' => 'required',
            'min' => 'required|numeric',
            'max' => 'required|numeric|gte:min',
        ];
    }


    public function messages()
    {
        return [
            'percent.required' => 'درصد اختلاف را مشخص کنید',
            'percent.numeric' => 'درصد اختلاف عددی باید باشد',
            'coin.required'  => 'نوع ارز را انتخاب کنید',
            'min.required'  => 'مقدار حداقل را وارد کنید.',
            'min.numeric'  => 'مقدار حداقل عددی باید باشد.',
            'max.required'  => 'مقدار حداکثر را وارد کنید.',
            'max.numeric'  => 'مقدار حداکثر عددی باید باشد.',
            'max.gte'  => 'مقدار وارد شده برای حداکثر فروش باید بیشتر از حداقل باشد.',
        ];
    }
}
