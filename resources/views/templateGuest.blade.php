<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pinjam</title>
  <link rel="stylesheet" href="/css/Main.css" />
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body>
  <div class="navbar">
    <div class="left-navbar">
      <img src="/image/image.png" alt="logo" class="logo" />
    </div>
    <div class="right-navbar">
      <!-- Tombol Back -->
      <button class="back-btn" onclick="window.history.back()">
        <i class="fas fa-arrow-left"></i> Back
      </button>

      @if (Auth::check() || session('staff_logged_in'))
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        <button class="logout-btn" id="OutButton">Log out</button>
      @endif
    </div>
  </div>

  @yield('content')

  <!-- Pagination placeholder -->
  <div class="pagination" style="text-align: center; margin-top: 20px;"></div>

  <!-- Script files -->
  <script src="/Js/Main.js"></script>
  <script>
    const LogoutUrl = "{{ route('Autentikasi') }}";
  </script>
  <script src="/Js/Logout.js"></script>
  <script src="/Js/Pagination.js"></script>
</body>
</html>
