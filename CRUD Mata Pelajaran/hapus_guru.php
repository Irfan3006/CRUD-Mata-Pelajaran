<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id_guru = $_GET['id'];

    // Hapus data guru dari tabel tbl_guru berdasarkan ID
    $sql = "DELETE FROM tbl_guru WHERE id_guru = $id_guru";

    if ($koneksi->query($sql) === TRUE) {
        // Setelah menghapus data, kembali ke halaman "hasil_input_guru.php" atau halaman lain yang sesuai
        header("Location: tambah_guru.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "Parameter ID tidak diberikan.";
}

$koneksi->close();
?>
