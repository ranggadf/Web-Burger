<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Burger</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        
        <nav>
            <div class="logo">
                <img src="{{ asset('images/logoburger.png') }}" alt="Logo Burger">
            </div>
            <ul>
                <li><a href="#"><img src="{{ asset('images/home.png') }}" alt="Logo Burger">Beranda</a></li>
                <li><a href="#"><img src="{{ asset('images/pesanan.png') }}" alt="Logo Burger">Pesanan</a></li>
                <li><a href="#"><img src="{{ asset('images/transaksi.png') }}" alt="Logo Burger">Transaksi</a></li>
            </ul>
        </nav>
        <div class="main-content">
            <header>
                <div class="header-content">
                    <div class="search-bar">
                        <h2>Pesan apa hari ini?</h2>
                        <div class="search">
                            <input type="text" placeholder="Cari Di sini">
                        </div>
                        <div class="mami">
                            <a href="#">
                                <img src="{{ asset('images/makanan.png') }}" alt="makanan">
                            </a>
                            <a href="#">
                                <img src="{{ asset('images/minuman.png') }}" alt="minuman">
                            </a>
                            
                        </div>
                    </div>
                    
                </div>
            </header>
            <main>
                <h2>Menu Populer</h2>
                <div class="menu-populer">
                    <div class="menu-item">
                        <div class="menu-image"></div>
                        <p>Nama Makanan</p>
                    </div>
                    <div class="menu-item">
                        <div class="menu-image"></div>
                        <p>Nama Makanan</p>
                    </div>
                    <div class="menu-item">
                        <div class="menu-image"></div>
                        <p>Nama Makanan</p>
                    </div>
                    
                </div>
            </main>
        </div>
    </div>
</body>

</html>
