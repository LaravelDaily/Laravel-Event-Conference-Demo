<?php

namespace App\Http\Requests;

use App\Hotel;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateHotelRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('hotel_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'   => [
                'required',
            ],
            'rating' => [
                'nullable',
                'integer',
                'min:0',
                'max:5',
            ],
        ];
    }
}
