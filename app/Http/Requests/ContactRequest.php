<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'       => ['required' , 'string' , 'max:55' ],
            'email'      => ['required' , 'email'  , 'max:55' ],
            'phone'      => ['required' , 'string' , 'max:55' ],
            'message'    => ['required' , 'string' , 'max:1000' ],
            'g-recaptcha-response' => ['required', 'captcha'],
        ];
    }

    public function messages()
    {
        return [
            'g-recaptcha-response.required' => 'You must check the reCAPTCHA.',
            'g-recaptcha-response.captcha' => 'Captcha error! Try again later or contact the site admin.',
        ];
    }
}
