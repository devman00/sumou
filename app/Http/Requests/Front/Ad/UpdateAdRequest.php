<?php

namespace App\Http\Requests\Front\Ad;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAdRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $ar_n = ["١", "٢", "٣", "٤", "٥", "٦", "٧", "٨", "٩"];
        return [
            'plate_type' => ['required', 'string'],
            'first_letter' => ['required', 'string' , 'max:1'],
            'second_letter' => ['required', 'string' , 'max:1'],
            'third_letter' => ['required', 'string' , 'max:1'],
            'first_number' => ['required', 'string' ,  Rule::in($ar_n)],
            'second_number' => ['string' ,  Rule::in($ar_n)],
            'third_number' => ['string' ,  Rule::in($ar_n)],
            'fourth_number' => ['string' ,  Rule::in($ar_n)],

            'validity_of_periodic_examination' => ['required', 'string'],
            'validity_of_driving_form' => ['required', 'string'],
            'vehicle_insurance_status' => ['required', 'string'],
            'are_there_violations' => ['required', 'string'],
           
            // preg_match('/^0[56][0-9]{7}$/' ==>  should be start with 05 + 7 numbers
            // 'phone' => 'required|regex:/^(0[5][0-9]*)$/|min:10|max:10,unique:unique:ads,phone,'.$this->route('ad') ?? 0,
            'phone' => 'required|regex:/^([5][0-9]*)$/|min:9|max:9',

            // Rule::unique('users', 'email')->ignore($this->route('user'))],

            'price' => ['numeric'],
            'in_auction' => ['nullable'],
            'status' => ['string'],
        ];
    }
}
