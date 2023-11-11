<?php

namespace App\Http\Requests\Admin\Ad;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAdRequest extends FormRequest
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
            'second_number' => ['required', 'string' ,  Rule::in($ar_n)],
            'third_number' => ['required', 'string' ,  Rule::in($ar_n)],
            'fourth_number' => ['required', 'string' ,  Rule::in($ar_n)],

            'validity_of_periodic_examination' => ['required', 'string'],
            'validity_of_driving_form' => ['required', 'string'],
            'vehicle_insurance_status' => ['required', 'string'],
            'are_there_violations' => ['required', 'string'],
           
            // preg_match('/^0[56][0-9]{7}$/' ==>  should be start with 05 + 7 numbers
            'phone' => 'required|regex:/^(0[5][0-9]*)$/|min:10|unique:ads,phone|max:10',
            'price' => ['required', 'numeric'],
            'in_auction' => ['nullable'],
            'status' => ['string'],

           
            // $table->boolean('is_featured')->default(false);
        ];
    }
}