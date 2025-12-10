<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Gambar</title>

    <style>
        table {
            border-collapse: collapse;
            width: 400px;
            margin: 50px auto;
            font-family: Arial;
        }
        th {
            background: #f0f0f0;
            padding: 10px;
            font-size: 18px;
        }
        td {
            border: 1px solid #ccc;
            padding: 10px;
        }
        input[type="text"], input[type="file"] {
            width: 95%;
        }
        input[type="submit"] {
            padding: 8px 15px;
            background: #4CAF50;
            border: none;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #45a049;
        }
    </style>

</head>
<body>

<form method="post" action="proses.php" enctype="multipart/form-data">
    <table>
        <tr>
            <th colspan="2">SIMPAN & TAMPIL GAMBAR</th>
        </tr>

        <tr>
            <td>Masukan Nama</td>
            <td>Pilih Foto</td>
        </tr>

        <tr>
            <td><input type="text" name="nama" placeholder="Masukan nama" required></td>
            <td><input type="file" name="foto" required></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value="SIMPAN"></td>
        </tr>
    </table>
</form>

</body>
</html>
