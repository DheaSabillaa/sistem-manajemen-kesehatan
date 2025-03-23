<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_Periksa extends Model
{
    protected $fillable = [
        'id_periksa',
        'id_obat',
    ];
   
    // Relasi Many-to-One ke tabel Periksa - Setiap detail_periksa dimiliki oleh satu periksa
    public function detailPeriksa()
    {
        return $this->belongsTo(Periksa::class, 'id_periksa', 'id');
    }

}
