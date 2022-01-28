<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = ['nama_kelas'];

    public function murid()
    {
        return $this->hasMany(Murid::class, 'kelas_id');
    }
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'kelas_id');
    }
}