<?php
session_start();

$nama = $_POST["nama"];
$umur = $_POST["umur"];
$email = $_POST["email"];

$_SESSION["nama"] = $nama;
$_SESSION["umur"] = $umur;
$_SESSION["email"] = $email;
?>

<!DOCTYPE html>
<html>
<body>

<h1>Hallo <?php echo $_SESSION["nama"]; ?></h1>
<h2>Selamat Datang Di Situs Kami</h2>

<?php
echo "Umur Anda saat ini adalah " . $_SESSION["umur"] . " tahun<br>";
echo "Alamat email Anda adalah " . $_SESSION["email"] . "<br>";
?>

<br>
<a href="next.php">Klik di sini</a> untuk menuju ke halaman berikut.

</body>
</html>
