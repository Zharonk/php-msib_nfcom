<?php
      require_once "lingkaran.php";
      require_once "segitiga.php";
      require_once "persegi_panjang.php";
      
      $persegi_panjang1 = new persegipanjang(3, 4);
      $lingkaran1 = new lingkaran(8);
      $segitiga1 = new segitiga(5, 12);
      $persegi_panjang2 = new persegipanjang(12, 5);
      $lingkaran2 = new lingkaran(14);
      $segitiga2 = new segitiga(4, 3);
            
      $arr_judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
      
      $bidangs = [ $persegi_panjang1, $lingkaran1, $segitiga1, $persegi_panjang2, $lingkaran2, $segitiga2 ];
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> KUMPULAN BANGUN DATAR </title>

    <!-- Link rel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <style>
    body {
        background-color: #C7DAD3;
        text-align: center;
    }
    </style>

    <!-- Header Content -->
    <header class="sticky-top">
        <div class="container py-5">
            <div class="container d-flex flex-wrap justify-content-center align-items-center">
                <h3 class="fs-4">DATA KUMPULAN BANGUN DATAR</h3><a
                    class="animate__animated animate__rotateIn navbar-brand" </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container py-5">
            <div class="table-responsive">
                <table class="table table-light table-bordered table-striped align-middle">
                    <thead class="table-light text-center">
                        <tr>
                            <?php foreach ($arr_judul as $jdl) { ?>
                            <th><?= $jdl ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($bidangs as $bidang) {?>
                        <tr>
                            <th><?= $no ?></th>
                            <td><?= $bidang->namabidang() ?></td>
                            <td><?= $bidang->keterangan() ?></td>
                            <td class="center"><?= $bidang->luasbidang() ?></td>
                            <td class="center"><?= $bidang->kelilingbidang() ?></td>
                        </tr>
                        <?php $no++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer class="container">
        <p class="text-center fw-semibold m-0">
            Application Developed by <a href="https://github.com/Zharonk/php-msib_nfcom" target="_blank"
                class="text-decoration-none fw-semibold">Zharonk R.A</a>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>