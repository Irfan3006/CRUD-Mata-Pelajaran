<?php 
// Koneksi database
include 'koneksi.php';

// Menangkap data id yang dikirim dari URL
$id = $_GET['id_jadwal'];

// Pastikan ID adalah numerik
if (is_numeric($id)) {
    // Hapus data dari tabel jadwal
    $sql = "DELETE FROM jadwal WHERE id_jadwal = $id";
    if (mysqli_query($koneksi, $sql)) {
        // Penghapusan berhasil, alihkan kembali ke index.php
        header("location:index.php");
    } else {
        // Jika terjadi kesalahan saat menjalankan query DELETE
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "ID tidak valid.";
}
?>