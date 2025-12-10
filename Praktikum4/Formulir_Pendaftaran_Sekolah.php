<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir_Pendaftaran_Sekolah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Formulir Pendaftaran Sekolah</h2>
        <form action="Koneksi_Pendaftaran.php" method="POST">
            
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="program_yang_dipilih">Program yang Dipilih:</label>
                <select id="program_yang_dipilih" name="program_yang_dipilih" required>
                    <option value="">-- Pilih Program --</option>
                    <option value="Jurusan">Teknik Mesin</option>
                    <option value="Jurusan">Teknik Informatika</option>
                    <option value="Jurusan">Teknik Sipil</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit">Daftar</button>
            </div>
        </form>
    </div>
</body>
</html>
