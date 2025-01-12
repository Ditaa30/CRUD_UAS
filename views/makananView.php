<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Makanan</title>
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
            border: 1px solid #ddd;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            margin: 30px auto;
            padding: 25px;
            background-color: #fff;
            width: 80%;
            max-width: 1200px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05); /* Efek membesar saat hover */
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        /* Link Tambah Data */
        .add-data-link {
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            font-size: 18px;
            margin-bottom: 25px;
            display: inline-block;
        }

        .add-data-link:hover {
            background-color: #0056b3;
            transform: translateY(-5px); /* Efek tombol naik saat hover */
        }

        /* Gaya tabel */
        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            font-size: 16px;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        table th {
            background-color: #ff6f92; /* Warna header tabel */
            font-weight: bold;
            font-size: 16px;
            color: #fff;
        }

        table td {
            background-color: #f9f9f9;
            color: #555;
        }

        table tbody tr:nth-child(odd) {
            background-color: #f4f4f4;
        }

        table tbody tr:hover {
            background-color: #ffefdf; /* Warna saat hover baris tabel */
        }

        /* Gaya teks total */
        p {
            margin-top: 25px;
            font-weight: bold;
            color: #333;
            font-size: 18px;
            text-align: center;
        }

        /* Link edit dan hapus */
        a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #0056b3;
        }

        /* Konfirmasi tombol hapus */
        a[onclick] {
            color: #dc3545;
        }

        a[onclick]:hover {
            color: #a71d2a;
        }
    </style>
</head>

<body>

    <!-- Konten Halaman -->
    <div class="container mt-5 pt-5">
        <h2 style="text-align: center; font-size: 2.5rem; font-weight: bold; color: #333;">Daftar Makanan</h2>

        <!-- Link Tambah Data Baru -->
        <a href="?page=makananAdd" class="add-data-link">[+] Tambah Data Baru</a>

        <!-- Tabel Data Makanan -->
        <div class="card">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Makanan</th>
                        <th>Daerah Makanan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "includes/config.php";
                    $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
                    $sql = mysqli_query($conn, $query);
                    $nomor = 1;

                    while ($data = mysqli_fetch_array($sql)) { ?>
                        <tr>
                            <td><?= $nomor++; ?></td>
                            <td><?= htmlspecialchars($data["nama_makanan"]) ?></td>
                            <td><?= htmlspecialchars($data["daerah_makanan"]) ?></td>
                            <td>
                                <a href="?page=makananUpdate&id=<?= $data['id_makanan']; ?>">Edit</a> |
                                <a href="?page=makananDelete&id=<?= $data['id_makanan']; ?>" 
                                onclick="return confirm('Yakin ingin menghapus data ini?');">
                                Hapus
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Menampilkan Total Data -->
        <p>Total: <?= mysqli_num_rows($sql) ?></p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
