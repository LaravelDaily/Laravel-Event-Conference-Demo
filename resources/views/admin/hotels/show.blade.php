@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.hotel.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.hotel.fields.id') }}
                        </th>
                        <td>
                            {{ $hotel->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hotel.fields.name') }}
                        </th>
                        <td>
                            {{ $hotel->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hotel.fields.photo') }}
                        </th>
                        <td>
                            @if($hotel->photo)
                                <a href="{{ $hotel->photo->getUrl() }}" target="_blank">
                                    <img src="{{ $hotel->photo->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hotel.fields.address') }}
                        </th>
                        <td>
                            {{ $hotel->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hotel.fields.description') }}
                        </th>
                        <td>
                            {!! $hotel->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hotel.fields.rating') }}
                        </th>
                        <td>
                            {{ $hotel->rating }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection