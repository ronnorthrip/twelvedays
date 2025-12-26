<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Day extends Model
{
    /** @use HasFactory<\Database\Factories\DayFactory> */
    use HasFactory;

    protected $guarded = [];

    public function lyrics(): HasMany
    {
        return $this->hasMany(Singable::class)->orderBy('id');
    }
}
