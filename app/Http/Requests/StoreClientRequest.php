<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreClientRequest extends Request
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
            'name' => 'required|max:30' ,
            'dni' => 'required|max:10',
            'email' => 'required|max:50',
            'addres' => 'required|max:50',
            
        ];
    }
}
