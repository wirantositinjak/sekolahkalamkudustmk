@extends('layouts.app')

@section('content')
  <div class="container my-5">
    <h2 class="text-center fw-bold mb-4">Tentang Kami - KB-TK</h2>

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

    <div class="content text-center">
         <div class="flex flex-col items-center text-center mb-10">
    <img src="{{ asset('images/KBTK2.jpg') }}" alt="Logo Kalam Kudus" class="w-32 h-32 mb-4">
    <h1 class="text-3xl font-bold text-gray-800">Profil KB-TK Kristen Kalam Kudus Timika</h1>
    <div class="w-24 h-1 bg-blue-600 mt-2"></div>
  </div>

  <section class="py-12 bg-gray-50">
  <div class="max-w-4xl mx-auto px-4">
    <h2 class="text-2xl font-bold text-center mb-6 text-gray-800 border-b-4 border-blue-500 pb-2">
      Data Sekolah Kalam Kudus Timika
    </h2>

    <div class="shadow-xl rounded-2xl bg-white overflow-hidden border border-gray-300">
      <table class="min-w-full text-left text-gray-800 border-collapse w-full">
        <tbody>
          <tr class="border-b border-gray-300">
            <th class="py-3 px-4 font-semibold bg-gray-100 border-r border-gray-300 w-1/3">
              Nama Lengkap
            </th>
            <td class="py-3 px-4">
              Kelompok Bermain & Taman Kanak-kanak Kristen Kalam Kudus Timika
            </td>
          </tr>
          <tr class="border-b border-gray-300">
            <th class="py-3 px-4 font-semibold bg-gray-100 border-r border-gray-300">
              Nomor NPSN
            </th>
            <td class="py-3 px-4">69906392</td>
          </tr>
          <tr class="border-b border-gray-300">
            <th class="py-3 px-4 font-semibold bg-gray-100 border-r border-gray-300">
              Alamat
            </th>
            <td class="py-3 px-4">
              Building B, Tyrannus Center.<br />
              Jl. Nawaripi Baru, Distrik Wania, Kabupaten Mimika-Papua 99911
            </td>
          </tr>
          <tr class="border-b border-gray-300">
            <th class="py-3 px-4 font-semibold bg-gray-100 border-r border-gray-300">
              Telepon
            </th>
            <td class="py-3 px-4">(+62) 85254999333</td>
          </tr>
          <tr class="border-b border-gray-300">
            <th class="py-3 px-4 font-semibold bg-gray-100 border-r border-gray-300">
              Akreditasi
            </th>
            <td class="py-3 px-4">"B" – Predikat Baik</td>
          </tr>
          <tr class="border-b border-gray-300">
            <th class="py-3 px-4 font-semibold bg-gray-100 border-r border-gray-300">
              Nama Penyelenggara
            </th>
            <td class="py-3 px-4">
              Yayasan Kalam Kudus Indonesia Cabang Timika
            </td>
          </tr>
          <tr>
            <th class="py-3 px-4 font-semibold bg-gray-100 border-r border-gray-300">
              Status
            </th>
            <td class="py-3 px-4">Swasta</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

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
</style>
@endsection
