<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hobbies extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
