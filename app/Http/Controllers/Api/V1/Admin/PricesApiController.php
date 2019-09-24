<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePriceRequest;
use App\Http\Requests\UpdatePriceRequest;
use App\Http\Resources\Admin\PriceResource;
use App\Price;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PricesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('price_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PriceResource(Price::with(['amenities'])->get());
    }

    public function store(StorePriceRequest $request)
    {
        $price = Price::create($request->all());
        $price->amenities()->sync($request->input('amenities', []));

        return (new PriceResource($price))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Price $price)
    {
        abort_if(Gate::denies('price_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PriceResource($price->load(['amenities']));
    }

    public function update(UpdatePriceRequest $request, Price $price)
    {
        $price->update($request->all());
        $price->amenities()->sync($request->input('amenities', []));

        return (new PriceResource($price))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Price $price)
    {
        abort_if(Gate::denies('price_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $price->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
