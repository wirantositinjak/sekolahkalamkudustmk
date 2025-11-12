<footer class="footer text-white mt-5">
  <div class="container py-5">
    <div class="row">
      <!-- Kiri: Logo + Tagline + Sosmed + Peta -->
      <div class="col-md-6 mb-4 mb-md-0 text-center text-md-start">
        <img src="{{ asset('images/skkk_timika_footer.png') }}" 
             alt="Logo Sekolah Kalam Kudus Timika" 
             class="img-fluid mb-3" 
             style="max-height: 90px;">
        
        <p class="fw-semibold fst-italic mb-4" style="font-size: 0.95rem;">
          “Terbangunnya Manusia Utuh yang Takut akan Tuhan, Mandiri, dan Berguna bagi Dunia.”
        </p>

        <!-- Sosial Media -->
        <div class="d-flex justify-content-center justify-content-md-start gap-3 mb-3">
          <a href="https://www.facebook.com/kalamkudustmk.sch.id" target="_blank" class="text-white fs-4">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://www.instagram.com/kalamkudustmk/" target="_blank" class="text-white fs-4">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://www.youtube.com/c/kalamkudustmk" target="_blank" class="text-white fs-4">
            <i class="bi bi-youtube"></i>
          </a>
        </div>

        <!-- Peta Lokasi -->
        <div class="map-container mt-3">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.2739735916791!2d136.8859101!3d-4.576795499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6823794984c2e0b7%3A0xd0d0fa7ff0c5413b!2sKalam%20kudus!5e0!3m2!1sid!2sid!4v1762484020949!5m2!1sid!2sid" 
            width="100%" 
            height="200" 
            style="border:0; border-radius: 10px;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

      <!-- Kanan: Form Hubungi Kami -->
      <div class="col-md-6">
        <h5 class="fw-bold mb-3 text-center text-md-start">Hubungi Kami</h5>
        <form action="#" method="POST" class="footer-form">
          @csrf
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Nama Lengkap" required>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Alamat Email" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Nomor Telepon" required>
          </div>
          <div class="mb-3">
            <textarea class="form-control" rows="3" placeholder="Pesan Anda..." required></textarea>
          </div>
          <div class="text-center text-md-start">
            <button type="submit" class="btn btn-warning fw-semibold px-4">
              Kirim
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Garis bawah footer -->
  <div class="footer-bottom text-center py-3 mt-4">
    <small>© {{ date('Y') }} Sekolah Kristen Kalam Kudus Timika. All rights reserved.</small>
  </div>
</footer>

<style>
  /* Footer Style */
  
  .footer {
    margin-top: auto;
    background: linear-gradient(135deg, #002b5b 0%, #004e92 100%);
    border-top: 4px solid #FFD700;
  }

  .footer .form-control {
    border: none;
    border-radius: 10px;
    padding: 0.75rem 1rem;
    font-size: 0.9rem;
  }

  .footer .form-control:focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 215, 0, 0.4);
    outline: none;
  }

  .footer .btn-warning {
    background-color: #FFD700;
    color: #002b5b;
    border-radius: 10px;
    transition: all 0.3s ease;
  }

  .footer .btn-warning:hover {
    background-color: #ffc107;
    transform: translateY(-2px);
  }

  .footer-bottom {
    background-color: rgba(0, 0, 0, 0.1);
    color: #f0f0f0;
    font-size: 0.85rem;
  }

  /* Map container */
  .map-container iframe {
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
  }
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }

  /* Responsif */
  @media (max-width: 768px) {
    .footer .form-control {
      font-size: 0.85rem;
    }
  }
</style>
