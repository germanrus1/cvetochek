<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\chat
 *
 * @property int $id
 * @property string $name
 * @property string $chat_id
 * @property string $description
 * @property bool $isActive
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 */

class chat extends Model
{
    protected $fillable = ['chat_id', 'name', 'description', 'isActive'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    use HasFactory;
}
