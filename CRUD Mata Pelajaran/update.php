<?php
include 'koneksi.php';

// Pastikan data yang diterima dari formulir edit.php tidak kosong
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['id_jadwal']) && !empty($_POST['mapel']) && !empty($_POST['guru']) && !empty($_POST['siswa'])) {
    // Ambil data yang diterima dari formulir
    $id_jadwal = $_POST['id_jadwal'];
    $mapel = $_POST['mapel'];
    $guru = $_POST['guru'];
    $siswa = $_POST['siswa'];

    // Perbarui data jadwal di database
    $query = "UPDATE jadwal SET id_mata_pelajaran = '$mapel', id_guru = '$guru', id_siswa = '$siswa' WHERE id_jadwal = '$id_jadwal'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Jika pembaruan berhasil, arahkan kembali ke halaman index.php atau halaman lain yang sesuai
        header('Location: index.php');
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan kesalahan
        echo "Gagal memperbarui data jadwal: " . mysqli_error($koneksi);
    }
} else {
    // Jika data yang diterima tidak lengkap, tampilkan pesan kesalahan
    echo "Semua kolom harus diisi.";
}
?>