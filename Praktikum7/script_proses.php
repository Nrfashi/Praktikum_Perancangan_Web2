<?php
include('koneksi.php');

// Ambil nama dari form
$nama = trim($_POST['nama']);

// Validasi nama
if (empty($nama)) {
    die("Nama masih kosong. <a href='input_foto.php'>Kembali</a>");
}

// Cek apakah file diupload
if (!isset($_FILES['foto']) || $_FILES['foto']['error'] != 0) {
    die("File foto belum dipilih atau gagal diupload. <a href='input_foto.php'>Kembali</a>");
}

// Data file
$file     = $_FILES['foto']['name'];
$tmp_dir  = $_FILES['foto']['tmp_name'];
$ukuran   = $_FILES['foto']['size'];

// Folder simpan
$direktori = 'gambar/';

// Buat nama file acak
$ekstensi = strtolower(pathinfo($file, PATHINFO_EXTENSION));
$gambar   = rand(1000,1000000) . "." . $ekstensi;

// Validasi ekstensi
$valid_ekstensi = array('jpeg','jpg','png','gif');
if (!in_array($ekstensi, $valid_ekstensi)) {
    die("Ekstensi file tidak valid. Hanya jpg, jpeg, png, gif. <a href='input_foto.php'>Kembali</a>");
}

// Validasi ukuran max 1MB
if ($ukuran > 1000000) {
    die("Ukuran file terlalu besar (maks 1MB). <a href='input_foto.php'>Kembali</a>");
}

// Pindahkan file ke folder
if (!move_uploaded_file($tmp_dir, $direktori . $gambar)) {
    die("Gagal menyimpan file. <a href='input_foto.php'>Kembali</a>");
}

// Simpan ke database
$perintah = sprintf(
    "INSERT INTO namasiswa VALUES('null','%s','%s')",
    mysql_real_escape_string($nama),
    mysql_real_escape_string($gambar)
);
$query = @mysql_query($perintah, $koneksi);

if (!$query) {
    die("Gagal menyimpan ke database: " . mysql_error());
}

// Tampilkan hasil
echo "Berhasil disimpan!<br/>";
echo "Nama: $nama <br/>";
echo "<img src='$direktori$gambar' height='200'><br/>";
echo "<a href='tampil_foto.php'>Lihat Halaman Berikutnya</a>";
?>
