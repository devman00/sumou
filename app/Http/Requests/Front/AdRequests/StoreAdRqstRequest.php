<?php

namespace App\Http\Requests\Front\AdRequests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAdRqstRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $ar_n = ["٠", "١", "٢", "٣", "٤", "٥", "٦", "٧", "٨", "٩"];
        return [

            // 'numbers_type' => ['required'],
            // 'plate_type' => ['required', 'string'],
            'first_letter' => ['required', 'string' , 'max:1'],
            'second_letter' => ['required', 'string' , 'max:1'],
            'third_letter' => ['required', 'string' , 'max:1'],
            'first_number' => ['required', 'string' ,  Rule::in($ar_n)],
            
            'second_number' => ['nullable','string' ,  Rule::in($ar_n)],
            'third_number' => ['nullable', 'string' ,  Rule::in($ar_n)],
            'fourth_number' => ['nullable','string' ,  Rule::in($ar_n)],
            'plate_price' => ['required'],
            // 'confirm_plate_price' => ['required', 'same:plate_price'],
            // 'vendor_national_id' => ['required',Rule::unique('users')->ignore($this->id)],
            'vendor_national_id' => ['required'],
            'vendor_phone' => ['required','regex:/^([5][0-9]*)$/','min:9','max:9'],
            'bank_name' => ['required'],
            'bank_iban' => ['required','min:11','max:11'],
            'city' => ['required'],
            'address' => ['required'],
            'authorization_number' => ['required','min:9','max:9'],
          
            // preg_match('/^0[56][0-9]{7}$/' ==>  should be start with 05 + 7 numbers
            // 'phone' => 'required|regex:/^(0[5][0-9]*)$/|min:10|unique:ads,phone|max:10',

        ];
    }
}
