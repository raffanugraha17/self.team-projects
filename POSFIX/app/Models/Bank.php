<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ActivityLog;

class Bank extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'bank_id';
    protected $fillable = ['bank_code', 'bank_name', 'bank_account', 'bank_branch', 'flag'];

    protected $casts = [
        'flag' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($bank) {
            $bank->flag = true;
            $bank->save();

            // $userId = auth()->id();
            // $activityLog = new ActivityLog();
            // $activityLog->user_id = $userId;
            // $activityLog->activity = 'test_activity';
            // $activityLog->module = 'test_module';
    
            // $activityLog->save();
        });
    }

    public static function logCrudOperation($activity, $model)
    {
        $userId = auth()->id();
        $modelName = get_class($model);
        $tableName = $model->getTable();

        self::create([
            'user_id' => $userId,
            'activity' => $activity,
            'module' => $modelName,
            'table' => $tableName,
        ]);
    }
}