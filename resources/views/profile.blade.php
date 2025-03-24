<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('btc.png') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/stylepr.css') }}" rel="stylesheet"> <!-- Menghubungkan CSS -->
</head>
<body>
    <div class="card">
        <!-- Tombol Edit -->
        <a href="{{ url('/editprofile') }}"><button class="edit-btn">Edit</button></a> <!-- Edit belum dikonfigurasi -->

        <!-- Lingkaran Foto Profil dengan Inisial -->
        <div class="profile-circle">
            NF <!-- Contoh inisial -->
        </div>

        <!-- Menampilkan Username Pengguna -->
        <div class="username">
            Neli Fauziyah
        </div>

        <div class="profile-info">
            <div class="profile-item">
                <span>User ID</span>
                <span>: 123456</span> <!-- ID statis -->
            </div>
            <div class="profile-item">
                <span>Email</span>
                <span>: neli@example.com</span> <!-- Email statis -->
            </div>
        </div>

        <!-- Tombol Log Out -->
        <form action="#" method="post">
            <button type="submit" class="logout-btn">Log Out</button> <!-- Logout belum dikonfigurasi -->
        </form>
    </div>

    <!-- Tombol Keluar ke Dashboard -->
    <a href="{{ url('/dashboard') }}" class="button-keluar">Leave</a> <!-- Link ke dashboard -->
</body>
</html>
