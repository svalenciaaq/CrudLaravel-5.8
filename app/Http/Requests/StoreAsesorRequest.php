<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreAsesorRequest extends Request
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
            'tel' => 'required|max:10',
            'date' => 'required',
            'gen' => 'required|max:10',
            'client' => 'required |max:50',
            'sede' => 'required|max:20'
        ];
    }
}
