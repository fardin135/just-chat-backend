<?php

namespace App\Models;

use App\Models\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MessageAttachment extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'message_id',
        'name',
        'path',
        'mime',
        'size',
    ];

    // Relationships
    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
