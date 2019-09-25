@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.venue.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.venues.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.venue.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($venue) ? $venue->name : '') }}" required>
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.venue.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('photos') ? 'has-error' : '' }}">
                <label for="photos">{{ trans('cruds.venue.fields.photos') }}</label>
                <div class="needsclick dropzone" id="photos-dropzone">

                </div>
                @if($errors->has('photos'))
                    <p class="help-block">
                        {{ $errors->first('photos') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.venue.fields.photos_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                <label for="address">{{ trans('cruds.venue.fields.address') }}*</label>
                <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($venue) ? $venue->address : '') }}" required>
                @if($errors->has('address'))
                    <p class="help-block">
                        {{ $errors->first('address') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.venue.fields.address_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('latitude') ? 'has-error' : '' }}">
                <label for="latitude">{{ trans('cruds.venue.fields.latitude') }}*</label>
                <input type="text" id="latitude" name="latitude" class="form-control" value="{{ old('latitude', isset($venue) ? $venue->latitude : '') }}" required>
                @if($errors->has('latitude'))
                    <p class="help-block">
                        {{ $errors->first('latitude') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.venue.fields.latitude_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('longitude') ? 'has-error' : '' }}">
                <label for="longitude">{{ trans('cruds.venue.fields.longitude') }}*</label>
                <input type="text" id="longitude" name="longitude" class="form-control" value="{{ old('longitude', isset($venue) ? $venue->longitude : '') }}" required>
                @if($errors->has('longitude'))
                    <p class="help-block">
                        {{ $errors->first('longitude') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.venue.fields.longitude_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">{{ trans('cruds.venue.fields.description') }}</label>
                <textarea id="description" name="description" class="form-control ">{{ old('description', isset($venue) ? $venue->description : '') }}</textarea>
                @if($errors->has('description'))
                    <p class="help-block">
                        {{ $errors->first('description') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.venue.fields.description_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    var uploadedPhotosMap = {}
Dropzone.options.photosDropzone = {
    url: '{{ route('admin.venues.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="photos[]" value="' + response.name + '">')
      uploadedPhotosMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedPhotosMap[file.name]
      }
      $('form').find('input[name="photos[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($venue) && $venue->photos)
      var files =
        {!! json_encode($venue->photos) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="photos[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@stop