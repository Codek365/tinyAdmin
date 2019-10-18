@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.timeEntry.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.time-entries.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('work_type_id') ? 'has-error' : '' }}">
                <label for="work_type">{{ trans('cruds.timeEntry.fields.work_type') }}</label>
                <select name="work_type_id" id="work_type" class="form-control select2">
                    @foreach($work_types as $id => $work_type)
                        <option value="{{ $id }}" {{ (isset($timeEntry) && $timeEntry->work_type ? $timeEntry->work_type->id : old('work_type_id')) == $id ? 'selected' : '' }}>{{ $work_type }}</option>
                    @endforeach
                </select>
                @if($errors->has('work_type_id'))
                    <p class="help-block">
                        {{ $errors->first('work_type_id') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('project_id') ? 'has-error' : '' }}">
                <label for="project">{{ trans('cruds.timeEntry.fields.project') }}</label>
                <select name="project_id" id="project" class="form-control select2">
                    @foreach($projects as $id => $project)
                        <option value="{{ $id }}" {{ (isset($timeEntry) && $timeEntry->project ? $timeEntry->project->id : old('project_id')) == $id ? 'selected' : '' }}>{{ $project }}</option>
                    @endforeach
                </select>
                @if($errors->has('project_id'))
                    <p class="help-block">
                        {{ $errors->first('project_id') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('start_time') ? 'has-error' : '' }}">
                <label for="start_time">{{ trans('cruds.timeEntry.fields.start_time') }}*</label>
                <input type="text" id="start_time" name="start_time" class="form-control datetime" value="{{ old('start_time', isset($timeEntry) ? $timeEntry->start_time : '') }}" required>
                @if($errors->has('start_time'))
                    <p class="help-block">
                        {{ $errors->first('start_time') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.timeEntry.fields.start_time_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('end_time') ? 'has-error' : '' }}">
                <label for="end_time">{{ trans('cruds.timeEntry.fields.end_time') }}*</label>
                <input type="text" id="end_time" name="end_time" class="form-control datetime" value="{{ old('end_time', isset($timeEntry) ? $timeEntry->end_time : '') }}" required>
                @if($errors->has('end_time'))
                    <p class="help-block">
                        {{ $errors->first('end_time') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.timeEntry.fields.end_time_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection