<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'address' => 'required|string',
            'phone' => 'required',
            'email' => 'required|email',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url',
            'youtube' => 'nullable|url',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
        ];
    }

    public function attributes(): array
    {
        return [
            'address'   => __('keywords.address'),
            'phone'     => __('keywords.phone'),
            'linkedin'  => __('keywords.linkedin'),
            'twitter'   => __('keywords.twitter'),
            'youtube'   => __('keywords.youtube'),
            'facebook'  => __('keywords.facebook'),
            'instagram' => __('keywords.instagram'),
        ];
    }
}
