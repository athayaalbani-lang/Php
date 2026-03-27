<?php

function jumlahkan($angka1, $angka2) {
    return $angka1 + $angka2;
}

echo "Hasil 10 + 15 = " . jumlahkan(10, 15) . "\n";
echo "Hasil 100 + 45 = " . jumlahkan(100, 45) . "\n\n";

function panjangString($teks) {
    return strlen($teks);
}

echo "Panjang string 'Pemrograman PHP': " . panjangString("Pemrograman PHP") . " karakter\n";
echo "Panjang string 'Universitas': " . panjangString("Universitas") . " karakter\n";
?>