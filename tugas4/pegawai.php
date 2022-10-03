<?php
    class Pegawai {
        public $nip_pegawai;
        public $nama;
        public $jabatan;
        public $agama;
        public $status;

        const judul = 'Data Gaji Pegawai';

        public function __construct($nip_pegawai, $nama, $jabatan, $agama, $status){
            $this->nip_pegawai = $nip_pegawai;
            $this->nama = $nama;
            $this->jabatan = $jabatan;
            $this->agama = $agama;
            $this->status = $status;
        }

        public function setGaji_pokok() {
            switch ($this->jabatan) {
                case 'Manager': 
                    $gaji_pokok = 15000000; 
                    break;
                case 'Asisten Manager': 
                    $gaji_pokok = 10000000; 
                    break;
                case 'Kepala Bagian': 
                    $gaji_pokok = 7000000; 
                    break;
                case 'Staff': 
                    $gaji_pokok = 4000000; 
                    break;
                default: 
                    $gaji_pokok = 0; 
                break;
            }
            return $gaji_pokok;
        }

        public function setTunjangan_jabatan() {
            $tunjangan_jabatan = $this->setGaji_pokok() * 0.2;
            return $tunjangan_jabatan;
        }

        public function setTunjangan_keluarga() {
            $tunjangan_keluarga = ($this->status == 'Menikah') ? $this->setGaji_pokok() * 0.1 : 0;
            return $tunjangan_keluarga;
        }

        public function setGaji_kotor() {
            $gaji_kotor = $this->setGaji_pokok() + $this->setTunjangan_jabatan() + $this->setTunjangan_keluarga();
            return $gaji_kotor;
        }

        public function setZakat_profesi() {
            $zakat_profesi = ($this->agama == 'Islam' && $this->setGaji_kotor() >= 6000000) ? $this->setGaji_kotor() * 0.025 : 0;
            return $zakat_profesi;
        }

        public function setTakeHomePay() {
            $takeHomePay = $this->setGaji_kotor() - $this->setZakat_profesi();
            return $takeHomePay;
        }

        public function mencetak() {
            echo '<h5 class="card-title fw-semibold mb-3">'.$this->nama.'</h5>';
            echo '<table width="100%">
                    <tr>
                        <td>NIP Pegawai</td><td>:&nbsp;&nbsp;&nbsp;'.$this->nip_pegawai.'</td>
                    </tr>
                    <tr>
                        <td>Jabatan Pegawai</td><td>:&nbsp;&nbsp;&nbsp;'.$this->jabatan.'</td>
                    </tr>
                    <tr>
                        <td>Agama</td><td>:&nbsp;&nbsp;&nbsp;'.$this->agama.'</td>
                    </tr>
                    <tr>
                        <td>Status</td><td>:&nbsp;&nbsp;&nbsp;'.$this->status.'</td>
                    </tr>
                    <tr>
                        <td>Gaji Pokok</td><td>:&nbsp;&nbsp;&nbsp;Rp. '.number_format($this->setGaji_kotor(), 0, ',', '.').'</td>
                    </tr>
                    <tr>
                        <td>Tunjangan Jabatan</td><td>:&nbsp;&nbsp;&nbsp;Rp. '.number_format($this->setTunjangan_jabatan(), 0, ',', '.').'</td>
                    </tr>
                    <tr>
                        <td>Tunjangan Keluarga</td><td>:&nbsp;&nbsp;&nbsp;Rp. '.number_format($this->setTunjangan_keluarga(), 0, ',', '.').'</td>
                    </tr>
                    <tr>
                        <td>Gaji Kotor</td><td>:&nbsp;&nbsp;&nbsp;Rp. '.number_format($this->setGaji_kotor(), 0, ',', '.').'</td>
                    </tr>
                    <tr>
                        <td>Zakat Profesi</td><td>:&nbsp;&nbsp;&nbsp;Rp. '.number_format($this->setZakat_profesi(), 0, ',', '.').'</td>
                    </tr>
                    <tr>
                        <td>Take Home Pay</td><td>:&nbsp;&nbsp;&nbsp;Rp. '.number_format($this->setTakeHomePay(), 0, ',', '.').'</td>
                    </tr>
                </table>';
        }
    }