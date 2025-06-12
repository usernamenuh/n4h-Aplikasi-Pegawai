<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = 'pegawais';
    protected $fillable = [
        'name',
        'email',
        'jabatan',
        'alamat',
        'jenis_kelamin',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'pegawais_id');
    }

    public function bagian() {
        return $this->belongsTo(Bagian::class);
    }
}
