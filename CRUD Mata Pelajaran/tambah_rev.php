<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Jadwal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Tambah Data Jadwal</h1>
        <form action="tambah_aksi_rev.php" method="POST">
            <div class="mb-3">
                <label for="id_mata_pelajaran" class="form-label">Mata Pelajaran:</label>
                <select name="id_mata_pelajaran" class="form-select">
                    <?php
                    $sql = "SELECT * FROM tbl_mata_pelajaran";
                    $result = $koneksi->query($sql);
                    while ($mata_pelajaran = $result->fetch_assoc()) {
                        echo '<option value="' . $mata_pelajaran["id_mata_pelajaran"] . '">' . $mata_pelajaran["mata_pelajaran"] . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="id_guru" class="form-label">Guru:</label>
                <select name="id_guru" class="form-select">
                    <?php
                    $sql = "SELECT * FROM tbl_guru";
                    $result = $koneksi->query($sql);
                    while ($guru = $result->fetch_assoc()) {
                        echo '<option value="' . $guru["id_guru"] . '">' . $guru["nama_guru"] . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="id_siswa" class="form-label">Siswa:</label>
                <select name="id_siswa" class="form-select">
                    <?php
                    $sql = "SELECT * FROM tbl_siswa";
                    $result = $koneksi->query($sql);
                    while ($siswa = $result->fetch_assoc()) {
                        echo '<option value="' . $siswa["id_siswa"] . '">' . $siswa["nama_siswa"] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-4">SIMPAN</button>
            <a href="index.php" class="btn btn-secondary mt-4">KEMBALI</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
