<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Admin Page - Wahana Visi</title>
  <style>
    html, body {
      font-family: Arial, sans-serif;
      background: #f6f6f6;
      margin: 0;
      padding: 0;
      height: 100%;
      overflow: hidden;
    }

    .sidebar {
      width: 240px;
      background: #fff;
      height: 100vh;
      box-shadow: 1px 0 8px rgba(0, 0, 0, 0.07);
      padding: 30px 0;
      position: fixed;
      left: 0;
      top: 0;
      display: flex;
      flex-direction: column;
      z-index: 1200;
    }

    .sidebar .logo {
      margin-bottom: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0 28px;
    }

    .sidebar .logo img {
      width: 160px;
      height: auto;
    }

    .sidebar .menu {
      list-style: none;
      margin: 0;
      padding: 0 28px;
      flex: 1;
      overflow-y: auto;
    }

    .sidebar .menu li {
      margin-bottom: 14px;
    }

    .sidebar .menu li a,
    .sidebar .menu li .dropdown-btn {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 4px;
      padding: 12px 20px;
      font-size: 16px;
      color: #222;
      text-decoration: none;
      border-radius: 8px;
      transition: background-color 0.2s ease, color 0.2s ease;
      width: 100%;
      box-sizing: border-box;
      background: none;
      border: none;
      text-align: left;
      cursor: pointer;
    }

    .sidebar .menu li a.active,
    .sidebar .menu li .dropdown-btn.active {
      background-color: #f4570a;
      color: #fff;
    }

    .dropdown-container {
      display: none;
      padding-left: 20px;
      margin-top: 4px;
    }

    .dropdown-container a {
      display: block;
      padding: 10px 20px;
      font-size: 14px;
      color: #333;
      text-decoration: none;
      border-radius: 6px;
      transition: background-color 0.2s ease;
    }

    .dropdown-container a.active {
      background-color: #f4570a;
      color: #fff;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 8px 40px;
      background-color: white;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      height: 68px;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1300;
    }

    .navbar img {
      width: 200px;
      cursor: pointer;
    }

    .navbar-right {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logout-btn {
      border: 1px solid #bbb;
      background: white;
      padding: 8px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
      color: #333;
      transition: background-color 0.2s ease, color 0.2s ease;
    }

    .profile-icon {
      width: 35px;
      height: 35px;
      border-radius: 50%;
      background-color: black;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 16px;
      user-select: none;
    }

    .content {
      position: absolute;
      top: 68px;
      left: 240px;
      right: 0;
      bottom: 0;
      overflow-y: auto;
      padding: 32px;
      background: none;
      box-sizing: border-box;
    }

    .content h2 {
      font-weight: bold;
      margin-bottom: 36px;
    }

    .arrow {
      font-size: 14px;
      transition: transform 0.3s ease;
    }

    @media (max-width: 900px) {
      html, body {
        overflow: auto;
      }

      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }

      .navbar {
        left: 0;
        width: 100%;
        margin-left: 0;
        border-radius: 0;
        padding: 8px 20px;
      }

      .content {
        padding: 100px 12px 32px 12px;
        left: 0;
      }
    }
  </style>
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="logo">
      <img src="{{ asset('image/image.png') }}" alt="Wahana Visi Logo" />
    </div>
    <ul class="menu">
      <li>
        <a href="{{ route('admin.dashboard') }}" class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
          Dashboard
        </a>
      </li>

      @php
        $uploadActive = Route::is('upload.ruangan') || Route::is('upload.kendaraan') || Route::is('upload.barang');
      @endphp

      <li>
        <button class="dropdown-btn {{ $uploadActive ? 'active' : '' }}">
          <span>Upload Page</span><span class="arrow">{{ $uploadActive ? '▼' : '▶' }}</span>
        </button>
        <div class="dropdown-container" style="{{ $uploadActive ? 'display:block;' : '' }}">
          <a href="{{ route('upload.ruangan') }}" class="{{ Route::is('upload.ruangan') ? 'active' : '' }}">Upload Ruangan</a>
          <a href="{{ route('upload.kendaraan') }}" class="{{ Route::is('upload.kendaraan') ? 'active' : '' }}">Upload Kendaraan</a>
          <a href="{{ route('upload.barang') }}" class="{{ Route::is('upload.barang') ? 'active' : '' }}">Upload Barang</a>
        </div>
      </li>

      <li>
        <a href="{{ route('admin.approval') }}" class="{{ Route::is('admin.approval') ? 'active' : '' }}">
          Approval Page
        </a>
      </li>

      <li>
        <a href="{{ route('admin.userManage') }}" class="{{ Route::is('admin.userManage') ? 'active' : '' }}">
          User Management
        </a>
      </li>
    </ul>
  </div>

  <!-- Navbar -->
  <div class="navbar">
    <img src="{{ asset('image/image.png') }}" alt="Wahana Visi Logo" />
    <div class="navbar-right">
      <button class="logout-btn" onclick="window.location.href='{{ route('Autentikasi') }}'">Log out</button>
      <div class="profile-icon">👤</div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="content">
    @yield('content')
  </div>

  <!-- JS Dropdown Toggle -->
  <script>
    const dropdownBtns = document.querySelectorAll('.dropdown-btn');

    dropdownBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const container = btn.nextElementSibling;
        const arrow = btn.querySelector('.arrow');
        const isOpen = container.style.display === 'block';

        container.style.display = isOpen ? 'none' : 'block';
        arrow.textContent = isOpen ? '▼' : '▶';
      });
    });
  </script>
</body>
</html>
