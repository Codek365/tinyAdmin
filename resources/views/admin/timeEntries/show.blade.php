@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.timeEntry.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.timeEntry.fields.id') }}
                        </th>
                        <td>
                            {{ $timeEntry->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.timeEntry.fields.work_type') }}
                        </th>
                        <td>
                            {{ $timeEntry->work_type->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.timeEntry.fields.project') }}
                        </th>
                        <td>
                            {{ $timeEntry->project->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.timeEntry.fields.start_time') }}
                        </th>
                        <td>
                            {{ $timeEntry->start_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.timeEntry.fields.end_time') }}
                        </th>
                        <td>
                            {{ $timeEntry->end_time }}
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