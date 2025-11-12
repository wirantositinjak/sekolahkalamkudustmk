<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() { return view('user.home'); }
    public function berita() { return view('user.berita'); }
    public function guru() { return view('user.guru'); }
    public function prestasi() { return view('user.prestasi'); }
    public function renungan() { return view('user.renungan'); }
    public function kegiatanSiswa() { return view('user.kegiatan_siswa'); }
    public function galeri() { return view('user.galeri'); }
    public function tentang() { return view('user.tentang'); }
    public function majalahDinding() { return view('user.majalah_dinding'); }

    // Tentang
    public function tentangKBTK() { return view('user.tentang.kbtk'); }
    public function tentangSD() { return view('user.tentang.sd'); }
    public function tentangSMP() { return view('user.tentang.smp'); }
    public function tentangSMA() { return view('user.tentang.sma'); }

    // Alumni
    public function alumniKBTK() { return view('user.alumni.kbtk'); }
    public function alumniSD() { return view('user.alumni.sd'); }
    public function alumniSMP() { return view('user.alumni.smp'); }
    public function alumniSMA() { return view('user.alumni.sma'); }
}
