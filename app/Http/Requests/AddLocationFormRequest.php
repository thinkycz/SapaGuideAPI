<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddLocationFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // TO DO
        return $this->getUser() ? true : true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'     => 'required',
            'latitude'  => 'required|numeric',
            'longitude' => 'required|numeric',
            'email'     => 'email',
            'website'   => 'url',
        ];
    }
}
