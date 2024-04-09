<?php

namespace App\Listeners;

use App\Models\ActivityLog;
use Illuminate\Database\Events\ModelEvent;
use Illuminate\Support\Facades\Auth;

class LogCrudActivity
{
    public function handle(ModelEvent $event)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $userId = $user->id;
            $datetime = now()->format('Y-m-d H:i:s');
            $activity = $event->getString();
            $model = get_class($event->model);
            $table = $event->model->getTable();

            $logEntry = "[{$datetime}] User ID: {$userId}, Activity: {$activity}, Model: {$model}, Table: {$table}\n";
            Log::channel('activity')->info($logEntry);

            ActivityLog::create([
                'user_id' => $userId,
                'activity' => $activity,
                'module' => $model, // Assuming you want to store the model name in the 'module' column
                'table' => $table ?? null,
            ]);
        }
    }
}