@extends('layouts.app')

@section('content')
  <div class="container my-5">
    <h2 class="text-center fw-bold mb-4">Tentang Kami - SD</h2>

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
        <p>
            Tentang SD
        </p>
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
</style>
@endsection
