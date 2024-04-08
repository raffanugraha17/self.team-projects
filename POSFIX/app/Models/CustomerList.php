<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerList extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'customer_id';


    protected $fillable = ['customer_code', 'customer_name', 'customer_telephone', 'customer_age', 'customer_occupation', 'customer_address', 'customer_gender', 'flag'];

    protected $casts = [
        'flag' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($customerList) {
            $customerList->flag = true;
            $customerList->save();
        });
    }
}
