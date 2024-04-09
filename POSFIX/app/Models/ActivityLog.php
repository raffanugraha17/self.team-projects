<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $fillable = ['user_id', 'activity', 'module', 'table'];
    

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

    public static function logLoginLogout($activity, $module)
    {
        $userId = auth()->id();

        self::create([
            'user_id' => $userId,
            'activity' => $activity,
            'module' => $module,
            'table' => null,
        ]);
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($model) {
            ActivityLog::logCrudOperation('create', $model);
        });

        static::updated(function ($model) {
            ActivityLog::logCrudOperation('update', $model);
        });

        static::deleted(function ($model) {
            ActivityLog::logCrudOperation('delete', $model);
        });
    }
}
