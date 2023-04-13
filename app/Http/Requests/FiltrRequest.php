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
          /*'price_start' => 'numeric',//|nullable
          'price_end' => 'numeric',
          'squaretotal_start' => 'numeric',
          'squaretotal_end' => 'numeric',
          'squarelive_start' => 'numeric',
          'squarelive_end' => 'numeric',
          'yearhouse' => 'numeric',
          'levelhouse_start' => 'numeric',
          'levelhouse_end' => 'numeric',
          'level_start' => 'numeric',
          'level_end' => 'numeric',
          'countroom_start' => 'numeric',
          'countroom_end' => 'numeric'*/
        ];
    }

    public function messages(){
      return [
        'price_start.numeric' => 'Поле "Цена" является числовым. Введите число - цену квартиры.',
        'price_end.numeric' => 'Поле "Цена" является числовым. Введите число - цену квартиры.',
        'squaretotal_start.numeric' => 'Поле "Общая площадь" является числовым. Введите число - общую площадь квартиры.',
        'squaretotal_end.numeric' => 'Поле "Общая площадь" является числовым. Введите число - общую площадь квартиры.',
        'squarelive_start.numeric' => 'Поле "Жилая площадь" является числовым. Введите число - жилую площадь квартиры.',
        'squarelive_end.numeric' => 'Поле "Жилая площадь" является числовым. Введите число - жилую площадь квартиры.',
        'yearhouse.numeric' => 'Поле "Год сдачи" является числовым. Введите число - год сдачи дома.',
        'levelhouse_start.numeric' => 'Поле "Этажность дома" является числовым. Введите число - этажность дома.',
        'levelhouse_end.numeric' => 'Поле "Этажность дома" является числовым. Введите число - этажность дома.',
        'level_start.numeric' => 'Поле "Этаж" является числовым. Введите число - этаж квартиры.',
        'level_end.numeric' => 'Поле "Этаж" является числовым. Введите число - этаж квартиры.',
        'countroom_start.numeric' => 'Поле "Количество комнат" является числовым. Введите число - количество комнат.',
        'countroom_end.numeric' => 'Поле "Количество комнат" является числовым. Введите число - количество комнат.'
      ];
    }
}
