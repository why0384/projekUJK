<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $guarded = [];

    protected $table = 'jabatans';

    protected $fillable = [
        'nama_jabatan',
    ];

    /**
     * Relasi ke Pegawai (One to Many)
     */
    public function pegawais()
    {
        return $this->hasMany(Pegawai::class);
    }
}
