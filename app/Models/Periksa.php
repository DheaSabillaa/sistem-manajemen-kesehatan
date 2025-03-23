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
    public function pasien(){
        return $this->belongsTo(User:: class, 'id_pasien');
    }
    public function dokter(){
        return $this->belongsTo(User:: class, 'id_dokter');
    }
}
// penugasan senin
// migration detail_periksa dan obat (coment:link dan ss migration detail_periksa dan obat & model migration detail_periksa dan obat & ss terminal)