<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crypto_money extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'symbol',
        'max_supply',
        'circulating_supply',
        'total_supply',
        'platform',
        'price',
    ];
}
