<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - PT Bendi Car</title>
    <style>
        /* Kode CSS yang dimodifikasi */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 5px;
            background-color: #eb6f6f; /* Latar belakang biru muda */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        /* Navbar */
        .navbar {
            background-color: #cc0368; /* Warna biru cerah */
            padding: 10px 20px;
            width: 100%;
            box-sizing: border-box;
        }
        .navbar h1 {
            color: white;
            margin: 0;
            display: inline;
        }
        .navbar ul {
            list-style: none;
            display: flex;
            justify-content: flex-end;
            padding: 0;
            margin: 0;
        }
        .navbar ul li {
            margin-left: 8px;
        }
        .navbar ul li a {
            color: white; /* Warna teks putih pada navbar */
            text-decoration: none;
            padding: 4px 10px;
            border-radius: 5px;
        }
        .navbar ul li a:hover {
            background-color: #4682B4; /* Warna biru lebih gelap saat hover */
        }
        /* Content */
        .content {
            text-align: center;
            background: #FAEBD7;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 50%;
            color: #794d06; 
        }
        .content h2 {
            margin-top: 0;
            color: #794d06; 
        }
        .content p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="navbar">
            <h1>PT Bendi Car</h1>
            <nav>
                <ul>
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="promo.php">Promo</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                    <li><a href="tentang.php">Tentang Kami</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="booking.php">Booking</a></li>
                    <li><a href="mobil.php">Daftar Mobil</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Konten Utama -->
    <div class="content">
        <h2>Selamat Datang di PT Bendi Car</h2>
        <p>PT Bendicar ini menawarkan pilihan kendaraan dengan kualitas terbaik. Dengan layanan peminjaman yang fleksibel, Anda bisa mendapatkan kendaraan sesuai dengan kebutuhan Anda!</p>
    </div>
    
</body>
</html>






