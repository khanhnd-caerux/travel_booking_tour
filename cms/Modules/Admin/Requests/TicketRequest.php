<?php

namespace Cms\Modules\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
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
            'image_path' => 'required',
            'destination_from' => 'required',
            'destination_to' => 'required',
            'content' => 'required',
            'price' => 'required',
            'free' => 'required',
            'feature_image_path' => 'required',
            'category_id' => 'required',
            'discount_percent' => 'required',
            'road' => 'required'
        ];
    }
}
