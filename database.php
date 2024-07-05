<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rumahsakit";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT nama, spesialisasi, jadwal FROM dokter";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Nama: " . $row["nama"] . " - Spesialisasi: " . $row["spesialisasi"] . " - Jadwal: " . $row["jadwal"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
