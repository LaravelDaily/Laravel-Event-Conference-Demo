<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Faq;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Http\Resources\Admin\FaqResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FaqsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('faq_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FaqResource(Faq::all());
    }

    public function store(StoreFaqRequest $request)
    {
        $faq = Faq::create($request->all());

        return (new FaqResource($faq))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Faq $faq)
    {
        abort_if(Gate::denies('faq_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FaqResource($faq);
    }

    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        $faq->update($request->all());

        return (new FaqResource($faq))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Faq $faq)
    {
        abort_if(Gate::denies('faq_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $faq->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
