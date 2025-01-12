<?php
require "includes/config.php";
require "includes/function.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Kuliner</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/datatables/dataTables.bootstrap5.css" rel="stylesheet">

    <style>
        /* Mengubah warna header menjadi putih */
        header {
            background-color: #ffffff; /* Warna putih untuk header */
            padding: 20px;
            margin-bottom: 20px;
        }

        header h1 {
            color: #ffa69e; /* Mengubah warna teks header menjadi #ffa69e */
            font-size: 2.5rem;
            font-weight: bold;
        }

        /* Memberikan batas bawah untuk header */
        hr {
            border: 1px solid #ddd;
        }

        /* Styling footer */
        footer {
            background-color: #ffffff;
            padding: 15px 0;
            text-align: center;
        }

        footer p {
            background: linear-gradient(to right, #ffa69e, #fb6f92);
            -webkit-background-clip: text;
            color: transparent;
            font-size: 1.2rem;
            font-weight: bold;
        }

        /* Styling garis gradien sebelum footer */
        .footer-gradient-line {
            height: 3px;
            background: linear-gradient(to right, #ffa69e, #fb6f92);
            margin: 0;
        }
    </style>
</head>

<body>
    <header>
        <h1 style="text-align: center;">Daftar Kuliner Tradisional</h1>
        <hr>
    </header>

    <div style="text-align: center;">
        <?php require "includes/navbar.php" ?>
        <hr>
    </div>

    <div align="center">
        <?php require "includes/konten.php" ?>
    </div>

    <!-- Garis Gradien sebelum footer -->
    <div class="footer-gradient-line"></div>

    <!-- Footer -->
<footer style="background-color: #ffffff; padding: 15px 0; text-align: center;">
    <hr>
    <p style="background: linear-gradient(to right, #ffa69e, #fb6f92); -webkit-background-clip: text; color: transparent;">
        Kuliner Indonesia <?= date("Y") ?>
    </p>
</footer>


    <script src="assets/jquery/jquery-3.7.1.js"></script>
    <script src="assets/datatables/dataTables.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script>
    $('#example').DataTable();
    </script>

</body>

</html>
