<?php
// Panggil file koneksi
require_once 'koneksi.php';

// Query untuk menampilkan semua data dari tabel barang
$sql = "SELECT * FROM barang";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .table-container {
            overflow-x: auto; /* agar bisa digeser di HP */
            margin: auto;
            max-width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            min-width: 400px;
        }

        th, td {
            padding: 10px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            white-space: nowrap;
        }

        th {
            background: #4CAF50;
            color: white;
            font-weight: 600;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        .no-data {
            text-align: center;
            padding: 15px;
            background: #ffeaea;
            color: #d00;
            border-radius: 10px;
            margin: 20px auto;
            width: fit-content;
        }

        /* Mobile Style */
        @media (max-width: 600px) {
            table {
                border: none;
                box-shadow: none;
            }

            th {
                display: none; /* Sembunyikan header tabel di layar kecil */
            }

            tr {
                display: block;
                background: white;
                margin-bottom: 15px;
                border-radius: 10px;
                box-shadow: 0 1px 4px rgba(0,0,0,0.1);
                overflow: hidden;
            }

            td {
                display: flex;
                justify-content: space-between;
                padding: 12px;
                border: none;
                border-bottom: 1px solid #eee;
                font-size: 14px;
            }

            td::before {
                content: attr(data-label);
                font-weight: bold;
                color: #555;
                flex-basis: 40%;
            }

            td:last-child {
                border-bottom: none;
            }
        }
    </style>
</head>
<body>

    <h2>📦 Daftar Barang</h2>

    <div class="table-container">
    <?php
    if ($result && mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>
                <th>No</th>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga</th>
              </tr>";

        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td data-label='No'>" . $no++ . "</td>";
            echo "<td data-label='ID Barang'>" . htmlspecialchars($row['id_brg']) . "</td>";
            echo "<td data-label='Nama Barang'>" . htmlspecialchars($row['nama_brg']) . "</td>";
            echo "<td data-label='Stok'>" . htmlspecialchars($row['stok']) . "</td>";
            echo "<td data-label='Harga'>" . htmlspecialchars($row['harga']) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<div class='no-data'>Data tidak ditemukan.</div>";
    }

    mysqli_close($koneksi);
    ?>
    </div>

</body>
</html>