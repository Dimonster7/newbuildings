<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuilderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'builder' => 'required',
            'phone' => 'nullable',
            'logo' => 'nullable|image|mimes:jpg,png'
        ];
    }

    public function messages()
    {
        return [
            'builder.required' => 'Поле "Наименование" обязательно для заполнения',
            'logo.image' => 'Поле "Фото" должно быть изображением',
            'logo.mimes' => 'Фото должно быть формата jpg или png'
        ];
    }
}
