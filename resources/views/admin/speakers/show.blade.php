@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.speaker.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.speaker.fields.id') }}
                        </th>
                        <td>
                            {{ $speaker->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speaker.fields.name') }}
                        </th>
                        <td>
                            {{ $speaker->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speaker.fields.description') }}
                        </th>
                        <td>
                            {!! $speaker->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speaker.fields.full_description') }}
                        </th>
                        <td>
                            {!! $speaker->full_description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speaker.fields.photo') }}
                        </th>
                        <td>
                            @if($speaker->photo)
                                <a href="{{ $speaker->photo->getUrl() }}" target="_blank">
                                    <img src="{{ $speaker->photo->getUrl('thumb') }}" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speaker.fields.twitter') }}
                        </th>
                        <td>
                            {{ $speaker->twitter }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speaker.fields.facebook') }}
                        </th>
                        <td>
                            {{ $speaker->facebook }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speaker.fields.linkedin') }}
                        </th>
                        <td>
                            {{ $speaker->linkedin }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>

        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection