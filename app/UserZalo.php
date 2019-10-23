<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserZalo extends Model
{
    use SoftDeletes;

    public $table = 'user_zalos';

    protected $dates = [
        'birth_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'userid',
        'avatar',
        'avatars',
        'birth_date',
        'created_at',
        'updated_at',
        'deleted_at',
        'shared_info',
        'display_name',
        'user_id_by_app',
        'tags_and_notes_info',
    ];

    public function getBirthDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setBirthDateAttribute($value)
    {
        $this->attributes['birth_date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}
