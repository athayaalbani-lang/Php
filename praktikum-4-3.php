<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $prodi;

    public function __construct($nim, $nama, $prodi) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }

    public function kuliah() {
        echo "{$this->nama} sedang mengikuti perkuliahan dengan khusyuk.\n";
    }

    public function ujian() {
        echo "Mahasiswa dengan NIM {$this->nim} sedang serius mengerjakan ujian.\n";
    }

    public function praktikum() {
        echo "{$this->nama} dari prodi {$this->prodi} sedang melaksanakan praktikum web.\n";
    }
}

$mhs1 = new Mahasiswa("123456", "Andi Syahputra", "Sistem Informasi");
$mhs2 = new Mahasiswa("654321", "Bunga Citra", "Teknik Informatika");

echo "Aktivitas Mahasiswa 1:\n";
$mhs1->kuliah();
$mhs1->ujian();

echo "\nAktivitas Mahasiswa 2:\n";
$mhs2->praktikum();
?>