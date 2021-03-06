<?php

namespace Domain\Tesk\Models;

use Domain\Tesk\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Task extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task',
        'category',
        'status',
    ];

    public function getStatusAttribute($value)
    {
        return TaskStatus::status($value);
    }
}