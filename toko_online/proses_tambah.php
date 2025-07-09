<?php
include "koneksi.php";

// Mengambil data dari form
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

// Query untuk menyisipkan data (SANGAT RENTAN SQL INJECTION - GUNAKAN PREPARED STATEMENTS UNTUK PRODUKSI)
$sql = "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama_produk', '$harga', '$stok')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); // Arahkan kembali ke halaman utama jika berhasil
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    // Untuk debug, dalam produksi bisa diarahkan ke halaman error yang lebih user-friendly
}

$conn->close();
?>