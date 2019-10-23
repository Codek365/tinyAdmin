@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.userZalo.title') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.userZalo.fields.id') }}
                        </th>
                        <td>
                            {{ $userZalo->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userZalo.fields.userid') }}
                        </th>
                        <td>
                            {{ $userZalo->userid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userZalo.fields.user_id_by_app') }}
                        </th>
                        <td>
                            {{ $userZalo->user_id_by_app }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userZalo.fields.avatar') }}
                        </th>
                        <td>
                            {{ $userZalo->avatar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userZalo.fields.avatars') }}
                        </th>
                        <td>
                            {{ $userZalo->avatars }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userZalo.fields.display_name') }}
                        </th>
                        <td>
                            {{ $userZalo->display_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userZalo.fields.birth_date') }}
                        </th>
                        <td>
                            {{ $userZalo->birth_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userZalo.fields.shared_info') }}
                        </th>
                        <td>
                            {{ $userZalo->shared_info }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.userZalo.fields.tags_and_notes_info') }}
                        </th>
                        <td>
                            {{ $userZalo->tags_and_notes_info }}
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