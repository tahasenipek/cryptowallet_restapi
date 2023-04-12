<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'network',
        'wallet_address',
        'wallet_network',
        'wallet_balance_usd',
        'wallet_balance_eur',
        'wallet_balance_try',
    ];
}
