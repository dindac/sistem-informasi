<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwal';

    protected $fillable = ['kelas_id', 'hari', 'mapel'];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
