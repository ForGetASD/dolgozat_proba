<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingatlanok extends Model
{
    use HasFactory;

    protected $fillable = [
        "kategoria",
        "leiras",
        "hirdetesDatuma",
        "tehermentes",
        "ar",
        "kepUrl"
    ];
}
