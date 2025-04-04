<?php

namespace App\Models;

use Illuminate\Console\View\Components\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TaskStatus extends Model
{
    //
    use HasFactory;
    protected $table = 'task_statuses';

    protected $fillable = ['name'];

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
