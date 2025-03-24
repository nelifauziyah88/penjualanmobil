<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('images/btc.png') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styled.css') }}" rel="stylesheet">
    <title>BTC Top Up Game Store</title>
</head>

<body>

    <!-- Sidebar -->
    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
        ☰
    </button>
    <div class="offcanvas offcanvas-start custom-offcanvas" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">
                <img src="{{ asset('images/btc.png') }}" class="logo" alt="BTC Logo">
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link text-white">
                        <i class="fas fa-home"></i> HOME
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/list-of-games') }}" class="nav-link text-white active">
                        <i class="fas fa-gamepad"></i> LIST OF GAMES
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/profile') }}" class="nav-link text-white">
                        <i class="fas fa-user"></i> ACCOUNT
                    </a>
                </li>
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

    <!-- Game List -->
    <section class="game-list">
        @php
            $games = [
                ['name' => 'PUBG Mobile', 'developer' => 'Tencent Games', 'image' => 'pubg.jpg', 'link' => '#'],
                ['name' => 'Mobile Legends', 'developer' => 'Moonton', 'image' => 'mobile_legends.jpg', 'link' => '#'],
                ['name' => 'Free Fire', 'developer' => 'Garena', 'image' => 'freefire.jpg', 'link' => '#']
            ];
        @endphp

        @foreach ($games as $game)
            <div class="game-item">
                <a href="{{ $game['link'] }}">
                    <img src="{{ asset('images/' . $game['image']) }}" alt="{{ $game['name'] }}">
                    <div class="game-info">
                        <h2 class="game-title">{{ $game['name'] }}</h2>
                        <p class="game-subtitle">{{ $game['developer'] }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <img src="{{ asset('images/btc.png') }}" alt="BTC Logo">
            </div>
            <div class="footer-text">
                <p>Nikmati kemudahan top-up diamond game favorit Anda menggunakan BTC Top Up Game Store!</p>
            </div>
        </div>
        <p>© 2025 BTC Top Up Game Store. All Right Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        try {
            const games = [
                { name: 'PUBG MOBILE', image: 'pubg.jpg', description: 'TENCENT GAMES', link: '#' },
                { name: 'MOBILE LEGEND', image: 'mobile_legends.jpg', description: 'MOONTON', link: '#' },
                { name: 'FREE FIRE', image: 'freefire.jpg', description: 'GARENA', link: '#' }
            ];

            const searchInput = document.getElementById('searchInput');
            const searchResults = document.getElementById('searchResults');

            function createGameElement(game) {
                return `
                    <a href="${game.link}" class="search-result-item">
                        <img src="{{ asset('images/') }}/${game.image}" alt="${game.name}" class="game-preview-img">
                        <div class="game-info">
                            <h2 class="game-preview-title">${game.name}</h2>
                            <p>${game.description}</p>
                        </div>
                    </a>
                `;
            }

            function updateSearchResults(searchTerm) {
                const filteredGames = games.filter(game =>
                    game.name.toLowerCase().includes(searchTerm.toLowerCase()) ||
                    game.description.toLowerCase().includes(searchTerm.toLowerCase())
                );

                searchResults.innerHTML = filteredGames.length ?
                    filteredGames.map(game => createGameElement(game)).join('') :
                    '<div class="no-results">No games found</div>';
            }

            searchInput.addEventListener('input', function() {
                if (this.value.length > 0) {
                    updateSearchResults(this.value);
                } else {
                    searchResults.innerHTML = '';
                }
            });

        } catch (error) {
            console.error('Terjadi kesalahan:', error);
        }
    </script>
</body>

</html>
