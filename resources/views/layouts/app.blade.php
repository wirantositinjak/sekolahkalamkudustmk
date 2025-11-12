<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Sekolah Kalam Kudus')</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Optional: Tambahkan CSS global sendiri -->
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }
  </style>
</head>

<body>
  {{-- Header --}}
  @include('layouts.partials.header')

  {{-- Navbar --}}
  @include('layouts.partials.navbar')

  {{-- Konten Halaman --}}
  <main class="flex-grow-1">
    @yield('content')
  </main>

  {{-- Footer kalau ada nanti --}}
  @includeWhen(View::exists('layouts.partials.footer'), 'layouts.partials.footer')

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
