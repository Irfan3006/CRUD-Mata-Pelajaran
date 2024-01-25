<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pastikan data POST yang diterima sesuai dengan yang diharapkan
    if (isset($_POST['id_siswa']) && isset($_POST['nama_murid'])) {
        $id_siswa = $_POST['id_siswa'];
        $nama_murid = $_POST['nama_murid'];

        // Query untuk mengupdate data murid berdasarkan ID
        $update_query = "UPDATE tbl_siswa SET nama_siswa = '$nama_murid' WHERE id_siswa = $id_siswa";

        if (mysqli_query($koneksi, $update_query)) {
            header("Location: tambah_siswa.php");
        } else {
            echo "Error: " . $update_query . "<br>" . mysqli_error($koneksi);
        }
    } else {
        echo "Data yang diterima tidak valid.";
    }
} else {
    echo "Aksi ini tidak diizinkan.";
}

mysqli_close($koneksi);
?>
