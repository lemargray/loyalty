<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoyaltyFormRequest extends Request
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

        $beforeDate = \Carbon\Carbon::now();

        return [
            'firstname' => 'required|alpha|max:255',
            'lastname' => 'required|alpha|max:255',
            'dob'       => 'required|date',
            'email'     =>  'required|email',
            'address'   =>  'required|max:255',
            'parish'    =>  'required|numeric|min:1|max:14',
            'telephone'  =>  'digits:7',
            'mobile'    =>   'required|digits:7',
            'store'     =>   'required|numeric|min:1|max:19',
        ];
    }
}
