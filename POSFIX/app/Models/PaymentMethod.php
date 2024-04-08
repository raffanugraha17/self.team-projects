<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentMethod extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'payment_method_id';
    protected $fillable = ['payment_method_code','payment_method','flag'];
    protected $casts = [
        'flag' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($paymentMethod) {
            $paymentMethod->flag = true;
            $paymentMethod->save();
        });
    }
}
