<?php
include "koneksi.php";

// Ambil ID produk dari URL
$id_produk = isset($_GET['id']) ? $_GET['id'] : 0; // Pastikan ID ada

// Query untuk mengambil data produk berdasarkan ID
// PERINGATAN: Kode ini rentan SQL Injection jika $id_produk tidak divalidasi.
$sql = "SELECT id_produk, nama_produk, harga, stok FROM produk WHERE id_produk=$id_produk";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    // Jika produk tidak ditemukan, arahkan kembali atau tampilkan pesan error
    echo "<!DOCTYPE html><html><head><title>Error</title>";
    echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'></head><body>";
    echo "<div class='container mt-5'><div class='alert alert-danger' role='alert'>";
    echo "<h5>Produk tidak ditemukan atau ID tidak valid!</h5>";
    echo "<a href='index.php' class='btn btn-primary'>Kembali ke Daftar Produk</a>";
    echo "</div></div></body></html>";
    exit();
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4 text-center">Edit Data Produk</h1>
        <form action="proses_edit.php" method="post">
            <input type="hidden" name="id_produk" value="<?php echo htmlspecialchars($row['id_produk']); ?>">

            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk:</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?php echo htmlspecialchars($row['nama_produk']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?php echo htmlspecialchars($row['harga']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="stok" class="form-label">Stok:</label>
                <input type="number" class="form-control" id="stok" name="stok" value="<?php echo htmlspecialchars($row['stok']); ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Produk</button>
            <a href="index.php" class="btn btn-secondary ms-2">Batal</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>