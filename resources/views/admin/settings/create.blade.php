@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.setting.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.settings.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('key') ? 'has-error' : '' }}">
                <label for="key">{{ trans('cruds.setting.fields.key') }}*</label>
                <input type="text" id="key" name="key" class="form-control" value="{{ old('key', isset($setting) ? $setting->key : '') }}" required>
                @if($errors->has('key'))
                    <p class="help-block">
                        {{ $errors->first('key') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.setting.fields.key_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('value') ? 'has-error' : '' }}">
                <label for="value">{{ trans('cruds.setting.fields.value') }}</label>
                <textarea id="value" name="value" class="form-control ">{{ old('value', isset($setting) ? $setting->value : '') }}</textarea>
                @if($errors->has('value'))
                    <p class="help-block">
                        {{ $errors->first('value') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.setting.fields.value_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection