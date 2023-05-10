<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teklif extends Model
{
    use HasFactory;

    protected $table = 'Teklif';

    protected $fillable = [
        'firma_id',
        'il',
        'ilce',
        'bina_islem',
        'bina_durumu',
        'oylama_orani',
        'created_at',
        'updated_at',
    ];

    public function firma()
    {
        return $this->belongsTo(Firma::class); // Firma modeline referans verin
    }
}
