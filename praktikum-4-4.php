<?php
$jurusan = [
    "teknik informatika", 
    "teknik komputer", 
    "ilmu komputer", 
    "sistem informasi", 
    "teknologi informasi", 
    "pendidikan teknologi informasi"
];

echo "Daftar Jurusan (Indexed Array):\n";
foreach ($jurusan as $jrs) {
    echo "- " . ucwords($jrs) . "\n";
}
echo "\n";

$nilai_mahasiswa = [
    "Joko" => 85,
    "Siti" => 92,
    "Rudi" => 78,
    "Ayu" => 88
];

echo "Data Nilai Ujian (Associative Array):\n";
foreach ($nilai_mahasiswa as $nama => $nilai) {
    echo "Nama: {$nama}, Nilai: {$nilai}\n";
}
?>