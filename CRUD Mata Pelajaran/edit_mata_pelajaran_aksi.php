<?php
include 'koneksi.php';

    // Periksa apakah ID mata pelajaran dan nama mata pelajaran ada dalam data POST
    if (isset($_POST['id_mata_pelajaran']) && isset($_POST['nama_mata_pelajaran'])) {
        $id_mata_pelajaran = $_POST['id_mata_pelajaran'];
        $nama_mapel = $_POST['nama_mata_pelajaran'];

        // Query untuk memperbarui mata pelajaran berdasarkan ID
        $update_query = "UPDATE tbl_mata_pelajaran SET mata_pelajaran = '$nama_mapel' WHERE id_mata_pelajaran = $id_mata_pelajaran";

        if (mysqli_query($koneksi, $update_query)) {
            header("Location: tambah_mapel.php");
        } else {
            echo "Error: " . $update_query . "<br>" . mysqli_error($koneksi);
        }
    } else {
        echo "Data tidak lengkap. Silakan isi semua informasi yang diperlukan.";
    }

mysqli_close($koneksi);
?>
