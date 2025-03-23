<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'tgl_periksa',
        'catatan',
        'biaya_periksa',
    ];

    // relasi belongsTo digunain ditable penyambung (yang punya foreign key)
    // Setiap Periksa hanya dimiliki oleh satu User sebagai pasien/dokter.
    // belongsTo artinya Many-to-One
    
    public function pasien(){
        return $this->belongsTo(User:: class, 'id_pasien');
    }
    public function dokter(){
        return $this->belongsTo(User:: class, 'id_dokter');
    }
    // relasi One-to-Many - Satu pemeriksaan bisa memiliki banyak detail_periksa
    public function detail_periksa(){
        return $this->hasMany(Detail_Periksa:: class, 'id_periksa', 'id');
    }
}
// penugasan senin
// migration detail_periksa dan obat (coment:link dan ss migration detail_periksa dan obat & model migration detail_periksa dan obat & ss terminal)