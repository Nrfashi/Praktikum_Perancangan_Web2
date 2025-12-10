<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan1_praktikum4"; // sesuaikan dengan nama database kamu

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("<h3 style='color:red;'>Koneksi gagal: " . $conn->connect_error . "</h3>");
}

// Ambil data dari form
$name = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';
$website = $_POST['website'] ?? '';
$comment = $_POST['comment'] ?? '';

// Cek apakah semua field terisi
if ($name && $email && $website && $comment) {
    $sql = "INSERT INTO Fomulir_Validation_Exmple (nama, email, website, comment,gender)
            VALUES ('$nama', '$email', '$website', '$comment', '$gender')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<h2> Data berhasil disimpan!</h2>";
        echo "<a href='fomulir_validation_exmple.php'>← Kembali ke Form</a>";
    } else {
        echo "<h2> Terjadi kesalahan: " . $conn->error . "</h2>";
    }
} else {
    echo "<h3 style='color:orange;'>⚠️ Semua field wajib diisi!</h3>";
    echo "<a href='fomulir_validation_exmple.php'>← Kembali ke Form</a>";
}

$conn->close();
?>
