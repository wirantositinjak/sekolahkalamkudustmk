@extends('layouts.app')

@section('content')
 
<div class="container my-5">
    <h2 class="text-center mb-4">Kegiatan Siswa</h2>

    <!-- NAVIGATION TAB -->
    <ul class="nav nav-tabs justify-content-center mb-4" id="kegiatanTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="tk-kb-tab" data-bs-toggle="tab" data-bs-target="#tk-kb" type="button" role="tab">
                TK - KB
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="sd-tab" data-bs-toggle="tab" data-bs-target="#sd" type="button" role="tab">
                SD
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="smp-tab" data-bs-toggle="tab" data-bs-target="#smp" type="button" role="tab">
                SMP
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="sma-tab" data-bs-toggle="tab" data-bs-target="#sma" type="button" role="tab">
                SMA
            </button>
        </li>
    </ul>

    <!-- TAB CONTENT -->
    <div class="tab-content" id="kegiatanTabsContent">
        <!-- TK-KB -->
        <div class="tab-pane fade show active" id="tk-kb" role="tabpanel">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="./images/logoskkk.png" class="card-img-top" alt="Kegiatan TK-KB">
                        <div class="card-body">
                            <h5 class="card-title">Belajar Sambil Bermain</h5>
                            <p class="card-text">Kegiatan edukatif yang dirancang untuk menumbuhkan kreativitas dan keceriaan anak-anak TK & KB.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="./images/logoskkk.png" class="card-img-top" alt="Kegiatan TK-KB 2">
                        <div class="card-body">
                            <h5 class="card-title">Perayaan Hari Kartini</h5>
                            <p class="card-text">Menanamkan nilai nasionalisme dan menghargai pahlawan perempuan Indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SD -->
        <div class="tab-pane fade" id="sd" role="tabpanel">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="./images/logoskkk.png" class="card-img-top" alt="Kegiatan SD">
                        <div class="card-body">
                            <h5 class="card-title">Lomba Sains dan Seni</h5>
                            <p class="card-text">Mengasah kemampuan akademik dan kreativitas siswa dalam ajang kompetitif yang menyenangkan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SMP -->
        <div class="tab-pane fade" id="smp" role="tabpanel">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="./images/logoskkk.png" class="card-img-top" alt="Kegiatan SMP">
                        <div class="card-body">
                            <h5 class="card-title">Retreat Rohani</h5>
                            <p class="card-text">Menumbuhkan spiritualitas dan karakter Kristiani melalui kegiatan bersama di luar sekolah.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SMA -->
        <div class="tab-pane fade" id="sma" role="tabpanel">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="./images/logoskkk.png" class="card-img-top" alt="Kegiatan SMA">
                        <div class="card-body">
                            <h5 class="card-title">Bakti Sosial</h5>
                            <p class="card-text">Siswa SMA Kalam Kudus belajar menjadi berkat dengan membantu masyarakat sekitar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
.nav-tabs .nav-link {
    font-weight: 600;
    color: #555;
}
.nav-tabs .nav-link.active {
    color: #0d6efd;
    border-bottom: 3px solid #0d6efd;
}
.card {
    transition: transform 0.2s ease-in-out;
}
.card:hover {
    transform: scale(1.03);
}
</style>

@endsection
