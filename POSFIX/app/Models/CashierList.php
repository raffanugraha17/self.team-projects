<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CashierList extends Model
{
    use SoftDeletes;
    protected $primaryKey = "cashier_id";
    protected $fillable = ['cashier_code','cashier_name','cashier_telephone','cashier_role','cashier_shift','cashier_gender','flag'];

    protected $casts = [
        'flag' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($cashierList) {
            $cashierList->flag = true;
            $cashierList->save();
        });
    }
}
