<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2-php_nfCom_AchmadIzhar</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h3 class="text-center mt-5 text-primary">Form Input Data Pegawai</h3>
        <hr />

        <form class="row g-3" method="POST">
            <div class="col-md-6">
                <label for="inputName" class="form-label fw-bold">Nama Pegawai</label>
                <input type="text" class="form-control" id="inputName" name="nama" required />
            </div>

            <div class="col-md-6">
                <label for="inputAgama" class="form-label fw-bold">Agama</label>
                <select id="inputAgama" name="agama" class="form-select" required>
                    <option value="" selected>-- Pilih Agama --</option>
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label d-block fw-bold">Jabatan</label>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="manager" type="radio" name="jabatan" value="Manager" required />
                    <label class="form-check-label" for="manager">Manager</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="asisten" type="radio" name="jabatan" value="Asisten" required />
                    <label class="form-check-label" for="asisten">Asisten</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="kabag" type="radio" name="jabatan" value="Kepala Bagian" required />
                    <label class="form-check-label" for="kabag">Kepala Bagian</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="staff" type="radio" name="jabatan" value="Staff" required />
                    <label class="form-check-label" for="staff">Staff</label>
                </div>
            </div>

            <div class="col-md-6">
                <label class="form-label d-block fw-bold">Status</label>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="menikah" type="radio" name="status" value="Menikah" required />
                    <label class="form-check-label" for="menikah">Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="belumMenikah" type="radio" name="status" value="Belum Menikah" required />
                    <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
                </div>
            </div>

            <div class="col-12">
                <label for="inputAnak" class="form-label fw-bold">Jumlah Anak</label>
                <input type="number" class="form-control" id="inputAnak" name="jumlahAnak" />
            </div>

            <div class="col-12">
                <button type="submit" name="proses" class="btn btn-sm btn-primary">Simpan</button>
            </div>
        </form>

        <?php
            error_reporting(0);
            // declare for request
            $nama = $_POST['nama'];
            $agama = $_POST['agama'];
            $jabatan = $_POST['jabatan'];
            $status = $_POST['status'];
            $jumlahAnak = $_POST['jumlahAnak'];
            $tombol = $_POST['proses'];

            switch ($jabatan) {
                case "Manager": $gajiPokok = 20000000; break;
                case "Asisten": $gajiPokok = 15000000; break;
                case "Kepala Bagian": $gajiPokok = 10000000; break;
                case "Staff": $gajiPokok = 4000000; break;
                default: $gajiPokok = 0; break;
            }

            if ($status == "Menikah" && $jumlahAnak <= 2) $tunjanganKeluarga = $gajiPokok * 5 / 100;
            else if ($status == "Menikah" && $jumlahAnak <= 5) $tunjanganKeluarga = $gajiPokok * 10 / 100;
            else if ($status == "Menikah" && $jumlahAnak > 5) $tunjanganKeluarga = $gajiPokok * 15 / 100;
            else $tunjanganKeluarga = 0;

            $tunjanganJabatan = $gajiPokok * 20 / 100;
            $gajiKotor = $gajiPokok + $tunjanganJabatan + $tunjanganKeluarga;
            $zakatProfesi = $agama == "islam" && $gajiKotor >= 6000000 ? $gajiKotor * 2.5 / 100 : 0;
            $takeHomePay = $gajiKotor - $zakatProfesi;

            if (isset($tombol)) { 
        ?>
            <div class="table-responsive rounded my-5">
                <table class="table table-bordered mb-2">
                    <thead>
                        <tr class="text-dark bg-warning">
                            <th>Nama Pegawai</th>
                            <th>Jabatan</th>
                            <th>Agama</th>
                            <th>Status</th>
                            <th>Jumlah Anak</th>
                            <th>Gaji Pokok</th>
                            <th>Tunjangan Jabatan</th>
                            <th>Tunjangan Keluarga</th>
                            <th>Gaji Kotor</th>
                            <th>Zakat Profesi</th>
                            <th>Take Home Pay</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-light bg-dark">
                            <td><?= $nama; ?> </td>
                            <td><?= $jabatan; ?></td>
                            <td><?= $agama; ?>
                            <td><?= $status; ?></td>
                            <td><?= $jumlahAnak; ?></td>
                            <td><?= 'Rp ',number_format($gajiPokok, 2, ',', '.'); ?></td>
                            <td><?= 'Rp ',number_format($tunjanganJabatan, 2, ',', '.'); ?></td>
                            <td><?= 'Rp ',number_format($tunjanganKeluarga, 2, ',', '.'); ?></td>
                            <td><?= 'Rp ',number_format($gajiKotor, 2, ',', '.'); ?></td>
                            <td><?= 'Rp ',number_format($zakatProfesi, 2, ',', '.'); ?></td>
                            <td><?= 'Rp ',number_format($takeHomePay, 2, ',', '.'); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php } ?>
    </div>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>