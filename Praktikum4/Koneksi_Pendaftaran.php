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
$nama_lengkap = $_POST['nama_lengkap'] ?? '';
$email = $_POST['email'] ?? '';
$tanggal_lahir = $_POST['tanggal_lahir'] ?? '';
$alamat = $_POST['alamat'] ?? '';
$program_yang_dipilih = $_POST['program_yang_dipilih'] ?? '';

// Cek apakah semua field terisi
if ($nama_lengkap && $email && $tanggal_lahir && $alamat && $program_yang_dipilih) {
    $sql = "INSERT INTO data_pendaftaran_sekolah (nama_lengkap, email, tanggal_lahir, alamat, program_yang_dipilih)
            VALUES ('$nama_lengkap', '$email', '$tanggal_lahir', '$alamat', '$program_yang_dipilih')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<h2> Data berhasil disimpan!</h2>";
        echo "<a href='Formulir_Pendaftaran_Sekolah.php'>← Kembali ke Form</a>";
    } else {
        echo "<h2> Terjadi kesalahan: " . $conn->error . "</h2>";
    }
} else {
    echo "<h3 style='color:orange;'>⚠️ Semua field wajib diisi!</h3>";
    echo "<a href='Formulir_Pendaftaran_Sekolah.php'>← Kembali ke Form</a>";
}

$conn->close();
?>
