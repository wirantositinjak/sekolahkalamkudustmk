<!-- NAVBAR UTAMA -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #003366;">
  <div class="container">
    <!-- Tombol toggle untuk mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu Navigasi -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('guru') ? 'active' : '' }}" href="/guru">Guru & Staff</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('siswa') ? 'active' : '' }}" href="/siswa">Siswa / Kegiatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('berita') ? 'active' : '' }}" href="/berita">Berita & Pengumuman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('majalah-dinding') ? 'active' : '' }}" href="/majalah-dinding">Majalah Dinding</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('renungan') ? 'active' : '' }}" href="/renungan">Renungan</a>
        </li>

        <!-- Alumni Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ request()->is('alumni/*') ? 'active' : '' }}" href="#" id="alumniDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Alumni
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/alumni/kb-tk">KB-TK</a></li>
            <li><a class="dropdown-item" href="/alumni/sd">SD</a></li>
            <li><a class="dropdown-item" href="/alumni/smp">SMP</a></li>
            <li><a class="dropdown-item" href="/alumni/sma">SMA</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->is('galeri') ? 'active' : '' }}" href="/galeri">Galeri Foto & Video</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->is('tentang*') ? 'active' : '' }}" href="/tentang">Tentang Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
  .navbar-nav .nav-link {
    color: white !important;
    font-weight: 500;
    padding: 0.75rem 1rem;
    transition: all 0.2s ease;
  }

  .navbar-nav .nav-link.active,
  .navbar-nav .nav-link:hover {
    color: #FFD700 !important;
    text-decoration: underline;
  }

  .dropdown-menu {
    background-color: #003366;
  }

  .dropdown-item {
    color: white;
  }

  .dropdown-item:hover {
    background-color: #002244;
    color: #FFD700;
  }
</style>
