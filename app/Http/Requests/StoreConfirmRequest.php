<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConfirmRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'amount'        => 'required',
            'name'          => 'required',
            'email'         => 'required',
            'phone'         => 'required',
            'guest_name'    => 'required',
            'room_type'     => 'required',
        ];
    }
}
