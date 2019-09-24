<?php

namespace App\Http\Requests;

use App\Venue;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreVenueRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('venue_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'      => [
                'required',
            ],
            'address'   => [
                'required',
            ],
            'latitude'  => [
                'required',
            ],
            'longitude' => [
                'required',
            ],
        ];
    }
}
