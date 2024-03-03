<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    protected $fillable = [
        'shift_code',
        'shift_name',
        'start_shift',
        'end_shift',
        'data_flag',
    ];

    // Relationships can be defined here
}
