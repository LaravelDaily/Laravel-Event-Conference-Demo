@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.schedule.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.schedules.update", [$schedule->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('day_number') ? 'has-error' : '' }}">
                <label for="day_number">{{ trans('cruds.schedule.fields.day_number') }}*</label>
                <input type="number" id="day_number" name="day_number" class="form-control" value="{{ old('day_number', isset($schedule) ? $schedule->day_number : '') }}" step="1" required>
                @if($errors->has('day_number'))
                    <p class="help-block">
                        {{ $errors->first('day_number') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.schedule.fields.day_number_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('start_time') ? 'has-error' : '' }}">
                <label for="start_time">{{ trans('cruds.schedule.fields.start_time') }}*</label>
                <input type="text" id="start_time" name="start_time" class="form-control timepicker" value="{{ old('start_time', isset($schedule) ? $schedule->start_time : '') }}" required>
                @if($errors->has('start_time'))
                    <p class="help-block">
                        {{ $errors->first('start_time') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.schedule.fields.start_time_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.schedule.fields.title') }}*</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($schedule) ? $schedule->title : '') }}" required>
                @if($errors->has('title'))
                    <p class="help-block">
                        {{ $errors->first('title') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.schedule.fields.title_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('subtitle') ? 'has-error' : '' }}">
                <label for="subtitle">{{ trans('cruds.schedule.fields.subtitle') }}</label>
                <input type="text" id="subtitle" name="subtitle" class="form-control" value="{{ old('subtitle', isset($schedule) ? $schedule->subtitle : '') }}">
                @if($errors->has('subtitle'))
                    <p class="help-block">
                        {{ $errors->first('subtitle') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.schedule.fields.subtitle_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('speaker_id') ? 'has-error' : '' }}">
                <label for="speaker">{{ trans('cruds.schedule.fields.speaker') }}</label>
                <select name="speaker_id" id="speaker" class="form-control select2">
                    @foreach($speakers as $id => $speaker)
                        <option value="{{ $id }}" {{ (isset($schedule) && $schedule->speaker ? $schedule->speaker->id : old('speaker_id')) == $id ? 'selected' : '' }}>{{ $speaker }}</option>
                    @endforeach
                </select>
                @if($errors->has('speaker_id'))
                    <p class="help-block">
                        {{ $errors->first('speaker_id') }}
                    </p>
                @endif
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection