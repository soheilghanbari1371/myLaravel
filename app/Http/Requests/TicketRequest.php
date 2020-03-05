<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
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
            'department' => 'required',
            'subject' => 'required',
            'text' => 'required',
            //
        ];
    }
    public function messages()
    {
        return [

            'subject.required'  => 'موضوع تیکت را مشخص کنید.',
            'text.required'  => 'متن تیکت را مشخص کنید.',

        ];
    }
}
