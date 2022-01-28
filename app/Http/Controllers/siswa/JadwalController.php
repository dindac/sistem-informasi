<?php

namespace App\Http\Controllers\siswa;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\Kelas;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function show()
    {
        $jadwal_list = Jadwal::paginate(5);
        return view('siswa.jadwal.show', compact('jadwal_list'));
    }
}
