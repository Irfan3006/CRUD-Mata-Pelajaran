<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari tambah.php
$mata_pelajaran = $_POST['mata_pelajaran'];


// menginput data ke database
 // Simpan data baru ke tabel tbl_mata_pelajaran
    $sql = "INSERT INTO tbl_mata_pelajaran (mata_pelajaran) VALUES ('$mata_pelajaran')";
    $koneksi->query($sql);
    $id_mata_pelajaran = $koneksi->insert_id;

    // Simpan data baru ke tabel jadwal dengan ID yang sesuai
    $sql = "INSERT INTO jadwal (id_mata_pelajaran, id_guru, id_siswa) VALUES ('$id_mata_pelajaran', '$id_guru', '$id_siswa')";
    $koneksi->query($sql);
 
// mengalihkan halaman kembali ke awal index.php
header("location:tambah_mapel.php");
 
?>