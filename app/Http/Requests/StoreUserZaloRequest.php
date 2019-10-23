<?php

namespace App\Http\Requests;

use App\UserZalo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreUserZaloRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('user_zalo_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'userid'         => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'user_id_by_app' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'birth_date'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
