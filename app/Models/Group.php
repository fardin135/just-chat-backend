<?php

namespace App\Models;

use App\Models\User;
use App\Models\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'owner_id',
        'last_message_id',
        'name',
        'description',
        'avatar',
        'group_image',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'group_users');
    }

    public function messages()
    {
        return $this->hasMany(related: Message::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
