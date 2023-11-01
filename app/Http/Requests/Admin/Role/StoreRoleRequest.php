<?php

namespace App\Http\Requests\Admin\Role;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoleRequest extends FormRequest
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
        return [
            'name' => ['required', 'string', 'unique:roles,name'],
            'display_name' => ['required', 'string', 'unique:roles,display_name'],
            'description' => ['nullable','string', 'max:50'],
            'permissions' => ['nullable', 'array'],
            'permissions.*' => ['string', 'exists:permissions,id'],
        ];
    }
}
