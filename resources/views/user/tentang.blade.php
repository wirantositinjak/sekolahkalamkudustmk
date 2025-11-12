@extends('layouts.app')

@section('content')
    
<div class="container my-5">
    <h2 class="text-center fw-bold mb-4">Tentang Kami</h2>

    <!-- Sub Navbar -->
    <div class="sub-nav overflow-auto mb-4">
        <ul class="nav nav-pills justify-content-center flex-nowrap">
            <li class="nav-item"><a class="nav-link {{ request()->is('tentang/kb-tk') ? 'active' : '' }}" href="{{ url('/tentang/kb-tk') }}">KB-TK</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('tentang/sd') ? 'active' : '' }}" href="{{ url('/tentang/sd') }}">SD</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('tentang/smp') ? 'active' : '' }}" href="{{ url('/tentang/smp') }}">SMP</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('tentang/sma') ? 'active' : '' }}" href="{{ url('/tentang/sma') }}">SMA</a></li>
            <li class="nav-item"><a class="nav-link {{ request()->is('/prestasi') ? 'active' : '' }}" href="{{ url('/prestasi') }}">Prestasi Siswa</a></li>
        </ul>
    </div>

    

     <!-- LOGO -->
  <div class="flex flex-col items-center text-center mb-10">
    <img src="{{ asset('images/logoskkk.png') }}" alt="Logo Kalam Kudus" class="w-32 h-32 mb-4">
    <h1 class="text-3xl font-bold text-gray-800">Makna Logo Kalam Kudus</h1>
    <div class="w-24 h-1 bg-blue-600 mt-2"></div>
  </div>

  <!-- ISI MAKNA LOGO -->
  <div class="space-y-8 text-gray-700 leading-relaxed max-w-3xl mx-auto">
    <div>
      <h2 class="text-2xl font-semibold text-blue-700 mb-2">Warna Biru</h2>
      <p>
        Warna biru melambangkan <strong>kebijaksanaan, kedamaian, dan iman</strong>. 
        Biru mencerminkan suasana tenang dan ketulusan hati dalam menjalankan visi 
        pendidikan yang berpusat pada Kristus.
      </p>
    </div>

    <div>
      <h2 class="text-2xl font-semibold text-red-700 mb-2">Warna Merah</h2>
      <p>
        Warna merah melambangkan <strong>semangat, keberanian, dan kasih</strong>. 
        Ini menggambarkan tekad sekolah Kalam Kudus untuk mencetak generasi yang penuh 
        kasih dan berani menghadapi tantangan dengan iman dan karakter Kristiani.
      </p>
    </div>
  </div>



