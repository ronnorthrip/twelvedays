<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Singable extends Model
{
    protected $guarded = [];

    public function day(): BelongsTo
    {
        return $this->belongsTo(Day::class);
    }
}
