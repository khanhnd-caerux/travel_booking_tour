<?php

namespace Cms\Modules\Home\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'contact_phone' => 'required',
            'contact_name' => 'required',
            'contact_address' => 'required',
            'contact_email' => 'required',
            'message' => 'required'
        ];
    }
}
