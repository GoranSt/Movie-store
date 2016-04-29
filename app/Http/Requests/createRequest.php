<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class createRequest extends Request
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
            'name'=> 'required',
            'img'=> 'required',
            'director'=> 'required',
            'release'=> 'required',
            'actors'=> 'required',
            'description'=> 'required',
            'price'=> 'required',
            'lang'=> 'required',
            'studio'=> 'required',
            'time'=> 'required',
            'rating'=> 'required'


        ];
    }
}
