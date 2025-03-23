<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_Periksa extends Model
{
    protected $fillable = [
        'id_pasien',
        'id_obat',
    ];
    public function pasien(){
        return $this->hasMany(User:: class, 'id, id_pasien');
    }
    public function obat(){
        return $this->hasMany(User:: class, 'id_dokter');
    }
}
