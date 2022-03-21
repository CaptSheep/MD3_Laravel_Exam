<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
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
            'code'=>'required',
            'name'=>'required',
            'phoneNumber'=>'required',
            'email'=>'required',
            'address'=>'required',
            'owner'=>'required'
        ];
    }

    public function message ()
    {
        $message = [
            'code'=>'Code can not null',
            'name.required' => 'Your Name can not null',
            'phoneNumber.required'=>'Your Phone Number can not null',
            'email.required'=>'Your Email can not null',
            'address.required'=>'Your Address can not null',
            'owner.required'=>'Your Owner Name can not null',
        ];
        return $message;
    }
}
