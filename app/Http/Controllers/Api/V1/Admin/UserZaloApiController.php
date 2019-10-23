<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserZaloRequest;
use App\Http\Requests\UpdateUserZaloRequest;
use App\Http\Resources\Admin\UserZaloResource;
use App\UserZalo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserZaloApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('user_zalo_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UserZaloResource(UserZalo::all());
    }

    public function store(StoreUserZaloRequest $request)
    {
        $userZalo = UserZalo::create($request->all());

        return (new UserZaloResource($userZalo))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(UserZalo $userZalo)
    {
        abort_if(Gate::denies('user_zalo_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new UserZaloResource($userZalo);
    }

    public function update(UpdateUserZaloRequest $request, UserZalo $userZalo)
    {
        $userZalo->update($request->all());

        return (new UserZaloResource($userZalo))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(UserZalo $userZalo)
    {
        abort_if(Gate::denies('user_zalo_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userZalo->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
