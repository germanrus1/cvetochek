<?php

namespace App\Models;

/**
 * App\Models\ChatUser
 *
 * @property int $id
 * @property string $chat_id
 * @property string $username
 * @property string $login
 * @property bool $isActive
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 */
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatUser extends Model
{
    protected $fillable = ['chat_id', 'username', 'login', 'isActive'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    use HasFactory;
}
