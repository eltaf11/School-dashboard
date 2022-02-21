<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'firstname'=>'required|max:255|regex:/^[a-zA-ZÑñ\s]+$/',
            'lastname'=>'required|max:255|regex:/^[a-zA-ZÑñ\s]+$/',
            'gender'=>'required',
            'date_of_birth'=>'required|date',
            'class'=>'required',
            'joining_date'=>'required|date',
            'mobile_number'=>'required',
            'admission_number'=>'required',
            'father_name'=>'required|max:255|regex:/^[a-zA-ZÑñ\s]+$/',
            'farther_occupation'=>'required',
            'father_mobile_number'=>'required',
            'mother_name'=>'required|max:255|regex:/^[a-zA-ZÑñ\s]+$/',
            'mother_occupation'=>'required',
            'mother_mobile_number'=>'required',
            'address'=>'required'
        ];
    }
}
