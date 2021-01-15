<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    public function reply_replies()
    {
        return $this->hasMany(ReplyReply::class);
    }

    public function reply_likes()
    {
        return $this->hasMany(ReplyLike::class);
    }
}