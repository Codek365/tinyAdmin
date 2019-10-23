@extends('layouts.admin')
@section('content')
@can('user_zalo_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.user-zalos.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.userZalo.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.userZalo.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-UserZalo">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.userZalo.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.userZalo.fields.userid') }}
                    </th>
                    <th>
                        {{ trans('cruds.userZalo.fields.user_id_by_app') }}
                    </th>
                    <th>
                        {{ trans('cruds.userZalo.fields.avatar') }}
                    </th>
                    <th>
                        {{ trans('cruds.userZalo.fields.avatars') }}
                    </th>
                    <th>
                        {{ trans('cruds.userZalo.fields.display_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.userZalo.fields.birth_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.userZalo.fields.shared_info') }}
                    </th>
                    <th>
                        {{ trans('cruds.userZalo.fields.tags_and_notes_info') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('user_zalo_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.user-zalos.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.user-zalos.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'userid', name: 'userid' },
{ data: 'user_id_by_app', name: 'user_id_by_app' },
{ data: 'avatar', name: 'avatar' },
{ data: 'avatars', name: 'avatars' },
{ data: 'display_name', name: 'display_name' },
{ data: 'birth_date', name: 'birth_date' },
{ data: 'shared_info', name: 'shared_info' },
{ data: 'tags_and_notes_info', name: 'tags_and_notes_info' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  $('.datatable-UserZalo').DataTable(dtOverrideGlobals);
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
});

</script>
@endsection