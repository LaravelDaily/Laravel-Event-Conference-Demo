@extends('layouts.admin')
@section('content')
@can('hotel_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.hotels.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.hotel.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.hotel.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Hotel">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.hotel.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.hotel.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.hotel.fields.photo') }}
                        </th>
                        <th>
                            {{ trans('cruds.hotel.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.hotel.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.hotel.fields.rating') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hotels as $key => $hotel)
                        <tr data-entry-id="{{ $hotel->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $hotel->id ?? '' }}
                            </td>
                            <td>
                                {{ $hotel->name ?? '' }}
                            </td>
                            <td>
                                @if($hotel->photo)
                                    <a href="{{ $hotel->photo->getUrl() }}" target="_blank">
                                        <img src="{{ $hotel->photo->getUrl('thumb') }}" width="50px" height="50px">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $hotel->address ?? '' }}
                            </td>
                            <td>
                                {{ $hotel->description ?? '' }}
                            </td>
                            <td>
                                {{ $hotel->rating ?? '' }}
                            </td>
                            <td>
                                @can('hotel_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.hotels.show', $hotel->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('hotel_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.hotels.edit', $hotel->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('hotel_delete')
                                    <form action="{{ route('admin.hotels.destroy', $hotel->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('hotel_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.hotels.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Hotel:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection