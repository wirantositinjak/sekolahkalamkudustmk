@extends('layouts.app')

@section('content')
   

<!-- Banner Full Width -->

<div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
  
  <!-- Titik indikator -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
    <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="2"></button>
  </div>

  <!-- Gambar Banner -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/banner1.jpg') }}" class="d-block w-100" style="height: 600px; object-fit: cover;" alt="Banner 1">
      <div class="carousel-caption d-flex justify-content-end align-items-end h-100 p-4">
        <div class="card bg-dark bg-opacity-50 text-end text-white p-4 shadow-lg" style="max-width: 450px; border-radius: 15px;">
          <h2 class="fw-bold">Selamat Datang di Sekolah Kristen Kalam Kudus</h2>
          <p class="mb-3">
            PARENTS AS A TEACHER<br>
            KBTK KRISTEN KALAM KUDUS TIMIKA<br>
            Pendidikan anak usia dini adalah sebuah perjalanan kolaboratif antara sekolah dan rumah.
            Di KBTK Kristen Kalam Kudus Timika, kami percaya bahwa setiap anak unik dan berharga.
          </p>
          <a href="/tentang" class="btn btn-outline-light btn-sm fw-semibold rounded-pill px-3">Baca Selengkapnya</a>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ asset('images/banner2.jpg') }}" class="d-block w-100" style="height: 600px; object-fit: cover;" alt="Banner 2">
      <div class="carousel-caption d-flex justify-content-end align-items-end h-100 p-4">
        <div class="card bg-dark bg-opacity-50 text-end text-white p-4 shadow-lg" style="max-width: 450px; border-radius: 15px;">
          <h2 class="fw-bold">Mendidik dengan Kasih dan Kebenaran</h2>
          <p class="mb-3">
            Kami berkomitmen menanamkan nilai-nilai Kristiani dan kecerdasan moral
            agar setiap siswa menjadi pribadi yang berkarakter, cerdas, dan berintegritas.
          </p>
          <a href="/tentang" class="btn btn-outline-light btn-sm fw-semibold rounded-pill px-3">Baca Selengkapnya</a>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ asset('images/banner3.jpg') }}" class="d-block w-100" style="height: 600px; object-fit: cover;" alt="Banner 3">
      <div class="carousel-caption d-flex justify-content-end align-items-end h-100 p-4">
        <div class="card bg-dark bg-opacity-50 text-end text-white p-4 shadow-lg" style="max-width: 450px; border-radius: 15px;">
          <h2 class="fw-bold">Mewujudkan Generasi Emas yang Beriman</h2>
          <p class="mb-3">
            Melalui pendidikan yang menyeluruh, Kalam Kudus Timika membantu siswa
            bertumbuh dalam iman, pengetahuan, dan karakter untuk masa depan yang gemilang.
          </p>
          <a href="/tentang" class="btn btn-outline-light btn-sm fw-semibold rounded-pill px-3">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Tombol navigasi -->
  <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </button>
</div>

<div class="container py-4">
<!-- Section: Apa Itu Smart -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5" style="color:#0d47a1;">Apa Itu Smart?</h2>
    <div class="row align-items-center">
      
      <!-- Kolom Gambar -->
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="{{ asset('images/anaksekolah.jpg') }}" alt="Apa Itu Smart" class="img-fluid rounded-4 shadow">
      </div>

      <!-- Kolom Teks -->
      <div class="col-md-6">
        <h4 class="fw-semibold text-primary mb-3">Membentuk pribadi yang SMART</h4>
        <p class="text-secondary" style="text-align: justify;">
          SMART adalah suatu framework atau kerangka pikir yang memberikan acuan, arah, dan peta bagi SKKK Yogyakarta dalam merancang dan menjalankan seluruh strategi, program, dan kegiatan — baik dalam hal kurikulum, proses belajar mengajar, kegiatan non akademik, pembinaan spiritual dan karakter, pengembangan sarana dan prasarana, hingga pengelolaan SDM, serta keseluruhan aspek pengelolaan dan pengembangan sekolah lainnya.
        </p>
        <p class="text-secondary" style="text-align: justify;">
          Dengan SMART, seluruh guru dan murid di Kalam Kudus diharapkan untuk:
        </p>
        <ol>
            <li>Bertumbuh secara Spiritual (S)</li>
            <li>Mengerjakan Misi Kasih Allah (M)</li>
            <li>Unggul dalam hal Akademik (A)</li>
            <li>Menjalin Relasi yang Baik (R)</li>
            <li>Memberikan Dampak Transformatif (T)</li>
        </ol>
           
        <br>
        <a href="/tentang" class="btn btn-primary rounded-pill fw-semibold px-4 py-2 shadow-sm">
          Selengkapnya
        </a>
      </div>

    </div>
  </div>
</section>

<!-- Section: Pengumuman Sekolah -->
<section class="py-5 bg-white">
  <div class="container position-relative">
    <!-- Judul + Tombol "Lihat Semua" -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="fw-bold mb-0" style="color:#0d47a1;">Pengumuman Sekolah</h2>
      <a href="/tentang" class="btn btn-outline-primary rounded-pill fw-semibold">
        Lihat Semua
      </a>
    </div>

    <!-- Wrapper untuk Scroll Horizontal -->
    <div class="announcement-slider d-flex overflow-auto pb-3" id="announcementSlider">
      
      @for ($i = 1; $i <= 10; $i++)
      <div class="card announcement-card me-3 flex-shrink-0" style="width: 300px; position: relative;">
        <!-- Mark Label -->
        <span class="badge bg-danger position-absolute top-0 end-0 m-2 px-3 py-2 shadow-sm" style="border-radius: 1rem;">
          Baru
        </span>

        <!-- Gambar -->
        <img src="{{ asset('images/pengumuman' . $i . '.jpg') }}" class="card-img-top rounded-top" alt="Pengumuman {{ $i }}" style="height:180px; object-fit: cover;">

        <!-- Isi Card -->
        <div class="card-body d-flex flex-column justify-content-between">
          <p class="card-text text-secondary" style="min-height: 60px; text-align: justify;">
            {{ \Illuminate\Support\Str::words('Pemberitahuan penting bagi orang tua murid terkait kegiatan sekolah minggu depan. Pastikan hadir dalam pertemuan.', 20, '...') }}
          </p>
          <a href="/tentang" class="btn btn-outline-primary mt-2 rounded-pill fw-semibold">Baca Selengkapnya</a>
        </div>
      </div>
      @endfor

    </div>
  </div>
</section>

<!-- Section: FASILITAS -->
<section class="py-5 bg-light">
  <div class="container">
    <!-- Judul -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-primary">FASILITAS</h2>
      <p class="text-secondary">Berbagai fasilitas pendukung kegiatan belajar dan pengembangan siswa di Sekolah Kristen Kalam Kudus Timika</p>
    </div>

    <!-- Grid Fasilitas -->
    <div class="row g-4 justify-content-center">
      @php
        $fasilitas = [
          ['img' => 'fasilitas1.jpg', 'title' => 'Lapangan Basket'],
          ['img' => 'fasilitas2.jpg', 'title' => 'Laboratorium Komputer'],
          ['img' => 'fasilitas3.jpg', 'title' => 'Perpustakaan'],
          ['img' => 'fasilitas4.jpg', 'title' => 'Ruang Musik'],
          ['img' => 'fasilitas5.jpg', 'title' => 'Lapangan Futsal'],
          ['img' => 'fasilitas6.jpg', 'title' => 'Ruang Kelas Nyaman'],
          ['img' => 'fasilitas7.jpg', 'title' => 'Kantin Sekolah'],
          ['img' => 'fasilitas8.jpg', 'title' => 'Area Bermain Anak'],
          ['img' => 'fasilitas9.jpg', 'title' => 'Aula Serbaguna'],
            ['img' => 'fasilitas10.jpg', 'title' => 'Ruang Seni Rupa'],
            ['img' => 'fasilitas9.jpg', 'title' => 'Aula Serbaguna'],
            ['img' => 'fasilitas10.jpg', 'title' => 'Ruang Seni Rupa'],
        ];
      @endphp

      @foreach ($fasilitas as $item)
      <div class="col-6 col-md-4 col-lg-3">
        <div class="facility-card position-relative overflow-hidden rounded-4 shadow-sm">
          <img src="{{ asset('images/'.$item['img']) }}" 
               alt="{{ $item['title'] }}" 
               class="img-fluid w-100 facility-img">
          <div class="facility-overlay d-flex align-items-center justify-content-center">
            <h5 class="text-white text-center fw-semibold">{{ $item['title'] }}</h5>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>


<!-- Section: Prestasi -->
<section class="py-5 bg-white">
  <div class="container position-relative">
    <!-- Judul + Tombol "Lihat Semua" -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="fw-bold mb-0" style="color:#0d47a1;">Prestasi</h2>
      <a href="/prestasi" class="btn btn-outline-primary rounded-pill fw-semibold">
        Lihat Semua
      </a>
    </div>

    <!-- Wrapper untuk Scroll Horizontal -->
    <div class="announcement-slider d-flex overflow-auto pb-3" id="announcementSlider">
      
      @for ($i = 1; $i <= 10; $i++)
      <div class="card announcement-card me-3 flex-shrink-0" style="width: 300px; position: relative;">
        <!-- Mark Label -->
        <span class="badge bg-danger position-absolute top-0 end-0 m-2 px-3 py-2 shadow-sm" style="border-radius: 1rem;">
          Baru
        </span>

        <!-- Gambar -->
        <img src="{{ asset('images/pengumuman' . $i . '.jpg') }}" class="card-img-top rounded-top" alt="Pengumuman {{ $i }}" style="height:180px; object-fit: cover;">

        <!-- Isi Card -->
        <div class="card-body d-flex flex-column justify-content-between">
          <p class="card-text text-secondary" style="min-height: 60px; text-align: justify;">
            {{ \Illuminate\Support\Str::words('Pemberitahuan penting bagi orang tua murid terkait kegiatan sekolah minggu depan. Pastikan hadir dalam pertemuan.', 20, '...') }}
          </p>
          <a href="/berita" class="btn btn-outline-primary mt-2 rounded-pill fw-semibold">Baca Selengkapnya</a>
        </div>
      </div>
      @endfor

    </div>
  </div>
</section>


<!-- Section: Prestasi -->
<section class="py-5 bg-white">
  <div class="container position-relative">
    <!-- Judul + Tombol "Lihat Semua" -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="fw-bold mb-0" style="color:#0d47a1;">Berita</h2>
      <a href="{{ url('/berita') }}" class="btn btn-outline-primary rounded-pill fw-semibold">
        Lihat Semua
      </a>
    </div>

    <!-- Wrapper untuk Scroll Horizontal -->
    <div class="announcement-slider d-flex overflow-auto pb-3" id="announcementSlider">
      
      @for ($i = 1; $i <= 10; $i++)
      <div class="card announcement-card me-3 flex-shrink-0" style="width: 300px; position: relative;">
        <!-- Mark Label -->
        <span class="badge bg-danger position-absolute top-0 end-0 m-2 px-3 py-2 shadow-sm" style="border-radius: 1rem;">
          Baru
        </span>

        <!-- Gambar -->
        <img src="{{ asset('images/pengumuman' . $i . '.jpg') }}" class="card-img-top rounded-top" alt="Pengumuman {{ $i }}" style="height:180px; object-fit: cover;">

        <!-- Isi Card -->
        <div class="card-body d-flex flex-column justify-content-between">
          <p class="card-text text-secondary" style="min-height: 60px; text-align: justify;">
            {{ \Illuminate\Support\Str::words('Pemberitahuan penting bagi orang tua murid terkait kegiatan sekolah minggu depan. Pastikan hadir dalam pertemuan.', 20, '...') }}
          </p>
          <a href="/tentang" class="btn btn-outline-primary mt-2 rounded-pill fw-semibold">Baca Selengkapnya</a>
        </div>
      </div>
      @endfor

    </div>
  </div>
</section>
</div>

<style>

     .facility-card {
    height: 250px;
    position: relative;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .facility-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
  }

  .facility-card:hover .facility-img {
    transform: scale(1.1);
  }

  .facility-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    background: rgba(0,0,0,0.5);
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .facility-card:hover .facility-overlay {
    opacity: 1;
  }

  .facility-overlay h5 {
    background: rgba(0,0,0,0.6);
    padding: 8px 16px;
    border-radius: 12px;
  }

  @media (max-width: 767px) {
    .facility-card {
      height: 180px;
    }
  }

    .announcement-slider::-webkit-scrollbar {
    height: 8px;
  }
  .announcement-slider::-webkit-scrollbar-thumb {
    background-color: #0d47a1;
    border-radius: 10px;
  }
  .announcement-slider::-webkit-scrollbar-track {
    background: #e0e0e0;
  }
  .announcement-card {
    border: none;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    border-radius: 16px;
    transition: all 0.3s ease;
  }
  .announcement-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.15);
  }

  
  .carousel-caption {
    bottom: 30px;
  }

  .carousel-caption .card {
    animation: fadeInUp 1s ease-in-out;
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>


<!-- Script Auto Scroll -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const slider = document.getElementById("announcementSlider");
    const scrollStep = 1;
    let isHovered = false;

    slider.addEventListener("mouseenter", () => isHovered = true);
    slider.addEventListener("mouseleave", () => isHovered = false);

    function autoScroll() {
      if (!isHovered) {
        slider.scrollLeft += scrollStep;
        if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth - 1) {
          slider.scrollLeft = 0;
        }
      }
    }

    setInterval(autoScroll, 20);
  });
</script>


@endsection
