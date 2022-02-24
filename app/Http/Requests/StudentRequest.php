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

            'first_name' => 'required|max:255|regex:/^[a-zA-ZÑñ\s]+$/',
            'last_name' => 'required|max:255|regex:/^[a-zA-ZÑñ\s]+$/',
            'gender' => 'required',
            'date_of_birth' => 'required|date',
            'class' => 'required|max:255',
            'joining_date' => 'required|date',
            'mobile_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:11',
            'admission_number' => 'required|numeric',
            'father_name' => 'required|max:255|regex:/^[a-zA-ZÑñ\s]+$/',
            'father_occupation' => 'required|string|max:255',
            'father_mobile_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:11',
            'mother_name' => 'required|max:255|regex:/^[a-zA-ZÑñ\s]+$/',
            'mother_occupation' => 'required|string',
            'mother_mobile_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:11',
            'address' => 'required|max:255'
        ];
    }
}
