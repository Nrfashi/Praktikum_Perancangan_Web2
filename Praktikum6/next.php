<?php
session_start();

// Cek apakah session ada
if (!isset($_SESSION["nama"])) {
    echo "Session tidak ditemukan!<br>";
    echo '<a href="data.php">Klik di sini untuk kembali ke form</a>';
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>

<h1>Anda memasuki halaman kedua</h1>

<p>Nama Anda: <?php echo $_SESSION["nama"]; ?></p>
<p>Umur Anda saat ini adalah: <?php echo $_SESSION["umur"]; ?> tahun</p>
<p>Alamat email Anda adalah: <?php echo $_SESSION["email"]; ?></p>

<br>
<a href="data.php">Klik di sini untuk kembali ke form</a>

</body>
</html>
