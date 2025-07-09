<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4 text-center">Tambah Produk Baru</h1>
        <form action="proses_tambah.php" method="post">
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk:</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>

            <div class="mb-3">
                <label for="stok" class="form-label">Stok:</label>
                <input type="number" class="form-control" id="stok" name="stok" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan Produk</button>
            <a href="index.php" class="btn btn-secondary ms-2">Batal</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>