<br>

  <!-- BAGIAN LOGO + MAKNA -->
  <div class="row align-items-start justify-content-center mb-5">
    <!-- Gambar Logo -->
    <div class="col-12 col-md-5 text-center mb-4 mb-md-0">
      <img src="{{ asset('images/makna.png') }}" 
           alt="Makna Logo Kalam Kudus" 
           class="img-fluid rounded shadow-sm" 
           style="max-width: 100%; height: auto;">
    </div>

    <!-- Penjelasan -->
    <div class="col-12 col-md-7">
      <div class="mb-4">
        <h4 class="fw-bold text-primary">1. Perisai</h4>
        <p class="text-secondary" style="text-align: justify;">
          Perisai merupakan metafora dari iman, di mana salah satu unsur iman adalah pengetahuan (notitia). 
          Pendidikan yang diberikan dalam SKKK adalah pendidikan yang terintegrasi dengan firman Tuhan yang 
          adalah Alkitab, sehingga melalui pendidikan yang diberikan, murid-murid SKKK mengetahui apa yang 
          dipercayainya.
        </p>
      </div>

      <div>
        <h4 class="fw-bold text-primary">2. Lambang Salib</h4>
        <p class="text-secondary" style="text-align: justify;">
          Salib menunjuk pada tindakan penebusan (<em>redemption</em>) yang Yesus Kristus telah lakukan. 
          Tindakan penebusan ini membawa gambar dan rupa Allah yang telah rusak dapat dipulihkan untuk 
          semakin hari semakin serupa dengan Yesus Kristus, gambar Allah yang sulung. Melalui penebusan 
          Kristus, setiap stakeholder dalam SKKK semakin hari semakin serupa dengan Yesus Kristus, gambar 
          Allah yang sulung tersebut.
        </p>
      </div>

      <div>
        <h4 class="fw-bold text-primary">3. Alkitab</h4>
        <p class="text-secondary" style="text-align: justify;">
          Selain lambang salib, ada lambang Alkitab. Dalam menjalankan sebuah kegiatannya, semua stakeholder SKKK menjadikan Alkitab, Perjanjian Lama dan Perjanjian Baru sebagai dasar dan landasannya.
        </p>
      </div>

      <div>
        <h4 class="fw-bold text-primary">4. Tulisan Kalam Kudus dan singkatannya dalam dua huruf, yaitu KK</h4>
        <p class="text-secondary" style="text-align: justify;">
          KK menunjukkan identitas sekolah. Tulisan Kalam Kudus ditulis dalam sebuah pita berwarna merah yang berarti bahwa setiap unit SKKK dipersatukan oleh sebuah ikatan persaudaraan dalam tubuh Kristus. Ikatan persaudaraan ini yang membuat SKKK menjadi kuat dan dapat memberikan dampak nyata bagi dunia pendidikan.
        </p>
      </div>

    </div>
  </div>

  
  <div class="flex flex-col items-center text-center mb-10">
    <h1 class="text-3xl font-bold text-gray-800">VISI & MISI</h1>
    <div class="w-24 h-1 bg-blue-600 mt-2"></div>
  </div>

  <div>
      <h2 class="text-2xl font-semibold text-red-700 mb-2">VISI</h2>
      <p>
        Terbangunnya manusia utuh yang takut akan Tuhan, mandiri, dan berguna bagi dunia.
      </p>
    </div>

    <div>
      <h2 class="text-2xl font-semibold text-red-700 mb-2">MISI</h2>
     <ol >
            <li>Mengajak murid, tenaga pendidik, dan tenaga kependidikan untuk memiliki hati yang takut akan Tuhan.</li>
            <li>Membimbing murid, tenaga pendidik, dan tenaga kependidikan supaya mengasihi sesama manusia dan menghargai lingkungan alam ciptaan Tuhan.</li>
            <li>Membina murid, tenaga pendidik, dan tenaga kependidikan bertumbuh menjadi manusia yang sehat mental, berbudi pekerti luhur, dan bertanggung jawab sesuai nilai kebenaran.</li>
            <li>Memberikan pengetahuan yang berkualitas kepada murid, tenaga pendidik, dan tenaga kependidikan sesuai tuntutan perkembangan zaman.</li>
            <li>Melengkapi murid, tenaga pendidik, dan tenaga kependidikan dengan keterampilan yang berkualitas sesuai kebutuhan dan potensi untuk pengembangan dirinya.</li>
            <li>Memberdayakan semua yang berkepentingan untuk menjadi insan pendidikan.</li>
        </ol>
    </div>
<br>
  <div>
    <div class="flex flex-col items-center text-center mb-10">
    <img src="{{ asset('images/nilaiinti.jpg') }}" alt="Logo Kalam Kudus" class="w-32 h-32 mb-4">
    <h1 class="text-3xl font-bold text-gray-800">Nilai Inti (Core Value)</h1>
    <div class="w-24 h-1 bg-blue-600 mt-2"></div>
  </div>

  <!-- ISI MAKNA LOGO -->
  <div class="space-y-8 text-gray-700 leading-relaxed max-w-3xl mx-auto">
    <div>
      <h2 class="text-2xl font-semibold text-blue-700 mb-2">Keterangan</h2>
      <ol >
            <li>Bentuk Lingkaran melambangkan keutuhan atau holistik dari nilai-nilai inti yang merupakan turunan visi Sekolah Kristen Kalam Kudus.</li>
            <li>Warna merah: melambangkan darah Kristus yang mengasihi manusia.</li>
            <li>Warna biru: melambangkan kearifan sebagai bentuk dari sikap mandari.</li>
            <li>Warna hijau: melambangkan perdamaian dan pertumbuhan yang terlihat melalui karya nyata yang berguna.</li>
        </ol>
    </div>

    
  <div>
     <div class="flex flex-col items-center text-center mb-10">
    <img src="{{ asset('images/pilarkalamkudus.jpg') }}" alt="Logo Kalam Kudus" class="w-32 h-32 mb-4">
    <h1 class="text-3xl font-bold text-gray-800">Pilar Utama</h1>
    <div class="w-24 h-1 bg-blue-600 mt-2"></div>
  </div>

  <!-- ISI MAKNA LOGO -->
  <div class="space-y-8 text-gray-700 leading-relaxed max-w-3xl mx-auto">
    <div>
      <h2 class="text-2xl font-semibold text-blue-700 mb-2">Keterangan</h2>
      <ol >
            <li>Kerohanian adalah aspek yang mendasari seluruh aktivitas sekolah, kehidupan kerohanian pribadi per pribadi (yayasan, direktur pelaksana, kepala sekolah, guru/ staff, siswa, rang tua sampai kepada pembantu sekolah),  kurikulum dan peraturan-peraturan organisasinya.  Stakeholder memiliki iman yang percaya kepada Tuhan Yesus sebagai Juruselamat dan bertumbuh di dalam kedewasaan di dalam Kristus.  Kurikulum, peraturan-peraturan sekolah,  organisasi dan seluruh ketentuan-ketentuan dirancang berlandaskan pandangan kristiani.  Peserta didik diajarkan sejak dini tentang pandangan kristiani dalam pembelajaran.  Tujuan diajarkannya kerohani dan andangan kristiani agar setiap peserta didik memiliki pandangan hidup kristiani yang mendasari pertumbuhan mereka sampai di dalam seluruh aspek kehidupannya.</li>
            <li>Ilmu pengetahuan (Knowledge)  adalah anugerah Tuhan sehingga setiap manusia dapat mempelajari secara baik akan tetapi anak Tuhan dipanggil mempelajari ilmu pengetahuan untuk menjawab mandat Allah, yakni menguasi dan memelihara bumi.  Menggunakan ilmu pengetahuannya menjadi pemimpin yang men-sejahtera-kan masyakarat dan bangsa.</li>
            <li>Keterampilan merupakan  aspek yang sangat penting dalam dunia modern yang sangat kompleks.  Dengan kompleksitas yang begitu luar biasa ini maka dibutuhkan sekolah yang melengkapi keterampilan hidup bagi peserta didiknya.  SKKK di dalam proses pembelajaran ilmu pengetahuan juga berintegrasi pembelajaran keterampilan di kelas maupun di luar kelas.  Keterampilan harus berjalan bersama di kelas sehingga tercipta pembelajaran yang terpadu.</li>
            <li>Karakter.  Karakter harus dibentuk dalam proses pembelajaran sejak dini supaya peserta didik memiliki karakter yang tangguh dalam menghadapi hidup serta tantangan jaman.  Sekolah Kristen Kalam Kudus Timika mendesain kurikulum karakter yang melibatkan yayasan, direktur pelaksana, kepala sekolah, para guru dan siswa, orang tua, staff serta seluruh personal yang terlibat dalam sekolah untuk belajar dan mengembangkan karakter yang semakin menyerupai Kristus.  Pembelajaran karakter tidak hanya disampaikan dalam pelajaran, tetapi juga didesain dalam proyek, program-program secara utuh sehingga setiap anggota Sekolah Kristen Kalam Kudus Timika adalah pembelajaran karakter dan menjadi perilaku yang baik dalam hidup ini. </li>
            <li>Karakter utama yang diharapkan dapat terbentuk dalam diri siswa yang lulus dari SKKK Timika dihasilkan dari  nilai inti (core value) SKKK Timika.</li>

          </ol>
    </div>
