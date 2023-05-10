<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Bina as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Bina extends Model
{
    use HasFactory, Notifiable, HasApiTokens, CanResetPassword;

    protected $table = 'bina';
    protected $fillable = [
        'resim',
        'il',
        'ilce',
        'mahalle',
        'sokak',
        'binaismi',
        'binano',
        'kapino',
        'binaislemi',
        'binayasi',
        'binadurumu',
        'oylamaorani',
        'yetkiliismi',
        'binareferansno',
    ];
}
