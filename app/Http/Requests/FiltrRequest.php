<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FiltrRequest extends FormRequest
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
          'price' => 'numeric|nullable',
          'squaretotal' => 'numeric|nullable',
          'squarelive' => 'numeric|nullable',
          'yearhouse' => 'numeric|nullable',
          'levelhouse' => 'numeric|nullable',
          'level' => 'numeric|nullable',
          'countroom' => 'numeric|nullable',
          'photo' => 'nullable',
          'rajon' => 'string',
          'GK' => 'string',
          'street' => 'string',
          'numberhouse' => 'string',
          'typehouse' => 'string',
          'otdelka' => 'string',
          'nalbl' => 'string',
          'builder' => 'numeric'
        ];
    }

    public function messages(){
      return [
        'price.numeric' => 'Поле "Цена" является числовым. Введите число - цену квартиры.',
        'price_end.numeric' => 'Поле "Цена" является числовым. Введите число - цену квартиры.',
        'squaretotal.numeric' => 'Поле "Общая площадь" является числовым. Введите число - общую площадь квартиры.',
        'squaretotal_end.numeric' => 'Поле "Общая площадь" является числовым. Введите число - общую площадь квартиры.',
        'squarelive.numeric' => 'Поле "Жилая площадь" является числовым. Введите число - жилую площадь квартиры.',
        'squarelive_end.numeric' => 'Поле "Жилая площадь" является числовым. Введите число - жилую площадь квартиры.',
        'yearhouse.numeric' => 'Поле "Год сдачи" является числовым. Введите число - год сдачи дома.',
        'levelhouse.numeric' => 'Поле "Этажность дома" является числовым. Введите число - этажность дома.',
        'levelhouse_end.numeric' => 'Поле "Этажность дома" является числовым. Введите число - этажность дома.',
        'level.numeric' => 'Поле "Этаж" является числовым. Введите число - этаж квартиры.',
        'level_end.numeric' => 'Поле "Этаж" является числовым. Введите число - этаж квартиры.',
        'countroom.numeric' => 'Поле "Количество комнат" является числовым. Введите число - количество комнат.',
        'countroom_end.numeric' => 'Поле "Количество комнат" является числовым. Введите число - количество комнат.'
      ];
    }
}
