<?php
// Inisialisasi variabel
$angka = 1;

// Menggunakan do-while loop untuk mencetak angka ganjil
do {
    // Cek apakah angka adalah ganjil
    if ($angka % 2 != 0) {
        // Menampilkan angka ganjil
        echo $angka . "<br>";
    }
    // Menambahkan angka untuk iterasi berikutnya
    $angka++;
} while ($angka <= 101); // Kondisi loop
?>