<?php

namespace App\Http\Requests;

use App\Price;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdatePriceRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('price_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'        => [
                'required',
            ],
            'price'       => [
                'required',
            ],
            'amenities.*' => [
                'integer',
            ],
            'amenities'   => [
                'array',
            ],
        ];
    }
}
