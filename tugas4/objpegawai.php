<?php
    require 'pegawai.php';
    
    $pegawai1 = new Pegawai('001', 'Faiz Shaqill', 'Manager', 'Islam', 'Belum Menikah');
    $pegawai2 = new Pegawai('002', 'Zaidan Ramadhan', 'Asisten Manager', 'Islam', 'Menikah');
    $pegawai3 = new Pegawai('003', 'Christian Julianto', 'Kepala Bagian', 'Kristen', 'Menikah');
    $pegawai4 = new Pegawai('004', 'Raihan Abigail', 'Staff', 'Kristen', 'Menikah');
    $pegawai5 = new Pegawai('005', 'Levanka Gonzales', 'Staff', 'Budha', 'Menikah');
    $pegawai6 = new Pegawai('006', 'Angelica Queenary', 'Staff', 'Hindu', 'Belum Menikah');
    $pegawai7 = new Pegawai('007', 'Azzaria Berlian', 'Staff', 'Islam', 'Menikah');
    $pegawai4 = new Pegawai('008', 'Herlambang Mahesa', 'Staff', 'Kristen', 'Menikah');
    $pegawai8 = new Pegawai('009', 'Berlian Sky', 'Staff', 'Kristen', 'Belum Menikah');

    $allpegawai = [$pegawai1, $pegawai2, $pegawai3, $pegawai4, $pegawai5, $pegawai6, $pegawai7, $pegawai8];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Data Gaji Pegawai</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <style>
    .card-body {
        background-color: #D6ECCD;
    }
    </style>

    <!-- header -->
    <header>
        <div class="container py-5">
            <h3 class="text-center"><?=Pegawai::judul?></h3>
            <a class="animate__animated animate__rotateIn navbar-brand" </a>
    </header>

    <!-- isi content -->
    <main>
        <div class="container">
            <div class="row lg-4 g-4"><?php foreach ($allpegawai as $pegawai) {
        ?><div class=" col">
                    <div class="card h-100">
                        <div class=" card-body"><?=$pegawai->mencetak() ?></div>
                    </div>
                </div><?php
    }
    ?>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer class="py-4 container">
        <p class="text-center fw-semibold m-0">
            Application Developed by <a href="https://github.com/Zharonk/php-msib_nfcom" target="_blank"
                class="text-decoration-none fw-semibold">Zharonk R.A</a>
        </p>
    </footer>
</body>

</html>