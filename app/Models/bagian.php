<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bagian extends Model
{
    protected $table = 'bagians';
    protected $fillable = ['name'];

    public function pegawai()
    {
        return $this->hasMany(pegawai::class);
    }
}
