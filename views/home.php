<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Tradisional Indonesia</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #ffa69e, #fb6f92); /* Gradien untuk latar belakang */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Header */
        header {
            background-color: #ffffff; /* Latar belakang header putih */
            padding: 60px 0;
            text-align: center;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        header h1 {
            font-size: 3.5rem;
            color: #e57e74;
            font-weight: 700;
            text-transform: uppercase;
        }

        header p {
            font-size: 1.2rem;
            color: #444;
            line-height: 1.6;
            margin-top: 20px;
        }

        /* Section untuk bagian konten */
        section {
            padding: 80px 0;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        section h2 {
            font-size: 2.5rem;
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
        }

        section p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
            text-align: justify;
            margin-bottom: 25px;
        }

        .highlight {
            font-weight: bold;
            color: #e57e74;
        }

        /* Bagian Footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 1rem;
        }

        footer p {
            margin: 0;
        }

        /* Animasi pada hover link */
        a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #0056b3;
        }

        /* Gaya untuk tombol lebih lanjut */
        .btn-custom {
            background-color: #e57e74;
            color: white;
            font-size: 1.1rem;
            padding: 10px 25px;
            border-radius: 30px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #d45b4d;
            transform: translateY(-5px);
        }

        /* Card untuk artikel kuliner */
        .card {
            border: none;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            border-radius: 10px;
            background: linear-gradient(to right, #ffa69e, #fb6f92); /* Gradien untuk background card */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px); /* Efek card terangkat */
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        }

        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
            background: linear-gradient(to right, #ffa69e, #fb6f92); /* Gradien untuk background card body */
            border-radius: 10px;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #000; /* Mengubah warna judul card menjadi hitam */
        }

        .card-text {
            font-size: 1rem;
            color: #000; /* Mengubah warna teks card menjadi hitam */
        }

        /* Bagian card responsif */
        @media (max-width: 768px) {
            .card img {
                height: 180px;
            }
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <h1>Selamat Datang di Kuliner Tradisional Indonesia</h1>
        <p>Rasakan Keunikan dan Kekayaan Kuliner yang Membuat Lidah Anda Terpesona!</p>
    </header>

    <!-- Konten Halaman -->
    <section>
        <div class="container">
            <h2>Mengenal Keanekaragaman Kuliner Nusantara</h2>
            <p>
                Indonesia, negeri dengan ribuan pulau, menyimpan kekayaan kuliner yang luar biasa. Setiap daerah memiliki makanan dan minuman khas dengan cita rasa yang berbeda-beda, yang menjadi kebanggaan dan warisan budaya bangsa.
                <br><br>
                Dari Sabang hingga Merauke, Anda akan menemukan berbagai makanan dan minuman yang tak hanya memanjakan lidah, tetapi juga kaya akan sejarah dan cerita. <span class="highlight">Berikut adalah beberapa makanan dan minuman</span>, yang terkenal hingga mancanegara sebagai makanan dan minuman terlezat di dunia yang digemari di hampir seluruh penjuru tanah air? 
                <br><br>
                Kuliner tradisional Indonesia tidak hanya soal rasa, tetapi juga tentang pengalaman budaya, tradisi, dan cara-cara unik dalam memasaknya. Setiap bahan makanan dan minuman yang digunakan, setiap rempah yang dipilih, memiliki cerita tersendiri. Inilah yang membuat kuliner Indonesia begitu istimewa dan patut untuk dijelajahi.
            </p>
            
            <!-- Card Artikel Kuliner -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="images/rendang.jpeg" class="card-img-top" alt="Rendang">
                        <div class="card-body">
                            <h5 class="card-title">Rendang</h5>
                            <p class="card-text">Makanan khas Minangkabau yang mendunia, dengan cita rasa pedas, gurih, dan kaya akan rempah-rempah. Rendang tak hanya enak, tetapi juga menyimpan filosofi mendalam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="images/mie aceh.jpeg" class="card-img-top" alt="Gudeg">
                        <div class="card-body">
                            <h5 class="card-title">Mie Aceh</h5>
                            <p class="card-text">Mie Aceh adalah makanan khas Aceh yang terbuat dari mie kuning tebal dan disajikan dengan kuah kari pedas dan gurih.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="images/papeda.jpeg" class="card-img-top" alt="Gudeg">
                        <div class="card-body">
                            <h5 class="card-title">Papeda</h5>
                            <p class="card-text">Papeda adalah makanan khas Papua yang terbuat dari sagu. Papeda memiliki tekstur yang kenyal dan lengket, dan biasanya disajikan dengan kuah ikan kunir (ikan kuah kunir) yang kaya rempah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="images/ayam taliwang.jpeg" class="card-img-top" alt="Gudeg">
                        <div class="card-body">
                            <h5 class="card-title">Ayam Taliwang</h5>
                            <p class="card-text">Ayam taliwang adalah makanan khas Lombok, Nusa Tenggara Barat (NTB) yang terbuat dari ayam kampung muda yang dibakar dengan bumbu khas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="images/empek-empek.jpeg" class="card-img-top" alt="Gudeg">
                        <div class="card-body">
                            <h5 class="card-title">Empek-Empek</h5>
                            <p class="card-text">Pempek adalah makanan khas Palembang, Sumatera Selatan, yang dibuat dari adonan ikan tenggiri yang dicampur dengan tepung sagu. Pempek memiliki berbagai jenis seperti kapal selam (dengan isian telur), lenjer, adaan, dan kulit. Disajikan bersama kuah cuko yang khas, yaitu saus hitam asam manis pedas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="images/rujak cingur.jpeg" class="card-img-top" alt="Gudeg">
                        <div class="card-body">
                            <h5 class="card-title">Rujak Cingur</h5>
                            <p class="card-text">Rujak cingur adalah makanan khas Surabaya yang terdiri dari campuran sayuran, buah-buahan, lontong, tahu, tempe, dan cingur (hidung sapi), disiram bumbu kacang dengan petis udang. Rasanya perpaduan manis, pedas, dan gurih yang khas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="images/wedang jahe.jpg" class="card-img-top" alt="Gudeg">
                        <div class="card-body">
                            <h5 class="card-title">Wedang Jahe</h5>
                            <p class="card-text">Minuman hangat khas Jawa Tengah yang terbuat dari jahe dan gula merah, sering disajikan untuk menghangatkan tubuh.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="images/bajigur.jpg" class="card-img-top" alt="Gudeg">
                        <div class="card-body">
                            <h5 class="card-title">Bajigur</h5>
                            <p class="card-text">Bajigur adalah minuman manis dari Jawa Barat yang dibuat dengan campuran santan, gula aren, dan rempah-rempah, biasanya dinikmati saat cuaca dingin.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="images/Es Cendol.jpg" class="card-img-top" alt="Gudeg">
                        <div class="card-body">
                            <h5 class="card-title">Es Cendol</h5>
                            <p class="card-text">Minuman segar asal Jawa Barat yang terdiri dari cendol (jelly hijau dari tepung beras), santan, dan sirup gula aren, cocok untuk menghilangkan dahaga.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="images/Esdoger.webp" class="card-img-top" alt="Gudeg">
                        <div class="card-body">
                            <h5 class="card-title">Es Doger</h5>
                            <p class="card-text">Minuman es khas Jakarta yang berwarna merah muda, berisi kelapa parut, ketan hitam, tape, dan susu kental manis, memberikan rasa manis dan segar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="images/es selendang mayang.jpg" class="card-img-top" alt="Gudeg">
                        <div class="card-body">
                            <h5 class="card-title">Es Selendang Mayang</h5>
                            <p class="card-text">Es Selendang Mayang adalah minuman tradisional khas Betawi (Jakarta) yang menyegarkan, terdiri dari kue kenyal berwarna-warni yang terbuat dari tepung beras atau tepung hunkwe, disajikan dengan kuah santan manis dan sirup gula merah, serta dilengkapi dengan es serut. Minuman ini memiliki rasa manis dan gurih, cocok dinikmati saat cuaca panas. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
