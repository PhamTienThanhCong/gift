<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeCardInfo extends FormRequest
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
            // url 2-50 unique card_configs
            'url' => 'required|string|min:2|max:50|unique:card_configs',
            'themeLanding' => 'required',
        ];
    }
}
