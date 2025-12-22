<?php

namespace App\Models;

use App\Traits\CanBeSung;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /** @use HasFactory<\Database\Factories\LocationFactory> */
    use HasFactory, CanBeSung;

    protected $guarded = [];
}
