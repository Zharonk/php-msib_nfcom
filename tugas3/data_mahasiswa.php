<?php
// array scalar
$m1 = ["nama" => "Achmad Izhar", "nim" => "011021901", "nilai" => 100];
$m2 = ["nama" => "Zharonk", "nim" => "011021902", "nilai" => 90];
$m3 = ["nama" => "Zhafia", "nim" => "011021903", "nilai" => 80];
$m4 = ["nama" => "Azzam", "nim" => "011021904", "nilai" => 70];
$m5 = ["nama" => "Eka", "nim" => "011021905", "nilai" => 60];
$m6 = ["nama" => "Fadli", "nim" => "011021906", "nilai" => 50];
$m7 = ["nama" => "Alvi", "nim" => "011021907", "nilai" => 40];
$m8 = ["nama" => "Pajar", "nim" => "011021908", "nilai" => 30];
$m9 = ["nama" => "Ali", "nim" => "011021909", "nilai" => 20];
$m10 = ["nama" => "Nisa", "nim" => "011021910", "nilai" => 10];
$ar_judul = ["No", "NIM", "Nama", "Nilai", "Keterangan", "Grade", "Predikat"];

// array assoc
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

// Fungsi Aggregate
$totalMahasiswa = count($mahasiswa);
$jumlahNilai = array_column($mahasiswa, 'nilai');
$nilaiTertinggi = max($jumlahNilai);
$nilaiTerendah = min($jumlahNilai);
$totalNilai = array_sum($jumlahNilai);
$nilaiRataRata = $totalNilai / $totalMahasiswa;

$result = [
    'Nilai Tertinggi' => $nilaiTertinggi,
    'Nilai Terendah' => $nilaiTerendah,
    'Nilai Rata-rata' => $nilaiRataRata,
    'Jumlah Mahasiswa' => $totalMahasiswa
]
?>

<h3 align="center">Data Mahasiswa</h3>
<table align="center" width="50%" cellspacing="2" cellpadding="5" border="1">
    <thead>
        <tr style="background-color: #F2F2F2;">
            <?php
            foreach ($ar_judul as $judul) {

            ?>
                <th><?= $judul ?></th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($mahasiswa as $m) {
            $nilai = $m['nilai'];
            // Grade
            if ($nilai > 85 && $nilai <= 100) $grade = "A";
            elseif ($nilai > 75 && $nilai <= 85) $grade = "B";
            elseif ($nilai > 75 && $nilai <= 85) $grade = "B";
            elseif ($nilai > 60 && $nilai <= 75) $grade = "C";
            elseif ($nilai > 40 && $nilai <= 60) $grade = "D";
            else $grade = "E";

            // lulus or not
            // $lulus = ($grade == "A" || $grade == "B" || $grade == "C") ? "Lulus":"Gagal";
            $lulus = ($nilai >= 60) ? "Lulus" : "Gagal";
            $warna = ($lulus == "Lulus") ? "#A8EAD5":"#F95A37";

            // Predikat
            switch ($grade) {
                case 'A':
                    $predikat = "Memuaskan";
                    break;
                case 'B':
                    $predikat = "Bagus";
                    break;
                case 'C':
                    $predikat = "Cukup";
                    break;
                case 'D':
                    $predikat = "Kurang";
                    break;
                case 'E':
                    $predikat = "Buruk";
                    break;

                default:
                    $predikat = "Silahkan ikut Ujian";
                    break;
            }

        ?>
            <tr style="text-align: center; background-color: <?= $warna ?>;">

                <td><?= $no; ?></td>
                <td><?= $m['nim']; ?></td>
                <td><?= $m['nama']; ?></td>
                <td><?= number_format($m['nilai']); ?></td>
                <td><?= $lulus ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
        <?php $no++;
        } ?>
    </tbody>
    <tfoot>
        <?php foreach ($result as $key => $value) { 
            ?>
        <tr style="background-color: #F2F2F2;">
            <th colspan="6" align="left">
                <?= $key ?>
            </th>
            <th>
                <?= $value ?>
            </th>
                <?php } ?>
        </tr>
    </tfoot>
</table>
