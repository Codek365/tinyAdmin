<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserZaloRequest;
use App\Http\Requests\StoreUserZaloRequest;
use App\Http\Requests\UpdateUserZaloRequest;
use App\UserZalo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class UserZaloController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = UserZalo::query()->select(sprintf('%s.*', (new UserZalo)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'user_zalo_show';
                $editGate      = 'user_zalo_edit';
                $deleteGate    = 'user_zalo_delete';
                $crudRoutePart = 'user-zalos';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('userid', function ($row) {
                return $row->userid ? $row->userid : "";
            });
            $table->editColumn('user_id_by_app', function ($row) {
                return $row->user_id_by_app ? $row->user_id_by_app : "";
            });
            $table->editColumn('avatar', function ($row) {
                return $row->avatar ? $row->avatar : "";
            });
            $table->editColumn('avatars', function ($row) {
                return $row->avatars ? $row->avatars : "";
            });
            $table->editColumn('display_name', function ($row) {
                return $row->display_name ? $row->display_name : "";
            });

            $table->editColumn('shared_info', function ($row) {
                return $row->shared_info ? $row->shared_info : "";
            });
            $table->editColumn('tags_and_notes_info', function ($row) {
                return $row->tags_and_notes_info ? $row->tags_and_notes_info : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.userZalos.index');
    }

    public function create()
    {
        abort_if(Gate::denies('user_zalo_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.userZalos.create');
    }

    public function store(StoreUserZaloRequest $request)
    {
        $userZalo = UserZalo::create($request->all());

        return redirect()->route('admin.user-zalos.index');
    }

    public function edit(UserZalo $userZalo)
    {
        abort_if(Gate::denies('user_zalo_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.userZalos.edit', compact('userZalo'));
    }

    public function update(UpdateUserZaloRequest $request, UserZalo $userZalo)
    {
        $userZalo->update($request->all());

        return redirect()->route('admin.user-zalos.index');
    }

    public function show(UserZalo $userZalo)
    {
        abort_if(Gate::denies('user_zalo_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.userZalos.show', compact('userZalo'));
    }

    public function destroy(UserZalo $userZalo)
    {
        abort_if(Gate::denies('user_zalo_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userZalo->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserZaloRequest $request)
    {
        UserZalo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
