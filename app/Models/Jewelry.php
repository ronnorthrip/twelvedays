<?php

namespace App\Models;

use App\Traits\CanBeSung;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jewelry extends Model
{
    /** @use HasFactory<\Database\Factories\JewelryFactory> */
    use HasFactory, CanBeSung;

    protected $guarded = [];
}
