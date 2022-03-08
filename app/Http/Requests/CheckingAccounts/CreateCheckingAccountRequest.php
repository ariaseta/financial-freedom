<?php

namespace App\Http\Requests\CheckingAccounts;

use Illuminate\Foundation\Http\FormRequest;

class CreateCheckingAccountRequest extends FormRequest
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
            'name' => 'required',
            'number' => 'required',
            'current_balance' => 'required',
            'institution' => 'required',
            'description' => 'required'
        ];
    }
}
