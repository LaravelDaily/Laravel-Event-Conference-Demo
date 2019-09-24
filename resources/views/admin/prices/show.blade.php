@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.price.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.price.fields.id') }}
                        </th>
                        <td>
                            {{ $price->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.price.fields.name') }}
                        </th>
                        <td>
                            {{ $price->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.price.fields.price') }}
                        </th>
                        <td>
                            ${{ $price->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Amenities
                        </th>
                        <td>
                            @foreach($price->amenities as $id => $amenities)
                                <span class="label label-info label-many">{{ $amenities->name }}</span>
                            @endforeach
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