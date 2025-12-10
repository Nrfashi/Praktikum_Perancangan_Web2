<?php
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_brg = $_POST['id_brg'];
    $nama_brg = $_POST['nama_brg'];
    $stok = $_POST['stok'];

    // Query insert data
    $sql = "INSERT INTO barang (id_brg, nama_brg, stok) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, "ssii", $id_brg, $nama_brg, $stok);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='tampil.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data.');</script>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Barang</title>
<style>
    body {
        font-family: 'Segoe UI', Arial, sans-serif;
        background-color: #f3f4f6;
        margin: 0;
        padding: 20px;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 30px;
    }

    form {
        background: white;
        max-width: 480px;
        margin: auto;
        padding: 25px 30px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .form-group {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    label {
        flex: 1;
        color: #333;
        font-weight: 500;
    }

    input {
        flex: 1.5;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 6px;
        text-align: right; /* rata kanan */
    }

    .btn-submit {
        width: 100%;
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 15px;
    }

    .btn-submit:hover {
        background-color: #0056b3;
    }

    .back-link {
        display: block;
        text-align: center;
        margin-top: 15px;
        color: #333;
        text-decoration: none;
        font-size: 14px;
    }

    .back-link:hover {
        color: #007bff;
    }

    /* Mobile-friendly */
    @media (max-width: 600px) {
        .form-group {
            flex-direction: column;
            align-items: flex-start;
        }

        label {
            margin-bottom: 6px;
        }

        input {
            width: 100%;
            text-align: left;
        }
    }
</style>
</head>
<body>

    <h2>📝 Tambah Barang</h2>

    <form method="POST" action="">
        <div class="form-group">
            <label for="id_brg">ID Barang:</label>
            <input type="text" id="id_brg" name="id_brg" required>
        </div>

        <div class="form-group">
            <label for="nama_brg">Nama Barang:</label>
            <input type="text" id="nama_brg" name="nama_brg" required>
        </div>

        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" required>
        </div>

        <button type="submit" class="btn-submit">💾 Simpan</button>

        <a href="view_mobile.php" class="back-link">⬅ Kembali ke Daftar Barang</a>
    </form>

</body>
</html>
