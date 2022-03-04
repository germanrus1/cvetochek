<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    protected $fillable = ['chat_id', 'name', 'description', 'isActive'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    use HasFactory;
}
