<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $guarded = [];

    protected $table = 'pegawais';

    protected $fillable = [
        'nama_pegawai',
        'alamat',
        'nomor_telepon',
        'jabatan_id'
    ];

    
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
