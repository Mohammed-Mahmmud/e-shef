<?php

namespace App\Http\Requests\website\contacts;

use Illuminate\Foundation\Http\FormRequest;

class ContactsStoreRequest extends FormRequest
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
            
            'firstname'=>['required'],
            'lastname'=>['required'],
            'email' => ['required','max:255','min:2','email'],
            'message'=>['required'],
            'phone'=>['nullable'],
        ];
    }
}
