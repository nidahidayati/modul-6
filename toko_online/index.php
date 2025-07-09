<!DOCTYPE html>
<html>
<head>
    <title>Data Produk Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4 text-center">Daftar Produk Toko Online</h1>
        <a href="tambah.php" class="btn btn-primary mb-3">Tambah Produk Baru</a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";

                    $sql = "SELECT id_produk, nama_produk, harga, stok FROM produk";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id_produk"] . "</td>";
                            echo "<td>" . htmlspecialchars($row["nama_produk"]) . "</td>";
                            echo "<td>Rp " . number_format($row["harga"], 0, ',', '.') . "</td>";
                            echo "<td>" . $row["stok"] . "</td>";
                            echo "<td class='text-center'>";
                            echo "<a href='edit.php?id=" . $row["id_produk"] . "' class='btn btn-warning btn-sm me-1'>Edit</a>";
                            echo "<a href='hapus.php?id=" . $row["id_produk"] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus produk " . htmlspecialchars($row["nama_produk"]) . "?\")' class='btn btn-danger btn-sm'>Hapus</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' class='text-center text-muted'>Tidak ada data produk.</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>