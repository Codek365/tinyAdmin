@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.userZalo.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.user-zalos.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('userid') ? 'has-error' : '' }}">
                <label for="userid">{{ trans('cruds.userZalo.fields.userid') }}</label>
                <input type="number" id="userid" name="userid" class="form-control" value="{{ old('userid', isset($userZalo) ? $userZalo->userid : '') }}" step="1">
                @if($errors->has('userid'))
                    <p class="help-block">
                        {{ $errors->first('userid') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.userZalo.fields.userid_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('user_id_by_app') ? 'has-error' : '' }}">
                <label for="user_id_by_app">{{ trans('cruds.userZalo.fields.user_id_by_app') }}</label>
                <input type="number" id="user_id_by_app" name="user_id_by_app" class="form-control" value="{{ old('user_id_by_app', isset($userZalo) ? $userZalo->user_id_by_app : '') }}" step="1">
                @if($errors->has('user_id_by_app'))
                    <p class="help-block">
                        {{ $errors->first('user_id_by_app') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.userZalo.fields.user_id_by_app_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('avatar') ? 'has-error' : '' }}">
                <label for="avatar">{{ trans('cruds.userZalo.fields.avatar') }}</label>
                <input type="text" id="avatar" name="avatar" class="form-control" value="{{ old('avatar', isset($userZalo) ? $userZalo->avatar : '') }}">
                @if($errors->has('avatar'))
                    <p class="help-block">
                        {{ $errors->first('avatar') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.userZalo.fields.avatar_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('avatars') ? 'has-error' : '' }}">
                <label for="avatars">{{ trans('cruds.userZalo.fields.avatars') }}</label>
                <input type="text" id="avatars" name="avatars" class="form-control" value="{{ old('avatars', isset($userZalo) ? $userZalo->avatars : '') }}">
                @if($errors->has('avatars'))
                    <p class="help-block">
                        {{ $errors->first('avatars') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.userZalo.fields.avatars_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('display_name') ? 'has-error' : '' }}">
                <label for="display_name">{{ trans('cruds.userZalo.fields.display_name') }}</label>
                <input type="text" id="display_name" name="display_name" class="form-control" value="{{ old('display_name', isset($userZalo) ? $userZalo->display_name : '') }}">
                @if($errors->has('display_name'))
                    <p class="help-block">
                        {{ $errors->first('display_name') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.userZalo.fields.display_name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('birth_date') ? 'has-error' : '' }}">
                <label for="birth_date">{{ trans('cruds.userZalo.fields.birth_date') }}</label>
                <input type="text" id="birth_date" name="birth_date" class="form-control date" value="{{ old('birth_date', isset($userZalo) ? $userZalo->birth_date : '') }}">
                @if($errors->has('birth_date'))
                    <p class="help-block">
                        {{ $errors->first('birth_date') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.userZalo.fields.birth_date_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('shared_info') ? 'has-error' : '' }}">
                <label for="shared_info">{{ trans('cruds.userZalo.fields.shared_info') }}</label>
                <input type="text" id="shared_info" name="shared_info" class="form-control" value="{{ old('shared_info', isset($userZalo) ? $userZalo->shared_info : '') }}">
                @if($errors->has('shared_info'))
                    <p class="help-block">
                        {{ $errors->first('shared_info') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.userZalo.fields.shared_info_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('tags_and_notes_info') ? 'has-error' : '' }}">
                <label for="tags_and_notes_info">{{ trans('cruds.userZalo.fields.tags_and_notes_info') }}</label>
                <input type="text" id="tags_and_notes_info" name="tags_and_notes_info" class="form-control" value="{{ old('tags_and_notes_info', isset($userZalo) ? $userZalo->tags_and_notes_info : '') }}">
                @if($errors->has('tags_and_notes_info'))
                    <p class="help-block">
                        {{ $errors->first('tags_and_notes_info') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.userZalo.fields.tags_and_notes_info_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection