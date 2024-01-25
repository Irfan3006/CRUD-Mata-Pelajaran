<?php
include 'koneksi.php';

if (isset($_POST['nama_guru']) && isset($_POST['id_guru'])) {
    $id_guru = $_POST['id_guru'];
    $new_nama_guru = $_POST['nama_guru'];

    
    $update_query = "UPDATE tbl_guru SET nama_guru = '$new_nama_guru' WHERE id_guru = $id_guru";

if (mysqli_query($koneksi, $update_query)) {
    header("Location: tambah_guru.php"); 
} else {
    echo "Error: " . $update_query . "<br>" . mysqli_error($koneksi);
}

}

mysqli_close($koneksi);
?>
