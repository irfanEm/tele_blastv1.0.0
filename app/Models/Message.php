<?php

namespace App\Models;

use App\Models\BroadcastMessage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Message extends Model
{
    public function broadcast_message(): HasOne
    {
        return $this->hasOne(BroadcastMessage::class);
    }
}
