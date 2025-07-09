<?php
include "koneksi.php";

// Mengambil id produk dari URL
$id_produk = $_GET['id'];

// Query untuk menghapus data (SANGAT RENTAN SQL INJECTION - GUNAKAN PREPARED STATEMENTS UNTUK PRODUKSI)
$sql = "DELETE FROM produk WHERE id_produk=$id_produk";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
    // Untuk debug, dalam produksi bisa diarahkan ke halaman error yang lebih user-friendly
}

$conn->close();
?>