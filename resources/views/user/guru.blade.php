@extends('layouts.app')

@section('content')
    

<section class="py-5">
  <div class="container">
    <!-- Judul Halaman -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-primary">Guru & Staff</h2>
      <p class="text-secondary">Profil para pendidik dan staff Sekolah Kristen Kalam Kudus Timika</p>
    </div>

    <!-- Grid Card Guru -->
    <div class="row g-4">
      @php
        $guruList = [
          [
            'img' => 'fotoguru.jpg',
            'nama' => 'Ibu Maria Lestari, S.Pd',
            'ttl' => 'Timika, 12 Maret 1985',
            'mengajar' => 'Guru Kelas SD',
            'sertifikat' => 'Sertifikat Pendidik Nasional',
            'facebook' => '#',
            'instagram' => '#',
            'youtube' => '#'
          ],
          [
            'img' => 'fotoguru.jpg',
            'nama' => 'Bapak Yohanes Situmorang, M.Pd',
            'ttl' => 'Medan, 25 Agustus 1982',
            'mengajar' => 'Guru Matematika SMP',
            'sertifikat' => 'Sertifikat Profesional Guru',
            'facebook' => '#',
            'instagram' => '#',
            'youtube' => '#'
          ],
          [
            'img' => 'fotoguru.jpg',
            'nama' => 'Ibu Natalia Widjaja, S.Th',
            'ttl' => 'Surabaya, 5 Juli 1988',
            'mengajar' => 'Guru Agama Kristen',
            'sertifikat' => 'Sertifikat Pelayanan Pendidikan',
            'facebook' => '#',
            'instagram' => '#',
            'youtube' => '#'
          ],
          [
            'img' => 'fotoguru.jpg',
            'nama' => 'Bapak Samuel Manalu, S.Kom',
            'ttl' => 'Jakarta, 9 Januari 1990',
            'mengajar' => 'Guru Teknologi Informasi',
            'sertifikat' => 'Sertifikat Kompetensi IT',
            'facebook' => '#',
            'instagram' => '#',
            'youtube' => '#'
          ],

          [
            'img' => 'fotoguru.jpg',
            'nama' => 'Bapak Samuel Manalu, S.Kom',
            'ttl' => 'Jakarta, 9 Januari 1990',
            'mengajar' => 'Guru Teknologi Informasi',
            'sertifikat' => 'Sertifikat Kompetensi IT',
            'facebook' => '#',
            'instagram' => '#',
            'youtube' => '#'
          ],

          [
            'img' => 'fotoguru.jpg',
            'nama' => 'Bapak Samuel Manalu, S.Kom',
            'ttl' => 'Jakarta, 9 Januari 1990',
            'mengajar' => 'Guru Teknologi Informasi',
            'sertifikat' => 'Sertifikat Kompetensi IT',
            'facebook' => '#',
            'instagram' => '#',
            'youtube' => '#'
          ],

          [
            'img' => 'fotoguru.jpg',
            'nama' => 'Bapak Samuel Manalu, S.Kom',
            'ttl' => 'Jakarta, 9 Januari 1990',
            'mengajar' => 'Guru Teknologi Informasi',
            'sertifikat' => 'Sertifikat Kompetensi IT',
            'facebook' => '#',
            'instagram' => '#',
            'youtube' => '#'
          ],

          [
            'img' => 'fotoguru.jpg',
            'nama' => 'Bapak Samuel Manalu, S.Kom',
            'ttl' => 'Jakarta, 9 Januari 1990',
            'mengajar' => 'Guru Teknologi Informasi',
            'sertifikat' => 'Sertifikat Kompetensi IT',
            'facebook' => '#',
            'instagram' => '#',
            'youtube' => '#'
          ],

          [
            'img' => 'fotoguru.jpg',
            'nama' => 'Bapak Samuel Manalu, S.Kom',
            'ttl' => 'Jakarta, 9 Januari 1990',
            'mengajar' => 'Guru Teknologi Informasi',
            'sertifikat' => 'Sertifikat Kompetensi IT',
            'facebook' => '#',
            'instagram' => '#',
            'youtube' => '#'
          ],
        ];
      @endphp

      @foreach ($guruList as $guru)
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="card shadow-sm border-0 h-100 text-center guru-card">
          <img src="images/{{ $guru['img'] }}"> 
               class="card-img-top guru-photo" 
               alt="{{ $guru['nama'] }}">

          <div class="card-body">
            <h5 class="card-title fw-bold">{{ $guru['nama'] }}</h5>
            <p class="text-muted mb-1"><i class="bi bi-calendar2-heart"></i> {{ $guru['ttl'] }}</p>
            <p class="text-muted mb-1"><i class="bi bi-book"></i> {{ $guru['mengajar'] }}</p>
            <p class="text-muted"><i class="bi bi-award"></i> {{ $guru['sertifikat'] }}</p>

            <div class="d-flex justify-content-center gap-3 mt-3">
              <a href="{{ $guru['facebook'] }}" target="_blank" class="text-decoration-none text-primary fs-5">
                <i class="bi bi-facebook"></i>
              </a>
              <a href="{{ $guru['instagram'] }}" target="_blank" class="text-decoration-none text-danger fs-5">
                <i class="bi bi-instagram"></i>
              </a>
              <a href="{{ $guru['youtube'] }}" target="_blank" class="text-decoration-none text-danger fs-5">
                <i class="bi bi-youtube"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


<style>
  .guru-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 15px;
  }

  .guru-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
  }

  .guru-photo {
    height: 250px;
    object-fit: cover;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
  }

  @media (max-width: 768px) {
    .guru-photo {
      height: 200px;
    }
  }
</style>

@endsection
