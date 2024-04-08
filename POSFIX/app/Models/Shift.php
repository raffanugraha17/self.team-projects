<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shift extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'shift_id';
    protected $fillable = ['shift_code', 'shift_name', 'start_shift', 'end_shift', 'flag'];

    protected $casts = [
        'flag' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($shift) {
            $shift->flag = true;
            $shift->save();
        });
    }
}
