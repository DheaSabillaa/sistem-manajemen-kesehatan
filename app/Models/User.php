<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    //data bisa diinput
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'role',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    // relasi One to Many
    // digunain di table parent (foreign key user_id)
    // Menunjukkan bahwa satu User (sebagai pasien) dapat memiliki banyak data pemeriksaan (periksa)
    public function periksa_pasien(){
        return $this->hasMany(Periksa:: class, 'id_pasien', 'id');
    }
    // Menunjukkan bahwa satu User (sebagai dokter) dapat memiliki banyak data pemeriksaan (periksa).
    public function periksa_dokter(){
        return $this->hasMany(Periksa:: class, 'id_dokter', 'id');
    }
}
