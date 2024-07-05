<?php
$nama = $_POST['nama'];
$dokter = $_POST['dokter'];
$tanggal = $_POST['tanggal'];

// Menyimpan data dalam file .txt
$file = fopen("reservasi.txt", "a");
fwrite($file, "Nama: $nama, Dokter: $dokter, Tanggal: $tanggal\n");
fclose($file);

echo "Janji berhasil dibuat!";
