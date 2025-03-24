<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="{{ asset('images/btc.png') }}" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{ asset('css/styled.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">

  <title>BTC Top Up Game Store</title>

</head>

<body>

  <!-- Sidebar -->
  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
    ☰
  </button>
  <div class="offcanvas offcanvas-start custom-offcanvas" id="offcanvasMenu">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">
        <img src="{{ asset('images/btc.png') }}" class="logo" alt="BTC Logo">
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="nav flex-column">
        <li><a href="{{ route('dashboard') }}" class="nav-link text-white active"><i class="fas fa-home"></i> HOME</a></li>
        <li><a href="{{ url('/list-of-games') }}" class="nav-link text-white"><i class="fas fa-gamepad"></i> LIST OF GAMES</a></li>
        <li><a href="{{ url('/profile') }}" class="nav-link text-white"><i class="fas fa-user"></i> ACCOUNT</a></li>
      </ul>
    </div>
  </div>

  <!-- Header -->
  <header class="header">
    <div class="header-left">
      <div class="header-logo">
        <img src="{{ asset('images/btc.png') }}" alt="BTC Logo">
      </div>
      <div class="search-bar">
        <input type="text" placeholder="Search Game" id="searchInput">
      </div>
    </div>
  </header>

  <!-- Banner -->
  <section class="banner">
    <img src="{{ asset('images/banner.jpg') }}" alt="Banner" class="banner-img">
  </section>

  <div class="divider">
    <h2>Daftar Game</h2>
  </div>

  <!-- Game List -->
  <section class="game-list">
    <div class="game-item">
      <a href="{{ url('/produk1-pembeli') }}">
        <img src="{{ asset('images/pubg.jpg') }}" alt="PUBG">
        <div class="game-info">
          <h2 class="game-title">PUBG Mobile</h2>
          <p class="game-subtitle">Tencent Games</p>
        </div>
      </a>
    </div>

    <div class="game-item">
      <a href="{{ url('/produk2-pembeli') }}">
        <img src="{{ asset('images/mobile_legends.jpg') }}" alt="Mobile Legends">
        <div class="game-info">
          <h2 class="game-title">Mobile Legends</h2>
          <p class="game-subtitle">Moonton</p>
        </div>
      </a>
    </div>

    <div class="game-item">
      <a href="{{ url('/produk3-pembeli') }}">
        <img src="{{ asset('images/freefire.jpg') }}" alt="Free Fire">
        <div class="game-info">
          <h2 class="game-title">Free Fire</h2>
          <p class="game-subtitle">Garena</p>
        </div>
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <img src="{{ asset('images/btc.png') }}" alt="BTC Logo">
      <p>Nikmati kemudahan top-up diamond game favorit Anda menggunakan BTC Top Up Game Store!</p>
    </div>
    <p>© 2025 BTC Top Up Game Store. All Right Reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script src="{{ asset('js/js_dashboardp.js') }}"></script>

</body>

</html>