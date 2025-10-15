<?php

namespace Cms\Modules\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourUpdateRequest extends FormRequest
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
            'tour_code' => 'required',
            'destination_from' => 'required',
            'destination_to' => 'required',
            'vehicle' => 'required',
            'content' => 'required',
            'price' => 'required',
            'schedule' => 'required',
            'category_id' => 'required',
            'discount_percent' => 'required',
        ];
    }
}