<br>
  <div>
    <div class="flex flex-col items-center text-center mb-10">
    <img src="{{ asset('images/kurikulum.jpg') }}" alt="Logo Kalam Kudus" class="w-32 h-32 mb-4">
    <h1 class="text-3xl font-bold text-gray-800">Kurikulum Sekolah Kristen Kalam Kudus</h1>
    <div class="w-24 h-1 bg-blue-600 mt-2"></div>
  </div>

  <!-- ISI MAKNA LOGO -->
  <div class="space-y-8 text-gray-700 leading-relaxed max-w-3xl mx-auto">
    <div>
      <h2 class="text-2xl font-semibold text-blue-700 mb-2">iB-Learning dengan CFRC</h2>
      <p>Sejalan dengan tujuan pendidikan nasional, Sekolah Kristen Kalam Kudus Timika meneguhkan visi dan misinya untuk mendidik dan menanamkan pengetahuan dan keterampilan terkini yang terintegrasi dengan iman Kristen dan nilai-nilai Kristiani untuk mewujudkan masyarakat yang mampu menjawab dan memenuhi panggilan mereka.</p>
    </div>
    <h2 class="text-3xl font-bold text-gray-800">Sekolah Kristen Kalam Kudus Timika menggunakan iB-Learning (integrated blended learning) dalam kurikulum pendidikan.</h2>
    <p>iB-Learning menonjolkan hal-hal berikut:</p>
    <ol>
      <li>Pandangan dunia Kristen, Penciptaan, Kejatuhan, Penebusan & Konsumasi (CFRC (Creation, Fall, Redemtion, Consummation))</li>
      <li>Mental dan Karakter Kristen global</li>
      <li>Pengetahuan dan pola pikir Kristen global</li>
      <li>Keterampilan yang bermanfaat global</li>
      <li>Hidup sehat dan seimbang.</li>
    </ol>
    <p>
      Dengan menempatkan konsep Penciptaan, Kejatuhan dan Konsumasi (CFRC: Creation, Fall, Redemtion, Consummation) sebagai pusat atau inti dari kurikulum, iB-Learning, menggunakan model pembelajaran dan pendekatan terintegrasi dengan blended beserta komponen-komponennya, menyatakan secara langsung konsep CFRC dengan pengetahuan dan keterampilan yang dipelajari guna membangun mental dan karakter Kristen global dalam kehidupan yang sehat dan seimbang.

    </p>
  </div>

  <div class="space-y-8 text-gray-700 leading-relaxed max-w-3xl mx-auto">
    <div>
      <h2 class="text-2xl font-semibold text-blue-700 mb-2">CFRC</h2>
      <h5 class="text-2xl font-semibold text-blue-700 mb-2">Creation, Fall, Redemtion, Consummation</h5>
      <p>CFRC adalah inti dari pandangan dunia Kristen sebagai dasar filosofi pendidikan Kristen. Pandangan dunia Kristen adalah cara memandang sesuatu, kerangka pikiran, arah pemikiran atau paradigma yang didasarkan pada iman Kristen. Christian Worldview melengkapi orang yang percaya untuk menyadari kedaulatan TUHAN dalam hidup manusia. Christian Worldview adalah media integrasi antara iman dan semua aspek kehidupan manusia.</p>
    </div>
  </div>

  <div class="space-y-8 text-gray-700 leading-relaxed max-w-3xl mx-auto">
    <div>
      <h5 class="text-2xl font-semibold text-blue-700 mb-2">A. Penciptaan</h5>
      <p>Allah adalah Pencipta langit dan bumi dan segala isinya (Kej. 1:1). Pengakuan akan Allah sebagai Pencipta menjadi pokok penting di dalam melandasi seluruh pemikiran dan keberadaan manusia di dalam melihat seluruh tatanan dunia ciptaan Allah. Allah menciptakan dari yang tidak ada (creatio ex nihilo) menjadi ada. Allah menciptakan segala sesuatu dan semua yang diciptakan sungguh amat baik. Allah memberikan mandat kepada manusia untuk mengelola segenap ciptaan (Ke. 1:28).</p>
    </div>
  </div>

  <div class="space-y-8 text-gray-700 leading-relaxed max-w-3xl mx-auto">
    <div>
      <h5 class="text-2xl font-semibold text-blue-700 mb-2">B. Kejatuhan</h5>
      <p>Kejatuhan manusia pertama ke dalam dosa dengan melanggar perintah Allah memiliki akibat signifikan bagi seluruh makhluk hidup, bukan hanya kepada manusia saja. Alkitab dengan jelas mengatakan pelanggaran terhadap perintah Allah menjadikan manusia "buta" atau "tuli" hati mereka gelap dan pikiran mereka buta sehingga tidak bisa melihat kemuliaan Allah (2 Kor. 4:4; Efesus 4:18). Jadi dapat disimpulkan bahwa dapat dosa menyentuh seluruh ciptaan sehingga tidak ada sesuatu yang diciptakan yang tidak bersentuh oleh dampak yang merusak akibat kejatuhan manusia dalam dosa, termasuk juga rasionalitas manusia.</p>
    </div>
  </div>

  <div class="space-y-8 text-gray-700 leading-relaxed max-w-3xl mx-auto">
    <div>
      <h5 class="text-2xl font-semibold text-blue-700 mb-2">C. Penebusan</h5>
      <p>Penebusan Kristus di atas kayu salib memiliki dampak kosmis, yaitu memulihkan seluruh tatanan ciptaan. Allah bukan hanya menebus jiwa manusia, Ia menebus seluruh keutuhan hidup manusia. Pertobatan memberikan arah baru kepada pikiran, emosi, kehendak dan perilaku. Penebusan Kristus memberikan status manusia baru (2 Kor. 5:17) dan memberikan kepada manusia hati baru (a new heart) dan semangat yang baru (a new spirit) (Yeh. 36:26). </p>
    </div>
  </div>

   <div class="space-y-8 text-gray-700 leading-relaxed max-w-3xl mx-auto">
    <div>
      <h5 class="text-2xl font-semibold text-blue-700 mb-2">D. Konsumasi</h5>
      <p>Konsumasi (Consummation) adalah kesadaran interdependensi manusia dengan dunia ciptaan Allah. Kesadaran interdependensi ini berkaitan dengan status baru dimana penebusan Kristus telah memperbaharui hati dan pikiran manusia sehingga mampu melihat dengan benar dunia realitas ciptaan Allah sesuai dengan maksud dan tujuan penciptaan Allah. Konsumasi ini merupakan panggilan bagi setiap umat Allah untuk hidup memuliakan Allah dengan menjadi berkat bagi sesama. </p>
    </div>
  </div>



</div>

<style>
    .sub-nav {
        border-bottom: 2px solid #eee;
    }

    .sub-nav .nav-link {
        color: #333;
        font-weight: 500;
        margin: 0 5px;
        border-radius: 30px;
        transition: all 0.3s;
        white-space: nowrap;
    }

    .sub-nav .nav-link:hover {
        background-color: #f0f0f0;
    }

    .sub-nav .nav-link.active {
        background-color: #0d6efd;
        color: #fff;
    }

    .hover-card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }
</style>



@endsection
