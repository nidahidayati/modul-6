<?php
$servername = "localhost"; // Server database (biasanya localhost)
$username = "root"; // Username database (default di Laragon)
// Password database (default di Laragon kosong)
$password = "";
$dbname = "db_perusahaan"; // Nama database yang sudah dibuat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>