<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hobbies extends Model
{
    protected $fillable = [
        'hobbie_name',
        'description',
        'started_date'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
