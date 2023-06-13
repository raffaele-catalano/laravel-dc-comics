<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title'         => 'required|min:4|max:255',
            'description'   => 'min:10',
            'thumb'         => 'required|min:5',
            'price'         => 'required|min:3|max:255',
            'series'        => 'min:3|max:255',
            'sale_date'     => 'required|date_format:Y-m-d|min:3|max:255',
            'type'          => 'min:3|max:255',
            'artists'       => 'min:3|max:255',
            'writers'       => 'min:3|max:255',
        ];
    }
}
