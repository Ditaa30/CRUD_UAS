<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Mengatur latar belakang halaman dengan gradien */
        body {
            background: linear-gradient(to right, #ffa69e, #fb6f92); /* Gradien untuk latar belakang */
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Navbar */
        .navbar {
            background-color: #ff6f92; /* Warna latar navbar */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand {
            color: #fff !important;
            font-weight: bold;
            font-size: 1.75rem;
        }

        .navbar-nav .nav-link {
            color: #fff !important;
            font-size: 1.2rem;
        }

        .navbar-nav .nav-link:hover {
            color: #333 !important;
            background-color: #fff;
            border-radius: 5px;
        }

        /* Gaya untuk card */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            margin: 30px auto;
            padding: 30px;
            background-color: #fff;
            width: 80%;
            max-width: 1000px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .card:hover {
            transform: scale(1.05); /* Efek membesar saat hover */
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        /* Efek gambar overlay */
        .card img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .card img:hover {
            transform: scale(1.05); /* Efek gambar sedikit membesar */
        }

        /* Gaya teks judul dan konten */
        h2 {
            font-size: 2.8rem;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #555;
        }

        .card p {
            margin-bottom: 15px;
        }

        /* Gaya untuk tombol kembali */
        .back-btn {
            display: inline-block;
            background-color: #ff6f92;
            color: #fff;
            padding: 12px 25px;
            font-size: 1.1rem;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .back-btn:hover {
            background-color: #e45e7a;
            transform: translateY(-5px); /* Efek tombol naik saat hover */
        }

    </style>
</head>

<body>

    <!-- Konten Halaman -->
    <div class="container mt-5 pt-5">
        <h2>Tentang Kami</h2>

        <!-- Card untuk Tentang Kami -->
        <div class="card">
            <!-- Gambar pendukung untuk card -->
            <img src="https://via.placeholder.com/1000x400/ff6f92/ffffff?text=Kuliner+Tradisional+Indonesia" alt="Kuliner Tradisional Indonesia">
            <p>Selamat datang di <strong>Kuliner Tradisional Indonesia</strong>! Kami hadir untuk memperkenalkan Anda pada keanekaragaman kuliner Indonesia, dengan segala rasa, sejarah, dan budaya yang terkandung dalam setiap hidangan.</p>

            <p>Melalui platform ini, Anda dapat mengetahui lebih banyak tentang makanan dan minuman tradisional Indonesia yang telah mendunia dengan rasa lezat dan unik.</p>

            <p>Setiap hidangan yang kami tampilkan adalah bagian dari cerita dan budaya Indonesia. Bergabunglah dengan kami dalam perjalanan rasa ini, dan nikmati kelezatan kuliner yang memikat!</p>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
