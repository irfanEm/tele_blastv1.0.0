<?php

namespace App\Models;

use App\Models\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BroadcastMessage extends Model
{
    public function message(): BelongsTo
    {
        return $this->belongsTo(Message::class);
    }
}
